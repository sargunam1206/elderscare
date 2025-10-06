<?php

namespace App\Controllers;

use App\Models\WalletModel;
use App\Models\GuestPersonalModel;
use App\Models\RoomsInfoModel;
use App\Models\TransactionInfoModel;
use App\Models\ServiceBookModel;
use App\Models\BillModel;

class Wallet extends BaseController
{
   

    public function __construct()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        $this->session = \Config\Services::session();
        $this->WalletModel = new WalletModel();
        $this->guestpersonal = new GuestPersonalModel();
        $this->rooms = new RoomsInfoModel();
        $this->transaction = new TransactionInfoModel();
        $this->servicebook = new ServiceBookModel();
        $this->billModel = new BillModel(); // Add BillModel

         $this->db = \Config\Database::connect(); // connect DB here
         $session = \Config\Services::session();
    }

    //method to generate wallet transaction bills
    public function generateWalletBill()
    {
        // Enable detailed error reporting for debugging
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Check if it's an AJAX request
        if (!$this->request->isAJAX()) {
            log_message('error', 'Generate Wallet Bill: Non-AJAX request received');
            return $this->response->setStatusCode(405)->setJSON([
                'success' => false,
                'message' => 'Method not allowed'
            ]);
        }

        $transactionId = $this->request->getPost('transaction_id');
        
        log_message('debug', 'Generate Wallet Bill: Transaction ID received - ' . $transactionId);
        
        if (empty($transactionId)) {
            log_message('error', 'Generate Wallet Bill: Empty transaction ID');
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Transaction ID is required'
            ]);
        }

        try {
            // Check if bill already exists for this transaction
            $existingBill = $this->billModel->where('reference_id', $transactionId)
                                           ->where('reference_service', 'Wallet')
                                           ->where('deleted_on', null)
                                           ->first();
            
            log_message('debug', 'Generate Wallet Bill: Existing bill check - ' . ($existingBill ? 'Exists' : 'Not exists'));
            
            if ($existingBill) {
                return $this->response->setJSON([
                    'success' => true,
                    'bill_id' => $existingBill['bill_id'],
                    'message' => 'Bill already exists'
                ]);
            }

            // Get transaction details with guest info
            $transactionDetails = $this->transaction
                ->select('transactions.*, guests_personal.first_name, guests_personal.last_name, guests_personal.contact, rooms.room_no, wallets.balance, wallets.guest_id')
                ->join('wallets', 'wallets.wallet_id = transactions.wallet_id', 'left')
                ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id', 'left')
                ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id', 'left')
                ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id', 'left')
                ->join('rooms', 'rooms.room_no = advance_bookings.room', 'left')
                ->where('transactions.transaction_id', $transactionId)
                ->where('transactions.payment_status', 'success')
                ->first();

            log_message('debug', 'Generate Wallet Bill: Transaction details found - ' . ($transactionDetails ? 'Yes' : 'No'));

            if (!$transactionDetails) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Transaction not found'
                ]);
            }

            // Prepare bill data
            $billData = [
                'bill_no' => $this->billModel->getNextBillNo(),
                'bill_date' => date('Y-m-d H:i:s'),
                'total_amount' => $transactionDetails['amount'],
                'paid_amount' => $transactionDetails['amount'],
                'payment_status' => 'paid',
                'reference_service' => 'Wallet',
                'reference_id' => $transactionId
            ];

            log_message('debug', 'Generate Wallet Bill: Bill data prepared - ' . print_r($billData, true));

            // Insert bill
            if ($this->billModel->insert($billData)) {
                $billId = $this->billModel->getInsertID();
                
                log_message('debug', 'Generate Wallet Bill: Bill inserted successfully - ID: ' . $billId);
                
                return $this->response->setJSON([
                    'success' => true,
                    'bill_id' => $billId,
                    'message' => 'Bill generated successfully'
                ]);
            } else {
                $errors = $this->billModel->errors();
                log_message('error', 'Generate Wallet Bill: Insert failed - ' . print_r($errors, true));
                
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Failed to generate bill: ' . implode(', ', $errors)
                ]);
            }

        } catch (\Exception $e) {
            log_message('error', 'Generate Wallet Bill Exception: ' . $e->getMessage());
            log_message('error', 'Generate Wallet Bill Trace: ' . $e->getTraceAsString());
            
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Server error: ' . $e->getMessage()
            ]);
        }
    }

    public function viewWalletBill($billId = null)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        if (empty($billId)) {
            $billId = $this->request->getGet('bill_id');
        }

        if (empty($billId)) {
            return redirect()->back()->with('error', 'Bill ID is required');
        }

        // Get bill details
        $billData = $this->billModel->getBillWithDetails($billId);
        
        if (!$billData) {
            return redirect()->back()->with('error', 'Bill not found');
        }

        // Get transaction details using the reference_id (transaction_id)
        $transactionDetails = $this->getTransactionDetails($billData['reference_id']);
        
        if (!$transactionDetails) {
            return redirect()->back()->with('error', 'Transaction not found');
        }

        $data = [
            'bill' => $billData,
            'transaction' => $transactionDetails,
            'transaction_type' => $transactionDetails['type'] ?? 'credit'
        ];

        // Check if PDF download is requested
        if ($this->request->getGet('download') === 'pdf') {
            return $this->generateWalletBillPdf($data);
        }

        return view('wallet/bill_preview', $data);
    }

    /**
     * Get transaction details with guest information
     */
    private function getTransactionDetails($transactionId)
    {
        try {
            return $this->transaction
                ->select('transactions.*, guests_personal.first_name, guests_personal.last_name, guests_personal.contact, rooms.room_no, wallets.balance, wallets.guest_id')
                ->join('wallets', 'wallets.wallet_id = transactions.wallet_id', 'left')
                ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id', 'left')
                ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id', 'left')
                ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id', 'left')
                ->join('rooms', 'rooms.room_no = advance_bookings.room', 'left')
                ->where('transactions.transaction_id', $transactionId)
                ->where('transactions.payment_status', 'success')
                ->first();
        } catch (\Exception $e) {
            log_message('error', 'Get Transaction Details error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Generate PDF Wallet Bill
     */
    private function generateWalletBillPdf($data)
    {
        $mpdf = new \Mpdf\Mpdf();
        
        $html = view('wallet/bill_pdf_template', $data);
        $mpdf->WriteHTML($html);
        
        $filename = 'Wallet_Bill_' . $data['bill']['bill_no'] . '.pdf';
        
        // Output for download
        $mpdf->Output($filename, 'D');
        exit;
    }

    /**
     * Debug method to check transaction details
     */
    public function debugWalletBill($billId)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        $billData = $this->billModel->getBillWithDetails($billId);
        
        echo "<h2>Debug Information for Wallet Bill ID: $billId</h2>";
        echo "<h3>Bill Data:</h3>";
        echo "<pre>";
        print_r($billData);
        echo "</pre>";

        if ($billData) {
            echo "<h3>Reference ID (Transaction ID): " . $billData['reference_id'] . "</h3>";
            
            $transactionDetails = $this->getTransactionDetails($billData['reference_id']);
            echo "<h3>Transaction Details Found:</h3>";
            echo "<pre>";
            print_r($transactionDetails);
            echo "</pre>";

            // Also check directly in database
            echo "<h3>Direct Database Query:</h3>";
            $db = \Config\Database::connect();
            $query = $db->table('transactions')
                ->where('transaction_id', $billData['reference_id'])
                ->where('payment_status', 'success')
                ->get();
            
            echo "SQL: " . $db->getLastQuery() . "<br>";
            echo "Results: " . $query->getNumRows() . " rows found<br>";
            echo "<pre>";
            print_r($query->getResultArray());
            echo "</pre>";
        }
    }

public function transaction_history($id = '')
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Get filter parameters from request
    $from_date = $this->request->getGet('from_date');
    $to_date = $this->request->getGet('to_date');
    $room_no = $this->request->getGet('room_no');
    $guest_id = $this->request->getGet('guest_id');
    $payment_mode = $this->request->getGet('payment_mode');
    $transaction_type = $this->request->getGet('transaction_type');

    // Get unique room numbers and guest details for admin/super_admin
    $data['roomNumbers'] = [];
    $data['guests'] = [];
    
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        // Get unique room numbers from advance_bookings - FIXED
        $roomResults = $this->db->table('advance_bookings')
            ->select('room')
            ->where('deleted_on IS NULL')
            ->where('room IS NOT NULL')
            ->where('room !=', '')
            ->groupBy('room')
            ->orderBy('room', 'ASC')
            ->get()
            ->getResultArray();
        
        // Convert to the expected format with room_no key
        $data['roomNumbers'] = array_map(function($room) {
            return ['room_no' => $room['room']];
        }, $roomResults);
            
        // Get guest details
        $data['guests'] = $this->guestpersonal
            ->select('guest_id, first_name, last_name')
            ->where('deleted_on', null)
            ->orderBy('first_name', 'ASC')
            ->findAll();
    }

    // SIMPLIFIED QUERY - Get all transactions with guest and room info
    $transactionQuery = $this->db->table('transactions t')
        ->select('t.*, 
                 gp.first_name, gp.last_name, gp.contact,
                 w.guest_id, w.balance,
                 ab.room as room_no')
        ->join('wallets w', 'w.wallet_id = t.wallet_id', 'left')
        ->join('guests_personal gp', 'gp.guest_id = w.guest_id', 'left')
        ->join('booking_guests bg', 'bg.guest_id = gp.guest_id', 'left')
        ->join('advance_bookings ab', 'ab.id = bg.booking_id AND ab.deleted_on IS NULL', 'left')
        ->where('t.payment_status', 'success')
        ->orderBy('t.created_on', 'DESC');

    // Apply guest ID filter if passed via URL
    if ($id != '' && $id != 'all') {
        $transactionQuery->where('w.guest_id', $id);
    }

    // Apply date range filter
    if (!empty($from_date)) {
        $transactionQuery->where('DATE(t.created_at) >=', $from_date);
    }
    if (!empty($to_date)) {
        $transactionQuery->where('DATE(t.created_at) <=', $to_date);
    }

    // Apply room filter for admin/super_admin
    if (!empty($room_no) && $room_no !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin')) {
        $transactionQuery->where('ab.room', $room_no);
    }

    // Apply guest filter for admin/super_admin
    if (!empty($guest_id) && $guest_id !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') && $id == '') {
        $transactionQuery->where('w.guest_id', $guest_id);
    }

    // Apply payment mode filter
    if (!empty($payment_mode) && $payment_mode !== 'all') {
        $transactionQuery->where('t.payment_mode', $payment_mode);
    }

    // Apply transaction type filter
    if (!empty($transaction_type) && $transaction_type !== 'all') {
        $transactionQuery->where('t.type', $transaction_type);
    }

    // Get the results
    $data['transactions'] = $transactionQuery->get()->getResultArray();

    // Pass filter values back to view for form persistence
    $data['filter_from_date'] = $from_date;
    $data['filter_to_date'] = $to_date;
    $data['filter_room_no'] = $room_no;
    $data['filter_guest_id'] = $guest_id;
    $data['filter_payment_mode'] = $payment_mode;
    $data['filter_transaction_type'] = $transaction_type;

    // Payment modes for filter dropdown
    $data['payment_modes'] = ['Cash', 'UPI'];
    $data['transaction_types'] = ['credit', 'debit'];

    // Check for export requests
    if ($this->request->getGet('pdf')) {
        return $this->generateTransactionPdf($data['transactions'], $data);
    }
    if ($this->request->getGet('excel')) {
        return $this->generateTransactionExcel($data['transactions'], $data);
    }

    return view('wallet/transaction_history', $data);
}
    
   public function transaction_histori($id = '')
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Get filter parameters from request
    $from_date = $this->request->getGet('from_date');
    $to_date = $this->request->getGet('to_date');
    $room_no = $this->request->getGet('room_no');
    $guest_id = $this->request->getGet('guest_id');
    $payment_mode = $this->request->getGet('payment_mode');
    $transaction_type = $this->request->getGet('transaction_type');

    // Get unique room numbers and guest details for admin/super_admin
    $data['roomNumbers'] = [];
    $data['guests'] = [];
    
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        // Get unique room numbers
        $data['roomNumbers'] = $this->rooms
            ->select('room_no')
            ->where('deleted_on', null)
            ->where('room_no IS NOT NULL')
            ->where('room_no !=', '')
            ->groupBy('room_no')
            ->orderBy('room_no', 'ASC')
            ->findAll();
            
        // Get guest details
        $data['guests'] = $this->guestpersonal
            ->select('guest_id, first_name, last_name')
            ->where('deleted_on', null)
            ->orderBy('first_name', 'ASC')
            ->findAll();
    }

    // Start building the query - CORRECTED JOIN
    $transactionQuery = $this->transaction
        ->select('transactions.*, guests_personal.first_name, guests_personal.last_name, guests_personal.contact, rooms.room_no, wallets.balance, wallets.guest_id')
        ->join('wallets', 'wallets.wallet_id = transactions.wallet_id', 'left')
        ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id', 'left') // Join via wallets table
        ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id', 'left')
        ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id', 'left')
        ->join('rooms', 'rooms.room_no = advance_bookings.room', 'left')
        ->where('transactions.payment_status', 'success')
        ->orderBy('transactions.created_on', 'DESC');

    // Apply guest ID filter if passed via URL
    if ($id != '') {
        $transactionQuery->where('wallets.guest_id', $id); // Filter via wallets table
    }

    // Apply date range filter
    if (!empty($from_date)) {
        $transactionQuery->where('DATE(transactions.created_at) >=', $from_date);
    }
    if (!empty($to_date)) {
        $transactionQuery->where('DATE(transactions.created_at) <=', $to_date);
    }

    // Apply room filter for admin/super_admin
    if (!empty($room_no) && $room_no !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin')) {
        $transactionQuery->where('rooms.room_no', $room_no);
    }

    // Apply guest filter for admin/super_admin
    if (!empty($guest_id) && $guest_id !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') && $id == '') {
        $transactionQuery->where('wallets.guest_id', $guest_id); // Filter via wallets table
    }

    // Apply payment mode filter
    if (!empty($payment_mode) && $payment_mode !== 'all') {
        $transactionQuery->where('transactions.payment_mode', $payment_mode);
    }

    // Apply transaction type filter
    if (!empty($transaction_type) && $transaction_type !== 'all') {
        $transactionQuery->where('transactions.type', $transaction_type);
    }

    // Pass filter values back to view for form persistence
    $data['filter_from_date'] = $from_date;
    $data['filter_to_date'] = $to_date;
    $data['filter_room_no'] = $room_no;
    $data['filter_guest_id'] = $guest_id;
    $data['filter_payment_mode'] = $payment_mode;
    $data['filter_transaction_type'] = $transaction_type;

    // Payment modes for filter dropdown
    $data['payment_modes'] = ['Cash', 'UPI', 'Wallet', 'Card'];
    $data['transaction_types'] = ['credit', 'debit'];

    // Fetch results
    $data['transactions'] = $transactionQuery->findAll();

    // Calculate summary
    $data['total_credit'] = 0;
    $data['total_debit'] = 0;
    foreach ($data['transactions'] as $transaction) {
        if ($transaction['type'] === 'credit') {
            $data['total_credit'] += (float)$transaction['amount'];
        } else {
            $data['total_debit'] += (float)$transaction['amount'];
        }
    }
    $data['net_balance'] = $data['total_credit'] - $data['total_debit'];

    // Check for export requests
    if ($this->request->getGet('pdf')) {
        return $this->generateTransactionPdf($data['transactions'], $data);
    }
    if ($this->request->getGet('excel')) {
        return $this->generateTransactionExcel($data['transactions'], $data);
    }

    return view('wallet/transaction_history', $data);
}

private function generateTransactionPdf($transactions, $filterData)
{
    $data['transactions'] = $transactions;
    $data['filters'] = $filterData;
    
    $mpdf = new \Mpdf\Mpdf();
    $html = view('wallet/transaction_pdf_template', $data);
    $mpdf->WriteHTML($html);
    
    $pdfContent = $mpdf->Output('', 'S');
    
    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/pdf');
    $response->setHeader('Content-Disposition', 'inline; filename="transaction_history.pdf"');
    
    return $response->setBody($pdfContent);
}


private function generateTransactionExcel($transactions, $filterData)
{
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Headers
    $headers = ['S.No', 'Date', 'Time', 'Transaction Type', 'Amount', 'Payment Mode', 'Reference ID'];
    
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        array_splice($headers, 3, 0, ['Room No', 'Guest Name']);
    }

    // Set headers
    $col = 'A';
    foreach ($headers as $header) {
        $sheet->setCellValue($col . '1', $header);
        $col++;
    }

    // Data
    $row = 2;
    foreach ($transactions as $index => $transaction) {
        $date = $transaction['created_at'] ?? $transaction['created_on'] ?? '';
        
        $sheet->setCellValue('A' . $row, $index + 1);
        $sheet->setCellValue('B' . $row, !empty($date) ? date('M d, Y', strtotime($date)) : 'N/A');
        $sheet->setCellValue('C' . $row, !empty($date) ? date('h:i A', strtotime($date)) : 'N/A');
        
        $currentCol = 'D';
        
        if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
            $sheet->setCellValue($currentCol . $row, $transaction['room_no'] ?? 'N/A');
            $currentCol++;
            
            $guestName = trim(($transaction['first_name'] ?? '') . ' ' . ($transaction['last_name'] ?? ''));
            $sheet->setCellValue($currentCol . $row, !empty($guestName) ? $guestName : 'N/A');
            $currentCol++;
        }
        
        $sheet->setCellValue($currentCol . $row, ucfirst($transaction['type']));
        $currentCol++;
        
        $sheet->setCellValue($currentCol . $row, ($transaction['type'] === 'credit' ? '+' : '-') . ' ₹' . number_format($transaction['amount'], 2));
        $currentCol++;
        
        $sheet->setCellValue($currentCol . $row, $transaction['payment_mode'] ?? 'N/A');
        $currentCol++;
        
        $sheet->setCellValue($currentCol . $row, $transaction['reference_id'] ?? 'N/A');
        
        $row++;
    }

    // Auto-size columns
    $lastColumn = session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin' ? 'I' : 'G';
    foreach (range('A', $lastColumn) as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    // Style the header row
    $headerStyle = [
        'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
        'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['rgb' => '66BB6A']]
    ];
    $sheet->getStyle('A1:' . $lastColumn . '1')->applyFromArray($headerStyle);

    // Output Excel
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $fileName = 'transaction_history_' . date('Y-m-d') . '.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}
private function generateTransactionExcel11($transactions, $filterData)
{
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Headers
    $headers = ['S.No', 'Date', 'Time', 'Transaction Type', 'Amount', 'Payment Mode', 'Reference ID', 'Description'];
    
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        array_splice($headers, 3, 0, ['Room No', 'Guest Name']);
    }

    foreach ($headers as $index => $header) {
        $sheet->setCellValue(chr(65 + $index) . '1', $header);
    }

    // Data
    $row = 2;
    foreach ($transactions as $index => $transaction) {
        $col = 0;
        $sheet->setCellValueByColumnAndColumn($col++, $row, $index + 1);
        $sheet->setCellValueByColumnAndColumn($col++, $row, date('M d, Y', strtotime($transaction['created_at'])));
        $sheet->setCellValueByColumnAndColumn($col++, $row, date('h:i A', strtotime($transaction['created_at'])));
        
        if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
            $sheet->setCellValueByColumnAndColumn($col++, $row, $transaction['room_no'] ?? 'N/A');
            $sheet->setCellValueByColumnAndColumn($col++, $row, trim(($transaction['first_name'] ?? '') . ' ' . ($transaction['last_name'] ?? '')));
        }
        
        $sheet->setCellValueByColumnAndColumn($col++, $row, ucfirst($transaction['type']));
        $sheet->setCellValueByColumnAndColumn($col++, $row, ($transaction['type'] === 'credit' ? '+' : '-') . ' ₹' . number_format($transaction['amount'], 2));
        $sheet->setCellValueByColumnAndColumn($col++, $row, $transaction['payment_mode'] ?? 'N/A');
        $sheet->setCellValueByColumnAndColumn($col++, $row, $transaction['reference_id'] ?? 'N/A');
        $sheet->setCellValueByColumnAndColumn($col++, $row, $transaction['description'] ?? 'N/A');
        
        $row++;
    }

    // Auto-size columns
    $lastColumn = session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin' ? 'I' : 'G';
    foreach (range('A', $lastColumn) as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    // Output Excel
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $fileName = 'transaction_history_' . date('Y-m-d') . '.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}


    public function wallet_read($id='')
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
         $wallet['room'] = $this->rooms->where('deleted_on', null)->findAll();

        if($id!=''){
            $wallet['wallet_guest'] = $this->WalletModel
                           ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           ->where('booking_guests.guest_id', $id)
                           ->where('wallets.guest_id', $id)
                           ->findAll();

         // echo json_encode($wallet['room']);
          

        }else{
            $wallet['wallet_guest'] = $this->WalletModel
                           ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           
                           ->findAll();
          
        }
       //echo json_encode($wallet['room']);
  return view('wallet/view.php',$wallet);
    }
    
    public function room_guest($id='')
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
         $wallet['room'] = $this->rooms->where('deleted_on', null)->findAll();

        if($id!=''){
            $wallet['wallet_guest'] = $this->rooms
                            ->select('rooms.*,guests_personal.*')
                            ->join('advance_bookings', 'advance_bookings.room = rooms.room_no')
                            ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id')
                            ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
                          //  ->join('wallets', 'wallets.guest_id = guests_personal.guest_id')
                            ->where('rooms.room_no', $id)
                            ->orderBy('guests_personal.guest_id', 'ASC') 
                            ->findAll();


                          
         echo json_encode($wallet['wallet_guest']);
          

       
 
       //return view('wallet/view.php',$wallet);
    } 
    

}
 public function guest_wallet($id='')
{
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
   

        if($id!=''){
            //this is old script
           $wallet['wallet_guest'] = $this->WalletModel
                            ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id')
                            ->where('guests_personal.first_name ',$id)
                     
                            ->findAll();

             
/*$wallet['wallet_guest'] = $this->WalletModel
                            ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           ->where('booking_guests.guest_id', $id)
                           ->where('wallets.guest_id', $id)
                           ->findAll(); */
                          
         echo json_encode($wallet['wallet_guest']);
          

       
 
       //return view('wallet/view.php',$wallet);
    } 
    

}

 public function guest_wallet_id($id='')
{
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
   

        if($id!=''){
            //this is old script
        

             
       $wallet['wallet_guest'] = $this->WalletModel
                            ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           ->where('booking_guests.guest_id', $id)
                           ->where('wallets.guest_id', $id)
                           ->findAll(); 
                          
         echo json_encode($wallet['wallet_guest']);
          

       
 
       //return view('wallet/view.php',$wallet);
    }
    } 

    public function addfund()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $session = \Config\Services::session();
    $full = $this->request->getPost();
    
    try {
        // Get guest information
        $wallet_guest = $this->rooms
            ->select('rooms.*,guests_personal.*')
            ->join('advance_bookings', 'advance_bookings.room = rooms.room_no')
            ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id')
            ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
            ->where('rooms.room_no', $full['room_no'])
            ->where('guests_personal.first_name', $full['guest_name']) 
            ->findAll();

        if (empty($wallet_guest)) {
            $session->setFlashdata('error', 'Guest not found');
            return redirect()->to('wallet');
        }

        $guest_id = $wallet_guest[0]['guest_id'];

        // Check if guest has existing wallet
        $guest = $this->WalletModel->where('guest_id', $guest_id)->first();
        
        // Calculate new balance
        $current_balance = empty($guest) ? 0 : $guest['balance'];
        $add_amount = $full['add_amount'];
        $new_balance = $current_balance + $add_amount;

        // Prepare wallet data
        $wallet_data = [
            'guest_id' => $guest_id,
            'balance' => $new_balance,
            'payment_status' => 'success',
            'payment_mode' => $full['payment_method'],
            'updated_on' => date("Y-m-d H:i:s")
        ];

        // Update or create wallet
        if (!empty($guest)) {
            $walletId = $guest['wallet_id'];
            $this->WalletModel->update($walletId, $wallet_data);
        } else {
            $wallet_data['created_on'] = date("Y-m-d H:i:s");
            $this->WalletModel->save($wallet_data);
            $walletId = $this->WalletModel->getInsertID();
        }

        // Determine payment mode and reference ID
        $reference_id = '';
        $payment_mode = $full['payment_method'];
        
        if ($payment_mode === 'upi' && !empty($full['upi_trans'])) {
            $reference_id = $full['upi_trans'];
            $payment_mode = "UPI";
        } elseif ($payment_mode === 'cash') {
            $reference_id = ''; // No receipt number required for cash
            $payment_mode = "Cash";
        } else {
            $reference_id = '';
            $payment_mode = "Wallet";
        }

        // Prepare transaction data
        $transaction_data = [
            'wallet_id' => $walletId,
            'guest_id' => $guest_id,
            'amount' => $add_amount,
            'type' => 'credit',
            'payment_mode' => $payment_mode,
            'payment_status' => 'success',
            'reference_id' => $reference_id,
            'description' => 'Wallet top-up via ' . $payment_mode,
            'created_at' => date("Y-m-d H:i:s")
        ];

        // Save transaction
        if ($this->transaction->save($transaction_data)) {
            $successMessage = 'Wallet funds added successfully!';
            if ($payment_mode === 'UPI') {
                $successMessage .= ' UPI Transaction ID: ' . $reference_id;
            } elseif ($payment_mode === 'Cash') {
                $successMessage .= ' Payment mode: Cash';
            }
            $session->setFlashdata('success', $successMessage);
            return redirect()->to('wallet/' . $guest_id);
        } else {
            $session->setFlashdata('error', 'Failed to save transaction');
            return redirect()->to('wallet');
        }
        
    } catch (\Exception $e) {
        $session->setFlashdata('error', 'Error: ' . $e->getMessage());
        return redirect()->to('wallet');
    }
}

public function addfund23()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $session = \Config\Services::session();
    $full = $this->request->getPost();
    
    try {
        // Get guest information
        $wallet_guest = $this->rooms
            ->select('rooms.*,guests_personal.*')
            ->join('advance_bookings', 'advance_bookings.room = rooms.room_no')
            ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id')
            ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
            ->where('rooms.room_no', $full['room_no'])
            ->where('guests_personal.first_name', $full['guest_name']) 
            ->findAll();

        if (empty($wallet_guest)) {
            $session->setFlashdata('error', 'Guest not found');
            return redirect()->to('wallet');
        }

        $guest_id = $wallet_guest[0]['guest_id'];

        // Check if guest has existing wallet
        $guest = $this->WalletModel->where('guest_id', $guest_id)->first();
        
        // Calculate new balance
        $current_balance = empty($guest) ? 0 : $guest['balance'];
        $add_amount = $full['add_amount'];
        $new_balance = $current_balance + $add_amount;

        // Prepare wallet data
        $wallet_data = [
            'guest_id' => $guest_id,
            'balance' => $new_balance,
            'payment_status' => 'success',
            'payment_mode' => $full['payment_method'],
            'updated_on' => date("Y-m-d H:i:s")
        ];

        // Update or create wallet
        if (!empty($guest)) {
            $walletId = $guest['wallet_id'];
            $this->WalletModel->update($walletId, $wallet_data);
        } else {
            $wallet_data['created_on'] = date("Y-m-d H:i:s");
            $this->WalletModel->save($wallet_data);
            $walletId = $this->WalletModel->getInsertID();
        }

        // Determine payment mode and reference ID
        $reference_id = '';
        $payment_mode = $full['payment_method'];
        
        if (!empty($full['bill_no'])) {
            $reference_id = $full['bill_no'];
            $payment_mode = "Cash";
        } elseif (!empty($full['upi_trans'])) {
            $reference_id = $full['upi_trans'];
            $payment_mode = "UPI";
        } elseif (!empty($full['card_trans'])) {
            $reference_id = $full['card_trans'];
            $payment_mode = "Card";
        } else {
            $reference_id = '';
            $payment_mode = "Wallet";
        }

        // Prepare transaction data
        $transaction_data = [
            'wallet_id' => $walletId,
            'guest_id' => $guest_id,
            'amount' => $add_amount,
            'type' => 'credit',
            'payment_mode' => $payment_mode,
            'payment_status' => 'success',
            'reference_id' => $reference_id, // Add this line to store reference ID
            'description' => 'Wallet top-up via ' . $payment_mode,
            'created_at' => date("Y-m-d H:i:s")
        ];

        // Save transaction
        if ($this->transaction->save($transaction_data)) {
            $successMessage = 'Wallet funds added successfully!';
            if ($payment_mode === 'UPI') {
                $successMessage .= ' UPI Transaction ID: ' . $reference_id;
            } elseif ($payment_mode === 'Cash' && !empty($reference_id)) {
                $successMessage .= ' Cash Receipt: ' . $reference_id;
            }
            $session->setFlashdata('success', $successMessage);
            return redirect()->to('wallet/' . $guest_id);
        } else {
            $session->setFlashdata('error', 'Failed to save transaction');
            return redirect()->to('wallet');
        }
        
    } catch (\Exception $e) {
        $session->setFlashdata('error', 'Error: ' . $e->getMessage());
        return redirect()->to('wallet');
    }
}
public function addfundtest()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $session = \Config\Services::session();
    $full = $this->request->getPost();
    
    try {
        // Get guest information
        $wallet_guest = $this->rooms
            ->select('rooms.*,guests_personal.*')
            ->join('advance_bookings', 'advance_bookings.room = rooms.room_no')
            ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id')
            ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
            ->where('rooms.room_no', $full['room_no'])
            ->where('guests_personal.first_name', $full['guest_name']) 
            ->findAll();

        if (empty($wallet_guest)) {
            $session->setFlashdata('error', 'Guest not found');
            return redirect()->to('wallet');
        }

        $guest_id = $wallet_guest[0]['guest_id'];

        // Check if guest has existing wallet
        $guest = $this->WalletModel->where('guest_id', $guest_id)->first();
        
        // Calculate new balance
        $current_balance = empty($guest) ? 0 : $guest['balance'];
        $add_amount = $full['add_amount'];
        $new_balance = $current_balance + $add_amount;

        // Prepare wallet data
        $wallet_data = [
            'guest_id' => $guest_id,
            'balance' => $new_balance,
            'payment_status' => 'success',
            'payment_mode' => $full['payment_method'],
            'updated_on' => date("Y-m-d H:i:s")
        ];

        // Update or create wallet
        if (!empty($guest)) {
            $walletId = $guest['wallet_id'];
            $this->WalletModel->update($walletId, $wallet_data);
        } else {
            $wallet_data['created_on'] = date("Y-m-d H:i:s");
            $this->WalletModel->save($wallet_data);
            $walletId = $this->WalletModel->getInsertID();
        }

        // Prepare transaction data
        $transaction_data = [
            'wallet_id' => $walletId,
            'guest_id' => $guest_id,
            'amount' => $add_amount,
            'type' => 'credit',
            'payment_method' => $full['payment_method'],
            'payment_status' => 'success',
            'created_at' => date("Y-m-d H:i:s")
        ];

        // Add payment reference based on method
        if ($full['payment_method'] === 'upi' && isset($full['upi_trans'])) {
            $transaction_data['reference_id'] = $full['upi_trans'];
            $transaction_data['description'] = 'Wallet top-up via UPI';
        } elseif ($full['payment_method'] === 'cash' && isset($full['cash_receipt'])) {
            $transaction_data['reference_id'] = $full['cash_receipt'];
            $transaction_data['description'] = 'Wallet top-up via Cash';
        } else {
            $transaction_data['description'] = 'Wallet top-up';
        }

        // Save transaction
        if ($this->transaction->save($transaction_data)) {
            $session->setFlashdata('success', 'Wallet funds added successfully!');
            return redirect()->to('wallet/' . $guest_id);
        } else {
            $session->setFlashdata('error', 'Failed to save transaction');
            return redirect()->to('wallet');
        }
        
    } catch (\Exception $e) {
        $session->setFlashdata('error', 'Error: ' . $e->getMessage());
        return redirect()->to('wallet');
    }
}


 public function addfund11()
{
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
        $full   = $this->request->getPost();
        unset($full['submit']);
        $wallet['wallet_guest'] = $this->rooms
                            ->select('rooms.*,guests_personal.*')
                            ->join('advance_bookings', 'advance_bookings.room = rooms.room_no')
                            ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id')
                            ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
                          //  ->join('wallets', 'wallets.guest_id = guests_personal.guest_id')
                            ->where('rooms.room_no', $full['room_no'])
                            ->where('guests_personal.first_name', $full['guest_name']) 
                            ->findAll();

       $guest_id=$wallet['wallet_guest'][0]['guest_id'];

       //checking guest_id is avaiable or not

       $guest = $this->WalletModel->where('guest_id', $guest_id)->first();
       
       //for the guest wallet added or not checking
        
      

        if(empty($guest )){
       $balance=0;
       }else{
        $balance=$guest['balance'];
       }


       // if wallet is avilable fetching wallet id

       $full['guest_id']=$guest_id;
       unset($full['room_no']);
       $full['balance']=$balance+$full['add_amount'];
       $full['amount']=$full['add_amount'];
       unset($full['add_amount']);
        
       
       if(!empty($guest )){
        $walletId= $guest['wallet_id'];

        $this->WalletModel->update($walletId, $full);

       }else{

        //if not available create the wallet account 
           
           
           if ($this->WalletModel->save($full)) {
          
           $walletId = $this->WalletModel->getInsertID(); // CI4 method
           


        }
        }





    $full['wallet_id']=$walletId;
    $full['type']='credit';
    if ($this->transaction->save($full)) {

            echo "Saved successfully";
         
        }else{
            
            echo "Failed to save.";
            print_r($this->transaction->errors()); // Optional: shows validation errors if any
        
        }

    

       return redirect()->to('wallet/'.$guest_id);


    
       // store the transcation info
    /*   unset($full['balance']); //not available this filed on trancation table
       $full['wallet_id']=$walletId;
       $full['amount']=$full['add_amount'];
       unset($full['add_amount']); //not available this filed on trancation table




      $full['type']='credit';
       $full['status']='ongoing';
       $full['description']='wallet credits';
       
       echo json_encode($full);
       
      
           
       
          $amount=$full['amount'];   

          

        $keyId     = 'rzp_test_yndo68t3OZnZTM';
        $keySecret = '95TdxYUVuslkEsxn7njED7By';

        $url = "https://api.razorpay.com/v1/orders";
     
        $orderData = [
            'receipt'         => 'rcpt_' . time(),
            'amount'          =>$amount*100, // 500 INR in paise
            'currency'        => 'INR',
            'payment_capture' => 1
        ];

        $fields_string = json_encode($orderData);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $keyId . ":" . $keySecret);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $result = curl_exec($ch);
        curl_close($ch);

        $order = json_decode($result, true);
        
        
       $full['razorpay_token_id']=$order['id'];

       echo json_encode($full);
        if ($this->transaction->save($full)) {
         
         
        }else{
            
            echo "Failed to save room.";
            print_r($this->transaction->errors()); // Optional: shows validation errors if any
        
        }
     

       return view('wallet/payment_form', [
            'key'      => $keyId,
            'amount'   => $orderData['amount'],
            'order_id' => $order['id']
        ]);
     
*/
       

}

 public function servicepay()
{
       $full   = $this->request->getPost();
        $keyId     = 'rzp_test_yndo68t3OZnZTM';
        $keySecret = '95TdxYUVuslkEsxn7njED7By';

        $url = "https://api.razorpay.com/v1/orders";

        $full   = $this->request->getPost();
        $amount= $full['service_amount'];
       // echo json_encode($full);
     
        $orderData = [
            'receipt'         => 'rcpt_' . time(),
            'amount'          =>$amount*100, // 500 INR in paise
            'currency'        => 'INR',
            'payment_capture' => 1
        ];

        $fields_string = json_encode($orderData);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $keyId . ":" . $keySecret);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $result = curl_exec($ch);
        curl_close($ch);

        $order = json_decode($result, true);
        
        
       $full['razorpay_token_id']=$order['id'];

       echo json_encode($full);
      

       return view('wallet/payment_form', [
            'key'      => $keyId,
            'amount'   => $orderData['amount'],
            'order_id' => $order['id']
        ]);


}




public function verify()
    {
        $razorpayOrderId   = $this->request->getPost('razorpay_order_id');
        $razorpayPaymentId = $this->request->getPost('razorpay_payment_id');
        $razorpaySignature = $this->request->getPost('razorpay_signature');

        $keySecret = '95TdxYUVuslkEsxn7njED7By';




        $generatedSignature = hash_hmac(
            'sha256',
            $razorpayOrderId . '|' . $razorpayPaymentId,
            $keySecret
        );

        if ($generatedSignature === $razorpaySignature) {
            

            echo "Payment Successful".$this->request->getPost('amount');
           
                  /*$transaction = $this->transaction->where('razorpay_token_id', $razorpayOrderId)->first();
                   $id=$transaction['transaction_id'];
                  
                  if(!empty($transaction)){
                    $full['status']='success'; 
                    $this->transaction->update($id,$full);

                  }else{
           
                  }*/
          


        } else {
            echo "Payment Verification Failed";

        }
    }
public function paymentrecd()
{
    $full = $this->request->getPost();
    
    // Map field names
    $full['room_no'] = $full['room_no_data'];
    unset($full['room_no_data']);
    
    $full['guest_id'] = $full['guest_id_data'];
    unset($full['guest_id_data']);

    // ✅ FIX: Properly handle service_type_id
    $full['service_type_id'] = $full['service_type_id'] ?? ''; // Keep service_type_id
    // Don't unset service_type_id here

    $full['total_amount'] = $full['amount_data'];
    unset($full['amount_data']);
    
    $service_info = json_decode($full['service_info']); 
    unset($full['service_info']);
    
    $full['services_info'] = json_encode($service_info);
    
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");
    
    $guest = $this->guestpersonal->where('guest_id', $full['guest_id'])->first();
    
    // Handle payment status and mode based on the request
    if (isset($full['payment_status']) && $full['payment_status'] === 'pending') {
        // This is the "Proceed Without Payment" scenario
        $full['payment_status'] = "pending";
        $full['payment_mode'] = ""; // Empty payment mode
        $full['reference_id'] = ''; // No reference ID
        
        $session = \Config\Services::session();
        $session->setFlashdata('success', 'Service registered successfully (Payment Pending)');
    } else {
        // This is the regular payment scenario
        $full['payment_status'] = "success";
        
        // Handle payment method specific logic
        if (!empty($full['bill_no'])) {
            $full['reference_id'] = $full['bill_no'];   
            $full['payment_mode'] = "Cash";
            unset($full['bill_no']);
        } 
        elseif (!empty($full['upi_trans'])) {
            $full['reference_id'] = $full['upi_trans'];  
            $full['payment_mode'] = "UPI";
            unset($full['upi_trans']);
        }
        elseif (!empty($full['card_trans'])) {
            $full['reference_id'] = $full['card_trans'];      
            $full['payment_mode'] = "Card";
            unset($full['card_trans']);
        } 
        else {
            $full['reference_id'] = '';     
            $full['payment_mode'] = "Wallet";  
            
            // Update wallet by guest_id only for wallet payments
            $guest_id = $full['guest_id'];
            $this->db->table('wallets')
                     ->where('guest_id', $guest_id)
                     ->set('balance', 'balance - ' . (int)$full['total_amount'], false)
                     ->update();
                     
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Wallet Amount Deducted successfully');
        }
    }
    
    // Add timestamp
    $full['created_at'] = $date;

    // ✅ DEBUG: Check what data is being saved
    // print_r($full); // Uncomment to debug

    // Save the data to the database
    if ($this->servicebook->save($full)) {
        $serviceid = $this->servicebook->getInsertID();
        
        // Set appropriate success message if not already set
        if (!isset($session)) {
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Service Registered successfully');
        }
    } else {
        echo "Failed to save service booking.";
        print_r($this->servicebook->errors()); // Optional: shows validation errors if any
    }
             
    return redirect()->to('servicerept/'.$full['guest_id']);
}
public function paymentrecd4()
{
    $full = $this->request->getPost();
    
    // Map field names
    $full['room_no'] = $full['room_no_data'];
    unset($full['room_no_data']);
    
    $full['guest_id'] = $full['guest_id_data'];
    unset($full['guest_id_data']);

   $full['service_type_id'] = $full['service_type_id'];
    unset($full['service_type_id']);

    $full['total_amount'] = $full['amount_data'];
    unset($full['amount_data']);
    
    $service_info = json_decode($full['service_info']); 
    unset($full['service_info']);
    
    $full['services_info'] = json_encode($service_info);
    
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");
    
    $guest = $this->guestpersonal->where('guest_id', $full['guest_id'])->first();
    
    // Handle payment status and mode based on the request
    if (isset($full['payment_status']) && $full['payment_status'] === 'pending') {
        // This is the "Proceed Without Payment" scenario
        $full['payment_status'] = "pending";
        $full['payment_mode'] = ""; // Empty payment mode
        $full['reference_id'] = ''; // No reference ID
        
        $session = \Config\Services::session();
        $session->setFlashdata('success', 'Service registered successfully (Payment Pending)');
    } else {
        // This is the regular payment scenario
        $full['payment_status'] = "success";
        
        // Handle payment method specific logic
        if (!empty($full['bill_no'])) {
            $full['reference_id'] = $full['bill_no'];   
            $full['payment_mode'] = "Cash";
            unset($full['bill_no']);
        } 
        elseif (!empty($full['upi_trans'])) {
            $full['reference_id'] = $full['upi_trans'];  
            $full['payment_mode'] = "UPI";
            unset($full['upi_trans']);
        }
        elseif (!empty($full['card_trans'])) {
            $full['reference_id'] = $full['card_trans'];      
            $full['payment_mode'] = "Card";
            unset($full['card_trans']);
        } 
        else {
            $full['reference_id'] = '';     
            $full['payment_mode'] = "Wallet";  
            
            // Update wallet by guest_id only for wallet payments
            $guest_id = $full['guest_id'];
            $this->db->table('wallets')
                     ->where('guest_id', $guest_id)
                     ->set('balance', 'balance - ' . (int)$full['total_amount'], false)
                     ->update();
                     
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Wallet Amount Deducted successfully');
        }
    }
    
    // Add timestamp
    $full['created_at'] = $date;

    // Save the data to the database
    if ($this->servicebook->save($full)) {
        $serviceid = $this->servicebook->getInsertID();
        
        // Set appropriate success message if not already set
        if (!isset($session)) {
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Service Registered successfully');
        }
    } else {
        echo "Failed to save service booking.";
        print_r($this->servicebook->errors()); // Optional: shows validation errors if any
    }
             
    return redirect()->to('servicerept/'.$full['guest_id']);
}
    public function paymentrecd3()
{
    $full = $this->request->getPost();
    
    // Map field names
    $full['room_no'] = $full['room_no_data'];
    unset($full['room_no_data']);
    
    $full['guest_id'] = $full['guest_id_data'];
    unset($full['guest_id_data']);

    $full['total_amount'] = $full['amount_data'];
    unset($full['amount_data']);
    
    $service_info = json_decode($full['service_info']); 
    unset($full['service_info']);
    
    $full['services_info'] = json_encode($service_info);
    
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");
    
    $guest = $this->guestpersonal->where('guest_id', $full['guest_id'])->first();
    
    // Handle payment method specific logic
    if (!empty($full['bill_no'])) {
        $full['reference_id'] = $full['bill_no'];   
        $full['payment_mode'] = "Cash";
        unset($full['bill_no']);
    } 
    elseif (!empty($full['upi_trans'])) {
        $full['reference_id'] = $full['upi_trans'];  
        $full['payment_mode'] = "UPI";
        unset($full['upi_trans']);
    }
    elseif (!empty($full['card_trans'])) {
        $full['reference_id'] = $full['card_trans'];      
        $full['payment_mode'] = "Card";
        unset($full['card_trans']);
    } 
    else {
        $full['reference_id'] = '';     
        $full['payment_mode'] = "Wallet";  
        
        // Update wallet by guest_id
        $guest_id = $full['guest_id'];

        
        $this->db->table('wallets')
                 ->where('guest_id', $guest_id)
                 ->set('balance', 'balance - ' . (int)$full['total_amount'], false)
                 ->update();
                 
        $session = \Config\Services::session();
        $session->setFlashdata('success', 'Wallet Amount Deducted successfully');
    }
    
    // Add timestamp
    $full['created_at'] = $date;

    $full['payment_status'] = "success";

    
    // Save the data to the database
    // if ($this->servicebook->save($full)) {
    //     echo "Saved successfully!";
    // } else {
    //     echo "Failed to save service booking.";
    //     print_r($this->servicebook->errors()); // Optional: shows validation errors if any
    // }

      // Save the data to the database
        if ( $this->servicebook->save($full)) {
           //echo " saved successfully!";
            $serviceid = $this->servicebook->getInsertID();
        } else {
           // echo "Failed to save room.";
            print_r($this->servicebook->errors()); // Optional: shows validation errors if any
        }
 $session = \Config\Services::session();
 $session->setFlashdata('success', 'Service Registered successfully');
             
// return redirect()->to('servicerept/'.$guest_id);

return redirect()->to('servicerept/'.$full['guest_id']);
}

public function paymentrecd1()
    {
        $full   = $this->request->getPost();

       
      
       $full['room_no']=$full['room_no_data'];
        unset($full['room_no_data']);
        $full['guest_id']=$full['guest_id_data'];
        unset($full['guest_id_data']);

        $full['total_amount']=$full['amount_data'];
        unset($full['amount_data']);
        $service_info=json_decode($full['service_info']); 
        unset($full['service_info']);
       
       $full['services_info']=json_encode($service_info);
       date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");

      
   $guest = $this->guestpersonal->where('guest_id',$full['guest_id'])->first();
   
    //  Save the data to the database
        if ( $this->servicebook->save($full)) {
           echo " saved successfully!";
        } else {
            echo "Failed to save room.";
            print_r($this->servicebook->errors()); // Optional: shows validation errors if any
        }

  //not required this code service book
    /*
          Save the data to the database
        if ( $this->servicebook->save($full)) {
           //echo " saved successfully!";
        } else {
            echo "Failed to save room.";
            print_r($this->servicebook->errors()); // Optional: shows validation errors if any
        }
    */
              
        //guest info fetching process using guest_id



//echo json_encode($full);

// return view('addproduct/eco-add-product');

    //   return view('payment/payment', [
           
    //         'amount'   => $full['total_amount'],
    //         'room_no' => $full['room_no'],
    //         'guest_id' => $full['guest_id'],
    //         'first_name'=>$guest['first_name'],
    //         'current_date'=>$date,
    //         'services_info'=>$service_info,
    //         'service_type'=>$full['service_type']
    //     ]);
     

    }

public function payrecord(){

$full   = $this->request->getPost();

$full['total_amount']=$full['amount'];
 $guest_id=$full['guest_id'];


if($full['bill_no']!=''){

 $full['reference_id']=$full['bill_no'];   
 $full['payment_mode']="Cash";
}
elseif($full['upi_trans']!=''){
 $full['reference_id']=$full['upi_trans'];  
 $full['payment_mode']="UPI";

}
elseif($full['card_trans']!=''){
$full['reference_id']=$full['card_trans'];      
$full['payment_mode']="Card";

}else{
$full['reference_id']='';     
$full['payment_mode']="Wallet";  



// Example: update wallet by guest_id
$this->db->table('wallets')
         ->where('guest_id',$guest_id)
         ->set('balance', 'balance - ' . (int)$full['total_amount'],false)
         ->update();
 $session = \Config\Services::session();
 $session->setFlashdata('success', 'Wallet Amount Deducted successfully');

}




       // Save the data to the database
        if ( $this->servicebook->save($full)) {
           //echo " saved successfully!";
            $serviceid = $this->servicebook->getInsertID();
        } else {
           // echo "Failed to save room.";
            print_r($this->servicebook->errors()); // Optional: shows validation errors if any
        }
 $session = \Config\Services::session();
 $session->setFlashdata('success', 'Service Registered successfully');
             
return redirect()->to('servicerept/'.$guest_id);


}




}
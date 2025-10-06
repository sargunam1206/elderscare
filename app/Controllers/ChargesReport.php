<?php

namespace App\Controllers;

use App\Models\ServiceBookModel;
use App\Models\ServiceTypeInfoModel;
use App\Models\ChargesInfoModel;
use App\Models\BillModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class ChargesReport extends BaseController
{
    protected $assetTypeModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->servicebook = new ServiceBookModel();
     $this->servicetype = new ServiceTypeInfoModel();
     $this->ChargesInfoModel = new ChargesInfoModel();
      $this->billModel = new BillModel();
    }


    // method to generate bills
public function generateBill()
{
    // Enable detailed error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Check if it's an AJAX request
    if (!$this->request->isAJAX()) {
        log_message('error', 'Generate Bill: Non-AJAX request received');
        return $this->response->setStatusCode(405)->setJSON([
            'success' => false,
            'message' => 'Method not allowed'
        ]);
    }

    $chargeId = $this->request->getPost('charge_id');
    
    log_message('debug', 'Generate Bill: Charge ID received - ' . $chargeId);
    
    if (empty($chargeId)) {
        log_message('error', 'Generate Bill: Empty charge ID');
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Charge ID is required'
        ]);
    }

    try {
        // Check if bill already exists for this charge
        $existingBill = $this->billModel->where('reference_id', $chargeId)
                                       ->where('deleted_on', null)
                                       ->first();
        
        log_message('debug', 'Generate Bill: Existing bill check - ' . ($existingBill ? 'Exists' : 'Not exists'));
        
        if ($existingBill) {
            return $this->response->setJSON([
                'success' => true,
                'bill_id' => $existingBill['bill_id'],
                'message' => 'Bill already exists'
            ]);
        }

        // Get charge details
        $chargeDetails = $this->ChargesInfoModel
            ->select('charge_info.*, guests_personal.first_name, guests_personal.last_name')
            ->join('guests_personal', 'guests_personal.guest_id = charge_info.guest_id', 'left')
            ->where('charge_info.charge_id', $chargeId)
            ->where('charge_info.deleted_on', null)
            ->first();

        log_message('debug', 'Generate Bill: Charge details found - ' . ($chargeDetails ? 'Yes' : 'No'));

        if (!$chargeDetails) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Charge not found'
            ]);
        }

        // Calculate total amount from all items with this charge_id
        $totalResult = $this->ChargesInfoModel
            ->selectSum('paid_amount')
            ->where('charge_id', $chargeId)
            ->where('deleted_on', null)
            ->first();

        $totalAmount = $totalResult['paid_amount'] ?? 0;
        
        log_message('debug', 'Generate Bill: Total amount calculated - ' . $totalAmount);

        // Prepare bill data
        $billData = [
            'bill_no' => $this->billModel->getNextBillNo(),
            'bill_date' => date('Y-m-d H:i:s'),
            'total_amount' => $totalAmount,
            'paid_amount' => $totalAmount, // Assuming full payment for charges
            'payment_status' => 'paid',
            'reference_service' => 'Charges',
            'reference_id' => $chargeId
        ];

        log_message('debug', 'Generate Bill: Bill data prepared - ' . print_r($billData, true));

        // Insert bill
        if ($this->billModel->insert($billData)) {
            $billId = $this->billModel->getInsertID();
            
            log_message('debug', 'Generate Bill: Bill inserted successfully - ID: ' . $billId);
            
            return $this->response->setJSON([
                'success' => true,
                'bill_id' => $billId,
                'message' => 'Bill generated successfully'
            ]);
        } else {
            $errors = $this->billModel->errors();
            log_message('error', 'Generate Bill: Insert failed - ' . print_r($errors, true));
            
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to generate bill: ' . implode(', ', $errors)
            ]);
        }

    } catch (\Exception $e) {
        log_message('error', 'Generate Bill Exception: ' . $e->getMessage());
        log_message('error', 'Generate Bill Trace: ' . $e->getTraceAsString());
        
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Server error: ' . $e->getMessage()
        ]);
    }
}
   public function viewBill($billId = null)
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

        log_message('debug', 'Bill Data: ' . print_r($billData, true));
        log_message('debug', 'Reference ID (Charge ID): ' . $billData['reference_id']);

        // Get charge items using the reference_id (charge_id)
        $chargeItems = $this->billModel->getChargeItems($billData['reference_id']);
        log_message('debug', 'Charge Items Count: ' . count($chargeItems));
        log_message('debug', 'Charge Items: ' . print_r($chargeItems, true));

        // Get grouped charge items for display
        $grouped = $this->billModel->getGroupedChargeItems($billData['reference_id']);

        $data = [
            'bill' => $billData,
            'chargeItems' => $chargeItems,
            'grouped' => $grouped
        ];

        // Check if PDF download is requested
        if ($this->request->getGet('download') === 'pdf') {
            return $this->generateBillPdf($data);
        }

        return view('chargesrept/bill_preview', $data);
    }

    /**
     * Debug method to check charge items
     */
    public function debugBill($billId)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        $billData = $this->billModel->getBillWithDetails($billId);
        
        echo "<h2>Debug Information for Bill ID: $billId</h2>";
        echo "<h3>Bill Data:</h3>";
        echo "<pre>";
        print_r($billData);
        echo "</pre>";

        if ($billData) {
            echo "<h3>Reference ID (Charge ID): " . $billData['reference_id'] . "</h3>";
            
            $chargeItems = $this->billModel->getChargeItems($billData['reference_id']);
            echo "<h3>Charge Items Found:</h3>";
            echo "<pre>";
            print_r($chargeItems);
            echo "</pre>";

            // Also check directly in database
            echo "<h3>Direct Database Query:</h3>";
            $db = \Config\Database::connect();
            $query = $db->table('charge_info')
                ->where('charge_id', $billData['reference_id'])
                ->where('deleted_on', null)
                ->get();
            
            echo "SQL: " . $db->getLastQuery() . "<br>";
            echo "Results: " . $query->getNumRows() . " rows found<br>";
            echo "<pre>";
            print_r($query->getResultArray());
            echo "</pre>";
        }
    }

    /**
     * Generate PDF Bill
     */
    private function generateBillPdf($data)
    {
        $mpdf = new \Mpdf\Mpdf();
        
        $html = view('chargesrept/bill_pdf_template', $data);
        $mpdf->WriteHTML($html);
        
        $filename = 'Bill_' . $data['bill']['bill_no'] . '.pdf';
        
        // Output for download
        $mpdf->Output($filename, 'D');
        exit;
    }


    // Add this method to view/download bill
    public function viewBill11($billId = null)
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

        // Get all charge items for this bill
        $chargeItems = $this->ChargesInfoModel
            ->where('charge_id', $billData['reference_id'])
            ->where('deleted_on', null)
            ->findAll();

        $data = [
            'bill' => $billData,
            'chargeItems' => $chargeItems
        ];

        // Check if PDF download is requested
        if ($this->request->getGet('download') === 'pdf') {
            return $this->generateBillPdf($data);
        }

        return view('chargesrept/bill_preview', $data);
    }

    // Add this method to generate PDF bill
    private function generateBillPd($data)
    {
        $mpdf = new \Mpdf\Mpdf();
        
        $html = view('chargesrept/bill_pdf_template', $data);
        $mpdf->WriteHTML($html);
        
        $filename = 'Bill_' . $data['bill']['bill_no'] . '.pdf';
        
        // Output for download
        $mpdf->Output($filename, 'D');
        exit;
    }

    

public function view($id = '')
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Get filter parameters from request
    $from_month = $this->request->getGet('from_month');
    $to_month = $this->request->getGet('to_month');
    $room_no = $this->request->getGet('room_no');
    $guest_id = $this->request->getGet('guest_id');

    // Get unique room numbers and guest details for admin/super_admin
    $data['roomNumbers'] = [];
    $data['guests'] = [];
    
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        // Get unique room numbers from charges_info
        $data['roomNumbers'] = $this->ChargesInfoModel
            ->select('room_no')
            ->where('deleted_on', null)
            ->where('room_no IS NOT NULL')
            ->where('room_no !=', '')
            ->groupBy('room_no')
            ->orderBy('room_no', 'ASC')
            ->findAll();
            
        // Get guest details with names from guests_personal table
        $data['guests'] = $this->ChargesInfoModel
            ->select('charge_info.guest_id, guests_personal.first_name, guests_personal.last_name')
            ->join('guests_personal', 'guests_personal.guest_id = charge_info.guest_id', 'inner')
            ->where('charge_info.deleted_on', null)
            ->where('charge_info.guest_id IS NOT NULL')
            ->where('charge_info.guest_id !=', '')
            ->groupBy('charge_info.guest_id')
            ->orderBy('guests_personal.first_name', 'ASC')
            ->findAll();
    }

    // Start building the query - LEFT JOIN with guests_personal to ensure all charges are shown
    $chargesQuery = $this->ChargesInfoModel
        ->select('charge_info.*, guests_personal.first_name, guests_personal.last_name')
        ->join('guests_personal', 'guests_personal.guest_id = charge_info.guest_id', 'left') // Changed to LEFT JOIN
        ->where('charge_info.deleted_on', null)
        ->orderBy('charge_info.created_on', 'DESC');

    // Apply guest ID filter if passed via URL
    if ($id != '') {
        $chargesQuery->where('charge_info.guest_id', $id);
    }

    // Apply month range filter
    if (!empty($from_month)) {
        $chargesQuery->where('charge_monthyear >=', $from_month);
    }
    if (!empty($to_month)) {
        $chargesQuery->where('charge_monthyear <=', $to_month);
    }

    // Apply room filter for admin/super_admin
    if (!empty($room_no) && $room_no !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin')) {
        $chargesQuery->where('charge_info.room_no', $room_no);
    }

    // Apply guest filter for admin/super_admin (if not already filtered by URL $id)
    if (!empty($guest_id) && $guest_id !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') && $id == '') {
        $chargesQuery->where('charge_info.guest_id', $guest_id);
    }

    // Pass filter values back to view for form persistence
    $data['filter_from_month'] = $from_month;
    $data['filter_to_month'] = $to_month;
    $data['filter_room_no'] = $room_no;
    $data['filter_guest_id'] = $guest_id;

    // Debug: Check the final query
    // echo $chargesQuery->getCompiledSelect(); die();

    // Fetch results
    $data['serviceTypes'] = $chargesQuery->findAll();

    // Debug: Check if guest data is coming through
    // echo "<pre>"; print_r($data['serviceTypes']); die();

    // Check for export requests
    if ($this->request->getGet('pdf')) {
        return $this->generateChargesPdf($data['serviceTypes'], $data);
    }
    if ($this->request->getGet('excel')) {
        return $this->generateChargesExcel($data['serviceTypes'], $data);
    }

    return view('chargesrept/view', $data);
}

public function view1($id = '')
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Get filter parameters from request
    $from_month = $this->request->getGet('from_month');
    $to_month = $this->request->getGet('to_month');
    $room_no = $this->request->getGet('room_no');
    $guest_id = $this->request->getGet('guest_id');

    // Get unique room numbers and guest details for admin/super_admin
    $data['roomNumbers'] = [];
    $data['guests'] = [];
    
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        // Get unique room numbers from charges_info
        $data['roomNumbers'] = $this->ChargesInfoModel
            ->select('room_no')
            ->where('deleted_on', null)
            ->where('room_no IS NOT NULL')
            ->where('room_no !=', '')
            ->groupBy('room_no')
            ->orderBy('room_no', 'ASC')
            ->findAll();
            
        // Get guest details with names from guests_personal table
        $data['guests'] = $this->ChargesInfoModel
            ->select('charge_info.guest_id, guests_personal.first_name, guests_personal.last_name')
            ->join('guests_personal', 'guests_personal.guest_id = charge_info.guest_id', 'inner')
            ->where('charge_info.deleted_on', null)
            ->where('charge_info.guest_id IS NOT NULL')
            ->where('charge_info.guest_id !=', '')
            ->groupBy('charge_info.guest_id')
            ->orderBy('guests_personal.first_name', 'ASC')
            ->findAll();
    }

    // Start building the query - inner JOIN with guests_personal for admin/super_admin
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        $chargesQuery = $this->ChargesInfoModel
            ->select('charge_info.*, guests_personal.first_name, guests_personal.last_name')
            ->join('guests_personal', 'guests_personal.guest_id = charge_info.guest_id', 'inner')
            ->where('charge_info.deleted_on', null)
            ->orderBy('charge_info', 'DESC');
    } else {
        $chargesQuery = $this->ChargesInfoModel->where('deleted_on', null)->orderBy('charge_info', 'DESC');
    }

    // Apply guest ID filter if passed via URL
    if ($id != '') {
        $chargesQuery->where('charge_info.guest_id', $id);
    }

    // Apply month range filter
    if (!empty($from_month)) {
        $chargesQuery->where('charge_monthyear >=', $from_month);
    }
    if (!empty($to_month)) {
        $chargesQuery->where('charge_monthyear <=', $to_month);
    }

    // Apply room filter for admin/super_admin
    if (!empty($room_no) && $room_no !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin')) {
        $chargesQuery->where('charge_info.room_no', $room_no);
    }

    // Apply guest filter for admin/super_admin (if not already filtered by URL $id)
    if (!empty($guest_id) && $guest_id !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') && $id == '') {
        $chargesQuery->where('charge_info.guest_id', $guest_id);
    }

    // Pass filter values back to view for form persistence
    $data['filter_from_month'] = $from_month;
    $data['filter_to_month'] = $to_month;
    $data['filter_room_no'] = $room_no;
    $data['filter_guest_id'] = $guest_id;

   

    // Fetch results
    $data['serviceTypes'] = $chargesQuery->findAll();

      // Check for export requests
    if ($this->request->getGet('pdf')) {
        return $this->generateChargesPdf($data['serviceTypes'], $data);
    }
    if ($this->request->getGet('excel')) {
        return $this->generateChargesExcel($data['serviceTypes'], $data);
    }

    return view('chargesrept/view', $data);
}




private function generateChargesPdf($chargesData, $filterData)
{
    // Group data by charge_id
    $grouped = [];
    foreach ($chargesData as $row) {
        $cid = $row['charge_id'];
        if (!isset($grouped[$cid])) {
            $grouped[$cid] = [
                'charge_id'   => $cid,
                'created_on'  => $row['created_on'],
                'charge_monthyear'  => $row['charge_monthyear'],
                'total_paid'  => 0,
                'room_no'     => $row['room_no'] ?? '',
                'first_name'  => $row['first_name'] ?? '',
                'last_name'   => $row['last_name'] ?? '',
                'payment_mode' => $row['payment_mode'] ?? '',
                'items'       => []
            ];
        }
        $grouped[$cid]['total_paid'] += (float)$row['paid_amount'];
        $grouped[$cid]['items'][] = [
            'charge_info'   => $row['charge_info'],
            'paid_amount'   => $row['paid_amount']
        ];
    }

    $data['grouped'] = $grouped;
    $data['filters'] = $filterData;
    
    $mpdf = new \Mpdf\Mpdf();
    $html = view('chargesrept/pdf_template', $data);
    $mpdf->WriteHTML($html);
    
    $pdfContent = $mpdf->Output('', 'S');
    
    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/pdf');
    $response->setHeader('Content-Disposition', 'inline; filename="charges_report.pdf"');
    
    return $response->setBody($pdfContent);
}

private function generateChargesExcel($chargesData, $filterData)
{
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Base headers
    $sheet->setCellValue('A1', 'S.No');
    $sheet->setCellValue('B1', 'Date');
    $sheet->setCellValue('C1', 'Time');
    $sheet->setCellValue('D1', 'Month of Charge');

    $col = 'E';

    // ✅ Add Room No + Guest Name only for admin/super_admin
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        $sheet->setCellValue($col.'1', 'Room No');
        $col++;
        $sheet->setCellValue($col.'1', 'Guest Name');
        $col++;
    }

    $sheet->setCellValue($col.'1', 'Total Paid Amount'); $col++;
    $sheet->setCellValue($col.'1', 'Payment Mode'); $col++;
    $sheet->setCellValue($col.'1', 'Charge Details'); // ✅ included again

    // Group data by charge_id
    $grouped = [];
    foreach ($chargesData as $row) {
        $cid = $row['charge_id'];
        if (!isset($grouped[$cid])) {
            $grouped[$cid] = [
                'charge_id'   => $cid,
                'created_on'  => $row['created_on'],
                'charge_monthyear'  => $row['charge_monthyear'],
                'total_paid'  => 0,
                'room_no'     => $row['room_no'] ?? '',
                'first_name'  => $row['first_name'] ?? '',
                'last_name'   => $row['last_name'] ?? '',
                'payment_mode' => $row['payment_mode'] ?? '',
                'items'       => []
            ];
        }
        $grouped[$cid]['total_paid'] += (float)$row['paid_amount'];
        $grouped[$cid]['items'][] = [
            'charge_info'   => $row['charge_info'],
            'paid_amount'   => $row['paid_amount']
        ];
    }

    // Fill data
    $row = 2;
    $serial = 1; // ✅ counter for S.No
    foreach ($grouped as $charge) {
        $col = 'A';
        $sheet->setCellValue($col.$row, $serial); 
        $serial++;
        $col++;

        if (!empty($charge['created_on'])) {
            $sheet->setCellValue($col.$row, date('M d, Y', strtotime($charge['created_on']))); $col++;
            $sheet->setCellValue($col.$row, date('h:i A', strtotime($charge['created_on']))); $col++;
        } else {
            $sheet->setCellValue($col.$row, 'N/A'); $col++;
            $sheet->setCellValue($col.$row, 'N/A'); $col++;
        }

        $sheet->setCellValue($col.$row, !empty($charge['charge_monthyear']) ? $charge['charge_monthyear'] : 'N/A'); 
        $col++;

        // ✅ Add Room No + Guest Name only for admin/super_admin
        if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
            $sheet->setCellValue($col.$row, !empty($charge['room_no']) ? $charge['room_no'] : 'N/A'); 
            $col++;

            $guestName = trim(($charge['first_name'] ?? '') . ' ' . ($charge['last_name'] ?? ''));
            $sheet->setCellValue($col.$row, !empty($guestName) ? $guestName : 'N/A');
            $col++;
        }

        $sheet->setCellValue($col.$row, !empty($charge['total_paid']) ? '₹' . number_format($charge['total_paid'], 2) : 'N/A'); $col++;
        $sheet->setCellValue($col.$row, !empty($charge['payment_mode']) ? $charge['payment_mode'] : 'N/A'); $col++;
        
        // ✅ Charge Details (with tab space at start of each line)
        $chargeDetails = '';
        foreach ($charge['items'] as $item) {
            $chargeDetails .= "\t" . $item['charge_info'] . ' - ₹' . number_format($item['paid_amount'], 2) . "\n";
        }
        $sheet->setCellValue($col.$row, trim($chargeDetails));

        // ✅ Wrap text inside cell for better visibility
        $sheet->getStyle($col.$row)->getAlignment()->setWrapText(true);

        $row++;
    }

    // Auto-size columns
    $lastColumn = session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin' ? 'H' : 'F';
    foreach (range('A', $lastColumn) as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    // Output Excel
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $fileName = 'charges_report_' . date('Y-m-d') . '.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}




}


  




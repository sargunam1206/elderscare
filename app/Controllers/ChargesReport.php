<?php

namespace App\Controllers;

use App\Models\ServiceBookModel;
use App\Models\ServiceTypeInfoModel;
use App\Models\ChargesInfoModel;
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

    // Start building the query - inner JOIN with guests_personal for admin/super_admin
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        $chargesQuery = $this->ChargesInfoModel
            ->select('charge_info.*, guests_personal.first_name, guests_personal.last_name')
            ->join('guests_personal', 'guests_personal.guest_id = charge_info.guest_id', 'inner')
            ->where('charge_info.deleted_on', null);
    } else {
        $chargesQuery = $this->ChargesInfoModel->where('deleted_on', null);
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


  




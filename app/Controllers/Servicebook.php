<?php

namespace App\Controllers;

use App\Models\ServiceBookModel;
use App\Models\ServiceTypeInfoModel;
use App\Models\BillModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Servicebook extends BaseController
{
    protected $assetTypeModel;
     
 protected $billModel;
  protected $servicetype;
    protected $session;
  protected $servicebook;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->servicebook = new ServiceBookModel();
     $this->servicetype = new ServiceTypeInfoModel();
       $this->billModel = new BillModel(); // Add BillModel

    
    }
    //  method to generate bills for services
    public function generateServiceBill()
    {
        // Enable detailed error reporting for debugging
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Check if it's an AJAX request
        if (!$this->request->isAJAX()) {
            log_message('error', 'Generate Service Bill: Non-AJAX request received');
            return $this->response->setStatusCode(405)->setJSON([
                'success' => false,
                'message' => 'Method not allowed'
            ]);
        }

        $bookingId = $this->request->getPost('booking_id');
        
        log_message('debug', 'Generate Service Bill: Booking ID received - ' . $bookingId);
        
        if (empty($bookingId)) {
            log_message('error', 'Generate Service Bill: Empty booking ID');
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Booking ID is required'
            ]);
        }

        try {
            // Check if bill already exists for this booking
            $existingBill = $this->billModel->where('reference_id', $bookingId)
                                           ->where('reference_service', 'Services')
                                           ->where('deleted_on', null)
                                           ->first();
            
            log_message('debug', 'Generate Service Bill: Existing bill check - ' . ($existingBill ? 'Exists' : 'Not exists'));
            
            if ($existingBill) {
                return $this->response->setJSON([
                    'success' => true,
                    'bill_id' => $existingBill['bill_id'],
                    'message' => 'Bill already exists'
                ]);
            }

            // Get booking details
            $bookingDetails = $this->servicebook
                ->select('service_bookings.*, guests_personal.first_name, guests_personal.last_name')
                ->join('guests_personal', 'guests_personal.guest_id = service_bookings.guest_id', 'left')
                ->where('service_bookings.id', $bookingId)
                ->where('service_bookings.deleted_on', null)
                ->first();

            log_message('debug', 'Generate Service Bill: Booking details found - ' . ($bookingDetails ? 'Yes' : 'No'));

            if (!$bookingDetails) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Service booking not found'
                ]);
            }

            // Prepare bill data
            $billData = [
                'bill_no' => $this->billModel->getNextBillNo(),
                'bill_date' => date('Y-m-d H:i:s'),
                'total_amount' => $bookingDetails['total_amount'],
                'paid_amount' => $bookingDetails['total_amount'], // Assuming full payment
                'payment_status' => $bookingDetails['payment_status'] === 'success' ? 'paid' : 'pending',
                'reference_service' => 'Services',
                'reference_id' => $bookingId
            ];

            log_message('debug', 'Generate Service Bill: Bill data prepared - ' . print_r($billData, true));

            // Insert bill
            if ($this->billModel->insert($billData)) {
                $billId = $this->billModel->getInsertID();
                
                log_message('debug', 'Generate Service Bill: Bill inserted successfully - ID: ' . $billId);
                
                return $this->response->setJSON([
                    'success' => true,
                    'bill_id' => $billId,
                    'message' => 'Bill generated successfully'
                ]);
            } else {
                $errors = $this->billModel->errors();
                log_message('error', 'Generate Service Bill: Insert failed - ' . print_r($errors, true));
                
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Failed to generate bill: ' . implode(', ', $errors)
                ]);
            }

        } catch (\Exception $e) {
            log_message('error', 'Generate Service Bill Exception: ' . $e->getMessage());
            log_message('error', 'Generate Service Bill Trace: ' . $e->getTraceAsString());
            
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Server error: ' . $e->getMessage()
            ]);
        }
    }

    // Add this method to view service bills
    public function viewServiceBill($billId = null)
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

        // Get service booking details
        $serviceBooking = $this->servicebook
            ->select('service_bookings.*, guests_personal.first_name, guests_personal.last_name')
            ->join('guests_personal', 'guests_personal.guest_id = service_bookings.guest_id', 'left')
            ->where('service_bookings.id', $billData['reference_id'])
            ->where('service_bookings.deleted_on', null)
            ->first();

        if (!$serviceBooking) {
            return redirect()->back()->with('error', 'Service booking not found');
        }

        // Parse services info
        $servicesInfo = [];
        try {
            $servicesInfo = json_decode($serviceBooking['services_info'], true) ?? [];
        } catch (\Exception $e) {
            log_message('error', 'Error parsing services info: ' . $e->getMessage());
        }

        $data = [
            'bill' => $billData,
            'serviceBooking' => $serviceBooking,
            'servicesInfo' => $servicesInfo
        ];

        // Check if PDF download is requested
        if ($this->request->getGet('download') === 'pdf') {
            return $this->generateServiceBillPdf($data);
        }

        return view('servicebook/bill_preview', $data);
    }

    /**
     * Generate PDF Service Bill
     */
    private function generateServiceBillPdf($data)
    {
        $mpdf = new \Mpdf\Mpdf();
        
        $html = view('servicebook/bill_pdf_template', $data);
        $mpdf->WriteHTML($html);
        
        $filename = 'Service_Bill_' . $data['bill']['bill_no'] . '.pdf';
        
        // Output for download
        $mpdf->Output($filename, 'D');
        exit;
    }
 public function view($id = '')
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Fetch service types where deleted_on is null
    $serviceTypes = $this->servicetype
        ->select('service_type_id, name')
        ->where('deleted_on', null)
        ->groupBy('name')
        ->orderBy('name', 'ASC')
        ->findAll();
    
    // Pass service types to the view
    $data['serviceTypes'] = $serviceTypes;

    // Get filter parameters from the request
    $fromDate = $this->request->getGet('from_date');
    $toDate = $this->request->getGet('to_date');
    $serviceTypeName = $this->request->getGet('service_type');
    $roomNo = $this->request->getGet('room_no');
    $guestId = $this->request->getGet('guest_id');
    
    // Get the service type name for display if a specific type is selected
    $selectedServiceTypeName = '';
    
    if (!empty($serviceTypeName) && $serviceTypeName !== 'all') {
        $selectedServiceTypeName = $serviceTypeName;
    } elseif ($serviceTypeName === 'all') {
        $selectedServiceTypeName = 'All Service Types';
    }
    
    // Pass the selected service type name to the view
    $data['selected_service_type_name'] = $selectedServiceTypeName;
    
    // Get unique room numbers and guest details for admin/super_admin
    $data['roomNumbers'] = [];
    $data['guests'] = [];
    
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        $data['roomNumbers'] = $this->servicebook
            ->select('room_no')
            ->where('deleted_on', null)
            ->where('room_no IS NOT NULL')
            ->where('room_no !=', '')
            ->groupBy('room_no')
            ->orderBy('room_no', 'ASC')
            ->findAll();
            
        // Get guest details with names from guests_personal table
        $data['guests'] = $this->servicebook
            ->select('service_bookings.guest_id, guests_personal.first_name, guests_personal.last_name')
            ->join('guests_personal', 'guests_personal.guest_id = service_bookings.guest_id', 'left')
            ->where('service_bookings.deleted_on', null)
            ->where('service_bookings.guest_id IS NOT NULL')
            ->where('service_bookings.guest_id !=', '')
            ->groupBy('service_bookings.guest_id')
            ->orderBy('guests_personal.first_name', 'ASC')
            ->findAll();
    }
    
    // Start building the query - left JOIN with guests_personal for admin/super_admin
   // Start building the query - inner JOIN with guests_personal for admin/super_admin
if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
// In your controller, update the query to include service_type_id
$servicebookQuery = $this->servicebook
    ->select('service_bookings.*, guests_personal.first_name, guests_personal.last_name, service_bookings.service_type_id')
    ->join('guests_personal', 'guests_personal.guest_id = service_bookings.guest_id', 'left')
    ->where('service_bookings.deleted_on', null)
    ->orderBy('id', 'DESC');

} else {
    $servicebookQuery = $this->servicebook->select('service_bookings.*, guests_personal.first_name, guests_personal.last_name')
        ->join('guests_personal', 'guests_personal.guest_id = service_bookings.guest_id', 'left') // ✅ Use LEFT JOIN
        ->where('service_bookings.deleted_on', null)->orderBy('id', 'DESC');
}   


    
    // Apply date filters if provided
    if (!empty($fromDate)) {
        $servicebookQuery->where('DATE(service_bookings.created_on) >=', $fromDate);
    }
    
    if (!empty($toDate)) {
        $servicebookQuery->where('DATE(service_bookings.created_on) <=', $toDate);
    }
    
    // Apply service type filter if provided and not "all"
    if (!empty($serviceTypeName) && $serviceTypeName !== 'all') {
        $servicebookQuery->where('service_bookings.service_type', $serviceTypeName);
    }
    
    // Apply room number filter for admin/super_admin
    if (!empty($roomNo) && $roomNo !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin')) {
        $servicebookQuery->where('service_bookings.room_no', $roomNo);
    }
    
    // Apply guest ID filter for admin/super_admin
    if (!empty($guestId) && $guestId !== 'all' && (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin')) {
        $servicebookQuery->where('service_bookings.guest_id', $guestId);
    }
    
    // Apply guest ID filter if provided via URL parameter
    if ($id != '') {
        $data['servicebook'] = $servicebookQuery->where('service_bookings.guest_id', $id)->findAll();
    } else {
        $data['servicebook'] = $servicebookQuery->findAll();
    }
    
    // Pass filter values back to view to maintain form state
    $data['filter_from_date'] = $fromDate;
    $data['filter_to_date'] = $toDate;
    $data['filter_service_type'] = $serviceTypeName;
    $data['filter_room_no'] = $roomNo;
    $data['filter_guest_id'] = $guestId;

    // Check for export requests
    if ($this->request->getGet('pdf')) {
        return $this->generatePdf($data['servicebook'], $data);
    }
    if ($this->request->getGet('excel')) {
        return $this->generateExcel($data['servicebook'], $data);
    }

    return view('servicebook/view', $data);
}
    private function generatePdf($servicebook, $data)
    {
        // Pass the servicebook data and filter values to the PDF template

        
        $data['servicebook'] = $servicebook;
        
        $mpdf = new \Mpdf\Mpdf();
        $html = view('servicebook/pdf_template', $data);
        $mpdf->WriteHTML($html);
        
        $pdfContent = $mpdf->Output('', 'S');
        
        $response = \Config\Services::response();
        $response->setHeader('Content-Type', 'application/pdf');
        $response->setHeader('Content-Disposition', 'inline; filename="service_bookings_report.pdf"');
        
        return $response->setBody($pdfContent);
    }
private function generateExcel($servicebook, $data)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Base headers
    $sheet->setCellValue('A1', 'S.No');
    $sheet->setCellValue('B1', 'Date');
    $sheet->setCellValue('C1', 'Time');
    $sheet->setCellValue('D1', 'Service Type');

    $col = 'E';

    // ✅ Add Room No + Guest Name only for admin/super_admin
    if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
        $sheet->setCellValue($col.'1', 'Room No');
        $col++;
        $sheet->setCellValue($col.'1', 'Guest Name');
        $col++;
    }

    $sheet->setCellValue($col.'1', 'Total Amount'); $col++;
    $sheet->setCellValue($col.'1', 'Payment Mode'); $col++;
    $sheet->setCellValue($col.'1', 'Payment Status');

    // Fill data
    $row = 2;
    foreach ($servicebook as $i => $booking) {
        $col = 'A';
        $sheet->setCellValue($col.$row, $i + 1); $col++;

        if (!empty($booking['created_on'])) {
            $sheet->setCellValue($col.$row, date('M d, Y', strtotime($booking['created_on']))); $col++;
            $sheet->setCellValue($col.$row, date('h:i A', strtotime($booking['created_on']))); $col++;
        } else {
            $sheet->setCellValue($col.$row, 'N/A'); $col++;
            $sheet->setCellValue($col.$row, 'N/A'); $col++;
        }

        $sheet->setCellValue($col.$row, !empty($booking['service_type']) ? $booking['service_type'] : 'N/A'); 
        $col++;

        // ✅ Add Room No + Guest Name only for admin/super_admin
        if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') {
            $sheet->setCellValue($col.$row, !empty($booking['room_no']) ? $booking['room_no'] : 'N/A'); 
            $col++;

            $guestName = trim(($booking['first_name'] ?? '') . ' ' . ($booking['last_name'] ?? ''));
            $sheet->setCellValue($col.$row, !empty($guestName) ? $guestName : 'N/A');
            $col++;
        }

        $sheet->setCellValue($col.$row, !empty($booking['total_amount']) ? '₹' . number_format($booking['total_amount'], 2) : 'N/A'); $col++;
        $sheet->setCellValue($col.$row, !empty($booking['payment_mode']) ? $booking['payment_mode'] : 'N/A'); $col++;
        $sheet->setCellValue($col.$row, !empty($booking['payment_status']) ? $booking['payment_status'] : 'N/A');

        $row++;
    }

    // Auto-size columns (A → current last column)
    foreach (range('A', $col) as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    // Output Excel
    $writer = new Xlsx($spreadsheet);
    $fileName = 'service_bookings_' . date('Y-m-d') . '.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}

// public function updateServiceBooking()
// {

//             ini_set('display_errors', '1');
//         ini_set('display_startup_errors', '1');
//         error_reporting(E_ALL);

//     $bookingId = $this->request->getPost('booking_id');
//     $serviceInfo = $this->request->getPost('service_info');
//     $totalAmount = $this->request->getPost('amount_data');
//     $paymentMode = $this->request->getPost('payment_mode');
//     $paymentStatus = $this->request->getPost('payment_status');
    
//     // Update the service booking
//     $data = [
//         'services_info' => $serviceInfo,
//         'total_amount' => $totalAmount,
//         'payment_mode' => $paymentMode,
//         'payment_status' => $paymentStatus,
//         'updated_on' => date('Y-m-d H:i:s')
//     ];
    
//     $this->servicebook->update($bookingId, $data);
    
//     // Set success message
//     $this->session->setFlashdata('success', 'Service booking updated successfully!');
    
//     // Redirect back to the service bookings page
//     //return redirect()->to('/servicebook/view');
//      return redirect()->to('servicerept/'.$full['guest_id']);
// }


public function updateServiceBooking()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $bookingId = $this->request->getPost('booking_id');
    $serviceInfo = $this->request->getPost('service_info');
    $totalAmount = $this->request->getPost('amount_data');
    $paymentMode = $this->request->getPost('payment_mode');
    $paymentStatus = $this->request->getPost('payment_status');
    
    // Update the service booking
    $data = [
        'services_info' => $serviceInfo,
        'total_amount' => $totalAmount,
        'payment_mode' => $paymentMode,
        'payment_status' => $paymentStatus,
        'updated_on' => date('Y-m-d H:i:s')
    ];
    
    $this->servicebook->update($bookingId, $data);

    // Fetch the booking again to get guest_id
    $booking = $this->servicebook->find($bookingId);

    // Set success message
    $this->session->setFlashdata('success', 'Service booking updated successfully!');

    if ($booking && !empty($booking['guest_id'])) {
        return redirect()->to('servicerept/' . $booking['guest_id']);
    } else {
        return redirect()->to('/servicebook/view'); // fallback
    }
}

}


  




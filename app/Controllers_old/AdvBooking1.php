<?php

namespace App\Controllers;

use App\Models\AdvanceBookingModel;
use App\Models\RoomsInfoModel;
use App\Models\BookingStatusTrackingModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdvBooking extends BaseController
{
    protected $AdvanceBookingModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->AdvanceBookingModel = new AdvanceBookingModel();
         $this->rooms = new RoomsInfoModel();
          $this->bookingStatusTracking = new BookingStatusTrackingModel();
    }

    public function index1()
    {
        helper(['url']);
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        if ($this->request->getMethod() === 'post') {
            // Debug output
            echo '<pre>';
            print_r($this->request->getPost());
            echo '</pre>';
            exit;

            // Your existing form processing code...
        }

        return view('advancebooking/create');
    }

    public function index()
    {
        helper(['url']);
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        if ($this->request->getMethod() === 'post') {

            echo "hello";
            echo '<pre>';
            print_r($this->request->getPost());
            echo '</pre>';


            // Capture all form data
            $full = $this->request->getPost();
            echo json_encode($full);
            // exit;

            // Handle file uploads
           // Handle address proof file
if ($addressProofFile = $this->request->getFile('address_proof_file')) {
    if ($addressProofFile->isValid()) {
        $addressProofName = $addressProofFile->getRandomName();
        $addressProofFile->move(ROOTPATH . 'public/uploads/advance_booking', $addressProofName);
        $full['address_proof_file'] = 'uploads/advance_booking/' . $addressProofName;
    }
}

// Handle multiple other documents
if ($otherDocsFiles = $this->request->getFiles('other_documents_file')) {
    $otherDocsNames = [];
    foreach ($otherDocsFiles['other_documents_file'] as $file) {
        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/advance_booking/other_docs', $fileName);
            $otherDocsNames[] = 'uploads/advance_booking/other_docs/' . $fileName;
        }
    }
    $full['other_documents_file'] = !empty($otherDocsNames) ? json_encode($otherDocsNames) : null;
}

            // Set checkbox value
            $full['scanned_documents_collected'] = isset($full['scanned_documents_collected']) ? 1 : 0;

            // Set creation timestamp
            date_default_timezone_set('Asia/Kolkata');
            $full['created_on'] = date("Y-m-d H:i:s");
            $full['updated_on'] = null;
            echo json_encode($full);
            //exit;
            // Save the data to the database
            $this->AdvanceBookingModel->save($full);

            // Set success message and redirect
            $this->session->setFlashdata('success', 'Advance Booking created successfully');
            return redirect()->to(base_url('viewadvancebooking'));
        }

        return view('advancebooking/create');
    }
public function view()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $model = $this->AdvanceBookingModel->where('deleted_on', null);

    if ($this->request->getMethod() === 'post') {
        $type = $this->request->getPost('type');
        $status = $this->request->getPost('status');
        
        // Apply filters
        if ($type && $type != 'all') $model->where('type', $type);
        if ($status && $status != 'all') $model->where('status', $status);
        
        // Check for PDF request
        if ($this->request->getPost('pdf')) {
            return $this->generatePdf($model);
        }
    }

    $data['adv'] = $model->findAll();
    return view('advancebooking/view', $data);
}

private function generatePdf($model)
{
    // Get the filtered data
    $data['adv'] = $model->findAll();
    $data['filters'] = [
        'type' => $this->request->getPost('type'),
        'status' => $this->request->getPost('status')
    ];

    $mpdf = new \Mpdf\Mpdf();
    $html = view('advancebooking/pdf_template', $data);
    $mpdf->WriteHTML($html);
    
    $pdfContent = $mpdf->Output('', 'S');
    
    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/pdf');
    $response->setHeader('Content-Disposition', 'inline; filename="advance_bookings.pdf"');
    
    return $response->setBody($pdfContent);
}

public function exportToExcel()
{
    // Fetch selected filters from POST data
    $typeFilter = $this->request->getPost('type');
    $statusFilter = $this->request->getPost('status');
    
    // Base query
    $model = $this->AdvanceBookingModel->where('deleted_on', null);
    
    // Apply filters if selected
    if (!empty($typeFilter) && $typeFilter != 'all') {
        $model->where('type', $typeFilter);
    }
    if (!empty($statusFilter) && $statusFilter != 'all') {
        $model->where('status', $statusFilter);
    }
    
    $bookings = $model->findAll(); // Fetch filtered bookings

    // Create new Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set document properties
    $spreadsheet->getProperties()
        ->setCreator("Your System")
        ->setTitle("Advance Bookings Report")
        ->setSubject("Advance Bookings");

    // Define headers (Guest1 & Guest2 merged into single columns)
    $headers = [
        'S.No', 'Booking No', 'Guest Count', 'Type',
        'Arrival Date', 'Arrival Time', 'Nights', 'Depart Date', 'Depart Time',
        'Room', 'Monthly Tariff', 'Status', 'Enquiry Person Name', 'Relation', 'Contact No',
        'Guest 1 Name', 'Guest 2 Name'
    ];

    // Write headers to first row
    $col = 'A';
    foreach ($headers as $header) {
        $sheet->setCellValue($col.'1', $header);
        $col++;
    }

    // Fill data rows
    $row = 2;
    foreach ($bookings as $i => $booking) {
        $col = 'A';
        $sheet->setCellValue($col++.$row, $i+1); // S.No
        // $sheet->setCellValue($col++.$row, $booking['id']);
        $sheet->setCellValue($col++.$row, $booking['booking_no']);
        $sheet->setCellValue($col++.$row, $booking['guest_count']);
        $sheet->setCellValue($col++.$row, $booking['type']);
        $sheet->setCellValue($col++.$row, $booking['arrival_date']);
        $sheet->setCellValue($col++.$row, $booking['arrival_time']);
        $sheet->setCellValue($col++.$row, $booking['nights']);
        $sheet->setCellValue($col++.$row, $booking['depart_date']);
        $sheet->setCellValue($col++.$row, $booking['depart_time']);
        $sheet->setCellValue($col++.$row, $booking['room']);
        $sheet->setCellValue($col++.$row, $booking['monthly_tariff']);
        $sheet->setCellValue($col++.$row, ucwords(str_replace('_', ' ', $booking['status'])));
        $sheet->setCellValue($col++.$row, $booking['enquiry_person_name']);
        $sheet->setCellValue($col++.$row, $booking['relation']);
        $sheet->setCellValue($col++.$row, $booking['contact_no']);

        // Merge guest1 fields
        $guest1Name = trim($booking['guest1_title'].' '.$booking['guest1_firstname'].' '.$booking['guest1_lastname']);
        $sheet->setCellValue($col++.$row, $guest1Name);

        // Merge guest2 fields
        $guest2Name = trim($booking['guest2_title'].' '.$booking['guest2_firstname'].' '.$booking['guest2_lastname']);
        $sheet->setCellValue($col++.$row, $guest2Name);

        $row++;
    }

    // Auto size columns
    foreach (range('A', $col) as $columnID) {
        $sheet->getColumnDimension($columnID)->setAutoSize(true);
    }

    // Generate and download the Excel file
    $writer = new Xlsx($spreadsheet);
    $fileName = 'Advance_Bookings_' . date('Y-m-d') . '.xlsx';

    // Set headers to trigger download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}


public function updateBookingStatus($bookingId)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Initialize models
    $bookingStatusTracking = new BookingStatusTrackingModel();
    $booking = $this->AdvanceBookingModel->find($bookingId);
    
    if (!$booking) {
        return redirect()->back()->with('error', 'Booking not found');
    }

    $newStatus = $this->request->getPost('new_status');
    $cancellationReason = $this->request->getPost('cancellation_reason');
    $currentStatus = $booking['status'];
    

    // Update booking status
    $updateData = ['status' => $newStatus];
    if ($newStatus === 'cancelled') {
        $updateData['cancellation_reason'] = $cancellationReason;
    }

     $this->AdvanceBookingModel->update($bookingId, $updateData);
    // Update the booking
    

    // Insert status tracking record
    $trackingData = [
        'booking_id' => $bookingId,
        'status' => $newStatus,
        'updated_on' => null,
        'remarks' => $cancellationReason
    ];

    echo json_encode($trackingData);
    //exit;

    $bookingStatusTracking->insert($trackingData);

    

    

    return redirect()->back()->with('success', 'Status updated successfully');
}
public function validateBooking($bookingId)
{
    $newStatus = $this->request->getGet('new_status');
    $booking = $this->AdvanceBookingModel->find($bookingId);
    
    if (!$booking) {
        return $this->response->setJSON([
            'valid' => false,
            'message' => 'Booking not found'
        ]);
    }
    
    $response = [
        'valid' => true,
        'message' => '',
        'missing_fields' => []
    ];
    
    // Common validations for both confirmed and checked_in status
    if (in_array($newStatus, ['confirmed', 'checked_in'])) {
        if (empty($booking['address_proof_file'])) {
            $response['valid'] = false;
            $response['missing_fields'][] = 'Address Proof (Aadhar)';
        }
        
        if (!$booking['scanned_documents_collected']) {
            $response['valid'] = false;
            $response['missing_fields'][] = 'Scanned Documents Collected';
        }
        
        if (empty($booking['guest1_firstname']) || empty($booking['guest1_lastname'])) {
            $response['valid'] = false;
            $response['missing_fields'][] = 'Guest 1 Information';
        }
        
        if ($booking['guest_count'] == 2 && (empty($booking['guest2_firstname']) || empty($booking['guest2_lastname']))) {
            $response['valid'] = false;
            $response['missing_fields'][] = 'Guest 2 Information';
        }
    }
    
    // Additional validations specific to check-in
    if ($newStatus === 'checked_in') {
        if (empty($booking['room'])) {
            $response['valid'] = false;
            $response['missing_fields'][] = 'Room Assignment';
        }
    }
    
    if (!$response['valid']) {
        $response['message'] = 'Before Changing status to ' . ucwords(str_replace('_', ' ', $newStatus)) . 
                              ' Collect the following information which is missing.';
    }
    
    return $this->response->setJSON($response);
}
 public function edit($id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $booking = $this->AdvanceBookingModel->find($id);
    
    // Convert JSON string to array for other documents
    if (!empty($booking['other_documents_file'])) {
        $booking['other_documents'] = json_decode($booking['other_documents_file'], true);
    } else {
        $booking['other_documents'] = [];
    }
    
    // Set base upload path
    //$booking['upload_path'] = base_url('writable/uploads/');
    
    $data['booking'] = $booking;
      
    return view('advancebooking/edit', $data);
}

public function update($id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if ($this->request->getMethod() === 'post') {
        // Capture all form data
        $full = $this->request->getPost();

        // Handle address proof file
        if ($addressProofFile = $this->request->getFile('address_proof_file')) {
            if ($addressProofFile->isValid()) {
                // Delete old file if exists
                $oldFile = $this->request->getPost('current_address_proof');
                if ($oldFile && file_exists(ROOTPATH . 'public/' . $oldFile)) {
                    unlink(ROOTPATH . 'public/' . $oldFile);
                }
                
                $addressProofName = $addressProofFile->getRandomName();
                $addressProofFile->move(ROOTPATH . 'public/uploads/advance_booking', $addressProofName);
                $full['address_proof_file'] = 'uploads/advance_booking/' . $addressProofName;
            }
        } else {
            // Keep existing file if no new file uploaded
            $full['address_proof_file'] = $this->request->getPost('current_address_proof');
        }

        // Handle multiple other documents - FIXED MERGING ISSUE
        $currentDocs = $this->request->getPost('current_other_documents') ?? [];
        
        // Convert string to array if needed
        if (is_string($currentDocs)) {
            $currentDocs = json_decode($currentDocs, true) ?? [];
        }
        
        // Process newly uploaded files
        $newDocs = [];
        if ($otherDocsFiles = $this->request->getFiles('other_documents_file')) {
            foreach ($otherDocsFiles['other_documents_file'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $fileName = $file->getRandomName();
                    $file->move(ROOTPATH . 'public/uploads/advance_booking/other_docs', $fileName);
                    $newDocs[] = 'uploads/advance_booking/other_docs/' . $fileName;
                }
            }
        }
        
        // Merge existing and new documents - PROPERLY HANDLED NOW
        $mergedDocs = array_merge($currentDocs, $newDocs);
        $full['other_documents_file'] = !empty($mergedDocs) ? json_encode($mergedDocs) : null;

        // Set checkbox value
        $full['scanned_documents_collected'] = isset($full['scanned_documents_collected']) ? 1 : 0;

        // Set update timestamp
        date_default_timezone_set('Asia/Kolkata');
        $full['updated_on'] = date("Y-m-d H:i:s");
        echo json_encode($full);
            //exit;

        // Update the data in database
        if ($this->AdvanceBookingModel->update($id, $full)) {
            $this->session->setFlashdata('success', 'Advance Booking updated successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to update Advance Booking');
        }
        
        return redirect()->to(base_url('viewadvancebooking'));
    }

    // If not POST request, show edit form with data
    $data['booking'] = $this->AdvanceBookingModel->find($id);
    return view('advancebooking/edit', $data);
}

public function delete($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->AdvanceBookingModel->update($id, [
            'deleted_on' => $date,
        ]);

         return redirect()->to('viewadvancebooking')->with('success', 'Deleted successfully.');
        // return redirect()->to('viewassettype?tab=make')->with('success', 'Deleted successfully.');
    }
     
}
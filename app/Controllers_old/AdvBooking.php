<?php

namespace App\Controllers;

use App\Models\AdvanceBookingModel;
use App\Models\RoomsInfoModel;
use App\Models\BookingStatusTrackingModel;
use App\Models\BookingGuest;

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
          $this->BookingGuest = new BookingGuest();

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


// Fetch the booking ID of the inserted row
$bookingId = $this->AdvanceBookingModel->getInsertID();

// Insert initial status into BookingStatusTrackingModel
if ($bookingId) {
    $trackingData = [
    'booking_id' => $bookingId,
    'booking_status' => $full['status'],  // match DB column name
    'remarks' => null,
    'created_on' => date('Y-m-d H:i:s'),
    'updated_on' => null
];

    $this->bookingStatusTracking->insert($trackingData);
}

$full = $this->request->getPost();
echo '<pre>';
print_r($full);
echo '</pre>';


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

// public function updateBookingStatus($bookingId)
// {
//     helper(['url']);
//     ini_set('display_errors', '1');
//     ini_set('display_startup_errors', '1');
//     error_reporting(E_ALL);
//     date_default_timezone_set('Asia/Kolkata');

//     // Initialize models
//     $bookingStatusTracking = new BookingStatusTrackingModel();
//     $booking = $this->AdvanceBookingModel->find($bookingId);
    
//     if (!$booking) {
//         return redirect()->back()->with('error', 'Booking not found');
//     }

//     $newStatus = $this->request->getPost('new_status');
//     $cancellationReason = $this->request->getPost('cancellation_reason');

//     // --- Update booking table ---
//     $updateData = ['status' => $newStatus];

//     // Add cancellation reason only if cancelled
//     if ($newStatus === 'cancelled') {
//         $updateData['cancellation_reason'] = $cancellationReason;
//     }

//     $this->AdvanceBookingModel->update($bookingId, $updateData);

//     // --- Update room status (RoomsInfoModel) ---
//     if (!empty($booking['room_id'])) {
//         $roomUpdateData = [];
//         $statusKey = strtolower($newStatus);

//         if ($statusKey === 'checked_in') {
//             $roomUpdateData['room_status'] = 'Occupied';
//         } elseif ($statusKey === 'confirmed') {
//             $roomUpdateData['room_status'] = 'Reserved';
//         } elseif ($statusKey === 'checked_out' || $statusKey === 'cancelled') {
//             $roomUpdateData['room_status'] = 'Vacant';
//         }

//         if (!empty($roomUpdateData)) {
//             $roomUpdateData['updated_on'] = date('Y-m-d H:i:s');
//             $this->rooms->update($booking['room_id'], $roomUpdateData);
//         }
//     }

//     // --- Insert guests only if checked_in ---
//     if ($newStatus === 'checked_in') {
//         if (!empty($booking['guest1_id'])) {
//             $this->BookingGuest->insert([
//                 'booking_id' => $bookingId,
//                 'guest_id' => $booking['guest1_id'],
//                 'created_on' => date('Y-m-d H:i:s'),
//                 'updated_on' => null,
//                 'deleted_on' => null
//             ]);
//         }
        
//         if (!empty($booking['guest2_id'])) {
//             $this->BookingGuest->insert([
//                 'booking_id' => $bookingId,
//                 'guest_id' => $booking['guest2_id'],
//                 'created_on' => date('Y-m-d H:i:s'),
//                 'updated_on' => null,
//                 'deleted_on' => null
//             ]);
//         }
//     }

//     // --- Insert status tracking record ---
//     $trackingData = [
//         'booking_id' => $bookingId,
//         'status' => $newStatus,
//         'updated_on' => null,
//         'remarks' => ($newStatus === 'cancelled') ? $cancellationReason : null
//     ];

//     $bookingStatusTracking->insert($trackingData);

//     return redirect()->back()->with('success', 'Status updated successfully');
// }

public function updateBookingStatus($bookingId)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    date_default_timezone_set('Asia/Kolkata');

    // Initialize models
    $bookingStatusTracking = new BookingStatusTrackingModel();
    $booking = $this->AdvanceBookingModel->find($bookingId);
    
    if (!$booking) {
        return redirect()->back()->with('error', 'Booking not found');
    }

    $newStatus = $this->request->getPost('new_status');
    $cancellationReason = $this->request->getPost('cancellation_reason');
    
    // Update booking status
    $updateData = ['status' => $newStatus];
    
    // If status is check_in, update to Occupied in the database
    if ($newStatus === 'checked_in') {
        $updateData['status'] = 'Occupied';
    }
    
    if ($newStatus === 'cancelled') {
        $updateData['cancellation_reason'] = $cancellationReason;
    }

    $this->AdvanceBookingModel->update($bookingId, $updateData);
    
    // Update room status based on booking status
  if (!empty($booking['room_id'])) {
    $roomUpdateData = [];
    
    if ($newStatus === 'checked_in') {
        $roomUpdateData['room_status'] = 'Occupied';
    } elseif (strtolower($newStatus) === 'confirmed') { 
        // case-insensitive confirmed
        $roomUpdateData['room_status'] = 'Reserved';
    } elseif ($newStatus === 'checked_out' || $newStatus === 'cancelled') {
        $roomUpdateData['room_status'] = 'Vacant';
    }
    
    
    if (!empty($roomUpdateData)) {
        $roomUpdateData['updated_on'] = date('Y-m-d H:i:s'); // ✅ add timestamp
        $this->rooms->update($booking['room_id'], $roomUpdateData);
    }
}

//  echo json_encode($roomUpdateData);

    // If status is check_in, insert rows in booking_guests table for all guests
    if ($newStatus === 'checked_in') {
        // Check if guest1_id exists in the booking
        if (!empty($booking['guest1_id'])) {
            $guestData = [
                'booking_id' => $bookingId,
                'guest_id' => $booking['guest1_id'],
                'created_on' => date('Y-m-d H:i:s'),
                'updated_on' => null,
                'deleted_on' => null
            ];
            
            $this->BookingGuest->insert($guestData);
        }
        
        // Check if guest2_id exists in the booking
        if (!empty($booking['guest2_id'])) {
            $guestData = [
                'booking_id' => $bookingId,
                'guest_id' => $booking['guest2_id'],
                'created_on' => date('Y-m-d H:i:s'),
                'updated_on' => null,
                'deleted_on' => null
            ];
            
            $this->BookingGuest->insert($guestData);
        }
    }
    
    // Insert status tracking record
    $trackingData = [
        'booking_id' => $bookingId,
        'status' => $newStatus,
        'updated_on' => null,
        'remarks' => $cancellationReason
    ];

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
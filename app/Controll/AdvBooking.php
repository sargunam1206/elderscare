<?php

namespace App\Controllers;

use App\Models\AdvanceBookingModel;
use App\Models\RoomsInfoModel;
use App\Models\BookingStatusTrackingModel;
use App\Models\BookingGuest;
use App\Models\GuestPersonalModel;
use App\Models\GuestGuardianModel;
use App\Models\GuestMedicalHistoryModel;
use App\Models\GuestLikesDisModel;

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
           $this->GuestPersonalModel = new GuestPersonalModel();
        $this->GuestGuardianModel = new GuestGuardianModel();
        $this->GuestMedicalHistoryModel = new GuestMedicalHistoryModel();
        $this->GuestLikesDisModel = new GuestLikesDisModel();

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
    // Normalize status
    $status = strtolower(trim($full['status'])) === 'waiting list' ? 'waiting' : $full['status'];

    $trackingData = [
        'booking_id' => $bookingId,
        'status'     => $status,   // ✅ will store "waiting" if "Waiting List"
        'remarks'    => null,
        'created_on' => date('Y-m-d H:i:s'),
        'updated_on' => null
    ];

 // ✅ Update room status based on booking status
            if (!empty($full['room_id'])) {
                $roomUpdateData = [];
                $newStatus = strtolower($full['status']); // make case-insensitive

                if ($newStatus === 'checked_in') {
                    $roomUpdateData['room_status'] = 'Occupied';
                } elseif ($newStatus === 'confirmed') {
                    $roomUpdateData['room_status'] = 'Reserved';
                } elseif ($newStatus === 'checked_out' || $newStatus === 'cancelled') {
                    $roomUpdateData['room_status'] = 'Vacant';
                }

                if (!empty($roomUpdateData)) {
                    $roomUpdateData['updated_on'] = date('Y-m-d H:i:s'); // timestamp
                    $this->rooms->update($full['room_id'], $roomUpdateData);
                }
            }

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

        return view('advancebooking/create',[
    'nextBookingNo' => $this->getNextBookingNo()
]);
    }

    private function getNextBookingNo()
{
    $db = \Config\Database::connect();
    $query = $db->query("SELECT MAX(booking_no) as last_booking FROM advance_bookings");
    $row = $query->getRow();
    return $row && $row->last_booking ? $row->last_booking + 1 : 1;
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

    $data['adv'] = $model->orderBy('id','desc')
                        ->findAll();
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
        'Room', 'Monthly Tariff', 'Status', 
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

     // If redirected from check-in, display "checked_in" in the form
    if ($this->request->getGet('from') === 'checked_in') {
        $booking['status'] = 'checked_in';
    }
    
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

public function update1($id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if ($this->request->getMethod() === 'post') {
        // Capture all form data
        $full = $this->request->getPost();

          // Convert checked_in (from form) to Occupied before saving
    if (isset($full['status']) && $full['status'] === 'checked_in') {
        $full['status'] = 'Occupied';
    }

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


public function update2($id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    date_default_timezone_set('Asia/Kolkata');

    if ($this->request->getMethod() === 'post') {
        // Capture all form data
        $full = $this->request->getPost();

        // Fetch booking record
        $booking = $this->AdvanceBookingModel->find($id);
        if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found');
        }

        $newStatus = $full['status'] ?? null;
        $originalStatus = $newStatus;
        echo "<pre>DEBUG: New Status = " . print_r($newStatus, true) . "</pre>";
        //exit;

        // Convert checked_in → Occupied for saving in AdvanceBooking
        if ($newStatus === 'checked_in') {
            $full['status'] = 'Occupied';
        }

        /** ───────── File Handling ───────── */
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

        // Handle multiple other documents
        $currentDocs = $this->request->getPost('current_other_documents') ?? [];
        if (is_string($currentDocs)) {
            $currentDocs = json_decode($currentDocs, true) ?? [];
        }

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
        $mergedDocs = array_merge($currentDocs, $newDocs);
        $full['other_documents_file'] = !empty($mergedDocs) ? json_encode($mergedDocs) : null;

        // Checkbox value
        $full['scanned_documents_collected'] = isset($full['scanned_documents_collected']) ? 1 : 0;

        // Update timestamp
        $full['updated_on'] = date("Y-m-d H:i:s");

        /** ───────── Save Advance Booking ───────── */
        if ($this->AdvanceBookingModel->update($id, $full)) {
            /** ───────── Additional Logic ───────── */
            // 1. Room status update
            if (!empty($booking['room_id'])) {
                $roomUpdateData = [];
                if ($newStatus === 'checked_in') {
                    $roomUpdateData['room_status'] = 'Occupied';
                } elseif (strtolower($newStatus) === 'confirmed') {
                    $roomUpdateData['room_status'] = 'Reserved';
                } elseif ($newStatus === 'checked_out' || $newStatus === 'cancelled') {
                    $roomUpdateData['room_status'] = 'Vacant';
                }

                if (!empty($roomUpdateData)) {
                    $roomUpdateData['updated_on'] = date('Y-m-d H:i:s');
                    $this->rooms->update($booking['room_id'], $roomUpdateData);
                }
            }

            // 2. Insert booking_guests if checked_in
          // 2. Insert booking_guests if checked_in
if ($originalStatus === 'checked_in') {
    echo "<pre>DEBUG: Booking Guest Insert\n";
    echo "Booking ID: " . $id . "\n";
    echo "Guest1 ID: " . ($booking['guest1_id'] ?? 'NULL') . "\n";
    echo "Guest2 ID: " . ($booking['guest2_id'] ?? 'NULL') . "\n</pre>";
    //exit;

    if (!empty($booking['guest1_id'])) {
        echo "hello";
        $guestData1 = [
            'booking_id' => $id,
            'guest_id'   => $booking['guest1_id'],
            'created_on' => date('Y-m-d H:i:s'),
            'updated_on' => null
        ];
        echo "<pre>DEBUG: Guest1 Data\n" . print_r($guestData1, true) . "</pre>";
        //exit;
        $this->BookingGuest->insert($guestData1);
    }

    if (!empty($booking['guest2_id'])) {
        $guestData2 = [
            'booking_id' => $id,
            'guest_id'   => $booking['guest2_id'],
            'created_on' => date('Y-m-d H:i:s'),
            'updated_on' => null
        ];
        echo "<pre>DEBUG: Guest2 Data\n" . print_r($guestData2, true) . "</pre>";
        //exit;
        $this->BookingGuest->insert($guestData2);
    }
}


            // 3. Insert into booking_status_tracking
            $trackingData = [
                'booking_id' => $id,
                'status'     => $newStatus, // keep original (checked_in, confirmed, etc.)
                'updated_on' => null,
                'remarks'    => null
            ];
            $this->bookingStatusTracking->insert($trackingData);

            $this->session->setFlashdata('success', 'Advance Booking updated successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to update Advance Booking');
        }

        return redirect()->to(base_url('viewadvancebooking'));
    }

    // If not POST, show edit form
    $data['booking'] = $this->AdvanceBookingModel->find($id);
    return view('advancebooking/edit', $data);
}

public function update($id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    date_default_timezone_set('Asia/Kolkata');

    if ($this->request->getMethod() === 'post') {
        // Capture all form data
        $full = $this->request->getPost();

        // Fetch booking record
        $booking = $this->AdvanceBookingModel->find($id);
        if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found');
        }

        $newStatus = $full['status'] ?? null;
        $originalStatus = $newStatus;

        // Convert checked_in → Occupied for saving in AdvanceBooking
        if ($newStatus === 'checked_in') {
            $full['status'] = 'Occupied';
        }

        /** ───────── File Handling ───────── */
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

        // Handle multiple other documents
        $currentDocs = $this->request->getPost('current_other_documents') ?? [];
        if (is_string($currentDocs)) {
            $currentDocs = json_decode($currentDocs, true) ?? [];
        }

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
        $mergedDocs = array_merge($currentDocs, $newDocs);
        $full['other_documents_file'] = !empty($mergedDocs) ? json_encode($mergedDocs) : null;

        // Checkbox value
        $full['scanned_documents_collected'] = isset($full['scanned_documents_collected']) ? 1 : 0;

        // Update timestamp
        $full['updated_on'] = date("Y-m-d H:i:s");

        // Store insertion results for display
        $insertionResults = [];

        /** ───────── Save Advance Booking ───────── */
        if ($this->AdvanceBookingModel->update($id, $full)) {
            /** ───────── Additional Logic ───────── */
            // 1. Room status update
            if (!empty($booking['room_id'])) {
                $roomUpdateData = [];
                if ($originalStatus === 'checked_in') {
                    $roomUpdateData['room_status'] = 'Occupied';
                } elseif (strtolower($originalStatus) === 'confirmed') {
                    $roomUpdateData['room_status'] = 'Reserved';
                } elseif ($originalStatus === 'checked_out' || $originalStatus === 'cancelled') {
                    $roomUpdateData['room_status'] = 'Vacant';
                }

                if (!empty($roomUpdateData)) {
                    $roomUpdateData['updated_on'] = date('Y-m-d H:i:s');
                    $this->rooms->update($booking['room_id'], $roomUpdateData);
                    $insertionResults['room_update'] = [
                        'type' => 'Room Status Update',
                        'data' => $roomUpdateData,
                        'room_id' => $booking['room_id'],
                        'success' => true
                    ];
                }
            }

            echo "<pre>DEBUG: Checking guest insertion conditions\n";
echo "originalStatus: " . $originalStatus . "\n";
echo "Condition (originalStatus === 'checked_in'): " . (($originalStatus === 'checked_in') ? 'TRUE' : 'FALSE') . "\n";
echo "guest1_id from booking: " . ($full['guest1_id'] ?? 'EMPTY') . "\n";
echo "guest2_id from booking: " . ($full['guest2_id'] ?? 'EMPTY') . "\n";
echo "BookingGuest model loaded: " . (isset($this->BookingGuest) ? 'YES' : 'NO') . "\n";
echo "</pre>";

            // 2. Insert booking_guests if checked_in
            if ($originalStatus === 'checked_in') {
                $guestInsertions = [];

                // Insert guest1 if exists
                if (!empty($full['guest1_id'])) {
                    $guestData1 = [
                        'booking_id' => $id,
                        'guest_id'   => $full['guest1_id'],
                        'created_on' => date('Y-m-d H:i:s'),
                        'updated_on' => null
                    ];
                    
                    $result1 = $this->BookingGuest->insert($guestData1);
                    
    
    if (!$result1) {
        echo "<pre>GUEST1 INSERT ERROR: " . print_r($this->BookingGuest->errors(), true) . "</pre>";
    }
                    $guestInsertions['guest1'] = [
                        'data' => $guestData1,
                        'success' => $result1,
                        'errors' => $result1 ? [] : $this->BookingGuest->errors()
                    ];
                }

                // Insert guest2 if exists
                if (!empty($full['guest2_id'])) {
                    $guestData2 = [
                        'booking_id' => $id,
                        'guest_id'   => $full['guest2_id'],
                        'created_on' => date('Y-m-d H:i:s'),
                        'updated_on' => null
                    ];
                    
                    $result2 = $this->BookingGuest->insert($guestData2);
                    $guestInsertions['guest2'] = [
                        'data' => $guestData2,
                        'success' => $result2,
                        'errors' => $result2 ? [] : $this->BookingGuest->errors()
                    ];
                }

                $insertionResults['booking_guests'] = $guestInsertions;
            }

            // 3. Insert into booking_status_tracking
            $trackingData = [
                'booking_id' => $id,
                'status'     => $originalStatus,
                'updated_on' => date('Y-m-d H:i:s'),
                'remarks'    => null
            ];
            
            $trackingResult = $this->bookingStatusTracking->insert($trackingData);
            $insertionResults['status_tracking'] = [
                'type' => 'Status Tracking',
                'data' => $trackingData,
                'success' => $trackingResult,
                'errors' => $trackingResult ? [] : $this->bookingStatusTracking->errors()
            ];

            // 4. Show all insertion results before success message
            echo "<div style='background: #f0f0f0; padding: 20px; margin: 20px; border: 2px solid #333;'>";
            echo "<h3 style='color: #333;'>INSERTION RESULTS DEBUG</h3>";
            echo "<pre style='background: #fff; padding: 15px; border: 1px solid #ccc;'>";
            echo "BOOKING ID: " . $id . "\n";
            echo "STATUS: " . $originalStatus . "\n";
            echo "UPDATE TIME: " . date('Y-m-d H:i:s') . "\n\n";
            
            echo "=== ADVANCE BOOKING UPDATE ===\n";
            echo "Success: Yes\n";
            echo "Updated Fields: " . print_r($full, true) . "\n\n";
            
            foreach ($insertionResults as $key => $result) {
                echo "=== " . strtoupper(str_replace('_', ' ', $key)) . " ===\n";
                if ($key === 'booking_guests') {
                    foreach ($result as $guestKey => $guestResult) {
                        echo "--- " . strtoupper($guestKey) . " ---\n";
                        echo "Success: " . ($guestResult['success'] ? 'Yes' : 'No') . "\n";
                        echo "Data: " . print_r($guestResult['data'], true);
                        if (!empty($guestResult['errors'])) {
                            echo "Errors: " . print_r($guestResult['errors'], true);
                        }
                        echo "\n";
                    }
                } else {
                    echo "Success: " . ($result['success'] ? 'Yes' : 'No') . "\n";
                    echo "Data: " . print_r($result['data'], true);
                    if (isset($result['room_id'])) {
                        echo "Room ID: " . $result['room_id'] . "\n";
                    }
                    if (!empty($result['errors'])) {
                        echo "Errors: " . print_r($result['errors'], true);
                    }
                }
                echo "\n";
            }
            echo "</pre>";
            echo "</div>";
            //exit;

            // Now show the success message
            $this->session->setFlashdata('success', 'Advance Booking updated successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to update Advance Booking');
        }

        return redirect()->to(base_url('viewadvancebooking'));
    }

    // If not POST, show edit form
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
    
       public function generate_pdf($guestId)
{
    // Get guest data
    $guest = $this->GuestPersonalModel
        ->where('guest_id', $guestId)
        ->where('deleted_on', null)
        ->first();
        
    if ($guest) {
        $guest['guardians'] = $this->GuestGuardianModel
            ->where('guest_id', $guestId)
            ->findAll();
            
        $guest['medical'] = $this->GuestMedicalHistoryModel
            ->where('guest_id', $guestId)
            ->first();
            
        $guest['preferences'] = $this->GuestLikesDisModel
            ->where('guest_id', $guestId)
            ->first();
        
        // Load mPDF library
        $mpdf = new \Mpdf\Mpdf();
        
        
        // Create HTML content for PDF
        $html = view('advancebooking/guest_pdf', ['guest' => $guest]);
        
        // Write HTML content
        $mpdf->WriteHTML($html);
        log_message('debug', 'mPDF version: ' . \Mpdf\Mpdf::VERSION);

        
        // Clear any previous output
        ob_clean();
        
        // Output PDF for preview with proper headers
        $mpdf->Output("guest-info-{$guestId}.pdf", 'I');
        exit; // Important: stop further execution
    } else {
        return redirect()->back()->with('error', 'Guest not found');
    }
}
     
}
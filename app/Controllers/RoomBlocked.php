<?php

namespace App\Controllers;

use App\Models\AssetTypeModel;
use App\Models\AssignedAssetsInfoModel;
use App\Models\RoomsInfoModel;
use App\Models\RoomBlockedModel;
use App\Models\AdvanceBookingModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class RoomBlocked extends BaseController
{
    protected $assetTypeModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->assetTypeModel = new AssetTypeModel();
        $this->assign = new AssignedAssetsInfoModel();
        $this->rooms = new RoomBlockedModel();
    }

 
  

public function add()
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if ($this->request->getPost('submit')) {

        $full = $this->request->getPost();
        unset($full['submit']); 
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");

        // Add created_on for room_blocked table
        $full['created_on'] = $date;
        $full['updated_on']= null;

        // Save blocked room
        $roomBlockedModel = new RoomBlockedModel();
        if ($roomBlockedModel->save($full)) {

            // Update the corresponding room status in rooms table
            $roomsModel = new RoomsInfoModel();
            $roomsModel->update($full['room_id'], [
                'room_status' => 'Blocked',
                'updated_on' => $date
            ]);

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Room blocked successfully.');
        } else {
            print_r($roomBlockedModel->errors()); // Optional: shows validation errors if any
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'Failed to block room.');
        }

        return redirect()->to(base_url('roomblocked'));
    }
}

       

    
public function view()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $from_date = $this->request->getGet('from_date');
    $to_date   = $this->request->getGet('to_date');
    $room_no   = $this->request->getGet('room_no');
    $status    = $this->request->getGet('status');

    $query = $this->rooms->where('deleted_on', null);

    if (!empty($from_date)) {
        $query->where('created_on >=', $from_date);
    }
    if (!empty($to_date)) {
        $query->where('created_on <=', $to_date);
    }
    if (!empty($room_no) && $room_no != 'all') {
        $query->where('room_no', $room_no);
    }
    if (!empty($status) && $status != 'all') {
        $query->where('status', $status);
    }

    $rooms = $query->findAll();

    // Handle PDF export
    if ($this->request->getGet('pdf')) {
        return $this->exportPDF($rooms);
    }

    // Handle Excel export
    if ($this->request->getGet('excel')) {
        return $this->exportExcel($rooms);
    }

    $data = [
        'rooms'           => $rooms,
        'filter_from_date'=> $from_date,
        'filter_to_date'  => $to_date,
        'filter_room_no'  => $room_no,
        'filter_status'   => $status,
        'room_nos'        => $this->rooms->select('DISTINCT(room_no) as room_no')->findAll()
    ];

    return view('roomblocked/view', $data);
}

private function exportPDF($rooms)
{
    $mpdf = new \Mpdf\Mpdf();

    // Load template view with data
    $html = view('roomblocked/pdf_template', ['rooms' => $rooms]);

    $mpdf->WriteHTML($html);

    // Get PDF as string
    $pdfContent = $mpdf->Output('', 'S');

    // Prepare response (inline view in browser)
    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/pdf');
    $response->setHeader('Content-Disposition', 'inline; filename="blocked_rooms.pdf"');

    return $response->setBody($pdfContent);
}



private function exportExcel($rooms)
{
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Headers
    $headers = ['S.No', 'Room No', 'Room Status', 'Reason', 'Start Date', 'End Date', 'Status'];
    $col = 'A';
    foreach ($headers as $header) {
        $sheet->setCellValue($col.'1', $header);
        $col++;
    }

    // Data
    $rowNum = 2;
    $i = 1;
    foreach ($rooms as $row) {
        $sheet->setCellValue('A'.$rowNum, $i);
        $sheet->setCellValue('B'.$rowNum, $row['room_no']);
        $sheet->setCellValue('C'.$rowNum, $row['room_status']);
        $sheet->setCellValue('D'.$rowNum, $row['reason']);
        $sheet->setCellValue('E'.$rowNum, $row['start_date']);
        $sheet->setCellValue('F'.$rowNum, $row['end_date']);
        $sheet->setCellValue('G'.$rowNum, $row['status']);
        $i++;
        $rowNum++;
    }

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $filename = 'blocked_rooms.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $writer->save('php://output');
    exit;
}




 public function update($id)
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $full = $this->request->getPost();

    // Debug: see what data was posted
    // print_r($full); exit;

    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");

    // Set updated_on for blocked room
    $full['updated_on'] = $date;

    // Update room_blocked table
    $this->rooms->update($id, $full);

    // Update the room status in rooms table + updated_on
    if (isset($full['room_id']) && isset($full['room_status'])) {
        $roomsModel = new \App\Models\RoomsInfoModel();
        $roomsModel->update($full['room_id'], [
            'room_status' => $full['room_status'],
            'updated_on'  => $date
        ]);
    }

    return redirect()->to('roomblocked')->with('success', 'Updated successfully.');
}

    public function delete($id)
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->rooms->update($id, [
            'deleted_on' => $date,
        ]);

        return redirect()->to('roomblocked')->with('success', 'Deleted successfully.');
    }


public function getRoomsForModal()
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    // Get the room type from request or existing booking data
    $type = $this->request->getGet('type') ?? $this->request->getGet('existing_type');
    
    // Base query for vacant rooms
    $query = $this->rooms->where('deleted_on', null)
                         ->where('room_status', 'Vacant');
    
    // Add type filter if provided
    if (!empty($type)) {
        $query->where('room_type', $type);
    }
    
    $rooms = $query->orderBy('room_no', 'asc')
                   ->findAll();
    
    if (empty($rooms)) {
        return $this->response->setJSON(['error' => 'No vacant rooms found' . (!empty($type) ? " for $type" : '')]);
    }
    
    foreach ($rooms as &$room) {
        $room['status_color'] = 'green';
    }
    
    return $this->response->setJSON($rooms);
}



  public function maint()
{
    $blockedModel = new RoomBlockedModel();

    // Fetch all blocked/maintenance room data
    $blockedData = $blockedModel->select('room_id, reason, status')->findAll();

    // Map blocked data by room_id for easy JS access
    $roomBlockedMap = [];
    foreach ($blockedData as $row) {
        $roomBlockedMap[$row['room_id']] = $row;
    }

    // Return JSON response
    return $this->response->setJSON([
        'roomBlockedMap' => $roomBlockedMap
    ]);
}






}
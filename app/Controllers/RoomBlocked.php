<?php

namespace App\Controllers;

use App\Models\AssetTypeModel;
use App\Models\AssignedAssetsInfoModel;
use App\Models\RoomsInfoModel;
use App\Models\RoomBlockedModel;
use App\Models\AdvanceBookingModel;

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

    

       $data['rooms'] = $this->rooms->where('deleted_on', null)->findAll();

      
      return view('roomblocked/view',$data);
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





}
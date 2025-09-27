<?php

namespace App\Controllers;

use App\Models\AssetTypeModel;
use App\Models\AssignedAssetsInfoModel;
use App\Models\RoomsInfoModel;

class Rooms extends BaseController
{
    protected $assetTypeModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->assetTypeModel = new AssetTypeModel();
        $this->assign = new AssignedAssetsInfoModel();
        $this->rooms = new RoomsInfoModel();
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
         echo json_encode($full);  
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");


       


     
         // Save the data to the database
        if ($this->rooms->save($full)) {
           echo "Room saved successfully!";
        } else {
            echo "Failed to save room.";
            print_r($this->rooms->errors()); // Optional: shows validation errors if any
        }

         $session = \Config\Services::session();
         $session->setFlashdata('success', 'Registered successfully');
         return redirect()->to(base_url('rooms'));
        
     }

        
    }
       

    
    public function view()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

      

       $data['rooms'] = $this->rooms->where('deleted_on', null)->findAll();

      
      return view('rooms/view', $data);
    }


    public function update($id)
    {
      ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
         $full = $this->request->getPost();
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
      
        $this->rooms->update($id, $full);



        return redirect()->to('rooms')->with('success', 'Updated successfully.');
    }
    public function delete($id)
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->rooms->update($id, [
            'deleted_on' => $date,
        ]);

        return redirect()->to('rooms')->with('success', 'Deleted successfully.');
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


 public function roomstatus()
    {
         ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
       
        // if (!session()->get('logged_in')) {
        //     return redirect()->to(base_url());

            //return redirect()->to('/');
       // }
        return view('roomstatus/roomstatus');
       
    }

}
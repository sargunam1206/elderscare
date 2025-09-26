<?php

namespace App\Controllers;

use App\Models\RoomsInfoModel;
use App\Models\ServiceTypeInfoModel;

class ServiceType extends BaseController
{
     protected $ServiceTypeInfoModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->servicetype = new ServiceTypeInfoModel();
        
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
        if ($this->servicetype->save($full)) {
           echo "Room saved successfully!";
        } else {
            echo "Failed to save room.";
            print_r($this->servicetype->errors()); // Optional: shows validation errors if any
        }

         $session = \Config\Services::session();
         $session->setFlashdata('success', 'Registered successfully');
         return redirect()->to(base_url('servicetype'));
        
     }

        
    }
       

    
    public function view()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

      
      
       $data['servicetype'] = $this->servicetype->where('deleted_on', null)->findAll();

      
       return view('servicetype/view', $data);
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
      
        $this->servicetype->update($id, $full);



        return redirect()->to('servicetype')->with('success', 'Updated successfully.');
    }
    public function delete($id)
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->servicetype->update($id, [
            'deleted_on' => $date,
        ]);

        return redirect()->to('servicetype')->with('success', 'Deleted successfully.');
    }
    

}
<?php

namespace App\Controllers;

use App\Models\RoomsInfoModel;
use App\Models\CategoryModel;
use App\Models\ServiceTypeInfoModel;
class Category extends BaseController
{
     

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->category = new CategoryModel();
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
        if ($this->category->save($full)) {
           echo "Room saved successfully!";
        } else {
            echo "Failed to save room.";
            print_r($this->category->errors()); // Optional: shows validation errors if any
        }

         $session = \Config\Services::session();
         $session->setFlashdata('success', 'Registered successfully');
         return redirect()->to(base_url('category'));
        
     }

        
    }
       

    
    public function view()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

      
       $data['servicetype'] = $this->servicetype->where('deleted_on', null)->findAll();
     

       $data['category'] = $this->category->where('deleted_on', null)->findAll();
  
      
       return view('category/view', $data);
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
      
        $this->category->update($id, $full);



        return redirect()->to('category')->with('success', 'Updated successfully.');
    }
    public function delete($id)
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->category->update($id, [
            'deleted_on' => $date,
        ]);

        return redirect()->to('category')->with('success', 'Deleted successfully.');
    }
    

}
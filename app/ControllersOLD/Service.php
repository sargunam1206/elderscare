<?php

namespace App\Controllers;
use App\Models\ServiceModel;



class Service extends BaseController
{

  //protected $session;
    protected $serviceModel;
  function __construct()
    {

        $this->session = \Config\Services::session();
        //$this->session->start();
        $this->serviceModel = new ServiceModel();


    }
            public function index()
            {
                helper(['url']);
                 ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                

                if ($this->request->getPost('submit')) {
                  // Capture all form data
                  $full = $this->request->getPost();
                  date_default_timezone_set('Asia/Kolkata');
                  $date=date("Y-m-d H:i:s");
      
                  // Prepare the data array to insert into the database
                  $data = [
                      'asset_id' => $full['asset_id'] ?? null,
                      'asset_name' => $full['asset_name'] ?? null,
                      'req_date' => $full['req_date'] ?? null,
                      'issue' => $full['issue'] ?? null,
                      'priority' => $full['priority'] ?? null,
                      'created_on'=>$date,
                  ];
      
                  // Save the data to the database
                  $this->serviceModel->save($data);
      
                  // Set a success message and redirect
                  $this->session->setFlashdata('success', 'Repair request submitted successfully.');
                  //return redirect()->to('');
              }

                //echo " testttttt";
                
                return view('service/index');
            }
            public function view()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
            
                // Retrieve only records where 'deleted_on' is NULL
                $data['requests'] = $this->serviceModel
                                          ->where('deleted_on', 'NULL')
                                          ->findAll();
                //echo json_encode($data);                          
            
                return view('service/view', $data);
            }
            

            public function edit($id)
{
    // Fetch the specific repair request based on the provided ID
    $data['request'] = $this->serviceModel->find($id);

    

    // Load the edit view and pass the repair request data
    return view('service/edit', $data);
}

public function update()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Load the model for the repair requests
    $info = new ServiceModel();  // Assuming RepairRequestModel is the model for your repair requests

    // Get the request ID
    $id = $this->request->getPOST('id'); // Assuming 'repair_id' is the ID field in the form
    
    // Set the current date and time (for tracking when the request was updated)
    date_default_timezone_set("Asia/Kolkata");
    $date = date("Y-m-d h:i:s");
    
    // Session handling
    $session = session();

    // Prepare the data to update
    $data = [
        'asset_id' => $this->request->getPOST('asset_id'),
        'asset_name' => $this->request->getPOST('asset_name'),
        'req_date' => $this->request->getPOST('req_date'),
        'issue' => $this->request->getPOST('issue'),
        'priority' => $this->request->getPOST('priority'),
        'updated_on' => $date,  // Set the updated timestamp
    ];
    
    // Update the record
    $datas = $info->where('id', $id)->update($id, $data);
    
    if (isset($datas)) {
        // Set a success flash message if update was successful
        $session->setFlashdata('success', 'Repair request updated successfully.');
    } else {
        // Optionally handle the failure (e.g., set error flash message)
    }
    
    // Fetch all data that is not marked as deleted
    $info->where('deleted_on', null);
    $data['alldata'] = $info->orderBy('id', 'ASC')->findAll();
    
    // Redirect to the view page
    helper(['url']);
    return redirect()->to('viewrequest');  // Redirect to the page where the requests are listed
}

public function delete($id)
{
    // Load the model for the repair requests
    $info = new ServiceModel();

    // Check if the record exists and is not already deleted
    $request = $info->where('id', $id)->where('deleted_on', null)->first();

   
     
        // Set the current timestamp for deleted_on
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d H:i:s");

        // Update the deleted_on field instead of deleting the record
        $info->update($id, ['deleted_on' => $date]);

        // Set a success flash message
        session()->setFlashdata('success', 'Repair request deleted.');
   

    // Redirect to the view request page
    return redirect()->to('viewrequest');
}





                
                
}
        
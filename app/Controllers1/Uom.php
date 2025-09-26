<?php

namespace App\Controllers;

use App\Models\UomModel;

class Uom extends BaseController
{
    protected $dealerModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->uomModel = new UomModel();
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
         $full['created_on']=$date;
      
         // Save the data to the database
         $this->uomModel->save($full);
         $session = \Config\Services::session();
         $session->setFlashdata('success', 'Registered successfully');
         // Set a success message and redirect
         //$this->session->setFlashdata('success', 'Added successfully.');
         //return redirect()->to('');
         
        return redirect()->to(base_url('viewuom'));
        //return view('uom/create');
     }
        return view('uom/create');
    }

    
    public function view()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

       $data['uom'] =  $this->uomModel->where('deleted_on', null)->findAll();
      return view('uom/view', $data);
    }

    public function edit($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        $data['uom'] =  $this->uomModel->find($id);
    
        if (!$data['uom']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Unit of Measurement (UOM) with ID $id not found");
        }
    
        return view('uom/edit', $data);
    }

    public function update($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");
        
        $this->uomModel->update($id, [
            'uom' => $this->request->getPost('uom'),
            'updated_on' => $date,
        ]);

        return redirect()->to('viewuom')->with('success', 'Updated successfully.');
    }

    public function delete($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->uomModel->update($id, [
            'deleted_on' => $date,
        ]);

        return redirect()->to('viewuom')->with('success', 'Deleted successfully.');
    }
    public function delete_uom()
    {
        $input = $this->request->getJSON();
        date_default_timezone_set('Asia/Kolkata');
        $deletedOn = date("Y-m-d H:i:s");
    
        if (isset($input->ids) && is_array($input->ids)) {
            $assetModel = new UomModel();
            $successCount = 0;
            $errorCount = 0;
    
            // Perform the soft delete by updating the 'deleted_on' field
            foreach ($input->ids as $id) {
                $updateData = ['deleted_on' => $deletedOn];
                if ($assetModel->update($id, $updateData)) {
                    $successCount++;
                } else {
                    $errorCount++;
                }
            }
    
            // Set flash messages based on the result
            if ($successCount > 0) {
                $this->session->setFlashdata('success', "$successCount deleted successfully.");
            }
            if ($errorCount > 0) {
                $this->session->setFlashdata('error', "$errorCount failed to be deleted. Please try again.");
            }
    
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Unit of Measurement (UOM) deleted successfully.',
                'successCount' => $successCount,
                'errorCount' => $errorCount,
            ]);
        } else {
            // Set an error message if no valid IDs are received
            $this->session->setFlashdata('error', 'No valid IDs received. Please try again.');
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No valid IDs received.',
            ]);
        }
}

}
/*

    

    

    */


      
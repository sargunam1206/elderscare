<?php

namespace App\Controllers;

use App\Models\AssetMakeModel;

class AssetMake extends BaseController
{
    protected $assetMakeModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->assetMakeModel = new AssetMakeModel();
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
         $this->assetMakeModel->save($full);
         $session = \Config\Services::session();
         $session->setFlashdata('success', 'Registered successfully');
         // Set a success message and redirect
         //$this->session->setFlashdata('success', 'Added successfully.');
         //return redirect()->to('');
         
        return redirect()->to(base_url('viewassettype'). '?tab=make');
        // return view('assetmake/create');
     }
        return view('assetmake/create');
    }
    public function view()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

       $data['assetmakes'] = $this->assetMakeModel->where('deleted_on', null)->findAll();
      return view('assetmake/view', $data);
    }

    public function edit($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        $data['assetmakes'] = $this->assetMakeModel->find($id);
    
        if (!$data['assetmakes']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Asset Make with ID $id not found");
        }
    
        return view('assetmake/edit', $data);
    }

    public function update($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");
        
        $this->assetMakeModel->update($id, [
            'asset_make' => $this->request->getPost('asset_make'),
            'updated_on' => $date,
        ]);

        //return redirect()->to('viewassetmake')->with('success', 'updated successfully.');
        return redirect()->to('viewassettype?tab=make')->with('success', 'Updated successfully.');

    }

    public function delete($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->assetMakeModel->update($id, [
            'deleted_on' => $date,
        ]);

        // return redirect()->to('viewassetmake')->with('success', 'Deleted successfully.');
        return redirect()->to('viewassettype?tab=make')->with('success', 'Deleted successfully.');
    }

    public function delete_assetmakes()
    {
        $input = $this->request->getJSON();
        date_default_timezone_set('Asia/Kolkata');
        $deletedOn = date("Y-m-d H:i:s");
    
        if (isset($input->ids) && is_array($input->ids)) {
            $assetModel = new AssetMakeModel();
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
                'message' => 'Asset Makes deleted successfully.',
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


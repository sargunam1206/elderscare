<?php

namespace App\Controllers;

use App\Models\AssetTypeModel;

class AssetType extends BaseController
{
    protected $assetTypeModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->assetTypeModel = new AssetTypeModel();
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
         $this->assetTypeModel->save($full);
         $session = \Config\Services::session();
         $session->setFlashdata('success', 'Registered successfully');
         // Set a success message and redirect
         //$this->session->setFlashdata('success', 'Added successfully.');
         //return redirect()->to('');
         
         return redirect()->to(base_url('viewassettype'));
         //return view('assettype/create');
     }

        
          
       // $data['assettypes'] = $this->assetTypeModel->where('deleted_on', null)->findAll();
        //return view('assettype/index', $data);

        return view('assettype/create');
    }

    
    public function viewAssetType()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

       $data['assettypes'] = $this->assetTypeModel->where('deleted_on', null)->findAll();
      return view('assettype/view', $data);
    }
    public function edit($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       //$base=base64_decode(base64_decode(base64_decode($id)));
        $data['assettypes'] = $this->assetTypeModel->find($id);
    
        if (!$data['assettypes']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Asset Type with ID $id not found");
        }
    
        return view('assettype/edit', $data);
    }

    public function update($id)
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->assetTypeModel->update($id, [
            'asset_type' => $this->request->getPost('asset_type'),
            'updated_on' => $date,
        ]);

        return redirect()->to('viewassettype')->with('success', 'Asset Type updated successfully.');
    }
    public function delete($id)
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->assetTypeModel->update($id, [
            'deleted_on' => $date,
        ]);

        return redirect()->to('viewassettype')->with('success', 'Asset Type deleted successfully.');
    }
    public function delete_assettypes()
    {
        $input = $this->request->getJSON();
        date_default_timezone_set('Asia/Kolkata');
        $deletedOn = date("Y-m-d H:i:s");
    
        if (isset($input->ids) && is_array($input->ids)) {
            $assetModel = new AssetTypeModel();
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
                $this->session->setFlashdata('success', "$successCount Unit of Measurement (UOM)(s) deleted successfully.");
            }
            if ($errorCount > 0) {
                $this->session->setFlashdata('error', "$errorCount Unit of Measurement (UOM)(s) failed to be deleted. Please try again.");
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

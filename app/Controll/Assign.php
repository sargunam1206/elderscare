<?php

namespace App\Controllers;

use App\Models\AssetTypeModel;
use App\Models\AssignedAssetsInfoModel;

class Assign extends BaseController
{
    protected $assetTypeModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->assetTypeModel = new AssetTypeModel();
        $this->assign = new AssignedAssetsInfoModel();
    }

 
    
    public function index()

    {
        helper(['url']);
       

       if ($this->request->getPost('submit')) {
       
           echo 'dsa';
         $accessories=$this->request->getPost('addaccessories');
         $full = $this->request->getPost();
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
         $full['accessories']=$accessories;
         unset($full['addaccessories']);
         $full['created_on']=$date;
        

       


     
         // Save the data to the database
         $this->assign->save($full);
         $session = \Config\Services::session();
         $session->setFlashdata('success', 'Registered successfully');
        return redirect()->to(base_url('assign'));
        
     }

        
    }

    
    public function viewAssetType()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

      

       $data['assign'] = $this->assign->where('deleted_on', null)->findAll();

      
      return view('assign/view', $data);
    }
    public function edit($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
      
        $data['assettypes'] = $this->assetTypeModel->find($id);
        
    
        if (!$data['assettypes']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Asset Type with ID $id not found");
        }
       
        return view('assettype/edit', $data);
    }

    public function update($id)
    {
      ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        $accessories=$this->request->getPost('addaccessories');
         $full = $this->request->getPost();
         $full['accessories']=$accessories;
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
      
        $this->assign->update($id, $full
        );



        return redirect()->to('assign')->with('success', 'Updated successfully.');
    }
    public function delete($id)
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");

        $this->assign->update($id, [
            'deleted_on' => $date,
        ]);

        return redirect()->to('assign')->with('success', 'Deleted successfully.');
    }
    

}
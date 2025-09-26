<?php

namespace App\Controllers;

use App\Models\ServiceBookModel;


class Servicebook extends BaseController
{
    protected $assetTypeModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->servicebook = new ServiceBookModel();
     
    }

 
    
  

    
    public function view($id='')
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

      if($id==''){

       $data['servicebook'] = $this->servicebook->where('deleted_on', null)->findAll();
       }else{
       
        $data['servicebook'] = $this->servicebook->where('guest_id',"$id")->findAll();
                                                 
       }
     
      return view('servicebook/view', $data);
    }


  



}
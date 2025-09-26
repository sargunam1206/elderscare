<?php

namespace App\Controllers;

use App\Models\ActivityModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Frontoffice extends BaseController
{
  function __construct()
    {
        $this->session = \Config\Services::session();
    }
    

public function index()
{
    helper(['url', 'form']);
    
    
    return view('frontoffice/index',);
}

}
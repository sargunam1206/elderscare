<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class Employee extends BaseController
{

            public function index()
            {
                helper(['url']);
                
                $data['page']="user"; 
                return view('personalinfo/users_table',$data);
                
            }
}
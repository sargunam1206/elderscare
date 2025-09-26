<?php

namespace App\Controllers;
use App\Models\UserInfoModel;
use App\Models\DepartmentInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\ExperienceInfoModel;
use App\Models\RequestHistoryModel;
use App\Models\PersonalInfoModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class UserInfo extends BaseController
{
  function __construct()
    {

        $this->session = \Config\Services::session();
        $this->session->start();


    }
            public function index()
            {
                helper(['url']);
                return view('users/home');
            }
            
               public function dashboard()
            {
                helper(['url']);
                return view('layout/dashboard');
            }
            
            
             public function register_viyoma()
            {
                helper(['url']);
               
                
                if($this->request->getPOST('submit')!=''){
                   
                      $rules = [
                    'user_name' => 'required',
                    'user_email' => 'required',
                    'user_phoneno' => 'required',
                    'user_password' => 'required',
                    
                ];
                  
                if($this->validate($rules)){
                   
                        
                        $users= new UserInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'username' =>$this->request->getPOST('user_name'),
                            'user_email' =>$this->request->getPOST('user_email'),
                            'user_contactno' =>$this->request->getPOST('user_phoneno'),
                            
                            'user_password' =>password_hash($this->request->getPOST('user_password'), PASSWORD_DEFAULT),
                            'user_created_on'=>$date,
                            'user_updated_on'=>$date
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        return view("users/login_viyoma");
                        
                        
                }
                
            }else{
                 return view('users/register_viyoma');
            }
        }
            
              public function login_viyoma()
            {
                helper(['url']);
              
                
                
                
               if($this->request->getPOST('submit')!=''){
                $users = new UserInfoModel();

                $user_phoneno = $this->request->getPOST('user_phoneno');
                $password = $this->request->getPOST('user_password');

                $data = $users->where('user_contactno', $user_phoneno)->first();
                  
                if ($data) {

                    if (password_verify($password,$data['user_password'])) {
                        
                        $session_data = [
                        'phone_no' => $data['user_contactno'],
                        'logged_in' => TRUE,
                      ];
               
                     return view('layout/dashboard');
                        
                    } 
                    else {
                      $session= \Config\Services::session();
                      $session->setFlashdata('failed', 'Password Incorrect');
                     return view('users/login_viyoma');
                     
                      
                    }
                } 

                else {
                        $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Phone Number is Not Registered ');
                        return view('users/login_viyoma');
                       
                         
                }
              }else{
                    return view('users/login_viyoma');
              }
              
              
            }

    public function logout()
    {
        helper(['url']);
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        $this->session->remove(['phone_no','logged_in']);
        $this->session->destroy();
        return redirect()->to('/');
    }

}
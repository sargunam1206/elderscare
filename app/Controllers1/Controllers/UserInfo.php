<?php

namespace App\Controllers;
use App\Models\UserInfoModel;
use App\Models\AddPurchaseModel;
use App\Models\AssetModel;
use App\Models\AssignedAssetsInfoModel;
use Config\Services;

class UserInfo extends BaseController
{
    function __construct()
    {
        helper('url');
        $this->session = \Config\Services::session();
        //$this->session = Services::session();
        $this->session->start();
    }

    public function index()
    {
        helper(['url']);
        return view('users/home');
    }


public function dashboard()
{

      ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
     $purchaseModel = new AddPurchaseModel();
      $assetModel = new AssetModel();
       $assignedAssetsModel = new AssignedAssetsInfoModel();

    // Fetch the latest 5 purchases only
    $data['alldata'] = $purchaseModel
    ->where('deleted_on', null)
    ->orderBy('created_on', 'DESC')
    ->limit(5)
    ->get()
    ->getResultArray();
echo count($data['alldata']);
//exit;

 $data['totalAssets'] = $assetModel->where('deleted_on', null)->countAllResults();

  $data['assetsAssigned'] = $assignedAssetsModel
        ->where('deleted_on', null) // if applicable
        ->countAllResults();
    return view('layout/dashboard', $data);
}






    public function dashboard1()
    {
       
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url());

            //return redirect()->to('/');
        }
        return view('layout/dashboard');
       
    }

    public function register_viyoma()
    {
        helper(['url']);

        if($this->request->getPost('submit') != '') {
            $rules = [
                'user_name' => 'required',
                'user_email' => 'required',
                'user_phoneno' => 'required',
                'user_password' => 'required',
            ];

            if($this->validate($rules)) {
                $users = new UserInfoModel();
                date_default_timezone_set('Asia/Kolkata');
                $date = date("Y-m-d H:i:s");

                $data = [
                    'username' => $this->request->getPost('user_name'),
                    'user_email' => $this->request->getPost('user_email'),
                    'user_contactno' => $this->request->getPost('user_phoneno'),
                    'user_password' => password_hash($this->request->getPost('user_password'), PASSWORD_DEFAULT),
                    'user_created_on' => $date,
                    'user_updated_on' => $date,
                ];

                $users->save($data);

                $this->session->setFlashdata('success', 'Registered successfully'); 
                return view("users/login_viyoma");
            }
        } else {
            return view('users/register_viyoma');
        }
    }

    public function login_viyoma()
    {
        helper(['url']);

        if($this->request->getPost('submit') != '') {
            $users = new UserInfoModel();
            $user_phoneno = $this->request->getPost('user_phoneno');
            $password = $this->request->getPost('user_password');

            // Find the user by phone number
            $data = $users->where('user_contactno', $user_phoneno)->first();

            if ($data) {
                // Verify the password
                if (password_verify($password, $data['user_password'])) {
                    // Set session data on successful login
                    $session_data = [
                        'phone_no' => $data['user_contactno'],
                        'logged_in' => TRUE,
                    ];
                    $this->session->set($session_data);

                  // redirect()->to(base_url('dashboard'));
                  return redirect()->to('dashboard');



                //   return redirect()->to('dashboard');
                } else {
                    // Incorrect password
                    $this->session->setFlashdata('failed', 'Password Incorrect');
                    return view('users/login_viyoma');
                }
            } else {
                // Phone number not registered
                $this->session->setFlashdata('failed', 'Phone Number is Not Registered');
                return view('users/login_viyoma');
            }
        } else {
            return view('users/login_viyoma');
        }
        
    }

    public function logout()
    {
        helper(['url']);
        // Remove session data on logout
        $this->session->remove(['phone_no', 'logged_in']);
        $this->session->destroy();
        return redirect()->to('/');
    }

   /*
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
$this->session->remove(['phone_no','logged_in']);
$this->session->destroy();
return redirect()->to('/');
}*/
}
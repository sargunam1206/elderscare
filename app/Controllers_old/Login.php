<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // If user is already logged in, redirect to dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        return view('login/index');
    }

  public function process()
{
    $validation = \Config\Services::validation();
   
    $rules = [
        'user_mobileno' => 'required|min_length[10]|max_length[10]|numeric',
        'user_password' => 'required'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
    }

    $mobile = $this->request->getPost('user_mobileno');
    $password = $this->request->getPost('user_password');

    $user = $this->userModel->where('user_mobileno', $mobile)->first();

    if (!$user) {
        return redirect()->back()
            ->withInput()
            ->with('error', 'Invalid mobile number or password');
    }

    if (!password_verify($password, $user['user_password'])) {
        return redirect()->back()
            ->withInput()
            ->with('error', 'Invalid password');
    }

    // Set user session
    $sessionData = [
        'user_id' => $user['user_id'],
        'user_name' => $user['user_name'],
        'user_type' => $user['user_type'],
        'isLoggedIn' => true
    ];

    session()->set($sessionData);

    return redirect()->to('/dashboard');
}


   public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
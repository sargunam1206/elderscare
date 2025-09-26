<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }

    public function index()
    {
        helper(['url', 'form']);
        
        $currentUserType = session()->get('user_type');
        $currentUserId = session()->get('user_id');
        
        $data['users'] = $this->userModel->getUsersForCurrentUser($currentUserType, $currentUserId);
        $data['allowedUserTypes'] = $this->userModel->getAllowedUserTypes($currentUserType);
        $data['currentUserType'] = $currentUserType;
        
        return view('user/list', $data);
    }

    public function store()
    {
        helper(['url', 'form']);
        
        $currentUserType = session()->get('user_type');
        $allowedUserTypes = $this->userModel->getAllowedUserTypes($currentUserType);
        
        $rules = $this->userModel->validationRules;
        $rules['confirm_password'] = 'required|matches[user_password]';
        
        $requestedUserType = $this->request->getPost('user_type');
        if (!in_array($requestedUserType, $allowedUserTypes)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'You are not authorized to create this type of user');
        }

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $data = [
            'user_name' => $this->request->getPost('user_name'),
            'user_mobileno' => $this->request->getPost('user_mobileno'),
            'user_password' => $this->request->getPost('user_password'),
            'user_address' => $this->request->getPost('user_address'),
            'user_type' => $requestedUserType,
            'main_user_id' => session()->get('user_id')
        ];

        if ($this->userModel->insert($data)) {
            return redirect()->to('/users')->with('success', 'User added successfully!');
        } else {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to add user. Please try again.');
        }
    }

    public function edit($id)
    {
        helper(['url', 'form']);
        
        $currentUserType = session()->get('user_type');
        $userId = session()->get('user_id');
        
        $user = $this->userModel->find($id);
        
        if (!$user) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'User not found'
            ]);
        }
        
        if ($currentUserType !== 'super_admin' && 
            ($currentUserType !== 'admin' || $user['main_user_id'] !== $userId || $user['user_type'] !== 'guest')) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'You are not authorized to edit this user'
            ]);
        }
        
        unset($user['user_password']);
        
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $user,
            'allowedUserTypes' => $this->userModel->getAllowedUserTypes($currentUserType)
        ]);
    }

    public function update($id)
    {
        helper(['url', 'form']);
        
        $currentUserType = session()->get('user_type');
        $userId = session()->get('user_id');
        $allowedUserTypes = $this->userModel->getAllowedUserTypes($currentUserType);
        
        $existingUser = $this->userModel->find($id);
        
        if (!$existingUser) {
            return redirect()->back()
                ->with('error', 'User not found');
        }
        
        if ($currentUserType !== 'super_admin' && 
            ($currentUserType !== 'admin' || $existingUser['main_user_id'] !== $userId || $existingUser['user_type'] !== 'guest')) {
            return redirect()->back()
                ->with('error', 'You are not authorized to edit this user');
        }
        
        $rules = $this->userModel->validationRules;
        $rules['user_password'] = 'permit_empty|min_length[6]';
        
        if ($this->request->getPost('user_password')) {
            $rules['confirm_password'] = 'required|matches[user_password]';
        }
        
        $requestedUserType = $this->request->getPost('user_type');
        if ($requestedUserType !== $existingUser['user_type'] && !in_array($requestedUserType, $allowedUserTypes)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'You are not authorized to change to this user type');
        }

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $data = [
            'user_name' => $this->request->getPost('user_name'),
            'user_mobileno' => $this->request->getPost('user_mobileno'),
            'user_address' => $this->request->getPost('user_address'),
            'user_type' => $requestedUserType,
            'updated_on' => date('Y-m-d H:i:s')
        ];

        if ($this->request->getPost('user_password')) {
            $data['user_password'] = $this->request->getPost('user_password');
        }

        if ($this->userModel->update($id, $data)) {
            return redirect()->to('/users')->with('success', 'User updated successfully!');
        } else {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update user. Please try again.');
        }
    }

    public function delete($id)
    {
        $currentUserType = session()->get('user_type');
        $userId = session()->get('user_id');
        
        $existingUser = $this->userModel->find($id);
        
        if (!$existingUser) {
            return redirect()->back()
                ->with('error', 'User not found');
        }
        
        if ($currentUserType === 'super_admin' && $existingUser['user_id'] === $userId) {
            return redirect()->back()
                ->with('error', 'You cannot delete your own super admin account');
        }
        
        if ($currentUserType !== 'super_admin' && 
            ($currentUserType !== 'admin' || $existingUser['main_user_id'] !== $userId || $existingUser['user_type'] !== 'guest')) {
            return redirect()->back()
                ->with('error', 'You are not authorized to delete this user');
        }
        
        if ($this->userModel->delete($id)) {
            return redirect()->to('/users')
                ->with('success', 'User deleted successfully!');
        } else {
            return redirect()->to('/users')
                ->with('error', 'Failed to delete user. Please try again.');
        }
    }
}
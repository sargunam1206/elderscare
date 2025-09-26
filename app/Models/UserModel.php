<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_info';
    protected $primaryKey = 'user_id';
    
    protected $allowedFields = [
        'user_name', 
        'user_mobileno', 
        'user_password', 
        'user_address', 
        'user_type', 
        'main_user_id',
        'created_on',
        'updated_on',
        'deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
    protected $useSoftDeletes = true;
    
    protected $validationRules = [
        'user_name' => 'required',
        'user_mobileno' => 'required',
        'user_password' => 'required',
        'user_type' => 'required|in_list[super_admin,admin,guest]'
    ];
    
    protected $validationMessages = [
        'user_name' => [
            'required' => 'Full name is required',
            'min_length' => 'Name must be at least 3 characters',
            'max_length' => 'Name cannot exceed 100 characters'
        ],
        'user_mobileno' => [
            'required' => 'Mobile number is required',
            'min_length' => 'Mobile number must be at least 10 digits',
            'max_length' => 'Mobile number cannot exceed 15 digits'
        ],
        'user_password' => [
            'required' => 'Password is required',
            'min_length' => 'Password must be at least 6 characters'
        ],
        'user_type' => [
            'required' => 'User type is required',
            'in_list' => 'Please select a valid user type'
        ]
    ];
    
    protected $skipValidation = false;
    
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];
    
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['user_password'])) {
            $data['data']['user_password'] = password_hash($data['data']['user_password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
    
    public function getAllowedUserTypes($currentUserType)
    {
        switch($currentUserType) {
            case 'super_admin':
                return ['admin', 'guest'];
            case 'admin':
                return ['guest'];
            default:
                return [];
        }
    }
    
    public function getUsersForCurrentUser($currentUserType, $currentUserId)
    {
        if ($currentUserType === 'super_admin') {
            return $this->whereIn('user_type', ['super_admin', 'admin', 'guest'])
                       ->findAll();
        } elseif ($currentUserType === 'admin') {
            return $this->where('user_type', 'guest')
                       ->where('main_user_id', $currentUserId)
                       ->findAll();
        }
        return [];
    }
}
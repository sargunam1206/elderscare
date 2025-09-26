<?php

namespace App\Models;
use CodeIgniter\Model;

class UserInfoModel extends Model{

	protected $table='user_info';
    protected $primaryKey = 'user_id';
	protected $allowedFields = ['user_name','user_email','user_contactno','user_officename','emp_id','dept','desg','user_role','user_password','user_created_on','user_updated_on','user_deleted_on'];

 	public $createdField  = 'user_created_on';
    public $updatedField  = 'user_updated_on';
} 


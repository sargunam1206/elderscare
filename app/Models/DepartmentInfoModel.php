<?php

namespace App\Models;
use CodeIgniter\Model;

class DepartmentInfoModel extends Model{


	protected $table='department_info';
    protected $primaryKey = 'department_id';
	protected $allowedFields = [ 'department_name', 'department_roletype', 'department_created_on', 'department_updated_on', 'department_deleted_on'];
    public $updatedField  = ['department_updated_on','department_deleted_on'];
} 


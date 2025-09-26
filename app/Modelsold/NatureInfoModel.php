<?php

namespace App\Models;
use CodeIgniter\Model;

class NatureInfoModel extends Model{

	protected $table='nature_of_project_info';
    protected $primaryKey ='nature_of_project_id';
	protected $allowedFields = ['project_id', 'emp_id', 'nature_of_project_emp_role','project_work_type', 'nature_of_project_created_on', 'nature_of_project_updated_on', 'nature_of_project_deleted_on'];
 	public $createdField  = 'nature_of_project_created_on';
    public $updatedField  = ['nature_of_project_updated_on', 'nature_of_project_deleted_on'];
} 

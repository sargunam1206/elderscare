<?php

namespace App\Models;
use CodeIgniter\Model;

class ProjectInfoModel extends Model{

	protected $table='project_info';
    protected $primaryKey = 'project_id';
	protected $allowedFields = ['project_id', 'project_name', 'project_type', 'project_work_type_list','emp_id', 'project_created_on', 'project_updated_on', 'project_deleted_on'];
    public $updatedField  = ['project_updated_on', 'project_deleted_on'];
} 


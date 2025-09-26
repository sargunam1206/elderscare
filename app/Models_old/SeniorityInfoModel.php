<?php

namespace App\Models;
use CodeIgniter\Model;

class SeniorityInfoModel extends Model{

	protected $table='seniority_info';
    protected $primaryKey ='seniority_info_id';
	protected $allowedFields = ['emp_id', 'seniority_status', 'seniority_created_on', 'seniority_updated_on', 'seniority_deleted_on'];
 	public $createdField  = 'seniority_created_on';
    public $updatedField  = ['seniority_updated_on', 'seniority_deleted_on'];
} 

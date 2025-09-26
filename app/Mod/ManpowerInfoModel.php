<?php

namespace App\Models;
use CodeIgniter\Model;

class ManpowerInfoModel extends Model{

	protected $table='manpower_request_info';
    protected $primaryKey = 'manpower_request_id';
	protected $allowedFields = ['manpower_request_date', 'project_id', 'manpower_request_dept', 'manpower_request_job_title', 'manpower_request_job_type', 'manpower_request_job_hiretype', 'manpower_request_justify', 'manpower_request_major_res', 'manpower_request_qualification', 'manpower_request_experience', 'manpower_request_special_apilites', 'manpower_request_personal_quality','emp_id', 'manpower_request_created_on', 'manpower_request_updated_on', 'manpower_request_deleted_on'];
    public $updatedField  = ['manpower_request_updated_on', 'manpower_request_deleted_on'];
} 


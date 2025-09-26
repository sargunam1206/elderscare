<?php

namespace App\Models;
use CodeIgniter\Model;

class EducationalInfoModel extends Model{

	protected $table='educational_info';
    protected $primaryKey = 'edu_id';
	protected $allowedFields = ['edu_qualification', 'edu_year_of_completion', 'edu_final_degree_cert_filename', 'edu_resume_filename', 'edu_exp_companyname', 'edu_exp_duration', 'edu_total_experience', 'edu_last_working_day_date', 'edu_expert_in', 'edu_created_on', 'edu_updated_on', 'edu_deleted_on', 'emp_id'];
 	public $createdField  = 'edu_created_on';
    public $updatedField  = ['edu_updated_on','edu_deleted_on'];
} 

<?php

namespace App\Models;
use CodeIgniter\Model;

class CompanyWorkInfoModel extends Model{

	protected $table='companywork_info';
    protected $primaryKey = 'companywork_id';
	protected $allowedFields = ['companywork_interview_date', 'companywork_offerletter_senton', 'companywork_dateof_join', 'companywork_desg', 'companywork_site', 'companywork_department', 'companywork_position_of_join', 'companywork_official_email', 'companywork_exp_duration', 'companywork_expert_in','companywork_created_on','companywork_updated_on','companywork_deleted_on','companywork_last_working_day_date','emp_id'];
 	public $createdField  = 'companywork_created_on';
    public $updatedField  = ['companywork_updated_on','companywork_deleted_on'];
} 


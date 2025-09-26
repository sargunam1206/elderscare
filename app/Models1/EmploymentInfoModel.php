<?php

namespace App\Models;
use CodeIgniter\Model;

class EmploymentInfoModel extends Model{

	protected $table='employment_info';
    protected $primaryKey = 'employment_id';
	protected $allowedFields = [ 'employment_pf_no', 'employment_esi_no', 'employment_uan_no', 'employment_gratuity_no', 'employment_gratuity_doj', 'employment_sts_of_formf_gratuity', 'employment_sts_of_form11', 'employment_pf_pre_mem', 'employment_pf_decl', 'employment_created_on', 'employment_updated_on', 'employment_deleted_on', 'emp_id'];
 	public $createdField  = 'employment_created_on';
    public $updatedField  = ['employment_updated_on','employment_deleted_on'];
} 

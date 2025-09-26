<?php

namespace App\Models;
use CodeIgniter\Model;

class CompanyResignInfoModel extends Model{

	protected $table='company_resign_info';
    protected $primaryKey = 'company_resign_id';
	protected $allowedFields = ['company_resign_letter_subon', 'company_resign_noperiod_com', 'company_resign_nodue_cert', 'company_resign_final_sett_bank','company_resign_final_sett_amount', 'company_resign_dateof_leaving','company_resign_created_on','company_resign_updated_on','company_resign_deleted_on','emp_id'];
 	public $createdField  = 'company_resign_created_on';
    public $updatedField  = ['company_resign_updated_on','company_resign_deleted_on'];
} 
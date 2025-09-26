<?php

namespace App\Models;
use CodeIgniter\Model;

class PersonalInfoModel extends Model{

	protected $table='personal_info';
    protected $primaryKey = 'emp_id';
	protected $allowedFields = ['emp_company_ref_id', 'emp_name', 'emp_dob', 'emp_mobile_no', 'emp_personal_emailid', 'emp_aadharno', 'emp_name_asper_aadhar', 'emp_panno', 'emp_ name_asper_pan', 'emp_father_name', 'emp_present_address_1', 'emp_present_address_2', 'emp_present_address_3', 'emp_present_address_4', 'emp_permanent_address_1', 'emp_permanent_address_2', 'emp_permanent_address_3', 'emp_permanent_address_4', 'emp_martial_status', 'emp_marriage_date', 'emp_blood_group', 'emp_photo_filename', 'emp_aadhar_filename', 'emp_pan_filename','emp_updated_on','company_resign_empsts','emp_deleted_on'];
 	public $createdField  = 'emp_created_on';
    public $updatedField  = ['emp_updated_on','emp_deleted_on'];
    
    
  
} 


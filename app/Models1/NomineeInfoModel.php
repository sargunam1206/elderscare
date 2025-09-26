<?php

namespace App\Models;
use CodeIgniter\Model;

class NomineeInfoModel extends Model{

	protected $table='nominee_info';
    protected $primaryKey = 'nominee_info_id';
	protected $allowedFields = [ 'nominee_info_name', 'nominee_info_address', 'nominee_info_mobileno', 'nominee_info_bankname', 'nominee_info_accno', 'nominee_info_ifcno', 'nominee_info_branchname', 'emp_id', 'nominee_created_on', 'nominee_updated_on', 'nominee_deleted_on'];
 	public $createdField  = 'nominee_created_on';
    public $updatedField  = ['nominee_updated_on', 'nominee_deleted_on'];
} 

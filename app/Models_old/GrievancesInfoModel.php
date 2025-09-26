<?php

namespace App\Models;
use CodeIgniter\Model;

class GrievancesInfoModel extends Model{

	protected $table='grievances_info';
    protected $primaryKey = 'grievances_id';
	protected $allowedFields = [ 'grievances_type', 'grievances_desc', 'emp_id', 'grievances_created_on', 'grievances_updated_on', 'grievances_deleted_on'];
 	public $createdField  = 'grievances_created_on';
    public $updatedField  = ['grievances_updated_on','grievances_deleted_on'];
} 
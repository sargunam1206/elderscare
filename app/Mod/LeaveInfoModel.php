<?php

namespace App\Models;
use CodeIgniter\Model;

class LeaveInfoModel extends Model{

	protected $table='leave_info';
    protected $primaryKey = 'leave_id';
	protected $allowedFields = ['leave_cl', 'leave_sl', 'leave_el','leave_created_on','leave_updated_on','leave_deleted_on','emp_id'];
 	public $createdField  = 'leave_created_on';
    public $updatedField  = ['leave_updated_on','leave_deleted_on'];
} 

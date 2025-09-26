<?php

namespace App\Models;
use CodeIgniter\Model;

class ExperienceInfoModel extends Model{

	protected $table='experience_info';
    protected $primaryKey = 'experience_id';
	protected $allowedFields = [ 'experience_list', 'emp_id', 'experience_created_on', 'experience_updated_on', 'experience_deleted_on'];
 	public $createdField  = 'experience_created_on';
    public $updatedField  = ['experience_updated_on', 'experience_deleted_on'];
} 

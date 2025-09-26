<?php

namespace App\Models;
use CodeIgniter\Model;
class JobInfoModel extends Model{

	protected $table='job_vacancy_info';
    protected $primaryKey = 'job_vacancy_id';
	protected $allowedFields = ['job_vacancy_dept', 'job_vacancy_role', 'job_vacancy_exp', 'job_vacancy_qualification','job_vacancy_totalvacancy','job_vacancy_validity_from','job_vacancy_validity_to', 'job_created_on', 'job_updated_on', 'job_deleted_on'];
 	public $createdField  = 'job_created_on';
    public $updatedField  = ['job_updated_on','job_deleted_on'];
} 
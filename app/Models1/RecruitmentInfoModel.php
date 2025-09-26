<?php

namespace App\Models;
use CodeIgniter\Model;

class RecruitmentInfoModel extends Model{

	protected $table='recruitment_info';
    protected $primaryKey = 'id';
	protected $allowedFields = [ 'name', 'dob', 'emailid', 'mobileno', 'address', 'qualification', 'gender', 'resume','job_vacancy_id','skills','experiencelist','candidate_sts','interview_sts','joined_sts','remarks','created_on','updated_on','deleted_on'];
    public $updatedField  = ['updated_on','deleted_on'];
} 


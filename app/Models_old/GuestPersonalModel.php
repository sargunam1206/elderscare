<?php namespace App\Models;

use CodeIgniter\Model;

class GuestPersonalModel extends Model
{
    protected $table = 'guests_personal';
    protected $primaryKey = 'guest_id';
    
    protected $allowedFields = [
        'first_name', 
        'last_name',
        'contact',
        'dob', 
        'gender', 
        'marital_status', 
        'religion', 
        'mother_tongue', 
        'education_level', 
        'previous_occupation', 
        'current_address', 
        'permanent_address', 
        'photo_upload', 
        'id_proof', 
        'created_on', 
        'updated_on', 
        'deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
   
    public function countActiveGuests()
    {
        return $this->where('deleted_on', null)
                   ->countAllResults();
    }

    // In App\Models\GuestPersonalModel.php

public function getUpcomingBirthdays($days = 7)
{
    $today = date('Y-m-d');
    $futureDate = date('Y-m-d', strtotime("+$days days"));
    
    return $this->select('*, TIMESTAMPDIFF(YEAR, dob, CURDATE()) AS age')
               ->where('deleted_on', null)
               ->where("DATE_FORMAT(dob, '%m-%d') >=", date('m-d'))
               ->where("DATE_FORMAT(dob, '%m-%d') <=", date('m-d', strtotime($futureDate)))
               ->findAll();
}
    
   
    
   
}
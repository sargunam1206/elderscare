<?php namespace App\Models;

use CodeIgniter\Model;

class GuestMedicalHistoryModel extends Model
{
    protected $table = 'guests_medicalhistory';
    protected $primaryKey = 'history_id';
    
    protected $allowedFields = [
        'guest_id',
        'known_conditions',
        'disabilities',
        'recent_surgeries',
        'ongoing_medication',
        'doctor_info',
        'blood_group',
        'allergies',
        'medical_reports',
        'created_on',
        'updated_on',
        'deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
   
    
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class PrescriptionModel extends Model
{
    protected $table = 'prescriptions';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'problem_description',
        'doctor_name',
        'date',
        'notes',
        'prescription_file',
        'other_documents',
        'guest_id',
        'created_on',
        'updated_on',
        'deleted_on'
    ];
    
    protected $useTimestamps = false;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_on';
    protected $skipValidation = false;
    
    protected $validationRules = [
        'problem_description' => 'required|min_length[5]|max_length[255]',
        'doctor_name' => 'required|min_length[3]|max_length[100]',
        'date' => 'required|valid_date'
    ];
    
    protected $validationMessages = [];
    protected $softDelete = true;
}
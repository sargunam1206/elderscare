<?php namespace App\Models;

use CodeIgniter\Model;

class GuestGuardianModel extends Model
{
    protected $table = 'guest_guardians';
    protected $primaryKey = 'guardian_id';
    
    protected $allowedFields = [
        'guest_id',
        'full_name',
        'relationship_with_guest',
        'contact_number',
        'alternate_contact',
        'email',
        'id_proof',
        'current_address',
        'created_on', 
        'updated_on', 
        'deleted_on'
    ];

      protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
    
}
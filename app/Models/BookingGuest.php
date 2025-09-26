<?php namespace App\Models;

use CodeIgniter\Model;

class BookingGuest extends Model
{
    protected $table = 'booking_guests';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'booking_id', 'guest_id', 'created_on', 'updated_on', 'deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
    
    
   
    
   
}
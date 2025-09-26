<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingStatusTrackingModel extends Model
{
    protected $table = 'booking_status_tracking';
    protected $primaryKey = 'tracking_id';
    
    protected $allowedFields = [
        'booking_id',
        'status',
        'changed_by',
        'remarks',
        'created_on',
        'updated_on',
        'deleted_on'
    ];
    
    protected $useTimestamps = false; // We'll handle timestamps manually
    
    protected $deletedField = 'deleted_on';
    
    
}
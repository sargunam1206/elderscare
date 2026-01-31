<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomBlockedModel extends Model
{
    protected $table            = 'room_blocked';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'room_id',
        'room_no',
        'reason',
        'status',
        'room_status',
        'start_date',
        'end_date',
        'created_on',
        'updated_on',
        'deleted_on'
    ];

    // If you want CI4 to auto-manage created/updated timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $deletedField  = 'deleted_on'; // works if you enable soft deletes
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomsInfoModel extends Model
{
    protected $table = 'rooms'; // Table name
    protected $primaryKey = 'room_id';  // Primary key

    protected $allowedFields = [
      'room_no', 'room_type','room_status', 'created_on', 'updated_on', 'deleted_on'
    ];

    // Enable automatic handling of created, updated, and deleted timestamps
    protected $useTimestamps = false;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $deletedField  = 'deleted_on';

    public function countOccupiedRooms()
    {
        return $this->where('room_status', 'Occupied')
                   ->where('deleted_on', null)
                   ->countAllResults();
    }
    

 
  }


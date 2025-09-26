<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceTypeInfoModel extends Model
{
    protected $table = 'service_types'; // Table name
    protected $primaryKey = 'service_type_id';  // Primary key

    protected $allowedFields = [
     'name', 'icon', 'description', 'created_on', 'updated_on', 'deleted_on'
    ];

    // Enable automatic handling of created, updated, and deleted timestamps
    protected $useTimestamps = false;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $deletedField  = 'deleted_on';

    

 
  }


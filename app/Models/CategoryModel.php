<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'service_categories'; // Table name
    protected $primaryKey = 'category_id';  // Primary key

    protected $allowedFields = [
     'service_type_name', 'category_name', 'short_code', 'created_on', 'updated_on', 'deleted_on'
    ];

    // Enable automatic handling of created, updated, and deleted timestamps
    protected $useTimestamps = false;
    protected $createdField  = 'created_on';

    

 
  }


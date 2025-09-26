<?php

namespace App\Models;

use CodeIgniter\Model;

class GrnModel extends Model
{
    protected $table = 'grn'; // Table name
    protected $primaryKey = 'id'; // Primary key column

    // Columns allowed for insertion
    protected $allowedFields = ['grn', 'asset_id', 'purchase_id'];

   
}

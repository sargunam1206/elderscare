<?php

namespace App\Models;

use CodeIgniter\Model;

class AssetModel extends Model
{
    protected $table = 'newasset'; // Table name
    protected $primaryKey = 'id';  // Primary key

    protected $allowedFields = [
        'asset_type', 'asset_make', 'specification', 'material', 'asset_image', 'part_name', 'part_number', 'customer_name', 'reorder_level', 
        'location', 'room','current_stock', 'dealer_name', 'grade', 'purpose', 'uom', 'calibration_id', 'serial_id', 'grn', 'accessories', 'resharpening', 'created_on', 'updated_on', 'deleted_on'
    ];

    // Enable automatic handling of created, updated, and deleted timestamps
    protected $useTimestamps = false;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    protected $deletedField  = 'deleted_on';

    

 
  }


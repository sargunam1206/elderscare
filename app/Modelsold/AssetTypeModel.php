<?php

namespace App\Models;

use CodeIgniter\Model;

class AssetTypeModel extends Model
{
    protected $table = 'assettype';
    protected $primaryKey = 'id';
    protected $allowedFields = ['asset_type', 'created_on', 'updated_on', 'deleted_on'];
    protected $useTimestamps = false;
}

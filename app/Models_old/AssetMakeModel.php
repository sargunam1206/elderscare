<?php

namespace App\Models;

use CodeIgniter\Model;

class AssetMakeModel extends Model
{
    protected $table = 'assetmake';
    protected $primaryKey = 'id';
    protected $allowedFields = ['asset_make', 'created_on', 'updated_on', 'deleted_on'];
    protected $useTimestamps = false;
}

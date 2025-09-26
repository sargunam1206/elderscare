<?php

namespace App\Models;

use CodeIgniter\Model;

class UomModel extends Model
{
    protected $table = 'uom';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uom', 'created_on', 'updated_on', 'deleted_on'];
    protected $useTimestamps = false;
}

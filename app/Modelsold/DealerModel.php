<?php

namespace App\Models;

use CodeIgniter\Model;

class DealerModel extends Model
{
    protected $table = 'dealername';
    protected $primaryKey = 'id';
    protected $allowedFields = ['dealer_name', 'created_on', 'updated_on', 'deleted_on'];
    protected $useTimestamps = false;
}

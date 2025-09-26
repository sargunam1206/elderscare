<?php
namespace App\Models;

use CodeIgniter\Model;

class ChargeItemsModel extends Model
{
    protected $table = 'charge_items';
    protected $primaryKey = 'id';
    protected $allowedFields = ['charge_id', 'charge_type', 'amount'];
    
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
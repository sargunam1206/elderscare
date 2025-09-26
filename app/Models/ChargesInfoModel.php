<?php namespace App\Models;

use CodeIgniter\Model;

class ChargesInfoModel extends Model
{
    protected $table = 'charge_info';
    protected $primaryKey = 'chargeinfo_id';
    
    protected $allowedFields = [
       'charge_id','room_no','guest_id','charge_monthyear','charge_info','payment_mode','reference_id','paid_amount','actual_amount','payment_status','created_on','updated_on','deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
    
    public function getCurrentYearPaidAmount()
{
    return $this->select("SUM(paid_amount) AS total_paid_amount, COUNT(*) AS total_transactions")
                ->like('charge_monthyear', date('Y') . '-', 'after')
                ->first();
}
   
    
   
}
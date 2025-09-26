<?php
namespace App\Models;

use CodeIgniter\Model;

class ChargesModel extends Model
{
    protected $table = 'charges';
    protected $primaryKey = 'id';
    protected $allowedFields = ['room_no', 'guest_id', 'charge_month', 'total_amount', 'status', 'due_date', 'notes', 'deleted_at'];
    
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;

    public function getChargesWithDetails()
{
    $builder = $this->db->table('charges c');
    $builder->select('c.*, r.room_no as room_number, 
        CASE 
            WHEN g.last_name IS NOT NULL AND g.last_name != "" 
            THEN CONCAT(g.first_name, " ", g.last_name) 
            ELSE g.first_name 
        END as guest_name');
    $builder->join('rooms r', 'r.room_no = c.room_no');
    $builder->join('guests_personal g', 'g.guest_id = c.guest_id');
    $builder->where('c.deleted_at', null);
    
    $charges = $builder->get()->getResultArray();
    
    // Get charge items for each charge
    $chargeItemsModel = new ChargeItemsModel();
    foreach ($charges as &$charge) {
        $charge['charge_items'] = $chargeItemsModel->where('charge_id', $charge['id'])->findAll();
    }
    
    return $charges;
}



public function getChargeWithItems($id)
{
    $builder = $this->db->table('charges c');
    $builder->select('c.*, 
        CASE 
            WHEN g.last_name IS NOT NULL AND g.last_name != "" 
            THEN CONCAT(g.first_name, " ", g.last_name) 
            ELSE g.first_name 
        END as guest_name');
    $builder->join('guests_personal g', 'g.guest_id = c.guest_id');
    $builder->where('c.id', $id);
    $builder->where('c.deleted_at', null);
    
    $charge = $builder->get()->getRowArray();
    
    if ($charge) {
        $chargeItemsModel = new ChargeItemsModel();
        $charge['charge_items'] = $chargeItemsModel->where('charge_id', $id)->findAll();
    }
    
    return $charge;
}


    
// public function getChargesWithDetails()
// {
//     $builder = $this->db->table('charges c');
//     $builder->select('c.*, r.room_no as room_number, CONCAT(g.first_name, " ", g.last_name) as guest_name');
//     $builder->join('rooms r', 'r.room_no = c.room_no');
//     $builder->join('guests_personal g', 'g.guest_id = c.guest_id');
//     $builder->where('c.deleted_at', null);
    
//     $charges = $builder->get()->getResultArray();
    
//     // Get charge items for each charge
//     $chargeItemsModel = new ChargeItemsModel();
//     foreach ($charges as &$charge) {
//         $charge['charge_items'] = $chargeItemsModel->where('charge_id', $charge['id'])->findAll();
//     }
    
//     return $charges;
// }

    
    // public function getChargeWithItems($id)
    // {
    //     $charge = $this->where('id', $id)->where('deleted_at', null)->first();
        
    //     if ($charge) {
    //         $chargeItemsModel = new ChargeItemsModel();
    //         $charge['charge_items'] = $chargeItemsModel->where('charge_id', $id)->findAll();
    //     }
        
    //     return $charge;
    // }

// public function getChargeWithItems($id)
// {
//     $builder = $this->db->table('charges c');
//     $builder->select('c.*, CONCAT(g.first_name, " ", g.last_name) as guest_name');
//     $builder->join('guests_personal g', 'g.guest_id = c.guest_id');
//     $builder->where('c.id', $id);
//     $builder->where('c.deleted_at', null);
    
//     $charge = $builder->get()->getRowArray();
    
//     if ($charge) {
//         $chargeItemsModel = new ChargeItemsModel();
//         $charge['charge_items'] = $chargeItemsModel->where('charge_id', $id)->findAll();
//     }
    
//     return $charge;
// }
}
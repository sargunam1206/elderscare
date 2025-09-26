<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceBookModel extends Model
{
    protected $table = 'service_bookings'; // Table name
    protected $primaryKey = 'id';  // Primary key

    protected $allowedFields = [
       'room_no', 'guest_id', 'service_type', 'services_info', 'total_amount','payment_mode','reference_id', 'payment_status', 'created_on', 'updated_on', 'deleted_on'
    ];

    // Enable automatic handling of created, updated, and deleted timestamps
    protected $useTimestamps = false;
    protected $createdField  = 'created_on';
   

       // 🔹 Get total service amount for current year
    public function getCurrentYearServiceAmount()
    {
        return $this->select("SUM(total_amount) AS total_service_amount, COUNT(*) AS total_transactions")
                    ->where("YEAR(created_on)", date('Y'))
                    ->first();
    }

 
  }
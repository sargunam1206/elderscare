<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionInfoModel extends Model
{
    protected $table = 'transactions'; // Table name
    protected $primaryKey = 'transaction_id';  // Primary key

    protected $allowedFields = [
      'wallet_id', 'type', 'amount','razorpay_token_id', 'account_info', 'status', 'description', 'created_on'
    ];

    // Enable automatic handling of created, updated, and deleted timestamps
    protected $useTimestamps = false;
    protected $createdField  = 'created_on';
   

    

 
  }
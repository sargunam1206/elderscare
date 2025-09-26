<?php

namespace App\Models;

use CodeIgniter\Model;

class WalletModel extends Model
{
    protected $table = 'wallets'; // Table name
    protected $primaryKey = 'wallet_id';  // Primary key

    protected $allowedFields = [
        'guest_id', 'balance', 'updated_on','created_on'
    ];

    // Enable automatic handling of created, updated, and deleted timestamps
    protected $useTimestamps = false;

    protected $updatedField  = 'updated_on';

    

 
  }


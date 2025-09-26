<?php

namespace App\Models;
use CodeIgniter\Model;

class BankAccountInfoModel extends Model{

	protected $table='bankaccount_info';
    protected $primaryKey = 'bankaccount_id';
	protected $allowedFields = [ 'bankaccount_name_as_per_bank', 'bankaccount_accountno', 'bankaccount_ifscno', 'bankaccount_bankname', 'bankaccount_branchname', 'bankaccount_passbookcheck_filename', 'bankaccount_created_on', 'bankaccount_updated_on', 'bankaccount_deleted_on','emp_id'];
 	public $createdField  = 'bankaccount_created_on';
    public $updatedField  = 'bankaccount_updated_on';
} 


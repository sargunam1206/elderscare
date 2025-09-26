<?php

namespace App\Models;
use CodeIgniter\Model;

class ReturnInfoModel extends Model{

	protected $table='return_info';
    protected $primaryKey ='return_id';
	protected $allowedFields = ['assets_grn_no', 'returned_date', 'returned_by', 'approved_by', 'return_qty','return_childpart','return_created_on', 'return_created_date', 'return_updated_on', 'return_deleted_on'];
 	public $createdField  = 'return_created_on';
    public $updatedField  = ['return_updated_on', 'return_deleted_on'];
} 

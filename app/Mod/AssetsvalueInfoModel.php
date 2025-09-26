<?php

namespace App\Models;
use CodeIgniter\Model;

class AssetsvalueInfoModel extends Model{

	protected $table='assetsvalue';
    protected $primaryKey = 'assetsvalue_id';
	protected $allowedFields = ['assetsvalue_id', 'assets_grn_no', 'assetsvalue_value', 'assetsvalue_created_on', 'assetsvalue_updated_on', 'assetsvalue_deleted_on'];
 	public $createdField  = 'assetsvalue_updated_on';
    public $updatedField  = 'assetsvalue_deleted_on';
} 


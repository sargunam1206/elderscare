<?php

namespace App\Models;
use CodeIgniter\Model;

class AssignedAssetsInfoModel extends Model{

	protected $table='assigned_assets';
    protected $primaryKey ='assigned_assets_id';
	protected $allowedFields = ['assets_grn_no', 'assigned_assets_employee', 'assigned_assets_customer_name', 'assigned_assets_qty_assigned', 'assigned_assets_status','assigned_assets_childpart','assigned_assets_retureddate','assigned_assets_created_on', 'assigned_assets_updated_on', 'assigned_assets_deleted_on'];
 	public $createdField  = 'assigned_assets_updated_on';
    public $updatedField  = ['assigned_assets_updated_on','assigned_assets_deleted_on'];
} 


<?php

namespace App\Models;
use CodeIgniter\Model;

class AssignedAssetsInfoModel extends Model{

	protected $table='assign_asset';
    protected $primaryKey ='assign_asset_id';
	protected $allowedFields = [ 'assets_id','grn_no', 'asset_type', 'asset_make', 'employee_name', 'assigned_by', 'machine_name', 'part_name', 'qty_assigned', 'issued_date', 'return_date', 'remarks', 'accessories', 'calibration_id','created_on', 'updates_on', 'deleted_on'];
 	public $createdField  = 'created_on';
    public $updatedField  = [ 'updates_on', 'deleted_on'];
}
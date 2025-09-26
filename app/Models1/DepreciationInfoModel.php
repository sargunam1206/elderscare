<?php

namespace App\Models;
use CodeIgniter\Model;

class DepreciationInfoModel extends Model{

	protected $table='depreciation';
    protected $primaryKey ='depreciation_id';
	protected $allowedFields = ['assets_grn_no', 'maintenence', 'start_date', 'end_date', 'warrenty_reminder', 'amc_level', 'depreciation_method', 'total_cost', 'useful_life_in_years', 'salvage_value', 'rate_of_depreciation','depreciation_created_date', 'depreciation_created_on', 'depreciation_updated_on', 'depreciation_deleted_on'];
 	public $createdField  = 'depreciation_updated_on';
    public $updatedField  = 'depreciation_deleted_on';
} 


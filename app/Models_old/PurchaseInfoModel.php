<?php

namespace App\Models;
use CodeIgniter\Model;

class PurchaseInfoModel extends Model{

	protected $table='purchase';
    protected $primaryKey ='purchase_id';
	protected $allowedFields = ['purchase_vendor', 'purchase_asset_type', 'purchase_model', 'purchase_price', 'purchase_discount', 'purchase_units_acquired', 'purchase_date_acquired','purchase_status', 'purchase_asset_image', 'purchase_expense_refid', 'purchase_taxtype', 'purchase_tax_percent', 'purchase_tax_exemption','purchase_asset_type','purchase_created_date','purchase_delivery_sts','purchase_created_on', 'purchase_purchase_updated_on', 'purchase_deleted_on'];
 	public $createdField  = 'purchase_created_on';
    public $updatedField  = ['purchase_updated_on', 'purchase_deleted_on'];
} 

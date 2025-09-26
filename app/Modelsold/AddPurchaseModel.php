<?php

namespace App\Models;
use CodeIgniter\Model;

class AddPurchaseModel extends Model{

	protected $table='add_purchase';
    protected $primaryKey = 'purchase_id';
	protected $allowedFields = ['supplier_name', 'asset_type', 'asset_make', 'specification', 'uom', 'discount', 'quantity', 'part_name', 'part_number', 'customer_name', 'asset_image', 'invoice_number', 'invoice_date', 'grn','reorder', 'purchase_status', 'purchase_reason','grade','material','location','room','accessories','resharpen', 'created_on', 'updated_on', 'deleted_on'];
 	public $createdField  = 'created_on';
    public $updatedField  = 'updated_on';
    public $deletedField  = 'deleted_on';
} 


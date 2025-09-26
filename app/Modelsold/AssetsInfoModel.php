<?php

namespace App\Models;
use CodeIgniter\Model;

class AssetsInfoModel extends Model{

	protected $table='assets';
    protected $primaryKey = 'assets_id';
	protected $allowedFields = ['assets_grn_no', 'assets_name', 'assets_brand', 'assets_vendor','asset_image','assets_customer_name', 'assets_party_name', 'assets_qty_avl', 'assets_rec_level', 'assets_location', 'assets_room', 'assets_created_on', 'assets_updated_on', 'assets_deleted_on'];
 	public $createdField  = 'assets_updated_on';
    public $updatedField  = 'assets_deleted_on';
} 


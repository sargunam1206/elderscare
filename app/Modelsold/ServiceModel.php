<?php

namespace App\Models;
use CodeIgniter\Model;

class ServiceModel extends Model{

	protected $table='service';
    protected $primaryKey ='id';
	protected $allowedFields = ['asset_id', 'asset_name', 'req_date', 'issue', 'priority', 'created_on', 'updated_on', 'deleted_on'];
 	public $createdField  = 'created_on';
    public $updatedField  = 'updated_on';
	public $deletedField  = 'deleted_on';
} 

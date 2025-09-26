<?php

namespace App\Models;
use CodeIgniter\Model;

class ServiceModel extends Model{

	protected $table='service_modes';
    protected $primaryKey ='service_mode_id';
	protected $allowedFields = [ 'category_name','name', 'description', 'created_on', 'updated_on', 'deleted_on'];
 	public $createdField  = 'created_on';
    public $updatedField  = 'updated_on';
	public $deletedField  = 'deleted_on';
}
<?php

namespace App\Models;
use CodeIgniter\Model;

class RequestHistoryModel extends Model{


	protected $table='request_history';
	protected $id='$id';
	protected $allowedFields = ['send_request_date','donors_id'];
}
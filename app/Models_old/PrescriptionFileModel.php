<?php
namespace App\Models;

use CodeIgniter\Model;

class PrescriptionFileModel extends Model
{
    protected $table = 'prescription_files';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'prescription_id',
        'file_path',
        'original_name',
        'file_type', // 'prescription' or 'other'
        'created_on',
        'deleted_on'
    ];
    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_on';
    public $timestamps = false;
}

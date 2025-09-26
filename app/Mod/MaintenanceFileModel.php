<?php
namespace App\Models;

use CodeIgniter\Model;

class MaintenanceFileModel extends Model
{
    protected $table = 'maintenance_files';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'maintenance_id',
        'file_type',
        'file_path',
        'original_name',
        'created_on',
        'updated_on',
        'deleted_on'
    ];
    protected $useTimestamps = false;
    protected $useSoftDeletes = false;
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data['data']['created_on'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data['data']['updated_on'] = date('Y-m-d H:i:s');
        return $data;
    }

    public function getFilesByMaintenanceId($maintenanceId, $fileType = null)
    {
        $builder = $this->where('maintenance_id', $maintenanceId)
                      ->where('deleted_on', null);
        
        if ($fileType) {
            $builder->where('file_type', $fileType);
        }
        
        return $builder->findAll();
    }
}
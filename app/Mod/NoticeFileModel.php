<?php
namespace App\Models;

use CodeIgniter\Model;

class NoticeFileModel extends Model
{
    protected $table = 'notice_files';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'notice_id',
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
}
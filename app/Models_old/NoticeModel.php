<?php
namespace App\Models;

use CodeIgniter\Model;

class NoticeModel extends Model
{
    protected $table = 'notices';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title', 
        'content', 
        'priority', 
        'category', 
        'start_date', 
        'end_date', 
        'additional_info',
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
    public function getActiveNotices()
    {
        return $this->where('deleted_on', null)
                   ->where('start_date <=', date('Y-m-d'))
                   ->where('end_date >=', date('Y-m-d'))
                   ->orderBy('priority', 'DESC')
                   ->orderBy('created_on', 'DESC')
                   ->findAll();
    }
}
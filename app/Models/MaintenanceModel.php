<?php
namespace App\Models;

use CodeIgniter\Model;

class MaintenanceModel extends Model
{
    protected $table = 'maintenance_requests';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'maintenance_area', 
        'requested_by', 
        'type', 
        'request_date', 
        'expected_arrest_date', 
        'arrest_date', 
        'problem_description',
        'assigned_to',
        'approved_by',
        'status',
        'amount',
        'resolution_notes',
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

    public function getActiveRequests()
    {
        return $this->where('deleted_on', null)
                   ->orderBy('id', 'DESC')
                   ->findAll();
    }

    public function getFilteredRequests($filters = [])
    {
        $builder = $this->where('deleted_on', null);
        
        if (!empty($filters['from_date'])) {
            $builder->where('request_date >=', $filters['from_date']);
        }
        
        if (!empty($filters['to_date'])) {
            $builder->where('request_date <=', $filters['to_date']);
        }
        
        if (!empty($filters['status']) && $filters['status'] !== 'all') {
            $builder->where('status', $filters['status']);
        }
        
        if (!empty($filters['type']) && $filters['type'] !== 'all') {
            $builder->where('type', $filters['type']);
        }
        
        return $builder->orderBy('id', 'DESC')->findAll();
    }

    public function getPendingCount()
{
    return $this->where('status', 'Pending')
                ->where('deleted_on', null)
                ->countAllResults();
}

// Get pending maintenance requests (limit to 5 most recent)
public function getPendingRequests($limit = 5)
{
    return $this->where('status', 'Pending')
                ->where('deleted_on', null)
                ->orderBy('created_on', 'DESC')
                ->limit($limit)
                ->get()
                ->getResultArray();
}


}
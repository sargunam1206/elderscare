<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table = 'activities';
    protected $primaryKey = 'activity_id';
    
    protected $allowedFields = [
        'activity_name', 
        'activity_date', 
        'activity_time', 
        'category', 
        'duration_minutes', 
        'description', 
        'created_on',
        'updated_on',
        'deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
    protected $useSoftDeletes = true;
    
    protected $validationRules = [
        'activity_name' => 'required|min_length[3]|max_length[255]',
        'activity_date' => 'required|valid_date',
        'activity_time' => 'required',
        'category' => 'required',
        'duration_minutes' => 'required|numeric'
    ];
    
    protected $validationMessages = [];
    protected $skipValidation = false;
    public function countActiveActivities()
    {
        return $this->where('deleted_on', null)
                    ->countAllResults();
    }

    // In App\Models\ActivityModel.php

public function getActivitiesByCategory($category)
{
    return $this->where('category', $category)
               ->where('deleted_on', null)
               ->orderBy('activity_time', 'ASC')
               ->findAll();
}
}
<?php
namespace App\Models;

use CodeIgniter\Model;


class EnquiryModel extends Model
{
    protected $table = 'enquiries';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 
        'mobile_no', 
        'room_type', 
        'address', 
        'guest_count', 
        'file_path', 
        'original_file_name',
        'deleted_on'
    ];
    protected $useTimestamps = false;
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'mobile_no' => 'required|exact_length[10]|numeric',
        'room_type' => 'permit_empty|in_list[Garden View,North East View]',
        'address' => 'required|min_length[5]',
        'guest_count' => 'permit_empty|integer|greater_than[0]'
    ];
    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required',
            'min_length' => 'Name must be at least 3 characters long',
            'max_length' => 'Name cannot exceed 255 characters'
        ],
        'mobile_no' => [
            'required' => 'Mobile number is required',
            'exact_length' => 'Mobile number must be exactly 10 digits',
            'numeric' => 'Mobile number must contain only numbers'
        ],
        'room_type' => [
            'in_list' => 'Please select a valid room type'
        ],
        'address' => [
            'required' => 'Address is required',
            // 'min_length' => 'Address must be at least 5 characters long'
        ],
        'guest_count' => [
            'integer' => 'Guest count must be a number',
            'greater_than' => 'Guest count must be greater than 0'
        ]
    ];
    protected $skipValidation = false;

    public function getFilteredEnquiries($filters = [])
    {
        $builder = $this->where('deleted_on', null);
        
        if (!empty($filters['name'])) {
            $builder->like('name', $filters['name']);
        }
        
        if (!empty($filters['mobile_no'])) {
            $builder->like('mobile_no', $filters['mobile_no']);
        }
        
        if (!empty($filters['room_type'])) {
            $builder->where('room_type', $filters['room_type']);
        }
        
        return $builder->orderBy('created_on', 'DESC')->findAll();
    }

     // Get recent enquiries (limit to 5 most recent)
    public function getRecentEnquiries($limit = 5)
    {
        return $this->where('deleted_on', null)
        ->where('MONTH(created_on)', date('m'))
                ->where('YEAR(created_on)', date('Y'))
                    ->orderBy('created_on', 'DESC')
                    ->limit($limit)
                    ->get()
                    ->getResultArray();
    }

    // Get total count of enquiries
public function getTotalEnquiries()
{
    return $this->where('deleted_on', null)->where('MONTH(created_on)', date('m'))
                ->where('YEAR(created_on)', date('Y'))->countAllResults();
}

}
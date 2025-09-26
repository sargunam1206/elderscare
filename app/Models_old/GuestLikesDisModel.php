<?php namespace App\Models;

use CodeIgniter\Model;

class GuestLikesDisModel extends Model
{
    protected $table = 'guests_likesdis';
    protected $primaryKey = 'pref_id';
    
    protected $allowedFields = [
        'guest_id',
        'fav_foods',
        'disliked_foods',
        'hobbies',
        'religious_practices',
        'routine_preferences',
        'remarks',
        'created_on',
        'updated_on',
        'deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
    
}
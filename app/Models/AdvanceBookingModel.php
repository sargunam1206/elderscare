<?php

namespace App\Models;

use CodeIgniter\Model;

class AdvanceBookingModel extends Model
{
    protected $table = 'advance_bookings';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'booking_no',
        'guest_count',
        'type',
        'arrival_date',
        'arrival_time',
        'nights',
        'depart_date',
        'depart_time',
        'room',
        'monthly_tariff',
        'status',
        'enquiry_person_name',
        'relation',
        'contact_no',
        'guest1_title',
        'guest1_firstname',
        'guest1_lastname',
        'guest2_title',
        'guest2_firstname',
        'guest2_lastname',
        'address_proof_file',
        'other_documents_file',
        'scanned_documents_collected',
        'guest1_id',
        'guest2_id',
        'room_id',
        'created_on',
        'updated_on',
        'deleted_on'
    ];

    // Optional settings
    //protected $useTimestamps = false; // set to true if you're using created_at/updated_at
    protected $useTimestamps = true;
protected $createdField = 'created_on';
protected $updatedField = 'updated_on';
protected $dateFormat = 'datetime'; // This is default
    protected $returnType = 'array'; // or 'object'
    public function countWaitingList()
    {
        return $this->where('status', 'Waiting List')->where('deleted_on', null)->countAllResults();
    }

   public function countConfirmedList()
{
    $startOfMonth = date('Y-m-01 00:00:00'); // first day of this month
    $endOfMonth   = date('Y-m-t 23:59:59');  // last day of this month

    return $this->where('deleted_on', null)
                ->where('LOWER(status)', 'confirmed')
                ->where('created_on >=', $startOfMonth)
                ->where('created_on <=', $endOfMonth)
                ->countAllResults();
}

public function getRecentBookings($limit = 5)
{
    return $this->where('deleted_on', null)
                ->orderBy('created_on', 'DESC')
                ->findAll($limit); // <-- pass $limit here
}

     public function countCheckinList()
    {
        return $this->where('status', 'checked_in')->where('deleted_on', null)->countAllResults();
    }

     public function getGuestInfoByRoomId($roomId)
    {
        return $this->where('room_id', $roomId)
                   ->where('deleted_on', null)
                   ->orderBy('created_on', 'DESC')
                   ->first();
    }
}

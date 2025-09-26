<?php

namespace App\Models;
use CodeIgniter\Model;

class BloodBankDonorsModel extends Model{


	protected $table='donors';
	protected $id='$id';
	protected $allowedFields = ['fullname','address','email','phone_number','blood_group','collection_center','dod','donated_count','blood_bank_message'];


	public function getNumRows()
    {
        $query = $this->select('blood_group, SUM(donated_count) as total')
                      ->groupBy('blood_group')
                      ->get();

        $result = [];
        foreach ($query->getResult() as $row) {
            $result[$row->blood_group] = $row->total;
        }

        return $result;

    }

    public function getAllRecords()
	{
		return $this->countAllResults();
	     
	}

        public function search($date, $name)
        {
            $query = $this->select('*')
                ->where('fullname', $name)
                ->like('dod', $date) 
                ->orderBy('dod', 'DESC')
                ->get();

            return $query->getResult();
        }


        public function searchdate($date)
        {
            $query = $this->select('*')
                ->like('dod', $date)
                ->orderBy('dod', 'DESC')
                ->get();

            return $query->getResult();
        }

        public function searchname($name)
        {
            $query = $this->select('*')
                ->where('fullname', $name)
                ->orderBy('dod', 'DESC')
                ->get();

            return $query->getResult();
        }

public function getBloodGroups()
{
    $builder = $this->distinct()->select('blood_group')->get();
    return $builder->getResult();
}



} 
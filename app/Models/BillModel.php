<?php

namespace App\Models;

use CodeIgniter\Model;

class BillModel extends Model
{
    protected $table = 'bill';
    protected $primaryKey = 'bill_id';
    
    protected $allowedFields = [
        'bill_no', 'bill_date', 'total_amount', 'paid_amount', 
        'payment_status', 'reference_service', 'reference_id',
        'created_on', 'updated_on', 'deleted_on'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_on';
    protected $updatedField = 'updated_on';
    protected $deletedField = 'deleted_on';
    
    protected $validationRules = [
        'bill_no' => 'required',
        'total_amount' => 'required|numeric',
        'reference_service' => 'required'
    ];
    
    protected $validationMessages = [
        'bill_no' => [
            'required' => 'Bill number is required'
        ]
    ];
    
    /**
     * Generate next bill number
     */
    public function getNextBillNo()
    {
        try {
            // Get the last bill number
            $lastBill = $this->select('bill_no')
                            ->orderBy('bill_id', 'DESC')
                            ->first();
            
            if ($lastBill && !empty($lastBill['bill_no'])) {
                // Extract number and increment
                preg_match('/\d+$/', $lastBill['bill_no'], $matches);
                $lastNumber = $matches ? (int)$matches[0] : 0;
                $nextNumber = $lastNumber + 1;
            } else {
                // Start from 1 if no bills exist
                $nextNumber = 1;
            }
            
            // Format as BILL-0001, BILL-0002, etc.
            return 'BILL-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
            
        } catch (\Exception $e) {
            log_message('error', 'BillModel getNextBillNo error: ' . $e->getMessage());
            // Fallback to timestamp-based number
            return 'BILL-' . date('YmdHis');
        }
    }
    
    /**
     * Get bill with charge details using reference_id (charge_id)
     */
    public function getBillWithDetails($billId)
    {
        try {
            // First get the bill details
            $bill = $this->where('bill_id', $billId)
                        ->where('deleted_on', null)
                        ->first();
            
            if (!$bill) {
                return null;
            }
            
            // Get guest details using the reference_id (charge_id)
            $guestDetails = $this->db->table('charge_info ci')
                ->select('ci.room_no, ci.guest_id, gp.first_name, gp.last_name')
                ->join('guests_personal gp', 'gp.guest_id = ci.guest_id', 'left')
                ->where('ci.charge_id', $bill['reference_id'])
                ->where('ci.deleted_on', null)
                ->groupBy('ci.charge_id')
                ->get()
                ->getRowArray();
            
            if ($guestDetails) {
                // Merge bill data with guest details
                $bill = array_merge($bill, $guestDetails);
            }
            
            return $bill;
            
        } catch (\Exception $e) {
            log_message('error', 'BillModel getBillWithDetails error: ' . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Get all charge items for a specific charge_id (reference_id)
     */
    public function getChargeItems($chargeId)
    {
        try {
            return $this->db->table('charge_info')
                ->select('*')
                ->where('charge_id', $chargeId)
                ->where('deleted_on', null)
                ->get()
                ->getResultArray();
        } catch (\Exception $e) {
            log_message('error', 'BillModel getChargeItems error: ' . $e->getMessage());
            return [];
        }
    }
    
    /**
     * Get grouped charge items for display
     */
    public function getGroupedChargeItems($chargeId)
    {
        try {
            $chargeItems = $this->getChargeItems($chargeId);
            
            if (empty($chargeItems)) {
                return [];
            }
            
            // Get guest details from first item
            $firstItem = $chargeItems[0];
            $guestDetails = $this->db->table('charge_info ci')
                ->select('gp.first_name, gp.last_name')
                ->join('guests_personal gp', 'gp.guest_id = ci.guest_id', 'left')
                ->where('ci.charge_id', $chargeId)
                ->where('ci.deleted_on', null)
                ->get()
                ->getRowArray();
            
            $grouped = [];
            $totalPaid = 0;
            
            foreach ($chargeItems as $item) {
                $totalPaid += (float)($item['paid_amount'] ?? 0);
                
                $grouped[] = [
                    'charge_id' => $item['charge_id'],
                    'created_on' => $item['created_on'],
                    'charge_monthyear' => $item['charge_monthyear'] ?? '',
                    'total_paid' => (float)($item['paid_amount'] ?? 0),
                    'room_no' => $guestDetails['room_no'] ?? $item['room_no'] ?? '',
                    'first_name' => $guestDetails['first_name'] ?? '',
                    'last_name' => $guestDetails['last_name'] ?? '',
                    'payment_mode' => $item['payment_mode'] ?? '',
                    'items' => [[
                        'charge_info' => $item['charge_info'] ?? '',
                        'paid_amount' => (float)($item['paid_amount'] ?? 0),
                        'reference_id' => $item['reference_id'] ?? ''
                    ]]
                ];
            }
            
            return $grouped;
            
        } catch (\Exception $e) {
            log_message('error', 'BillModel getGroupedChargeItems error: ' . $e->getMessage());
            return [];
        }
    }
}
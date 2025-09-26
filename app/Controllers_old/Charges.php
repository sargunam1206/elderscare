<?php
namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\RoomsInfoModel;
use App\Models\ChargesModel;
use App\Models\GuestPersonalModel;
use App\Models\ChargeItemsModel;

class Charges extends BaseController
{
    protected $chargesModel;
    protected $chargeItemsModel;
    
    public function __construct()
    {
        $this->chargesModel = new ChargesModel();
        $this->chargeItemsModel = new ChargeItemsModel();
    }

    public function index()
    {
        helper(['url', 'form']);
helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
                 $roomsModel = new RoomsInfoModel();
                 $chargesModel = new ChargesModel();
                $guestsModel = new GuestPersonalModel();
                $data['rooms'] = $roomsModel->where('deleted_on', null)->findAll();
                $data['guests'] = $guestsModel->where('deleted_on', null)->findAll();
                $data['charges'] = $chargesModel->getChargesWithDetails();
        return view('charges/index', $data);

    }
        public function store()
    {

                        ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
        // Validate the form submission
       if (!$this->validate([
            'room_no'    => 'required|numeric',
            'guest_id'   => 'required|numeric',
            'month'      => 'required|numeric|greater_than_equal_to[1]|less_than_equal_to[12]',
            'year' => 'required|numeric|greater_than_equal_to[2020]',
            'due_date'   => 'required|valid_date',
            'status'     => 'required|in_list[pending,paid,overdue]',
            'charge_types' => 'required',
            'amounts'      => 'required'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Please fill all required fields correctly');
        }


        // Check if charge already exists for this room and month/year
        // $chargeMonth = $this->request->getPost('year') . '-' . str_pad($this->request->getPost('month'), 2, '0', STR_PAD_LEFT) . '-01';
        
        // $existingCharge = $this->chargesModel
        //     ->where('room_no', $this->request->getPost('room_no'))
        //     ->where('charge_month', $chargeMonth)
        //     ->where('deleted_at', null)
        //     ->first();

        // Check if charge already exists for this guest in this room and month/year
        $chargeMonth = $this->request->getPost('year') . '-' . str_pad($this->request->getPost('month'), 2, '0', STR_PAD_LEFT) . '-01';

        $existingCharge = $this->chargesModel
            ->where('room_no', $this->request->getPost('room_no'))
            ->where('guest_id', $this->request->getPost('guest_id')) // Added guest check
            ->where('charge_month', $chargeMonth)
            ->where('deleted_at', null)
            ->first();
            
        if ($existingCharge) {
            return redirect()->back()->withInput()->with('error', 'A charge already exists for this room in the selected month');
        }

        // Prepare charge data
        $chargeData = [
            'room_no' => $this->request->getPost('room_no'),
            'guest_id' => $this->request->getPost('guest_id'),
            'charge_month' => $chargeMonth,
            'total_amount' => 0, // Will be calculated from items
            'status' => $this->request->getPost('status'),
            'due_date' => $this->request->getPost('due_date'),
            'notes' => $this->request->getPost('notes')
        ];

        // Calculate total amount from charge items
        $chargeTypes = $this->request->getPost('charge_types');
        $amounts = $this->request->getPost('amounts');
        
        foreach ($amounts as $amount) {
            $chargeData['total_amount'] += (float) $amount;
        }

        // Start database transaction
        $this->db = \Config\Database::connect();

        
        try {
            // Insert the main charge record
            if (!$this->chargesModel->save($chargeData)) {
                throw new \Exception('Failed to save charge record');
            }
            
            $chargeId = $this->chargesModel->getInsertID();
            
            // Insert charge items
            foreach ($chargeTypes as $index => $chargeType) {
                if (!empty($chargeType) && isset($amounts[$index]) && $amounts[$index] > 0) {
                    $itemData = [
                        'charge_id' => $chargeId,
                        'charge_type' => $chargeType,
                        'amount' => (float) $amounts[$index]
                    ];
                    
                    if (!$this->chargeItemsModel->save($itemData)) {
                        throw new \Exception('Failed to save charge items');
                    }
                }
            }
            
            // Commit transaction
            $this->db->transComplete();
            
            if ($this->db->transStatus() === FALSE) {
                throw new \Exception('Transaction failed');
            }
            
            return redirect()->to('/charges')->with('message', 'Charge added successfully');
            
        } catch (\Exception $e) {
            // Rollback transaction on error
            $this->db->transRollback();
            return redirect()->back()->withInput()->with('error', 'Error saving charge: ' . $e->getMessage());
        }
    }
public function edit($id)
{
    $charge = $this->chargesModel->getChargeWithItems($id);
    
    if (!$charge) {
        return redirect()->to('/charges')->with('error', 'Charge not found');
    }
    
    return $this->response->setJSON($charge);
}

public function getGuestsByRoom($roomId)
{
    $roomsModel = new RoomsInfoModel();
    $guests = $roomsModel->getGuestsByRoom($roomId);
    
    return $this->response->setJSON($guests);
}

public function update($id)
{
                    ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
    // Find the existing charge
    $charge = $this->chargesModel->find($id);
    
    if (!$charge) {
        return redirect()->to('/charges')->with('error', 'Charge not found');
    }
    
    // Validate the form submission
   if (!$this->validate([
            'room_no'    => 'required|numeric',
            'guest_id'   => 'required|numeric',
            'month'      => 'required|numeric|greater_than_equal_to[1]|less_than_equal_to[12]',
            'year' => 'required|numeric|greater_than_equal_to[2020]',
            'due_date'   => 'required|valid_date',
            'status'     => 'required|in_list[pending,paid,overdue]',
            'charge_types' => 'required',
            'amounts'      => 'required'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Please fill all required fields correctly');
        }

    // Check if charge already exists for this room and month/year (excluding current)
    $chargeMonth = $this->request->getPost('year') . '-' . str_pad($this->request->getPost('month'), 2, '0', STR_PAD_LEFT) . '-01';
    
    // $existingCharge = $this->chargesModel
    //     ->where('room_no', $this->request->getPost('room_no'))
    //     ->where('charge_month', $chargeMonth)
    //     ->where('id !=', $id)
    //     ->where('deleted_at', null)
    //     ->first();
    $existingCharge = $this->chargesModel
    ->where('room_no', $this->request->getPost('room_no'))
    ->where('guest_id', $this->request->getPost('guest_id')) // Added guest check
    ->where('charge_month', $chargeMonth)
    ->where('id !=', $id)
    ->where('deleted_at', null)
    ->first();
   if ($existingCharge) {
    return redirect()->back()->withInput()->with('error', 'Another charge already exists for this guest in this room for the selected month');
}
    
    // Prepare charge data
    $chargeData = [
        'id' => $id,
        'room_no' => $this->request->getPost('room_no'),
        'guest_id' => $this->request->getPost('guest_id'),
        'charge_month' => $chargeMonth,
        'total_amount' => 0, // Will be calculated from items
        'status' => $this->request->getPost('status'),
        'due_date' => $this->request->getPost('due_date'),
        'notes' => $this->request->getPost('notes')
    ];
    
    // Calculate total amount from charge items
    $chargeTypes = $this->request->getPost('charge_types');
    $amounts = $this->request->getPost('amounts');
    
    foreach ($amounts as $amount) {
        $chargeData['total_amount'] += (float) $amount;
    }
    
    // Start database transaction
   $this->db = \Config\Database::connect();

    
    try {
        // Update the main charge record
        if (!$this->chargesModel->save($chargeData)) {
            throw new \Exception('Failed to update charge record');
        }
        
        // Delete existing charge items
        $this->chargeItemsModel->where('charge_id', $id)->delete();
        
        // Insert new charge items
        foreach ($chargeTypes as $index => $chargeType) {
            if (!empty($chargeType) && isset($amounts[$index]) && $amounts[$index] > 0) {
                $itemData = [
                    'charge_id' => $id,
                    'charge_type' => $chargeType,
                    'amount' => (float) $amounts[$index]
                ];
                
                if (!$this->chargeItemsModel->save($itemData)) {
                    throw new \Exception('Failed to save charge items');
                }
            }
        }
        
        // Commit transaction
        $this->db->transComplete();
        
        if ($this->db->transStatus() === FALSE) {
            throw new \Exception('Transaction failed');
        }
        
        return redirect()->to('/charges')->with('message', 'Charge updated successfully');
        
    } catch (\Exception $e) {
        // Rollback transaction on error
        $this->db->transRollback();
        return redirect()->back()->withInput()->with('error', 'Error updating charge: ' . $e->getMessage());
    }
}

public function delete($id)
{
    $charge = $this->chargesModel->find($id);
    
    if (!$charge) {
        return redirect()->to('/charges')->with('error', 'Charge not found');
    }
    
    if ($this->chargesModel->delete($id)) {
        return redirect()->to('/charges')->with('message', 'Charge deleted successfully');
    } else {
        return redirect()->to('/charges')->with('error', 'Failed to delete charge');
    }
}

}

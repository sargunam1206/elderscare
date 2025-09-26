<?php
namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\RoomsInfoModel;
use App\Models\ChargesModel;
use App\Models\GuestPersonalModel;
use App\Models\ChargeItemsModel;
use App\Models\ChargesInfoModel;

class Charges extends BaseController
{
    protected $chargesModel;
    protected $chargeItemsModel;
    
    public function __construct()
    {
        $this->chargesModel = new ChargesModel();
        $this->chargeItemsModel = new ChargeItemsModel();
        $this->ChargesInfoModel = new ChargesInfoModel();
        $this->db = \Config\Database::connect(); // connect DB here
    }

    public function index()
    {
        helper(['url', 'form']);
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        // Get filter parameters from GET request
        $fromDate = $this->request->getGet('from_date');
        $toDate = $this->request->getGet('to_date');
        $status = $this->request->getGet('status');
        $room = $this->request->getGet('room');

        $filters = [
            'from_date' => $fromDate,
            'to_date' => $toDate,
            'status' => $status,
            'room' => $room
        ];

        // Fetch filtered charges
        $charges = $this->chargesModel->getFilteredCharges($filters);

        // Handle PDF export
        if ($this->request->getGet('pdf')) {
            return $this->generatePdf($charges);
        }

        // Handle Excel export
        if ($this->request->getGet('excel')) {
            return $this->generateExcel($charges);
        }

        $roomsModel = new RoomsInfoModel();
        $guestsModel = new GuestPersonalModel();
        
        $data['rooms'] = $roomsModel->where('deleted_on', null)->findAll();
        $data['guests'] = $guestsModel->where('deleted_on', null)->findAll();
        $data['charges'] = $charges;
        
        $data['filter_from_date'] = $fromDate;
        $data['filter_to_date'] = $toDate;
        $data['filter_status'] = $status;
        $data['filter_room'] = $room;

        return view('charges/index', $data);
    }

 private function generatePdf($charges)
    {
        $data['charges'] = $charges;

        $mpdf = new \Mpdf\Mpdf();
        $html = view('charges/pdf_template', $data);
        $mpdf->WriteHTML($html);

        $pdfContent = $mpdf->Output('', 'S');

        $response = \Config\Services::response();
        $response->setHeader('Content-Type', 'application/pdf');
        $response->setHeader('Content-Disposition', 'inline; filename="charges_report.pdf"');

        return $response->setBody($pdfContent);
    }

    private function generateExcel($charges)
    {
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Headers
        $sheet->setCellValue('A1', 'S.No')
              ->setCellValue('B1', 'Room')
              ->setCellValue('C1', 'Guest')
              ->setCellValue('D1', 'Month/Year')
              ->setCellValue('E1', 'Total Amount')
              ->setCellValue('F1', 'Status')
              ->setCellValue('G1', 'Due Date');

        $row = 2;
        foreach ($charges as $index => $charge) {
            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $charge['room_number']);
            $sheet->setCellValue('C' . $row, $charge['guest_name']);
            $sheet->setCellValue('D' . $row, date('F Y', strtotime($charge['charge_month'])));
            $sheet->setCellValue('E' . $row, $charge['total_amount']);
            $sheet->setCellValue('F' . $row, ucfirst($charge['status']));
            $sheet->setCellValue('G' . $row, date('M d, Y', strtotime($charge['due_date'])));
            $row++;
        }

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $filename = 'charges_report.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $writer->save("php://output");
        exit;
    }
        public function store()
    {

                        ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
        // Validate the form submission


                // echo $this->request->getPost('guest_id');
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
            return redirect()->to('/charges')->with('error', 'A charge already exists for this room in the selected month');
            //  return redirect()->back()->with('error', 'A charge already exists for this room in the selected month');
            // return redirect()->back()->withInput()->with('error', 'A charge already exists for this room in the selected month');
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
    

    echo $this->request->getPost('guest_id');
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



public function guest_charge($id = '', $month = '')
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    // Only fetch charges that are NOT paid
    $data['charges'] = $this->chargesModel->select('charges.*,charge_items.*,guests_personal.*')
                                     ->join('guests_personal', 'guests_personal.guest_id = charges.guest_id')
                                     ->join('charge_items', 'charge_items.charge_id = charges.id')
                                     ->like('charges.charge_month', $month)
                                     ->where('guests_personal.guest_id', $id)
                                    //  ->where('charges.status !=', 'paid') // Exclude paid charges
                                     ->where('charges.deleted_at', null)
                                     ->findAll();

    echo json_encode($data['charges']);
}

 public function guest_charge1($id='',$month='')
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
        
   

        $data['charges'] = $this->chargesModel->select('charges.*,charge_items.*,guests_personal.*')
                                         ->join('guests_personal','guests_personal.guest_id=charges.guest_id')
                                        ->join('charge_items','charge_items.charge_id=charges.id')
                                        ->like('charges.charge_month',$month)
                                        ->where('guests_personal.guest_id',$id)
                                         ->where('charges.deleted_at', null)
                                         ->findAll();

       
       echo json_encode($data['charges']);



        //echo json_encode($data['category']);
       //  return view('addproduct/eco-add-product.php',$data);
    }



   public function chargepay()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
        $full=$this->request->getPost();

       
        $charge_id=$full['charge_id'];

        // $data['charges'] = $this->chargesModel->select('charges.*,charge_items.*,guests_personal.*')
                                         
        //                                  ->where('guests_personal.guest_id',$id)
        //                                  ->where('charges.deleted_at', null)
       //                                  ->findAll();
                                         
     $data['charges'] = $this->chargesModel->select('charges.*,charge_items.*,guests_personal.*')
                                          ->join('guests_personal','guests_personal.guest_id=charges.guest_id')
                                          ->join('charge_items','charge_items.charge_id=charges.id')
                                         ->where('charges.id',$charge_id)
                                         ->where('charges.deleted_at', null)
                                        ->findAll();

       
       
       foreach($data['charges'] as $eachcharge){
       
        $charge_info['charge_id']=$charge_id;
        $charge_info['room_no']=$eachcharge['room_no'];
        $charge_info['guest_id']=$eachcharge['guest_id'];
        $charge_info['charge_monthyear']=$eachcharge['charge_month'];
        $charge_info['charges'][]=$eachcharge['charge_type'];

        if($eachcharge['charge_type'] == 'EB'){

        $charge_info['actual_amount'][]= $full['eb_amount_act'];
        $charge_info['paid_amount'][]= $full['eb_paidamount'];   

        }
         if($eachcharge['charge_type'] == 'Internet'){

        $charge_info['actual_amount'][]= $full['internet_amount_act'];  
        $charge_info['paid_amount'][]= $full['internet_paidamount'];   

        }
        if($eachcharge['charge_type'] == 'Maintenance'){

        $charge_info['actual_amount'][]= $full['main_amount_act']; 
        $charge_info['paid_amount'][]= $full['main_paidamount'];   

        }
        if($eachcharge['charge_type'] == 'Room Service'){
        $charge_info['actual_amount'][]= $full['room_amount_act'];  
        $charge_info['paid_amount'][]= $full['room_paidamount'];   

        }
         if($eachcharge['charge_type'] == 'Other'){
        $charge_info['actual_amount'][]= $full['other_amount_act'];  
        $charge_info['paid_amount'][]= $full['other_paidamount'];   

        }

        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s"); 

   
        $charge_info['created_on']=$date; 

         
       // $this->ChargesInfoModel->save($charge_info);
        
       }

       $charge_info['total_paidamount']=array_sum($charge_info['paid_amount']);


       //echo json_encode($charge_info);
       return view('charges/payment',$charge_info
        );
     }

 public function chargepay_store1()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
        $full=$this->request->getPost();
        $guest_id=$full['guest_id'];
        //echo json_encode($full['paid_amount']);
       

        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s"); 
        $charge_info['created_on']=$date; 
          
        $charges=json_decode($full['charges']);
        $paid_amount=json_decode($full['paid_amount']);
        $actual_amount=json_decode($full['actual_amount']);

         unset($full['charges']);   
         unset($full['paid_amount']);
         unset($full['actual_amount']);

        $count=0;

             if($full['bill_no']!=''){

              $full['reference_id']=$full['bill_no'];   
              $full['payment_mode']="Cash";
              }
              elseif($full['upi_trans']!=''){
               $full['reference_id']=$full['upi_trans'];  
               $full['payment_mode']="UPI";
              
              }
              elseif($full['card_trans']!=''){
              $full['reference_id']=$full['card_trans'];      
              $full['payment_mode']="Card";
              
              }else{
              $full['reference_id']='';     
              $full['payment_mode']="Wallet";  



              // Example: update wallet by guest_id
              $this->db->table('wallets')
                       ->where('guest_id',$guest_id)
                       ->set('balance', 'balance - ' . (int)$full['total_paidamount'],false)
                       ->update();
               $session = \Config\Services::session();
               $session->setFlashdata('success', 'Wallet Amount Deducted successfully');
              
              }



        foreach($charges as $charge_type){
            
            $full['charge_info']=$charge_type;            
            $full['paid_amount']=$paid_amount[$count];
            $full['actual_amount']=$actual_amount[$count];  
            $full['charge_monthyear']=date("Y-m-d",strtotime($full['charge_monthyear']));
            

            //echo json_encode($full).'<br><br>';
            $count++;
            $this->ChargesInfoModel->save($full);
        }

         return redirect()->to('addproduct');


         
       
     

    }


public function chargepay_store2()
{
    $full = json_decode($this->request->getBody(), true);

    $guest_id = $full['guest_id'];
    $room_no  = $full['room_no']; // ✅ include room_no
    date_default_timezone_set('Asia/Kolkata');
    $full['created_on'] = date("Y-m-d H:i:s");

    // ---------- Payment mode & reference handling ----------
    if (!empty($full['bill_no'])) {
        $full['reference_id'] = $full['bill_no'];
        $full['payment_mode'] = "Cash";
    } elseif (!empty($full['upi_trans'])) {
        $full['reference_id'] = $full['upi_trans'];
        $full['payment_mode'] = "UPI";
    } elseif (!empty($full['card_trans'])) {
        $full['reference_id'] = $full['card_trans'];
        $full['payment_mode'] = "Card";
    } else {
        $full['reference_id'] = '';
        $full['payment_mode'] = "Wallet";
    }

    // ---------- Charges ----------
    $charges = ['Maintenance','Internet','EB','Room Service','Other'];
    $paid_amount = [
        $full['main_paidamount'], 
        $full['internet_paidamount'], 
        $full['eb_paidamount'], 
        $full['room_paidamount'], 
        $full['other_paidamount']
    ];
    $actual_amount = [
        $full['main_amount_act'], 
        $full['internet_amount_act'], 
        $full['eb_amount_act'], 
        $full['room_amount_act'], 
        $full['other_amount_act']
    ];

    foreach($charges as $index => $charge_type){
        // Only save if paid or actual amount > 0
        if (!empty($paid_amount[$index]) || !empty($actual_amount[$index])) {
            $saveData = [
                'charge_info'      => $charge_type,
                'guest_id'         => $guest_id,
                'room_no'          => $room_no,
                'charge_id'        => $full['charge_id'],
                'charge_monthyear' => $full['charge_monthyear'],
                'paid_amount'      => $paid_amount[$index] ?? 0,
                'actual_amount'    => $actual_amount[$index] ?? 0,
                'created_on'       => $full['created_on'],
                'reference_id'     => $full['reference_id'],
                'payment_mode'     => $full['payment_mode']
            ];

            $this->ChargesInfoModel->save($saveData);
        }
    }

    // ---------- Wallet deduction ----------
    if ($full['payment_mode'] === 'Wallet') {
        $this->db->table('wallets')
                 ->where('guest_id', $guest_id)
                 ->set('balance', 'balance - ' . (int)$full['total_paidamount'], false)
                 ->update();

        // flash message if you’re using session
        $session = \Config\Services::session();
        $session->setFlashdata('success', 'Wallet Amount Deducted successfully');
    }

    $session = \Config\Services::session();
$session->setFlashdata('success', 'Payment completed successfully');
return $this->response->setJSON(['status' => 'success', 'guest_id' => $guest_id]);

    // return $this->response->setJSON(['status' => 'success']);
}


public function chargepay_store()
{
    $full = json_decode($this->request->getBody(), true);

    $guest_id = $full['guest_id'];
    $room_no  = $full['room_no'];
    $charge_id = $full['charge_id'] ?? null;
    
    // Validate required fields
    if (empty($guest_id) || empty($room_no)) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'Guest ID and Room No are required']);
    }

    date_default_timezone_set('Asia/Kolkata');
    $full['created_on'] = date("Y-m-d H:i:s");

    // Payment mode & reference handling
    if (!empty($full['bill_no'])) {
        $full['reference_id'] = $full['bill_no'];
        $full['payment_mode'] = "Cash";
    } elseif (!empty($full['upi_trans'])) {
        $full['reference_id'] = $full['upi_trans'];
        $full['payment_mode'] = "UPI";
    } elseif (!empty($full['card_trans'])) {
        $full['reference_id'] = $full['card_trans'];
        $full['payment_mode'] = "Card";
    } else {
        $full['reference_id'] = '';
        $full['payment_mode'] = "Wallet";
    }

    // Start database transaction
    $this->db->transStart();
    
    try {
        // ---------- Update charge status to 'paid' if charge_id exists ----------
        if (!empty($charge_id)) {
            // First, verify the charge exists
            $existingCharge = $this->chargesModel->find($charge_id);
            
            if ($existingCharge) {
                $chargeUpdateData = [
                    'status' => 'paid',
                    'updated_at' => date("Y-m-d H:i:s")
                ];
                
                $updateResult = $this->chargesModel->update($charge_id, $chargeUpdateData);
                
                if (!$updateResult) {
                    throw new \Exception('Failed to update charge status');
                }
            } else {
                // Charge not found, but we can still proceed with payment recording
                log_message('warning', "Charge ID {$charge_id} not found, but proceeding with payment recording");
            }
        } else {
            log_message('warning', 'No charge_id provided, skipping charge status update');
        }

        // ---------- Charges recording ----------
        $charges = ['Maintenance','Internet','EB','Room Service','Other'];
        $paid_amount = [
            $full['main_paidamount'] ?? 0, 
            $full['internet_paidamount'] ?? 0, 
            $full['eb_paidamount'] ?? 0, 
            $full['room_paidamount'] ?? 0, 
            $full['other_paidamount'] ?? 0
        ];
        $actual_amount = [
            $full['main_amount_act'] ?? 0, 
            $full['internet_amount_act'] ?? 0, 
            $full['eb_amount_act'] ?? 0, 
            $full['room_amount_act'] ?? 0, 
            $full['other_amount_act'] ?? 0
        ];

        foreach($charges as $index => $charge_type){
            // Only save if paid or actual amount > 0
            if (($paid_amount[$index] > 0) || ($actual_amount[$index] > 0)) {
                $saveData = [
                    'charge_info'      => $charge_type,
                    'guest_id'         => $guest_id,
                    'room_no'          => $room_no,
                    'charge_id'        => $charge_id, // This can be null if not provided
                    'charge_monthyear' => $full['charge_monthyear'] ?? date('Y-m'),
                    'paid_amount'      => $paid_amount[$index],
                    'actual_amount'    => $actual_amount[$index],
                    'created_on'       => $full['created_on'],
                    'reference_id'     => $full['reference_id'],
                    'payment_mode'     => $full['payment_mode']
                ];

                $saveResult = $this->ChargesInfoModel->save($saveData);
                
                if (!$saveResult) {
                    throw new \Exception('Failed to save charge information for ' . $charge_type);
                }
            }
        }

        // ---------- Wallet deduction ----------
        if ($full['payment_mode'] === 'Wallet' && !empty($full['total_paidamount'])) {
            $walletUpdate = $this->db->table('wallets')
                     ->where('guest_id', $guest_id)
                     ->set('balance', 'balance - ' . (float)$full['total_paidamount'], false)
                     ->update();
                     
            if (!$walletUpdate) {
                throw new \Exception('Failed to update wallet balance');
            }
        }

        // Commit transaction
        $this->db->transComplete();
        
        if ($this->db->transStatus() === FALSE) {
            throw new \Exception('Transaction failed');
        }
        
         $session = \Config\Services::session();
        $session->setFlashdata('success', 'Payment completed successfully');
        return $this->response->setJSON([
            'status' => 'success', 
            'message' => 'Payment processed successfully',
            'charge_updated' => !empty($charge_id) && !empty($existingCharge),'guest_id' => $guest_id
        ]);
        
    } catch (\Exception $e) {
        // Rollback transaction on error
        $this->db->transRollback();
        log_message('error', 'Payment processing error: ' . $e->getMessage());
        return $this->response->setJSON(['status' => 'error', 'message' => 'Error processing payment: ' . $e->getMessage()]);
    }
}



}
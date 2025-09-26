<?php

namespace App\Controllers;

use App\Models\WalletModel;
use App\Models\GuestPersonalModel;
use App\Models\RoomsInfoModel;
use App\Models\TransactionInfoModel;
use App\Models\ServiceBookModel;

class Wallet extends BaseController
{
   

    public function __construct()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        $this->session = \Config\Services::session();
        $this->WalletModel = new WalletModel();
        $this->guestpersonal = new GuestPersonalModel();
        $this->rooms = new RoomsInfoModel();
        $this->transaction = new TransactionInfoModel();
        $this->servicebook = new ServiceBookModel();
         $this->db = \Config\Database::connect(); // connect DB here
         $session = \Config\Services::session();
    }

 
    
    


    public function wallet_read($id='')
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
        

        if($id!=''){
            $wallet['wallet_guest'] = $this->WalletModel
                           ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           ->where('booking_guests.guest_id', $id)
                           ->where('wallets.guest_id', $id)
                           ->findAll();

          $wallet['room'] = $this->rooms
     ->select('wallets.*,rooms.*, guests_personal.*, advance_bookings.*')
     ->join('advance_bookings', 'advance_bookings.room =  rooms.room_no')
    ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id') // or correct relation field
    ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
    ->join('wallets', 'wallets.guest_id = guests_personal.guest_id')
    ->groupBy('rooms.room_no')
    ->where('booking_guests.guest_id', $id)
    ->where('advance_bookings.deleted_on', null)
    ->findAll();
          
          //echo json_encode($wallet['room']);

        }else{
            $wallet['wallet_guest'] = $this->WalletModel
                           ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           
                           ->findAll();
          
          
              $wallet['room'] = $this->rooms
     ->select('wallets.*,rooms.*, advance_bookings.*')
     ->join('advance_bookings', 'advance_bookings.room =  rooms.room_no')
    ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id') // or correct relation field
    ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
    ->join('wallets', 'wallets.guest_id = guests_personal.guest_id')
   ->groupBy('rooms.room_no')
    ->where('advance_bookings.deleted_on', null)
    ->findAll();
          
          
          
              //  echo json_encode($wallet['room']);
        }
        
     
   
      return view('wallet/view.php',$wallet);
    }
    
    public function room_guest($id='')
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
         $wallet['room'] = $this->rooms->where('deleted_on', null)->findAll();

        if($id!=''){
            $wallet['wallet_guest'] = $this->rooms
                            ->select('rooms.*, guests_personal.*')
                            ->join('advance_bookings', 'advance_bookings.room = rooms.room_no')
                            ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id')
                            ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
                            ->join('wallets', 'wallets.guest_id = guests_personal.guest_id')
                            ->where('advance_bookings.status', 'Occupied')
                            ->where('rooms.room_no', $id)
                            ->where('rooms.deleted_on', null)
                            
                            //->orderBy('guests_personal.guest_id', 'ASC') 
                            
                            ->findAll();


                          
         echo json_encode($wallet['wallet_guest']);
          

       
 
       //return view('wallet/view.php',$wallet);
    } 
    

}
 public function guest_wallet($id='')
{
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
   

        if($id!=''){
            //this is old script
           $wallet['wallet_guest'] = $this->WalletModel
                            ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id')
                            ->where('guests_personal.first_name ',$id)
                     
                            ->findAll();

             
/*$wallet['wallet_guest'] = $this->WalletModel
                            ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           ->where('booking_guests.guest_id', $id)
                           ->where('wallets.guest_id', $id)
                           ->findAll(); */
                          
         echo json_encode($wallet['wallet_guest']);
          

       
 
       //return view('wallet/view.php',$wallet);
    } 
    

}

 public function guest_wallet_id($id='')
{
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
     
       
         date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");
      
        
         $full['updated_on']=$date;
   

        if($id!=''){
            //this is old script
        

             
       $wallet['wallet_guest'] = $this->WalletModel
                            ->select('wallets.*, guests_personal.*,advance_bookings.*') // select fields from both tables
                           ->join('guests_personal', 'guests_personal.guest_id = wallets.guest_id') // join condition
                           ->join('booking_guests', 'booking_guests.guest_id = guests_personal.guest_id')
                           ->join('advance_bookings', 'advance_bookings.id = booking_guests.booking_id')
                           ->where('booking_guests.guest_id', $id)
                           ->where('wallets.guest_id', $id)
                           ->findAll(); 
                          
         echo json_encode($wallet['wallet_guest']);
          

       
 
       //return view('wallet/view.php',$wallet);
    }
    } 
    





 public function addfund()
{
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
       echo $this->request->getPost('type_user');
       
        $full   = $this->request->getPost();
        unset($full['submit']);
        $wallet['wallet_guest'] = $this->rooms
                            ->select('rooms.*,guests_personal.*')
                            ->join('advance_bookings', 'advance_bookings.room = rooms.room_no')
                            ->join('booking_guests', 'booking_guests.booking_id = advance_bookings.id')
                            ->join('guests_personal', 'guests_personal.guest_id = booking_guests.guest_id')
                          //  ->join('wallets', 'wallets.guest_id = guests_personal.guest_id')
                            ->where('rooms.room_no', $full['room_no'])
                            ->groupBy('rooms.room_no') 
                            ->where('guests_personal.first_name', $full['guest_name']) 
                            ->findAll();

       $guest_id=$wallet['wallet_guest'][0]['guest_id'];

       //checking guest_id is avaiable or not

       $guest = $this->WalletModel->where('guest_id', $guest_id)->first();
       
       //for the guest wallet added or not checking
        
      

        if(empty($guest )){
       $balance=0;
       }else{
        $balance=$guest['balance'];
       }


       // if wallet is avilable fetching wallet id

       $full['guest_id']=$guest_id;
       unset($full['room_no']);
       $full['balance']=$balance+$full['add_amount'];
       $full['amount']=$full['add_amount'];
       unset($full['add_amount']);
        
       
       if(!empty($guest )){
        $walletId= $guest['wallet_id'];

        $this->WalletModel->update($walletId, $full);

       }else{

        //if not available create the wallet account 
           
           
           if ($this->WalletModel->save($full)) {
          
           $walletId = $this->WalletModel->getInsertID(); // CI4 method
           


        }
        }





    $full['wallet_id']=$walletId;
    $full['type']='credit';
    if ($this->transaction->save($full)) {

            echo "Saved successfully";
         
        }else{
            
            echo "Failed to save.";
            print_r($this->transaction->errors()); // Optional: shows validation errors if any
        
        }

    
          
      if($this->request->getPost('type_user')=="single"){
      

         return redirect()->to('wallet/'.$guest_id)->with('message', 'Prescription added successfully!');
      }else{
       
       return redirect()->to('wallet/')->with('message', 'Prescription added successfully!');
          
      }  
       // store the transcation info
    /*   unset($full['balance']); //not available this filed on trancation table
       $full['wallet_id']=$walletId;
       $full['amount']=$full['add_amount'];
       unset($full['add_amount']); //not available this filed on trancation table




      $full['type']='credit';
       $full['status']='ongoing';
       $full['description']='wallet credits';
       
       echo json_encode($full);
       
      
           
       
          $amount=$full['amount'];   

          

        $keyId     = 'rzp_test_yndo68t3OZnZTM';
        $keySecret = '95TdxYUVuslkEsxn7njED7By';

        $url = "https://api.razorpay.com/v1/orders";
     
        $orderData = [
            'receipt'         => 'rcpt_' . time(),
            'amount'          =>$amount*100, // 500 INR in paise
            'currency'        => 'INR',
            'payment_capture' => 1
        ];

        $fields_string = json_encode($orderData);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $keyId . ":" . $keySecret);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $result = curl_exec($ch);
        curl_close($ch);

        $order = json_decode($result, true);
        
        
       $full['razorpay_token_id']=$order['id'];

       echo json_encode($full);
        if ($this->transaction->save($full)) {
         
         
        }else{
            
            echo "Failed to save room.";
            print_r($this->transaction->errors()); // Optional: shows validation errors if any
        
        }
     

       return view('wallet/payment_form', [
            'key'      => $keyId,
            'amount'   => $orderData['amount'],
            'order_id' => $order['id']
        ]);
     
*/
       

}

 public function servicepay()
{
       $full   = $this->request->getPost();
        $keyId     = 'rzp_test_yndo68t3OZnZTM';
        $keySecret = '95TdxYUVuslkEsxn7njED7By';

        $url = "https://api.razorpay.com/v1/orders";

        $full   = $this->request->getPost();
        $amount= $full['service_amount'];
       // echo json_encode($full);
     
        $orderData = [
            'receipt'         => 'rcpt_' . time(),
            'amount'          =>$amount*100, // 500 INR in paise
            'currency'        => 'INR',
            'payment_capture' => 1
        ];

        $fields_string = json_encode($orderData);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $keyId . ":" . $keySecret);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $result = curl_exec($ch);
        curl_close($ch);

        $order = json_decode($result, true);
        
        
       $full['razorpay_token_id']=$order['id'];

       echo json_encode($full);
      

       return view('wallet/payment_form', [
            'key'      => $keyId,
            'amount'   => $orderData['amount'],
            'order_id' => $order['id']
        ]);


}




public function verify()
    {
        $razorpayOrderId   = $this->request->getPost('razorpay_order_id');
        $razorpayPaymentId = $this->request->getPost('razorpay_payment_id');
        $razorpaySignature = $this->request->getPost('razorpay_signature');

        $keySecret = '95TdxYUVuslkEsxn7njED7By';




        $generatedSignature = hash_hmac(
            'sha256',
            $razorpayOrderId . '|' . $razorpayPaymentId,
            $keySecret
        );

        if ($generatedSignature === $razorpaySignature) {
            

            echo "Payment Successful".$this->request->getPost('amount');
           
                  /*$transaction = $this->transaction->where('razorpay_token_id', $razorpayOrderId)->first();
                   $id=$transaction['transaction_id'];
                  
                  if(!empty($transaction)){
                    $full['status']='success'; 
                    $this->transaction->update($id,$full);

                  }else{
           
                  }*/
          


        } else {
            echo "Payment Verification Failed";

        }
    }


public function paymentrecd()
    {
        $full   = $this->request->getPost();

       
      
       $full['room_no']=$full['room_no_data'];
        unset($full['room_no_data']);
        $full['guest_id']=$full['guest_id_data'];
        unset($full['guest_id_data']);

        $full['total_amount']=$full['amount_data'];
        unset($full['amount_data']);
        $service_info=json_decode($full['service_info']); 
        //unset($full['service_info']);
       
      // $full['services_info']=json_encode($service_info);
       date_default_timezone_set('Asia/Kolkata');
         $date=date("Y-m-d H:i:s");

      
   $guest = $this->guestpersonal->where('guest_id',$full['guest_id'])->first();
   
  

  //not required this code service book
    /*
         // Save the data to the database
        if ( $this->servicebook->save($full)) {
           //echo " saved successfully!";
        } else {
           // echo "Failed to save room.";
            print_r($this->servicebook->errors()); // Optional: shows validation errors if any
        }
    */
              
        //guest info fetching process using guest_id



//echo json_encode($full);



      return view('payment/payment', [
           
            'amount'   => $full['total_amount'],
            'room_no' => $full['room_no'],
            'guest_id' => $full['guest_id'],
            'first_name'=>$guest['first_name'],
            'current_date'=>$date,
            'services_info'=>$service_info,
            'service_type'=>$full['service_type']
        ]);
     

    }

public function payrecord(){

$full   = $this->request->getPost();

$full['total_amount']=$full['amount'];
 $guest_id=$full['guest_id'];


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
         ->set('balance', 'balance - ' . (int)$full['total_amount'],false)
         ->update();
 $session = \Config\Services::session();
 $session->setFlashdata('success', 'Wallet Amount Deducted successfully');

}




       // Save the data to the database
        if ( $this->servicebook->save($full)) {
           //echo " saved successfully!";
            $serviceid = $this->servicebook->getInsertID();
        } else {
           // echo "Failed to save room.";
            print_r($this->servicebook->errors()); // Optional: shows validation errors if any
        }
 $session = \Config\Services::session();
 $session->setFlashdata('success', 'Service Registered successfully');
             
return redirect()->to('servicerept/'.$guest_id);


}




}
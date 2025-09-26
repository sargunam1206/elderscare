<?php

namespace App\Controllers;
/*use App\Models\ServiceTypeInfoModel;
use App\Models\CategoryModel;
use App\Models\ServiceModel;
use App\Models\ServiceitemsModel;*/
use App\Models\AdvanceBookingModel;
use App\Models\GuestPersonalModel;
use App\Models\BookingGuest;


    
class Inhouseguest extends BaseController
{
     
   
    public function __construct()
    {
        //$this->session = \Config\Services::session();
       // $this->servicetype = new ServiceTypeInfoModel();
       // $this->category = new CategoryModel();
        //$this->serviceModel = new ServiceModel();
        //$this->serviceitems = new ServiceitemsModel();
       // $this->rooms = new RoomsInfoModel();
        $this->advancebook = new AdvanceBookingModel();
        $this->guestinfo = new GuestPersonalModel();
        $this->bookingguest = new BookingGuest();
    }

    
    public function room_guest($room)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        $data['book'] = $this->advancebook->where('room', $room)
                                                 ->where('status', 'Occupied')
                                                 ->where('deleted_on', null)->first();

                                                 
        $booking_id=$data['book']['id'];

       // echo json_encode($booking_id);
        $guest = $this->bookingguest->select('guest_id')
                                    ->where('booking_id', $booking_id)
                                    ->where('deleted_on', null)->findAll();
        
       if (!empty($guest) && is_array($guest)) {
       foreach($guest as $each_guest){
        
         $guest_presonal[] = $this->guestinfo->where('guest_id', $each_guest['guest_id'])
                                  ->where('deleted_on', null)->first();
            
         

       
       }
       }else{

         $presonal['guest_id']='';
         $presonal['first_name']='';
         $presonal['contact']='';

         $guest_presonal[]=$presonal;
         $guest_presonal[]=$presonal;
         

       }
       echo json_encode($guest_presonal);

      }



    

}
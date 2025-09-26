<?php

namespace App\Controllers;
use App\Models\ServiceTypeInfoModel;
use App\Models\CategoryModel;
use App\Models\ServiceModel;
//use App\Models\ServiceitemsModel;
use App\Models\RoomsInfoModel;    
use App\Models\AdvanceBookingModel;

class Landingpage extends BaseController
{
     
   
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->servicetype = new ServiceTypeInfoModel();
        $this->category = new CategoryModel();
        $this->serviceModel = new ServiceModel();
       // $this->serviceitems = new ServiceitemsModel();
        $this->rooms = new RoomsInfoModel();
        $this->AdvanceBookingModel = new AdvanceBookingModel();
    }

    
    public function view()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

      
       return view('landingpage/frontend-landingpage.html');
    }

   public function addproduct()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
       
        
        
        $data['servicetype'] = $this->servicetype->where('deleted_on', null)->findAll();
        $data['category'] = $this->category->where('deleted_on', null)->findAll();
        $data['rooms'] = $this->rooms->where('room_status','Occupied')
                                     ->where('deleted_on', null)->findAll();
                                      // Fetch all occupied bookings
   $data['occupiedBookings'] = $this->AdvanceBookingModel
    ->select('advance_bookings.id, advance_bookings.guest1_id, advance_bookings.guest1_firstname, advance_bookings.guest1_lastname, advance_bookings.guest2_id, advance_bookings.guest2_firstname, advance_bookings.guest2_lastname, rooms.room_no')
    ->join('rooms', 'rooms.room_id = advance_bookings.room_id')
    ->where('advance_bookings.status', 'Occupied')
    ->where('advance_bookings.deleted_on', null)
    ->distinct()
    ->findAll();



 

        //echo json_encode($data['category']);
        return view('addproduct/eco-add-product.php',$data);
    }

       public function payment($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

       $data['amount']=$id;
       return view('payment/payment.html',$data);
    }

          public function category_alpha($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        error_reporting(0);
        $categories = $this->category->select('category_name')
                                   ->like('category_name', $id, 'after')->findAll();
 


        $result = [];
        foreach ($categories as $cat) {
            $firstLetter = strtoupper(substr($cat['category_name'], 0, 1));
           $result[$firstLetter][] = $cat['category_name'];
                    
        }

   
        echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  
       

    }

      public function servicemode_alpha($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        $servicemodes = $this->serviceModel
                           ->where('category_name', $id)
                           ->where('deleted_on', null)
                           ->findAll();

        $result = [];

        foreach ($servicemodes as $row) {
            $item = $row['category_name'];
        
            // Initialize if not exists
            if (!isset($result[$item])) {
                $result[$item] = [
                    'types' => [],
                    'prices' => [],
                    'unit' => []
                ];
            }
        
            // Push type & price
            $result[$item]['types'][] = $row['name'];
            $result[$item]['prices'][] = (float) $row['price'];
        }
        
        // Output JSON
        return $this->response->setJSON($result);
            }

public function service_category1($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        error_reporting(0);
        $categories = $this->category->select('category_name')
                                   ->where('service_type_name', $id)->findAll();
 
          foreach($categories as $name){
                $category_list[]=$name['category_name'];
              }
           
        $uniqueValues = array_unique($category_list);
             $uniqueFirstLetters = array_unique(array_map(fn($v) => strtolower($v[0]), $uniqueValues));
             $upper = array_map('strtoupper', $uniqueFirstLetters);
      

          
        echo json_encode($upper, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  
       

    }

 public function service_category($id)
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Step 1: Get service type name by ID
    $serviceType = $this->servicetype
                        ->select('name')
                        ->where('service_type_id', $id)
                        ->first();

    if (!$serviceType) {
        echo json_encode([]);
        return;
    }

    // Step 2: Get categories that belong to this service type name
    $categories = $this->category
                       ->select('category_name')
                       ->where('service_type_name', $serviceType['name'])
                       ->where('deleted_on', null)
                       ->findAll();

    // Step 3: Prepare output
    $category_list = [];
    foreach ($categories as $cat) {
        $category_list[] = $cat['category_name'];
    }

    echo json_encode(array_values(array_unique($category_list)), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

public function service_items($categoryName)
{
    $items = $this->serviceModel
                 ->select('name, price')
                 ->where('category_name', $categoryName)
                 ->where('deleted_on', null)
                 ->findAll();

    $result = [];

    foreach ($items as $row) {
        $result[] = [
            'name'  => $row['name'],
            'price' => (float)$row['price']
        ];
    }

    return $this->response->setJSON($result);
}


public function occupiedRooms()
{
    // Fetch all occupied bookings
    $data['occupiedBookings'] = $this->AdvanceBookingModel
        ->where('status', 'Occupied')
        ->findAll();

    // Pass data to the view
    return view('addproduct/eco-add-product.php', $data);
}




}
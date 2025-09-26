<?php

namespace App\Controllers;
use App\Models\ServiceTypeInfoModel;
use App\Models\CategoryModel;
use App\Models\ServiceModel;
//use App\Models\ServiceitemsModel;
use App\Models\RoomsInfoModel;    

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
public function service_category($id)
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
}
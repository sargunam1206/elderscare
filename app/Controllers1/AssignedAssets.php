<?php

namespace App\Controllers;
use App\Models\AssetsvalueInfoModel;
use App\Models\AssetsInfoModel;
use App\Models\AssignedAssetsInfoModel;
use App\Models\RequestHistoryModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

class AssignedAssets extends BaseController
{
  function __construct()
    {

        $this->session = \Config\Services::session();
        $this->session->start();


    }
            public function index()
            {
                helper(['url']);
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                  
                if($this->request->getPOST('submit')!=''){
                   
                      $rules = [
                    'assets_grn_no' => 'required',
                   
                    
                ];
                 
                if($this->validate($rules)){
                   
                        
                        $users= new AssignedAssetsInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        $return_date=$this->request->getPOST('assigned_assets_retureddate');
                       
                        $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'assigned_assets_employee' =>$this->request->getPOST('assigned_assets_employee'),
                           
                            'assigned_assets_qty_assigned' =>$this->request->getPOST('assigned_assets_qty_assigned'),
                            'assigned_assets_status' =>'assigned',
                            'assigned_assets_childpart'=>json_encode($this->request->getPOST('assigned_assets_childpart')),
                             'assigned_assets_retureddate'=>date("Y-m-d",strtotime($return_date)),
                             
                            'assigned_assets_created_on'=>$date,
                            'assigned_assets_updated_on'=>$date
                        ];



                        $users->save($data);

                        //feteching the assets info 
                        $info = new AssetsInfoModel();
                        $info->where('assets_deleted_on =',null);
                        $dataassets['assets_info']=$info->orderBy('assets_id', 'ASC')->findAll();
                        
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        return redirect()->to('assignedassets'); 
                        
                        
                }
                
            }else{
                 $info = new AssetsInfoModel();
                 $info->where('assets_deleted_on =',null);
                 $data['assets_info']=$info->orderBy('assets_id', 'ASC')->findAll();
                 return view('assignedassets/index',$data);
            }
                
                
            }
            
               public function view($user_id=null)
            {
                 helper(['url']);
                 ini_set('display_errors', '1');
                 ini_set('display_startup_errors', '1');
                 error_reporting(E_ALL);
                 $info = new AssignedAssetsInfoModel();
                  
                $session=session();
                  
                if($this->request->getPOST('type')=='') {
                     
                $info->where('assigned_assets_deleted_on =',null);
                $data['assets_type']='Assets';
                    
                }else{
                   if($this->request->getPOST('type')=='Assets') {
                      $info->where('assigned_assets_deleted_on =',null);
                      
                   }else{
                       $info->where('assigned_assets_deleted_on !=',null);
                       
                   }
                      $data['assets_type']=$this->request->getPOST('type');
                }  
               
                
                
                
                $data = $info->orderBy('assigned_assets_id', 'ASC')->findAll();
                
                
                foreach($data as $singleassgined){
                    
                    
                    $data1['assets_grn_no'][]=$singleassgined['assets_grn_no'];
                    $data1['assigned_assets_employee'][]=$singleassgined['assigned_assets_employee'];
                    $data1['assigned_assets_qty_assigned'][]=$singleassgined['assigned_assets_qty_assigned'];
                    $data1['assigned_assets_id'][]= $singleassgined['assigned_assets_id'];
                    $data1['assigned_assets_retureddate'][]= $singleassgined['assigned_assets_retureddate'];
                     
                     
                    $value = new AssetsvalueInfoModel();
                    $assetsvalue =$value->where('assets_grn_no',$singleassgined['assets_grn_no'])->first();
                    
                    if(!isset($assetsvalue)){
                       $assetsvalue['assetsvalue_value']='';
                    }else{
                        
                    }
                    
                    $data1['assetsvalue_value'][]=$assetsvalue['assetsvalue_value'];
                    
                    $assets = new AssetsInfoModel();
                    $assets =$assets->where('assets_grn_no',$singleassgined['assets_grn_no'])->first();
                    
                if(isset($assets)){
                    $data1['assets_name'][]= $assets['assets_name'];
                    $data1['assets_brand'][]= $assets['assets_brand'];
                    $data1['assets_customer_name'][]= $assets['assets_customer_name'];
                    $data1['assets_part_name'][]= $assets['assets_party_name'];
                    $data1['assets_qty_avl'][]= $assets['assets_qty_avl'];
                    
                    
                    
                }else{
                    $data1['assetsvalue_value'][]='';
                    $data1['assets_name'][]='';
                    $data1['assets_brand'][]='';
                    $data1['assets_customer_name'][]='';
                    $data1['assets_part_name'][]='';
                    $data1['assets_qty_avl'][]='';
                } 
                }
                
                if($user_id!=''){
                    
                    $base=base64_decode(base64_decode(base64_decode($user_id)));
                    $data_assigned =$info->where('assigned_assets_id',$base)->first();
                    $data1['assigned_assets_childpart']=$data_assigned['assigned_assets_childpart'];
                    $data1['assigned_assets_idchild']=$data_assigned['assigned_assets_id'];
                }else{
                    
                }
                
               $submit = $this->request->getPOST('submit');
                
                if($submit == "download"){
                 return $this->download($data1);
                }
                //echo json_encode($data1);
                  
              return view('assignedassets/view',$data1);
            }
            
             public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $info= new AssignedAssetsInfoModel();
                $id = $this->request->getVar('assigned_assets_id');

                   date_default_timezone_set("Asia/Kolkata");
                   $date = date("Y-m-d h:i:s");
                   $return_date=$this->request->getPOST('assigned_assets_retureddate');   
                     $session=session();
                    
                      
                        $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'assigned_assets_employee' =>$this->request->getPOST('assigned_assets_employee'),
                           
                            'assigned_assets_qty_assigned' =>$this->request->getPOST('assigned_assets_qty_assigned'),
                            'assigned_assets_status' =>'assigned',
                            'assigned_assets_childpart' =>json_encode($this->request->getPOST('assigned_assets_childpart')),
                            'assigned_assets_retureddate'=>date("Y-m-d",strtotime($return_date)),
                            
                            'assigned_assets_created_on'=>$date,
                            'assigned_assets_updated_on'=>$date
                        ];
                    
                    $datas=$info->where('assigned_assets_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    
                
                    helper(['url']);
                    return redirect()->to('assignedassets'); 

               
            }
            
               public function delete($user_id=null)
            {
               
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[

                            'assigned_assets_deleted_on' => $date,
                        ];
                
                $info = new AssignedAssetsInfoModel();
                $info->where('assigned_assets_id', $base)->update($base,$data);
                $info->where('assigned_assets_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['alldata']=$info->orderBy('assigned_assets_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewassignedassets'); 


            }
            
            
             public function edit($id=null)
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $base=base64_decode(base64_decode(base64_decode($id)));
                $info = new AssignedAssetsInfoModel();
                $data =$info->where('assigned_assets_id',$base)->first();
                
                
            
                    $data1['assets_grn_no']=$data['assets_grn_no'];
                    $data1['assigned_assets_employee']=$data['assigned_assets_employee'];
                    $data1['assigned_assets_qty_assigned']=$data['assigned_assets_qty_assigned'];
                    $data1['assigned_assets_id']=$data['assigned_assets_id'];
                    $data1['assigned_assets_childpart']= $data['assigned_assets_childpart']; 
                    $data1['assigned_assets_retureddate']= $data['assigned_assets_retureddate']; 
                    
                    $value = new AssetsvalueInfoModel();
                    $assetsvalue =$value->where('assets_grn_no',$data['assets_grn_no'])->first();
                    
                    if(!isset($assetsvalue)){
                       $assetsvalue['assetsvalue_value']='';
                    }else{
                        
                    }
                    
                    $data1['assetsvalue_value']=$assetsvalue['assetsvalue_value'];
                    
                    $assets = new AssetsInfoModel();
                    $assets =$assets->where('assets_grn_no',$data['assets_grn_no'])->first();
                    
                    
                    $data1['assets_name']= $assets['assets_name'];
                    $data1['assets_brand']= $assets['assets_brand'];
                    $data1['assets_customer_name']= $assets['assets_customer_name'];
                    $data1['assets_part_name']= $assets['assets_party_name'];
                    $data1['assets_qty_avl']= $assets['assets_qty_avl']; 
                   
                  
                    $assetsall = new AssetsInfoModel();
                    $assetsall->where('assets_deleted_on =',null);
                    $data1['assets_info']=$assetsall->orderBy('assets_id', 'ASC')->findAll();
                  
                  
               return view("assignedassets/edit",$data1);

            }
            
            
             public function register_viyoma()
            {
                helper(['url']);
               
                
                if($this->request->getPOST('submit')!=''){
                   
                      $rules = [
                    'user_name' => 'required',
                    'user_email' => 'required',
                    'user_password' => 'required',
                    
                ];
                  
                if($this->validate($rules)){
                   
                        
                        $users= new UserInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'username' =>$this->request->getPOST('user_name'),
                            'user_email' =>$this->request->getPOST('user_email'),
                           
                            
                            'user_password' =>password_hash($this->request->getPOST('user_password'), PASSWORD_DEFAULT),
                            'user_created_on'=>$date,
                            'user_updated_on'=>$date
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        //return view("users/login_viyoma");
                        return redirect()->to('viewassets'); 
                        
                }
                
            }else{
                 return view('users/register_viyoma');
            }
        }
        
           public function assetsdata($id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                //$id="1234657467";
                $assetsvalue = new AssetsvalueInfoModel();
                $assetsvaluedata =$assetsvalue->where('assets_grn_no',$id)->first();
                
                $assets = new AssetsInfoModel();
                $assetsdata=$assets->where('assets_grn_no',$id)->first();
                
                
                $data1['assets_party_name']= $assetsdata['assets_party_name'];
                $data1['assets_customer_name']= $assetsdata['assets_customer_name'];
                $data1['assets_qty_avl']= $assetsdata['assets_qty_avl'];
                
                if(!isset($assetsvaluedata)){
                     $data1['assetsvalue_value']='';
                }else{
                     $data1['assetsvalue_value']= $assetsvaluedata['assetsvalue_value'];
                }
                
               
                
                if(!isset($assetsdata)){
                if($assetsdata==''){
                     
                    $data1['assets_party_name']='';
                    $data1['assets_customer_name']='';
                    $data1['assets_qty_avl']='';
                    
                }}
              
               echo json_encode($data1); 
          
            }
            public function childpart($id=null){
                
                 ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $info = new AssignedAssetsInfoModel();
                $info->where('assigned_assets_deleted_on =',null);
                $data =$info->where('assets_grn_no',$id)->first();
                
                $child_part=json_decode($data['assigned_assets_childpart']);
                echo json_encode($child_part);
            }
            
        
        public function download($data1)
        {
            ini_set('display_errors', '0');
            ini_set('display_startup_errors', '0');
            error_reporting(0);
            
            // echo json_encode($data);
            $mpdf = new \Mpdf\Mpdf();
            $html = view('assignedassets/download',$data1);

            $mpdf->WriteHTML($html);

            $pdfContent = $mpdf->Output('', 'S');

            $response = \Config\Services::response();
            $response->setHeader('Content-Type', 'application/pdf');
            $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');

            return $response->setBody($pdfContent);
        }
         

}
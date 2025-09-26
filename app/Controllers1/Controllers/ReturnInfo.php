<?php

namespace App\Controllers;
use App\Models\ReturnInfoModel;
use App\Models\AssignedAssetsInfoModel;

use App\Models\RequestHistoryModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

class ReturnInfo extends BaseController
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
                   
                        
                        $users= new ReturnInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        $created_date=date("Y-m-d");
                      
                        $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                          
                            'returned_date' =>$this->request->getPOST('returned_date'),
                            'returned_by' =>$this->request->getPOST('returned_by'),
                            'approved_by' =>$this->request->getPOST('approved_by'),
                            'return_qty' =>$this->request->getPOST('return_qty'),
                            'return_childpart' =>json_encode($this->request->getPOST('return_childpart')),
                            'return_created_date'=>$created_date,
                            'return_created_on'=>$date,
                            'return_updated_on'=>$date
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        $info = new AssignedAssetsInfoModel();
                        $info->where('assigned_assets_deleted_on =',null);
                        $info->select('assets_grn_no');
                        $data['assets_info']=$info->orderBy('assigned_assets_id', 'ASC')->findAll();
                        
                        
                        
                        return redirect()->to('return'); 
                        
                        
                }
                
            }else{
                $info = new AssignedAssetsInfoModel();
                $info->where('assigned_assets_deleted_on =',null);
                $info->select('assets_grn_no');
                $data['assets_info']=$info->orderBy('assigned_assets_id', 'ASC')->findAll();
              
              
              
                
              return view('return_info/index',$data);
            }
                
                
            }
            
            
               public function view($user_id=null)
            {
                
                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                 
                $return = new ReturnInfoModel();
                  
                $session=session();
                  
             
               if($this->request->getPOST('submit')!=''){
                   $from_date=$this->request->getPOST('from_date');
                   $to_date=$this->request->getPOST('to_date');
                   date_default_timezone_set("Asia/Kolkata");
                  
                   
                    
                if($from_date!=''){
                  $from_correctdate=date("Y-m-d",strtotime($from_date));
                  $return->where('return_created_date>=',$from_correctdate);
                 }
                if($to_date!=''){
                    
                  $to_correctdate=date("Y-m-d",strtotime($to_date));
                  $return->where('return_created_date<=',$to_correctdate);
                 }
                 
                if($this->request->getPOST('type')=='') {
                   
                    $data['assets_type']='Assets';
                    $return->where('return_deleted_on =',null);
                }else{
                   
                if($this->request->getPOST('type')=='Assets') {
                   $return->where('return_deleted_on =',null);
                   
                }else{
                   $return->where('return_deleted_on !=',null);
                       
                }
                    $data['assets_type']=$this->request->getPOST('type');
                }
                   
                   
                  
                   
                   $data['alldata'] = $return->orderBy('return_id', 'ASC')->findAll();
               }else{
             
                $data['assets_type']='Assets';
                $return->where('return_deleted_on =',null);
                $data['alldata'] =  $return->orderBy('return_id', 'ASC')->findAll();
               }
               
                if($user_id!=''){
                    $info = new AssignedAssetsInfoModel();
                    $base=base64_decode(base64_decode(base64_decode($user_id)));
                    
                    $info->where('assigned_assets_deleted_on =',null);
                    echo $base;
                    $data_assigned =$info->where('assets_grn_no',$base)->first();
                    
                    
                     $return->where('return_deleted_on =',null);
                    $data_return =$return->where('assets_grn_no',$base)->first();
                    
                   
                    
                    if($data_assigned==''){
                         $data['assigned_assets_childpart']='';
                    }else{
                         $data['assigned_assets_childpart']=$data_assigned['assigned_assets_childpart'];
                    }
                    
                    
                    $data['return_childpart']=$data_return['return_childpart'];
                    
                   //echo json_encode($data_assigned);
                    $data['return_childpartid']=$data_return['assets_grn_no'];
                  
                  //echo json_encode($data_assigned);
                }
                 $submit = $this->request->getPOST('submit');
                
                if($submit == "download"){
                 return $this->download($data);
                }
                return view('return_info/view',$data);
            }
            
             public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $info= new ReturnInfoModel();
                $id = $this->request->getVar('return_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     $session=session();
                    
                      
                        
                        $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                          
                            'returned_date' =>$this->request->getPOST('returned_date'),
                            'returned_by' =>$this->request->getPOST('returned_by'),
                            'approved_by' =>$this->request->getPOST('approved_by'),
                            'return_qty' =>$this->request->getPOST('return_qty'),
                            'return_childpart' =>json_encode($this->request->getPOST('return_childpart')),
                           
                            'return_updated_on'=>$date
                        ];
                        
                        
                    
                    
                    
                    $datas=$info->where('return_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $info->where('return_deleted_on =',null);
                    $data['alldata']=$info->orderBy('return_id', 'ASC')->findAll();
                
                    helper(['url']);
                    return redirect()->to('viewreturn'); 

               
            }
            
               public function delete($user_id=null)
            {
               
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[

                            'return_deleted_on' => $date,
                        ];
                
                $info = new ReturnInfoModel();
                $info->where('return_id', $base)->update($base,$data);
                $info->where('return_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['alldata']=$info->orderBy('return_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewreturn'); 


            }
            
            
             public function edit($id=null)
            {
               
                $base=base64_decode(base64_decode(base64_decode($id)));
                $info = new ReturnInfoModel();
                $data['alldata'] =$info->where('return_id',$base)->first();
                $info = new AssignedAssetsInfoModel();
                $info->where('assigned_assets_deleted_on =',null);
                $info->select('assets_grn_no');
                $data['assets_info']=$info->orderBy('assigned_assets_id', 'ASC')->findAll();
                return view("return_info/edit",$data);

            }
            
        public function download($data)
        {
            ini_set('display_errors', '0');
            ini_set('display_startup_errors', '0');
            error_reporting(0);
            
            // echo json_encode($data);
            $mpdf = new \Mpdf\Mpdf();
            $html = view('return_info/download',$data);

            $mpdf->WriteHTML($html);

            $pdfContent = $mpdf->Output('', 'S');

            $response = \Config\Services::response();
            $response->setHeader('Content-Type', 'application/pdf');
            $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');

            return $response->setBody($pdfContent);
        }
       
            
           

}
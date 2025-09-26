<?php

namespace App\Controllers;
use App\Models\AssetsvalueInfoModel;
use App\Models\AssetsInfoModel;
use App\Models\RequestHistoryModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

class Assetsvalue extends BaseController
{
  function __construct()
    {

        $this->session = \Config\Services::session();
        $this->session->start();


    }
            public function index()
            {
                helper(['url']);
                
                  
                if($this->request->getPOST('submit')!=''){
                   
                      $rules = [
                    'assets_grn_no' => 'required',
                   
                    
                ];
                  
                if($this->validate($rules)){
                   
                        
                        $users= new AssetsvalueInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'assetsvalue_value' =>$this->request->getPOST('assetsvalue_value'),
                           
                            
                            'assetsvalue_created_on'=>$date,
                            'assetsvalue_updated_on'=>$date
                        ];



                        $users->save($data);

                        //feteching the assets info 
                        $info = new AssetsInfoModel();
                        $info->where('assets_deleted_on =',null);
                        $dataassets['assets_info']=$info->orderBy('assets_id', 'ASC')->findAll();
                        
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        return redirect()->to('assetsvalue'); 
                        
                        
                }
                
            }else{
                 $info = new AssetsInfoModel();
                 $info->where('assets_deleted_on =',null);
                 $data['assets_info']=$info->orderBy('assets_id', 'ASC')->findAll();
                 return view('assetsvalue/index',$data);
            }
                
                
            }
            
               public function view()
            {
                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $info = new AssetsvalueInfoModel();
                  
                $session=session();
               
                if($this->request->getPOST('type')=='') {
                     
                $info->where('assetsvalue_deleted_on =',null);
                $data['assets_type']='Assets';
                    
                }else{
                   if($this->request->getPOST('type')=='Assets') {
                       $info->where('assetsvalue_deleted_on =',null); 
                      
                   }else{
                       $info->where('assetsvalue_deleted_on !=',null); 
                       
                   }
                      $data['assets_type']=$this->request->getPOST('type');
                }
                
                $data['alldata'] = $info->orderBy('assetsvalue_id', 'ASC')->findAll();
                
                $submit = $this->request->getPOST('submit');
                
                if($submit == "download"){
                 return $this->download($data);
                }
                  
                return view('assetsvalue/view',$data);
            }
            
             public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $info= new AssetsvalueInfoModel();
                $id = $this->request->getVar('assetsvalue_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     $session=session();
                    
                      

                        $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'assetsvalue_value' =>$this->request->getPOST('assetsvalue_value'),
                           
                            'assetsvalue_updated_on'=>$date
                        ];
                   
                    
                    $datas=$info->where('assetsvalue_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    
                
                    helper(['url']);
                    return redirect()->to('viewassetsvalue'); 

               
            }
            
               public function delete($user_id=null)
            {
               
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[

                            'assetsvalue_deleted_on' => $date,
                        ];
                
                $info = new AssetsvalueInfoModel();
                $info->where('assetsvalue_id', $base)->update($base,$data);
                $info->where('assetsvalue_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['alldata']=$info->orderBy('assetsvalue_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewassetsvalue'); 


            }
            
            
             public function edit($id=null)
            {
               
                $base=base64_decode(base64_decode(base64_decode($id)));
                $info = new AssetsvalueInfoModel();
                $data['alldata'] =$info->where('assetsvalue_id',$base)->first();
                
                 $info = new AssetsInfoModel();
                 $info->where('assets_deleted_on =',null);
                 $data['assets_info']=$info->orderBy('assets_id', 'ASC')->findAll();
            
                  
               return view("assetsvalue/edit",$data);

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
            
             public function download($data)
        {
            ini_set('display_errors', '0');
            ini_set('display_startup_errors', '0');
            error_reporting(0);
            
            // echo json_encode($data);
            $mpdf = new \Mpdf\Mpdf();
            $html = view('assetsvalue/download',$data);

            $mpdf->WriteHTML($html);

            $pdfContent = $mpdf->Output('', 'S');

            $response = \Config\Services::response();
            $response->setHeader('Content-Type', 'application/pdf');
            $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');

            return $response->setBody($pdfContent);
        } 
         

}
<?php

namespace App\Controllers;
use App\Models\AssetsInfoModel;
use App\Models\DepreciationInfoModel;
use App\Models\RequestHistoryModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

class Depreciation extends BaseController
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
                   
                        
                        $users= new DepreciationInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        $created_date=date("Y-m-d");
                        $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'maintenence' =>$this->request->getPOST('maintenence'),
                            'start_date' =>$this->request->getPOST('start_date'),
                            'end_date' =>$this->request->getPOST('end_date'),
                            'warrenty_reminder' =>$this->request->getPOST('warrenty_reminder'),
                            'amc_level' =>$this->request->getPOST('amc_level'),
                            'depreciation_method' =>$this->request->getPOST('depreciation_method'),
                             'total_cost' =>$this->request->getPOST('total_cost'),
                         
                            'useful_life_in_years' =>$this->request->getPOST('useful_life_in_years'),
                            'salvage_value' =>$this->request->getPOST('salvage_value'),
                            'rate_of_depreciation' =>$this->request->getPOST('rate_of_depreciation'),
                            
                            
                             
                            'depreciation_created_date'=>$created_date,
                            'depreciation_created_on'=>$date,
                            'depreciation_updated_on'=>$date
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        return redirect()->to('depreciation'); 
                        
                        
                }
                
            }else{
                 $info = new AssetsInfoModel();
                 $info->where('assets_deleted_on =',null);
                 $data['assets_info']=$info->orderBy('assets_id', 'ASC')->findAll();
                 return view('depreciation/index',$data);
            }
                
                
            }
            
            
               public function view()
            {
                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL); 
                $depreciation = new DepreciationInfoModel();
                  
                $session=session();
                  
             
               if($this->request->getPOST('submit')!=''){
                   $from_date=$this->request->getPOST('from_date');
                   $to_date=$this->request->getPOST('to_date');
                   date_default_timezone_set("Asia/Kolkata");
                  
                   
                if($from_date!=''){
                   $from_correctdate=date("Y-m-d",strtotime($from_date));
                   $depreciation->where('depreciation_created_date>=',$from_correctdate);
                 }
                if($to_date!=''){
                    $depreciation->where('depreciation_created_date<=',$to_correctdate);
                    $to_correctdate=date("Y-m-d",strtotime($to_date));
                 }
                 
                if($this->request->getPOST('type')=='') {
                   
                    $data['assets_type']='Assets';
                    $depreciation->where('depreciation_deleted_on =',null);
                }else{
                   
                if($this->request->getPOST('type')=='Assets') {
                   $depreciation->where('depreciation_deleted_on =',null);
                   
                }else{
                   $depreciation->where('depreciation_deleted_on !=',null);
                       
                }
                    $data['assets_type']=$this->request->getPOST('type');
                }
                   
                   
                   $data['alldata'] = $depreciation->orderBy('depreciation_id', 'ASC')->findAll();
               }else{
             
               $data['assets_type']='Assets';
               $depreciation->where('depreciation_deleted_on =',null);
               $data['alldata'] = $depreciation->orderBy('depreciation_id', 'ASC')->findAll();
               }
               
                $submit = $this->request->getPOST('submit');
                
                if($submit == "download"){
                 return $this->download($data);
                }
                
                return view('depreciation/view',$data);
            }
            
             public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $info=  new DepreciationInfoModel();
                $id = $this->request->getVar('depreciation_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     $session=session();
                  
                   
                      
                       $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'maintenence' =>$this->request->getPOST('maintenence'),
                            'start_date' =>$this->request->getPOST('start_date'),
                            'end_date' =>$this->request->getPOST('end_date'),
                            'warrenty_reminder' =>$this->request->getPOST('warrenty_reminder'),
                            'amc_level' =>$this->request->getPOST('amc_level'),
                            'depreciation_method' =>$this->request->getPOST('depreciation_method'),
                             'total_cost' =>$this->request->getPOST('total_cost'),
                         
                            'useful_life_in_years' =>$this->request->getPOST('useful_life_in_years'),
                            'salvage_value' =>$this->request->getPOST('salvage_value'),
                            'rate_of_depreciation' =>$this->request->getPOST('rate_of_depreciation'),
                            
                            
                            
                         
                            'depreciation_updated_on'=>$date
                        ];

                 
                    
                    
                    $datas=$info->where('depreciation_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $info->where('depreciation_deleted_on =',null);
                    $data['alldata']=$info->orderBy('depreciation_id', 'ASC')->findAll();
                
                    helper(['url']);
                    return redirect()->to('viewdepreciation'); 

               
            }
            
               public function delete($user_id=null)
            {
               
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[

                            'depreciation_deleted_on' => $date,
                        ];
                
                $info = new DepreciationInfoModel();
                $info->where('depreciation_id', $base)->update($base,$data);
                $info->where('depreciation_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['alldata']=$info->orderBy('depreciation_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewdepreciation'); 


            }
            
            
             public function edit($id=null)
            {
               
                $base=base64_decode(base64_decode(base64_decode($id)));
                $info = new DepreciationInfoModel();
                $data['alldata'] =$info->where('depreciation_id',$base)->first();
                $assets = new AssetsInfoModel();
                $assets->where('assets_deleted_on =',null);
                $data['assets_info']=$assets->orderBy('assets_id', 'ASC')->findAll();
                return view("depreciation/edit",$data);

            }
            
        public function download($data)
        {
            ini_set('display_errors', '0');
            ini_set('display_startup_errors', '0');
            error_reporting(0);
            
            // echo json_encode($data);
            $mpdf = new \Mpdf\Mpdf();
            $html = view('depreciation/download',$data);

            $mpdf->WriteHTML($html);

            $pdfContent = $mpdf->Output('', 'S');

            $response = \Config\Services::response();
            $response->setHeader('Content-Type', 'application/pdf');
            $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');

            return $response->setBody($pdfContent);
        }
            
       
            
           

}
<?php

namespace App\Controllers;
use App\Models\PurchaseInfoModel;
use App\Models\RequestHistoryModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

class Purchase extends BaseController
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
                    'purchase_vendor' => 'required',
                   
                    
                ];
                  
                if($this->validate($rules)){
                   
                        
                        $users= new PurchaseInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        $created_date=date("Y-m-d");
                           if($this->request->getFile('purchase_asset_image')!=''){
                           $img_bank = $this->request->getFile('purchase_asset_image');
                            $filepath_bank = 'public/'. $img_bank->getName();
                            $img_bank->move(ROOTPATH . 'public');
                            $data['file_bank']= $filepath_bank;
                       }
                       else{
                             $data['file_bank']=null;
                        }
                        
                        $data=[
                            'purchase_vendor' =>$this->request->getPOST('purchase_vendor'),
                            'purchase_asset_type' =>$this->request->getPOST('purchase_asset_type'),
                            'purchase_model' =>$this->request->getPOST('purchase_model'),
                            'purchase_price' =>$this->request->getPOST('purchase_price'),
                            'purchase_discount' =>$this->request->getPOST('purchase_discount'),
                            'purchase_units_acquired' =>$this->request->getPOST('purchase_units_acquired'),
                            'purchase_date_acquired' =>$this->request->getPOST('purchase_date_acquired'),
                            'purchase_status' =>$this->request->getPOST('purchase_status'),
                            'purchase_asset_image' =>$data['file_bank'],
                            'purchase_expense_refid' =>$this->request->getPOST('purchase_expense_refid'),
                            'purchase_taxtype' =>$this->request->getPOST('purchase_taxtype'),
                            'purchase_tax_percent' =>$this->request->getPOST('purchase_tax_percent'),
                            'purchase_tax_exemption' =>$this->request->getPOST('purchase_tax_exemption'),
                            'purchase_delivery_sts' =>$this->request->getPOST('purchase_delivery_sts'),
                            'purchase_created_date'=>$created_date,
                            'purchase_created_on'=>$date,
                            'purchase_updated_on'=>$date
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        return redirect()->to('purchase'); 
                        
                        
                }
                
            }else{
                return view('purchase/index');
            }
                
                
            }
            
            
               public function view()
            {
                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL); 
                 
                 
                $purchase = new PurchaseInfoModel();
                  
                $session=session();
                  
             
               if($this->request->getPOST('submit')!=''){
                   $from_date=$this->request->getPOST('from_date');
                   $to_date=$this->request->getPOST('to_date');
                   $delivery_sts=$this->request->getPOST('purchase_delivery_sts');  
                   
                   $purchase_vendor=$this->request->getPOST('purchase_vendor'); 
                   date_default_timezone_set("Asia/Kolkata");
                    
                   if($purchase_vendor==''){
                       
                    // $purchase->where('purchase_delivery_sts=','Waiting');   
                       
                   }else{
                     $purchase->where('purchase_vendor=',$purchase_vendor);     
                   }
                    
                   if($delivery_sts==''){
                       
                    // $purchase->where('purchase_delivery_sts=','Waiting');   
                       
                   }else{
                     $purchase->where('purchase_delivery_sts=',$delivery_sts);     
                   }


                    
                   if($from_date!=''){
                    $from_correctdate=date("Y-m-d",strtotime($from_date));
                    $purchase->where('purchase_created_date>=',$from_correctdate);
                   
                   }
                   
                   
                   if($to_date!=''){
                    $to_correctdate=date("Y-m-d",strtotime($to_date));
                    $purchase->where('purchase_created_date<=',$to_correctdate);
                   }
                   
                  
                   if($this->request->getPOST('type')=='') {
                       $data['assets_type']='Assets';
                        $purchase->where('purchase_deleted_on =',null);
                    }else{
                   
                   if($this->request->getPOST('type')=='Assets') {
                       $purchase->where('purchase_deleted_on =',null);
                      
                   }else{
                      $purchase->where('purchase_deleted_on !=',null);
                       
                   }
                   $data['assets_type']=$this->request->getPOST('type');
                   }
                   
                  
                   
                   $data['alldata'] = $purchase->orderBy('purchase_id', 'ASC')->findAll();
                   
                    $purchase = new PurchaseInfoModel();
               $purchase->where('purchase_deleted_on =',null);
               $data['allvalues'] = $purchase->orderBy('purchase_id', 'ASC')->findAll();
                  // echo json_encode($data);
               }else{
             
                $data['assets_type']='Assets';
                $purchase->where('purchase_deleted_on =',null);
                
                $data['alldata'] = $purchase->orderBy('purchase_id', 'ASC')->findAll();
                
                $purchase = new PurchaseInfoModel();
               $purchase->where('purchase_deleted_on =',null);
               $data['allvalues'] = $purchase->orderBy('purchase_id', 'ASC')->findAll();
                
                
               }
              
               // echo json_encode($data); 
               $submit = $this->request->getPOST('submit');
                
                if($submit == "download"){
                 return $this->download($data);
                }
             return view('purchase/view',$data);
            }
            
             public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $info= new PurchaseInfoModel();
                $id = $this->request->getVar('purchase_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     $session=session();
                     if($this->request->getFile('purchase_asset_image')!=''){
                           $img_bank = $this->request->getFile('purchase_asset_image');
                            $filepath_bank = 'public/'. $img_bank->getName();
                            $img_bank->move(ROOTPATH . 'public');
                            $data['file_bank']= $filepath_bank;
                       }
                   
                      
                        $data=[
                            'purchase_vendor' =>$this->request->getPOST('purchase_vendor'),
                            'purchase_asset_type' =>$this->request->getPOST('purchase_asset_type'),
                            'purchase_model' =>$this->request->getPOST('purchase_model'),
                            'purchase_price' =>$this->request->getPOST('purchase_price'),
                            'purchase_discount' =>$this->request->getPOST('purchase_discount'),
                            'purchase_units_acquired' =>$this->request->getPOST('purchase_units_acquired'),
                            'purchase_date_acquired' =>$this->request->getPOST('purchase_date_acquired'),
                             'purchase_status' =>$this->request->getPOST('purchase_status'),
                            'purchase_expense_refid' =>$this->request->getPOST('purchase_expense_refid'),
                            'purchase_taxtype' =>$this->request->getPOST('purchase_taxtype'),
                            'purchase_tax_percent' =>$this->request->getPOST('purchase_tax_percent'),
                            'purchase_tax_exemption' =>$this->request->getPOST('purchase_tax_exemption'),
                            'purchase_delivery_sts' =>$this->request->getPOST('purchase_delivery_sts'),
                            
                            
                         
                            'purchase_updated_on'=>$date
                        ];
                    
                     if(isset($filepath_bank)){
                        if($filepath_bank!=''){
                            
                            $data['purchase_asset_image'] =$filepath_bank;
                            
                        }
                      }
                    
                    
                    
                    $datas=$info->where('purchase_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $info->where('purchase_deleted_on =',null);
                    $data['alldata']=$info->orderBy('purchase_id', 'ASC')->findAll();
                
                    helper(['url']);
                    return redirect()->to('viewpurchase'); 

               
            }
            
               public function delete($user_id=null)
            {
               
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[

                            'purchase_deleted_on' => $date,
                        ];
                
                $info = new PurchaseInfoModel();
                $info->where('purchase_id', $base)->update($base,$data);
                $info->where('purchase_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['alldata']=$info->orderBy('purchase_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewpurchase'); 


            }
            
            
             public function edit($id=null)
            {
               
                $base=base64_decode(base64_decode(base64_decode($id)));
                $info = new PurchaseInfoModel();
                $data['alldata'] =$info->where('purchase_id',$base)->first();
                
                return view("purchase/edit",$data);

            }
            
        public function download($data)
        {
            ini_set('display_errors', '0');
            ini_set('display_startup_errors', '0');
            error_reporting(0);
            
            // echo json_encode($data);
            $mpdf = new \Mpdf\Mpdf();
            $html = view('purchase/download',$data);

            $mpdf->WriteHTML($html);

            $pdfContent = $mpdf->Output('', 'S');

            $response = \Config\Services::response();
            $response->setHeader('Content-Type', 'application/pdf');
            $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');

            return $response->setBody($pdfContent);
        }
       
            
           

}
<?php

namespace App\Controllers;
use App\Models\AssetsInfoModel;
use App\Models\AssignedAssetsInfoModel;
use App\Models\RequestHistoryModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

class Assets extends BaseController
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
                   
                        
                        $users= new AssetsInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        $img_asset = $this->request->getFile('asset_image');
                 
                        if($this->request->getFile('asset_image')!=''){
                            $img_asset = $this->request->getFile('asset_image');
                            
                            
                           $newName = $this->generateUniqueFileName($img_asset->getExtension());

                          // Move the file to the desired directory with the new name
                           $img_asset->move(ROOTPATH. 'public', $newName);
                           $data['file_asset']= $newName;
                        }
                        else{
                             $data['file_asset']=null;
                        }
                        
                        $data=[
                            'assets_type' =>$this->request->getPOST('assets_type'),
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'assets_name' =>$this->request->getPOST('assets_name'),
                            'assets_brand' =>$this->request->getPOST('assets_brand'),
                            'assets_vendor' =>$this->request->getPOST('assets_vendor'),
                            'asset_image' =>$data['file_asset'],
                            'assets_customer_name' =>$this->request->getPOST('assets_customer_name'),
                            'assets_party_name' =>$this->request->getPOST('assets_party_name'),
                            'assets_qty_avl' =>$this->request->getPOST('assets_qty_avl'),
                            'assets_rec_level' =>$this->request->getPOST('assets_rec_level'),
                            'assets_location' =>$this->request->getPOST('assets_location'),
                            'assets_room' =>$this->request->getPOST('assets_room'),
                            
                            'assets_created_on'=>$date,
                            'assets_updated_on'=>$date
                        ];


                  
                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                          return view('assets/index',['oldInput'   => $this->request->getPost()]);
                        
                        
                }
                
            }else{
                return view('assets/index');
            }
                
                
            }
            
            private function generateUniqueFileName($extension)
            {
        // Generate a unique name using a combination of timestamp and random string
        $uniqueName = md5(time() . bin2hex(random_bytes(8))) . '.' . $extension;

        return $uniqueName;
                     }
                     
            public function view()
            {
                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new AssetsInfoModel();
                  
                $session=session();
                
               if($this->request->getPOST('status')=='' and $this->request->getPOST('assets_type')=='') {
                $info->where('assets_deleted_on =',null);
               
                    
                }
                elseif($this->request->getPOST('status')!='' or $this->request->getPOST('assets_type')!=''){
                
                    if($this->request->getPOST('status')!=''){
                     
                       $status= $this->request->getPOST('status');
                        $assets_type = $this->request->getPOST('assets_type');
                        //get the unassigned info
                        
                        $assigned = new AssignedAssetsInfoModel();
                        $assigned->where('assigned_assets_deleted_on =',null);
                        $assigned_data= $assigned->orderBy('assigned_assets_id', 'ASC')->findAll();
                    
                        foreach($assigned_data as $assigend_single){
                        $grnno_all[]=$assigend_single['assets_grn_no'];
                        } 
                        
                        $datas= implode(",",$grnno_all);

                        $info = new AssetsInfoModel();
                        $session=session();
                        
                        if($status=='UnAssigned'){
                            $info->where("assets_grn_no not in ($datas)");
                        }else{
                            $info->where("assets_grn_no in ($datas)");
                        }
                    
                        $info->where('assets_deleted_on =',null);
                    
                    }
                    
                    if($this->request->getPOST('assets_type')!=''){
                        if($this->request->getPOST('assets_type')=='Assets'){
                            $info->where('assets_deleted_on =',null);
                            
                        }else{
                            $info->where('assets_deleted_on !=',null); 
                        }
                      
                    }
                }
                
                
                    if($this->request->getPOST('assets_type')!=''){
                        $data['assets_type']=$this->request->getPOST('assets_type');
                    
                    }else{
                        $data['assets_type']='Assets';
                    }
                
                
                 $data['alldata']=$info->orderBy('assets_id', 'ASC')->findAll();
                
                $submit = $this->request->getPOST('submit');
                
                if($submit == "download"){
                 return $this->download($data);
                }
                return view('assets/view',$data);
                
            }
            
            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $info= new AssetsInfoModel();
                $id = $this->request->getVar('assets_id');

                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
                      
                 if($this->request->getFile('asset_image')!=''){
                            $img_asset = $this->request->getFile('asset_image');
                            
                            
                           $newName = $this->generateUniqueFileName($img_asset->getExtension());

                          // Move the file to the desired directory with the new name
                           $img_asset->move(ROOTPATH. 'public', $newName);
                           $data['file_asset']= $newName;
                        }
                        else{
                             $data['file_asset']=null;
                        }

                      
                     $session=session();
                    
                      

                              $data=[
                            'assets_grn_no' =>$this->request->getPOST('assets_grn_no'),
                            'assets_name' =>$this->request->getPOST('assets_name'),
                            'assets_brand' =>$this->request->getPOST('assets_brand'),
                            'assets_vendor' =>$this->request->getPOST('assets_vendor'),
                            'assets_customer_name' =>$this->request->getPOST('assets_customer_name'),
                            'assets_party_name' =>$this->request->getPOST('assets_party_name'),
                            'assets_qty_avl' =>$this->request->getPOST('assets_qty_avl'),
                            'assets_rec_level' =>$this->request->getPOST('assets_rec_level'),
                            'assets_location' =>$this->request->getPOST('assets_location'),
                            'assets_room' =>$this->request->getPOST('assets_room'),
                            
                           
                            'assets_updated_on'=>$date
                        ];
                   
                    if(isset($newName)){
                        if($newName!=''){
                            
                            $data['asset_image'] =$newName;
                            
                        }
                      }
                    $datas=$info->where('assets_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $info->where('assets_deleted_on =',null);
                    $data['alldata']=$info->orderBy('assets_id', 'ASC')->findAll();
                
                    helper(['url']);
                    return redirect()->to('viewassets'); 

               
            }
          
                                  
            public function delete($user_id=null)
            {
               
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[

                            'assets_deleted_on' => $date,
                        ];
                
                $info = new AssetsInfoModel();
                $info->where('assets_id', $base)->update($base,$data);
                $info->where('assets_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['alldata']=$info->orderBy('assets_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewassets'); 


            }
            
            
            public function edit($id=null)
            {
               
                $base=base64_decode(base64_decode(base64_decode($id)));
                $info = new AssetsInfoModel();
                $data['alldata'] =$info->where('assets_id',$base)->first();
                
               return view("assets/edit",$data);

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
        
            public function asset_type($id=null){
               
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
              
                
                //get the unassigned info
               if($id!=''){
          
                $assets = new AssetsInfoModel();
              
                $data=$assets->like('assets_type',$id.'%')->findAll();
                foreach($data as $onebyone){
                   $data[] = array("label"=>$onebyone['assets_type']); 
                    
                }
                
                }else{
                $data=$assets->orderBy('assets_id', 'ASC')->findAll();   
                
                }
                
                echo json_encode($data); 
                 
             
       }     
   
        public function download($data)
        {
            ini_set('display_errors', '0');
            ini_set('display_startup_errors', '0');
            error_reporting(0);
            
            // echo json_encode($data);
            $mpdf = new \Mpdf\Mpdf();
            $html = view('assets/download',$data);

            $mpdf->WriteHTML($html);

            $pdfContent = $mpdf->Output('', 'S');

            $response = \Config\Services::response();
            $response->setHeader('Content-Type', 'application/pdf');
            $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');

            return $response->setBody($pdfContent);
        }
}
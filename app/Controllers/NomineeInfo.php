<?php

namespace App\Controllers;
use App\Models\EducationalInfoModel;
use App\Models\NomineeInfoModel;
use App\Models\PersonalInfoModel;
use App\Models\CompanyWorkInfoModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class NomineeInfo extends BaseController
{

            public function index()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
                

                $info= new PersonalInfoModel();
       
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
              
                if($this->request->getPOST('emp_id')!=''){ 
                   
                    $count= count($this->request->getPOST('nominee_info_name'));
                    
                    
                    
                    $name= $this->request->getPOST('nominee_info_name');
                    $address= $this->request->getPOST('nominee_info_address');
                    $mobileno= $this->request->getPOST('nominee_info_mobileno');
                    $bankname= $this->request->getPOST('nominee_info_bankname');
                    $accno= $this->request->getPOST('nominee_info_accno');
                    $ifcno= $this->request->getPOST('nominee_info_ifcno');
                    $branchname= $this->request->getPOST('nominee_info_branchname');
                    
                    
                    $count=$count-1;
                    $nominee_info=[];
                    for($i=0;$i<=$count;$i++){
                        $nominee_info_name[]=$name[$i];
                        $nominee_info_address[]=$address[$i];
                        $nominee_info_mobileno[]=$mobileno[$i];
                        $nominee_info_bankname[]=$bankname[$i];
                        $nominee_info_accno[]= $accno[$i];
                        $nominee_info_ifcno[]= $ifcno[$i];
                        $nominee_info_branchname[]=$branchname[$i];
                        
                        
                        $namelist=$nominee_info_name;
                        $addresslist=$nominee_info_address;
                        $mobilenolist=$nominee_info_mobileno;
                        $banknamelist=$nominee_info_bankname;
                        $accnolist=$nominee_info_accno;
                        $ifcnolist=$nominee_info_ifcno;
                        $branchnamelist=$nominee_info_branchname;
                        
                    }
                    
                    
                        
                    $users= new NomineeInfoModel();
                    $users->where('emp_id =',$this->request->getPOST('emp_id'));
                    $users->where('nominee_deleted_on =',null);
                    $id_check_delete=$users->orderBy('nominee_info_id', 'ASC')->find();
                    
                   
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[nominee_info.emp_id]",
                 
                           ];
                           
                           
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }

                   
                   
                 if($this->validate($rules)){
                        
                        $users= new NomineeInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                                'nominee_info_name' =>json_encode($namelist),
                                'nominee_info_address' =>json_encode($addresslist),
                                'nominee_info_mobileno' =>json_encode($mobilenolist),
                                'nominee_info_bankname' =>json_encode($banknamelist),
                                'nominee_info_accno' =>json_encode($accnolist),
                                'nominee_info_ifcno' =>json_encode($ifcnolist),
                                'nominee_info_branchname' =>json_encode($branchnamelist),
                                
                                
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'nominee_created_on' =>$date,
                                'nominee_updated_on' =>$date,
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        

                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="nominee"; 
                        return view("nomineeinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Not Registered or ID already Registered'); 

                      $info= new PersonalInfoModel();
                      $info->where('emp_deleted_on =',null);
                      $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                      $data['page']="nominee"; 
                      return view("nomineeinfo/index",$data);
                }
                        
                   }
                   
                
         
          
            $data['page']="nominee"; 
            return view('nomineeinfo/index',$data);
            
          
            
            }
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
                
                $users = new NomineeInfoModel();
                $session=session();
                
                 if($session->get('role')==1){
                       
                      $users->where('nominee_deleted_on =',null); 
                      $data['users'] = $users->orderBy('nominee_info_id', 'ASC')->findAll();
                  }elseif($session->get('role')==2){
                      $department=$session->get('department');
                      
                      $company = new CompanyWorkInfoModel();
                      $company->where('companywork_department =',$department);
                      $company->where('companywork_deleted_on =',null);
                      $department_employee = $company->orderBy('emp_id', 'ASC')->findAll();
                     foreach($department_employee as $singledata){
                       
                       
                         $data['users'][] = $users->where('emp_id =',$singledata['emp_id'])->first();
                       
                     }
                   
                    
                      
                  }
                  elseif($session->get('role')==3){
                      
                     $id=$session->get('emp_id');
                    
                     $data['users'][] =$users->where('emp_id',$id)->first();
                     
                    
                  }
                
                helper(['url']);
                $data['page']="nominee"; 
              return view('nomineeinfo/view',$data);
                
                
                
                
            }
            
              public function list($id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $base=base64_decode(base64_decode(base64_decode($id)));
                $users = new NomineeInfoModel();
                $data=$users->where('nominee_info_id',$base)->first();
                
                $count= count(json_decode($data['nominee_info_name']));
                $name= json_decode($data['nominee_info_name']);
                $address= json_decode($data['nominee_info_address']);
                $mobileno= json_decode($data['nominee_info_mobileno']);
                $bankname= json_decode($data['nominee_info_bankname']);
                $accno= json_decode($data['nominee_info_accno']);
                $ifcno= json_decode($data['nominee_info_ifcno']);
                $branchname= json_decode($data['nominee_info_branchname']);
                
                $count=$count-1;
                for($i=0;$i<=$count;$i++){
                    
                    $info['name']= $name[$i];
                    $info['address']= $address[$i];
                    $info['mobileno']= $mobileno[$i];
                    $info['bankname']= $bankname[$i];
                    $info['accno']= $accno[$i];
                    $info['ifcno']= $ifcno[$i];
                    $info['branchname']= $branchname[$i];
                    $dat[]=$info;
                }
               echo json_encode($dat); 
              
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users = new NomineeInfoModel();
                $data['user'] =$users->where('nominee_info_id',$base)->first();
                
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="nominee"; 
                return view("nomineeinfo/edit",$data);

            }

            public function update()
            {
               
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new NomineeInfoModel();
                $id = $this->request->getVar('nominee_info_id');
             
                $count= count($this->request->getPOST('nominee_info_name'));
                    
                    $name= $this->request->getPOST('nominee_info_name');
                    $address= $this->request->getPOST('nominee_info_address');
                    $mobileno= $this->request->getPOST('nominee_info_mobileno');
                    $bankname= $this->request->getPOST('nominee_info_bankname');
                    $accno= $this->request->getPOST('nominee_info_accno');
                    $ifcno= $this->request->getPOST('nominee_info_ifcno');
                    $branchname= $this->request->getPOST('nominee_info_branchname');

                    $count=$count-1;
                    $experience_info=[];
                    for($i=0;$i<=$count;$i++){
                          $nominee_info_name[]=$name[$i];
                        $nominee_info_address[]=$address[$i];
                        $nominee_info_mobileno[]=$mobileno[$i];
                        $nominee_info_bankname[]=$bankname[$i];
                        $nominee_info_accno[]= $accno[$i];
                        $nominee_info_ifcno[]= $ifcno[$i];
                        $nominee_info_branchname[]=$branchname[$i];
                        
                        
                        $namelist=$nominee_info_name;
                        $addresslist=$nominee_info_address;
                        $mobilenolist=$nominee_info_mobileno;
                        $banknamelist=$nominee_info_bankname;
                        $accnolist=$nominee_info_accno;
                        $ifcnolist=$nominee_info_ifcno;
                        $branchnamelist=$nominee_info_branchname;
                        
                    }
             
             
             
             
             
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
                
                
                
                    $data=[
                                'nominee_info_name' =>json_encode($namelist),
                                'nominee_info_address' =>json_encode($addresslist),
                                'nominee_info_mobileno' =>json_encode($mobilenolist),
                                'nominee_info_bankname' =>json_encode($banknamelist),
                                'nominee_info_accno' =>json_encode($accnolist),
                                'nominee_info_ifcno' =>json_encode($ifcnolist),
                                'nominee_info_branchname' =>json_encode($branchnamelist),
                                
                                
                                'nominee_updated_on' =>$date,
                        ];



                    $message=$users->where('nominee_info_id',$id)->update($id,$data);

                    if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                     }
                    $users->where('nominee_deleted_on =',null); 
                    $data['users']=$users->orderBy('nominee_info_id', 'ASC')->findAll();
                    $data['page']="nominee"; 
                     helper(['url']);
                    return redirect()->to('viewnominee');

               
           
            }


            public function delete($user_id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                # code...
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[
                            
                          
                            'nominee_deleted_on' => $date,
                        ];
                
                $users = new NomineeInfoModel();
                $message=$users->where('nominee_info_id', $base)->update($base,$data);
                if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Deleted successfully'); 
                }
                $users->where('nominee_deleted_on =',null);
                $data['users']=$users->orderBy('nominee_info_id', 'ASC')->findAll();
                $data['page']="nominee"; 
                helper(['url']);
                return redirect()->to('viewnominee');


            }

        public function pdf(){
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
            
       if(isset($_GET['filename'])){ 
           if($_GET['filename']!=''){
            $filePath =WRITEPATH .$_GET['filename'];
      
            $imageExtention = pathinfo($_GET['filename'], PATHINFO_EXTENSION);
      
            if($imageExtention=='jpg' or $imageExtention=='jpeg' or $imageExtention=='png'){
                $type='image/'.$imageExtention;
            }elseif($imageExtention=='pdf'){
               $type='application/'.$imageExtention;
            }

           // Check if the file exists
       
           if (file_exists($filePath)) {
           
           
           $fileContents = file_get_contents($filePath);
           
              
              $pdfFile = new File($filePath);
       
              
            
            // Set the response content type
               $response = service('response');
               
               $response->setContentType($type);
       
               // Output the PDF content
               $response->setBody($fileContents);
       
               return $response;
           }}
           else {
            // File not found
            
            
          
                 $session= \Config\Services::session();
                 $session->setFlashdata('failed', 'File not Available'); 
                 $info =  new EducationalInfoModel();
                  $info->where('edu_deleted_on =',null);
                  $data['users'] = $info->orderBy('edu_id', 'ASC')->findAll();
                  $data['page']="educational"; 
                  helper(['url']);
                  return redirect()->to('viewnominee');
        }
      
        
        }else {
            // File not found
            
            
          
                 $session= \Config\Services::session();
                 $session->setFlashdata('failed', 'File not Available'); 
                 $info =  new EducationalInfoModel();
                 $info->where('edu_deleted_on =',null);
                 $data['users'] = $info->orderBy('edu_id', 'ASC')->findAll();
                 $data['page']="educational"; 
                 helper(['url']);
                 return redirect()->to('viewnominee');
        }
}
}
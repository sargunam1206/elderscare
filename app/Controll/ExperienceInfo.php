<?php

namespace App\Controllers;
use App\Models\EducationalInfoModel;
use App\Models\ExperienceInfoModel;
use App\Models\PersonalInfoModel;
use App\Models\CompanyWorkInfoModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class ExperienceInfo extends BaseController
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
                   
                    $count= count($this->request->getPOST('edu_exp_companyname'));
                    
                    
                    $companylist= $this->request->getPOST('edu_exp_companyname');
                    $durationlist= $this->request->getPOST('edu_exp_duration');

                    $count=$count-1;
                    $experience_info=[];
                    for($i=0;$i<=$count;$i++){
                        $experience_info['companyname']=$companylist[$i];
                        $experience_info['duration']=$durationlist[$i];
                        $experiencelist[]=$experience_info;
                    }
                        
                    $users= new ExperienceInfoModel();
                    $users->where('emp_id =',$this->request->getPOST('emp_id'));
                    $users->where('experience_deleted_on =',null);
                    $id_check_delete=$users->orderBy('experience_id', 'ASC')->find();
                    
                   
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[experience_info.emp_id]",
                 
                           ];
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }

                   
                   
                 if($this->validate($rules)){
                        
                        $users= new ExperienceInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                                'experience_list' =>json_encode($experiencelist),
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'experience_created_on' =>$date,
                                'experience_updated_on' =>$date,
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        

                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="educational"; 
                        return view("experienceinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Already Registered'); 
                        

                      $info= new PersonalInfoModel();
                      $info->where('emp_deleted_on =',null);
                      $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                      $data['page']="experience"; 
                      return view("experienceinfo/index",$data);
                }
                        
                   }
                   
                
         
          
            $data['page']="experience"; 
            return view('experienceinfo/index',$data);
            
            
            
            }
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $users = new ExperienceInfoModel();
                $session=session();
                
                
                  if($session->get('role')==1){
                        $users->where('experience_deleted_on =',null); 
                        $data['users'] = $users->orderBy('experience_id', 'ASC')->findAll();
                  }elseif($session->get('role')==2){
                      $department=$session->get('department');
                      
                      $company = new CompanyWorkInfoModel();
                      $company->where('companywork_department =',$department);
                      $company->where('companywork_deleted_on =',null);
                      $department_employee = $company->orderBy('emp_id', 'ASC')->findAll();
                     foreach($department_employee as $singledata){
                       
                         $users->where('emp_id =',$singledata['emp_id']);
                         $data['users'][] = $users->where('emp_id =',$singledata['emp_id'])->first();
                       
                     }
                    
                      
                  }
                  elseif($session->get('role')==3){
                      
                     $id=$session->get('emp_id');
                    
                     $data['users'][] =$users->where('emp_id',$id)->first();
                     
                  }
                
                
               
                
                
                
                
                
                $data['page']="experience"; 
                return view('experienceinfo/view',$data);
            }
            
              public function list($id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $base=base64_decode(base64_decode(base64_decode($id)));
                $users = new ExperienceInfoModel();
                $data=$users->where('experience_id',$base)->first();
                //echo json_encode($data);
               /* $data['company_name']=$data['companyname'];
                $data['duration']=$data['duration'];*/
               $data= json_decode($data['experience_list']);
               echo json_encode($data); 
               
                
            }
            
            
            
            
            
            
            
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users = new ExperienceInfoModel();
                $data['user'] =$users->where('experience_id',$base)->first();
                
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="educational"; 
                return view("experienceinfo/edit",$data);

            }

            public function update()
            {
               
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new ExperienceInfoModel();
                $id = $this->request->getVar('experience_id');
             
                $count= count($this->request->getPOST('edu_exp_companyname'));
                    
                    
                    $companylist= $this->request->getPOST('edu_exp_companyname');
                    $durationlist= $this->request->getPOST('edu_exp_duration');

                    $count=$count-1;
                    $experience_info=[];
                    for($i=0;$i<=$count;$i++){
                        $experience_info['companyname']=$companylist[$i];
                        $experience_info['duration']=$durationlist[$i];
                        $experiencelist[]=$experience_info;
                    }
             
             
             
             
             
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
                
                
                
                    $data=[
                                'experience_list' =>json_encode($experiencelist),
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                
                                'experience_updated_on' =>$date,
                        ];



                    $message=$users->where('experience_id',$id)->update($id,$data);

                    if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                     }
                    $users->where('experience_deleted_on =',null); 
                    $data['users']=$users->orderBy('experience_id', 'ASC')->findAll();
                    $data['page']="experience"; 
                    helper(['url']);
                    return redirect()->to('viewexperience'); 


               
           
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
                            
                          
                            'experience_deleted_on' => $date,
                        ];
                
                $users = new ExperienceInfoModel();
                $message=$users->where('experience_id', $base)->update($base,$data);
                if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Deleted successfully'); 
                }
                $users->where('experience_deleted_on =',null);
                $data['users']=$users->orderBy('experience_id', 'ASC')->findAll();
                $data['page']="experience"; 
                helper(['url']);
                return redirect()->to('viewexperience');


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
                  return redirect()->to('viewexperience');
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
                  return redirect()->to('viewexperience');
        }
}
}
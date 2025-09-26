<?php

namespace App\Controllers;
use App\Models\EducationalInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\PersonalInfoModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class EducationalInfo extends BaseController
{

            public function index()
            {
                helper(['url']);
                

                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
              
         
            if($this->request->getPOST('edu_qualification')!=''){ 
                $rules = [
                    'edu_qualification' => 'required',
                    /*'edu_year_of_completion' => 'required',
                    'edu_final_degree_cert_filename' => 'required',
                    'edu_resume_filename' => 'required',
                    'edu_exp_companyname' => 'required',
                    'edu_exp_duration' => 'required',
                    'edu_total_experience' => 'required',
                    'edu_last_working_day_date' => 'required',
                    'edu_expert_in' => 'required',
                    'emp_id' => 'required',*/
                ];
                
                 $users= new EducationalInfoModel();
                        
                        $users->where('emp_id =',$this->request->getPOST('emp_id'));
                        $users->where('edu_deleted_on =',null);
                        $id_check_delete=$users->orderBy('emp_id', 'ASC')->find();
                    
                   
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[educational_info.emp_id]",
                 
                           ];
                           
                           
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }
                        
                  
                if($this->validate($rules)){
                        
                       $users= new EducationalInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        if($this->request->getFile('edu_final_degree_cert_filename')!=''){
                           $img_degree = $this->request->getFile('edu_final_degree_cert_filename');
                            $filepath_degree = 'public/'. $img_degree->getName();
                            $img_degree->move(ROOTPATH . 'public');
                            $data['file_degree']= $filepath_degree;
                       }
                       else{
                             $data['file_degree']=null;
                        }
                        
                         if($this->request->getFile('edu_resume_filename')!=''){
                           $img_resume = $this->request->getFile('edu_resume_filename');
                            $filepath_resume = 'public/'. $img_resume->getName();
                            $img_resume->move(ROOTPATH . 'public');
                            $data['file_resume']= $filepath_resume;
                       }
                       else{
                             $data['file_resume']=null;
                        }
                        
                        $data=[
                                'edu_qualification' => $this->request->getPOST('edu_qualification'),
                                'edu_year_of_completion' =>$this->request->getPOST('edu_year_of_completion'),
                                'edu_final_degree_cert_filename' =>$data['file_degree'],
                                'edu_resume_filename' =>$data['file_resume'],
                               /* 'edu_exp_companyname' =>$this->request->getPOST('edu_exp_companyname'),
                                'edu_exp_duration' =>$this->request->getPOST('edu_exp_duration'),
                                'edu_total_experience' =>$this->request->getPOST('edu_total_experience'),
                                'edu_last_working_day_date' =>$this->request->getPOST('edu_last_working_day_date'),
                                'edu_expert_in' =>$this->request->getPOST('edu_expert_in'),*/
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'edu_created_on' =>$this->request->getPOST('edu_created_on'),
                                'edu_updated_on' =>$this->request->getPOST('edu_updated_on'),
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        

                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="educational"; 
                        return view("educationalinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                      $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Not Registered or ID already Registered'); 

                      $info= new PersonalInfoModel();
                      $info->where('emp_deleted_on =',null);
                      $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                      $data['page']="educational"; 
                      return view("educationalinfo/index",$data);
                }
                 
            }
            else{
                $data['page']="educational"; 
                 return view('educationalinfo/index',$data);
            }
            }
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                
                
                
                
                $users = new EducationalInfoModel();
                $session=session();
                
                
                
                 if($session->get('role')==1){
                       
                     $users->where('edu_deleted_on =',null); 
                     $data['users'] = $users->orderBy('edu_id', 'ASC')->findAll();
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
                
                $data['page']="educational"; 
                
              return view('educationalinfo/view',$data);
                
                
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new EducationalInfoModel();
                $data['user']=$users->where('edu_id',$base)->first();
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="educational"; 
                return view("educationalinfo/edit",$data);

            }

            public function update()
            {
               
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new EducationalInfoModel();
                $id = $this->request->getVar('edu_id');
                
                if($this->request->getFile('edu_final_degree_cert_filename')!=''){
                   $img_degree = $this->request->getFile('edu_final_degree_cert_filename');
                   $filepath_degree = 'public/'. $img_degree->getName();
                   $img_degree->move(ROOTPATH . 'public');
                   $data['file_degree']= $filepath_degree;
                }
                if($this->request->getFile('edu_resume_filename')!=''){
                    $img_resume = $this->request->getFile('edu_resume_filename');
                    $filepath_resume = 'public/'. $img_resume->getName();
                    $img_resume->move(ROOTPATH . 'public');
                    $data['file_resume']= $filepath_resume;
                }
                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");

                 $data=[
                                'edu_qualification' => $this->request->getPOST('edu_qualification'),
                                'edu_year_of_completion' =>$this->request->getPOST('edu_year_of_completion'),
                               /* 'edu_exp_companyname' =>$this->request->getPOST('edu_exp_companyname'),
                                'edu_exp_duration' =>$this->request->getPOST('edu_exp_duration'),
                                'edu_total_experience' =>$this->request->getPOST('edu_total_experience'),
                                'edu_last_working_day_date' =>$this->request->getPOST('edu_last_working_day_date'),
                                'edu_expert_in' =>$this->request->getPOST('edu_expert_in'),*/
                                'emp_id' =>$this->request->getPOST('emp_id'),
                               
                                'edu_updated_on' =>$this->request->getPOST('edu_updated_on'),
                    ];
                        
                      if(isset($filepath_degree)){
                        if($filepath_degree!=''){
                            
                            $data['edu_final_degree_cert_filename'] =$filepath_degree;
                            
                        }
                      }
                        if(isset($filepath_resume)){
                        if($filepath_resume!=''){
                            
                            $data['edu_resume_filename'] =$filepath_resume;
                            
                        }
                      }  
                      
                    $message=$users->where('edu_id',$id)->update($id,$data);

                    if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                     }
                     $users->where('edu_deleted_on =',null); 
                    $data['users']=$users->orderBy('edu_id', 'ASC')->findAll();
                    $data['page']="educational"; 
                    helper(['url']);
                    return redirect()->to('vieweducationaldetails');

               
           
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
                            
                          
                            'edu_deleted_on' => $date,
                        ];
                
                $users= new EducationalInfoModel();
                $message=$users->where('edu_id', $base)->update($base,$data);
                if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Deleted successfully'); 
                }
                $users->where('edu_deleted_on =',null);
                $data['users']=$users->orderBy('edu_id', 'ASC')->findAll();
                $data['page']="educational"; 
                helper(['url']);
                return redirect()->to('vieweducationaldetails');


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
                 return redirect()->to('vieweducationaldetails');
        }
      
        
        }else {
            // File not found
            
            
          
                 $session= \Config\Services::session();
                 $session->setFlashdata('failed', 'File not Available'); 
                 $info =  new EducationalInfoModel();
                 $info->where('edu_deleted_on =',null);
                 $data['users'] = $info->orderBy('edu_id', 'ASC')->findAll();
                 $data['page']="educational"; 
                 return view('educationalinfo/view',$data);
                 helper(['url']);
                 return redirect()->to('vieweducationaldetails');
        }
}
}
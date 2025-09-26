<?php

namespace App\Controllers;
use App\Models\EducationalInfoModel;
use App\Models\ExperienceInfoModel;
use App\Models\PersonalInfoModel;
use App\Models\ProjectInfoModel;
use App\Models\NatureInfoModel;
use App\Models\CompanyWorkInfoModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class NatureInfo extends BaseController
{

            public function index()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
                

                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
               
                if($this->request->getPOST('submit')!=''){ 
                   
                    
                      $rules = [
                    'emp_id' => 'required',
                    
                ];
                    
                   
                    

                   
                   
                 if($this->validate($rules)){
                        
                        $users= new NatureInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            
                                'nature_of_project_emp_role' => $this->request->getPOST('nature_of_project_emp_role'),
                                'project_work_type' => $this->request->getPOST('project_work_type'),
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'project_id' =>$this->request->getPOST('project_id'),
                                
                                'nature_of_project_created_on' =>$date,
                                'nature_of_project_updated_on' =>$date,
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        
                            
                         $info= new ProjectInfoModel();
                         $info->where('project_deleted_on =',null);
                         $data['project_id'] = $info->orderBy('project_id', 'ASC')->findAll();
         
                         $info= new PersonalInfoModel();
                         $info->where('emp_deleted_on =',null);
                         $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        return view("natureofprojectinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     

                      $info= new PersonalInfoModel();
                      $info->where('emp_deleted_on =',null);
                      $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                     
                         
                      $info= new ProjectInfoModel();
                      $info->where('project_deleted_on =',null);
                      $data['project_id'] = $info->orderBy('project_id', 'ASC')->findAll();
         
                      return view("natureofprojectinfo/index",$data);
                      
                      
                }
                        
                   }
                  
                $info= new ProjectInfoModel();
                $info->where('project_deleted_on =',null);
                $data['project_id'] = $info->orderBy('project_id', 'ASC')->findAll();
         
          
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
               return view('natureofprojectinfo/index',$data);
            
            
            
            }
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $users = new NatureInfoModel();
                $session=session();
                
                
                  if($session->get('role')==1){
                        $users->where('nature_of_project_deleted_on =',null); 
                        $data['users'] = $users->orderBy('nature_of_project_id', 'ASC')->findAll();
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
                
                $total_emp_id=$data['users'];
                
               foreach($total_emp_id as $all_id){
                 $users = new PersonalInfoModel();
                $data1=$users->where('emp_company_ref_id',$all_id['emp_id'])->first();
                
                $company = new CompanyWorkInfoModel();
                $companydata=$company->where('emp_id',$all_id['emp_id'])->first();
                
                $project = new ProjectInfoModel();
                $projectdata=$project->where('project_name',$all_id['project_id'])->first();
                
                $data['project_name'][]= $projectdata['project_name'];
                $data['project_type'][]= $projectdata['project_type'];
                
                
               
                $data['name'][]= $data1['emp_name'];
                $data['dept'][]= $companydata['companywork_department'];
                
                
                
                
               }
                
                
               
                return view('natureofprojectinfo/view',$data);
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
               
                 //echo json_encode($array_convert[0]['companyname']);
            }
            
             public function projectinfo($id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
              
                $users = new ProjectInfoModel();
                $data=$users->where('project_name',$id)->first();
                
               
               echo json_encode($data); 
               
                 
            }
            
              public function personaldata($id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
              
                $users = new PersonalInfoModel();
                $data=$users->where('emp_company_ref_id',$id)->first();
                
                $company = new CompanyWorkInfoModel();
                $companydata=$company->where('emp_id',$id)->first();
                
                
                $data1['name']= $data['emp_name'];
                $data1['dept']= $companydata['companywork_department'];
                $data1['desg']= $companydata['companywork_desg'];
                
                 $edu= new EducationalInfoModel();
                 $data1['edu']=$edu->where('emp_id =',$id)->first();
                 
                 date_default_timezone_set("Asia/Kolkata");
                 $current_yeear=date("Y");
                 $joined_year =date("Y",strtotime($companydata['companywork_dateof_join']));
                 

                 $diff =$current_yeear-$joined_year  ;

                 

                 
                $data1['qualification']= $data1['edu']['edu_qualification'];
                $data1['exp']= $diff;
                
              
               echo json_encode($data1); 
          
            }
            
            
            
            
            
            
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users = new NatureInfoModel();
                $data['user'] =$users->where('nature_of_project_id',$base)->first();
                
                
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                
                
                $info= new ProjectInfoModel();
                $info->where('project_deleted_on =',null);
                $data['project_id'] = $info->orderBy('project_id', 'ASC')->findAll();
                
                
                 $users = new PersonalInfoModel();
                $data1=$users->where('emp_company_ref_id',$data['user']['emp_id'])->first();
                
                $company = new CompanyWorkInfoModel();
                $companydata=$company->where('emp_id',$data['user']['emp_id'])->first();
                
                $project = new ProjectInfoModel();
                $projectdata=$project->where('project_name',$data['user']['project_id'])->first();
                
                $data['project_name']= $projectdata['project_name'];
                $data['project_type']= $projectdata['project_type'];
                
                
               
                $data['name']= $data1['emp_name'];
                $data['dept']= $companydata['companywork_department'];
                
                
              
                return view("natureofprojectinfo/edit",$data);

            }

            public function update()
            {
               
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new NatureInfoModel();
                $id = $this->request->getVar('nature_of_project_id');
             
             
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
                
                
                
                
                    $data=[
                                
                                'nature_of_project_emp_role' => $this->request->getPOST('nature_of_project_emp_role'),
                                'project_work_type' => $this->request->getPOST('project_work_type'),
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'project_id' =>$this->request->getPOST('project_id'),
                                
                               
                                'nature_of_project_updated_on' =>$date,
                        ];



                    $message=$users->where('nature_of_project_id',$id)->update($id,$data);

                    if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                     }
                   
                    helper(['url']);
                  return redirect()->to('viewnatureproject'); 


               
           
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
                            'nature_of_project_deleted_on' => $date,
                        ];
                
                $users =new NatureInfoModel();
                $message=$users->where('nature_of_project_id', $base)->update($base,$data);
                if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Deleted successfully'); 
                }
                
                 
                helper(['url']);
                return redirect()->to('viewnatureproject');


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
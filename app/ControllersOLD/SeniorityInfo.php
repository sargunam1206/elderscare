<?php

namespace App\Controllers;
use App\Models\EducationalInfoModel;
use App\Models\ExperienceInfoModel;
use App\Models\PersonalInfoModel;
use App\Models\SeniorityInfoModel;

use App\Models\CompanyWorkInfoModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class SeniorityInfo extends BaseController
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
                        
                        $users= new SeniorityInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                                'seniority_status' => $this->request->getPOST('seniority_status'),
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'seniority_created_on' =>$date,
                                'seniority_updated_on' =>$date,
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        
                        
                         $info= new PersonalInfoModel();
                         $info->where('emp_deleted_on =',null);
                         $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        return view("seniorityinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     

                      $info= new PersonalInfoModel();
                      $info->where('emp_deleted_on =',null);
                      $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                     
                      return view("seniorityinfo/index",$data);
                }
                        
                   }
                   
                
         
          
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
               return view('seniorityinfo/index',$data);
            
            
            
            }
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $users = new SeniorityInfoModel();
                $session=session();
                
                
                  if($session->get('role')==1){
                        $users->where('seniority_deleted_on =',null); 
                        $data['users'] = $users->orderBy('seniority_info_id', 'ASC')->findAll();
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
                
                
                $data['name'][]= $data1['emp_name'];
                $data['dept'][]= $companydata['companywork_department'];
                $data['desg'][]= $companydata['companywork_desg'];
                
                 $edu= new EducationalInfoModel();
                 $dataedu['edu']=$edu->where('emp_id =',$all_id['emp_id'])->first();
                 
                 date_default_timezone_set("Asia/Kolkata");
                 $current_yeear=date("Y");
                 $joined_year =date("Y",strtotime($companydata['companywork_dateof_join']));
                 

                 $diff =$current_yeear-$joined_year  ;

                 

                 
                $data['qualification'][]= $dataedu['edu']['edu_qualification'];
                $data['exp'][]= $diff;
                
                
               }
                
                
               
                return view('seniorityinfo/view',$data);
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
                $users = new SeniorityInfoModel();
                $data['user'] =$users->where('seniority_info_id',$base)->first();
                
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                
                
                $sen_emp_id=$data['user']['emp_id'];
                
                $personal= new PersonalInfoModel();
                $personal=$personal->where('emp_company_ref_id',$sen_emp_id)->first();
                
                $company = new CompanyWorkInfoModel();
                $companydata=$company->where('emp_id',$sen_emp_id)->first();
                
                
                $edu= new EducationalInfoModel();
                
                $data1['edu']=$edu->where('emp_id =',$sen_emp_id)->first();
                
             
                 date_default_timezone_set("Asia/Kolkata");
                 $current_yeear=date("Y");
                 $joined_year =date("Y",strtotime($companydata['companywork_dateof_join']));
                 

                 $diff =$current_yeear-$joined_year;

                 

                 
               $data['qualification']=''; //$data1['edu']['edu_qualification'];
                $data['exp']= $diff;
                
                
                $data['name']= $personal['emp_name'];
                $data['dept']= $companydata['companywork_department'];
                $data['desg']= $companydata['companywork_desg'];
                
                
                
              
                return view("seniorityinfo/edit",$data);

            }

            public function update()
            {
               
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new SeniorityInfoModel();
                $id = $this->request->getVar('seniority_info_id');
             
             
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
                
                
                
                    $data=[
                                'seniority_status' =>$this->request->getPOST('seniority_status'),
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                
                                'seniority_updated_on' =>$date,
                        ];



                    $message=$users->where('seniority_info_id',$id)->update($id,$data);

                    if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                     }
                   
                    helper(['url']);
                    return redirect()->to('viewseniority'); 


               
           
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
                            'seniority_deleted_on' => $date,
                        ];
                
                $users =new SeniorityInfoModel();
                $message=$users->where('seniority_info_id', $base)->update($base,$data);
                if(isset($message)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Deleted successfully'); 
                }
                
                 
                helper(['url']);
                return redirect()->to('viewseniority');


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
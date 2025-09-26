<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\RecruitmentInfoModel;
use App\Models\PersonalInfoModel;
use App\Models\JobInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DepartmentInfoModel;


class RecruitmentInfo extends BaseController
{

            public function index($id=null)
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
               
               
                if($this->request->getPOST('submit')!=''){
                    $rules = [
                     'job_vacancy_id' => 'required',
                     
                    'name' => 'required',
                   
                    /* 'skills' => 'required',
                    'resume' => 'required',
                    'dob' => 'required',
                   
                    'emailid' => '',
                    'mobileno' => '',
                    'address' => '',
                    'qualification' => '',
                    'gender' => '',
                    'experiencelist '=> '',
                
                  
                    ''*/
                    
                ];
                  
                 $job_vacancy_id=$this->request->getPOST('job_vacancy_id');
                 
                 $imageExtention = pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION);
                 if($imageExtention!='pdf' or  $imageExtention==''){
                    $session= \Config\Services::session();
                    $session->setFlashdata('failed', 'pdf file format is required');  
                     $data['job_vacancy_id'] =$job_vacancy_id;
                     return view("recruitmentinfo/index_new",$data);
                 }else{
                  
                
                if($this->validate($rules)){
                        
                        $users= new RecruitmentInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        if($this->request->getFile('resume')!=''){
                           $img_degree = $this->request->getFile('resume');
                            $filepath_degree = 'public/'. $img_degree->getName();
                            $img_degree->move(ROOTPATH . 'public');
                            $data['resume']= $filepath_degree;
                       }
                       else{
                             $data['resume']=null;
                        }
                        
                        
                        
                        
                        
                        $count= count($this->request->getPOST('edu_exp_companyname'));
                    
                    
                        $companylist= $this->request->getPOST('edu_exp_companyname');
                        $fromlist= $this->request->getPOST('edu_exp_from');
                        $tolist= $this->request->getPOST('edu_exp_to');
                        $durationlist= $this->request->getPOST('edu_exp_duration');
                        $positionlist= $this->request->getPOST('position');

                        $count=$count-1;
                        $experience_info=[];
                        for($i=0;$i<=$count;$i++){
                            $experience_info['companyname']=$companylist[$i];
                            $experience_info['edu_exp_from']=$fromlist[$i];
                            $experience_info['edu_exp_to']=$tolist[$i];
                            $experience_info['duration']=$durationlist[$i];
                            $experience_info['position']=$positionlist[$i];
                            $experiencelist[]=$experience_info;
                        }
                        
                        
                        
                       
                       
                        $data=[
                            
                            'name' =>$this->request->getPOST('name'),
                            'dob' =>$this->request->getPOST('dob'),
                            'emailid' => $this->request->getPOST('emailid'),
                            'mobileno' => $this->request->getPOST('mobileno'),
                            'address' => $this->request->getPOST('address'),
                            
                            'qualification' =>$this->request->getPOST('qualification'),
                            
                            'gender' =>$this->request->getPOST('gender'),
                            
                            'experiencelist'=>json_encode($experiencelist),
                            'resume'=>$data['resume'],
                            'job_vacancy_id'=>$this->request->getPOST('job_vacancy_id'),
                            'skills' =>$this->request->getPOST('skills'),
                            'created_on'=>$date,
                            'updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        $data['job_vacancy_id'] =base64_decode(base64_decode(base64_decode($id)));
                        helper(['url']);
                        return redirect()->to('vacancy'); 


                }else{
                     $data['validation']= $this->validator->getErrors();
                     
                        $data['job_vacancy_id'] =$job_vacancy_id;
                        return view("recruitmentinfo/index_new",$data);
                }}
                 
                }else{
                    $data['job_vacancy_id'] =base64_decode(base64_decode(base64_decode($id)));
                     return view("recruitmentinfo/index_new",$data);
                    
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new RecruitmentInfoModel();
                  $info->where('company_resign_deleted_on =',null);
                  $data['users'] = $info->orderBy('company_resign_id', 'ASC')->findAll();
                  $data['page']="resign"; 
                  return view('companyresigninfo/view',$data);
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new RecruitmentInfoModel();
                $data['user']=$users->where('company_resign_id',$base)->first();
                 $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
               // return view("companyresigninfo/index",$data);
                $data['page']="resign"; 
                return view("companyresigninfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new RecruitmentInfoModel();
                $id = $this->request->getVar('company_resign_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     
                      

                        $data=[
                        'company_resign_letter_subon' =>$this->request->getPOST('company_resign_letter_subon'),
                            'company_resign_noperiod_com' =>$this->request->getPOST('company_resign_noperiod_com'),
                            'company_resign_nodue_cert' => $this->request->getPOST('company_resign_nodue_cert'),
                            'company_resign_final_sett_bank' => $this->request->getPOST('company_resign_final_sett_bank'),
                            'company_resign_final_sett_amount' => $this->request->getPOST('company_resign_final_sett_amount'),
                           
                            'company_resign_dateof_leaving' =>$this->request->getPOST('company_resign_dateof_leaving'),
                            'emp_id' =>$this->request->getPOST('emp_id'),
                            'company_resign_updated_on'=>$date
                            
                        ];
                         
                   
                    
                    $datas=$users->where('company_resign_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('company_resign_deleted_on =',null);
                    $data['users']=$users->orderBy('company_resign_id', 'ASC')->findAll();
                    $data['page']="resign";
                    return view("companyresigninfo/view",$data);

               
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

                            'company_resign_deleted_on' => $date,
                        ];
                
                $users= new RecruitmentInfoModel();
                $users->where('company_resign_id', $base)->update($base,$data);
                $users->where('company_resign_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('company_resign_id', 'ASC')->findAll();
                $data['page']="resign";
                return view("companyresigninfo/view",$data);


            }
           
        public function candidates()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
                
                 $users= new RecruitmentInfoModel();
                 $users->where('deleted_on =',null);
                 
                
                  $job=new JobInfoModel();
                
                if($this->request->getPOST('submit')!=''){
                    
                   $department=$this->request->getPOST('department');
                   $designation=$this->request->getPOST('designation');
                   $candidate_sts=$this->request->getPOST('candidate_sts');
                   $interview_sts=$this->request->getPOST('interview_sts');
                   $joined_sts=$this->request->getPOST('joined_sts'); 
                   
                    
                   if($department!='All Department'){
                       
                    $job= new JobInfoModel();
                    if($department!=''){
                     $job->where('job_vacancy_dept =',$department);   
                    }
                    if($designation!=''){
                     $job->where('job_vacancy_role=',$designation);
                    }
                    
                    
                    $job_data =  $job->orderBy('job_vacancy_id', 'ASC')->findAll();
                    
                    if(isset($job_data[0])){
                         foreach($job_data as $job_id){
                             
                            if($candidate_sts!=''){
                              $users->where('candidate_sts =', $candidate_sts);
                            } 
                           if($interview_sts!=''){
                             $users->where('interview_sts =', $interview_sts);
                            } 
                            if($joined_sts!=''){
                             $users->where('joined_sts =', $joined_sts);
                            } 
                            
                            
                            
                             $users->where('job_vacancy_id =',$job_id['job_vacancy_id']);
                            $job_single = $users->orderBy('id', 'ASC')->findAll();
                            if(isset($job_single[0])){
                               
                                foreach($job_single as $list){
                                 $list1['name']= $list['name'];
                                 $list1['address']= $list['address'];
                                 $list1['mobileno']= $list['mobileno'];
                                 $list1['skills']= $list['skills'];
                                 $list1['candidate_sts']= $list['candidate_sts'];
                                 $list1['interview_sts']= $list['interview_sts'];
                                 $list1['joined_sts']= $list['joined_sts'];
                                 $datajob=$job->where('job_vacancy_id',$list['job_vacancy_id'])->first();
                   
                        
                                 $role=$datajob['job_vacancy_role'];
                  
                                 $list1['role']=$role;
                                 $list1['id']=$list['id'];
                                 $dat['users'][]=$list1;
                            }
                       }
                    }
                    }
                   }elseif($department=='All Department' and $designation==''){
                       if($candidate_sts!=''){
                              $users->where('candidate_sts =', $candidate_sts);
                        } 
                        if($interview_sts!=''){
                         $users->where('interview_sts =', $interview_sts);
                        } 
                        if($joined_sts!=''){
                         $users->where('joined_sts =', $joined_sts);
                        } 
                       
                       
                       $data =  $users->orderBy('id', 'ASC')->findAll();
                       
                       
                       foreach($data as $list){
                    
                       $list1['name']= $list['name'];
                       $list1['address']= $list['address'];
                       $list1['mobileno']= $list['mobileno'];
                       $list1['skills']= $list['skills'];
                       $list1['candidate_sts']= $list['candidate_sts'];
                       $list1['interview_sts']= $list['interview_sts'];
                       $list1['joined_sts']= $list['joined_sts'];
                       $datajob=$job->where('job_vacancy_id',$list['job_vacancy_id'])->first();
                   
                        
                       $role=$datajob['job_vacancy_role'];
                  
                       $list1['role']=$role;
                       $list1['id']=$list['id'];
                       $dat['users'][]=$list1;
                       
                       }
                   }
                   
                }
                    
                else{
                    $data =  $users->orderBy('id', 'ASC')->findAll();
                    foreach($data as $list){
                    
                    $list1['name']= $list['name'];
                    $list1['address']= $list['address'];
                    $list1['mobileno']= $list['mobileno'];
                    $list1['skills']= $list['skills'];
                    $list1['candidate_sts']= $list['candidate_sts'];
                    $list1['interview_sts']= $list['interview_sts'];
                    $list1['joined_sts']= $list['joined_sts'];
                    $datajob=$job->where('job_vacancy_id',$list['job_vacancy_id'])->first();
                   
                        
                    $role=$datajob['job_vacancy_role'];
                  
                    $list1['role']=$role;
                    $list1['id']=$list['id'];
                     $dat['users'][]=$list1;
                }
              
                }
                //there is no data we can use the empty data 
                  if(!isset($dat)){
                    $list1['name']= '';
                    $list1['address']= '';
                    $list1['mobileno']='';
                    $list1['skills']='';
                    $list1['candidate_sts']='';
                    $list1['interview_sts']='';
                    $list1['joined_sts']='';
                    $role='';
                    $list1['role']='';
                    $list1['id']='';
                    $dat['users'][]=$list1;
                }
                
                //collection the department info
                $info = new DepartmentInfoModel();
                $info->where('department_deleted_on =',null);
                $dat['department'] = $info->orderBy('department_id', 'ASC')->findAll();
                
              
                
                //echo json_encode($dat);
               return view("recruitmentinfo/contacts",$dat);
                
            }    
            
             public function designation($dept=null)
            {
                
                
                
                  
                  $users = new DepartmentInfoModel();
                  $data=$users->where('department_name',$dept)->first();
                  $designation_list=json_decode($data['department_roletype']);
                  
                  //echo json_encode($designation_list);
                  foreach($designation_list as $desg){
                     
                      $desgnation['designation']=$desg;
                      $alldata['designation'][]=$desgnation;
                  }
              
                  
                 echo json_encode($alldata['designation']); 
                
                
            }
            
        public function profile($user_id=null)
            {
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                $users= new RecruitmentInfoModel();
                 $users->where('deleted_on =',null);
                 $data = $users->where('id',$base)->first();
                  
                  
               // foreach($data as $list){
                    $job=new JobInfoModel();
                    $list1['name']= $data['name'];
                    $list1['address']= $data['address'];
                    $list1['mobileno']= $data['mobileno'];
                    $list1['skills']= $data['skills'];
                    $list1['dob']= $data['dob'];
                    $list1['emailid']= $data['emailid'];
                    $list1['gender']= $data['gender'];
                    $list1['qualification']= $data['qualification'];
                    $list1['experiencelist']= $data['experiencelist'];
                    $list1['candidate_sts']= $data['candidate_sts'];
                    $list1['interview_sts']= $data['interview_sts'];
                    $list1['joined_sts']= $data['joined_sts'];
                    $list1['remarks']= $data['remarks'];
                   $datajob=$job->where('job_vacancy_id',$data['job_vacancy_id'])->first();
                   
                        
                   $role=$datajob['job_vacancy_role'];
                  
                    $list1['role']=$role;
                    $list1['id']=$data['id'];
                    $list1['resume']=$data['resume'];
                     $dat['users']=$list1;
                     
               // }
                
               
                return view("recruitmentinfo/profile",$dat);
            }
            
             public function updateprofile()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new RecruitmentInfoModel();
                $id = $this->request->getVar('id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     
                      

                        $data=[
                        'candidate_sts' =>$this->request->getPOST('candidate_sts'),
                        'interview_sts' =>$this->request->getPOST('interview_sts'),
                        'joined_sts' =>$this->request->getPOST('joined_sts'),
                        'remarks' =>$this->request->getPOST('remarks'),    
                            
                        ];
                         
                   
                    
                    $datas=$users->where('id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                   
                    helper(['url']);
                    return redirect()->to('candidates'); 

               
            }

             public function reportsdefault()
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
               
                //PersonalInfo
                $mpdf = new \Mpdf\Mpdf();
               /* $project= new ProjectInfoModel();
                $department= new DepartmentInfoModel();
                
                  $users= new ManpowerInfoModel();
                 $request_id=$this->request->getPOST('manpower_request_id');
                 
                 
                  
               $users->where('manpower_request_id =',$request_id);
                 
                 $data['request'][] = $users->where('manpower_request_deleted_on =',null)->first();
                 $power=$data['request'];
                 $data['project_name']= $project->where('project_id =',$power[0]['project_id'])->first();
                 $data['department_name'] = $department->where('department_id =',$power[0]['manpower_request_dept'])->first();
               
                */
                  $users= new RecruitmentInfoModel();
                 $users->where('deleted_on =',null);
                 
                
                  $job=new JobInfoModel();
                
                if($this->request->getPOST('pdf')!=''){
                    
                   $department=$this->request->getPOST('department');
                   $designation=$this->request->getPOST('designation');
                   $candidate_sts=$this->request->getPOST('candidate_sts');
                   $interview_sts=$this->request->getPOST('interview_sts');
                   $joined_sts=$this->request->getPOST('joined_sts'); 
                   
                    
                   if($department!='All Department'){
                       
                    $job= new JobInfoModel();
                    if($department!=''){
                     $job->where('job_vacancy_dept =',$department);   
                    }
                    if($designation!=''){
                     $job->where('job_vacancy_role=',$designation);
                    }
                    
                    
                    $job_data =  $job->orderBy('job_vacancy_id', 'ASC')->findAll();
                    
                    if(isset($job_data[0])){
                         foreach($job_data as $job_id){
                             
                            if($candidate_sts!=''){
                              $users->where('candidate_sts =', $candidate_sts);
                            } 
                           if($interview_sts!=''){
                             $users->where('interview_sts =', $interview_sts);
                            } 
                            if($joined_sts!=''){
                             $users->where('joined_sts =', $joined_sts);
                            } 
                            
                            
                            
                             $users->where('job_vacancy_id =',$job_id['job_vacancy_id']);
                            $job_single = $users->orderBy('id', 'ASC')->findAll();
                            if(isset($job_single[0])){
                               
                                foreach($job_single as $list){
                                 $list1['name']= $list['name'];
                                 $list1['address']= $list['address'];
                                 $list1['mobileno']= $list['mobileno'];
                                 $list1['skills']= $list['skills'];
                                 $list1['candidate_sts']= $list['candidate_sts'];
                                 $list1['interview_sts']= $list['interview_sts'];
                                 $list1['joined_sts']= $list['joined_sts'];
                                 $list1['qualification']= $list['qualification'];
                                 $datajob=$job->where('job_vacancy_id',$list['job_vacancy_id'])->first();
                   
                        
                                 $role=$datajob['job_vacancy_role'];
                  
                                 $list1['role']=$role;
                                 $list1['id']=$list['id'];
                                 $dat['users'][]=$list1;
                            }
                       }
                    }
                    }
                   }elseif($department=='All Department' and $designation==''){
                       if($candidate_sts!=''){
                              $users->where('candidate_sts =', $candidate_sts);
                        } 
                        if($interview_sts!=''){
                         $users->where('interview_sts =', $interview_sts);
                        } 
                        if($joined_sts!=''){
                         $users->where('joined_sts =', $joined_sts);
                        } 
                       
                       
                       $data =  $users->orderBy('id', 'ASC')->findAll();
                       
                       
                       foreach($data as $list){
                    
                       $list1['name']= $list['name'];
                       $list1['address']= $list['address'];
                       $list1['mobileno']= $list['mobileno'];
                       $list1['skills']= $list['skills'];
                       $list1['candidate_sts']= $list['candidate_sts'];
                       $list1['interview_sts']= $list['interview_sts'];
                       $list1['joined_sts']= $list['joined_sts'];
                       $list1['qualification']= $list['qualification'];
                       $datajob=$job->where('job_vacancy_id',$list['job_vacancy_id'])->first();
                   
                        
                       $role=$datajob['job_vacancy_role'];
                  
                       $list1['role']=$role;
                       $list1['id']=$list['id'];
                       $dat['users'][]=$list1;
                       
                       }
                   }
                   
                }
                    
                else{
                    $data =  $users->orderBy('id', 'ASC')->findAll();
                    foreach($data as $list){
                    
                    $list1['name']= $list['name'];
                    $list1['address']= $list['address'];
                    $list1['mobileno']= $list['mobileno'];
                    $list1['skills']= $list['skills'];
                    $list1['candidate_sts']= $list['candidate_sts'];
                    $list1['interview_sts']= $list['interview_sts'];
                    $list1['joined_sts']= $list['joined_sts'];
                    $list1['qualification']= $list['qualification'];
                    $datajob=$job->where('job_vacancy_id',$list['job_vacancy_id'])->first();
                   
                        
                    $role=$datajob['job_vacancy_role'];
                  
                    $list1['role']=$role;
                    $list1['id']=$list['id'];
                     $dat['users'][]=$list1;
                }
              
                }
                //there is no data we can use the empty data 
                  if(!isset($dat)){
                    $list1['name']= '';
                    $list1['address']= '';
                    $list1['mobileno']='';
                    $list1['skills']='';
                    $list1['candidate_sts']='';
                    $list1['interview_sts']='';
                    $list1['joined_sts']='';
                    $role='';
                    $list1['role']='';
                    $list1['id']='';
                    $list1['qualification']= '';
                    $dat['users'][]=$list1;
                }
                
                //collection the department info
                $info = new DepartmentInfoModel();
                $info->where('department_deleted_on =',null);
                $dat['department'] = $info->orderBy('department_id', 'ASC')->findAll();
                
              
                
              
               
               $html = view('recruitmentinfo/reports',$dat);
                
               /////////////////
                $mpdf->WriteHTML($html);

                $pdfContent = $mpdf->Output('', 'S');

                $response = \Config\Services::response();
                $response->setHeader('Content-Type', 'application/pdf');
                $response->setHeader('Content-Disposition', 'inline; filename="employee.pdf"');

                return $response->setBody($pdfContent);
            }
            
           
      

}
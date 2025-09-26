<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\ManpowerInfoModel;
use App\Models\ProjectInfoModel;
use App\Models\CompanyWorkInfoModel;

use App\Models\PersonalInfoModel;
use App\Models\DepartmentInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class ManpowerInfo extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
               
                $session=session();
                $emp_id=$session->get('emp_id');
                
                
                $info= new ProjectInfoModel();
                
                
                $dept= new DepartmentInfoModel();
               
                
                
               
                if($this->request->getPOST('project_id')!=''){
                    $rules = [
                    'project_id' => 'required',
                    
                    
                ];
                $users= new ManpowerInfoModel();
  

                if($this->validate($rules)){
                        
                        $users= new ManpowerInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");

                        $data=[
                            'project_id' =>$this->request->getPOST('project_id'),
                            'manpower_request_dept' =>$this->request->getPOST('manpower_request_dept'),
                            'manpower_request_job_title' =>$this->request->getPOST('manpower_request_job_title'),
                            'manpower_request_job_type' =>$this->request->getPOST('manpower_request_job_type'),
                            'manpower_request_job_hiretype' =>$this->request->getPOST('manpower_request_job_hiretype'),
                            'manpower_request_justify' =>$this->request->getPOST('manpower_request_justify'),
                            'manpower_request_major_res' =>$this->request->getPOST('manpower_request_major_res'),
                            'manpower_request_qualification' =>$this->request->getPOST('manpower_request_qualification'),
                            'manpower_request_experience' =>$this->request->getPOST('manpower_request_experience'),
                            'manpower_request_special_apilites' =>$this->request->getPOST('manpower_request_special_apilites'),
                            'manpower_request_personal_quality' =>$this->request->getPOST('manpower_request_personal_quality'),
                            
                            
                            'emp_id' => $emp_id,
                            'manpower_request_created_on'=>$date,
                            'manpower_request_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        $info->where('project_deleted_on =',null);
                        $data['project'] = $info->orderBy('project_id', 'ASC')->findAll();
                        $dept->where('department_deleted_on =',null);
                        $data['department'] = $dept->orderBy('department_id', 'ASC')->findAll();
                        
                        return view("manpowerinfo/index",$data);


                }else{
                       $data['validation']= $this->validator->getErrors();
                     
                     
                        $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Not Registered'); 
                     
                        $info->where('project_deleted_on =',null);
                        $data['project'] = $info->orderBy('project_id', 'ASC')->findAll();
                        $dept->where('department_deleted_on =',null);
                        $data['department'] = $dept->orderBy('department_id', 'ASC')->findAll();
                         
                        return view("manpowerinfo/index",$data);
                }
                 
                }else{
                    
                     $info->where('project_deleted_on =',null);
                     $data['project'] = $info->orderBy('project_id', 'ASC')->findAll();
                     $dept->where('department_deleted_on =',null);
                     $data['department'] = $dept->orderBy('department_id', 'ASC')->findAll();
                     return view("manpowerinfo/index",$data);
                    
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new ManpowerInfoModel();
                $project= new ProjectInfoModel();  
                $department= new DepartmentInfoModel(); 
                 
                  
                   $session=session();
                  
                  if($session->get('role')==1){
                    $info->where('manpower_request_deleted_on =',null);
                    $data['users']= $info->orderBy('manpower_request_id', 'ASC')->findAll();
                    $manpower=$data['users'];
                    foreach($manpower as $power){
                       $data['project_name'][] = $project->where('project_id =',$power['project_id'])->first();
                       $data['department_name'][] = $department->where('department_id =',$power['manpower_request_dept'])->first();
                    }
                     
                  }elseif($session->get('role')==2){
                      $department_name=$session->get('department');
                      $info->where('manpower_request_deleted_on =',null);
                      
                      $company = new CompanyWorkInfoModel();
                      $company->where('companywork_department =',$department_name);
                      $company->where('companywork_deleted_on =',null);
                      $department_employee = $company->orderBy('emp_id', 'ASC')->findAll();
                     foreach($department_employee as $singledata){
                       
                       if(isset($singledata['emp_id'])){
                        $info->where('emp_id =',$singledata['emp_id']);
                         $info->where('manpower_request_deleted_on =',null);
                         $data['users'] = $info->where('emp_id =',$singledata['emp_id'])->findAll();
                          
                       }
                     }
                     
                      $manpower=$data['users'];
                      
                     $manpower=$data['users'];
                    foreach($manpower as $power){
                        
                        if(isset($power['manpower_request_id'])){
                  
                            $data['project_name'][] = $project->where('project_id =',$power['project_id'])->first();
                            $data['department_name'][] = $department->where('department_id =',$power['manpower_request_dept'])->first();
                        }
                    }
                      
                          
                    
                      
                  }
                  elseif($session->get('role')==3){
                      
                     $id=$session->get('emp_id');
                     $info->where('manpower_request_deleted_on =',null);
                     $data['users'] =$info->where('emp_id',$id)->findAll();
                     
                     $manpower=$data['users'];
                    foreach($manpower as $power){
                        
                        if(isset($power['manpower_request_id'])){
                  
                            $data['project_name'][] = $project->where('project_id =',$power['project_id'])->first();
                            $data['department_name'][] = $department->where('department_id =',$power['manpower_request_dept'])->first();
                        }
                    }
                   
                   
                     
                  }
                  
                 // echo json_encode($data['users']);
            return view('manpowerinfo/view',$data);
                  
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $project= new ProjectInfoModel();
                $department= new DepartmentInfoModel();
                
                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new ManpowerInfoModel();
                $data['user']=$users->where('manpower_request_id',$base)->first();
                $power=$data['user'];
                
               
                $data['project_name']= $project->where('project_id =',$power['project_id'])->first();
                $data['department_name'] = $department->where('department_id =',$power['manpower_request_dept'])->first();
               
                
                
               
                
                $project->where('project_deleted_on =',null);
                $data['project'] = $project->orderBy('project_id', 'ASC')->findAll();
                $department->where('department_deleted_on =',null);
                $data['department'] = $department->orderBy('department_id', 'ASC')->findAll();

               
                return view("manpowerinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new ManpowerInfoModel();
                $id = $this->request->getVar('manpower_request_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     $session=session();
                     $emp_id= $session->get('emp_id');
                      

                        $data=[
                            'project_id' =>$this->request->getPOST('project_id'),
                            'manpower_request_dept' =>$this->request->getPOST('manpower_request_dept'),
                            'manpower_request_job_title' =>$this->request->getPOST('manpower_request_job_title'),
                            'manpower_request_job_type' =>$this->request->getPOST('manpower_request_job_type'),
                            'manpower_request_job_hiretype' =>$this->request->getPOST('manpower_request_job_hiretype'),
                            'manpower_request_justify' =>$this->request->getPOST('manpower_request_justify'),
                            'manpower_request_major_res' =>$this->request->getPOST('manpower_request_major_res'),
                            'manpower_request_qualification' =>$this->request->getPOST('manpower_request_qualification'),
                            'manpower_request_experience' =>$this->request->getPOST('manpower_request_experience'),
                            'manpower_request_special_apilites' =>$this->request->getPOST('manpower_request_special_apilites'),
                            'manpower_request_personal_quality' =>$this->request->getPOST('manpower_request_personal_quality'),
                            
                            
                            'emp_id' => $emp_id,
                            
                            'manpower_request_updated_on'=>$date
                        ];
                         
                   
                    
                    $datas=$users->where('manpower_request_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('manpower_request_deleted_on =',null);
                    $data['users']=$users->orderBy('manpower_request_id', 'ASC')->findAll();
                
                    helper(['url']);
                    return redirect()->to('viewmanpower'); 

               
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

                            'manpower_request_deleted_on' => $date,
                        ];
                
                $users= new ManpowerInfoModel();
                $users->where('manpower_request_id', $base)->update($base,$data);
                $users->where('manpower_request_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('manpower_request_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewmanpower'); 


            }
            
          public function reportsdefault($user_id=null)
            {
                echo 'testing';
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
               
                //PersonalInfo
                $mpdf = new \Mpdf\Mpdf();
                $project= new ProjectInfoModel();
                $department= new DepartmentInfoModel();
                
                $users= new ManpowerInfoModel();
                //$request_id=$this->request->getVar('manpower_request_id');
                $request_id=base64_decode(base64_decode(base64_decode($user_id)));
                 
                  
               $users->where('manpower_request_id =',$request_id);
                 
                 $data['request'][] = $users->where('manpower_request_deleted_on =',null)->first();
                 $power=$data['request'];
                 $data['project_name']= $project->where('project_id =',$power[0]['project_id'])->first();
                 $data['department_name'] = $department->where('department_id =',$power[0]['manpower_request_dept'])->first();
               
                
                
               
               $html = view('manpowerinfo/reports',$data);
                
               /////////////////
                $mpdf->WriteHTML($html);

                $pdfContent = $mpdf->Output('', 'S');

                $response = \Config\Services::response();
                $response->setHeader('Content-Type', 'application/pdf');
                $response->setHeader('Content-Disposition', 'inline; filename="employee.pdf"');

                return $response->setBody($pdfContent);
            }
            
           
      
          

}
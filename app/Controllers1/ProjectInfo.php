<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\ProjectInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\PersonalInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class ProjectInfo extends BaseController
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
               
               
                
               
                if($this->request->getPOST('project_name')!=''){
                   $count= count($this->request->getPOST('project_work_type_list'));
                    $project_work_type_list= $this->request->getPOST('project_work_type_list');

                    $count=$count-1;
                    $project_work_info=[];
                    for($i=0;$i<=$count;$i++){
                        $project_work_info['project_work_type_list']=$project_work_type_list[$i];
                      
                        $project_worklist[]=$project_work_info;
                    }
                    $rules = [
                    'project_name' => 'required',
                    /*'project_desc' => 'required',
                   
                   
                  
                    ''*/
                    
                ];
                $users= new ProjectInfoModel();
  

                if($this->validate($rules)){
                        
                        $users= new ProjectInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'project_name' =>$this->request->getPOST('project_name'),
                            'project_type' =>$this->request->getPOST('project_type'),
                            'project_work_type_list' =>json_encode($project_worklist),
                           
                            'emp_id' => $emp_id,
                            'project_created_on'=>$date,
                            'project_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        
                        return view("projectinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     
                     
                        $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Not Registered'); 
                     
                     
                         
                        return view("projectinfo/index",$data);
                }
                 
                }else{
                    
                     return view("projectinfo/index");
                    
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new ProjectInfoModel();
                  
                 
                  
                   $session=session();
                  
                  if($session->get('role')==1){
                    $info->where('project_deleted_on =',null);
                    $data['users'] = $info->orderBy('project_id', 'ASC')->findAll();
                  }elseif($session->get('role')==2){
                      $department=$session->get('department');
                      
                      $company = new CompanyWorkInfoModel();
                      $company->where('companywork_department =',$department);
                      $company->where('companywork_deleted_on =',null);
                      $department_employee = $company->orderBy('emp_id', 'ASC')->findAll();
                     foreach($department_employee as $singledata){
                       
                        $info->where('emp_id =',$singledata['emp_id']);
                         $data['users'][] = $info->where('emp_id =',$singledata['emp_id'])->first();
                       
                     }
                    
                      
                  }
                  elseif($session->get('role')==3){
                      
                     $id=$session->get('emp_id');
                    
                     $data['users'][] =$info->where('emp_id',$id)->first();
                     
                  }
                  
                  return view('projectinfo/view',$data);
                  
            }
            
            
            
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new ProjectInfoModel();
                $data['user']=$users->where('project_id',$base)->first();
                
               
              
                return view("projectinfo/edit",$data);

            }
            
            
              public function work_type($id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $base=base64_decode(base64_decode(base64_decode($id)));
                $users = new ProjectInfoModel();
                $data=$users->where('project_id',$base)->first();
                
               $data= json_decode($data['project_work_type_list']);
               echo json_encode($data); 
               
                
            }
            
            

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
              
                $users= new ProjectInfoModel();
                $id = $this->request->getVar('project_id');

                $count= count($this->request->getPOST('project_work_type_list'));
                    $project_work_type_list= $this->request->getPOST('project_work_type_list');

                    $count=$count-1;
                    $project_work_info=[];
                    for($i=0;$i<=$count;$i++){
                        $project_work_info['project_work_type_list']=$project_work_type_list[$i];
                      
                        $project_worklist[]=$project_work_info;
                    }


                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     $session=session();
                     $emp_id= $session->get('emp_id');
                      

                        $data=[
                           'project_name' =>$this->request->getPOST('project_name'),
                            'project_type' =>$this->request->getPOST('project_type'),
                            'project_work_type_list' =>json_encode($project_worklist),
                           
                            'emp_id' => $emp_id,
                            
                            'project_updated_on'=>$date
                            
                        ];
                         
                   
                    
                    $datas=$users->where('project_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('project_deleted_on =',null);
                    $data['users']=$users->orderBy('project_id', 'ASC')->findAll();
                
                    helper(['url']);
                    return redirect()->to('viewproject'); 

               
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

                            'project_deleted_on' => $date,
                        ];
                
                $users= new ProjectInfoModel();
                $users->where('project_id', $base)->update($base,$data);
                $users->where('project_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('project_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewproject'); 


            }
            
               
             public function reportsdefault($user_id=null)
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                
                   
                         $base=base64_decode(base64_decode(base64_decode($user_id)));
                         
                         $grie = new ProjectInfoModel();
                
                   
                        
                 
                         $data['grie'] =  $grie->where('project_id =',$base)->first();
                         $single_data=$data['grie'];
                         
                         $emp_id=$single_data['emp_id'];
                         
                         //based on the  emp_id(we are fetching the department info)
                         
                         $company = new CompanyWorkInfoModel();
                         
                 
                       
                 
                         $data['department'] =   $company->where('emp_id =',$emp_id)->first();
                        
                         
                         
                        
                        //based on the  emp_id(we are fetching the personal info)
                        
                         
                        $info = new PersonalInfoModel();
                
                       
                 
                         $data['info'] = $info->where('emp_company_ref_id =',$emp_id)->first();
                          
                    
                       
                        //echo json_encode($data);
                         
                
               $html = view('ProjectInfo/reports',$data);
                
                
                /////////////////
                $mpdf = new \Mpdf\Mpdf();
                $mpdf->AddPage('P');
                $mpdf->WriteHTML($html);
                
                
                $pdfContent = $mpdf->Output('','S');

                $response = \Config\Services::response();
                $response->setHeader('Content-Type', 'application/pdf');
                $response->setHeader('Content-Disposition', 'inline; filename="department-based.pdf"');

                return $response->setBody($pdfContent);
            }
           
   

}
<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\CompanyWorkInfoModel;

use App\Models\PersonalInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class CompanyWorkInfo extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
               
                
                if($this->request->getPOST('companywork_position_of_join')!=''){
                    $rules = [
                    'companywork_position_of_join' => 'required',
                    /*'companywork_interview_date' => 'required',
                   
                    'companywork_offerletter_senton' => '',
                    'companywork_dateof_join' => '',
                    'companywork_desg' => '',
                    'companywork_site' => '',
                    'companywork_department' => '',
                    'companywork_official_email' => '',
                    'companywork_exp_duration' => '',
                    'companywork_expert_in' => '',
                    'companywork_last_working_day_date'=>'',
                    ''*/
                    
                ];
                        $users= new CompanyWorkInfoModel();
                    $users->where('emp_id =',$this->request->getPOST('emp_id'));
                    $users->where('companywork_deleted_on =',null);
                    $id_check_delete=$users->orderBy('companywork_id', 'ASC')->find();
                    
                   
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[companywork_info.emp_id]",
                 
                           ];
                           
                           
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }
                
                if($this->validate($rules)){
                        
                        $users= new CompanyWorkInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                       
                        $data=[
                            'companywork_position_of_join' =>$this->request->getPOST('companywork_position_of_join'),
                            'companywork_interview_date' =>$this->request->getPOST('companywork_interview_date'),
                            'companywork_offerletter_senton' => $this->request->getPOST('companywork_offerletter_senton'),
                            'companywork_dateof_join' => $this->request->getPOST('companywork_dateof_join'),
                            'companywork_desg' => $this->request->getPOST('companywork_desg'),
                            
                            'companywork_site' =>$this->request->getPOST('companywork_site'),
                            'companywork_department' =>$this->request->getPOST('companywork_department'),
                            'companywork_official_email' =>$this->request->getPOST('companywork_official_email'),
                            'companywork_exp_duration' =>$this->request->getPOST('companywork_exp_duration'),
                            'companywork_expert_in' => $this->request->getPOST('companywork_expert_in'),
                            'companywork_last_working_day_date' => $this->request->getPOST('companywork_last_working_day_date'),
                            'emp_id' =>$this->request->getPOST('emp_id'),
                            'companywork_created_on'=>$date,
                            'companywork_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        

                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="company"; 
                        return view("companyworkinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Already Registered');
                      $data['page']="company"; 
                      return view("companyworkinfo/index",$data);
                }
                 
                }else{
                    

                    $info= new PersonalInfoModel();
                    $info->where('emp_deleted_on =',null);
                    $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                    $data['page']="company"; 
                    return view('companyworkinfo/index',$data);
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new CompanyWorkInfoModel();
               
                  $data['page']="company"; 
                
                  
                  
                    $session=session();
                  
                  if($session->get('role')==1){
                    $info->where('companywork_deleted_on =',null);
                    $data['users'] = $info->orderBy('companywork_id', 'ASC')->findAll();
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
                    return view('companyworkinfo/view',$data);
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new CompanyWorkInfoModel();
                $data['user']=$users->where('companywork_id',$base)->first();
                

                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="company"; 
                return view("companyworkinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new CompanyWorkInfoModel();
                $id = $this->request->getVar('companywork_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     
                      

                        $data=[
                           'companywork_position_of_join' =>$this->request->getPOST('companywork_position_of_join'),
                            'companywork_interview_date' =>$this->request->getPOST('companywork_interview_date'),
                            'companywork_offerletter_senton' => $this->request->getPOST('companywork_offerletter_senton'),
                            'companywork_dateof_join' => $this->request->getPOST('companywork_dateof_join'),
                            'companywork_desg' => $this->request->getPOST('companywork_desg'),
                            
                            'companywork_site' =>$this->request->getPOST('companywork_site'),
                            'companywork_department' =>$this->request->getPOST('companywork_department'),
                            'companywork_official_email' =>$this->request->getPOST('companywork_official_email'),
                            'companywork_exp_duration' =>$this->request->getPOST('companywork_exp_duration'),
                            'companywork_expert_in' => $this->request->getPOST('companywork_expert_in'),
                            'companywork_last_working_day_date' => $this->request->getPOST('companywork_last_working_day_date'),
                            'emp_id' =>$this->request->getPOST('emp_id'),
                            'companywork_updated_on'=>$date
                            
                        ];
                         
                   
                    
                    $datas=$users->where('companywork_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('companywork_deleted_on =',null);
                    $data['users']=$users->orderBy('companywork_id', 'ASC')->findAll();
                    $data['page']="company"; 
                    helper(['url']);
                    return redirect()->to('viewcompanyworkdetails'); 

               
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

                            'companywork_deleted_on' => $date,
                        ];
                
                $users= new CompanyWorkInfoModel();
                $users->where('companywork_id', $base)->update($base,$data);
                $users->where('companywork_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('companywork_id', 'ASC')->findAll();
                $data['page']="company"; 
                helper(['url']);
                return redirect()->to('viewcompanyworkdetails'); 


            }
           
      


}
<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\EmploymentInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\PersonalInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class EmploymentInfo extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
               
                
                if($this->request->getPOST('employment_pf_no')!=''){
                    $rules = [
                    'employment_pf_no' => 'required',
                    /*'employment_esi_no' => 'required',
                   
                    'employment_uan_no' => '',
                    'employment_gratuity_no' => '',
                    'employment_gratuity_doj' => '',
                    'employment_sts_of_formf_gratuity' => '',
                    'employment_sts_of_form11' => '',
                    'employment_pf_pre_mem' => '',
                    'employment_pf_decl' => '',
                  
                    ''*/
                    
                ];
                
                $users= new EmploymentInfoModel();
                $users->where('emp_id =',$this->request->getPOST('emp_id'));
                $users->where('employment_deleted_on =',null);
                $id_check_delete=$users->orderBy('employment_id', 'ASC')->find();
                    
                   
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[employment_info.emp_id]",
                 
                           ];
                           
                           
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }
                if($this->validate($rules)){
                        
                        $users= new EmploymentInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'employment_pf_no' =>$this->request->getPOST('employment_pf_no'),
                            'employment_esi_no' =>$this->request->getPOST('employment_esi_no'),
                            'employment_uan_no' => $this->request->getPOST('employment_uan_no'),
                            'employment_gratuity_no' => $this->request->getPOST('employment_gratuity_no'),
                            'employment_gratuity_doj' => $this->request->getPOST('employment_gratuity_doj'),
                            
                            'employment_sts_of_formf_gratuity' =>$this->request->getPOST('employment_sts_of_formf_gratuity'),
                            'employment_sts_of_form11' =>$this->request->getPOST('employment_sts_of_form11'),
                            'employment_pf_pre_mem' =>$this->request->getPOST('employment_pf_pre_mem'),
                           
                            'employment_pf_decl' =>$this->request->getPOST('employment_pf_decl'),
                            'emp_id' =>$this->request->getPOST('emp_id'), 
                            
                            'employment_created_on'=>$date,
                            'employment_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="employment"; 
                        return view("employmentinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     
                        $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Already Registered');
                        
                     $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                     $data['page']="employment";
                      return view("employmentinfo/index",$data);
                }
                 
                }else{
                    $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                    $data['page']="employment";
                    return view('employmentinfo/index',$data);
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                
                $info = new EmploymentInfoModel();
                
                
                
                
                
                $session=session();
                  
                  if($session->get('role')==1){
                   $info->where('employment_deleted_on =',null);
                   $data['users'] = $info->orderBy('employment_id', 'ASC')->findAll();
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
                  
                  $data['page']="employment";
                  return view('employmentinfo/view',$data);
                
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new EmploymentInfoModel();
                $data['user']=$users->where('employment_id',$base)->first();
                $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="employment";        
                return view("employmentinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new EmploymentInfoModel();
                $id = $this->request->getVar('employment_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     
                      

                        $data=[
                        'employment_pf_no' =>$this->request->getPOST('employment_pf_no'),
                            'employment_esi_no' =>$this->request->getPOST('employment_esi_no'),
                            'employment_uan_no' => $this->request->getPOST('employment_uan_no'),
                            'employment_gratuity_no' => $this->request->getPOST('employment_gratuity_no'),
                            'employment_gratuity_doj' => $this->request->getPOST('employment_gratuity_doj'),
                            
                            'employment_sts_of_formf_gratuity' =>$this->request->getPOST('employment_sts_of_formf_gratuity'),
                            'employment_sts_of_form11' =>$this->request->getPOST('employment_sts_of_form11'),
                            'employment_pf_pre_mem' =>$this->request->getPOST('employment_pf_pre_mem'),
                           
                            'employment_pf_decl' =>$this->request->getPOST('employment_pf_decl'),
                            'emp_id' =>$this->request->getPOST('emp_id'),

                            'employment_updated_on'=>$date
                            
                        ];
                         
                   
                    
                    $datas=$users->where('employment_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('employment_deleted_on =',null);
                    $data['users']=$users->orderBy('employment_id', 'ASC')->findAll();
                    $data['page']="employment";
                    helper(['url']);
                    return redirect()->to('viewemploymentdetails'); 

               
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

                            'employment_deleted_on' => $date,
                        ];
                
                $users= new EmploymentInfoModel();
                $users->where('employment_id', $base)->update($base,$data);
                $users->where('employment_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('employment_id', 'ASC')->findAll();
                $data['page']="employment";
                helper(['url']);
                return redirect()->to('viewemploymentdetails'); 


            }
           
      


}
<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\CompanyResignInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\PersonalInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class CompanyResignInfo extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
               
                
                if($this->request->getPOST('company_resign_letter_subon')!=''){
                    $rules = [
                    'company_resign_letter_subon' => 'required',
                    /*'company_resign_noperiod_com' => 'required',
                   
                    'company_resign_nodue_cert' => '',
                    'company_resign_final_sett_bank' => '',
                    'company_resign_final_sett_amount' => '',
                    'company_resign_dateof_leaving' => '',
                
                  
                    ''*/
                    
                ];
                $users= new CompanyResignInfoModel();
                $users->where('emp_id =',$this->request->getPOST('emp_id'));
                $users->where('company_resign_deleted_on =',null);
                $id_check_delete=$users->orderBy('company_resign_id', 'ASC')->find();
                
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[company_resign_info.emp_id]",
                 
                           ];
                           
                           
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }
                if($this->validate($rules)){
                        
                        $users= new CompanyResignInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'company_resign_letter_subon' =>$this->request->getPOST('company_resign_letter_subon'),
                            'company_resign_noperiod_com' =>$this->request->getPOST('company_resign_noperiod_com'),
                            'company_resign_nodue_cert' => $this->request->getPOST('company_resign_nodue_cert'),
                            'company_resign_final_sett_bank' => $this->request->getPOST('company_resign_final_sett_bank'),
                            'company_resign_final_sett_amount' => $this->request->getPOST('company_resign_final_sett_amount'),
                            
                            'company_resign_dateof_leaving' =>$this->request->getPOST('company_resign_dateof_leaving'),
                            
                            'emp_id' =>$this->request->getPOST('emp_id'),
                            'company_resign_created_on'=>$date,
                            'company_resign_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="resign"; 
                        return view("companyresigninfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     
                     
                        $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Not Registered'); 
                     
                      $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="resign"; 
                        return view("companyresigninfo/index",$data);
                }
                 
                }else{
                     $info= new PersonalInfoModel();
                     $info->where('emp_deleted_on =',null);
                     $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                     $data['page']="resign"; 
                     return view("companyresigninfo/index",$data);
                    
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new CompanyResignInfoModel();
                  
                 
                  
                   $session=session();
                  
                  if($session->get('role')==1){
                      
                    
                    $info->where('company_resign_deleted_on =',null);
                    $data['users'] = $info->orderBy('emp_id', 'ASC')->findAll();
                    
                    
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
                $users=new CompanyResignInfoModel();
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

                $users= new CompanyResignInfoModel();
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
                    helper(['url']);
                    return redirect()->to('viewcompanyresigndetails'); 

               
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
                
                $users= new CompanyResignInfoModel();
                $users->where('company_resign_id', $base)->update($base,$data);
                $users->where('company_resign_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('company_resign_id', 'ASC')->findAll();
                $data['page']="resign";
                helper(['url']);
                return redirect()->to('viewcompanyresigndetails'); 


            }
           
      


}
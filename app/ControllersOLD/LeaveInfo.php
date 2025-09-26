<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\PersonalInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\LeaveInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class LeaveInfo extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
                
                
                if($this->request->getPOST('leave_cl')!=''){
                    $rules = [
                    'leave_cl' => 'required',
                    /*'leave_sl' => 'required',
                   
                    'leave_el' => '',
                    
                  
                    ''*/
                    
                ];
                
                $users= new LeaveInfoModel();
                $users->where('emp_id =',$this->request->getPOST('emp_id'));
                    $users->where('leave_deleted_on =',null);
                    $id_check_delete=$users->orderBy('leave_id', 'ASC')->find();
                    
                   
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[leave_info.emp_id]",
                 
                           ];
                           
                           
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }
                  
                if($this->validate($rules)){
                        
                        $users= new LeaveInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'leave_cl' =>$this->request->getPOST('leave_cl'),
                            'leave_sl' =>$this->request->getPOST('leave_sl'),
                            'leave_el' => $this->request->getPOST('leave_el'),
                            'emp_id' => $this->request->getPOST('emp_id'),
                            
                            'leave_created_on'=>$date,
                            'leave_updated_on'=>$date
                        ];



                        $users->save($data);
                      
                    
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="leave"; 
                        return view("leaveinfo/index",$data);


                }else{
                    $data['validation']= $this->validator->getErrors();
                    $session= \Config\Services::session();
                    $session->setFlashdata('failed', 'Already Registered'); 
                     
                     $info= new PersonalInfoModel();
                     $info->where('emp_deleted_on =',null);
                     $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                     $data['page']="leave"; 
                      return view("leaveinfo/index",$data);
                }
                 
                }else{
                     $info= new PersonalInfoModel();
                     $info->where('emp_deleted_on =',null);
                     $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                     $data['page']="leave"; 
                    return view('leaveinfo/index',$data);
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new LeaveInfoModel();
                
               /*$info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();*/
                
                
                   $session=session();
                  
                  if($session->get('role')==1){
                    $info->where('leave_deleted_on =',null);
                    $data['users'] = $info->orderBy('leave_id', 'ASC')->findAll();
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
                  $data['page']="leave"; 
                  return view('leaveinfo/view',$data);
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new LeaveInfoModel();
                $data['user']=$users->where('leave_id',$base)->first();
                
                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="leave"; 
                return view("leaveinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new LeaveInfoModel();
                $id = $this->request->getVar('leave_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                        $data=[
                        'leave_cl' =>$this->request->getPOST('leave_cl'),
                        'leave_sl' =>$this->request->getPOST('leave_sl'),
                        'leave_el' => $this->request->getPOST('leave_el'),
                        'emp_id' => $this->request->getPOST('emp_id'),  

                            'leave_updated_on'=>$date
                            
                        ];
                         
                   
                    
                    $datas=$users->where('leave_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('leave_deleted_on =',null);
                    $data['users']=$users->orderBy('leave_id', 'ASC')->findAll();
                    
                    $data['page']="leave"; 
                    helper(['url']);
                    return redirect()->to('viewleavedetails'); 

               
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

                            'leave_deleted_on' => $date,
                        ];
                
                $users= new LeaveInfoModel();
                $users->where('leave_id', $base)->update($base,$data);
                $users->where('leave_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('leave_id', 'ASC')->findAll();
                $data['page']="leave"; 
                helper(['url']);
                return redirect()->to('viewleavedetails'); 


            }
           
      


}
<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\DepartmentInfoModel;

use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class DepartmentInfo extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
               
                
                if($this->request->getPOST('department_name')!=''){
                    $rules = [
                    'department_name' => 'required',
                    /*'department_roletype' => 'required',
                   
                  
                
                  
                    ''*/
                    
                ];
                  
                if($this->validate($rules)){
                        
                        $users= new DepartmentInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        
                           $count= count($this->request->getPOST('department_roletype'));
                    
                    
                          $rolelist= $this->request->getPOST('department_roletype');
                         

                          $count=$count-1;
                          $roletype_info=[];
                          for($i=0;$i<=$count;$i++){
                              $roletype_info[]=$rolelist[$i];
                        
                             
                          }
                        
                        
                       
                       
                        $data=[
                            'department_name' =>$this->request->getPOST('department_name'),
                            'department_roletype' =>json_encode($roletype_info),
                            
                           
                            'department_created_on'=>$date,
                            'department_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        return view("departmentinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     
                     
                        return view("departmentinfo/index",$data);
                }
                 
                }else{
                    
                     return view("departmentinfo/index");
                    
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new DepartmentInfoModel();
                $info->where('department_deleted_on =',null);
                $data['users'] = $info->orderBy('department_id', 'ASC')->findAll();
                  
                return view('departmentinfo/view',$data);
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new DepartmentInfoModel();
                $data['user']=$users->where('department_id',$base)->first();
               
                return view("departmentinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new DepartmentInfoModel();
                $id = $this->request->getVar('department_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     
                      

                           $count= count($this->request->getPOST('department_roletype'));
                    
                    
                          $rolelist= $this->request->getPOST('department_roletype');
                         

                          $count=$count-1;
                          $roletype_info=[];
                          for($i=0;$i<=$count;$i++){
                              $roletype_info[]=$rolelist[$i];
                        
                              
                          }
                        
                        
                       
                       
                        $data=[
                            'department_name' =>$this->request->getPOST('department_name'),
                            'department_roletype' =>json_encode($roletype_info),
                            
                           
                            'department_created_on'=>$date,
                            'department_updated_on'=>$date
                        ];


                   
                    
                    $datas=$users->where('department_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('department_deleted_on =',null);
                    $data['users']=$users->orderBy('department_id', 'ASC')->findAll();
                   
                    return view("departmentinfo/view",$data);

               
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

                            'department_deleted_on' => $date,
                        ];
                
                $users= new DepartmentInfoModel();
                $users->where('department_id', $base)->update($base,$data);
                $users->where('department_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('department_id', 'ASC')->findAll();
               
                return view("departmentinfo/view",$data);


            }
           
      


}
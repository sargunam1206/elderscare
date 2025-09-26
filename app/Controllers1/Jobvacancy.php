<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\JobInfoModel;
use App\Models\PersonalInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class Jobvacancy extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
               
                
                if($this->request->getPOST('job_vacancy_dept')!=''){
                    $rules = [
                    'job_vacancy_dept' => 'required',
                    /*'job_vacancy_role' => 'required',
                      job_vacancy_exp' => 'required',
                      job_vacancy_qualification' => 'required',
                    'job_vacancy_totalvacancy' => '',
                    'job_vacancy_final_sett_bank' => '',
                    'job_vacancy_final_sett_amount' => '',
                    'job_vacancy_dateof_leaving' => '',
                
                  
                    ''*/
                    
                ];
                  
                if($this->validate($rules)){
                        
                        $users= new JobInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        
                        
                        
                        
                       
                       
                        $data=[
                            'job_vacancy_dept' =>$this->request->getPOST('job_vacancy_dept'),
                            'job_vacancy_role' =>$this->request->getPOST('job_vacancy_role'),
                            'job_vacancy_exp' => $this->request->getPOST('job_vacancy_exp'),
                            'job_vacancy_qualification' => $this->request->getPOST('job_vacancy_qualification'),
                            'job_vacancy_totalvacancy' => $this->request->getPOST('job_vacancy_totalvacancy'),
                            'job_vacancy_validity_from' => $this->request->getPOST('job_vacancy_validity_from'),
                           'job_vacancy_validity_to' => $this->request->getPOST('job_vacancy_validity_to'),
                            
                            
                            'job_created_on'=>$date,
                            'job_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                       
                        
                        return view("jobvacancy/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     
                    
                        return view("jobvacancy/index",$data);
                }
                 
                }else{
                     
                     return view("jobvacancy/index");
                    
                }
            }
         
           
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new JobInfoModel();
                  $info->where('job_deleted_on =',null);
                  $data['users'] = $info->orderBy('job_vacancy_id', 'ASC')->findAll();
                  $data['page']="jobvacancy"; 
                  return view('jobvacancy/view',$data);
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new JobInfoModel();
                $data['user']=$users->where('job_vacancy_id',$base)->first();
                
              
             
                return view("jobvacancy/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new JobInfoModel();
                $id = $this->request->getVar('job_vacancy_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     
                      

                        $data=[
                             'job_vacancy_dept' =>$this->request->getPOST('job_vacancy_dept'),
                            'job_vacancy_role' =>$this->request->getPOST('job_vacancy_role'),
                            'job_vacancy_exp' => $this->request->getPOST('job_vacancy_exp'),
                            'job_vacancy_qualification' => $this->request->getPOST('job_vacancy_qualification'),
                            'job_vacancy_totalvacancy' => $this->request->getPOST('job_vacancy_totalvacancy'),
                            'job_vacancy_validity_from' => $this->request->getPOST('job_vacancy_validity_from'),
                            'job_vacancy_validity_to' => $this->request->getPOST('job_vacancy_validity_to'),
                          
                            
                            
                           
                            'job_updated_on'=>$date
                            
                        ];
                         
                   
                    
                    $datas=$users->where('job_vacancy_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('job_deleted_on =',null);
                    $data['users']=$users->orderBy('job_vacancy_id', 'ASC')->findAll();
                    $data['page']="jobvacancy";
                    return view("jobvacancy/view",$data);

               
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

                            'job_deleted_on' => $date,
                        ];
                
                $users= new JobInfoModel();
                $users->where('job_vacancy_id', $base)->update($base,$data);
                $users->where('job_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('job_vacancy_id', 'ASC')->findAll();
                $data['page']="jobvacancy";
                return redirect("viewjobvacancy");


            }
            
                
            public function vacancy()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new JobInfoModel();
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d");
                
                
                  $info->where('job_vacancy_validity_to >=',$date);
                  $info->where('job_deleted_on =',null);
                  $data['users'] = $info->orderBy('job_vacancy_id', 'ASC')->findAll();
                  $data['page']="jobvacancy"; 
                  return view('jobvacancy/vacancy',$data);
            }
            
               public function list($id=null)
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $base=base64_decode(base64_decode(base64_decode($id)));
                $users =  new JobInfoModel();
                $data['users']= $users->orderBy('job_vacancy_id', 'ASC')->findAll();
                
               
                return view('jobvacancy/vacancy',$data);
                
           
               
                
               
                
            }
           
      


}
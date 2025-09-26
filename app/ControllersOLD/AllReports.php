<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\PersonalInfoModel;
use App\Models\BankAccountInfoModel;
use App\Models\EducationalInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\EmploymentInfoModel;
use App\Models\DepartmentInfoModel;
use App\Models\CompanyResignInfoModel;
use App\Models\SeniorityInfoModel;

use App\Models\LeaveInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;



class AllReports extends BaseController
{

            public function index()
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                helper(['url']);
                
                    
               $company = new DepartmentInfoModel();
               
                $company->where("department_name !=''");
                $data['company']= $company->distinct()->findColumn('department_name');
                
                $data['page']="allreports";
                 
                //echo json_encode($data['company']);
                
                if($this->request->getPOST('reports')!=''){
                     
                    $reportstype=$this->request->getPOST('reportstype');
                    $department=$this->request->getPOST('department');
                    
                    $employeetype=$this->request->getPOST('employeetype');
                    
                    //echo $employeetype;
                    
                    if($reportstype=='Department'){
                        
                        
                         //Company work details
                         
                         $company = new CompanyWorkInfoModel();
                         
                         $company->where('companywork_department like',$department,'%');
                         $company->where('emp_id !=',null);
                 
                         $datas = $company->orderBy('emp_id', 'ASC')->findAll();
                        
                       
                         
                         if(count($datas)!=0){
                              
                        foreach($datas as $list){
                             
                              $info = new PersonalInfoModel();
                              
                              //$info->where('emp_deleted_on =',null);
                              $info->where("company_resign_empsts ='$employeetype'");
                              $test=$info->where('emp_company_ref_id =',$list['emp_id'])->first();
                              
                              if(isset($test)){
                              $data['info'][] = $info->where('emp_company_ref_id =',$test['emp_company_ref_id'])->first();
                              
                              
                              $bank = new BankAccountInfoModel();
                              $bank->where('bankaccount_deleted_on =',null);
                              $data['bank'][] = $bank->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              
                              $educational = new EducationalInfoModel();
                              $educational->where('edu_deleted_on =',null);
                              $data['educational'][] = $educational->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              
                              $employment= new EmploymentInfoModel();
                              $employment->where('employment_deleted_on =',null);
                              $data['employment'][] =$employment->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              
                           
                 
                              $data['department'][] = $company->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              } 
                             
                         }
                         
                           if($data['department']==null){
                            $data['info'][]=[];
                            $data['bank'][]=[];
                            $data['educational'][]=[];
                            $data['employment'][]=[];
                            $data['department'][]=[];
                            $data['count']=0;    
                            }else{
                                $data['count']=count($data['department']);
                            }
                            
                         
                            
                        }else{
                            
                            $data['info'][]=[];
                            $data['bank'][]=[];
                            $data['educational'][]=[];
                            $data['employment'][]=[];
                            $data['department'][]=[];
                            $data['count']=0; 
                            
                        }
                        
                        }
                        elseif($reportstype=='Seniority'){
                         $senior = new SeniorityInfoModel();
                         
                         $senior->where('seniority_status like',$reportstype,'%');
                         $senior->where('emp_id !=',null);
                         $senior->where('seniority_deleted_on =',null);
                 
                         $datas = $senior->orderBy('emp_id', 'ASC')->findAll();
                         
                         if(count($datas)!=0){
                             
                        foreach($datas as $list){
                            
                             $info = new PersonalInfoModel();
                              
                              //$info->where('emp_deleted_on =',null);
                              $info->where("company_resign_empsts ='$employeetype'");
                              $test=$info->where('emp_company_ref_id =',$list['emp_id'])->first();
                              
                             if(isset($test)){
                                  
                              $data1['info'][] = $info->where('emp_company_ref_id =',$test['emp_company_ref_id'])->first();
                              
                              
                              $bank = new BankAccountInfoModel();
                            
                              $data1['bank'][] = $bank->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              
                             $educational = new EducationalInfoModel();
                            
                              $data1['educational'][] = $educational->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              
                              $employment= new EmploymentInfoModel();
                             
                              $data1['employment'][] =$employment->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              
                              $company = new CompanyWorkInfoModel();
                 
                              $data1['department'][] = $company->where('emp_id =', $test['emp_company_ref_id'])->first();
                              
                              
                                  
                                  
                              }
                             
                            
                            }
                            
                            
                           
                         if($data1['department']==null){
                            $data1['info'][]=[];
                            $data1['bank'][]=[];
                            $data1['educational'][]=[];
                            $data1['employment'][]=[];
                            $data1['department'][]=[];
                            $data1['count']=0;    
                            }else{
                                $data1['count']=count($data1['department']);
                            }
                            
                        
                         }
                          else{
                            
                            $data1['info'][]=[];
                            $data1['bank'][]=[];
                            $data1['educational'][]=[];
                            $data1['employment'][]=[];
                            $data1['department'][]=[];
                            $data1['count']=0; 
                        }
                            return view('allreports/index',$data1);
                        }
                        elseif($reportstype=='Experience'){
                            
                            $info = new PersonalInfoModel();
                            $info->where("company_resign_empsts ='$employeetype'");  
                            $info->where('emp_deleted_on =',null);
                            $datas=$info->orderBy('emp_id', 'ASC')->findAll();
                            
                            date_default_timezone_set("Asia/Kolkata");
                            $current_date=date("Y-m-d");
                            
                            
                            if(count($datas)!=0){
                            
                            foreach($datas as $list){
                             $total_id[]= $list['emp_company_ref_id'];
                            }
                            
                        
                        
                        
                           //array to string
                           $id_string="(" ."'" .implode("','", $total_id)."'".")" ;

                            
                            
                            $company = new CompanyWorkInfoModel();

                          
                                
                            $company->where("emp_id IN $id_string");
                 
                            $companydata =$company->orderBy('companywork_dateof_join', 'ASC')->findAll();
                            
                            foreach($companydata  as $uniquedata){
                                
                                
                                 $data1['info'][] = $info->where('emp_company_ref_id =',$uniquedata['emp_id'])->first();
                              
                              
                                 $bank = new BankAccountInfoModel();
                            
                                 $data1['bank'][] = $bank->where('emp_id =', $uniquedata['emp_id'])->first();
                              
                              
                                 $educational = new EducationalInfoModel();
                            
                                 $data1['educational'][] = $educational->where('emp_id =', $uniquedata['emp_id'])->first();
                              
                              
                                 $employment= new EmploymentInfoModel();
                             
                                 $data1['employment'][] =$employment->where('emp_id =', $uniquedata['emp_id'])->first();
                              
                              
                                 $company = new CompanyWorkInfoModel();
                 
                                 $data1['department'][] = $company->where('emp_id =', $uniquedata['emp_id'])->first();
                                
                                
                                
                                
                                
                                
                            }
                             if($data1['department']==null){
                            $data1['info'][]=[];
                            $data1['bank'][]=[];
                            $data1['educational'][]=[];
                            $data1['employment'][]=[];
                            $data1['department'][]=[];
                            $data1['count']=0;    
                            }else{
                                $data1['count']=count($data1['department']);
                            }
                            
                            return view('allreports/index',$data1);
                            
                            }else{
                                
                                
                                
                                 return view('allreports/index',$data);
                            }
                            
                            
                            
   
                                   
                          
                               
                            
                            
                        }
                       
                    }
                    else{
                        $company->where("department_name !=''");
                        $data1['company']= $company->distinct()->findColumn('department_name');
                
                         $data1['page']="allreports";
                          return view('allreports/index',$data1);
                    }
                   
                
                 //Company work details

                  return view('allreports/index',$data);
              
            }
            
            
             public function reportsdefault()
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                
                
                  $reportstype=$this->request->getPOST('reportstype');
                  $department=$this->request->getPOST('department');
                    //$department="HR";
                  $employeetype=$this->request->getPOST('employeetype');
                
                    if($reportstype=='Department'){
                        
                        
                         //Company work details
                         
                         $company = new CompanyWorkInfoModel();
                         
                         $company->where('companywork_department like',$department,'%');
                         $company->where('emp_id !=',null);
                 
                         $data['department'] = $company->orderBy('emp_id', 'ASC')->findAll();
                         $dataid=$data['department'];
                         
                         
                        foreach($dataid as $list){
                             $total_id[]= $list['emp_id'];
                         }
                        $data['count']=count($total_id);
                        
                        
                        //based on the Department emp_id(we are fetching the personal info)
                        
                         //array to string
                         $id_string="(" ."'" .implode("','", $total_id)."'".")" ;
                         
                        $info = new PersonalInfoModel();
                
                         $info->where('emp_deleted_on =',null);
                         $info->where("emp_company_ref_id IN $id_string");
                 
                         $data['info'] = $info->orderBy('emp_company_ref_id', 'ASC')->find();
                       
                       //based on the Department emp_id(we are fetching the BankAccount info)
                       
                       
                         $bank = new BankAccountInfoModel();
                
                         $bank->where('bankaccount_deleted_on =',null);
                         $bank->where("emp_id IN $id_string");
                 
                         $data['bank'] = $bank->orderBy('emp_id', 'ASC')->find();
                         
                      //based on the Department emp_id(we are fetching the Educational info) 
                        
                           $educational = new EducationalInfoModel();
                
                         $educational->where('edu_deleted_on =',null);
                         $educational->where("emp_id IN $id_string");
                 
                         $data['educational'] = $educational->orderBy('edu_id', 'ASC')->find();
                 
                      //based on the Department emp_id(we are fetching the employment info)
                      
                      $employment= new EmploymentInfoModel();
                
                        $employment->where('employment_deleted_on =',null);
                        $employment->where("emp_id IN $id_string");
                 
                        $data['employment'] = $employment->orderBy('emp_id', 'ASC')->find();
                        
                    }
                  //  echo json_encode($data);
                
                 $html = view('allreports/reports',$data);
                
                /////////////////
                $mpdf = new \Mpdf\Mpdf();
                $mpdf->AddPage('L');
                $mpdf->WriteHTML($html);
                
                
                $pdfContent = $mpdf->Output('','S');

                $response = \Config\Services::response();
                $response->setHeader('Content-Type', 'application/pdf');
                $response->setHeader('Content-Disposition', 'inline; filename="department-based.pdf"');

                return $response->setBody($pdfContent);
            }
            
              public function reportslist()
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                helper(['url']);
                $data['page']="reports"; 
                return view('reports/reportslist',$data);
            }
            
}            
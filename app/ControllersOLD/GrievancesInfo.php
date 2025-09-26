<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\GrievancesInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\PersonalInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class GrievancesInfo extends BaseController
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
               
                if($this->request->getPOST('grievances_type')!=''){
                    $rules = [
                    'grievances_type' => 'required',
                    /*'grievances_desc' => 'required',
                   
                   
                  
                    ''*/
                    
                ];
                $users= new GrievancesInfoModel();
  

                if($this->validate($rules)){
                        
                        $users= new GrievancesInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        $data=[
                            'grievances_type' =>$this->request->getPOST('grievances_type'),
                            'grievances_desc' =>$this->request->getPOST('grievances_desc'),
                           
                            'emp_id' => $emp_id,
                            'grievances_created_on'=>$date,
                            'grievances_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        
                        
                        return view("grievancesinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     
                     
                        $session= \Config\Services::session();
                        $session->setFlashdata('failed', 'Not Registered'); 
                     
                     
                         
                        return view("grievancesinfo/index",$data);
                }
                 
                }else{
                    
                     return view("grievancesinfo/index");
                    
                }
            }
         

            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $info = new GrievancesInfoModel();
                  
                 
                  
                   $session=session();
                  
                  if($session->get('role')==1){
                    $info->where('grievances_deleted_on =',null);
                    $data['users'] = $info->orderBy('grievances_id', 'ASC')->findAll();
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
                  
                  return view('grievancesinfo/view',$data);
                  
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new GrievancesInfoModel();
                $data['user']=$users->where('grievances_id',$base)->first();
                 $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
               // return view("grievancesinfo/index",$data);
                $data['page']="resign"; 
                return view("grievancesinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new GrievancesInfoModel();
                $id = $this->request->getVar('grievances_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     $session=session();
                     $emp_id= $session->get('emp_id');
                      

                        $data=[
                            'grievances_type' =>$this->request->getPOST('grievances_type'),
                            'grievances_desc' =>$this->request->getPOST('grievances_desc'),
                           
                            'emp_id' => $emp_id,
                            
                            'grievances_updated_on'=>$date
                            
                        ];
                         
                   
                    
                    $datas=$users->where('grievances_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('grievances_deleted_on =',null);
                    $data['users']=$users->orderBy('grievances_id', 'ASC')->findAll();
                
                    helper(['url']);
                    return redirect()->to('viewgrievances'); 

               
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

                            'grievances_deleted_on' => $date,
                        ];
                
                $users= new GrievancesInfoModel();
                $users->where('grievances_id', $base)->update($base,$data);
                $users->where('grievances_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['users']=$users->orderBy('grievances_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewgrievances'); 


            }
            
               
             public function reportsdefault($user_id=null)
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                
                   
                         $base=base64_decode(base64_decode(base64_decode($user_id)));
                         
                         $grie = new GrievancesInfoModel();
                
                   
                        
                 
                         $data['grie'] =  $grie->where('grievances_id =',$base)->first();
                         $single_data=$data['grie'];
                         
                         $emp_id=$single_data['emp_id'];
                         
                         //based on the  emp_id(we are fetching the department info)
                         
                         $company = new CompanyWorkInfoModel();
                         
                 
                       
                 
                         $data['department'] =   $company->where('emp_id =',$emp_id)->first();
                        
                         
                         
                        
                        //based on the  emp_id(we are fetching the personal info)
                        
                         
                        $info = new PersonalInfoModel();
                
                       
                 
                         $data['info'] = $info->where('emp_company_ref_id =',$emp_id)->first();
                          
                    
                       
                        //echo json_encode($data);
                         
                
               $html = view('grievancesinfo/reports',$data);
                
                
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
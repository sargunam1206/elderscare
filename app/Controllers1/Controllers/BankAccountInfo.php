<?php

namespace App\Controllers;
use App\Models\BankAccountInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\PersonalInfoModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class BankAccountInfo extends BaseController
{

            public function index()
            {
                helper(['url']);
                

                $info= new PersonalInfoModel();
                $info->where('emp_deleted_on =',null);
                $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="bank"; 
                return view('bankaccountinfo/index',$data);
            }
           

            public function store()
            {

                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);


                $rules = [
                    'bankaccount_name_as_per_bank' => 'required',
                    /*'bankaccount_accountno' => 'required',
                    'bankaccount_ifscno' => 'required',
                    'bankaccount_bankname' => 'required',
                    'bankaccount_branchname' => 'required',
                    'bankaccount_passbookcheck_filename' => 'required',
                    'bankaccount_created_on' => 'required'*/
                ];
                
                 $users= new BankAccountInfoModel();
                $users->where('emp_id =',$this->request->getPOST('emp_id'));
                    $users->where('bankaccount_deleted_on =',null);
                    $id_check_delete=$users->orderBy('bankaccount_id', 'ASC')->find();
                    
                   
                        if(isset($id_check_delete[0])){
                            $rules = [
                         
                          
                           'emp_id' => "required|is_unique[bankaccount_info.emp_id]",
                 
                           ];
                           
                           
                        }else{
                            $rules = [
                         
                          
                           'emp_id' => "required",
                 
                           ];
                        }
                  
                if($this->validate($rules)){
                        
                        $users= new BankAccountInfoModel();
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        if($this->request->getFile('bankaccount_passbookcheck_filename')!=''){
                           $img_bank = $this->request->getFile('bankaccount_passbookcheck_filename');
                            $filepath_bank = 'public/'. $img_bank->getName();
                            $img_bank->move(ROOTPATH . 'public');
                            $data['file_bank']= $filepath_bank;
                       }
                       else{
                             $data['file_bank']=null;
                        }
                        
                        $data=[
                                'bankaccount_name_as_per_bank' => $this->request->getPOST('bankaccount_name_as_per_bank'),
                                'bankaccount_accountno' =>$this->request->getPOST('bankaccount_accountno'),
                                'bankaccount_ifscno' =>$this->request->getPOST('bankaccount_ifscno'),
                                'bankaccount_bankname' =>$this->request->getPOST('bankaccount_bankname'),
                                'bankaccount_branchname' =>$this->request->getPOST('bankaccount_branchname'),
                                'bankaccount_passbookcheck_filename' =>$data['file_bank'],
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'bankaccount_created_on' =>$date
                        ];



                        $users->save($data);


                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully'); 
                        

                        $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="bank"; 
                        return view("bankaccountinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     $session= \Config\Services::session();
                    $session->setFlashdata('failed', 'Already Registered'); 

                      $info= new PersonalInfoModel();
                      $info->where('emp_deleted_on =',null);
                      $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                      $data['page']="bank"; 
                      return view("bankaccountinfo/index",$data);
                }
                
            }
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
               
                  $data['page']="bank"; 
                  
                   $users=new BankAccountInfoModel();
                   $session=session();
                  
                  if($session->get('role')==1){
                     $users->where('bankaccount_deleted_on =',null);
                     $data['users'] = $users->orderBy('emp_id', 'ASC')->findAll();
                  }elseif($session->get('role')==2){
                      $department=$session->get('department');
                      
                      $company = new CompanyWorkInfoModel();
                      $company->where('companywork_department =',$department);
                      $company->where('companywork_deleted_on =',null);
                      $department_employee = $company->orderBy('emp_id', 'ASC')->findAll();
                     foreach($department_employee as $singledata){
                       
                         $users->where('emp_id =',$singledata['emp_id']);
                         $data['users'][] = $users->where('emp_id =',$singledata['emp_id'])->first();
                       
                     }
                    
                      
                  }
                  elseif($session->get('role')==3){
                      
                     $id=$session->get('emp_id');
                    
                     $data['users'][] =$users->where('emp_id',$id)->first();
                     
                  }
                  return view('bankaccountinfo/view',$data);
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new BankAccountInfoModel();
                $data['user']=$users->where('bankaccount_id',$base)->first();
                  $info= new PersonalInfoModel();
                        $info->where('emp_deleted_on =',null);
                        $data['emp_id'] = $info->orderBy('emp_id', 'ASC')->findAll();
                        $data['page']="bank"; 
                return view("bankaccountinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new BankAccountInfoModel();
                $id = $this->request->getVar('bankaccount_id');
                
                 if($this->request->getFile('bankaccount_passbookcheck_filename')!=''){
                           $img_bank = $this->request->getFile('bankaccount_passbookcheck_filename');
                            $filepath_bank = 'public/'. $img_bank->getName();
                            $img_bank->move(ROOTPATH . 'public');
                            $data['file_bank']= $filepath_bank;
                       }
                   
                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");

                        $data=[
                            'bankaccount_name_as_per_bank' => $this->request->getPOST('bankaccount_name_as_per_bank'),
                                'bankaccount_accountno' =>$this->request->getPOST('bankaccount_accountno'),
                                'bankaccount_ifscno' =>$this->request->getPOST('bankaccount_ifscno'),
                                'bankaccount_bankname' =>$this->request->getPOST('bankaccount_bankname'),
                                'bankaccount_branchname' =>$this->request->getPOST('bankaccount_branchname'),
                                'emp_id' =>$this->request->getPOST('emp_id'),
                                'bankaccount_updated_on' =>$date
                        ];
                        
                      if(isset($filepath_bank)){
                        if($filepath_bank!=''){
                            
                            $data['bankaccount_passbookcheck_filename'] =$filepath_bank;
                            
                        }
                      }
                    $users->where('bankaccount_id',$id)->update($id,$data);

                    $data['users']=$users->orderBy('bankaccount_id', 'ASC')->findAll();
                    $data['page']="bank"; 
                    helper(['url']);
                    return redirect()->to('viewbankaccountdetails'); 

               
           
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
                            
                          
                            'bankaccount_deleted_on' => $date,
                        ];
                
                $users= new BankAccountInfoModel();
                $users->where('bankaccount_id', $base)->update($base,$data);
                $users->where('bankaccount_deleted_on =',null);
                $data['users']=$users->orderBy('bankaccount_id', 'ASC')->findAll();
                $data['page']="bank"; 
                helper(['url']);
                return redirect()->to('viewbankaccountdetails'); 


            }


        public function pdf(){
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
            
               if(isset($_GET['filename'])){ 
                   if($_GET['filename']!=''){
                    $filePath =WRITEPATH .$_GET['filename'];
              
                    $imageExtention = pathinfo($_GET['filename'], PATHINFO_EXTENSION);
              
                    if($imageExtention=='jpg' or $imageExtention=='jpeg' or $imageExtention=='png'){
                        $type='image/'.$imageExtention;
                    }elseif($imageExtention=='pdf'){
                       $type='application/'.$imageExtention;
                    }
        
                   // Check if the file exists
               
                   if (file_exists($filePath)) {
                   
                   
                   $fileContents = file_get_contents($filePath);
                   
                      
                      $pdfFile = new File($filePath);
               
                      
                    
                    // Set the response content type
                       $response = service('response');
                       
                       $response->setContentType($type);
               
                       // Output the PDF content
                       $response->setBody($fileContents);
               
                       return $response;
                   }}
                   else {
                    // File not found
                    
                    
                  
                         $session= \Config\Services::session();
                         $session->setFlashdata('failed', 'File not Available'); 
                          $info = new BankAccountInfoModel();
                          $info->where('bankaccount_deleted_on =',null);
                          $data['info'] = $info->orderBy('bankaccount_id', 'ASC')->findAll();
                          $data['page']="bank";
                           helper(['url']);
                          return redirect()->to('viewbankaccountdetails'); 
                }
              
                
                }else {
                    // File not found
                    
                    
                  
                         $session= \Config\Services::session();
                         $session->setFlashdata('failed', 'File not Available'); 
                          $info = new BankAccountInfoModel();
                          $info->where('bankaccount_deleted_on =',null);
                          $data['info'] = $info->orderBy('bankaccount_id', 'ASC')->findAll();
                          $data['page']="bank";
                           helper(['url']);
                          return redirect()->to('viewbankaccountdetails'); 
                }

        }



}
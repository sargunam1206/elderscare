<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\PersonalInfoModel;
use App\Models\CompanyWorkInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;


class PersonalInfo extends BaseController
{

            public function index()
            {
                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);
                $data=array();
                $data['page']="user"; 
                return view('personalinfo/index',$data);
            }
             public function add_user()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                $data['page']="user"; 
                return view('users/add_user',$data);
            }

            public function store()
            {

                helper(['form']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);


                $rules = [
                    'emp_company_ref_id' => 'required',
                    'emp_name' => 'required',
                   
                    /*'emp_dob' => '',
                    'emp_mobile_no' => '',
                    'emp_personal_emailid' => '',
                    'emp_aadharno' => '',
                    'emp_name_asper_aadhar' => '',
                    'emp_panno' => '',
                    'emp_ name_asper_pan' => '',
                    'emp_father_name' => '',
                    'emp_present_address_1' => '',
                    'emp_present_address_2' => '',
                    'emp_present_address_3' => '',
                    'emp_present_address_4' => '',
                    'emp_permanent_address_1' => '',
                    'emp_permanent_address_2' => '',
                    'emp_permanent_address_3' => '',
                    'emp_permanent_address_4' => '',
                    'emp_martial_status' => '',
                    'emp_marriage_date' => '',
                    'emp_blood_group' => '',
                    'emp_photo_filename' =>[
                    'label' => 'Image File',
                    'rules' => [
                            'uploaded[emp_photo_filename]',
                    
                            'mime_in[emp_photo_filename,application/pdf]',
                            'max_size[emp_photo_filename,1000]',
                   
                   
                    ],
                    ],
                    'emp_aadhar_filename' => '',
                    'emp_pan_filename'=> ''*/
                    
                ];
                  
                if($this->validate($rules)){
                        
                        $users= new PersonalInfoModel();
                        
                        date_default_timezone_set('Asia/Kolkata');
                        $date=date("Y-m-d H:i:s");
                        
                        
                        
                        
                        
                        $id=$this->request->getPOST('emp_company_ref_id');
                        
                      if($this->request->getFile('emp_aadhar_filename')!=''){
                           $img_aadhar = $this->request->getFile('emp_aadhar_filename');
                            $filepath_aadhar = 'public/'. $img_aadhar->getName();
                            $img_aadhar->move(ROOTPATH . 'public');
                            $data['file_aadhar']= $filepath_aadhar;
                       }
                       else{
                             $data['file_aadhar']=null;
                        }
                         if($this->request->getFile('emp_photo_filename')!=''){
                           $img_photo = $this->request->getFile('emp_photo_filename');
                            $filepath_photo = 'public/'. $img_photo->getName();
                            $sts=$img_photo->move(ROOTPATH . 'public');
                            echo $sts;
                            $data['file_photo']= $filepath_photo;
                        }
                         else{
                             $data['file_photo']=null;
                        }
                         if($this->request->getFile('emp_pan_filename')!=''){
                            $img_pan = $this->request->getFile('emp_pan_filename'); 
                            $filepath_pan = 'public/'. $img_pan->getName();
                            $img_pan->move(ROOTPATH . 'public');
                            $data['file_pan']= $filepath_pan;
                        }
                         else{
                             $data['file_pan']=null;
                        }
                       
                        $data=[
                            'emp_company_ref_id' =>$this->request->getPOST('emp_company_ref_id'),
                            'emp_name' =>$this->request->getPOST('emp_name'),
                            'emp_dob' => $this->request->getPOST('emp_dob'),
                            'emp_mobile_no' => $this->request->getPOST('emp_mobile_no'),
                            'emp_personal_emailid' => $this->request->getPOST('emp_personal_emailid'),
                            
                            'emp_aadharno' =>$this->request->getPOST('emp_aadharno'),
                            'emp_name_asper_aadhar' =>$this->request->getPOST('emp_name_asper_aadhar'),
                            'emp_panno' =>$this->request->getPOST('emp_panno'),
                            'emp_name_asper_pan' =>$this->request->getPOST('emp_name_asper_pan'),
                            'emp_father_name' => $this->request->getPOST('emp_father_name'),
                            'emp_present_address_1' => $this->request->getPOST('emp_present_address_1'),
                            'emp_present_address_2' => $this->request->getPOST('emp_present_address_2'),
                            'emp_present_address_3' => $this->request->getPOST('emp_present_address_3'),
                            'emp_present_address_4' => $this->request->getPOST('emp_present_address_4'),
                            'emp_permanent_address_1' => $this->request->getPOST('emp_permanent_address_1'),
                            'emp_permanent_address_2' => $this->request->getPOST('emp_permanent_address_2'),
                            'emp_permanent_address_3' => $this->request->getPOST('emp_permanent_address_3'),
                            'emp_permanent_address_4' => $this->request->getPOST('emp_permanent_address_4'),
                            'emp_martial_status' => $this->request->getPOST('emp_martial_status'),
                            'emp_marriage_date' => $this->request->getPOST('emp_marriage_date'),
                            'emp_blood_group' => $this->request->getPOST('emp_blood_group'),
                            'emp_photo_filename' =>$data['file_photo'],
                            'emp_aadhar_filename' =>$data['file_aadhar'],
                            'emp_pan_filename' => $data['file_pan'],
                            'company_resign_empsts' =>$this->request->getPOST('company_resign_empsts'),
                            'emp_created_on'=>$date,
                            'emp_updated_on'=>$date
                        ];



                        $users->save($data);
                      

                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Registered successfully');
                        $data['page']="user"; 
                        return view("personalinfo/index",$data);


                }else{
                     $data['validation']= $this->validator->getErrors();
                     $data['page']="user"; 
                      return view("personalinfo/index",$data);
                }
                
            }
            
            
            public function view()
            {
                
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                
                
                  $info = new PersonalInfoModel();
                
                  $data['page']="user"; 
                  
                  $session=session();
                  
                  if($session->get('role')==1){
                     $info->where('emp_deleted_on =',null);
                     $data['info'] = $info->orderBy('emp_id', 'ASC')->findAll();
                  }elseif($session->get('role')==2){
                      $department=$session->get('department');
                      
                      $company = new CompanyWorkInfoModel();
                      $company->where('companywork_department =',$department);
                      $company->where('companywork_deleted_on =',null);
                      $department_employee = $company->orderBy('emp_id', 'ASC')->findAll();
                     foreach($department_employee as $singledata){
                         
                         $info->where('emp_company_ref_id =',$singledata['emp_id']);
                         $data['info'][] = $info->where('emp_company_ref_id =',$singledata['emp_id'])->first();
                         
                     }
                    
                      
                  }
                  elseif($session->get('role')==3){
                      
                     $id=$session->get('emp_id');
                    
                     $data['info'][] =$info->where('emp_company_ref_id',$id)->first();
                     
                  }
                  
                // echo json_encode($data);
                return view('personalinfo/view',$data);
            }
            
             public function edit($id=null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $base=base64_decode(base64_decode(base64_decode($id)));
                $users=new PersonalInfoModel();
                $data['user']=$users->where('emp_id',$base)->first();
                 $data['page']="user"; 
                return view("personalinfo/edit",$data);

            }

            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new PersonalInfoModel();
                $id = $this->request->getVar('emp_id');

                   date_default_timezone_set("Asia/Kolkata");
                    $date = date("Y-m-d h:i:s");
                      
                     
                        
                      if($this->request->getFile('emp_aadhar_filename')!=''){
                           $img_aadhar = $this->request->getFile('emp_aadhar_filename');
                            $filepath_aadhar = 'public/'. $img_aadhar->getName();
                            $img_aadhar->move(ROOTPATH . 'public');
                            $data['file_aadhar']= $filepath_aadhar;
                           
                       }
                       else{
                             //$data['file_aadhar']=null;
                        }
                       if($this->request->getFile('emp_photo_filename')!=''){
                          
                           $img_photo = $this->request->getFile('emp_photo_filename');
                            $filepath_photo = 'public/'. $img_photo->getName();
                            
                            $img_photo->move(ROOTPATH . 'public');
                            
                            $data['file_photo']= $filepath_photo;
                            
                            $data['emp_photo_filename']=$filepath_photo;
                            
                        }
                         else{
                            // $data['file_photo']=null;
                        }
                         if($this->request->getFile('emp_pan_filename')!=''){
                            $img_pan = $this->request->getFile('emp_pan_filename'); 
                            $filepath_pan = 'public/'. $img_pan->getName();
                            $img_pan->move(ROOTPATH . 'public');
                            $data['file_pan']= $filepath_pan;
                        }
                         else{
                            // $data['file_pan']=null;
                        }
                       



                        $data=[
                           'emp_company_ref_id' =>$this->request->getPOST('emp_company_ref_id'),
                            'emp_name' =>$this->request->getPOST('emp_name'),
                            'emp_dob' => $this->request->getPOST('emp_dob'),
                            'emp_mobile_no' => $this->request->getPOST('emp_mobile_no'),
                            'emp_personal_emailid' => $this->request->getPOST('emp_personal_emailid'),
                            
                            'emp_aadharno' =>$this->request->getPOST('emp_aadharno'),
                            'emp_name_asper_aadhar' =>$this->request->getPOST('emp_name_asper_aadhar'),
                            'emp_panno' =>$this->request->getPOST('emp_panno'),
                            'emp_name_asper_pan' =>$this->request->getPOST('emp_name_asper_pan'),
                            'emp_father_name' => $this->request->getPOST('emp_father_name'),
                            'emp_present_address_1' => $this->request->getPOST('emp_present_address_1'),
                            'emp_present_address_2' => $this->request->getPOST('emp_present_address_2'),
                            'emp_present_address_3' => $this->request->getPOST('emp_present_address_3'),
                            'emp_present_address_4' => $this->request->getPOST('emp_present_address_4'),
                            'emp_permanent_address_1' => $this->request->getPOST('emp_permanent_address_1'),
                            'emp_permanent_address_2' => $this->request->getPOST('emp_permanent_address_2'),
                            'emp_permanent_address_3' => $this->request->getPOST('emp_permanent_address_3'),
                            'emp_permanent_address_4' => $this->request->getPOST('emp_permanent_address_4'),
                            'emp_martial_status' => $this->request->getPOST('emp_martial_status'),
                            'emp_marriage_date' => $this->request->getPOST('emp_marriage_date'),
                            'emp_blood_group' => $this->request->getPOST('emp_blood_group'),
                            'company_resign_empsts' =>$this->request->getPOST('company_resign_empsts'),
                            'emp_updated_on'=>$date
                            
                        ];
                         
                    if(isset($filepath_photo)){
                        if($filepath_photo!=''){
                            
                            $data['emp_photo_filename'] =$filepath_photo;
                            
                        }
                        
                    }
                     if(isset($filepath_aadhar)){
                        if($filepath_aadhar!=''){
                               $data['emp_aadhar_filename'] =$filepath_aadhar;
                        }
                        
                    }
                     if(isset($filepath_pan)){
                        if($filepath_pan!=''){
                            $data['emp_pan_filename']=$filepath_pan;
                        }
                        
                    }
                    
                    $datas=$users->where('emp_id',$id)->update($id,$data);
                    
                    if(isset($datas)){
                        $session= \Config\Services::session();
                        $session->setFlashdata('success', 'Updated successfully'); 
                    }else{
                        
                    }
                    $users->where('emp_deleted_on =',null);
                    $data['info']=$users->orderBy('emp_id', 'ASC')->findAll();
                    $data['page']="user"; 
                   
                    helper(['url']);
                   return redirect()->to('viewempperdetails'); 
                    
               
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

                            'emp_deleted_on' => $date,
                        ];
                
                $users= new PersonalInfoModel();
                $users->where('emp_id', $base)->update($base,$data);
                $users->where('emp_deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                $data['info']=$users->orderBy('emp_id', 'ASC')->findAll();
                $data['page']="user";
                helper(['url']);
                return redirect()->to('viewempperdetails'); 


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
                          $info = new PersonalInfoModel();
                          $info->where('emp_deleted_on =',null);
                          $data['info'] = $info->orderBy('emp_id', 'ASC')->findAll();
                          $data['page']="user";
                           helper(['url']);
                          return redirect()->to('viewempperdetails'); 
                }
              
                
                }else {
                    // File not found
                    
                    
                  
                         $session= \Config\Services::session();
                         $session->setFlashdata('failed', 'File not Available'); 
                         $info = new PersonalInfoModel();
                         $info->where('emp_deleted_on =',null);
                          $data['info'] = $info->orderBy('emp_id', 'ASC')->findAll();
                          $data['page']="user";
                           helper(['url']);
                           return redirect()->to('viewempperdetails'); 
                }

        }




}
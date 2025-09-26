<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use App\Models\PersonalInfoModel;
use App\Models\BankAccountInfoModel;
use App\Models\EducationalInfoModel;
use App\Models\CompanyWorkInfoModel;
use App\Models\EmploymentInfoModel;
use App\Models\CompanyResignInfoModel;
use App\Models\LeaveInfoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;



class Reports extends BaseController
{

            public function reports()
            {
                /*$mpdf = new \Mpdf\Mpdf();
                $html = $this->load->view('genpdf_view',[],true);
                $mpdf->WriteHTML($html);
                $mpdf->Output();*/
                helper(['url']);
                
                return view('reports/reports');
            }
            
            
             public function reportsdefault()
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                $id=$this->request->getPOST('emp_company_ref_id');
                echo  $id;
                //PersonalInfo
               $mpdf = new \Mpdf\Mpdf();
                $info = new PersonalInfoModel();
                
                $info->where('emp_deleted_on =',null);
                $info->where('emp_company_ref_id =',$id);
                 
                $data['info'] = $info->orderBy('emp_company_ref_id', 'ASC')->find();
                
                $emp_id=$data['info'][0]['emp_id'];
               
                //bank account info
                  $bank = new BankAccountInfoModel();
                
                 $bank->where('bankaccount_deleted_on =',null);
                 $bank->where('emp_id =',$id);
                 
                 $data['bank'] = $bank->orderBy('emp_id', 'ASC')->find();
                  
                //educational details
                
                 $educational = new EducationalInfoModel();
                
                 $educational->where('edu_deleted_on =',null);
                 $educational->where('emp_id =',$id);
                 
                 $data['educational'] = $educational->orderBy('edu_id', 'ASC')->find();
                 
                
                 $html = view('reports/reports',$data);
                
                  
                  
                //Company work details

                $company = new CompanyWorkInfoModel();
                
                 $company->where('companywork_deleted_on =',null);
                 $company->where('emp_id =',$id);
                 
                 $data['company'] = $company->orderBy('emp_id', 'ASC')->find();
                
                 $html = view('reports/reports',$data);
                
                
                //employment work details

                 $employment= new EmploymentInfoModel();
                
                 $employment->where('employment_deleted_on =',null);
                 $employment->where('emp_id =',$id);
                 
                 $data['employment'] = $employment->orderBy('emp_id', 'ASC')->find();
                 
                
                 $html = view('reports/reports',$data);
                 
                   //resign work details

               $resign= new CompanyResignInfoModel();
                
              $resign->where('company_resign_deleted_on=',null);
                 $resign->where('emp_id =',$id);
                 
                 $data['resign'] = $resign->orderBy('emp_id', 'ASC')->find();
                 
                
                //leave details

                 $leave= new LeaveInfoModel();
                
                 $leave->where('leave_deleted_on =',null);
                 $leave->where('emp_id =',$id);
                 
                 $data['leave'] = $leave->orderBy('emp_id', 'ASC')->find();
                
                 $html = view('reports/reports',$data);
                
                /////////////////
                $mpdf->WriteHTML($html);

                $pdfContent = $mpdf->Output('', 'S');

                $response = \Config\Services::response();
                $response->setHeader('Content-Type', 'application/pdf');
                $response->setHeader('Content-Disposition', 'inline; filename="employee.pdf"');

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
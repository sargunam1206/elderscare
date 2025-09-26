<?php
namespace App\Controllers;
use App\Models\BloodBankDonorsModel;
use App\Models\DistrictModel;
use App\Models\RequestHistoryModel;


use Twilio\Rest\Client;

use Mpdf\Mpdf;

class BloodDonors extends BaseController
{

            public function index()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                helper(['url']);

                $users = new BloodBankDonorsModel();

                $data['users'] = $users->orderBy('dod', 'DESC')->findAll();
                return view('users/donors_table',$data);
            }
			

			public function new_donor()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $district = new DistrictModel();

                $data['districts'] = $district->findAll();
                return view('users/add_donor',$data);
            }


            public function add_donor()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                        $users= new BloodBankDonorsModel();

                        $data=[
                            'fullname' =>$this->request->getPOST('fullname'),
                            'address' =>$this->request->getPOST('address'),
                            'email' =>$this->request->getPOST('email_id'),
                            'phone_number' => $this->request->getPOST('phone_number'),
                            'blood_group' => $this->request->getPOST('blood_group'),
                            'collection_center' => $this->request->getPOST('collection_center'),
                            'dod' => $this->request->getPOST('dob'),
                            'donated_count' => $this->request->getPOST('donated_count'),
                            'blood_bank_message' => $this->request->getPOST('blood_bank_message')
                        ];

                        $users->save($data);
                        $data['users'] = $users->orderBy('dod', 'DESC')->findAll();
                        return view("users/donors_table",$data);
               
            }


            public function edit_donor($id=null)
            {
                # code...
                $users= new BloodBankDonorsModel();

                $data['user']=$users->where('id',$id)->first();
 
                return view("users/edit_donor",$data);
            }



             public function update_donor()
            {
                # code...
                $users= new BloodBankDonorsModel();

                $id= $this->request->getVar('id');

                $data=[
                            'fullname' =>$this->request->getPOST('fullname'),
                            'address' =>$this->request->getPOST('address'),
                            'email' =>$this->request->getPOST('email_id'),
                            'phone_number' => $this->request->getPOST('phone_number'),
                            'blood_group' => $this->request->getPOST('blood_group'),
                            'collection_center' => $this->request->getPOST('collection_center'),
                            'dod' => $this->request->getPOST('dob'),
                            'donated_count' => $this->request->getPOST('donated_count'),
                            'blood_bank_message' => $this->request->getPOST('blood_bank_message')
                        ];


                $users->where('id',$id)->update($id,$data);

                $data['users']= $users->orderBy('dod', 'DESC')->findAll();
                return view("users/donors_table",$data);
            }


            public function delete($id = null)
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                $users = new BloodBankDonorsModel();
                $request = new RequestHistoryModel();
            
                // Delete records from RequestHistoryModel associated with the donor ($id)
                $request->where('donors_id', $id)->delete();
            
                // Delete the donor record from BloodBankDonorsModel
                $users->where('id', $id)->delete();
            
                $data['users'] = $users->orderBy('dod', 'DESC')->findAll();
                return view("users/donors_table", $data);
            }




            public function report_view()
            {
                # code...

                $users= new BloodBankDonorsModel();

                $data['users'] = $users->orderBy('dod', 'DESC')->findAll();
                return view("users/reports_table",$data);
            }

            public function search()
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $users= new BloodBankDonorsModel();


                $date = $this->request->getPOST('date');
                $name = $this->request->getPOST('name');

                $bothdata = $users->search($date,$name);
                $onlydate = $users->searchdate($date);
                $onlyname = $users->searchname($name);



                $data = $users->orderBy('dod', 'DESC')->findAll();

                return view("users/reports_table", ['onlydate' => $onlydate,
                                                    'users' => $data,
                                                    'onlyname' => $onlyname,
                                                    'bothdata' => $bothdata,
                                      ]);

            }



            public function download($id = null)
            {
                // Set error reporting
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                
                // Create mPDF object
                $mpdf = new \Mpdf\Mpdf();
                $mpdf->AddPage('L');

                // Fetch data from the database
                $users = new BloodBankDonorsModel();
                $data6 = '';

                $data = $users->find($id);

                if (!$data) {
                    return redirect()->to('/not-found');
                }


            $pdfcontent = '<h1 style="text-align:center;height:50px;">Blood Donated Reports</h1>
                <ul style="justify-content:center;">
                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 7px;">Donors Register No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $data['id'].'</li>

                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 15px;">Donor Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $data['fullname'].'</li>

                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 15px;">Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $data['blood_group'].'</li>

                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 22px;">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $data['address'].'</li>

                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 19px;">Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $data['email'].'</li>

                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 27px;">Phone Number&nbsp;&nbsp;&nbsp;&nbsp;'.$data['phone_number'].'</li>

                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 10px;">Date of Donation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $newDate = date("d-m-Y", strtotime($data['dod'])).'</li>
                <li style="margin-left:200px;height:50px;font-size:20px;list-style-type: none;word-spacing: 10px;">Collection Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $data['collection_center'].'</li>
                
                </ul><h2 style="text-align:center;color:red;height:150px;list-style-type: none;">Thank You for Donating!!!</h2>';

                // Write HTML content to PDF
                   $mpdf->WriteHTML($pdfcontent);             

                   $pdfContent = $mpdf->Output('', 'S'); // 'S' parameter returns the PDF as a string

                    // Set appropriate headers to display PDF in browser
                    header('Content-Type: application/pdf');
                    header('Content-Disposition: inline; filename="filename.pdf"'); // Specify the filename here

                    // Output PDF content to browser
                    echo $pdfContent;
                    exit();
            }



            public function request($id=null)
            {
                # code...

                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users= new BloodBankDonorsModel();
                $data=$users->find($id);


                $accountSid = 'AC189029f38a7d5a20a521dc291c03e9c0';
                $authToken = 'e04e65a327839660b154fc63ff2de524';

                $twilio = new Client($accountSid, $authToken);

                $fromNumber = '+12055390124';
                $toNumber ='+919597842418';// $data['phone_number'];  
                $message = 'Blood request for operation patient , urgently we need a '.$data['blood_group'] .' blood 1 unit,Please help us!';

                $sms = $twilio->messages->create(
                    $toNumber,
                    [
                        'from' => $fromNumber,
                        'body' => $message,
                    ]
                );

                if ($sms->sid) {
                        echo "<script>";
                        echo "alert('SMS sent successfully!')";
                        echo "</script>";

                        $request= new RequestHistoryModel();

                        $date=date("Y-m-d h:i:sa");
                        $donors_id=$data['id'];

                        $request_data=['send_request_date'=>$date,
                                        'donors_id' =>$donors_id,
                        ];

                        // echo json_encode($request_data);
                        $request->save($request_data);

                        $data1['users'] = $users->orderBy('dod', 'DESC')->findAll();
                        return view("users/donors_table",$data1);
                } else {
                        echo "<script>";
                        echo "alert('Failed to send SMS.')";
                        echo "</script>";
                        return view('users/donors_table',$data1);
                }

            }
    

            public function message($id = null)
            {
                # code...
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
            
                $users = new BloodBankDonorsModel();
                $data = $users->find($id);
            
                $to = $data['phone_number'];
            
                $sid = "AC189029f38a7d5a20a521dc291c03e9c0";
                $token = "e04e65a327839660b154fc63ff2de524";
            
                $twilio = new Client($sid, $token);
            
                try {
                    $message = $twilio->messages
                        ->create("whatsapp:".$to,
                            array(
                                "from" => "whatsapp:+14155238886",
                                "body" => "Your appointment is coming up on July 21 at 3PM"
                            )
                        );
            
                    if ($message->sid) {
                        echo "<script>";
                        echo "alert('Message sent successfully!')";
                        echo "</script>";
                    } else {
                        echo "<script>";
                        echo "alert('Failed to send Message.')";
                        echo "</script>";
                    }
                } catch (Exception $e) {
                    echo "<script>";
                    echo "alert('Error: ".$e->getMessage()."')";
                    echo "</script>";
                }
            
                $data1['users'] = $users->orderBy('dod', 'DESC')->findAll();
                return view("users/donors_table", $data1);
            }




}


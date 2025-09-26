<?php
 
namespace App\Controllers;
use App\Models\BloodBankDonorsModel;
use App\Models\DistrictModel;

class BloodDetails extends BaseController
{

            public function index($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();

                 $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }

            public function index1($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();              
    
                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }


            public function Opos($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();               
                
                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }

            public function Oneg($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();

                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }

            public function Aneg($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();
                
                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }

            public function Bneg($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();

                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }


            public function ABpos($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();
                
                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }
            


            public function ABneg($id)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();

                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];

                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }


                $data=$users->where('blood_group',$id_value)->findAll();
                
                return view('users/blood_details',['user'=>$data,
                                                    'group'=>$bl,
                                                    'id'=>$id_value
                                                    ]);
            }


            public function groups($id=null)
            {

                helper(['url']);
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                $users = new BloodBankDonorsModel();

                $b=['Apos','Bpos','Opos','ABpos','Aneg','Bneg','Oneg','ABneg'];
                
                $bl=['A+','B+','O+','AB+','A-','B-','O-','AB-'];


                $key = array_search($id, $b);
                // echo $key;

                if ($id==$b[$key]) {
                    
                    $id_value=$bl[$key];
                    // echo $id_value;

                }

                $data=$users->where('blood_group',$id_value)->findAll();

                return view('users/nav_details',['user'=> $data,
                                                    'group'=> $bl,
                                                    'id'=> $id_value
                                                    ]);
            }


        }
			

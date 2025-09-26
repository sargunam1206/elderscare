


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css" media="all">
        td {
            /*border: 1px solid #111;*/
            padding: 8px;
            text-align: left;
            height: 50px; /* Adjust the height as needed */
            
        }

        table {
            width: 100%; /* set the width of the table */
            
            
        }

    </style>
</head>
<body style="width:80%">
<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(1);

//educational info
$degree=$educational[0]['edu_final_degree_cert_filename'];
$resume=$educational[0]['edu_resume_filename'];

//personal info
$photo=$info[0]['emp_photo_filename'];
$aadhar=$info[0]['emp_aadhar_filename'];
$pan=$info[0]['emp_pan_filename'];

?>

<div class="container">
    
    
        <table>
            <tbody>
                <tr>
                    <td class="text_bold first-child">
                        <strong style="color:#40b8b8;font-size:30px"> Department:</strong> <span style="font-size:30px;"><?= $department[0]['companywork_department'];?></span>  
                    </td>
                    <td class="text_bold text-right" align="right">
                       <img src="<?= base_url();?>/public/dist/img/new-logo-sapl.png" style="margin-left: 500px;height:80px;width: 150px;"><br>
                        <strong>SRINIVASAN ASSOCIATES PRIVATE LIMITED,</strong> <br />
                        14/2 & 4, Avinashi Road, Opp. Tiruppur Textiles,<br> Peelamedu,<br> Coimbatore 641 004
                    </td>
                </tr>
     
            </tbody>
        </table>

        <h3 class="card-title">Department Based-Employee Info</h3>
   
                 <table id="example1" border="1" style="border: 1px solid black;border-collapse: collapse;">
                  <thead class="text-center" style="background-color: #82c4c4;" >
                  <tr>
                    <th>S.No.</th>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>Personal Email ID</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Site</th>
                    <th>Official Mail</th>
                    <th>Total Experience</th>
                    <th>Qualification</th>
                    <th>PF No</th>
                    <th>Bank Name</th>
                    
                  </tr>
                  </thead>
                  <tbody >
                    <?php 
                   $count=$count-1;
                  $i=0;
                  for($i=0;$i<=$count;$i++) { 
                      
                     $sno=$i+1;
                     $previous=$educational[$i]['edu_total_experience'];
                     $current=$department[$i]['companywork_exp_duration'];
                     $total_exp=(int)$previous+(int)$current;
                    ?>
                  <tr >
                      <td  class="text-center"><?= $sno;?></td>
                        <td><?= $info[$i]['emp_company_ref_id'];?></td>
                       <td><?= $info[$i]['emp_name'];?></td>
                       <td><?= $info[$i]['emp_personal_emailid'];?></td>
                       <td><?= $department[$i]['companywork_desg'];?></td>
                       <td><?= $department[$i]['companywork_department'];?></td>
                       <td><?= $department[$i]['companywork_site'];?></td>
                       <td><?= $department[$i]['companywork_official_email'];?></td>
                       <td><?= $total_exp;?></td>
                       <td><?= $educational[$i]['edu_qualification'];?></td>
                       <td><?= $employment[$i]['employment_pf_no'];?></td>
                       <td><?= $bank[$i]['bankaccount_bankname'];?></td>
                       
                      
                       
                       
                  </tr>
                  <?php 
                  } ?>
       
                  </tbody>
                
                </table>


</div>

</body>
</html>

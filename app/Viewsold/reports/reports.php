


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css" media="all">
        td {
            /*border: 1px solid #000;*/
            padding: 8px;
            text-align: left;
            height: 50px; /* Adjust the height as needed */
        }

        table {
            width: 700px; /* set the width of the table */
        }

    </style>
</head>
<body>
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
                        <img src="<?= base_url().$info[0]['emp_photo_filename']; ?>" style="margin-left: 20px;height:150px;width:150px">     
                    </td>
                    <td class="text_bold text-right" align="right">
                       <img src="<?= base_url();?>/public/dist/img/new-logo-sapl.png" style="margin-left: 500px;height:80px;width: 150px;"><br>
                        <strong>SRINIVASAN ASSOCIATES PRIVATE LIMITED,</strong> <br />
                        14/2 & 4, Avinashi Road, Opp. Tiruppur Textiles,<br> Peelamedu,<br> Coimbatore 641 004
                    </td>
                </tr>
     
            </tbody>
        </table>

        <h3 class="card-title">Personal Info</h3>
   

        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                  
                            
                             
                             
                
                <tr >
                    <td class="first-child">
                       <b> Employee Id : </b> <?php echo $info[0]['emp_company_ref_id']; ?>
                       
                    </td>
                    <td>
                        <b>Present Address :</b>
                        <?php if($info[0]['emp_present_address_1']){ echo $info[0]['emp_present_address_1'].','; } ?>
                        <?php if($info[0]['emp_present_address_2']){ echo $info[0]['emp_present_address_2'].','; } ?>
                        <?php if($info[0]['emp_present_address_3']){ echo $info[0]['emp_present_address_3'].','; } ?>
                        <?php if($info[0]['emp_present_address_4']){ echo $info[0]['emp_present_address_4'].''; } ?>
                    </td>
                </tr>

                <tr>
                    <td> <b>Employe Name :</b> <?php echo $info[0]['emp_name']; ?></td>
                    <td><b>Permanent Address : </b>
                     <?php if($info[0]['emp_permanent_address_1']){ echo $info[0]['emp_permanent_address_1'].','; } ?>
                        <?php if($info[0]['emp_permanent_address_2']){ echo $info[0]['emp_permanent_address_2'].','; } ?>
                        <?php if($info[0]['emp_permanent_address_3']){ echo $info[0]['emp_permanent_address_3'].','; } ?>
                        <?php if($info[0]['emp_permanent_address_4']){ echo $info[0]['emp_permanent_address_4'].''; } ?>
                    </td>
                </tr>

                 <tr>
                    <td> <b>Date of Birth : </b><?php echo $info[0]['emp_dob']; ?></td>
                    <td><b>Martial Status :</b> <?php echo $info[0]['emp_martial_status']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Contact Number :</b><?php echo $info[0]['emp_mobile_no']; ?></td>
                    <td><b>Marriage Date :</b><?php echo $info[0]['emp_marriage_date']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Personal Email Id :</b> <?php echo $info[0]['emp_personal_emailid']; ?></td>
                    <td><b>Blood Group :</b> <?php echo $info[0]['emp_blood_group']; ?></td>
                </tr>

                <tr>
                    <td><b> Aaadhar Number: </b><?php echo $info[0]['emp_aadharno']; ?></td>
                    <td><b>Photo :</b> <img src="<?= base_url().$info[0]['emp_photo_filename']; ?>" style="height:50px;width: 70px;"> <a href="<?php if($photo!=''){ echo base_url().$photo; }  ?>" > Link </a></td>
                </tr>

                <tr>
                    <td><b> Name as Per Aadhar Card :</b> <?php echo $info[0]['emp_name_asper_aadhar']; ?></td>
                    <td><b>Aadhar : </b><img src="<?= base_url().$info[0]['emp_aadhar_filename']; ?>" style="height:50px;width: 150px;"><a href="<?php if($aadhar!=''){ echo base_url().$aadhar; }  ?>" > Link </a></td>
                </tr>

                <tr>
                    <td> <b>Pan Number :</b><?php echo $info[0]['emp_panno']; ?></td>
                    <td><b>Pan :</b><img src="<?= base_url().$info[0]['emp_pan_filename']; ?>" style="height:50px;width: 150px;"><a href="<?php if($pan!=''){ echo base_url().$pan; }  ?>" > Link </a> </td>
                </tr>

                <tr>
                    <td> <b>Name as Per Pan Card :</b><?php echo $info[0]['emp_name_asper_pan']; ?></td>
                    <td> <b> Father Name :</b><?php echo $info[0]['emp_father_name']; ?></td>
                </tr>
               
            </tbody>
        </table><br>
  

        <h3 class="card-title">Bank Account Details</h3>
        
   
   
        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr >
                    <td class="first-child">
                       <b> Name as per Bank : </b><?php echo $bank[0]['bankaccount_name_as_per_bank']; ?>
                    </td>
                    <td> <b>Account No :</b><?php echo $bank[0]['bankaccount_accountno']; ?></td>
                </tr>


                 <tr>
                    <td> <b>IFSC No : </b><?php echo $bank[0]['bankaccount_ifscno']; ?></td>
                    <td> <b>Bank Name :</b><?php echo $bank[0]['bankaccount_bankname']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Branch Name :</b><?php echo $bank[0]['bankaccount_branchname']; ?></td>
                    <td><b>Bank Passbook/Cheque leaf :</b>  <img src="<?= base_url().$bank[0]['bankaccount_passbookcheck_filename']; ?>" style="height:80px;width: 150px;"> <a href="<?= base_url().$bank[0]['bankaccount_passbookcheck_filename']; ?>"> Link </a></td>
                </tr>

            </tbody>
        </table>
       
        <h3 class="card-title"> Educational Details</h3>

        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr >
                    <td class="first-child">
                       <b> Qualification : </b><?php echo $educational[0]['edu_qualification']; ?>
                       
                    </td>
                    <td>
                        <b>Year of Completion :</b><?php echo $educational[0]['edu_year_of_completion']; ?>
                    </td>
                </tr>

                <tr>
                    
                    <td> <b>Final Degree certificate :</b><a href="<?php if($degree!=''){ echo base_url().$degree; }  ?>" > Link </a> </td>
                    <td><b>Resume : </b><a href="<?php if($resume!=''){ echo base_url().$resume; }  ?>"> Link </a></td>
                </tr>

                 <tr>
                    <td> <b>Experienced Company Name : </b><?php echo $educational[0]['edu_exp_companyname']; ?></td>
                    <td><b>Experienced Duration :</b><?php echo $educational[0]['edu_exp_duration']; ?> </td>
                </tr>

                 <tr>
                    <td> <b>Experienced Total Duration :</b> <?php echo $educational[0]['edu_total_experience']; ?></td>
                    <td><b>Last Working day of Previous Company :</b><?php echo $educational[0]['edu_last_working_day_date']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Expert In:</b> <?php echo $educational[0]['edu_expert_in']; ?></td>
                   
                </tr>

               
            </tbody>
        </table><br>

        <h3 class="card-title">Company Details</h3>

        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr >
                    <td class="first-child">
                       <b> Position in Last working Company : </b><?php echo $company[0]['companywork_position_of_join']; ?>
                       
                    </td>
                    <td><b>Interview Date:</b><?php echo $company[0]['companywork_interview_date']; ?></td>
                </tr>

                <tr>
                    <td> <b>Offer Letter Sent On :</b> <?php echo $company[0]['companywork_offerletter_senton']; ?></td>
                    <td><b>Date of Join : </b><?php echo $company[0]['companywork_dateof_join']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Designation : </b><?php echo $company[0]['companywork_desg']; ?></td>
                    <td><b>Site :</b> <?php echo $company[0]['companywork_site']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Department :</b><?php echo $company[0]['companywork_department']; ?></td>
                    <td><b>Official Mail :</b><?php echo $company[0]['companywork_official_email']; ?> </td>
                </tr>

                 <tr>
                    <td> <b>Expreienced Duration :</b><?php echo $company[0]['companywork_exp_duration']; ?></td>
                    <td><b>Expert in :</b> <?php echo $company[0]['companywork_expert_in']; ?> </td>
                </tr>

            </tbody>
        </table>
<br>

        <h3 class="card-title">Employment Details</h3>

        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr >
                    <td class="first-child">
                       <b> PF Number : </b><?php echo $employment[0]['employment_pf_no']; ?>
                       
                    </td>
                    <td><b>ESI Number:</b><?php echo $employment[0]['employment_esi_no']; ?></td>
                </tr>

                <tr>
                    <td><b>UAN Number :</b><?php echo $employment[0]['employment_uan_no']; ?></td>
                    <td><b>Gratuity Number : </b><?php echo $employment[0]['employment_gratuity_no']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Gratuity DOJ : </b><?php echo $employment[0]['employment_gratuity_doj']; ?></td>
                    <td><b>Status of Form F Gratuity :</b><?php echo $employment[0]['employment_sts_of_formf_gratuity']; ?></td>
                </tr>

                 <tr>
                    <td> <b>Status of Form 11 :</b><?php echo $employment[0]['employment_sts_of_form11']; ?></td>
                    <td><b>Are you pre PF member? :</b><?php echo $employment[0]['employment_pf_pre_mem']; ?></td>
                </tr>

                 <tr>
                    <td> <b>PF Declaration :</b><?php echo $company[0]['employment_pf_decl']; ?></td>
                </tr>

            </tbody>
        </table>

        <br>
        <br>
        <h3 class="card-title">Company Resign Details</h3>

        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr >
                    <td class="first-child">
                       <b> Letter Submit On : </b><?php echo $resign[0]['company_resign_letter_subon']; ?>
                       
                    </td>
                    <td><b>Notice Period Completed On? :</b><?php echo $resign[0]['company_resign_noperiod_com']; ?></td>
                </tr>

                <tr>
                    <td> <b>Bank Details : </b><?php echo $resign[0]['company_resign_final_sett_bank']; ?></td>
                    <td><b>No Due Certificte Completed? :</b><?php echo $resign[0]['company_resign_nodue_cert']; ?></td>
                </tr>

                 <tr>
                    <td><b>Amount :</b><?php echo $resign[0]['company_resign_final_sett_amount']; ?></td>
                    <td> <b>Date Of Leaving :</b><?php echo $resign[0]['company_resign_dateof_leaving']; ?></td>
                </tr>

            </tbody>
        </table>

        <br>

        <h3 class="card-title">Leave Details</h3>

        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr >
                    <td class="first-child">
                       <b> Casual leave : </b><?php echo $leave[0]['leave_cl']; ?>
                    </td>
                </tr>

                <tr>
                    <td><b>Sick Leave:</b><?php echo $leave[0]['leave_sl']; ?></td>
                </tr>

                 <tr>
                    <td><b>Earned Leave :</b><?php echo $leave[0]['leave_el']; ?></td>
                </tr>

            </tbody>
        </table>


</div>

</body>
</html>

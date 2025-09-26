


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


?>

<div class="container">
    
    
        <table>
            <tbody>
                <tr>
                    <td class="text_bold first-child">
                        <b><h2><i><center>SRINIVASAN ASSOCIATES PRIVATE LIMITED</center></i></h2></b>
                        <h2><center><u>Man Power Request Form</u></center></h2>
                    </td>
                   <!-- <td class="text_bold text-right" align="right">
                       <img src="<?= base_url();?>/public/dist/img/new-logo-sapl.png" style="margin-left: 500px;height:80px;width: 150px;"><br>
                        <strong>SRINIVASAN ASSOCIATES PRIVATE LIMITED,</strong> <br />
                        14/2 & 4, Avinashi Road, Opp. Tiruppur Textiles,<br> Peelamedu,<br> Coimbatore 641 004
                    </td>-->
                </tr>
     
            </tbody>
        </table>

        <h3><b>Date of Request:</b><?= date("d-m-Y",strtotime($request[0]['manpower_request_created_on'])) ?></h3>
        
   
   
        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr >
                    <td class="first-child">
                       <b>PROJECT NAME  </b>
                    </td>
                    <td> <?= $project_name['project_name'] ?></td>
                </tr>


                 <tr>
                    <td style="width:300px"> <b>DEPARTMENT  </b></td>
                     <td> <?= $department_name['department_name'] ?></td>
                </tr>

                 <tr>
                    <td> <b>VACANT JOB TITLE </b></td>
                    <td> <?= $request[0]['manpower_request_job_title'] ?></td>
                </tr>
                 <tr>
                    <td> <b>JOB HIRING TYPE</b></td>
                    <td> <?= $request[0]['manpower_request_job_hiretype'] ?></td>
                </tr>
                <tr >
                  
                    <td   valign="top" colspan="2" style="margin-top:1px;height:130px;">  <b>JUSTIFICATION FOR HIRING:</b>&nbsp;&nbsp;&nbsp;<?= $request[0]['manpower_request_justify'] ?>
                    </td>
                </tr>
                 <tr >
                  
                    <td  valign="top" colspan="2" style="margin-top:5px;height:120px;">  <b>MAJOR RESPONSIBILITY:</b>&nbsp;&nbsp;&nbsp;<?= $request[0]['manpower_request_major_res'] ?></td>
                </tr>
                <tr >
                  
                    <td   colspan="2" style="margin-top:5px;height:100px;">  <b>JOB SPECIFICATIONS / COMPETENCIES</b><br><br>
                      <b>Qualification &amp; Experience:</b> &nbsp;&nbsp;&nbsp;<?= $request[0]['manpower_request_qualification'] ?><br><br>
                      <b>Special Abilities:</b>&nbsp;&nbsp;&nbsp;<?= $request[0]['manpower_request_special_apilites'] ?><br><br>
                      <b>Personal Qualities:</b>&nbsp;&nbsp;&nbsp;<?= $request[0]['manpower_request_personal_quality'] ?>
                    </td>
                  
                </tr>
   
            </tbody>
        </table>
        <br>
                  <p><b>HOD SIGNATURE &amp; DATE</b></p>
<p>--------------------------------------------------------x-------------------------------------------------------</p>
<p><b>Head, HR &amp; Admin’s Comments (including current staff strength vis-à-vis
establishment &amp; proposed salary of recruitee</b></p>
<p>________________________________
</p> <br>
<p><b>SIGNATURE &amp; DATE</p><p align="right"><b>MANAGING DIRECTOR</b></p>

</div>

</body>
</html>

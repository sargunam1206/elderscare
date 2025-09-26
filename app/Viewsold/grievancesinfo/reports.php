


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
        tr{
            border:1;
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
                        <h1>Grievances</h1> 
                    </td>
                    <td class="text_bold text-right" align="right">
                       <img src="<?= base_url();?>/public/dist/img/new-logo-sapl.png" style="margin-left: 500px;height:80px;width: 150px;"><br>
                        <strong>SRINIVASAN ASSOCIATES PRIVATE LIMITED,</strong> <br />
                        14/2 & 4, Avinashi Road, Opp. Tiruppur Textiles,<br> Peelamedu,<br> Coimbatore 641 004
                    </td>
                </tr>
     
            </tbody>
        </table>

   

        <table >
            <tbody>
                  
                            
                             
            
                
                <tr>
                    <td><b>Employee Id</b></td> <td style="margin-left:5px"><?= $info['emp_company_ref_id']; ?></td>
                </tr>
                 <tr>
                    <td><b>Name</b></td> <td style="margin-left:5px"><?= $info['emp_name']; ?></td>
                </tr>
                <tr>
                    <td><b>Department</b></td> <td style="margin-left:5px"><?= $department['companywork_department']; ?></td>
                </tr>
                <tr>
                    <td><b>Designation</b></td> <td style="margin-left:5px"><?= $department['companywork_desg']; ?></td>
                </tr>
                <tr>
                    <td><b>Grievances Type</b></td> <td style="margin-left:5px"><?= $grie['grievances_type']; ?></td>
                </tr>
                 <tr>
                    <td><b>Grievances Detailed 
                    <p>Description</p></b></td> <td style="margin-left:5px"><?= $grie['grievances_desc']; ?></td>
                </tr>
            </tbody>
        </table><br>
  

</div>

</body>
</html>

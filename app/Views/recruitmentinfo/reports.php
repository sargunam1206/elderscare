


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css" media="all">
       th, td {
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
                        <h2><center><u>INTERVIEW CANDIDATE LIST</u></center></h2>
                    </td>
                   
                </tr>
     
            </tbody>
        </table>

       
   
   
        <table border="1" style="border: 1px solid black;border-collapse: collapse;">
            <tbody>
                <tr>
                    <th >S.NO</th>
                    <th>NAME</th>
                    <th>QUALIFICATION</th>
                    <th>POSITION</th>
                    <th>MOBILE NO</th>
                    <th>REMARKS</th>
                    </tr>
                    <?php if($users[0]['name']=='') { ?>
                    <tr>There is no data</tr>
               <?php }else{
                   
               ?>
               <?php
               $i=1;
               foreach($users as $data){ ?>  
                <tr>
                    <td><?= $i; ?> </td>
                    <td><?= $data['name']; ?></td>
                    <td><?= $data['qualification']; ?></td>
                    <td><?= $data['role']; ?></td>
                    <td> <?= $data['mobileno']; ?></td>
                    <td></td>
                </tr>
                <?php $i++;
                }}?>
            </tbody>
        </table>
        
</div>

</body>
</html>

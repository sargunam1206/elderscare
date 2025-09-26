<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="refresh" content="900;url=http://freelance.neuralarc.com/viyoma/logout" />

    <style type="text/css" media="all">
      
        table{
             width: 100%;
             border:solid 2px black;
             border-collapse: collapse;
             letter-spacing: 0.5px;
             line-height: 1.7;
            
        }

        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            height: 50px; /* Adjust the height as needed */
        }

        .brand-image{
            height: 100px;
            width:250px; 
        }
        .address_right{

             border:solid 2px black;
             border-collapse: collapse;

        }
        
         .checkbox-label {
            display: flex;
            align-items: center;
            font-family: DejaVu Sans, sans-serif; /* Ensure the font supports check marks */
        }
        .checkbox-label input[type="checkbox"] {
            transform: scale(1.5);
            margin-right: 10px;
        }
        /* .diagnosis{*/
        /*     padding:50px;*/
        /*     height:100px;*/
        /*}*/
    </style>
</head>
<body>

<div class="container">

    <div class="wrapper_order_box">

        <table border="1">
            <tbody>
                  <tr>
                    <!--<td  colspan="1">-->
                    <!--    <img src="<?= base_url();?>/public/dist/assets/images/logos/Viyoma+Logo.jpg" class="brand-image" alt="User Image" style="margin-left: 20px;">-->
                           <!--<p style="margin-left: 50px;"> DL No: 526/28C</p>-->
                    <!--</td>-->
                    <td  colspan="15" align="center" style="font-size: 15px">
                        <h1>VIYOMA</h1>
                        <p>Plot No : 37, SIPCOT II Phase, Krishnagiri Road
Hosur - 635109, Tamilnadu, India</p>
                </tr>
                
                <tr>
                    <td colspan="16" class="text-center" align="center"><u><h2>Depreciation Report</h2></u></td>
                </tr>
                <tr>
                    <th>S. No</th>
                    <th>Maintenence</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Warrenty Remainder</th>
                    <!--<th>AMC Level</th>-->
                    <th>Depreciation Method</th>
                    <th>Total Cost</th>
                    <th>Useful Life in Years</th>
                    <!--<th>Salvage Value</th>-->
                    <th>Rate of Depreciation</th>
                </tr>
                <tr>
                 
                      <?php foreach($alldata as $data){ 
                          $base=base64_encode(base64_encode(base64_encode($data['depreciation_id'])));
                      ?>
                      <tr>
                        <td ><?= $data['assets_grn_no']; ?></td>
                        <td><?= $data['maintenence']; ?></td>
                        <td><?= $data['start_date']; ?></td>
                        <td><?= $data['end_date']; ?></td>
                        <td><?= $data['warrenty_reminder']; ?></td>
                        <!--<td><?= $data['amc_level']; ?></td>-->
                        <td><?= $data['depreciation_method']; ?></td>
                        <td><?= $data['total_cost']; ?></td>
                        <td><?= $data['useful_life_in_years']; ?></td>
                        <!--<td><?= $data['salvage_value']; ?></td>-->
                        <td><?= $data['rate_of_depreciation']; ?></td>
                        
                      </tr>
                      <?php } ?>

            </tbody>
        </table>




</body>
</html>
         
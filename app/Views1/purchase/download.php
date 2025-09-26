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
                    <td  colspan="16" align="center" style="font-size: 15px">
                        <h1>VIYOMA</h1>
                        <p>Plot No : 37, SIPCOT II Phase, Krishnagiri Road
Hosur - 635109, Tamilnadu, India</p>
                </tr>
                
                <tr>
                    <td colspan="16" class="text-center" align="center"><u><h2>Purchase Report</h2></u></td>
                </tr>
                <tr>
                    <th>Vendor</th>
                    <th>Asset Type</th>
                    <th>Model</th>
                    <th>Purchase Price</th>
                    <!--<th>Discount</th>-->
                    <th>Units Acquired</th>
                    <th>Date Acquired</th>
                    <th>Purchase Status</th>
                    <th>Expense Ref ID</th>
                    <th>Tax Type</th>
                    <th>Tax Percentage</th>
                    <!--<th>Tax Exemption</th>-->
                    <th>Delivery Status</th>
                </tr>
               
             <!-- start row -->
                      <?php foreach($alldata as $data){ 
                          $base=base64_encode(base64_encode(base64_encode($data['purchase_id'])));
                      ?>
                      <tr>
                        <td ><?= $data['purchase_vendor']; ?></td>
                        <td><?= $data['purchase_asset_type']; ?></td>
                        <td><?= $data['purchase_model']; ?></td>
                        <td><?= $data['purchase_price']; ?></td>
                        <!--<td><?= $data['purchase_discount']; ?></td>-->
                        <td><?= $data['purchase_units_acquired']; ?></td>
                        <td><?= $data['purchase_date_acquired']; ?></td>
                        <td><?= $data['purchase_status']; ?></td>
                        <td><?= $data['purchase_expense_refid']; ?></td>
                        <td><?= $data['purchase_taxtype']; ?></td>
                        <td><?= $data['purchase_tax_percent']; ?></td>
                        <!--<td><?= $data['purchase_tax_exemption']; ?></td>-->
                        <td><?= $data['purchase_delivery_sts']; ?></td>
                          
                      </tr>
                      <?php } ?>
                

            </tbody>
        </table>




</body>
</html>
         
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
            <td colspan="6" align="center" style="font-size: 15px">
                <h1>VIYOMA</h1>
                <p>Plot No : 37, SIPCOT II Phase, Krishnagiri Road<br>
                   Hosur - 635109, Tamilnadu, India</p>
            </td>
        </tr>
        <tr>
            <td colspan="6" class="text-center" align="center"><u><h2>Purchase Report</h2></u></td>
        </tr>
        <tr>
            <th>S.NO</th>
            <th>GRN NO</th>
            <th>Asset Type</th>
            <th>Asset Make</th>
            <th>Dealer Name</th>
            <th>Purchase Status</th>
        </tr>
        <?php 
        $sno = 1; // Initialize the auto-increment counter
        foreach($alldata as $data): 
        ?>
        <tr>
            <td><?= $sno++; ?></td>
            <td><?= $data['grn']; ?></td>
            <td><?= $data['asset_type']; ?></td>
            <td><?= $data['asset_make']; ?></td>
            <td><?= $data['supplier_name']; ?></td>
            <td><?= $data['purchase_status']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>





</body>
</html>
         
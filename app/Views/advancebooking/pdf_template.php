<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Advance Bookings Report</title>
    <style>
        
        body { font-family: Arial; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #66BB6A; color: white; padding: 10px; text-align: left; }
        td { padding: 8px; border-bottom: 1px solid #ddd; }
        .footer { margin-top: 20px; text-align: right; font-size: 0.9em; }
    </style>
</head>
<body>
    <!-- Header with logo + address - Fixed vertical alignment -->
 <!-- Header with logo (left) and address (right) -->
<table width="100%" style="margin-bottom:20px;">
    <tr>
        <!-- Logo -->
        <td width="20%" style="vertical-align: middle;border-radius:20px">
            <img src="<?= base_url('./public/logo.png'); ?>" 
                 style="height:90px; width:200px; " alt="Logo">
        </td>
        
        <!-- Address -->
     <td  style="padding-left: 36%; font-size: 14px; line-height: 1.5; ">
            <div style="  max-width: 400px;">
                <strong>ADVAYA COLIVING</strong><br>
                Old No.1514, New No. 252,
                
            </div>
              <div >
                
               
                Avinashi Road,Opp Varadaraja Textiles
               
            </div>
             <div>
                
               
                Peelamedu, Coimbatore, Tamil Nadu 641004.
               
            </div>
        </td>

         


    </tr>
</table>




    <!-- Report Title -->
    <div style="text-align: center; margin-bottom: 20px;">
        <h2>Advance Bookings Report</h2>
    </div>

    <!-- Table -->
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Booking No</th>
                <th>Type</th>
                <th>Room</th>
                <th>Status</th>
                <th>Arrival Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adv as $i => $booking): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $booking['booking_no'] ?></td>
                <td><?= $booking['type'] ?></td>
                <td><?= $booking['room'] ?></td>
                <td><?= ucwords(str_replace('_', ' ', $booking['status'])) ?></td>
                <td><?= $booking['arrival_date'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <!-- Footer -->
    <div class="footer">
        <!-- Report generated on <?= date('Y-m-d H:i:s') ?> -->
    </div>
</body>
</html>
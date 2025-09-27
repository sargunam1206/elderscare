<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Advance Bookings Report</title>
    <style>
        
        body { font-family: Arial; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #66BB6A; color: white; padding: 10px; }
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
        <td width="20%" style="vertical-align: middle;">
            <img src="<?= base_url('./public/Logo-Elders_home.png'); ?>" 
                 style="height:80px; width:60px;" alt="Logo">
        </td>
        
        <!-- Address -->
        <td width="80%" style="text-align: right; font-size: 14px; line-height: 1.5; vertical-align: middle;">
            <div><strong>Elders Home</strong></div>
            <div>123 Main Street, City, State - ZIP</div>
            <div>Phone: +91-9876543210</div>
            <div>Email: info@eldershome.com</div>
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
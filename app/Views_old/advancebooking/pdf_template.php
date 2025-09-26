<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Advance Bookings Report</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .report-header { text-align: center; margin-bottom: 20px; }
        .filters { background: #f5f5f5; padding: 10px; margin-bottom: 15px; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #343a40; color: white; padding: 10px; }
        td { padding: 8px; border-bottom: 1px solid #ddd; }
        .footer { margin-top: 20px; text-align: right; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="report-header">
        <h2>Advance Bookings Report</h2>
    </div>
    
   

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

   
</body>
</html>
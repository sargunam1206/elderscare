<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Udayana</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .report-header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #343a40; color: white; padding: 10px; }
        td { padding: 8px; border-bottom: 1px solid #ddd; }
        .footer { margin-top: 20px; text-align: right; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="report-header">
        <h2>Charges Report</h2>
        <!-- <p>Generated on: </?= date('M d, Y H:i:s') ?></p> -->
    </div>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Room</th>
                <th>Guest</th>
                <th>Month/Year</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Due Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($charges as $i => $charge): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $charge['room_number'] ?></td>
                <td><?= $charge['guest_name'] ?></td>
                <td><?= date('F Y', strtotime($charge['charge_month'])) ?></td>
                <td>₹<?= number_format($charge['total_amount'], 2) ?></td>
                <td><?= ucfirst($charge['status']) ?></td>
                <td><?= date('M d, Y', strtotime($charge['due_date'])) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        <p>Total Charges: <?= count($charges) ?></p>
    </div>
</body>
</html>
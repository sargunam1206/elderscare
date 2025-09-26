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
        <h2>Maintenance Requests Report</h2>
        <!-- <p>Generated on: <?= date('M d, Y H:i:s') ?></p> -->
    </div>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Maintenance Area</th>
                <th>Requested By</th>
                <th>Type</th>
                <th>Request Date</th>
                <th>Expected Arrest Date</th>
                <th>Status</th>
                <th>Assigned To</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $i => $request): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $request['maintenance_area'] ?></td>
                <td><?= $request['requested_by'] ?></td>
                <td><?= $request['type'] ?></td>
                <td><?= date('M d, Y', strtotime($request['request_date'])) ?></td>
                <td><?= $request['expected_arrest_date'] ? date('M d, Y', strtotime($request['expected_arrest_date'])) : 'Not set' ?></td>
                <td><?= $request['status'] ?></td>
                <td><?= $request['assigned_to'] ?? 'Not assigned' ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        <p>Total Requests: <?= count($requests) ?></p>
    </div>
</body>
</html>
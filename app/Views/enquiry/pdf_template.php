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
        <h2>Enquiries Report</h2>
        <!-- <p>Generated on: <?= date('M d, Y H:i:s') ?></p> -->
    </div>
    
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Room Type</th>
                <th>Address</th>
                <th>Guest Count</th>
                <!-- <th>File Name</th> -->
                <th>Date of Enquiry</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enquiries as $i => $enquiry): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= esc($enquiry['name']) ?></td>
                <td><?= esc($enquiry['mobile_no']) ?></td>
                <td><?= esc($enquiry['room_type']) ?></td>
                <td><?= esc($enquiry['address']) ?></td>
                <td><?= esc($enquiry['guest_count']) ?></td>
                <!-- <td><?= esc($enquiry['original_file_name'] ?? 'No file') ?></td> -->
                <td><?= date('M d, Y', strtotime($enquiry['created_on'])) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        <p>Total Enquiries: <?= count($enquiries) ?></p>
    </div>
</body>
</html>
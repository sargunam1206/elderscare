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
        th { background: #66BB6A; color: white; padding: 10px; text-align: left;}
        td { padding: 8px; border-bottom: 1px solid #ddd; }
        .footer { margin-top: 20px; text-align: right; font-size: 0.9em; }
        
    </style>
</head>
<body>
    <!-- Header with logo (left) and address (right) -->
    <table width="100%" style="margin-bottom:10px;">
        <tr>
            <!-- Logo -->
            <td width="20%" style="vertical-align: middle;border-radius:20px">
                <img src="<?= base_url('./public/logo.png'); ?>" 
                     style="height:90px; width:200px; " alt="Logo">
            </td>
            
            <!-- Address -->
            <td style="padding-left: 36%; font-size: 14px; line-height: 1.5; ">
                <div style="  max-width: 400px;">
                    <strong>ADVAYA COLIVING</strong><br>
                    Old No.1514, New No. 252,
                </div>
                <div>
                    Avinashi Road,Opp Varadaraja Textiles
                </div>
                <div>
                    Peelamedu, Coimbatore, Tamil Nadu 641004.
                </div>
            </td>
        </tr>
    </table>
    
    <!-- Line under logo and address -->
    <div class="logo-address-line"></div>

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
        <!-- <p>Total Enquiries: <?= count($enquiries) ?></p> -->
    </div>
</body>
</html>
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
        <h2>Charges Report</h2>
        <!-- <p>Generated on: <?= date('M d, Y H:i:s') ?></p> -->
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
        <!-- <p>Total Charges: <?= count($charges) ?></p> -->
    </div>
</body>
</html>
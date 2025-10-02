<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blocked Rooms Report</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .report-header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #66BB6A; color: white; padding: 10px; text-align: left; }
        td { padding: 8px; border-bottom: 1px solid #ddd; }
        
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
        <h2>Blocked Rooms Report</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Room No</th>
                <th>Room Status</th>
                <th>Reason</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms as $i => $row): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $row['room_no'] ?></td>
                <td><?= $row['room_status'] ?></td>
                <td><?= $row['reason'] ?></td>
                <td><?= $row['start_date'] ?></td>
                <td><?= $row['end_date'] ?></td>
                <td><?= $row['status'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
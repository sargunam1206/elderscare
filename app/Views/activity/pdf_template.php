<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Scheduled Activities Report</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .report-header { 
            text-align: center; 
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        .filters { 
            background: #f5f5f5; 
            padding: 10px; 
            margin-bottom: 15px; 
            border-radius: 5px;
            font-size: 0.9em;
        }
        table { 
            width: 100%; 
            border-collapse: collapse;
            margin-top: 15px;
        }
        th { 
            background: #66BB6A; 
            color: white; 
            padding: 10px;
            text-align: left;
        }
        td { 
            padding: 8px; 
            border-bottom: 1px solid #ddd;
            vertical-align: top;
        }
        
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
        <h2>Scheduled Activities Report</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Activity Name</th>
                <th>Date & Time</th>
                <th>Category</th>
                <th>Duration</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activities as $i => $activity): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $activity['activity_name'] ?></td>
                <td>
                    <?= date('M d, Y', strtotime($activity['activity_date'])) ?><br>
                    <?= date('h:i A', strtotime($activity['activity_time'])) ?>
                </td>
                <td><?= $activity['category'] ?></td>
                <td><?= $activity['duration_minutes'] ?> min</td>
                <td><?= $activity['description'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
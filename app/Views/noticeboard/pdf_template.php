<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notice Board</title>
    <style>
        body { 
            font-family: Arial; 
            margin: 20px; 
        }
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
            table-layout: fixed; /* Ensures equal column distribution */
        }
        th, td { 
            padding: 8px; 
            border-bottom: 1px solid #ddd;
            text-align: left;
            word-wrap: break-word; /* Prevents overflow */
        }
        th { 
            background: #66BB6A; 
            color: white; 
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
        <h2>Notice Board Report</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Notice Title</th>
                <th>Content</th>
                <th>Priority</th>
                <th>Category</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notices as $i => $notice): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $notice['title'] ?></td>
                <td><?= $notice['content'] ?></td>
                <td><?= $notice['priority'] ?></td>
                <td><?= $notice['category'] ?></td>
                <td><?= date('M d, Y', strtotime($notice['start_date'])) ?></td>
                <td>
                    <?= !empty($notice['end_date']) 
                        ? date('M d, Y', strtotime($notice['end_date'])) 
                        : 'No end date'; 
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
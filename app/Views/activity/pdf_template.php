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
            /* border-bottom: 2px solid #343a40; */
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
            background: #343a40; 
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
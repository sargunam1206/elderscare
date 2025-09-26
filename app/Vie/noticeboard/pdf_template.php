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
            background: #343a40; 
            color: white; 
        }
    </style>
</head>
<body>
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
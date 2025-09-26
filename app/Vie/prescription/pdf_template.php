<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prescription Report</title>
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
        .small-text {
            font-size: 0.85em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="report-header">
        <h2>Prescription Report</h2>
    </div>

    <?php if (!empty($filter_from_date) || !empty($filter_to_date)): ?>
    <div class="filters">
        <strong>Filters:</strong>
        <?php if (!empty($filter_from_date)): ?>
            From: <?= date('M d, Y', strtotime($filter_from_date)) ?>
        <?php endif; ?>
        <?php if (!empty($filter_to_date)): ?>
            &nbsp; To: <?= date('M d, Y', strtotime($filter_to_date)) ?>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Problem Description</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Notes</th>
                <!-- <th>Files</th> -->
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($prescriptions)): ?>
                <?php foreach ($prescriptions as $i => $p): ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= esc($p['problem_description']) ?></td>
                    <td><?= esc($p['doctor_name']) ?></td>
                    <td><?= date('M d, Y', strtotime($p['date'])) ?></td>
                    <td><?= esc($p['notes']) ?></td>
                    <!-- <td>
                        <?php if (!empty($p['files'])): ?>
                            <?php foreach ($p['files'] as $file): ?>
                                <div class="small-text"><?= esc($file['original_name']) ?></div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <span class="small-text">No files</span>
                        <?php endif; ?>
                    </td> -->
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" style="text-align:center;">No prescriptions found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

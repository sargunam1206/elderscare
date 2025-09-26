<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Charges Report</title>
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
        .filter-label {
            font-weight: bold;
            margin-right: 5px;
        }
        .filter-value {
            margin-right: 15px;
        }
        .charge-details {
            font-size: 0.9em;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class="report-header">
        <h2>Charges Report</h2>
        <!-- <p>Generated on: <?= date('M d, Y h:i A') ?></p> -->
    </div>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Date & Time</th>
                <th>Month of Charge</th>
                <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                <th>Room No</th>
                <th>Guest Name</th>
                <?php endif; ?>
                <th>Total Amount</th>
                <th>Payment Mode</th>
                <th>Charge Details</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($grouped)): ?>
                <?php $i = 1; foreach ($grouped as $charge): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>
                        <?php if (!empty($charge['created_on'])): ?>
                            <?= date('M d, Y', strtotime($charge['created_on'])) ?><br>
                            <?= date('h:i A', strtotime($charge['created_on'])) ?>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <td><?= !empty($charge['charge_monthyear']) ? $charge['charge_monthyear'] : 'N/A' ?></td>
                    
                    <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                    <td><?= !empty($charge['room_no']) ? $charge['room_no'] : 'N/A' ?></td>
                    <td>
                        <?php
                        $guestName = trim(($charge['first_name'] ?? '') . ' ' . ($charge['last_name'] ?? ''));
                        echo !empty($guestName) ? $guestName : 'N/A';
                        ?>
                    </td>
                    <?php endif; ?>
                    
                    <td><?= !empty($charge['total_paid']) ? '₹' . number_format($charge['total_paid'], 2) : 'N/A' ?></td>
                    <td><?= !empty($charge['payment_mode']) ? $charge['payment_mode'] : 'N/A' ?></td>
                    <td class="charge-details">
                        <?php foreach ($charge['items'] as $item): ?>
                            • <?= $item['charge_info'] ?> - ₹<?= number_format($item['paid_amount'], 2) ?><br>
                        <?php endforeach; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="<?= (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') ? '8' : '6' ?>" 
                        style="text-align: center; padding: 20px;">
                        No charges found.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php if (!empty($grouped)): ?>
    <div style="margin-top: 20px; text-align: right;">
        <!-- <p><strong>Total Records:</strong> <?= count($grouped) ?></p> -->
        <?php 
        $totalAmount = 0;
        foreach ($grouped as $charge) {
            $totalAmount += floatval($charge['total_paid']);
        }
        ?>
        <p><strong>Total Amount:</strong> ₹<?= number_format($totalAmount, 2) ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
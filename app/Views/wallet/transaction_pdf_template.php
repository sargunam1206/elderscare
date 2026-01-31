<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
      <title>Nivasan Udayana</title>
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
        .filter-label {
            font-weight: bold;
            margin-right: 5px;
        }
        .filter-value {
            margin-right: 15px;
        }
        .credit { color: #28a745; }
        .debit { color: #dc3545; }
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
        <h2>Transaction History Report</h2>
        <!-- <p>Generated on: <?= date('M d, Y h:i A') ?></p> -->
    </div>

    <!-- <?php if (!empty($filters['filter_from_date']) || !empty($filters['filter_to_date']) || !empty($filters['filter_room_no']) || !empty($filters['filter_guest_id'])): ?>
    <div class="filters">
        <strong>Filters Applied:</strong>
        <?php if (!empty($filters['filter_from_date'])): ?>
            <span class="filter-label">From:</span>
            <span class="filter-value"><?= $filters['filter_from_date'] ?></span>
        <?php endif; ?>
        <?php if (!empty($filters['filter_to_date'])): ?>
            <span class="filter-label">To:</span>
            <span class="filter-value"><?= $filters['filter_to_date'] ?></span>
        <?php endif; ?>
        <?php if (!empty($filters['filter_room_no']) && $filters['filter_room_no'] !== 'all'): ?>
            <span class="filter-label">Room:</span>
            <span class="filter-value"><?= $filters['filter_room_no'] ?></span>
        <?php endif; ?>
        <?php if (!empty($filters['filter_guest_id']) && $filters['filter_guest_id'] !== 'all'): ?>
            <span class="filter-label">Guest:</span>
            <span class="filter-value">
                <?php 
                $guestName = 'N/A';
                if (!empty($filters['guests'])) {
                    foreach ($filters['guests'] as $guest) {
                        if ($guest['guest_id'] == $filters['filter_guest_id']) {
                            $guestName = trim(($guest['first_name'] ?? '') . ' ' . ($guest['last_name'] ?? ''));
                            break;
                        }
                    }
                }
                echo $guestName;
                ?>
            </span>
        <?php endif; ?> -->
    </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Date </th>
                <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                    <th>Room No</th>
                    <th>Guest Name</th>
                <?php endif; ?>
                <th>Transaction Type</th>
                <th>Amount</th>
                <th>Payment Mode</th>
                <th>Reference ID</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transactions)): ?>
                <?php foreach ($transactions as $i => $transaction): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td>
                        <?php 
                        $date = $transaction['created_at'] ?? $transaction['created_on'] ?? '';
                        if (!empty($date)): 
                        ?>
                            <?= date('M d, Y', strtotime($date)) ?><br>
                            <!-- </?= date('h:i A', strtotime($date)) ?> -->
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                        <td><?= !empty($transaction['room_no']) ? $transaction['room_no'] : 'N/A' ?></td>
                        <td>
                            <?php
                            $firstName = $transaction['first_name'] ?? '';
                            $lastName = $transaction['last_name'] ?? '';
                            $guestName = trim($firstName . ' ' . $lastName);
                            echo !empty($guestName) ? $guestName : 'N/A';
                            ?>
                        </td>
                    <?php endif; ?>
                    <td><?= !empty($transaction['type']) ? ucfirst($transaction['type']) : 'N/A' ?></td>
                    <td class="<?= ($transaction['type'] ?? '') === 'credit' ? 'credit' : 'debit' ?>">
                        <?php if (!empty($transaction['amount'])): ?>
                            <?= ($transaction['type'] ?? '') === 'credit' ? '+' : '-' ?> 
                            ₹<?= number_format($transaction['amount'], 2) ?>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <td><?= !empty($transaction['payment_mode']) ? $transaction['payment_mode'] : 'N/A' ?></td>
                    <td><?= !empty($transaction['reference_id']) ? $transaction['reference_id'] : 'N/A' ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="<?= (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') ? 8 : 6 ?>" style="text-align: center; padding: 20px;">
                        No transactions found.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php if (!empty($transactions)): ?>
    <div style="margin-top: 20px; text-align: right;">
        <!-- <p><strong>Total Records:</strong> <?= count($transactions) ?></p> -->
        <?php 
        // Calculate totals
        $totalCredit = 0;
        $totalDebit = 0;
        foreach ($transactions as $transaction) {
            if (!empty($transaction['amount'])) {
                if (($transaction['type'] ?? '') === 'credit') {
                    $totalCredit += floatval($transaction['amount']);
                } else {
                    $totalDebit += floatval($transaction['amount']);
                }
            }
        }
        $netBalance = $totalCredit - $totalDebit;
        ?>
        <p><strong>Total Credit:</strong> ₹<?= number_format($totalCredit, 2) ?></p>
        <p><strong>Total Debit:</strong> ₹<?= number_format($totalDebit, 2) ?></p>
        <p><strong>Net Balance:</strong> ₹<?= number_format($netBalance, 2) ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Service Bookings Report</title>
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
    </style>
</head>
<body>
    <div class="report-header">
        <h2>Service Bookings Report</h2>
        <!-- <p>Generated on: <?= date('M d, Y h:i A') ?></p> -->
    </div>

   

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Date & Time</th>
                <th>Service Type</th>
                 
            <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
            <th>Room No</th>
            <th>Guest Name</th>
            <?php endif; ?>
                <!-- <th>Services Info</th> -->
                <th>Total Amount</th>
                <th>Payment Mode</th>
                <th>Payment Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($servicebook)): ?>
                <?php foreach ($servicebook as $i => $booking): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td>
                        <?php if (!empty($booking['created_on'])): ?>
                            <?= date('M d, Y', strtotime($booking['created_on'])) ?><br>
                            <?= date('h:i A', strtotime($booking['created_on'])) ?>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <td><?= !empty($booking['service_type']) ? $booking['service_type'] : 'N/A' ?></td>

                     <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                <td><?= !empty($booking['room_no']) ? $booking['room_no'] : 'N/A' ?></td>
                <td>
                    <?php
                    // Get guest name from the booking data or from joined data
                    if (!empty($booking['first_name']) && !empty($booking['last_name'])) {
                        echo $booking['first_name'] . ' ' . $booking['last_name'];
                    } elseif (!empty($booking['guest_id'])) {
                        echo 'Guest ' . $booking['guest_id'];
                    } else {
                        echo 'N/A';
                    }
                    ?>
                </td>
                <?php endif; ?>
                    
                    <td><?= !empty($booking['total_amount']) ? '₹' . number_format($booking['total_amount'], 2) : 'N/A' ?></td>
                    <td><?= !empty($booking['payment_mode']) ? $booking['payment_mode'] : 'N/A' ?></td>
                    <td>
                        <?php if (!empty($booking['payment_status'])): ?>
                            <!-- <span style="color: <?= $booking['payment_status'] === 'Paid' ? 'green' : 'red' ?>;"> -->
                                <?= $booking['payment_status'] ?>
                            </span>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align: center; padding: 20px;">
                        No service bookings found.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php if (!empty($servicebook)): ?>
    <div style="margin-top: 20px; text-align: right;">
        <!-- <p><strong>Total Records:</strong> <?= count($servicebook) ?></p> -->
        <?php 
        // Calculate total amount
        $totalAmount = 0;
        foreach ($servicebook as $booking) {
            if (!empty($booking['total_amount'])) {
                $totalAmount += floatval($booking['total_amount']);
            }
        }
        ?>
        <p><strong>Total Amount:</strong> ₹<?= number_format($totalAmount, 2) ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
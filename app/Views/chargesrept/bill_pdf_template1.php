<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nivasan Udayana</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 10px; 
            font-size: 12px;
        }
        .bill-container { 
            max-width: 800px; 
            margin: 0 auto; 
        }
        .bill-header { 
            text-align: center; 
            margin-bottom: 10px; 
        }
        .bill-details { 
            margin-bottom: 15px; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse;
            margin: 10px 0;
            font-size: 11px;
        }
        th { 
            background: #66BB6A;
            color: white; 
            padding: 6px;
            text-align: left;
            font-weight: 600;
        }
        td { 
            padding: 5px; 
            border-bottom: 1px solid #ddd;
            vertical-align: top;
        }
        .total-row {
            font-weight: bold;
            background-color: #e9ecef;
            border-top: 2px solid #333;
        }
        .text-green {
            color: #2E7D32;
        }
        .charge-details {
            font-size: 0.85em;
            line-height: 1.2;
        }
        @media print {
            .no-print {
                display: none;
            }
            .bill-container {
                border: none;
                margin: 0;
                padding: 0;
                box-shadow: none;
            }
            body {
                background-color: white !important;
                margin: 0;
                font-size: 10px;
            }
            table {
                font-size: 9px;
            }
        }
        .bill-summary {
            background: #e9ecef;
            padding: 10px;
            border-radius: 3px;
            margin-top: 10px;
            font-size: 11px;
        }
        .logo-address-line {
            border-bottom: 1px solid #ddd;
            margin: 5px 0;
        }
        .compact-header {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="bill-container">
        <!-- Compact Header with logo and address -->
        <table width="100%" style="margin-bottom:5px;">
            <tr>
                <!-- Logo -->
                <td width="20%" style="vertical-align: middle;">
                    <img src="<?= base_url('./public/logo.png'); ?>" 
                         style="height:60px; width:120px;" alt="Logo">
                </td>
                
                <!-- Address -->
                <td style="padding-left: 30%; font-size: 11px; line-height: 1.2;">
                    <div>
                        <strong>ADVAYA COLIVING</strong><br>
                        Old No.1514, New No. 252, Avinashi Road,<br>
                        Opp Varadaraja Textiles, Peelamedu,<br>
                        Coimbatore, Tamil Nadu 641004.
                    </div>
                </td>
            </tr>
        </table>
        
        <!-- Line under logo and address -->
        <!-- <div class="logo-address-line"></div> -->
        
        <!-- Compact Bill Header -->
        <div class="bill-header compact-header">
           <h2 style="margin:5px 0;font-size:18px;">Charges Bill Receipt</h2>
        </div>

        <!-- Bill Details -->
        <div class="bill-details">
            <table style="border: none;">
                <tr>
                    <td style="border: none; width: 50%;">
                        <strong>Bill No:</strong> <span class="text-green"><?= $bill['bill_no'] ?></span><br>
                        <strong>Bill Date:</strong> <?= date('M d, Y', strtotime($bill['bill_date'])) ?>
                    </td>
                    <td style="border: none; width: 50%; text-align: right;">
                        <strong>Room No:</strong> <?= $bill['room_no'] ?? 'N/A' ?><br>
                        <strong>Guest:</strong> <?= trim($bill['first_name'] . ' ' . $bill['last_name']) ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Compact Charges Table -->
        <table>
            <thead>
                <tr>
                    <th width="5%">S.No</th>
                    <th width="10%">Date</th>
                    <th width="12%">Month of Charge</th>
                    <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                    <th width="8%">Room No</th>
                    <th width="15%">Guest Name</th>
                    <?php endif; ?>
                    <th width="30%">Charge Details</th>
                    <th width="10%">Payment Mode</th>
                    <th width="10%">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($grouped)): ?>
                    <?php $i = 1; foreach ($grouped as $charge): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td>
                            <?php if (!empty($charge['created_on'])): ?>
                                <?= date('M d, Y', strtotime($charge['created_on'])) ?>
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php 
                            if (!empty($charge['charge_monthyear'])) {
                                $monthYear = DateTime::createFromFormat('Y-m', $charge['charge_monthyear']);
                                echo $monthYear ? $monthYear->format('M Y') : $charge['charge_monthyear'];
                            } else {
                                echo 'N/A';
                            }
                            ?>
                        </td>
                        
                        <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                        <td><?= !empty($charge['room_no']) ? $charge['room_no'] : 'N/A' ?></td>
                        <td>
                            <?php
                            $guestName = trim(($charge['first_name'] ?? '') . ' ' . ($charge['last_name'] ?? ''));
                            echo !empty($guestName) ? $guestName : 'N/A';
                            ?>
                        </td>
                        <?php endif; ?>
                        <td class="charge-details">
                            <?php foreach ($charge['items'] as $item): ?>
                                • <?= $item['charge_info'] ?> 
                                <?php if (!empty($item['reference_id'])): ?>
                                    (Ref: <?= $item['reference_id'] ?>)
                                <?php endif; ?>
                                <br>
                            <?php endforeach; ?>
                        </td>
                         <td><?= !empty($charge['payment_mode']) ? $charge['payment_mode'] : 'N/A' ?></td>
                        <td>₹<?= number_format($charge['total_paid'], 2) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="<?= (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin') ? '8' : '6' ?>" 
                            style="text-align: center; padding: 10px; color: #dc3545;">
                            <strong>No charges found for Charge ID: <?= $bill['reference_id'] ?></strong>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Compact Bill Summary -->
        <?php if (!empty($grouped)): ?>
        <div class="bill-summary">
            <div style="display: flex; justify-content: space-between;">
                <div>
                    <!-- Optional: Add any left-side content here -->
                </div>
                <div style="text-align: right;">
                    <p style="margin: 3px 0;"><strong>Total Amount:</strong> ₹<?= number_format($bill['total_amount'], 2) ?></p>
                    <p style="margin: 3px 0;"><strong>Paid Amount:</strong> ₹<?= number_format($bill['paid_amount'], 2) ?></p>
                    <?php if ($bill['total_amount'] != $bill['paid_amount']): ?>
                    <p style="margin: 3px 0; color: #dc3545;"><strong>Balance Due:</strong> ₹<?= number_format($bill['total_amount'] - $bill['paid_amount'], 2) ?></p>
                    <?php endif; ?>
                    <p style="margin: 3px 0;">
                        <strong>Payment Status:</strong> 
                        <span style="background: <?= $bill['payment_status'] === 'paid' ? '#28a745' : '#ffc107' ?>; 
                              color: <?= $bill['payment_status'] === 'paid' ? 'white' : 'black' ?>; 
                              padding: 2px 6px; border-radius: 3px; font-size: 10px;">
                            <?= strtoupper($bill['payment_status']) ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Compact Footer -->
        <div style="text-align: center; margin-top: 15px; padding-top: 10px; border-top: 1px solid #ddd;">
            <p style="margin: 3px 0; color: #6c757d;">Thank you for your payment!</p>
            <p style="margin: 3px 0; font-weight: bold; color: #2E7D32;">Nivasan Udayana Elders Home</p>
            <p style="margin: 10px 0 0 0; color: #6c757d;">Authorized Signatory</p>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivasan Udayana</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            line-height: 1.4;
            color: #333;
            background-color: #f8f9fa;
            padding: 15px;
        }
        
        .bill-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .logo {
            width: 180px;
            height: auto;
        }
        
        .company-info {
            text-align: right;
            font-size: 13px;
        }
        
        .company-name {
            font-size: 18px;
            font-weight: bold;
            color: #2E7D32;
            margin-bottom: 5px;
        }
        
        .bill-title {
            text-align: center;
            margin: 15px 0;
            color: #2E7D32;
        }
        
        /* .bill-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }
         */
        .bill-info, .guest-info {
            font-size: 14px;
        }
        
        .bill-no {
            font-weight: bold;
            color: #2E7D32;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            font-size: 13px;
        }
        
        th {
            background-color: #2E7D32;
            color: white;
            padding: 10px;
            text-align: left;
            font-weight: 600;
        }
        
        td {
            padding: 8px 10px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .charge-details {
            font-size: 12.5px;
            line-height: 1.3;
        }
        
        .total-row {
            font-weight: bold;
            background-color: #e9ecef;
        }
        
        .bill-summary {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }
        .bill-header { text-align: center; margin-bottom: 20px; }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }
        
        .payment-status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 12px;
        }
        
        .status-paid {
            background-color: #4CAF50;
            color: white;
        }
        
        .status-pending {
            background-color: #FFC107;
            color: #333;
        }
        
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #e0e0e0;
            color: #666;
        }
        
        .authorized-sign {
            margin-top: 40px;
            text-align: right;
            color: #666;
        }
        
        @media print {
            body {
                background-color: white;
                padding: 0;
            }
            
            .bill-container {
                box-shadow: none;
                padding: 10px;
            }
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
                              padding: 2px 6px; border-radius: 3px; font-size: 11px;">
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
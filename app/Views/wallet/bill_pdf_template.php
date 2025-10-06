<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nivasan Udayana</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .bill-container { max-width: 800px; margin: 0 auto; }
        .bill-header { text-align: center; margin-bottom: 20px; }
        .bill-details { margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        /* th, td { border: 1px solid #ddd; padding: 10px; text-align: left; } */
        th { background-color: #f5f5f5; }
        .total-row { font-weight: bold; background-color: #e9ecef; }
        .text-end { text-align: right; }
        .text-center { text-align: center; }


               
        /* .bill-info {
            background: #f5f5f5; 
            padding: 20px; 
            margin-bottom: 25px; 
            border-radius: 8px;
            border-left: 4px solid #66BB6A;
        } */
        table { 
            width: 100%; 
            border-collapse: collapse;
            margin-top: 20px;
        }
        th { 
            background:#66BB6A;
            color: white; 
            padding: 12px;
            text-align: left;
            font-weight: 600;
        }
        td { 
            padding: 10px; 
            border-bottom: 1px solid #ddd;
            vertical-align: top;
        }
        .total-row {
            font-weight: bold;
            background-color: #e9ecef;
            border-top: 2px solid #333;
        }
        .badge {
            font-size: 0.9rem;
            padding: 6px 12px;
        }
        .text-green {
            color: #2E7D32;
        }
        .service-details {
            font-size: 0.9em;
            line-height: 1.4;
        }

    </style>
</head>
<body>
    <div class="bill-container">
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
        <div class="bill-header">
            <h2 >Wallet Transaction Receipt</h2>
            <!-- <p>Elders Home - Wallet Transaction Receipt</p> -->
        </div>

        <div class="bill-details">
            <table style="border: none;">
                <tr>
                    <td style="border: none; width: 50%;">
                        <strong>Bill No:</strong> <span class="text-green fw-bold"><?= $bill['bill_no'] ?></span><br>
                        <strong>Bill Date:</strong> <?= date('M d, Y', strtotime($bill['bill_date'])) ?><br>
                        <strong>Service Type:</strong> <?= $bill['reference_service'] ?>
                    </td>
                    <td style="border: none; width: 50%; text-align: right;">
                        <strong>Room No:</strong> <?= $transaction['room_no'] ?? 'N/A' ?><br>
                        <strong>Guest:</strong> <?= trim($transaction['first_name'] . ' ' . $transaction['last_name']) ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Transaction Details -->
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Transaction Date & Time</th>
                    <th>Transaction Type</th>
                    <th>Payment Mode</th>
                    <th>Reference ID</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <?php if (!empty($transaction['created_at'])): ?>
                            <?= date('M d, Y', strtotime($transaction['created_at'])) ?><br>
                            <?= date('h:i A', strtotime($transaction['created_at'])) ?>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <td><?= strtoupper($transaction_type) ?></td>
                    <td><?= $transaction['payment_mode'] ?? 'N/A' ?></td>
                    <td><?= $transaction['reference_id'] ?? 'N/A' ?></td>
                    <td class="<?= $transaction_type === 'credit' ? 'credit' : 'debit' ?>">
                        <strong>
                            <?= $transaction_type === 'credit' ? '+' : '-' ?> 
                            ₹<?= number_format($transaction['amount'], 2) ?>
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Bill Summary -->
        <div style="margin-top: 20px; padding: 15px; background: #e9ecef; border-radius: 5px;">
            <div style="display: flex; justify-content: space-between;">
                <!-- <div>
                    <p><strong>Service Type:</strong> <?= $bill['reference_service'] ?></p>
                    <p><strong>Transaction ID:</strong> <?= $bill['reference_id'] ?></p>
                </div> -->
                <div style="text-align: right;">
                    <p><strong>Total Amount:</strong> ₹<?= number_format($bill['total_amount'], 2) ?></p>
                    <p><strong>Paid Amount:</strong> ₹<?= number_format($bill['paid_amount'], 2) ?></p>
                    <p><strong>Status:</strong> <?= strtoupper($bill['payment_status']) ?></p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div style="text-align: center; margin-top: 40px; padding-top: 20px; border-top: 1px solid #333;">
            <p style="margin-bottom: 10px; color: #666;">Thank you for your transaction!</p>
            <p style="font-weight: bold; color: #2E7D32;">Nivasan Udayana Elders Home</p>
            <p style="margin-top: 30px; color: #666;">Authorized Signatory</p>
        </div>
    </div>
</body>
</html>
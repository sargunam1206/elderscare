<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- <title>Service Bill - <?= $bill['bill_no'] ?></title> -->
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
            <h2 >Service Bill Receipt</h2>
            <!-- <p>Elders Home - Service Bill Receipt</p> -->
        </div>

        <div class="bill-details">
            <table style="border: none;">
                <tr>
                    <td style="border: none; width: 50%;">
                        <strong>Bill No:</strong> <span class="text-green fw-bold"><?= $bill['bill_no'] ?></span><br>
                        <strong>Bill Date:</strong> <?= date('M d, Y', strtotime($bill['bill_date'])) ?><br>
                        <strong>Service Type:</strong> <?= $serviceBooking['service_type'] ?>
                    </td>
                    <td style="border: none; width: 50%; text-align: right;">
                        <strong>Room No:</strong> <?= $serviceBooking['room_no'] ?? 'N/A' ?><br>
                        <strong>Guest:</strong> <?= trim($serviceBooking['first_name'] . ' ' . $serviceBooking['last_name']) ?><br>
                        <strong>Booking Date:</strong> <?= date('M d, Y', strtotime($serviceBooking['created_on'])) ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Services Table -->
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Category</th>
                    <th>Service Item</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($servicesInfo)): ?>
                    <?php $i = 1; foreach ($servicesInfo as $service): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $service['item'] ?? 'N/A' ?></td>
                        <td><?= $service['type'] ?? 'N/A' ?></td>
                        <td><?= $service['qty'] ?? 1 ?></td>
                        <td>₹<?= number_format($service['price'] ?? 0, 2) ?></td>
                        <td>₹<?= number_format(($service['price'] ?? 0) * ($service['qty'] ?? 1), 2) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                <tr class="total-row">
                    <td colspan="5" class="text-end"><strong>Grand Total:</strong></td>
                    <td><strong>₹<?= number_format($bill['total_amount'], 2) ?></strong></td>
                </tr>
            </tbody>
        </table>

        <!-- Bill Summary -->
        <div style="margin-top: 30px; padding: 15px; background: #e9ecef; border-radius: 5px;">
            <table style="border: none;">
                <tr>
                    <td style="border: none; width: 50%;">
                        <!-- <strong>Reference Booking ID:</strong> <?= $bill['reference_id'] ?><br>
                        <strong>Service Type:</strong> <?= $bill['reference_service'] ?> -->
                    </td>
                    <td style="border: none; width: 50%; text-align: right;">
                        <strong>Total Amount:</strong> ₹<?= number_format($bill['total_amount'], 2) ?><br>
                        <strong>Paid Amount:</strong> ₹<?= number_format($bill['paid_amount'], 2) ?><br>
                        <strong>Payment Status:</strong> <?= strtoupper($bill['payment_status']) ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Footer -->
        <div style="text-align: center; margin-top: 40px; padding-top: 20px; border-top: 1px solid #333;">
            <p style="margin-bottom: 10px; color: #666;">Thank you for your business!</p>
            <p style="font-weight: bold; color: #2E7D32;">Nivasan Udayana Elders Home</p>
            <p style="margin-top: 30px; color: #666;">Authorized Signatory</p>
        </div>
    </div>
</body>
</html>
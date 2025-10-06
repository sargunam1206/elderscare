<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Wallet Bill - <?= $bill['bill_no'] ?></title> -->
       <title>Nivasan Udayana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial;
            margin: 20px;
            background-color: #f8f9fa;
        }
                .report-header { text-align: center; margin-bottom: 20px; }
        .bill-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        /* .report-header { 
            text-align: center; 
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px double #333;
        } */
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
            background: #66BB6A;
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
        .credit { color: #28a745; }
        .debit { color: #dc3545; }
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
            }
        }
        .bill-summary {
            background: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        @media print {
    body {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }
    .bill-container {
        width: 100% !important;
        max-width: 100% !important;
        padding: 20px !important;
    }
   
    
    .no-print {
        display: none !important;
    }
}
    </style>
</head>
<body>
    <div class="bill-container">

        <!-- Header with logo (left) and address (right) -->
<table width="100%" style="margin-bottom:10px;">
    <tr>
        <!-- Logo -->
        <td width="30%" style="vertical-align: middle;">
            <img src="<?= base_url('./public/logo.png'); ?>" 
                 style="height:90px; width:200px;" alt="Logo">
        </td>
        
        <!-- Address -->
        <td width="70%" style="text-align: right; font-size: 14px; line-height: 1.5;">
            <div style="max-width: 400px; display: inline-block; text-align: left;">
                <strong>ADVAYA COLIVING</strong><br>
                Old No.1514, New No. 252,<br>
                Avinashi Road, Opp Varadaraja Textiles<br>
                Peelamedu, Coimbatore, Tamil Nadu 641004.
            </div>
        </td>
    </tr>
</table>

    

        <!-- Bill Header -->
        <div class="report-header">
           <h4 class="fw-bold ">Charges Bill Receipt</h2>
            <!-- <p>Elders Home - Charges Bill Receipt</p> -->
        </div>


        <!-- Bill Information
<div class="bill-info">
    <div class="row">
        <!- Left side ->
        <div class="col-md-6">
            <p class="mb-1">
                <strong>Bill No:</strong>
                <span class="text-green fw-bold"><?= $bill['bill_no'] ?></span>
            </p>
            <p class="mb-1">
                <strong>Bill Date:</strong>
                <?= date('M d, Y', strtotime($bill['bill_date'])) ?>
            </p>
        </div>

        <!- Right side ->
        <div class="col-md-6 text-end">
            <p class="mb-1">
                <strong>Room No:</strong>
                <?= $bill['room_no'] ?? 'N/A' ?>
            </p>
            <p class="mb-1">
                <strong>Guest Name:</strong>
                <?= trim(($bill['first_name'] ?? '') . ' ' . ($bill['last_name'] ?? '')) ?>
            </p>
        </div>
    </div>
</div> -->
<!-- Bill Information -->
<div class="bill-info d-flex justify-content-between mb-3">
    <!-- Left side -->
    <div>
        <p class="mb-1">
            <strong>Bill No:</strong>
            <span class="text-green fw-bold"><?= $bill['bill_no'] ?></span>
        </p>
        <p class="mb-1">
            <strong>Bill Date:</strong>
            <?= date('M d, Y', strtotime($bill['bill_date'])) ?>
        </p>
    </div>

    <!-- Right side -->
    <div class="text-end">
        <p class="mb-1">
            <strong>Room No:</strong>
            <?= $bill['room_no'] ?? 'N/A' ?>
        </p>
        <p class="mb-1">
            <strong>Guest Name:</strong>
            <?= trim(($bill['first_name'] ?? '') . ' ' . ($bill['last_name'] ?? '')) ?>
        </p>
    </div>
</div>

        <!-- Bill Information -->
        <!-- <div class="bill-info">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <strong>Bill No:</strong>
                    <span class="text-green fw-bold"></?= $bill['bill_no'] ?></span>
                </div>
                <div class="col-md-6 mb-2">
                    <strong>Bill Date:</strong>
                    </?= date('M d, Y', strtotime($bill['bill_date'])) ?>
                </div>
            </div>
           <div class="row">
                <div class="col-md-6 mb-2">
                    <strong>Room No:</strong>
                    </?= $bill['room_no'] ?? 'N/A' ?>
                </div>
                <div class="col-md-6 mb-2 ">
                    <strong>Guest Name:</strong>
                    </?= trim(($bill['first_name'] ?? '') . ' ' . ($bill['last_name'] ?? '')) ?>
                </div>
                <!- <div class="col-md-3 mb-2">
                    <strong>Payment Status:</strong><br>
                    <span class="badge bg-</?= $bill['payment_status'] === 'paid' ? 'success' : 'warning' ?>">
                        </?= strtoupper($bill['payment_status']) ?>
                    </span>
                </div> ->
            </div>
            <!- <div class="row mt-2">
                <div class="col-md-6 mb-2">
                    <strong>Guest Name:</strong><br>
                    </?= trim(($bill['first_name'] ?? '') . ' ' . ($bill['last_name'] ?? '')) ?>
                </div> -->
                <!-- <div class="col-md-6 mb-2">
                    <strong>Reference Service:</strong><br>
                    <span class="badge bg-info text-dark"></?= $bill['reference_service'] ?></span><br>
                    <strong>Charge ID:</strong> </?= $bill['reference_id'] ?>
                </div> ->
            <!- </div> ->
        </div> -->

        <!-- Charges Table -->
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Date </th>
                    <th>Month of Charge</th>
                    <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                    <th>Room No</th>
                    <th>Guest Name</th>
                    <?php endif; ?>
                    <th>Charge Details</th>
                     <th>Payment Mode</th>
                    <th>Amount</th>
                   
                    
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
                                <!-- </?= date('h:i A', strtotime($charge['created_on'])) ?> -->
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
                            style="text-align: center; padding: 20px; color: #dc3545;">
                            <strong>No charges found for Charge ID: <?= $bill['reference_id'] ?></strong><br>
                            <!-- <small>Please check if the charge ID exists in the charge_info table.</small> -->
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Bill Summary -->
        <?php if (!empty($grouped)): ?>
        <div class="bill-summary">
            <div class="row">
                <div class="col-md-6">
                     <!-- <p><strong>Reference Charge ID:</strong> </?= $bill['reference_id'] ?></p> -->
                    <!-- <p><strong>Service Type:</strong> </?= $bill['reference_service'] ?></p> -->
                   
                </div>
                <div class="col-md-6 text-end">
                   
                    <p><strong>Total Amount:</strong> ₹<?= number_format($bill['total_amount'], 2) ?></p>
                    <p><strong>Paid Amount:</strong> ₹<?= number_format($bill['paid_amount'], 2) ?></p>
                    <?php if ($bill['total_amount'] != $bill['paid_amount']): ?>
                    <p class="text-danger"><strong>Balance Due:</strong> ₹<?= number_format($bill['total_amount'] - $bill['paid_amount'], 2) ?></p>
                    <?php endif; ?>
                    <p><strong>Paid Amount:</strong> ₹<span class="badge bg-<?= $bill['payment_status'] === 'paid' ? 'success' : 'warning' ?>">
                        <?= strtoupper($bill['payment_status']) ?>
                    </span></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Footer -->
        <div class="text-center mt-5 pt-4 border-top">
            <p class="mb-2 text-muted">Thank you for your payment!</p>
            <p class="mb-0 fw-bold text-green">Nivasan Udayana Elders Home</p>
            <p class="mb-0  mt-5 text-muted">Authorized Signatory</p>
             <!-- <p class="mb-0 mt-5 me-4 text-muted text-end">Authorized Signatory</p> -->
        </div>

        <!-- Action Buttons -->
        <div class="text-center mt-4 no-print">
            <button onclick="window.print()" class="btn btn-primary">
                <i class="bi bi-printer me-2"></i>Print Bill
            </button>
            <?php if (!empty($grouped)): ?>
            <a href="<?= base_url('chargesreport/viewBill') ?>?bill_id=<?= $bill['bill_id'] ?>&download=pdf" 
               class="btn btn-success">
                <i class="bi bi-download me-2"></i>Download PDF
            </a>
            <?php endif; ?>
            <a href="<?= base_url('chargesrept') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-2"></i>Back to Charges
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
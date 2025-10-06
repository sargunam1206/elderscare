<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivasan Udayana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .report-header { 
            text-align: center; 
            margin-bottom: 20px; 
        }
        .bill-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
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
        .bill-summary {
            background: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        
        /* Print-specific styles */
        @media print {
            body {
                margin: 0 !important;
                padding: 0 !important;
                background-color: white !important;
                font-size: 12px;
                line-height: 1.2;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            .bill-container {
                max-width: 100% !important;
                width: 100% !important;
                margin: 0 !important;
                padding: 15px !important;
                border: none !important;
                box-shadow: none !important;
                border-radius: 0 !important;
            }
            .no-print {
                display: none !important;
            }
            
            /* Optimize spacing for print */
            .report-header {
                margin-bottom: 15px !important;
            }
            .report-header h4 {
                font-size: 18px !important;
                margin-bottom: 5px !important;
            }
            .bill-info {
                margin-bottom: 15px !important;
            }
            .bill-info p {
                margin-bottom: 4px !important;
                font-size: 12px !important;
            }
            
            /* Table optimization */
            table {
                margin-top: 15px !important;
                font-size: 11px !important;
                page-break-inside: auto;
            }
            table th, table td {
                padding: 6px 8px !important;
            }
            th {
                background: #66BB6A !important;
                color: white !important;
            }
            
            /* Prevent page breaks in important elements */
            .bill-summary {
                page-break-inside: avoid;
                margin-top: 15px !important;
                padding: 12px !important;
            }
            
            /* Footer optimization */
            .text-center.mt-5.pt-4.border-top {
                margin-top: 20px !important;
                padding-top: 15px !important;
                border-top: 1px solid #ddd !important;
            }
            .text-center.mt-5.pt-4.border-top p {
                margin-bottom: 5px !important;
                font-size: 11px !important;
            }
            
            /* Ensure content fits on one page */
            @page {
                margin: 0.5cm;
                size: A4;
            }
            
            /* Force single page */
            html, body {
                height: auto !important;
                overflow: hidden !important;
            }
        }
        
        /* Additional screen-only styles */
        @media screen {
            .bill-container {
                border: 1px solid #ddd;
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
            <h4 class="fw-bold">Service Bill Receipt</h4>
        </div>

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
                <p class="mb-1">
                    <strong>Service Type:</strong>
                    <?= $serviceBooking['service_type'] ?>
                </p>
            </div>

            <!-- Right side -->
            <div class="text-end">
                <p class="mb-1">
                    <strong>Room No:</strong>
                    <?= $serviceBooking['room_no'] ?? 'N/A' ?>
                </p>
                <p class="mb-1">
                    <strong>Guest Name:</strong>
                    <?= trim(($serviceBooking['first_name'] ?? '') . ' ' . ($serviceBooking['last_name'] ?? '')) ?>
                </p>
                <p class="mb-1">
                    <strong>Booking Date:</strong>
                    <?= date('M d, Y', strtotime($serviceBooking['created_on'])) ?>
                </p>
            </div>
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
                <?php else: ?>
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 20px; color: #dc3545;">
                            <strong>No service details found</strong>
                        </td>
                    </tr>
                <?php endif; ?>
                <tr class="total-row">
                    <td colspan="5" class="text-end"><strong>Grand Total:</strong></td>
                    <td><strong>₹<?= number_format($bill['total_amount'], 2) ?></strong></td>
                </tr>
            </tbody>
        </table>

        <!-- Bill Summary -->
        <div class="bill-summary">
            <div class="row">
                <div class="col-md-6">
                    <!-- Optional content can go here -->
                </div>
                <div class="col-md-6 text-end">
                    <p><strong>Total Amount:</strong> ₹<?= number_format($bill['total_amount'], 2) ?></p>
                    <p><strong>Paid Amount:</strong> ₹<?= number_format($bill['paid_amount'], 2) ?></p>
                    <?php if ($bill['total_amount'] != $bill['paid_amount']): ?>
                    <p class="text-danger"><strong>Balance Due:</strong> ₹<?= number_format($bill['total_amount'] - $bill['paid_amount'], 2) ?></p>
                    <?php endif; ?>
                    <p>
                        <strong>Payment Status:</strong> 
                        <span class="badge bg-<?= $bill['payment_status'] === 'paid' ? 'success' : 'warning' ?>">
                            <?= strtoupper($bill['payment_status']) ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-5 pt-4 border-top">
            <p class="mb-2 text-muted">Thank you for your business!</p>
            <p class="mb-0 fw-bold text-green">Nivasan Udayana Elders Home</p>
            <p class="mb-0 mt-5 text-muted">Authorized Signatory</p>
        </div>

        <!-- Action Buttons -->
        <div class="text-center mt-4 no-print">
            <button onclick="window.print()" class="btn btn-primary">
                <i class="bi bi-printer me-2"></i>Print Bill
            </button>
            <a href="<?= base_url('servicebook/viewServiceBill') ?>?bill_id=<?= $bill['bill_id'] ?>&download=pdf" 
               class="btn btn-success">
                <i class="bi bi-download me-2"></i>Download PDF
            </a>
            <a href="<?= base_url('servicebook') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-2"></i>Back to Services
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
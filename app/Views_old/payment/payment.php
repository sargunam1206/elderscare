<!-- INTEGRATED FILE: Payment + Laundry Save & Pay Trigger -->
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
    <title>MatDash Bootstrap Admin</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .payment-card {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
        }
        .payment-method-card {
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            height: 100%;
        }
        .payment-method-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .payment-method-card.active {
            border: 2px solid #0d6efd;
            background-color: #f0f7ff;
        }
        .receipt-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .btn-payment {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
        }
        .method-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .btn-payment .fa-spinner {
    margin-right: 8px;
}

.btn-payment:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
<style>
.payment-method-card {
  border: 2px solid transparent;
  border-radius: 10px;
  transition: all 0.3s ease;
  cursor: pointer;
}

/* Default state */
.payment-method-card:hover {
  border-color: var(--primary-green);
  background-color: var(--light-green-hover);
}

/* Selected (active) state */
.payment-method-card.active {
  border-color: var(--primary-green);
  background-color: var(--light-green);
  box-shadow: 0 0 10px rgba(102, 187, 106, 0.5);
}
</style>

    </style>
    <style>
  /* ========== Global Theme Colors ========== */
:root {
  /* --primary-green: #1B5E20; */
    /* --primary-green: #1B5E20; */
  --primary-green:#66BB6A;
  --primary-green-hover: #2E7D32;
  --secondary-green: #66BB6A;
  --table-header-text: #242424;
  --light-green: #A5D6A7;
  --light-green-hover: #81C784;
  --destructive-red: #E53935;
  --destructive-red-hover: #C62828;
  --dark-gray: #333333;
  --light-gray: #f4f6f9;
  --border-color: #dee2e6;
  --white: #FFFFFF;
}
/* Keep brand color on click/focus */
.btn-primary:focus,
.btn-primary:active,
.btn-primary:focus:active {
    background-color: #1B5E20 !important;
    color: #FFFFFF !important;
    box-shadow: none !important;
    border-color: #1B5E20 !important;
}


/* ========== Typography ========== */
.page-title {
  font-size: 24px;
  font-weight: 600;
  color: var(--primary-green);
}

.section-title {
  font-size: 18px;
  font-weight: 600;
  color: var(--secondary-green);
}

.label-text {
  font-size: 14px;
  font-weight: 500;
  color: var(--dark-gray);
}

/* ========== Form Elements ========== */
.form-control, .form-select {
  font-size: 14px;
  font-weight: 400;
  border: 1px solid var(--border-color);
  border-radius: 8px;
  padding: 8px 12px;
  background-color: var(--white);
}

.form-control:focus, .form-select:focus {
  border-color: var(--secondary-green);
  box-shadow: 0 0 0 0.25rem rgba(102, 187, 106, 0.25);
}



/* ========== Tables ========== */


.table thead th {
  background-color: var(--primary-green);
  color: var( --table-header-text);
  font-weight: 600;
  padding: 12px 15px;
}

.table tbody td {
  padding: 10px 15px;
  border-bottom: 1px solid var(--border-color);
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(165, 214, 167, 0.1);
}

.table-hover tbody tr:hover {
  background-color: rgba(165, 214, 167, 0.3);
}

/* ========== Buttons ========== */
.btn {
  font-size: 14px;
  font-weight: 600;
  border-radius: 8px;
  padding: 8px 16px;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: var(--primary-green);
  border-color: var(--primary-green);
  color: var( --table-header-text);
}

.btn-primary:hover {
  background-color: var(--primary-green-hover);
  border-color: var(--primary-green-hover);
}

.btn-secondary {
  background-color: var(--light-green);
  border-color: var(--light-green);
  color: var(--primary-green);
}

.btn-secondary:hover {
  background-color: var(--light-green-hover);
  border-color: var(--light-green-hover);
}

.btn-danger {
  background-color: var(--destructive-red);
  border-color: var(--destructive-red);
  color: var(--white);
}

.btn-danger:hover {
  background-color: var(--destructive-red-hover);
  border-color: var(--destructive-red-hover);
}

/* ========== Cards ========== */
.card {
  border: none;
  border-radius: 8px;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  background-color: var(--white);
}

.card-header {
  background-color: var(--light-gray);
  border-bottom: 1px solid var(--border-color);
  font-weight: 600;
  color: var(--secondary-green);
  padding: 12px 20px;
}

/* ========== Modals ========== */
.modal-content {
  border-radius: 8px;
  border: none;
}

.modal-header {
  background-color: var(--light-gray);
  border-bottom: 1px solid var(--border-color);
  padding: 16px 20px;
}

.modal-title {
  color: var(--primary-green);
  font-weight: 600;
}

.modal-footer {
  border-top: 1px solid var(--border-color);
  padding: 16px 20px;
}

/* ========== Status Badges ========== */
.btn-warning {
  background-color: #FFA000;
  color: var(--white);
}

.btn-info {
  background-color: #0288D1;
  color: var(--white);
}

/* ========== Responsive Adjustments ========== */
@media (max-width: 768px) {
  .page-title {
    font-size: 20px;
  }
 
  .section-title {
    font-size: 16px;
  }
 
  .form-control, .form-select, .btn {
    font-size: 13px;
  }
 
  .table thead th, .table tbody td {
    padding: 8px 10px;
  }
}
/* Make checkbox green when checked */
.form-check-input:checked {
  background-color: var(--primary-green) !important;
  border-color: var(--primary-green) !important;
}

/* Optional: remove Bootstrap focus blue shadow on click */
.form-check-input:focus {
  box-shadow: 0 0 0 0.25rem rgba(102, 187, 106, 0.25) !important;
}

/* Validation styles */
.invalid-field {
    border-color: #dc3545 !important;
    background-color: #fff5f5 !important;
}

.validation-message {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
    display: none;
}

</style>
</head>
<body>
        <?= view('layout/head') ?>

    <div class="container py-5">
          <div class="row">
            <div class="col-lg-12">
                <div class="card payment-card mb-4">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Payment Summary</h4>
                        
                        <div class="table-responsive mb-4">
                            <table class="table" id="payment-summary-table">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                </thead>
                                <tbody id="payment-summary-body">
                                    <!--<tr>
                                        <td>Laundry Service</td>
                                        <td class="text-end">₹100</td>
                                    </tr>
                                    <tr class="table-active">
                                        <td><strong>Total Amount</strong></td>
                                        <td class="text-end"><strong>₹100</strong></td>
                                    </tr>-->
                                </tbody>
                            </table>
                        </div>


 <!-- Action Buttons in same row -->
                <div class="action-buttons mt-5">
                   <form method="post" action="<?= base_url('servicepay'); ?>"> 

                  <input type="hidden" id="service_amount">
                    
                    <!--<button class="btn btn-secondary me-5" onclick="goBackToLaundry()">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </button>
                    <button class="btn btn-success ms-5"  type="submit" id="completePaymentBtn">
                        Complete Payment
                    </button>-->
                    </form>

                </div>

                       
                        <h5 class="mb-3">Select Payment Method</h5>
                        
                        <div class="row g-3 mb-4">
                            <!-- Cash Payment -->
                            <div class="col-md-6">
                                <div class="card payment-method-card p-3" data-method="cash">
                                    <div class="d-flex align-items-center">
                                        <div class="method-icon me-3">💵</div>
                                        <div>
                                            <h6 class="mb-1">Cash Payment</h6>
                                            <p class="text-muted small mb-0">Pay with cash at reception</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- UPI Payment -->
                            <div class="col-md-6">
                                <div class="card payment-method-card p-3" data-method="upi">
                                    <div class="d-flex align-items-center">
                                        <div class="method-icon me-3">📱</div>
                                        <div>
                                            <h6 class="mb-1">UPI Payment</h6>
                                            <p class="text-muted small mb-0">Pay via UPI apps</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Card Payment -->
                            <div class="col-md-6">
                                <div class="card payment-method-card p-3" data-method="card">
                                    <div class="d-flex align-items-center">
                                        <div class="method-icon me-3">💳</div>
                                        <div>
                                            <h6 class="mb-1">Credit/Debit Card</h6>
                                            <p class="text-muted small mb-0">Pay with card</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hotel Wallet -->
                            <div class="col-md-6">
                                <div class="card payment-method-card p-3" data-method="wallet">
                                    <div class="d-flex align-items-center">
                                        <div class="method-icon me-3">🏨</div>
                                        <div>
                                            <h6 class="mb-1">Wallet</h6>
                                            <p class="text-muted small mb-0">Use your credits</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method Forms (initially hidden) -->
                        <div id="payment-forms">
                            <!-- Cash Payment Form -->

                            <form method="post" action="<?= base_url('payrecord');?>">

                              <input type="hidden" name="service_type" value="<?= $service_type ?>">
                              <input type="hidden" name="amount" value="<?= $amount ?>">
                              <input type="hidden" name="room_no" value="<?= $room_no ?>">
                              <input type="hidden" name="guest_id" value="<?= $guest_id ?>">
                              <input type="hidden" name="first_name" value="<?= $first_name ?>">
                              <input type="hidden" name="current_date" value="<?= $current_date ?>">
                              <input type="hidden" name="services_info[]"   value="<?= htmlspecialchars(json_encode($services_info), ENT_QUOTES, 'UTF-8') ?>">
                        

                            <div id="cash-form" class="payment-form" style="display:none">
                                  <div class="mb-3">
                                    <label class="form-label">Bill No</label>
                                    <input type="text" class="form-control" name="bill_no" placeholder="Enter Bill No">
                                </div>
                            </div>
                            
                            <!-- UPI Payment Form -->
                            <div id="upi-form" class="payment-form" style="display:none">
                                <div class="mb-3">
                                    <label class="form-label">Transcation ID</label>
                                    <input type="text" class="form-control" placeholder="yourname@upi" name="upi_trans">
                                </div>
                               
                            </div>
                            
                            <!-- Card Payment Form -->
                            <div id="card-form" class="payment-form" style="display:none">
                                <div class="mb-3">
                                    <label class="form-label">Transcation ID</label>
                                    <input type="text" class="form-control" name="card_trans" placeholder="Enter Transcation Id">
                                </div>
                               <!-- <div class="row g-2">
                                    <div class="col-md-6">
                                        <label class="form-label">Expiry Date</label>
                                        <input type="text" class="form-control" placeholder="MM/YY">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">CVV</label>
                                        <input type="text" class="form-control" placeholder="123">
                                    </div>
                                </div>
                                <div class="mb-3 mt-2">
                                    <label class="form-label">Cardholder Name</label>
                                    <input type="text" class="form-control" placeholder="John Smith">
                                </div> -->
                            </div>
                            
                            <!-- Hotel Wallet Form -->
                            <div id="wallet-form" class="payment-form" style="display:none">
                               <!-- <div class="mb-3">
                                    <label class="form-label">Wallet PIN</label>
                                    <input type="password" class="form-control" placeholder="Enter 4-digit PIN">
                                </div> -->
                               <div class="alert alert-success">
                                    <i class="fas fa-success-circle me-2"></i>
                                    Current balance: <strong id="balance">₹0</strong>
                                </div>
                            </div>

                               <div class="action-buttons mt-5">
                    <button class="btn btn-secondary me-5" onclick="goBackToLaundry()">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </button>
                    <button class="btn btn-success ms-6" name="submit" type="submit" id="completePaymentBtn">
                        Submit
                    </button>




                    
                </div>
            </form>
                        </div>
                    </div>
                </div>
            </div>
            
      

  <style>
        /* Typography Scale */
        :root {
            --font-size-xl: 28px;   /* Main headers */
            --font-size-lg: 22px;   /* Section headers */
            --font-size-md: 18px;   /* Important text */
            --font-size-sm: 16px;   /* Regular text */
            --font-size-xs: 14px;   /* Secondary text */
        }

        /* Modal Styling */
        #receiptPreviewModal .modal-dialog {
            max-width: 800px;
        }
        
        .receipt-container {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        
        .hotel-logo {
            max-height: 100px;
            margin-bottom: 20px;
        }
        .section-title {
  background-color: #f0f0f0; /* Light gray for A4 version */
  padding: 8px 12px;
  border-radius: 4px;
}

.text-uppercase {
  background-color: #e0f7fa; /* Light blue for screen view */
  padding: 8px 12px;
  border-radius: 4px;
}

        
        /* A4 Print/PDF Styling */
        @media print, screen {
            .a4-receipt {
                width: 210mm;
                min-height: 297mm;
                padding: 20mm;
                margin: 0 auto;
                background: white;
                box-shadow: 0 0 5px rgba(0,0,0,0.1);
            }
            
            .a4-receipt .hotel-header {
                border-bottom: 2px solid #0d6efd;
                padding-bottom: 15px;
                margin-bottom: 30px;
                text-align: center;
            }
            
            .a4-receipt .hotel-name {
                font-size: var(--font-size-xl);
                font-weight: 700;
                color: #2c3e50;
                margin-bottom: 5px;
            }
            
            .a4-receipt .invoice-meta {
                display: flex;
                justify-content: space-between;
                margin-bottom: 25px;
            }
            
            .a4-receipt .invoice-number {
                background-color: #f8f9fa;
                padding: 8px 15px;
                border-radius: 6px;
                font-weight: 600;
                font-size: var(--font-size-sm);
            }
            
            .a4-receipt .client-details {
                background-color: #f8f9fa;
                border-radius: 8px;
                padding: 20px;
                margin-bottom: 30px;
            }
            
            .a4-receipt .section-title {
                font-size: var(--font-size-lg);
                color: #2c3e50;
                margin-bottom: 15px;
                border-bottom: 1px solid #eee;
                padding-bottom: 8px;
            }
            
            /* Enhanced Services Table */
            .a4-receipt .service-table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 30px;
                font-size: var(--font-size-sm);
            }
            
            .a4-receipt .service-table thead th {
                background-color: #2c3e50;
                color: white;
                padding: 12px 15px;
                text-align: left;
                font-weight: 600;
            }
            
            .a4-receipt .service-table tbody td {
                padding: 12px 15px;
                border-bottom: 1px solid #eee;
            }
            
            .a4-receipt .service-table tbody tr:hover {
                background-color: #f9f9f9;
            }
            
            .a4-receipt .service-table .text-end {
                text-align: right;
            }
            
            .a4-receipt .service-table tfoot td {
                padding: 12px 15px;
                font-weight: 600;
            }
            
            .a4-receipt .total-row {
                background-color: #f8f9fa;
                font-size: var(--font-size-md);
            }
            
            .a4-receipt .total-amount {
                color: #27ae60;
                font-weight: 700;
            }
            
            .a4-receipt .payment-info {
                background-color: #f8f9fa;
                border-radius: 8px;
                padding: 20px;
                margin-bottom: 25px;
            }
            
            .a4-receipt .thank-you-note {
                border-top: 2px dashed #ddd;
                padding-top: 20px;
                margin-top: 30px;
                font-style: italic;
                text-align: center;
                font-size: var(--font-size-md);
                color: #7f8c8d;
            }
        }
        
        /* Print specific styles */
        @media print {
            body {
                background: white;
                margin: 0;
                padding: 0;
            }
            .a4-receipt {
                box-shadow: none;
                padding: 20mm;
                width: 100%;
                height: 100%;
            }
            .no-print {
                display: none !important;
            }
        }
        
        /* Modal-specific adjustments */
        #receiptPreviewContent .receipt-container {
            padding: 20px;
        }
        
        #receiptPreviewContent .hotel-name {
            font-size: var(--font-size-lg);
            font-weight: 700;
            color: #2c3e50;
        }
        
        #receiptPreviewContent .service-table {
            font-size: var(--font-size-xs);
        }
    </style>

<style>
    .receipt-header {
        margin-bottom: 30px;
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 20px;
    }

    .service-title-section {
        text-align: center;
        margin-bottom: 25px;
    }

    .receipt-preview-title {
        color: #4a6baf;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .main-service-title {
        margin: 0;
        color: #2a5699;
        font-size: 2rem;
        font-weight: 700;
        text-transform: capitalize;
    }

    .logo-info-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 30px;
    }

    .logo-wrapper {
        text-align: center;
        flex: 0 0 20%;
    }

    .hotel-logo {
        max-height: 80px;
        max-width: 100%;
        margin-bottom: 10px;
    }

    .hotel-name-below {
        font-weight: 600;
        color: #333;
        font-size: 1.1rem;
    }

    .hotel-info {
        flex: 1;
        text-align: right;
    }

    .hotel-address, .hotel-contact {
        margin: 3px 0;
        color: #666;
        font-size: 0.9rem;
    }

    .invoice-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #f5f8fa;
        padding: 10px 15px;
        border-radius: 4px;
        margin-top: 10px;
        /* display: inline-block; */
    }

    .invoice-info, .invoice-datetime {
        display: inline-block;
        font-size: 0.9rem;
        margin-left: 15px;
    }

    .invoice-number {
        font-weight: 600;
        color: #2a5699;
    }

    @media (max-width: 768px) {
        .logo-info-section {
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }
        
        .logo-wrapper, .hotel-info {
            width: 100%;
            text-align: center;
        }
        
        .invoice-meta {
            display: block;
            margin-top: 15px;
        }
        
        .invoice-info, .invoice-datetime {
            display: block;
            margin: 5px 0;
        }
    }
</style>
</head>
<body>


<!-- Receipt Modal -->




<!-- Demo Trigger Button -->



                    </div>
                </div>
                
             <!--   <div class="mb-4">
                   
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="termsCheck">
                        <label class="form-check-label" for="termsCheck">
                            I have read and agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms & Conditions</a>.
                        </label>
                    </div>
                    
                 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="privacyCheck">
                        <label class="form-check-label" for="privacyCheck">
                            I have read and agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a>.
                        </label>
                    </div>
                </div> -->

                <!-- Action Buttons in same row -->
                <div class="action-buttons mt-5">
                    <!--<button class="btn btn-secondary me-5" onclick="goBackToLaundry()">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </button>
                    <button class="btn btn-success ms-6" id="completePaymentBtn">
                        Submit
                    </button> -->





                </div>

                <!-- Terms & Conditions Modal -->
                <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6>1. Payment Terms</h6>
                                <p>All payments must be made in full before services are rendered. We accept cash, credit cards, and approved digital payment methods.</p>
                                
                                <h6>2. Cancellation Policy</h6>
                                <p>Cancellations must be made at least 24 hours prior to the scheduled service time to receive a full refund.</p>
                                
                                <h6>3. Service Guarantee</h6>
                                <p>We guarantee all services will be performed to the highest standards. If you're not satisfied, please notify us within 24 hours.</p>
                                
                                <h6>4. Liability</h6>
                                <p>The hotel is not responsible for any personal items left in rooms or with staff during service provision.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Privacy Policy Modal -->
                <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6>1. Information Collection</h6>
                                <p>We collect personal information necessary to provide our services, including name, contact details, and payment information.</p>
                                
                                <h6>2. Data Usage</h6>
                                <p>Your information will only be used to process your requests and improve our services. We will never sell your data to third parties.</p>
                                
                                <h6>3. Data Protection</h6>
                                <p>We implement industry-standard security measures to protect your personal information from unauthorized access.</p>
                                
                                <h6>4. Your Rights</h6>
                                <p>You have the right to access, correct, or delete your personal information at any time by contacting our front desk.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Payment method selection
        document.querySelectorAll('.payment-method-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.payment-method-card').forEach(c => c.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Complete payment validation
        document.getElementById('completePaymentBtn').addEventListener('click', function(e) {
            const termsChecked = document.getElementById('termsCheck').checked;
            const privacyChecked = document.getElementById('privacyCheck').checked;
            
            if (!termsChecked || !privacyChecked) {
                e.preventDefault();
                alert('Please agree to both Terms & Conditions and Privacy Policy before completing payment.');
                return;
            }
            
            // Get selected payment method
            const selectedMethod = document.querySelector('.payment-method-card.active');
            if (!selectedMethod) {
                alert('Please select a payment method.');
                return;
            }
            
            // Proceed with payment
            alert('Payment processed successfully!');
            // Here you would typically submit the payment form
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>

    <!-- Integration Logic -->





    <script>
      // Example: From laundry.js or wherever Save & Pay is triggered
      function showPaymentFromLaundry(totalAmount) {
        // Set summary dynamically if needed
        document.getElementById('payment-summary-body').innerHTML = `
          <tr><td><?=$service_type?></td><td>₹${totalAmount}</td></tr>
          <tr><td><strong>Total Amount</strong></td><td id="total-amount">₹${totalAmount}</td></tr>`;
        // Show this page (if in modal, trigger modal)
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    </script>



    <script>
  function showPaymentFromLaundry(amount) {
    // Close laundry modal if open
    const laundryPopup = document.getElementById("laundry-popup");
    if (laundryPopup) {
      laundryPopup.style.display = "none";
    }

    // Set the payment amount in summary table
    document.getElementById("payment-summary-body").innerHTML = `
      <tr><td><?=$service_type?></td><td>₹${amount}</td></tr>
      <tr><td><strong>Total Amount</strong></td><td id="total-amount">₹${amount}</td></tr>
    `;

    // Optional: Scroll or focus on payment section
    const container = document.querySelector(".container.py-5");
    if (container) container.scrollIntoView({ behavior: "smooth" });
  }
</script>








  <script>
        // Function to parse URL parameters
     function getUrlParameter(name) {
    const regex = new RegExp(name + '=([^/]+)');
    const match = window.location.pathname.match(regex);
    return match ? decodeURIComponent(match[1]) : null;
}

        // On page load, populate data from URL and sessionStorage
        document.addEventListener('DOMContentLoaded', function() {
            // Get amount from URL
              const amount =<?= $amount; ?> || '100';
            
            // Get cart data from sessionStorage
            const cartData = JSON.parse(sessionStorage.getItem('laundryCartData') || '{}')

            document.getElementById('service_amount').value=amount;
            
            // Update payment summary
            document.getElementById('payment-summary-body').innerHTML = `
                <tr><td><?=$service_type?></td><td class="text-end">₹${amount}</td></tr>
                <tr class="table-active"><td><strong>Total Amount</strong></td><td class="text-end"><strong>₹${amount}</strong></td></tr>
            `;
            
            // Update receipt preview
            if (cartData.guest) {
                document.getElementById('receipt-guest').textContent = cartData.guest;
            }
            if (cartData.room) {
                document.getElementById('receipt-room').textContent = cartData.room;
            }
            document.getElementById('receipt-total').textContent = `₹${amount}`;
            
            // Set current date
            const today = new Date();
            document.getElementById('receipt-date').textContent = today.toLocaleDateString();
            
            // Clear stored data after use
            sessionStorage.removeItem('laundryCartData');

            // Initialize first payment method
            document.querySelector('.payment-method-card').click();
        });

        // Payment method selection handler
        document.querySelectorAll('.payment-method-card').forEach(card => {
            card.addEventListener('click', function() {
                // Remove active class from all cards
                document.querySelectorAll('.payment-method-card').forEach(c => {
                    c.classList.remove('active');
                });
                
                // Add active class to selected card
                this.classList.add('active');
                
                // Get selected method
                const method = this.getAttribute('data-method');
                
                // Hide all forms
                document.querySelectorAll('.payment-form').forEach(form => {
                    form.style.display = 'none';
                });
                
                // Show selected form


                document.getElementById(`${method}-form`).style.display = 'block';
                if(method=="wallet"){
                  var guestid=<?= $guest_id;?>;


                 
  fetch(`/viyoma/guest_wallet_id/${guestid}`)
                .then(response => response.json())
                
                .then(data => {
                

      
      document.getElementById('balance').innerHTML = data[0]['balance'];
       })
                .catch(error => {
                   
                    console.error(error);
                });








                }

            });
        });

        // Back button functionality
        function goBackToLaundry() {
            window.location.href = 'eco-add-product1.html';
        }

        // Complete payment validation
        document.getElementById('completePaymentBtn').addEventListener('click', function(e) {
            // Check terms and conditions
            const termsChecked = document.getElementById('termsCheck').checked;
            const privacyChecked = document.getElementById('privacyCheck').checked;
            
            if (!termsChecked || !privacyChecked) {
                e.preventDefault();
                alert('Please agree to both Terms & Conditions and Privacy Policy before completing payment.');
                return;
            }
            
            // Get selected payment method
            const selectedMethod = document.querySelector('.payment-method-card.active');
            if (!selectedMethod) {
                alert('Please select a payment method.');
                return;
            }
            
            const method = selectedMethod.getAttribute('data-method');
            
            // Validate based on payment method
            let isValid = true;
            let errorMessage = '';
            
            switch(method) {
                case 'upi':
                    const upiId = document.querySelector('#upi-form input').value;
                    if (!upiId || !upiId.includes('@')) {
                        isValid = false;
                        errorMessage = 'Please enter a valid UPI ID';
                    }
                    break;
                    
                case 'card':
                    const cardNumber = document.querySelector('#card-form input:nth-of-type(1)').value;
                    const expiry = document.querySelector('#card-form input:nth-of-type(2)').value;
                    const cvv = document.querySelector('#card-form input:nth-of-type(3)').value;
                    const name = document.querySelector('#card-form input:nth-of-type(4)').value;
                    
                    if (!cardNumber || cardNumber.replace(/\s/g, '').length !== 16) {
                        isValid = false;
                        errorMessage = 'Please enter a valid 16-digit card number';
                    } else if (!expiry || !expiry.match(/^\d{2}\/\d{2}$/)) {
                        isValid = false;
                        errorMessage = 'Please enter a valid expiry date (MM/YY)';
                    } else if (!cvv || cvv.length !== 3) {
                        isValid = false;
                        errorMessage = 'Please enter a valid 3-digit CVV';
                    } else if (!name) {
                        isValid = false;
                        errorMessage = 'Please enter cardholder name';
                    }
                    break;
                    
                case 'wallet':
                    const pin = document.querySelector('#wallet-form input').value;
                    if (!pin || pin.length !== 4) {
                        isValid = false;
                        errorMessage = 'Please enter a valid 4-digit PIN';
                    }
                    break;
            }
            
            if (!isValid) {
                e.preventDefault();
                alert(errorMessage);
                return;
            }
            
            // Process payment
            alert(`Payment processed successfully via ${method.toUpperCase()}!`);
            
            // Optional: Redirect to confirmation page
            // window.location.href = 'payment-confirmation.html';
        });
    </script>
<!-- go to Laundry back button -->
<script>
  function goBackToLaundry() {
    // Check if we came from the laundry page
    const referrer = document.referrer;
    const currentUrl = window.location.href;
    
    // If coming from laundry page, go back
    if (referrer.includes('your-laundry-page.html')) {
      window.history.back();
    } else {
      
       // Redirect directly to your laundry page
    window.location.href = 'eco-add-product1.html';
    }
  }

  // Rest of your existing payment page scripts...
</script>
<script>
document.getElementById('completePaymentBtn').addEventListener('click', function(e) {
  const termsChecked = document.getElementById('termsCheck').checked;
  const privacyChecked = document.getElementById('privacyCheck').checked;
  
  if (!termsChecked || !privacyChecked) {
    e.preventDefault();
    alert('Please agree to both Terms & Conditions and Privacy Policy before completing payment.');
  }
});


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- PDF-lib for PDF generation -->
<script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>
<!-- Download.js for file downloads -->
<script src="https://unpkg.com/downloadjs@1.4.7"></script>


<script>
// Complete Hotel Receipt System with Enhanced UI
document.addEventListener('DOMContentLoaded', function() {
    // Global receipt data storage
    let currentReceiptData = {
        hotelName: "Grand Plaza Hotel",
        hotelAddress: "123 Luxury Street, Mumbai, India",
        hotelContact: "+91 22 1234 5678 | info@grandplaza.com",
        hotelLogo: "../assets/images/logos/Hotel-room-logo.png",
        invoiceNumber: "",
        date: "",
        time: "",
        client: {
            name: "John Smith",
            email: "john.smith@example.com",
            phone: "+1 234 567 8901",
            address: "123 Main St, New York, USA"
        },
        items: [
            { name: "Deluxe Room (3 nights)", price: 45000, quantity: 1 },
            { name: "Laundry Service", price: 1200, quantity: 2 },
            { name: "Mini Bar", price: 3500, quantity: 1 },
            { name: "Spa Package", price: 6000, quantity: 1 }
        ],
        taxRate: 12,
        paymentMethod: "Credit Card (VISA •••• 4242)",
        paymentStatus: "Paid",
        notes: "Thank you for choosing Grand Plaza Hotel. We hope to serve you again soon!"
    };

    // UI Elements
    const elements = {
        modal: new bootstrap.Modal(document.getElementById('receiptPreviewModal')),
        content: document.getElementById('receiptPreviewContent'),
        downloadBtn: document.getElementById('downloadReceiptBtn'),
        printBtn: document.getElementById('printReceiptBtn'),
        generateBtn: document.getElementById('generateReceiptBtn'),
        a4Template: document.getElementById('a4Template')
    };

    // Initialize the receipt system
    function initReceiptSystem() {
        // Set up event listeners
        elements.generateBtn.addEventListener('click', generateSampleReceipt);
        elements.downloadBtn.addEventListener('click', downloadReceipt);
        elements.printBtn.addEventListener('click', printReceipt);
    }

    // Generate sample receipt data
    function generateSampleReceipt() {
        
        // Generate date-based invoice number (e.g., GP-20230806-001)
        const now = new Date();
        const dateStr = now.toISOString().slice(0, 10).replace(/-/g, '');
        currentReceiptData.invoiceNumber = `GP-${dateStr}-${Math.floor(100 + Math.random() * 900)}`;
        
        // Set current date and time
        currentReceiptData.date = now.toLocaleDateString('en-IN');
        currentReceiptData.time = now.toLocaleTimeString('en-IN', { hour: '2-digit', minute: '2-digit' });
        
        // Update receipt preview
        updateReceiptPreview();
        elements.modal.show();
    }

    // Generate HTML for receipt (used for both preview and A4)
    function generateReceiptHTML(isA4 = false) {
        // Calculate amounts
        const subtotal = currentReceiptData.items.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const tax = subtotal * (currentReceiptData.taxRate / 100);
        const total = subtotal + tax;

        return `
            <div class="${isA4 ? 'a4-receipt' : 'receipt-container'}">
                <!-- Hotel Header with Logo -->
               
<div class="receipt-header">
 

    <!-- Logo and Info Section -->
    <div class="logo-info-section">
        <div class="logo-wrapper">
            <img src="${currentReceiptData.hotelLogo}" alt="Hotel Logo" class="hotel-logo">
            <div class="hotel-name-below">${currentReceiptData.hotelName}</div>
        </div>
        <div class="hotel-info">
            <p class="hotel-address">${currentReceiptData.hotelAddress}</p>
            <p class="hotel-contact">${currentReceiptData.hotelContact}</p>
           
        </div>
        
    </div>
     <!-- Invoice Meta -->
    <div class="invoice-meta">
        <div class="invoice-info">
            <strong>Invoice No:</strong> 
            <span class="invoice-number">${currentReceiptData.invoiceNumber}</span>
        </div>
        <div class="invoice-datetime">
            <div><strong>Date:</strong> ${currentReceiptData.date}</div>
            <div><strong>Time:</strong> ${currentReceiptData.time}</div>
        </div>
    </div>
</div>

   
</div>
                
                <!-- Client Details -->
                <div class="client-details mb-4">
                    <h4 class="${isA4 ? 'section-title' : 'text-uppercase text-muted mb-3'}">Client Details</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-2"><strong>Name:</strong> ${currentReceiptData.client.name}</p>
                            <p class="mb-2"><strong>Email:</strong> ${currentReceiptData.client.email}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2"><strong>Phone:</strong> ${currentReceiptData.client.phone}</p>
                            <p class="mb-2"><strong>Address:</strong> ${currentReceiptData.client.address}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Services Table -->
                <h4 class="${isA4 ? 'section-title' : 'text-uppercase text-muted mb-3'}">Services Rendered</h2>
               <div class="table-responsive">
  <table class="table table-bordered table-striped align-middle text-nowrap service-table shadow-sm">
    <thead class="table-primary text-center">
      <tr>
        <th>Description</th>
        <th class="text-end">Rate (₹)</th>
        <th class="text-end">Qty</th>
        <th class="text-end">Amount (₹)</th>
      </tr>
    </thead>
    <tbody>
      ${currentReceiptData.items.map(item => `
        <tr>
          <td>${item.name}</td>
          <td class="text-end">${item.price.toLocaleString('en-IN')}</td>
          <td class="text-end">${item.quantity}</td>
          <td class="text-end">${(item.price * item.quantity).toLocaleString('en-IN')}</td>
        </tr>
      `).join('')}
    </tbody>
    <tfoot class="table-light">
      <tr>
        <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
        <td class="text-end fw-semibold">₹${subtotal.toLocaleString('en-IN')}</td>
      </tr>
      <tr>
        <td colspan="3" class="text-end"><strong>Tax (${currentReceiptData.taxRate}%):</strong></td>
        <td class="text-end fw-semibold">₹${tax.toLocaleString('en-IN')}</td>
      </tr>
      <tr class="table-success">
        <td colspan="3" class="text-end"><strong>Total:</strong></td>
        <td class="text-end fw-bold fs-5">₹${total.toLocaleString('en-IN')}</td>
      </tr>
    </tfoot>
  </table>
</div>

                
                <!-- Payment Information -->
                <div class="${isA4 ? 'payment-info' : 'row mb-4'}">
                    <div class="col-md-6">
                        <p class="mb-2"><strong>Payment Method:</strong> ${currentReceiptData.paymentMethod}</p>
                        <p class="mb-2"><strong>Payment Status:</strong> 
                            <span class="badge bg-success">${currentReceiptData.paymentStatus}</span>
                        </p>
                    </div>
                </div>
                
                <!-- Thank You Note -->
                <div class="thank-you-note">
                    <p>${currentReceiptData.notes}</p>
                </div>
            </div>
        `;
    }

    // Update receipt preview UI
    function updateReceiptPreview() {
        elements.content.innerHTML = generateReceiptHTML();
    }

    // Download PDF receipt
    async function downloadReceipt() {
        if (!currentReceiptData.invoiceNumber) {
            alert('Please generate a receipt first');
            return;
        }

        setLoading(elements.downloadBtn, true);
        
        try {
            // Generate A4 receipt HTML
            elements.a4Template.style.display = 'block';
            elements.a4Template.innerHTML = generateReceiptHTML(true);
            
            // Convert HTML to PDF
            const { PDFDocument, rgb, StandardFonts } = PDFLib;
            const pdfDoc = await PDFDocument.create();
            
            // A4 dimensions in points (1mm = 2.83465 points)
            const page = pdfDoc.addPage([595.28, 841.89]); // A4 size in points (210mm x 297mm)
            const { width, height } = page.getSize();
            const margin = 40; // 40pt margin on all sides
            
            // Embed fonts
            const font = await pdfDoc.embedFont(StandardFonts.HelveticaBold);
            const regularFont = await pdfDoc.embedFont(StandardFonts.Helvetica);
            
            // Draw receipt content
            const receiptContent = [
                // Hotel Header
                { text: currentReceiptData.hotelName, x: margin, y: height - margin - 30, size: 24, font, color: rgb(0.1, 0.1, 0.3) },
                { text: currentReceiptData.hotelAddress, x: margin, y: height - margin - 55, size: 12, font: regularFont, color: rgb(0.4, 0.4, 0.4) },
                { text: currentReceiptData.hotelContact, x: margin, y: height - margin - 70, size: 12, font: regularFont, color: rgb(0.4, 0.4, 0.4) },
                
                // Invoice Meta
                { text: `Invoice No: ${currentReceiptData.invoiceNumber}`, x: margin, y: height - margin - 110, size: 14, font: regularFont },
                { text: `Date: ${currentReceiptData.date} | Time: ${currentReceiptData.time}`, x: width - margin - 200, y: height - margin - 110, size: 12, font: regularFont },
                
                // Client Details
                { text: 'Client Details:', x: margin, y: height - margin - 150, size: 16, font },
                { text: currentReceiptData.client.name, x: margin, y: height - margin - 170, size: 14, font: regularFont },
                { text: `${currentReceiptData.client.email} | ${currentReceiptData.client.phone}`, x: margin, y: height - margin - 190, size: 12, font: regularFont },
                { text: currentReceiptData.client.address, x: margin, y: height - margin - 210, size: 12, font: regularFont },
                
                // Services Header
                { text: 'Services Rendered:', x: margin, y: height - margin - 250, size: 16, font }
            ];
            
            // Draw receipt content
            receiptContent.forEach(item => {
                page.drawText(item.text, {
                    x: item.x,
                    y: item.y,
                    size: item.size,
                    font: item.font || regularFont,
                    color: item.color || rgb(0, 0, 0)
                });
            });
            
            // Draw services table headers
            let yPos = height - margin - 280;
            const tableLeft = margin;
            const rateLeft = width - margin - 250;
            const qtyLeft = width - margin - 180;
            const amountLeft = width - margin - 100;
            
            // Table headers
            page.drawText('Description', { x: tableLeft, y: yPos, size: 14, font });
            page.drawText('Rate', { x: rateLeft, y: yPos, size: 14, font });
            page.drawText('Qty', { x: qtyLeft, y: yPos, size: 14, font });
            page.drawText('Amount', { x: amountLeft, y: yPos, size: 14, font });
            
            // Table items
            yPos -= 25;
            currentReceiptData.items.forEach(item => {
                page.drawText(item.name, { x: tableLeft, y: yPos, size: 12, font: regularFont });
                page.drawText(`₹${item.price.toLocaleString('en-IN')}`, { x: rateLeft, y: yPos, size: 12, font: regularFont });
                page.drawText(item.quantity.toString(), { x: qtyLeft, y: yPos, size: 12, font: regularFont });
                page.drawText(`₹${(item.price * item.quantity).toLocaleString('en-IN')}`, { x: amountLeft, y: yPos, size: 12, font: regularFont });
                yPos -= 20;
            });
            
            // Calculate totals
            const subtotal = currentReceiptData.items.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const tax = subtotal * (currentReceiptData.taxRate / 100);
            const total = subtotal + tax;
            
            // Draw totals
            yPos -= 25;
            page.drawText(`Subtotal:`, { x: amountLeft - 100, y: yPos, size: 12, font: regularFont });
            page.drawText(`₹${subtotal.toLocaleString('en-IN')}`, { x: amountLeft, y: yPos, size: 12, font: regularFont });
            
            yPos -= 20;
            page.drawText(`Tax (${currentReceiptData.taxRate}%):`, { x: amountLeft - 100, y: yPos, size: 12, font: regularFont });
            page.drawText(`₹${tax.toLocaleString('en-IN')}`, { x: amountLeft, y: yPos, size: 12, font: regularFont });
            
            yPos -= 25;
            page.drawText(`Total:`, { x: amountLeft - 100, y: yPos, size: 14, font });
            page.drawText(`₹${total.toLocaleString('en-IN')}`, { x: amountLeft, y: yPos, size: 14, font, color: rgb(0, 0.5, 0) });
            
            // Payment info
            yPos -= 40;
            page.drawText(`Payment Method: ${currentReceiptData.paymentMethod}`, { x: tableLeft, y: yPos, size: 12, font: regularFont });
            
            yPos -= 20;
            page.drawText(`Status: ${currentReceiptData.paymentStatus}`, { x: tableLeft, y: yPos, size: 12, font: regularFont, color: rgb(0, 0.5, 0) });
            
            // Thank you note
            yPos -= 40;
            page.drawText(currentReceiptData.notes, { x: tableLeft, y: yPos, size: 12, font: regularFont, color: rgb(0.4, 0.4, 0.4) });

            const pdfBytes = await pdfDoc.save();
            const fileName = `Receipt_${currentReceiptData.invoiceNumber}.pdf`;
            download(pdfBytes, fileName, "application/pdf");
            
            // Hide A4 template
            elements.a4Template.style.display = 'none';
            elements.a4Template.innerHTML = '';
            
        } catch (error) {
            console.error('Download failed:', error);
            alert('Could not generate PDF receipt. Please try again.');
        } finally {
            setLoading(elements.downloadBtn, false);
        }
    }

    // Print receipt
    function printReceipt() {
        if (!currentReceiptData.invoiceNumber) {
            alert('Please generate a receipt first');
            return;
        }

        setLoading(elements.printBtn, true);
        
        try {
            // Generate A4 receipt HTML
            elements.a4Template.style.display = 'block';
            elements.a4Template.innerHTML = generateReceiptHTML(true);
            
            // Print the A4 receipt
            window.print();
            
            // Hide A4 template after printing
            setTimeout(() => {
                elements.a4Template.style.display = 'none';
                elements.a4Template.innerHTML = '';
            }, 500);
            
        } catch (error) {
            console.error('Print failed:', error);
            alert('Could not print receipt. Please try again.');
        } finally {
            setLoading(elements.printBtn, false);
        }
    }

    // Set loading state for buttons
    function setLoading(button, isLoading) {
        const icon = button.querySelector('i');
        if (!icon) return;
        
        button.disabled = isLoading;
        if (isLoading) {
            icon.classList.replace(icon.classList.contains('fa-download') ? 'fa-download' : 'fa-print', 'fa-spinner');
            icon.classList.add('fa-spin');
        } else {
            icon.classList.replace('fa-spinner', icon.classList.contains('fa-download') ? 'fa-download' : 'fa-print');
            icon.classList.remove('fa-spin');
        }
    }

    // Initialize the receipt system
    initReceiptSystem();
});
</script>
<!-- Add these right before your closing </body> tag -->
<script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>
<script src="https://unpkg.com/downloadjs@1.4.7"></script>
<script src="https://unpkg.com/@pdf-lib/fontkit@1.0.0/dist/fontkit.umd.min.js"></script>
  </body>
</html>

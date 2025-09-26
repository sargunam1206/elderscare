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
    </style>
</head>
<body>
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
                                        <th>Charge</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                </thead>
                                <tbody id="payment-summary-body">
                                 
                                </tbody>
                            </table>
                        </div>


 <!-- Action Buttons in same row -->
                <div class="action-buttons mt-5">
                   <form method="post" action="<?= base_url('chargepay_store'); ?>"> 
                    <input type="hidden" name="charge_id" value=<?= $charge_id ?>>
                  <input type="hidden" name="room_no" value=<?= $room_no ?>>
                  <input type="hidden" name="guest_id" value=<?= $guest_id ?>>
                   <input type="hidden" name="charge_monthyear" value=<?= $charge_monthyear ?>>

                   <input type="hidden" name="charges" value=<?= json_encode($charges) ?>>
                   <input type="hidden" name="paid_amount" value=<?= json_encode($paid_amount) ?>>
                   <input type="hidden" name="actual_amount" value=<?= json_encode($actual_amount) ?>>
                   <input type="hidden" name="total_paidamount" value=<?= json_encode($total_paidamount) ?>> 
                 
                    
              
                   

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
                               
                            </div>
                            
                            <!-- Hotel Wallet Form -->
                            <div id="wallet-form" class="payment-form" style="display:none">
                             
                               <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i>
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
          
                        </div>
                    </div>
                </div>
            </div>
              </form>
      

  


</head>
<body>


                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <!-- Bootstrap JS -->
    <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>




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
              const amount ='' || '100';
            
            // Get cart data from sessionStorage
            const cartData = JSON.parse(sessionStorage.getItem('laundryCartData') || '{}')

            //document.getElementById('service_amount').value=amount;
            
            // Update payment summary
            document.getElementById('payment-summary-body').innerHTML = `
               <?php 
               $count=0;
               foreach($charges as $type): ?>

                <tr><td><?=$type ?> </td><td class="text-end">₹<?=$paid_amount[$count] ?></td></tr>
               
               
                <?php 
                $count++;
            endforeach;?>  

            
             <tr class="table-active"><td><strong>Total Amount</strong></td><td class="text-end"><strong>₹${<?= $total_paidamount?>}</strong></td></tr>`;
            
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


                 
  fetch(`/guest_wallet_id/${guestid}`)
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

   
    
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- PDF-lib for PDF generation -->
<script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>
<!-- Download.js for file downloads -->
<script src="https://unpkg.com/downloadjs@1.4.7"></script>


<!-- Add these right before your closing </body> tag -->
<script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>
<script src="https://unpkg.com/downloadjs@1.4.7"></script>
<script src="https://unpkg.com/@pdf-lib/fontkit@1.0.0/dist/fontkit.umd.min.js"></script>
  </body>
</html>
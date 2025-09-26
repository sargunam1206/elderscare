<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>Charges Management</title>
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f4f6f9;
      font-size: 14px;
    }

    .form-label {
      font-weight: bold;
    }

    /* Modal specific styles */
    .modal-lg-custom {
      max-width: 800px;
    }
    .modal-content {
      border-radius: 10px;
    }
    .modal-header {
      border-bottom: 1px solid #dee2e6;
    }
    .modal-footer {
      border-top: 1px solid #dee2e6;
    }
    
    /* Table styling */
    #chargesTable tr td:last-child {
      white-space: nowrap;
    }
    
    /* Status badges */
    .badge-paid {
      background-color: #d1e7dd;
      color: #0f5132;
    }
    .badge-pending {
      background-color: #fff3cd;
      color: #664d03;
    }
    .badge-overdue {
      background-color: #f8d7da;
      color: #842029;
    }
    
    /* Validation styles */
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
    
    .is-invalid {
      border-color: #dc3545 !important;
    }
    
    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #dc3545;
    }
    
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip,
    .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip,
    .dropdown.is-invalid ~ .invalid-feedback {
      display: block;
    }
    
    .dropdown.is-invalid .form-control {
      border-color: #dc3545 !important;
    }
    
    .charge-item {
      border: 1px solid #dee2e6;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
      background-color: #f8f9fa;
    }
    
    .charge-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    
    .charge-total {
      font-weight: bold;
      font-size: 16px;
      color: #2E7D32;
    }
  </style> 

  <style>
  /* ========== Global Theme Colors ========== */
  :root {
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

  /* ========== Base Styles ========== */
  body {
    font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
    background-color: var(--light-gray);
    color: var(--dark-gray);
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
  .table {
    background-color: var(--white);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  }

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
</style>
<style>   
/* Top controls: Show entries + Search (single line, left-right) */
#form_inputs_wrapper > .dataTables_length,
#form_inputs_wrapper > .dataTables_filter {
  display: inline-block;
  vertical-align: middle;
  margin-bottom: 10px;
}

#form_inputs_wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}

/* Push search input to the right */
#form_inputs_wrapper .dataTables_filter {
  margin-left: auto;
}

/* Bottom controls: Showing info + Pagination */
#form_inputs_wrapper > .dataTables_info,
#form_inputs_wrapper > .dataTables_paginate {
  display: inline-block;
  vertical-align: middle;
  margin-top: 10px;
}

@media (max-width: 768px) {
  #form_inputs_wrapper {
    flex-direction: column;
    align-items: stretch;
  }

 
  
  #form_inputs_wrapper > .dataTables_info,
  #form_inputs_wrapper > .dataTables_paginate {
    width: 100%;
    text-align: center;
    margin: 5px 0;
  }

   /* Search box aligned to the right */
  #form_inputs_wrapper > .dataTables_filter {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    margin: 5px 0;
  }

  #form_inputs_wrapper .dataTables_filter {
    margin-left: 0;
  }
   #form_inputs_wrapper > .dataTables_length {
    display: none !important;
  }
}
</style>
</head>

<body>

<?= view('layout/head') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <div class="main-wrapper overflow-hidden">
    <!-- Add baseUrl hidden input -->
    <input type="hidden" id="baseUrl" data-url="<?= base_url() ?>/">
    
    <div class="container-fluid py-4">
      <!-- Display success/error messages -->
      <?php if(session()->getFlashdata('message')): ?>
        <div class="alert alert-success alert-dismissible fade show">
          <?= session()->getFlashdata('message') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      
      <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show">
          <?= session()->getFlashdata('error') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="row g-4">
        <div class="col-md-12">
          <div class="card p-4 h-100 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5><i class="bi bi-credit-card me-2 text-success"></i>Charges Management</h5>
              <div>
                <span class="badge bg-light text-success border border-success me-2">
                  <?= count($charges) ?> charges
                </span>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#chargeModal" onclick="resetForm()">
                  <i class="bi bi-plus-circle me-1"></i> Add Charge
                </button>
              </div>
            </div>

            <!-- Table View -->
            <div class="table-responsive">
              <table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                <thead>
                  <tr>
                    <th style="width: 50px;">S.No</th>
                    <th>Room</th>
                    <th>Guest</th>
                    <th>Month/Year</th>
                    <th>Charges</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th style="width: 130px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(isset($charges) && !empty($charges)): ?>
                    <?php foreach($charges as $index => $charge): ?>
                      <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($charge['room_number']) ?></td>
                        <td><?= esc($charge['guest_name']) ?></td>
                        <td><?= date('F Y', strtotime($charge['charge_month'] . '-01')) ?></td>
                        <td>
                          <?php if(isset($charge['charge_items']) && count($charge['charge_items']) > 0): ?>
                            <ul class="list-unstyled mb-0">
                              <?php foreach($charge['charge_items'] as $item): ?>
                                <li class="small"><?= esc($item['charge_type']) ?>: ₹<?= number_format($item['amount'], 2) ?></li>
                              <?php endforeach; ?>
                            </ul>
                          <?php else: ?>
                            <span class="text-muted">No charges</span>
                          <?php endif; ?>
                        </td>
                        <td class="fw-bold">₹<?= number_format($charge['total_amount'], 2) ?></td>
                        <td>
                          <?php 
                            $statusClass = '';
                            if ($charge['status'] === 'paid') $statusClass = 'badge-paid';
                            if ($charge['status'] === 'pending') $statusClass = 'badge-pending';
                            if ($charge['status'] === 'overdue') $statusClass = 'badge-overdue';
                          ?>
                          <span class="badge <?= $statusClass ?>"><?= ucfirst(esc($charge['status'])) ?></span>
                        </td>
                        <td><?= date('M d, Y', strtotime($charge['due_date'])) ?></td>
                        <td>
                          <button class="btn btn-sm text-primary" onclick="editCharge(<?= $charge['id'] ?>)">
                            <i class="bi bi-pencil-square"></i>
                          </button>
                          <button class="btn btn-sm text-danger" data-bs-toggle="modal" 
                            data-bs-target="#deleteConfirmationModal" 
                            onclick="setDeleteId(<?= $charge['id'] ?>)">
                            <i class="bi bi-trash"></i>
                          </button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="9" class="text-center">No charges found</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Charge Form Modal -->
    <div class="modal fade" id="chargeModal" tabindex="-1" aria-labelledby="chargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-lg-custom">
        <form id="chargeForm" method="post" class="needs-validation" novalidate>
          <?= csrf_field() ?>
          <input type="hidden" name="id" id="chargeId">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="chargeModalLabel"><i class="bi bi-plus-circle-fill me-2"></i>Add New Charge</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Room & Guest Selection -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Room Number</label>
                <select class="form-select" name="room_no" id="roomId" required onchange="updateGuests()">
    <option value="">Select Room</option>
    <?php if(isset($rooms) && !empty($rooms)): ?>
        <?php foreach($rooms as $room): ?>
            <option value="<?= $room['room_no'] ?>">
                <?= esc($room['room_no']) ?> - <?= esc($room['room_type']) ?>
            </option>
        <?php endforeach; ?>
    <?php endif; ?>
</select>
                  <!-- <select class="form-select" name="room_id" id="roomId" required onchange="updateGuests()">
                    <option value="">Select Room</option>
                    </?php if(isset($rooms) && !empty($rooms)): ?>
                      </?php foreach($rooms as $room): ?>
                        <option value="</?= $room['room_id'] ?>" data-guest-id="</?= $room['current_guest_id'] ?? '' ?>" data-guest-name="<?= esc($room['current_guest_name'] ?? '') ?>">
                          </?= esc($room['room_no']) ?> - </?= esc($room['room_type']) ?>
                        </option>
                      </?php endforeach; ?>
                    </?php endif; ?>
                  </select> -->
                  <div class="invalid-feedback">Please select a room</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Guest Name</label>
                  <select class="form-select" name="guest_id" id="guestId" required>
                    <option value="">Select Guest</option>
                    <?php if(isset($guests) && !empty($guests)): ?>
                      <?php foreach($guests as $guest): ?>
                        <option value="<?= $guest['guest_id'] ?>">
    <?= esc($guest['first_name'] . ' ' . $guest['last_name']) ?>
</option>

                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                  <div class="invalid-feedback">Please select a guest</div>
                </div>
              </div>
              <hr class="hr" />
              
              <!-- Month/Year Selection -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Month</label>
                  <select class="form-select" name="month" id="month" required>
                    <option value="">Select Month</option>
                    <?php for($i = 1; $i <= 12; $i++): ?>
                      <option value="<?= $i ?>"><?= date('F', mktime(0, 0, 0, $i, 1)) ?></option>
                    <?php endfor; ?>
                  </select>
                  <div class="invalid-feedback">Please select a month</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Year</label>
                  <select class="form-select" name="year" id="year" required>
                    <option value="">Select Year</option>
                    <?php for($i = date('Y'); $i >= date('Y') - 5; $i--): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                  <div class="invalid-feedback">Please select a year</div>
                </div>
              </div>
              <hr class="hr" />
              
              <!-- Charge Items -->
              <div class="mb-3">
                <label class="form-label required">Charges</label>
                <div id="chargeItems">
                  <div class="charge-item">
                    <div class="charge-header">
                      <span>Charge Item #1</span>
                      <button type="button" class="btn btn-sm btn-danger" onclick="removeChargeItem(this)">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-2">
                        <label class="form-label">Charge Type</label>
                        <select class="form-select" name="charge_types[]" required>
                          <option value="">Select Type</option>
                          <option value="Maintenance">Maintenance Charge</option>
                          <option value="Internet">Internet Charge</option>
                          <option value="EB">EB Charge</option>
                          <option value="Room Service">Room Service</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="col-md-5 mb-2">
                        <label class="form-label">Amount (₹)</label>
                        <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" required>
                      </div>
                      <div class="col-md-1 mb-2 d-flex align-items-end">
                        <button type="button" class="btn btn-sm btn-success" onclick="addChargeItem()">
                          <i class="bi bi-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="charge-total mt-3 text-end">
                  Total: ₹<span id="totalAmount">0.00</span>
                </div>
              </div>
              <hr class="hr" />
              
              <!-- Status & Due Date -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Status</label>
                  <select class="form-select" name="status" id="status" required>
                    <option value="pending">Pending</option>
                    <option value="paid">Paid</option>
                    <option value="overdue">Overdue</option>
                  </select>
                  <div class="invalid-feedback">Please select a status</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Due Date</label>
                  <input type="date" class="form-control" name="due_date" id="dueDate" required>
                  <div class="invalid-feedback">Please select a due date</div>
                </div>
              </div>
              
              <!-- Notes -->
              <div class="mb-3">
                <label class="form-label">Notes</label>
                <textarea class="form-control" rows="2" name="notes" id="notes" placeholder="Any additional notes..."></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                <i class="bi bi-x-circle me-1"></i> Cancel
              </button>
              <button type="submit" class="btn btn-primary" id="saveButton">
                <i class="bi bi-save me-1"></i> Save Charge
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <h5 class="modal-title" id="deleteModalTitle">Are you sure you want to delete this charge?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-footer d-flex gap-3 justify-content-end">
            <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Yes</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize DataTable
        $('#chargesTable').DataTable({
            responsive: true,
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 2, targets: 1 },
                { responsivePriority: 3, targets: -1 }
            ]
        });
        
        // Form validation
        setupFormValidation();
        
        // Set today's date as default for due date
        const dueDate = document.getElementById('dueDate');
        if (dueDate) {
            const nextWeek = new Date();
            nextWeek.setDate(nextWeek.getDate() + 7);
            dueDate.valueAsDate = nextWeek;
        }
        
        // Set current month and year as default
        const currentDate = new Date();
        document.getElementById('month').value = currentDate.getMonth() + 1;
        document.getElementById('year').value = currentDate.getFullYear();
        
        // Calculate total amount when amounts change
        document.addEventListener('input', function(e) {
            if (e.target.name === 'amounts[]') {
                calculateTotal();
            }
        });
    });

    function setDeleteId(id) {
        document.getElementById('confirmDeleteBtn').href = `<?= base_url('charges/delete/') ?>${id}`;
    }

    function resetForm() {
        const form = document.getElementById('chargeForm');
        form.reset();
        form.classList.remove('was-validated');
        $('#chargeId').val('');
        $('#chargeModalLabel').html('<i class="bi bi-plus-circle-fill me-2"></i>Add New Charge');
        $('#saveButton').html('<i class="bi bi-save me-1"></i> Save Charge');
        $('#chargeForm').attr('action', '<?= base_url('charges/store') ?>');
        
        // Reset charge items to just one
        const chargeItems = document.getElementById('chargeItems');
        chargeItems.innerHTML = `
          <div class="charge-item">
            <div class="charge-header">
              <span>Charge Item #1</span>
              <button type="button" class="btn btn-sm btn-danger" onclick="removeChargeItem(this)">
                <i class="bi bi-trash"></i>
              </button>
            </div>
            <div class="row">
              <div class="col-md-6 mb-2">
                <label class="form-label">Charge Type</label>
                <select class="form-select" name="charge_types[]" required>
                  <option value="">Select Type</option>
                  <option value="Maintenance">Maintenance Charge</option>
                  <option value="Internet">Internet Charge</option>
                  <option value="EB">EB Charge</option>
                  <option value="Room Service">Room Service</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-md-5 mb-2">
                <label class="form-label">Amount (₹)</label>
                <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" required>
              </div>
              <div class="col-md-1 mb-2 d-flex align-items-end">
                <button type="button" class="btn btn-sm btn-success" onclick="addChargeItem()">
                  <i class="bi bi-plus"></i>
                </button>
              </div>
            </div>
          </div>
        `;
        
        // Reset total
        document.getElementById('totalAmount').textContent = '0.00';
        
        // Set current month and year as default
        const currentDate = new Date();
        document.getElementById('month').value = currentDate.getMonth() + 1;
        document.getElementById('year').value = currentDate.getFullYear();
        
        // Set due date to one week from now
        const nextWeek = new Date();
        nextWeek.setDate(nextWeek.getDate() + 7);
        document.getElementById('dueDate').valueAsDate = nextWeek;
        
        // Reset status
        document.getElementById('status').value = 'pending';
    }

    // function updateGuests() {
    //     const roomSelect = document.getElementById('roomId');
    //     const guestSelect = document.getElementById('guestId');
    //     const selectedOption = roomSelect.options[roomSelect.selectedIndex];
        
    //     if (selectedOption && selectedOption.dataset.guestId) {
    //         // Set the guest based on the room's current guest
    //         guestSelect.value = selectedOption.dataset.guestId;
    //     }
    // }

    function updateGuests() {
    const roomSelect = document.getElementById('roomId');
    const guestSelect = document.getElementById('guestId');
    const selectedRoomId = roomSelect.value;
    
    if (!selectedRoomId) {
        // Clear guest dropdown if no room selected
        guestSelect.innerHTML = '<option value="">Select Guest</option>';
        return;
    }
    
    // Show loading state
    guestSelect.innerHTML = '<option value="">Loading guests...</option>';
    guestSelect.disabled = true;
    alert(selectedRoomId);
    // Fetch guests for the selected room
    fetch(`<?= base_url('room_guest/') ?>${selectedRoomId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(guests => {
            // Populate guest dropdown
            guestSelect.innerHTML = '<option value="">Select Guest</option>';
            
            if (guests.length > 0) {
                guests.forEach(guest => {
                    const option = document.createElement('option');
                    option.value = guest.guest_id;
                    option.textContent = `${guest.first_name} ${guest.last_name}`;
                    guestSelect.appendChild(option);
                });
            } else {
                guestSelect.innerHTML = '<option value="">No guests in this room</option>';
            }
            
            guestSelect.disabled = false;
        })
        .catch(error => {
            console.error('Error:', error);
            guestSelect.innerHTML = '<option value="">Error loading guests</option>';
            guestSelect.disabled = false;
        });
}

    function addChargeItem() {
        const chargeItems = document.getElementById('chargeItems');
        const itemCount = chargeItems.children.length + 1;
        
        const newItem = document.createElement('div');
        newItem.className = 'charge-item';
        newItem.innerHTML = `
            <div class="charge-header">
                <span>Charge Item #${itemCount}</span>
                <button type="button" class="btn btn-sm btn-danger" onclick="removeChargeItem(this)">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Charge Type</label>
                    <select class="form-select" name="charge_types[]" required>
                        <option value="">Select Type</option>
                        <option value="Maintenance">Maintenance Charge</option>
                        <option value="Internet">Internet Charge</option>
                        <option value="EB">EB Charge</option>
                        <option value="Room Service">Room Service</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-md-5 mb-2">
                    <label class="form-label">Amount (₹)</label>
                    <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" required>
                </div>
                <div class="col-md-1 mb-2 d-flex align-items-end">
                    <button type="button" class="btn btn-sm btn-success" onclick="addChargeItem()">
                        <i class="bi bi-plus"></i>
                    </button>
                </div>
            </div>
        `;
        
        chargeItems.appendChild(newItem);
        
        // Add event listener to the new amount input
        const amountInput = newItem.querySelector('input[name="amounts[]"]');
        amountInput.addEventListener('input', calculateTotal);
    }

    function removeChargeItem(button) {
        const chargeItem = button.closest('.charge-item');
        if (chargeItem && document.getElementById('chargeItems').children.length > 1) {
            chargeItem.remove();
            calculateTotal();
            
            // Renumber the remaining items
            const items = document.querySelectorAll('.charge-item');
            items.forEach((item, index) => {
                const header = item.querySelector('.charge-header span');
                header.textContent = `Charge Item #${index + 1}`;
            });
        }
    }

    function calculateTotal() {
        let total = 0;
        const amountInputs = document.querySelectorAll('input[name="amounts[]"]');
        
        amountInputs.forEach(input => {
            const value = parseFloat(input.value) || 0;
            total += value;
        });
        
        document.getElementById('totalAmount').textContent = total.toFixed(2);
    }

    function setupFormValidation() {
        const form = document.getElementById('chargeForm');
        
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
                
                // Show validation messages for all invalid fields
                const invalidFields = form.querySelectorAll(':invalid');
                invalidFields.forEach(field => {
                    field.classList.add('is-invalid');
                });
            }
        }, false);
        
        // Add event listeners to remove validation styling when fields are edited
        const formFields = form.querySelectorAll('input, select, textarea');
        formFields.forEach(field => {
            field.addEventListener('input', function() {
                this.classList.remove('is-invalid');
            });
        });
    }

    function editCharge(id) {
        const baseUrlElement = document.getElementById('baseUrl');
        const baseUrl = baseUrlElement ? baseUrlElement.dataset.url : '<?= base_url() ?>/';
        
        const saveBtn = document.getElementById('saveButton');
        if (saveBtn) {
            saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Loading...';
            saveBtn.disabled = true;
        }

        fetch(`${baseUrl}charges/edit/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    throw new Error(data.error);
                }
                
                // Populate form fields
                const chargeId = document.getElementById('chargeId');
                if (chargeId) chargeId.value = data.id;
                
                const roomId = document.getElementById('roomId');
                if (roomId) roomId.value = data.room_no;
                
                const guestId = document.getElementById('guestId');
                if (guestId) guestId.value = data.guest_id;
                
                // Parse month and year from charge_month (format: YYYY-MM)
                if (data.charge_month) {
                    const [year, month] = data.charge_month.split('-');
                    document.getElementById('month').value = parseInt(month);
                    document.getElementById('year').value = parseInt(year);
                }
                
                const status = document.getElementById('status');
                if (status) status.value = data.status;
                
                const dueDate = document.getElementById('dueDate');
                if (dueDate && data.due_date) dueDate.value = data.due_date.split(' ')[0];
                
                const notes = document.getElementById('notes');
                if (notes) notes.value = data.notes || '';
                
                // Update charge items
                const chargeItems = document.getElementById('chargeItems');
                chargeItems.innerHTML = '';
                
                if (data.charge_items && data.charge_items.length > 0) {
                    data.charge_items.forEach((item, index) => {
                        const itemElement = document.createElement('div');
                        itemElement.className = 'charge-item';
                        itemElement.innerHTML = `
                            <div class="charge-header">
                                <span>Charge Item #${index + 1}</span>
                                <button type="button" class="btn btn-sm btn-danger" onclick="removeChargeItem(this)">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label class="form-label">Charge Type</label>
                                    <select class="form-select" name="charge_types[]" required>
                                        <option value="">Select Type</option>
                                        <option value="Maintenance" ${item.charge_type === 'Maintenance' ? 'selected' : ''}>Maintenance Charge</option>
                                        <option value="Internet" ${item.charge_type === 'Internet' ? 'selected' : ''}>Internet Charge</option>
                                        <option value="EB" ${item.charge_type === 'EB' ? 'selected' : ''}>EB Charge</option>
                                        <option value="Room Service" ${item.charge_type === 'Room Service' ? 'selected' : ''}>Room Service</option>
                                        <option value="Other" ${item.charge_type === 'Other' ? 'selected' : ''}>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <label class="form-label">Amount (₹)</label>
                                    <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" value="${item.amount}" required>
                                </div>
                                <div class="col-md-1 mb-2 d-flex align-items-end">
                                    <button type="button" class="btn btn-sm btn-success" onclick="addChargeItem()">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </div>
                        `;
                        chargeItems.appendChild(itemElement);
                    });
                } else {
                    // Add at least one empty charge item
                    addChargeItem();
                }
                
                // Calculate total
                calculateTotal();
                
                // Update form action
                const form = document.getElementById('chargeForm');
                if (form) form.action = `${baseUrl}charges/update/${data.id}`;
                
                // Update UI
                const modalLabel = document.getElementById('chargeModalLabel');
                if (modalLabel) {
                    modalLabel.innerHTML = '<i class="bi bi-pencil-square me-2"></i>Edit Charge';
                }
                
                if (saveBtn) {
                    saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Update Charge';
                }
                
                // Show modal
                const modal = new bootstrap.Modal(document.getElementById('chargeModal'));
                modal.show();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to load charge data: ' + error.message);
            })
            .finally(() => {
                if (saveBtn) {
                    saveBtn.disabled = false;
                }
            });
    }

    // Reset form when modal is closed
    $('#chargeModal').on('hidden.bs.modal', function () {
        resetForm();
    });
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">

  <!-- Favicon icon-->
  
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Udayana</title>
  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

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
    
    /* Custom styles for dropdown validation */
    .dropdown.is-invalid .dropdown-toggle {
      border-color: #dc3545 !important;
    }
    
    .charge-item.is-invalid {
      border-color: #dc3545;
      background-color: #fff5f5;
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
 <style>
    /* ===== Compact Global Adjustments ===== */
    body {
      font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
      font-size: 13px;
      /* reduced global font */
      background-color: var(--light-gray);
      color: var(--dark-gray);
      line-height: 1.4;
    }

    /* Headings smaller */
    h5,
    .modal-title {
      font-size: 15px;
      font-weight: 600;
    }

    h6 {
      font-size: 13px;
      font-weight: 600;
    }

    /* Labels smaller */
    .form-label {
      font-size: 12px;
      margin-bottom: 2px;
    }

    /* Form controls compact */
    .form-control,
    .form-select {
      font-size: 12px;
      padding: 4px 8px;
      border-radius: 6px;
    }

    .form-control-sm,
    .form-select-sm {
      font-size: 12px;
      padding: 3px 6px;
    }

    /* Buttons compact */
    .btn {
      font-size: 12px;
      padding: 4px 10px;
      border-radius: 6px;
    }

    .btn-sm {
      font-size: 12px;
      padding: 3px 8px;
    }

    /* Table compact mode */
    .table thead th,
    .table tbody td {
      padding: 6px 8px !important;
      font-size: 12px;
    }

    .table thead th {
      font-weight: 600;
    }

    .table {
      margin-bottom: 0.5rem;
    }

    /* Card compact */
    .card,
    .form-section {
      padding: 10px !important;
      border-radius: 6px;
    }

    /* Modal compact */
    .modal-header,
    .modal-footer {
      padding: 8px 12px;
    }

    .modal-body {
      padding: 8px 12px;
    }

    .modal-title {
      font-size: 14px;
    }

    /* Validation messages smaller */
    .validation-message {
      font-size: 11px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      body {
        font-size: 12px;
      }

      .btn,
      .form-control,
      .form-select {
        font-size: 11px;
        padding: 3px 6px;
      }
    }

    /* ===== Global Compact Styles ===== */

    /* Reduce body padding + global font size */
    body {
      font-size: 13px;
      line-height: 1.3;
    }

    /* Compact form fields */
    .form-control,
    .form-select {
      font-size: 12px !important;
      padding: 4px 8px !important;
      height: auto !important;
      border-radius: 5px;
      margin-bottom: 4px;
      /* tighter vertical spacing */
    }

    /* Labels */
    .form-label {
      font-size: 12px;
      margin-bottom: 2px;
    }

    /* Compact buttons */
    .btn {
      font-size: 12px !important;
      padding: 4px 10px !important;
      border-radius: 5px;
    }

    /* Table compact */
    .table th,
    .table td {
      padding: 6px 8px !important;
      font-size: 12px;
    }

    /* Section headings smaller */
    h5,
    h6 {
      font-size: 13px !important;
      margin-bottom: 6px;
    }

    /* Card / section padding reduced */
    .card,
    .form-section {
      padding: 10px !important;
      margin-bottom: 10px !important;
      border-radius: 6px;
    }

    /* Modal compact */
    .modal-body {
      padding: 8px 12px !important;
      font-size: 12px;
    }

    .modal-header,
    .modal-footer {
      padding: 6px 10px !important;
    }

    .modal-title {
      font-size: 13px;
    }

    /* Input groups (e.g. icons/buttons inside inputs) */
    .input-group-text {
      font-size: 12px;
      padding: 2px;
    }

    .nav-pills .nav-link.active {
      background-color: var(--bs-primary) !important;
      color: #fff !important;
    }

    .nav-pills .nav-link.active {
      background-color: transparent !important;
      color: var(--primary-green-hover) !important;
      border-bottom: 3px solid var(--primary-green-hover);
      border-radius: 0;
      font-weight: 600;
    }
  </style>
</head>

<body style="background-color:#EDF7EE;">

<?= view('layout/head-Admin') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <div class="main-wrapper overflow-hidden">
    <!-- Add baseUrl hidden input -->
    <input type="hidden" id="baseUrl" data-url="<?= base_url() ?>/">
      <div class="" style="background-color:#EDF7EE;">
    <!-- <div class="container-fluid py-4"> -->
      <!-- Display success/error messages -->
      <div class="flash-messages mt-3">
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
</div>


      <div class="row g-4">
        <div class="col-md-12">
          <div class=" px-3  h-100 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-3">
           
              <h4 class="" style="font-size:18px;"><i class="bi bi-credit-card me-2 text-success"></i>Charges Management</h4>
              <div>
                <span class="badge bg-light text-success border border-success me-2 fs-1">
                  <?= count($charges) ?> charges
                </span>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#chargeModal" onclick="resetForm()">
                  <i class="bi bi-plus-circle me-1"></i> Add Charge
                </button>
              </div>
            </div>

            <!-- Filter Controls -->
<form method="get" action="<?= current_url() ?>" class="mb-4">
    <div class="row g-3 align-items-end">
        <!-- Date Range -->
        <div class="col-md-2">
            <label class="form-label">From Date</label>
            <input type="date" class="form-control" name="from_date" value="<?= $filter_from_date ?? '' ?>">
        </div>

        <div class="col-md-2">
            <label class="form-label">To Date</label>
            <input type="date" class="form-control" name="to_date" value="<?= $filter_to_date ?? '' ?>">
        </div>

        <!-- Status Filter -->
        <div class="col-md-2">
            <label class="form-label">Status</label>
            <div class="dropdown">
                <input type="text" class="form-control dropdown-toggle w-100"
                       name="statusDisplay"
                       id="statusFilterdisplay"
                       placeholder="Select Status"
                       data-bs-toggle="dropdown"
                       aria-expanded="false"
                       autocomplete="off"
                       readonly
                       value="<?= $filter_status ?: 'All' ?>" />

                <!-- Hidden input to store the actual value -->
                <input type="hidden" name="status" id="statusFilter" value="<?= $filter_status ?: 'all' ?>">

                <ul class="dropdown-menu p-2 w-100" aria-labelledby="statusFilterdisplay"
                    style="max-height: 150px; overflow-y: auto;">
                    <div id="statusList" style="width: 100%;">
                        <div class="dropdown-item" data-value="all">All</div>
                        <div class="dropdown-item" data-value="pending">Pending</div>
                        <div class="dropdown-item" data-value="paid">Paid</div>
                        <div class="dropdown-item" data-value="overdue">Overdue</div>
                    </div>
                </ul>
            </div>
        </div>

        <!-- Room Filter -->
        <div class="col-md-2">
            <label class="form-label">Room</label>
            <div class="dropdown">
                <input type="text" class="form-control dropdown-toggle w-100"
                       name="roomDisplay"
                       id="roomFilterdisplay"
                       placeholder="Select Room"
                       data-bs-toggle="dropdown"
                       aria-expanded="false"
                       autocomplete="off"
                       readonly
                       value="<?= $filter_room ?: 'All' ?>" />

                <!-- Hidden input to store the actual value -->
                <input type="hidden" name="room" id="roomFilter" value="<?= $filter_room ?: 'all' ?>">

                <ul class="dropdown-menu p-2 w-100" aria-labelledby="roomFilterdisplay"
                    style="max-height: 150px; overflow-y: auto;">
                    <div id="roomList" style="width: 100%;">
                        <div class="dropdown-item" data-value="all">All</div>
                        <?php if(isset($rooms) && !empty($rooms)): ?>
                            <?php foreach($rooms as $room): ?>
                                <div class="dropdown-item" data-value="<?= $room['room_no'] ?>">
                                    <?= esc($room['room_no']) ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </ul>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-primary">Filter</button>
            <button type="submit" name="pdf" value="1" class="btn btn-success" formtarget="_blank">PDF</button>
            <button type="submit" name="excel" value="1" class="btn btn-primary">Excel</button>
            <a href="<?= current_url() ?>" class="btn btn-secondary">Reset</a>
        </div>
    </div>
</form>

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
    <!-- </div> -->

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
                  <div class="dropdown w-100" id="roomDropdown">
                    <input type="text" class="form-control dropdown-toggle" 
                          name="room_no" id="roomInput"
                          placeholder="Select Room"
                          data-bs-toggle="dropdown" aria-expanded="false" 
                          autocomplete="off" readonly required />
                    <input type="hidden" name="room_id" id="roomId" required>
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="roomInput" style="max-height: 200px; overflow-y: auto;">
                      <div id="roomLists" style="width: 100%;">
                        <?php if(isset($rooms) && !empty($rooms)): ?>
                            <?php foreach($rooms as $room): ?>
                                <div class="dropdown-item" 
                                    data-value="<?= $room['room_no'] ?>">
                                    <?= esc($room['room_no']) ?> - <?= esc($room['room_type']) ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                      </div>
                    </ul>
                    
                  </div>
                  <div class="invalid-feedback">Please select a room</div>
                </div>
                <div class="col-md-6">
                  <label for="guestInput" class="form-label required">Guest Name</label>
                  <div class="dropdown w-100" id="guestDropdown">
                    <input type="text" class="form-control dropdown-toggle" 
                          name="guest_name" id="guestInput"
                          placeholder="Select Guest"
                          data-bs-toggle="dropdown" aria-expanded="false" 
                          autocomplete="off" readonly required />
                    <input type="hidden" name="guest_id" id="guestId" required>
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="guestInput" style="max-height: 200px; overflow-y: auto;">
                      <div id="guestLists" style="width: 100%;">
                        <?php if(isset($guests) && !empty($guests)): ?>
                            <?php foreach($guests as $guest): ?>
                                <div class="dropdown-item" 
                                    data-value="<?= $guest['guest_id'] ?>"
                                    data-name="<?= esc($guest['first_name'] . ' ' . $guest['last_name']) ?>">
                                    <?= esc($guest['first_name'] . ' ' . $guest['last_name']) ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                      </div>
                    </ul>
                    
                  </div>
                  <div class="invalid-feedback">Please select a guest</div>
                </div>
              </div>
              <hr class="hr" />
              
              <!-- Month/Year Selection -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="monthInput" class="form-label required">Month</label>
                  <div class="dropdown w-100" id="monthDropdown">
                    <input type="text" class="form-control dropdown-toggle"
                          name="month_display" id="monthInput"
                          placeholder="Select Month"
                          data-bs-toggle="dropdown" aria-expanded="false"
                          autocomplete="off" readonly required />
                    <input type="hidden" name="month" id="monthHidden" required>
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="monthInput" style="max-height: 200px; overflow-y: auto;">
                      <div id="monthLists">
                        <?php for($i = 1; $i <= 12; $i++): ?>
                          <div class="dropdown-item" data-value="<?= $i ?>">
                            <?= date('F', mktime(0, 0, 0, $i, 1)) ?>
                          </div>
                        <?php endfor; ?>
                      </div>
                    </ul>
                   
                  </div>
                   <div class="invalid-feedback">Please select a month</div>
                </div>

                <div class="col-md-6">
                  <label for="yearInput" class="form-label required">Year</label>
                  <div class="dropdown w-100" id="yearDropdown">
                    <input type="text" class="form-control dropdown-toggle"
                          name="year_display" id="yearInput"
                          placeholder="Select Year"
                          data-bs-toggle="dropdown" aria-expanded="false"
                          autocomplete="off" readonly required />
                    <input type="hidden" name="year" id="yearHidden" required>
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="yearInput" style="max-height: 200px; overflow-y: auto;">
                      <div id="yearLists">
                        <?php for($i = date('Y'); $i >= date('Y') - 5; $i--): ?>
                          <div class="dropdown-item" data-value="<?= $i ?>">
                            <?= $i ?>
                          </div>
                        <?php endfor; ?>
                      </div>
                    </ul>
                    
                  </div>
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
                        <div class="dropdown w-100 charge-type-dropdown">
                          <input type="text" class="form-control dropdown-toggle charge-type-input" 
                                placeholder="Select Charge Type"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                autocomplete="off" readonly required />
                          <input type="hidden" class="charge-type-hidden" name="charge_types[]" required>
                          <ul class="dropdown-menu p-2 w-100" style="max-height: 200px; overflow-y: auto;">
                            <div class="charge-type-list">
                              <div class="dropdown-item" data-value="Maintenance">Maintenance Charge</div>
                              <div class="dropdown-item" data-value="Internet">Internet Charge</div>
                              <div class="dropdown-item" data-value="EB">EB Charge</div>
                              <div class="dropdown-item" data-value="Room Service">Room Service</div>
                              <div class="dropdown-item" data-value="Other">Other</div>
                            </div>
                          </ul>
                        </div>
                        <div class="invalid-feedback">Please select a charge type</div>
                      </div>
                      <div class="col-md-5 mb-2">
                        <label class="form-label">Amount (₹)</label>
                        <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" required>
                        <div class="invalid-feedback">Please enter a valid amount</div>
                      </div>
                      <div class="col-md-1 mb-2 d-flex align-items-end">
                        <button type="button" class="btn btn-sm btn-success" onclick="addChargeItem()">
                          <i class="bi bi-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="invalid-feedback" id="chargeItemsFeedback" style="display: none;">Please add at least one charge item</div>
                <div class="charge-total mt-3 text-end">
                  Total: ₹<span id="totalAmount">0.00</span>
                </div>
              </div>
              <hr class="hr" />
              
              <!-- Status & Due Date -->
              <!-- <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Status</label>
                  <select class="form-select" name="status" id="status" required>
                    <option value="">Select Status</option>
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
              </div> -->
               <!-- Status & Due Date -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label required">Status</label>
                <div class="dropdown w-100 status-dropdown" id="statusDropdown">
                  <input type="text" class="form-control dropdown-toggle" 
                        name="status_display" id="statusInput"
                        placeholder="Select Status"
                        data-bs-toggle="dropdown" aria-expanded="false" 
                        autocomplete="off" readonly required />
                  <input type="hidden" name="status" id="statusHidden" required>
                  <ul class="dropdown-menu p-2 w-100" aria-labelledby="statusInput" style="max-height: 200px; overflow-y: auto;">
                    <div id="statusLists">
                      <div class="dropdown-item status-option" data-value="pending">
                        <!-- <span class="status-badge badge-pending">Pending</span> -->
                        <span>Pending</span>
                      </div>
                      <div class="dropdown-item status-option" data-value="paid">
                        <!-- <span class="status-badge badge-paid">Paid</span> -->
                        <span>Paid</span>
                      </div>
                      <div class="dropdown-item status-option" data-value="overdue">
                        <!-- <span class="status-badge badge-overdue">Overdue</span> -->
                        <span>Overdue</span>
                      </div>
                    </div>
                  </ul>
                </div>
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
    // Initialize charge type dropdowns
    function initChargeTypeDropdowns() {
      document.querySelectorAll('.charge-type-input').forEach((input) => {
        const dropdown = input.closest('.dropdown').querySelector('.dropdown-menu');
        const hiddenInput = input.nextElementSibling;
        
        // Set up click handlers for dropdown items
        dropdown.querySelectorAll('.dropdown-item').forEach(item => {
          item.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            const text = this.textContent;
            
            input.value = text;
            if (hiddenInput && hiddenInput.classList.contains('charge-type-hidden')) {
              hiddenInput.value = value;
              hiddenInput.setCustomValidity('');
              input.closest('.dropdown').classList.remove('is-invalid');
            }
          });
        });
      });
    }

    // Update the addChargeItem function to use the new dropdown structure
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
            <div class="dropdown w-100 charge-type-dropdown">
              <input type="text" class="form-control dropdown-toggle charge-type-input" 
                    placeholder="Select Charge Type"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    autocomplete="off" readonly required />
              <input type="hidden" class="charge-type-hidden" name="charge_types[]" required>
              <ul class="dropdown-menu p-2 w-100" style="max-height: 200px; overflow-y: auto;">
                <div class="charge-type-list">
                  <div class="dropdown-item" data-value="Maintenance">Maintenance Charge</div>
                  <div class="dropdown-item" data-value="Internet">Internet Charge</div>
                  <div class="dropdown-item" data-value="EB">EB Charge</div>
                  <div class="dropdown-item" data-value="Room Service">Room Service</div>
                  <div class="dropdown-item" data-value="Other">Other</div>
                </div>
              </ul>
              <div class="invalid-feedback">Please select a charge type</div>
            </div>
          </div>
          <div class="col-md-5 mb-2">
            <label class="form-label">Amount (₹)</label>
            <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" required>
            <div class="invalid-feedback">Please enter a valid amount</div>
          </div>
          <div class="col-md-1 mb-2 d-flex align-items-end">
            <button type="button" class="btn btn-sm btn-success" onclick="addChargeItem()">
              <i class="bi bi-plus"></i>
            </button>
          </div>
        </div>
      `;
      
      chargeItems.appendChild(newItem);
      
      // Initialize the new dropdown
      initChargeTypeDropdowns();
      
      // Add event listener to the new amount input
      const amountInput = newItem.querySelector('input[name="amounts[]"]');
      amountInput.addEventListener('input', calculateTotal);
      
      // Add validation event listeners
      const chargeTypeInput = newItem.querySelector('.charge-type-input');
      const chargeTypeHidden = newItem.querySelector('.charge-type-hidden');
      
      chargeTypeInput.addEventListener('focus', function() {
        this.closest('.dropdown').classList.remove('is-invalid');
      });
      
      amountInput.addEventListener('input', function() {
        this.classList.remove('is-invalid');
      });
    }

    // Initialize all dropdowns
    function initAllDropdowns() {
      // Room dropdown
      const roomInput = document.getElementById('roomInput');
      const roomItems = document.querySelectorAll('#roomLists .dropdown-item');
      const roomId = document.getElementById('roomId');
      const roomDropdown = document.getElementById('roomDropdown');

      roomItems.forEach(item => {
        item.addEventListener('click', function() {
          const value = this.getAttribute('data-value');
          roomInput.value = value;
          if (roomId) {
            roomId.value = value;
            roomId.setCustomValidity('');
          }
          roomDropdown.classList.remove('is-invalid');
          updateGuests(value);
        });
      });

      // Guest dropdown
      const guestInput = document.getElementById('guestInput');
      const guestItems = document.querySelectorAll('#guestLists .dropdown-item');
      const guestId = document.getElementById('guestId');
      const guestDropdown = document.getElementById('guestDropdown');

      guestItems.forEach(item => {
        item.addEventListener('click', function() {
          const value = this.getAttribute('data-value');
          const name = this.getAttribute('data-name');
          guestInput.value = name;
          if (guestId) {
            guestId.value = value;
            guestId.setCustomValidity('');
          }
          guestDropdown.classList.remove('is-invalid');
        });
      });
  // Status dropdown
      const statusInput = document.getElementById('statusInput');
      const statusItems = document.querySelectorAll('#statusLists .dropdown-item');
      const statusHidden = document.getElementById('statusHidden');
      const statusDropdown = document.getElementById('statusDropdown');

      statusItems.forEach(item => {
        item.addEventListener('click', function() {
          const value = this.getAttribute('data-value');
          const text = this.querySelector('span:last-child').textContent;
          statusInput.value = text;
          if (statusHidden) {
            statusHidden.value = value;
            statusHidden.setCustomValidity('');
          }
          statusDropdown.classList.remove('is-invalid');
        });
      });


      // Month dropdown
      const monthInput = document.getElementById('monthInput');
      const monthItems = document.querySelectorAll('#monthLists .dropdown-item');
      const monthHidden = document.getElementById('monthHidden');
      const monthDropdown = document.getElementById('monthDropdown');

      // monthItems.forEach(item => {
      //   item.addEventListener('click', function() {
      //     const value = this.getAttribute('data-value');
      //     const text = this.textContent;
      //     monthInput.value = text;
      //     if (monthHidden) {
      //       monthHidden.value = value;
      //       monthHidden.setCustomValidity('');
      //     }
      //     monthDropdown.classList.remove('is-invalid');
      //   });
      // });

      monthItems.forEach(item => {
  item.addEventListener('click', function() {
    const value = this.getAttribute('data-value'); // numeric month
    const text = this.textContent.trim();          // month name

    monthInput.value = text;   // plain text, no <span>
    if (monthHidden) {
      monthHidden.value = value;
      monthHidden.setCustomValidity('');
    }
    monthDropdown.classList.remove('is-invalid');
  });
});


      // Year dropdown
      const yearInput = document.getElementById('yearInput');
      const yearItems = document.querySelectorAll('#yearLists .dropdown-item');
      const yearHidden = document.getElementById('yearHidden');
      const yearDropdown = document.getElementById('yearDropdown');

      yearItems.forEach(item => {
        item.addEventListener('click', function() {
          const value = this.getAttribute('data-value');
          yearInput.value = value;
          if (yearHidden) {
            yearHidden.value = value;
            yearHidden.setCustomValidity('');
          }
          yearDropdown.classList.remove('is-invalid');
        });
      });

      // Initialize charge type dropdowns
      initChargeTypeDropdowns();
    }

    // Initialize all charge type dropdowns when page loads
    document.addEventListener('DOMContentLoaded', function() {
      // Initialise DataTable only if not already initialised
      if (!$.fn.DataTable.isDataTable('#form_inputs')) {
        $('#form_inputs').DataTable({
          responsive: true,
          columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: 1 },
            { responsivePriority: 3, targets: -1 }
          ]
        });
      }
      
      // Form validation
      setupFormValidation();
      
      // Set today's date as default for due date
      const dueDate = document.getElementById('dueDate');
      if (dueDate) {
        const nextWeek = new Date();
        nextWeek.setDate(nextWeek.getDate() + 7);
        dueDate.valueAsDate = nextWeek;
      }
      
      // Initialize all dropdowns
      initAllDropdowns();
      
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
      
      // Reset custom dropdowns
      document.getElementById('roomInput').value = '';
      document.getElementById('roomId').value = '';
      document.getElementById('guestInput').value = '';
      document.getElementById('guestId').value = '';
      document.getElementById('monthInput').value = '';
      document.getElementById('monthHidden').value = '';
      document.getElementById('yearInput').value = '';
      document.getElementById('yearHidden').value = '';
       document.getElementById('statusInput').value = '';
      document.getElementById('statusHidden').value = '';
      document.getElementById('statusDropdown').classList.remove('is-invalid');
      // Reset dropdown validation states
      document.getElementById('roomDropdown').classList.remove('is-invalid');
      document.getElementById('guestDropdown').classList.remove('is-invalid');
      document.getElementById('monthDropdown').classList.remove('is-invalid');
      document.getElementById('yearDropdown').classList.remove('is-invalid');
      
      // Set due date to one week from now
      const nextWeek = new Date();
      nextWeek.setDate(nextWeek.getDate() + 7);
      document.getElementById('dueDate').valueAsDate = nextWeek;
      
      // Reset status
      // document.getElementById('status').value = '';
      
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
              <div class="dropdown w-100 charge-type-dropdown">
                <input type="text" class="form-control dropdown-toggle charge-type-input" 
                      placeholder="Select Charge Type"
                      data-bs-toggle="dropdown" aria-expanded="false"
                      autocomplete="off" readonly required />
                <input type="hidden" class="charge-type-hidden" name="charge_types[]" required>
                <ul class="dropdown-menu p-2 w-100" style="max-height: 200px; overflow-y: auto;">
                  <div class="charge-type-list">
                    <div class="dropdown-item" data-value="Maintenance">Maintenance Charge</div>
                    <div class="dropdown-item" data-value="Internet">Internet Charge</div>
                    <div class="dropdown-item" data-value="EB">EB Charge</div>
                    <div class="dropdown-item" data-value="Room Service">Room Service</div>
                    <div class="dropdown-item" data-value="Other">Other</div>
                  </div>
                </ul>
                
              </div>
              <div class="invalid-feedback">Please select a charge type</div>
            </div>
            <div class="col-md-5 mb-2">
              <label class="form-label">Amount (₹)</label>
              <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" required>
              <div class="invalid-feedback">Please enter a valid amount</div>
            </div>
            <div class="col-md-1 mb-2 d-flex align-items-end">
              <button type="button" class="btn btn-sm btn-success" onclick="addChargeItem()">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      `;
      
      // Initialize the dropdown after reset
      initChargeTypeDropdowns();
      
      // Reset total
      document.getElementById('totalAmount').textContent = '0.00';
      
      // Hide charge items validation feedback
      document.getElementById('chargeItemsFeedback').style.display = 'none';
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
        // Validate dropdowns separately
        const roomId = document.getElementById('roomId');
        const roomDropdown = document.getElementById('roomDropdown');
        
        const guestId = document.getElementById('guestId');
        const guestDropdown = document.getElementById('guestDropdown');
        
        const monthHidden = document.getElementById('monthHidden');
        const monthDropdown = document.getElementById('monthDropdown');
        
        const yearHidden = document.getElementById('yearHidden');
        const yearDropdown = document.getElementById('yearDropdown');
        
        // Validate dropdowns
        if (!roomId.value) {
          roomDropdown.classList.add('is-invalid');
          roomId.setCustomValidity('Please select a room');
          event.preventDefault();
        } else {
          roomDropdown.classList.remove('is-invalid');
          roomId.setCustomValidity('');
        }
        
        if (!guestId.value) {
          guestDropdown.classList.add('is-invalid');
          guestId.setCustomValidity('Please select a guest');
          event.preventDefault();
        } else {
          guestDropdown.classList.remove('is-invalid');
          guestId.setCustomValidity('');
        }
        
        if (!monthHidden.value) {
          monthDropdown.classList.add('is-invalid');
          monthHidden.setCustomValidity('Please select a month');
          event.preventDefault();
        } else {
          monthDropdown.classList.remove('is-invalid');
          monthHidden.setCustomValidity('');
        }
        
        if (!yearHidden.value) {
          yearDropdown.classList.add('is-invalid');
          yearHidden.setCustomValidity('Please select a year');
          event.preventDefault();
        } else {
          yearDropdown.classList.remove('is-invalid');
          yearHidden.setCustomValidity('');
        }

        // Validate status dropdown
        const statusHidden = document.getElementById('statusHidden');
        const statusDropdown = document.getElementById('statusDropdown');
        
        if (!statusHidden.value) {
          statusDropdown.classList.add('is-invalid');
          statusHidden.setCustomValidity('Please select a status');
          event.preventDefault();
        } else {
          statusDropdown.classList.remove('is-invalid');
          statusHidden.setCustomValidity('');
        }
        
        // Validate charge items
        const chargeTypeInputs = document.querySelectorAll('.charge-type-hidden');
        const amountInputs = document.querySelectorAll('input[name="amounts[]"]');
        let hasValidChargeItems = true;
        
        chargeTypeInputs.forEach((input, index) => {
          if (!input.value) {
            input.closest('.charge-type-dropdown').classList.add('is-invalid');
            input.setCustomValidity('Please select a charge type');
            hasValidChargeItems = false;
            event.preventDefault();
          } else {
            input.closest('.charge-type-dropdown').classList.remove('is-invalid');
            input.setCustomValidity('');
          }
          
          if (!amountInputs[index].value || parseFloat(amountInputs[index].value) <= 0) {
            amountInputs[index].classList.add('is-invalid');
            hasValidChargeItems = false;
            event.preventDefault();
          } else {
            amountInputs[index].classList.remove('is-invalid');
          }
        });
        
        // Show general charge items feedback if needed
        const chargeItemsFeedback = document.getElementById('chargeItemsFeedback');
        if (!hasValidChargeItems) {
          chargeItemsFeedback.style.display = 'block';
        } else {
          chargeItemsFeedback.style.display = 'none';
        }
        
        // Check form validity
        if (!form.checkValidity() || !hasValidChargeItems) {
          event.preventDefault();
          event.stopPropagation();
          form.classList.add('was-validated');
          
          // Show validation messages for all invalid fields
          const invalidFields = form.querySelectorAll(':invalid');
          invalidFields.forEach(field => {
            field.classList.add('is-invalid');
          });
        }
        // If form is valid, it will submit normally
      }, false);
      
      // Add event listeners to remove validation styling when fields are edited
      const formFields = form.querySelectorAll('input, select, textarea');
      formFields.forEach(field => {
        field.addEventListener('input', function() {
          this.classList.remove('is-invalid');
          
          // Special handling for dropdowns
          if (this.id === 'roomId' && this.value) {
            document.getElementById('roomDropdown').classList.remove('is-invalid');
          }
          if (this.id === 'guestId' && this.value) {
            document.getElementById('guestDropdown').classList.remove('is-invalid');
          }
          if (this.id === 'monthHidden' && this.value) {
            document.getElementById('monthDropdown').classList.remove('is-invalid');
          }
          if (this.id === 'yearHidden' && this.value) {
            document.getElementById('yearDropdown').classList.remove('is-invalid');
          }
        });
      });
      
      // Add focus event listeners to dropdown inputs
      const dropdownInputs = form.querySelectorAll('.dropdown-toggle');
      dropdownInputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.closest('.dropdown').classList.remove('is-invalid');
        });
      });
    }

    function updateGuests(roomNo) {
      const guestListDiv = document.getElementById('guestLists');
      const guestInput = document.getElementById('guestInput');
      const guestId = document.getElementById('guestId');
      const guestDropdown = document.getElementById('guestDropdown');

      if (!roomNo) {
        // Clear guest dropdown if no room selected
        guestListDiv.innerHTML = '<div class="dropdown-item disabled">Select a room first</div>';
        guestInput.value = "";
        guestId.value = "";
        return;
      }

      // Show loading state
      guestListDiv.innerHTML = '<div class="dropdown-item disabled">Loading guests...</div>';

      // Fetch guests for the selected room
      fetch(`<?= base_url('room_guest/') ?>${roomNo}`)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(guests => {
          guestListDiv.innerHTML = ""; // clear old list

          if (guests.length > 0) {
            guests.forEach(guest => {
              const div = document.createElement('div');
              div.classList.add('dropdown-item');
              div.setAttribute('data-value', guest.guest_id);
              div.setAttribute('data-name', `${guest.first_name} ${guest.last_name}`);
              div.textContent = `${guest.first_name} ${guest.last_name}`;

              div.addEventListener('click', function() {
                guestInput.value = this.getAttribute('data-name');
                guestId.value = this.getAttribute('data-value');
                guestId.setCustomValidity('');
                guestDropdown.classList.remove('is-invalid');
              });

              guestListDiv.appendChild(div);
            });
          } else {
            guestListDiv.innerHTML = '<div class="dropdown-item disabled">No guests in this room</div>';
          }
        })
        .catch(error => {
          console.error('Error:', error);
          guestListDiv.innerHTML = '<div class="dropdown-item disabled">Error loading guests</div>';
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
          
          // Set room value
          const roomInput = document.getElementById('roomInput');
          const roomId = document.getElementById('roomId');
          if (roomInput && roomId && data.room_no) {
            roomInput.value = data.room_no;
            roomId.value = data.room_no;
            updateGuests(data.room_no);
          }
          
          // Set guest value
          // const guestInput = document.getElementById('guestInput');
          // const guestId = document.getElementById('guestId');
          // if (guestInput && guestId && data.guest_id && data.guest_id) {
          //   guestInput.value = data.guest_id;
          //   guestId.value = data.guest_id;
          // }

          // Set guest value - FIXED: Use guest name instead of ID
          const guestInput = document.getElementById('guestInput');
          const guestId = document.getElementById('guestId');
          if (guestInput && guestId && data.guest_id && data.guest_name) {
            guestInput.value = data.guest_name; // Use the guest name
            guestId.value = data.guest_id; // Store the ID in the hidden field
          }
          
          // Parse month and year from charge_month (format: YYYY-MM)
          if (data.charge_month) {
            const [year, month] = data.charge_month.split('-');
            const monthInput = document.getElementById('monthInput');
            const monthHidden = document.getElementById('monthHidden');
            const yearInput = document.getElementById('yearInput');
            const yearHidden = document.getElementById('yearHidden');
            
            if (monthInput && monthHidden) {
              monthInput.value = new Date(0, month - 1).toLocaleString('default', { month: 'long' });
              monthHidden.value = month;
            }
            
            if (yearInput && yearHidden) {
              yearInput.value = year;
              yearHidden.value = year;
            }
          }
          
          // Set status
          // const status = document.getElementById('status');
          // if (status && data.status) status.value = data.status;/
          // Set status value in the dropdown
          const statusInput = document.getElementById('statusInput');
          const statusHidden = document.getElementById('statusHidden');
          const statusDropdown = document.getElementById('statusDropdown');
          
          if (statusInput && statusHidden && data.status) {
            // Find the status option that matches the data status
            const statusItems = document.querySelectorAll('#statusLists .dropdown-item');
            statusItems.forEach(item => {
              if (item.getAttribute('data-value') === data.status) {
                const text = item.querySelector('span:last-child').textContent;
                statusInput.value = text;
                statusHidden.value = data.status;
                statusDropdown.classList.remove('is-invalid');
              }
            });
          }
          
          
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
                    <div class="dropdown w-100 charge-type-dropdown">
                      <input type="text" class="form-control dropdown-toggle charge-type-input" 
                            value="${getChargeTypeDisplayName(item.charge_type)}"
                            placeholder="Select Charge Type"
                            data-bs-toggle="dropdown" aria-expanded="false"
                            autocomplete="off" readonly required />
                      <input type="hidden" class="charge-type-hidden" name="charge_types[]" value="${item.charge_type}" required>
                      <ul class="dropdown-menu p-2 w-100" style="max-height: 200px; overflow-y: auto;">
                        <div class="charge-type-list">
                          <div class="dropdown-item" data-value="Maintenance">Maintenance Charge</div>
                          <div class="dropdown-item" data-value="Internet">Internet Charge</div>
                          <div class="dropdown-item" data-value="EB">EB Charge</div>
                          <div class="dropdown-item" data-value="Room Service">Room Service</div>
                          <div class="dropdown-item" data-value="Other">Other</div>
                        </div>
                      </ul>
                      
                    </div>
                    <div class="invalid-feedback">Please select a charge type</div>
                  </div>
                  <div class="col-md-5 mb-2">
                    <label class="form-label">Amount (₹)</label>
                    <input type="number" class="form-control" name="amounts[]" step="0.01" min="0" value="${item.amount}" required>
                    <div class="invalid-feedback">Please enter a valid amount</div>
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
          
          // Initialize the dropdowns for charge items
          initChargeTypeDropdowns();
          
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

    function getChargeTypeDisplayName(type) {
      const typeMap = {
        'Maintenance': 'Maintenance Charge',
        'Internet': 'Internet Charge',
        'EB': 'EB Charge',
        'Room Service': 'Room Service',
        'Other': 'Other'
      };
      
      return typeMap[type] || type;
    }

    // Reset form when modal is closed
    $('#chargeModal').on('hidden.bs.modal', function () {
      resetForm();
    });

    document.addEventListener('DOMContentLoaded', function() {
    // Initialize dropdown functionality for filters
    setupFilterDropdown('statusFilterdisplay', 'statusFilter', 'statusList');
    setupFilterDropdown('roomFilterdisplay', 'roomFilter', 'roomList');
});

function setupFilterDropdown(displayId, hiddenId, listId) {
    const display = document.getElementById(displayId);
    const hidden = document.getElementById(hiddenId);
    const items = document.querySelectorAll(`#${listId} .dropdown-item`);

    items.forEach(item => {
        item.addEventListener('click', function () {
            const value = this.getAttribute('data-value');
            const text = this.textContent.trim();
            display.value = text;
            hidden.value = value;
        });
    });
}
  </script>
</body>
</html>
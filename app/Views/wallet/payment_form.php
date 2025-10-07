<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="refresh" content="900;url=http://viyoma.neuralarc.com/viyoma/logout" />

  <!-- Favicon icon-->
  <link rel="icon" type="image/png" sizes="180x180" href="<?= base_url('public/Logo-Elders_home.png'); ?>">
  <title>Nivasan Udayana </title>
  
  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

   <style>
    /* ========== Global Theme Colors ========== */
    :root {
      /* --primary-green: #1B5E20; */
      /* --primary-green: #1B5E20; */
      --primary-green: #66BB6A;
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

    /* Active navbar link underline */
    .navbar-nav .nav-link {
      position: relative;
      padding-bottom: 4px;
      /* space for underline */
    }

    .navbar-nav .nav-link.active::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 3px;
      background-color: #FFFFFF;
      /* white underline */
      border-radius: 2px;
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
    .form-control,
    .form-select {
      font-size: 14px;
      font-weight: 400;
      border: 1px solid var(--border-color);
      border-radius: 8px;
      padding: 8px 12px;
      background-color: var(--white);
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--secondary-green);
      box-shadow: 0 0 0 0.25rem rgba(102, 187, 106, 0.25);
    }


    /* ========== Tables ========== */
    .table {
      background-color: var(--white);
      border-radius: 8px;
      /* overflow: hidden; */
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .table thead th {
      background-color: var(--primary-green);
      color: var(--white);
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
      color: var(--table-header-text);
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

      .form-control,
      .form-select,
      .btn {
        font-size: 13px;
      }

      .table thead th,
      .table tbody td {
        padding: 8px 10px;
      }
    }

    /* Badge styling */
    .badge {
      font-size: 0.7rem !important;
      padding: 4px 10px;
    }
  </style>
  <style>
    :root {
      --font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
      --font-size-base: 13px;
      --font-size-sm: 12px;
      --font-size-xs: 11px;
      --radius: 6px;
      --card-padding: 10px;
      --modal-padding: 8px 12px;
      --table-pad: 6px 8px;
      --btn-pad: 4px 10px;
      --line-height: 1.3;
    }

    /* ---------- Controls wrapper (top/bottom + responsive) ---------- */
    #form_inputs_wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: .5rem;
    }

    #form_inputs_wrapper>.dataTables_length,
    #form_inputs_wrapper>.dataTables_filter,
    #form_inputs_wrapper>.dataTables_info,
    #form_inputs_wrapper>.dataTables_paginate {
      display: inline-block;
      vertical-align: middle;
      margin: 10px 0;
    }

    /* push search to right on wide screens */
    #form_inputs_wrapper .dataTables_filter {
      margin-left: auto;
    }

    /* ---------- Global compact styles ---------- */
    body {
      font-family: var(--font-family);
      font-size: var(--font-size-base);
      line-height: var(--line-height);
      background-color: var(--light-gray);
      color: var(--dark-gray);
    }

    /* Headings */
    h5,
    .modal-title {
      font-size: 15px;
      font-weight: 600;
    }

    h6 {
      font-size: 13px;
      font-weight: 600;
    }

    /* Forms / buttons */
    .form-label {
      font-size: var(--font-size-sm);
      margin-bottom: 2px;
    }

    .form-control,
    .form-select {
      font-size: var(--font-size-sm);
      padding: 4px 8px;
      border-radius: var(--radius);
      height: auto;
      margin-bottom: 4px;
    }

    .form-control-sm,
    .form-select-sm {
      font-size: 12px;
      padding: 3px 6px;
    }

    .btn {
      font-size: 12px;
      padding: var(--btn-pad);
      border-radius: var(--radius);
    }

    .btn-sm {
      font-size: 12px;
      padding: 3px 8px;
    }

    /* Table compact */
    .table thead th,
    .table tbody td,
    .table th,
    .table td {
      padding: var(--table-pad) !important;
      font-size: 12px;
    }

    .table thead th {
      font-weight: 600;
    }

    .table {
      margin-bottom: .5rem;
    }

    /* Card / sections / modal */
    .card,
    .form-section {
      padding: var(--card-padding) !important;
      border-radius: var(--radius);
      margin-bottom: 10px !important;
    }

    .modal-header,
    .modal-footer {
      padding: 6px 10px;
    }

    .modal-body {
      padding: var(--modal-padding);
      font-size: 12px;
    }

    .modal-title {
      font-size: 13px;
    }

    /* Input groups, pills, misc */
    .input-group-text {
      font-size: 12px;
      padding: 2px;
    }

    .nav-pills .nav-link.active {
      background-color: transparent !important;
      color: var(--primary-green-hover);
      border-bottom: 3px solid var(--primary-green-hover);
      border-radius: 0;
      font-weight: 600;
    }

    /* Dropdowns and small controls */
    .dropdown-menu {
      max-height: 200px;
      overflow-y: auto;
    }

    .dropdown-item {
      padding: .25rem 1rem;
      cursor: pointer;
    }

    .dropdown-item:hover,
    .dropdown-item.active {
      background-color: #198754;
      color: #fff;
    }

    .quantity-control {
      width: 140px;
    }

    .category-input,
    .item-input,
    .service-input {
      cursor: pointer;
      background-color: #fff;
    }

    #laundryTable th {
      white-space: nowrap;
    }

    .modal-xl {
      max-width: 95%;
    }

    /* ---------- Responsive (combined) ---------- */
    @media (max-width: 768px) {

      /* wrapper becomes column */
      #form_inputs_wrapper {
        flex-direction: column;
        align-items: stretch;
      }

      #form_inputs_wrapper>.dataTables_info,
      #form_inputs_wrapper>.dataTables_paginate {
        width: 100%;
        text-align: center;
        margin: 5px 0;
      }

      /* search: full width and aligned right inside it */
      #form_inputs_wrapper .dataTables_filter {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin: 5px 0;
      }

      #form_inputs_wrapper>.dataTables_length {
        display: none !important;
      }

      /* smaller text / tighter controls on small screens */
      body {
        font-size: var(--font-size-xs);
      }

      .btn,
      .form-control,
      .form-select {
        font-size: var(--font-size-xs);
        padding: 3px 6px;
      }
    }
  </style>
  <!-- stepper form styles -->

  <style>
    .payment-method-card {
      border: 2px solid #e0e0e0;
      cursor: pointer;
      transition: all 0.3s;
    }

    .payment-method-card.active {
      border-color: #198754;
      background: #e8f9f0;
      box-shadow: 0 0 8px rgba(25, 135, 84, 0.4);
    }

    .payment-method-card:hover {
      border-color: #198754;
    }
  </style>
   <style>
    .payment-method-cards {
      border: 2px solid #e0e0e0;
      cursor: pointer;
      transition: all 0.3s;
    }

    .payment-method-cards.active {
      border-color: #198754;
      background: #e8f9f0;
      box-shadow: 0 0 8px rgba(25, 135, 84, 0.4);
    }

    .payment-method-cards:hover {
      border-color: #198754;
    }
  </style>
  <style>
    /* Top controls: Show entries + Search (single line, left-right) */
    #form_inputs_wrapper>.dataTables_length,
    #form_inputs_wrapper>.dataTables_filter {
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
    #form_inputs_wrapper>.dataTables_info,
    #form_inputs_wrapper>.dataTables_paginate {
      display: inline-block;
      vertical-align: middle;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      #form_inputs_wrapper {
        flex-direction: column;
        align-items: stretch;
      }

      #form_inputs_wrapper>.dataTables_info,
      #form_inputs_wrapper>.dataTables_paginate {
        width: 100%;
        text-align: center;
        margin: 5px 0;
      }

      /* Search box aligned to the right */
      #form_inputs_wrapper>.dataTables_filter {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin: 5px 0;
      }

      #form_inputs_wrapper .dataTables_filter {
        margin-left: 0;
      }

      #form_inputs_wrapper>.dataTables_length {
        display: none !important;
      }
    }
/* Add smooth transitions for error messages */
.alert {
    transition: all 0.3s ease;
}

.btn {
    transition: all 0.3s ease;
}
    /* Add this to your CSS */
.btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    background-color: #bb2d3b;
    border-color: #b02a37;
}
.credit-badge { background-color: #28a745; color: white; }
    .debit-badge { background-color: #dc3545; color: white; }
  </style>
</head>

<body style="background-color:#EDF7EE;">
  <?= view('layout/head-PS') ?>
  
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>

  <div class="p-3">
    <div class="card-body">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
          
          <div class="datatables">
            <div class="card-body">
              
              <?php
              $session = \Config\Services::session();
              $successMessage = $session->getFlashdata('success');
              ?>
              
              <?php if ($successMessage): ?>
                <div class="alert bg-success-subtle text-info alert-dismissible fade show" role="alert">
                  <div class="d-flex align-items-center text-success">
                    <i class="ti ti-info-circle me-2 fs-4"></i>
                    <?= $successMessage ?>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>

              <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fs-7"><i class="bi bi-clock-history me-2 text-success"></i>Transaction History</h5>
                <div>
                  <a href="<?= base_url('wallet'); ?>" class="btn btn-secondary">Back to Wallet</a>
                </div>
              </div>

              <!-- Summary Cards -->
              <!-- <div class="row mb-4">
                <div class="col-md-3">
                  <div class="card bg-success text-white">
                    <div class="card-body p-3">
                      <h6 class="card-title">Total Credit</h6>
                      <h4 class="mb-0">₹</?= number_format($total_credit, 2) ?></h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card bg-danger text-white">
                    <div class="card-body p-3">
                      <h6 class="card-title">Total Debit</h6>
                      <h4 class="mb-0">₹</?= number_format($total_debit, 2) ?></h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card bg-info text-white">
                    <div class="card-body p-3">
                      <h6 class="card-title">Net Balance</h6>
                      <h4 class="mb-0">₹</?= number_format($net_balance, 2) ?></h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card bg-primary text-white">
                    <div class="card-body p-3">
                      <h6 class="card-title">Total Transactions</h6>
                      <h4 class="mb-0"></?= count($transactions) ?></h4>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- Filter Form -->
              <form method="get" action="<?= current_url() ?>" class="mb-4">
                <div class="row g-3 align-items-end">
                  
                  <!-- Date Range -->
                  <div class="col-md-2">
                    <label class="form-label">From Date</label>
                    <input type="date" class="form-control" name="from_date" 
                           value="<?= !empty($filter_from_date) ? esc($filter_from_date) : '' ?>">
                  </div>
                  
                  <div class="col-md-2">
                    <label class="form-label">To Date</label>
                    <input type="date" class="form-control" name="to_date" 
                           value="<?= !empty($filter_to_date) ? esc($filter_to_date) : '' ?>">
                  </div>

                  <!-- Room No Dropdown -->
                  <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                  <div class="col-md-2">
                    <label class="form-label">Room No</label>
                    <div class="dropdown">
                      <input type="text" class="form-control dropdown-toggle w-100"
                        name="roomNoDisplay"
                        id="roomNoFilterDisplay"
                        placeholder="Select Room No"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        autocomplete="off"
                        readonly
                        value="<?= !empty($filter_room_no) && $filter_room_no !== 'all' ? esc($filter_room_no) : '' ?>" />

                      <input type="hidden" name="room_no" id="roomNoFilter" 
                            value="<?= !empty($filter_room_no) ? esc($filter_room_no) : 'all' ?>">

                      <ul class="dropdown-menu p-2 w-100" aria-labelledby="roomNoFilterDisplay"
                          style="max-height: 150px; overflow-y: auto;">
                        <div id="roomNoLists" style="width: 100%;">
                          <div class="dropdown-item" data-value="all">All Rooms</div>
                          <?php if (!empty($roomNumbers)): ?>
                            <?php foreach ($roomNumbers as $room): ?>
                              <div class="dropdown-item" data-value="<?= esc($room['room_no']) ?>">
                                <?= esc($room['room_no']) ?>
                              </div>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <div class="dropdown-item text-muted">No rooms available</div>
                          <?php endif; ?>
                        </div>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>

                  <!-- Guest Dropdown -->
                  <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                  <div class="col-md-2">
                    <label class="form-label">Guest</label>
                    <div class="dropdown">
                      <input type="text" class="form-control dropdown-toggle w-100"
                        name="guestDisplay"
                        id="guestFilterDisplay"
                        placeholder="Select Guest"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        autocomplete="off"
                        readonly
                        value="<?php 
                          if (!empty($filter_guest_id) && $filter_guest_id !== 'all') {
                            foreach ($guests as $g) {
                              if ($g['guest_id'] == $filter_guest_id) {
                                echo esc(trim(($g['first_name'] ?? '') . ' ' . ($g['last_name'] ?? '')));
                                break;
                              }
                            }
                          } 
                        ?>" />

                      <input type="hidden" name="guest_id" id="guestFilter" 
                            value="<?= !empty($filter_guest_id) ? esc($filter_guest_id) : 'all' ?>">

                      <ul class="dropdown-menu p-2 w-100" aria-labelledby="guestFilterDisplay"
                          style="max-height: 150px; overflow-y: auto;">
                        <div id="guestLists" style="width: 100%;">
                          <div class="dropdown-item" data-value="all">All Guests</div>
                          <?php if (!empty($guests)): ?>
                            <?php foreach ($guests as $guest): ?>
                              <?php 
                                $guestName = trim(($guest['first_name'] ?? '') . ' ' . ($guest['last_name'] ?? ''));
                                if ($guestName === '') continue;
                              ?>
                              <div class="dropdown-item" data-value="<?= esc($guest['guest_id']) ?>">
                                <?= esc($guestName) ?>
                              </div>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <div class="dropdown-item text-muted">No guests available</div>
                          <?php endif; ?>
                        </div>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>

                  <!-- Payment Mode -->
                  <!-- <div class="col-md-2">
                    <label class="form-label">Payment Mode</label>
                    <select class="form-select" name="payment_mode">
                      <option value="all">All Modes</option>
                      </?php foreach ($payment_modes as $mode): ?>
                        <option value="</?= $mode ?>" </?= ($filter_payment_mode === $mode) ? 'selected' : '' ?>>
                          </?= $mode ?>
                        </option>
                      </?php endforeach; ?>
                    </select>
                  </div> -->

                  <!-- Transaction Type -->
                  <!-- <div class="col-md-2">
                    <label class="form-label">Transaction Type</label>
                    <select class="form-select" name="transaction_type">
                      <option value="all">All Types</option>
                      <option value="credit" </?= ($filter_transaction_type === 'credit') ? 'selected' : '' ?>>Credit</option>
                      <option value="debit" </?= ($filter_transaction_type === 'debit') ? 'selected' : '' ?>>Debit</option>
                    </select>
                  </div> -->

                  <!-- Action Buttons -->
                  <div class="col-md-2 d-flex gap-2">
                    <button type="submit" class="btn btn-success">Filter</button>
                    <button type="submit" name="pdf" value="1" class="btn btn-primary" formtarget="_blank">PDF</button>
                    <button type="submit" name="excel" value="1" class="btn btn-primary">Excel</button>
                    <a href="<?= current_url() ?>" class="btn btn-secondary">Reset</a>
                  </div>
                </div>
              </form>

              <!-- Transactions Table -->
              <div class="table-responsive mt-3">
                <table id="transaction_table" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Date & Time</th>
                      <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                        <th>Room No</th>
                        <th>Guest Name</th>
                      <?php endif; ?>
                      <th>Transaction Type</th>
                      <th>Amount</th>
                      <th>Payment Mode</th>
                      <th>Reference ID</th>
                      <th>Bill</th>
                      <!-- <th>Description</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; foreach ($transactions as $transaction): ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <?php 
                            $date = $transaction['created_at'] ?? $transaction['created_on'] ?? '';
                            if (!empty($date)) {
                                echo date('M d, Y h:i A', strtotime($date));
                            } else {
                                echo 'N/A';
                            }
                            ?>
                        </td>
                        <?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
                          <td><?= $transaction['room_no'] ?? 'N/A' ?></td>
                          <td>
                              <?php 
                              $firstName = $transaction['first_name'] ?? '';
                              $lastName = $transaction['last_name'] ?? '';
                              $guestName = trim($firstName . ' ' . $lastName);
                              echo !empty($guestName) ? $guestName : 'N/A';
                              ?>
                          </td>
                        <?php endif; ?>
                        <td>
                          <span class="badge <?= $transaction['type'] === 'credit' ? 'credit-badge' : 'debit-badge' ?>">
                            <?= ucfirst($transaction['type']) ?>
                          </span>
                        </td>
                        <td class="<?= $transaction['type'] === 'credit' ? 'text-success' : 'text-danger' ?>">
                          <strong>
                            <?= ($transaction['type'] === 'credit' ? '+' : '-') ?> ₹<?= number_format($transaction['amount'], 2) ?>
                          </strong>
                        </td>
                        <td><?= $transaction['payment_mode'] ?? 'N/A' ?></td>
                        <td><?= $transaction['reference_id'] ?? 'N/A' ?></td>
                        <!-- <td></?= $transaction['description'] ?? 'N/A' ?></td> -->
                         <td>
    <!-- Generate Bill Button -->
    <button type="button"
            class="btn btn-primary btn-sm generate-bill-btn"
            data-transaction-id="<?= $transaction['transaction_id']; ?>"
            data-bs-toggle="modal"
            data-bs-target="#generateBillModal">
        <i class="bi bi-receipt"></i> Generate Bill
    </button>
</td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Generate Bill Confirmation Modal -->
  <div class="modal fade" id="generateBillModal" tabindex="-1" aria-labelledby="generateBillModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="generateBillModalLabel">
            <i class="bi bi-receipt me-2 text-success"></i>Generate Bill
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to generate a bill for this transaction?</p>
          <!-- <div class="transaction-details mt-3 p-3 bg-light rounded">
            <h6 class="mb-2">Transaction Details:</h6>
            <div class="row">
              <div class="col-6">
                <small><strong>Transaction ID:</strong></small>
                <p id="modalTransactionId" class="mb-1">-</p>
              </div>
              <div class="col-6">
                <small><strong>Date:</strong></small>
                <p id="modalTransactionDate" class="mb-1">-</p>
              </div>
              <div class="col-6">
                <small><strong>Type:</strong></small>
                <p id="modalTransactionType" class="mb-1">-</p>
              </div>
              <div class="col-6">
                <small><strong>Amount:</strong></small>
                <p id="modalTransactionAmount" class="mb-1">-</p>
              </div>
            </div>
          </div> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success" id="confirmGenerateBill">
            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
            <span class="btn-text">Generate Bill</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>

  <script>
    // Initialize DataTable
    $(document).ready(function() {
      $('#transaction_table').DataTable({
        paging: true,
        searching: true,
        info: true,
        order: [[1, 'desc']] // Sort by date descending
      });

      // Dropdown functionality
      function setupDropdown(displayId, hiddenId, listId) {
        const displayInput = document.getElementById(displayId);
        const hiddenInput = document.getElementById(hiddenId);
        const dropdownItems = document.querySelectorAll(`#${listId} .dropdown-item`);
        
        dropdownItems.forEach(item => {
          item.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            const text = this.textContent.trim();
            
            hiddenInput.value = value;
            displayInput.value = text;
            
            const dropdownInstance = bootstrap.Dropdown.getInstance(displayInput);
            if (dropdownInstance) dropdownInstance.hide();
          });
        });
      }

      setupDropdown('roomNoFilterDisplay', 'roomNoFilter', 'roomNoLists');
      setupDropdown('guestFilterDisplay', 'guestFilter', 'guestLists');

      // Generate Bill Modal Logic
      let currentTransactionId = '';
      
      // When generate bill button is clicked
      $('.generate-bill-btn').on('click', function() {
        const transactionId = $(this).data('transaction-id');
        currentTransactionId = transactionId;
        
        // Find the transaction row
        const $row = $(this).closest('tr');
        
        // Extract transaction details
        const date = $row.find('td:eq(1)').text().trim();
        const type = $row.find('td:eq(3) .badge').text().trim();
        const amount = $row.find('td:eq(4)').text().trim();
        
        // Update modal content
        $('#modalTransactionId').text(transactionId);
        $('#modalTransactionDate').text(date);
        $('#modalTransactionType').html($row.find('td:eq(3)').html());
        $('#modalTransactionAmount').html($row.find('td:eq(4)').html());
      });
      
      // When confirm button is clicked
      $('#confirmGenerateBill').on('click', function() {
        const $btn = $(this);
        const $btnText = $btn.find('.btn-text');
        const $spinner = $btn.find('.spinner-border');
        
        // Show loading state
        $btn.prop('disabled', true);
        $btnText.text('Generating...');
        $spinner.removeClass('d-none');
        
        // Send AJAX request
        fetch('<?= base_url("wallet/generateWalletBill"); ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: 'transaction_id=' + encodeURIComponent(currentTransactionId)
        })
        .then(response => {
            console.log('Response status:', response.status);
            console.log('Response ok:', response.ok);
            
            if (!response.ok) {
                throw new Error('HTTP error! status: ' + response.status);
            }
            return response.text();
        })
        .then(text => {
            console.log('Raw response:', text);
            
            try {
                const data = JSON.parse(text);
                return data;
            } catch (e) {
                console.error('JSON parse error:', e);
                throw new Error('Invalid JSON response: ' + text.substring(0, 100));
            }
        })
        .then(data => {
            console.log('Parsed data:', data);
            
            if (data.success) {
                // Close the modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('generateBillModal'));
                modal.hide();
                
                // Open bill in new tab for preview/download
                const billUrl = '<?= base_url("wallet/viewWalletBill"); ?>?bill_id=' + data.bill_id;
                console.log('Opening bill URL:', billUrl);
                window.open(billUrl, '_blank');
                
                // Show success message (optional)
                // You could add a toast notification here
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error generating bill: ' + error.message);
        })
        .finally(() => {
            // Reset button state
            $btn.prop('disabled', false);
            $btnText.text('Generate Bill');
            $spinner.addClass('d-none');
        });
      });
      
      // Reset modal when closed
      $('#generateBillModal').on('hidden.bs.modal', function() {
        currentTransactionId = '';
        $('#modalTransactionId').text('-');
        $('#modalTransactionDate').text('-');
        $('#modalTransactionType').text('-');
        $('#modalTransactionAmount').text('-');
        
        // Reset confirm button
        const $btn = $('#confirmGenerateBill');
        $btn.prop('disabled', false);
        $btn.find('.btn-text').text('Generate Bill');
        $btn.find('.spinner-border').addClass('d-none');
      });
    });
  </script>
</body>
</html>
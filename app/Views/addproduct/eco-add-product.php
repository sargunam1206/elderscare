<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Udayana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
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
  </style>
</head>

<body style="background-color:#EDF7EE;">
  <?= view('layout/head-PS') ?>

  <!-- Preloader -->





  <!-- Sidebar Start -->

  <!--  Sidebar End -->

  <!--  Header Start -->

  <!--  Header End -->

  <div class="main-wrapper p-3">
    <div class="">
      <h5 class=" fs-7"><i class="bi bi-house-door text-success"></i>
        Inhouse Guest</h5>
    </div>

    <!-- start Basic Area Chart -->
    <?php
    $session = \Config\Services::session();
    if (isset($session->success)): ?>
      <div class="alert bg-success-subtle text-info alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center text-success">
          <i class="ti ti-info-circle me-2 fs-4"></i>
          <?= $session->success; ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <div class="row">
      <!-- Enhanced Submenu CSS -->


      <!-- Guest Cards Section -->
      <div class="col-md-12">




        <!-- Your Performance Card -->

      </div>

      <!-- end Basic Area Chart -->

    </div>



    <div class="container-fluid mt-2">
      <div class="row ">
        <!-- Left Side (70%) -->
        <div class="col-md-8">
          <div class="card shadow-md rounded-3">
            <div class="">
              <!-- <form method="post" action="<?= base_url('viewuom'); ?>"> -->

                <div class="table-responsive mt-3">
                  <table id="form_inputs"
                    class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                    <thead class="table-light">
                      <tr>
                        <th>Guest Name</th>
                        <th>Room No</th>
                        <!-- <th>Mobile No</th> -->
                        <th>Services</th>
                        <th>Maintanence Charge</th>
                      </tr>
                    </thead>
                   <tbody>
  <?php if(!empty($occupiedBookings)): ?>
    <?php foreach($occupiedBookings as $booking): ?>
      
      <!-- Guest 1 -->
      <?php if(!empty($booking['guest1_firstname'])): ?>
        <tr data-room-no="<?= esc($booking['room_no']) ?>" 
            data-guest-id="<?= esc($booking['guest1_id']) ?>"
            data-guest-type="guest1">
          <td>
            <?= esc(ucfirst(strtolower($booking['guest1_firstname'])).' '.ucfirst(strtolower($booking['guest1_lastname']))) ?>
          </td>
          <td><?= esc($booking['room_no']) ?></td>
          <td>
            <div class="dropdown">
              <input type="text" 
                     class="form-control dropdown-toggle w-100 service-input" 
                     placeholder="Select Service" 
                     data-bs-toggle="dropdown" 
                     aria-expanded="false" 
                     readonly />
              <ul class="dropdown-menu w-50" style="max-height: 150px; overflow-y: auto;">
                <div class="service-list">
                  <?php if (!empty($servicetype)): ?>
                    <?php foreach ($servicetype as $service): ?>
                      <div class="dropdown-item service-option" 
                           data-id="<?= esc($service['service_type_id']) ?>" 
                           data-value="<?= esc($service['name']) ?>">
                           <?= esc($service['name']) ?>
                      </div>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <div class="dropdown-item text-muted">No services found</div>
                  <?php endif; ?>
                </div>
              </ul>
            </div>
          </td>
           <td>  <button class="btn btn-primary" 
            data-bs-toggle="modal" 
            data-bs-target="#maintenanceModal"
            data-guest-id="<?= esc($booking['guest1_id']) ?>"
            data-guest-type="guest1">
        Pay Maintenance Charges
    </button></td>
        </tr>
      <?php endif; ?>

      <!-- Guest 2 -->
      <?php if(!empty($booking['guest2_firstname'])): ?>
        <tr data-room-no="<?= esc($booking['room_no']) ?>" 
            data-guest-id="<?= esc($booking['guest2_id']) ?>"
            data-guest-type="guest2">
          <td>
            <?= esc(ucfirst(strtolower($booking['guest2_firstname'])).' '.ucfirst(strtolower($booking['guest2_lastname']))) ?>
          </td>
          <td><?= esc($booking['room_no']) ?></td>
          <td>
            <div class="dropdown">
              <input type="text" 
                     class="form-control dropdown-toggle w-100 service-input" 
                     placeholder="Select Service" 
                     data-bs-toggle="dropdown" 
                     aria-expanded="false" 
                     readonly />
              <ul class="dropdown-menu w-50" style="max-height: 150px; overflow-y: auto;">
                <div class="service-list">
                  <?php if (!empty($servicetype)): ?>
                    <?php foreach ($servicetype as $service): ?>
                      <div class="dropdown-item service-option" 
                           data-id="<?= esc($service['service_type_id']) ?>" 
                           data-value="<?= esc($service['name']) ?>">
                           <?= esc($service['name']) ?>
                      </div>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <div class="dropdown-item text-muted">No services found</div>
                  <?php endif; ?>
                </div>
              </ul>
            </div>
          </td>
           <td>  <button class="btn btn-primary" 
            data-bs-toggle="modal" 
            data-bs-target="#maintenanceModal"
            data-guest-id="<?= esc($booking['guest2_id']) ?>"
            data-guest-type="guest2">
       Pay Maintenance Charges
    </button></td>
        </tr>
      <?php endif; ?>

    <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td colspan="4" class="text-center">No occupied rooms found</td>
    </tr>
  <?php endif; ?>
</tbody>


                  </table>
                </div>

              </form>
            </div>
          </div>
        </div>



        <!-- Right Side (30%) -->
        <div class="col-md-4">


          <div class="card text-dark shadow-md border-0 rounded-3">
            <div class="p-3 ">
              <!-- Title and Subtitle -->
              <div class="mb-4">
                <h5 class="card-title fw-semibold mb-1">Room Status</h5>
              </div>

              <!-- Tabs Section -->
              <div class="table-responsive">
                <div class="mb-3 p-2">
                  <div class="d-flex flex-wrap gap-1">
                    <!-- <span class="badge d-flex align-items-center" style=" color: #2e7d32">
                      <span class="rounded-circle d-inline-block me-1" style="
                                width: 12px;
                                height: 12px;
                                background-color: #2e7d32;
                              "></span>
                      Vacant
                    </span> -->
                    <span class="badge d-flex align-items-center" style=" color: #d32f2f">
                      <span class="rounded-circle d-inline-block me-1" style="
                                width: 12px;
                                height: 12px;
                                background-color: #d32f2f;
                              "></span>
                      Occupied
                    </span>
                    <!-- <span class="badge d-flex align-items-center" style=" color: goldenrod">
                      <span class="rounded-circle d-inline-block me-1" style="
                                width: 12px;
                                height: 12px;
                                background-color: goldenrod;
                              "></span>
                      Reserved
                    </span> -->
                  </div>
                </div>
                <ul class="nav nav-tabs gap-4 border-0 flex-wrap" role="tablist">

                  <?php foreach ($rooms as $eachroom): ?>



                    <li class="nav-item" role="presentation">
                      <a class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold" style="background-color: 
                            <?php
                            if ($eachroom['room_status'] == 'Vacant') {
                              echo 'green';
                            } elseif ($eachroom['room_status'] == 'Occupied') {
                              echo '#d32f2f';
                            } else {
                              echo 'goldenrod';
                            }
                            ?>

                              " data-bs-toggle="tab" href="#room<?= htmlspecialchars($eachroom['room_no']) ?>"
                        role="tab" data-room-no="<?= htmlspecialchars($eachroom['room_no']) ?>">
                        <?= htmlspecialchars($eachroom['room_no']) ?>
                      </a>
                    </li>


                  <?php endforeach; ?>


                  <!-- Continue for more rooms... -->
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>



    <!--  Search Bar -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#laundryModal">
      Open Laundry Modal
    </button> -->


    <!-- Laundry Modal -->
    <!-- Laundry Modal -->
    <div class="modal fade" id="laundryModal" tabindex="-1" aria-labelledby="laundryModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <form method="post" id="laundryForm"class="needs-validation" novalidate>

          <!-- Stepper Navigation -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <ul class="nav nav-pills flex-grow-1 justify-content-between" id="laundry-pills-tab" role="tablist">
              <li class="nav-item flex-fill text-center">
                <button class="nav-link active w-100" id="laundry-step1-tab" data-bs-toggle="pill"
                  data-bs-target="#laundry-step1" type="button">
                  Services
                </button>
              </li>
              <li class="nav-item flex-fill text-center">
                <button class="nav-link w-100" id="laundry-step2-tab" data-bs-toggle="pill"
                  data-bs-target="#laundry-step2" type="button">
                  Summary & Payment
                </button>
              </li>
              <!-- <li class="nav-item flex-fill text-center">
                <button class="nav-link w-100" id="laundry-step3-tab" data-bs-toggle="pill"
                  data-bs-target="#laundry-step3" type="button">
                  Success
                </button>
              </li> -->
            </ul>
            <button type="button" class="btn-close m-3" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- Tab Content -->
          <div class="tab-content">

            <!-- STEP 1: Laundry Service Selection -->
            <div class="tab-pane fade show active p-2" id="laundry-step1">
              <div class="modal-body">
                <div class="table-responsive">
                  <table id="laundryTable"
                    class="table table-bordered table-striped table-hover text-center align-middle">
                    <thead class="table-success">
                      <tr>
                        <th>S.No</th>
                        <th>Category</th>
                        <th>Item</th>
                        <th>Count</th>
                        <th>Total</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="laundry-table-body">
                      <!-- Dynamic rows will be added here -->
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="4" class="text-end fw-bold">Grand Total:</td>
                        <td colspan="2" class="fw-bold text-primary" id="grand-total">₹0</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="modal-footer border-top justify-content-end">
                <button type="button" class="btn btn-primary" onclick="goLaundryStep(2)">Next →</button>
              </div>
            </div>



            <!-- STEP 2: Summary + Payment -->
            <div class="tab-pane fade p-2" id="laundry-step2">
              <div class="modal-body">
                <!-- Summary Table -->

                <div class="table-responsive mb-4">
                  <table class="table table-bordered align-middle" id="laundry-summary-table">
                    <thead class="table-light">
                      <tr>
                        <th>Service</th>
                        <th class="text-end">Amount</th>
                      </tr>
                    </thead>
                    <tbody id="laundry-summary-body"></tbody>
                  </table>
                </div>

                <!-- Payment Methods -->
                <h5 class="mb-3">Select Payment Method</h5>
                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                    <div class="card payment-method-card p-3" data-method="cash">
                      💵 Cash Payment <br><small class="text-muted">Pay at reception</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card payment-method-card p-3" data-method="upi">
                      📱 UPI Payment <br><small class="text-muted">Pay via UPI apps</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card payment-method-card p-3" data-method="card">
                      💳 Card Payment <br><small class="text-muted">Credit/Debit Card</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card payment-method-card p-3" data-method="wallet">
                      🏨 Wallet <br><small class="text-muted">Use credits</small>
                    </div>
                  </div>
                </div>

                <!-- Payment Forms -->
                <div id="laundry-payment-forms">
                  <div id="laundry-cash-form" class="payment-form" style="display:none">
                    <div class="mb-3">
                      <label class="form-label">Bill No <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="bill_no" placeholder="Enter Bill No" required>
                      <div class="invalid-feedback">Please enter a bill number.</div>
                    </div>
                  </div>
                  <div id="laundry-upi-form" class="payment-form" style="display:none">
                    <div class="mb-3">
                      <label class="form-label">Transaction ID <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="upi_trans" placeholder="yourname@upi" required>
                      <div class="invalid-feedback">Please enter a UPI transaction ID.</div>
                    </div>
                  </div>
                  <div id="laundry-card-form" class="payment-form" style="display:none">
                    <div class="mb-3">
                      <label class="form-label">Transaction ID <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="card_trans" placeholder="Enter Transaction ID" required>
                      <div class="invalid-feedback">Please enter a card transaction ID.</div>
                    </div>
                  </div>
                  <div id="laundry-wallet-form" class="payment-form" style="display:none">
                    <div class="alert alert-info">
                      <i class="fas fa-info-circle me-2"></i>
                      Current balance: <strong id="laundry-balance">₹0</strong>
                    </div>
                    <!-- Wallet doesn't need additional input validation -->
                  </div>
                </div>

                <!-- Stepper Navigation -->
                <div class="d-flex justify-content-between mt-5">
                  <button type="button" class="btn btn-secondary" onclick="goLaundryStep(1)">
                    <i class="fas fa-arrow-left me-2"></i> Back
                  </button>
                  <button type="button" class="btn btn-success" onclick="goLaundryStep(3)">
                    <i class="fas fa-check-circle me-2"></i> Submit
                  </button>
                </div>
              </div>
            </div>

            <!-- STEP 3: Payment Success -->
            <div class="tab-pane fade text-center" id="laundry-step3">
              <div class="p-4">
                <i class="bi bi-check-circle text-success" style="font-size: 3rem;"></i>
                <h4 class="mt-3">Payment Successful!</h4>
                <p>Your laundry charges have been submitted successfully.</p>
              </div>
            </div>

          </div><!-- end tab-content -->

          </form>
        </div>
      </div>
    </div>


    <script>
      let rowCount = 0;

      const prices = {
        "Wash": 50,
        "Iron": 30,
        "Dry Clean": 100
      };

      
      // Automatically add 1 row when modal opens
      document.getElementById("laundryModal").addEventListener("shown.bs.modal", function () {
        clearPaymentForms();
        if (document.querySelectorAll("#laundry-table-body tr").length === 0) {
          addRow();
        }
      });




      function changeQuantity(btn, change) {
        const input = btn.parentElement.querySelector(".quantity");
        let value = parseInt(input.value) || 1;
        value = Math.max(1, value + change); // 👈 minimum 1
        input.value = value;
        updateRowTotal(input);
      }



      function updateRowTotal(el) {
        const row = el.closest("tr");
        const quantity = parseInt(row.querySelector(".quantity").value) || 0;

        // ✅ read unit price from data-price
        let price = parseFloat(row.querySelector(".price-cell").getAttribute("data-price")) || 0;

        const total = price * quantity;
        row.querySelector(".row-total").textContent = "₹" + total;
        updateGrandTotal();
      }



      function updateGrandTotal() {
        let grandTotal = 0;
        document.querySelectorAll(".row-total").forEach(span => {
          grandTotal += parseInt(span.textContent.replace("₹", "")) || 0;
        });
        document.getElementById("grand-total").textContent = "₹" + grandTotal;
      }

      function removeRow(btn) {
        btn.closest("tr").remove();
        updateGrandTotal();
        renumberRows();
      }

      // ✅ New function to re-sequence all rows
      function renumberRows() {
        const rows = document.querySelectorAll("#laundry-table-body tr");
        rows.forEach((row, index) => {
          row.querySelector(".sno").textContent = index + 1;
        });
      }

      document.getElementById("laundryModal").addEventListener("hidden.bs.modal", function () {
        document.getElementById("laundry-table-body").innerHTML = "";  // remove all rows
        document.getElementById("grand-total").textContent = "₹0";     // reset total
        rowCount = 0; // reset row counter if you’re using it
      });

    </script>



    <script>


      function activateDropdowns(row) {
        row.querySelectorAll(".dropdown").forEach(dropdown => {
          const input = dropdown.querySelector("input");
          const items = dropdown.querySelectorAll(".dropdown-item");

          items.forEach(item => {
            item.addEventListener("click", function () {
              input.value = this.getAttribute("data-value");
              input.dispatchEvent(new Event("change")); // trigger change event if needed
            });
          });
        });
      }

      // Run for all rows initially
      document.querySelectorAll("#laundryTable tbody tr").forEach(tr => activateDropdowns(tr));

      // When you add a new row dynamically, call this:
      // activateDropdowns(newRow);
    </script>


    <!-- Maintenance Service Modal -->
    <!-- <div class="modal fade" id="maintenanceModal" tabindex="-1" aria-labelledby="maintenanceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="maintenanceModalLabel">Maintenance Charges</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="maintenanceForm">
          <div class="mb-3 row">
            <label for="maintenanceDescription" class="col-sm-4 col-form-label">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="maintenanceDescription" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="maintenanceAmount" class="col-sm-4 col-form-label">Amount (₹)</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="maintenanceAmount" required>
            </div>
          </div>
          <button type="button" class="btn btn-success" onclick="addMaintenanceCharge()">Add Charge</button>
        </form>

        <hr>

        <h6>Maintenance Charges Summary:</h6>
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>Description</th>
              <th class="text-end">Amount (₹)</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody id="maintenanceTableBody"></tbody>
          <tfoot>
            <tr>
              <td><strong>Total</strong></td>
              <td class="text-end"><strong id="maintenanceTotal">₹0.00</strong></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" onclick="saveMaintenanceAndPay()">Save & Pay</button>
      </div>
    </div>
  </div>
</div>> -->

    <!-- <script>
  const maintenanceItems = {
    Electrical: [
      { name: "Fan Repair", rate: 150 },
      { name: "Light Replacement", rate: 100 }
    ],
    Plumbing: [
      { name: "Tap Fixing", rate: 120 },
      { name: "Pipe Leakage", rate: 200 }
    ],
    Carpentry: [
      { name: "Door Repair", rate: 180 },
      { name: "Shelf Fixing", rate: 220 }
    ]
  };

  let maintenanceCart = [];

  function openMaintenanceModal() {
    const modal = new bootstrap.Modal(document.getElementById('maintenanceModal'));
    modal.show();
  }

  function updateMaintenanceItems(category) {
    const itemSelect = document.getElementById('maintenanceItem');
    itemSelect.innerHTML = `<option value="">-- Select Item --</option>`;

    if (maintenanceItems[category]) {
      maintenanceItems[category].forEach(item => {
        const option = document.createElement('option');
        option.value = item.name;
        option.text = `${item.name} (₹${item.rate})`;
        itemSelect.appendChild(option);
      });
    }
  }

  function addToMaintenanceCart() {
    const category = document.getElementById('maintenanceCategory').value;
    const item = document.getElementById('maintenanceItem').value;
    const qty = parseInt(document.getElementById('maintenanceQty').value);

    if (!category || !item || qty < 1) {
      alert("Please select category, item, and quantity");
      return;
    }

    const rate = maintenanceItems[category].find(i => i.name === item).rate;
    maintenanceCart.push({ item, rate, qty, amount: rate * qty });
    renderMaintenanceCart();
  }

  function removeMaintenanceItem(index) {
    maintenanceCart.splice(index, 1);
    renderMaintenanceCart();
  }

  function renderMaintenanceCart() {
    const tbody = document.querySelector("#maintenanceCartTable tbody");
    tbody.innerHTML = "";
    maintenanceCart.forEach((entry, i) => {
      tbody.innerHTML += `
        <tr>
          <td>${entry.item}</td>
          <td>₹${entry.rate}</td>
          <td>${entry.qty}</td>
          <td>₹${entry.amount}</td>
          <td><button class="btn btn-sm btn-danger" onclick="removeMaintenanceItem(${i})">Delete</button></td>
        </tr>
      `;
    });
  }

  function saveMaintenanceCart() {
    const total = maintenanceCart.reduce((sum, item) => sum + item.amount, 0);
    alert(`Total Maintenance Charges: ₹${total}`);
    // Save logic here...
    maintenanceCart = [];
    renderMaintenanceCart();
    bootstrap.Modal.getInstance(document.getElementById('maintenanceModal')).hide();
  }
</script> -->
    <!-- <script>
  let maintenanceCharges = [];

  function addMaintenanceCharge() {
    const desc = document.getElementById("maintenanceDescription").value.trim();
    const amt = parseFloat(document.getElementById("maintenanceAmount").value.trim());

    if (!desc || isNaN(amt)) {
      alert("Please fill both fields properly.");
      return;
    }

    maintenanceCharges.push({ desc, amt });
    updateMaintenanceTable();

    // Clear form
    document.getElementById("maintenanceForm").reset();
  }

  function updateMaintenanceTable() {
    const tbody = document.getElementById("maintenanceTableBody");
    tbody.innerHTML = "";

    let total = 0;
    maintenanceCharges.forEach((item, index) => {
      total += item.amt;

      const row = `<tr>
        <td>${item.desc}</td>
        <td class="text-end">₹${item.amt.toFixed(2)}</td>
        <td class="text-center">
          <button class="btn btn-sm btn-danger" onclick="removeMaintenanceCharge(${index})">Remove</button>
        </td>
      </tr>`;
      tbody.innerHTML += row;
    });

    document.getElementById("maintenanceTotal").innerText = `₹${total.toFixed(2)}`;
  }

  function removeMaintenanceCharge(index) {
    maintenanceCharges.splice(index, 1);
    updateMaintenanceTable();
  }

  function saveMaintenanceAndPay() {
    const total = maintenanceCharges.reduce((sum, item) => sum + item.amt, 0);
    const modal = bootstrap.Modal.getInstance(document.getElementById("maintenanceModal"));
    modal.hide(); // Close the modal
    showPaymentFromLaundry(total); // Redirect to payment
  }
</script> -->

    <!-- Maintenance Charges Module UI -->
    <!-- <div class="modal fade" id="maintenanceModal" tabindex="-1" aria-labelledby="maintenanceModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="card shadow-sm border-0">
              <div class="card-body">
                <h5 class="mb-3"><i class="bi bi-scissors"></i> Maintenance Charges</h5>
                <p class="mb-3">Select Maintenance Services</p>

                <div class="row g-3">
                  <div class="col-md-6">
                    <button class="btn btn-outline-secondary w-100"
                      onclick="addMaintenanceItem('Room Charge', 500)">Room Charge <span
                        class="float-end">₹500</span></button>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-outline-secondary w-100"
                      onclick="addMaintenanceItem('Room Service', 1200)">Room Service <span
                        class="float-end">₹1200</span></button>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-outline-secondary w-100" onclick="addMaintenanceItem('EB Bill', 1500)">EB
                      Bill <span class="float-end">₹1500</span></button>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-outline-secondary w-100"
                      onclick="addMaintenanceItem('Maintenance Charges', 600)">Maintenance Charges <span
                        class="float-end">₹600</span></button>
                  </div>
                </div>

               
                <div class="mt-4 border p-3 rounded">
                  <label class="form-label">Other Service</label>
                  <input type="text" id="customServiceName" class="form-control mb-2"
                    placeholder="Custom maintenance service">
                  <input type="number" id="customServiceAmount" class="form-control mb-2" placeholder="Amount">
                  <button class="btn btn-sm btn-success" onclick="addCustomService()">Add</button>
                </div>

               
                <div id="maintenance-cart" class="mt-4 d-none">
                  <h6>Selected Services</h6>
                  <div id="maintenance-items" class="mb-2"></div>
                  <div class="d-flex justify-content-between border-top pt-2">
                    <strong>Total</strong>
                    <strong id="maintenance-total">₹0</strong>
                  </div>
                </div>

                <div class="mt-4 d-flex justify-content-between">
                  <button class="btn btn-outline-secondary" data-bs-dismiss="modal">&larr; Back</button>
                  <button class="btn btn-primary" onclick="saveMaintenanceOrder()">Save & Pay</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

   




    <script>
      /* const laundryData = {
         'A': ['Apron', 'Abaya'],
         'B': ['Bedsheet', 'Blanket'],
         'C': ['Curtain', 'Coat'],
         'D': ['Dress', 'Dupatta'],
         'J': ['Jeans', 'Jacket'],
         'P': ['Pant', 'Pillow Cover'],
         'S': ['Shirt', 'Saree'],
         'T': ['T-shirt', 'Towel'],
         'U': ['Uniform', 'Undergarments']
       };
   
       const itemDetails = {
         'Shirt': { types: ['Dry Wash', 'Steam Press'], prices: [25, 15], unit: 'per pc' },
         'T-shirt': { types: ['Dry Wash', 'Steam Press'], prices: [20, 12], unit: 'per pc' },
         'Jeans': { types: ['Dry Wash', 'Steam Press'], prices: [35, 20], unit: 'per pc' },
         'Bedsheet': { types: ['Dry Wash'], prices: [40], unit: 'per pc' },
         'Saree': { types: ['Dry Wash', 'Steam Press', 'Dry Clean'], prices: [50, 30, 80], unit: 'per pc' }
       };
   */





      //based on category selection 

      function selectAlphabet(letter) {

        fetch(`/category_alpha/${letter}`)
          .then(response => response.json())

          .then(data => {

            const items = data[letter] || [];
            const container = document.getElementById('laundry-items');
            container.innerHTML = '';


            items.forEach(item => {
              const btn = document.createElement('button');
              btn.className = 'btn btn-outline-primary btn-sm';
              btn.innerText = item;
              btn.onclick = () => selectItem(item);
              container.appendChild(btn);
            });
            document.getElementById('items-section').style.display = 'block';
          })
          .catch(error => {

            console.error(error);
          });



      }




      function selectItem(item) {


        fetch(`/servicemode_alpha/${item}`)
          .then(response => response.json())

          .then(data => {


            document.getElementById('selected-item-name').textContent = item;
            const typesWrap = document.getElementById('laundry-types');
            typesWrap.innerHTML = '';



            const details = data[item] || { types: [], prices: [], unit: [] };

            details.types.forEach((type, i) => {
              const btn = document.createElement('button');
              btn.className = 'btn btn-outline-secondary btn-sm';
              btn.innerHTML = `${type} - ₹${details.prices[i]}`;

              btn.onclick = () => selectType(item, type, details.prices[i], details.unit);
              typesWrap.appendChild(btn);
            });
            document.getElementById('details-section').style.display = 'block';
            document.getElementById('quantity-section').style.display = 'none';
          })
          .catch(error => {

            console.error(error);
          });


      }

      function selectType(item, type, price, unit) {
        window.currentSelection = { item, type, price, unit };
        //here not getting
        document.getElementById('selected-type-price').textContent = `${type} - ₹${price} ${unit}`;
        document.getElementById('quantity-input').value = 0;
        document.getElementById('item-total').textContent = '₹0';
        document.getElementById('quantity-section').style.display = 'block';
      }
      var quantity = [];
      function updateQuantity(change) {
        const input = document.getElementById('quantity-input');
        let qty = parseInt(input.value) || 0;
        qty = Math.max(0, qty + change);
        input.value = qty;
        quantity = { qty };
        console.log(quantity);
        updateTotal();
      }

      function updateTotal() {
        const qty = parseInt(document.getElementById('quantity-input').value) || 0;

        const price = window.currentSelection?.price || 0;
        document.getElementById('item-total').textContent = `₹${qty * price}`;
      }

      function addToCart() {

        const qty = parseInt(document.getElementById('quantity-input').value);
        //console.log(window.currentSelection );
        if (!window.currentSelection || qty <= 0) return alert('Select quantity');
        const { item, type, price, unit } = window.currentSelection;
        const cart = document.getElementById('cart-items');
        cart_arr.push({ item, type, price, qty });
        console.log(cart_arr);

        const row = document.createElement('div');
        row.className = 'd-flex justify-content-between align-items-center border-bottom py-1';
        row.innerHTML = `
        <div>
          <strong>${item}</strong> - ${type} (${qty} × ₹${price} )
        </div>
        <div class="text-primary">₹${qty * price}</div>
      `;
        cart.appendChild(row);



        document.getElementById('cart-section').style.display = 'block';
        updateCartTotal();
      }

      function updateCartTotal() {
        let total = 0;
        document.querySelectorAll('#cart-items .text-primary').forEach(el => {
          const val = parseInt(el.textContent.replace('₹', '')) || 0;
          total += val;
        });
        document.getElementById('total-price').textContent = `₹${total}`;
      }

      // Save laundry order and redirect to payment 
      // function saveLaundryOrder1() {
      //   const total = document.getElementById('total-price').textContent;
      //   const room_no = document.getElementById('selected-room-no').innerHTML;
      //   const guest = document.getElementById('testNo').value;
      //   const service_type = document.getElementById('service_type').innerHTML;
      //   if (total === '₹0') return alert('Cart is empty');

      //   // Save the complete cart data
      //   const cartData = {
      //     items: document.getElementById('cart-items').innerHTML,
      //     total: total,
      //     guest: guest,//currentGuestLabel || 'Guest 1',
      //     room: 'room_no' // You can make this dynamic if needed
      //   };

      //   //alert(document.getElementById('cart-items').innerHTML);
      //   // Store as JSON string
      //   sessionStorage.setItem('laundryCartData', JSON.stringify(cartData));




      //   //assign the value on form

      //   /*document.getElementById('amount_data').value=total;
      //   document.getElementById('room_no_data').value=room_no;
      //   document.getElementById('guest_id_data').value=guest;*/

      //   // Redirect to payment page with amount parameter
      //   /*window.location.href = `payment/amount=${total.replace('₹', '')}/room_no=${room_no}/guest=${guest}`;*/
      //   console.log(cart_arr);
      //   let form = document.createElement("form");
      //   form.method = "POST";          // or "GET"
      //   form.action = "paymentrecd";   // URL to send data

      //   // Create input fields
      //   let input1 = document.createElement("input");
      //   input1.type = "hidden";
      //   input1.name = "amount_data";
      //   input1.value = total.replace('₹', '');

      //   let input2 = document.createElement("input");
      //   input2.type = "hidden";
      //   input2.name = "room_no_data";
      //   input2.value = room_no;

      //   let input3 = document.createElement("input");
      //   input3.type = "hidden";
      //   input3.name = "guest_id_data";
      //   input3.value = guest;

      //   let input4 = document.createElement("input");
      //   input4.type = "hidden";
      //   input4.name = "service_info";
      //   input4.value = JSON.stringify(cart_arr);

      //   let input5 = document.createElement("input");
      //   input5.type = "hidden";
      //   input5.name = "service_type";
      //   input5.value = service_type;

      //   // Append inputs to form
      //   form.appendChild(input1);
      //   form.appendChild(input2);
      //   form.appendChild(input3);
      //   form.appendChild(input4);
      //   form.appendChild(input5);
      //   // Append form to body (required for submission)
      //   document.body.appendChild(form);

      //   // Submit the form
      //   form.submit();




      // }


      //  // Restore cart items if returning from payment page
      document.addEventListener('DOMContentLoaded', function () {
        // Check if we're returning from payment page
        if (sessionStorage.getItem('laundryCartItems')) {
          // Restore cart items
          document.getElementById('cart-items').innerHTML = sessionStorage.getItem('laundryCartItems');
          document.getElementById('total-price').textContent = sessionStorage.getItem('laundryTotalAmount');

          // Show the cart section
          document.getElementById('cart-section').style.display = 'block';

          // Clear the stored data
          sessionStorage.removeItem('laundryCartItems');
          sessionStorage.removeItem('laundryTotalAmount');

          // Reopen the modal
          const modal = new bootstrap.Modal(document.getElementById('laundryModal'));
          modal.show();
        }
      });
    </script>
    <script>
      let dropdownInputId = '';
      let currentGuestLabel = '';
      let cart_arr = [];
      function openLaundryFromDropdown(inputId, guestLabel, service_type) {
        dropdownInputId = inputId;
        currentGuestLabel = guestLabel;



        if (guestLabel == 'guest_1') {
          guest_id = document.getElementById('guest_id').value;
          document.getElementById('testNo').value = guest_id;
        } else {
          guest_id = document.getElementById('guest_id1').value;
          document.getElementById('testNo').value = guest_id;
        }
        document.getElementById('service_type').innerHTML = service_type;


        const container = document.getElementById("category-buttons");

        fetch(`/service_category/${service_type}`)
          .then(response => response.json())

          .then(data => {

            let count = 1;
            container.innerHTML = "";
            data.forEach(item => {


              let btn = document.createElement("button");
              btn.className = "btn btn-outline-secondary btn-sm m-1";
              btn.textContent = item;
              btn.onclick = function () {
                selectAlphabet(item);
              };
              container.appendChild(btn);

              count++;
            });




          })
          .catch(error => {

            console.error(error);
          });

        document.getElementById('items-section').style.display = "none";
        document.getElementById('details-section').style.display = "none";
        document.getElementById('cart-section').style.display = "none";
        document.getElementById('cart-items').innerHTML = '';
        document.getElementById('laundry-items').innerHTML = '';


        cart_arr = [];


        const modal = new bootstrap.Modal(document.getElementById('laundryModal'));
        modal.show();

        // Update modal header with guest
        document.getElementById('roomGuestLabel').innerText = `Room 101 - ${guestLabel}`;
        resetModal();
      }

      //wallets

      function setwallet(guestLabel) {

        if (guestLabel == 'guest_1') {
          guest_id = document.getElementById('guest_id').value;

        } else {
          guest_id = document.getElementById('guest_id1').value;

        }
        window.location.href = "<?= base_url('wallet'); ?>/" + guest_id;



      }
      function sethealth(guestLabel) {

        if (guestLabel == 'guest_1') {
          guest_id = document.getElementById('guest_id').value;

        } else {
          guest_id = document.getElementById('guest_id1').value;

        }
        window.location.href = "<?= base_url('prescri'); ?>/" + guest_id;



      }





      function submitLaundry() {
        if (cart.length === 0) {
          alert("Add items to cart first");
          return;
        }

        const totalAmount = cart.reduce((a, b) => a + b, 0);
        const summaryText = `Laundry - ₹${totalAmount}`;
        alert(`Order submitted! Total: ₹${totalAmount}`);

        // Update the correct dropdown input
        if (dropdownInputId) {
          document.getElementById(dropdownInputId).value = summaryText;
        }

        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('laundryModal'));
        modal.hide();
      }
    </script>


    <script>
      // Set selected service value to input
      function setService(inputId, value) {
        document.getElementById(inputId).value = value;
      }

      // Toggle submenus on click (optional — improves mobile experience)
      document.querySelectorAll(".dropdown-submenu > .dropdown-item").forEach((item) => {
        item.addEventListener("click", function (e) {
          e.stopPropagation();
          const submenu = this.nextElementSibling;
          if (submenu && submenu.classList.contains("dropdown-menu")) {
            submenu.style.display = submenu.style.display === "block" ? "none" : "block";
          }
        });
      });

      // Enable/Disable fields based on guest selection
      document.querySelectorAll(".guest-select").forEach((checkbox) => {
        const cardBody = checkbox.closest(".card-body");
        const inputs = cardBody.querySelectorAll(
          "input:not(.guest-select), select, .dropdown-toggle"
        );

        const updateDisabledState = () => {
          const enabled = checkbox.checked;
          inputs.forEach((input) => {
            input.disabled = !enabled;

            // Handle dropdown interactivity
            if (input.classList.contains("dropdown-toggle")) {
              const menu = input.parentElement.querySelector(".dropdown-menu");
              if (menu) menu.style.pointerEvents = enabled ? "auto" : "none";
            }
          });

          const guestLabel = checkbox.nextElementSibling;
          guestLabel.style.color = enabled ? "#1B5E20" : "#6c757d";
          checkbox.style.backgroundColor = enabled ? "#1B5E20" : "";
          checkbox.style.borderColor = "#1B5E20";
        };

        checkbox.addEventListener("change", updateDisabledState);
        updateDisabledState(); // Initialize on load
      });
    </script>


    <script>
      function handleColorTheme(e) {
        document.documentElement.setAttribute("data-color-theme", e);
      }
    </script>
    <!-- this script for select the sub-dropdown -->
    <script>
      function setService(inputId, value) {
        document.getElementById(inputId).value = value;
      }

      document.querySelectorAll(".guest-select").forEach((checkbox) => {
        const cardBody = checkbox.closest(".card-body");
        const inputs = cardBody.querySelectorAll(
          "input:not(.guest-select), select, .dropdown-toggle"
        );
        inputs.forEach((input) => (input.disabled = !checkbox.checked));

        checkbox.addEventListener("change", function () {
          const cardBody = this.closest(".card-body");
          const inputs = cardBody.querySelectorAll(
            "input:not(.guest-select), select, .dropdown-toggle"
          );
          inputs.forEach((input) => {
            input.disabled = !this.checked;
            if (input.classList.contains("dropdown-toggle")) {
              input.parentElement.querySelector(
                ".dropdown-menu"
              ).style.pointerEvents = this.checked ? "auto" : "none";
            }
          });
          const guestLabel = this.nextElementSibling;
          if (this.checked) {
            guestLabel.style.color = "#1B5E20";
            this.style.backgroundColor = "#1B5E20";
            this.style.borderColor = "#1B5E20";
          } else {
            guestLabel.style.color = "#6c757d";
            this.style.backgroundColor = "";
            this.style.borderColor = "#1B5E20";
          }
        });
        checkbox.dispatchEvent(new Event("change"));
      });
    </script>





<!-- 
    <script>

      //this is trggered the first vale

      document.addEventListener('DOMContentLoaded', function () {
        const firstTab = document.querySelector('.room-tab');
        if (firstTab) {
          firstTab.click();
        }
      });


      document.querySelectorAll('.room-tab').forEach(tab => {
        tab.addEventListener('click', function (e) {
          e.preventDefault();

          // Get values from the clicked tab
          let room_no = this.getAttribute('data-room-no');
          document.getElementById('selected-room-no').innerHTML = room_no;


          fetch(`/room_guest/${room_no}`)
            .then(response => response.json())

            .then(data => {

              let count = 1;
              data.forEach(item => {
                if (count === 1) {
                  document.getElementById('guestName').value = item.first_name || '';
                  document.getElementById('guestContact').value = item.contact || '';

                  document.getElementById('guest_id').value = item.guest_id || '';
                }
                if (count === 2) {

                  document.getElementById('guestName1').value = item.first_name || '';

                  document.getElementById('guestContact1').value = item.contact || '';
                  document.getElementById('guest_id1').value = item.guest_id || '';
                }

                count++;
              });




            })
            .catch(error => {

              console.error(error);
            });





        });
      });
    </script> -->

    <script>
      document.addEventListener("click", function (e) {
        if (e.target.classList.contains("dropdown-item")) {
          let input = e.target.closest(".dropdown").querySelector("input");
          input.value = e.target.getAttribute("data-value");
        }
      });
      document.addEventListener("click", function (e) {
        // Service selection in main table
        if (e.target.classList.contains("service-option")) {
          let dropdown = e.target.closest(".dropdown");
          let input = dropdown.querySelector(".service-input");
          let serviceId = e.target.getAttribute("data-id");
          let serviceName = e.target.getAttribute("data-value");

          // Set selected service in main table
          input.value = serviceName;
           // Add a marker to identify which input was clicked
        // First, remove any existing markers
        document.querySelectorAll('.service-input').forEach(inp => {
            inp.style.backgroundColor = '';
            inp.classList.remove('selected-service');
        });
        
        // Mark the clicked input
        input.style.backgroundColor = '#f0f8ff';
        input.classList.add('selected-service');

        // Store reference to the clicked input in the modal
        const modalEl = document.getElementById("laundryModal");
        modalEl.setAttribute("data-selected-input-id", input.id || 
            `service-input-${Date.now()}`);
        
        // If input doesn't have an ID, give it one
        if (!input.id) {
            input.id = `service-input-${Date.now()}`;
        }

          // Open modal
          let laundryModal = new bootstrap.Modal(document.getElementById("laundryModal"));
          laundryModal.show();

          // Store selected service in modal
          // let modalEl = document.getElementById("laundryModal");
          modalEl.setAttribute("data-service-id", serviceId);
          modalEl.setAttribute("data-service-name", serviceName);

          // Clear old rows
          const tableBody = document.getElementById("laundry-table-body");
          tableBody.innerHTML = "";

          // Add first row
          addRow();

          // Load categories for **all rows in the modal** (currently only 1)
          tableBody.querySelectorAll("tr").forEach(row => {
            loadCategoriesForRow(serviceId, row);
          });
        }

        // Category selection inside modal
        if (e.target.closest(".category-list") && e.target.classList.contains("dropdown-item")) {
          let row = e.target.closest("tr");
          let input = row.querySelector(".category-input");
          let categoryName = e.target.getAttribute("data-value");

          input.value = categoryName;

          // Load items for this category
          let itemList = row.querySelector(".item-list");
          itemList.innerHTML = '<div class="dropdown-item text-muted">Loading...</div>';

          fetch("<?= base_url('service_items') ?>/" + categoryName)
            .then(res => res.json())
            .then(data => {
              itemList.innerHTML = "";
              if (data.length > 0) {
                data.forEach(item => {
                  const div = document.createElement("div");
                  div.classList.add("dropdown-item");
                  div.style.padding = "5px 4px";
                  div.setAttribute("data-value", item.name);
                  div.setAttribute("data-price", item.price);
                  div.innerText = item.name;
                  itemList.appendChild(div);
                });
              } else {
                itemList.innerHTML = '<div class="dropdown-item text-muted">No items</div>';
              }
            });
        }
      });

      // ✅ Helper: load categories for a given row
      function loadCategoriesForRow(serviceId, row) {
        const categoryList = row.querySelector(".category-list");
        categoryList.innerHTML = '<div class="dropdown-item text-muted">Loading...</div>';

        fetch("<?= base_url('service_category') ?>/" + serviceId)
          .then(res => res.json())
          .then(data => {
            categoryList.innerHTML = "";
            if (data.length > 0) {
              data.forEach(cat => {
                const div = document.createElement("div");
                div.classList.add("dropdown-item");
                div.style.padding = "5px 4px";
                div.setAttribute("data-value", cat);
                div.innerText = cat;
                categoryList.appendChild(div);
              });
            } else {
              categoryList.innerHTML = '<div class="dropdown-item text-muted">No categories</div>';
            }
          });
      }

      // ✅ Modified addRow() to automatically load categories for each new row
      function addRow() {
        rowCount++;
        const tableBody = document.getElementById("laundry-table-body");

        const row = document.createElement("tr");
        row.innerHTML = `
    <td class="sno"></td>

<td>
  <div class="dropdown">
    <input type="text" 
           class="form-control dropdown-toggle w-100 category-input" 
           placeholder="Select Category" 
           data-bs-toggle="dropdown" 
           aria-expanded="false" 
           required />
    <div class="invalid-feedback">Please select a category.</div>
    <ul class="dropdown-menu w-50 category-dropdown" style="max-height: 150px; overflow-y: auto;">
      <div class="category-list">
        <div class="dropdown-item text-muted">Loading categories...</div>
      </div>
    </ul>
  </div>
</td>

<td>
  <div class="dropdown">
    <input type="text" 
           class="form-control dropdown-toggle w-100 item-input" 
           placeholder="Select Item" 
           data-bs-toggle="dropdown" 
           aria-expanded="false" 
           required />
    <div class="invalid-feedback">Please select a item.</div>
    <ul class="dropdown-menu w-50 item-dropdown" style="max-height: 150px; overflow-y: auto;">
      <div class="item-list">
        <div class="dropdown-item text-muted">Select Category First</div>
      </div>
    </ul>
  </div>
</td>

    <td>
      <div class="input-group" style="width:140px; height:30px;">
        <button type="button" class="btn btn-danger rounded-start-pill" style="width:30px;" onclick="changeQuantity(this,-1)">-</button>
        <input type="number" class="form-control text-center quantity border-0" value="1" min="1" onchange="updateRowTotal(this)">
        <button type="button" class="btn btn-success rounded-end-pill" style="width:30px;" onclick="changeQuantity(this,1)">+</button>
      </div>
    </td>

    <td class="price-cell" data-price="0">
      <span class="fw-bold text-success row-total">₹0</span>
    </td>

    <td>
      <div class="d-flex gap-2">
        <button type="button" class="btn btn-sm btn-danger" onclick="removeRow(this)">
          <i class="bi bi-trash"></i>
        </button>
        <button type="button" class="btn btn-sm btn-success" onclick="addRow()">
          <i class="bi bi-plus-circle"></i>
        </button>
      </div>
    </td>
  `;

        // row.innerHTML = `...your existing row HTML...`;

        tableBody.appendChild(row);
        renumberRows();
        updateRowTotal(row.querySelector(".quantity"));

        // Load categories for this new row using the selected service in modal
        const modalEl = document.getElementById("laundryModal");
        const serviceId = modalEl.getAttribute("data-service-id");
        if (serviceId) {
          loadCategoriesForRow(serviceId, row);
        }
      }



      document.addEventListener("click", function (e) {
        // Service selection (already handled)
        if (e.target.classList.contains("service-option")) {
          let row = e.target.closest("tr");
          let input = e.target.closest(".dropdown").querySelector(".service-input");
          input.value = e.target.getAttribute("data-value");

        }

        if (e.target.closest(".category-list") && e.target.classList.contains("dropdown-item")) {
        let row = e.target.closest("tr");
        let input = row.querySelector(".category-input");
        let categoryName = e.target.getAttribute("data-value");
        
        input.value = categoryName;
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');

          // Load items for this category
          let itemList = row.querySelector(".item-list");
          itemList.innerHTML = '<div class="dropdown-item text-muted">Loading...</div>';

          fetch("<?= base_url('service_items') ?>/" + categoryName)
            .then(res => res.json())
            .then(data => {
              if (data.length > 0) {
                itemList.innerHTML = "";
                data.forEach(item => {
                  let div = document.createElement("div");
                  div.classList.add("dropdown-item");
                  div.style.padding = "5px 4px";
                  div.setAttribute("data-value", item.name);
                  div.setAttribute("data-price", item.price);
                  div.innerText = `${item.name}`;
                  itemList.appendChild(div);
                });
              } else {
                itemList.innerHTML = '<div class="dropdown-item text-muted">No items</div>';
              }
            });
        }

        // Item selection
        // Item selection
    if (e.target.closest(".item-list") && e.target.classList.contains("dropdown-item")) {
        let row = e.target.closest("tr");
        let input = row.querySelector(".item-input");
        let itemName = e.target.getAttribute("data-value");
        let itemPrice = e.target.getAttribute("data-price");
        
        input.value = `${itemName}`;
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');

          // Store unit price in cell
          // row.querySelector(".price-cell").setAttribute("data-price", itemPrice);
          row.querySelector(".price-cell").setAttribute("data-price", parseFloat(itemPrice));
          // Immediately recalc total for count=1
          updateRowTotal(row.querySelector(".quantity"));
          row.querySelector(".row-total").textContent = "₹" + itemPrice;

          // Optionally set hidden field for price
          // row.querySelector(".price-cell").innerText = `₹${itemPrice}`;
        }
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const rows = document.querySelectorAll("#form_inputs tbody tr[data-room-no]");
        const noDataRow = document.getElementById("noDataRow");

        document.querySelectorAll(".room-tab").forEach(function (tab) {
          tab.addEventListener("click", function (e) {
            e.preventDefault();

            const roomNo = this.dataset.roomNo;
            let visibleCount = 0;

            rows.forEach(row => {
              if (row.dataset.roomNo === roomNo) {
                row.style.display = "";
                visibleCount++;
              } else {
                row.style.display = "none";
              }
            });

            // Show/hide "No data found"
            if (visibleCount === 0) {
              noDataRow.style.display = "";
            } else {
              // noDataRow.style.display = "none";
            }
          });
        });
      });

    </script>
    <script>

// Function to save laundry order data
function saveLaundryOrder() {
    console.log("=== Starting saveLaundryOrder() ===");
    
    // Get the selected service input using the stored reference
    const modalEl = document.getElementById('laundryModal');
    const selectedInputId = modalEl.getAttribute('data-selected-input-id');
    let selectedServiceInput = null;
    
    if (selectedInputId) {
        selectedServiceInput = document.getElementById(selectedInputId);
    }
    
    // Fallback: try to find by class
    if (!selectedServiceInput) {
        selectedServiceInput = document.querySelector('.service-input.selected-service');
    }
    
    console.log("Selected service input:", selectedServiceInput);
    
    if (!selectedServiceInput) {
        console.error("No service input selected - showing alert");
        alert('Please select a guest and service first');
        return;
    }
    
    // Get the table row and extract guest/room data
    const tableRow = selectedServiceInput.closest('tr');
    console.log("Table row:", tableRow);
    
    const guestId = tableRow.getAttribute('data-guest-id');
    const roomNo = tableRow.getAttribute('data-room-no');
    console.log("Extracted guestId:", guestId, "roomNo:", roomNo);
    
    // Get service data from modal
    const serviceType = modalEl.getAttribute('data-service-name') || 'Laundry Service';
    const serviceTypeId = modalEl.getAttribute('data-service-id') || '';
    console.log("Service data - Type:", serviceType, "ID:", serviceTypeId);
    
    // Get total amount
    const totalAmount = document.getElementById('grand-total').textContent;
    console.log("Total amount:", totalAmount);
    
    if (totalAmount === '₹0') {
        console.error("Cart is empty - showing alert");
        alert('Cart is empty');
        return;
    }
    
    // Get selected payment method
    const selectedPaymentCard = document.querySelector('.payment-method-card.border-success');
    console.log("Selected payment card:", selectedPaymentCard);
    
    if (!selectedPaymentCard) {
        console.error("No payment method selected - showing alert");
        alert('Please select a payment method');
        return;
    }
    
    const paymentMode = selectedPaymentCard.getAttribute('data-method');
    console.log("Payment mode:", paymentMode);
    
    // Collect all laundry items
    const laundryItems = [];
    const itemRows = document.querySelectorAll('#laundry-table-body tr');
    console.log("Found", itemRows.length, "laundry items");
    
    itemRows.forEach((row, index) => {
        const category = row.querySelector('.category-input').value;
        const item = row.querySelector('.item-input').value;
        const quantity = row.querySelector('.quantity').value;
        const price = row.querySelector('.price-cell').getAttribute('data-price');
        const total = row.querySelector('.row-total').textContent.replace('₹', '');
        
        console.log(`Item ${index + 1}:`, {category, item, quantity, price, total});
        
        if (category && item) {
            laundryItems.push({
                item: category,
                type: item,
                qty: quantity,
                price: price,
                total: total
            });
        }
    });
    
    console.log("All laundry items:", laundryItems);
    
    // Create form and set attributes
    let form = document.createElement("form");
    form.method = "POST";
    form.action = "paymentrecd";
    console.log("Form created with method POST and action paymentrecd");
    
    // Create input fields for basic data
    const basicFields = {
        'guest_id_data': guestId,
        'room_no_data': roomNo,
        'service_type': serviceType,
        'service_type_id': serviceTypeId,
        'amount_data': totalAmount.replace('₹', ''),
        'payment_mode': paymentMode
    };
    
    console.log("Basic form fields:", basicFields);
    
    // Add basic fields to form
    for (const [name, value] of Object.entries(basicFields)) {
        let input = document.createElement("input");
        input.type = "hidden";
        input.name = name;
        input.value = value;
        form.appendChild(input);
        console.log("Added field:", name, "=", value);
    }
    
    // Add laundry items as JSON
    let serviceInfoInput = document.createElement("input");
    serviceInfoInput.type = "hidden";
    serviceInfoInput.name = "service_info";
    serviceInfoInput.value = JSON.stringify(laundryItems);
    form.appendChild(serviceInfoInput);
    console.log("Added service_info field with JSON data");
    
    // Add payment method specific data
    switch(paymentMode) {
        case 'cash':
            const billNo = document.querySelector('#laundry-cash-form input[name="bill_no"]')?.value;
            console.log("Cash payment - billNo:", billNo);
            if (billNo) {
                let input = document.createElement("input");
                input.type = "hidden";
                input.name = "bill_no";
                input.value = billNo;
                form.appendChild(input);
                console.log("Added bill_no field:", billNo);
            }
            break;
            
        case 'upi':
            const upiTrans = document.querySelector('#laundry-upi-form input[name="upi_trans"]')?.value;
            console.log("UPI payment - upiTrans:", upiTrans);
            if (upiTrans) {
                let input = document.createElement("input");
                input.type = "hidden";
                input.name = "upi_trans";
                input.value = upiTrans;
                form.appendChild(input);
                console.log("Added upi_trans field:", upiTrans);
            }
            break;
            
        case 'card':
            const cardTrans = document.querySelector('#laundry-card-form input[name="card_trans"]')?.value;
            console.log("Card payment - cardTrans:", cardTrans);
            if (cardTrans) {
                let input = document.createElement("input");
                input.type = "hidden";
                input.name = "card_trans";
                input.value = cardTrans;
                form.appendChild(input);
                console.log("Added card_trans field:", cardTrans);
            }
            break;
            
        case 'wallet':
            console.log("Wallet payment - no additional fields needed");
            break;
    }
    
    // Log the complete form HTML before submission
    console.log("Complete form HTML:", form.outerHTML);

    clearPaymentForms();
    
    // Append form to body and submit
    document.body.appendChild(form);
    console.log("Form appended to body, about to submit...");
    
    form.submit();
    console.log("Form submitted!");
}

// // Modify the goLaundryStep function with better error handling
// function goLaundryStep(step) {
//     try {
//         console.log("goLaundryStep called with step:", step);
        
//         if (step === 3) {
//             console.log("Step 3 detected - calling saveLaundryOrder");
//             saveLaundryOrder();
//             return;
//         }
        
//         if (step === 2) {
//             console.log("Step 2 detected - updating summary");
//             updateLaundrySummary(); // Use the new function
//         }
        
//         // Check if tab trigger exists
//         let tabTrigger = document.querySelector(`#laundry-step${step}-tab`);
//         if (tabTrigger) {
//             console.log("Tab trigger element found:", tabTrigger);
//             let tab = new bootstrap.Tab(tabTrigger);
//             tab.show();
//             console.log("Tab shown for step:", step);
//         } else {
//             console.error(`Tab trigger #laundry-step${step}-tab not found!`);
//         }
//     } catch (error) {
//         console.error("Error in goLaundryStep:", error);
//     }
// }

// Form validation for laundry modal
function validateLaundryStep1() {
    console.log("=== Validating Step 1 ===");
    
    const form = document.getElementById('laundryForm');
    const rows = document.querySelectorAll('#laundry-table-body tr');
    let isValid = true;
    
    // Remove existing validation styles first
    form.classList.remove('was-validated');
    document.querySelectorAll('.is-invalid').forEach(el => {
        el.classList.remove('is-invalid');
    });
    
    // Check if there are any rows
    if (rows.length === 0) {
        alert('Please add at least one  item');
        return false;
    }
    
    // Validate each row
    rows.forEach((row, index) => {
        const categoryInput = row.querySelector('.category-input');
        const itemInput = row.querySelector('.item-input');
        const quantityInput = row.querySelector('.quantity');
        
        console.log(`Row ${index + 1}:`, {
            category: categoryInput.value,
            item: itemInput.value,
            quantity: quantityInput.value
        });
        
        // Validate category
        if (!categoryInput.value.trim()) {
            categoryInput.classList.add('is-invalid');
            isValid = false;
            console.log(`Row ${index + 1}: Category is invalid`);
        } else {
            categoryInput.classList.remove('is-invalid');
            categoryInput.classList.add('is-valid');
        }
        
        // Validate item
        if (!itemInput.value.trim()) {
            itemInput.classList.add('is-invalid');
            isValid = false;
            console.log(`Row ${index + 1}: Item is invalid`);
        } else {
            itemInput.classList.remove('is-invalid');
            itemInput.classList.add('is-valid');
        }
        
        // Validate quantity
        const quantity = parseInt(quantityInput.value);
        if (isNaN(quantity) || quantity < 1) {
            quantityInput.classList.add('is-invalid');
            isValid = false;
            console.log(`Row ${index + 1}: Quantity is invalid`);
        } else {
            quantityInput.classList.remove('is-invalid');
            quantityInput.classList.add('is-valid');
        }
    });
    
    // Validate grand total
    const grandTotal = document.getElementById('grand-total').textContent;
    if (grandTotal === '₹0') {
        //alert('Please add items with valid quantities');
        isValid = false;
    }
    
    if (isValid) {
        console.log("Step 1 validation passed");
        form.classList.add('was-validated');
    } else {
        console.log("Step 1 validation failed");
        // Scroll to first error
        const firstInvalid = document.querySelector('.is-invalid');
        if (firstInvalid) {
            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
    
    return isValid;
}
// Update your goLaundryStep function to include validation
function goLaundryStep(step) {
    try {
        console.log("goLaundryStep called with step:", step);
        
        if (step === 2) {
            // Validate step 1 before proceeding
            if (!validateLaundryStep1()) {
                return; // Stop if validation fails
            }
            console.log("Step 2 detected - updating summary");
            updateLaundrySummary();
        }
        
        if (step === 3) {
            console.log("Step 3 detected - calling saveLaundryOrder");
            saveLaundryOrder();
            return;
        }
        
        // Check if tab trigger exists
        let tabTrigger = document.querySelector(`#laundry-step${step}-tab`);
        if (tabTrigger) {
            console.log("Tab trigger element found:", tabTrigger);
            let tab = new bootstrap.Tab(tabTrigger);
            tab.show();
            console.log("Tab shown for step:", step);
        } else {
            console.error(`Tab trigger #laundry-step${step}-tab not found!`);
        }
    } catch (error) {
        console.error("Error in goLaundryStep:", error);
    }
}



    </script>

    <!-- <script>
      // Function to go to a specific step
      function goLaundryStep(step) {
        if (step === 2) {
          // Get service name and grand total
          const modalEl = document.getElementById("laundryModal");
          const serviceName = modalEl.getAttribute("data-service-name") || "Laundry Service";
          const grandTotal = document.getElementById("grand-total").textContent;

          // Update the summary table in step 2
          const summaryBody = document.getElementById("laundry-summary-body");
          summaryBody.innerHTML = `
      <tr>
        <td>${serviceName}</td>
        <td class="text-end">${grandTotal}</td>
      </tr>
    `;
        }

        // Show the selected step
        let tabTrigger = document.querySelector(`#laundry-step${step}-tab`);
        let tab = new bootstrap.Tab(tabTrigger);
        tab.show();
      }

      // Rest of your existing JavaScript code
      // ...
    </script> -->

    <script>
      

      // Handle payment method selection
document.querySelectorAll('#laundryModal .payment-method-card').forEach(card => {
    card.addEventListener('click', function() {
        // Remove active highlight from all cards
        document.querySelectorAll('#laundryModal .payment-method-card').forEach(c => c.classList.remove('border-success'));

        // Highlight the selected one
        this.classList.add('border-success');

        // Hide all forms first
        document.querySelectorAll('#laundryModal .payment-form').forEach(f => f.style.display = 'none');

        // Show only the selected form
        let method = this.getAttribute('data-method');
        let form = document.querySelector(`#laundry-${method}-form`);
        if (form) form.style.display = 'block';
        
        // Special handling for wallet method
        if (method === "wallet") {
            // Get guest ID from the selected service input
            const selectedServiceInput = document.querySelector('.service-input.selected-service');
            if (selectedServiceInput) {
                const tableRow = selectedServiceInput.closest('tr');
                const guestId = tableRow.getAttribute('data-guest-id');
                
                if (guestId) {
                    fetch(`/guest_wallet_id/${guestId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data && data[0] && data[0]['balance'] !== undefined) {
                                document.getElementById('laundry-balance').innerHTML = '₹' + data[0]['balance'];
                            } else {
                                document.getElementById('laundry-balance').innerHTML = '₹0';
                                console.error('Invalid wallet data format:', data);
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching wallet balance:', error);
                            document.getElementById('laundry-balance').innerHTML = '₹0';
                        });
                } else {
                    console.error('No guest ID found for wallet balance check');
                    document.getElementById('laundry-balance').innerHTML = '₹0';
                }
            } else {
                console.error('No service selected for wallet balance check');
                document.getElementById('laundry-balance').innerHTML = '₹0';
            }
        }
    });
});

// Function to clear all payment form values
function clearPaymentForms() {
    console.log("Clearing payment form values");
    
    // Clear cash form
    const cashInput = document.querySelector('#laundry-cash-form input[name="bill_no"]');
    if (cashInput) cashInput.value = '';
    
    // Clear UPI form
    const upiInput = document.querySelector('#laundry-upi-form input[name="upi_trans"]');
    if (upiInput) upiInput.value = '';
    
    // Clear card form
    const cardInput = document.querySelector('#laundry-card-form input[name="card_trans"]');
    if (cardInput) cardInput.value = '';
    
    // Reset payment method selection
    document.querySelectorAll('#laundryModal .payment-method-card').forEach(c => {
        c.classList.remove('border-success');
    });
    
    // Hide all payment forms
    document.querySelectorAll('#laundryModal .payment-form').forEach(f => {
        f.style.display = 'none';
    });
    
    console.log("Payment form values cleared");
}

// When modal is shown, reset to step 1
document.getElementById("laundryModal").addEventListener("shown.bs.modal", function () {
    console.log("Modal opened - resetting to step 1");
    goLaundryStep(1); // Force to step 1
    
    // Clear any existing rows and add a new one
    const tableBody = document.getElementById("laundry-table-body");
    tableBody.innerHTML = "";
    addRow();
    
    // Clear payment forms
    clearPaymentForms();
});

// When modal is hidden, also reset to step 1
document.getElementById("laundryModal").addEventListener("hidden.bs.modal", function () {
    console.log("Modal closed - resetting to step 1");
    goLaundryStep(1); // Force to step 1
    
    // Clear all data
    document.querySelector('#laundry-table-body').innerHTML = "";
    document.querySelector('#laundry-summary-body').innerHTML = "";
    clearPaymentForms();
    document.getElementById("laundry-balance").textContent = "₹0";
    
    // Remove service selection highlight
    document.querySelectorAll('.service-input').forEach(inp => {
        inp.style.backgroundColor = '';
        inp.classList.remove('selected-service');
    });
});



// Add this code to handle tab clicks
document.addEventListener('DOMContentLoaded', function() {
    // Listen for click on the summary tab
    const summaryTab = document.getElementById('laundry-step2-tab');
    if (summaryTab) {
        summaryTab.addEventListener('click', function() {
            console.log("Summary tab clicked directly - updating summary");
            updateLaundrySummary();
        });
    }
    
    // Also listen for Bootstrap tab change events
    const tabEl = document.querySelector('button[data-bs-toggle="pill"]');
    if (tabEl) {
        tabEl.addEventListener('shown.bs.tab', function(event) {
            if (event.target.id === 'laundry-step2-tab') {
                console.log("Bootstrap tab shown event - updating summary");
                updateLaundrySummary();
            }
        });
    }
});

// Create a separate function to update the summary
function updateLaundrySummary() {
    console.log("Updating laundry summary");
    
    // Check if modal exists
    const modalEl = document.getElementById("laundryModal");
    if (!modalEl) {
        console.error("laundryModal element not found!");
        return;
    }
    
    // Check if grand total element exists
    const grandTotalEl = document.getElementById("grand-total");
    if (!grandTotalEl) {
        console.error("grand-total element not found!");
        return;
    }
    
    const serviceName = modalEl.getAttribute("data-service-name") || "Laundry Service";
    const grandTotal = grandTotalEl.textContent;
    
    console.log("Updating summary with service:", serviceName, "total:", grandTotal);
    
    // Check if summary body exists
    const summaryBody = document.getElementById("laundry-summary-body");
    if (summaryBody) {
        summaryBody.innerHTML = `
            <tr>
                <td>${serviceName}</td>
                <td class="text-end">${grandTotal}</td>
            </tr>
        `;
    } else {
        console.error("laundry-summary-body element not found!");
    }
}
    </script>


<!-- Maintenance Stepper Modal -->
<div class="modal fade" id="maintenanceModal" tabindex="-1" aria-labelledby="maintenanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered ">
      <div class="modal-content">
        <form method="post" id="assetForm" enctype="multipart/form-data" class="needs-validation" novalidate>

          <!-- Stepper Navigation -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- Stepper Navigation -->
            <ul class="nav nav-pills flex-grow-1 justify-content-between" id="pills-tab" role="tablist">
              <li class="nav-item flex-fill text-center">
                <button class="nav-link active w-100" id="step1-tab" data-bs-toggle="pill" data-bs-target="#step1" type="button">
                  Charges
                </button>
              </li>
              <li class="nav-item flex-fill text-center">
                <button class="nav-link w-100" id="step2-tab" data-bs-toggle="pill" data-bs-target="#step2" type="button">
                  Summary & Payment
                </button>
              </li>
            </ul>

            <!-- Close button -->
            <button type="button" class="btn-close m-3" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="tab-content">

            <!-- STEP 1: Charges Table -->
            <div class="tab-pane fade show active p-2" id="step1">
              <div class="modal-body">
                <div class="row align-items-end px-2">
                  <div class="col-md-3">
                    <label class="form-label fs-3">Month</label>
                    <input type="month" class="form-control" id="month" name="month" required />
                    <div class="invalid-feedback">
                      Please select a month.
                    </div>
                  </div>
                  <div class="col-md-2">
                    <a class="btn btn-primary mt-4" onclick="chargeFilter();">Filter</a>
                  </div>
                </div>
              
                <div class="table-responsive mt-3">
                  <table class="table table-striped table-bordered w-100">
                    <thead>
                      <tr>
                        <th>Charges Type</th>
                        <th>Amount</th>
                        <th>Paid Amount</th>
                      </tr>
                    </thead>
                    <tbody id="cartBody">
                      <tr>
                        <td>Maintenance</td>
                        <td>
                          <p id="main_amount">0</p>
                          <input type="hidden" id="main_amount_act" name="main_amount_act" value="0">
                        </td>
                        <td>
                          <div class="position-relative">
                            <input class="form-control paid-amount-input" style="height:30px;" 
                                   id="main_paidamount" name="main_paidamount" type="number" 
                                   min="0" step="0.01" data-charge-type="main" required>
                            <div class="invalid-feedback">
                              Paid amount must equal the charge amount.
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Internet</td>
                        <td>
                          <p id="internet_amount">0</p>
                          <input type="hidden" id="internet_amount_act" name="internet_amount_act" value="0">
                        </td>
                        <td>
                          <div class="position-relative">
                            <input class="form-control paid-amount-input" style="height:30px;" 
                                   id="internet_paidamount" name="internet_paidamount" type="number" 
                                   min="0" step="0.01" data-charge-type="internet" required>
                            <div class="invalid-feedback">
                              Paid amount must equal the charge amount.
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>EB Charge</td>
                        <td>
                          <p id="eb_amount">0</p>
                          <input type="hidden" id="eb_amount_act" name="eb_amount_act" value="0">
                        </td>
                        <td>
                          <div class="position-relative">
                            <input class="form-control paid-amount-input" style="height:30px;" 
                                   id="eb_paidamount" name="eb_paidamount" type="number" 
                                   min="0" step="0.01" data-charge-type="eb" required>
                            <div class="invalid-feedback">
                              Paid amount must equal the charge amount.
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Room Service</td>
                        <td>
                          <p id="room_amount">0</p>
                          <input type="hidden" id="room_amount_act" name="room_amount_act" value="0">
                        </td>
                        <td>
                          <div class="position-relative">
                            <input class="form-control paid-amount-input" style="height:30px;" 
                                   id="room_paidamount" name="room_paidamount" type="number" 
                                   min="0" step="0.01" data-charge-type="room" required>
                            <div class="invalid-feedback">
                              Paid amount must equal the charge amount.
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Others</td>
                        <td>
                          <p id="other_amount">0</p>
                          <input type="hidden" id="other_amount_act" name="other_amount_act" value="0">
                        </td>
                        <td>
                          <div class="position-relative">
                            <input class="form-control paid-amount-input" style="height:30px;" 
                                   id="other_paidamount" name="other_paidamount" type="number" 
                                   min="0" step="0.01" data-charge-type="other" required>
                            <div class="invalid-feedback">
                              Paid amount must equal the charge amount.
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="modal-footer border-top justify-content-end">
                  <button type="button" class="btn btn-primary" onclick="validateStep1()">Next →</button>
                </div>
              </div>
            </div>

            <!-- STEP 2: Summary + Payment -->
            <div class="tab-pane fade" id="step2">
              <div class="p-2 shadow-sm">
                <div class="modal-body">
                  <!-- Summary Table -->
                  <div class="table-responsive mb-4">
                    <table class="table table-bordered align-middle" id="payment-summary-table">
                      <thead class="table-light">
                        <tr>
                          <th>Charge</th>
                          <th class="text-end">Amount</th>
                        </tr>
                      </thead>
                      <tbody id="payment-summary-body"></tbody>
                    </table>
                  </div>

                  <!-- Payment Methods -->
                  <h5 class="mb-3">Select Payment Method</h5>
                  <div class="row g-3 mb-4">
                    <div class="col-md-6">
                      <div class="card payment-method-cards p-3" data-method="cash">
                        💵 Cash Payment <br><small class="text-muted">Pay at reception</small>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card payment-method-cards p-3" data-method="upi">
                        📱 UPI Payment <br><small class="text-muted">Pay via UPI apps</small>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card payment-method-cards p-3" data-method="card">
                        💳 Card Payment <br><small class="text-muted">Credit/Debit Card</small>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card payment-method-cards p-3" data-method="wallet">
                        🏨 Wallet <br><small class="text-muted">Use credits</small>
                      </div>
                    </div>
                  </div>

                  <!-- Payment Forms -->
                  <div id="payment-forms">
                    <div id="cash-forms" class="payment-forms" style="display:none">
                      <label class="form-label">Bill No <span class="text-danger">*</span></label>
                      <input type="text" class="form-control payment-field" name="bill_no" 
                             placeholder="Enter Bill No" data-required="true" required>
                      <div class="invalid-feedback">Please enter a bill number.</div>
                    </div>

                    <div id="upi-forms" class="payment-forms" style="display:none">
                      <label class="form-label">Transaction ID <span class="text-danger">*</span></label>
                      <input type="text" class="form-control payment-field" name="upi_trans" 
                             placeholder="yourname@upi" data-required="true" required>
                      <div class="invalid-feedback">Please enter a UPI transaction ID.</div>
                    </div>

                    <div id="card-forms" class="payment-forms" style="display:none">
                      <label class="form-label">Transaction ID <span class="text-danger">*</span></label>
                      <input type="text" class="form-control payment-field" name="card_trans" 
                             placeholder="Enter Transaction ID" data-required="true" required>
                      <div class="invalid-feedback">Please enter a card transaction ID.</div>
                    </div>

                    <div id="wallet-forms" class="payment-forms" style="display:none">
                      <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Current balance: <strong id="balance">₹0</strong>
                      </div>
                    </div>
                  </div>
                
                  <!-- Stepper Navigation -->
                  <div class="d-flex justify-content-between mt-5">
                    <button type="button" class="btn btn-secondary" onclick="goToStep(1)">
                      <i class="fas fa-arrow-left me-2"></i> Back
                    </button>
                    <button type="button" class="btn btn-success" onclick="validateAndSubmit()">
                      <i class="fas fa-check-circle me-2"></i> Submit
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- STEP 3: Payment Success -->
            <div class="tab-pane fade text-center" id="step3">
              <div class="p-4">
                <i class="bi bi-check-circle text-success" style="font-size: 3rem;"></i>
                <h4 class="mt-3">Payment Successful!</h4>
                <p>Your maintenance charges have been submitted successfully.</p>
              </div>
            </div>

          </div> <!-- end tab-content -->

          <input type="hidden" id="charge_id" name="charge_id">
          <input type="hidden" id="guest_id_charge" name="guest_id_charge">
          <input type="hidden" id="testNo" name="testNo">
          <input type="hidden" id="room_no_charge" name="room_no">

        </form>
      </div>
    </div>
  </div>

<script>
// Global variables
let currentPaymentMethod = '';
let guestId = null;

// Validation functions
function validatePaidAmount(inputElement) {
  const chargeType = inputElement.getAttribute('data-charge-type');
  const paidAmount = parseFloat(inputElement.value) || 0;
  const actualAmount = parseFloat(document.getElementById(`${chargeType}_amount_act`).value) || 0;
  
  // Clear previous validation
  inputElement.classList.remove('is-invalid', 'is-valid');
  
  // Validate if paid amount equals actual amount
  if (paidAmount !== actualAmount) {
    inputElement.classList.add('is-invalid');
    return false;
  } else {
    inputElement.classList.add('is-valid');
    return true;
  }
}

function validateStep1() {
  const form = document.getElementById('assetForm');
  const monthInput = document.getElementById('month');
  const paidAmountInputs = document.querySelectorAll('.paid-amount-input');
  
  let isValid = true;
  
  // Validate month
  if (!monthInput.value) {
    monthInput.classList.add('is-invalid');
    isValid = false;
  } else {
    monthInput.classList.remove('is-invalid');
  }
  
  // Validate each paid amount
  paidAmountInputs.forEach(input => {
    if (!validatePaidAmount(input)) {
      isValid = false;
    }
  });
  
  // If valid, proceed to step 2
  if (isValid) {
    goToStep(2);
    renderSummary();
  } else {
    // Scroll to first error
    const firstError = form.querySelector('.is-invalid');
    if (firstError) {
      firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }
  
  return isValid;
}

// Payment method validation
function validatePaymentMethod() {
  const activeMethod = document.querySelector('.payment-method-cards.active');
  if (!activeMethod) {
    alert('Please select a payment method.');
    return false;
  }
  
  const method = activeMethod.dataset.method;
  currentPaymentMethod = method;
  
  // For wallet, no additional validation needed
  if (method === 'wallet') {
    return true;
  }
  
  // For other methods, validate the required field
  const form = document.getElementById(`${method}-forms`);
  const input = form.querySelector('.payment-field');
  
  if (!input.value.trim()) {
    input.classList.add('is-invalid');
    input.focus();
    return false;
  } else {
    input.classList.remove('is-invalid');
    return true;
  }
}

// Combined validation function for final submission
function validateAndSubmit() {
  // First validate step 1 (charges)
  if (!validateStep1()) {
    goToStep(1);
    return;
  }
  
  // Then validate payment method
  if (!validatePaymentMethod()) {
    return;
  }
  
  // If all validations pass, submit the form
  submitCharges();
}

// Add event listeners for real-time validation
document.addEventListener('DOMContentLoaded', function() {
  // Charge amount validation
  const paidAmountInputs = document.querySelectorAll('.paid-amount-input');
  
  paidAmountInputs.forEach(input => {
    input.addEventListener('blur', function() {
      validatePaidAmount(this);
    });
    
    input.addEventListener('input', function() {
      // Clear validation on input
      this.classList.remove('is-invalid', 'is-valid');
    });
  });
  
  // Month validation
  const monthInput = document.getElementById('month');
  monthInput.addEventListener('change', function() {
    if (this.value) {
      this.classList.remove('is-invalid');
    }
  });
  
  // Payment field validation
  const paymentFields = document.querySelectorAll('.payment-field');
  paymentFields.forEach(field => {
    field.addEventListener('input', function() {
      this.classList.remove('is-invalid');
    });
  });
  
  // Payment method selection
  document.querySelectorAll(".payment-method-cards").forEach(card => {
    card.addEventListener("click", function() {
      document.querySelectorAll(".payment-method-cards").forEach(c => c.classList.remove("active"));
      this.classList.add("active");

      const method = this.dataset.method;
      currentPaymentMethod = method;
      
      document.querySelectorAll(".payment-forms").forEach(f => f.style.display = "none");
      document.getElementById(`${method}-forms`).style.display = "block";

      // Clear validation when switching methods
      document.querySelectorAll('.payment-field').forEach(field => {
        field.classList.remove('is-invalid');
      });

      // Fetch wallet balance if wallet is selected
      if (method === "wallet" && guestId) {
        fetch(`/guest_wallet_id/${guestId}`)
          .then(res => res.json())
          .then(data => {
            document.getElementById("balance").textContent = "₹" + (data[0]?.balance ?? 0);
          })
          .catch(err => console.error(err));
      }
    });
  });
});

// Your existing functions with validation integration
function goToStep(step) {
  const tabTrigger = new bootstrap.Tab(document.querySelector(`#step${step}-tab`));
  tabTrigger.show();
}

function renderSummary() {
  const tbody = document.getElementById("payment-summary-body");
  tbody.innerHTML = "";

  let total = 0;
  const charges = [
    { label: "Maintenance", val: document.getElementById("main_paidamount").value },
    { label: "Internet", val: document.getElementById("internet_paidamount").value },
    { label: "EB Charge", val: document.getElementById("eb_paidamount").value },
    { label: "Room Service", val: document.getElementById("room_paidamount").value },
    { label: "Others", val: document.getElementById("other_paidamount").value }
  ];

  charges.forEach(c => {
    const amount = parseFloat(c.val) || 0;
    if (amount > 0) {
      const row = document.createElement("tr");
      row.innerHTML = `<td>${c.label}</td><td class="text-end">₹${amount}</td>`;
      tbody.appendChild(row);
      total += amount;
    }
  });

  // Add total row
  if (total > 0) {
    const totalRow = document.createElement("tr");
    totalRow.innerHTML = `<th>Total</th><th class="text-end">₹${total}</th>`;
    tbody.appendChild(totalRow);
  }
}

// Ensure renderSummary runs when Summary & Payment tab is clicked
document.addEventListener("DOMContentLoaded", () => {
  const step2Tab = document.getElementById("step2-tab");
  step2Tab.addEventListener("shown.bs.tab", function() {
    // Only render summary if step 1 is valid
    if (validateStep1()) {
      renderSummary();
    }
  });
});

// Update your submitCharges function to include validation
function submitCharges() {
  const form = document.getElementById('assetForm');
  
  // Collect all charge data
  const data = {
    charge_id: document.getElementById('charge_id').value,
    guest_id: document.getElementById('guest_id_charge').value,
    room_no: document.getElementById('room_no_charge').value,
    charge_monthyear: document.getElementById('month').value,
    main_amount_act: document.getElementById('main_amount_act').value || 0,
    main_paidamount: document.getElementById('main_paidamount').value || 0,
    internet_amount_act: document.getElementById('internet_amount_act').value || 0,
    internet_paidamount: document.getElementById('internet_paidamount').value || 0,
    eb_amount_act: document.getElementById('eb_amount_act').value || 0,
    eb_paidamount: document.getElementById('eb_paidamount').value || 0,
    room_amount_act: document.getElementById('room_amount_act').value || 0,
    room_paidamount: document.getElementById('room_paidamount').value || 0,
    other_amount_act: document.getElementById('other_amount_act').value || 0,
    other_paidamount: document.getElementById('other_paidamount').value || 0,
    total_paidamount: calculateTotalPaid(),
    payment_method: currentPaymentMethod,
    bill_no: form.querySelector('[name="bill_no"]')?.value || '',
    upi_trans: form.querySelector('[name="upi_trans"]')?.value || '',
    card_trans: form.querySelector('[name="card_trans"]')?.value || ''
  };

  // Send data via POST
  fetch('/chargepay_store', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data)
  })
  .then(res => res.json())
  .then(response => {
    if (response.status === 'success') {
      // Show success message
      //alert('Payment processed successfully!');
      
      // Close modal
      const modalEl = document.getElementById('maintenanceModal');
      const modal = bootstrap.Modal.getInstance(modalEl);
      if (modal) {
        modal.hide();
                 // Redirect to charges report page - flashdata will show automatically
    window.location.href = '/chargesrept/' + response.guest_id;
      }
      
      // Reload the page to reflect the updated status
      //location.reload();
    } else {
      alert('Error: ' + response.message);
    }
  })
  .catch(err => {
    console.error('Error saving payment:', err);
    alert('Error processing payment');
  });
}

// Helper function to calculate total paid
function calculateTotalPaid() {
  const amounts = [
    document.getElementById('main_paidamount').value,
    document.getElementById('internet_paidamount').value,
    document.getElementById('eb_paidamount').value,
    document.getElementById('room_paidamount').value,
    document.getElementById('other_paidamount').value
  ];
  return amounts.reduce((sum, val) => sum + (parseFloat(val) || 0), 0);
}

// Your existing functions for modal handling
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("maintenanceModal").addEventListener("show.bs.modal", function (event) {
    const button = event.relatedTarget;
    guestId = button.getAttribute("data-guest-id");
  });

  // Default select first payment method
  document.querySelector(".payment-method-cards").click();
});

// Reset modal when closed
document.addEventListener("DOMContentLoaded", () => {
  const modalEl = document.getElementById("maintenanceModal");

  modalEl.addEventListener("hidden.bs.modal", () => {
    modalEl.querySelectorAll("input").forEach(input => {
      input.value = "";
      input.classList.remove('is-invalid', 'is-valid');
    });

    const tbody = modalEl.querySelector("#payment-summary-body");
    if (tbody) tbody.innerHTML = "";

    const firstTab = modalEl.querySelector("#step1-tab");
    if (firstTab) {
      const tab = new bootstrap.Tab(firstTab);
      tab.show();
    }

    modalEl.querySelectorAll(".payment-method-cards").forEach(c => {
      c.classList.remove("border-success", "active");
    });

    modalEl.querySelectorAll(".payment-forms").forEach(f => f.style.display = "none");
    
    // Reset payment method
    currentPaymentMethod = '';
  });
});

// Your existing charge-related functions remain the same...
function goToStep(step) {
  const tabTrigger = new bootstrap.Tab(document.querySelector(`#step${step}-tab`));
  tabTrigger.show();

  if (step === 2) renderSummary();
}

// ... (rest of your existing functions like openMaintenanceModal, resetChargeAmounts, fetchCharges, processChargeData, chargeFilter)
</script>

<!-- Include your existing charge-related JavaScript functions here -->
<script>
// Global variables to track current guest info
let currentGuestId = '';
let currentGuestType = '';
let currentRoomNo = '';

function openMaintenanceModal(button) {
    const row = button.closest('tr');
    currentGuestId = row.getAttribute('data-guest-id');
    currentGuestType = row.getAttribute('data-guest-type');
    currentRoomNo = row.getAttribute('data-room-no');
    
    document.getElementById('guest_id_charge').value = currentGuestId;
    document.getElementById('testNo').value = currentGuestId;
    document.getElementById('room_no_charge').value = currentRoomNo;
    
    resetChargeAmounts();
    
    const today = new Date();
    const month = today.getFullYear() + "-" + String(today.getMonth() + 1).padStart(2, '0');
    document.getElementById('month').value = month;
    
    fetchCharges(currentGuestId, month);
}

function resetChargeAmounts() {
    const charges = [
        { inputId: 'main_paidamount', displayId: 'main_amount', hiddenId: 'main_amount_act' },
        { inputId: 'internet_paidamount', displayId: 'internet_amount', hiddenId: 'internet_amount_act' },
        { inputId: 'eb_paidamount', displayId: 'eb_amount', hiddenId: 'eb_amount_act' },
        { inputId: 'room_paidamount', displayId: 'room_amount', hiddenId: 'room_amount_act' },
        { inputId: 'other_paidamount', displayId: 'other_amount', hiddenId: 'other_amount_act' }
    ];

    charges.forEach(c => {
        document.getElementById(c.hiddenId).value = 0;
        document.getElementById(c.displayId).innerHTML = 0;

        const input = document.getElementById(c.inputId);
        if (input) {
            input.value = 0;
            input.disabled = false;
            if (input.nextElementSibling && input.nextElementSibling.classList.contains("badge")) {
                input.nextElementSibling.remove();
            }
            input.style.display = "block";
        }
    });
}

function fetchCharges(guestId, month) {
    fetch(`/guest_charge/${guestId}/${month}`)
        .then(response => response.json())
        .then(data => {
            if (data && data.length > 0) {
                processChargeData(data);
            }
        })
        .catch(error => {
            console.error('Error fetching charges:', error);
        });
}

function processChargeData(data) {
    resetChargeAmounts();

    if (data && data.length > 0) {
        document.getElementById('charge_id').value = data[0].charge_id || '';
    }

    data.forEach(item => {
        let chargeInputId, chargeDisplayId, chargeHiddenId;

        switch(item.charge_type) {
            case 'Maintenance':
                chargeInputId = 'main_paidamount';
                chargeDisplayId = 'main_amount';
                chargeHiddenId = 'main_amount_act';
                break;
            case 'Internet':
                chargeInputId = 'internet_paidamount';
                chargeDisplayId = 'internet_amount';
                chargeHiddenId = 'internet_amount_act';
                break;
            case 'EB':
                chargeInputId = 'eb_paidamount';
                chargeDisplayId = 'eb_amount';
                chargeHiddenId = 'eb_amount_act';
                break;
            case 'Room Service':
                chargeInputId = 'room_paidamount';
                chargeDisplayId = 'room_amount';
                chargeHiddenId = 'room_amount_act';
                break;
            case 'Other':
                chargeInputId = 'other_paidamount';
                chargeDisplayId = 'other_amount';
                chargeHiddenId = 'other_amount_act';
                break;
        }

        document.getElementById(chargeHiddenId).value = item.amount ?? 0;
        document.getElementById(chargeDisplayId).innerHTML = item.amount ?? 0;

        const input = document.getElementById(chargeInputId);
        if (item.status === 'paid') {
            input.value = item.amount;
            input.disabled = true;
            input.style.display = "none";
            input.insertAdjacentHTML("afterend", `<span class="badge bg-success">Paid</span>`);
        } else {
            input.value = 0;
            input.disabled = false;
            input.style.display = "block";
        }
    });
}

function chargeFilter() {
    const month = document.getElementById('month').value;
    const guestId = document.getElementById('guest_id_charge').value;
    resetChargeAmounts();
    fetchCharges(guestId, month);
}

document.addEventListener('DOMContentLoaded', function() {
    const maintenanceButtons = document.querySelectorAll('[data-bs-target="#maintenanceModal"]');
    maintenanceButtons.forEach(button => {
        button.addEventListener('click', function() {
            openMaintenanceModal(this);
        });
    });
});
</script>
<script>
(() => {
  'use strict'

  // Fetch all forms that require validation
  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

    <!-- DataTables -->
    <div class="dark-transparent sidebartoggler"></div>
    <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
    <!-- <script src="<?= base_url(); ?>/public/dist/assets/js/theme/sidebarmenu.js"></script> -->

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>
    <!-- solar icons -->
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="public/dist/assets/css/globel.css" href="atom.xml" type="application/atom+xml" title="Atom">

   <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/globel.css">


  <style>
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
  </style>
  <style>
    /* Works for both label and th */
    .required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
  </style>
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
    /* body {
  font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
  background-color: var(--light-gray);
  color: var(--dark-gray);
} */

    /* Main dropdown style */
    /* .navbar .dropdown-menu {
    background-color: #1B5E20;
    border: none;
    border-radius: 8px;
} */
    /* 
.navbar .dropdown-item {
    color: #FFFFFF;
}

.navbar .dropdown-item:hover {
    background-color: #2E7D32;
} */

    /* Desktop submenu positioning */
    @media (min-width: 992px) {
      .dropdown-submenu {
        position: relative;
      }

      .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
        border-radius: 8px;
        background-color: #1B5E20;
      }

      /* Show submenu on hover for desktop */
      .dropdown-submenu:hover>.dropdown-menu {
        display: block;
      }

      /* Remove collapse behavior on desktop */
      .dropdown-submenu>.dropdown-menu.collapse {
        display: none;
      }
    }

    /* Arrow indicator */
    .dropdown-submenu>.dropdown-toggle::after {
      content: "▶";
      float: right;
      margin-left: .5rem;
      font-size: 12px;
    }

    @media (max-width: 991px) {

      /* Down arrow for mobile */
      .dropdown-submenu>.dropdown-toggle::after {
        content: "▼";
      }
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

    .dropdown-menu {
      border-radius: 8px;
      border: 1px solid var(--border-color);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
      background-color: var(--light-green);
      color: var(--primary-green);
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
      color: var(--table-header-text);
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

    .border-primary {
      border-color: var(--primary-green) !important;
    }

    .form-check-input.required:not(:checked) {
      border-color: #dc3545 !important;
    }

    .form-control.required:invalid {
      border-color: #dc3545 !important;
    }

    /* New validation styles */
    .was-validated .form-control:invalid,
    .form-control.is-invalid {
      border-color: #dc3545;
      padding-right: calc(1.5em + 0.75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='m5.8 3.6.4.4.4-.4'/%3e%3cpath d='M6 7v2'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-select:invalid,
    .form-select.is-invalid {
      border-color: #dc3545;
      padding-right: calc(0.75em + 2.5rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='m5.8 3.6.4.4.4-.4'/%3e%3cpath d='M6 7v2'/%3e%3c/svg%3e");
      background-position: right 0.75rem center, center right 2rem;
      background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-check-input:invalid,
    .form-check-input.is-invalid {
      border-color: #dc3545;
    }

    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
      color: #dc3545;
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #dc3545;
    }

    .was-validated .form-control:invalid~.invalid-feedback,
    .form-control.is-invalid~.invalid-feedback,
    .was-validated .form-select:invalid~.invalid-feedback,
    .form-select.is-invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-feedback {
      display: block;
    }

    /* Custom dropdown validation */
    .dropdown.is-invalid .dropdown-toggle {
      border-color: #dc3545;
    }

    .dropdown.is-invalid~.invalid-feedback {
      display: block;
    }

    /* Custom validation for dropdown inputs */
    .dropdown-input.is-invalid {
      border-color: #dc3545 !important;
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

<body>
<?= view('layout/head-FO') ?>

  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <div class="main-wrapper">

    <div id="reservationForm">
      <?php
        $session = \Config\Services::session();
        $successMessage = $session->getFlashdata('success');
        $activeTab = $_GET['tab'] ?? '';
      ?>

      <?php if ($activeTab === '' && $successMessage): ?>
        <div class="alert bg-success-subtle text-info alert-dismissible fade show" role="alert">
          <div class="d-flex align-items-center text-success">
            <i class="ti ti-info-circle me-2 fs-4"></i>
            <?= $successMessage ?>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <form action="<?= base_url('advancebooking') ?>" method="post" enctype="multipart/form-data" id="bookingForm" class="needs-validation" novalidate>
        <div class="form-section card-border p-4 mb-4">

          <div class="row mb-3">
            <div class="col-md-6">
                <h5 class="mb-0 fs-7">Booking</h5>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?= base_url('viewadvancebooking'); ?>" class="btn btn-primary">
                    <i class="bi bi-list-ul"></i> Booking List
                </a>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-2">
              <label class="form-label required">Booking No</label>
              <input type="text" name="booking_no" class="form-control" required>
              <div class="invalid-feedback">Please provide a booking number.</div>
            </div>

            <div class="col-md-2">
              <label class="form-label required">Guest count</label>
              <input type="number" name="guest_count" class="form-control" id="guestCount" min="1" max="2" required
                onchange="updateTariff()">
              <div class="invalid-feedback">Please select guest count (1 or 2).</div>
            </div>
          </div>

          <div class="table-responsive rounded-3 mb-4 shadow-sm">
            <table class="table table-borderless mb-0">
              <thead class="table-light">
                <tr>
                  <th class="border-bottom required">Type</th>
                  <th class="border-bottom required">Arrival</th>
                  <th class="border-bottom required">Time</th>
                  <th class="border-bottom required">Depart</th>
                  <th class="border-bottom required">Time</th>
                  <th class="border-bottom required">Nights</th>
                  <th class="border-bottom required">Room</th>
                  <th class="border-bottom required">Monthly Tariff</th>
                  <th class="border-bottom required">Status</th>
                </tr>
              </thead>  
              <tbody>
                <tr>
                  <td>
                    <div class="dropdown d-inline-block w-100 position-static" id="roomTypeDropdown">
                      <input type="text" class="form-control form-control-sm dropdown-toggle dropdown-input" id="roomTypeInput"
                        name="type" placeholder="Select Type" data-bs-toggle="dropdown" aria-expanded="false"
                        autocomplete="off" required readonly style="cursor: pointer;">
                      <ul class="dropdown-menu w-5" aria-labelledby="roomTypeInput">
                        <li><button class="dropdown-item status" type="button" data-value="Garden View">Garden
                            View</button></li>
                        <li><button class="dropdown-item status" type="button" data-value="North East view">North East
                            view</button></li>
                      </ul>
                      <div class="invalid-feedback">Please select a room type.</div>
                    </div>
                  </td>

                  <td>
                    <input type="date" class="form-control form-control-sm border" id="arrivalDate" name="arrival_date"
                      onchange="calculateNights()" required>
                    <div class="invalid-feedback">Please select an arrival date.</div>
                  </td>
                  <td>
                    <input type="time" class="form-control form-control-sm border" id="arrivalTime" name="arrival_time"
                      onchange="calculateNights()" required>
                    <div class="invalid-feedback">Please select an arrival time.</div>
                  </td>
                  <td>
                    <input type="date" class="form-control form-control-sm border" id="departureDate" name="depart_date"
                      onchange="calculateNights()" required>
                    <div class="invalid-feedback">Please select a departure date.</div>
                  </td>
                  <td>
                    <input type="time" class="form-control form-control-sm border" id="departureTime" name="depart_time"
                      onchange="calculateNights()" required>
                    <div class="invalid-feedback">Please select a departure time.</div>
                  </td>
                  <td>
                    <input type="number" class="form-control form-control-sm border" id="nights" name="nights" required readonly>
                    <div class="invalid-feedback">Nights calculation is required.</div>
                  </td>
                 <td>
                    <div class="dropdown d-inline-block w-100 position-static" id="roomDropdown">
                      <input type="text" class="form-control form-control-sm border dropdown-input" id="roomStatusInput" name="room"
                           data-bs-toggle="modal" data-bs-target="#roomStatusModal" required readonly>
                      <input type="hidden" id="room_id" name="room_id">
                      <div class="invalid-feedback">Please select a room.</div>
                    </div>
                  </td>

                  <td>
                    <input type="text" class="form-control form-control-sm border" name="monthly_tariff"
                      id="monthlyTariff" required readonly>
                    <div class="invalid-feedback">Monthly tariff is required.</div>
                  </td>
                  <td>
                    <div class="dropdown d-inline-block w-100 position-static" id="statusDropdown">
                      <input type="text" class="form-control form-control-sm dropdown-toggle border dropdown-input" name="status"
                        id="statusInput" placeholder="Select Status" data-bs-toggle="dropdown" aria-expanded="false"
                        autocomplete="off" readonly style="cursor: pointer;">
                      <ul class="dropdown-menu w-5" aria-labelledby="statusInput">
                        <li><button class="dropdown-item status-option" type="button"
                            data-value="Confirmed">Confirmed</button></li>
                        <li><button class="dropdown-item status-option" type="button" data-value="Waiting List">Waiting
                            List</button></li>
                      </ul>
                      <div class="invalid-feedback">Please select a status.</div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <h6 class="fs-3"><strong>Resident Info</strong></h6>
         

         <div class="row g-4">
  <!-- Left: Guest Information -->
  <div class="col-12 col-lg-6">
    <div class="card h-100 p-3">
      <h6 class="fw-bold mb-3"><i class="bi bi-people text-success"></i> Resident Information</h6>

      <!-- Guest 1 -->
      <div class="row g-2 mb-3 align-items-end">
        <div class="col-12 col-md-2">
          <label class="form-label fw-bold">Guest 1 <span class="validation-message">Required</span></label>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label">Title</label>
          <select class="form-select" id="guest1_title" name="guest1_title" required>
            <option value="">Title</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Miss.">Miss.</option>
          </select>
          <div class="invalid-feedback">Please select a title.</div>
        </div>
        <div class="col-6 col-md-3">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" id="guest1_lastname" name="guest1_lastname" placeholder="Last Name" required>
        </div>
        <div class="col-6 col-md-3">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" id="guest1_firstname" name="guest1_firstname" placeholder="First Name" required>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label">Profile</label>
          <div class="input-group">
            <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest1')">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div>
      </div>

      <!-- Guest 2 -->
      <div class="row g-2 mb-3 align-items-end">
        <div class="col-12 col-md-2">
          <label class="form-label fw-bold">Guest 2 <span class="validation-message">Required</span></label>
        </div>
        <div class="col-6 col-md-2">
          <select class="form-select" id="guest2_title" name="guest2_title" required>
            <option value="">Title</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Miss.">Miss.</option>
          </select>
        </div>
        <div class="col-6 col-md-3">
          <input type="text" class="form-control" id="guest2_lastname" name="guest2_lastname" placeholder="Last Name" required>
        </div>
        <div class="col-6 col-md-3">
          <input type="text" class="form-control" id="guest2_firstname" name="guest2_firstname" placeholder="First Name" required>
        </div>
        <div class="col-6 col-md-2">
          <div class="input-group">
            <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest2')">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Right: Document Upload -->
  <div class="col-12 col-lg-6">
    <div class="card h-100 p-3">
      <h6 class="fw-bold mb-3"><i class="bi bi-upload text-success"></i> Document Upload</h6>

      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" name="scanned_documents_collected" id="scannedDocsCheckbox" required>
        <label class="form-check-label" for="scannedDocsCheckbox">
          Collected Scanned Documents <span class="validation-message">Required</span>
        </label>
      </div>

      <div class="mb-3">
        <label class="form-label">Address Proof (Aadhar) <span class="validation-message">Required</span></label>
        <input type="file" name="address_proof_file" class="form-control" id="addressProofInput" required>
      </div>

      <div id="additionalDocs" class="mb-3">
        <label class="form-label">Other Documents (Optional)</label>
        <div class="input-group">
          <input type="file" class="form-control" name="other_documents_file[]">
          <button class="btn btn-outline-success" type="button" onclick="addMoreDocs()">
            <i class="bi bi-plus-circle"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


          <!-- Guest Modal -->
          <div class="modal fade" id="guestTableModal" tabindex="-1" aria-labelledby="guestTableModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header d-flex justify-content-between align-items-center">
                          <h5 class="modal-title">Select Guest</h5>
                      </div>
                      <div class="modal-body">
                          <div id="guestTableLoading" class="text-center py-4">
                              <div class="spinner-border text-primary" role="status">
                              </div>
                          </div>
                          <table class="table table-bordered table-hover" id="guestSelectionTable" style="display: none;">
                              <thead>
                                  <tr>
                                      <th>Title</th>
                                      <th>Last Name</th>
                                      <th>First Name</th>
                                      <th>Contact</th>
                                  </tr>
                              </thead>
                              <tbody id="guestTableBody">
                              </tbody>
                          </table>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="modal fade" id="roomStatusModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" style="max-width: 300px;">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Select Room</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div id="roomStatusListModal" class="container-fluid">
                              <div class="row row-cols-3 g-2" id="roomGridContainer">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="d-flex justify-content-between mb-4">
            <div>
            </div>
            <div>
              <button type="submit" class="btn btn-success me-2" name="submit">Save</button>
              <a href="<?= base_url('viewadvancebooking') ?>" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Document Validation Functions
    function validateForm() {
        // Use Bootstrap's built-in validation
        const form = document.getElementById('bookingForm');
        
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            
            // Add was-validated class to show validation messages
            form.classList.add('was-validated');
            
            // Scroll to first invalid field
            const firstInvalid = form.querySelector(':invalid');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstInvalid.focus();
            }
            
            return false;
        }
        
        // Additional custom validation for conditional fields
        const guestCount = parseInt(document.getElementById('guestCount').value);
        const status = document.getElementById('statusInput').value;
        const isConfirmed = status === 'Confirmed';
        
        if (isConfirmed) {
            // Validate Guest 1
            const guest1Fields = [
                document.getElementById('guest1_title'),
                document.getElementById('guest1_lastname'),
                document.getElementById('guest1_firstname')
            ];
            
            let isValid = true;
            
            guest1Fields.forEach(field => {
                if (!field.value) {
                    field.classList.add('is-invalid');
                    isValid = false;
                }
            });
            
            // Validate Guest 2 if guest count is 2
            if (guestCount === 2) {
                const guest2Fields = [
                    document.getElementById('guest2_title'),
                    document.getElementById('guest2_lastname'),
                    document.getElementById('guest2_firstname')
                ];
                
                guest2Fields.forEach(field => {
                    if (!field.value) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    }
                });
            }
            
            // Validate Address Proof (Aadhar)
            const addressProof = document.getElementById('addressProofInput');
            if (!addressProof.value) {
                addressProof.classList.add('is-invalid');
                isValid = false;
            }
            
            // Validate Scanned Documents Checkbox
            const scannedDocsCheckbox = document.getElementById('scannedDocsCheckbox');
            if (!scannedDocsCheckbox.checked) {
                scannedDocsCheckbox.classList.add('is-invalid');
                isValid = false;
            }
            
            if (!isValid) {
                // Scroll to first invalid field
                const firstInvalid = document.querySelector('.is-invalid');
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.focus();
                }
                
                return false;
            }
        }
        
        return true;
    }

    // Custom validation for dropdown inputs
    function validateDropdownInputs() {
        const dropdownInputs = document.querySelectorAll('.dropdown-input');
        let allValid = true;
        
        dropdownInputs.forEach(input => {
            if (input.hasAttribute('required') && !input.value) {
                input.classList.add('is-invalid');
                allValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });
        
        return allValid;
    }

    // Update field requirements based on status
    function updateFieldRequirements() {
        const guestCount = parseInt(document.getElementById('guestCount').value);
        const status = document.getElementById('statusInput').value;
        const isConfirmed = status === 'Confirmed';
        
        // Guest fields
        const guest1Fields = [
            document.getElementById('guest1_title'),
            document.getElementById('guest1_lastname'),
            document.getElementById('guest1_firstname')
        ];
        
        const guest2Fields = [
            document.getElementById('guest2_title'),
            document.getElementById('guest2_lastname'),
            document.getElementById('guest2_firstname')
        ];
        
        // Document fields
        const addressProof = document.getElementById('addressProofInput');
        const scannedDocsCheckbox = document.getElementById('scannedDocsCheckbox');
        
        // Set requirements
        guest1Fields.forEach(field => field.required = isConfirmed);
        guest2Fields.forEach(field => field.required = isConfirmed && guestCount === 2);
        addressProof.required = isConfirmed;
        scannedDocsCheckbox.required = isConfirmed;
        
        // Clear validation if not required
        if (!isConfirmed) {
            guest1Fields.forEach(field => {
                field.classList.remove('is-invalid');
                field.required = false;
            });
            guest2Fields.forEach(field => {
                field.classList.remove('is-invalid');
                field.required = false;
            });
            addressProof.classList.remove('is-invalid');
            addressProof.required = false;
            scannedDocsCheckbox.classList.remove('is-invalid');
            scannedDocsCheckbox.required = false;
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('bookingForm');
        
        // Set up event listeners
        document.getElementById('guestCount').addEventListener('change', updateFieldRequirements);
        document.getElementById('statusInput').addEventListener('change', function() {
            updateFieldRequirements();
            
            // Visual feedback for document fields
            const isConfirmed = this.value === 'Confirmed';
            const addressProof = document.getElementById('addressProofInput');
            const scannedDocsCheckbox = document.getElementById('scannedDocsCheckbox');
            
            if (isConfirmed) {
                addressProof.classList.add('border-primary');
                scannedDocsCheckbox.classList.add('border-primary');
            } else {
                addressProof.classList.remove('border-primary', 'is-invalid');
                scannedDocsCheckbox.classList.remove('border-primary', 'is-invalid');
            }
        });
        
        // Custom validation for form submission
        form.addEventListener('submit', function(event) {
            if (!validateForm() || !validateDropdownInputs()) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            }
        });
        
        // Real-time validation for dropdown inputs
        document.querySelectorAll('.dropdown-input').forEach(input => {
            input.addEventListener('change', function() {
                if (this.hasAttribute('required') && !this.value) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                }
            });
        });
        
        // Initialize requirements
        updateFieldRequirements();
    });

    // Existing functions
    function updateTariff() {
        const guestCount = document.getElementById('guestCount').value;
        const tariffField = document.getElementById('monthlyTariff');

        if (guestCount == 2) {
            tariffField.value = 'Plan A';
        } else if (guestCount == 1) {
            tariffField.value = 'Plan B';
        } else {
            tariffField.value = '';
        }
        updateFieldRequirements();
    }

    function addMoreDocs() {
        const container = document.getElementById('additionalDocs');
        const newInputGroup = document.createElement('div');
        newInputGroup.className = 'input-group mb-2';
        newInputGroup.innerHTML = `
            <input type="file" class="form-control" name="other_documents_file[]">
            <button class="btn btn-outline-success" type="button" onclick="this.parentElement.remove()">
                <i class="bi bi-x-circle"></i>
            </button>
        `;
        container.appendChild(newInputGroup);
    }

    function calculateNights() {
        const arrivalDate = document.getElementById('arrivalDate').value;
        const arrivalTime = document.getElementById('arrivalTime').value;
        const departureDate = document.getElementById('departureDate').value;
        const departureTime = document.getElementById('departureTime').value;

        if (!arrivalDate || !departureDate) return;

        const arrival = new Date(`${arrivalDate}T${arrivalTime || '00:00'}`);
        const departure = new Date(`${departureDate}T${departureTime || '00:00'}`);
        const diffMs = departure - arrival;
        const nights = Math.ceil(diffMs / (1000 * 60 * 60 * 24));

        if (nights > 0) {
            document.getElementById('nights').value = nights;
        } else {
            document.getElementById('nights').value = '';
        }
    }

    let currentGuestField = '';

    function openGuestModal(guestField) {
        currentGuestField = guestField;
        const modal = new bootstrap.Modal(document.getElementById('guestTableModal'));
        modal.show();
    }

    function selectRoom(roomNo, roomId) {
        document.getElementById('roomStatusInput').value = roomNo;
        document.getElementById('room_id').value = roomId;
        document.getElementById('roomStatusInput').classList.remove('is-invalid');
        const modal = bootstrap.Modal.getInstance(document.getElementById('roomStatusModal'));
        modal.hide();
    }

    let selectedRoomType = null;

    function loadRoomsModal() {
        let url = '/viyoma/getrooms';
        if (selectedRoomType) {
            url += `?type=${encodeURIComponent(selectedRoomType)}`;
        }
        
        const container = document.getElementById('roomGridContainer');
        container.innerHTML = '<div class="col-12 text-center py-3"><div class="spinner-border text-primary" role="status"></div></div>';
        
        fetch(url)
            .then(response => response.json())
            .then(data => {
                container.innerHTML = '';
                
                if (data.error) {
                    container.innerHTML = `<div class="col-12 text-center py-3 text-muted">${data.error}</div>`;
                    return;
                }
                
                if (data.length === 0) {
                    container.innerHTML = `<div class="col-12 text-center py-3 text-muted">No rooms available</div>`;
                    return;
                }
                
                data.forEach((room, index) => {
                    const roomElement = document.createElement('div');
                    roomElement.className = 'col';
                    roomElement.innerHTML = `
                        <div class="p-1 text-white rounded text-center room-badge" 
                             style="background-color: ${room.status_color}; cursor: pointer;">
                            ${room.room_no}
                        </div>
                    `;
                    roomElement.addEventListener('click', () => selectRoom(room.room_no, room.room_id));
                    container.appendChild(roomElement);
                });
            })
            .catch(error => {
                console.error('Error:', error);
                container.innerHTML = '<div class="col-12 text-center py-3 text-danger">Error loading rooms</div>';
            });
    }

    document.getElementById('guestTableModal').addEventListener('show.bs.modal', function() {
        loadGuestTable();
    });

    function loadGuestTable() {
        const tableBody = document.getElementById('guestTableBody');
        const loadingDiv = document.getElementById('guestTableLoading');
        const table = document.getElementById('guestSelectionTable');
        
        loadingDiv.style.display = 'block';
        table.style.display = 'none';
        tableBody.innerHTML = '';
        
        fetch('/viyoma/get-guests-for-modal')
            .then(response => response.json())
            .then(guests => {
                guests.forEach(guest => {
                    const row = document.createElement('tr');
                    row.setAttribute('onclick', `selectGuest(this, ${guest.guest_id})`);
                    row.setAttribute('data-guest-id', guest.guest_id);
                    row.innerHTML = `
                        <td>${guest.title}</td>
                        <td>${guest.last_name}</td>
                        <td>${guest.first_name}</td>
                        <td>${guest.contact}</td>
                    `;
                    tableBody.appendChild(row);
                });
                
                loadingDiv.style.display = 'none';
                table.style.display = 'table';
            })
            .catch(error => {
                console.error('Error loading guests:', error);
                loadingDiv.innerHTML = '<p class="text-danger">Error loading guests. Please try again.</p>';
            });
    }

    function selectGuest(rowElement, guestId) {
        const cells = rowElement.cells;
        const guestData = {
            title: cells[0].textContent.trim(),
            lastName: cells[1].textContent.trim(),
            firstName: cells[2].textContent.trim()
        };
        
        document.getElementById(`${currentGuestField}_title`).value = guestData.title;
        document.getElementById(`${currentGuestField}_lastname`).value = guestData.lastName;
        document.getElementById(`${currentGuestField}_firstname`).value = guestData.firstName;
        
        // Remove validation classes
        document.getElementById(`${currentGuestField}_title`).classList.remove('is-invalid');
        document.getElementById(`${currentGuestField}_lastname`).classList.remove('is-invalid');
        document.getElementById(`${currentGuestField}_firstname`).classList.remove('is-invalid');
        
        const modal = bootstrap.Modal.getInstance(document.getElementById('guestTableModal'));
        if (modal) modal.hide();
    }

    // Initialize dropdowns
    document.addEventListener('DOMContentLoaded', function() {
        // Status dropdown
        document.querySelectorAll('.status-option').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('statusInput').value = this.getAttribute('data-value');
                document.getElementById('statusInput').classList.remove('is-invalid');
                updateFieldRequirements();
            });
        });

        // Room type dropdown
        document.querySelectorAll('.status').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('roomTypeInput').value = this.getAttribute('data-value');
                document.getElementById('roomTypeInput').classList.remove('is-invalid');
                selectedRoomType = this.getAttribute('data-value');
            });
        });

        // Relation dropdown
        document.querySelectorAll('#relationLists .dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('relationInput').value = this.getAttribute('data-value');
                document.getElementById('relationInput').classList.remove('is-invalid');
            });
        });

        // Initialize room modal
        document.getElementById('roomStatusModal').addEventListener('show.bs.modal', loadRoomsModal);
        
        // Initialize tariff
        updateTariff();
    });
  </script>

  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
</body>
</html>
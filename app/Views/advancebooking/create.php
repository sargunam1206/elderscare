

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
  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />


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


/* ========== Base Styles ========== */
body {
  font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
  background-color: var(--light-gray);
  color: var(--dark-gray);
}

/* Main dropdown style */
.navbar .dropdown-menu {
    background-color: #1B5E20;
    border: none;
    border-radius: 8px;
}

.navbar .dropdown-item {
    color: #FFFFFF;
}

.navbar .dropdown-item:hover {
    background-color: #2E7D32;
}

/* Desktop submenu positioning */
@media (min-width: 992px) {
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
        border-radius: 8px;
        background-color: #1B5E20;
    }

    /* Show submenu on hover for desktop */
    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }

    /* Remove collapse behavior on desktop */
    .dropdown-submenu > .dropdown-menu.collapse {
        display: none;
    }
}

/* Arrow indicator */
.dropdown-submenu > .dropdown-toggle::after {
    content: "▶";
    float: right;
    margin-left: .5rem;
    font-size: 12px;
}

@media (max-width: 991px) {
    /* Down arrow for mobile */
    .dropdown-submenu > .dropdown-toggle::after {
        content: "▼";
    }
}

/* Active navbar link underline */
.navbar-nav .nav-link {
    position: relative;
    padding-bottom: 4px; /* space for underline */
}

.navbar-nav .nav-link.active::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 3px;
    background-color: #FFFFFF; /* white underline */
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

.dropdown-menu {
  border-radius: 8px;
  border: 1px solid var(--border-color);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

.dropdown-item:hover, .dropdown-item:focus {
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

.was-validated .form-check-input:invalid ~ .form-check-label,
.form-check-input.is-invalid ~ .form-check-label {
    color: #dc3545;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #dc3545;
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-feedback,
.was-validated .form-select:invalid ~ .invalid-feedback,
.form-select.is-invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-feedback {
    display: block;
}

/* Custom dropdown validation */
.dropdown.is-invalid .dropdown-toggle {
    border-color: #dc3545;
}

.dropdown.is-invalid ~ .invalid-feedback {
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

<body style="background-color:#EDF7EE;">

<?= view('layout/head-FO') ?>

  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <div class="" >

    <div id="reservationForm" >
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
                <h5 class="mb-0 fs-7"><i class="ti ti-calendar-check text-success me-1"></i>Add Booking</h5>
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
              <input type="text" name="booking_no" class="form-control" value="<?= esc($nextBookingNo) ?>"required>
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
                  <th class="border-bottom required">Room #</th>
                  <th class="border-bottom required">Tariff</th>
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
                        <li><button class="dropdown-item status" type="button" data-value="Garden View">Garden View</button></li>
                            
                        <li><button class="dropdown-item status" type="button" data-value="North East view">North East view</button></li>
                            
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
                        <li><button class="dropdown-item status-option" type="button" data-value="Waiting List">Waiting List</button></li>
                            
                      </ul>
                      <div class="invalid-feedback">Please select a status.</div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- <h6><strong>Enquiry Person Info</strong></h6> -->
          
          

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
         <div class="col-1 d-flex align-items-end">
                        <button type="button"
                          class="btn btn-outline-success d-flex justify-content-center align-items-center p-1"
                          style="font-size: 1.2rem;" data-bs-toggle="modal" data-bs-target="#guestFormModal">
                          <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest1')">
                            
                            <i class="bi bi-plus-lg"></i>
                          </span> </button>

                      </div>
        <!-- <div class="col-6 col-md-2">
          <label class="form-label">Profile</label>
          <div class="input-group">
            <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest1')">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div> -->
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
         <div class="col-1 d-flex align-items-end">
                        <button type="button"
                          class="btn btn-outline-success d-flex justify-content-center align-items-center p-1"
                          style="font-size: 1.2rem;" data-bs-toggle="modal" data-bs-target="#guestFormModal">
                          <span class="input-group-text text-success" style="cursor:pointer;"
                            onclick="openGuestModal('guest2')">
                            <i class="bi bi-plus-lg"></i>
                          </span> </button>

                      </div>
        <!-- <div class="col-6 col-md-2">
          <div class="input-group">
            <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest2')">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div> -->
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
          <!-- <div class="modal fade" id="guestTableModal" tabindex="-1" aria-labelledby="guestTableModalLabel" aria-hidden="true">
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
          </div> -->
          
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

          <!-- Add these hidden fields in your form -->
<input type="hidden" id="guest1_id" name="guest1_id" value="">
<input type="hidden" id="guest2_id" name="guest2_id" value="">

          <div class="d-flex justify-content-between mt-4">
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



<!-- Guest Modal -->
            <div class="modal fade" id="guestFormModal" tabindex="-1" aria-labelledby="guestTableModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content">

                  <!-- Header -->
                  <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title" id="guestFormModalLabel">Guest Master Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <!-- Progress Bar -->
                  <!-- <div class="progress mx-4 mt-2" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> -->

                  <!-- Navigation Tabs -->
                  <ul class="nav nav-pills nav-justified border-bottom px-3 pt-1" id="pills-tab" role="tablist">
                    <li class="nav-item "><button class="nav-link active btn-sm" id="pills-account-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-account" type="button">Personal Info</button></li>
                    <li class="nav-item"><button class="nav-link btn-sm" id="pills-notifications-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button">Guardian</button></li>
                    <li class="nav-item"><button class="nav-link btn-sm" id="pills-bills-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-bills" type="button">Medical</button></li>
                    <li class="nav-item"><button class="nav-link btn-sm" id="pills-security-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-security" type="button">Likes & Dislikes</button></li>
                  </ul>

                  <!-- Body -->
                  <div class="modal-body">
                   
      <!-- <form id="guestMasterForm" method="post" action="<?= base_url('guestinfo') ?>" enctype="multipart/form-data" class="needs-validation" novalidate> -->

                    <form id="guestMasterForm" method="post" action="" enctype="multipart/form-data"
                      class="needs-validation" novalidate>
                      <div class="tab-content" id="pills-tabContent">
                        <!-- Personal Info Tab -->
                        <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                          aria-labelledby="pills-account-tab" tabindex="0">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="card w-100 border position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <!-- First Name -->
                                      <div class="mb-3">
                                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="first_name"
                                          placeholder="Enter Your First Name" required pattern="[A-Za-z\s]{2,}">
                                        <div class="invalid-feedback">
                                          Please provide a valid first name (minimum 2 letters, no numbers or special
                                          characters).
                                        </div>
                                      </div>
                                      <!-- Gender Dropdown -->
                                      <!-- Gender Dropdown -->
                    <div class="mb-3">
                      <label class="form-label">Gender <span class="text-danger">*</span></label>
                      <div class="dropdown">
                        <input type="text" class="form-control dropdown-toggle w-100" name="gender_display" id="genderInput"
                          placeholder="Select Gender" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required />
                        <input type="hidden" name="gender" id="genderHidden">
                        <ul class="dropdown-menu p-2 w-100" aria-labelledby="genderInput">
                          <div id="genderLists" style="width: 100%;">
                            <div class="dropdown-item" data-value="Male">Male</div>
                            <div class="dropdown-item" data-value="Female">Female</div>
                            <div class="dropdown-item" data-value="Other">Other</div>
                          </div>
                        </ul>
                        <div class="invalid-feedback">
                          Please select a gender.
                        </div>
                      </div>
                    </div>
                    

                    
                    <!-- Religion Dropdown -->
                    <div class="mb-3">
                      <label class="form-label">Religion <span class="text-danger">*</span></label>
                      <div class="dropdown">
                        <input type="text" class="form-control dropdown-toggle w-100" name="religion_display" id="religionInput"
                          placeholder="Select Religion" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off"  required />
                        <input type="hidden" name="religion" id="religionHidden">
                        <ul class="dropdown-menu p-2 w-100" aria-labelledby="religionInput">
                          <div id="religionLists">
                            <div class="dropdown-item" data-value="Hinduism">Hindu</div>
                            <div class="dropdown-item" data-value="Islam">Islam</div>
                            <div class="dropdown-item" data-value="Christianity">Christian</div>
                            <div class="dropdown-item" data-value="Sikhism">Sikhism</div>
                            <div class="dropdown-item" data-value="Buddhism">Buddhism</div>
                            <div class="dropdown-item" data-value="Jainism">Jainism</div>
                          </div>
                        </ul>
                        <div class="invalid-feedback">
                          Please select a religion.
                        </div>
                      </div>
                    </div>
                    
                    <!-- Education Dropdown -->
                    <div class="mb-3">
                      <label class="form-label">Education <span class="text-danger">*</span></label>
                      <div class="dropdown">
                        <input type="text" class="form-control dropdown-toggle w-100" name="education_display" id="educationInput"
                          placeholder="Select Education" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off"  required />
                        <input type="hidden" name="education_level" id="educationHidden">
                        <ul class="dropdown-menu p-2 w-100" aria-labelledby="educationInput">
                          <div id="educationLists">
                            <div class="dropdown-item" data-value="Primary School">Primary School</div>
                            <div class="dropdown-item" data-value="Secondary School">Secondary School</div>
                            <div class="dropdown-item" data-value="Higher Secondary">Higher Secondary</div>
                            <div class="dropdown-item" data-value="Graduate">Graduate</div>
                            <div class="dropdown-item" data-value="Post Graduate">Post Graduate</div>
                            <div class="dropdown-item" data-value="Doctorate">Doctorate</div>
                            <div class="dropdown-item" data-value="Other">Other</div>
                          </div>
                        </ul>
                        <div class="invalid-feedback">
                          Please select an education level.
                        </div>
                      </div>
                    </div>

                                      <!-- Current Address -->
                                      <div class="mb-3">
                                        <label class="form-label">Current Address <span
                                            class="text-danger">*</span></label>
                                        <textarea class="form-control" name="current_address"
                                          placeholder="Type your Address Here" required minlength="10"></textarea>
                                        <div class="invalid-feedback">
                                          Please provide a valid address (minimum 10 characters).
                                        </div>
                                      </div>

                                      <!-- Contact Number -->
                                      <div class="mb-3">
                                        <label class="form-label">Contact Number <span
                                            class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="contact"
                                          placeholder="Enter Mobile Number" required pattern="[0-9]{10}">
                                        <div class="invalid-feedback">
                                          Please provide a valid 10-digit mobile number.
                                        </div>
                                      </div>

                                      <!-- Upload Photo -->
                                      <div class="mb-3">
                                        <label class="form-label">Upload Photo <span
                                            class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="photo_upload" accept="image/*"
                                          required>
                                        <div class="invalid-feedback">
                                          Please upload a photo.
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-lg-6">
                                      <!-- Last Name -->
                                      <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                          placeholder="Enter Your Last Name" pattern="[A-Za-z\s]*">
                                        <div class="invalid-feedback">
                                          Last name should only contain letters and spaces.
                                        </div>
                                      </div>
                                      <!-- Date of Birth -->
                                      <div class="mb-3">
                                        <label class="form-label">Date of Birth <span
                                            class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="dob" required
                                          max="<?= date('Y-m-d'); ?>">
                                        <div class="invalid-feedback">
                                          Please provide a valid date of birth.
                                        </div>
                                      </div>

                                      <!-- Marital Status Dropdown -->
                                      <div class="mb-3">
                                        <label class="form-label">Marital Status <span
                                            class="text-danger">*</span></label>
                                        <div class="dropdown">
                                          <input type="text" class="form-control dropdown-toggle w-100"
                                            name="marital_status_display" id="maritalStatusInput"
                                            placeholder="Select Status" data-bs-toggle="dropdown" aria-expanded="false"
                                            autocomplete="off" required>
                                          <input type="hidden" name="marital_status" id="maritalStatusHidden">
                                          <ul class="dropdown-menu p-2 w-100" aria-labelledby="maritalStatusInput">
                                            <div id="maritalStatusLists">
                                              <div class="dropdown-item" data-value="Single">Single</div>
                                              <div class="dropdown-item" data-value="Married">Married</div>
                                              <div class="dropdown-item" data-value="Divorced">Divorced</div>
                                              <div class="dropdown-item" data-value="Widowed">Widowed</div>
                                            </div>
                                          </ul>
                                          <div class="invalid-feedback">
                                            Please select a marital status.
                                          </div>
                                        </div>
                                      </div>

                                      <!-- Mother Tongue Dropdown -->
                                      <div class="mb-3">
                                        <label class="form-label">Mother Tongue <span
                                            class="text-danger">*</span></label>
                                        <div class="dropdown">
                                          <input type="text" class="form-control dropdown-toggle w-100"
                                            name="mother_tongue_display" id="motherTongueInput"
                                            placeholder="Select Language" data-bs-toggle="dropdown"
                                            aria-expanded="false" autocomplete="off"  required>
                                          <input type="hidden" name="mother_tongue" id="motherTongueHidden">
                                          <ul class="dropdown-menu p-2 w-100" aria-labelledby="motherTongueInput">
                                            <div id="motherTongueLists">
                                              <div class="dropdown-item" data-value="Hindi">Hindi</div>
                                              <div class="dropdown-item" data-value="English">English</div>
                                              <div class="dropdown-item" data-value="Bengali">Bengali</div>
                                              <div class="dropdown-item" data-value="Telugu">Telugu</div>
                                              <div class="dropdown-item" data-value="Marathi">Marathi</div>
                                              <div class="dropdown-item" data-value="Tamil">Tamil</div>
                                              <div class="dropdown-item" data-value="Gujarati">Gujarati</div>
                                              <div class="dropdown-item" data-value="Kannada">Kannada</div>
                                              <div class="dropdown-item" data-value="Malayalam">Malayalam</div>
                                              <div class="dropdown-item" data-value="Punjabi">Punjabi</div>
                                              <div class="dropdown-item" data-value="Other">Other</div>
                                            </div>
                                          </ul>
                                          <div class="invalid-feedback">
                                            Please select a mother tongue.
                                          </div>
                                        </div>
                                      </div>

                                      <!-- Occupation -->
                                      <div class="mb-3">
                                        <label class="form-label">Occupation</label>
                                        <input type="text" class="form-control" name="previous_occupation"
                                          placeholder="Enter Your Occupation" pattern="[A-Za-z\s]*">
                                        <div class="invalid-feedback">
                                          Occupation should only contain letters and spaces.
                                        </div>
                                      </div>

                                      <!-- Permanent Address -->
                                      <div class="mb-3">
                                        <label class="form-label">Permanent Address</label>
                                        <textarea class="form-control" name="permanent_address"
                                          placeholder="Type your Address Here"></textarea>
                                      </div>

                                      <!-- ID Proof -->
                                      <div class="mb-3">
                                        <label class="form-label">ID Proof (Aadhaar/PAN/etc.) <span
                                            class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="id_proof"
                                          accept=".jpg,.jpeg,.png,.pdf" required>
                                        <div class="invalid-feedback">
                                          Please upload an ID proof document.
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="step-buttons">
                                    <div></div> <!-- Empty div for spacing -->
                                    <button type="button" class="btn btn-primary next-tab"
                                      data-target="#pills-notifications-tab">
                                      Next <i class="bi bi-arrow-right"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Guardian Tab -->
                        <div class="tab-pane fade" id="pills-notifications" role="tabpanel"
                          aria-labelledby="pills-notifications-tab" tabindex="0">
                          <div class="row">
                            <div class="col-12">
                              <div class="card w-100 border position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="card-title fw-bold">Guardian Information</h4>
                                    <button type="button" id="add-guardian-btn" class="btn btn-primary">
                                      <i class="bi bi-plus-circle"></i> Add Guardian
                                    </button>
                                  </div>

                                  <div id="guardian-forms-container">
                                    <div class="guardian-form mb-4 p-3 border rounded">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <!-- Full Name -->
                                          <div class="mb-3">
                                            <label class="form-label">Full Name <span
                                                class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="guardians[0][full_name]"
                                              placeholder="Enter Guardian Name" required pattern="[A-Za-z\s]{2,}">
                                            <div class="invalid-feedback">
                                              Please provide a valid full name (minimum 2 letters, no numbers or special
                                              characters).
                                            </div>
                                          </div>

                                          <!-- Contact Number -->
                                          <div class="mb-3">
                                            <label class="form-label">Contact Number <span
                                                class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="guardians[0][contact_number]"
                                              placeholder="Enter Mobile Number" required pattern="[0-9]{10}">
                                            <div class="invalid-feedback">
                                              Please provide a valid 10-digit mobile number.
                                            </div>
                                          </div>

                                          <!-- Email -->
                                          <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="guardians[0][email]"
                                              placeholder="Enter Email Id">
                                            <div class="invalid-feedback">
                                              Please provide a valid email address.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <!-- Relationship Dropdown -->
                                          <div class="mb-3">
                                            <label class="form-label">Relationship with Guest <span
                                                class="text-danger">*</span></label>
                                            <div class="dropdown">
                                              <input type="text" class="form-control dropdown-toggle w-100"
                                                name="guardians[0][relationship_display]"
                                                placeholder="Select Relationship" data-bs-toggle="dropdown"
                                                aria-expanded="false" autocomplete="off" required>
                                              <input type="hidden" name="guardians[0][relationship_with_guest]"
                                                id="relationshipHidden0">
                                              <ul class="dropdown-menu p-2 w-100">
                                                <div id="relationshipLists">
                                                  <div class="dropdown-item" data-value="Son">Son</div>
                                                  <div class="dropdown-item" data-value="Daughter">Daughter</div>
                                                  <div class="dropdown-item" data-value="Spouse">Spouse</div>
                                                  <div class="dropdown-item" data-value="Brother">Brother</div>
                                                  <div class="dropdown-item" data-value="Sister">Sister</div>
                                                  <div class="dropdown-item" data-value="Nephew">Nephew</div>
                                                  <div class="dropdown-item" data-value="Niece">Niece</div>
                                                  <div class="dropdown-item" data-value="Friend">Friend</div>
                                                  <div class="dropdown-item" data-value="Other">Other</div>
                                                </div>
                                              </ul>
                                              <div class="invalid-feedback">
                                                Please select a relationship.
                                              </div>
                                            </div>
                                          </div>

                                          <!-- Alternate Contact Number -->
                                          <div class="mb-3">
                                            <label class="form-label">Alternate Contact Number</label>
                                            <input type="text" class="form-control"
                                              name="guardians[0][alternate_contact]" placeholder="Enter Mobile Number"
                                              pattern="[0-9]{10}">
                                            <div class="invalid-feedback">
                                              Please provide a valid 10-digit mobile number.
                                            </div>
                                          </div>

                                          <!-- ID Proof -->
                                          <div class="mb-3">
                                            <label class="form-label">ID Proof (Aadhaar/PAN/etc.) <span
                                                class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="guardians[0][id_proof]"
                                              accept=".jpg,.jpeg,.png,.pdf" required>
                                            <div class="invalid-feedback">
                                              Please upload an ID proof document.
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <!-- Current Address -->
                                      <div class="mb-3">
                                        <label class="form-label">Current Address <span
                                            class="text-danger">*</span></label>
                                        <textarea class="form-control" name="guardians[0][current_address]"
                                          placeholder="Type your Address Here" required minlength="10"></textarea>
                                        <div class="invalid-feedback">
                                          Please provide a valid address (minimum 10 characters).
                                        </div>
                                      </div>

                                      <div class="d-flex justify-content-end gap-3 mt-3 remove-btn-container">
                                        <button type="button" class="btn btn-danger remove-guardian-btn"
                                          style="display: none;">
                                          <i class="bi bi-trash"></i> Remove Guardian
                                        </button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="step-buttons d-flex justify-content-between">
                                    <button type="button" class="btn btn-info prev-tab"
                                      data-target="#pills-account-tab">
                                      <i class="bi bi-arrow-left"></i> Previous
                                    </button>
                                    <button type="button" class="btn btn-primary next-tab"
                                      data-target="#pills-bills-tab">
                                      Next <i class="bi bi-arrow-right"></i>
                                    </button>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Medical History Tab -->
                        <div class="tab-pane fade" id="pills-bills" role="tabpanel" aria-labelledby="pills-bills-tab"
                          tabindex="0">
                          <!-- Medical form content with proper names -->
                          <div class="row">
                            <div class="col-12">
                              <div class="card w-100 border position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                  <h4 class="card-title fw-bold mb-4">Medical Information</h4>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                          <label class="form-label">Known Medical Conditions</label>
                                          <!-- <button type="button" class="btn btn-sm btn-outline-success" id="openMedicalConditionModalBtn">
                                          <i class="bi bi-plus"></i> Add New
                                        </button> -->
                                        </div>
                                        <select multiple class="form-select" name="known_conditions[]"
                                          style="height: 120px;">
                                          <option value="diabetes">Diabetes</option>
                                          <option value="hypertension">High Blood Pressure</option>
                                          <option value="alzheimer">Alzheimer's</option>
                                          <option value="heart-disease">Heart Disease</option>
                                          <option value="arthritis">Arthritis</option>
                                          <option value="osteoporosis">Osteoporosis</option>
                                          <option value="dementia">Dementia</option>
                                          <option value="parkinson">Parkinson's Disease</option>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                      </div>

                                      <div class="mb-3">
                                        <label class="form-label">Recent Surgeries</label>
                                        <textarea class="form-control" name="recent_surgeries" rows="3"
                                          placeholder="List any recent surgeries with dates"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">Doctor's Information</label>
                                        <textarea class="form-control" name="doctor_info" rows="3"
                                          placeholder="Dr.Name, Phone, Hospital/clinic"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">Medical Reports Upload</label>
                                        <input type="file" class="form-control" name="medical_reports"
                                          accept=".jpg,.jpeg,.png,.pdf">
                                      </div>
                                    </div>

                                    <div class="col-lg-6">
                                      <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                          <label class="form-label">Disabilities / Mobility Issues</label>
                                          <!-- <button type="button" class="btn btn-sm btn-outline-success" id="openDisabilityModalBtn">
                                          <i class="bi bi-plus"></i> Add New
                                        </button> -->
                                        </div>
                                        <select multiple class="form-select" name="disabilities[]"
                                          style="height: 120px;">
                                          <option value="wheelchair">Wheelchair Bound</option>
                                          <option value="walker">Uses Walker</option>
                                          <option value="hearing-impaired">Hearing Impaired</option>
                                          <option value="vision-impaired">Vision Impaired</option>
                                          <option value="mobility-limited">Limited Mobility</option>
                                          <option value="speech-impaired">Speech Impaired</option>
                                          <option value="cognitive-impaired">Cognitive Impairment</option>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                      </div>

                                      <div class="mb-3">
                                        <label class="form-label">Ongoing Medication</label>
                                        <textarea class="form-control" name="ongoing_medication" rows="3"
                                          placeholder="List Current medications and dosages"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">Allergies</label>
                                        <textarea class="form-control" name="allergies" rows="3"
                                          placeholder="List any known allergies"></textarea>
                                      </div>

<div class="mb-3">
  <label class="form-label">Blood Group </label>
  <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100"
      name="blood_group_display" id="bloodGroupInput"
      placeholder="Select Blood Group" data-bs-toggle="dropdown"
      aria-expanded="false" autocomplete="off" readonly >
    <input type="hidden" name="blood_group" id="bloodGroupHidden">
    <ul class="dropdown-menu p-2 w-100" aria-labelledby="bloodGroupInput">
      <div id="bloodGroupLists">
        <div class="dropdown-item" data-value="A+">A+</div>
        <div class="dropdown-item" data-value="A-">A-</div>
        <div class="dropdown-item" data-value="B+">B+</div>
        <div class="dropdown-item" data-value="B-">B-</div>
        <div class="dropdown-item" data-value="AB+">AB+</div>
        <div class="dropdown-item" data-value="AB-">AB-</div>
        <div class="dropdown-item" data-value="O+">O+</div>
        <div class="dropdown-item" data-value="O-">O-</div>
      </div>
    </ul>
  </div>
</div>

                                    </div>
                                  </div>

                                  <div class="step-buttons d-flex justify-content-between">
                                    <button type="button" class="btn btn-info prev-tab"
                                      data-target="#pills-notifications-tab">
                                      <i class="bi bi-arrow-left"></i> Previous
                                    </button>
                                    <button type="button" class="btn btn-primary next-tab"
                                      data-target="#pills-security-tab">
                                      Next <i class="bi bi-arrow-right"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Likes & Dislikes Tab -->
                        <div class="tab-pane fade" id="pills-security" role="tabpanel"
                          aria-labelledby="pills-security-tab" tabindex="0">
                          <!-- Likes form content with proper names -->
                          <div class="row">
                            <div class="col-12">
                              <div class="card w-100 border position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                  <h4 class="card-title fw-bold mb-4">Preferences & Interests</h4>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="mb-4">
                                        <label class="form-label">Favourite Foods</label>
                                        <select multiple class="form-select" name="fav_foods[]" style="height: 120px;">
                                          <option value="rice">Rice</option>
                                          <option value="roti">Roti/Chapati</option>
                                          <option value="dal">Dal</option>
                                          <option value="vegetables">Vegetables</option>
                                          <option value="fruits">Fruits</option>
                                          <option value="sweets">Sweets</option>
                                          <option value="tea">Tea</option>
                                          <option value="coffee">Coffee</option>
                                          <option value="milk">Milk</option>
                                          <option value="yogurt">Yogurt</option>
                                          <option value="fish">Fish</option>
                                          <option value="chicken">Chicken</option>
                                          <option value="mutton">Mutton</option>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                      </div>

                                      <div class="mb-4">
                                        <label class="form-label">Hobbies / Interests</label>
                                        <select multiple class="form-select" name="hobbies[]" style="height: 120px;">
                                          <option value="reading">Reading</option>
                                          <option value="music">Music</option>
                                          <option value="tv">Watching TV</option>
                                          <option value="gardening">Gardening</option>
                                          <option value="cooking">Cooking</option>
                                          <option value="walking">Walking</option>
                                          <option value="yoga">Yoga</option>
                                          <option value="prayer">Prayer/Meditation</option>
                                          <option value="games">Games</option>
                                          <option value="crafts">Arts & Crafts</option>
                                          <option value="socializing">Socializing</option>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                      </div>

                                      <div class="mb-4">
                                        <label class="form-label">Daily Routine Preferences</label>
                                        <select multiple class="form-select" name="routine_preferences[]"
                                          style="height: 120px;">
                                          <option value="early-riser">Early Riser (5-6 AM)</option>
                                          <option value="late-riser">Late Riser (8-9 AM)</option>
                                          <option value="tea-morning">Morning Tea</option>
                                          <option value="coffee-morning">Morning Coffee</option>
                                          <option value="afternoon-nap">Afternoon Nap</option>
                                          <option value="evening-tea">Evening Tea</option>
                                          <option value="early-dinner">Early Dinner (6-7 PM)</option>
                                          <option value="late-dinner">Late Dinner (8-9 PM)</option>
                                          <option value="early-sleep">Early Sleep (9-10 PM)</option>
                                          <option value="late-sleep">Late Sleep (11 PM+)</option>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                      </div>
                                    </div>

                                    <div class="col-lg-6">
                                      <div class="mb-4">
                                        <label class="form-label">Disliked Foods</label>
                                        <select multiple class="form-select" name="disliked_foods[]"
                                          style="height: 120px;">
                                          <option value="spicy">Spicy Food</option>
                                          <option value="oily">Oily Food</option>
                                          <option value="cold">Cold Food</option>
                                          <option value="dairy">Dairy Products</option>
                                          <option value="meat">Meat</option>
                                          <option value="fish">Fish</option>
                                          <option value="eggs">Eggs</option>
                                          <option value="onion">Onion</option>
                                          <option value="garlic">Garlic</option>
                                          <option value="bitter">Bitter Food</option>
                                          <option value="sour">Sour Food</option>
                                          <option value="sweets">Sweets</option>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                      </div>

                                      <div class="mb-4">
                                        <label class="form-label">Religious or Cultural Practices</label>
                                        <select multiple class="form-select" name="religious_practices[]"
                                          style="height: 120px;">
                                          <option value="daily-prayer">Daily Prayer</option>
                                          <option value="temple-visit">Temple Visits</option>
                                          <option value="fasting">Fasting</option>
                                          <option value="festivals">Festival Celebrations</option>
                                          <option value="vegetarian">Vegetarian Diet</option>
                                          <option value="no-beef">No Beef</option>
                                          <option value="no-pork">No Pork</option>
                                          <option value="halal">Halal Food Only</option>
                                          <option value="kosher">Kosher Food Only</option>
                                          <option value="meditation">Meditation</option>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                      </div>

                                      <div class="mb-4">
                                        <label class="form-label">Remarks (Optional)</label>
                                        <textarea class="form-control" name="remarks" rows="4"
                                          placeholder="Any additional information or special requirements"></textarea>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="step-buttons d-flex justify-content-between">
                                    <button type="button" class="btn btn-info prev-tab" data-target="#pills-bills-tab">
                                      <i class="bi bi-arrow-left"></i> Previous
                                    </button>
                                    <button type="submit" id="saveGuestInfo" class="btn btn-primary">
                                      <i class="bi bi-check-circle"></i> Submit All Information
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- </form> -->
                  </div>
                </div>
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
            tariffField.value = '45,000';
        } else if (guestCount == 1) {
            tariffField.value = '35,000';
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

    

    function selectRoom(roomNo, roomId) {
        document.getElementById('roomStatusInput').value = roomNo;
        document.getElementById('room_id').value = roomId;
        document.getElementById('roomStatusInput').classList.remove('is-invalid');
        const modal = bootstrap.Modal.getInstance(document.getElementById('roomStatusModal'));
        modal.hide();
    }

    let selectedRoomType = null;

    function loadRoomsModal() {
        let url = '/getrooms';
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

   <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Enable custom dropdowns
      document.querySelectorAll(".dropdown-menu .dropdown-item").forEach(item => {
        item.addEventListener("click", function () {
          let parent = this.closest(".dropdown");
          let displayInput = parent.querySelector("input.form-control");
          let hiddenInput = parent.querySelector("input[type='hidden']");
          displayInput.value = this.textContent.trim();
          hiddenInput.value = this.getAttribute("data-value");
        });
      });

      // Guardian form management
  const addGuardianBtn = document.getElementById('add-guardian-btn');
  if(addGuardianBtn) {
    addGuardianBtn.addEventListener('click', function() {
      const container = document.getElementById('guardian-forms-container');
      const count = container.querySelectorAll('.guardian-form').length;
      const newForm = container.querySelector('.guardian-form').cloneNode(true);
      
      // Update all names and IDs
      newForm.innerHTML = newForm.innerHTML.replace(/guardians\[0\]/g, `guardians[${count}]`);
      newForm.innerHTML = newForm.innerHTML.replace(/relationshipHidden0/g, `relationshipHidden${count}`);
      
      // Clear input values
      newForm.querySelectorAll('input, textarea, select').forEach(input => {
        if (input.type !== 'hidden') {
          input.value = '';
        }
        input.classList.remove('is-invalid', 'is-valid');
      });
      
      // Reattach event listeners for dropdowns
      newForm.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function() {
          const dropdown = this.closest('.dropdown');
          const displayInput = dropdown.querySelector('.dropdown-toggle');
          const hiddenInput = dropdown.querySelector('input[type="hidden"]');
          const value = this.getAttribute('data-value');
          const text = this.textContent;
          
          displayInput.value = text;
          if(hiddenInput) {
            hiddenInput.value = value;
          }
          
          // Remove validation error when a value is selected
          displayInput.classList.remove('is-invalid');
        });
      });
      
      // Reattach event listeners for file inputs
      newForm.querySelectorAll('input[type="file"]').forEach(input => {
        input.addEventListener('change', function() {
          validateFileInput(this);
        });
      });
      
      // Show remove button
      newForm.querySelector('.remove-guardian-btn').style.display = 'block';
      newForm.querySelector('.remove-guardian-btn').addEventListener('click', function() {
        newForm.remove();
      });
      
      container.appendChild(newForm);
    });
  }
  

      function validateFileInput(fileInput) {
    if (!fileInput.files || fileInput.files.length === 0) {
      fileInput.classList.add('is-invalid');
      fileInput.classList.remove('is-valid');
      return false;
    }
    
    // Check file type if accept attribute is present
    if (fileInput.hasAttribute('accept')) {
      const acceptedTypes = fileInput.getAttribute('accept').split(',');
      const file = fileInput.files[0];
      const fileType = file.type;
      const fileName = file.name.toLowerCase();
      
      let isValidType = false;
      for (const type of acceptedTypes) {
        const cleanType = type.trim();
        if (cleanType.startsWith('.')) {
          // Extension check
          if (fileName.endsWith(cleanType)) {
            isValidType = true;
            break;
          }
        } else {
          // MIME type check
          if (fileType === cleanType || fileType.startsWith(cleanType.replace('/*', '/'))) {
            isValidType = true;
            break;
          }
        }
      }
      
      if (!isValidType) {
        fileInput.classList.add('is-invalid');
        fileInput.classList.remove('is-valid');
        return false;
      }
    }
    
    fileInput.classList.remove('is-invalid');
    fileInput.classList.add('is-valid');
    return true;
  }

      // Bootstrap Validation
      (function () {
        'use strict'
        let forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      })();

      // Tab Navigation (Next/Prev buttons)
      document.querySelectorAll(".next-tab").forEach(btn => {
        btn.addEventListener("click", function () {
          let targetTab = document.querySelector(this.dataset.target);
          let tab = new bootstrap.Tab(targetTab);
          tab.show();
        });
      });
      document.querySelectorAll(".prev-tab").forEach(btn => {
        btn.addEventListener("click", function () {
          let targetTab = document.querySelector(this.dataset.target);
          let tab = new bootstrap.Tab(targetTab);
          tab.show();
        });
      });
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
<script>
$(document).ready(function() {
  // Make currentGuestField available in the global scope
  window.currentGuestField = '';
  
  // Function to open modal for specific guest
  window.openGuestModal = function(guestField) {
    window.currentGuestField = guestField;
    $('#guestFormModal').modal('show');
  };
  
  // Tab navigation with validation for NEXT button only
  $('.next-tab').on('click', function(e) {
    e.preventDefault(); // Prevent default behavior
    
    const targetTab = $(this).data('target');
    const currentTab = $(this).closest('.tab-pane');
    
    // Validate only the current tab before proceeding to next
    if (validateTab(currentTab.attr('id'))) {
      // Only switch tabs if validation passes
      $(targetTab).tab('show');
    } else {
      // Find and focus on the first invalid field
      const firstInvalidField = currentTab.find('.is-invalid').first();
      if (firstInvalidField.length) {
        firstInvalidField.focus();
      }
      // Don't show alert - the validation messages are already visible
    }
  });
  
  // No validation for previous button
  $('.prev-tab').on('click', function(e) {
    e.preventDefault(); // Prevent default behavior
    const targetTab = $(this).data('target');
    $(targetTab).tab('show');
  });
  
  // Function to validate a specific tab
  function validateTab(tabId) {
    const tabElement = $('#' + tabId);
    let isValid = true;
    let firstInvalidField = null;
    
    // Find all required fields in this tab
    const requiredFields = tabElement.find('[required]');
    
    // Remove previous validation
    requiredFields.removeClass('is-invalid');
    
    // Check each required field
    requiredFields.each(function() {
      const field = $(this);
      
      // Custom validation for dropdowns
      if (field.hasClass('dropdown-toggle')) {
        const hiddenField = field.siblings('input[type="hidden"]');
        if (!hiddenField.val()) {
          field.addClass('is-invalid');
          isValid = false;
          if (!firstInvalidField) firstInvalidField = field;
        }
      } 
      // Standard field validation
      else if (!field.val() || !field[0].checkValidity()) {
        field.addClass('is-invalid');
        isValid = false;
        if (!firstInvalidField) firstInvalidField = field;
      }
    });
    
    return isValid;
  }
  
  // Handle guest form submission - validate ALL tabs
  $('#guestMasterForm').on('submit', function(e) {
    e.preventDefault();
    
    // Validate all tabs before submission
    let allTabsValid = true;
    let firstInvalidTab = null;
    
    $('#pills-tabContent .tab-pane').each(function() {
      if (!validateTab($(this).attr('id'))) {
        allTabsValid = false;
        // Remember the first invalid tab
        if (!firstInvalidTab) {
          firstInvalidTab = $(this);
        }
      }
    });
    
    if (!allTabsValid) {
      // Switch to the first invalid tab
      const tabId = firstInvalidTab.attr('id');
      const tabButtonId = tabId.replace('pills-', '#pills-') + '-tab';
      $(tabButtonId).tab('show');
      
      // Find and focus on the first invalid field in that tab
      const firstInvalidField = firstInvalidTab.find('.is-invalid').first();
      if (firstInvalidField.length) {
        firstInvalidField.focus();
      }
      
      // alert('Please fill all required fields in all tabs before submitting.');
      return;
    }
    
    console.log("Guest form submitted for:", window.currentGuestField);
    
    // Store currentGuestField in a variable that won't change during async operation
    var targetGuestField = window.currentGuestField;
    
    // Create FormData object to handle file uploads
    var formData = new FormData(this);
    
    // Add which guest this is for to the form data
    formData.append('current_guest_field', targetGuestField);
    
    $.ajax({
      url: "<?= base_url('guestinfo') ?>",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      },
      success: function(response) {
        console.log("AJAX success:", response);
        console.log("Target guest field:", targetGuestField);
        
        // Response is already parsed as JSON by jQuery
        if(response.success) {
          // Populate the booking form with the new guest data
          if(targetGuestField === 'guest1') {
            $('#guest1_id').val(response.guest_id);
            $('#guest1_title').val(response.title || '');
            $('#guest1_firstname').val(response.first_name || '');
            $('#guest1_lastname').val(response.last_name || '');
            console.log("Updated guest1 fields");
          } else if(targetGuestField === 'guest2') {
            $('#guest2_id').val(response.guest_id);
            $('#guest2_title').val(response.title || '');
            $('#guest2_firstname').val(response.first_name || '');
            $('#guest2_lastname').val(response.last_name || '');
            console.log("Updated guest2 fields");
          } else {
            console.error("Unknown target guest field:", targetGuestField);
          }
          
          // Close the modal
          $('#guestFormModal').modal('hide');
          
          // Reset the form
          $('#guestMasterForm')[0].reset();
          $('#guestMasterForm').removeClass('was-validated');
          // Clear all multi-select selections
          $('#guestMasterForm select[multiple]').each(function() {
            $(this).val(null);
          });
          // Reset all tabs to the first one
          $('#pills-tab button:first-child').tab('show');
          
        } else {
          alert("Error: " + (response.message || 'Unknown error occurred'));
        }
      },
      error: function(xhr, status, error) {
        console.error("AJAX error:", error);
        console.error("Response text:", xhr.responseText);
        alert("Something went wrong! Please check the console for details.");
      }
    });
  });
  
  // Add event listeners for dropdown selections to clear validation
  $('.dropdown-item').on('click', function() {
    const displayField = $(this).closest('.dropdown').find('.dropdown-toggle');
    const hiddenField = displayField.siblings('input[type="hidden"]');
    const value = $(this).data('value');
    
    displayField.val($(this).text());
    hiddenField.val(value);
    
    // Clear validation
    displayField.removeClass('is-invalid');
  });
  
  // Clear validation when user starts typing in a field
  $('#guestMasterForm input, #guestMasterForm textarea').on('input', function() {
    $(this).removeClass('is-invalid');
  });
  
  // Prevent Bootstrap tabs from changing when validation fails
  $('#pills-tab button').on('click', function(e) {
    // If this click came from our next/prev buttons, we've already handled it
    if ($(e.target).hasClass('next-tab') || $(e.target).hasClass('prev-tab')) {
      return;
    }
    
    // For direct tab clicks, validate current tab first
    const targetTab = $(this).data('bs-target');
    const currentTab = $('.tab-pane.active');
    
    // If trying to navigate away from current tab, validate first
    if (targetTab !== '#' + currentTab.attr('id')) {
      if (!validateTab(currentTab.attr('id'))) {
        e.preventDefault();
        // Find and focus on the first invalid field
        const firstInvalidField = currentTab.find('.is-invalid').first();
        if (firstInvalidField.length) {
          firstInvalidField.focus();
        }
      }
    }
  });
});
</script>

  <script>
// Function to reset multi-select fields
function resetMultiSelectFields() {
  $('#guestFormModal select[multiple]').each(function() {
    $(this).val(null);
    $(this).find('option').prop('selected', false);
  });
}

// Reset when modal is closed
$('#guestFormModal').on('hidden.bs.modal', function() {
  $(this).find('input:not([type=hidden]), textarea').val('');
  $(this).find('select').prop('selectedIndex', 0);
  $(this).find('input[type=checkbox], input[type=radio]').prop('checked', false);
  resetMultiSelectFields();
  
  $('#main_amount, #internet_amount, #eb_amount, #room_amount, #other_amount').text('0');
});

// Reset when modal is opened
$('#guestFormModal').on('show.bs.modal', function() {
  resetMultiSelectFields();
});

// Function to open modal for specific guest
window.openGuestModal = function(guestField) {
  console.log("Opening modal for:", guestField);
  window.currentGuestField = guestField;
  
  // Ensure multi-select fields are reset
  resetMultiSelectFields();
  
  $('#guestFormModal').modal('show');
};

function resetModalTabs() {
  // Remove active class from all tabs
  $('#guestFormModal .nav-pills .nav-link').removeClass('active');
  
  // Remove show active class from all tab panes
  $('#guestFormModal .tab-pane').removeClass('show active');
  
  // Add active class to first tab
  $('#guestFormModal .nav-pills .nav-link:first').addClass('active');
  
  // Add show active class to first tab pane
  $('#guestFormModal .tab-pane:first').addClass('show active');
}

function resetGuardianForms() {
  const container = document.getElementById('guardian-forms-container');
  const originalForm = container.querySelector('.guardian-form');
  
  // Remove all guardian forms except the original one
  container.querySelectorAll('.guardian-form:not(:first-child)').forEach(form => {
    form.remove();
  });
  
  // Reset the original form
  originalForm.querySelectorAll('input, textarea, select').forEach(input => {
    if (input.type !== 'hidden' && input.id !== 'add-guardian-btn') {
      input.value = '';
    }
    input.classList.remove('is-invalid', 'is-valid');
  });
  
  // Hide remove button on original form
  originalForm.querySelector('.remove-guardian-btn').style.display = 'none';
}

// Add this to both show and hide events
$('#guestFormModal').on('show.bs.modal', function() {
  resetMultiSelectFields();
  resetModalTabs();
  resetGuardianForms(); 
});

$('#guestFormModal').on('hidden.bs.modal', function() {
  resetMultiSelectFields();
  resetModalTabs();
  resetGuardianForms(); 
});
</script>




</body>
</html>
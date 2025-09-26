
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
.is-invalid {
    border-color: #dc3545 !important;
}

.is-invalid:focus {
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
}

.is-invalid-label {
    color: #dc3545;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #dc3545;
}

.is-invalid ~ .invalid-feedback {
    display: block;
}

/* For checkbox validation */
.form-check-input.is-invalid {
    border-color: #dc3545;
}

.form-check-input.is-invalid ~ .form-check-label {
    color: #dc3545;
}

.validation-alert {
    margin-top: 1rem;
}
</style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <!-- Header -->
  <header class="header-fp p-0 w-100" style="background-color: #1B5E20;">
    <nav class="navbar navbar-expand-lg py-2">
      <div class="container-fluid d-flex justify-content-between">
        <!-- Logo -->
       

        <!-- Mobile toggle -->
        <button class="navbar-toggler border-0 p-0 shadow-none text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <i class="ti ti-menu-2 fs-8" style="color: #A5D6A7;"></i>
        </button>

        <!-- Nav items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 gap-xl-7 gap-4 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-3 fw-semibold text-white"href="<?= base_url('dashboard'); ?>" >Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active fs-3 fw-semibold text-white" href="<?= base_url('viewadvancebooking'); ?>">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3 fw-semibold text-white" href="../main/frontend-pricingpage.html">Inhouse Guest</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3 fw-semibold text-white" href="../main/frontend-contactpage.html">Service Onboarding</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3 fw-semibold text-white" href="../main/frontend-contactpage.html">Activities Onboarding</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3 fw-semibold text-white" href="../main/frontend-contactpage.html">Reports</a>
            </li>
          </ul>
        </div>
        
        <!-- Right-side icons and admin -->
        <div class="d-flex align-items-center gap-3 text-white">
          <!-- Admin Dropdown -->
          <div class="dropdown">
            <a class="dropdown-toggle text-white fw-semibold text-decoration-none d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ti ti-user-circle fs-5 me-1" style="color: #A5D6A7;"></i> 
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../main/authentication-login.html">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Mobile Menu -->
  <div class="offcanvas offcanvas-end text-white" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color: #1B5E20;">
    <div class="offcanvas-header border-bottom border-light">
     
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
      <ul class="list-unstyled ps-0">
        <li class="mb-2">
          <a href="<?= base_url('dashboard'); ?>"  class="d-block fs-5 text-white text-decoration-none py-2">Dashboard</a>
        </li>
        <li class="mb-2">
          <a href="<?= base_url('viewadvancebooking'); ?>" class="d-block   active fs-5 text-white text-decoration-none py-2">Booking</a>
        </li>
        <li class="mb-2">
          <a href="../main/frontend-pricingpage.html" class="d-block fs-5 text-white text-decoration-none py-2">Inhouse Guest</a>
        </li>
        <li class="mb-2">
          <a href="../main/frontend-contactpage.html" class="d-block fs-5 text-white text-decoration-none py-2">Service Onboarding</a>
        </li>
        <li class="mb-2">
          <a href="../main/frontend-contactpage.html" class="d-block fs-5 text-white text-decoration-none py-2">Activities Onboarding</a>
        </li>
        <li class="mb-2">
          <a href="../main/frontend-contactpage.html" class="d-block fs-5 text-white text-decoration-none py-2">Reports</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-wrapper">

    <div id="reservationForm">
      <form action="<?= base_url('updateadvancebooking/' . $booking['id']) ?>" method="post" enctype="multipart/form-data" id="bookingForm">
        <div class="form-section card-body p-4 mb-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h5 class="mb-0 fs-7">Edit Advance Booking</h5>
                </div>
                <div class="col-md-6 text-end">
                    <a href="<?= base_url('viewadvancebooking'); ?>" class="btn btn-primary">
                        <i class="bi bi-list-ul"></i> Booking List
                    </a>
                </div>
            </div>
            
            <!-- Reservation Info -->
            <div class="row mb-3">
                <div class="col-md-2">
                    <label class="form-label">Booking No</label>
                    <input type="text" name="booking_no" class="form-control" value="<?= $booking['booking_no'] ?>" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Guest count</label>
                    <input type="number" name="guest_count" class="form-control" id="guestCount" min="1" max="2"
                        onchange="updateTariff()" value="<?= $booking['guest_count'] ?>" required>
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
                                <div class="dropdown d-inline-block w-100 position-static">
                                    <input type="text" class="form-control form-control-sm dropdown-toggle" id="roomTypeInput"
                                        name="type" placeholder="Select Type" data-bs-toggle="dropdown" aria-expanded="false"
                                        autocomplete="off" readonly style="cursor: pointer;" value="<?= $booking['type'] ?>" required>
                                    <ul class="dropdown-menu w-5" aria-labelledby="roomTypeInput">
                                        <li><button class="dropdown-item status" type="button" data-value="Garden View">Garden View</button></li>
                                        <li><button class="dropdown-item status" type="button" data-value="North East view">North East view</button></li>
                                    </ul>
                                </div>
                            </td>

                            <td>
                                <input type="date" class="form-control form-control-sm border" id="arrivalDate" name="arrival_date"
                                    onchange="calculateNights()" value="<?= $booking['arrival_date'] ?>" required>
                            </td>
                            <td>
                                <input type="time" class="form-control form-control-sm border" id="arrivalTime" name="arrival_time"
                                    onchange="calculateNights()" value="<?= $booking['arrival_time'] ?>" required>
                            </td>
                            <td>
                                <input type="date" class="form-control form-control-sm border" id="departureDate" name="depart_date"
                                    onchange="calculateNights()" value="<?= $booking['depart_date'] ?>" required>
                            </td>
                            <td>
                                <input type="time" class="form-control form-control-sm border" id="departureTime" name="depart_time"
                                    onchange="calculateNights()" value="<?= $booking['depart_time'] ?>" required>
                            </td>
                            <td>
                                <input type="number" class="form-control form-control-sm border" id="nights" name="nights" readonly value="<?= $booking['nights'] ?>" required>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm border" id="roomStatusInput" name="room"
                                    data-bs-toggle="modal" data-bs-target="#roomStatusModal" readonly value="<?= $booking['room'] ?>" required>
                                <input type="hidden" id="room_id" name="room_id">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm border" name="monthly_tariff"
                                    id="monthlyTariff" readonly value="<?= $booking['monthly_tariff'] ?>" required>
                            </td>
                            <td>
                                <div class="dropdown d-inline-block w-100 position-static">
                                    <input type="text" class="form-control form-control-sm dropdown-toggle border" name="status"
                                        id="statusInput" placeholder="Select Status" data-bs-toggle="dropdown" aria-expanded="false"
                                        autocomplete="off" readonly style="cursor: pointer;" value="<?= $booking['status'] ?>" required>
                                    <ul class="dropdown-menu w-5" aria-labelledby="statusInput">
                                        <li><button class="dropdown-item status-option" type="button" data-value="Confirmed">Confirmed</button></li>
                                        <li><button class="dropdown-item status-option" type="button" data-value="Waiting List">Waiting List</button></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Enquiry Info -->
            <h6><strong>Enquiry Person Info</strong></h6>
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label required">Person Name</label>
                    <input type="text" class="form-control" name="enquiry_person_name" placeholder="Enter Name" value="<?= $booking['enquiry_person_name'] ?>" required>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="relationInput" class="form-label required">Relation</label>
                    <div class="dropdown">
                        <input type="text" class="form-control dropdown-toggle w-100" name="relation" id="relationInput"
                            placeholder="Select Relation" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required
                            readonly value="<?= $booking['relation'] ?>" />
                        <ul class="dropdown-menu p-2 w-100" aria-labelledby="relationInput"
                            style="max-height: 150px; overflow-y: auto;">
                            <div id="relationLists" style="width: 100%;">
                                <div class="dropdown-item" data-value="Myself">Myself</div>
                                <div class="dropdown-item" data-value="Father">Father</div>
                                <div class="dropdown-item" data-value="Mother">Mother</div>
                                <div class="dropdown-item" data-value="Spouse">Spouse</div>
                                <div class="dropdown-item" data-value="Brother">Brother</div>
                                <div class="dropdown-item" data-value="Sister">Sister</div>
                                <div class="dropdown-item" data-value="Friend">Friend</div>
                                <div class="dropdown-item" data-value="Other">Other</div>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label required">Contact No</label>
                    <input type="tel" name="contact_no" class="form-control" placeholder="Contact Number" value="<?= $booking['contact_no'] ?>" required>
                </div>
            </div>

            <!-- Guest 1 & 2 Info -->
            <div class="row">
                <!-- Guest Info Section -->
                <div class="col-xl-6">
                    <!-- Guest 1 -->
                    <div class="row g-2 mb-2 align-items-end">
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Guest 1</label>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Title</label>
                            <select class="form-select" id="guest1_title" name="guest1_title">
                              <option value="">Title</option> 
                                <option value="Mr." <?= ($booking['guest1_title'] == 'Mr.') ? 'selected' : '' ?>>Mr.</option>
                                <option value="Mrs." <?= ($booking['guest1_title'] == 'Mrs.') ? 'selected' : '' ?>>Mrs.</option>
                                <option value="Miss." <?= ($booking['guest1_title'] == 'Miss.') ? 'selected' : '' ?>>Miss.</option>
                            </select>
                            <div class="invalid-feedback">This field is required for confirmed bookings</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="guest1_lastname" name="guest1_lastname" placeholder="Last Name" value="<?= $booking['guest1_lastname'] ?>">
                            <!-- <div class="invalid-feedback">This field is required for confirmed bookings</div> -->
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" id="guest1_firstname" name="guest1_firstname" placeholder="First Name" value="<?= $booking['guest1_firstname'] ?>">
                            <div class="invalid-feedback">This field is required for confirmed bookings</div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Profile</label>
                            <div class="input-group">
                                <span class="input-group-text" style="cursor:pointer;" onclick="openGuestModal('guest1')">
                                    <i class="bi bi-eye-fill"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Guest 2 -->
                    <div class="row g-2 mb-2 align-items-end">
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Guest 2</label>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" id="guest2_title" name="guest2_title">
                              <option value="">Title</option> 
                                <option value="Mr." <?= ($booking['guest2_title'] == 'Mr.') ? 'selected' : '' ?>>Mr.</option>
                                <option value="Mrs." <?= ($booking['guest2_title'] == 'Mrs.') ? 'selected' : '' ?>>Mrs.</option>
                                <option value="Miss." <?= ($booking['guest2_title'] == 'Miss.') ? 'selected' : '' ?>>Miss.</option>
                            </select>
                            <div class="invalid-feedback">This field is required when guest count is 2</div>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guest2_lastname" name="guest2_lastname" placeholder="Last Name" value="<?= $booking['guest2_lastname'] ?>">
                            <!-- <div class="invalid-feedback">This field is required when guest count is 2</div> -->
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guest2_firstname" name="guest2_firstname" placeholder="First Name" value="<?= $booking['guest2_firstname'] ?>">
                            <div class="invalid-feedback">This field is required when guest count is 2</div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-text" style="cursor:pointer;" onclick="openGuestModal('guest2')">
                                    <i class="bi bi-eye-fill"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 form-check">
                        <input type="checkbox" class="form-check-input" name="scanned_documents_collected"
                            id="scannedDocsCheckbox" <?= ($booking['scanned_documents_collected'] == 1) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="scannedDocsCheckbox">
                            Collected Scanned Documents
                        </label>
                        <div class="invalid-feedback">You must confirm that scanned documents have been collected</div>
                    </div>
                </div>

                <!-- Document Upload Section -->
                <div class="col-xl-6">
                    <div class="mt-1">
                        <h6><strong>Upload Documents</strong></h6>
                        
                        <!-- Address Proof -->
                        <div class="mb-3">
                            <label class="form-label">Address Proof <span class="text-danger">*</span></label>
                            <input type="file" name="address_proof_file" class="form-control">
                            <div class="invalid-feedback">Address proof is required for confirmed bookings</div>
                            <?php if(!empty($booking['address_proof_file'])): ?>
                                <div class="mt-2">
                                    <a href="<?= base_url('public/' . $booking['address_proof_file']) ?>" 
                                       target="_blank"
                                       class="text-primary text-decoration-none">
                                        <i class="bi bi-file-earmark-text"></i> View Current File
                                    </a>
                                    <input type="hidden" name="current_address_proof" value="<?= $booking['address_proof_file'] ?>">
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Other Documents -->
                        <div id="additionalDocs" class="mb-3">
                            <label class="form-label">Other Documents</label>
                            <?php 
                            $other_docs = json_decode($booking['other_documents_file'] ?? '[]', true);
                            foreach($other_docs as $index => $doc): 
                            ?>
                                <div class="input-group mb-2">
                                    <input type="file" class="form-control" name="other_documents_file[]">
                                    <div class="input-group-text bg-white">
                                        <a href="<?= base_url('public/' . $doc) ?>" 
                                           target="_blank"
                                           class="text-primary text-decoration-none">
                                            <i class="bi bi-file-earmark-text"></i> Document <?= $index + 1 ?>
                                        </a>
                                        <input type="hidden" name="current_other_documents[]" value="<?= $doc ?>">
                                    </div>
                                    <button class="btn btn-outline-dark" type="button" onclick="this.parentElement.remove()">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </div>
                            <?php endforeach; ?>
                            
                            <!-- "Add More" button container -->
                            <div class="input-group mb-2">
                                <input type="file" class="form-control" name="other_documents_file[]">
                                <button class="btn btn-outline-dark" type="button" onclick="addMoreDocs()">
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
                                <div class="spinner-border text-primary" role="status"></div>
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
                                    <!-- Data will be inserted here by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room Status Modal -->
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
                                    <!-- Rooms will be inserted here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Buttons -->
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <!-- Optional buttons can go here -->
                </div>
                <div>
                    <button type="submit" class="btn btn-success me-2" name="submit">Update</button>
                    <a href="<?= base_url('viewadvancebooking') ?>" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </div>
    </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize status dropdown
      const statusInput = document.getElementById('statusInput');
      const statusDropdown = new bootstrap.Dropdown(statusInput);

      // Set default value
      document.querySelectorAll('.status-option').forEach(item => {
        item.addEventListener('click', function (e) {
          e.preventDefault();
          document.getElementById('statusInput').value = this.getAttribute('data-value');
          return false;
        });
      });
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize status dropdown
      const statusInput = document.getElementById('roomTypeInput');
      const statusDropdown = new bootstrap.Dropdown(statusInput);

      // Handle selection - SPECIFIC to status dropdown only
      document.querySelectorAll('.status').forEach(item => {
        item.addEventListener('click', function (e) {
          e.preventDefault();
          document.getElementById('roomTypeInput').value = this.getAttribute('data-value');
          return false;
        });
      });
    });
  </script>

  <script>
    const relationInput = document.getElementById('relationInput');
    const relationItems = document.querySelectorAll('#relationLists .dropdown-item');

    document.querySelectorAll('#relationLists .dropdown-item').forEach(item => {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('relationInput').value = this.getAttribute('data-value');
        return false;
      });
    });
  </script>

  <script>
    // Track which guest is being edited (guest1 or guest2)
    let currentGuestField = ''; // Will store 'guest1' or 'guest2'

    // Function to open modal and set current guest field
    function openGuestModal(guestField) {
        currentGuestField = guestField;
        const modal = new bootstrap.Modal(document.getElementById('guestTableModal'));
        modal.show();
    }

    // Function to load guest data when modal opens
    document.getElementById('guestTableModal').addEventListener('show.bs.modal', function() {
        loadGuestTable();
    });

    function loadGuestTable() {
        const tableBody = document.getElementById('guestTableBody');
        const loadingDiv = document.getElementById('guestTableLoading');
        const table = document.getElementById('guestSelectionTable');
        
        // Show loading, hide table
        loadingDiv.style.display = 'block';
        table.style.display = 'none';
        tableBody.innerHTML = '';
        
        // Fetch data from server
        fetch('/viyoma/get-guests-for-modal') // Update this URL to match your route
            .then(response => response.json())
            .then(guests => {
                // Populate table
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
                
                // Hide loading, show table
                loadingDiv.style.display = 'none';
                table.style.display = 'table';
            })
            .catch(error => {
                console.error('Error loading guests:', error);
                loadingDiv.innerHTML = '<p class="text-danger">Error loading guests. Please try again.</p>';
            });
    }

    // Function to select guest and populate fields
    function selectGuest(rowElement, guestId) {
        console.log('Selecting guest for field:', currentGuestField);
        console.log('Row clicked:', rowElement);
        
        // Get data from the selected row
        const cells = rowElement.cells;
        console.log('Row cells:', cells);
        
        const guestData = {
            title: cells[0].textContent.trim(),
            lastName: cells[1].textContent.trim(),
            firstName: cells[2].textContent.trim()
        };
        console.log('Extracted guest data:', guestData);
        
        // Verify field IDs exist
        const titleField = document.getElementById(`${currentGuestField}_title`);
        const lastNameField = document.getElementById(`${currentGuestField}_lastname`);
        const firstNameField = document.getElementById(`${currentGuestField}_firstname`);
        
        console.log('Found fields:', {
            titleField,
            lastNameField,
            firstNameField
        });
        
        if (titleField && lastNameField && firstNameField) {
            // Populate the fields
            titleField.value = guestData.title;
            lastNameField.value = guestData.lastName;
            firstNameField.value = guestData.firstName;
            console.log('Fields populated successfully');
        } else {
            console.error('Could not find all form fields for:', currentGuestField);
        }
        
        // Close the modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('guestTableModal'));
        if (modal) {
            modal.hide();
        } else {
            console.error('Could not find modal instance');
        }
    }
  </script>

  <script>
    // Define the selectRoom function
    function selectRoom(roomNo, roomId) {
        document.getElementById('roomStatusInput').value = roomNo;
        document.getElementById('room_id').value = roomId;
        
        const modal = bootstrap.Modal.getInstance(document.getElementById('roomStatusModal'));
        modal.hide();
        
        console.log('Selected Room:', roomNo, 'ID:', roomId);
    }

    let selectedRoomType = null;
    let isEditMode = false;

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Check if we're in edit mode
        isEditMode = document.getElementById('roomTypeInput')?.value ? true : false;
        
        // Set initial type if in edit mode
        if (isEditMode) {
            selectedRoomType = document.getElementById('roomTypeInput').value;
        }
        
        // Initialize modal
        document.getElementById('roomStatusModal').addEventListener('show.bs.modal', loadRoomsModal);
        
        // Watch for type changes in edit mode
        document.getElementById('roomTypeInput').addEventListener('change', function() {
            if (isEditMode) {
                selectedRoomType = this.value;
                // Clear room selection when type changes
                document.getElementById('roomStatusInput').value = '';
                document.getElementById('room_id').value = '';
            }
        });
    });

    // Modified loadRoomsModal function
    function loadRoomsModal() {
        let url = '/viyoma/getrooms';
        if (selectedRoomType) {
            url += `?type=${encodeURIComponent(selectedRoomType)}`;
        }
        
        const container = document.getElementById('roomStatusListModal');
        container.innerHTML = '<div class="text-center py-3"><div class="spinner-border text-primary" role="status"></div></div>';
        
        fetch(url)
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                container.innerHTML = '';
                
                if (data.error) {
                    container.innerHTML = `<div class="text-center py-3 text-muted">${data.error}</div>`;
                    return;
                }
                
                // Using Bootstrap grid for 3 columns
                container.className = 'row row-cols-3 g-2';
                
                data.forEach(room => {
                    const col = document.createElement('div');
                    col.className = 'col';
                    
                    const roomElement = document.createElement('div');
                    roomElement.className = 'px-1 py-1 text-white rounded text-center room-badge';
                    roomElement.style.backgroundColor = room.status_color;
                    roomElement.style.cursor = 'pointer';
                    roomElement.textContent = room.room_no;
                    roomElement.onclick = () => selectRoom(room.room_no, room.room_id);
                    
                    col.appendChild(roomElement);
                    container.appendChild(col);
                });
                
                // Update modal title to show current filter
                updateModalTitle();
            })
            .catch(error => {
                console.error('Error:', error);
                container.innerHTML = '<div class="text-center py-3 text-danger">Error loading rooms</div>';
            });
    }

    function updateModalTitle() {
        const modalTitle = document.querySelector('#roomStatusModal .modal-title');
        modalTitle.innerHTML = `Select Room`;
    }

    function selectRoom(roomNo, roomId) {
        document.getElementById('roomStatusInput').value = roomNo;
        document.getElementById('room_id').value = roomId;
        
        const modal = bootstrap.Modal.getInstance(document.getElementById('roomStatusModal'));
        modal.hide();
    }

    // Handle room type selection from dropdown
    document.querySelectorAll('.dropdown-item.status').forEach(item => {
        item.addEventListener('click', function() {
            selectedRoomType = this.getAttribute('data-value');
            document.getElementById('roomTypeInput').value = selectedRoomType;
            
            // In edit mode, clear room selection when type changes
            if (isEditMode) {
                document.getElementById('roomStatusInput').value = '';
                document.getElementById('room_id').value = '';
            }
            
            // Refresh room list if modal is open
            if (document.getElementById('roomStatusModal').classList.contains('show')) {
                loadRoomsModal();
            }
        });
    });

    function clearRoomType() {
        selectedRoomType = null;
        document.getElementById('roomTypeInput').value = '';
        
        // In edit mode, clear room selection when type is cleared
        if (isEditMode) {
            document.getElementById('roomStatusInput').value = '';
            document.getElementById('room_id').value = '';
        }
        
        // Refresh room list if modal is open
        if (document.getElementById('roomStatusModal').classList.contains('show')) {
            loadRoomsModal();
        }
    }

    // Initialize when page loads
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('roomStatusModal').addEventListener('show.bs.modal', loadRoomsModal);
    });
  </script>

  <script>
    function updateTariff() {
      const guestCount = document.getElementById('guestCount').value;
      const tariffField = document.getElementById('monthlyTariff');

      if (guestCount == 2) {
        tariffField.value = 'Plan A';
      } else if (guestCount == 1) {
        tariffField.value = 'Plan B';
      }
      else {
        tariffField.value = '';
      }
    }

    // Initialize tariff on page load
    document.addEventListener('DOMContentLoaded', function () {
      updateTariff();
    });

    function addMoreDocs() {
        const container = document.getElementById('additionalDocs');
        const newInputGroup = document.createElement('div');
        newInputGroup.className = 'input-group mb-2';
        newInputGroup.innerHTML = `
            <input type="file" class="form-control" name="other_documents_file[]">
            <button class="btn btn-outline-dark" type="button" onclick="this.parentElement.remove()">
                <i class="bi bi-x-circle"></i>
            </button>
        `;
        // Insert before the "Add More" button container
        container.insertBefore(newInputGroup, container.lastElementChild);
    }
  </script>

  <script>
    function calculateNights() {
      const arrivalDate = document.getElementById('arrivalDate').value;
      const arrivalTime = document.getElementById('arrivalTime').value;
      const departureDate = document.getElementById('departureDate').value;
      const departureTime = document.getElementById('departureTime').value;

      if (!arrivalDate || !departureDate) return;

      // Create Date objects combining date and time
      const arrival = new Date(`${arrivalDate}T${arrivalTime || '00:00'}`);
      const departure = new Date(`${departureDate}T${departureTime || '00:00'}`);

      // Calculate difference in milliseconds
      const diffMs = departure - arrival;

      // Convert to days (rounding up to count partial days as a full night)
      const nights = Math.ceil(diffMs / (1000 * 60 * 60 * 24));

      // Update nights field (only if positive value)
      if (nights > 0) {
        document.getElementById('nights').value = nights;
      } else {
        document.getElementById('nights').value = '';
      }
    }

    // Initialize calculation when any date/time changes
    document.getElementById('arrivalDate').addEventListener('change', calculateNights);
    document.getElementById('arrivalTime').addEventListener('change', calculateNights);
    document.getElementById('departureDate').addEventListener('change', calculateNights);
    document.getElementById('departureTime').addEventListener('change', calculateNights);
  </script>

  <!-- Form Validation Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookingForm = document.getElementById('bookingForm');
        const guestCountInput = document.getElementById('guestCount');
        const statusInput = document.getElementById('statusInput');
        const addressProofInput = document.querySelector('input[name="address_proof_file"]');
        const currentAddressProof = document.querySelector('input[name="current_address_proof"]');
        
        // Function to validate the form
        function validateForm(event) {
            let isValid = true;
            const errorMessages = [];
            // Reset validation classes
            document.querySelectorAll('.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });
            
            // Check if status is "Confirmed" (case-insensitive)
            const statusValue = statusInput.value.toLowerCase();
            if (statusValue === 'confirmed') {
                const guestCount = parseInt(guestCountInput.value);
                
                // Validate Guest 1 (always required for Confirmed status)
                const guest1Title = document.getElementById('guest1_title').value;
                // const guest1LastName = document.getElementById('guest1_lastname').value;
                const guest1FirstName = document.getElementById('guest1_firstname').value;
                
                if (!guest1Title || !guest1LastName || !guest1FirstName) {
                    isValid = false;
                    errorMessages.push('Guest 1 information is required for confirmed bookings');
                    
                    // Highlight missing fields
                    if (!guest1Title) document.getElementById('guest1_title').classList.add('is-invalid');
                    // if (!guest1LastName) document.getElementById('guest1_lastname').classList.add('is-invalid');
                    if (!guest1FirstName) document.getElementById('guest1_firstname').classList.add('is-invalid');
                }
                
                // Validate Guest 2 if guest count is 2
                if (guestCount === 2) {
                    const guest2Title = document.getElementById('guest2_title').value;
                    // const guest2LastName = document.getElementById('guest2_lastname').value;
                    const guest2FirstName = document.getElementById('guest2_firstname').value;
                    
                    if (!guest2Title || !guest2LastName || !guest2FirstName) {
                        isValid = false;
                        errorMessages.push('Guest 2 information is required when guest count is 2');
                        
                        // Highlight missing fields
                        if (!guest2Title) document.getElementById('guest2_title').classList.add('is-invalid');
                        // if (!guest2LastName) document.getElementById('guest2_lastname').classList.add('is-invalid');
                        if (!guest2FirstName) document.getElementById('guest2_firstname').classList.add('is-invalid');
                    }
                }
                
                // Validate address proof (either existing or new upload)
                const hasAddressProof = addressProofInput.files.length > 0 || (currentAddressProof && currentAddressProof.value);
                if (!hasAddressProof) {
                    isValid = false;
                    errorMessages.push('Address proof is required for confirmed bookings');
                    addressProofInput.classList.add('is-invalid');
                }
                
                // Validate scanned documents collected checkbox
                const scannedDocsCheckbox = document.getElementById('scannedDocsCheckbox');
                if (!scannedDocsCheckbox.checked) {
                    isValid = false;
                    errorMessages.push('You must confirm that scanned documents have been collected');
                    scannedDocsCheckbox.classList.add('is-invalid');
                }
            }
            
            // If validation fails, prevent form submission and show errors
            if (!isValid) {
                event.preventDefault();
                
                // Remove any existing error alerts
                const existingAlerts = document.querySelectorAll('.validation-alert');
                existingAlerts.forEach(alert => alert.remove());
                
                // Create error alert
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger validation-alert mb-4';
                alertDiv.innerHTML = `
                    <strong>Please fix the following issues:</strong>
                    <ul class="mb-0">
                        ${errorMessages.map(msg => `<li>${msg}</li>`).join('')}
                    </ul>
                `;
                
                // Insert alert at the top of the form
                const formSection = document.querySelector('.form-section');
                formSection.insertBefore(alertDiv, formSection.firstChild);
                
                // Scroll to the alert
                alertDiv.scrollIntoView({ behavior: 'smooth' });
            }
        }
        
        // Add form submit event listener
        bookingForm.addEventListener('submit', validateForm);
        
        // Remove validation classes when fields are edited
        document.querySelectorAll('#guest1_title, #guest1_lastname, #guest1_firstname, ' +
                              '#guest2_title, #guest2_lastname, #guest2_firstname, ' +
                              'input[name="address_proof_file"], #scannedDocsCheckbox')
            .forEach(field => {
                field.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });
        
        // For checkboxes
        document.getElementById('scannedDocsCheckbox').addEventListener('change', function() {
            this.classList.remove('is-invalid');
        });
    });
  </script>

  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
</body>
</html>
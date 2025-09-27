
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

  <!-- Header -->
 

  <!-- Mobile Menu -->
 

  <div class="main-wrapper">

    <div id="reservationForm">
      <form action="<?= base_url('updateadvancebooking/' . $booking['id']) ?>" method="post" enctype="multipart/form-data" id="bookingForm">
        <div class="form-section card-body p-4 mb-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h5 class="mb-0 fs-7"><i class="ti ti-calendar-check text-success me-1"></i>Edit Booking</h5>
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
                            <th class="border-bottom required">Room #</th>
                            <th class="border-bottom required">Tariff</th>
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
                                <input type="hidden" id="room_id" value="<?= $booking['room_id'] ?>" name="room_id">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm border" name="monthly_tariff"
                                    id="monthlyTariff" readonly value="<?= $booking['monthly_tariff'] ?>" required>
                            </td>
                            <td>
                                <div class="dropdown d-inline-block w-100 position-static">
                                    <input type="text" class="form-control form-control-sm dropdown-toggle border" name="status"
                                        id="statusInput" placeholder="Select Status" data-bs-toggle="dropdown" aria-expanded="false"
                                        autocomplete="off" readonly style="cursor: pointer;" value="<?= $booking['status'] ?>" required >
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
           

            <!-- Guest 1 & 2 Info -->
          <div class="row g-4">
  <!-- Left: Guest Information -->
  <div class="col-12 col-lg-6">
    <div class="card h-100 p-3">
      <h6 class="fw-bold mb-3">
        <i class="bi bi-people text-success"></i> Resident Information
      </h6>

      <!-- Guest 1 -->
      <div class="row g-2 mb-3 align-items-end">
        <div class="col-12 col-md-2">
          <label class="form-label fw-bold">Guest 1</label>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label">Title</label>
          <select class="form-select" id="guest1_title" name="guest1_title">
            <option value="">Title</option>
            <option value="Mr." <?= ($booking['guest1_title'] == 'Mr.') ? 'selected' : '' ?>>Mr.</option>
            <option value="Mrs." <?= ($booking['guest1_title'] == 'Mrs.') ? 'selected' : '' ?>>Mrs.</option>
            <option value="Miss." <?= ($booking['guest1_title'] == 'Miss.') ? 'selected' : '' ?>>Miss.</option>
          </select>
        </div>
        <div class="col-6 col-md-3">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" id="guest1_lastname" name="guest1_lastname"
                 placeholder="Last Name" value="<?= $booking['guest1_lastname'] ?>">
        </div>
        <div class="col-6 col-md-3">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" id="guest1_firstname" name="guest1_firstname"
                 placeholder="First Name" value="<?= $booking['guest1_firstname'] ?>">
        </div>
        <div class="col-1 d-flex align-items-end">
                        <button type="button"
                          class="btn btn-outline-success d-flex justify-content-center align-items-center p-1"
                          style="font-size: 1.2rem;" data-bs-toggle="modal" data-guest-id="<?= $booking['guest1_id'] ?>" data-bs-target="#guestFormModal">
                          <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest1','<?= $booking['guest1_id'] ?>')">
                            <i class="bi bi-pencil-square"></i>
                          </span> </button>

                      </div>
        <!-- <div class="col-6 col-md-2">
          <label class="form-label">Profile</label>
          <div class="input-group">
            <span class="input-group-text text-success" style="cursor:pointer;"
                  onclick="openGuestModal('guest1')">
              <i class="bi bi-eye-fill"></i>
            </span>
          </div>
        </div> -->
      </div>

      <!-- Guest 2 -->
      <div class="row g-2 mb-3 align-items-end">
        <div class="col-12 col-md-2">
          <label class="form-label fw-bold">Guest 2</label>
        </div>
        <div class="col-6 col-md-2">
          <select class="form-select" id="guest2_title" name="guest2_title">
            <option value="">Title</option>
            <option value="Mr." <?= ($booking['guest2_title'] == 'Mr.') ? 'selected' : '' ?>>Mr.</option>
            <option value="Mrs." <?= ($booking['guest2_title'] == 'Mrs.') ? 'selected' : '' ?>>Mrs.</option>
            <option value="Miss." <?= ($booking['guest2_title'] == 'Miss.') ? 'selected' : '' ?>>Miss.</option>
          </select>
        </div>
        <div class="col-6 col-md-3">
          <input type="text" class="form-control" id="guest2_lastname" name="guest2_lastname"
                 placeholder="Last Name" value="<?= $booking['guest2_lastname'] ?>">
        </div>
        <div class="col-6 col-md-3">
          <input type="text" class="form-control" id="guest2_firstname" name="guest2_firstname"
                 placeholder="First Name" value="<?= $booking['guest2_firstname'] ?>">
        </div>
         <div class="col-1 d-flex align-items-end">
                        <button type="button"
                          class="btn btn-outline-success d-flex justify-content-center align-items-center p-1"
                          style="font-size: 1.2rem;" data-bs-toggle="modal" data-guest-id="<?= $booking['guest2_id'] ?>" data-bs-target="#guestFormModal" >
                          <span class="input-group-text text-success" style="cursor:pointer;"
                            onclick="openGuestModal('guest2','<?= $booking['guest2_id'] ?>')">
                            <i class="bi bi-pencil-square"></i>
                          </span> </button>

                      </div>
        <!-- <div class="col-6 col-md-2">
          <div class="input-group">
            <span class="input-group-text text-success" style="cursor:pointer;"
                  onclick="openGuestModal('guest2')">
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
      <h6 class="fw-bold mb-3">
        <i class="bi bi-upload text-success"></i> Document Upload
      </h6>
      <div class="form-check mt-3">
        <input type="checkbox" class="form-check-input" id="scannedDocsCheckbox"
               name="scanned_documents_collected"
               <?= ($booking['scanned_documents_collected'] == 1) ? 'checked' : '' ?>>
        <label class="form-check-label" for="scannedDocsCheckbox">
          Collected Scanned Documents
        </label>
      </div>

      <!-- Address Proof -->
      <div class="mb-3">
        <label class="form-label">Address Proof <span class="text-danger">*</span></label>
        <input type="file" name="address_proof_file" class="form-control">
        <?php if(!empty($booking['address_proof_file'])): ?>
          <div class="mt-2">
            <a href="<?= base_url('public/' . $booking['address_proof_file']) ?>" target="_blank"
               class="text-success text-decoration-none">
              <i class="bi bi-file-earmark-text"></i> View Current File
            </a>
          </div>
        <?php endif; ?>
      </div>

      <!-- Other Docs -->
      <div id="additionalDocs" class="mb-3">
        <label class="form-label">Other Documents</label>
        <?php 
          $other_docs = json_decode($booking['other_documents_file'] ?? '[]', true);
          foreach($other_docs as $index => $doc): ?>
          <div class="input-group mb-2">
            <input type="file" class="form-control" name="other_documents_file[]">
            <div class="input-group-text bg-white">
              <a href="<?= base_url('public/' . $doc) ?>" target="_blank"
                 class="text-success text-decoration-none">
                <i class="bi bi-file-earmark-text"></i> Document <?= $index + 1 ?>
              </a>
            </div>
            <button class="btn btn-outline-dark" type="button" onclick="this.parentElement.remove()">
              <i class="bi bi-x-circle"></i>
            </button>
          </div>
        <?php endforeach; ?>

        <!-- Add More -->
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
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> -->

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

            <!-- Add these hidden fields in your form -->
<input type="hidden" id="guest1_id" name="guest1_id" value="<?= $booking['guest1_id'] ?>">
<input type="hidden" id="guest2_id" name="guest2_id" value="<?= $booking['guest2_id'] ?>">

            <!-- Bottom Buttons -->
            <div class="d-flex justify-content-between mt-4">
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
                          placeholder="Select Gender" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off"  required />
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
  <label class="form-label">Upload Photo<span class="text-danger">*</span></label>
  <input type="file" class="form-control" name="photo_upload" id="photoUpload" accept="image/*" data-max-size="5242880" required>
  <div class="invalid-feedback" id="photoUploadError">
    Please upload a valid image file (JPG, PNG, JPEG) under 5MB.
  </div>
  <div class="file-preview mt-2" id="photoPreview" style="display: none;">
    <!-- This will be populated dynamically by JavaScript -->
    <a href="#" target="_blank" class="text-success text-decoration-none view-photo-link">
      <i class="bi bi-file-earmark-image"></i> View Current Photo
    </a>
    <input type="hidden" name="existing_photo_upload" id="existingPhotoUpload">
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
  <label class="form-label">ID Proof (Aadhaar/PAN/etc.)<span class="text-danger">*</span></label>
  <input type="file" name="id_proof" id="idProofUpload" class="form-control" accept=".jpg,.jpeg,.png,.pdf" data-max-size="5242880" required>
  <div class="invalid-feedback" id="idProofUploadError">
    Please upload a valid file (JPG, PNG, JPEG, PDF) under 5MB.
  </div>
  <div class="file-preview mt-2" id="idProofPreview" style="display: none;">
    <!-- This will be populated dynamically by JavaScript -->
    <a href="#" target="_blank" class="text-success text-decoration-none view-idproof-link">
      <i class="bi bi-file-earmark-text"></i> View Current ID Proof
    </a>
    <input type="hidden" name="existing_id_proof" id="existingIdProof">
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
  <label class="form-label">ID Proof (Aadhaar/PAN/etc.)<span class="text-danger">*</span></label>
  <input type="file" name="guardians[0][id_proof]" class="form-control guardian-id-proof" accept=".jpg,.jpeg,.png,.pdf" data-max-size="5242880" required>
  <div class="invalid-feedback guardian-id-proof-error">
    Please upload a valid file (JPG, PNG, JPEG, PDF) under 5MB.
  </div>
  <div class="file-preview mt-2 guardian-id-proof-preview" style="display: none;">
    <!-- This will be populated dynamically by JavaScript -->
    <a href="#" target="_blank" class="text-success text-decoration-none view-guardian-id-proof-link">
      <i class="bi bi-file-earmark-text"></i> View Current ID Proof
    </a>
    <input type="hidden" name="guardians[0][existing_id_proof]" class="existing-guardian-id-proof">
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
  <input type="file" name="medical_reports" id="medicalReportsUpload" class="form-control" accept=".jpg,.jpeg,.png,.pdf" data-max-size="10485760">
  <div class="invalid-feedback" id="medicalReportsUploadError">
    Please upload a valid file (JPG, PNG, JPEG, PDF) under 10MB.
  </div>
  <div class="file-preview mt-2" id="medicalReportsPreview" style="display: none;">
    <!-- This will be populated dynamically by JavaScript -->
    <a href="#" target="_blank" class="text-success text-decoration-none view-medical-reports-link">
      <i class="bi bi-file-earmark-medical"></i> View Current Reports
    </a>
    <input type="hidden" name="existing_medical_reports" id="existingMedicalReports">
  </div>
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

  <!-- <script>
  // Global variable to track which guest field we're updating
let currentGuestField = '';

function openGuestModal(guestField) {
    currentGuestField = guestField;
    $('#guestTableModal').modal('show');
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
    console.log('Selecting guest for field:', currentGuestField); // Debug which field we're filling
    console.log('Guest ID:', guestId); // Debug guest ID
    
    // Get data from the selected row
    const cells = rowElement.cells;
    
    const guestData = {
        title: cells[0].textContent.trim(),
        lastName: cells[1].textContent.trim(),
        firstName: cells[2].textContent.trim()
    };
    
    // Verify field IDs exist
    const titleField = document.getElementById(`${currentGuestField}_title`);
    const lastNameField = document.getElementById(`${currentGuestField}_lastname`);
    const firstNameField = document.getElementById(`${currentGuestField}_firstname`);
    const guestIdField = document.getElementById(`${currentGuestField}_id`); // Get the hidden guest ID field
    
    console.log('Found fields:', {
        titleField,
        lastNameField,
        firstNameField,
        guestIdField
    }); // Debug field elements
    
    if (titleField && lastNameField && firstNameField && guestIdField) {
        // Populate the fields
        titleField.value = guestData.title;
        lastNameField.value = guestData.lastName;
        firstNameField.value = guestData.firstName;
        guestIdField.value = guestId; // Store the guest ID in hidden field
        console.log('Fields populated successfully, Guest ID stored:', guestId);
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

  </script> -->

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
        tariffField.value = '45,000';
      } else if (guestCount == 1) {
        tariffField.value = '35,000';
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
            <button class="btn btn-outline-success" type="button" onclick="this.parentElement.remove()">
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
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('bookingForm');
  if (!form) return; // safety

  const $ = (sel) => document.querySelector(sel);
  const getVal = (sel) => ( $(sel)?.value || '' ).trim();

  const statusEl   = document.getElementById('statusInput') || document.getElementById('status');
  const guestCount = document.getElementById('guestCount');
  const addrProof  = document.querySelector('input[name="address_proof_file"]');
  const currentAP  = document.querySelector('input[name="current_address_proof"]');
  const scannedEl  = document.getElementById('scannedDocsCheckbox');

  form.addEventListener('submit', function (e) {
    let isValid = true;
    const msgs = [];

    document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));

    const statusValue = (statusEl?.value || '').toLowerCase();

    if (['confirmed', 'checked_in'].includes(statusValue)) {
      const gCount = parseInt(guestCount?.value || '1', 10);

      // Guest 1
      const g1Title = getVal('#guest1_title');
      const g1First = getVal('#guest1_firstname');
      const g1Last  = getVal('#guest1_lastname'); // ensure this input exists in your form

      if (!g1Title || !g1First || !g1Last) {
        isValid = false;
        msgs.push('Guest 1 information is required for confirmed/check-in bookings');
        if (!g1Title) $('#guest1_title')?.classList.add('is-invalid');
        if (!g1First) $('#guest1_firstname')?.classList.add('is-invalid');
        if (!g1Last)  $('#guest1_lastname')?.classList.add('is-invalid');
      }

      // Guest 2 when needed
      if (gCount === 2) {
        const g2Title = getVal('#guest2_title');
        const g2First = getVal('#guest2_firstname');
        const g2Last  = getVal('#guest2_lastname');

        if (!g2Title || !g2First || !g2Last) {
          isValid = false;
          msgs.push('Guest 2 information is required when guest count is 2');
          if (!g2Title) $('#guest2_title')?.classList.add('is-invalid');
          if (!g2First) $('#guest2_firstname')?.classList.add('is-invalid');
          if (!g2Last)  $('#guest2_lastname')?.classList.add('is-invalid');
        }
      }

      // Address proof: either a file chosen or an existing value present
      const hasAP = (addrProof && addrProof.files && addrProof.files.length > 0) || (currentAP && currentAP.value);
      if (!hasAP) {
        isValid = false;
        msgs.push('Address proof is required for confirmed/check-in bookings');
        addrProof?.classList.add('is-invalid');
      }

      // Scanned docs collected
      if (!scannedEl?.checked) {
        isValid = false;
        msgs.push('You must confirm that scanned documents have been collected');
        scannedEl?.classList.add('is-invalid');
      }
    }

    if (!isValid) {
      e.preventDefault();

      document.querySelectorAll('.validation-alert').forEach(a => a.remove());
      const alertDiv = document.createElement('div');
      alertDiv.className = 'alert alert-danger validation-alert mb-4';
      alertDiv.innerHTML = `
        <strong>Please fix the following issues:</strong>
        <ul class="mb-0">${msgs.map(m => `<li>${m}</li>`).join('')}</ul>
      `;
      const container = document.querySelector('.form-section') || form;
      container.insertBefore(alertDiv, container.firstChild);
      alertDiv.scrollIntoView({ behavior: 'smooth' });
    }
  });

  // remove invalid class on edit
  [
    '#guest1_title', '#guest1_lastname', '#guest1_firstname',
    '#guest2_title', '#guest2_lastname', '#guest2_firstname',
    '#scannedDocsCheckbox', 'input[name="address_proof_file"]'
  ].forEach(sel => {
    const el = $(sel);
    if (!el) return;
    const evt = (sel.includes('address_proof_file') || sel === '#scannedDocsCheckbox') ? 'change' : 'input';
    el.addEventListener(evt, function () { this.classList.remove('is-invalid'); });
  });
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

      // Reset the ID proof preview section
  const idProofPreview = newForm.querySelector('.guardian-id-proof-preview');
  if (idProofPreview) {
    idProofPreview.style.display = 'none'; // Hide the preview
    idProofPreview.querySelector('.view-guardian-id-proof-link').setAttribute('href', '#');
    idProofPreview.querySelector('.existing-guardian-id-proof').value = '';
  }
      
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
    // fileInput.classList.add('is-valid');
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
  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>

  <script>
$(document).ready(function() {
  // Make currentGuestField available in the global scope
  window.currentGuestField = '';
  window.currentGuestId = null;
  
  // Function to open modal for specific guest
  window.openGuestModal = function(guestField) {
    window.currentGuestField = guestField;
    
    // Get the guest ID from the hidden field
    var guestId = parseInt($('#' + guestField + '_id').val()) || null;
    
    console.log("Opening modal for:", guestField, "Guest ID:", guestId);
    
    // Check if guestId is valid (not 0, not null, not undefined, not NaN)
    if (guestId && guestId > 0) {
      window.currentGuestId = guestId;
      console.log("Editing existing guest with ID:", guestId);
      fetchGuestData(guestId);
    } else {
      window.currentGuestId = null;
      console.log("Adding new guest");
      resetGuestModal();
      $('#guestFormModal').modal('show');
    }
  };

  function resetGuestModal() {
    // Reset the form
    $('#guestMasterForm')[0].reset();
    $('#guestMasterForm').removeClass('was-validated');
    
    // Clear all multi-select selections
    $('#guestMasterForm select[multiple]').each(function() {
      $(this).val(null);
    });
    
    // Reset all tabs to the first one
    resetModalTabs();
    // $('#pills-tab button:first-child').tab('show');
    
    // Hide previews
    $('#photoPreview').hide();
    $('#idProofPreview').hide();
    $('#medicalReportsPreview').hide();
    $('.guardian-id-proof-preview').hide();
    
    // Clear hidden fields
    $('#existingPhotoUpload').val('');
    $('#existingIdProof').val('');
    $('#existingMedicalReports').val('');
    $('.existing-guardian-id-proof').val('');
    
    // Remove guest_id hidden field if exists
    $('#guestMasterForm input[name="guest_id"]').remove();
    
    // Reset guardian forms to just one
    $('#guardian-forms-container .guardian-form:not(:first)').remove();
    $('#guestMasterForm input[name^="guardians["]').val('');
    $('#guestMasterForm textarea[name^="guardians["]').val('');
  }

  function fetchGuestData(guestId) {
    // Double-check that we have a valid guest ID
    if (!guestId || guestId <= 0) {
      console.error("Invalid guest ID provided:", guestId);
      resetGuestModal();
      $('#guestFormModal').modal('show');
      return;
    }
    
    $.ajax({
      url: "<?= base_url('editguestinfo/') ?>" + guestId,
      type: "GET",
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      },
      success: function(response) {
        if(response.success) {
          // Prefill the modal form with the guest data
          prefillGuestForm(response);
          $('#guestFormModal').modal('show');
        } else {
          console.error("Error loading guest data:", response.message);
          // If guest not found, treat it as a new guest
          resetGuestModal();
          $('#guestFormModal').modal('show');
        }
      },
      error: function(xhr, status, error) {
        console.error("AJAX error:", error, "Status:", status);
        // If there's an error, treat it as a new guest
        resetGuestModal();
        $('#guestFormModal').modal('show');
      }
    });
  }

  // Tab navigation with validation for NEXT button only
  $(document).on('click', '.next-tab', function(e) {
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
  $(document).on('click', '.prev-tab', function(e) {
    e.preventDefault(); // Prevent default behavior
    const targetTab = $(this).data('target');
    $(targetTab).tab('show');
  });
  
  // Function to validate a specific tab
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
// Special validation for file inputs with existing files
else if (field.attr('type') === 'file') {
  // Find the existing file hidden field specifically for this field
  const fieldName = field.attr('name');
  
  // For guardian fields, we need to find the specific existing field for this guardian
  if (fieldName.includes('guardians')) {
    // Get the closest guardian form container
    const guardianForm = field.closest('.guardian-form');
    
    // Find the existing file field within this specific guardian form
    // Look for the hidden input with the same index pattern
    const fieldNameMatch = fieldName.match(/guardians\[(\d+)\]/);
    if (fieldNameMatch) {
      const index = fieldNameMatch[1];
      const existingFileField = guardianForm.find(`input[name="guardians[${index}][existing_id_proof]"]`);
      
      // If no file is selected BUT there's an existing file, it's valid
      if (!field.val() && existingFileField.val()) {
        // Valid - has existing file
      } 
      // If no file is selected AND no existing file, it's invalid
      else if (!field.val() && !existingFileField.val()) {
        field.addClass('is-invalid');
        isValid = false;
        if (!firstInvalidField) firstInvalidField = field;
      }
      // If file is selected, it's valid
      else if (field.val()) {
        // Valid - has new file
      }
    }
  } else {
    // For non-guardian fields, use the generic approach
    const container = field.closest('.mb-3');
    const existingFileField = container.find('input[type="hidden"][name*="existing"]');
    
    // If no file is selected BUT there's an existing file, it's valid
    if (!field.val() && existingFileField.val()) {
      // Valid - has existing file
    } 
    // If no file is selected AND no existing file, it's invalid
    else if (!field.val() && !existingFileField.val()) {
      field.addClass('is-invalid');
      isValid = false;
      if (!firstInvalidField) firstInvalidField = field;
    }
    // If file is selected, it's valid
    else if (field.val()) {
      // Valid - has new file
    }
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
    
    console.log("Guest form submitted for:", window.currentGuestField, "with ID:", window.currentGuestId);
    
    // Store currentGuestField in a variable that won't change during async operation
    var targetGuestField = window.currentGuestField;
    
    // Check if we're editing an existing guest or adding a new one
    var isEditing = window.currentGuestId !== null && window.currentGuestId !== undefined && window.currentGuestId > 0;
    
    console.log("Is editing:", isEditing, "Guest ID:", window.currentGuestId);
    
    // Create FormData object to handle file uploads
    var formData = new FormData(this);
    
    // Add which guest this is for to the form data
    formData.append('current_guest_field', targetGuestField);
    
    // Determine URL and method based on whether we're adding or updating
    let url = "<?= base_url('guestinfo') ?>"; // Add endpoint
    let method = "POST";
    
    // If editing existing guest, change URL and method
    if (isEditing) {
      url = "<?= base_url('updateguestinfo/') ?>" + window.currentGuestId;
      method = "POST";
      console.log("Update URL:", url); 
    } else {
      console.log("Add URL:", url);
    }
    
    $.ajax({
      url: url,
      type: method,
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
          const message = isEditing ? 'Guest updated successfully!' : 'Guest saved successfully!';
          // alert(response.message || message);
          
          // Update the hidden field with the new guest ID
          if(targetGuestField === 'guest1') {
            $('#guest1_id').val(response.guest_id);
            $('#guest1_title').val(response.title || '');
            $('#guest1_firstname').val(response.first_name || '');
            $('#guest1_lastname').val(response.last_name || '');
            console.log("Updated guest1 fields with ID:", response.guest_id);
          } else if(targetGuestField === 'guest2') {
            $('#guest2_id').val(response.guest_id);
            $('#guest2_title').val(response.title || '');
            $('#guest2_firstname').val(response.first_name || '');
            $('#guest2_lastname').val(response.last_name || '');
            console.log("Updated guest2 fields with ID:", response.guest_id);
          } else {
            console.error("Unknown target guest field:", targetGuestField);
          }
          
          $('#guestFormModal').modal('hide');
          $('#guestMasterForm').removeClass('was-validated');
      
          // Reset the form only for new guests, not for updates
          if (!isEditing) {
            resetGuestModal();
          }
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
  $(document).on('click', '.dropdown-item', function() {
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

  // Keep your existing prefillGuestForm function here
  function prefillGuestForm(response) {
    const guestData = response.guest;
    const guardians = response.guardians;
    const medical = response.medical;
    const preferences = response.preferences;
    
    // Prefill basic personal info fields
    $('#guestMasterForm input[name="first_name"]').val(guestData.first_name || '');
    $('#guestMasterForm input[name="last_name"]').val(guestData.last_name || '');
    $('#guestMasterForm input[name="contact"]').val(guestData.contact || '');
    $('#guestMasterForm input[name="dob"]').val(guestData.dob || '');
    $('#guestMasterForm input[name="previous_occupation"]').val(guestData.previous_occupation || '');
    $('#guestMasterForm textarea[name="current_address"]').val(guestData.current_address || '');
    $('#guestMasterForm textarea[name="permanent_address"]').val(guestData.permanent_address || '');

    // Handle photo upload preview
    if (guestData.photo_upload) {
      $('#photoPreview').show();
      $('.view-photo-link').attr('href', '<?= base_url('public/') ?>' + guestData.photo_upload);
      $('#existingPhotoUpload').val(guestData.photo_upload);
    } else {
      $('#photoPreview').hide();
      $('.view-photo-link').attr('href', '#');
      $('#existingPhotoUpload').val('');
    }
    
    // Handle ID proof upload preview
    if (guestData.id_proof) {
      $('#idProofPreview').show();
      $('.view-idproof-link').attr('href', '<?= base_url('public/') ?>' + guestData.id_proof);
      $('#existingIdProof').val(guestData.id_proof);
    } else {
      $('#idProofPreview').hide();
      $('.view-idproof-link').attr('href', '#');
      $('#existingIdProof').val('');
    }

    // Prefill dropdown fields (both display and hidden values)
    if (guestData.gender) {
      $('#guestMasterForm input[name="gender_display"]').val(guestData.gender);
      $('#guestMasterForm input[name="gender"]').val(guestData.gender);
    }
    
    if (guestData.religion) {
      $('#guestMasterForm input[name="religion_display"]').val(guestData.religion);
      $('#guestMasterForm input[name="religion"]').val(guestData.religion);
    }
    
    if (guestData.education_level) {
      $('#guestMasterForm input[name="education_display"]').val(guestData.education_level);
      $('#guestMasterForm input[name="education_level"]').val(guestData.education_level);
    }
    
    if (guestData.marital_status) {
      $('#guestMasterForm input[name="marital_status_display"]').val(guestData.marital_status);
      $('#guestMasterForm input[name="marital_status"]').val(guestData.marital_status);
    }
    
    if (guestData.mother_tongue) {
      $('#guestMasterForm input[name="mother_tongue_display"]').val(guestData.mother_tongue);
      $('#guestMasterForm input[name="mother_tongue"]').val(guestData.mother_tongue);
    }
    
    // Prefill medical information
    if (medical) {
      $('#guestMasterForm textarea[name="recent_surgeries"]').val(medical.recent_surgeries || '');
      $('#guestMasterForm textarea[name="doctor_info"]').val(medical.doctor_info || '');
      $('#guestMasterForm textarea[name="ongoing_medication"]').val(medical.ongoing_medication || '');
      $('#guestMasterForm textarea[name="allergies"]').val(medical.allergies || '');
        $('#guestMasterForm input[name="blood_group_display"]').val(medical.blood_group || '');
        $('#guestMasterForm input[name="blood_group"]').val(medical.blood_group || '');
      

      // Handle medical reports upload preview
      if (medical.medical_reports) {
        $('#medicalReportsPreview').show();
        $('.view-medical-reports-link').attr('href', '<?= base_url('public/') ?>' + medical.medical_reports);
        $('#existingMedicalReports').val(medical.medical_reports);
      } else {
        $('#medicalReportsPreview').hide();
        $('.view-medical-reports-link').attr('href', '#');
        $('#existingMedicalReports').val('');
      }
      
      // Prefill multi-select medical fields
      if (medical.known_conditions) {
        const conditions = medical.known_conditions.split(',');
        $('#guestMasterForm select[name="known_conditions[]"]').val(conditions);
      }
      
      if (medical.disabilities) {
        const disabilities = medical.disabilities.split(',');
        $('#guestMasterForm select[name="disabilities[]"]').val(disabilities);
      }
    }
    
    // Prefill preferences
    if (preferences) {
      $('#guestMasterForm textarea[name="remarks"]').val(preferences.remarks || '');
      
      // Prefill multi-select preference fields
      if (preferences.fav_foods) {
        const favFoods = preferences.fav_foods.split(',');
        $('#guestMasterForm select[name="fav_foods[]"]').val(favFoods);
      }
      
      if (preferences.disliked_foods) {
        const dislikedFoods = preferences.disliked_foods.split(',');
        $('#guestMasterForm select[name="disliked_foods[]"]').val(dislikedFoods);
      }
      
      if (preferences.hobbies) {
        const hobbies = preferences.hobbies.split(',');
        $('#guestMasterForm select[name="hobbies[]"]').val(hobbies);
      }
      
      if (preferences.religious_practices) {
        const practices = preferences.religious_practices.split(',');
        $('#guestMasterForm select[name="religious_practices[]"]').val(practices);
      }
      
      if (preferences.routine_preferences) {
        const routines = preferences.routine_preferences.split(',');
        $('#guestMasterForm select[name="routine_preferences[]"]').val(routines);
      }
    }
    
    // Prefill guardians
    if (guardians && guardians.length > 0) {
      // Clear existing guardian forms except the first one
      $('#guardian-forms-container .guardian-form:not(:first)').remove();
      
      // Prefill the first guardian form
      const firstGuardian = guardians[0];
      $('#guestMasterForm input[name="guardians[0][full_name]"]').val(firstGuardian.full_name || '');
      $('#guestMasterForm input[name="guardians[0][contact_number]"]').val(firstGuardian.contact_number || '');
      $('#guestMasterForm input[name="guardians[0][email]"]').val(firstGuardian.email || '');
      $('#guestMasterForm input[name="guardians[0][alternate_contact]"]').val(firstGuardian.alternate_contact || '');
      $('#guestMasterForm textarea[name="guardians[0][current_address]"]').val(firstGuardian.current_address || '');
      
      if (firstGuardian.relationship_with_guest) {
        $('#guestMasterForm input[name="guardians[0][relationship_display]"]').val(firstGuardian.relationship_with_guest);
        $('#guestMasterForm input[name="guardians[0][relationship_with_guest]"]').val(firstGuardian.relationship_with_guest);
      }

      // Handle first guardian ID proof
      if (firstGuardian.id_proof) {
        $('#guestMasterForm .guardian-id-proof-preview:first').show();
        $('#guestMasterForm .view-guardian-id-proof-link:first').attr('href', '<?= base_url('public/') ?>' + firstGuardian.id_proof);
        $('#guestMasterForm .existing-guardian-id-proof:first').val(firstGuardian.id_proof);
      }
      
      // Add and prefill additional guardians
      for (let i = 1; i < guardians.length; i++) {
        // Trigger your add guardian function to create a new form
        document.getElementById('add-guardian-btn').click();
        
        // Wait a moment for the form to be created, then prefill it
        setTimeout(() => {
          const guardian = guardians[i];
          $(`#guestMasterForm input[name="guardians[${i}][full_name]"]`).val(guardian.full_name || '');
          $(`#guestMasterForm input[name="guardians[${i}][contact_number]"]`).val(guardian.contact_number || '');
          $(`#guestMasterForm input[name="guardians[${i}][email]"]`).val(guardian.email || '');
          $(`#guestMasterForm input[name="guardians[${i}][alternate_contact]"]`).val(guardian.alternate_contact || '');
          $(`#guestMasterForm textarea[name="guardians[${i}][current_address]"]`).val(guardian.current_address || '');
          
          if (guardian.relationship_with_guest) {
            $(`#guestMasterForm input[name="guardians[${i}][relationship_display]"]`).val(guardian.relationship_with_guest);
            $(`#guestMasterForm input[name="guardians[${i}][relationship_with_guest]"]`).val(guardian.relationship_with_guest);
          }
          
          if (guardian.id_proof) {
            $(`#guestMasterForm .guardian-id-proof-preview:eq(${i})`).show();
            $(`#guestMasterForm .view-guardian-id-proof-link:eq(${i})`).attr('href', '<?= base_url('public/') ?>' + guardian.id_proof);
            $(`#guestMasterForm .existing-guardian-id-proof:eq(${i})`).val(guardian.id_proof);
          } else {
            $(`#guestMasterForm .guardian-id-proof-preview:eq(${i})`).hide();
          }
        }, 100); // Small delay to ensure the form is created
      }
    }
    
    // Add a hidden field for guest ID if editing
    $('#guestMasterForm').append('<input type="hidden" name="guest_id" value="' + guestData.id + '">');
  }

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
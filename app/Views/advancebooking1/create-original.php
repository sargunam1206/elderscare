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

/* Main dropdown style */


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

  

    /* Show submenu on hover for desktop */
  

    /* Remove collapse behavior on desktop */
   

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
<style>
  /* ===== Compact Global Adjustments ===== */
body {
  font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
  font-size: 13px; /* reduced global font */
  background-color: var(--light-gray);
  color: var(--dark-gray);
  line-height: 1.4;
}

/* Headings smaller */
h5, .modal-title {
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
.form-control, .form-select {
  font-size: 12px;
  padding: 4px 8px;
  border-radius: 6px;
}
.form-control-sm, .form-select-sm {
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
.table thead th, .table tbody td {
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
.card, .form-section {
  padding: 10px !important;
  border-radius: 6px;
}

/* Modal compact */
.modal-header, .modal-footer {
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
  .btn, .form-control, .form-select {
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
.form-control, .form-select {
  font-size: 12px !important;
  padding: 4px 8px !important;
  height: auto !important;
  border-radius: 5px;
  margin-bottom: 4px; /* tighter vertical spacing */
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
.table th, .table td {
  padding: 6px 8px !important;
  font-size: 12px;
}

/* Section headings smaller */
h5, h6 {
  font-size: 13px !important;
  margin-bottom: 6px;
}

/* Card / section padding reduced */
.card, .form-section {
  padding: 10px !important;
  margin-bottom: 10px !important;
  border-radius: 6px;
}

/* Modal compact */
.modal-body {
  padding: 8px 12px !important;
  font-size: 12px;
}
.modal-header, .modal-footer {
  padding: 6px 10px !important;
}
.modal-title {
  font-size: 13px;
}

/* Input groups (e.g. icons/buttons inside inputs) */
.input-group-text {
  font-size: 12px;
  padding: 4px 6px;
}


</style>
 <style>
        .form-section {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .form-section h6 {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 8px;
            margin-bottom: 15px;
            color: #1B5E20;
        }
        .compact-row {
            margin-bottom: 10px;
        }
        .validation-message {
            font-size: 0.75rem;
            color: #dc3545;
            display: none;
        }
        .required::after {
            content: "*";
            color: #dc3545;
            margin-left: 3px;
        }
        .dropdown-item {
            cursor: pointer;
            padding: 5px 10px;
            font-size: 0.9rem;
        }
        .dropdown-item:hover {
            background-color: #1B5E20;
            color: white;
        }
        .guest-row {
            padding: 5px 0;
        }
        .form-label {
            margin-bottom: 4px;
            font-size: 0.9rem;
        }
        .form-control, .form-select {
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
        }
        :root {
  --bs-primary: #198754; /* Bootstrap green, replace with your theme */
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
<?= view('layout/head') ?>

  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <div class="main-wrapper px-4">

    <div id="reservationForm ">
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

      <form action="<?= base_url('advancebooking') ?>" method="post" enctype="multipart/form-data" id="bookingForm" onsubmit="return validateForm()">
        <div class="form-section card-border p-4 mb-4">

          <div class="row mb-3">
            <div class="col-md-6">
                <h5 class="mb-0 fs-6"><i class="bi bi-calendar-plus text-success px-2"></i>Add Booking</h5>
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
            </div>

            <div class="col-md-2">
              <label class="form-label required">Guest count</label>
              <input type="number" name="guest_count" class="form-control" id="guestCount" min="1" max="2" required
                onchange="updateTariff()">
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


                    <div class="dropdown d-inline-block w-100 position-static"  id="roomTypeDropdown">
                      <input type="text" class="form-control form-control-sm dropdown-toggle" id="roomTypeInput"
                        name="type" placeholder="Select Type" data-bs-toggle="dropdown" aria-expanded="false"
                        autocomplete="off" required readonly style="cursor: pointer;" required >
                      <ul class="dropdown-menu w-100" aria-labelledby="roomTypeInput">
                        <li><button class="dropdown-item status" type="button" data-value="Garden View">Garden
                            View</button></li>
                        <li><button class="dropdown-item status" type="button" data-value="North East view">North East
                            view</button></li>
                      </ul>
                    </div>

                    
                  </td>

                  <td>
                    <input type="date" class="form-control form-control-sm border" id="arrivalDate" name="arrival_date"
                      onchange="calculateNights()" required >
                  </td>
                  <td>
                    <input type="time" class="form-control form-control-sm border" id="arrivalTime" name="arrival_time"
                      onchange="calculateNights()" required >
                  </td>
                  <td>
                    <input type="date" class="form-control form-control-sm border" id="departureDate" name="depart_date"
                      onchange="calculateNights()" required >
                  </td>
                  <td>
                    <input type="time" class="form-control form-control-sm border" id="departureTime" name="depart_time"
                      onchange="calculateNights()" required >
                  </td>
                  <td>
                    <input type="number" class="form-control form-control-sm border" id="nights" name="nights" required readonly>
                  </td>
                 <td>
                    <input type="text" class="form-control form-control-sm border" id="roomStatusInput" name="room"
                           data-bs-toggle="modal" data-bs-target="#roomStatusModal" required readonly>
                    <input type="hidden" id="room_id" name="room_id">
                  </td>

                  <td>
                    <input type="text" class="form-control form-control-sm border" name="monthly_tariff"
                      id="monthlyTariff" required readonly>
                  </td>
                  <td>
                    <div class="dropdown d-inline-block w-100 position-static">
                      <input type="text" class="form-control form-control-sm dropdown-toggle border" name="status"
                        id="statusInput" placeholder="Select Status" data-bs-toggle="dropdown" aria-expanded="false"
                        autocomplete="off" readonly style="cursor: pointer;">
                      <ul class="dropdown-menu w-100" aria-labelledby="statusInput">
                        <li><button class="dropdown-item status-option" type="button"
                            data-value="Confirmed">Confirmed</button></li>
                        <li><button class="dropdown-item status-option" type="button" data-value="Waiting List">Waiting
                            List</button></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- <h6><strong>Enquiry Person Info</strong></h6> -->
          <div class="">
        <div class="row">
            <!-- Section 1: Personal Information -->
            <!-- <div class="col-md-4">
                <div class="form-section">
                    <h6>Personal Information</h6>
                    <div class="compact-row">
                        <label class="form-label required">Person Name</label>
                        <input type="text" class="form-control" name="enquiry_person_name" placeholder="Enter Name" required>
                    </div>
                    
                    <div class="compact-row">
                        <label for="relationInput" class="form-label required">Relation</label>
                        <div class="dropdown">
                            <input type="text" class="form-control dropdown-toggle w-100" name="relation" id="relationInput"
                                placeholder="Select Relation" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required
                                readonly />
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
                    
                    <div class="compact-row">
                        <label class="form-label required">Contact No</label>
                        <input type="tel" name="contact_no" class="form-control" placeholder="Contact Number" required>
                    </div>
                    
                    
                </div>
            </div> -->

            <!-- Section 2: Guest Information -->
            <div class="col-md-6">
                <div class="form-section">
                    <h6>Resident Information</h6>
                    
                    <!-- Guest 1 -->
                    <div class="guest-row">
                        <label class="form-label fw-bold">Residents <span class="validation-message">Required</span></label>
                        <div class="row g-2">
                            <div class="col-3">
                                <label class="form-label">Title</label>
                                <select class="form-select" id="guest1_title" name="guest1_title">
                                    <option value="">Title</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Miss.">Miss.</option>
                                </select>
                                <div class="validation-message">Required</div>
                            </div>
                            <div class="col-4">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="guest1_lastname" name="guest1_lastname" placeholder="Last Name">
                                <div class="validation-message">Required</div>
                            </div>
                            <div class="col-4">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" id="guest1_firstname" name="guest1_firstname" placeholder="First Name">
                                <div class="validation-message">Required</div>
                            </div>
                           <div class="col-1 d-flex align-items-end">
  <button type="button" 
          class="btn btn-outline-success d-flex justify-content-center align-items-center p-2" 
          style="font-size: 1.2rem;" 
             data-bs-toggle="modal" 
          data-bs-target="#guestFormModal">
    <i class="bi bi-plus-lg"></i>
  </button>
</div>


                        </div>
                    </div>

                    <!-- Guest 2 -->
                    <div class="guest-row mt-3">
                        <!-- <label class="form-label fw-bold">Guest 2 <span class="validation-message">Required</span></label> -->
                        <div class="row g-2">
                            <div class="col-3">
                                <select class="form-select" placeholder="select" id="guest2_title" name="guest2_title">
                                    <option value="">Title</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Miss.">Miss.</option>
                                </select>
                                <div class="validation-message">Required</div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="guest2_lastname" name="guest2_lastname" placeholder="Last Name">
                                <div class="validation-message">Required</div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="guest2_firstname" name="guest2_firstname" placeholder="First Name">
                                <div class="validation-message">Required</div>
                            </div>
                           <div class="col-1 d-flex align-items-end">
  <button type="button" 
          class="btn btn-outline-success d-flex justify-content-center align-items-center p-2" 
          style="font-size: 1.2rem;" 
          data-bs-toggle="modal" 
          data-bs-target="#guestFormModal">
    <i class="bi bi-plus-lg"></i>
  </button>
</div>


                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Document Upload -->
            <div class="col-md-6">
                <div class="form-section">
                  
                    <h6>Document Upload</h6>
                    <div class="compact-row mt-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="scanned_documents_collected"
                                id="scannedDocsCheckbox">
                            <label class="form-check-label required" for="scannedDocsCheckbox">
                                Collected Scanned Documents
                            </label>
                        </div>
                    </div>
                    
                    <div class="compact-row">
                        <label class="form-label required">Address Proof</label>
                        <input type="file" name="address_proof_file" class="form-control" required>
                    </div>

                     <div id="additionalDocs" class="mb-3">
                  <label class="form-label">Other Documents</label>
                  <div class="input-group mb-2 text-success">
                    <input type="file" class="form-control" name="other_documents_file[]">
                    <button class="btn btn-outline-success " type="button" onclick="addMoreDocs()">
                      <i class="bi bi-plus-circle text-sm"></i>
                    </button>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Relation dropdown functionality
        document.querySelectorAll('#relationLists .dropdown-item').forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('relationInput').value = this.getAttribute('data-value');
            });
        });

        // Function to open guest modal (placeholder)
        function openGuestModal(guest) {
            alert('Opening modal for ' + guest);
        }

        // Function to remove document field
        function removeDocField(button) {
            button.closest('.input-group').remove();
        }
    </script>


          <!-- Guest Modal -->
<!-- Guest Master Modal -->

<!-- Guest Master Modal -->
<div class="modal fade" id="guestFormModal" tabindex="-1" aria-labelledby="guestFormModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      
      <!-- Header -->
      <div class="modal-header d-flex justify-content-between align-items-center">
        <h5 class="modal-title" id="guestFormModalLabel">Guest Master Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Progress Bar -->
      <div class="progress mx-4 mt-2" style="height: 8px;">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <!-- Navigation Tabs -->
      <ul class="nav nav-pills nav-justified border-bottom px-3 pt-1" id="pills-tab" role="tablist">
        <li class="nav-item "><button class="nav-link active btn-sm" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button">Personal Info</button></li>
        <li class="nav-item"><button class="nav-link btn-sm" id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button">Guardian</button></li>
        <li class="nav-item"><button class="nav-link btn-sm" id="pills-bills-tab" data-bs-toggle="pill" data-bs-target="#pills-bills" type="button">Medical</button></li>
        <li class="nav-item"><button class="nav-link btn-sm" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button">Likes & Dislikes</button></li>
      </ul>

      <!-- Body -->
      <div class="modal-body">
        <form id="guestMasterForm" method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="tab-content" id="pills-tabContent">
      <!-- Personal Info Tab -->
      <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
        <div class="row">
          <div class="col-lg-12">
            <div class="card w-100 border position-relative overflow-hidden mb-0">
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-lg-6">
                    <!-- First Name -->
                    <div class="mb-3">
                      <label class="form-label">First Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name" required pattern="[A-Za-z\s]{2,}">
                      <div class="invalid-feedback">
                        Please provide a valid first name (minimum 2 letters, no numbers or special characters).
                      </div>
                    </div>
                                    <!-- Gender Dropdown -->
                  <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-select" name="gender">
                              <option selected disabled>Select Gender</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>

                       <!-- Religion Dropdown -->

                          <div class="mb-3">
                            <label class="form-label">Religion</label>
                            <select class="form-select" name="religion">
                              <option selected disabled>Select Religion</option>
                              <option>Hindu</option>
                              <option>Muslim</option>
                              <option>Christian</option>
                              <option>Sikh</option>
                              <option>Other</option>
                            </select>
                          </div>
                          <!-- Education Dropdown -->
                          <div class="mb-3">
                            <label class="form-label">Education</label>
                            <select class="form-select" name="education">
                              <option selected disabled>Select Education</option>
                              <option>High School</option>
                              <option>Undergraduate</option>
                              <option>Graduate</option>
                              <option>Postgraduate</option>
                              <option>Other</option>
                            </select>
                          </div>
                      

                    <!-- Current Address -->
                    <div class="mb-3">
                      <label class="form-label">Current Address <span class="text-danger">*</span></label>
                      <textarea class="form-control" name="current_address" placeholder="Type your Address Here" required minlength="10"></textarea>
                      <div class="invalid-feedback">
                        Please provide a valid address (minimum 10 characters).
                      </div>
                    </div>
                    
                    <!-- Contact Number -->
                    <div class="mb-3">
                      <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="contact" placeholder="Enter Mobile Number" required pattern="[0-9]{10}">
                      <div class="invalid-feedback">
                        Please provide a valid 10-digit mobile number.
                      </div>
                    </div>

                    <!-- Upload Photo -->
                    <div class="mb-3">
                      <label class="form-label">Upload Photo <span class="text-danger">*</span></label>
                      <input type="file" class="form-control" name="photo_upload" accept="image/*" required>
                      <div class="invalid-feedback">
                        Please upload a photo.
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    <!-- Last Name -->
                    <div class="mb-3">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name" pattern="[A-Za-z\s]*">
                      <div class="invalid-feedback">
                        Last name should only contain letters and spaces.
                      </div>
                    </div>
                                        <!-- Date of Birth -->
                    <div class="mb-3">
                      <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                      <input type="date" class="form-control" name="dob" required max="<?= date('Y-m-d'); ?>">
                      <div class="invalid-feedback">
                        Please provide a valid date of birth.
                      </div>
                    </div>

                    <!-- Marital Status Dropdown -->
                    <div class="mb-3">
                      <label class="form-label">Marital Status <span class="text-danger">*</span></label>
                      <div class="dropdown">
                        <input type="text" class="form-control dropdown-toggle w-100" name="marital_status_display" id="maritalStatusInput"
                          placeholder="Select Status" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off"  required>
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
                      <label class="form-label">Mother Tongue <span class="text-danger">*</span></label>
                      <div class="dropdown">
                        <input type="text" class="form-control dropdown-toggle w-100" name="mother_tongue_display" id="motherTongueInput"
                          placeholder="Select Language" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required>
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
                      <input type="text" class="form-control" name="previous_occupation" placeholder="Enter Your Occupation" pattern="[A-Za-z\s]*">
                      <div class="invalid-feedback">
                        Occupation should only contain letters and spaces.
                      </div>
                    </div>
                    
                    <!-- Permanent Address -->
                    <div class="mb-3">
                      <label class="form-label">Permanent Address</label>
                      <textarea class="form-control" name="permanent_address" placeholder="Type your Address Here"></textarea>
                    </div>
                    
                    <!-- ID Proof -->
                    <div class="mb-3">
                      <label class="form-label">ID Proof (Aadhaar/PAN/etc.) <span class="text-danger">*</span></label>
                      <input type="file" class="form-control" name="id_proof" accept=".jpg,.jpeg,.png,.pdf" required>
                      <div class="invalid-feedback">
                        Please upload an ID proof document.
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="step-buttons">
                  <div></div> <!-- Empty div for spacing -->
                  <button type="button" class="btn btn-primary next-tab" data-target="#pills-notifications-tab">
                    Next <i class="bi bi-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Guardian Tab -->
      <div class="tab-pane fade" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab" tabindex="0">
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
                          <label class="form-label">Full Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="guardians[0][full_name]" placeholder="Enter Guardian Name" required pattern="[A-Za-z\s]{2,}">
                          <div class="invalid-feedback">
                            Please provide a valid full name (minimum 2 letters, no numbers or special characters).
                          </div>
                        </div>
                        
                        <!-- Contact Number -->
                        <div class="mb-3">
                          <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="guardians[0][contact_number]" placeholder="Enter Mobile Number" required pattern="[0-9]{10}">
                          <div class="invalid-feedback">
                            Please provide a valid 10-digit mobile number.
                          </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" name="guardians[0][email]" placeholder="Enter Email Id">
                          <div class="invalid-feedback">
                            Please provide a valid email address.
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <!-- Relationship Dropdown -->
                        <div class="mb-3">
                          <label class="form-label">Relationship with Guest <span class="text-danger">*</span></label>
                          <div class="dropdown">
                            <input type="text" class="form-control dropdown-toggle w-100" name="guardians[0][relationship_display]" 
                              placeholder="Select Relationship" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required>
                            <input type="hidden" name="guardians[0][relationship_with_guest]" id="relationshipHidden0">
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
                          <input type="text" class="form-control" name="guardians[0][alternate_contact]" placeholder="Enter Mobile Number" pattern="[0-9]{10}">
                          <div class="invalid-feedback">
                            Please provide a valid 10-digit mobile number.
                          </div>
                        </div>
                        
                        <!-- ID Proof -->
                        <div class="mb-3">
                          <label class="form-label">ID Proof (Aadhaar/PAN/etc.) <span class="text-danger">*</span></label>
                          <input type="file" class="form-control" name="guardians[0][id_proof]" accept=".jpg,.jpeg,.png,.pdf" required>
                          <div class="invalid-feedback">
                            Please upload an ID proof document.
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Current Address -->
                    <div class="mb-3">
                      <label class="form-label">Current Address <span class="text-danger">*</span></label>
                      <textarea class="form-control" name="guardians[0][current_address]" placeholder="Type your Address Here" required minlength="10"></textarea>
                      <div class="invalid-feedback">
                        Please provide a valid address (minimum 10 characters).
                      </div>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-3 mt-3 remove-btn-container">
                      <button type="button" class="btn btn-danger remove-guardian-btn" style="display: none;">
                        <i class="bi bi-trash"></i> Remove Guardian
                      </button>
                    </div>
                  </div>
                </div>
                
                <div class="step-buttons d-flex justify-content-between">
  <button type="button" class="btn btn-info prev-tab" data-target="#pills-account-tab">
    <i class="bi bi-arrow-left"></i> Previous
  </button>
  <button type="button" class="btn btn-primary next-tab" data-target="#pills-bills-tab">
    Next <i class="bi bi-arrow-right"></i>
  </button>
</div>

              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Medical History Tab -->
      <div class="tab-pane fade" id="pills-bills" role="tabpanel" aria-labelledby="pills-bills-tab" tabindex="0">
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
                        <button type="button" class="btn btn-sm btn-outline-success" id="openMedicalConditionModalBtn">
                          <i class="bi bi-plus"></i> Add New
                        </button>
                      </div>
                      <select multiple class="form-select" name="known_conditions[]" style="height: 120px;">
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
                      <textarea class="form-control" name="recent_surgeries" rows="3" placeholder="List any recent surgeries with dates"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Doctor's Information</label>
                      <textarea class="form-control" name="doctor_info" rows="3" placeholder="Dr.Name, Phone, Hospital/clinic"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Medical Reports Upload</label>
                      <input type="file" class="form-control" name="medical_reports" accept=".jpg,.jpeg,.png,.pdf">
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <label class="form-label">Disabilities / Mobility Issues</label>
                        <button type="button" class="btn btn-sm btn-outline-success" id="openDisabilityModalBtn">
                          <i class="bi bi-plus"></i> Add New
                        </button>
                      </div>
                      <select multiple class="form-select" name="disabilities[]" style="height: 120px;">
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
                      <textarea class="form-control" name="ongoing_medication" rows="3" placeholder="List Current medications and dosages"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Allergies</label>
                      <textarea class="form-control" name="allergies" rows="3" placeholder="List any known allergies"></textarea>
                    </div>
                    
                    <div class="mb-3">
                      <label class="form-label">Blood Group</label>
                      <select class="form-select" name="blood_group">
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="step-buttons d-flex justify-content-between">
                  <button type="button" class="btn btn-info prev-tab" data-target="#pills-notifications-tab">
                    <i class="bi bi-arrow-left"></i> Previous
                  </button>
                  <button type="button" class="btn btn-primary next-tab" data-target="#pills-security-tab">
                    Next <i class="bi bi-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Likes & Dislikes Tab -->
      <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab" tabindex="0">
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
                      <select multiple class="form-select" name="routine_preferences[]" style="height: 120px;">
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
                      <select multiple class="form-select" name="disliked_foods[]" style="height: 120px;">
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
                      <select multiple class="form-select" name="religious_practices[]" style="height: 120px;">
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
                      <textarea class="form-control" name="remarks" rows="4" placeholder="Any additional information or special requirements"></textarea>
                    </div>
                  </div>
                </div>
                
                <div class="step-buttons d-flex justify-content-between">
                  <button type="button" class="btn btn-info prev-tab" data-target="#pills-bills-tab">
                    <i class="bi bi-arrow-left"></i> Previous
                  </button>
                  <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Submit All Information
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
      </div>
    </div>
  </div>
</div>

<!-- Add Medical Condition Modal -->
<div class="modal fade" id="addMedicalConditionModal" tabindex="-1" aria-labelledby="addMedicalConditionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="addMedicalConditionModalLabel">Add New Medical Condition</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
          <label for="newMedicalCondition" class="form-label">Condition Name</label>
          <input type="text" class="form-control" id="newMedicalCondition" placeholder="Enter condition name">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="saveMedicalCondition">Save</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>

<!-- Add DisabilityModal -->
<div class="modal fade" id="addDisabilityModal" tabindex="-1" aria-labelledby="addDisabilityModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDisabilityModalLabel">Add New Disability/Mobility Issue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="newDisability" class="form-label">Disability/Mobility Issue</label>
          <input type="text" class="form-control" id="newDisability" placeholder="Enter disability/mobility issue">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="saveDisability">Save</button>
        <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap & jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function() {
    // Initialize tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();
    
    // Update progress bar based on active tab
    function updateProgressBar() {
      const activeTab = $('.nav-pills .nav-link.active');
      const tabIndex = $('.nav-pills .nav-link').index(activeTab);
      const progress = ((tabIndex + 1) / $('.nav-pills .nav-link').length) * 100;
      $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
    }
    
    // Initialize progress bar
    updateProgressBar();
    
    // Custom dropdown functionality
    $('.dropdown-item').on('click', function() {
      const value = $(this).data('value');
      const displayText = $(this).text();
      const dropdown = $(this).closest('.dropdown');
      
      dropdown.find('input[type="text"]').val(displayText);
      dropdown.find('input[type="hidden"]').val(value);
    });
    
    // Next tab button functionality
    $('.next-tab').on('click', function() {
      const targetTab = $(this).data('target');
      $(`button[data-bs-target="${targetTab}"]`).tab('show');
      updateProgressBar();
    });
    
    // Previous tab button functionality
    $('.prev-tab').on('click', function() {
      const targetTab = $(this).data('target');
      $(`button[data-bs-target="${targetTab}"]`).tab('show');
      updateProgressBar();
    });
    
    // Update progress bar when tab is changed
    $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function() {
      updateProgressBar();
    });
    
    // Form validation
    $('#guestMasterForm').on('submit', function(e) {
      if (!this.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
        
        // Find the first invalid field and switch to its tab
        const firstInvalid = $(this).find(':invalid').first();
        const tabPane = firstInvalid.closest('.tab-pane');
        const tabId = tabPane.attr('id');
        const tabButton = $(`.nav-pills button[data-bs-target="#${tabId}"]`);
        
        tabButton.tab('show');
        updateProgressBar();
        
        // Focus on the first invalid field
        firstInvalid.focus();
      }
      
      $(this).addClass('was-validated');
    });
    
    // Add guardian functionality
    let guardianCount = 1;
    $('#add-guardian-btn').on('click', function() {
      const newGuardianForm = $('.guardian-form').first().clone();
      
      // Update indices in the names and IDs
      newGuardianForm.find('[name]').each(function() {
        const name = $(this).attr('name').replace(/guardians\[\d+\]/, `guardians[${guardianCount}]`);
        $(this).attr('name', name);
      });
      
      // Clear values
      newGuardianForm.find('input, textarea, select').val('');
      newGuardianForm.find('input[type="hidden"]').val('');
      
      // Show remove button
      newGuardianForm.find('.remove-guardian-btn').show();
      
      // Add to container
      $('#guardian-forms-container').append(newGuardianForm);
      
      // Add remove functionality
      newGuardianForm.find('.remove-guardian-btn').on('click', function() {
        $(this).closest('.guardian-form').remove();
      });
      
      guardianCount++;
    });
    
    // Remove guardian functionality
    $('.remove-guardian-btn').on('click', function() {
      $(this).closest('.guardian-form').remove();
    });
    
    // Medical Conditions Modal
    const medicalConditionModal = new bootstrap.Modal(document.getElementById('addMedicalConditionModal'));
    const saveMedicalConditionBtn = document.getElementById('saveMedicalCondition');
    
    // Get the select element by its name attribute
    const medicalConditionsSelect = document.querySelector('select[name="known_conditions[]"]');
    
    saveMedicalConditionBtn.addEventListener('click', function() {
      const newCondition = document.getElementById('newMedicalCondition').value.trim();
      if (newCondition) {
        // Create a sanitized value (lowercase, hyphen-separated)
        const sanitizedValue = newCondition.toLowerCase().replace(/\s+/g, '-');
        
        // Check if option already exists
        const exists = Array.from(medicalConditionsSelect.options).some(
          option => option.value === sanitizedValue
        );
        
        if (!exists) {
          const newOption = new Option(newCondition, sanitizedValue);
          medicalConditionsSelect.add(newOption);
          
          // Select the new option by default
          newOption.selected = true;
        }
        
        // Clear and close the modal
        document.getElementById('newMedicalCondition').value = '';
        medicalConditionModal.hide();
      }
    });
    
    // Open Medical Condition Modal
    $('#openMedicalConditionModalBtn').on('click', function() {
      medicalConditionModal.show();
    });
    
    // Disability Modal
    const disabilityModal = new bootstrap.Modal(document.getElementById('addDisabilityModal'));
    const saveDisabilityBtn = document.getElementById('saveDisability');
    const disabilitiesSelect = document.querySelector('select[name="disabilities[]"]');
    
    saveDisabilityBtn.addEventListener('click', function() {
      const newDisability = document.getElementById('newDisability').value.trim();
      if (newDisability) {
        const sanitizedValue = newDisability.toLowerCase().replace(/\s+/g, '-');
        
        const exists = Array.from(disabilitiesSelect.options).some(
          option => option.value === sanitizedValue
        );
        
        if (!exists) {
          const newOption = new Option(newDisability, sanitizedValue);
          disabilitiesSelect.add(newOption);
          newOption.selected = true;
        }
        
        document.getElementById('newDisability').value = '';
        disabilityModal.hide();
      }
    });
    
    // Open Disability Modal
    $('#openDisabilityModalBtn').on('click', function() {
      disabilityModal.show();
    });
  });
</script>



<!-- JS Scripts -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  // Enable custom dropdowns
  document.querySelectorAll(".dropdown-menu .dropdown-item").forEach(item => {
    item.addEventListener("click", function() {
      let parent = this.closest(".dropdown");
      let displayInput = parent.querySelector("input.form-control");
      let hiddenInput = parent.querySelector("input[type='hidden']");
      displayInput.value = this.textContent.trim();
      hiddenInput.value = this.getAttribute("data-value");
    });
  });

  // Guardian Add/Remove
  let guardianIndex = 1;
  const guardianContainer = document.getElementById("guardian-forms-container");
  const addGuardianBtn = document.getElementById("add-guardian-btn");

  if (addGuardianBtn) {
    addGuardianBtn.addEventListener("click", function() {
      let firstForm = guardianContainer.querySelector(".guardian-form");
      let newForm = firstForm.cloneNode(true);

      // Update name attributes with new index
      newForm.querySelectorAll("input, textarea").forEach(input => {
        if (input.name.includes("guardians[0]")) {
          input.name = input.name.replace("guardians[0]", `guardians[${guardianIndex}]`);
          input.value = "";
        }
      });
      newForm.querySelector(".remove-guardian-btn").style.display = "inline-block";
      guardianContainer.appendChild(newForm);
      guardianIndex++;
    });
  }

  // Remove Guardian
  document.addEventListener("click", function(e) {
    if (e.target.classList.contains("remove-guardian-btn")) {
      e.target.closest(".guardian-form").remove();
    }
  });

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
    btn.addEventListener("click", function() {
      let targetTab = document.querySelector(this.dataset.target);
      let tab = new bootstrap.Tab(targetTab);
      tab.show();
    });
  });
  document.querySelectorAll(".prev-tab").forEach(btn => {
    btn.addEventListener("click", function() {
      let targetTab = document.querySelector(this.dataset.target);
      let tab = new bootstrap.Tab(targetTab);
      tab.show();
    });
  });
});
</script>


         
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

          <div class="d-flex justify-content-between mb-4">
            <div>
            </div>
            <div>
              <button type="submit" class="btn btn-success btn-sm me-2" name="submit">Save</button>
              <a href="<?= base_url('viewadvancebooking') ?>" class="btn btn-danger btn-sm">Cancel</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Guest validation functions
    function validateForm() {
        let isValid = true;
        const guestCount = parseInt(document.getElementById('guestCount').value);
        const status = document.getElementById('statusInput').value;
       
        // Clear previous validation
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        document.querySelectorAll('.validation-message').forEach(el => el.style.display = 'none');
       
        // Only validate if status is "Confirmed"
        if (status === 'Confirmed') {
            // Validate Guest 1
            const guest1Fields = [
                document.getElementById('guest1_title'),
                document.getElementById('guest1_lastname'),
                document.getElementById('guest1_firstname')
            ];
           
            guest1Fields.forEach(field => {
                if (!field.value) {
                    field.classList.add('is-invalid');
                    const message = field.nextElementSibling;
                    if (message && message.classList.contains('validation-message')) {
                        message.style.display = 'block';
                    }
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
                        const message = field.nextElementSibling;
                        if (message && message.classList.contains('validation-message')) {
                            message.style.display = 'block';
                        }
                        isValid = false;
                    }
                });
            }
        }
       
        if (!isValid) {
            // Scroll to first invalid field
            const firstInvalid = document.querySelector('.is-invalid');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
       
        return isValid;
    }

    // Update required fields based on guest count and status
    function updateFieldRequirements() {
        const guestCount = parseInt(document.getElementById('guestCount').value);
        const status = document.getElementById('statusInput').value;
        const isConfirmed = status === 'Confirmed';
       
        // Guest 1 fields
        const guest1Fields = [
            document.getElementById('guest1_title'),
            document.getElementById('guest1_lastname'),
            document.getElementById('guest1_firstname')
        ];
       
        // Guest 2 fields
        const guest2Fields = [
            document.getElementById('guest2_title'),
            document.getElementById('guest2_lastname'),
            document.getElementById('guest2_firstname')
        ];
       
        // Set Guest 1 requirements
        guest1Fields.forEach(field => {
            field.required = isConfirmed;
        });
       
        // Set Guest 2 requirements
        guest2Fields.forEach(field => {
            field.required = isConfirmed && guestCount === 2;
        });
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Set up event listeners
        document.getElementById('guestCount').addEventListener('change', updateFieldRequirements);
        document.getElementById('statusInput').addEventListener('change', updateFieldRequirements);
       
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
       
        // Update field requirements when guest count changes
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
    // Initialize dropdowns
    document.addEventListener('DOMContentLoaded', function() {
        // Status dropdown
        document.querySelectorAll('.status-option').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('statusInput').value = this.getAttribute('data-value');
                updateFieldRequirements();
            });
        });

        // // Room type dropdown
        // document.querySelectorAll('.status').forEach(item => {
        //     item.addEventListener('click', function(e) {
        //         e.preventDefault();
        //         document.getElementById('roomTypeInput').value = this.getAttribute('data-value');
        //         selectedRoomType = this.getAttribute('data-value');
        //     });
        // });
        // Room type dropdown functionality
    document.querySelectorAll('.status').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('roomTypeInput').value = this.getAttribute('data-value');
            selectedRoomType = this.getAttribute('data-value');
            // Close the dropdown after selection
            var dropdown = new bootstrap.Dropdown(document.getElementById('roomTypeDropdown'));
            dropdown.hide();
        });
    });

    // Status dropdown functionality
    document.querySelectorAll('.status-option').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('statusInput').value = this.getAttribute('data-value');
            updateFieldRequirements();
            // Close the dropdown after selection
            var dropdown = new bootstrap.Dropdown(this.closest('.dropdown').querySelector('.dropdown-toggle'));
            dropdown.hide();
        });
    });

        // // Relation dropdown
        // document.querySelectorAll('#relationLists .dropdown-item').forEach(item => {
        //     item.addEventListener('click', function(e) {
        //         e.preventDefault();
        //         document.getElementById('relationInput').value = this.getAttribute('data-value');
        //         document.getElementById('relationInput').classList.remove('is-invalid');

        //     });
        // });

        // Relation dropdown functionality
document.querySelectorAll('#relationLists .dropdown-item').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('relationInput').value = this.getAttribute('data-value');
        document.getElementById('relationInput').classList.remove('is-invalid');
        // Close the dropdown after selection
        var dropdown = new bootstrap.Dropdown(this.closest('.dropdown').querySelector('.dropdown-toggle'));
        dropdown.hide();
    });
});

        // Initialize room modal
        document.getElementById('roomStatusModal').addEventListener('show.bs.modal', loadRoomsModal);
       
        // Initialize tariff
        updateTariff();
    });
  </script>
  <!-- jQuery (offline) -->
<script src="<?= base_url(); ?>/public/dist/assets/js/jquery.min.js"></script>

<!-- Bootstrap Bundle (offline, includes Popper.js) -->
<script src="<?= base_url(); ?>/public/dist/assets/js/bootstrap.bundle.min.js"></script>

<!-- Theme JS -->
<script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>


  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<!-- 
  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script> -->

</body>
</html>
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
</head>

<body>
<?= view('layout/head') ?>

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

      <form action="<?= base_url('advancebooking') ?>" method="post" enctype="multipart/form-data" id="bookingForm" onsubmit="return validateForm()">
        <div class="form-section card-border p-4 mb-4">

          <div class="row mb-3">
            <div class="col-md-6">
                <h5 class="mb-0 fs-7"><i class="bi bi-calendar-plus text-success px-2"></i>Add Booking</h5>
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
                    <div class="dropdown d-inline-block w-100 position-static">
                      <input type="text" class="form-control form-control-sm dropdown-toggle" id="roomTypeInput"
                        name="type" placeholder="Select Type" data-bs-toggle="dropdown" aria-expanded="false"
                        autocomplete="off" required readonly style="cursor: pointer;" required >
                      <ul class="dropdown-menu w-5" aria-labelledby="roomTypeInput">
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
                      <ul class="dropdown-menu w-5" aria-labelledby="statusInput">
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

          <h6><strong>Enquiry Person Info</strong></h6>
          <div class="row g-3 mb-4">
            <div class="col-md-4">
              <label class="form-label required">Person Name</label>
              <input type="text" class="form-control" name="enquiry_person_name" placeholder="Enter Name" required>
            </div>
            <div class="mb-3 col-md-4">
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

            <div class="col-md-4">
              <label class="form-label required">Contact No</label>
              <input type="tel" name="contact_no" class="form-control" placeholder="Contact Number" required>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-6">
              <!-- Guest 1 -->
              <div class="row g-2 mb-2 align-items-end">
                <div class="col-md-2">
                  <label class="form-label fw-bold">Guest 1 <span class="validation-message">Required</span></label>
                </div>
                <div class="col-md-2">
                  <label class="form-label">Title</label>
                  <select class="form-select" id="guest1_title" name="guest1_title">
                    <option value="">Title</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Miss.">Miss.</option>
                  </select>
                  <div class="validation-message">Required</div>
                </div>
                <div class="col-md-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="guest1_lastname" name="guest1_lastname" placeholder="Last Name">
                  <div class="validation-message">Required</div>
                </div>
                <div class="col-md-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" id="guest1_firstname" name="guest1_firstname" placeholder="First Name">
                  <div class="validation-message">Required</div>
                </div>
                <div class="col-md-2">
                  <label class="form-label">Profile</label>
                  <div class="input-group">
                    <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest1')">
                      <i class="bi bi-eye-fill"></i>
                    </span>
                  </div>
                </div>
              </div>

              <!-- Guest 2 -->
              <div class="row g-2 mb-2 align-items-end">
                <div class="col-md-2">
                  <label class="form-label fw-bold">Guest 2 <span class="validation-message">Required</span></label>
                </div>
                <div class="col-md-2">
                  <select class="form-select" placeholder="select" id="guest2_title" name="guest2_title">
                    <option value="">Title</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Miss.">Miss.</option>
                  </select>
                  <div class="validation-message">Required</div>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="guest2_lastname" name="guest2_lastname" placeholder="Last Name">
                  <div class="validation-message">Required</div>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="guest2_firstname" name="guest2_firstname" placeholder="First Name">
                  <div class="validation-message">Required</div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-text text-success" style="cursor:pointer;" onclick="openGuestModal('guest2')">
                      <i class="bi bi-eye-fill"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="mt-4 form-check">
                <input type="checkbox" class="form-check-input " name="scanned_documents_collected"
                  id="scannedDocsCheckbox">
                <label class="form-check-label required" for="scannedDocsCheckbox">
                  Collected Scanned Documents
                </label>
              </div>
            </div>

            <div class="col-xl-6">
              <div class="mt-1">
                <h6><strong>Upload Documents</strong></h6>
                <div class="mb-3">
                  <label class="form-label required">Address Proof </label>
                  <input type="file" name="address_proof_file" class="form-control" required>
                </div>

                <div id="additionalDocs" class="mb-3">
                  <label class="form-label">Other Documents</label>
                  <div class="input-group mb-2">
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

          <!-- Add these hidden fields in your form -->
<input type="hidden" id="guest1_id" name="guest1_id" value="">
<input type="hidden" id="guest2_id" name="guest2_id" value="">

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

        // Room type dropdown
        document.querySelectorAll('.status').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('roomTypeInput').value = this.getAttribute('data-value');
                selectedRoomType = this.getAttribute('data-value');
            });
        });

        // Relation dropdown
        document.querySelectorAll('#relationLists .dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('relationInput').value = this.getAttribute('data-value');
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
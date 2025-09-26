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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/globel.css">



  <title>MatDash Bootstrap Admin</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

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

/* Keep brand color on click/focus */
.btn-primary:focus,
.btn-primary:active,
.btn-primary:focus:active {
    background-color: #1B5E20 !important;
    color: #FFFFFF !important;
    box-shadow: none !important;
    border-color: #1B5E20 !important;
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

.table-striped tbody tr:nof-type(odd) {
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
/* ========== Profile Tabs Theme ========== */
.user-profile-tab.nav-pills .nav-link {
  border-radius: 0; /* No pill shape */
  background: transparent !important;
  position: relative;
  transition: all 0.3s ease;
  color: var(--dark-gray); /* Default text color */
}

.user-profile-tab.nav-pills .nav-link i {
  color: var(--dark-gray); /* Default icon color */
}

/* Hover state */
.user-profile-tab.nav-pills .nav-link:hover,
.user-profile-tab.nav-pills .nav-link:focus {
  background-color: transparent !important;
  color: var(--primary-green) !important;
}

.user-profile-tab.nav-pills .nav-link:hover i,
.user-profile-tab.nav-pills .nav-link:focus i {
  color: var(--primary-green) !important;
}

/* Hover underline */
.user-profile-tab.nav-pills .nav-link:hover::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: var(--primary-green);
}

/* Active tab */
.user-profile-tab.nav-pills .nav-link.active {
  color: var(--primary-green) !important;
  background-color: transparent !important;
  box-shadow: none !important;
}

.user-profile-tab.nav-pills .nav-link.active i {
  color: var(--primary-green) !important;
}

/* Active underline */
.user-profile-tab.nav-pills .nav-link.active::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: var(--primary-green);
}

.user-profile-tab.nav-pills .nav-link:focus,
.user-profile-tab.nav-pills .nav-link:active {
  outline: none !important;         /* Remove browser focus outline */
  box-shadow: none !important;      /* Remove Bootstrap focus shadow */
}

.user-profile-tab.nav-pills .nav-link.active {
  border-bottom: 2px solid var(--primary-green) !important;
}

/* Validation Styles */
.was-validated .form-control:invalid,
.form-control.is-invalid {
  border-color: var(--destructive-red);
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid,
.form-control.is-valid {
  border-color: var(--primary-green);
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: var(--destructive-red);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-feedback {
  display: block;
}

/* Custom dropdown validation */
.was-validated .dropdown-toggle:invalid,
.dropdown-toggle.is-invalid {
  border-color: var(--destructive-red);
}

.was-validated .dropdown-toggle:valid,
.dropdown-toggle.is-valid {
  border-color: var(--primary-green);
}

/* File input validation */
.was-validated .form-control-file:invalid,
.form-control-file.is-invalid {
  border-color: var(--destructive-red);
}

.was-validated .form-control-file:valid,
.form-control-file.is-valid {
  border-color: var(--primary-green);
}

/* File upload preview */
.file-preview {
  margin-top: 8px;
  padding: 8px;
  border-radius: 4px;
  background-color: #f8f9fa;
}

.file-preview img {
  max-width: 100px;
  max-height: 100px;
  border-radius: 4px;
}

.file-info {
  margin-top: 5px;
  font-size: 12px;
  color: #6c757d;
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

<div class="main-wrapper overflow-hidden">
    <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"> <i class="bi bi-person-plus text-success"></i>
Edit Guest </h5>
        <a href="<?= base_url('viewguestinfo') ?>" class="btn btn-primary">
            <i class="ti ti-list me-2"></i>
            Guest List
        </a>
    </div>
    </div>
  <div class="card">
    <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
          <i class="ti ti-user-circle me-2 fs-6"></i>
          <span class="d-none d-md-block">Guest Personal Info</span>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
          <i class="ti ti-bell me-2 fs-6"></i>
          <span class="d-none d-md-block">Guardian</span>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-bills-tab" data-bs-toggle="pill" data-bs-target="#pills-bills" type="button" role="tab" aria-controls="pills-bills" aria-selected="false">
          <i class="ti ti-article me-2 fs-6"></i>
          <span class="d-none d-md-block">Medical History</span>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false">
          <i class="ti ti-lock me-2 fs-6"></i>
          <span class="d-none d-md-block">Likes & Dislikes</span>
        </button>
      </li>
    </ul>

    <?php
    $session = \Config\Services::session();
    $successMessage = $session->getFlashdata('success');
    $activeTab = $_GET['tab'] ?? ''; // fallback to empty
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
    
    <div class="card-body">
  <!-- Master form wrapper -->
  <form id="guestEditForm" method="post" action="<?= base_url('updateguestinfo/'.$guest['guest_id']) ?>" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="tab-content" id="pills-tabContent">
        <!-- Personal Info Tab -->
        <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
            <div class="row">
                <div class="col-12">
                    <div class="card w-100 border position-relative overflow-hidden mb-0">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- First Name -->
                                    <div class="mb-3">
                                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="first_name" value="<?= $guest['first_name'] ?? '' ?>" placeholder="Enter Your First Name" required pattern="[A-Za-z\s]{2,}">
                                        <div class="invalid-feedback">
                                          Please provide a valid first name (minimum 2 letters, no numbers or special characters).
                                        </div>
                                    </div>
                                    
                                    <!-- Gender Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label">Gender <span class="text-danger">*</span></label>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle w-100" id="genderInput"
                                                value="<?= $guest['gender'] ?? '' ?>" placeholder="Select Gender" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required>
                                            <input type="hidden" name="gender" id="genderHidden" value="<?= $guest['gender'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
                                                <div class="dropdown-item" data-value="Male">Male</div>
                                                <div class="dropdown-item" data-value="Female">Female</div>
                                                <div class="dropdown-item" data-value="Other">Other</div>
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
                                            <input type="text" class="form-control dropdown-toggle w-100" id="religionInput"
                                                value="<?= $guest['religion'] ?? '' ?>" placeholder="Select Religion" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required>
                                            <input type="hidden" name="religion" id="religionHidden" value="<?= $guest['religion'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
                                                <div class="dropdown-item" data-value="Hinduism">Hindu</div>
                                                <div class="dropdown-item" data-value="Islam">Islam</div>
                                                <div class="dropdown-item" data-value="Christianity">Christian</div>
                                                <div class="dropdown-item" data-value="Sikhism">Sikhism</div>
                                                <div class="dropdown-item" data-value="Buddhism">Buddhism</div>
                                                <div class="dropdown-item" data-value="Jainism">Jainism</div>
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
                                            <input type="text" class="form-control dropdown-toggle w-100" id="educationInput"
                                                value="<?= $guest['education_level'] ?? '' ?>" placeholder="Select Education" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required>
                                            <input type="hidden" name="education_level" id="educationHidden" value="<?= $guest['education_level'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
                                                <div class="dropdown-item" data-value="Primary School">Primary School</div>
                                                <div class="dropdown-item" data-value="Secondary School">Secondary School</div>
                                                <div class="dropdown-item" data-value="Higher Secondary">Higher Secondary</div>
                                                <div class="dropdown-item" data-value="Graduate">Graduate</div>
                                                <div class="dropdown-item" data-value="Post Graduate">Post Graduate</div>
                                                <div class="dropdown-item" data-value="Doctorate">Doctorate</div>
                                                <div class="dropdown-item" data-value="Other">Other</div>
                                            </ul>
                                            <div class="invalid-feedback">
                                              Please select an education level.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Current Address -->
                                    <div class="mb-3">
                                        <label class="form-label">Current Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="current_address" placeholder="Type your Address Here" required minlength="10"><?= $guest['current_address'] ?? '' ?></textarea>
                                        <div class="invalid-feedback">
                                          Please provide a valid address (minimum 10 characters).
                                        </div>
                                    </div>
                                    
                                    <!-- Contact Number -->
                                    <div class="mb-3">
                                        <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="contact" value="<?= $guest['contact'] ?? '' ?>" placeholder="Enter Mobile Number" required pattern="[0-9]{10}">
                                        <div class="invalid-feedback">
                                          Please provide a valid 10-digit mobile number.
                                        </div>
                                    </div>

                                    <!-- Upload Photo -->
                                    <div class="mb-3">
                                        <label class="form-label">Upload Photo</label>
                                        <input type="file" class="form-control" name="photo_upload" id="photoUpload" accept="image/*" data-max-size="5242880">
                                        <div class="invalid-feedback" id="photoUploadError">
                                          Please upload a valid image file (JPG, PNG, JPEG) under 5MB.
                                        </div>
                                        <?php if (!empty($guest['photo_upload'])): ?>
                                            <div class="file-preview mt-2">
                                                <a href="<?= base_url('public/' . $guest['photo_upload']) ?>" 
                                                   target="_blank"
                                                   class="text-success text-decoration-none">
                                                    <i class="bi bi-file-earmark-image"></i> View Current Photo
                                                </a>
                                                <input type="hidden" name="existing_photo_upload" value="<?= $guest['photo_upload'] ?>">
                                            </div>
                                        <?php else: ?>
                                            <div class="file-preview mt-2 d-none" id="photoPreview">
                                                <img id="photoPreviewImg" src="#" alt="Photo preview" class="d-none">
                                                <div class="file-info" id="photoInfo"></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <!-- Last Name -->
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" value="<?= $guest['last_name'] ?? '' ?>" placeholder="Enter Your Last Name" pattern="[A-Za-z\s]*">
                                        <div class="invalid-feedback">
                                          Last name should only contain letters and spaces.
                                        </div>
                                    </div>
                                    
                                    <!-- Date of Birth -->
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="dob" value="<?= $guest['dob'] ?? '' ?>" required max="<?= date('Y-m-d'); ?>">
                                        <div class="invalid-feedback">
                                          Please provide a valid date of birth.
                                        </div>
                                    </div>
                                    
                                    <!-- Marital Status Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label">Marital Status <span class="text-danger">*</span></label>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle w-100" id="maritalStatusInput"
                                                value="<?= $guest['marital_status'] ?? '' ?>" placeholder="Select Status" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required>
                                            <input type="hidden" name="marital_status" id="maritalStatusHidden" value="<?= $guest['marital_status'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
                                                <div class="dropdown-item" data-value="Single">Single</div>
                                                <div class="dropdown-item" data-value="Married">Married</div>
                                                <div class="dropdown-item" data-value="Divorced">Divorced</div>
                                                <div class="dropdown-item" data-value="Widowed">Widowed</div>
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
                                            <input type="text" class="form-control dropdown-toggle w-100" id="motherTongueInput"
                                                value="<?= $guest['mother_tongue'] ?? '' ?>" placeholder="Select Language" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required>
                                            <input type="hidden" name="mother_tongue" id="motherTongueHidden" value="<?= $guest['mother_tongue'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
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
                                            </ul>
                                            <div class="invalid-feedback">
                                              Please select a mother tongue.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Occupation -->
                                    <div class="mb-3">
                                        <label class="form-label">Occupation</label>
                                        <input type="text" class="form-control" name="previous_occupation" value="<?= $guest['previous_occupation'] ?? '' ?>" placeholder="Enter Your Occupation" pattern="[A-Za-z\s]*">
                                        <div class="invalid-feedback">
                                          Occupation should only contain letters and spaces.
                                        </div>
                                    </div>
                                    
                                    <!-- Permanent Address -->
                                    <div class="mb-3">
                                        <label class="form-label">Permanent Address</label>
                                        <textarea class="form-control" name="permanent_address" placeholder="Type your Address Here"><?= $guest['permanent_address'] ?? '' ?></textarea>
                                    </div>
                                    
                                    <!-- ID Proof -->
                                    <div class="mb-3">
                                        <label class="form-label">ID Proof (Aadhaar/PAN/etc.)</label>
                                        <input type="file" name="id_proof" id="idProofUpload" class="form-control" accept=".jpg,.jpeg,.png,.pdf" data-max-size="5242880">
                                        <div class="invalid-feedback" id="idProofUploadError">
                                          Please upload a valid file (JPG, PNG, JPEG, PDF) under 5MB.
                                        </div>
                                        <?php if(!empty($guest['id_proof'])): ?>
                                            <div class="file-preview mt-2">
                                                <a href="<?= base_url('public/' . $guest['id_proof']) ?>" 
                                                   target="_blank"
                                                   class="text-success text-decoration-none">
                                                    <i class="bi bi-file-earmark-text"></i> View Current ID Proof
                                                </a>
                                                <input type="hidden" name="existing_id_proof" value="<?= $guest['id_proof'] ?>">
                                            </div>
                                        <?php else: ?>
                                            <div class="file-preview mt-2 d-none" id="idProofPreview">
                                                <div class="file-info" id="idProofInfo"></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                    <button type="button" class="btn btn-primary next-tab" data-target="#pills-notifications-tab">
                                        Next <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>
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
                                <h4 class="card-title"></h4>
                                <button type="button" id="add-guardian-btn" class="btn btn-primary">+ Add Guardian</button>
                            </div>
                            
                            <div id="guardian-forms-container">
                                <?php foreach ($guardians as $index => $guardian): ?>
                                <div class="guardian-form mb-4 p-3 border rounded">
                                    <input type="hidden" name="guardians[<?= $index ?>][guardian_id]" value="<?= $guardian['guardian_id'] ?? '' ?>">
                                    <input type="hidden" name="guardians[<?= $index ?>][delete]" value="0" class="delete-flag">
                                  
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Full Name -->
                                            <div class="mb-3">
                                                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="guardians[<?= $index ?>][full_name]" 
                                                    value="<?= $guardian['full_name'] ?? '' ?>" placeholder="Enter Guardian Name" required pattern="[A-Za-z\s]{2,}">
                                                <div class="invalid-feedback">
                                                  Please provide a valid full name (minimum 2 letters, no numbers or special characters).
                                                </div>
                                            </div>
                                            
                                            <!-- Contact Number -->
                                            <div class="mb-3">
                                                <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="guardians[<?= $index ?>][contact_number]" 
                                                    value="<?= $guardian['contact_number'] ?? '' ?>" placeholder="Enter Mobile Number" required pattern="[0-9]{10}">
                                                <div class="invalid-feedback">
                                                  Please provide a valid 10-digit mobile number.
                                                </div>
                                            </div>
                                            
                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="guardians[<?= $index ?>][email]" 
                                                    value="<?= $guardian['email'] ?? '' ?>" placeholder="Enter Email Id">
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
                                                    <input type="text" class="form-control dropdown-toggle w-100" 
                                                        value="<?= $guardian['relationship_with_guest'] ?? '' ?>" 
                                                        placeholder="Select Relationship" data-bs-toggle="dropdown" 
                                                        aria-expanded="false" autocomplete="off" readonly required>
                                                    <input type="hidden" name="guardians[<?= $index ?>][relationship_with_guest]" 
                                                        value="<?= $guardian['relationship_with_guest'] ?? '' ?>">
                                                    <ul class="dropdown-menu p-2 w-100">
                                                        <div class="dropdown-item" data-value="Son">Son</div>
                                                        <div class="dropdown-item" data-value="Daughter">Daughter</div>
                                                        <div class="dropdown-item" data-value="Spouse">Spouse</div>
                                                        <div class="dropdown-item" data-value="Brother">Brother</div>
                                                        <div class="dropdown-item" data-value="Sister">Sister</div>
                                                        <div class="dropdown-item" data-value="Nephew">Nephew</div>
                                                        <div class="dropdown-item" data-value="Niece">Niece</div>
                                                        <div class="dropdown-item" data-value="Friend">Friend</div>
                                                        <div class="dropdown-item" data-value="Other">Other</div>
                                                    </ul>
                                                    <div class="invalid-feedback">
                                                      Please select a relationship.
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Alternate Contact Number -->
                                            <div class="mb-3">
                                                <label class="form-label">Alternate Contact Number</label>
                                                <input type="text" class="form-control" name="guardians[<?= $index ?>][alternate_contact]" 
                                                    value="<?= $guardian['alternate_contact'] ?? '' ?>" placeholder="Enter Mobile Number" pattern="[0-9]{10}">
                                                <div class="invalid-feedback">
                                                  Please provide a valid 10-digit mobile number.
                                                </div>
                                            </div>
                                            
                                            <!-- ID Proof -->
                                            <div class="mb-3">
                                                <label class="form-label">ID Proof (Aadhaar/PAN/etc.)</label>
                                                <input type="file" name="guardians[<?= $index ?>][id_proof]" class="form-control guardian-id-proof" accept=".jpg,.jpeg,.png,.pdf" data-max-size="5242880">
                                                <div class="invalid-feedback guardian-id-proof-error">
                                                  Please upload a valid file (JPG, PNG, JPEG, PDF) under 5MB.
                                                </div>
                                                <?php if(!empty($guardian['id_proof'])): ?>
                                                    <div class="file-preview mt-2">
                                                        <a href="<?= base_url('public/' . $guardian['id_proof']) ?>" 
                                                           target="_blank"
                                                           class="text-primary text-decoration-none">
                                                            <i class="bi bi-file-earmark-text"></i> View Current ID Proof
                                                        </a>
                                                        <input type="hidden" name="guardians[<?= $index ?>][existing_id_proof]" value="<?= $guardian['id_proof'] ?>">
                                                    </div>
                                                <?php else: ?>
                                                    <div class="file-preview mt-2 d-none guardian-id-proof-preview">
                                                        <div class="file-info guardian-id-proof-info"></div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Current Address -->
                                    <div class="mb-3">
                                        <label class="form-label">Current Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="guardians[<?= $index ?>][current_address]" placeholder="Type your Address Here" required minlength="10"><?= $guardian['current_address'] ?? '' ?></textarea>
                                        <div class="invalid-feedback">
                                          Please provide a valid address (minimum 10 characters).
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-end gap-3 mt-3">
                                        <?php if ($index !== 0): ?>
                                            <button type="button" class="btn btn-danger remove-guardian-btn">
                                                Remove Guardian
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4 gap-3">
                                <button type="button" class="btn btn-secondary prev-tab" data-target="#pills-account-tab">
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
            <div class="row">
                <div class="col-12">
                    <div class="card w-100 border position-relative overflow-hidden mb-0">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <label class="form-label">Known Medical Conditions</label>
                                            <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#addMedicalConditionModal">
                                                <i class="bi bi-plus"></i> Add New
                                            </button>
                                        </div>
                                        <select multiple class="form-select" name="known_conditions[]" style="height: 120px;">
                                            <?php 
                                            // Get currently selected conditions
                                            $selectedConditions = !empty($medical['known_conditions']) ? 
                                                                explode(',', $medical['known_conditions']) : [];
                                            // Default options
                                            $default_conditions = ['diabetes', 'hypertension', 'alzheimer', 'heart-disease', 
                                                                   'arthritis', 'osteoporosis', 'dementia', 'parkinson'];
                                            
                                            // Combine default options with any conditions from this record
                                            $allOptions = array_unique(array_merge($default_conditions, $selectedConditions));
                                            sort($allOptions);
                                            
                                            foreach ($allOptions as $option):
                                                $displayText = ucwords(str_replace('-', ' ', $option));
                                            ?>
                                                <option value="<?= $option ?>" <?= in_array($option, $selectedConditions) ? 'selected' : '' ?>>
                                                    <?= $displayText ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Recent Surgeries</label>
                                        <textarea class="form-control" name="recent_surgeries" rows="3" placeholder="List any recent surgeries with dates"><?= $medical['recent_surgeries'] ?? '' ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Doctor's Information</label>
                                        <textarea class="form-control" name="doctor_info" rows="3" placeholder="Dr.Name, Phone, Hospital/clinic"><?= $medical['doctor_info'] ?? '' ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Medical Reports Upload</label>
                                        <input type="file" name="medical_reports" id="medicalReportsUpload" class="form-control" accept=".jpg,.jpeg,.png,.pdf" data-max-size="10485760">
                                        <div class="invalid-feedback" id="medicalReportsUploadError">
                                          Please upload a valid file (JPG, PNG, JPEG, PDF) under 10MB.
                                        </div>
                                        <?php if(!empty($medical['medical_reports'])): ?>
                                            <div class="file-preview mt-2">
                                                <a href="<?= base_url('public/' . $medical['medical_reports']) ?>" 
                                                   target="_blank"
                                                   class="text-success text-decoration-none">
                                                    <i class="bi bi-file-earmark-medical"></i> View Current Reports
                                                </a>
                                                <input type="hidden" name="existing_medical_reports" value="<?= $medical['medical_reports'] ?>">
                                            </div>
                                        <?php else: ?>
                                            <div class="file-preview mt-2 d-none" id="medicalReportsPreview">
                                                <div class="file-info" id="medicalReportsInfo"></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <label class="form-label">Disabilities / Mobility Issues</label>
                                            <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#addDisabilityModal">
                                                <i class="bi bi-plus"></i> Add New
                                            </button>
                                        </div>
                                        <select multiple class="form-select" name="disabilities[]" style="height: 120px;">
                                            <?php 
                                            // Get currently selected disabilities
                                            $selectedDisabilities = !empty($medical['disabilities']) ? 
                                                                  explode(',', $medical['disabilities']) : [];
                                            
                                            // Default options
                                            $defaultOptions = ['wheelchair', 'walker', 'hearing-impaired', 'vision-impaired', 
                                                              'mobility-limited', 'speech-impaired', 'cognitive-impaired'];
                                            
                                            // Combine default options with any disabilities from this record
                                            $allOptions = array_unique(array_merge($defaultOptions, $selectedDisabilities));
                                            sort($allOptions);
                                            
                                            foreach ($allOptions as $option):
                                                $displayText = ucwords(str_replace('-', ' ', $option));
                                            ?>
                                                <option value="<?= $option ?>" <?= in_array($option, $selectedDisabilities) ? 'selected' : '' ?>>
                                                    <?= $displayText ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Ongoing Medication</label>
                                        <textarea class="form-control" name="ongoing_medication" rows="3" placeholder="List Current medications and dosages"><?= $medical['ongoing_medication'] ?? '' ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Allergies</label>
                                        <textarea class="form-control" name="allergies" rows="3" placeholder="List any known allergies"><?= $medical['allergies'] ?? '' ?></textarea>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Blood Group</label>
                                        <select class="form-select" name="blood_group">
                                            <option value="">Select Blood Group</option>
                                            <?php 
                                            $bloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
                                            foreach ($bloodGroups as $group): ?>
                                                <option value="<?= $group ?>" <?= ($medical['blood_group'] ?? '') === $group ? 'selected' : '' ?>>
                                                    <?= $group ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4 gap-3">
                                <button type="button" class="btn btn-secondary prev-tab" data-target="#pills-notifications-tab">
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
            <div class="row">
                <div class="col-12">
                    <div class="card w-100 border position-relative overflow-hidden mb-0">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Favourite Foods</label>
                                        <select multiple class="form-select" name="fav_foods[]" style="height: 120px;">
                                            <?php 
                                            $favFoods = explode(',', $preferences['fav_foods'] ?? '');
                                            $options = ['rice', 'roti', 'dal', 'vegetables', 'fruits', 'sweets', 'tea', 'coffee', 'milk', 'yogurt', 'fish', 'chicken', 'mutton'];
                                            ?>
                                            <?php foreach ($options as $option): ?>
                                                <option value="<?= $option ?>" <?= in_array($option, $favFoods) ? 'selected' : '' ?>>
                                                    <?= ucfirst($option) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Hobbies / Interests</label>
                                        <select multiple class="form-select" name="hobbies[]" style="height: 120px;">
                                            <?php 
                                            $hobbies = explode(',', $preferences['hobbies'] ?? '');
                                            $options = ['reading', 'music', 'tv', 'gardening', 'cooking', 'walking', 'yoga', 'prayer', 'games', 'crafts', 'socializing'];
                                            ?>
                                            <?php foreach ($options as $option): ?>
                                                <option value="<?= $option ?>" <?= in_array($option, $hobbies) ? 'selected' : '' ?>>
                                                    <?= ucfirst($option) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Daily Routine Preferences</label>
                                        <select multiple class="form-select" name="routine_preferences[]" style="height: 120px;">
                                            <?php 
                                            $routines = explode(',', $preferences['routine_preferences'] ?? '');
                                            $options = ['early-riser', 'late-riser', 'tea-morning', 'coffee-morning', 'afternoon-nap', 'evening-tea', 'early-dinner', 'late-dinner', 'early-sleep', 'late-sleep'];
                                            ?>
                                            <?php foreach ($options as $option): ?>
                                                <option value="<?= $option ?>" <?= in_array($option, $routines) ? 'selected' : '' ?>>
                                                    <?= ucwords(str_replace('-', ' ', $option)) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Disliked Foods</label>
                                        <select multiple class="form-select" name="disliked_foods[]" style="height: 120px;">
                                            <?php 
                                            $dislikedFoods = explode(',', $preferences['disliked_foods'] ?? '');
                                            $options = ['spicy', 'oily', 'cold', 'dairy', 'meat', 'fish', 'eggs', 'onion', 'garlic', 'bitter', 'sour', 'sweets'];
                                            ?>
                                            <?php foreach ($options as $option): ?>
                                                <option value="<?= $option ?>" <?= in_array($option, $dislikedFoods) ? 'selected' : '' ?>>
                                                    <?= ucfirst($option) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Religious or Cultural Practices</label>
                                        <select multiple class="form-select" name="religious_practices[]" style="height: 120px;">
                                            <?php 
                                            $practices = explode(',', $preferences['religious_practices'] ?? '');
                                            $options = ['daily-prayer', 'temple-visit', 'fasting', 'festivals', 'vegetarian', 'no-beef', 'no-pork', 'halal', 'kosher', 'meditation'];
                                            ?>
                                            <?php foreach ($options as $option): ?>
                                                <option value="<?= $option ?>" <?= in_array($option, $practices) ? 'selected' : '' ?>>
                                                    <?= ucwords(str_replace('-', ' ', $option)) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options</small>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Remarks (Optional)</label>
                                        <textarea class="form-control" name="remarks" rows="4"><?= $preferences['remarks'] ?? '' ?></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4 gap-3">
                                <button type="button" class="btn btn-secondary prev-tab" data-target="#pills-bills-tab">
                                    <i class="bi bi-arrow-left"></i> Previous
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Update Information
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Medical Condition Modal -->
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
                <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Disability Modal -->
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
  <script src="<?= base_url(); ?>/public/dist/assets/js/frontend-landingpage/homepage.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Form validation
  const form = document.getElementById('guestEditForm');
  
  // Custom validation for dropdowns
  const dropdownInputs = document.querySelectorAll('.dropdown-toggle[readonly]');
  dropdownInputs.forEach(input => {
    input.addEventListener('click', function() {
      this.classList.remove('is-invalid');
    });
  });
  
  // File validation functions
  function validateFileInput(fileInput) {
    const maxSize = parseInt(fileInput.getAttribute('data-max-size')) || 5242880; // Default 5MB
    const errorElement = document.getElementById(fileInput.id + 'Error') || 
                         fileInput.parentElement.querySelector('.invalid-feedback');
    
    if (!fileInput.files || fileInput.files.length === 0) {
      // File inputs are optional in edit mode
      fileInput.classList.remove('is-invalid');
      fileInput.classList.add('is-valid');
      return true;
    }
    
    const file = fileInput.files[0];
    const fileType = file.type;
    const fileName = file.name.toLowerCase();
    const fileSize = file.size;
    
    // Check file size
    if (fileSize > maxSize) {
      const maxSizeMB = maxSize / 1048576;
      errorElement.textContent = `File size must be less than ${maxSizeMB}MB.`;
      fileInput.classList.add('is-invalid');
      fileInput.classList.remove('is-valid');
      return false;
    }
    
    // Check file type based on accept attribute
    if (fileInput.hasAttribute('accept')) {
      const acceptedTypes = fileInput.getAttribute('accept').split(',');
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
        errorElement.textContent = 'Please upload a valid file type (' + fileInput.getAttribute('accept') + ').';
        fileInput.classList.add('is-invalid');
        fileInput.classList.remove('is-valid');
        return false;
      }
    }
    
    // Show file preview if it's an image
    if (fileInput.id === 'photoUpload' && file.type.startsWith('image/')) {
      showImagePreview(fileInput, file);
    } else {
      showFileInfo(fileInput, file);
    }
    
    fileInput.classList.remove('is-invalid');
    fileInput.classList.add('is-valid');
    return true;
  }
  
  function showImagePreview(fileInput, file) {
    const previewDiv = document.getElementById('photoPreview');
    const previewImg = document.getElementById('photoPreviewImg');
    const infoDiv = document.getElementById('photoInfo');
    
    if (previewDiv && previewImg && infoDiv) {
      const reader = new FileReader();
      reader.onload = function(e) {
        previewImg.src = e.target.result;
        previewImg.classList.remove('d-none');
        infoDiv.textContent = `${file.name} (${formatFileSize(file.size)})`;
        previewDiv.classList.remove('d-none');
      };
      reader.readAsDataURL(file);
    }
  }
  
  function showFileInfo(fileInput, file) {
    let previewDiv, infoDiv;
    
    if (fileInput.id === 'idProofUpload') {
      previewDiv = document.getElementById('idProofPreview');
      infoDiv = document.getElementById('idProofInfo');
    } else if (fileInput.id === 'medicalReportsUpload') {
      previewDiv = document.getElementById('medicalReportsPreview');
      infoDiv = document.getElementById('medicalReportsInfo');
    } else if (fileInput.classList.contains('guardian-id-proof')) {
      previewDiv = fileInput.parentElement.querySelector('.guardian-id-proof-preview');
      infoDiv = fileInput.parentElement.querySelector('.guardian-id-proof-info');
    }
    
    if (previewDiv && infoDiv) {
      infoDiv.textContent = `${file.name} (${formatFileSize(file.size)})`;
      previewDiv.classList.remove('d-none');
    }
  }
  
  function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
  }
  
  // Add file validation event listeners
  const fileInputs = document.querySelectorAll('input[type="file"]');
  fileInputs.forEach(input => {
    input.addEventListener('change', function() {
      validateFileInput(this);
    });
  });
  
  // Tab navigation with validation
  const nextButtons = document.querySelectorAll('.next-tab');
  const prevButtons = document.querySelectorAll('.prev-tab');
  
  nextButtons.forEach(button => {
    button.addEventListener('click', function() {
      const target = this.getAttribute('data-target');
      const currentTab = this.closest('.tab-pane');
      
      // Validate current tab before proceeding
      if(validateTab(currentTab.id)) {
        const tab = document.querySelector(target);
        const tabInstance = new bootstrap.Tab(tab);
        tabInstance.show();
      }
    });
  });
  
  prevButtons.forEach(button => {
    button.addEventListener('click', function() {
      const target = this.getAttribute('data-target');
      const tab = document.querySelector(target);
      const tabInstance = new bootstrap.Tab(tab);
      tabInstance.show();
    });
  });
  
  // Custom dropdown functionality
  document.querySelectorAll('.dropdown-item').forEach(item => {
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
  
  // Initialize dropdown values
  function initializeDropdown(displayId, hiddenId) {
    const displayElem = document.getElementById(displayId);
    const hiddenElem = document.getElementById(hiddenId);
    if (displayElem && hiddenElem && hiddenElem.value) {
      displayElem.value = hiddenElem.value;
    }
  }
  
  // Initialize all dropdowns
  initializeDropdown('genderInput', 'genderHidden');
  initializeDropdown('religionInput', 'religionHidden');
  initializeDropdown('educationInput', 'educationHidden');
  initializeDropdown('maritalStatusInput', 'maritalStatusHidden');
  initializeDropdown('motherTongueInput', 'motherTongueHidden');
  
  // Guardian form management
  const addGuardianBtn = document.getElementById('add-guardian-btn');
  if(addGuardianBtn) {
    addGuardianBtn.addEventListener('click', function() {
      const container = document.getElementById('guardian-forms-container');
      const count = container.querySelectorAll('.guardian-form').length;
      const newForm = container.querySelector('.guardian-form').cloneNode(true);
      
      // Update all names and IDs
      newForm.innerHTML = newForm.innerHTML.replace(/guardians\[\d+\]/g, `guardians[${count}]`);
      
      // Clear input values
      newForm.querySelectorAll('input, textarea, select').forEach(input => {
        if (input.type !== 'hidden') {
          input.value = '';
        }
        input.classList.remove('is-invalid', 'is-valid');
      });
      
      // Clear relationship dropdown display
      const relationshipDisplay = newForm.querySelector('.dropdown input[type="text"]');
      if (relationshipDisplay) relationshipDisplay.value = '';
      
      // Clear hidden relationship value
      const relationshipHidden = newForm.querySelector('.dropdown input[type="hidden"]');
      if (relationshipHidden) relationshipHidden.value = '';
      
      // Clear ID proof section
      const idProofSection = newForm.querySelector('.mt-2');
      if (idProofSection) idProofSection.remove();
      
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
      const removeBtn = newForm.querySelector('.remove-guardian-btn');
      if (removeBtn) {
        removeBtn.style.display = 'block';
        removeBtn.addEventListener('click', function() {
          newForm.remove();
        });
      }
      
      container.appendChild(newForm);
    });
  }
  
  // Remove guardian
  document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-guardian-btn')) {
      const form = e.target.closest('.guardian-form');
      const guardianIdInput = form.querySelector('input[name$="[guardian_id]"]');
      const guardianId = guardianIdInput ? guardianIdInput.value : null;
      const deleteFlag = form.querySelector('.delete-flag');
      
      if (guardianId) {
        // Mark for deletion but keep in DOM for form submission
        deleteFlag.value = '1';
        form.style.opacity = '0.5';
        form.style.border = '1px dashed red';
      } else {
        // New guardian, just remove from DOM
        form.remove();
      }
    }
  });
  
  // Form submission
  form.addEventListener('submit', function(event) {
    // Validate all tabs before submission
    let allValid = true;
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabPanes.forEach(tab => {
      if (!validateTab(tab.id)) {
        allValid = false;
        // Switch to the first invalid tab
        if (allValid === false) {
          const tabId = tab.id;
          const tabButton = document.querySelector(`button[data-bs-target="#${tabId}"]`);
          if (tabButton) {
            new bootstrap.Tab(tabButton).show();
          }
        }
      }
    });
    
    if (!allValid) {
      event.preventDefault();
      event.stopPropagation();
      
      // Show error message
      alert('Please fix the validation errors before submitting the form.');
    }
    
    form.classList.add('was-validated');
  });
  
  // Validation functions
  function validateTab(tabId) {
    const tab = document.getElementById(tabId);
    let isValid = true;
    
    // Validate all required fields in this tab
    const requiredInputs = tab.querySelectorAll('input[required], select[required], textarea[required]');
    requiredInputs.forEach(input => {
      if (!validateField(input)) {
        isValid = false;
        // Add invalid class if not already present
        input.classList.add('is-invalid');
      } else {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
      }
    });
    
    // Validate file inputs in this tab
    const fileInputs = tab.querySelectorAll('input[type="file"]');
    fileInputs.forEach(input => {
      if (!validateFileInput(input)) {
        isValid = false;
      }
    });
    
    return isValid;
  }
  
  function validateField(field) {
    // Skip validation for deleted guardians
    if (field.closest('.guardian-form')) {
      const deleteFlag = field.closest('.guardian-form').querySelector('.delete-flag');
      if (deleteFlag && deleteFlag.value === '1') {
        return true; // Skip validation for deleted items
      }
    }
    
    // Special validation for dropdowns
    if (field.classList.contains('dropdown-toggle') && field.hasAttribute('readonly')) {
      const hiddenInput = field.parentElement.querySelector('input[type="hidden"]');
      return hiddenInput && hiddenInput.value !== '';
    }
    
    // Special validation for textareas
    if (field.tagName === 'TEXTAREA') {
      return field.value.length >= parseInt(field.getAttribute('minlength') || 0);
    }
    
    // Special validation for date inputs
    if (field.type === 'date') {
      return field.value !== '';
    }
    
    // Standard HTML5 validation
    return field.checkValidity();
  }
  
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

  // Disabilities Modal
  const disabilityModal = new bootstrap.Modal(document.getElementById('addDisabilityModal'));
  const saveDisabilityBtn = document.getElementById('saveDisability');
  
  // Get the select element by its name attribute
  const disabilitiesSelect = document.querySelector('select[name="disabilities[]"]');
  
  saveDisabilityBtn.addEventListener('click', function() {
    const newDisability = document.getElementById('newDisability').value.trim();
    if (newDisability) {
      // Create a sanitized value (lowercase, hyphen-separated)
      const sanitizedValue = newDisability.toLowerCase().replace(/\s+/g, '-');
      
      // Check if option already exists
      const exists = Array.from(disabilitiesSelect.options).some(
        option => option.value === sanitizedValue
      );
      
      if (!exists) {
        const newOption = new Option(newDisability, sanitizedValue);
        disabilitiesSelect.add(newOption);
        
        // Select the new option by default
        newOption.selected = true;
      }
      
      // Clear and close the modal
      document.getElementById('newDisability').value = '';
      disabilityModal.hide();
    }
  });

  // Clear modal inputs when they're closed
  document.getElementById('addMedicalConditionModal').addEventListener('hidden.bs.modal', function() {
    document.getElementById('newMedicalCondition').value = '';
  });
  
  document.getElementById('addDisabilityModal').addEventListener('hidden.bs.modal', function() {
    document.getElementById('newDisability').value = '';
  });
  
  // Add real-time validation for fields
  const fieldsToValidate = document.querySelectorAll('input, textarea, select');
  fieldsToValidate.forEach(field => {
    field.addEventListener('input', function() {
      if (this.checkValidity()) {
        this.classList.remove('is-invalid');
        this.classList.add('is-valid');
      } else {
        this.classList.remove('is-valid');
      }
    });
    
    field.addEventListener('blur', function() {
      if (this.hasAttribute('required') && !this.checkValidity()) {
        this.classList.add('is-invalid');
      }
    });
  });
});
</script>
</body>
</html>
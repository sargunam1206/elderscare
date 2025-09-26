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

  <!-- <style>
    body {
      background-color: #f4f6f9;
      font-size: 14px;
    }

    .form-label {
      font-weight: bold;
    }

    .form-section {
      border: 1px solid #dee2e6;
      padding: 15px;
      background: white;
      margin-bottom: 20px;
    }

    .header {
      /* background-color: #e9ecef; */
      padding: 10px;
      font-weight: bold;
      font-size: 16px;
    }

    .menu-bar {
      background-color: #dee2e6;
      padding: 10px;
    }

    .menu-bar button {
      margin-right: 10px;
    }

    .d-flex>div {
      margin-right: 0 !important;
      border-radius: 0;
    }
  </style> -->
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
</style>
</head>

<body>
  <?= view('layout/head') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>
  <!-- ------------------------------------- -->
  <!-- Top Bar Start -->
  <!-- ------------------------------------- -->


  <!-- ------------------------------------- -->
  <!-- Top Bar End -->
  <!-- ------------------------------------- -->

  <!-- -------------------------------------------- -->
  <!-- Header start -->
  <!-- -------------------------------------------- -->
  <!-- <header class="header-fp p-0 w-100 bg-light-gray">
    <nav class="navbar navbar-expand-lg py-10">
      <div class="container-fluid d-flex justify-content-between">
        <a href="../main/frontend-landingpage.html" class="text-nowrap logo-img">
          <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg" alt="Logo" />
        </a>
        <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <i class="ti ti-menu-2 fs-8"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 gap-xl-7 gap-8 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../main/frontend-aboutpage.html">About
                Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../main/frontend-blogpage.html">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link fs-4 fw-bold text-dark link-primary d-flex gap-2"
                href="../main/frontend-portfoliopage.html">Portfolio
                <span class="badge text-primary bg-primary-subtle fs-2 fw-bolder hstack">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../main/index.html">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary"
                href="../main/frontend-pricingpage.html">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary"
                href="../main/frontend-contactpage.html">Contact</a>
            </li>
          </ul>
          <a href="../main/authentication-login.html" class="btn btn-dark btn-sm py-2 px-9">Log In</a>
        </div>
      </div>
    </nav>
  </header> -->
  <!-- -------------------------------------------- -->
  <!-- Header End -->
  <!-- -------------------------------------------- -->

  <!-- ------------------------------------- -->
  <!-- Responsive Header Start -->
  <!-- ------------------------------------- -->
  <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <a href="../main/frontend-landingpage.html" class="text-nowrap logo-img">
        <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg" alt="Logo" />
      </a>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <a href="../main/frontend-aboutpage.html" class="px-0 fs-4 d-block text-dark link-primary w-100 py-2">
            About Us
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-blogpage.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Blog
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-portfoliopage.html"
            class="px-0 fs-4 d-flex align-items-center justify-content-start gap-2 w-100 py-2 text-dark link-primary">
            Portfolio
            <span class="badge text-primary bg-primary-subtle fs-2 fw-bolder hstack">New</span>
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/index.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Dashboard
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-pricingpage.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Pricing
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-contactpage.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Contact
          </a>
        </li>
        <li class="mt-3">
          <a href="../main/authentication-login.html" class="btn btn-primary w-100">Log In</a>
        </li>
      </ul>
    </div>
  </div> -->
  <!-- ------------------------------------- -->
  <!-- Responsive Header End -->
  <!-- ------------------------------------- -->


<div class="main-wrapper overflow-hidden">
    <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fs-7">Edit Guest </h5>
        <a href="<?= base_url('viewguestinfo') ?>" class="btn btn-primary">
            <i class="ti ti-list me-2"></i>
            Guest List
        </a>
    </div>
    </div>
  <div class="card">
    <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
      <!-- Tab headers remain the same -->
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
<form id="guestEditForm" method="post" action="<?= base_url('updateguestinfo/'.$guest['guest_id']) ?>" enctype="multipart/form-data">
    <div class="tab-content" id="pills-tabContent">
        <!-- Personal Info Tab -->
        <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
            <div class="row">
                <div class="col-12">
                    <div class="card w-100 border position-relative overflow-hidden mb-0">
                        <div class="card-body p-4">
                            <!-- <h4 class="card-title">Edit Guest Personal Information</h4> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" value="<?= $guest['first_name'] ?? '' ?>" required>
                                    </div>
                                    
                                    <!-- Gender Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle w-100" id="genderInput"
                                                value="<?= $guest['gender'] ?? '' ?>" placeholder="Select Gender" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly>
                                            <input type="hidden" name="gender" id="genderHidden" value="<?= $guest['gender'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
                                                <div class="dropdown-item" data-value="Male">Male</div>
                                                <div class="dropdown-item" data-value="Female">Female</div>
                                                <div class="dropdown-item" data-value="Other">Other</div>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- Religion Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label">Religion</label>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle w-100" id="religionInput"
                                                value="<?= $guest['religion'] ?? '' ?>" placeholder="Select Religion" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly>
                                            <input type="hidden" name="religion" id="religionHidden" value="<?= $guest['religion'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
                                                <div class="dropdown-item" data-value="Hinduism">Hindu</div>
                                                <div class="dropdown-item" data-value="Islam">Islam</div>
                                                <div class="dropdown-item" data-value="Christianity">Christian</div>
                                                <div class="dropdown-item" data-value="Sikhism">Sikhism</div>
                                                <div class="dropdown-item" data-value="Buddhism">Buddhism</div>
                                                <div class="dropdown-item" data-value="Jainism">Jainism</div>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- Education Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label">Education</label>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle w-100" id="educationInput"
                                                value="<?= $guest['education_level'] ?? '' ?>" placeholder="Select Education" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly>
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
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Current Address</label>
                                        <textarea class="form-control" name="current_address"><?= $guest['current_address'] ?? '' ?></textarea>
                                    </div>
                                     <div class="mb-3">
                          <label class="form-label">Contact Number</label>
                          <input type="text" class="form-control" name="contact" value="<?= $guest['contact'] ?? '' ?>" placeholder="Enter Mobile Number" >
                        </div>
                                    <div class="mb-3">
                                        <label class="form-label">Upload Photo</label>
                                        <input type="file" class="form-control" name="photo_upload">
                                        <?php if (!empty($guest['photo_upload'])): ?>
                                            <div class="mt-2">
                                                <!-- <img src="<?= base_url($guest['photo_upload']) ?>" width="100" class="img-thumbnail"> -->
                                                <a href="<?= base_url('public/' . $guest['photo_upload']) ?>" 
                       target="_blank"
                       class="text-success text-decoration-none">
                        <i class="bi bi-file-earmark-text"></i> View Current File
                    </a>
                    <input type="hidden" name="photo_upload" value="<?= $guest['photo_upload'] ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                         
                                
                                <div class="col-lg-6">
                                    <div class="mb-3">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="last_name" value="<?= $guest['last_name'] ?? '' ?>" placeholder="Enter Your Last Name" >
                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="<?= $guest['dob'] ?? '' ?>">
                                    </div>
                                    
                                    <!-- Marital Status Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label">Marital Status</label>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle w-100" id="maritalStatusInput"
                                                value="<?= $guest['marital_status'] ?? '' ?>" placeholder="Select Status" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly>
                                            <input type="hidden" name="marital_status" id="maritalStatusHidden" value="<?= $guest['marital_status'] ?? '' ?>">
                                            <ul class="dropdown-menu p-2 w-100">
                                                <div class="dropdown-item" data-value="Single">Single</div>
                                                <div class="dropdown-item" data-value="Married">Married</div>
                                                <div class="dropdown-item" data-value="Divorced">Divorced</div>
                                                <div class="dropdown-item" data-value="Widowed">Widowed</div>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- Mother Tongue Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label">Mother Tongue</label>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle w-100" id="motherTongueInput"
                                                value="<?= $guest['mother_tongue'] ?? '' ?>" placeholder="Select Language" 
                                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly>
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
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Occupation</label>
                                        <input type="text" class="form-control" name="previous_occupation" value="<?= $guest['previous_occupation'] ?? '' ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Permanent Address</label>
                                        <textarea class="form-control" name="permanent_address"><?= $guest['permanent_address'] ?? '' ?></textarea>
                                    </div>
                                   <div class="mb-3">
    <label class="form-label">ID Proof (Aadhaar/PAN/etc.)</label>
    <input type="file" name="id_proof" class="form-control">
    <?php if(!empty($guest['id_proof'])): ?>
        <div class="mt-2">
            <a href="<?= base_url('public/' . $guest['id_proof']) ?>" 
               target="_blank"
               class="text-success text-decoration-none">
                <i class="bi bi-file-earmark-text"></i> View Current ID Proof
            </a>
            <input type="hidden" name="id_proof" value="<?= $guest['id_proof'] ?>">
            
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
                                            <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="guardians[<?= $index ?>][full_name]" 
                                                    value="<?= $guardian['full_name'] ?? '' ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" name="guardians[<?= $index ?>][contact_number]" 
                                                    value="<?= $guardian['contact_number'] ?? '' ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="guardians[<?= $index ?>][email]" 
                                                    value="<?= $guardian['email'] ?? '' ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Relationship Dropdown -->
                                            <div class="mb-3">
                                                <label class="form-label">Relationship with Guest</label>
                                                <div class="dropdown">
                                                    <input type="text" class="form-control dropdown-toggle w-100" 
                                                        value="<?= $guardian['relationship_with_guest'] ?? '' ?>" 
                                                        placeholder="Select Relationship" data-bs-toggle="dropdown" 
                                                        aria-expanded="false" autocomplete="off" readonly>
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
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label">Alternate Contact Number</label>
                                                <input type="text" class="form-control" name="guardians[<?= $index ?>][alternate_contact]" 
                                                    value="<?= $guardian['alternate_contact'] ?? '' ?>">
                                            </div>
                                            <div class="mb-3">
    <label class="form-label">ID Proof (Aadhaar/PAN/etc.)</label>
    <input type="file" name="guardians[<?= $index ?>][id_proof]" class="form-control">
    <?php if(!empty($guardian['id_proof'])): ?>
        <div class="mt-2">
            <a href="<?= base_url('public/' . $guardian['id_proof']) ?>" 
               target="_blank"
               class="text-primary text-decoration-none">
                <i class="bi bi-file-earmark-text"></i> View Current ID Proof
            </a>
            <input type="hidden" name="guardians[<?= $index ?>][id_proof]" value="<?= $guardian['id_proof'] ?>">
           
        </div>
    <?php endif; ?>
</div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Current Address</label>
                                        <textarea class="form-control" name="guardians[<?= $index ?>][current_address]"><?= $guardian['current_address'] ?? '' ?></textarea>
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
                            <!-- <h6 class="card-title">Edit Medical History</h6> -->
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
                                        <textarea class="form-control" name="recent_surgeries" rows="3"><?= $medical['recent_surgeries'] ?? '' ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Doctor's Information</label>
                                        <textarea class="form-control" name="doctor_info" rows="3"><?= $medical['doctor_info'] ?? '' ?></textarea>
                                    </div>
                                   <div class="mb-3">
    <label class="form-label">Medical Reports Upload</label>
    <input type="file" name="medical_reports" class="form-control">
    <?php if(!empty($medical['medical_reports'])): ?>
        <div class="mt-2">
            <a href="<?= base_url('public/' . $medical['medical_reports']) ?>" 
               target="_blank"
               class="text-success text-decoration-none">
                <i class="bi bi-file-earmark-medical"></i> View Current Reports
            </a>
            <input type="hidden" name="medical_reports" value="<?= $medical['medical_reports'] ?>">
           
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
                                        <textarea class="form-control" name="ongoing_medication" rows="3"><?= $medical['ongoing_medication'] ?? '' ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Allergies</label>
                                        <textarea class="form-control" name="allergies" rows="3"><?= $medical['allergies'] ?? '' ?></textarea>
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
                            <!-- <h6 class="card-title">Edit Likes and Dislikes</h6> -->
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Disability Modal -->
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Edit Form -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize dropdown selections
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

    // Dropdown selection functionality
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function() {
            const dropdown = this.closest('.dropdown');
            const displayInput = dropdown.querySelector('.dropdown-toggle');
            const hiddenInput = dropdown.querySelector('input[type="hidden"]');
            const value = this.getAttribute('data-value');
            const text = this.textContent;
            
            displayInput.value = text;
            if (hiddenInput) {
                hiddenInput.value = value;
            }
        });
    });

   

    // Medical condition modal
    document.getElementById('saveMedicalCondition').addEventListener('click', function() {
        const newCondition = document.getElementById('newMedicalCondition').value.trim();
        if (newCondition) {
            const select = document.querySelector('select[name="known_conditions[]"]');
            const option = document.createElement('option');
            option.value = newCondition.toLowerCase().replace(/\s+/g, '-');
            option.textContent = newCondition;
            option.selected = true;
            select.appendChild(option);
            
            // Close modal
            bootstrap.Modal.getInstance(document.getElementById('addMedicalConditionModal')).hide();
            document.getElementById('newMedicalCondition').value = '';
        }
    });

    // Disability modal
    document.getElementById('saveDisability').addEventListener('click', function() {
        const newDisability = document.getElementById('newDisability').value.trim();
        if (newDisability) {
            const select = document.querySelector('select[name="disabilities[]"]');
            const option = document.createElement('option');
            option.value = newDisability.toLowerCase().replace(/\s+/g, '-');
            option.textContent = newDisability;
            option.selected = true;
            select.appendChild(option);
            
            // Close modal
            bootstrap.Modal.getInstance(document.getElementById('addDisabilityModal')).hide();
            document.getElementById('newDisability').value = '';
        }
    });

// Guardian management
let guardianCount = <?= count($guardians) ?>;
document.getElementById('add-guardian-btn').addEventListener('click', function() {
    const container = document.getElementById('guardian-forms-container');
    const templates = container.querySelectorAll('.guardian-form');
    const template = templates[templates.length - 1].cloneNode(true);
    
    // Clear ALL input values (including hidden and file inputs)
    template.querySelectorAll('input, textarea').forEach(input => {
        // Don't clear the hidden inputs that track existing files
        if (input.type !== 'hidden' || input.name.indexOf('[id_proof]') === -1) {
            input.value = '';
        }
    });
    
    // Clear relationship dropdown display
    const relationshipDisplay = template.querySelector('.dropdown input[type="text"]');
    if (relationshipDisplay) relationshipDisplay.value = '';
    
    // Update indexes
    const newIndex = guardianCount++;
    const newNamePrefix = `guardians[${newIndex}]`;
    
    // Update all input names
    template.querySelectorAll('[name^="guardians["]').forEach(el => {
        el.name = el.name.replace(/guardians\[\d+\]/, newNamePrefix);
    });
    
    // Show remove button// Ensure there's a remove button
let removeBtn = template.querySelector('.remove-guardian-btn');
if (!removeBtn) {
    // Create the button if it doesn't exist (like when cloning the first guardian)
    removeBtn = document.createElement('button');
    removeBtn.type = 'button';
    removeBtn.className = 'btn btn-danger remove-guardian-btn';
    removeBtn.textContent = 'Remove Guardian';

    // Find the correct container to place it in
    const actionRow = template.querySelector('.d-flex.justify-content-end.gap-3.mt-3');
    if (actionRow) {
        actionRow.appendChild(removeBtn);
    }
}

    
    // Reset ID proof section
    const idProofSection = template.querySelector('.mt-2');
    if (idProofSection) idProofSection.remove();
    
    container.appendChild(template);
    
    // Reinitialize any dropdowns or other JS functionality
    initializeRelationshipDropdowns(); // You'll need to define this function
});

// Remove guardian
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-guardian-btn')) {
        e.target.closest('.guardian-form').remove();
    }
});

// Function to initialize relationship dropdowns
function initializeRelationshipDropdowns() {
    document.querySelectorAll('.dropdown').forEach(dropdown => {
        const displayInput = dropdown.querySelector('input[type="text"]');
        const hiddenInput = dropdown.querySelector('input[type="hidden"]');
        const menuItems = dropdown.querySelectorAll('.dropdown-item');
        
        if (displayInput && hiddenInput) {
            displayInput.addEventListener('click', function(e) {
                e.preventDefault();
                // Toggle dropdown
            });
            
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    displayInput.value = this.textContent;
                    hiddenInput.value = this.getAttribute('data-value');
                });
            });
        }
    });
}

// Initialize dropdowns on page load
document.addEventListener('DOMContentLoaded', initializeRelationshipDropdowns);


// Remove guardian
// Remove guardian with improvements
document.addEventListener('click', function(e) {
    // Check if clicked element or its parent has the remove-guardian-btn class
    const removeBtn = e.target.closest('.remove-guardian-btn');
    if (!removeBtn) return;
    
    e.preventDefault();
    const form = removeBtn.closest('.guardian-form');
    if (!form) {
        console.error('Could not find guardian form element');
        return;
    }

    const guardianIdInput = form.querySelector('input[name$="[guardian_id]"]');
    const guardianId = guardianIdInput ? guardianIdInput.value : null;
    const deleteFlag = form.querySelector('.delete-flag');

    console.log('Remove button clicked. Guardian ID:', guardianId);

    // Confirm deletion for existing guardians
    if (guardianId && !confirm('Are you sure you want to remove this guardian?')) {
        console.log('Deletion cancelled by user');
        return;
    }

    if (guardianId) {
        console.log('Processing existing guardian deletion');
        if (!deleteFlag) {
            console.error('Delete flag input not found');
            return;
        }
        
        // Mark for deletion
        deleteFlag.value = '1';
        console.log('Set delete flag to 1 for guardian:', guardianId);

        // Visual feedback
        form.style.transition = 'all 0.3s ease';
        form.style.opacity = '0.5';
        form.style.border = '1px dashed red';
        
        setTimeout(() => {
            form.style.display = 'none';
            console.log('Form hidden for guardian:', guardianId);
        }, 300);
    } else {
        console.log('Processing new guardian removal');
        form.remove();
        console.log('Unsaved guardian form removed');
    }
});

    // Tab navigation
    document.querySelectorAll('.next-tab').forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            const tab = new bootstrap.Tab(document.querySelector(target));
            tab.show();
        });
    });

    document.querySelectorAll('.prev-tab').forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            const tab = new bootstrap.Tab(document.querySelector(target));
            tab.show();
        });
    });
});
</script>
</div>

<!-- JavaScript for tab navigation -->

  </div>
</div>
<!-- Add this JavaScript to handle the modal functionality -->

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
</body>

</html>
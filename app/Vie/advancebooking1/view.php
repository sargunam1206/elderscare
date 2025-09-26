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
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
      <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/globel.css">


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
</style>
<style>   
/* Top controls: Show entries + Search (single line, left-right) */
#form_inputs_wrapper > .dataTables_length,
#form_inputs_wrapper > .dataTables_filter {
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
#form_inputs_wrapper > .dataTables_info,
#form_inputs_wrapper > .dataTables_paginate {
  display: inline-block;
  vertical-align: middle;
  margin-top: 10px;
}

@media (max-width: 768px) {
  #form_inputs_wrapper {
    flex-direction: column;
    align-items: stretch;
  }

 
  
  #form_inputs_wrapper > .dataTables_info,
  #form_inputs_wrapper > .dataTables_paginate {
    width: 100%;
    text-align: center;
    margin: 5px 0;
  }

   /* Search box aligned to the right */
  #form_inputs_wrapper > .dataTables_filter {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    margin: 5px 0;
  }

  #form_inputs_wrapper .dataTables_filter {
    margin-left: 0;
  }
   #form_inputs_wrapper > .dataTables_length {
    display: none !important;
  }
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
   <!-- Header -->

  <!-- Mobile Menu -->


<!-- <script>
    document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(item => {
        item.addEventListener('click', function () {
            const arrow = this.querySelector('.menu-arrow');
            setTimeout(() => {
                if (this.classList.contains('collapsed')) {
                    arrow.textContent = '▶';
                } else {
                    arrow.textContent = '▼';
                }
            }, 200);
        });
    });
</script> -->

  
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

  <div class="">

    <!-- <div id="reservationForm"> -->
      <!-- Header -->
       <div class="card">
      <!-- <div class="header mt-3 mb-0">View Advance Booking</div> -->


      
       <div class="datatables">
                    <!-- start Add Row -->






                    <!-- end Row selection (multiple rows) -->
                    <!-- start Form Inputs -->
                    
                    <div class="p-3">

                      <!-- <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                   -->

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

                      
       

                <form method="post" action="<?= base_url('viewadvancebooking'); ?>" id="bookingForm">

                                  <div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0 fs-7"> <i class="bi bi-list-check text-success px-2"></i>Booking List</h5>
    <a href="<?= base_url('advancebooking'); ?>" class="btn btn-primary">+ Add Booking</a>
</div>
  <div class="row align-items-end mb-3">
  <!-- Filters Section -->
  <div class="col-12 col-md-6">
    <div class="row g-2">
      <!-- Room Type -->
      <div class="col-12 col-sm-6">
        <label class="form-label">Room Type</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100"
                 id="typeFilterDisplay" name="typeDisplay"
                 placeholder="Select Room Type"
                 data-bs-toggle="dropdown" readonly value="All" />
          <input type="hidden" name="type" id="typeFilter" value="all">
          <ul class="dropdown-menu p-2 w-100" aria-labelledby="typeFilterDisplay" style="max-height:150px;overflow-y:auto;">
            <div id="roomTypeLists">
              <div class="dropdown-item" data-value="all">All</div>
              <div class="dropdown-item" data-value="Garden View">Garden View</div>
              <div class="dropdown-item" data-value="North East view">North East View</div>
            </div>
          </ul>
        </div>
      </div>

      <!-- Booking Status -->
      <div class="col-12 col-sm-6">
        <label class="form-label">Booking Status</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100"
                 id="statusFilterDisplay" name="statusDisplay"
                 placeholder="Select Status"
                 data-bs-toggle="dropdown" readonly value="All" />
          <input type="hidden" name="status" id="statusFilter" value="all">
          <ul class="dropdown-menu p-2 w-100" aria-labelledby="statusFilterDisplay" style="max-height:200px;overflow-y:auto;">
            <div id="statusLists">
              <div class="dropdown-item" data-value="all">All</div>
              <div class="dropdown-item" data-value="Waiting List">Waiting List</div>
              <div class="dropdown-item" data-value="Confirmed">Confirmed</div>
              <div class="dropdown-item" data-value="checked_in">Check In</div>
              <div class="dropdown-item" data-value="checked_out">Check Out</div>
              <div class="dropdown-item" data-value="cancelled">Cancelled</div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Buttons Section -->
  <div class="col-12 col-md-6">
    <div class="d-flex flex-wrap gap-2 mt-1 mt-md-0">
      <button type="submit" name="filter" class="btn btn-primary">Filter</button>
      <button type="button" id="pdfButton" class="btn btn-success">PDF</button>
      <button type="submit" formaction="<?= base_url('advancebooking/export') ?>" class="btn btn-primary">Excel</button>
      <a href="<?= current_url() ?>" class="btn btn-secondary">Reset</a>
    </div>
  </div>
 
</div>



<!-- Rest of your table code remains the same -->



  

   
<!-- <h5>Advance Booking List</h5> -->
      



                        <!-- <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</a>
    </td> -->
                        <div class="table-responsive">

                          <table id="form_inputs"
                            class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                            <thead>
                              <tr>
                                <!-- <th><input type="checkbox" id="select_all"></th>  -->
                                <th style="width: 50px;">S.No</th>
                                <th style="width: 150px;">Booking No</th> <!-- Decreased width -->
                                <th style="width: 60%;">Type</th> <!-- Increased width -->
                                <th style="width: 60%;">Room No</th>
                                <th style="width: 60%;">Status</th>
                                <th style="width: 130px;">Actions</th> <!-- Decreased width -->
                              </tr>
                            </thead>
                            <tbody>

                              <?php $i = 1;
                              foreach ($adv as $booking):
                                // $base=base64_encode(base64_encode(base64_encode($booking['id'])));
                                ?>
                                <tr>


                                  <td><?= $i++; ?> </td>
                                  <td><?= $booking['booking_no']; ?></td>
                                  <td><?= $booking['type']; ?></td>
                                  <td><?= $booking['room']; ?></td>
                                  <!-- <td><?= $booking['status']; ?></td> -->
<td>
    <div class="dropdown d-inline-block">
        <?php
        $btnClass = 'btn-sm ';
        $displayStatus = $booking['status']; // Default display value
        $showDropdown = true; // Default to show dropdown
        
        // Set button class and display text
        switch(strtolower($booking['status'])) {
            case 'confirmed':
                $btnClass .= 'btn-success';
                $displayStatus = 'Confirmed';
                break;
            case 'occupied': // Handle Occupied status but show as Check In in UI
                $btnClass .= 'btn-primary';
                $displayStatus = 'Check In';
                break;
            case 'checked_in': // This might be used in tracking but not displayed
                $btnClass .= 'btn-primary';
                $displayStatus = 'Check In';
                break;
            case 'checked_out':
                $btnClass .= 'btn-info';
                $displayStatus = 'Check Out';
                $showDropdown = false; // Hide dropdown
                break;
            case 'cancelled':
                $btnClass .= 'btn-danger';
                $displayStatus = 'Cancelled';
                $showDropdown = false; // Hide dropdown
                break;
            default:
                $btnClass .= 'btn-warning';
                $displayStatus = $booking['status']; // Keep original for other statuses
        }
        ?>
        
        <?php if ($showDropdown): ?>
            <button class="btn <?= $btnClass ?> dropdown-toggle" 
                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    style="width: 120px; text-align: center;">
                <?= $displayStatus ?>
            </button>
            
            <ul class="dropdown-menu">
                <?php if (strcasecmp($booking['status'], 'Waiting List') == 0): ?>
                    <li>
                        <a class="dropdown-item change-status" href="#" 
                           data-status="confirmed" data-booking="<?= $booking['id'] ?>">
                            Confirm Booking
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item change-status" href="#" 
                           data-status="cancelled" data-booking="<?= $booking['id'] ?>" data-require-reason="true">
                            Cancel Booking
                        </a>
                    </li>
                    
                <?php elseif (strcasecmp($booking['status'], 'confirmed') == 0): ?>
                    <li>
                        <a class="dropdown-item change-status" href="#" 
                           data-status="checked_in" data-booking="<?= $booking['id'] ?>">
                            Check In
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item change-status" href="#" 
                           data-status="cancelled" data-booking="<?= $booking['id'] ?>" data-require-reason="true">
                            Cancel Booking
                        </a>
                    </li>
                    
                <?php elseif (strcasecmp($booking['status'], 'occupied') == 0 || strcasecmp($booking['status'], 'checked_in') == 0): ?>
                    <!-- Show Check Out option for both Occupied and checked_in statuses -->
                    <li>
                        <a class="dropdown-item change-status" href="#" 
                           data-status="checked_out" data-booking="<?= $booking['id'] ?>">
                            Check Out
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        <?php else: ?>
            <span class="btn <?= $btnClass ?>" style="width: 120px; display: inline-block; text-align: center;">
                <?= $displayStatus ?>
            </span>
        <?php endif; ?>
    </div>
</td>



                                  <td>
                                    </ /?=var_dump($booking['id']); ?>

                                    <!-- Update Button that triggers modal -->
                                   <a href="<?= base_url('editadvancebooking/'. $booking['id']) ?>" class="btn" style="color:blue">
    <i class="bi bi-pencil-square"></i>
</a>
                                    <a href="javascript:void(0)" class="btn " data-bs-toggle="modal"
                                      data-bs-target="#deleteConfirmationModal<?= $booking['id']; ?>">
                                      <i class="bi bi-trash text-danger"></i>
                                    </a>






                                    <!-- <a href="<//?= base_url('editassettype/'. $booking['id']); ?>" class="btn btn-info">Update</a> -->


                                    <!--a href="/assettype/delete/<//?= $booking['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>-->
                                  </td>
                                </tr>

                                <div class="modal fade" id="deleteConfirmationModal<?= $booking['id']; ?>"
                                  tabindex="-1" aria-labelledby="deleteModalTitle<?= $booking['id']; ?>"
                                  aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header d-flex align-items-center">
                                        <h5 class="modal-title" id="deleteModalTitle<?= $booking['id']; ?>">Are
                                          you sure you want to delete?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                      </div>
                                      <div class="modal-footer d-flex gap-3 justify-content-end">
                                        <!-- Confirm Delete Button -->
                                        <a href="<?= base_url('deleteadvancebooking/' . $booking['id']); ?>"
                                          class="btn btn-danger">Yes</a>
                                        <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">No</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Confirm Status Change Modal -->
<div class="modal fade" id="confirmStatusModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Status Change</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="statusChangeMessage">Are you sure you want to change the status?</p>
                <div id="cancellationReasonField" class="mt-3" style="display:none;">
                    <label for="cancellationReason" class="form-label">Reason for Cancellation</label>
                    <textarea class="form-control" id="cancellationReason" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmStatusChange">Confirm</button>
            </div>
        </div>
    </div>
</div>


                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </form>


<!-- Status Change Form (hidden) -->
<form id="statusChangeForm" method="post" action="">
    <input type="hidden" name="new_status" id="newStatusInput">
    <input type="hidden" name="cancellation_reason" id="cancellationReasonInput">
</form>









                    </div>
                  </div>

      

      <!-- Reservation Info -->
      <!-- Combined Reservation, Enquiry & Guest Info Section -->
      
    </div>
  </div>
  </div>


  <!-- Scroll Top -->

  <script>
  const typeFilterDisplay = document.getElementById('typeFilterDisplay');
  const typeFilter = document.getElementById('typeFilter');
  const roomTypeItems = document.querySelectorAll('#roomTypeLists .dropdown-item');

  roomTypeItems.forEach(item => {
    item.addEventListener('click', function () {
      const value = this.getAttribute('data-value');
      const displayText = this.textContent.trim();
      
      // Update display text
      typeFilterDisplay.value = displayText;
      
      // Update actual value sent to backend
      typeFilter.value = value;
    });
  });
</script>

<script>
  const statusFilterDisplay = document.getElementById('statusFilterDisplay');
  const statusFilter = document.getElementById('statusFilter');
  const statusItems = document.querySelectorAll('#statusLists .dropdown-item');

  statusItems.forEach(item => {
    item.addEventListener('click', function() {
      const value = this.getAttribute('data-value');
      const displayText = this.textContent.trim();
      
      // Update display text
      statusFilterDisplay.value = displayText;
      
      // Update actual value sent to backend
      statusFilter.value = value;
    });
  });
</script>

<script>

document.getElementById('pdfButton').addEventListener('click', function() {
    // Create a temporary form for PDF generation
    const pdfForm = document.createElement('form');
    pdfForm.method = 'POST';
    pdfForm.action = '<?= base_url('view/pdf') ?>'; 
    pdfForm.target = '_blank';

    // Get current selected filter values
    const typeValue = document.getElementById('typeFilter').value;
    const statusValue = document.getElementById('statusFilter').value;

    // Add hidden inputs for filter values
    const typeInput = document.createElement('input');
    typeInput.type = 'hidden';
    typeInput.name = 'type';
    typeInput.value = typeValue;
    pdfForm.appendChild(typeInput);

    const statusInput = document.createElement('input');
    statusInput.type = 'hidden';
    statusInput.name = 'status';
    statusInput.value = statusValue;
    pdfForm.appendChild(statusInput);

    // Add hidden input to identify PDF request
    const pdfInput = document.createElement('input');
    pdfInput.type = 'hidden';
    pdfInput.name = 'pdf';
    pdfInput.value = '1';
    pdfForm.appendChild(pdfInput);

    // Submit the form
    document.body.appendChild(pdfForm);
    pdfForm.submit();

    // Clean up
    setTimeout(() => pdfForm.remove(), 1000);
});

</script>




<script>

 document.addEventListener('DOMContentLoaded', function() {
    const confirmModal = new bootstrap.Modal('#confirmStatusModal');
    let currentBookingId = null;
    let currentNewStatus = null;
    
    // Use event delegation for dynamic rows
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('change-status')) {
            e.preventDefault();
            
            currentBookingId = e.target.dataset.booking;
            currentNewStatus = e.target.dataset.status;
            const requireReason = e.target.dataset.requireReason === 'true';
            
            // Update modal content
            document.getElementById('statusChangeMessage').textContent = 
                requireReason ? 'Are you sure you want to cancel this booking?' 
                             : `Are you sure you want to change status to ${currentNewStatus}?`;
            
            document.getElementById('cancellationReasonField').style.display = 
                requireReason ? 'block' : 'none';
            
            confirmModal.show();
        }
    });
    
    // Handle confirmation button
    document.getElementById('confirmStatusChange').addEventListener('click', function() {
        const form = document.getElementById('statusChangeForm');
        form.action = `<?= base_url('updatebookingstatus') ?>/${currentBookingId}`;
        document.getElementById('newStatusInput').value = currentNewStatus;
        
        if (currentNewStatus === 'cancelled') {
            document.getElementById('cancellationReasonInput').value = 
                document.getElementById('cancellationReason').value;
        } else {
            document.getElementById('cancellationReasonInput').value = '';
        }
        
        form.submit();
        confirmModal.hide();
    });
    
    // Reset modal when closed
    document.getElementById('confirmStatusModal').addEventListener('hidden.bs.modal', function() {
        document.getElementById('cancellationReason').value = '';
    });
});   
</script>
<script>

    $(document).ready(function () {
      $('#form_inputs_assettype').DataTable();
      $('#form_inputs_assetmake').DataTable();
      $('#form_inputs_uom').DataTable();
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
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>
  <!-- <script src="<?= base_url(); ?>/public/dist/assets/js/frontend-landingpage/homepage.js"></script> -->
</body>

</html>
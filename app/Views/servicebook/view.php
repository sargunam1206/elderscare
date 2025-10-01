
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <title>MatDash Bootstrap Admin</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


    <style>
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
  </style>
  <style>
.modal-dialog-scrollable .modal-body {
    height: auto !important;
    max-height: none !important;
    overflow-y: visible !important;
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

/* Badge styling */
.badge {
  font-size: 0.9rem !important;
  padding: 2px 10px;
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
    .table {
      background-color: var(--white);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
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
/* Top controls: Show entries + Search (single line, left-right) */
#form_inputs_1_wrapper > .dataTables_length,
#form_inputs_1_wrapper > .dataTables_filter {
  display: inline-block;
  vertical-align: middle;
  margin-bottom: 10px;
}

#form_inputs_1_wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}

/* Push search input to the right */
#form_inputs_1_wrapper .dataTables_filter {
  margin-left: auto;
}

/* Bottom controls: Showing info + Pagination */
#form_inputs_1_wrapper > .dataTables_info,
#form_inputs_1_wrapper > .dataTables_paginate {
  display: inline-block;
  vertical-align: middle;
  margin-top: 10px;
}

@media (max-width: 768px) {
  #form_inputs_wrapper {
    flex-direction: column;
    align-items: stretch;
  }

 
  
  #form_inputs_1_wrapper > .dataTables_info,
  #form_inputs_1_wrapper > .dataTables_paginate {
    width: 100%;
    text-align: center;
    margin: 5px 0;
  }

   /* Search box aligned to the right */
  #form_inputs_1_wrapper > .dataTables_filter {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    margin: 5px 0;
  }

  #form_inputs_1_wrapper .dataTables_filter {
    margin-left: 0;
  }
   #form_inputs_1_wrapper > .dataTables_length {
    display: none !important;
  }
}



  </style>

</head>

<body style="background-color:#EDF7EE;">
   <?= view('layout/head-PS') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
 
    <!-- Sidebar Start -->
       <!-- Sidebar Start -->
     
    <!--  Sidebar End -->
 

          <div class=" p-3">
           <!-- <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                 /* <i class="ti ti-user-circle me-2 fs-6"></i>*/
                  <span class="d-none d-md-block">Asset Type</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
                  /* <i class="ti ti-bell me-2 fs-6"></i> */
                  <span class="d-none d-md-block">Asset Make</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-bills-tab" data-bs-toggle="pill" data-bs-target="#pills-bills" type="button" role="tab" aria-controls="pills-bills" aria-selected="false">
                  /* <i class="ti ti-article me-2 fs-6"></i> */
                  <span class="d-none d-md-block">Dealer Name</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false">
                 /* <i class="ti ti-lock me-2 fs-6"></i> */
                  <span class="d-none d-md-block">UOM</span>
                </button>
              </li>
            </ul>  -->



              <!-- <button type="button" class="btn mb-1 bg-danger-subtle text-danger px-4 fs-4 " data-bs-toggle="modal" data-bs-target="#vertical-center-scroll-modal">
                      Vertically centered scrollable
                    </button> -->

                    <!-- Vertically centered modal -->
                    

<!-- Modal -->
<div class="modal fade" id="vertical-center-scroll-modal" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <form method="post"  id="assetForm"  action="<?= base_url('addrooms'); ?>" enctype="multipart/form-data">
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myLargeModalLabel">Add Services</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        



<div class="modal-body">

 <div class="table-responsive mt-3">
  
  <table id="form_inputs_1" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
  <thead>
        <tr>
        <!-- <th><input type="checkbox" id="select_all"></th>  -->
          <th>S.No</th>
        <th>Category</th>
        <th>Service Mode</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
      <!-- Increased width -->
   
         <!-- Decreased width -->
        </tr>
    </thead>
    <tbody id="cartBody">
  
      
 
          
               
              
            </tr>

      
       
    </tbody>
  </table>
</div>
</div>











   

        <div class="modal-footer border-top justify-content-end">
  <!-- <button type="button" class="btn bg-danger-subtle text-danger me-2" data-bs-dismiss="modal">
    Cancel
  </button>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">
    Save
  </button> -->
</div>

      </form>
    </div>
  </div>
</div>










            <!-- </div> -->

            <div class="card-body">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                  
<!-- <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0"> -->
                  
          <div class="datatables">
            <!-- start Add Row -->
        



            
            
            <!-- end Row selection (multiple rows) -->
            <!-- start Form Inputs -->
            <!-- <div class="card"> -->
              <div class="card-body">
                
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
                    
             
                    

           <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fs-7"><i class="bi bi-list-check me-2 text-success"></i>Service List</h5>
              <div>
                
  <a href="<?= base_url('addproduct'); ?>" class="btn btn-primary">View Charges</a> 
                
              </div>
            </div>

<!-- In your view file -->
<form method="get" action="<?= current_url() ?>" class="mb-4">
  <div class="row g-3 align-items-end">

    <!-- Date Range -->
    <div class="col-md-2">
      <label class="form-label">From Date</label>
      <input type="date" class="form-control" name="from_date" id="fromDate" 
             value="<?= !empty($filter_from_date) ? esc($filter_from_date) : '' ?>">
    </div>

    <div class="col-md-2">
      <label class="form-label">To Date</label>
      <input type="date" class="form-control" name="to_date" id="toDate" 
             value="<?= !empty($filter_to_date) ? esc($filter_to_date) : '' ?>">
    </div>

    <!-- Service Type Dynamic Dropdown -->
    <div class="col-md-2">
      <label class="form-label">Service Type</label>
      <div class="dropdown">
        <input type="text" class="form-control dropdown-toggle w-100"
          name="serviceTypeDisplay"
          id="serviceTypeFilterDisplay"
          placeholder="Select Service Type"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          autocomplete="off"
          readonly
          value="<?= !empty($selected_service_type_name) ? esc($selected_service_type_name) : '' ?>" />

        <!-- Hidden input to store the actual value -->
        <input type="hidden" name="service_type" id="serviceTypeFilter" 
              value="<?= !empty($filter_service_type) ? esc($filter_service_type) : '' ?>">

        <ul class="dropdown-menu p-2 w-100" aria-labelledby="serviceTypeFilterDisplay"
            style="max-height: 150px; overflow-y: auto;">
          <div id="serviceTypeLists" style="width: 100%;">
            <div class="dropdown-item" data-value="all">All Service Types</div>
            <?php if (!empty($serviceTypes)): ?>
              <?php foreach ($serviceTypes as $serviceType): ?>
                <div class="dropdown-item" data-value="<?= esc($serviceType['name']) ?>">
                  <?= esc($serviceType['name']) ?>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="dropdown-item text-muted">No service types available</div>
            <?php endif; ?>
          </div>
        </ul>
      </div>
    </div>

    <!-- Room Number Dropdown (for admin/super_admin only) -->
   <!-- Room Number Dropdown (for admin/super_admin only) -->
<?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
<div class="col-md-1">
  <label class="form-label">Room No</label>
  <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100"
      name="roomNoDisplay"
      id="roomNoFilterDisplay"
      placeholder="Select Room No"
      data-bs-toggle="dropdown"
      aria-expanded="false"
      autocomplete="off"
      readonly
      value="<?= !empty($filter_room_no) && $filter_room_no !== 'all' ? esc($filter_room_no) : '' ?>" />

    <!-- Hidden input to store actual value -->
    <input type="hidden" name="room_no" id="roomNoFilter" 
          value="<?= !empty($filter_room_no) ? esc($filter_room_no) : 'all' ?>">

    <ul class="dropdown-menu p-2 w-100" aria-labelledby="roomNoFilterDisplay"
        style="max-height: 150px; overflow-y: auto;">
      <div id="roomNoLists" style="width: 100%;">
        <div class="dropdown-item" data-value="all">All Rooms</div>
        <?php if (!empty($roomNumbers)): ?>
          <?php foreach ($roomNumbers as $room): ?>
            <div class="dropdown-item" data-value="<?= esc($room['room_no']) ?>">
              <?= esc($room['room_no']) ?>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="dropdown-item text-muted">No rooms available</div>
        <?php endif; ?>
      </div>
    </ul>
  </div>
</div>
<?php endif; ?>


<!-- Guest Dropdown (for admin/super_admin only) -->
<?php if (session()->get('user_type') === 'admin' || session()->get('user_type') === 'super_admin'): ?>
<div class="col-md-2">
  <label class="form-label">Guest</label>
  <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100"
      name="guestDisplay"
      id="guestFilterDisplay"
      placeholder="Select Guest"
      data-bs-toggle="dropdown"
      aria-expanded="false"
      autocomplete="off"
      readonly
      value="<?php 
        if (!empty($filter_guest_id) && $filter_guest_id !== 'all') {
          foreach ($guests as $g) {
            if ($g['guest_id'] == $filter_guest_id) {
              echo esc(trim(($g['first_name'] ?? '') . ' ' . ($g['last_name'] ?? '')));
              break;
            }
          }
        } 
      ?>" />

    <!-- Hidden input to store actual value -->
    <input type="hidden" name="guest_id" id="guestFilter" 
          value="<?= !empty($filter_guest_id) ? esc($filter_guest_id) : 'all' ?>">

    <ul class="dropdown-menu p-2 w-100" aria-labelledby="guestFilterDisplay"
        style="max-height: 150px; overflow-y: auto;">
      <div id="guestLists" style="width: 100%;">
        <div class="dropdown-item" data-value="all">All Guests</div>
        <?php if (!empty($guests)): ?>
          <?php foreach ($guests as $guest): ?>
            <?php 
              $guestName = trim(($guest['first_name'] ?? '') . ' ' . ($guest['last_name'] ?? ''));
              if ($guestName === '') continue;
            ?>
            <div class="dropdown-item" data-value="<?= esc($guest['guest_id']) ?>">
              <?= esc($guestName) ?>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="dropdown-item text-muted">No guests available</div>
        <?php endif; ?>
      </div>
    </ul>
  </div>
</div>
<?php endif; ?>


    <!-- Action Buttons -->
    <div class="col-md-2 d-flex gap-2">
      <button type="submit" class="btn btn-success flex-grow-1">Filter</button>
      <button type="submit" name="pdf" value="1" class="btn btn-primary" formtarget="_blank">PDF</button>
      <button type="submit" name="excel" value="1" class="btn btn-primary">Excel</button>
      <a href="<?= current_url() ?>" class="btn btn-secondary">Reset</a>
    </div>
  </div>
</form>

              
                  <!-- <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</a>
    </td> -->




                   <div class="table-responsive mt-3">
  
  <table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
  <thead>
        <tr>
        <!-- <th><input type="checkbox" id="select_all"></th>  -->
           <th>S.No</th>
           <th>Date Time</th>
            <th>Room No</th>
            <th>Guest Name</th>
       <th>Service Type</th>
    <th>Service Info</th>
    <th>Payment Status</th>
     <th>Action</th>
      <!-- Increased width -->
   
         <!-- Decreased width -->
        </tr>
    </thead>
    <tbody>
  
        <?php $i = 1; foreach ($servicebook as $asset):
          // $base=base64_encode(base64_encode(base64_encode($asset['id'])));
            ?>
            <tr>
              
              
                <td><?= $i++; ?> </td>
                <td><?= $asset['created_on']; ?></td>
                <td><?= $asset['room_no']; ?></td>
                <td><?= $asset['first_name'] . ' ' . $asset['last_name']; ?></td>
                <td><?= $asset['service_type']; ?></td>
                <td> <button type="button"
        class="btn btn-success" 
        data-bs-toggle="modal"
        data-bs-target="#vertical-center-scroll-modal"
        onclick='editAsset(JSON.parse(this.getAttribute("data-asset")))'
        data-asset='<?= json_encode($asset) ?>' >Info
 
   
</button></td>
<td><?= $asset['payment_status']; ?></td>
 <!-- <td><a href="" class="btn" style="color:blue">
    <i class="bi bi-pencil-square"></i></td> -->
    <td>
    <?php if ($asset['payment_status'] === 'pending'): ?>
        <button type="button" 
                class="btn" style="color:blue" 
                data-bs-toggle="modal"
                data-bs-target="#laundryModal"
                onclick='editServiceBooking(<?= json_encode($asset) ?>)'
                title="Edit Service">
            <i class="bi bi-pencil-square"></i> 
        </button>
    <?php else: ?>
              <span  class="btn" style="color:green" title="Payment Completed">
            <i class="bi bi-check-square"></i>
        </span>
    <?php endif; ?>
</td>
<!-- <td class="text-center">
    </?php if ($asset['payment_status'] === 'pending'): ?>
        <a href="</?= base_url('editservicebooking/' . $asset['id']) ?>" 
          class="btn" style="color:blue"
           title="Edit Service">
            <i class="bi bi-pencil-square"></i>
        </a>
    </?php else: ?>
        <span  class="btn" style="color:green" title="Payment Completed">
            <i class="bi bi-check-square"></i>
        </span>
    </?php endif; ?>
</td> -->

              
            </tr>

            <div class="modal fade" id="deleteConfirmationModal<?= $asset['id']; ?>" tabindex="-1" aria-labelledby="deleteModalTitle<?= $asset['id']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title" id="deleteModalTitle<?= $asset['id']; ?>">Are you sure you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer d-flex gap-3 justify-content-end">
        <!-- Confirm Delete Button -->
        <a href="<?= base_url('deleterooms/' . $asset['id']); ?>" class="btn btn-danger">Yes</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

        </form>
                   
                </div>
              </div>
                </div>

                   
                </div>
              </div>
            </div>

  <!-- Laundry Modal -->
<div class="modal fade" id="laundryModal" tabindex="-1" aria-labelledby="laundryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post" id="laundryForm" class="needs-validation" novalidate>

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
                Preview
              </button>
            </li>
            <li class="nav-item flex-fill text-center">
              <button class="nav-link w-100" id="laundry-step3-tab" data-bs-toggle="pill"
                data-bs-target="#laundry-step3" type="button">
                Payment
              </button>
            </li>
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

          <!-- STEP 2: Preview -->
          <div class="tab-pane fade p-2" id="laundry-step2">
            <div class="modal-body">
              <!-- Preview Table -->
              <div class="table-responsive mb-4">
                <table class="table table-bordered align-middle" id="laundry-preview-table">
                  <thead class="table-light">
                    <tr>
                      <th>S.No</th>
                      <th>Category</th>
                      <th>Item</th>
                      <th>Count</th>
                      <th>Unit Price</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody id="laundry-preview-body"></tbody>
                  <tfoot>
                    <tr>
                      <td colspan="5" class="text-end fw-bold">Grand Total:</td>
                      <td class="fw-bold text-primary" id="preview-grand-total">₹0</td>
                    </tr>
                  </tfoot>
                </table>
              </div>

              <!-- Confirm Button -->
               <!-- <div class="text-center mt-4">
                <button type="button" class="btn btn-success btn-lg" onclick="confirmOrder()">
                  <i class="fas fa-check-circle me-2"></i> Confirm Order
                </button>
              </div> -->
                <div class="d-flex justify-content-center mt-4">
                  <button type="button" class="btn btn-success btn-lg" onclick="confirmOrder()">
                    <i class="fas fa-check-circle me-2"></i> Confirm Order
                  </button>
                </div>


              <!-- Payment Options (Initially Hidden) -->
              <div id="payment-options" class="mt-4" style="display: none;">
                <h5 class="mb-3">Select Payment Option</h5>
                <div class="d-flex justify-content-center gap-3">
                  <button type="button" class="btn btn-primary" onclick="goLaundryStep(3)">
                    <i class="fas fa-credit-card me-2"></i> Proceed with Payment
                  </button>
                  <button type="button" class="btn btn-outline-secondary" onclick="submitWithoutPayment()">
                    <i class="fas fa-file-invoice me-2"></i> Proceed Without Payment
                  </button>
                </div>
              </div>

              <!-- Stepper Navigation -->
              <!-- <div class="d-flex justify-content-between mt-5">
                <button type="button" class="btn btn-secondary" onclick="goLaundryStep(1)">
                  <i class="fas fa-arrow-left me-2"></i> Back
                </button>
              </div> -->

              <!-- Back Button -->
              <div class="d-flex justify-content-center mt-3">
                <button type="button" class="btn btn-secondary" onclick="goLaundryStep(1)">
                  <i class="fas fa-arrow-left me-2"></i> Back
                </button>
              </div>

            </div>
          </div>

          <!-- STEP 3: Payment -->
          <div class="tab-pane fade p-2" id="laundry-step3">
            <div class="modal-body">
              <!-- Summary Table -->
              <!-- <div class="table-responsive mb-4">
                <table class="table table-bordered align-middle" id="laundry-summary-table">
                  <thead class="table-light">
                    <tr>
                      <th>Service</th>
                      <th class="text-end">Amount</th>
                    </tr>
                  </thead>
                  <tbody id="laundry-summary-body"></tbody>
                </table>
              </div> -->

              <!-- Payment Methods -->
              <h5 class="mb-3">Select Payment Method</h5>
              <div class="row g-3 mb-4">
                <div class="col-md-4">
                  <div class="card payment-method-card p-3" data-method="cash">
                    💵 Cash Payment <br><small class="text-muted">Pay at reception</small>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card payment-method-card p-3" data-method="upi">
                    📱 UPI Payment <br><small class="text-muted">Pay via UPI apps</small>
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="card payment-method-card p-3" data-method="card">
                    💳 Card Payment <br><small class="text-muted">Credit/Debit Card</small>
                  </div>
                </div> -->
                <div class="col-md-4">
                  <div class="card payment-method-card p-3" data-method="wallet">
                    🏨 Wallet <br><small class="text-muted">Use credits</small>
                  </div>
                </div>
              </div>

              <!-- Payment Forms -->
              <div id="laundry-payment-forms">
                <!-- <div id="laundry-cash-form" class="payment-form" style="display:none">
                  <div class="mb-3">
                    <label class="form-label">Bill No <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="bill_no" placeholder="Enter Bill No" required>
                    <div class="invalid-feedback">Please enter a bill number.</div>
                  </div> -->
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
                </div>
              </div>

              <!-- Stepper Navigation -->
              <div class="d-flex justify-content-between mt-5">
                <button type="button" class="btn btn-secondary" onclick="goLaundryStep(2)">
                  <i class="fas fa-arrow-left me-2"></i> Back
                </button>
                <button type="button" class="btn btn-success" onclick="saveLaundryOrder()">
                  <i class="fas fa-check-circle me-2"></i> Submit
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
// JavaScript to handle dropdown selection
document.addEventListener('DOMContentLoaded', function() {
  function setupDropdown(displayId, hiddenId, listId) {
    const displayInput = document.getElementById(displayId);
    const hiddenInput = document.getElementById(hiddenId);
    const dropdownItems = document.querySelectorAll(`#${listId} .dropdown-item`);
    
    dropdownItems.forEach(item => {
      item.addEventListener('click', function() {
        const value = this.getAttribute('data-value');
        const text = this.textContent.trim();
        
        hiddenInput.value = value;
        displayInput.value = text;
        
        const dropdownInstance = bootstrap.Dropdown.getInstance(displayInput);
        if (dropdownInstance) dropdownInstance.hide();
      });
    });
  }

  // ✅ Initialize for each dropdown
  setupDropdown('serviceTypeFilterDisplay', 'serviceTypeFilter', 'serviceTypeLists');
  setupDropdown('roomNoFilterDisplay', 'roomNoFilter', 'roomNoLists');
  setupDropdown('guestFilterDisplay', 'guestFilter', 'guestLists');
});

  
</script>


  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>

<script>

//     function editServiceBooking(bookingData) {
//     console.log("Editing service booking:", bookingData);
    
//     // Set modal title for edit mode
//     document.getElementById('myLargeModalLabel').textContent = "Edit Service - " + bookingData.service_type;
    
//     // Store the booking ID for update
//     const modalEl = document.getElementById('laundryModal');
//     modalEl.setAttribute('data-booking-id', bookingData.id);
//     modalEl.setAttribute('data-edit-mode', 'true');
    
//     // Set service type information
//     modalEl.setAttribute('data-service-name', bookingData.service_type);
//     modalEl.setAttribute('data-service-id', bookingData.service_type_id || '');
    
//     // Parse the services info JSON
//     let servicesInfo = [];
//     try {
//         servicesInfo = JSON.parse(bookingData.services_info);
//     } catch (e) {
//         console.error("Error parsing services info:", e);
//         servicesInfo = [];
//     }
    
//     // Clear existing rows
//     const tableBody = document.getElementById('laundry-table-body');
//     tableBody.innerHTML = '';
    
//     // Populate the table with existing services
//     if (servicesInfo.length > 0) {
//         servicesInfo.forEach((service, index) => {
//             addRow(); // Add a new row
            
//             // Get the newly added row (last row)
//             const rows = tableBody.querySelectorAll('tr');
//             const newRow = rows[rows.length - 1];
            
//             // Fill the row with existing data
//             if (newRow) {
//                 // Set category
//                 const categoryInput = newRow.querySelector('.category-input');
//                 if (categoryInput && service.item) {
//                     categoryInput.value = service.item;
//                     categoryInput.classList.add('is-valid');
//                 }
                
//                 // Set item
//                 const itemInput = newRow.querySelector('.item-input');
//                 if (itemInput && service.type) {
//                     itemInput.value = service.type;
//                     itemInput.classList.add('is-valid');
//                 }
                
//                 // Set quantity
//                 const quantityInput = newRow.querySelector('.quantity');
//                 if (quantityInput && service.qty) {
//                     quantityInput.value = service.qty;
//                 }
                
//                 // Set price
//                 const priceCell = newRow.querySelector('.price-cell');
//                 if (priceCell && service.price) {
//                     priceCell.setAttribute('data-price', service.price);
//                 }
                
//                 // Update the row total
//                 updateRowTotal(quantityInput);
                
//                 // Load categories and items for this service type
//                 loadCategoriesForEdit(newRow, bookingData.service_type_id, service);
//             }
//         });
//     } else {
//         // If no services info, add one empty row
//         addRow();
//     }
    
//     // Update grand total
//     updateGrandTotal();
    
//     // Go to first step
//     goLaundryStep(1);
// }


function editServiceBooking(bookingData) {
    console.log("Editing service booking:", bookingData);
    
    // Set modal title for edit mode
    document.getElementById('myLargeModalLabel').textContent = "Edit Service - " + bookingData.service_type;
    
    // Store the booking ID and service information for update
    const modalEl = document.getElementById('laundryModal');
    modalEl.setAttribute('data-booking-id', bookingData.id);
    modalEl.setAttribute('data-edit-mode', 'true');
    modalEl.setAttribute('data-service-name', bookingData.service_type);
    modalEl.setAttribute('data-service-id', bookingData.service_type_id || '');
    
    // Parse the services info JSON
    let servicesInfo = [];
    try {
        servicesInfo = JSON.parse(bookingData.services_info);
    } catch (e) {
        console.error("Error parsing services info:", e);
        servicesInfo = [];
    }
    
    // Clear existing rows
    const tableBody = document.getElementById('laundry-table-body');
    tableBody.innerHTML = '';
    
    // Populate the table with existing services
    if (servicesInfo.length > 0) {
        servicesInfo.forEach((service, index) => {
            addRow(true, bookingData.service_type_id); // Pass service type ID
            
            // Get the newly added row (last row)
            const rows = tableBody.querySelectorAll('tr');
            const newRow = rows[rows.length - 1];
            
            // Fill the row with existing data
            if (newRow) {
                // Set category
                const categoryInput = newRow.querySelector('.category-input');
                if (categoryInput && service.item) {
                    categoryInput.value = service.item;
                    categoryInput.classList.add('is-valid');
                }
                
                // Set item
                const itemInput = newRow.querySelector('.item-input');
                if (itemInput && service.type) {
                    itemInput.value = service.type;
                    itemInput.classList.add('is-valid');
                }
                
                // Set quantity
                const quantityInput = newRow.querySelector('.quantity');
                if (quantityInput && service.qty) {
                    quantityInput.value = service.qty;
                }
                
                // Set price
                const priceCell = newRow.querySelector('.price-cell');
                if (priceCell && service.price) {
                    priceCell.setAttribute('data-price', service.price);
                    priceCell.innerHTML = `<span class="fw-bold text-success row-total">₹${service.price * service.qty}</span>`;
                }
                
                // Update the row total
                updateRowTotal(quantityInput);
            }
        });
    } else {
        // If no services info, add one empty row with service type
        addRow(true, bookingData.service_type_id);
    }
    
    // Update grand total
    updateGrandTotal();
    
    // Go to first step
    goLaundryStep(1);
}


// Helper function to load categories for edit mode
function loadCategoriesForEdit(row, serviceId, serviceData) {
    if (!serviceId) return;
    
    const categoryList = row.querySelector('.category-list');
    if (!categoryList) return;
    
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
                
                // After loading categories, load items for the specific category
                if (serviceData.item) {
                    loadItemsForEdit(row, serviceData.item, serviceData);
                }
            } else {
                categoryList.innerHTML = '<div class="dropdown-item text-muted">No categories</div>';
            }
        })
        .catch(error => {
            console.error("Error loading categories:", error);
            categoryList.innerHTML = '<div class="dropdown-item text-muted">Error loading categories</div>';
        });
}

// Function to load categories for a specific service
function loadCategoriesForService(row, serviceId) {
    if (!serviceId) return;
    
    const categoryList = row.querySelector('.category-list');
    if (!categoryList) return;
    
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
                    
                    // Add click event to load items when category is selected
                    div.addEventListener('click', function() {
                        const categoryInput = row.querySelector('.category-input');
                        categoryInput.value = this.getAttribute('data-value');
                        categoryInput.classList.add('is-valid');
                        
                        // Load items for this category
                        loadItemsForCategory(row, this.getAttribute('data-value'));
                        
                        // Close dropdown
                        const dropdownInstance = bootstrap.Dropdown.getInstance(categoryInput);
                        if (dropdownInstance) dropdownInstance.hide();
                    });
                    
                    categoryList.appendChild(div);
                });
            } else {
                categoryList.innerHTML = '<div class="dropdown-item text-muted">No categories</div>';
            }
        })
        .catch(error => {
            console.error("Error loading categories:", error);
            categoryList.innerHTML = '<div class="dropdown-item text-muted">Error loading categories</div>';
        });
}

// Function to load items for a specific category
function loadItemsForCategory(row, category) {
    const itemList = row.querySelector('.item-list');
    if (!itemList) return;
    
    itemList.innerHTML = '<div class="dropdown-item text-muted">Loading...</div>';
    
    fetch("<?= base_url('service_items') ?>/" + category)
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
                    div.innerText = `${item.name} - ₹${item.price}`;
                    
                    // Add click event to set item and price
                    div.addEventListener('click', function() {
                        const itemInput = row.querySelector('.item-input');
                        const priceCell = row.querySelector('.price-cell');
                        const quantityInput = row.querySelector('.quantity');
                        
                        itemInput.value = this.getAttribute('data-value');
                        itemInput.classList.add('is-valid');
                        
                        // Set price
                        const price = this.getAttribute('data-price');
                        priceCell.setAttribute('data-price', price);
                        
                        // Update row total
                        updateRowTotal(quantityInput);
                        
                        // Close dropdown
                        const dropdownInstance = bootstrap.Dropdown.getInstance(itemInput);
                        if (dropdownInstance) dropdownInstance.hide();
                    });
                    
                    itemList.appendChild(div);
                });
            } else {
                itemList.innerHTML = '<div class="dropdown-item text-muted">No items</div>';
            }
        })
        .catch(error => {
            console.error("Error loading items:", error);
            itemList.innerHTML = '<div class="dropdown-item text-muted">Error loading items</div>';
        });
}

// Initialize dropdown functionality for new rows
function initializeDropdowns() {
    // Category dropdowns
    document.querySelectorAll('.category-input').forEach(input => {
        if (!input.hasAttribute('data-initialized')) {
            input.setAttribute('data-initialized', 'true');
            
            // Show dropdown on focus
            input.addEventListener('focus', function() {
                const dropdown = new bootstrap.Dropdown(this);
                dropdown.show();
            });
        }
    });
    
    // Item dropdowns
    document.querySelectorAll('.item-input').forEach(input => {
        if (!input.hasAttribute('data-initialized')) {
            input.setAttribute('data-initialized', 'true');
            
            // Show dropdown on focus
            input.addEventListener('focus', function() {
                const dropdown = new bootstrap.Dropdown(this);
                dropdown.show();
            });
        }
    });
}

// Helper function to load items for edit mode
function loadItemsForEdit(row, category, serviceData) {
    const itemList = row.querySelector('.item-list');
    if (!itemList) return;
    
    itemList.innerHTML = '<div class="dropdown-item text-muted">Loading...</div>';
    
    fetch("<?= base_url('service_items') ?>/" + category)
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
                    div.innerText = `${item.name}`;
                    itemList.appendChild(div);
                });
            } else {
                itemList.innerHTML = '<div class="dropdown-item text-muted">No items</div>';
            }
        })
        .catch(error => {
            console.error("Error loading items:", error);
            itemList.innerHTML = '<div class="dropdown-item text-muted">Error loading items</div>';
        });
}
</script>

<script>
// Dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
    function setupDropdown(displayId, hiddenId, listId) {
        const displayInput = document.getElementById(displayId);
        const hiddenInput = document.getElementById(hiddenId);
        const dropdownItems = document.querySelectorAll(`#${listId} .dropdown-item`);
        
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                const value = this.getAttribute('data-value');
                const text = this.textContent.trim();
                
                hiddenInput.value = value;
                displayInput.value = text;
                
                const dropdownInstance = bootstrap.Dropdown.getInstance(displayInput);
                if (dropdownInstance) dropdownInstance.hide();
            });
        });
    }

    setupDropdown('serviceTypeFilterDisplay', 'serviceTypeFilter', 'serviceTypeLists');
    setupDropdown('roomNoFilterDisplay', 'roomNoFilter', 'roomNoLists');
    setupDropdown('guestFilterDisplay', 'guestFilter', 'guestLists');
});

// Service Info Modal Functions
function editAsset(asset) {
    document.getElementById('myLargeModalLabel').textContent = "Service List";
    const form = document.getElementById("assetForm");
    
    let cartData = JSON.parse(asset.services_info);
    let table = $('#form_inputs_1').DataTable();
    table.clear();
    
    let i = 1;
    cartData.forEach(row => {
        let total = row.price * row.qty;
        table.row.add([
            i++,
            row.item,
            row.type,
            row.price,
            row.qty,
            total
        ]).draw();
    });
}

// Reset modal when closed
document.getElementById('vertical-center-scroll-modal').addEventListener('hidden.bs.modal', function () {
    document.getElementById('myLargeModalLabel').textContent = "Service Details";
    const form = document.getElementById('assetForm');
    form.reset();
    $('#form_inputs_1').DataTable().clear().draw();
});

// Payment Edit Function
function editPayment(serviceId, serviceType, assetData) {
    console.log('editPayment called with:', { serviceId, serviceType, assetData });
    
    const asset = JSON.parse(assetData);
    
    // Set modal data
    const modalEl = document.getElementById('laundryModal');
    modalEl.setAttribute('data-service-id', serviceId);
    modalEl.setAttribute('data-service-name', serviceType);
    modalEl.setAttribute('data-asset-data', assetData);
    modalEl.setAttribute('data-edit-mode', 'true');
    
    // Reset to step 1
    goLaundryStep(1);
    
    // Populate the laundry table with existing data
    populateLaundryTable(asset);
    
    // Show the modal
    const modal = new bootstrap.Modal(document.getElementById('laundryModal'));
    modal.show();
}

// Populate laundry table with existing service data
function populateLaundryTable(asset) {
    const tableBody = document.getElementById('laundry-table-body');
    tableBody.innerHTML = '';
    
    let cartData = JSON.parse(asset.services_info);
    let grandTotal = 0;
    
    cartData.forEach((item, index) => {
        const row = document.createElement('tr');
        const total = item.price * item.qty;
        grandTotal += total;
        
        row.innerHTML = `
            <td class="sno">${index + 1}</td>
            <td>
                <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100 category-input" 
                           value="${item.item}" placeholder="Select Category" 
                           data-bs-toggle="dropdown" aria-expanded="false" required readonly />
                    <ul class="dropdown-menu w-50 category-dropdown" style="max-height: 150px; overflow-y: auto;">
                        <div class="category-list"></div>
                    </ul>
                </div>
            </td>
            <td>
                <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100 item-input" 
                           value="${item.type}" placeholder="Select Item" 
                           data-bs-toggle="dropdown" aria-expanded="false" required readonly />
                    <ul class="dropdown-menu w-50 item-dropdown" style="max-height: 150px; overflow-y: auto;">
                        <div class="item-list"></div>
                    </ul>
                </div>
            </td>
            <td>
                <div class="input-group" style="width:140px; height:30px;">
                    <button type="button" class="btn btn-danger rounded-start-pill" style="width:30px;" onclick="changeQuantity(this,-1)">-</button>
                    <input type="number" class="form-control text-center quantity border-0" value="${item.qty}" min="1" onchange="updateRowTotal(this)">
                    <button type="button" class="btn btn-success rounded-end-pill" style="width:30px;" onclick="changeQuantity(this,1)">+</button>
                </div>
            </td>
            <td class="price-cell" data-price="${item.price}">
                <span class="fw-bold text-success row-total">₹${total}</span>
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
        
        tableBody.appendChild(row);
    });
    
    document.getElementById('grand-total').textContent = `₹${grandTotal}`;
}

// Laundry Modal Core Functions
let rowCount = 0;

// Updated addRow function to handle edit mode
function addRow(isEditMode = false) {
    rowCount++;
    const tableBody = document.getElementById('laundry-table-body');
    const modalEl = document.getElementById('laundryModal');
    const serviceTypeId = modalEl.getAttribute('data-service-id');
    
    const row = document.createElement('tr');
    row.innerHTML = `
        <td class="sno">${rowCount}</td>
        <td>
            <div class="dropdown">
                <input type="text" class="form-control dropdown-toggle w-100 category-input" 
                       placeholder="Select Category" data-bs-toggle="dropdown" aria-expanded="false" required />
                <ul class="dropdown-menu w-50 category-dropdown" style="max-height: 150px; overflow-y: auto;">
                    <div class="category-list">
                        <div class="dropdown-item text-muted">Loading categories...</div>
                    </div>
                </ul>
            </div>
        </td>
        <td>
            <div class="dropdown">
                <input type="text" class="form-control dropdown-toggle w-100 item-input" 
                       placeholder="Select Item" data-bs-toggle="dropdown" aria-expanded="false" required />
                <ul class="dropdown-menu w-50 item-dropdown" style="max-height: 150px; overflow-y: auto;">
                    <div class="item-list">
                        <div class="dropdown-item text-muted">Select category first</div>
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
    
    tableBody.appendChild(row);
    
    // Load categories if we have a service type ID (in edit mode)
    if (serviceTypeId && isEditMode) {
        loadCategoriesForService(row, serviceTypeId);
    }
    
    updateRowTotal(row.querySelector('.quantity'));
}


function changeQuantity(btn, change) {
    const input = btn.parentElement.querySelector('.quantity');
    let value = parseInt(input.value) || 1;
    value = Math.max(1, value + change);
    input.value = value;
    updateRowTotal(input);
}

function updateRowTotal(el) {
    const row = el.closest('tr');
    const quantity = parseInt(row.querySelector('.quantity').value) || 0;
    const price = parseFloat(row.querySelector('.price-cell').getAttribute('data-price')) || 0;
    const total = price * quantity;
    row.querySelector('.row-total').textContent = '₹' + total;
    updateGrandTotal();
}

function updateGrandTotal() {
    let grandTotal = 0;
    document.querySelectorAll('.row-total').forEach(span => {
        grandTotal += parseInt(span.textContent.replace('₹', '')) || 0;
    });
    document.getElementById('grand-total').textContent = '₹' + grandTotal;
}

function removeRow(btn) {
    btn.closest('tr').remove();
    updateGrandTotal();
    renumberRows();
}

function renumberRows() {
    const rows = document.querySelectorAll('#laundry-table-body tr');
    rows.forEach((row, index) => {
        row.querySelector('.sno').textContent = index + 1;
    });
    rowCount = rows.length;
}

// Laundry Modal Navigation Functions
function goLaundryStep(step) {
    try {
        console.log("goLaundryStep called with step:", step);
        
        if (step === 2) {
            if (!validateLaundryStep1()) {
                return;
            }
            updateLaundryPreview();
        }
        
        if (step === 3) {
            updateLaundrySummary();
        }
        
        let tabTrigger = document.querySelector(`#laundry-step${step}-tab`);
        if (tabTrigger) {
            let tab = new bootstrap.Tab(tabTrigger);
            tab.show();
        }
    } catch (error) {
        console.error("Error in goLaundryStep:", error);
    }
}

function validateLaundryStep1() {
    const rows = document.querySelectorAll('#laundry-table-body tr');
    let isValid = true;
    
    if (rows.length === 0) {
        alert('Please add at least one item');
        return false;
    }
    
    rows.forEach((row, index) => {
        const categoryInput = row.querySelector('.category-input');
        const itemInput = row.querySelector('.item-input');
        const quantityInput = row.querySelector('.quantity');
        
        if (!categoryInput.value.trim()) {
            categoryInput.classList.add('is-invalid');
            isValid = false;
        } else {
            categoryInput.classList.remove('is-invalid');
        }
        
        if (!itemInput.value.trim()) {
            itemInput.classList.add('is-invalid');
            isValid = false;
        } else {
            itemInput.classList.remove('is-invalid');
        }
        
        const quantity = parseInt(quantityInput.value);
        if (isNaN(quantity) || quantity < 1) {
            quantityInput.classList.add('is-invalid');
            isValid = false;
        } else {
            quantityInput.classList.remove('is-invalid');
        }
    });
    
    const grandTotal = document.getElementById('grand-total').textContent;
    if (grandTotal === '₹0') {
        alert('Please add items with valid quantities');
        isValid = false;
    }
    
    return isValid;
}

function updateLaundryPreview() {
    const tableBody = document.getElementById("laundry-table-body");
    const previewBody = document.getElementById("laundry-preview-body");
    const grandTotal = document.getElementById("grand-total").textContent;
    
    previewBody.innerHTML = "";
    
    const rows = tableBody.querySelectorAll("tr");
    
    if (rows.length === 0) {
        previewBody.innerHTML = '<tr><td colspan="6" class="text-center">No items added</td></tr>';
        return;
    }
    
    rows.forEach((row, index) => {
        const category = row.querySelector(".category-input").value;
        const item = row.querySelector(".item-input").value;
        const quantity = row.querySelector(".quantity").value;
        const price = row.querySelector(".price-cell").getAttribute("data-price");
        const total = row.querySelector(".row-total").textContent;
        
        const previewRow = document.createElement("tr");
        previewRow.innerHTML = `
            <td>${index + 1}</td>
            <td>${category}</td>
            <td>${item}</td>
            <td>${quantity}</td>
            <td>₹${price}</td>
            <td>${total}</td>
        `;
        previewBody.appendChild(previewRow);
    });
    
    document.getElementById("preview-grand-total").textContent = grandTotal;
}

function updateLaundrySummary() {
    const modalEl = document.getElementById("laundryModal");
    const grandTotal = document.getElementById("grand-total").textContent;
    const serviceName = modalEl.getAttribute("data-service-name") || "Service";
    
    const summaryBody = document.getElementById("laundry-summary-body");
    if (summaryBody) {
        summaryBody.innerHTML = `
            <tr>
                <td>${serviceName}</td>
                <td class="text-end">${grandTotal}</td>
            </tr>
        `;
    }
}

function confirmOrder() {
    document.querySelector('#laundry-step2 .btn-success').style.display = 'none';
    document.getElementById('payment-options').style.display = 'block';
    document.getElementById('payment-options').scrollIntoView({ behavior: 'smooth' });
}

function submitWithoutPayment() {
    const modalEl = document.getElementById('laundryModal');
    modalEl.setAttribute('data-payment-mode', 'no_payment');
    saveLaundryOrder();
}

// Payment Method Selection
document.querySelectorAll('#laundryModal .payment-method-card').forEach(card => {
    card.addEventListener('click', function() {
        document.querySelectorAll('#laundryModal .payment-method-card').forEach(c => {
            c.classList.remove('border-success');
        });
        this.classList.add('border-success');

        document.querySelectorAll('#laundryModal .payment-form').forEach(f => {
            f.style.display = 'none';
        });

        let method = this.getAttribute('data-method');
        let form = document.querySelector(`#laundry-${method}-form`);
        if (form) form.style.display = 'block';
    });
});

function clearPaymentForms() {
    document.querySelectorAll('#laundryModal .payment-method-card').forEach(c => {
        c.classList.remove('border-success');
    });
    document.querySelectorAll('#laundryModal .payment-form').forEach(f => {
        f.style.display = 'none';
    });
}

// Modal Event Listeners
// document.getElementById("laundryModal").addEventListener("shown.bs.modal", function () {
//     console.log("Modal opened");
//     goLaundryStep(1);
    
//     // Only add new row if not in edit mode
//     const isEditMode = this.getAttribute('data-edit-mode') === 'true';
//     if (!isEditMode) {
//         const tableBody = document.getElementById("laundry-table-body");
//         tableBody.innerHTML = "";
//         addRow();
//     }
    
//     clearPaymentForms();
// });


function editServiceBooking(bookingData) {
    console.log("Editing service booking:", bookingData);
    
    // Set modal title for edit mode
    document.getElementById('myLargeModalLabel').textContent = "Edit Service - " + bookingData.service_type;
    
    // Store the booking ID for update
    const modalEl = document.getElementById('laundryModal');
    modalEl.setAttribute('data-booking-id', bookingData.id);
    modalEl.setAttribute('data-edit-mode', 'true');
    
    // Set service type information
    modalEl.setAttribute('data-service-name', bookingData.service_type);
    modalEl.setAttribute('data-service-id', bookingData.service_type_id || '');
    
    // Parse the services info JSON
    let servicesInfo = [];
    try {
        servicesInfo = JSON.parse(bookingData.services_info);
    } catch (e) {
        console.error("Error parsing services info:", e);
        servicesInfo = [];
    }
    
    // Clear existing rows
    const tableBody = document.getElementById('laundry-table-body');
    tableBody.innerHTML = '';
    
    // Populate the table with existing services
    if (servicesInfo.length > 0) {
        servicesInfo.forEach((service, index) => {
            addRow(true); // Pass true to indicate edit mode
            
            // Get the newly added row (last row)
            const rows = tableBody.querySelectorAll('tr');
            const newRow = rows[rows.length - 1];
            
            // Fill the row with existing data
            if (newRow) {
                // Set category
                const categoryInput = newRow.querySelector('.category-input');
                if (categoryInput && service.item) {
                    categoryInput.value = service.item;
                    categoryInput.classList.add('is-valid');
                }
                
                // Set item
                const itemInput = newRow.querySelector('.item-input');
                if (itemInput && service.type) {
                    itemInput.value = service.type;
                    itemInput.classList.add('is-valid');
                }
                
                // Set quantity
                const quantityInput = newRow.querySelector('.quantity');
                if (quantityInput && service.qty) {
                    quantityInput.value = service.qty;
                }
                
                // Set price
                const priceCell = newRow.querySelector('.price-cell');
                if (priceCell && service.price) {
                    priceCell.setAttribute('data-price', service.price);
                }
                
                // Update the row total
                updateRowTotal(quantityInput);
                
                // Load categories for this service type
                loadCategoriesForService(newRow, bookingData.service_type_id);
            }
        });
    }
    
    // Update grand total
    updateGrandTotal();
    
    // Go to first step
    goLaundryStep(1);
}

// Updated addRow function to handle edit mode
function addRow(isEditMode = false) {
    rowCount++;
    const tableBody = document.getElementById('laundry-table-body');
    const modalEl = document.getElementById('laundryModal');
    const serviceTypeId = modalEl.getAttribute('data-service-id');
    
    const row = document.createElement('tr');
    row.innerHTML = `
        <td class="sno">${rowCount}</td>
        <td>
            <div class="dropdown">
                <input type="text" class="form-control dropdown-toggle w-100 category-input" 
                       placeholder="Select Category" data-bs-toggle="dropdown" aria-expanded="false" required />
                <ul class="dropdown-menu w-50 category-dropdown" style="max-height: 150px; overflow-y: auto;">
                    <div class="category-list">
                        <div class="dropdown-item text-muted">Loading categories...</div>
                    </div>
                </ul>
            </div>
        </td>
        <td>
            <div class="dropdown">
                <input type="text" class="form-control dropdown-toggle w-100 item-input" 
                       placeholder="Select Item" data-bs-toggle="dropdown" aria-expanded="false" required />
                <ul class="dropdown-menu w-50 item-dropdown" style="max-height: 150px; overflow-y: auto;">
                    <div class="item-list">
                        <div class="dropdown-item text-muted">Select category first</div>
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
    
    tableBody.appendChild(row);
    
    // Load categories if we have a service type ID (in edit mode)
    if (serviceTypeId && isEditMode) {
        loadCategoriesForService(row, serviceTypeId);
    }
    
    updateRowTotal(row.querySelector('.quantity'));
}

// Function to load categories for a specific service
function loadCategoriesForService(row, serviceId) {
    if (!serviceId) return;
    
    const categoryList = row.querySelector('.category-list');
    if (!categoryList) return;
    
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
                    
                    // Add click event to load items when category is selected
                    div.addEventListener('click', function() {
                        const categoryInput = row.querySelector('.category-input');
                        categoryInput.value = this.getAttribute('data-value');
                        categoryInput.classList.add('is-valid');
                        
                        // Load items for this category
                        loadItemsForCategory(row, this.getAttribute('data-value'));
                        
                        // Close dropdown
                        const dropdownInstance = bootstrap.Dropdown.getInstance(categoryInput);
                        if (dropdownInstance) dropdownInstance.hide();
                    });
                    
                    categoryList.appendChild(div);
                });
            } else {
                categoryList.innerHTML = '<div class="dropdown-item text-muted">No categories</div>';
            }
        })
        .catch(error => {
            console.error("Error loading categories:", error);
            categoryList.innerHTML = '<div class="dropdown-item text-muted">Error loading categories</div>';
        });
}

// Function to load items for a specific category
function loadItemsForCategory(row, category) {
    const itemList = row.querySelector('.item-list');
    if (!itemList) return;
    
    itemList.innerHTML = '<div class="dropdown-item text-muted">Loading...</div>';
    
    fetch("<?= base_url('service_items') ?>/" + category)
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
                    div.innerText = `${item.name} - ₹${item.price}`;
                    
                    // Add click event to set item and price
                    div.addEventListener('click', function() {
                        const itemInput = row.querySelector('.item-input');
                        const priceCell = row.querySelector('.price-cell');
                        const quantityInput = row.querySelector('.quantity');
                        
                        itemInput.value = this.getAttribute('data-value');
                        itemInput.classList.add('is-valid');
                        
                        // Set price
                        const price = this.getAttribute('data-price');
                        priceCell.setAttribute('data-price', price);
                        
                        // Update row total
                        updateRowTotal(quantityInput);
                        
                        // Close dropdown
                        const dropdownInstance = bootstrap.Dropdown.getInstance(itemInput);
                        if (dropdownInstance) dropdownInstance.hide();
                    });
                    
                    itemList.appendChild(div);
                });
            } else {
                itemList.innerHTML = '<div class="dropdown-item text-muted">No items</div>';
            }
        })
        .catch(error => {
            console.error("Error loading items:", error);
            itemList.innerHTML = '<div class="dropdown-item text-muted">Error loading items</div>';
        });
}

// Initialize dropdown functionality for new rows
function initializeDropdowns() {
    // Category dropdowns
    document.querySelectorAll('.category-input').forEach(input => {
        if (!input.hasAttribute('data-initialized')) {
            input.setAttribute('data-initialized', 'true');
            
            // Show dropdown on focus
            input.addEventListener('focus', function() {
                const dropdown = new bootstrap.Dropdown(this);
                dropdown.show();
            });
        }
    });
    
    // Item dropdowns
    document.querySelectorAll('.item-input').forEach(input => {
        if (!input.hasAttribute('data-initialized')) {
            input.setAttribute('data-initialized', 'true');
            
            // Show dropdown on focus
            input.addEventListener('focus', function() {
                const dropdown = new bootstrap.Dropdown(this);
                dropdown.show();
            });
        }
    });
}

// Update the modal shown event listener
document.getElementById("laundryModal").addEventListener("shown.bs.modal", function () {
    console.log("Modal opened");
    goLaundryStep(1);
    
    // Only add new row if not in edit mode
    const isEditMode = this.getAttribute('data-edit-mode') === 'true';
    if (!isEditMode) {
        const tableBody = document.getElementById("laundry-table-body");
        tableBody.innerHTML = "";
        addRow();
    }
    
    // Initialize dropdowns for all rows
    setTimeout(() => {
        initializeDropdowns();
    }, 100);
    
    clearPaymentForms();
});

document.getElementById("laundryModal").addEventListener("hidden.bs.modal", function () {
    console.log("Modal closed - resetting to step 1");
    goLaundryStep(1);
    
    // Clear all data
    document.querySelector('#laundry-table-body').innerHTML = "";
    document.querySelector('#laundry-preview-body').innerHTML = "";
    document.querySelector('#laundry-summary-body').innerHTML = "";
    clearPaymentForms();
    document.getElementById("laundry-balance").textContent = "₹0";
    
    // Reset payment options in preview tab
    document.querySelector('#laundry-step2 .btn-success').style.display = 'block';
    document.getElementById('payment-options').style.display = 'none';
    
    // Remove service selection highlight
    document.querySelectorAll('.service-input').forEach(inp => {
        inp.style.backgroundColor = '';
        inp.classList.remove('selected-service');
    });
    
    // Reset edit mode
    this.removeAttribute('data-edit-mode');
    this.removeAttribute('data-booking-id');
    document.getElementById('myLargeModalLabel').textContent = "Add Service";
});

function saveLaundryOrder() {
    console.log("=== Starting saveLaundryOrder() ===");
    
    const modalEl = document.getElementById('laundryModal');
    const isEditMode = modalEl.getAttribute('data-edit-mode') === 'true';
    const bookingId = modalEl.getAttribute('data-booking-id');
    
    console.log("Edit mode:", isEditMode, "Booking ID:", bookingId);
    
    // Get payment mode from modal attribute
    const paymentMode = modalEl.getAttribute('data-payment-mode') || 'cash';
    console.log("Payment mode:", paymentMode);
    
    // Payment validation (same as before)
    if (paymentMode !== 'no_payment') {
        const selectedPaymentCard = document.querySelector('.payment-method-card.border-success');
        console.log("Selected payment card:", selectedPaymentCard);
        
        if (!selectedPaymentCard) {
            console.error("No payment method selected - showing alert");
            alert('Please select a payment method');
            return;
        }
        
        const selectedPaymentMode = selectedPaymentCard.getAttribute('data-method');
        console.log("Selected payment mode:", selectedPaymentMode);
        
        // Validate payment forms
        if (selectedPaymentMode === 'upi') {
            const upiTrans = document.querySelector('#laundry-upi-form input[name="upi_trans"]')?.value;
            if (!upiTrans) {
                alert('Please enter a UPI transaction ID');
                return;
            }
        } else if (selectedPaymentMode === 'card') {
            const cardTrans = document.querySelector('#laundry-card-form input[name="card_trans"]')?.value;
            if (!cardTrans) {
                alert('Please enter a card transaction ID');
                return;
            }
        }
    }
    
    // Get guest and room information
    let guestId, roomNo;
    
    if (isEditMode) {
        // In edit mode, use the existing booking data
        guestId = document.querySelector('input[name="guest_id_data"]')?.value || '';
        roomNo = document.querySelector('input[name="room_no_data"]')?.value || '';
    } else {
        // In create mode, use the selected service input
        const selectedInputId = modalEl.getAttribute('data-selected-input-id');
        let selectedServiceInput = null;
        
        if (selectedInputId) {
            selectedServiceInput = document.getElementById(selectedInputId);
        }
        
        if (!selectedServiceInput) {
            selectedServiceInput = document.querySelector('.service-input.selected-service');
        }
        
        console.log("Selected service input:", selectedServiceInput);
        
        if (!selectedServiceInput) {
            console.error("No service input selected - showing alert");
            alert('Please select a guest and service first');
            return;
        }
        
        const tableRow = selectedServiceInput.closest('tr');
        guestId = tableRow.getAttribute('data-guest-id');
        roomNo = tableRow.getAttribute('data-room-no');
    }
    
    console.log("Guest ID:", guestId, "Room No:", roomNo);
    
    // Get service data
    const serviceType = modalEl.getAttribute('data-service-name') || 'Service';
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
    
    // Collect all service items
    const serviceItems = [];
    const itemRows = document.querySelectorAll('#laundry-table-body tr');
    console.log("Found", itemRows.length, "service items");
    
    itemRows.forEach((row, index) => {
        const category = row.querySelector('.category-input').value;
        const item = row.querySelector('.item-input').value;
        const quantity = row.querySelector('.quantity').value;
        const price = row.querySelector('.price-cell').getAttribute('data-price');
        const total = row.querySelector('.row-total').textContent.replace('₹', '');
        
        console.log(`Item ${index + 1}:`, {category, item, quantity, price, total});
        
        if (category && item) {
            serviceItems.push({
                item: category,
                type: item,
                qty: quantity,
                price: price,
                total: total
            });
        }
    });
    
    console.log("All service items:", serviceItems);
    
    // Create form and set attributes
    let form = document.createElement("form");
    form.method = "POST";
    
    // Set the appropriate action based on mode
    if (isEditMode) {
        form.action = "<?= base_url('updateservicebooking') ?>";
        console.log("Form action: updateservicebooking (EDIT MODE)");
    } else {
        form.action = "paymentrecd";
        console.log("Form action: paymentrecd (CREATE MODE)");
    }
    
    // Create input fields for basic data
    const basicFields = {
        'guest_id_data': guestId,
        'room_no_data': roomNo,
        'service_type': serviceType,
        'service_type_id': serviceTypeId,
        'amount_data': totalAmount.replace('₹', '')
    };
    
    // Add booking ID for edit mode
    if (isEditMode && bookingId) {
        basicFields['booking_id'] = bookingId;
    }
    
    // Handle payment mode and status
    if (paymentMode === 'no_payment') {
        basicFields['payment_mode'] = '';
        basicFields['payment_status'] = 'pending';
        console.log("No payment selected - setting payment_mode: '', payment_status: 'pending'");
    } else {
        basicFields['payment_mode'] = paymentMode;
        basicFields['payment_status'] = 'success';
        console.log("Payment method selected - setting payment_mode:", paymentMode, "payment_status: 'success'");
    }
    
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
    
    // Add service items as JSON
    let serviceInfoInput = document.createElement("input");
    serviceInfoInput.type = "hidden";
    serviceInfoInput.name = "service_info";
    serviceInfoInput.value = JSON.stringify(serviceItems);
    form.appendChild(serviceInfoInput);
    console.log("Added service_info field with JSON data");
    
    // Add payment method specific data (only if not "no_payment")
    if (paymentMode !== 'no_payment') {
        switch(paymentMode) {
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
    } else {
        console.log("No payment mode - skipping payment-specific fields");
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

// Initialize DataTables
$(document).ready(function () {
    $('#form_inputs').DataTable();
    $('#form_inputs_1').DataTable({
        paging: true,
        searching: true,
        info: true
    });
});
</script>


</html>
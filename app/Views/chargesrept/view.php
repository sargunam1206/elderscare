
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="refresh" content="900;url=http://viyoma.neuralarc.com/viyoma/logout"  />

  <!-- Favicon icon-->
  
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Udayana</title>
  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
    height: 60vh;

    overflow-y: auto;
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

    .dropdown-item:hover,
    .dropdown-item.active {
      background-color: #198754;
      color: #fff;
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
 

          <div class="px-3 py-2">
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
              <div class="">
                
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
              <h4 class=""  style="font-size:18px;"><i class="bi bi-list-check me-2 text-success"></i>Charges List</h4>
              <div>
                
  <a href="<?= base_url('addproduct'); ?>" class="btn btn-primary">View Charges</a> 
                
              </div>
            </div>


            <form method="get" action="<?= current_url() ?>" class="mb-4">
    <div class="row g-3 align-items-end">
        
        <!-- Month Year Range -->
        <div class="col-md-2">
            <label class="form-label">From Month</label>
            <input type="month" class="form-control" name="from_month" 
                   value="<?= !empty($filter_from_month) ? esc($filter_from_month) : '' ?>">
        </div>
        
        <div class="col-md-2">
            <label class="form-label">To Month</label>
            <input type="month" class="form-control" name="to_month" 
                   value="<?= !empty($filter_to_month) ? esc($filter_to_month) : '' ?>">
        </div>

        <!-- Room No Dropdown (similar to your existing room filter) -->
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


        <!-- Guest Name Dropdown (similar to your existing guest filter) -->
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
            <button type="submit" class="btn btn-success">Filter</button>
             <button type="submit" name="pdf" value="1" class="btn btn-primary" formtarget="_blank">PDF</button>
      <button type="submit" name="excel" value="1" class="btn btn-primary">Excel</button>
            <a href="<?= current_url() ?>" class="btn btn-secondary">Reset</a>
        </div>
    </div>
</form>

<!-- In your view file -->

              
                  <!-- <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</a>
    </td> -->




                   <div class="table-responsive mt-3">
  


<?php
// Group rows by charge_id
$grouped = [];
foreach ($serviceTypes as $row) {
    $cid = $row['charge_id'];
    if (!isset($grouped[$cid])) {
        $grouped[$cid] = [
            'charge_id'   => $cid,
            'created_on'  => $row['created_on'],
            'charge_monthyear'  => $row['charge_monthyear'],
            'total_paid'  => 0,
            'items'       => []
        ];
    }
    $grouped[$cid]['total_paid'] += (float)$row['paid_amount'];
    $grouped[$cid]['items'][] = [
        'charge_info'   => $row['charge_info'],
        'payment_mode'  => $row['payment_mode'],
        'paid_amount'   => $row['paid_amount']
    ];
}
?>

<!-- MAIN TABLE -->
<table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
  <thead>
        <tr>
           <th>S.No</th>
           <th>Date Time</th>
           <th>Month of Charge</th>
           <th>Total Paid Amount</th>
           <th>Charge Info</th>
        </tr>
  </thead>
  <tbody>
        <?php $i = 1; foreach ($grouped as $asset): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $asset['created_on']; ?></td>
                  <td><?= $asset['charge_monthyear']; ?></td>
                <td><?= $asset['total_paid']; ?></td>
                <td>
                  <button type="button"
                          class="btn btn-success"
                          data-bs-toggle="modal"
                          data-bs-target="#chargeInfoModal"
                          onclick='showChargeInfo(<?= json_encode($asset["items"]); ?>)'>
                          Info
                  </button>
                </td>
            </tr>
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


        





             
           
   
         
<!-- MODAL -->
<div class="modal fade" id="chargeInfoModal" tabindex="-1" aria-labelledby="chargeInfoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chargeInfoLabel">Charge Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">

        <div class="table-responsive mt-3">
          <table id="form_inputs_1" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Charges Type</th>
                <th>Paid Amount</th>
              </tr>
            </thead>
            <tbody id="chargeInfoBody">
              <!-- Filled dynamically -->
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>










<!-- SCRIPT -->
<!-- <script>
  
function showChargeInfo(items) {
    
    let tbody = document.getElementById('chargeInfoBody');
    tbody.innerHTML = '';
    items.forEach((item, index) => {
        tbody.innerHTML += `
          <tr>
            <td>${index + 1}</td>
            <td>${item.charge_info}</td>
            <td>${item.paid_amount}</td>
          </tr>`;
    });
}

 // Second table -> no pagination, only sorting/search
  $('#form_inputs_1').DataTable({
    paging: true,
    searching: true, // keep false if you don’t need search box
    info: true
  });
</script> -->

<script>
function showChargeInfo(items) {
    // Initialize or get existing DataTable
    let table = $('#form_inputs_1').DataTable();
    table.clear(); // clear old rows

    let i = 1;
    items.forEach(item => {
        table.row.add([
            i++,
            item.charge_info,
            item.paid_amount
        ]);
    });

    table.draw();
}

// Init DataTable on page load
$(document).ready(function () {
    $('#form_inputs_1').DataTable({
        paging: true,
        searching: true, // set false if you don’t want a search box
        info: true
    });
});
</script>


 



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
  const relationInput = document.getElementById('roomTypeInput');
  const relationItems = document.querySelectorAll('#relationLists .dropdown-item');

  relationItems.forEach(item => {
    item.addEventListener('click', function () {
      const value = this.getAttribute('data-value');
      relationInput.value = value;
    });
  });
</script>







</body>


</html>
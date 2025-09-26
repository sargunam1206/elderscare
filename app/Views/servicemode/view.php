
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

</head>

<body style="background-color:#EDF7EE;">
    <?= view('layout/head-Admin') ?>

  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>

    <!-- Sidebar Start -->
       <!-- Sidebar Start -->
    
    <!--  Sidebar End -->

      <!--  Header Start -->
     
      <!--  Header End -->



        

          <div class="p-3">
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
      <form method="post"  id="assetForm"  action="<?= base_url('addservicemodes'); ?>" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myLargeModalLabel">Add Service Mode</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  <div class="modal-body">
          <?php 
          $session = \Config\Services::session();
          if (isset($session->success)): ?>
            <!-- <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
              <div class="d-flex align-items-center text-primary">
                <i class="ti ti-info-circle me-2 fs-4"></i>
                <?= $session->success; ?>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->
          <?php endif; ?>

          <div class="row">
         
         

  
    <div class="col-12" id="category_section" >
  <div class="mb-3">
    <label class="form-label required">Category</label>
    <div class="dropdown">
      <input type="text" 
             class="form-control w-100" 
             id="category_name"
             name="category_name"
             placeholder="Select Category"
             autocomplete="off"
             data-bs-toggle="dropdown" 
             aria-expanded="false" required />
     <!-- Error message must be here (linked to input above) -->
      <div class="invalid-feedback">
        Please select a category.
      </div>
      <ul class="dropdown-menu w-100" style="max-height: 150px; overflow-y: auto;">
        <div id="categoryList" style="width: 100%;">
          <?php foreach($category as $type) :?> 

        <div class="dropdown-item" data-value="<?= $type['category_name'] ?>"><?= $type['category_name'] ?></div>
       

        <?php endforeach; ?>

      
        </div>
      </ul>
    </div>
  </div>
</div>






   <div class="col-12">
      <div class="mb-3">
          <label for="room_no" class="form-label required">Service Mode</label>
        <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="name" id="name" placeholder="Enter Service Mode "  autocomplete="off" required />
<div class="invalid-feedback">
            Please enter a Service Mode.
        </div>

         
        </div>
      </div>
      </div>

        <div class="col-12">
      <div class="mb-3">
          <label for="room_no" class="form-label required">Price</label>
        <div class="dropdown">
                    <input type="number" class="form-control dropdown-toggle w-100" name="price" id="price" placeholder="Enter Price "  autocomplete="off" required />
<div class="invalid-feedback">
            Please enter a Price.
        </div>

         
        </div>
      </div>
      </div>

 <div class="col-12">
      <div class="mb-3">
          <label for="room_no" class="form-label required">Description</label>
        <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="description" id="description" placeholder="Enter Description "  autocomplete="off" required />

         <div class="invalid-feedback">
            Please enter a description.
        </div>

        </div>
      </div>
      </div>

<div>
</div>



          



     </div>
   </div>
   

        <div class="modal-footer border-top justify-content-end">
  <button type="button" class="btn bg-danger-subtle text-danger me-2" data-bs-dismiss="modal">
    Cancel
  </button>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">
    Save
  </button>
</div>

      </form>
    </div>
  </div>
</div>










            <!-- </div> -->

            <div class="">
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
                    
                  <form method="post"  action="<?= base_url('viewassettype'); ?>">
                    

 <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fs-7"><i class="bi bi-gear text-success px-2"></i>

Services Mode</h5>
              <div>
               
                 <button type="button" 
   class="btn btn-primary" 
   data-bs-toggle="modal" 
   data-bs-target="#vertical-center-scroll-modal">
   <i class="bi bi-plus-circle me-1"></i>
   Add Service Modes
</button>
              </div>
            </div>


              
                  <!-- <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</a>
    </td> -->
                   <div class="table-responsive mt-3">
  
   <table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
  <thead>
        <tr>
        <!-- <th><input type="checkbox" id="select_all"></th>  -->
           <th>S.No</th>
    <th >Category Name</th>     <!-- Increased width -->
   <th >Service Modes</th> 
   <th >Price</th> 
   <th >Description</th> 
    <th >Actions</th>      <!-- Decreased width -->
        </tr>
    </thead>
    <tbody>
  
        <?php $i = 1; foreach ($servicemodes as $asset):
          // $base=base64_encode(base64_encode(base64_encode($asset['id'])));
            ?>
            <tr>
              
              
                <td><?= $i++; ?> </td>
        
                <td><?= $asset['category_name']; ?></td>

                <td><?= $asset['name']; ?></td>
                <td><?= $asset['price']; ?></td>
                <td><?= $asset['description']; ?></td>
          
               
                <td>
                  <//?= var_dump($asset['id']); ?>

                  <!-- Update Button that triggers modal -->
<button type="button"
        class="btn" style="color:blue"
        data-bs-toggle="modal"
        data-bs-target="#vertical-center-scroll-modal"
        onclick='editAsset(JSON.parse(this.getAttribute("data-asset")))'
        data-asset='<?= json_encode($asset) ?>'>

       
    <i class="bi bi-pencil-square" ></i>
</button>
 <a href="javascript:void(0)" 
   class="btn " 
   data-bs-toggle="modal" 
   data-bs-target="#deleteConfirmationModal<?= $asset['service_mode_id']; ?>">
 <i class="bi bi-trash text-danger"></i>
</a>






                <!-- <a href="<//?= base_url('editassettype/'. $asset['id']);ass ?>" class="btn btn-info">Update</a> -->
                

                    <!--a href="/assettype/delete/<//?= $asset['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>-->
                </td>
            </tr>

            <div class="modal fade" id="deleteConfirmationModal<?= $asset['service_mode_id']; ?>" tabindex="-1" aria-labelledby="deleteModalTitle<?= $asset['service_mode_id']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title" id="deleteModalTitle<?= $asset['service_mode_id']; ?>">Are you sure you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer d-flex gap-3 justify-content-end">
        <!-- Confirm Delete Button -->
        <a href="<?= base_url('deleteservmodes/' . $asset['service_mode_id']); ?>" class="btn btn-danger">Yes</a>
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
   <script src="<?= base_url(); ?>/public/js/dropdown_search.js"></script>



  <script>
  const relationInput = document.getElementById('category_name');
  const relationItems = document.querySelectorAll('#categoryList .dropdown-item');

  relationItems.forEach(item => {
    item.addEventListener('click', function () {
     // const value = this.getAttribute('data-value');
      const value = this.getAttribute('data-value'); // ID
        //const label = this.getAttribute('data-label'); // Name

        relationInput.value = value; // Store ID in hidden input
        
        //relationInput.textContent = label; // Update dropdown button text
    });
  });
</script>






<script>
function editAsset(asset) {
  
 console.log(asset);
  document.getElementById('myLargeModalLabel').textContent = "Edit Service Modes";

  // Update form action to update URL
  const form = document.getElementById("assetForm");
  form.action = "<?= base_url('updateservmodes') ?>/" + asset.service_mode_id ;
  
  // Set all input values
  document.getElementById("category_name").value = asset.category_name || '';

  document.getElementById('name').value = asset.name || '';
  document.getElementById('price').value = asset.price || '';
  document.getElementById('description').value = asset.description || '';



}

// Reset modal form when closed
document.getElementById('vertical-center-scroll-modal').addEventListener('hidden.bs.modal', function () {
    document.getElementById('myLargeModalLabel').textContent = "Add Service Modes";
  const form = document.getElementById('assetForm');
  form.reset();
  document.getElementById('addaccessory-container').innerHTML = '';
  form.action = "<?= base_url('servicemodes'); ?>"; // Reset to "Add" mode
 
}); 
</script>

<script>
(() => {
  'use strict'

  // Fetch all forms that require validation
  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

</body>


</html>
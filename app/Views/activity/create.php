<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
  <!-- Favicon icon-->
  
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Udayana</title>
  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>Activities Management</title>
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
    
    /* Custom validation styles */
    .is-invalid {
      border-color: #dc3545 !important;
    }
    
    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #dc3545;
    }
    
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip,
    .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip,
    .dropdown.is-invalid ~ .invalid-feedback,
    /* Fixed selector for dropdown validation */
    .dropdown.is-invalid .invalid-feedback {
      display: block;
    }
    
    .dropdown.is-invalid .form-control {
      border-color: #dc3545 !important;
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
.table {
      background-color: var(--white);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
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

<?= view('layout/head-Admin') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <div class="main-wrapper overflow-hidden">
    <div class="">
      <!-- Display success/error messages -->
      <?php if(session()->getFlashdata('message')): ?>
        <div class="alert alert-success alert-dismissible fade show">
          <?= session()->getFlashdata('message') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      
      <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show">
          <?= session()->getFlashdata('error') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="row g-4">
        <div class="col-md-12">
          <div class=" p-3 h-100 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fs-5"><i class="bi bi-calendar-event me-2 text-success"></i>Scheduled Activities</h5>
              <div>
                <span class="badge bg-light text-success border border-success me-2">
                  <?= count($activities) ?> activities
                </span>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#activityModal" onclick="resetForm()">
                  <i class="bi bi-plus-circle me-1"></i> Add Activity
                </button>
              </div>
            </div>

            <!-- Filter Controls -->
            <form method="get" action="<?= current_url() ?>" class="mb-4">
              <div class="row g-3 align-items-end">

                <!-- Date Range -->
                <div class="col-md-2">
                  <label class="form-label">From Date</label>
                  <input type="date" class="form-control" name="from_date" value="<?= $filter_from_date ?? '' ?>">
                </div>

                <div class="col-md-2">
                  <label class="form-label">To Date</label>
                  <input type="date" class="form-control" name="to_date" value="<?= $filter_to_date ?? '' ?>">
                </div>

                <!-- Activity Type Custom Dropdown -->
                <div class="col-md-2">
                  <label class="form-label">Activity Type</label>
                  <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100"
                           name="activityDisplay"
                           id="activityFilterDisplay"
                           placeholder="Select Activity"
                           data-bs-toggle="dropdown"
                           aria-expanded="false"
                           autocomplete="off"
                           readonly
                           value="<?= $filter_activity_type ?: 'All' ?>" />

                    <!-- Hidden input to store the actual value -->
                    <input type="hidden" name="activity_type" id="activityFilter" value="<?= $filter_activity_type ?: 'all' ?>">

                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="activityFilterDisplay"
                        style="max-height: 150px; overflow-y: auto;">
                      <div id="activityLists" style="width: 100%;">
                        <div class="dropdown-item" data-value="all">All</div>
                        <div class="dropdown-item" data-value="Physical Exercise">Physical Exercise</div>
                        <div class="dropdown-item" data-value="Mental Exercise">Mental Exercise</div>
                        <div class="dropdown-item" data-value="Social Activity">Social Activity</div>
                        <div class="dropdown-item" data-value="Educational">Educational</div>
                        <div class="dropdown-item" data-value="Recreational">Recreational</div>
                      </div>
                    </ul>
                  </div>
                </div>

                <!-- Action Buttons -->
                <div class="col-md-3 d-flex gap-2">
                  <button type="submit" class="btn btn-success flex-grow-1">Filter</button>

                  <button type="submit" name="pdf" value="1" class="btn btn-primary" formtarget="_blank">PDF</button>

                  <button type="submit" name="excel" value="1" class="btn btn-primary">Excel</button>
                  <a href="<?= current_url() ?>" class="btn btn-secondary">Reset</a>
                </div>
              </div>
            </form>

            <!-- Table View -->
            <div class="table-responsive">
              <table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                <thead>
                  <tr>
                    <th style="width: 50px;">S.No</th>
                    <th>Activity Name</th>
                    <th>Date & Time</th>
                    <th>Category</th>
                    <th>Duration</th>
                    <th>Description</th>
                    <th style="width: 130px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($activities as $index => $activity): ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= esc($activity['activity_name']) ?></td>
                      <td><?= date('M d, Y', strtotime($activity['activity_date'])) ?> • <?= date('h:i A', strtotime($activity['activity_time'])) ?></td>
                      <td><span class="badge bg-success"><?= esc($activity['category']) ?></span></td>
                      <td><?= esc($activity['duration_minutes']) ?> min</td>
                      <td><?= esc($activity['description']) ?></td>
                      <td>
                        <button class="btn btn-sm text-primary" onclick="editActivity(<?= $activity['activity_id'] ?>)">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm text-danger" data-bs-toggle="modal" 
                          data-bs-target="#deleteConfirmationModal" 
                          onclick="setDeleteId(<?= $activity['activity_id'] ?>)">
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Activity Form Modal -->
    <div class="modal fade" id="activityModal" tabindex="-1" aria-labelledby="activityModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-lg-custom">
        <form id="activityForm" method="post" class="needs-validation" novalidate>
          <?= csrf_field() ?>
          <input type="hidden" name="activity_id" id="activity_id">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="activityModalLabel"><i class="bi bi-plus-circle-fill me-2"></i>Add New Activity</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <!-- Activity Name -->
            <div class="mb-3">
              <label class="form-label required">Activity Name</label>
              <input type="text" class="form-control" name="activity_name" id="activity_name" 
                placeholder="e.g., Morning Yoga, Bingo Night" required>
              <div class="invalid-feedback">Please enter an activity name</div>
            </div>
            
            <hr class="hr" />
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label required">Date</label>
                <input type="date" class="form-control" name="activity_date" id="activity_date" required>
                <div class="invalid-feedback">Please select a date</div>
              </div>
              <div class="col-md-6">
                <label class="form-label required">Time</label>
                <div class="time-input-group">
                  <input type="time" class="form-control" name="activity_time" id="activity_time" required>
                  <div class="invalid-feedback">Please select a time</div>
                </div>
              </div>
            </div>

            <hr class="hr" />
            
            <!-- Time and Duration -->
            <div class="row mb-3">
              <div class="mb-3 col-md-6">
                <label for="categoryInput" class="form-label required">Category</label>
                <div class="dropdown" id="categoryDropdown">
                  <input type="text" class="form-control dropdown-toggle w-100" 
                        name="categoryDisplay" id="categoryInput"
                        placeholder="Select Category" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false" 
                        autocomplete="off" 
                        readonly required>
                  <!-- Hidden input for actual value that will be validated -->
                  <input type="hidden" name="category" id="categoryHidden" required>
                  <ul class="dropdown-menu p-2 w-100" aria-labelledby="categoryInput" style="max-height: 150px; overflow-y: auto;">
                    <div id="categoryLists" style="width: 100%;">
                      <div class="dropdown-item" data-value="">Select Category</div>
                      <div class="dropdown-item" data-value="Physical Exercise">Physical Exercise</div>
                      <div class="dropdown-item" data-value="Mental Exercise">Mental Exercise</div>
                      <div class="dropdown-item" data-value="Social Activity">Social Activity</div>
                      <div class="dropdown-item" data-value="Educational">Educational</div>
                      <div class="dropdown-item" data-value="Recreational">Recreational</div>
                    </div>
                  </ul>
                  <div class="invalid-feedback">Please select a category</div>
                </div>
              </div>
              <div class="col-md-6">
                <label class="form-label required">Duration (minutes)</label>
                <input type="number" class="form-control" name="duration_minutes" id="duration_minutes" min="1" required>
                <div class="invalid-feedback">Please enter a valid duration in minutes</div>
              </div>
            </div>
            
            <hr class="hr" />
            
            <!-- Description -->
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="3" name="description" id="description" 
                placeholder="Brief description of the activity and any special requirements..."></textarea>
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                <i class="bi bi-x-circle me-1"></i> Cancel
              </button>
              <button type="submit" class="btn btn-primary" id="saveButton">
                <i class="bi bi-save me-1"></i> Save Activity
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Single Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <h5 class="modal-title" id="deleteModalTitle">Are you sure you want to delete this activity?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-footer d-flex gap-3 justify-content-end">
            <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Yes</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
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
  <!-- DataTables JS -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize DataTable
        $('#activitiesTable').DataTable({
            responsive: true,
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 2, targets: 1 },
                { responsivePriority: 3, targets: -1 },
                { responsivePriority: 4, targets: 2 },
                { responsivePriority: 5, targets: 3 },
                { responsivePriority: 6, targets: 4 },
                { responsivePriority: 7, targets: 5 }
            ]
        });
        
        // Initialize dropdown functionality
        setupDropdown('activityFilterDisplay', 'activityFilter', 'activityLists');
        setupCategoryDropdown();
        
        // Form validation
        setupFormValidation();
    });

    function setDeleteId(id) {
        document.getElementById('confirmDeleteBtn').href = `<?= base_url('activities/delete/') ?>${id}`;
    }

    function resetForm() {
        const form = document.getElementById('activityForm');
        form.reset();
        form.classList.remove('was-validated');
        $('#activity_id').val('');
        $('#activityModalLabel').html('<i class="bi bi-plus-circle-fill me-2"></i>Add New Activity');
        $('#saveButton').html('<i class="bi bi-save me-1"></i> Save Activity');
        $('#activityForm').attr('action', '<?= base_url('activities/store') ?>');
        
        // Reset category dropdown
        $('#categoryInput').val('');
        $('#categoryHidden').val('');
        $('#categoryDropdown').removeClass('is-invalid');
        
        // Set today's date as default
        document.getElementById('activity_date').valueAsDate = new Date();
    }

    function setupDropdown(displayId, hiddenId, listId) {
        const display = document.getElementById(displayId);
        const hidden = document.getElementById(hiddenId);
        const items = document.querySelectorAll(`#${listId} .dropdown-item`);

        items.forEach(item => {
            item.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                const text = this.textContent.trim();
                display.value = text;
                hidden.value = value;
            });
        });
    }

    function setupCategoryDropdown() {
        const categoryInput = document.getElementById('categoryInput');
        const categoryHidden = document.getElementById('categoryHidden');
        const categoryItems = document.querySelectorAll('#categoryLists .dropdown-item');
        const categoryDropdown = document.getElementById('categoryDropdown');

        categoryItems.forEach(item => {
            item.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                const text = this.textContent.trim();
                categoryInput.value = text;
                categoryHidden.value = value;
                
                // Remove invalid state when an item is selected
                categoryDropdown.classList.remove('is-invalid');
                categoryHidden.setCustomValidity('');
            });
        });
    }

    function setupFormValidation() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const form = document.getElementById('activityForm');
        
        // Add event listener for form submission
        form.addEventListener('submit', function(event) {
            // Validate category separately
            const categoryHidden = document.getElementById('categoryHidden');
            const categoryDropdown = document.getElementById('categoryDropdown');
            
            if (!categoryHidden.value) {
                categoryDropdown.classList.add('is-invalid');
                categoryHidden.setCustomValidity('Please select a category');
                event.preventDefault();
                event.stopPropagation();
            } else {
                categoryDropdown.classList.remove('is-invalid');
                categoryHidden.setCustomValidity('');
            }
            
            // Check form validity
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
                
                // Show validation messages for all invalid fields
                const invalidFields = form.querySelectorAll(':invalid');
                invalidFields.forEach(field => {
                    field.classList.add('is-invalid');
                });
            }
            // If form is valid, it will submit normally
        }, false);
        
        // Add event listeners to remove validation styling when fields are edited
        const formFields = form.querySelectorAll('input, select, textarea');
        formFields.forEach(field => {
            field.addEventListener('input', function() {
                this.classList.remove('is-invalid');
                
                // Special handling for category dropdown
                if (this.id === 'categoryHidden' && this.value) {
                    document.getElementById('categoryDropdown').classList.remove('is-invalid');
                }
            });
        });
    }

    function editActivity(id) {
        // Fetch activity data via AJAX
        $.get(`<?= base_url('activities/edit/') ?>${id}`, function(response) {
            if (response.status === 'success') {
                const data = response.data;
                
                // Populate the form with the fetched data
                $('#activity_id').val(data.activity_id);
                $('#activity_name').val(data.activity_name);
                $('#activity_date').val(data.activity_date);
                $('#activity_time').val(data.activity_time);
                $('#duration_minutes').val(data.duration_minutes);
                $('#description').val(data.description);
                
                // Set the category dropdown value
                $('#categoryInput').val(data.category);
                $('#categoryHidden').val(data.category);
                
                // Change the modal title and button text
                $('#activityModalLabel').html('<i class="bi bi-pencil-square me-2"></i>Edit Activity');
                $('#saveButton').html('<i class="bi bi-arrow-repeat me-1"></i> Update Activity');
                
                // Change the form action for updates
                $('#activityForm').attr('action', `<?= base_url('activities/update/') ?>${id}`);
                
                // Show the modal
                $('#activityModal').modal('show');
            } else {
                alert(response.message || 'Failed to fetch activity data');
            }
        }).fail(function() {
            alert('Failed to connect to server');
        });
    }

    // Reset form when modal is closed
    $('#activityModal').on('hidden.bs.modal', function () {
        resetForm();
    });
  </script>
</div>
</body>
</html>
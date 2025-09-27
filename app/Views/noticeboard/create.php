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

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f4f6f9;
      font-size: 14px;
    }

    .form-label {
      font-weight: bold;
    }

    /* Modal specific styles */
    .modal-lg-custom {
      max-width: 800px;
    }
    .modal-content {
      border-radius: 10px;
    }
    .modal-header {
      border-bottom: 1px solid #dee2e6;
    }
    .modal-footer {
      border-top: 1px solid #dee2e6;
    }
    
    /* Table styling */
    #noticesTable tr td:last-child {
      white-space: nowrap;
    }
    
    /* Priority badges */
    .badge-priority-high {
      background-color: #f8d7da;
      color: #842029;
    }
    .badge-priority-medium {
      background-color: #fff3cd;
      color: #664d03;
    }
    .badge-priority-low {
      background-color: #d1e7dd;
      color: #0f5132;
    }
    
    /* File attachment styles */
    .file-attachment {
      display: inline-block;
      margin-right: 5px;
      margin-bottom: 5px;
    }
    .file-attachment a {
      color: #0d6efd;
      text-decoration: none;
    }
    .file-attachment a:hover {
      text-decoration: underline;
    }
    
    /* Dropdown styles */
    .dropdown-menu {
      max-height: 200px;
      overflow-y: auto;
    }
    .dropdown-item {
      cursor: pointer;
      padding: 8px 12px;
      border-radius: 4px;
      transition: all 0.2s;
    }
    .dropdown-item:hover {
      background-color: #f8f9fa;
    }
    .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid;
      border-right: 0.3em solid transparent;
      border-bottom: 0;
      border-left: 0.3em solid transparent;
    }
    
    /* Upload box styles */
    .upload-box {
      border: 2px dashed #ccc;
      padding: 10px;
      text-align: center;
      cursor: pointer;
      border-radius: 8px;
      transition: all 0.3s ease;
      margin-bottom: 15px;
    }
    .upload-box:hover {
      background-color: #f8f9fa;
      border-color: #2E7D32;
    }
    .upload-box i {
      font-size: 2rem;
      color: #2E7D32;
      margin-bottom: 10px;
    }
    .file-input {
      display: none;
    }
    .file-list {
      margin-top: 15px;
    }
    .file-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 12px;
      background: #f8f9fa;
      border-radius: 4px;
      margin-bottom: 8px;
      border: 1px solid #dee2e6;
    }
    .file-item button {
      background: none;
      border: none;
      color: #dc3545;
      cursor: pointer;
      padding: 0;
      margin-left: 10px;
    }
    
    /* Validation styles */
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
    
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
    .dropdown.is-invalid ~ .invalid-feedback {
      display: block;
    }
    
    .dropdown.is-invalid .form-control {
      border-color: #dc3545 !important;
    }
  </style> 

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
    <!-- Add baseUrl hidden input -->
    <input type="hidden" id="baseUrl" data-url="<?= base_url() ?>/">
    
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
          <div class=" px-3 py-2 h-100 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class=""  style="font-size:18px;"><i class="bi bi-megaphone me-2 text-success"></i>Notice Board</h4>
              <div>
                <span class="badge bg-light text-success border border-success me-2 fs-1">
                  <?= count($notices) ?> notices
                </span>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#noticeModal" onclick="resetForm()">
                  <i class="bi bi-plus-circle me-1"></i> Add Notice
                </button>
              </div>
            </div>

            <!-- Filter Controls -->
            <form method="get" action="<?= current_url() ?>" class="mb-4">
              <div class="row g-3 align-items-end">
                <!-- From Date -->
                <div class="col-md-2">
                  <label class="form-label">From Date</label>
                  <input type="date" class="form-control" name="from_date" value="<?= $filter_from_date ?? '' ?>">
                </div>

                <!-- To Date -->
                <div class="col-md-2">
                  <label class="form-label">To Date</label>
                  <input type="date" class="form-control" name="to_date" value="<?= $filter_to_date ?? '' ?>">
                </div>

                <!-- Priority -->
                <div class="col-md-2">
                  <label class="form-label">Priority</label>
                  <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="priorityDisplay"
                      id="priorityFilterDisplay" placeholder="Select Priority" data-bs-toggle="dropdown" aria-expanded="false"
                      autocomplete="off" readonly value="<?= $filter_priority ?: 'All' ?>" />
                    <!-- Hidden input to store actual value -->
                    <input type="hidden" name="priority" id="priorityFilter" value="<?= $filter_priority ?: 'all' ?>">
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="priorityFilterDisplay" style="max-height: 150px; overflow-y: auto;">
                      <div id="priorityLists" style="width: 100%;">
                        <div class="dropdown-item" data-value="all">All</div>
                        <div class="dropdown-item" data-value="High">High</div>
                        <div class="dropdown-item" data-value="Medium">Medium</div>
                        <div class="dropdown-item" data-value="Low">Low</div>
                      </div>
                    </ul>
                  </div>
                </div>

                <!-- Category -->
                <div class="col-md-2">
                  <label class="form-label">Category</label>
                  <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="categoryDisplay"
                      id="categoryFilterDisplay" placeholder="Select Category" data-bs-toggle="dropdown" aria-expanded="false"
                      autocomplete="off" readonly value="<?= $filter_category ?: 'All' ?>" />
                    <!-- Hidden input to store actual value -->
                    <input type="hidden" name="category" id="categoryFilter" value="<?= $filter_category ?: 'all' ?>">
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="categoryFilterDisplay" style="max-height: 150px; overflow-y: auto;">
                      <div id="categoryLists" style="width: 100%;">
                        <div class="dropdown-item" data-value="all">All</div>
                        <div class="dropdown-item" data-value="General">General</div>
                        <div class="dropdown-item" data-value="Important">Important</div>
                        <div class="dropdown-item" data-value="Urgent">Urgent</div>
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
                    <th>Title</th>
                    <th>Content</th>
                    <th>Priority</th>
                    <th>Category</th>
                    <th>Dates</th>
                    <th>Attachments</th>
                    <th style="width: 130px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($notices as $index => $notice): ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= esc($notice['title']) ?></td>
                      <td><?= esc(substr($notice['content'], 0, 50)) ?>...</td>
                      <td>
                        <?php 
                          $priorityClass = '';
                          if ($notice['priority'] === 'High') $priorityClass = 'badge-priority-high';
                          if ($notice['priority'] === 'Medium') $priorityClass = 'badge-priority-medium';
                          if ($notice['priority'] === 'Low') $priorityClass = 'badge-priority-low';
                        ?>
                        <span class="badge <?= $priorityClass ?>"><?= esc($notice['priority']) ?></span>
                      </td>
                      <td><?= esc($notice['category']) ?></td>
                      <td>
                        <?= date('M d, Y', strtotime($notice['start_date'])) ?>
                        <?php if($notice['end_date']): ?>
                          <br>to <?= date('M d, Y', strtotime($notice['end_date'])) ?>
                        <?php else: ?>
                          <br><span class="text-muted">No end date</span>
                        <?php endif; ?>
                      </td>
                      <td>
                      <?php if(isset($notice['files']) && count($notice['files']) > 0): ?>
                        <?php foreach($notice['files'] as $file): ?>
                          <div class="file-attachment ">
                            <a href="javascript:void(0)"  class="text-success"
                              onclick="previewFile(<?= $file['id'] ?>, '<?= esc($file['original_name']) ?>', '<?= esc($file['file_path']) ?>')">
                              <i class="bi bi-paperclip "></i> <?= esc($file['original_name']) ?>
                            </a>
                          </div>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <span class="text-muted">None</span>
                      <?php endif; ?>
                    </td>
                      <td>
                        <button class="btn btn-sm text-primary" onclick="editNotice(<?= $notice['id'] ?>)">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm text-danger" data-bs-toggle="modal" 
                          data-bs-target="#deleteConfirmationModal" 
                          onclick="setDeleteId(<?= $notice['id'] ?>)">
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

    <!-- Notice Form Modal -->
    <div class="modal fade" id="noticeModal" tabindex="-1" aria-labelledby="noticeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-lg-custom">
        <form id="noticeForm" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
          <?= csrf_field() ?>
          <input type="hidden" name="id" id="noticeId">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="noticeModalLabel"><i class="bi bi-plus-circle-fill me-2"></i>Add New Notice</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Notice Title & Content -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Notice Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter notice title" required>
                  <div class="invalid-feedback">Please enter a notice title</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Notice Content</label>
                  <textarea class="form-control" rows="1" name="content" id="content" placeholder="Enter notice content..." required></textarea>
                  <div class="invalid-feedback">Please enter notice content</div>
                </div>
              </div>
              <hr class="hr" />
              
              <!-- Priority & Category -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Priority</label>
                  <div class="dropdown" id="priorityDropdown">
                    <input type="text" class="form-control dropdown-toggle" name="priorityDisplay" id="priorityInput"
                      placeholder="Select Priority" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required />
                    <!-- Hidden input for actual value -->
                    <input type="hidden" name="priority" id="priorityHidden" required>
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="priorityInput">
                      <li><div class="dropdown-item" data-value="High">High</div></li>
                      <li><div class="dropdown-item" data-value="Medium">Medium</div></li>
                      <li><div class="dropdown-item" data-value="Low">Low</div></li>
                    </ul>
                    
                  </div>
                  <div class="invalid-feedback">Please select a priority</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Category</label>
                  <div class="dropdown" id="categoryDropdown">
                    <input type="text" class="form-control dropdown-toggle" name="categoryDisplay" id="categoryInput"
                      placeholder="Select Category" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required />
                    <!-- Hidden input for actual value -->
                    <input type="hidden" name="category" id="categoryHidden" required>
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="categoryInput">
                      <li><div class="dropdown-item" data-value="General">General</div></li>
                      <li><div class="dropdown-item" data-value="Important">Important</div></li>
                      <li><div class="dropdown-item" data-value="Urgent">Urgent</div></li>
                    </ul>
                    
                  </div>
                  <div class="invalid-feedback">Please select a category</div>
                </div>
              </div>

              <!-- Date Settings -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label required">Start Date</label>
                    <input type="date" class="form-control" name="start_date" id="startDate" required>
                    <div class="invalid-feedback">Please select a start date</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">End Date</label>
                    <input type="date" class="form-control" name="end_date" id="endDate">
                  </div>
                </div>
              </div>
              <p class="small text-muted"><i class="bi bi-lightbulb-fill text-warning me-1"></i>Leave end date empty for permanent notices</p>
              <hr class="hr" />
              
              <!-- File Attachments & Additional Info -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">File Attachments</label>
                  <div class="upload-box" id="uploadBox">
                    <i class="bi bi-upload"></i>
                    <p>Click to upload files<br><small>Images, PDFs, Documents (Max 5MB each)</small></p>
                    <input type="file" class="file-input" id="fileInput" name="files[]" multiple>
                    <div class="file-list " id="fileList"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Additional Information</label>
                  <textarea class="form-control" rows="3" name="additional_info" id="additional_info" 
                    placeholder="Any additional details or instructions..."></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                <i class="bi bi-x-circle me-1"></i> Cancel
              </button>
              <button type="submit" class="btn btn-primary" id="saveButton">
                <i class="bi bi-save me-1"></i> Save Notice
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- File Preview Modal -->
    <div class="modal fade" id="filePreviewModal" tabindex="-1" aria-labelledby="filePreviewModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="filePreviewModalLabel">File Preview</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <!-- For images -->
            <img id="previewedImage" src="" class="img-fluid" style="max-height: 70vh;" alt="Preview">
            
            <!-- For PDFs -->
            <iframe id="pdfPreview" src="" style="width: 100%; height: 70vh; display: none;"></iframe>
            
            <!-- For other files -->
            <div id="unsupportedPreview" style="display: none;">
              <i class="bi bi-file-earmark-text display-1"></i>
              <p>This file type cannot be previewed. Please download it to view.</p>
            </div>
          </div>
          <div class="modal-footer">
            <a id="downloadFileBtn" href="#" class="btn btn-primary" download>
              <i class="bi bi-download me-1"></i> Download
            </a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Single Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <h5 class="modal-title" id="deleteModalTitle">Are you sure you want to delete this notice?</h5>
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
        $('#noticesTable').DataTable({
            responsive: true,
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 2, targets: 1 },
                { responsivePriority: 3, targets: -1 }
            ]
        });
        
        // Initialize dropdown functionality
        setupDropdown('priorityFilterDisplay', 'priorityFilter', 'priorityLists');
        setupDropdown('categoryFilterDisplay', 'categoryFilter', 'categoryLists');
        setupPriorityDropdown();
        setupCategoryDropdown();
        
        // Form validation
        setupFormValidation();
        
        // Set today's date as default for start date
        const startDate = document.getElementById('startDate');
        if (startDate) {
            startDate.valueAsDate = new Date();
        }
        
        // Upload box functionality
        const uploadBox = document.getElementById('uploadBox');
        const fileInput = document.getElementById('fileInput');
        const fileList = document.getElementById('fileList');
        
        // Make only the icon and text clickable, not the file list area
        uploadBox.addEventListener('click', function(e) {
            // Check if click is on the upload prompt (icon or text)
            if (e.target.closest('i, p') || fileList.children.length === 0) {
                fileInput.click();
            }
        });
        
        fileInput.addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                fileList.innerHTML = '';
                Array.from(e.target.files).forEach((file, index) => {
                    fileList.innerHTML += `
                        <div class="file-item">
                            <span>${file.name.substring(0, 15)}${file.name.length > 15 ? '...' : ''}</span>
                            <button type="button" onclick="removeFileItem(this)">
                                <i class="bi bi-x"></i>
                            </button>
                        </div>
                    `;
                });
            }
        });
    });

    function setDeleteId(id) {
        document.getElementById('confirmDeleteBtn').href = `<?= base_url('notice/delete/') ?>${id}`;
    }

    function resetForm() {
        const form = document.getElementById('noticeForm');
        form.reset();
        form.classList.remove('was-validated');
        $('#noticeId').val('');
        $('#noticeModalLabel').html('<i class="bi bi-plus-circle-fill me-2"></i>Add New Notice');
        $('#saveButton').html('<i class="bi bi-save me-1"></i> Save Notice');
        $('#noticeForm').attr('action', '<?= base_url('notice/store') ?>');
        
        // Reset dropdowns
        $('#priorityInput').val('');
        $('#priorityHidden').val('');
        $('#priorityDropdown').removeClass('is-invalid');
        
        $('#categoryInput').val('');
        $('#categoryHidden').val('');
        $('#categoryDropdown').removeClass('is-invalid');
        
        // Clear file list
        const fileList = document.getElementById('fileList');
        if (fileList) {
            fileList.innerHTML = '';
        }
        
        // Set today's date as default
        document.getElementById('startDate').valueAsDate = new Date();
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
                hidden.value = (value === 'all') ? '' : value;
            });
        });
    }

    function setupPriorityDropdown() {
        const priorityInput = document.getElementById('priorityInput');
        const priorityHidden = document.getElementById('priorityHidden');
        const priorityItems = document.querySelectorAll('#priorityDropdown .dropdown-item');
        const priorityDropdown = document.getElementById('priorityDropdown');

        priorityItems.forEach(item => {
            item.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                const text = this.textContent.trim();
                priorityInput.value = text;
                priorityHidden.value = value;
                
                // Remove invalid state when an item is selected
                priorityDropdown.classList.remove('is-invalid');
                priorityHidden.setCustomValidity('');
            });
        });
    }

    function setupCategoryDropdown() {
        const categoryInput = document.getElementById('categoryInput');
        const categoryHidden = document.getElementById('categoryHidden');
        const categoryItems = document.querySelectorAll('#categoryDropdown .dropdown-item');
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
        const form = document.getElementById('noticeForm');
        
        // Add event listener for form submission
        form.addEventListener('submit', function(event) {
            // Validate dropdowns separately
            const priorityHidden = document.getElementById('priorityHidden');
            const priorityDropdown = document.getElementById('priorityDropdown');
            
            const categoryHidden = document.getElementById('categoryHidden');
            const categoryDropdown = document.getElementById('categoryDropdown');
            
            if (!priorityHidden.value) {
                priorityDropdown.classList.add('is-invalid');
                priorityHidden.setCustomValidity('Please select a priority');
                event.preventDefault();
            } else {
                priorityDropdown.classList.remove('is-invalid');
                priorityHidden.setCustomValidity('');
            }
            
            if (!categoryHidden.value) {
                categoryDropdown.classList.add('is-invalid');
                categoryHidden.setCustomValidity('Please select a category');
                event.preventDefault();
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
                
                // Special handling for dropdowns
                if (this.id === 'priorityHidden' && this.value) {
                    document.getElementById('priorityDropdown').classList.remove('is-invalid');
                }
                if (this.id === 'categoryHidden' && this.value) {
                    document.getElementById('categoryDropdown').classList.remove('is-invalid');
                }
            });
        });
    }

    function editNotice(id) {
        const baseUrlElement = document.getElementById('baseUrl');
        const baseUrl = baseUrlElement ? baseUrlElement.dataset.url : '<?= base_url() ?>/';
        
        const saveBtn = document.getElementById('saveButton');
        if (saveBtn) {
            saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Loading...';
            saveBtn.disabled = true;
        }

        fetch(`${baseUrl}notice/edit/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    throw new Error(data.error);
                }
                
                // Populate form fields
                const noticeId = document.getElementById('noticeId');
                if (noticeId) noticeId.value = data.id;
                
                const title = document.getElementById('title');
                if (title) title.value = data.title;
                
                const content = document.getElementById('content');
                if (content) content.value = data.content;
                
                // Set the dropdown values
                $('#priorityInput').val(data.priority);
                $('#priorityHidden').val(data.priority);
                
                $('#categoryInput').val(data.category);
                $('#categoryHidden').val(data.category);
                
                const startDate = document.getElementById('startDate');
                if (startDate) startDate.value = data.start_date.split(' ')[0];
                
                const endDate = document.getElementById('endDate');
                if (endDate) endDate.value = data.end_date ? data.end_date.split(' ')[0] : '';
                
                const additionalInfo = document.getElementById('additional_info');
                if (additionalInfo) additionalInfo.value = data.additional_info || '';
                
                // Update form action
                const form = document.getElementById('noticeForm');
                if (form) form.action = `${baseUrl}notice/update/${data.id}`;
                
                // Update UI
                const modalLabel = document.getElementById('noticeModalLabel');
                if (modalLabel) {
                    modalLabel.innerHTML = '<i class="bi bi-pencil-square me-2"></i>Edit Notice';
                }
                
                if (saveBtn) {
                    saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Update Notice';
                }
                
                // Handle files - Clear existing displays first
                const fileList = document.getElementById('fileList');
                if (fileList) {
                    fileList.innerHTML = '';
                    if (data.files && data.files.length > 0) {
                        data.files.forEach(file => {
                            fileList.innerHTML += `
                                <div class="file-item">
                                    <a href="javascript:void(0)" 
                                        onclick="previewFile(${file.id}, '${escapeHtml(file.original_name)}', '${escapeHtml(file.file_path)}')">
                                        <i class="bi ${getFileIcon(file.original_name)} me-1"></i>
                                        ${escapeHtml(file.original_name.substring(0, 15))}${file.original_name.length > 15 ? '...' : ''}
                                    </a>
                                    <small class="text-muted ms-2">(Current file)</small>
                                </div>
                            `;
                        });
                    }
                }
                
                // Show modal
                const modal = new bootstrap.Modal(document.getElementById('noticeModal'));
                modal.show();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to load notice data: ' + error.message);
            })
            .finally(() => {
                if (saveBtn) {
                    saveBtn.disabled = false;
                }
            });
    }

    // Helper function to escape HTML
    function escapeHtml(unsafe) {
        return unsafe
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    // Function to remove a file item
    function removeFileItem(button) {
        if (button && button.parentElement) {
            button.parentElement.remove();
        }
    }

    // Function to get appropriate file icon
    function getFileIcon(filename) {
        const ext = filename.split('.').pop().toLowerCase();
        if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) return 'bi-file-image';
        if (ext === 'pdf') return 'bi-file-pdf';
        if (['doc', 'docx'].includes(ext)) return 'bi-file-word';
        if (['xls', 'xlsx'].includes(ext)) return 'bi-file-excel';
        return 'bi-file-earmark';
    }

    function previewFile(fileId, fileName, filePath) {
        const baseUrlElement = document.getElementById('baseUrl');
        const baseUrl = baseUrlElement ? baseUrlElement.dataset.url : '<?= base_url() ?>';
        
        // Get modal elements
        const modal = new bootstrap.Modal(document.getElementById('filePreviewModal'));
        const modalTitle = document.getElementById('filePreviewModalLabel');
        const imagePreview = document.getElementById('previewedImage');
        const pdfPreview = document.getElementById('pdfPreview');
        const unsupportedPreview = document.getElementById('unsupportedPreview');
        const downloadBtn = document.getElementById('downloadFileBtn');
        
        // Hide all preview types initially
        imagePreview.style.display = 'none';
        pdfPreview.style.display = 'none';
        unsupportedPreview.style.display = 'none';
        
        // Set common elements
        modalTitle.textContent = fileName;
        
        // Set download link - use direct file path from public folder
        const directFilePath = `${baseUrl}/public/uploads/notices/${filePath}`;
        downloadBtn.href = directFilePath;
        downloadBtn.setAttribute('download', fileName);
        
        // Remove any existing click handlers
        downloadBtn.onclick = null;
        
        // Add click handler to force download
        downloadBtn.onclick = function(e) {
            e.preventDefault();
            
            // Create a temporary anchor element
            const a = document.createElement('a');
            a.href = directFilePath;
            a.download = fileName;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            
            // Fallback to controller if direct download fails
            setTimeout(() => {
                // Check if download started (this is a simple heuristic)
                if (!document.querySelector('a[href="'+directFilePath+'"]')) {
                    window.location.href = `${baseUrl}/notice/download/${fileId}`;
                }
            }, 1000);
        };
        
        // Check file type and show appropriate preview
        const fileExt = fileName.split('.').pop().toLowerCase();
        const previewPath = `${baseUrl}/public/uploads/notices/${filePath}`;
        
        if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExt)) {
            // Image preview
            imagePreview.src = previewPath;
            imagePreview.alt = fileName;
            imagePreview.style.display = 'block';
        } else if (fileExt === 'pdf') {
            // PDF preview
            pdfPreview.src = previewPath;
            pdfPreview.style.display = 'block';
        } else {
            // Unsupported file type
            unsupportedPreview.style.display = 'block';
        }
        
        // Show the modal
        modal.show();
    }

    // Reset form when modal is closed
    $('#noticeModal').on('hidden.bs.modal', function () {
        resetForm();
    });
  </script>
</body>
</html>
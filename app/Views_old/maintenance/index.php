<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>Maintenance Request Management</title>
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
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
    .badge-pending {
      background-color: #FFF3CD;
      color: #856404;
    }
    
    .badge-in-progress {
      background-color: #D1ECF1;
      color: #0C5460;
    }
    
    .badge-completed {
      background-color: #D4EDDA;
      color: #155724;
    }
    
    .badge-cancelled {
      background-color: #F8D7DA;
      color: #721C24;
    }

    /* ========== Upload Box ========== */
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
      border-color: var(--primary-green);
    }
    
    .upload-box i {
      font-size: 2rem;
      color: var(--primary-green);
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

    /* ========== Validation Styles ========== */
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

<body>
  <?= view('layout/head') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>

  <div class="main-wrapper overflow-hidden">
    <!-- Add baseUrl hidden input -->
    <input type="hidden" id="baseUrl" data-url="<?= base_url() ?>/">
    
    <div class="container-fluid py-4">
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
          <div class="card p-4 h-100 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5><i class="bi bi-tools me-2 text-success"></i>Maintenance Requests</h5>
              <div>
                <span class="badge bg-light text-success border border-success me-2">
                  <?= count($requests) ?> requests
                </span>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#maintenanceModal" onclick="resetForm()">
                  <i class="bi bi-plus-circle me-1"></i> New Request
                </button>
              </div>
            </div>

            <!-- Table View -->
            <div class="table-responsive">
              <table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                <thead>
                  <tr>
                    <th style="width: 50px;">S.No</th>
                    <th>Maintenance Area</th>
                    <th>Requested By</th>
                    <th>Type</th>
                    <th>Request Date</th>
                    <th>Expected Arrest Date</th>
                    <th>Status</th>
                    <th>Assigned To</th>
                    <th style="width: 130px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($requests as $index => $request): ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= esc($request['maintenance_area']) ?></td>
                      <td><?= esc($request['requested_by']) ?></td>
                      <td><?= esc($request['type']) ?></td>
                      <td><?= date('M d, Y', strtotime($request['request_date'])) ?></td>
                      <td>
                        <?= $request['expected_arrest_date'] ? date('M d, Y', strtotime($request['expected_arrest_date'])) : '<span class="text-muted">Not set</span>' ?>
                      </td>
                      <td>
                        <?php 
                          $statusClass = '';
                          if ($request['status'] === 'Pending') $statusClass = 'badge-pending';
                          if ($request['status'] === 'In Progress') $statusClass = 'badge-in-progress';
                          if ($request['status'] === 'Completed') $statusClass = 'badge-completed';
                          if ($request['status'] === 'Cancelled') $statusClass = 'badge-cancelled';
                        ?>
                        <span class="badge <?= $statusClass ?>"><?= esc($request['status']) ?></span>
                      </td>
                      <td><?= esc($request['assigned_to'] ?? 'Not assigned') ?></td>
                      <td>
                        <button class="btn btn-sm text-primary" onclick="editRequest(<?= $request['id'] ?>)">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm text-danger" data-bs-toggle="modal" 
                          data-bs-target="#deleteConfirmationModal" 
                          onclick="setDeleteId(<?= $request['id'] ?>)">
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

    <!-- Maintenance Request Form Modal -->
    <div class="modal fade" id="maintenanceModal" tabindex="-1" aria-labelledby="maintenanceModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form id="maintenanceForm" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
          <?= csrf_field() ?>
          <input type="hidden" name="id" id="requestId">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="maintenanceModalLabel"><i class="bi bi-plus-circle-fill me-2"></i>New Maintenance Request</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Basic Information -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Maintenance Area</label>
                  <input type="text" class="form-control" name="maintenance_area" id="maintenance_area" placeholder="e.g., Building A, Floor 3" required>
                  <div class="invalid-feedback">Please enter maintenance area</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Requested By</label>
                  <input type="text" class="form-control" name="requested_by" id="requested_by" placeholder="Enter your name" required>
                  <div class="invalid-feedback">Please enter requester name</div>
                </div>
              </div>
              
              <!-- Type and Dates -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Type of Request</label>
                  <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="typeDisplay"
                      id="typeFilterDisplay" placeholder="Select Type" data-bs-toggle="dropdown" aria-expanded="false"
                      autocomplete="off" readonly required />
                    <!-- Hidden input to store actual value -->
                    <input type="hidden" name="type" id="typeFilter" value="">
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="typeFilterDisplay" style="max-height: 150px; overflow-y: auto;">
                      <div id="typeLists" style="width: 100%;">
                        <div class="dropdown-item" data-value="Cleaning">Cleaning</div>
                        <div class="dropdown-item" data-value="Plumbing">Plumbing</div>
                        <div class="dropdown-item" data-value="Electrical">Electrical</div>
                        <div class="dropdown-item" data-value="Carpentry">Carpentry</div>
                        <div class="dropdown-item" data-value="HVAC">HVAC</div>
                        <div class="dropdown-item" data-value="Other">Other</div>
                      </div>
                    </ul>
                  </div>
                  <div class="invalid-feedback">Please select request type</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Request Date</label>
                  <input type="date" class="form-control" name="request_date" id="request_date" required>
                  <div class="invalid-feedback">Please select request date</div>
                </div>
              </div>
              
              <!-- Expected and Actual Arrest Dates -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Expected Arrest Date</label>
                  <input type="date" class="form-control" name="expected_arrest_date" id="expected_arrest_date">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Actual Arrest Date</label>
                  <input type="date" class="form-control" name="arrest_date" id="arrest_date">
                </div>
              </div>
              
              <!-- Problem Description and Photos -->
              <div class="row mb-3">
                <div class="col-md-12">
                  <label class="form-label required">Problem Description</label>
                  <textarea class="form-control" rows="3" name="problem_description" id="problem_description" 
                    placeholder="Describe the problem in detail..." required></textarea>
                  <div class="invalid-feedback">Please describe the problem</div>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-md-12">
                  <label class="form-label">Problem Photos</label>
                  <div class="upload-box" id="problemUploadBox">
                    <i class="bi bi-upload"></i>
                    <p>Click to upload problem photos<br><small>Images only (Max 5MB each)</small></p>
                    <input type="file" class="file-input" id="problemFileInput" name="problem_photos[]" multiple accept="image/*">
                    <div class="file-list" id="problemFileList"></div>
                  </div>
                </div>
              </div>
              
              <hr>
              
              <!-- Assignment and Resolution -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Assigned To</label>
                  <input type="text" class="form-control" name="assigned_to" id="assigned_to" placeholder="Enter assignee name">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Approved By</label>
                  <input type="text" class="form-control" name="approved_by" id="approved_by" placeholder="Approver name">
                </div>
              </div>
              
              <!-- Status -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Status</label>
                  <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="statusDisplay"
                      id="statusFilterDisplay" placeholder="Select Status" data-bs-toggle="dropdown" aria-expanded="false"
                      autocomplete="off" readonly required />
                    <!-- Hidden input to store actual value -->
                    <input type="hidden" name="status" id="statusFilter" value="">
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="statusFilterDisplay" style="max-height: 150px; overflow-y: auto;">
                      <div id="statusLists" style="width: 100%;">
                        <div class="dropdown-item" data-value="Pending">Pending</div>
                        <div class="dropdown-item" data-value="In Progress">In Progress</div>
                        <div class="dropdown-item" data-value="Completed">Completed</div>
                        <div class="dropdown-item" data-value="Cancelled">Cancelled</div>
                      </div>
                    </ul>
                  </div>
                  <div class="invalid-feedback">Please select status</div>
                </div>
                 <div class="col-md-6">
                  <label class="form-label">Amount (if any)</label>
                  <input type="number" step="0.01" class="form-control" name="amount" id="amount" placeholder="0.00">
                </div>
              </div>
              
              <!-- Amount and Bill -->
              <div class="row mb-3">
                <div class="col-md-12">
                  <label class="form-label">Payment Bill</label>
                  <div class="upload-box" id="billUploadBox">
                    <i class="bi bi-receipt"></i>
                    <p>Click to upload payment bill<br><small>PDF, Images (Max 5MB)</small></p>
                    <input type="file" class="file-input" id="billFileInput" name="payment_bill" accept=".pdf,image/*">
                    <div class="file-list" id="billFileList"></div>
                  </div>
                </div>
                <!-- Clearance Information -->
                <!-- <div class="col-md-6">
                  <label class="form-label">Clearance Photos</label>
                  <div class="upload-box" id="clearanceUploadBox">
                    <i class="bi bi-upload"></i>
                    <p>Click to upload clearance photos<br><small>Images only (Max 5MB each)</small></p>
                    <input type="file" class="file-input" id="clearanceFileInput" name="clearance_photos[]" multiple accept="image/*">
                    <div class="file-list" id="clearanceFileList"></div>
                  </div>
                </div> -->
              </div>
              
              <div class="row mb-3">
                <div class="col-md-12">
                  <label class="form-label">Resolution Notes</label>
                  <textarea class="form-control" rows="3" name="resolution_notes" id="resolution_notes" 
                    placeholder="Describe how the issue was resolved..."></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                <i class="bi bi-x-circle me-1"></i> Cancel
              </button>
              <button type="submit" class="btn btn-primary" id="saveButton">
                <i class="bi bi-save me-1"></i> Save Request
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

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <h5 class="modal-title" id="deleteModalTitle">Are you sure you want to delete this request?</h5>
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
        // $('#form_inputs').DataTable({
        //     responsive: true,
        //     columnDefs: [
        //         { responsivePriority: 1, targets: 0 },
        //         { responsivePriority: 2, targets: 1 },
        //         { responsivePriority: 3, targets: -1 }
        //     ]
        // });
        
        // Initialize dropdown functionality
        setupDropdown('statusFilterDisplay', 'statusFilter', 'statusLists');
        setupDropdown('typeFilterDisplay', 'typeFilter', 'typeLists');
        
        // Form validation
        setupFormValidation();
        
        // Set today's date as default for request date
        const requestDate = document.getElementById('request_date');
        if (requestDate) {
            requestDate.valueAsDate = new Date();
        }
        
        // Upload box functionality
        setupUploadBox('problemUploadBox', 'problemFileInput', 'problemFileList');
        setupUploadBox('billUploadBox', 'billFileInput', 'billFileList');
        setupUploadBox('clearanceUploadBox', 'clearanceFileInput', 'clearanceFileList');
    });
    function setupUploadBox(uploadBoxId, fileInputId, fileListId) {
        const uploadBox = document.getElementById(uploadBoxId);
        const fileInput = document.getElementById(fileInputId);
        const fileList = document.getElementById(fileListId);
        
        if (uploadBox && fileInput && fileList) {
            uploadBox.addEventListener('click', function(e) {
                // Only trigger file input if clicking on the upload box itself, not on file items
                if (e.target === uploadBox || 
                    e.target.classList.contains('bi-upload') || 
                    e.target.classList.contains('bi-receipt') ||
                    e.target.tagName === 'P') {
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
        }
    }
    // function setupUploadBox(uploadBoxId, fileInputId, fileListId) {
    //     const uploadBox = document.getElementById(uploadBoxId);
    //     const fileInput = document.getElementById(fileInputId);
    //     const fileList = document.getElementById(fileListId);
        
    //     if (uploadBox && fileInput && fileList) {
    //         uploadBox.addEventListener('click', function() {
    //             fileInput.click();
    //         });
            
    //         fileInput.addEventListener('change', function(e) {
    //             if (e.target.files.length > 0) {
    //                 fileList.innerHTML = '';
    //                 Array.from(e.target.files).forEach((file, index) => {
    //                     fileList.innerHTML += `
    //                         <div class="file-item">
    //                             <span>${file.name.substring(0, 15)}${file.name.length > 15 ? '...' : ''}</span>
    //                             <button type="button" onclick="removeFileItem(this)">
    //                                 <i class="bi bi-x"></i>
    //                             </button>
    //                         </div>
    //                     `;
    //                 });
    //             }
    //         });
    //     }
    // }

    function setDeleteId(id) {
        document.getElementById('confirmDeleteBtn').href = `<?= base_url('maintenance/delete/') ?>${id}`;
    }

    function resetForm() {
        const form = document.getElementById('maintenanceForm');
        form.reset();
        form.classList.remove('was-validated');
        $('#requestId').val('');
        $('#maintenanceModalLabel').html('<i class="bi bi-plus-circle-fill me-2"></i>New Maintenance Request');
        $('#saveButton').html('<i class="bi bi-save me-1"></i> Save Request');
        $('#maintenanceForm').attr('action', '<?= base_url('maintenance/store') ?>');
        
        // Clear file lists
        const fileLists = ['problemFileList', 'billFileList', 'clearanceFileList'];
        fileLists.forEach(id => {
            const fileList = document.getElementById(id);
            if (fileList) fileList.innerHTML = '';
        });
        
        // Set today's date as default
        document.getElementById('request_date').valueAsDate = new Date();
        
        // Reset dropdowns
        document.getElementById('typeFilterDisplay').value = '';
        document.getElementById('typeFilter').value = '';
        document.getElementById('statusFilterDisplay').value = '';
        document.getElementById('statusFilter').value = '';
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
                
                // Remove any existing validation error
                display.classList.remove('is-invalid');
            });
        });
    }

    function setupFormValidation() {
        const form = document.getElementById('maintenanceForm');
        
        form.addEventListener('submit', function(event) {
            // Validate dropdowns
            const typeFilter = document.getElementById('typeFilter');
            const statusFilter = document.getElementById('statusFilter');
            const typeDisplay = document.getElementById('typeFilterDisplay');
            const statusDisplay = document.getElementById('statusFilterDisplay');
            
            if (!typeFilter.value) {
                typeDisplay.classList.add('is-invalid');
                event.preventDefault();
                event.stopPropagation();
            }
            
            if (!statusFilter.value) {
                statusDisplay.classList.add('is-invalid');
                event.preventDefault();
                event.stopPropagation();
            }
            
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
        }, false);
        
        // Add event listeners to remove validation styling when fields are edited
        const formFields = form.querySelectorAll('input, select, textarea');
        formFields.forEach(field => {
            field.addEventListener('input', function() {
                this.classList.remove('is-invalid');
            });
        });
    }

  function editRequest(id) {
    const baseUrlElement = document.getElementById('baseUrl');
    const baseUrl = baseUrlElement ? baseUrlElement.dataset.url : '<?= base_url() ?>/';

    const saveBtn = document.getElementById('saveButton');
    if (saveBtn) {
        saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Loading...';
        saveBtn.disabled = true;
    }

    fetch(`${baseUrl}maintenance/edit/${id}`)
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
            document.getElementById('requestId').value = data.id;
            document.getElementById('maintenance_area').value = data.maintenance_area;
            document.getElementById('requested_by').value = data.requested_by;
            document.getElementById('typeFilterDisplay').value = data.type;
            document.getElementById('typeFilter').value = data.type;
            document.getElementById('request_date').value = data.request_date.split(' ')[0];
            document.getElementById('expected_arrest_date').value = data.expected_arrest_date ? data.expected_arrest_date.split(' ')[0] : '';
            document.getElementById('arrest_date').value = data.arrest_date ? data.arrest_date.split(' ')[0] : '';
            document.getElementById('problem_description').value = data.problem_description;
            document.getElementById('assigned_to').value = data.assigned_to;
            document.getElementById('approved_by').value = data.approved_by;
            document.getElementById('statusFilterDisplay').value = data.status;
            document.getElementById('statusFilter').value = data.status;
            document.getElementById('amount').value = data.amount;
            document.getElementById('resolution_notes').value = data.resolution_notes;
            
            // Update form action
            document.getElementById('maintenanceForm').action = `${baseUrl}maintenance/update/${data.id}`;
            
            // Update UI
            document.getElementById('maintenanceModalLabel').innerHTML = '<i class="bi bi-pencil-square me-2"></i>Edit Maintenance Request';
            saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Update Request';

            // ---------- FILE HANDLING ----------
            // Clear old previews
            // ['problemFileList', 'billFileList', 'clearanceFileList'].forEach(id => {
            //     const fileList = document.getElementById(id);
            //     if (fileList) fileList.innerHTML = '';
            // });

            // // Problem Photos
            // if (data.problem_photos && data.problem_photos.length > 0) {
            //     const container = document.getElementById('problemFileList');
            //     data.problem_photos.forEach(file => {
            //         const img = document.createElement('img');
            //         img.src = `${baseUrl}public/uploads/maintenance/${file.file_path}`;
            //         img.alt = file.original_name;
            //         img.width = 100;
            //         img.classList.add('me-2', 'mb-2', 'rounded');
            //         container.appendChild(img);
            //     });
            // }

            // // Payment Bill (single file)
            // if (data.payment_bill) {
            //     const container = document.getElementById('billFileList');
            //     const link = document.createElement('a');
            //     link.href = `${baseUrl}public/uploads/maintenance/${data.payment_bill.file_path}`;
            //     link.target = '_blank';
            //     link.textContent = data.payment_bill.original_name;
            //     container.appendChild(link);
            // }

            // // Clearance Docs
            // if (data.clearance_docs && data.clearance_docs.length > 0) {
            //     const container = document.getElementById('clearanceFileList');
            //     data.clearance_docs.forEach(file => {
            //         const link = document.createElement('a');
            //         link.href = `${baseUrl}public/uploads/maintenance/${file.file_path}`;
            //         link.target = '_blank';
            //         link.textContent = file.original_name;
            //         link.classList.add('d-block', 'mb-1');
            //         container.appendChild(link);
            //     });
            // }
// ---------- FILE HANDLING ----------
// Clear old previews
      ['problemFileList', 'billFileList', 'clearanceFileList'].forEach(id => {
          const fileList = document.getElementById(id);
          if (fileList) fileList.innerHTML = '';
      });

      // Problem Photos
      if (data.problem_photos && data.problem_photos.length > 0) {
          const container = document.getElementById('problemFileList');
          data.problem_photos.forEach(file => {
              const fileItem = document.createElement('div');
              fileItem.className = 'file-item';
              fileItem.setAttribute('data-file-path', file.file_path);
              fileItem.setAttribute('data-file-name', file.original_name);
              fileItem.innerHTML = `
                  <div class="file-info">
                      <i class="bi ${getFileIcon(file.original_name)} me-2"></i>
                      <span>${file.original_name.substring(0, 15)}${file.original_name.length > 15 ? '...' : ''}</span>
                  </div>
                  <small class="file-indicator">(Current file)</small>
              `;
              // Add click event to the entire file item
              fileItem.addEventListener('click', function(e) {
                  // Don't trigger if clicking on remove button (if added later)
                  if (!e.target.classList.contains('remove-file')) {
                      previewMaintenanceFile(
                          this.getAttribute('data-file-path'), 
                          this.getAttribute('data-file-name')
                      );
                  }
              });
              container.appendChild(fileItem);
          });
      }

      // Payment Bill (single file)
      if (data.payment_bill) {
          const container = document.getElementById('billFileList');
          const fileItem = document.createElement('div');
          fileItem.className = 'file-item';
          fileItem.setAttribute('data-file-path', data.payment_bill.file_path);
          fileItem.setAttribute('data-file-name', data.payment_bill.original_name);
          fileItem.innerHTML = `
              <div class="file-info">
                  <i class="bi ${getFileIcon(data.payment_bill.original_name)} me-2"></i>
                  <span>${data.payment_bill.original_name.substring(0, 15)}${data.payment_bill.original_name.length > 15 ? '...' : ''}</span>
              </div>
              <small class="file-indicator">(Current file)</small>
          `;
          // Add click event to the entire file item
          fileItem.addEventListener('click', function() {
              previewMaintenanceFile(
                  this.getAttribute('data-file-path'), 
                  this.getAttribute('data-file-name')
              );
          });
          container.appendChild(fileItem);
      }

      // Clearance Docs
      if (data.clearance_docs && data.clearance_docs.length > 0) {
          const container = document.getElementById('clearanceFileList');
          data.clearance_docs.forEach(file => {
              const fileItem = document.createElement('div');
              fileItem.className = 'file-item';
              fileItem.setAttribute('data-file-path', file.file_path);
              fileItem.setAttribute('data-file-name', file.original_name);
              fileItem.innerHTML = `
                  <div class="file-info">
                      <i class="bi ${getFileIcon(file.original_name)} me-2"></i>
                      <span>${file.original_name.substring(0, 15)}${file.original_name.length > 15 ? '...' : ''}</span>
                  </div>
                  <small class="file-indicator">(Current file)</small>
              `;
              // Add click event to the entire file item
              fileItem.addEventListener('click', function() {
                  previewMaintenanceFile(
                      this.getAttribute('data-file-path'), 
                      this.getAttribute('data-file-name')
                  );
              });
              container.appendChild(fileItem);
          });
      }
            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('maintenanceModal'));
            modal.show();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to load request data: ' + error.message);
        })
        .finally(() => {
            if (saveBtn) {
                saveBtn.disabled = false;
            }
        });
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

// Function to preview maintenance files
function previewMaintenanceFile(filePath, fileName) {
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
    const directFilePath = `${baseUrl}public/uploads/maintenance/${filePath}`;
    downloadBtn.href = directFilePath;
    downloadBtn.setAttribute('download', fileName);
    
    // Check file type and show appropriate preview
    const fileExt = fileName.split('.').pop().toLowerCase();
    const previewPath = `${baseUrl}public/uploads/maintenance/${filePath}`;
    
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

    // Function to remove a file item
  // Function to remove a file item
function removeFileItem(button) {
    if (button && button.parentElement) {
        button.parentElement.remove();
    }
}

    // Reset form when modal is closed
    $('#maintenanceModal').on('hidden.bs.modal', function () {
        resetForm();
    });
  </script>
</body>
</html>
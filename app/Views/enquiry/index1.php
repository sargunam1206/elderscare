
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">

  <!-- Favicon icon-->
  <!-- <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" /> -->

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
      <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/globel.css">

<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
 <title>Nivasan Hospitality</title>
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

      color: var( --white);
      font-weight: 600;
      padding: 12px 15px;
    }

    .table tbody td {
      padding: 10px 15px;
      border-bottom: 1px solid var(--border-color);
    }
    
    /* Address column with text wrapping */
    .table tbody td:nth-child(5) {
      max-width: 200px;
      word-wrap: break-word;
      white-space: normal;
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

    /* Add to your existing CSS */
#roomTypeDropdown.is-invalid .form-control {
  border-color: #dc3545 !important;
}

#roomTypeDropdown.is-invalid .invalid-feedback {
  display: block;
}
    /* Top controls: Show entries + Search (single line, left-right) */
    #enquiries_wrapper > .dataTables_length,
    #enquiries_wrapper > .dataTables_filter {
      display: inline-block;
      vertical-align: middle;
      margin-bottom: 10px;
    }

    #enquiries_wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }

    /* Push search input to the right */
    #enquiries_wrapper .dataTables_filter {
      margin-left: auto;
    }

    /* Bottom controls: Showing info + Pagination */
    #enquiries_wrapper > .dataTables_info,
    #enquiries_wrapper > .dataTables_paginate {
      display: inline-block;
      vertical-align: middle;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      #enquiries_wrapper {
        flex-direction: column;
        align-items: stretch;
      }

      #enquiries_wrapper > .dataTables_info,
      #enquiries_wrapper > .dataTables_paginate {
        width: 100%;
        text-align: center;
        margin: 5px 0;
      }

      /* Search box aligned to the right */
      #enquiries_wrapper > .dataTables_filter {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin: 5px 0;
      }

      #enquiries_wrapper .dataTables_filter {
        margin-left: 0;
      }
      
      #enquiries_wrapper > .dataTables_length {
        display: none !important;
      }
    }
    
    /* File link styling */
    .file-link {
      color: var(--primary-green);
      text-decoration: none;
      cursor: pointer;
    }
    
    .file-link:hover {
      text-decoration: underline;
      color: var(--primary-green-hover);
    }
  </style>
  <style>
    /* ===== Compact Global Adjustments ===== */
    body {
      font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
      font-size: 13px;
      /* reduced global font */
      /* background-color: var(--light-gray); */
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
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>

  <div class="main-wrapper overflow-hidden" >
    <!-- Add baseUrl hidden input -->
    <input type="hidden" id="baseUrl" data-url="<?= base_url() ?>/">
    
    <div class="" style="background-color:#EDF7EE;">
      <!-- Display success/error messages -->
      <?php if(session()->getFlashdata('message')): ?>
        <div class="alert alert-success alert-dismissible fade show m-2">
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

      <div class="row g-4 " style="background-color:#EDF7EE;">
        <div class="col-md-12">
          <div class=" p-4 h-100 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="fs-5"><i class="bi bi-question-circle me-2 text-success"></i>Enquiries</h6>
              <div>
                <span class="badge bg-light text-success border border-success me-2 fs-1">
                  <?= count($enquiries) ?> enquiries
                </span>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" onclick="resetForm()">
                  <i class="bi bi-plus-circle me-1"></i> New Enquiry
                </button>
              </div>
            </div>



            <!-- Table View -->
            <div class="table-responsive">
              <table id="enquiries" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                <thead>
                  <tr>
                    <th style="width: 50px;">S.No</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Room Type</th>
                    <th>Address</th>
                    <th>Guest Count</th>
                    <th>File</th>
                    <th>Date of Enquiry</th>
                    <th style="width: 130px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($enquiries as $index => $enquiry): ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= esc($enquiry['name']) ?></td>
                      <td><?= esc($enquiry['mobile_no']) ?></td>
                      <td><?= esc($enquiry['room_type']) ?></td>
                      <td><?= esc($enquiry['address']) ?></td>
                      <td><?= esc($enquiry['guest_count']) ?></td>
                      <td>
                        <?php if($enquiry['file_path']): ?>
                          <a href="javascript:void(0)" class="file-link" 
                            onclick="previewFile(<?= $enquiry['id'] ?>, '<?= esc($enquiry['original_file_name']) ?>', '<?= esc($enquiry['file_path']) ?>')">
                            <i class="bi bi-eye me-1"></i> <?= esc($enquiry['original_file_name']) ?>
                          </a>
                        <?php else: ?>
                          <span class="text-muted">No file</span>
                        <?php endif; ?>
                      </td>
                      <td><?= date('M d, Y', strtotime($enquiry['created_on'])) ?></td>
                      <td>
                        <button class="btn btn-sm text-primary" onclick="editEnquiry(<?= $enquiry['id'] ?>)">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm text-danger" data-bs-toggle="modal" 
                          data-bs-target="#deleteConfirmationModal" 
                          onclick="setDeleteId(<?= $enquiry['id'] ?>)">
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

    <!-- Enquiry Form Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form id="enquiryForm" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
          <?= csrf_field() ?>
          <input type="hidden" name="id" id="enquiryId">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enquiryModalLabel"><i class="bi bi-plus-circle-fill me-2"></i>New Enquiry</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name" required>
                  <div class="invalid-feedback">Please enter name</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Mobile No</label>
                  <input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="Enter mobile number (10 digits)" pattern="[0-9]{10}" required>
                  <div class="invalid-feedback">Please enter a valid 10-digit mobile number</div>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Room Type</label>
                  <div class="dropdown" id="roomTypeDropdown">
                    <!-- Visible readonly input -->
                    <input type="text" class="form-control dropdown-toggle" 
                           name="roomTypeDisplay" id="roomTypeInput"
                           placeholder="Select Room Type" 
                           data-bs-toggle="dropdown" aria-expanded="false" 
                           autocomplete="off" readonly />
                           
                    <!-- Hidden input for actual value -->
                    <input type="hidden" name="room_type" id="roomTypeHidden">

                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="roomTypeInput">
                      <li><div class="dropdown-item" data-value="Garden View">Garden View</div></li>
                      <li><div class="dropdown-item" data-value="North East View">North East View</div></li>
                      <!-- Add more room types here -->
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Guest Count</label>
                  <input type="number" class="form-control" name="guest_count" id="guest_count" min="1" placeholder="Number of guests">
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Address</label>
                  <textarea class="form-control" rows="3" name="address" id="address" placeholder="Enter complete address..." required></textarea>
                  <div class="invalid-feedback">Please enter address</div>
                </div>
              
                <div class="col-md-6">
                  <label class="form-label">Upload File (Address Proof/Business Card)</label>
                  <div class="upload-box" id="fileUploadBox">
                    <i class="bi bi-upload"></i>
                    <p>Click to upload file<br><small>PDF, Images, Docs (Max 5MB)</small></p>
                    <input type="file" class="file-input" id="fileInput" name="enquiry_file" accept=".pdf,.doc,.docx,image/*">
                    <div class="file-list" id="fileList"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                <i class="bi bi-x-circle me-1"></i> Cancel
              </button>
              <button type="submit" class="btn btn-primary" id="saveButton">
                <i class="bi bi-save me-1"></i> Save Enquiry
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
            <h5 class="modal-title" id="deleteModalTitle">Are you sure you want to delete this enquiry?</h5>
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
        $('#enquiries').DataTable({
            responsive: true,
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 2, targets: 1 },
                { responsivePriority: 3, targets: -1 },
                // Make address column wrap text
                { targets: 4, className: 'text-wrap' }
            ]
        });
        
        // Form validation
        setupFormValidation();
        
        // Upload box functionality
        setupUploadBox('fileUploadBox', 'fileInput', 'fileList');
        
        // Setup room type dropdown
        setupRoomTypeDropdown();
    });

    function setupUploadBox(uploadBoxId, fileInputId, fileListId) {
        const uploadBox = document.getElementById(uploadBoxId);
        const fileInput = document.getElementById(fileInputId);
        const fileList = document.getElementById(fileListId);
        
        if (uploadBox && fileInput && fileList) {
            uploadBox.addEventListener('click', function(e) {
                if (e.target === uploadBox || 
                    e.target.classList.contains('bi-upload') || 
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

    function setDeleteId(id) {
        document.getElementById('confirmDeleteBtn').href = `<?= base_url('enquiry/delete/') ?>${id}`;
    }

    function setupRoomTypeDropdown() {
        const roomTypeInput = document.getElementById('roomTypeInput');
        const roomTypeHidden = document.getElementById('roomTypeHidden');
        const roomTypeItems = document.querySelectorAll('#roomTypeDropdown .dropdown-item');

        roomTypeItems.forEach(item => {
            item.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                const text = this.textContent.trim();
                
                roomTypeInput.value = text;
                roomTypeHidden.value = value;
            });
        });
    }

    function resetForm() {
        const form = document.getElementById('enquiryForm');
        form.reset();
        form.classList.remove('was-validated');
        $('#enquiryId').val('');
        $('#enquiryModalLabel').html('<i class="bi bi-plus-circle-fill me-2"></i>New Enquiry');
        $('#saveButton').html('<i class="bi bi-save me-1"></i> Save Enquiry');
        $('#enquiryForm').attr('action', '<?= base_url('enquiry/store') ?>');
        
        // Reset the room type dropdown specifically
        document.getElementById('roomTypeInput').value = '';
        document.getElementById('roomTypeHidden').value = '';
        
        // Clear file list
        const fileList = document.getElementById('fileList');
        if (fileList) fileList.innerHTML = '';
    }

    function setupFormValidation() {
        const form = document.getElementById('enquiryForm');
        
        form.addEventListener('submit', function(event) {
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
        const formFields = form.querySelectorAll('input, textarea');
        formFields.forEach(field => {
            field.addEventListener('input', function() {
                this.classList.remove('is-invalid');
            });
        });
    }

    function editEnquiry(id) {
        const baseUrlElement = document.getElementById('baseUrl');
        const baseUrl = baseUrlElement ? baseUrlElement.dataset.url : '<?= base_url() ?>/';

        const saveBtn = document.getElementById('saveButton');
        if (saveBtn) {
            saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Loading...';
            saveBtn.disabled = true;
        }

        fetch(`${baseUrl}enquiry/edit/${id}`)
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
                document.getElementById('enquiryId').value = data.id;
                document.getElementById('name').value = data.name;
                document.getElementById('mobile_no').value = data.mobile_no;
                
                // Set room type using the new dropdown implementation
                document.getElementById('roomTypeInput').value = data.room_type;
                document.getElementById('roomTypeHidden').value = data.room_type;
                
                document.getElementById('address').value = data.address;
                document.getElementById('guest_count').value = data.guest_count;
                
                // Update form action
                document.getElementById('enquiryForm').action = `${baseUrl}enquiry/update/${data.id}`;
                
                // Update UI
                document.getElementById('enquiryModalLabel').innerHTML = '<i class="bi bi-pencil-square me-2"></i>Edit Enquiry';
                saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Update Enquiry';

                // Show current file if exists
                const fileList = document.getElementById('fileList');
                if (data.file_path) {
                    fileList.innerHTML = `
                        <div class="file-item">
                            <span>${data.original_file_name.substring(0, 15)}${data.original_file_name.length > 15 ? '...' : ''}</span>
                            <small class="text-muted ms-2">(Current file)</small>
                        </div>
                    `;
                } else {
                    fileList.innerHTML = '';
                }

                // Show modal
                const modal = new bootstrap.Modal(document.getElementById('enquiryModal'));
                modal.show();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to load enquiry data: ' + error.message);
            })
            .finally(() => {
                if (saveBtn) {
                    saveBtn.disabled = false;
                }
            });
    }

    function removeFileItem(button) {
        if (button && button.parentElement) {
            button.parentElement.remove();
        }
        
        // Also clear the file input
        const fileInput = document.getElementById('fileInput');
        if (fileInput) {
            fileInput.value = '';
        }
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
        
        // Set download link
        downloadBtn.href = `${baseUrl}/enquiry/download/${fileId}`;
        downloadBtn.setAttribute('download', fileName);
        
        // Check file type and show appropriate preview
        const fileExt = fileName.split('.').pop().toLowerCase();
        const previewPath = `${baseUrl}/public/uploads/enquiries/${filePath}`;
        
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
    $('#enquiryModal').on('hidden.bs.modal', function () {
        resetForm();
    });
  </script>
</body>
</html>
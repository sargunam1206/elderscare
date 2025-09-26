<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
  <meta id="baseUrl" data-url="<?= base_url() ?>">
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>Prescription Management</title>
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
  </style>
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
    #prescriptionsTable tr td:last-child {
      white-space: nowrap;
    }
    
  /* Upload box styling */
    .upload-box {
      border: 2px dashed #ccc;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      border-radius: 8px;
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .upload-box:hover {
      background-color: #f8f9fa;
      /* border-color: #0d6efd; */
      border-color: var(--primary-green);
    }
    .upload-box i {
      font-size: 2rem;
      /* color: #0d6efd; */
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
      padding: 5px 10px;
      background: #f8f9fa;
      border-radius: 4px;
      margin-bottom: 5px;
    }
    .file-item button {
      background: none;
      border: none;
      color: #dc3545;
      cursor: pointer;
    }
    
    /* File preview modal styles */
    .file-preview-modal .modal-content {
      border-radius: 10px;
      max-width: 95vw;
    }
    
    .file-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 15px;
      padding: 15px;
    }
    
    .file-preview-item {
      border: 1px solid #dee2e6;
      border-radius: 8px;
      padding: 10px;
      transition: all 0.2s ease;
      text-align: center;
    }
    
    .file-preview-img {
      width: 100%;
      height: 120px;
      object-fit: cover;
      border-radius: 5px;
      background-color: #f8f9fa;
    }
    
    .file-preview-title {
      font-weight: 500;
      margin-top: 8px;
      font-size: 0.9rem;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    
    .file-preview-type {
      color: #6c757d;
      font-size: 0.75rem;
    }

    @media (min-width: 992px) {
      .file-preview-modal .modal-dialog {
        max-width: 900px;
      }
    }
    /* Image Preview Modal Styles */




    /* Prescription modal specific styles */
    .prescription-modal .modal-body {
      padding: 20px;
    }
    .prescription-modal .form-section {
      margin-bottom: 20px;
    }
    .prescription-modal .hr {
      margin: 20px 0;
      border-top: 1px solid #eee;
    }
 
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
</style>
</head>

<body>
  <?= view('layout/head') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
      class="lds-ripple img-fluid" />
  </div>

  <!-- Header -->
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

  <!-- Responsive Header -->
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

<div class="main-wrapper overflow-hidden">
<body class="bg-light">

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
      <div class="card p-4 h-100 d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5><i class="bi bi-clipboard-check me-2 text-success"></i>Prescription Records</h5>
          <div>
            <span class="badge bg-light text-success border border-success me-2"><?= count($prescriptions) ?> prescriptions</span>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#prescriptionModal" onclick="resetForm()">
              <i class="bi bi-plus-circle me-1"></i> Add Prescription
            </button>
          </div>
        </div>


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

    <!-- Action Buttons -->
    <div class="col-md-3 d-flex gap-2">
      <button type="submit" class="btn btn-success flex-grow-1">
        Filter
      </button>
      <button type="submit" name="pdf" value="1" class="btn btn-primary" formtarget="_blank">
         PDF
      </button>
      <button type="submit" name="excel" value="1" class="btn btn-primary">
         Excel
      </button>
    </div>
  </div>
</form>


        <!-- Table View -->
        <div class="table-responsive">
          <table id="prescriptionsTable" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
            <thead>
              <tr>
                <th style="width: 50px;">S.No</th>
                <th>Guest</th>
                <th>Contact No</th>
                <th>Problem Description</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Notes</th>
                <th>Files</th>
                <th style="width: 130px;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($prescriptions as $index => $prescription): ?>
                <tr>
                  <td><?= $index + 1 ?></td>
                  <td><?= esc($prescription['first_name']) ?></td>
                  <td><?= esc($prescription['contact']) ?></td>
                  <td><?= esc($prescription['problem_description']) ?></td>
                  <td><?= esc($prescription['doctor_name']) ?></td>
                  <td><?= date('M d, Y', strtotime($prescription['date'])) ?></td>
                  <td><?= esc($prescription['notes']) ?></td>
                  <!-- <td>
                    <?php if (!empty($prescription['files'])): ?>
                      <div class="d-flex flex-column">
                        <?php foreach ($prescription['files'] as $file): 
                          $fileExt = pathinfo($file['original_name'], PATHINFO_EXTENSION);
                          $isImage = in_array(strtolower($fileExt), ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                          
                          // Determine the correct file path based on file type
                          $fileUrl = ($file['file_type'] === 'prescription') 
                              ? base_url('public/uploads/prescriptions/' . $file['file_path'])
                              : base_url('public/uploads/prescriptions/other_files/' . $file['file_path']);
                        ?>
                          <small class="text-truncate mb-1" style="max-width: 150px;">
                            <a href="<?= $fileUrl ?>" 
                               <?= $isImage ? 'data-lightbox="prescription-images"' : 'target="_blank" rel="noopener noreferrer"' ?>
                               title="<?= esc($file['original_name']) ?>">
                              <i class="bi <?= $isImage ? 'bi-image' : 'bi-file-earmark' ?> me-1"></i>
                              <?= esc($file['original_name']) ?>
                            </a>
                          </small>
                        <?php endforeach; ?>
                      </div>
                    <?php else: ?>
                      <span class="text-muted">No files</span>
                    <?php endif; ?>
                  </td> -->
                  <td>
                      <?php if (!empty($prescription['files'])): ?>
                          <button class="btn btn-sm text-success" data-bs-toggle="modal" data-bs-target="#filePreviewModal" 
                              onclick="loadFiles(<?= $prescription['id'] ?>)">
                              <i class="bi bi-files"></i> <?= count($prescription['files']) ?> file<?= count($prescription['files']) !== 1 ? 's' : '' ?>
                          </button>
                      <?php else: ?>
                          <span class="text-muted">No files</span>
                      <?php endif; ?>
                  </td>
                  <td>
                    <button class="btn btn-sm text-primary" data-bs-toggle="modal" data-bs-target="#prescriptionModal" 
                      onclick="editPrescription(<?= $prescription['id'] ?>)">
                      <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-sm text-danger" data-bs-toggle="modal" 
                      data-bs-target="#deleteConfirmationModal" 
                      onclick="setDeleteId(<?= $prescription['id'] ?>)">
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

<!-- Prescription Form Modal -->
<div class="modal fade prescription-modal" id="prescriptionModal" tabindex="-1" aria-labelledby="prescriptionModalLabel">
  <div class="modal-dialog modal-lg modal-lg-custom">
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data" id="prescriptionForm">
        <?= csrf_field() ?>
        
        <input type="hidden" name="id" id="prescriptionId">
        <input type="hidden" name="id" id="prescriptionId">
        
        <!--<input type="hidden" name="existing_other_file_id[]" value="123">  -->
        <div class="modal-header">
          <h5 class="modal-title" id="prescriptionModalLabel"><i class="bi bi-clipboard-plus-fill me-2"></i>Add New Prescription</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


        <div class="col-12" id="part_number" >
    <div class="mb-3">
        
  <label for="relationInput" class="form-label required">Guest Name</label>
  <div class="dropdown">
      <?php $single_count=count($guest); ?>
      <input type="hidden" name="type_user" value="<?= !empty($guest and $single_count==1 ) ? 'single' : 'multiple' ?>">
      <input type="hidden" id="guest_id" name="guest_id" value="<?= !empty($guest and $single_count==1 ) ? $guest[0]['guest_id'] : '' ?>">
    <input type="text" class="form-control dropdown-toggle w-100" name="prescription" id="prescription"
      placeholder="Select Relation" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" value="<?= !empty($guest and $single_count==1) ? $guest[0]['first_name'] : '' ?>"  readonly />
    <ul class="dropdown-menu p-2 w-100" aria-labelledby="relationInput" style="max-height: 150px; overflow-y: auto;">
      <div id="prescriptionLists" style="width: 100%;">
        
        <?php foreach($guest as $type) :?> 

        <div class="dropdown-item" data-value="<?= $type['guest_id'] ?>"><?= $type['first_name'] ?></div>
       

        <?php endforeach; ?>
      </div>
    </ul> 
  </div>
</div>
</div>


 <script>
  const relationInput = document.getElementById('prescription');
  const relationItems = document.querySelectorAll('#prescriptionLists .dropdown-item');

  relationItems.forEach(item => {
    item.addEventListener('click', function () {
     // const value = this.getAttribute('data-value');
    const value = this.getAttribute('data-value'); // guest_id
    const label = this.textContent.trim();         // guest name

    relationInput.value = label;  // Update dropdown button text
         // show name in visible input
        document.getElementById('guest_id').value = value;  
    });
  });
</script>


          <!-- Problem Description -->
          <div class="mb-3">
            <label class="form-label required">Problem Description</label>
            <input type="text" class="form-control" name="problem_description" id="problemDescription" placeholder="Brief description of the medical problem" required>
          </div>
          
          <hr class="hr" />
          
          <!-- Doctor Information -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label required">Doctor Name</label>
              <input type="text" class="form-control" name="doctor_name" id="doctorName" placeholder="Enter doctor's name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label required">Date</label>
              <input type="date" class="form-control" name="date" id="prescriptionDate" required>
            </div>
          </div>
          
          <hr class="hr" />
          
          <!-- File Uploads -->
          <div class="row mb-3">
            <!-- Updated Prescription Upload Section -->
            <div class="col-md-6 mb-3">
              <label class="form-label required">Prescription Upload</label>
              <div class="upload-box" id="prescriptionUpload">
                <i class="bi bi-file-earmark-medical"></i>
                <p>Click to upload prescription<br><small>JPG, PNG, PDF (Max 5MB)</small></p>
                <input type="file" class="file-input" id="prescriptionFile" name="prescription_file" accept=".jpg,.jpeg,.png,.pdf"  required/>
                <div class="file-list" id="prescriptionFileList"></div>
              </div>
            </div>

            <!-- Updated Additional Files Section -->
            <div class="col-md-6 mb-3">
              <label class="form-label">Additional Files</label>
              <div class="upload-box" id="multipleUpload">
                <i class="bi bi-files"></i>
                <p>Click to upload multiple files<br><small>Any file type (Max 5MB each)</small></p>
                <input type="file" class="file-input" id="multipleFiles" name="other_files[]" multiple />
                <div class="file-list" id="multipleFileList"></div>
              </div>
            </div>
          </div>
          
          <hr class="hr" />
          
          <!-- Additional Notes -->
          <div class="mb-3">
            <label class="form-label">Additional Notes</label>
            <textarea class="form-control" rows="3" name="notes" id="prescriptionNotes" placeholder="Any additional instructions or notes..."></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
            <i class="bi bi-x-circle me-1"></i> Cancel
          </button>
          <button type="submit" class="btn btn-primary" id="saveButton">
            <i class="bi bi-save me-1"></i> Save Prescription
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Single Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title" id="deleteModalTitle">Are you sure you want to delete this prescription?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer d-flex gap-3 justify-content-end">
        <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Yes</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<!-- File Preview Modal -->
<div class="modal fade file-preview-modal" id="filePreviewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Uploaded Files</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="file-grid" id="filePreviewGrid">
          <!-- Files will be loaded here dynamically -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Image Preview Modal -->
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imagePreviewTitle">Image Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img id="previewedImage" src="" alt="Preview" class="img-fluid" style="max-height: 70vh;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

  <!-- <script>
        // Initialize modal variable
    let prescriptionModal;
    
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize the modal properly
      prescriptionModal = new bootstrap.Modal(document.getElementById('prescriptionModal'));
      
      // Set today's date as default for prescription date
      document.getElementById('prescriptionDate').valueAsDate = new Date();
      
        // Upload box functionality
  const prescriptionUpload = document.getElementById('prescriptionUpload');
  const prescriptionFile = document.getElementById('prescriptionFile');
  const prescriptionFileList = document.getElementById('prescriptionFileList');
  
  // Make only the icon and text clickable, not the file list area
  prescriptionUpload.addEventListener('click', function(e) {
    // Check if click is on the upload prompt (icon or text)
    if (e.target.closest('i, p') || prescriptionFileList.children.length === 0) {
      prescriptionFile.click();
    }
  });
  
  prescriptionFile.addEventListener('change', function(e) {
    if (e.target.files.length > 0) {
      const file = e.target.files[0];
      prescriptionFileList.innerHTML = `
            <div class="file-item">
              <span>${file.name.substring(0, 15)}${file.name.length > 15 ? '...' : ''}</span>
              <button type="button" onclick="removeFile('prescriptionFile', 'prescriptionFileList')">
                <i class="bi bi-x"></i>
              </button>
            </div>
          `;
    }
  });

  

  // Multiple files upload
      const multipleUpload = document.getElementById('multipleUpload');
      const multipleFiles = document.getElementById('multipleFiles');
      const multipleFileList = document.getElementById('multipleFileList');
      
  multipleUpload.addEventListener('click', function(e) {
    if (e.target.closest('i, p') || multipleFileList.children.length === 0) {
      multipleFiles.click();
    }
  });
      
      multipleFiles.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
          multipleFileList.innerHTML = '';
          Array.from(e.target.files).forEach((file, index) => {
            multipleFileList.innerHTML += `
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
      // Initialize DataTable
      $('#prescriptionsTable').DataTable({
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
      
      document.getElementById('prescriptionForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const prescriptionId = document.getElementById('prescriptionId').value;
        if (prescriptionId && document.querySelector('input[name="existing_prescription_file"]')) {
            document.getElementById('prescriptionFile').removeAttribute('required');
        }
        
        const formData = new FormData(this);
        const baseUrl = document.getElementById('baseUrl').dataset.url;
        const url = prescriptionId 
            ? `${baseUrl}prescription/update/${prescriptionId}`
            : `${baseUrl}prescription/store`;
        
        const saveBtn = document.getElementById('saveButton');
        saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Processing...';
        saveBtn.disabled = true;
        
        fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (response.redirected) {
                window.location.href = response.url;
            } else {
                return response.json();
            }
        })
        .then(data => {
            if (data && data.error) {
                alert(data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred: ' + error.message);
        })
        .finally(() => {
            saveBtn.disabled = false;
            saveBtn.innerHTML = prescriptionId 
                ? '<i class="bi bi-arrow-repeat me-1"></i> Update Prescription'
                : '<i class="bi bi-save me-1"></i> Save Prescription';
        });
      });
      
      // Reset form when modal is closed
      document.getElementById('prescriptionModal').addEventListener('hidden.bs.modal', function() {
        resetForm();
      });
    });

    // Simplified modal show function
    function showImageInModal(imageUrl, imageName) {
      const previewModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
      const previewImage = document.getElementById('previewedImage');
      const previewTitle = document.getElementById('imagePreviewTitle');
      
      previewImage.src = imageUrl;
      previewImage.alt = imageName;
      previewTitle.textContent = imageName;
      
      previewModal.show();
    }

    
    // Updated editPrescription function
function editPrescription(id) {
  const baseUrl = document.getElementById('baseUrl').dataset.url;
  const saveBtn = document.getElementById('saveButton');
  saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Loading...';
  saveBtn.disabled = true;

  fetch(`${baseUrl}prescription/edit/${id}`)
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
          document.getElementById('prescriptionId').value = data.id;
          document.getElementById('problemDescription').value = data.problem_description;
          document.getElementById('doctorName').value = data.doctor_name;
          document.getElementById('prescriptionDate').value = data.date.split(' ')[0];
          document.getElementById('prescriptionNotes').value = data.notes || '';
          
          // Update form action with base URL
          const form = document.getElementById('prescriptionForm');
          form.action = `${baseUrl}prescription/update/${data.id}`;
          
          // Update UI
          document.getElementById('prescriptionModalLabel').innerHTML = 
              '<i class="bi bi-pencil-square me-2"></i>Edit Prescription';
          saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Update Prescription';
          
          // Handle files - Clear existing displays first
          document.getElementById('prescriptionFileList').innerHTML = '';
          document.getElementById('multipleFileList').innerHTML = '';
          
          // Handle prescription file (single file upload)
          if (data.prescription_file) {
              const file = data.prescription_file;
              const fileExt = file.original_name.split('.').pop().toLowerCase();
              const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExt);
              const fileUrl = `${baseUrl}public/uploads/prescriptions/${file.file_path}`;
              
              let fileLink = `<span>${file.original_name}</span>`;
              
              if (isImage) {
                  fileLink = `
                      <a href="javascript:void(0);" onclick="showImageInModal('${fileUrl}', '${file.original_name}')">
                          <i class="bi bi-image me-1"></i>
                          ${file.original_name}
                      </a>
                  `;
              }
              
              document.getElementById('prescriptionFileList').innerHTML = `
                  <div class="file-item">
                      ${fileLink}
                      <small class="text-muted ms-2">(Current file)</small>
                  </div>
              `;
              
              // Create a hidden field to preserve the existing file
              const hiddenInput = document.createElement('input');
              hiddenInput.type = 'hidden';
              hiddenInput.name = 'existing_prescription_file';
              hiddenInput.value = file.file_path;
              form.appendChild(hiddenInput);
              
              // Make the file input optional for edits
              const fileInput = document.getElementById('prescriptionFile');
              fileInput.removeAttribute('required');
              fileInput.disabled = false;
          }
          
          // Handle additional files (multiple files upload)
          if (data.other_files && data.other_files.length > 0) {
              data.other_files.forEach(file => {
                  const fileExt = file.original_name.split('.').pop().toLowerCase();
                  const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExt);
                  const fileUrl = `${baseUrl}public/uploads/prescriptions/other_files/${file.file_path}`;
                  
                  let fileLink = `<span>${file.original_name}</span>`;
                  
                  if (isImage) {
                      fileLink = `
                          <a href="javascript:void(0);" onclick="showImageInModal('${fileUrl}', '${file.original_name}')">
                              <i class="bi bi-image me-1"></i>
                              ${file.original_name}
                          </a>
                      `;
                  }
                  
                  document.getElementById('multipleFileList').innerHTML += `
                      <div class="file-item">
                          ${fileLink}
                          <small class="text-muted ms-2">(Current file)</small>
                      </div>
                  `;
              });
          }
          
          // Show modal using the initialized instance
          prescriptionModal.show();
      })
      .catch(error => {
          console.error('Error:', error);
          alert('Failed to load prescription data: ' + error.message);
      })
      .finally(() => {
          saveBtn.disabled = false;
      });
}

async function loadFiles(prescriptionId) {
    const baseUrl = document.getElementById('baseUrl').dataset.url;
    try {
        const response = await fetch(`${baseUrl}prescription/files/${prescriptionId}`);
        const data = await response.json();
        
        const fileGrid = document.getElementById('filePreviewGrid');
        fileGrid.innerHTML = '';
        
        if (data.error) {
            fileGrid.innerHTML = `<div class="col-12 text-center py-4">${data.error}</div>`;
            return;
        }
        
        // Process each file
        for (const file of data) {
            const fileExt = file.original_name.split('.').pop().toLowerCase();
            const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExt);
            
            // Create both possible URLs
            const urls = [
                `${baseUrl}public/uploads/prescriptions/${file.file_path}`,
                `${baseUrl}public/uploads/prescriptions/other_files/${file.file_path}`
            ];
            
            // Determine the correct URL by checking which one exists
            const fileUrl = await findExistingUrl(urls);
            
            fileGrid.innerHTML += `
              <div class="file-preview-item">
                  ${isImage ? 
                      `<img src="${fileUrl}" class="file-preview-img" alt="${file.original_name}" 
                            onerror="this.onerror=null;this.src='${urls[1]}'">` : 
                      `<div class="file-preview-img d-flex align-items-center justify-content-center">
                          <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>`
                  }
                  <div class="file-preview-title">${file.original_name}</div>
                  <div class="file-preview-type">${file.file_type === 'prescription' ? 'Prescription' : 'Additional Document'}</div>
                  <div class="d-flex gap-2">
                      <a href="#" class="btn btn-sm btn-primary mt-2" 
                        onclick="downloadFile(['${fileUrl}'], '${file.original_name}'); return false;">
                          Download
                      </a>
                      ${isImage ? 
                          `<button class="btn btn-sm btn-info mt-2" 
                              onclick="showImageInModal(['${fileUrl}'], '${file.original_name}')">
                              View
                          </button>` : ''}
                  </div>
              </div>
          `;

        }
        
        // Update modal title
        document.querySelector('#filePreviewModal .modal-title').textContent = 
            `Uploaded Files (${data.length})`;
    } catch (error) {
        console.error('Error:', error);
        fileGrid.innerHTML = `
            <div class="col-12 text-center py-4">Error loading files. Please try again.</div>
        `;
    }
}

// Helper function to find which URL exists
async function findExistingUrl(urls) {
    for (const url of urls) {
        try {
            const response = await fetch(url, { method: 'HEAD' });
            if (response.ok) return url;
        } catch (e) {
            // Skip on error
        }
    }
    return null;
}

// Improved image viewer with fallback
async function showImageInModal(urls, imageName) {
    const previewModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
    const previewImage = document.getElementById('previewedImage');
    const previewTitle = document.getElementById('imagePreviewTitle');
    
    previewTitle.textContent = imageName;
    
    // Find working URL
    const workingUrl = await findExistingUrl(urls);
    previewImage.src = workingUrl;
    previewImage.alt = imageName;
    
    // Set up error handling in case the URL check was wrong
    previewImage.onerror = function() {
        const fallbackUrl = urls.find(url => url !== workingUrl);
        if (fallbackUrl) this.src = fallbackUrl;
    };
    
    previewModal.show();
}

// Improved download function with fallback
async function downloadFile(urls, fileName) {
    try {
        // Find working URL
        const workingUrl = await findExistingUrl(urls);
        
        // Create hidden anchor tag for download
        const a = document.createElement('a');
        a.href = workingUrl;
        a.download = fileName;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        
        // Set timeout to revoke object URL
        setTimeout(() => {
            window.URL.revokeObjectURL(workingUrl);
        }, 100);
    } catch (error) {
        console.error('Download failed:', error);
        alert('File could not be downloaded');
    }
}

function showImageInModal(imageUrl, imageName) {
    const previewModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
    const previewImage = document.getElementById('previewedImage');
    const previewTitle = document.getElementById('imagePreviewTitle');
    
    previewImage.src = imageUrl;
    previewImage.alt = imageName;
    previewTitle.textContent = imageName;
    
    previewModal.show();
}
function resetForm() {
  const baseUrl = document.getElementById('baseUrl').dataset.url;
  const form = document.getElementById('prescriptionForm');

  form.reset();
  form.action = `${baseUrl}prescription/store`;
  document.getElementById('prescriptionId').value = '';

  // Remove any hidden fields for existing files
  const existingFileInput = document.querySelector('input[name="existing_prescription_file"]');
  if (existingFileInput) {
    existingFileInput.remove();
  }

  document.getElementById('prescriptionModalLabel').innerHTML =
    '<i class="bi bi-clipboard-plus-fill me-2"></i>Add New Prescription';
  document.getElementById('saveButton').innerHTML =
    '<i class="bi bi-save me-1"></i> Save Prescription';
  document.getElementById('prescriptionDate').valueAsDate = new Date();
  document.getElementById('prescriptionFileList').innerHTML = '';
  document.getElementById('multipleFileList').innerHTML = '';

  const fileInput = document.getElementById('prescriptionFile');
  fileInput.value = '';
  fileInput.setAttribute('required', '');
  fileInput.disabled = false;
}
 
    function setDeleteId(id) {
        const baseUrl = document.getElementById('baseUrl').dataset.url;
        document.getElementById('confirmDeleteBtn').href = `${baseUrl}prescription/delete/${id}`;
    }
    
    function removeFile(inputId, listId) {
        document.getElementById(inputId).value = '';
        document.getElementById(listId).innerHTML = '';
    }
    
    function removeFileItem(button) {
        button.parentElement.remove();
    }
  </script> -->

 <script>
    // Initialize modal variable
    let prescriptionModal;
    
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize the modal properly
      prescriptionModal = new bootstrap.Modal(document.getElementById('prescriptionModal'));
      
      // Set today's date as default for prescription date
      document.getElementById('prescriptionDate').valueAsDate = new Date();
      
      // Upload box functionality
      const prescriptionUpload = document.getElementById('prescriptionUpload');
      const prescriptionFile = document.getElementById('prescriptionFile');
      const prescriptionFileList = document.getElementById('prescriptionFileList');
      
      prescriptionUpload.addEventListener('click', function(e) {
        if (e.target.closest('i, p') || prescriptionFileList.children.length === 0) {
          prescriptionFile.click();
        }
      });
      
      prescriptionFile.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
          const file = e.target.files[0];
          prescriptionFileList.innerHTML = `
                <div class="file-item">
                  <span>${file.name.substring(0, 15)}${file.name.length > 15 ? '...' : ''}</span>
                  <button type="button" onclick="removeFile('prescriptionFile', 'prescriptionFileList')">
                    <i class="bi bi-x"></i>
                  </button>
                </div>
              `;
        }
      });

      // Multiple files upload
      const multipleUpload = document.getElementById('multipleUpload');
      const multipleFiles = document.getElementById('multipleFiles');
      const multipleFileList = document.getElementById('multipleFileList');
      
      multipleUpload.addEventListener('click', function(e) {
        if (e.target.closest('i, p') || multipleFileList.children.length === 0) {
          multipleFiles.click();
        }
      });
      
      multipleFiles.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
          multipleFileList.innerHTML = '';
          Array.from(e.target.files).forEach((file, index) => {
            multipleFileList.innerHTML += `
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
      
      // Initialize DataTable
      $('#prescriptionsTable').DataTable({
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
      
      // Form submission handler - now just for validation and UI feedback
      document.getElementById('prescriptionForm').addEventListener('submit', function(e) {
        const prescriptionId = document.getElementById('prescriptionId').value;
        
        // For new prescriptions, validate that a file is uploaded
        if (!prescriptionId) {
          const prescriptionFile = document.getElementById('prescriptionFile');
          if (prescriptionFile.files.length === 0) {
            e.preventDefault();
            alert('Please upload a prescription file');
            return;
          }
        }
        
        // Change button text to show processing
        const saveBtn = document.getElementById('saveButton');
        saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Processing...';
        saveBtn.disabled = true;
        
        // Form will submit normally after this
      });
      
      // Reset form when modal is closed
      document.getElementById('prescriptionModal').addEventListener('hidden.bs.modal', function() {
        resetForm();
      });
    });

    function showImageInModal(imageUrl, imageName) {
      const previewModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
      const previewImage = document.getElementById('previewedImage');
      const previewTitle = document.getElementById('imagePreviewTitle');
      
      previewImage.src = imageUrl;
      previewImage.alt = imageName;
      previewTitle.textContent = imageName;
      
      previewModal.show();
    }
    
    function editPrescription(id) {
      const baseUrl = document.getElementById('baseUrl').dataset.url;
      const saveBtn = document.getElementById('saveButton');
      saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Loading...';
      saveBtn.disabled = true;

      fetch(`${baseUrl}prescription/edit/${id}`)
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
              document.getElementById('prescriptionId').value = data.id;
              
              document.getElementById('problemDescription').value = data.problem_description;
              document.getElementById('doctorName').value = data.doctor_name;
              const relationInput = document.getElementById('prescription');
              const relationItems = document.querySelectorAll('#prescriptionLists .dropdown-item');
              const value = data.guest_id; // guest_id
                 // guest name

              relationInput.value = data.first_name;  // Update dropdown button text
              // show name in visible input
               document.getElementById('guest_id').value = value; 
              
              
              
              
              document.getElementById('prescriptionDate').value = data.date.split(' ')[0];
              document.getElementById('prescriptionNotes').value = data.notes || '';
              
              // Update form action with base URL
              const form = document.getElementById('prescriptionForm');
              form.action = `${baseUrl}prescription/update/${data.id}`;
              
              // Update UI
              document.getElementById('prescriptionModalLabel').innerHTML = 
                  '<i class="bi bi-pencil-square me-2"></i>Edit Prescription';
              saveBtn.innerHTML = '<i class="bi bi-arrow-repeat me-1"></i> Update Prescription';
              
              // Handle files - Clear existing displays first
              document.getElementById('prescriptionFileList').innerHTML = '';
              document.getElementById('multipleFileList').innerHTML = '';
              
              // Handle prescription file (single file upload)
              if (data.prescription_file) {
                  const file = data.prescription_file;
                  const fileExt = file.original_name.split('.').pop().toLowerCase();
                  const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExt);
                  const fileUrl = `${baseUrl}public/uploads/prescriptions/${file.file_path}`;
                  
                  let fileLink = `<span>${file.original_name}</span>`;
                  
                  if (isImage) {
                      fileLink = `
                          <a href="javascript:void(0);" onclick="showImageInModal('${fileUrl}', '${file.original_name}')">
                              <i class="bi bi-image me-1"></i>
                              ${file.original_name}
                          </a>
                      `;
                  }
                  
                  document.getElementById('prescriptionFileList').innerHTML = `
                      <div class="file-item">
                          ${fileLink}
                          <small class="text-muted ms-2">(Current file)</small>
                      </div>
                  `;
                  
                  // Create a hidden field to preserve the existing file
                  const hiddenInput = document.createElement('input');
                  hiddenInput.type = 'hidden';
                  hiddenInput.name = 'existing_prescription_file';
                  hiddenInput.value = file.file_path;
                  form.appendChild(hiddenInput);
                  
                  // Make the file input optional for edits
                  const fileInput = document.getElementById('prescriptionFile');
                  fileInput.removeAttribute('required');
                  fileInput.disabled = false;
              }
              
              // Handle additional files (multiple files upload)
              if (data.other_files && data.other_files.length > 0) {
                  data.other_files.forEach(file => {
                      const fileExt = file.original_name.split('.').pop().toLowerCase();
                      const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExt);
                      const fileUrl = `${baseUrl}public/uploads/prescriptions/other_files/${file.file_path}`;
                      
                      let fileLink = `<span>${file.original_name}</span>`;
                      
                      if (isImage) {
                          fileLink = `
                              <a href="javascript:void(0);" onclick="showImageInModal('${fileUrl}', '${file.original_name}')">
                                  <i class="bi bi-image me-1"></i>
                                  ${file.original_name}
                              </a>
                          `;
                      }
                      
                      document.getElementById('multipleFileList').innerHTML += `
                          <div class="file-item">
                              ${fileLink}
                              <small class="text-muted ms-2">(Current file)</small>
                          </div>
                      `;
                  });
              }
              
              // Show modal using the initialized instance
              prescriptionModal.show();
          })
          .catch(error => {
              console.error('Error:', error);
              alert('Failed to load prescription data: ' + error.message);
          })
          .finally(() => {
              saveBtn.disabled = false;
          });
    }

    async function loadFiles(prescriptionId) {
        const baseUrl = document.getElementById('baseUrl').dataset.url;
        try {
            const response = await fetch(`${baseUrl}prescription/files/${prescriptionId}`);
            const data = await response.json();
            
            const fileGrid = document.getElementById('filePreviewGrid');
            fileGrid.innerHTML = '';
            
            if (data.error) {
                fileGrid.innerHTML = `<div class="col-12 text-center py-4">${data.error}</div>`;
                return;
            }
            
            // Process each file
            for (const file of data) {
                const fileExt = file.original_name.split('.').pop().toLowerCase();
                const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExt);
                
                // Create both possible URLs
                const urls = [
                    `${baseUrl}public/uploads/prescriptions/${file.file_path}`,
                    `${baseUrl}public/uploads/prescriptions/other_files/${file.file_path}`
                ];
                
                // Determine the correct URL by checking which one exists
                const fileUrl = await findExistingUrl(urls);
                
                fileGrid.innerHTML += `
                  <div class="file-preview-item">
                      ${isImage ? 
                          `<img src="${fileUrl}" class="file-preview-img" alt="${file.original_name}" 
                                onerror="this.onerror=null;this.src='${urls[1]}'">` : 
                          `<div class="file-preview-img d-flex align-items-center justify-content-center">
                              <i class="bi bi-file-earmark-text fs-1"></i>
                          </div>`
                      }
                      <div class="file-preview-title">${file.original_name}</div>
                      <div class="file-preview-type">${file.file_type === 'prescription' ? 'Prescription' : 'Additional Document'}</div>
                      <div class="d-flex gap-2">
                          <a href="#" class="btn btn-sm btn-primary mt-2" 
                            onclick="downloadFile(['${fileUrl}'], '${file.original_name}'); return false;">
                              Download
                          </a>
                          ${isImage ? 
                              `<button class="btn btn-sm btn-info mt-2" 
                                  onclick="showImageInModal(['${fileUrl}'], '${file.original_name}')">
                                  View
                              </button>` : ''}
                      </div>
                  </div>
              `;
            }
            
            // Update modal title
            document.querySelector('#filePreviewModal .modal-title').textContent = 
                `Uploaded Files (${data.length})`;
        } catch (error) {
            console.error('Error:', error);
            fileGrid.innerHTML = `
                <div class="col-12 text-center py-4">Error loading files. Please try again.</div>
            `;
        }
    }

    // Helper function to find which URL exists
    async function findExistingUrl(urls) {
        for (const url of urls) {
            try {
                const response = await fetch(url, { method: 'HEAD' });
                if (response.ok) return url;
            } catch (e) {
                // Skip on error
            }
        }
        return null;
    }

    // Improved download function with fallback
    async function downloadFile(urls, fileName) {
        try {
            // Find working URL
            const workingUrl = await findExistingUrl(urls);
            
            // Create hidden anchor tag for download
            const a = document.createElement('a');
            a.href = workingUrl;
            a.download = fileName;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            
            // Set timeout to revoke object URL
            setTimeout(() => {
                window.URL.revokeObjectURL(workingUrl);
            }, 100);
        } catch (error) {
            console.error('Download failed:', error);
            alert('File could not be downloaded');
        }
    }

    function resetForm() {
        const baseUrl = document.getElementById('baseUrl').dataset.url;
        const form = document.getElementById('prescriptionForm');

        form.reset();
        form.action = `${baseUrl}prescription/store`;
        document.getElementById('prescriptionId').value = '';

        // Remove any hidden fields for existing files
        const existingFileInput = document.querySelector('input[name="existing_prescription_file"]');
        if (existingFileInput) {
            existingFileInput.remove();
        }

        document.getElementById('prescriptionModalLabel').innerHTML =
            '<i class="bi bi-clipboard-plus-fill me-2"></i>Add New Prescription';
        document.getElementById('saveButton').innerHTML =
            '<i class="bi bi-save me-1"></i> Save Prescription';
        document.getElementById('prescriptionDate').valueAsDate = new Date();
        document.getElementById('prescriptionFileList').innerHTML = '';
        document.getElementById('multipleFileList').innerHTML = '';

        const fileInput = document.getElementById('prescriptionFile');
        fileInput.value = '';
        fileInput.setAttribute('required', '');
        fileInput.disabled = false;
    }
     
    function setDeleteId(id) {
        const baseUrl = document.getElementById('baseUrl').dataset.url;
        document.getElementById('confirmDeleteBtn').href = `${baseUrl}prescription/delete/${id}`;
    }
    
    function removeFile(inputId, listId) {
        document.getElementById(inputId).value = '';
        document.getElementById(listId).innerHTML = '';
    }
    
    function removeFileItem(button) {
        button.parentElement.remove();
    }
  </script>
</body>
</html>
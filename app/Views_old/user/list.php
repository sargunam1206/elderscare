<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  <title>User Management</title>
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

</style>
  <style>
    body {
      background-color: #f4f6f9;
      font-size: 14px;
    }
    .form-label {
      font-weight: bold;
    }
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
    #usersTable tr td:last-child {
      white-space: nowrap;
    }
    .badge-super_admin {
      background-color: #6610f2;
      color: white;
    }
    .badge-admin {
      background-color: #fd7e14;
      color: white;
    }
    .badge-guest {
      background-color: #20c997;
      color: white;
    }
    .permission-badge {
      font-size: 0.75rem;
      margin-left: 5px;
    }
    .current-user-badge {
      background-color: #0d6efd;
      color: white;
    }
  </style>
   <style>
    :root {
      --primary: #1B5E20;
      --secondary: #66BB6A;
      --accent: #A5D6A7;
      --light-bg: #F9F9F9;
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


    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
    }
    .card-title {
      color: var(--primary);
      font-weight: 600;
    }
    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
      border-radius: 8px;
    }
    .btn-primary:hover {
      background-color: #2E7D32;
      border-color: #2E7D32;
    }
    .btn-secondary {
      background-color: var(--accent);
      color: var(--primary);
      border-color: var(--accent);
      border-radius: 8px;
    }
    .btn-secondary:hover {
      background-color: #81C784;
      border-color: #81C784;
    }
    .legend-indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      display: inline-block;
    }
  </style>
</head>

<body>
  <?= view('layout/head') ?>

  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
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
   
<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= session()->getFlashdata('success') ?>
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
              <h5><i class="bi bi-people me-2 text-success"></i>User Management</h5>
              <div>
                <span class="badge bg-light text-success border border-success me-2">
                  <?= count($users) ?> users
                </span>
                <?php if(!empty($allowedUserTypes)): ?>
                  <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#userModal" onclick="resetForm()">
                    <i class="bi bi-plus-circle me-1"></i> Add User
                  </button>
                <?php endif; ?>
              </div>
            </div>

            <div class="table-responsive">
              <table id="usersTable" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                <thead>
                  <tr>
                    <th style="width: 50px;">S.No</th>
                    <th>User Name</th>
                    <th>Mobile No</th>
                    <th>Address</th>
                    <th>User Type</th>
                    <th>Created On</th>
                    <th style="width: 130px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($users as $index => $user): ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td>
                        <?= esc($user['user_name']) ?>
                        <?php if($user['user_id'] === session()->get('user_id')): ?>
                          <span class="badge current-user-badge permission-badge">You</span>
                        <?php endif; ?>
                      </td>
                      <td><?= esc($user['user_mobileno']) ?></td>
                      <td><?= esc($user['user_address']) ?></td>
                      <td>
                        <span class="badge badge-<?= $user['user_type'] ?>">
                          <?= ucfirst(str_replace('_', ' ', $user['user_type'])) ?>
                        </span>
                      </td>
                      <td><?= date('M d, Y', strtotime($user['created_on'])) ?></td>
                      <td>
                        <?php if($currentUserType === 'super_admin' || 
                                ($currentUserType === 'admin' && $user['user_type'] === 'guest' && $user['main_user_id'] === session()->get('user_id'))): ?>
                          <button class="btn btn-sm text-primary" onclick="editUser(<?= $user['user_id'] ?>)">
                            <i class="bi bi-pencil-square"></i>
                          </button>
                          <?php if($user['user_id'] !== session()->get('user_id')): ?>
                            <button class="btn btn-sm text-danger" data-bs-toggle="modal" 
                              data-bs-target="#deleteConfirmationModal" 
                              onclick="setDeleteId(<?= $user['user_id'] ?>)">
                              <i class="bi bi-trash"></i>
                            </button>
                          <?php endif; ?>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   

    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-lg-custom">
        <form id="userForm" method="post">
          <?= csrf_field() ?>
          <input type="hidden" name="user_id" id="user_id">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="userModalLabel"><i class="bi bi-plus-circle-fill me-2"></i>Add New User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Full Name</label>
                  <input type="text" class="form-control" name="user_name" id="user_name" placeholder="e.g., John Doe" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Mobile Number</label>
                  <input type="text" class="form-control" name="user_mobileno" id="user_mobileno" placeholder="e.g., 9876543210" required>
                </div>
              </div>

              <hr class="hr" />
              
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label required">Password</label>
                  <input type="password" class="form-control" name="user_password" id="user_password" placeholder="At least 6 characters" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label required">Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Retype password" required>
                </div>
              </div>

              <hr class="hr" />
              
              <div class="row mb-3">
                <div class="mb-3 col-md-6">
                  <label for="userTypeInput" class="form-label required">User Type</label>
                  <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="user_type" id="userTypeInput"
                      placeholder="Select User Type" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly required />
                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="userTypeInput" style="max-height: 150px; overflow-y: auto;">
                      <div id="userTypeLists" style="width: 100%;">
                        <div class="dropdown-item" data-value="">Select User Type</div>
                        <?php foreach($allowedUserTypes as $type): ?>
                          <div class="dropdown-item" data-value="<?= $type ?>"><?= ucfirst(str_replace('_', ' ', $type)) ?></div>
                        <?php endforeach; ?>
                      </div>
                    </ul>
                  </div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Address</label>
                  <input type="text" class="form-control" name="user_address" id="user_address" placeholder="User's address">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                <i class="bi bi-x-circle me-1"></i> Cancel
              </button>
              <button type="submit" class="btn btn-primary" id="saveButton">
                <i class="bi bi-save me-1"></i> Save User
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <h5 class="modal-title" id="deleteModalTitle">Are you sure you want to delete this user?</h5>
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
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#usersTable').DataTable({
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
    });

    function setDeleteId(id) {
        document.getElementById('confirmDeleteBtn').href = `<?= base_url('users/delete/') ?>${id}`;
    }

    function resetForm() {
        $('#userForm')[0].reset();
        $('#user_id').val('');
        $('#userModalLabel').html('<i class="bi bi-plus-circle-fill me-2"></i>Add New User');
        $('#saveButton').html('<i class="bi bi-save me-1"></i> Save User');
        $('#userForm').attr('action', '<?= base_url('users/store') ?>');
        $('#user_password').prop('required', true);
        $('#confirm_password').prop('required', true);
        
        const allowedTypes = <?= json_encode($allowedUserTypes) ?>;
        const userTypeSelect = $('#user_type');
        userTypeSelect.empty();
        userTypeSelect.append('<option value="">Select User Type</option>');
        allowedTypes.forEach(type => {
            const displayType = type.split('_').map(word => 
                word.charAt(0).toUpperCase() + word.slice(1)
            ).join(' ');
            userTypeSelect.append(`<option value="${type}">${displayType}</option>`);
        });
    }

function editUser(id) {
    $.get(`<?= base_url('users/edit/') ?>${id}`, function(response) {
        if (response.status === 'success') {
            const data = response.data;

            $('#user_id').val(data.user_id);
            $('#user_name').val(data.user_name);
            $('#user_mobileno').val(data.user_mobileno);
            $('#user_address').val(data.user_address);

            $('#userModalLabel').html('<i class="bi bi-pencil-square me-2"></i>Edit User');
            $('#saveButton').html('<i class="bi bi-arrow-repeat me-1"></i> Update User');
            $('#userForm').attr('action', `<?= base_url('users/update/') ?>${id}`);
            $('#user_password').prop('required', false);
            $('#confirm_password').prop('required', false);

            // Set the user type value
            $('#userTypeInput').val(data.user_type);

            // Mark active in dropdown
            document.querySelectorAll('#userTypeLists .dropdown-item').forEach(item => {
                if (item.getAttribute('data-value') === data.user_type) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });

            $('#userModal').modal('show');
        } else {
            alert(response.message || 'Failed to fetch user data');
        }
    }).fail(function() {
        alert('Failed to connect to server');
    });
}


      // User Type dropdown functionality
  document.addEventListener('DOMContentLoaded', function() {
    const userTypeInput = document.getElementById('userTypeInput');
    const userTypeItems = document.querySelectorAll('#userTypeLists .dropdown-item');

    userTypeItems.forEach(item => {
      item.addEventListener('click', function () {
        const value = this.getAttribute('data-value');
        userTypeInput.value = value;
      });
    });
  });

    // $('#userForm').submit(function(e) {
    //     e.preventDefault();
        
    //     const form = $(this);
    //     const url = form.attr('action');
    //     const method = form.attr('method');
        
    //     $.ajax({
    //         url: url,
    //         type: method,
    //         data: form.serialize(),
    //         success: function(response) {
    //             window.location.href = '<?= base_url('users') ?>';
    //         },
    //         error: function(xhr) {
    //             if (xhr.responseJSON && xhr.responseJSON.errors) {
    //                 alert('Validation errors: ' + JSON.stringify(xhr.responseJSON.errors));
    //             } else {
    //                 alert('Error: ' + xhr.responseText);
    //             } 
    //         }
    //     });
    // });

    $('#userModal').on('hidden.bs.modal', function () {
        resetForm();
    });
  </script>
  </div>
</body>
</html>
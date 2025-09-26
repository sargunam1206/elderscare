<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Hospitality</title>
  <!-- Favicon icon-->
  <!--<link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />-->

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
      <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/globel.css">


  <!-- Owl Carousel  -->
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
 
  <style>
    :root {
      --primary-green: #66BB6A;
      --primary-green-hover: #2E7D32;
      --secondary-green: #66BB6A;
      --table-header-text: #242424;
      --light-green: #A5D6A7;
    }

    body {
      background-color: #f8f9fa;
      font-size: 0.9rem;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Header Section */
   
    /* Scrollable content */
    .body-wrapper {
      flex: 1;
      overflow-y: auto;
      padding: 1.5rem;
    }

    /* Card styles */
    .card {
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      border-radius: 1rem;
      border: none;
      margin-bottom: 1.5rem;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .card-header {
      background-color: var(--light-green);
      color: var(--table-header-text);
      font-size: 0.95rem;
      font-weight: 600;
      padding: 1rem 1.25rem;
      border-top-left-radius: 1rem !important;
      border-top-right-radius: 1rem !important;
      border-bottom: 1px solid rgba(0,0,0,0.1);
    }

    .card-body {
      font-size: 0.9rem;
      padding: 1.25rem;
    }
    
    .card-title {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 0.75rem;
      color: #2c3e50;
    }
    
    .card-text {
      color: #555;
      margin-bottom: 1.25rem;
      line-height: 1.5;
    }
    
    .btn-success {
      background-color: var(--primary-green);
      border-color: var(--primary-green);
      border-radius: 0.5rem;
      padding: 0.5rem 1.25rem;
      font-weight: 500;
    }
    
    .btn-success:hover {
      background-color: var(--primary-green-hover);
      border-color: var(--primary-green-hover);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .section-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 1.5rem;
      padding-bottom: 0.5rem;
      border-bottom: 2px solid var(--light-green);
    }
    
    .icon-container {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 2.5rem;
      height: 2.5rem;
      background-color: rgba(102, 187, 106, 0.15);
      border-radius: 0.5rem;
      margin-right: 0.75rem;
      
    }
   
    
    .icon-container i {
      font-size: 1.25rem;
      
    }
    
    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 1.5rem;
    }
    /* Change normal text color */
.dropdown-menu .dropdown-item {
  color: #ffffff !important;  /* white text */
}

/* Change hover background + text color */
.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
  background-color: #1B5E20 !important; /* darker green on hover */
  color:white !important;
  font-weight: 500; /* gold text */
}

/* Divider line color */
.dropdown-menu .dropdown-divider {
  border-top: 1px solid rgba(255,255,255,0.3);
}


  </style>
 







</head>

<body style="background-color:#EDF7EE;">
<header class=" shadow-sm" style="background-color:#419045;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#419045;">
    <div class="container-fluid">

      <!-- Logo + Title -->
      <a class="navbar-brand d-flex align-items-center" href="<?= base_url('dashboard'); ?>">
        <img src="<?= base_url('./public/Logo-Elders_home.png'); ?>" 
             alt="Logo" 
             style="height:50px; border-radius:50%; object-fit:cover;">
        <span class="fw-bold text-white ms-2 custom-spacing">Nivasan Hospitality Services Pvt Ltd</span>
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" 
              aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list text-white fs-1"></i>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
        <ul class="navbar-nav align-items-lg-center fs-5">



          <!-- User Dropdown -->
          <li class="nav-item dropdown ms-lg-4">
            <a class="d-flex align-items-center nav-link dropdown-toggle text-white fw-semibold" href="#" 
               role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle fs-3 me-2"></i>
              <?= ucwords(str_replace('_', ' ', session()->get('user_type'))) ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" style="background-color:#2E7D32;" aria-labelledby="userDropdown">
              <?php if (in_array(session()->get('user_type'), ['super_admin', 'admin'])): ?>
                <li><a class="dropdown-item" href="<?= base_url('users'); ?>">Users</a></li>
              <?php endif; ?>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="<?= base_url('logout'); ?>">Logout</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>
 <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  
  <div id="main-wrapper" class="d-flex flex-column h-100">
    <!-- Header Section -->

    <!-- Main Content -->
   <div class="p-3">
  <h2 class="section-title mb-3" style="font-size:2.1rem;">Home Page</h2>
  
<div class="grid-container" 
    >

    
    <!-- Card Template -->
    <div class="card shadow-sm" style="font-size:0.8rem;">
    <a href="<?= base_url('/dashboard'); ?>" style="text-decoration:none; color:inherit;">

      <div class="card-header d-flex align-items-center py-2 px-3" style="font-size:0.85rem;">
        <div class="icon-container me-2" style="font-size:1rem; border: 2px solid #242424;">
          <i class="ti ti-building card-icons"></i>
        </div>
        <span class="fs-6">Front Office</span>
      </div>
      <div class="card-body p-3">
        <h6 class="card-title mb-2" style="font-size:0.9rem; color:black;">Front Desk Management</h6>
        <p class="card-text mb-2" style="font-size:0.75rem;">
          Manage reception, appointments, and customer interactions.
        </p>
        <div class="card-button-container">
          <a href="<?= base_url('/dashboard'); ?>" class="btn btn-success btn-sm">
            <i class="ti ti-door-enter me-1 "></i> Access
          </a>
              <!-- <a href="<?= base_url('advancebooking'); ?>" class="btn btn-primary">+ Add Booking</a> -->

        </div>
      </div>
      </a>
    </div>

    <!-- Repeat the same structure for other cards -->
    <div class="card shadow-sm" style="font-size:0.8rem;">
       <a href="<?= base_url('/posdashboard'); ?>" style="text-decoration:none; color:inherit;">
      <div class="card-header d-flex align-items-center py-2 px-3" style="font-size:0.85rem;">
        <div class="icon-container me-2" style="font-size:1rem; border:2px solid #242424;">
          <i class="ti ti-shopping-cart text-#242424"></i>
        </div>
        <span class="fs-6">Point of Sale</span>
      </div>
      <div class="card-body p-3">
        <h6 class="card-title mb-2 text-black" style="font-size:0.9rem;">POS System</h6>
        <p class="card-text mb-2" style="font-size:0.75rem;">
          Process sales, manage inventory, and handle transactions.
        </p>
        <div class="card-button-container">
          <a href="<?= base_url('/posdashboard'); ?>" class="btn btn-success btn-sm">
            <i class="ti ti-cash me-1"></i> Open POS
          </a>
        </div>
      </div>
      </a>
    </div>

    <!-- Assets -->
    <div class="card shadow-sm" style="font-size:0.8rem;">
      <div class="card-header d-flex align-items-center py-2 px-3" style="font-size:0.85rem;">
        <div class="icon-container me-2" style="font-size:1rem; border:2px solid #242424;">
          <i class="ti ti-asset text-#242424"></i>
        </div>
        <span class="fs-6">Assets</span>
      </div>
      <div class="card-body p-3">
        <h6 class="card-title mb-2" style="font-size:0.9rem;">Asset Management</h6>
        <p class="card-text mb-2" style="font-size:0.75rem;">
          Track and maintain company assets with reporting tools.
        </p>
        <div class="card-button-container">
          <a href="#" class="btn btn-success btn-sm">
            <i class="ti ti-list-details me-1"></i> Manage
          </a>
        </div>
      </div>
    </div>

    <!-- Payroll -->
    <div class="card shadow-sm" style="font-size:0.8rem;">
         <a href="https://payroll.neuralarc.com/login" target="_blank" style="text-decoration:none; color:inherit;">
         <div class="card-header d-flex align-items-center py-2 px-3" style="font-size:0.85rem;">
        <div class="icon-container me-2" style="font-size:1rem; border:2px solid #242424;">
          <i class="ti ti-shopping-cart text-#242424"></i>
        </div>
        <span class="fs-6">Payroll</span>
      </div>
      <div class="card-body p-3">
   
        <h6 class="card-title mb-2  text-black" style="font-size:0.9rem;">Payroll Management</h6>
        <p class="card-text mb-2" style="font-size:0.75rem;">
          Process employee payments and generate payroll reports.
        </p>
        <div class="card-button-container">
         <a href="https://payroll.neuralarc.com/login" target="_blank" class="btn btn-success btn-sm">
            <i class="ti ti-file-invoice me-1"></i> Payroll
          </a>
        </div>
      </div>
    </div>

    <!-- Admin -->
    <div class="card shadow-sm" style="font-size:0.8rem;">
          <a href="<?= base_url('/admindashboard'); ?>" style="text-decoration:none; color:inherit;">

      <div class="card-header d-flex align-items-center py-2 px-3" style="font-size:0.85rem;">
        <div class="icon-container me-2" style="font-size:1rem; border:2px solid #242424;">
          <i class="ti ti-settings text-#242424"></i>
        </div>
        <span class="fs-6">Admin</span>
      </div>
      <div class="card-body p-3">
        <h6 class="card-title mb-2" style="font-size:0.9rem; color:black;">Administration</h6>
        <p class="card-text mb-2" style="font-size:0.75rem;">
          Manage system configuration and users.
        </p>
        <div class="card-button-container">

          <a href="<?= base_url('/admindashboard'); ?>" class="btn btn-success btn-sm">
            <i class="ti ti-shield-lock me-1"></i> Admin
          </a>
        </div>
      </div>
      </a>
    </div>

    <!-- Reports -->
    <div class="card shadow-sm" style="font-size:0.8rem;">
      <div class="card-header d-flex align-items-center py-2 px-3" style="font-size:0.85rem;">
        <div class="icon-container me-2" style="font-size:1rem;border:2px solid #242424;">
          <i class="ti ti-chart-bar text-#242424"></i>
        </div>
        <span class="fs-6">Reports</span>
      </div>
      <div class="card-body p-3">
        <h6 class="card-title mb-2" style="font-size:0.9rem;">Reporting Suite</h6>
        <p class="card-text mb-2" style="font-size:0.75rem;">
          Generate reports and analytics for insights.
        </p>
        <div class="card-button-container">
          <a href="#" class="btn btn-success btn-sm">
            <i class="ti ti-report-analytics me-1"></i> Reports
          </a>
        </div>
      </div>
    </div>

  </div>
</div>

  </div>

  <div class="dark-transparent sidebartoggler"></div>  
      <script>
  function handleColorTheme(e) {
    document.documentElement.setAttribute("data-color-theme", e);
  }
</script>
    </div>

    <!--  Search Bar -->
   


  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->

  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
</body>
</html>
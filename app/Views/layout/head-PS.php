
<?php
$uri = service('uri');

// Define onboarding pages
$servicesPages = ['servicetype', 'category', 'servicemodes'];

// Define boarding pages
$boardingPages = ['boarding', 'act', 'not'];

// Get current active page
$activePage = strtolower($uri->getSegment(1));
?>



<style>
  /* Force brand and menu to align vertically */
.navbar .container-fluid {
    display: flex;
    align-items: center;  /* vertical centering */
    justify-content: space-between; /* space logo left, menu right */
}

/* Make sure nav items align middle too */
.navbar-nav {
    display: flex;
    align-items: center;
}


.navbar-brand img {
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.navbar-brand span {
    font-size:20px; /* default text size */
}

.custom-spacing {
    word-spacing: 5px; /* adjust value as needed */
    color: red;
}
/* ==== General Navbar Links ==== */
.navbar-nav .nav-link {
    position: relative;
    padding-bottom: 10px;
}

/* Active underline */
.navbar-nav .nav-link.active::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 100%;
    background-color: currentColor;
}

/* ==== Dropdown Styling ==== */
.navbar .dropdown-menu {
    background-color: #1B5E20;
    border: none;
    border-radius: 8px;
    overflow: visible !important;
}

.navbar .dropdown-item {
    color: #FFFFFF;
}

.navbar .dropdown-item:hover {
    background-color: #2E7D32;
}

/* ==== Submenu Styling ==== */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu > .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    margin-top: -1px;
    border-radius: 8px;
    background-color: #1B5E20;
    display: none;
    min-width: 180px;
    z-index: 1050; /* Make sure it appears on top */
}

/* Desktop hover submenu */
@media (min-width: 992px) {
    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }
}

/* Arrows */
.dropdown-submenu > .dropdown-toggle::after {
    content: "▶";
    float: right;
    margin-left: .5rem;
    font-size: 12px;
}
@media (max-width: 991px) {
    .dropdown-submenu > .dropdown-menu {
        position: relative;
        top: 0;
        left: 0;
        margin-top: 0;
        margin-left: 1rem;
        display: none; /* hidden by default */
    }
}

.dropdown-menu .dropdown-item.active {
  background-color: #2E7D32; /* same hover green */
  font-weight: 600;
}


</style>



<?php
$uri = service('uri');

// Define onboarding pages
// $onboardingPages = ['onboarding', 'rooms', 'servicetype', 'category', 'servicemodes'];

// Define boarding pages
$boardingPages = ['boarding', 'act', 'not'];

// Get current active page
$activePage = strtolower($uri->getSegment(1));
?>

<header class="app-header shadow-sm" style="background-color:#419045;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#419045;">
    <div class="container-fluid d-flex align-items-center">

      <!-- Logo + Title -->
      <a class="navbar-brand d-flex align-items-center" href="<?= base_url('dashboard'); ?>">
        <img src="<?= base_url('./public/Logo-Elders_home.png'); ?>" 
             alt="Logo" 
             style="height:50px; border-radius:50%; object-fit:cover;">
        <span class="fw-bold text-white ms-2 custom-spacing">
          Nivasan Hospitality Services Pvt Ltd
        </span>
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" 
              aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list text-white fs-1"></i>
      </button>

      <!-- Menu (aligned right in same line, vertically centered) -->
      <div class="collapse navbar-collapse ms-auto" id="navbarMenu">
        <ul class="navbar-nav ms-auto d-flex align-items-start fs-2">

          <!-- Dashboard -->
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold <?= ($activePage == 'fro') ? 'active' : '' ?>" 
               href="<?= base_url('fro'); ?>">
              <i class="bi bi-house me-1 fs-5"></i>
 Home
            </a>
          </li>


          <!-- Dashboard -->
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold <?= ($activePage == 'posdashboard') ? 'active' : '' ?>" 
               href="<?= base_url('posdashboard'); ?>">
              <i class="bi bi-bar-chart me-1 fs-5"></i>
 Dashboard
            </a>
          </li>
          <!-- Enquiry -->
         
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold <?= ($activePage == 'addproduct') ? 'active' : '' ?>" 
               href="<?= base_url('addproduct'); ?>">
              <i class="bi bi-wallet2 me-1 fs-5"></i> Charges
            </a>
          </li>
           <!-- Reports Dropdown -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-white fw-semibold <?= in_array($activePage, ['servicerept', 'chargesrept']) ? 'active' : '' ?>" 
     href="#" id="reportsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-file-earmark-bar-graph fs-5"></i> Reports
  </a>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="reportsDropdown">
    <li>
      <a class="dropdown-item <?= ($activePage == 'servicerept') ? 'active' : '' ?>" 
         href="<?= base_url('servicerept'); ?>">
        Service Report
      </a>
    </li>
    <li>
      <a class="dropdown-item <?= ($activePage == 'chargesrept') ? 'active' : '' ?>" 
         href="<?= base_url('chargesrept'); ?>">
        Charges Report
      </a>
    </li>
  </ul>
</li>







          <!-- Booking -->
        

          <!-- Guest Info -->
        

          <!-- Maintenance -->
         

          <!-- User Dropdown -->
          <li class="nav-item dropdown ms-lg-4">
            <a class="d-flex align-items-center nav-link dropdown-toggle text-white fw-semibold" href="#" 
               role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle fs-3 me-2"></i>
              <?= ucwords(str_replace('_', ' ', session()->get('user_type'))) ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="userDropdown">
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




<script>
  document.addEventListener("click", function (event) {
    const navbarMenu = document.getElementById("navbarMenu");
    const bsCollapse = bootstrap.Collapse.getInstance(navbarMenu); // Bootstrap collapse instance
    const toggleButton = document.querySelector(".navbar-toggler");

    if (!navbarMenu.contains(event.target) && !toggleButton.contains(event.target)) {
      if (navbarMenu.classList.contains("show")) {
        bsCollapse.hide(); // Close if open and clicked outside
      }
    }
  });
</script>
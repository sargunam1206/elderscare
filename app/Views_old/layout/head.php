
<?php
$uri = service('uri');

// Define onboarding pages
$onboardingPages = ['onboarding', 'rooms', 'servicetype', 'category', 'servicemodes'];

// Define boarding pages
$boardingPages = ['boarding', 'act', 'not'];

// Get current active page
$activePage = strtolower($uri->getSegment(1));
?>


<style>
/* ==== General Navbar Links ==== */
.navbar-nav .nav-link {
    position: relative;
    padding-bottom: 4px;
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

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Enable submenu toggle on mobile
    document.querySelectorAll('.dropdown-submenu > a').forEach(function (el) {
        el.addEventListener('click', function (e) {
            if (window.innerWidth < 992) { // Mobile only
                e.preventDefault();
                e.stopPropagation(); // 🔑 Prevent Bootstrap from closing parent dropdown

                let submenu = this.nextElementSibling;
                let isOpen = submenu && submenu.style.display === 'block';

                // Close all other submenus inside the same parent
                this.closest('.dropdown-menu').querySelectorAll('.dropdown-menu').forEach(function (sub) {
                    sub.style.display = 'none';
                });

                // Toggle clicked submenu
                if (submenu) {
                    submenu.style.display = isOpen ? 'none' : 'block';
                }
            }
        });
    });
});

</script>


<header class="header-fp p-0 w-100" style="background-color: #1B5E20;">
    <nav class="navbar navbar-expand-lg py-2">
        <div class="container-fluid">

            <!-- Logo -->
            <a class="navbar-brand" href="<?= base_url('dashboard'); ?>">
                <img src="<?= base_url('./public/Logo-Elders_home.png'); ?>" alt="Logo" style="height:50px; border-radius: 50%; object-fit: cover;">
            </a>

            <!-- Mobile toggle -->
            <!-- <button class="navbar-toggler border-0 p-0 shadow-none text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="ti ti-menu-2 fs-8" style="color: #A5D6A7;"></i>
            </button> -->
             <button class="navbar-toggler border-0 p-0 shadow-none text-white" type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <i class="ti ti-menu-2 fs-8" style="color: #A5D6A7;"></i>
        </button>


            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 gap-xl-5 gap-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-semibold text-white <?= ($activePage == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">    
                    <a class="nav-link fs-5 fw-semibold text-white <?= ($activePage == 'viewadvancebooking' || $activePage == 'advancebooking') ? 'active' : '' ?>" href="<?= base_url('viewadvancebooking'); ?>">Booking</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-semibold text-white <?= ($activePage == 'viewguestinfo' || $activePage == 'guestinfo') ? 'active' : '' ?>" href="<?= base_url('viewguestinfo'); ?>">Guest Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-semibold text-white <?= ($activePage == 'addproduct'  || $activePage == 'paymentrecd' ) ? 'active' : '' ?>" href="<?= base_url('addproduct'); ?>">Inhouse Guest</a>
                    </li>
                   
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle fs-5 fw-semibold text-white <?= in_array($activePage, $onboardingPages) ? 'active' : '' ?>" 
       href="#" 
       id="onboardingDropdown" 
       role="button" 
       data-bs-toggle="dropdown" 
       aria-expanded="false">
        Onboarding
    </a>
    <ul class="dropdown-menu" aria-labelledby="onboardingDropdown">

        <!-- Services Submenu -->
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#">Services</a>
            <ul class="dropdown-menu"  >
                <li><a class="dropdown-item <?= ($activePage == 'onboarding' && $uri->getSegment(2) == 'servicetype') ? 'active' : '' ?>" href="<?= base_url('servicetype'); ?>">Service Type</a></li>
                <li><a class="dropdown-item <?= ($activePage == 'services' && $uri->getSegment(2) == 'category') ? 'active' : '' ?>" href="<?= base_url('category'); ?>">Service Category</a></li>
                <li><a class="dropdown-item <?= ($activePage == 'services' && $uri->getSegment(2) == 'servicemodes') ? 'active' : '' ?>" href="<?= base_url('servicemodes'); ?>">Service Mode</a></li>
            </ul>
        </li>

        <!-- Rooms -->
        <li><a class="dropdown-item <?= ($activePage == 'rooms') ? '' : '' ?>" href="<?= base_url('rooms'); ?>">Rooms</a></li>
    </ul>
</li>





<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle fs-5 fw-semibold text-white <?= in_array($activePage, $boardingPages) ? 'active' : '' ?>" 
       href="#" 
       id="boardingDropdown" 
       role="button" 
       data-bs-toggle="dropdown" 
       aria-expanded="false">
       Boarding
    </a>

    <ul class="dropdown-menu" aria-labelledby="boardingDropdown">
        <!-- Activities -->
        <li>
            <a class="dropdown-item <?= ($activePage == 'act') ? '' : '' ?>" href="<?= base_url('act'); ?>">
                Activities
            </a>
        </li>

        <!-- Noticeboard -->
        <li>
            <a class="dropdown-item <?= ($activePage == 'not') ? '' : '' ?>" href="<?= base_url('not'); ?>">
                Noticeboard
            </a>
        </li>
    </ul>
</li>




                </ul>

     <!-- User icon -->
<div class="dropdown">
  <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" 
     href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="ti ti-user-circle fs-7 me-1" style="color: #A5D6A7;"></i>
  </a>
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">

    <!-- Logged in user type -->
    <li>
      <a class="dropdown-item" href="#">
        <?= ucwords(str_replace('_', ' ', session()->get('user_type'))) ?>
      </a>
    </li>

    <!-- Profile -->
    <!-- <li>
      <a class="dropdown-item" href="<?= base_url('profile'); ?>">Profile</a>
    </li> -->

    <!-- Users link (only for super_admin and admin) -->
    <?php if (in_array(session()->get('user_type'), ['super_admin', 'admin'])): ?>
      <li>
        <a class="dropdown-item" href="<?= base_url('users'); ?>">Users</a>
      </li>
    <?php endif; ?>

    <li><hr class="dropdown-divider"></li>

    <!-- Logout -->
    <li>
      <a class="dropdown-item text-danger" href="<?= base_url('logout'); ?>">Logout</a>
    </li>
  </ul>
</div>


    </nav>
</header>

<!--<script>-->
<!--document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(item => {-->
<!--    item.addEventListener('click', function () {-->
<!--        const arrow = this.querySelector('.menu-arrow');-->
<!--        setTimeout(() => {-->
<!--            if (this.classList.contains('collapsed')) {-->
<!--                arrow.textContent = '▶';-->
<!--            } else {-->
<!--                arrow.textContent = '▼';-->
<!--            }-->
<!--        }, 200);-->
<!--    });-->
<!--});-->
<!--</script>-->
<!--<script>-->
<!--document.querySelectorAll('.dropdown-submenu > a').forEach(function (element) {-->
<!--    element.addEventListener('click', function (e) {-->
        <!--if (window.innerWidth < 992) { // Mobile only-->
<!--            e.preventDefault();-->
<!--            let submenu = this.nextElementSibling;-->
<!--            if (submenu && submenu.classList.contains('dropdown-menu')) {-->
<!--                submenu.classList.toggle('show');-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--});-->

<!--// Close other open submenus on mobile-->
<!--document.addEventListener('click', function (e) {-->
<!--    if (window.innerWidth < 992 && !e.target.closest('.dropdown-menu')) {-->
<!--        document.querySelectorAll('.dropdown-menu.show').forEach(function (menu) {-->
<!--            menu.classList.remove('show');-->
<!--        });-->
<!--    }-->
<!--});-->

<!--</script>-->
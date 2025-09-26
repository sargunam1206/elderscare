<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="900;url=http://viyoma.neuralarc.com/viyoma/logout" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Core Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

    <title>MatDash Bootstrap Admin</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .nested-container {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
            class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="side-mini-panel with-vertical">
            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <div class="iconbar">
                <div>
                    <div class="mini-nav ">
                        <div class="brand-logo d-flex align-items-center justify-content-center">
                            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                            </a>
                        </div>
                        <ul class="mini-nav-ul" data-simplebar>

                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Viyoma Menu -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item " id="mini-0">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                    data-bs-custom-class="custom-tooltip" data-bs-placement="right"
                                    data-bs-title="Assets">
                                    <iconify-icon icon="solar:layers-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>




                        </ul>

                    </div>
                    <div class="sidebarmenu">
                        <div class="brand-logo d-flex align-items-center nav-logo">
                            <a href="<?= base_url(); ?>/public/dist/main/index.html" class="text-nowrap logo-img">
                                <h1>VIYOMA</h1>
                            </a>

                        </div>

                        <!-- ---------------------------------- -->
                        <!-- Viyoma Manu -->
                        <!-- ---------------------------------- -->
                        <nav class="sidebar-nav" id="menu-right-mini-0" data-simplebar>
                            <ul class="sidebar-menu" id="sidebarnav">
                                <!-- ---------------------------------- -->
                                <!-- Home -->
                                <!-- ---------------------------------- -->

                                <!-- ---------------------------------- -->
                                <!-- Dashboard -->
                                <!-- ---------------------------------- -->
                                  <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?= base_url('dashboard'); ?>">

                    <span class="hide-menu">Dashboard</span>
                  </a>

                </li>
                                  <?php 
    $current_url = current_url(); // Get the current URL
?>

<!-- Admin Menu -->
<?php
$full_url = current_url() . (isset($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '');
$tabParam = $_GET['tab'] ?? ''; // get current tab if set

$isAdminActive = (
    $full_url === base_url('viewassettype') ||
    $full_url === base_url('viewassettype?tab=make') ||
    $full_url === base_url('viewassettype?tab=dealers') ||
    $full_url === base_url('viewassettype?tab=uom')
);

// Choose current href dynamically
$adminHref = match($tabParam) {
    'make'    => base_url('viewassettype?tab=make'),
    'dealers' => base_url('viewassettype?tab=dealers'),
    'uom'     => base_url('viewassettype?tab=uom'),
    default   => base_url('viewassettype'),
};
?>

<li class="sidebar-item <?= $isAdminActive ? 'active' : ''; ?>">
  <a class="sidebar-link" href="<?= $adminHref; ?>">
    <span class="hide-menu">Admin</span>
  </a>
</li>

           

<li class="sidebar-item <?php if (strpos($current_url, 'viewasset') !== false || strpos($current_url, 'asset1') !== false) echo 'active'; ?>">
  <a class="sidebar-link" href="<?= base_url('viewasset'); ?>">
    <span class="hide-menu">Assets</span>
  </a>
</li>

<?php
  $currentUri = uri_string();
  $isPurchaseActive = in_array($currentUri, ['purchase1', 'viewpurchase1']) || strpos($currentUri, 'editpurchase1') === 0;
?>

<li class="sidebar-item <?= $isPurchaseActive ? 'active' : '' ?>">
  <a class="sidebar-link" href="<?= base_url('purchase1'); ?>">
    <span class="hide-menu">Purchase</span>
  </a>
</li>

<?php
$full_url = current_url() . (isset($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '');
$tabParam = $_GET['tab'] ?? ''; // get current tab if set

$isAdminActive = (
    $full_url === base_url('assign') 
    
);

// Choose current href dynamically
$adminHref = match($tabParam) {
    
    default   => base_url('assign'),
};
?>

<li class="sidebar-item <?= $isAdminActive ? 'active' : ''; ?>">
  <a class="sidebar-link" href="<?= $adminHref; ?>">
    <span class="hide-menu">Assign Assets</span>
  </a>
</li>

                                <!-- <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow"
                                        href="<?= base_url(); ?>/public/dist/main/eco-shop.html">
                                        <span class="hide-menu">Purchase </span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="<?= base_url('purchase1'); ?>">
                                                <span class="icon-small"></span>Add Purchase Info
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="<?= base_url('viewpurchase1'); ?>">
                                                <span class="icon-small"></span>View Purchase Info
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="<?= base_url('/purchase-upload'); ?>">
                                                <span class="icon-small"></span>Upload Excel File
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="http://freelance.neuralarc.com/digitalflow/"
                                        target="_blank">
                                        <span class="hide-menu">Employee</span>
                                    </a>
                                </li>










                            </ul>
                        </nav>




                    </div>
                </div>
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical"><!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item d-flex d-xl-none">
                                <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler "
                                    id="headerCollapse" href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                                </a>
                            </li>
                            <!--li class="nav-item d-none d-xl-flex nav-icon-hover-bg rounded-circle">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-lg-flex dropdown nav-icon-hover-bg rounded-circle">
                <div class="hover-dd">
                  <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                    iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                  </a>-->
                            <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden"
                                aria-labelledby="drop2">
                                <div class="position-relative">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="p-4 pb-3">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!--<div class="position-relative">
                                  <a href="<?= base_url(); ?>/public/dist/main/app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <conify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Chat Application</h6>
                                      <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Invoice App</h6>
                                      <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact Application</h6>
                                      <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Email App</h6>
                                      <span class="fs-11 d-block text-body-color">Get new emails</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">User Profile</h6>
                                      <span class="fs-11 d-block text-body-color">learn more information</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Calendar App</h6>
                                      <span class="fs-11 d-block text-body-color">Get dates</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact List Table</h6>
                                      <span class="fs-11 d-block text-body-color">Add new contact</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Notes Application</h6>
                                      <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                    </div>
                                  </a>
                                </div>
                              </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--div class="col-4 d-none d-lg-flex">
                          <!img src="<?= base_url(); ?>/public/dist/assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd" class="img-fluid mega-dd-bg" />
                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </li>
                        </ul>

                        <div class="d-block d-lg-none py-9 py-xl-0">
                            <!--<img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg" alt="matdash-img" />-->
                        </div>
                        <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul
                                    class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                    <!--<li class="nav-item dropdown">-->
                                    <!--    <a href="javascript:void(0)"-->
                                    <!--        class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"-->
                                    <!--        type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"-->
                                    <!--        aria-controls="offcanvasWithBothOptions">-->
                                    <!--        <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle"-->
                                    <!--        href="javascript:void(0)">-->
                                    <!--        <iconify-icon icon="solar:moon-line-duotone"-->
                                    <!--            class="moon fs-6"></iconify-icon>-->
                                    <!--    </a>-->
                                    <!--    <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle"-->
                                    <!--        href="javascript:void(0)" style="display: none">-->
                                    <!--        <iconify-icon icon="solar:sun-2-line-duotone"-->
                                    <!--            class="sun fs-6"></iconify-icon>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item d-block d-xl-none">-->
                                    <!--    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"-->
                                    <!--        data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                                    <!--        <iconify-icon icon="solar:magnifer-line-duotone"-->
                                    <!--            class="fs-6"></iconify-icon>-->
                                    <!--    </a>-->
                                    <!--</li>-->

                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <!-- <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="py-6 px-7 mb-1">
                        <button class="btn btn-primary w-100">See All Notifications</button>
                      </div>

                    </div>
                  </li>-->
                                    <!-- ------------------------------- -->
                                    <!-- end notification Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- 
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-cn.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-fr.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-sa.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">عربي (Arabic)</p>
                        </a>
                      </div>
                    </div>
                  </li>-->
                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                            <div class="d-flex align-items-center gap-2 lh-base">
                                                <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg"
                                                    class="rounded-circle" width="35" height="35" alt="matdash-img" />
                                                <iconify-icon icon="solar:alt-arrow-down-bold"
                                                    class="fs-2"></iconify-icon>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="position-relative px-4 pt-3 pb-2">
                                                <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                    <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="56" height="56"
                                                        alt="matdash-img" />
                                                    <div>
                                                        <h5 class="mb-0 fs-12">USER <span
                                                                class="text-success fs-11">Pro</span>
                                                        </h5>
                                                        <!--<p class="mb-0 text-dark">
                              david@wrappixel.com
                            </p>
                          </div>
                        </div>-->
                                                        <div class="message-body">
                                                            <!-- <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                            My Profile
                          </a>
                          <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                            My Subscription
                          </a>
                          <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                            My Statements <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                          </a>
                          <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                            Account Settings
                          </a>-->
                                                            <a href="<?= base_url('logout'); ?>"
                                                                class="p-2 dropdown-item h6 rounded-1">
                                                                Sign Out
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->


                    <!-- ------------------------------- -->
                    <!-- apps Dropdown in Small screen -->
                    <!-- ------------------------------- -->
                    <!--  Mobilenavbar -->
                    <div class="offcanvas offcanvas-start pt-0" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
                        aria-labelledby="offcanvasWithBothOptionsLabel">
                        <nav class="sidebar-nav scroll-sidebar">
                            <div class="offcanvas-header justify-content-between">
                                <a href="<?= base_url(); ?>/public/dist/main/index.html" class="text-nowrap logo-img">
                                    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo-icon.svg"
                                        alt="Logo" />
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body pt-0" data-simplebar style="height: calc(100vh - 80px)">
                                <ul id="sidebarnav">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow ms-0" href="javascript:void(0)"
                                            aria-expanded="false">
                                            <span>
                                                <iconify-icon icon="solar:slider-vertical-line-duotone"
                                                    class="fs-7"></iconify-icon>
                                            </span>
                                            <span class="hide-menu">Apps</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level my-3 ps-3">
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/app-chat.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:chat-line-bold-duotone"
                                                            class="fs-7 text-primary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                                                        <span class="fs-11 d-block text-body-color">New messages
                                                            arrived</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/app-invoice.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:bill-list-bold-duotone"
                                                            class="fs-7 text-secondary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                                                        <span class="fs-11 d-block text-body-color">Get latest
                                                            invoice</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/app-contact2.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:phone-calling-rounded-bold-duotone"
                                                            class="fs-7 text-warning"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                                                        <span class="fs-11 d-block text-body-color">2 Unsaved
                                                            Contacts</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/app-email.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:letter-bold-duotone"
                                                            class="fs-7 text-danger"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Email App</h6>
                                                        <span class="fs-11 d-block text-body-color">Get new
                                                            emails</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:user-bold-duotone"
                                                            class="fs-7 text-success"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                                                        <span class="fs-11 d-block text-body-color">learn more
                                                            information</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/app-calendar.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:calendar-minimalistic-bold-duotone"
                                                            class="fs-7 text-primary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                                                        <span class="fs-11 d-block text-body-color">Get dates</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/app-contact.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:smartphone-2-bold-duotone"
                                                            class="fs-7 text-secondary"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                                                        <span class="fs-11 d-block text-body-color">Add new
                                                            contact</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="<?= base_url(); ?>/public/dist/main/app-notes.html"
                                                    class="d-flex align-items-center">
                                                    <div
                                                        class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:notes-bold-duotone"
                                                            class="fs-7 text-warning"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                                                        <span class="fs-11 d-block text-body-color">To-do and Daily
                                                            tasks</span>
                                                    </div>
                                                </a>
                                            </li>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item d-flex d-xl-none">
                                <a class="nav-link sidebartoggler nav-icon-hover-bg rounded-circle" id="sidebarCollapse"
                                    href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex align-items-center">
                                <a href="<?= base_url(); ?>/public/dist/main/index.html" class="text-nowrap nav-link">
                                    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg"
                                        alt="matdash-img" />
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex align-items-center nav-icon-hover-bg rounded-circle">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                                </a>
                            </li>
                            <li
                                class="nav-item d-none d-lg-flex align-items-center dropdown nav-icon-hover-bg rounded-circle">
                                <div class="hover-dd">
                                    <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true"
                                        aria-expanded="false">
                                        <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden"
                                        aria-labelledby="drop2">
                                        <div class="position-relative">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="p-4 pb-3">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative">
                                                                    <a href="<?= base_url(); ?>/public/dist/main/app-chat.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:chat-line-bold-duotone"
                                                                                class="fs-7 text-primary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Chat Application</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">New
                                                                                messages arrived</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="<?= base_url(); ?>/public/dist/main/app-invoice.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:bill-list-bold-duotone"
                                                                                class="fs-7 text-secondary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Invoice App</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Get
                                                                                latest invoice</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="<?= base_url(); ?>/public/dist/main/app-contact2.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:phone-calling-rounded-bold-duotone"
                                                                                class="fs-7 text-warning"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Contact Application</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">2
                                                                                Unsaved Contacts</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="<?= base_url(); ?>/public/dist/main/app-email.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:letter-bold-duotone"
                                                                                class="fs-7 text-danger"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Email App</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Get
                                                                                new emails</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative">
                                                                    <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon icon="solar:user-bold-duotone"
                                                                                class="fs-7 text-success"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">User Profile</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">learn
                                                                                more information</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="<?= base_url(); ?>/public/dist/main/app-calendar.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:calendar-minimalistic-bold-duotone"
                                                                                class="fs-7 text-primary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Calendar App</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Get
                                                                                dates</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="<?= base_url(); ?>/public/dist/main/app-contact.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:smartphone-2-bold-duotone"
                                                                                class="fs-7 text-secondary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Contact List Table</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">Add
                                                                                new contact</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="<?= base_url(); ?>/public/dist/main/app-notes.html"
                                                                        class="d-flex align-items-center pb-9 position-relative">
                                                                        <div
                                                                            class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon
                                                                                icon="solar:notes-bold-duotone"
                                                                                class="fs-7 text-warning"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Notes Application</h6>
                                                                            <span
                                                                                class="fs-11 d-block text-body-color">To-do
                                                                                and Daily tasks</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-none d-lg-flex">
                                                    <img src="<?= base_url(); ?>/public/dist/assets/images/backgrounds/mega-dd-bg.jpg"
                                                        alt="mega-dd" class="img-fluid mega-dd-bg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="<?= base_url(); ?>/public/dist/main/index.html" class="text-nowrap nav-link">
                                <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg"
                                    alt="matdash-img" />
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <ul
                                    class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)"
                                            class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"
                                            type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                            aria-controls="offcanvasWithBothOptions">
                                            <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout"
                                            href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone"
                                                class="moon fs-6"></iconify-icon>
                                        </a>
                                        <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout"
                                            href="javascript:void(0)" style="display: none">
                                            <iconify-icon icon="solar:sun-2-line-duotone"
                                                class="sun fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item d-block d-xl-none">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <iconify-icon icon="solar:magnifer-line-duotone"
                                                class="fs-6"></iconify-icon>
                                        </a>
                                    </li>

                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                        <a class="nav-link position-relative" href="javascript:void(0)" id="drop2"
                                            aria-expanded="false">
                                            <iconify-icon icon="solar:bell-bing-line-duotone"
                                                class="fs-6"></iconify-icon>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                                <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                                <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5
                                                    new</span>
                                            </div>
                                            <div class="message-body" data-simplebar>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                                                        <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                            <span class="d-block fs-2">9:30 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                                                        <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Event today</h6>
                                                            <span class="d-block fs-2">9:15 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                                                        <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Settings</h6>
                                                            <span class="d-block fs-2">4:36 PM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                                                        <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                            <span class="d-block fs-2">9:30 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                                                        <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Event today</h6>
                                                            <span class="d-block fs-2">9:15 AM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                                                    <span
                                                        class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                                                        <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-1 fw-semibold">Settings</h6>
                                                            <span class="d-block fs-2">4:36 PM</span>
                                                        </div>
                                                        <span class="d-block text-truncate text-truncate fs-11">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="py-6 px-7 mb-1">
                                                <button class="btn btn-primary w-100">See All Notifications</button>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end notification Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                        <a class="nav-link" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-en.svg"
                                                alt="matdash-img" width="20px" height="20px"
                                                class="rounded-circle object-fit-cover round-20" />
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-en.svg"
                                                            alt="matdash-img" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20" />
                                                    </div>
                                                    <p class="mb-0 fs-3">English (UK)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-cn.svg"
                                                            alt="matdash-img" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20" />
                                                    </div>
                                                    <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-fr.svg"
                                                            alt="matdash-img" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20" />
                                                    </div>
                                                    <p class="mb-0 fs-3">français (French)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-sa.svg"
                                                            alt="matdash-img" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20" />
                                                    </div>
                                                    <p class="mb-0 fs-3">عربي (Arabic)</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                            <div class="d-flex align-items-center gap-2 lh-base">
                                                <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg"
                                                    class="rounded-circle" width="35" height="35" alt="matdash-img" />
                                                <iconify-icon icon="solar:alt-arrow-down-bold"
                                                    class="fs-2"></iconify-icon>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="position-relative px-4 pt-3 pb-2">
                                                <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                    <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="56" height="56"
                                                        alt="matdash-img" />
                                                    <div>
                                                        <h5 class="mb-0 fs-12">David McMichael <span
                                                                class="text-success fs-11">Pro</span>
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            david@wrappixel.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                        My Profile
                                                    </a>
                                                    <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                        My Subscription
                                                    </a>
                                                    <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                        My Statements <span
                                                            class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                        Account Settings
                                                    </a>
                                                    <a href="<?= base_url(); ?>/public/dist/main/authentication-login2.html"
                                                        class="p-2 dropdown-item h6 rounded-1">
                                                        Sign Out
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </header>
            <!--  Header End -->

            <aside class="left-sidebar with-horizontal">
                <!-- Sidebar scroll-->
                <div>
                    <!-- Sidebar navigation-->
                    <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                        <ul id="sidebarnav">
                            <!-- ============================= -->
                            <!-- Home -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Home</span>
                            </li>
                            <!-- =================== -->
                            <!-- Dashboard -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:layers-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/index.html" class="sidebar-link">
                                            <i class="ti ti-aperture"></i>
                                            <span class="hide-menu">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/index2.html" class="sidebar-link">
                                            <i class="ti ti-shopping-cart"></i>
                                            <span class="hide-menu">Dashboard 2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/index3.html" class="sidebar-link">
                                            <i class="ti ti-atom"></i>
                                            <span class="hide-menu">Dashboard 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Apps -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Apps</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:widget-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Apps</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/app-calendar.html"
                                            class="sidebar-link">
                                            <i class="ti ti-calendar"></i>
                                            <span class="hide-menu">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/apps-kanban.html"
                                            class="sidebar-link">
                                            <i class="ti ti-layout-kanban"></i>
                                            <span class="hide-menu">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/app-chat.html"
                                            class="sidebar-link">
                                            <i class="ti ti-message-dots"></i>
                                            <span class="hide-menu">Chat</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link"
                                            href="<?= base_url(); ?>/public/dist/main/app-email.html"
                                            aria-expanded="false">
                                            <span>
                                                <i class="ti ti-mail"></i>
                                            </span>
                                            <span class="hide-menu">Email</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/app-contact.html"
                                            class="sidebar-link">
                                            <i class="ti ti-phone"></i>
                                            <span class="hide-menu">Contact Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/app-contact2.html"
                                            class="sidebar-link">
                                            <i class="ti ti-list-details"></i>
                                            <span class="hide-menu">Contact List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/app-notes.html"
                                            class="sidebar-link">
                                            <i class="ti ti-notes"></i>
                                            <span class="hide-menu">Notes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/app-invoice.html"
                                            class="sidebar-link">
                                            <i class="ti ti-file-text"></i>
                                            <span class="hide-menu">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html"
                                            class="sidebar-link">
                                            <i class="ti ti-user-circle"></i>
                                            <span class="hide-menu">User Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/blog-posts.html"
                                            class="sidebar-link">
                                            <i class="ti ti-article"></i>
                                            <span class="hide-menu">Posts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/blog-detail.html"
                                            class="sidebar-link">
                                            <i class="ti ti-details"></i>
                                            <span class="hide-menu">Detail</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/eco-shop.html"
                                            class="sidebar-link">
                                            <i class="ti ti-shopping-cart"></i>
                                            <span class="hide-menu">Shop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/eco-shop-detail.html"
                                            class="sidebar-link">
                                            <i class="ti ti-basket"></i>
                                            <span class="hide-menu">Shop Detail</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/eco-product-list.html"
                                            class="sidebar-link">
                                            <i class="ti ti-list-check"></i>
                                            <span class="hide-menu">List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/eco-checkout.html"
                                            class="sidebar-link">
                                            <i class="ti ti-brand-shopee"></i>
                                            <span class="hide-menu">Checkout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- PAGES -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">PAGES</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:notes-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Pages</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/page-faq.html"
                                            class="sidebar-link">
                                            <i class="ti ti-help"></i>
                                            <span class="hide-menu">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/page-account-settings.html"
                                            class="sidebar-link">
                                            <i class="ti ti-user-circle"></i>
                                            <span class="hide-menu">Account Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/page-pricing.html"
                                            class="sidebar-link">
                                            <i class="ti ti-currency-dollar"></i>
                                            <span class="hide-menu">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/widgets-cards.html"
                                            class="sidebar-link">
                                            <i class="ti ti-cards"></i>
                                            <span class="hide-menu">Card</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/widgets-banners.html"
                                            class="sidebar-link">
                                            <i class="ti ti-ad"></i>
                                            <span class="hide-menu">Banner</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/widgets-charts.html"
                                            class="sidebar-link">
                                            <i class="ti ti-chart-bar"></i>
                                            <span class="hide-menu">Charts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/starter.html" class="sidebar-link">
                                            <i class="ti ti-file"></i>
                                            <span class="hide-menu">Starter</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/landingpage/index.html"
                                            class="sidebar-link">
                                            <i class="ti ti-app-window"></i>
                                            <span class="hide-menu">Landing Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- UI -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">UI</span>
                            </li>
                            <!-- =================== -->
                            <!-- UI Elements -->
                            <!-- =================== -->
                            <li class="sidebar-item mega-dropdown">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:archive-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">UI</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-accordian.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Accordian</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-badge.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Badge</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-buttons.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-dropdowns.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-modals.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-tab.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tab</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-tooltip-popover.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tooltip & Popover</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-notification.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Notification</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-progressbar.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Progressbar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-pagination.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-typography.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Typography</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-bootstrap-ui.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bootstrap UI</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-breadcrumb.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-offcanvas.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-lists.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Lists</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-grid.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-carousel.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Carousel</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-scrollspy.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Scrollspy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-spinner.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Spinner</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/ui-link.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Link</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Forms -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Forms</span>
                            </li>
                            <!-- =================== -->
                            <!-- Forms -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:folder-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Forms</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <!-- form elements -->
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-inputs.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Forms Input</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-input-groups.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Input Groups</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-input-grid.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Input Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-checkbox-radio.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Checkbox & Radios</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-bootstrap-switch.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bootstrap Switch</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-select2.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Select2</span>
                                        </a>
                                    </li>
                                    <!-- form inputs -->
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-basic.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Form</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-vertical.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Vertical</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-horizontal.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Horizontal</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-actions.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Actions</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-row-separator.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Row Separator</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-bordered.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Bordered</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-detail.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Detail</span>
                                        </a>
                                    </li>
                                    <!-- form wizard -->
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-wizard.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Wizard</span>
                                        </a>
                                    </li>
                                    <!-- Quill Editor -->
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-editor-quill.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Quill Editor</span>
                                        </a>
                                    </li>
                                    <!-- Tinymce Editor -->
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/form-editor-tinymce.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tinymce Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Tables -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Tables</span>
                            </li>
                            <!-- =================== -->
                            <!-- Bootstrap Table -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:tuning-square-2-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Tables</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/table-basic.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/table-dark-basic.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Dark Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/table-sizing.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Sizing Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/table-layout-coloured.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Coloured Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/table-datatable-basic.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Initialisation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/table-datatable-api.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">API</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/table-datatable-advanced.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Advanced</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Charts -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Charts</span>
                            </li>
                            <!-- =================== -->
                            <!-- Apex Chart -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:chart-square-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Charts</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/chart-apex-line.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Line Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/chart-apex-area.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Area Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/chart-apex-bar.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bar Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/chart-apex-pie.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Pie Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/chart-apex-radial.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Radial Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/main/chart-apex-radar.html"
                                            class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Radar Chart</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Icons -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Icons</span>
                            </li>

                            <!-- =================== -->
                            <!-- Icon -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:sticker-smile-square-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Icons</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link"
                                            href="<?= base_url(); ?>/public/dist/main/icon-tabler.html"
                                            aria-expanded="false">
                                            <span class="rounded-3">
                                                <i class="ti ti-circle"></i>
                                            </span>
                                            <span class="hide-menu">Tabler Icon</span>
                                        </a>
                                    </li>
                                    <!-- =================== -->
                                    <!-- Solar Icon -->
                                    <!-- =================== -->
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sidebar-link"
                                            href="<?= base_url(); ?>/public/dist/main/icon-solar.html"
                                            aria-expanded="false">
                                            <span class="rounded-3">
                                                <i class="ti ti-circle"></i>
                                            </span>
                                            <span class="hide-menu">Solar Icon</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- multi level -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Multi DD</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="<?= base_url(); ?>/public/dist/docs/index.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Documentation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link has-arrow">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse second-level">
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.1</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>

            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="card card-body py-3">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="d-sm-flex align-items-center justify-space-between">
                                    <h4 class="mb-4 mb-md-0 card-title">Purchase</h4>
                                    <nav aria-label="breadcrumb" class="ms-auto">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item d-flex align-items-center">
                                                <a class="text-muted text-decoration-none d-flex"
                                                    href="<?= base_url(); ?>/public/dist/main/index.html">
                                                    <iconify-icon icon="solar:home-2-line-duotone"
                                                        class="fs-6"></iconify-icon>
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">
                                                <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                                    Form Actions
                                                </span>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <!-- row -->
                    <div class="row">
                     
                        <div class="card">

                           
                             <div class="text-end mt-3">
   
    <a href="<?= base_url('viewpurchase1'); ?>" class="btn btn-primary">Purchase List</a>
  </div>
        <div class="card-body wizard-content">
                                       <?php 
                      $session=\Config\Services::session();
                      if(isset($session->success)):?>



                                          <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
                                            <div class="d-flex align-items-center text-primary ">
                                              <i class="ti ti-info-circle me-2 fs-4"></i>
                                            <?=  $session->success; ?>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                          
                      <?php endif; ?>   
                      <?php if (session()->getFlashdata('error')): ?>
                          <div class="alert alert-danger">
                              <?= session()->getFlashdata('error'); ?>
                          </div>
                      <?php endif; ?>  
                      
            <h4 class="card-title mb-2">Purchase Entry</h4>
            <h6 class="card-subtitle mb-3">Create a new purchase record in the system</h6>
            
        
  <!-- Numbered Stepper Header -->
<!-- Progress Line -->
<div class="progress-line-container">
  <div class="progress-line" id="progressLine"></div>
</div>

<!-- Stepper -->
<!-- Stepper -->
<div class="stepper-wrapper d-flex justify-content-between mb-4">
  <div class="stepper-item text-center s5N" onclick="goToStep(1)">
    <div class="step-counter ">1</div>
    <div class="step-name d-none">Basic Purchase Details</div>
  </div>
  <div class="stepper-item text-center " onclick="goToStep(2)">
    <div class="step-counter">2</div>
    <div class="step-name d-none">Asset Specifications</div>
  </div>
  <div class="stepper-item text-center" onclick="goToStep(3)">
    <div class="step-counter">3</div>
    <div class="step-name d-none">Commercials</div>
  </div>
  <div class="stepper-item text-center s4N" onclick="goToStep(4)">
    <div class="step-counter">4</div>
    <div class="step-name d-none ">Accessories </div>
  </div>
</div>

  <form 
  method="post" 
  id="myForm" 
  action="<?= base_url('purchase1'); ?>" 
  class="tab-wizard wizard-circle icon-round" 
  enctype="multipart/form-data">
  <!-- Step 1 Content -->
                <div class="step-content active" id="step-1-content">
                    <!-- <h4 class="step-title mt-0 mb-4">Basic Purchase Detail</h4> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="conno2" class="form-label required">Purchase ID</label>
                                <input type="text" class="form-control" name="purchase1_id" id="purchase1_id" placeholder="Enter the Purchase ID" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="conno2" class="form-label required">Order Date</label>
                                <input type="date" class="form-control" id="order_date" name="order_date" placeholder="Enter the Order Date"  required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="supplier_name" class="form-label required">Dealer Name</label>
                                <div class="dropdown">
                                    <input type="text" class="form-control dropdown-toggle w-100" name="supplier_name" id="supplierNameInput" placeholder="Select Dealer Name" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required />
                                    <ul class="dropdown-menu p-3 w-100" aria-labelledby="supplierNameInput" style="max-height: 150px; overflow-y: auto;">
                                        <input type="text" class="form-control mb-2" id="supplierSearch" placeholder="Search Dealer Name" autocomplete="off" />
                                        <div id="supplierList" style="width: 100%;"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="purchase_reason" class="form-label required">Purpose</label>
                                <div class="dropdown">
                                    <input type="text" class="form-control dropdown-toggle w-100" name="purchase_reason" id="purchaseReasonInput" placeholder="Enter or Select Purpose" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required/>
                                    <ul class="dropdown-menu p-3 w-100" aria-labelledby="purchaseReasonInput" style="max-height: 150px; overflow-y: auto;">
                                        <input type="text" class="form-control mb-2" id="purchaseReasonSearch" placeholder="Search Purpose" autocomplete="off" />
                                        <div id="purchaseReasonList" style="width: 100%;"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="conno2" class="form-label">Customer Name</label>
                                <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Enter the Customer Name" />
                            </div>
                        </div>
                    </div>
                    
                  <div class="d-flex justify-content-end gap-2 me-4">
                   
                    <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
                    <button type="button" class="btn btn btn-light" onclick="resetForm()">Cancel</button>
                </div>


                </div>

                <!-- Step 2 Content -->
                <div class="step-content" id="step-2-content">
                    <!-- <h4 class="step-title mb-4">Asset & Specifications</h4> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="asset_type" class="form-label required">Asset Type</label>
                                <div class="dropdown">
                                    <input type="text"   required class="form-control dropdown-toggle w-100" name="asset_type" id="assetTypeInput" placeholder="Select Asset Type" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off"  />
                                    <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetTypeInput" style="max-height: 150px; overflow-y: auto;">
                                        <input type="text" class="form-control mb-2" id="assetTypeSearch" placeholder="Search Asset Type" autocomplete="off" />
                                        <div id="assetTypeList" style="width: 100%;"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="asset_make" class="form-label required">Asset Make</label>
                                <div class="dropdown">
                                    <input type="text" class="form-control dropdown-toggle w-100" name="asset_make" id="assetMakeInput" placeholder="Select Asset Make" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required />
                                    <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetMakeInput" style="max-height: 150px; overflow-y: auto;">
                                        <input type="text" class="form-control mb-2" id="assetMakeSearch" placeholder="Search Asset Make" autocomplete="off" />
                                        <div id="assetMakeList" style="width: 100%;"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="conno2" class="form-label required">Part Name</label>
                                <input type="text" class="form-control" name="part_name" id="part_name" placeholder="Enter the Part Name" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="conno2" class="form-label">Part Number</label>
                                <input type="text" class="form-control" name="part_number" id="part_number" placeholder="Enter the Part Number" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="comname1" class="form-label">Specification</label>
                                <input type="text" class="form-control" name="specification" id="specification" placeholder="Enter the Specifications" style="height: 70px;" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label">Material</label>
                                    <input type="text" class="form-control" name="material" id="material" placeholder="Enter the Material" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label">Grade</label>
                                    <input type="text" class="form-control" name="grade" id="grade" placeholder="Enter the Grade" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="uom" class="form-label required">Unit of Measurement (UOM)</label>
                                <div class="dropdown">
                                    <input type="text" class="form-control dropdown-toggle w-100" name="uom" id="uomInput" placeholder="Select Unit of Measurement (UOM)" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required />
                                    <ul class="dropdown-menu p-3 w-100" aria-labelledby="uomInput" style="max-height: 150px; overflow-y: auto;">
                                        <input type="text" class="form-control mb-2" id="uomSearch" placeholder="Search UOM" autocomplete="off" />
                                        <div id="uomList" style="width: 100%;"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label required">Stock Purchased</label>
                                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter the Stock Purchased" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   <div class="d-flex justify-content-end gap-2 mt-4 me-4">
                        <button type="button" class="btn btn-light" onclick="prevStep(1)">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
                        <button type="button" class="btn btn btn-light" onclick="resetForm()">Cancel</button>
                    </div>

                </div>

                <!-- Step 3 Content -->
                <div class="step-content" id="step-3-content">
                    <!-- <h4 class="step-title mb-4">Commercial Details</h4> -->
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label required">Unit Price</label>
                                    <input type="text" class="form-control" name="unit_price" id="unit_price" placeholder="Enter the Unit Price" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label">Total Price</label>
                                    <input type="text" class="form-control" name="total_cost" id="total_cost" placeholder="Enter the Total cost"  />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label required">Invoice Number</label>
                                    <input type="text" class="form-control" name="invoice_number" id="invoice_number" placeholder="Enter the Invoice Number" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label required">Invoice Date</label>
                                    <input type="date" class="form-control" id="invoice_date" name="invoice_date" placeholder="Enter the Invoice Date" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="grn" class="form-label ">GRN</label>
                                <input type="text" class="form-control" name="grn" id="grn" value="<?= isset($grn) ? $grn : ''; ?>" />
                            </div>
                        </div>
                            <div class="col-6">
                            <div class="mb-3">
                                <label for="delivery_status_input" class="form-label required">Delivery Status</label>
                                <div class="dropdown">
                                <input type="text" class="form-control dropdown-toggle w-100"
                                        id="delivery_status_input"
                                        name="delivery_status"
                                        placeholder="Select Delivery Status"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                         
                                        required/>

                                <ul class="dropdown-menu w-100" id="deliveryStatusList" style="max-height: 150px; overflow-y: auto;">
                                    <li><a class="dropdown-item" href="#" data-value="Delivered">Delivered</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Pending">Pending</a></li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="purchase_status" class="form-label required">Purchase Status</label>
                                <div class="dropdown">
                                <input type="text" class="form-control dropdown-toggle w-100" id="purchase_status_input"
                                        name="purchase_status" placeholder="Select Purchase Status" data-bs-toggle="dropdown"
                                        aria-expanded="false" required />

                                <ul class="dropdown-menu w-100" id="purchaseStatusList" style="max-height: 150px; overflow-y: auto;">
                                    <li><a class="dropdown-item" href="#" data-value="Order Placed">Order Placed</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Assets Received">Assets Received</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Assets Pending">Assets Pending</a></li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label">Received Quantity</label>
                                    <input type="text" class="form-control" name="received_qty" id="received_qty" placeholder="Enter the Received Quantity" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Enter the Location" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="conno2" class="form-label">Room</label>
                                    <input type="text" class="form-control" name="room" id="room" placeholder="Enter the Room" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-2 mt-4 me-4">
                        <button type="button" class="btn btn-light" onclick="prevStep(2)">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep(4)">Next</button>
                        <button type="button" class="btn btn btn-light" onclick="resetForm()">Cancel</button>
                    </div>

                </div>

                <!-- Step 4 Content -->
                <div class="step-content" id="step-4-content">
                    <!-- <h4 class="step-title mb-4">Accessories & Remark</h4> -->
                    <div class="alert alert-primary d-flex justify-content-between align-items-center">
                        <div class="text-black">
                            <strong>Does this asset have accessories?</strong><br>
                            <small>If yes, you can add them to the purchase record</small>
                        </div>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hasAccessories" id="no" value="no">
                                <label class="form-check-label text-black " for="no">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hasAccessories" id="yes" value="yes">
                                <label class="form-check-label text-black" for="yes">Yes</label>
                            </div>
                        </div>
                    </div>

                    <!-- Accessories List Table -->
                     <!-- Accessories Section (Initially hidden) -->
                    <div id="accessorySection" class="d-none">
                        <div class="row mb-2">
                            <div class="col-12 col-md-6 mb-2 mb-md-0">
                            <h6 class="mb-0">Accessories List</h6>
                            </div> 
                            <div class="col-12 col-md-6 text-md-end">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addAccessoryModal">
                                + Add Accessory
                                </button>
                            </div>
                        </div>
                        <!-- Table to show accessories -->
                        <div class="table-responsive">
                        <table class="table table-bordered" id="accessoryTable">
                            <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Type</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td colspan="6" class="text-center">No accessories added yet</td></tr>
                            </tbody>
                        </table>
                        </div>



                        <!-- Accessories total -->
                        <div class="mb-2  ms-auto text-end ">
                        <strong class="border rounded px-3 py-2 d-inline-block">
                            Total Accessories Cost : <span class="accessories-total">₹0.00</span>
                        </strong>
                        </div>
                    </div>




                    <!-- Hidden field inside your main purchase form -->
                    <input type="hidden" name="accessoryData" id="accessoryData">
                                    
                    <div class="mb-3">
                    <label for="resharpen_input" class="form-label">Resharpen <span data-bs-toggle="tooltip" title="Choose if resharpening is needed">🛈</span></label>
                    <div class="dropdown">
                        <input type="text"
                            class="form-control dropdown-toggle w-100"
                            id="resharpen_input"
                            name="resharpen"
                            placeholder="Select Resharpen"
                            value="Not Applicable"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            readonly />

                        <ul class="dropdown-menu w-100" style="max-height: 150px; overflow-y: auto;">
                        <li><a class="dropdown-item" href="#" data-value="Not Applicable">Not Applicable</a></li>
                        <li><a class="dropdown-item" href="#" data-value="Yes">Yes</a></li>
                        <li><a class="dropdown-item" href="#" data-value="No">No</a></li>
                        </ul>
                    </div>
                    </div>


                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                    </div>

                   <!-- <div class="mb-4">
                    <label class="form-label">Upload Files (Optional)</label>
                    <div class="upload-box text-center p-3 border border-double rounded" id="uploadArea" style="cursor: pointer;">
                        <div class="mb-2">
                        <i class="bi bi-cloud-arrow-up" style="font-size: 50px;"></i>
                        </div>
                        <div class="mb-1 text-muted">Drag and drop files here or click to browse</div>
                        <small class="text-muted">Supported formats: JPG, PNG, PDF (Max 5MB)</small>
                        <!- ✅ Add 'name' so it's submitted ->
                        <!- <input type="file" id="fileInput" name="uploaded_files[]" multiple accept=".jpg,.png,.pdf"  > ->
                        <input type="file" id="asset_image" name="asset_image"  >
                        <!- <input type="file" id="asset_image" name="asset_image" accept=".jpg,.png,.pdf" hidden> ->


                        <!- <input type="file" class="form-control" name="asset_image" id="asset_image" placeholder="" /> ->
                    </div>
                   </div> -->
                    <div class="mb-4">
                    <label class="form-label">Upload Files (Optional)</label>
                    <div class="upload-box text-center p-3 border border-double rounded" id="uploadArea" style="cursor: pointer;">
                        <div class="mb-2">
                        <img src="https://img.icons8.com/?size=100&id=4716&format=png&color=000000" alt="Upload Icon" style="width: 50px; height: 50px;" />
                        </div>
                        <div class="mb-1 text-muted">Drag and drop files here or click to browse</div>
                        <small class="text-muted">Supported formats: JPG, PNG, PDF (Max 5MB)</small>

                        <!-- Hidden file input -->
                        <input type="file" id="asset_image" name="asset_image" hidden>
                    </div>
                    </div>


                    
                    <div class="d-flex justify-content-end gap-2 mt-4 me-4">
                        <button type="button" class="btn btn-light" onclick="prevStep(3)">Previous</button>
                        <button type="submit" name="submit" value="true" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn btn-light" onclick="resetForm()">Cancel</button>
                    </div>
                 </form>
                        <!-- Accessory Modal -->
                  <!-- Accessory Modal -->
                    <div class="modal fade" id="addAccessoryModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Accessory</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div id="accessoryForm">
                            <div class="mb-3">
                                <label class="form-label">Accessory Name</label>
                                <input type="text" id="accessoryName" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" id="accessoryQuantity" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="accessoryTypeInput" class="form-label">Type</label>
                                <div class="dropdown">
                                <input type="text"
                                        class="form-control dropdown-toggle w-100"
                                        id="accessoryTypeInput"
                                        name="accessory_type"
                                        placeholder="Select Type"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                        readonly />

                                <ul class="dropdown-menu w-100" id="accessoryTypeList" style="max-height: 150px; overflow-y: auto;">
                                    <li><a class="dropdown-item" href="#" data-value="Cable">Cable</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Charger">Charger</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Cover">Cover</a></li>
                                </ul>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Unit Price</label>
                                <input type="number" step="0.01" id="accessoryUnitPrice" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Total Price</label>
                                <input type="number" id="accessoryTotal" class="form-control" readonly>
                            </div>

                            <div id="accessoryError" class="alert alert-danger mt-2" style="display:none;"></div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="saveAccessoryBtn">Add Accessory</button>
                        </div>
                        </div>
                    </div>
                    </div>
</div>
         

<!-- Add Accessory Modal -->




<style>

.progress-line-container {
    width: 100%;
    height: 5px;
    background-color: #e9ecef;
    border-radius: 2px;
    margin-bottom: 10px;
    overflow: hidden;
}

.progress-line {
    height: 5px;
    width: 0%;
    background-color: #0d6efd;
    transition: width 0.4s ease-in-out;
}

.stepper-wrapper {
    display: flex;
    justify-content: space-between; /* Even spacing */
    /* align-items: center; */
    margin-bottom: 20px;
    position: relative;
}

/* Full-width horizontal line behind circles */
.stepper-wrapper::before {
    content: "";
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
    height: 2px;
    background-color: #e9ecef;
    z-index: 0;
}

.stepper-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  z-index: 2;
  width: 30px;
  cursor: pointer;
}



/* Remove default partial lines */
.stepper-item::after {
    display: none;
}
/* For the last step, align everything to the right */
.stepper-item.s4N {
  align-items: flex-end; /* aligns the circle and text to the right */
  text-align: right;
}

.stepper-item.s5N {
  align-items: flex-start; /* aligns the circle and text to the right */
  text-align: left;
}
/* STEP CIRCLE */
.step-counter {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: #e9ecef;
  color: #495057;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 6px;
  transition: all 0.3s ease;
}
.stepper-item.active .step-counter {
    background: #0d6efd;
    color: #fff;
}
.stepper-item.completed .step-counter {
    background: #198754;
    color: #fff;
}

/* STEP LABEL */
.step-name {
    color: #6c757d;
    font-size: 16px;
      text-align: center;
  white-space: nowrap; 
}
.stepper-item.active .step-name,
.stepper-item.completed .step-name {
    color:rgb(1, 6, 15);
    font-weight: 1000;
}

/* STEP CONTENT */
.step-content {
    display: none;
    padding: 20px 0;
}
.step-content.active {
    display: block;
}

/* Responsive */
@media (max-width: 768px) {
    .stepper-wrapper {
        gap: 16px;
    }
    .step-name {
        font-size: 12px;
    }
    .step-counter {
        width: 28px;
        height: 28px;
        font-size: 12px;
    }
}
/* @media (max-width: 480px) {
    .stepper-wrapper {
        justify-content: center;
        flex-wrap: wrap;
    }
    .stepper-item {
        flex: 1 1 40%;
        max-width: 45%;
        margin-bottom: 10px;
    }
    .step-name {
        white-space: normal;
        font-size: 11px;
    }
} */

#accessoryTable {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
}

#accessoryTable th,
#accessoryTable td {
  text-align: center;
  vertical-align: middle;
  padding: 8px 6px;
  font-size: 14px;
  word-wrap: break-word;
}

/* Adjust font and padding for tablets and phones */
@media (max-width: 768px) {
  #accessoryTable th,
  #accessoryTable td {
    font-size: 13px;
    padding: 6px 4px;
  }
}

@media (max-width: 480px) {
  #accessoryTable th,
  #accessoryTable td {
    font-size: 12px;
    padding: 4px 2px;
  }
}
/* responsie add accessory model */
/* Make modal full width on small screens */
 /* Default modal styles */
/* Keep modal fully responsive */
/* Base rule for all screen sizes */
.form-select {
  width: 100%;
  max-width: 100%;
  font-size: 14px;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

/* Ensure modal select never overflows */
.modal .form-select {
  width: 100%;
  max-width: 100%;
}

/* Optional: remove dropdown arrow overlap issue */
.form-select:focus {
  outline: none;
  box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

/* Mobile-specific adjustments */
@media (max-width: 576px) {
  .modal-dialog {
    max-width: 95%;
    margin: 1rem auto;
  }

  .modal-content {
    padding: 1rem;
  }

  .modal-body {
    overflow-x: hidden;
  }

  .form-select {
    font-size: 13px;
  }

  .modal-footer {
    flex-direction: column;
    gap: 10px;
  }

  .modal-footer .btn {
    width: 100%;
  }
}

label.required::after {
    content: " *";
    color: red;
    font-weight: bold;
}


</style>
<!-- Place this at the BOTTOM of your HTML file, just before the closing </body> tag -->



                        <script>
                            // Serialize the nested input boxes into a JSON structure
                            /*function serializeInputs(parent) {
                             const inputs = [];
                         
                             // Process each direct child container with the class `nested-container`
                             parent.querySelectorAll(":scope > div.nested-container").forEach((div) => {
                                 // Find the input box inside this container
                                 const inputBox = div.querySelector(":scope > input");
                                 const value = inputBox ? inputBox.value.trim() : null;
                         
                                 // Skip if the input box value is null
                                 if (value === null || value === "") {
                                     return; // Ignore empty values
                                 }
                         
                                 // Recursively find children within this container
                                 const childContainers = div.querySelector(":scope > div.nested-container");
                                 const children = childContainers ? serializeInputs(div) : [];
                         
                                 // Push the current container's data (value and its children)
                                 inputs.push({
                                     value: value,
                                     children: children,
                                 });
                             });
                         
                             return inputs;
                         }
                         
                         document.getElementById("nestedInputForm").addEventListener("submit", function (e) {
                             e.preventDefault(); // Prevent the default form submission for testing purposes
                         
                             const container = document.getElementById("nested-container");
                             const serializedData = serializeInputs(container);
                         
                             // Debugging: Ensure all values are captured
                             console.log("Serialized Data Before Submit:", JSON.stringify(serializedData));
                             alert(JSON.stringify(serializedData)); // Optional, for testing
                         
                             // Assign the serialized JSON to the hidden input
                             document.getElementById("inputData").value = JSON.stringify(serializedData);
                         
                             // Optionally submit the form here
                             e.target.submit();
                         });*/

                            // Function to open the modal
                            // Function to open the modal and clear previous inputs
                            function openModal() {
                                const container = document.getElementById("modal-nested-container");
                                container.innerHTML = ""; // Clear previous inputs
                                const modal = new bootstrap.Modal(document.getElementById("accessoriesModal"));
                                modal.show();
                            }

                            function addInputBox(parentId) {
                                const parent = document.getElementById(parentId);

                                // Create a new container for the input and its controls
                                const container = document.createElement("div");
                                container.className = "nested-container";

                                const input = document.createElement("input");
                                input.type = "text";
                                input.placeholder = "Enter value";
                                input.className = "form-control";
                                input.style.marginTop = "10px";
                                input.style.width = "30%";

                                const addButton = document.createElement("button");
                                addButton.textContent = "Add Sub-Accessories";
                                addButton.type = "button";
                                addButton.style.marginTop = "10px";
                                addButton.className = "btn bg-info-subtle text-info ms-6 px-4";
                                addButton.onclick = () => addInputBox(container.id); // Add sub-accessory on click

                                const deleteButton = document.createElement("button");
                                deleteButton.textContent = "Delete";
                                deleteButton.type = "button";
                                deleteButton.style.marginTop = "10px";
                                deleteButton.className = "btn bg-warning-subtle text-warning ms-6 px-4";
                                deleteButton.onclick = () => container.remove();

                                // Nested container for sub-children
                                const nestedContainer = document.createElement("div");
                                nestedContainer.className = "nested-container";

                                container.id = `nested-${Date.now()}`;

                                container.appendChild(input);
                                container.appendChild(addButton);
                                container.appendChild(deleteButton);
                                container.appendChild(nestedContainer);

                                parent.appendChild(container);
                            }

                            // Function to save accessories data and ensure all nested values are stored
                            function saveAccessories() {
                                const container = document.getElementById("modal-nested-container");
                                const accessoriesData = collectAccessoriesData(container);

                                // Log the collected data to see the structure in the console
                                console.log("Accessories Data:", JSON.stringify(accessoriesData, null, 2)); // Pretty print

                                // Save data to the hidden input
                                document.getElementById("inputData").value = JSON.stringify(accessoriesData);

                                // Close the modal
                                const modal = bootstrap.Modal.getInstance(document.getElementById("accessoriesModal"));
                                modal.hide();
                            }

                            // Function to collect data from nested inputs (including sub-accessories)
                            // Function to collect data from nested inputs (including sub-accessories)
                            function collectAccessoriesData(parent) {
                                const inputs = [];

                                // Process each direct child container with the class `nested-container`
                                parent.querySelectorAll(":scope > div.nested-container").forEach((div) => {
                                    // Find the input box inside this container
                                    const inputBox = div.querySelector(":scope > input");
                                    const value = inputBox ? inputBox.value.trim() : null;

                                    // Skip if the input box value is null or empty
                                    if (value === null || value === "") {
                                        return; // Ignore empty values
                                    }

                                    // Recursively find children (sub-accessories) within this container
                                    const childContainers = div.querySelector(":scope > div.nested-container");
                                    const children = childContainers ? collectAccessoriesData(div) : [];

                                    // Push the current container's data (value and its children)
                                    inputs.push({
                                        value: value,
                                        children: children,
                                    });
                                });

                                return inputs;
                            }






                        </script>


                        <script>
                            /*function addInputBox(parentId = "nested-container") {
                              const parent = document.getElementById(parentId);
                          
                              // Create a new container for the input and its controls
                              const container = document.createElement("div");
                              container.className = "nested-container";
                          
                              // Create the input box
                              const input = document.createElement("input");
                              input.type = "text";
                              input.placeholder = "Enter value";
                              input.className = "form-control";
                              input.style.marginTop = "10px";
                              input.style.width = "30%";
                          
                              // Add buttons
                              const addButton = document.createElement("button");
                              addButton.textContent = "Add Sub-Accessories";
                              addButton.type = "button";
                              addButton.style.marginTop = "10px";
                              addButton.className = "btn bg-info-subtle text-info ms-6 px-4";
                              addButton.onclick = () => addInputBox(container.id);
                          
                              const deleteButton = document.createElement("button");
                              deleteButton.textContent = "Delete";
                              deleteButton.type = "button";
                              deleteButton.style.marginTop = "10px";
                              deleteButton.className = "btn bg-warning-subtle text-warning ms-6 px-4";
                              deleteButton.onclick = () => container.remove();
                          
                              // Nested container for sub-children
                              const nestedContainer = document.createElement("div");
                              nestedContainer.className = "nested-container";
                          
                              container.id = `nested-${Date.now()}`; // Unique ID for each container
                          
                              // Append elements
                              container.appendChild(input);
                              container.appendChild(addButton);
                              container.appendChild(deleteButton);
                              container.appendChild(nestedContainer);
                          
                              // Append the container to the parent
                              parent.appendChild(container);
                          }*/

                        </script>





                    </div>
                    <!-- End row -->
                </div>
            </div>




            <!--<button-->
            <!--    class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"-->
            <!--    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"-->
            <!--    aria-controls="offcanvasExample">-->
            <!--    <i class="icon ti ti-settings fs-7"></i>-->
            <!--</button>-->

            <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                    <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                        Settings
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
                    <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
                            <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
                        </label>

                        <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
                            <i class="icon ti ti-moon fs-7 me-2"></i>Dark
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="ltr-layout">
                            <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
                        </label>

                        <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="rtl-layout">
                            <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                    <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                        <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
                            autocomplete="off" />
                        <label
                            class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="BLUE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                            autocomplete="off" />
                        <label
                            class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="AQUA_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                            autocomplete="off" />
                        <label
                            class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="PURPLE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                            autocomplete="off" />
                        <label
                            class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="GREEN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                            autocomplete="off" />
                        <label
                            class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="CYAN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                            autocomplete="off" />
                        <label
                            class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="vertical-layout"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout">
                                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                            </label>
                        </div>
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="horizontal-layout">
                                <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                            </label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="boxed-layout">
                            <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
                        </label>

                        <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="full-layout">
                            <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
                        </label>
                    </div>

                    <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <a href="javascript:void(0)" class="fullsidebar">
                            <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar">
                                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                            </label>
                        </a>
                        <div>
                            <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar">
                                <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                            </label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="card-layout" id="card-with-border"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border">
                            <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
                        </label>

                        <input type="radio" class="btn-check" name="card-layout" id="card-without-border"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border">
                            <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
                        </label>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const purchaseStatus = document.getElementById('purchase_status');
                    const reorderDiv = document.getElementById('reorder_div');
                    const reorderInput = document.getElementById('reorder');
                    const quantityInput = document.getElementById('quantity');



                    // Bootstrap Modal Initialization
                    const validationModal = new bootstrap.Modal(document.getElementById('validationModal'));

                    // Show/Hide Reorder Level field based on Purchase Status
                    purchaseStatus.addEventListener('change', function () {
                        if (this.value === 'Assets Received') {
                            reorderDiv.style.display = 'block';
                        } else {
                            reorderDiv.style.display = 'none';
                            reorderInput.value = '';
                        }
                    });

                    // Validate Reorder Level vs Stock Purchased
                    reorderInput.addEventListener('input', function () {
                        const reorderValue = parseFloat(reorderInput.value);
                        const quantityValue = parseFloat(quantityInput.value);

                        if (quantityValue && reorderValue >= quantityValue) {
                            validationModal.show(); // Show the modal
                        }
                    });

                    // Ensure validation runs when the Stock Purchased value changes
                    quantityInput.addEventListener('input', function () {
                        const reorderValue = parseFloat(reorderInput.value);
                        const quantityValue = parseFloat(quantityInput.value);

                        if (reorderValue && reorderValue >= quantityValue) {
                            validationModal.show(); // Show the modal
                        }
                    });
                });
            </script>





            <script>
                function handleColorTheme(e) {
                    document.documentElement.setAttribute("data-color-theme", e);
                }
            </script>
       

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const supplierNameInput = document.getElementById('supplierNameInput');
            const supplierSearch = document.getElementById('supplierSearch');
            const supplierList = document.getElementById('supplierList');

            let suppliers = []; // To store all supplier names

            // Fetch all supplier names initially
            fetch('<?= base_url('purchase1/all_suppliers'); ?>')
                .then((response) => response.json())
                .then((data) => {
                    suppliers = data.map((supplier) => supplier.dealer_name.toLowerCase()); // Store lowercase supplier names for comparison
                    supplierList.innerHTML = ''; // Clear any existing entries

                    data.forEach((supplier) => {
                        const listItem = document.createElement('div');
                        listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                        listItem.textContent = supplier.dealer_name;
                        listItem.setAttribute('data-value', supplier.dealer_name); // Store the value in a data attribute

                        // Handle click event to populate the input field
                        listItem.addEventListener('click', function () {
                            supplierNameInput.value = supplier.dealer_name; // Update the input value
                        });

                        supplierList.appendChild(listItem);
                    });
                })
                .catch((error) => {
                    console.error('Error fetching supplier names:', error);
                });

            // Handle the search box input inside the dropdown
            supplierSearch.addEventListener('input', function () {
                const query = this.value.toLowerCase(); // Case-insensitive search

                const supplierItems = document.querySelectorAll('#supplierList .dropdown-item');
                let matchFound = false;

                supplierItems.forEach((item) => {
                    const supplierName = item.textContent.toLowerCase();

                    if (supplierName.includes(query)) {
                        item.style.display = 'block'; // Show matching supplier name
                        matchFound = true;
                    } else {
                        item.style.display = 'none'; // Hide non-matching supplier name
                    }
                });

                // If no match is found, clear the dropdown
                if (!matchFound) {
                    supplierList.innerHTML = ''; // Optionally clear the list if desired
                }
            });

            // Move unmatched value to input field
            /*supplierSearch.addEventListener('blur', function () {
              const searchValue = this.value.trim();
              const isMatched = suppliers.includes(searchValue.toLowerCase());
          
              if (!isMatched && searchValue) {
                supplierNameInput.value = searchValue; // Move value to the input field
                this.value = ''; // Clear the search box
              }
            });*/


        });

        document.addEventListener('DOMContentLoaded', function () {
            const assetTypeInput = document.getElementById('assetTypeInput');
            const assetTypeSearch = document.getElementById('assetTypeSearch');
            const assetTypeList = document.getElementById('assetTypeList');

            let assetTypes = []; // To store all asset types

            // Fetch all asset types initially
            fetch('<?= base_url('purchase1/all_asset_types'); ?>')
                .then((response) => response.json())
                .then((data) => {
                    assetTypes = data.map((asset) => asset.asset_type.toLowerCase()); // Store lowercase asset types for comparison
                    assetTypeList.innerHTML = ''; // Clear any existing entries

                    data.forEach((asset) => {
                        const listItem = document.createElement('div');
                        listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                        listItem.textContent = asset.asset_type;
                        listItem.setAttribute('data-value', asset.asset_type); // Store the value in a data attribute

                        // Handle click event to populate the input field
                        listItem.addEventListener('click', function () {
                            assetTypeInput.value = asset.asset_type; // Update the input value
                        });

                        assetTypeList.appendChild(listItem);
                    });
                })
                .catch((error) => {
                    console.error('Error fetching asset types:', error);
                });

            // Handle the search box input inside the dropdown
            assetTypeSearch.addEventListener('input', function () {
                const query = this.value.toLowerCase(); // Case-insensitive search

                const assetTypeItems = document.querySelectorAll('#assetTypeList .dropdown-item');
                let matchFound = false;

                assetTypeItems.forEach((item) => {
                    const assetTypeName = item.textContent.toLowerCase();

                    if (assetTypeName.includes(query)) {
                        item.style.display = 'block'; // Show matching asset type
                        matchFound = true;
                    } else {
                        item.style.display = 'none'; // Hide non-matching asset type
                    }
                });

                // If no match is found, clear the dropdown
                if (!matchFound) {
                    assetTypeList.innerHTML = ''; // Optionally clear the list if desired
                }
            });

            // Move unmatched value to input field
            /*assetTypeSearch.addEventListener('blur', function () {
              const searchValue = this.value.trim();
              const isMatched = assetTypes.includes(searchValue.toLowerCase());
          
              if (!isMatched && searchValue) {
                assetTypeInput.value = searchValue; // Move value to the input field
                this.value = ''; // Clear the search box
              }
            });*/


        });


        document.addEventListener('DOMContentLoaded', function () {
            const assetMakeInput = document.getElementById('assetMakeInput');
            const assetMakeSearch = document.getElementById('assetMakeSearch');
            const assetMakeList = document.getElementById('assetMakeList');

            let assetMakes = []; // To store all asset makes

            // Fetch all asset makes initially
            fetch('<?= base_url('purchase1/all_asset_makes'); ?>')
                .then((response) => response.json())
                .then((data) => {
                    assetMakes = data.map((asset) => asset.asset_make.toLowerCase()); // Store lowercase asset makes for comparison
                    assetMakeList.innerHTML = ''; // Clear any existing entries

                    data.forEach((asset) => {
                        const listItem = document.createElement('div');
                        listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                        listItem.textContent = asset.asset_make;
                        listItem.setAttribute('data-value', asset.asset_make); // Store the value in a data attribute

                        // Handle click event to populate the input field
                        listItem.addEventListener('click', function () {
                            assetMakeInput.value = asset.asset_make; // Update the input value
                        });

                        assetMakeList.appendChild(listItem);
                    });
                })
                .catch((error) => {
                    console.error('Error fetching asset makes:', error);
                });

            // Handle the search box input inside the dropdown
            assetMakeSearch.addEventListener('input', function () {
                const query = this.value.toLowerCase(); // Case-insensitive search

                const assetMakeItems = document.querySelectorAll('#assetMakeList .dropdown-item');
                let matchFound = false;

                assetMakeItems.forEach((item) => {
                    const assetMakeName = item.textContent.toLowerCase();

                    if (assetMakeName.includes(query)) {
                        item.style.display = 'block'; // Show matching asset make
                        matchFound = true;
                    } else {
                        item.style.display = 'none'; // Hide non-matching asset make
                    }
                });

                // If no match is found, clear the dropdown
                if (!matchFound) {
                    assetMakeList.innerHTML = ''; // Optionally clear the list if desired
                }
            });

            // Move unmatched value to input field
            /*assetMakeSearch.addEventListener('blur', function () {
              const searchValue = this.value.trim();
              const isMatched = assetMakes.includes(searchValue.toLowerCase());
          
              if (!isMatched && searchValue) {
                assetMakeInput.value = searchValue; // Move value to the input field
                this.value = ''; // Clear the search box
              }
            });*/

            ;
        });




        document.addEventListener('DOMContentLoaded', function () {
            const purchaseReasonInput = document.getElementById('purchaseReasonInput');
            const purchaseReasonSearch = document.getElementById('purchaseReasonSearch');
            const purchaseReasonList = document.getElementById('purchaseReasonList');

            // Predefined constant purposes
            const constantPurchasereason = [
                "Consumables",
                "Tooling and Accessories",
                "Maintenance Equipment",
                "New Product Development (NPD)",
                "Quality Equipment"
            ];

            let purchaseReasons = []; // To store all purchase reasons

            // Add predefined constants to purchaseReasons
            purchaseReasons = constantPurchasereason.map(reason => reason.toLowerCase());

            // Render predefined constants in the dropdown
            constantPurchasereason.forEach(reason => {
                const listItem = document.createElement('div');
                listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                listItem.textContent = reason;
                listItem.setAttribute('data-value', reason); // Store the value in a data attribute

                // Handle click event to populate the input field
                listItem.addEventListener('click', function () {
                    purchaseReasonInput.value = reason; // Update the input value
                });

                purchaseReasonList.appendChild(listItem);
            });

            // Fetch all purchase reasons dynamically
            fetch('<?= base_url('purchase1/all_purchase_reasons'); ?>')
                .then(response => response.json())
                .then(data => {
                    // Add dynamically fetched reasons to purchaseReasons
                    data.forEach(item => {
                        const reason = item.purchase_reason;
                        if (!purchaseReasons.includes(reason.toLowerCase())) {
                            purchaseReasons.push(reason.toLowerCase());

                            const listItem = document.createElement('div');
                            listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                            listItem.textContent = reason;
                            listItem.setAttribute('data-value', reason); // Store the value in a data attribute

                            // Handle click event to populate the input field
                            listItem.addEventListener('click', function () {
                                purchaseReasonInput.value = reason; // Update the input value
                            });

                            purchaseReasonList.appendChild(listItem);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching purchase reasons:', error);
                });

            // Handle the search box input inside the dropdown
            purchaseReasonSearch.addEventListener('input', function () {
                const query = this.value.toLowerCase(); // Case-insensitive search

                const purchaseReasonItems = document.querySelectorAll('#purchaseReasonList .dropdown-item');
                let matchFound = false;

                purchaseReasonItems.forEach(item => {
                    const reasonName = item.textContent.toLowerCase();

                    if (reasonName.includes(query)) {
                        item.style.display = 'block'; // Show matching purchase reason
                        matchFound = true;
                    } else {
                        item.style.display = 'none'; // Hide non-matching purchase reason
                    }
                });

                // Optionally handle cases where no match is found
                if (!matchFound) {
                    purchaseReasonList.innerHTML = ''; // Clear the list if no match is found
                }
            });

            // Move unmatched value to input field
            purchaseReasonSearch.addEventListener('blur', function () {
                const searchValue = this.value.trim();
                const isMatched = purchaseReasons.includes(searchValue.toLowerCase());

                if (!isMatched && searchValue) {
                    purchaseReasonInput.value = searchValue; // Move value to the input field
                    this.value = ''; // Clear the search box
                }
            });
        });


        // Optional: Allow pressing Enter to confirm the value
        /*purchaseReasonSearch.addEventListener('keypress', function (event) {
          if (event.key === 'Enter') {
            const searchValue = this.value.trim();
            const isMatched = purchaseReasons.includes(searchValue.toLowerCase());
      
            if (!isMatched && searchValue) {
              purchaseReasonInput.value = searchValue; // Move value to the input field
              this.value = ''; // Clear the search box
            }
          }
        });*/

        ///Unit of Measurement

        document.addEventListener('DOMContentLoaded', function () {
            const uomInput = document.getElementById('uomInput');
            const uomSearch = document.getElementById('uomSearch');
            const uomList = document.getElementById('uomList');

            let uoms = []; // To store all UOMs

            // Fetch all UOMs initially
            fetch('<?= base_url('purchase1/all_uoms'); ?>') // Endpoint for UOMs
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then((data) => {
                    // Check if data is valid
                    if (Array.isArray(data)) {
                        console.log('UOMs fetched:', data);
                        let uoms = data.map((uom) => uom.uom.toLowerCase()); // Adjusted to match response format
                        uomList.innerHTML = ''; // Clear any existing entries

                        // Populate the dropdown list with UOMs
                        data.forEach((uom) => {
                            const listItem = document.createElement('div');
                            listItem.classList.add('dropdown-item');
                            listItem.textContent = uom.uom; // Adjusted based on response field name
                            listItem.setAttribute('data-value', uom.uom);

                            listItem.addEventListener('click', function () {
                                uomInput.value = uom.uom;
                            });

                            uomList.appendChild(listItem);
                        });
                    } else {
                        console.error('Unexpected data format:', data);
                    }
                })
                .catch((error) => {
                    console.error('Error fetching UOM names:', error);
                });
            // Handle the search box input inside the dropdown
            uomSearch.addEventListener('input', function () {
                const query = this.value.toLowerCase(); // Case-insensitive search

                const uomItems = document.querySelectorAll('#uomList .dropdown-item');
                let matchFound = false;

                uomItems.forEach((item) => {
                    const uomName = item.textContent.toLowerCase();

                    if (uomName.includes(query)) {
                        item.style.display = 'block'; // Show matching UOM
                        matchFound = true;
                    } else {
                        item.style.display = 'none'; // Hide non-matching UOM
                    }
                });

                // If no match is found, clear the dropdown
                if (!matchFound) {
                    uomList.innerHTML = ''; // Optionally clear the list if desired
                }
            });

            // Move unmatched value to input field when the search box loses focus
            uomSearch.addEventListener('blur', function () {
                const searchValue = this.value.trim();
                const isMatched = uoms.includes(searchValue.toLowerCase());

                if (!isMatched && searchValue) {
                    uomInput.value = searchValue; // Move value to the input field
                    this.value = ''; // Clear the search box
                }
            });



        });








    </script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');

  dropdownItems.forEach(item => {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      const value = this.getAttribute("data-value");
      const input = this.closest(".dropdown").querySelector("input");
      if (input) {
        input.value = value;
      }
    });
  });
});
</script>

    
    <script>
document.addEventListener("DOMContentLoaded", function () {
  const deliveryInput = document.getElementById("delivery_status_input");
  const deliveryOptions = document.querySelectorAll("#deliveryStatusList .dropdown-item");

  deliveryOptions.forEach(option => {
    option.addEventListener("click", function (e) {
      e.preventDefault();
      const value = this.getAttribute("data-value");
      deliveryInput.value = value;
    });
  });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const input = document.getElementById("purchase_status_input");
  const options = document.querySelectorAll("#purchaseStatusList .dropdown-item");

  options.forEach(option => {
    option.addEventListener("click", function (e) {
      e.preventDefault();
      const value = this.getAttribute("data-value");
      input.value = value;
    });
  });
});
</script>

  
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            form.addEventListener('keypress', function (event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                }
            });
        });
    </script>
    <!-- Add this modal HTML with your other modals -->
    
<!-- Confirmation Modal -->

<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Removal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex align-items-center">
          <i class="ti ti-alert-circle me-2 fs-4 text-danger"></i>
          <span>Are you sure you want to remove this accessory?</span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Remove</button>
      </div>
    </div>
  </div>
</div>
<script>
let accessories = [];

document.addEventListener("DOMContentLoaded", function () {
  const accessoryTypeInput = document.getElementById("accessoryTypeInput");
  const accessoryTypeItems = document.querySelectorAll("#accessoryTypeList .dropdown-item");

  accessoryTypeItems.forEach(item => {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      accessoryTypeInput.value = this.getAttribute("data-value");
    });
  });

  document.getElementById("accessoryQuantity").addEventListener("input", calculateAccessoryTotal);
  document.getElementById("accessoryUnitPrice").addEventListener("input", calculateAccessoryTotal);

  document.getElementById("saveAccessoryBtn").addEventListener("click", function () {
    const name = document.getElementById("accessoryName").value.trim();
    const quantity = parseInt(document.getElementById("accessoryQuantity").value);
    const type = document.getElementById("accessoryTypeInput").value;
    const unit_price = parseFloat(document.getElementById("accessoryUnitPrice").value);
    const total = parseFloat(document.getElementById("accessoryTotal").value) || 0;
    const errorBox = document.getElementById("accessoryError");

    if (!name || isNaN(quantity) || quantity <= 0 || !type || isNaN(unit_price) || unit_price <= 0) {
      errorBox.innerText = "Please fill all fields with valid values.";
      errorBox.style.display = "block";
      return;
    }

    errorBox.style.display = "none";

    const newAccessory = { name, quantity, type, unit_price, total };
    accessories.push(newAccessory);
    updateAccessoryTable();
    resetAccessoryForm();

    const modal = bootstrap.Modal.getInstance(document.getElementById("addAccessoryModal"));
    modal.hide();
  });

  document.getElementById("addAccessoryModal").addEventListener("hidden.bs.modal", resetAccessoryForm);
});

function calculateAccessoryTotal() {
  const quantity = parseInt(document.getElementById("accessoryQuantity").value) || 0;
  const unit_price = parseFloat(document.getElementById("accessoryUnitPrice").value) || 0;
  const total = quantity * unit_price;
  document.getElementById("accessoryTotal").value = total.toFixed(2);
}

function updateAccessoryTable() {
  const tbody = document.querySelector("#accessoryTable tbody");
  tbody.innerHTML = "";
  let grandTotal = 0;

  if (accessories.length === 0) {
    tbody.innerHTML = "<tr><td colspan='6' class='text-center'>No accessories added yet</td></tr>";
  } else {
    accessories.forEach((acc, index) => {
      grandTotal += acc.total;
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${acc.name}</td>
        <td>${acc.quantity}</td>
        <td>${acc.type}</td>
        <td>₹${acc.unit_price.toFixed(2)}</td>
        <td>₹${acc.total.toFixed(2)}</td>
        <td>
          <a href="javascript:void(0);" class="btn btn-sm" onclick="removeAccessory(${index})">
            <i class="bi bi-trash text-danger fs-5"></i>
          </a>
        </td>
      `;
      tbody.appendChild(row);
    });
  }

  document.querySelector(".accessories-total").textContent = `₹${grandTotal.toFixed(2)}`;
  document.getElementById("accessoryData").value = JSON.stringify(accessories);
}

function removeAccessory(index) {
  accessories.splice(index, 1);
  updateAccessoryTable();
}

function resetAccessoryForm() {
  document.getElementById("accessoryName").value = "";
  document.getElementById("accessoryQuantity").value = "";
  document.getElementById("accessoryTypeInput").value = "";
  document.getElementById("accessoryUnitPrice").value = "";
  document.getElementById("accessoryTotal").value = "";
  document.getElementById("accessoryError").style.display = "none";
}


function showAlert(message) {
  const alertHTML = `
    <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
      <div class="d-flex align-items-center text-primary">
        <i class="ti ti-info-circle me-2 fs-4"></i>
        ${message}
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  `;
  
  let alertContainer = document.getElementById('js-alert-container');
  if (!alertContainer) {
    alertContainer = document.createElement('div');
    alertContainer.id = 'js-alert-container';
    document.body.insertBefore(alertContainer, document.body.firstChild);
  }
  
  alertContainer.insertAdjacentHTML('afterbegin', alertHTML);
  
  setTimeout(() => {
    const alertElement = alertContainer.querySelector('.alert');
    if (alertElement) {
      const bsAlert = new bootstrap.Alert(alertElement);
      bsAlert.close();
    }
  }, 5000);
}


</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const accessorySection = document.getElementById('accessorySection');
    const radios = document.querySelectorAll('input[name="hasAccessories"]');

    radios.forEach(radio => {
      radio.addEventListener('change', function () {
        if (this.value === 'yes') {
          accessorySection.classList.remove('d-none');
        } else {
          accessorySection.classList.add('d-none');
        }
      });
    });
  });
</script>



<script>
document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("asset_image");
  const uploadArea = document.getElementById("uploadArea");

  // Make the whole upload area clickable
  uploadArea.addEventListener("click", function () {
    fileInput.click();
  });

  fileInput.addEventListener("change", function () {
    const files = Array.from(fileInput.files);
    if (files.length > 0) {
      console.log("Selected files:", files.map(f => f.name));

      const existingPreview = document.getElementById("filePreview");
      if (existingPreview) {
        existingPreview.remove(); // Remove previous preview if any
      }

      const fileListHtml = files.map(f => `<div>${f.name}</div>`).join('');
      const filePreview = document.createElement("div");
      filePreview.id = "filePreview";
      filePreview.className = "mt-2 small text-secondary";
      filePreview.innerHTML = fileListHtml;

      uploadArea.appendChild(filePreview);
    }
  });
});
</script>


<script>
  let currentStep = 1;

  function goToStep(stepNumber) {
    const stepItems = document.querySelectorAll(".stepper-item");
    const stepContents = document.querySelectorAll(".step-content");
    const progressLine = document.getElementById("progressLine");

    const totalSteps = stepItems.length;
    const stepPercent = ((stepNumber - 1) / (totalSteps - 1)) * 100;
    progressLine.style.width = stepPercent + "%";

    stepItems.forEach((item, index) => {
      const counter = item.querySelector(".step-counter");
      const stepName = item.querySelector(".step-name");

      item.classList.remove("active", "completed");
      if (stepName) stepName.classList.add("d-none");

      if (index + 1 < stepNumber) {
        item.classList.add("completed");
        counter.textContent = "✓";
      } else {
        counter.textContent = index + 1;
      }

      if (index + 1 === stepNumber) {
        item.classList.add("active");
        if (stepName) stepName.classList.remove("d-none");
      }
    });

    stepContents.forEach(content => content.classList.remove("active"));
    const currentContent = document.getElementById(`step-${stepNumber}-content`);
    if (currentContent) {
      currentContent.classList.add("active");
    }

    currentStep = stepNumber;
  }

  // ✅ Updated nextStep() with validation
  function nextStep(stepNumber) {
    const currentContent = document.getElementById(`step-${currentStep}-content`);
    const requiredFields = currentContent.querySelectorAll("[required]");

    for (let field of requiredFields) {
      if (!field.checkValidity()) {
        field.reportValidity(); // Show native popup
        return;
      }
    }

    goToStep(stepNumber);
  }

  function prevStep(stepNumber) {
    goToStep(stepNumber);
  }

  window.onload = () => goToStep(1);
</script>



<script>
document.addEventListener("DOMContentLoaded", function () {
  const accessoryTypeInput = document.getElementById("accessoryTypeInput");
  const accessoryTypeItems = document.querySelectorAll("#accessoryTypeList .dropdown-item");

  accessoryTypeItems.forEach(item => {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      accessoryTypeInput.value = this.getAttribute("data-value");
    });
  });
});
</script>
<!-- cancel button -->
<script>
  // Reset form function
  function resetForm() {
    document.getElementById("myForm").reset();
  }

  // Form validation and submission
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");

    // form.addEventListener("submit", function (e) {
    //   e.preventDefault(); // Prevent default form submission

    //   if (!form.checkValidity()) {
    //     form.reportValidity(); // Show browser validation errors
    //     return;
    //   }

    //   // Optional: Your custom logic here (e.g., confirmation or fetch)
    //   console.log("Purchase form is valid!");

    //   // ✅ Submit the form manually if valid
    //   form.submit();
    // });
  });
</script>


<!-- 
<script>
  function nextStep(stepNumber) {
    const steps = document.querySelectorAll(".step-content");
    steps.forEach(step => step.classList.remove("active"));

    const nextStep = document.getElementById(`step-${stepNumber}-content`);
    if (nextStep) {
      nextStep.classList.add("active");
    }
  }

  function prevStep(stepNumber) {
    const steps = document.querySelectorAll(".step-content");
    steps.forEach(step => step.classList.remove("active"));

    const prevStep = document.getElementById(`step-${stepNumber}-content`);
    if (prevStep) {
      prevStep.classList.add("active");
    }
  }
</script> -->
 </div>

</div>
</div>
</div>

   
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

</body>

</html>
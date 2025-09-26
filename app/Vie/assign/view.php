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

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <title>MatDash Bootstrap Admin</title>
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


  <style>
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
  </style>
  <style>
    .modal-dialog-scrollable .modal-body {
      max-height: calc(100vh - 200px);
      overflow-y: auto;
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
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                  data-bs-placement="right" data-bs-title="Assets">
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
                $adminHref = match ($tabParam) {
                  'make' => base_url('viewassettype?tab=make'),
                  'dealers' => base_url('viewassettype?tab=dealers'),
                  'uom' => base_url('viewassettype?tab=uom'),
                  default => base_url('viewassettype'),
                };
                ?>

                <li class="sidebar-item <?= $isAdminActive ? 'active' : ''; ?>">
                  <a class="sidebar-link" href="<?= $adminHref; ?>">
                    <span class="hide-menu">Admin</span>
                  </a>
                </li>



                <li
                  class="sidebar-item <?php if (strpos($current_url, 'viewasset') !== false || strpos($current_url, 'asset1') !== false)
                    echo 'active'; ?>">
                  <a class="sidebar-link" href="<?= base_url('viewasset'); ?>">
                    <span class="hide-menu">Assets</span>
                  </a>
                </li>

                <?php
                $currentUri = uri_string();
                $isPurchaseActive = in_array($currentUri, ['purchase1', 'viewpurchase1']) || strpos($currentUri, 'editpurchase1') === 0;
                ?>

                <li class="sidebar-item <?= $isPurchaseActive ? 'active' : '' ?>">
                  <a class="sidebar-link" href="<?= base_url('viewpurchase1'); ?>">
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
                $adminHref = match ($tabParam) {

                  default => base_url('assign'),
                };
                ?>

                <li class="sidebar-item <?= $isAdminActive ? 'active' : ''; ?>">
                  <a class="sidebar-link" href="<?= $adminHref; ?>">
                    <span class="hide-menu">Assign Assets</span>
                  </a>
                </li>







                <li class="sidebar-item">
                  <a class="sidebar-link" href="http://freelance.neuralarc.com/digitalflow/" target="_blank">
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
                <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler " id="headerCollapse"
                  href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                </a>
              </li>

              <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden"
                aria-labelledby="drop2">
                <div class="position-relative">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="p-4 pb-3">

                        <div class="row">
                          <div class="col-md-6">

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
            <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
              data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <!--<li class="nav-item dropdown">-->
                  <!--  <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">-->
                  <!--    <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)">-->
                  <!--    <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--  <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)" style="display: none">-->
                  <!--    <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <!--<li class="nav-item d-block d-xl-none">-->
                  <!--  <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                  <!--    <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--</li>-->


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
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                      aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg"
                            class="rounded-circle" width="56" height="56" alt="matdash-img" />
                          <div>
                            <h5 class="mb-0 fs-12">USER <span class="text-success fs-11">Pro</span>
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
                              <a href="<?= base_url('logout'); ?>" class="p-2 dropdown-item h6 rounded-1">
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
                  <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo-icon.svg" alt="Logo" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body pt-0" data-simplebar style="height: calc(100vh - 80px)">
                <ul id="sidebarnav">
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow ms-0" href="javascript:void(0)" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:slider-vertical-line-duotone" class="fs-7"></iconify-icon>
                      </span>
                      <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3 ps-3">
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-chat.html" class="d-flex align-items-center">
                          <div
                            class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                            <span class="fs-11 d-block text-body-color">New messages arrived</span>
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
                            <span class="fs-11 d-block text-body-color">Get latest invoice</span>
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
                            <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-email.html" class="d-flex align-items-center">
                          <div
                            class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Email App</h6>
                            <span class="fs-11 d-block text-body-color">Get new emails</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html"
                          class="d-flex align-items-center">
                          <div
                            class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                            <span class="fs-11 d-block text-body-color">learn more information</span>
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
                            <span class="fs-11 d-block text-body-color">Add new contact</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-notes.html" class="d-flex align-items-center">
                          <div
                            class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                            <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
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
                  <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg" alt="matdash-img" />
                </a>
              </li>
              <li class="nav-item d-none d-xl-flex align-items-center nav-icon-hover-bg rounded-circle">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-lg-flex align-items-center dropdown nav-icon-hover-bg rounded-circle">
                <div class="hover-dd">
                  <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
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
                                      <iconify-icon icon="solar:chat-line-bold-duotone"
                                        class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Chat Application</h6>
                                      <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-invoice.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:bill-list-bold-duotone"
                                        class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Invoice App</h6>
                                      <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-contact2.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:phone-calling-rounded-bold-duotone"
                                        class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact Application</h6>
                                      <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-email.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:letter-bold-duotone"
                                        class="fs-7 text-danger"></iconify-icon>
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
                                  <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:user-bold-duotone"
                                        class="fs-7 text-success"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">User Profile</h6>
                                      <span class="fs-11 d-block text-body-color">learn more information</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-calendar.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:calendar-minimalistic-bold-duotone"
                                        class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Calendar App</h6>
                                      <span class="fs-11 d-block text-body-color">Get dates</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-contact.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:smartphone-2-bold-duotone"
                                        class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact List Table</h6>
                                      <span class="fs-11 d-block text-body-color">Add new contact</span>
                                    </div>
                                  </a>
                                  <a href="<?= base_url(); ?>/public/dist/main/app-notes.html"
                                    class="d-flex align-items-center pb-9 position-relative">
                                    <div
                                      class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:notes-bold-duotone"
                                        class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Notes Application</h6>
                                      <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
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
                <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg" alt="matdash-img" />
              </a>
            </div>
            <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle"
              href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <!--<li class="nav-item dropdown">-->
                  <!--  <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">-->
                  <!--    <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout" href="javascript:void(0)">-->
                  <!--    <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--  <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout" href="javascript:void(0)" style="display: none">-->
                  <!--    <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <!--<li class="nav-item d-block d-xl-none">-->
                  <!--  <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                  <!--    <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>-->
                  <!--  </a>-->
                  <!--</li>-->

                  <!-- ------------------------------- -->
                  <!-- start notification Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                      aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
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
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as
                              you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
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
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as
                              you want</span>
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
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-en.svg" alt="matdash-img"
                        width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-en.svg"
                              alt="matdash-img" width="20px" height="20px"
                              class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-cn.svg"
                              alt="matdash-img" width="20px" height="20px"
                              class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="<?= base_url(); ?>/public/dist/assets/images/flag/icon-flag-fr.svg"
                              alt="matdash-img" width="20px" height="20px"
                              class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
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
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                      aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg"
                            class="rounded-circle" width="56" height="56" alt="matdash-img" />
                          <div>
                            <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
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
                            My Statements <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
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
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:widget-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/app-calendar.html" class="sidebar-link">
                      <i class="ti ti-calendar"></i>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/apps-kanban.html" class="sidebar-link">
                      <i class="ti ti-layout-kanban"></i>
                      <span class="hide-menu">Kanban</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/app-chat.html" class="sidebar-link">
                      <i class="ti ti-message-dots"></i>
                      <span class="hide-menu">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url(); ?>/public/dist/main/app-email.html"
                      aria-expanded="false">
                      <span>
                        <i class="ti ti-mail"></i>
                      </span>
                      <span class="hide-menu">Email</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/app-contact.html" class="sidebar-link">
                      <i class="ti ti-phone"></i>
                      <span class="hide-menu">Contact Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/app-contact2.html" class="sidebar-link">
                      <i class="ti ti-list-details"></i>
                      <span class="hide-menu">Contact List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/app-notes.html" class="sidebar-link">
                      <i class="ti ti-notes"></i>
                      <span class="hide-menu">Notes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/app-invoice.html" class="sidebar-link">
                      <i class="ti ti-file-text"></i>
                      <span class="hide-menu">Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">User Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/blog-posts.html" class="sidebar-link">
                      <i class="ti ti-article"></i>
                      <span class="hide-menu">Posts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/blog-detail.html" class="sidebar-link">
                      <i class="ti ti-details"></i>
                      <span class="hide-menu">Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/eco-shop.html" class="sidebar-link">
                      <i class="ti ti-shopping-cart"></i>
                      <span class="hide-menu">Shop</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/eco-shop-detail.html" class="sidebar-link">
                      <i class="ti ti-basket"></i>
                      <span class="hide-menu">Shop Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/eco-product-list.html" class="sidebar-link">
                      <i class="ti ti-list-check"></i>
                      <span class="hide-menu">List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/eco-checkout.html" class="sidebar-link">
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
                    <a href="<?= base_url(); ?>/public/dist/main/page-faq.html" class="sidebar-link">
                      <i class="ti ti-help"></i>
                      <span class="hide-menu">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/page-account-settings.html" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/page-pricing.html" class="sidebar-link">
                      <i class="ti ti-currency-dollar"></i>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/widgets-cards.html" class="sidebar-link">
                      <i class="ti ti-cards"></i>
                      <span class="hide-menu">Card</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/widgets-banners.html" class="sidebar-link">
                      <i class="ti ti-ad"></i>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/widgets-charts.html" class="sidebar-link">
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
                    <a href="<?= base_url(); ?>/public/dist/landingpage/index.html" class="sidebar-link">
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
                    <a href="<?= base_url(); ?>/public/dist/main/ui-accordian.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-badge.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-buttons.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-dropdowns.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dropdowns</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-modals.html" class="sidebar-link">
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
                    <a href="<?= base_url(); ?>/public/dist/main/ui-tooltip-popover.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tooltip & Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-notification.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Notification</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-progressbar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-pagination.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pagination</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-typography.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-bootstrap-ui.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-breadcrumb.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-offcanvas.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-lists.html" class="sidebar-link">
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
                    <a href="<?= base_url(); ?>/public/dist/main/ui-carousel.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-scrollspy.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/ui-spinner.html" class="sidebar-link">
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
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:folder-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Forms</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- form elements -->
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-inputs.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Forms Input</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-input-groups.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Groups</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-input-grid.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-checkbox-radio.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Checkbox & Radios</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-bootstrap-switch.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap Switch</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-select2.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Select2</span>
                    </a>
                  </li>
                  <!-- form inputs -->
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Form</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-vertical.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Vertical</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-horizontal.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Horizontal</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-actions.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Actions</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-row-separator.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Row Separator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-bordered.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Bordered</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-detail.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Detail</span>
                    </a>
                  </li>
                  <!-- form wizard -->
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-wizard.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Wizard</span>
                    </a>
                  </li>
                  <!-- Quill Editor -->
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-editor-quill.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Quill Editor</span>
                    </a>
                  </li>
                  <!-- Tinymce Editor -->
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/form-editor-tinymce.html" class="sidebar-link">
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
                    <iconify-icon icon="solar:tuning-square-2-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/table-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/table-dark-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dark Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/table-sizing.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Sizing Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/table-layout-coloured.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Coloured Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/table-datatable-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Initialisation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/table-datatable-api.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/table-datatable-advanced.html" class="sidebar-link">
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
                    <a href="<?= base_url(); ?>/public/dist/main/chart-apex-line.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/chart-apex-area.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Area Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/chart-apex-bar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/chart-apex-pie.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pie Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/chart-apex-radial.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radial Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url(); ?>/public/dist/main/chart-apex-radar.html" class="sidebar-link">
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
                    <iconify-icon icon="solar:sticker-smile-square-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Icons</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url(); ?>/public/dist/main/icon-tabler.html"
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
                    <a class="sidebar-link sidebar-link" href="<?= base_url(); ?>/public/dist/main/icon-solar.html"
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
                    <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
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
                  <h4 class="mb-4 mb-sm-0 card-title">Assign Assets</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="#">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Assign
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <!-- <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                 /* <i class="ti ti-user-circle me-2 fs-6"></i>*/
                  <span class="d-none d-md-block">Asset Type</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
                  /* <i class="ti ti-bell me-2 fs-6"></i> */
                  <span class="d-none d-md-block">Asset Make</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-bills-tab" data-bs-toggle="pill" data-bs-target="#pills-bills" type="button" role="tab" aria-controls="pills-bills" aria-selected="false">
                  /* <i class="ti ti-article me-2 fs-6"></i> */
                  <span class="d-none d-md-block">Dealer Name</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false">
                 /* <i class="ti ti-lock me-2 fs-6"></i> */
                  <span class="d-none d-md-block">UOM</span>
                </button>
              </li>
            </ul>  -->



            <!-- <button type="button" class="btn mb-1 bg-danger-subtle text-danger px-4 fs-4 " data-bs-toggle="modal" data-bs-target="#vertical-center-scroll-modal">
                      Vertically centered scrollable
                    </button> -->

            <!-- Vertically centered modal -->


            <!-- Modal -->
            <div class="modal fade" id="vertical-center-scroll-modal" tabindex="-1"
              aria-labelledby="vertical-center-modal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <form method="post" id="assetForm" action="<?= base_url('addassign'); ?>"
                    enctype="multipart/form-data">
                    <div class="modal-header d-flex align-items-center">
                      <h4 class="modal-title" id="myLargeModalLabel">Add Assign Assets</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                      <?php
                      $session = \Config\Services::session();
                      if (isset($session->success)): ?>
                        <!-- <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
              <div class="d-flex align-items-center text-primary">
                <i class="ti ti-info-circle me-2 fs-4"></i>
                <?= $session->success; ?>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->
                      <?php endif; ?>

                      <div class="row">





                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label required">GRN No</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="grn_no" id="grnInput"
                                placeholder="Select GRN No" data-bs-toggle="dropdown" aria-expanded="false"
                                autocomplete="off" required />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="grnInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="grnSearch" placeholder="Search GRN No"
                                  autocomplete="off" />

                                <div id="grnList" style="width: 100%;">
                                  <!-- Dynamic asset type list will be populated here -->

                              </ul>
                            </div>

                          </div>
                        </div>




                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label required">Asset Type</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="asset_type"
                                id="assetTypeInput" placeholder="Select Asset Type" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" required />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetTypeInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="assetTypeSearch"
                                  placeholder="Search Asset Type" autocomplete="off" />

                                <div id="assetTypeList" style="width: 100%;">
                                  <!-- Dynamic asset type list will be populated here -->

                              </ul>
                            </div>

                          </div>
                        </div>



                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_make" class="form-label required">Asset Make</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="asset_make"
                                id="assetMakeInput" placeholder="Select Asset Make" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" required />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetMakeInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="assetMakeSearch"
                                  placeholder="Search Asset Make" autocomplete="off" />
                                <div id="assetMakeList" style="width: 100%;">
                                  <!-- Dynamic asset make list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>
                        </div>


                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label required">Employee Name</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="employee_name"
                                id="employee_name" placeholder="Enter Employee Name " autocomplete="off" required />


                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label required">Assigned By</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="assigned_by"
                                id="assigned_by" placeholder=" Assigned By " autocomplete="off" required />


                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label">Machine Name</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="machine_name"
                                id="machine_name" placeholder="Enter Machine Name" autocomplete="off" />


                            </div>
                          </div>
                        </div>


                        <div class="col-6" id="part_number">
                          <div class="mb-3">
                            <label for="part_number" class="form-label">Part Name</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="part_name"
                                id="partNumberInput" placeholder="Select Part Name" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="partNumberInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="partNumberSearch"
                                  placeholder="Search Part Name" autocomplete="off" />
                                <div id="partNumberList" style="width: 100%;">
                                  <!-- Dynamic part number list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>
                        </div>


                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label required">Quantity Assigned</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="qty_assigned"
                                id="qty_assigned" placeholder="Enter Quantity" autocomplete="off" required />


                            </div>
                          </div>
                        </div>


                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label required">Issued Date</label>
                            <div class="dropdown">
                              <input type="date" class="form-control" name="issued_date" id="issued_date"
                                placeholder="Enter Quantity" autocomplete="off" required />


                            </div>
                          </div>
                        </div>


                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label ">Return Date</label>
                            <div class="dropdown">
                              <input type="date" class="form-control " name="return_date" id="return_date"
                                placeholder="Enter Quantity" autocomplete="off" />


                            </div>
                          </div>
                        </div>


                        <div class="col-6">
                          <div class="mb-3">
                            <label for="asset_type" class="form-label">Remarks</label>
                            <div class="dropdown">
                              <input type="text" class="form-control " name="remarks" id="remarks"
                                placeholder="Enter Remarks" autocomplete="off" />


                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="mb-3">
                            <label for="calibration_id" class="form-label">Calibration Id</label>
                            <input type="text" class="form-control" name="calibration_id" id="calibration_id"
                              placeholder="Enter Calibration Id" autocomplete="off" />
                          </div>
                        </div>



                        <div class="col-12" id="accessorieadd-section">
                          <div class="mb-3">
                            <label class="form-label">Accessories</label>
                            <div id="addaccessory-container"></div>
                            <button type="button" class="btn btn-primary mt-2" onclick="Accessory()">+ Add
                              Accessory</button>
                            <input type="hidden" name="addaccessories" id="addaccessoriesInput" />
                          </div>
                        </div>





                      </div>
                    </div>


                    <div class="modal-footer border-top justify-content-end">
                      <button type="button" class="btn bg-danger-subtle text-danger me-2" data-bs-dismiss="modal">
                        Cancel
                      </button>
                      <button type="submit" name="submit" value="submit" class="btn btn-primary">
                        Save
                      </button>
                    </div>

                  </form>
                </div>
              </div>
            </div>










            <!-- </div> -->

            <div class="card-body">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                  aria-labelledby="pills-account-tab" tabindex="0">

                  <!-- <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0"> -->

                  <div class="datatables">
                    <!-- start Add Row -->






                    <!-- end Row selection (multiple rows) -->
                    <!-- start Form Inputs -->
                    <!-- <div class="card"> -->
                    <div class="card-body">

                      <!-- <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                   -->

                      <?php
                      $session = \Config\Services::session();
                      $successMessage = $session->getFlashdata('success');
                      $activeTab = $_GET['tab'] ?? ''; // fallback to empty
                      ?>



                      <?php if ($activeTab === '' && $successMessage): ?>
                        <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
                          <div class="d-flex align-items-center text-primary">
                            <i class="ti ti-info-circle me-2 fs-4"></i>
                            <?= $successMessage ?>
                          </div>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <form method="post" action="<?= base_url('viewassettype'); ?>">

                        <div class="text-end mb-3">
                          <!-- <a href="<//?= base_url('assettype'); ?>" class="btn btn-primary">Add Asset Type</a> -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#vertical-center-scroll-modal">
                            + Add Assign
                          </button>
                          <!-- <button type="button" class="btn mb-1 bg-danger-subtle text-danger px-4 fs-4 " data-bs-toggle="modal" data-bs-target="#vertical-center-scroll-modal"> -->

                        </div>



                        <!-- <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</a>
    </td> -->
                        <div class="table-responsive mt-3">

                          <table id="form_inputs_assettype"
                            class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                            <thead>
                              <tr>
                                <!-- <th><input type="checkbox" id="select_all"></th>  -->
                                <th style="width: 50px;">S.No</th>
                                <th style="width: 150px;">GRN No</th> <!-- Decreased width -->
                                <th style="width: 60%;">Assigned By</th> <!-- Increased width -->
                                <th style="width: 60%;">Employee Name</th>
                                <th style="width: 60%;">Issued Date</th>
                                <th style="width: 130px;">Actions</th> <!-- Decreased width -->
                              </tr>
                            </thead>
                            <tbody>

                              <?php $i = 1;
                              foreach ($assign as $asset):
                                // $base=base64_encode(base64_encode(base64_encode($asset['id'])));
                                ?>
                                <tr>


                                  <td><?= $i++; ?> </td>
                                  <td><?= $asset['grn_no']; ?></td>
                                  <td><?= $asset['assigned_by']; ?></td>
                                  <td><?= $asset['employee_name']; ?></td>
                                  <td><?= $asset['issued_date']; ?></td>



                                  <td>
                                    </ /?=var_dump($asset['id']); ?>

                                    <!-- Update Button that triggers modal -->
                                    <button type="button" class="btn" style="color:blue" data-bs-toggle="modal"
                                      data-bs-target="#vertical-center-scroll-modal"
                                      onclick='editAsset(JSON.parse(this.getAttribute("data-asset")))'
                                      data-asset='<?= json_encode($asset) ?>'>


                                      <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <a href="javascript:void(0)" class="btn " data-bs-toggle="modal"
                                      data-bs-target="#deleteConfirmationModal<?= $asset['assign_asset_id']; ?>">
                                      <i class="bi bi-trash text-danger"></i>
                                    </a>






                                    <!-- <a href="<//?= base_url('editassettype/'. $asset['id']); ?>" class="btn btn-info">Update</a> -->


                                    <!--a href="/assettype/delete/<//?= $asset['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>-->
                                  </td>
                                </tr>

                                <div class="modal fade" id="deleteConfirmationModal<?= $asset['assign_asset_id']; ?>"
                                  tabindex="-1" aria-labelledby="deleteModalTitle<?= $asset['assign_asset_id']; ?>"
                                  aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header d-flex align-items-center">
                                        <h5 class="modal-title" id="deleteModalTitle<?= $asset['assign_asset_id']; ?>">Are
                                          you sure you want to delete?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                      </div>
                                      <div class="modal-footer d-flex gap-3 justify-content-end">
                                        <!-- Confirm Delete Button -->
                                        <a href="<?= base_url('deleteassign/' . $asset['assign_asset_id']); ?>"
                                          class="btn btn-danger">Yes</a>
                                        <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">No</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </form>












                    </div>
                  </div>
                </div>









              </div>
            </div>
          </div>








        </div>
      </div>
    </div>






  <!-- </div>
  </div>

  </div>
  </div>
  </div>
  </div>
  </div> -->



<!-- 
  <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="icon ti ti-settings fs-7"></i>
  </button> -->

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
        <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
          <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
        </label>

        <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
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
        <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="BLUE_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="AQUA_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="PURPLE_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
          data-bs-placement="top" data-bs-title="GREEN_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
          data-bs-placement="top" data-bs-title="CYAN_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
          data-bs-placement="top" data-bs-title="ORANGE_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>
      </div>

      <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
      <div class="d-flex flex-row gap-3 customizer-box" role="group">
        <div>
          <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout">
            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
          </label>
        </div>
        <div>
          <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
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
          <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar">
            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
          </label>
        </a>
        <div>
          <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar">
            <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
          </label>
        </div>
      </div>

      <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

      <div class="d-flex flex-row gap-3 customizer-box" role="group">
        <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border">
          <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
        </label>

        <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border">
          <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
        </label>
      </div>
    </div>
  </div>




  <!-- </div> -->


  <!-- <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="icon ti ti-settings fs-7"></i>
  </button> -->

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
        <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
          <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
        </label>

        <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
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
        <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="BLUE_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="AQUA_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="PURPLE_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
          data-bs-placement="top" data-bs-title="GREEN_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
          data-bs-placement="top" data-bs-title="CYAN_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>

        <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
          onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
          data-bs-placement="top" data-bs-title="ORANGE_THEME">
          <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
            <i class="ti ti-check text-white d-flex icon fs-5"></i>
          </div>
        </label>
      </div>

      <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
      <div class="d-flex flex-row gap-3 customizer-box" role="group">
        <div>
          <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout">
            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
          </label>
        </div>
        <div>
          <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
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
          <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar">
            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
          </label>
        </a>
        <div>
          <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar">
            <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
          </label>
        </div>
      </div>

      <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

      <div class="d-flex flex-row gap-3 customizer-box" role="group">
        <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border">
          <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
        </label>

        <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border">
          <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
        </label>
      </div>
    </div>
  </div>

  <script>
    function handleColorTheme(e) {
      document.documentElement.setAttribute("data-color-theme", e);
    }
  </script>
  <!-- </div> -->

 


  <div class="modal" tabindex="-1" id="imageModal">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Asset Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="modalImage"> </p>

        </div>
      </div>
    </div>
  </div>


  <script>

    // JavaScript to show image in modal on click -->

    // Show image in modal on click
    document.querySelectorAll('.image-thumbnail').forEach(button => {
      button.addEventListener('click', () => {

        let data = button.getAttribute('data-info'); // or use $(button).data('info')

        // Parse if it's a JSON string


        let items = [];
        try {
          items = typeof data === 'string' ? JSON.parse(data) : data;

        } catch (e) {
          console.error("Invalid JSON format", e);
        }


        // Get array data from attribute
        var imageSrc = items;
        var modal = new bootstrap.Modal(document.getElementById('imageModal'));
        var modalImage = document.getElementById('modalImage');




        modalImage.innerHTML = "";


        var count = 1;
        if (Array.isArray(items) && items.length > 0) {
          for (let item of imageSrc) {
            modalImage.innerHTML += `<p>${count}.${item}</p>`;
            count++;
          }
        } else {
          modalImage.innerHTML += `<p>Not Avilable</p>`;
        }

        modal.show();
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const deleteTriggerButton = document.getElementById('btn-delete-trigger');
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
      const confirmDeleteButton = document.getElementById('confirm_delete');
      const selectAllCheckbox = document.getElementById('select_all'); // Select All checkbox
      const rowCheckboxes = document.querySelectorAll('.row_checkbox'); // Individual row checkboxes
      let selectedIds = []; // Store selected IDs globally

      // Function to collect selected IDs
      const collectSelectedIds = () => {
        selectedIds = Array.from(document.querySelectorAll('.row_checkbox:checked')).map((checkbox) =>
          checkbox.getAttribute('data-asset-id')
        );
      };

      // Handle Select All checkbox toggle
      selectAllCheckbox.addEventListener('change', function () {
        rowCheckboxes.forEach((checkbox) => {
          checkbox.checked = selectAllCheckbox.checked;
        });
        collectSelectedIds(); // Update selected IDs when toggling "Select All"
      });

      // Update selected IDs when individual checkboxes are toggled
      rowCheckboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
          // If any checkbox is unchecked, uncheck "Select All"
          if (!checkbox.checked) {
            selectAllCheckbox.checked = false;
          }

          // If all checkboxes are checked, check "Select All"
          if (Array.from(rowCheckboxes).every((cb) => cb.checked)) {
            selectAllCheckbox.checked = true;
          }

          collectSelectedIds(); // Update selected IDs
        });
      });

      // Show delete modal on trigger click
      deleteTriggerButton.addEventListener('click', function () {
        collectSelectedIds(); // Collect selected IDs before showing modal

        if (selectedIds.length === 0) {
          alert('No rows selected. Please select rows to delete.');
          return;
        }

        // Show modal
        deleteModal.show();
      });

      // Confirm delete action
      confirmDeleteButton.addEventListener('click', function () {
        // Hide modal
        deleteModal.hide();

        // Send AJAX request to delete the rows 
        fetch('<?= base_url('delete_assettypes') ?>', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            ids: selectedIds, // Send selected IDs
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              location.reload();
            } else {
              alert('Failed to delete selected rows.');
            }
          })
        //.catch((error) => {
        //  console.error('Error:', error);
        // alert('An error occurred while deleting the rows.');
        // });
      });
    });
  </script>


  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.querySelector('form');
      form.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
          event.preventDefault();
        }
      });
    });

    function toggleAll(source) {
      const checkboxes = document.querySelectorAll('.item');
      checkboxes.forEach((checkbox) => {
        checkbox.checked = source.checked;
      });
    }

  </script>

  <script>
    function toggleEditAll(selectAllCheckbox, modalId) {
      const modal = document.getElementById(modalId);
      if (!modal) return;
      const checkboxes = modal.querySelectorAll(".item");
      checkboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
    }


    $(document).ready(function () {
      $('#form_inputs_assettype').DataTable();
      $('#form_inputs_assetmake').DataTable();
      $('#form_inputs_uom').DataTable();
    });


  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const urlParams = new URLSearchParams(window.location.search);
      const tab = urlParams.get('tab');


    });
  </script>


  <script>
    //Fetch Asset type  Dynamically
    document.addEventListener('DOMContentLoaded', function () {
      const assetTypeInput = document.getElementById('assetTypeInput');
      const assetTypeSearch = document.getElementById('assetTypeSearch');
      const assetTypeList = document.getElementById('assetTypeList');
      //const purpose = document.getElementById('purpose');

      const hiddenElements = document.querySelectorAll('[style*="display:none"]');

      const hiddenIds = Array.from(hiddenElements)
        .filter(el => el.id) // Ensure the element has an ID
        .map(el => el.id);    // Collect only the ID

      const dynamic = [];



      hiddenIds.forEach(fieldid => {
        dynamic[fieldid] = document.getElementById(fieldid);

      });

      //console.log(hiddenIds);



      let assetTypes = []; // To store all asset types

      // Fetch all asset types initially
      fetch('<?= base_url('asset1/all_asset_types'); ?>')
        .then((response) => response.json())
        .then((data) => {
          assetTypes = data.map((type) => type.asset_type.toLowerCase()); // Store lowercase types for comparison
          assetTypeList.innerHTML = ''; // Clear any existing entries

          data.forEach((type) => {
            const listItem = document.createElement('div');
            listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
            listItem.textContent = type.asset_type;
            listItem.setAttribute('data-value', type.asset_type); // Store the value in a data attribute

            // Handle click event to populate the input field
            listItem.addEventListener('click', function () {
              assetTypeInput.value = type.asset_type; // Update the input value

              fetch('<?= base_url('assetfields/'); ?>' + '/' + type.asset_type)
                .then(response => response.json())
                .then(data => {
                  // 'data' is your array




                })
                .catch(error => console.error('Error:', error));

              label.forEach((labelValue, index) => {
                dynamic[hiddenIds[index]].style.display = "none";
                console.log(hiddenIds[index]);

              });

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
          const typeName = item.textContent.toLowerCase();

          if (typeName.includes(query)) {
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
      assetTypeSearch.addEventListener('blur', function () {
        const searchValue = this.value.trim();
        const isMatched = assetTypes.includes(searchValue.toLowerCase());

        if (!isMatched && searchValue) {
          assetTypeInput.value = searchValue; // Move value to the input field
          this.value = ''; // Clear the search box
        }
      });

    });

    //assetmake search box

    //Fetch Asset make  Dynamically
    document.addEventListener('DOMContentLoaded', function () {
      const assetMakeInput = document.getElementById('assetMakeInput');
      const assetMakeSearch = document.getElementById('assetMakeSearch');
      const assetMakeList = document.getElementById('assetMakeList');

      let assetMakes = []; // To store all asset makes

      // Fetch all asset makes initially
      fetch('<?= base_url('asset1/all_asset_makes'); ?>') // Update this to your endpoint
        .then((response) => response.json())
        .then((data) => {
          assetMakes = data.map((make) => make.asset_make.toLowerCase()); // Store lowercase makes for comparison
          assetMakeList.innerHTML = ''; // Clear any existing entries

          data.forEach((make) => {
            const listItem = document.createElement('div');
            listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
            listItem.textContent = make.asset_make;
            listItem.setAttribute('data-value', make.asset_make); // Store the value in a data attribute

            // Handle click event to populate the input field
            listItem.addEventListener('click', function () {
              assetMakeInput.value = make.asset_make; // Update the input value
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
          const makeName = item.textContent.toLowerCase();

          if (makeName.includes(query)) {
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
      assetMakeSearch.addEventListener('blur', function () {
        const searchValue = this.value.trim();
        const isMatched = assetMakes.includes(searchValue.toLowerCase());

        if (!isMatched && searchValue) {
          assetMakeInput.value = searchValue; // Move value to the input field
          this.value = ''; // Clear the search box
        }
      });
    });



    //Fetch Part Number Dynamically
    document.addEventListener('DOMContentLoaded', function () {
      const partNumberInput = document.getElementById('partNumberInput');
      const partNumberSearch = document.getElementById('partNumberSearch');
      const partNumberList = document.getElementById('partNumberList');

      let partNumbers = []; // To store part numbers

      // Fetch all part numbers initially
      fetch('<?= base_url('asset1/all_part_name'); ?>') // Update this to your endpoint
        .then((response) => response.json())
        .then((data) => {
          partNumbers = data.map((item) => item.part_name.toLowerCase());
          partNumberList.innerHTML = '';

          data.forEach((item) => {
            const listItem = document.createElement('div');
            listItem.classList.add('dropdown-item');
            listItem.textContent = item.part_name;
            listItem.setAttribute('data-value', item.part_name);

            // Handle click event to populate the input field
            listItem.addEventListener('click', function () {
              partNumberInput.value = item.part_name;
            });

            partNumberList.appendChild(listItem);
          });
        })
        .catch((error) => {
          console.error('Error fetching part numbers:', error);
        });

      // Handle search input
      partNumberSearch.addEventListener('input', function () {
        const query = this.value.toLowerCase();

        const partNumberItems = document.querySelectorAll('#partNumberList .dropdown-item');
        let matchFound = false;

        partNumberItems.forEach((item) => {
          const partNumber = item.textContent.toLowerCase();

          if (partNumber.includes(query)) {
            item.style.display = 'block'; // Show matching part number
            matchFound = true;
          } else {
            item.style.display = 'none'; // Hide non-matching part number
          }
        });

        // Clear the list if no match is found
        if (!matchFound) {
          partNumberList.innerHTML = '';
        }
      });

      // Move unmatched value to input field
      partNumberSearch.addEventListener('blur', function () {
        const searchValue = this.value.trim();
        const isMatched = partNumbers.includes(searchValue.toLowerCase());

        if (!isMatched && searchValue) {
          partNumberInput.value = searchValue;
          this.value = ''; // Clear the search box
        }
      });
    });

    document.addEventListener('DOMContentLoaded', function () {
      const partNumberInput = document.getElementById('partNumberInput');
      const partNumberSearch = document.getElementById('partNumberSearch');
      const partNumberList = document.getElementById('partNumberList');

      let partNumbers = []; // To store part numbers

      // Fetch all part numbers initially
      fetch('<?= base_url('asset1/all_part_name'); ?>') // Update this to your endpoint
        .then((response) => response.json())
        .then((data) => {
          partNumbers = data.map((item) => item.part_name.toLowerCase());
          partNumberList.innerHTML = '';

          data.forEach((item) => {
            const listItem = document.createElement('div');
            listItem.classList.add('dropdown-item');
            listItem.textContent = item.part_name;
            listItem.setAttribute('data-value', item.part_name);

            // Handle click event to populate the input field
            listItem.addEventListener('click', function () {
              partNumberInput.value = item.part_name;
            });

            partNumberList.appendChild(listItem);
          });
        })
        .catch((error) => {
          console.error('Error fetching part numbers:', error);
        });

      // Handle search input
      partNumberSearch.addEventListener('input', function () {
        const query = this.value.toLowerCase();

        const partNumberItems = document.querySelectorAll('#partNumberList .dropdown-item');
        let matchFound = false;

        partNumberItems.forEach((item) => {
          const partNumber = item.textContent.toLowerCase();

          if (partNumber.includes(query)) {
            item.style.display = 'block'; // Show matching part number
            matchFound = true;
          } else {
            item.style.display = 'none'; // Hide non-matching part number
          }
        });

        // Clear the list if no match is found
        if (!matchFound) {
          partNumberList.innerHTML = '';
        }
      });

      // Move unmatched value to input field
      partNumberSearch.addEventListener('blur', function () {
        const searchValue = this.value.trim();
        const isMatched = partNumbers.includes(searchValue.toLowerCase());

        if (!isMatched && searchValue) {
          partNumberInput.value = searchValue;
          this.value = ''; // Clear the search box
        }
      });
    });





    document.addEventListener('DOMContentLoaded', function () {
      const partNumberInput = document.getElementById('grnInput');
      const partNumberSearch = document.getElementById('grnSearch');
      const partNumberList = document.getElementById('grnList');

      let partNumbers = []; // To store part numbers

      // Fetch all part numbers initially
      fetch('<?= base_url('asset1/all_grn_no'); ?>') // Update this to your endpoint
        .then((response) => response.json())
        .then((data) => {
          partNumbers = data.map((item) => item.grn.toLowerCase());
          console.log(partNumbers);
          partNumberList.innerHTML = '';

          data.forEach((item) => {
            const listItem = document.createElement('div');
            listItem.classList.add('dropdown-item');
            listItem.textContent = item.grn;
            listItem.setAttribute('data-value', item.grn);

            // Handle click event to populate the input field
            listItem.addEventListener('click', function () {
              partNumberInput.value = item.grn;
            });

            partNumberList.appendChild(listItem);
          });
        })
        .catch((error) => {
          console.error('Error fetching part numbers:', error);
        });

      // Handle search input
      partNumberSearch.addEventListener('input', function () {
        const query = this.value.toLowerCase();

        const partNumberItems = document.querySelectorAll('#grnList .dropdown-item');
        let matchFound = false;

        partNumberItems.forEach((item) => {
          const partNumber = item.textContent.toLowerCase();

          if (partNumber.includes(query)) {
            item.style.display = 'block'; // Show matching part number
            matchFound = true;
          } else {
            item.style.display = 'none'; // Hide non-matching part number
          }
        });

        // Clear the list if no match is found
        if (!matchFound) {
          partNumberList.innerHTML = '';
        }
      });

      // Move unmatched value to input field
      partNumberSearch.addEventListener('blur', function () {
        const searchValue = this.value.trim();
        const isMatched = partNumbers.includes(searchValue);

        if (!isMatched && searchValue) {
          partNumberInput.value = searchValue;
          this.value = ''; // Clear the search box
        }
      });

    });

  </script>


  <script>
    function addAccessory() {
      const container = document.getElementById('accessory-container');

      const row = document.createElement('div');
      row.className = 'row g-2 mb-2';


      row.innerHTML = `
      <div class="col-md-3">
        <label>Accessory Name</label>
        <input type="text" class="form-control accessory-name" placeholder="" required>
      </div>
       <div class="col-md-2">
        <label>Specification</label>
        <input type="text" class="form-control accessory-specification" placeholder="" required>
      </div>
      <div class="col-md-2">
        <label>Stock</label>
        <input type="number" class="form-control accessory-qty" placeholder="" required>
      </div>
     
      <div class="col-md-2">
        <label>Rent Status</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle accessory-rent-status-input" placeholder="In/Out" data-bs-toggle="dropdown" aria-expanded="false" readonly required />
          <ul class="dropdown-menu p-2 w-100" style="max-height: 150px; overflow-y: auto;">
            <div class="dropdown-item" data-value="In">In</div>
            <div class="dropdown-item" data-value="Out">Out</div>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <label>Price</label>
        <input type="number" class="form-control accessory-price" placeholder="" required>
      </div>
      <div class="col-md-1 d-flex align-items-center mt-4">
        <button type="button" class="btn btn-lg" onclick="this.closest('.row').remove()">
          <i class="bi bi-trash text-danger"></i>
        </button>
      </div>
    `;
      container.appendChild(row);



      // Custom dropdown logic for Rent Status
      const rentStatusItems = row.querySelectorAll(".dropdown-item");
      const rentStatusInput = row.querySelector(".accessory-rent-status-input");

      rentStatusItems.forEach(item => {
        item.addEventListener("click", () => {
          rentStatusInput.value = item.getAttribute("data-value");
        });
      });
    }

    // Before form submit, collect accessory data into JSON
    document.querySelector("form").addEventListener("submit", function (e) {
      const rows = document.querySelectorAll("#accessory-container .row");
      const accessories = [];

      rows.forEach(row => {
        const name = row.querySelector(".accessory-name")?.value.trim();
        const stock = row.querySelector(".accessory-qty")?.value.trim();
        const specification = row.querySelector(".accessory-specification")?.value.trim();
        const rent_status = row.querySelector(".accessory-rent-status-input")?.value.trim();
        const price = row.querySelector(".accessory-price")?.value.trim();

        if (name && stock && specification && rent_status && price) {
          accessories.push({
            name: name,
            stock: stock,
            specification: specification,
            rent_status: rent_status,
            unit_price: price
          });
        }
      });


      // Set JSON string to hidden input
      document.getElementById("accessoriesInput").value = JSON.stringify(accessories);
    });
  </script>




  <script>
    function Accessory() {
      const container = document.getElementById('addaccessory-container');

      const row = document.createElement('div');
      row.className = 'row g-2 mb-2';

      row.innerHTML = `
      <div class="col-md-3">
        <label>Accessory Name</label>
        <input type="text" class="form-control accessory-name" placeholder="" required>
      </div>
       <div class="col-md-2">
        <label>Specification</label>
        <input type="text" class="form-control accessory-specification" placeholder="" required>
      </div>
      <div class="col-md-2">
        <label>Stock</label>
        <input type="number" class="form-control accessory-qty" placeholder="" required>
      </div>
     
      <div class="col-md-2">
        <label>Rent Status</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle accessory-rent-status-input" placeholder="In/Out" data-bs-toggle="dropdown" aria-expanded="false" readonly required />
          <ul class="dropdown-menu p-2 w-100" style="max-height: 150px; overflow-y: auto;">
            <div class="dropdown-item" data-value="In">In</div>
            <div class="dropdown-item" data-value="Out">Out</div>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <label>Price</label>
        <input type="number" class="form-control accessory-price" placeholder="" required>
      </div>
      <div class="col-md-1 d-flex align-items-center mt-4">
        <button type="button" class="btn btn-lg" onclick="this.closest('.row').remove()">
          <i class="bi bi-trash text-danger"></i>
        </button>
      </div>
    `;
      container.appendChild(row);
      // Custom dropdown logic for Rent Status
      const rentStatusItems = row.querySelectorAll(".dropdown-item");
      const rentStatusInput = row.querySelector(".accessory-rent-status-input");

      rentStatusItems.forEach(item => {
        item.addEventListener("click", () => {
          rentStatusInput.value = item.getAttribute("data-value");
        });
      });
    }

    // Before form submit, collect accessory data into JSON
    document.querySelector("form").addEventListener("submit", function (e) {
      const rows = document.querySelectorAll("#addaccessory-container .row");
      const accessories = [];

      rows.forEach(row => {
        const name = row.querySelector(".accessory-name")?.value.trim();
        const stock = row.querySelector(".accessory-qty")?.value.trim();
        const specification = row.querySelector(".accessory-specification")?.value.trim();
        const rent_status = row.querySelector(".accessory-rent-status-input")?.value.trim();
        const price = row.querySelector(".accessory-price")?.value.trim();

        if (name && stock && specification && rent_status && price) {
          accessories.push({
            name: name,
            stock: stock,
            specification: specification,
            rent_status: rent_status,
            unit_price: price
          });
        }
      });

      // Set JSON string to hidden input
      document.getElementById("addaccessoriesInput").value = JSON.stringify(accessories);
    });
  </script>


  <script>
    function editAsset(asset) {


      document.getElementById('myLargeModalLabel').textContent = "Edit Assign Assets";

      // Update form action to update URL
      const form = document.getElementById("assetForm");
      form.action = "<?= base_url('updateassign') ?>/" + asset.assign_asset_id;

      // Set all input values
      document.getElementById("grnInput").value = asset.grn_no || '';
      document.getElementById("assetTypeInput").value = asset.asset_type || '';
      document.getElementById("assetMakeInput").value = asset.asset_make || '';
      document.getElementById("employee_name").value = asset.employee_name || '';
      document.getElementById("assigned_by").value = asset.assigned_by || '';
      document.getElementById("machine_name").value = asset.machine_name || '';
      document.getElementById("partNumberInput").value = asset.part_name || '';
      document.getElementById("qty_assigned").value = asset.qty_assigned || '';
      document.getElementById("issued_date").value = asset.issued_date || '';
      document.getElementById("return_date").value = asset.return_date || '';
      document.getElementById("remarks").value = asset.remarks || '';
      document.getElementById("calibration_id").value = asset.calibration_id || '';


      // Accessories
      const container = document.getElementById("addaccessory-container");
      container.innerHTML = ''; // Clear previous

      let accessories = asset.accessories;
      //console.log(accessories);
      if (typeof accessories === 'string') {
        try {
          accessories = JSON.parse(accessories);
          console.log(accessories);
        } catch (e) {
          accessories = [];
        }
      }

      if (Array.isArray(accessories)) {

        accessories.forEach(item => {

          const row = document.createElement('div');
          row.className = 'row g-2 mb-2';
          row.innerHTML = `
      <div class="col-md-3">
        <label>Accessory Name</label>
        <input type="text" class="form-control accessory-name" placeholder="" value="${item.name}" required>
      </div>
       <div class="col-md-2">
        <label>Specification</label>
        <input type="text" class="form-control accessory-specification" placeholder=""  value="${item.specification}"required>
      </div>
      <div class="col-md-2">
        <label>Stock</label>
        <input type="number" class="form-control accessory-qty" placeholder="" value="${item.stock}" required>
      </div>
     
      <div class="col-md-2">
        <label>Rent Status</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle accessory-rent-status-input" placeholder="In/Out" value="${item.rent_status}"data-bs-toggle="dropdown" aria-expanded="false" readonly required />
          <ul class="dropdown-menu p-2 w-100" style="max-height: 150px; overflow-y: auto;">
            <div class="dropdown-item" data-value="In">In</div>
            <div class="dropdown-item" data-value="Out">Out</div>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <label>Price</label>
        <input type="number" class="form-control accessory-price" placeholder="" value="${item.unit_price}" required>
      </div>
      <div class="col-md-1 d-flex align-items-center mt-4">
        <button type="button" class="btn btn-lg" onclick="this.closest('.row').remove()">
          <i class="bi bi-trash text-danger"></i>
        </button>
      </div>
    `;

          container.appendChild(row);
          const dropdownItems = row.querySelectorAll(".dropdown-item");
          const input = row.querySelector(".accessory-type-input");

          dropdownItems.forEach(item => {
            item.addEventListener("click", () => {
              input.value = item.getAttribute("data-value");
            });
          });
        });
      }




    }

    // Reset modal form when closed
    document.getElementById('vertical-center-scroll-modal').addEventListener('hidden.bs.modal', function () {
      document.getElementById('myLargeModalLabel').textContent = "Add Assign Assets";
      const form = document.getElementById('assetForm');
      form.reset();
      document.getElementById('addaccessory-container').innerHTML = '';
      form.action = "<?= base_url('assign'); ?>"; // Reset to "Add" mode

    }); 
  </script>



</body>


</html>
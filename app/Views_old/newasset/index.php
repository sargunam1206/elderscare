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

  <title>MatDash Bootstrap Admin</title>
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

  <style>
    .modal-dialog-scrollable .modal-body {
      max-height: calc(100vh - 200px);
      overflow-y: auto;
    }


    .dropdown {
      position: relative;
      width: 100%;
    }

    .dropdown-menu {
      width: 100% !important;
      left: 0 !important;
      right: 0 !important;
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
                <li class="sidebar-item ">
                  <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                    <span class="hide-menu">Admin</span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <!-- Asset Type -->
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="hide-menu">Asset Type</span>
                      </a>
                      <ul aria-expanded="false" class="collapse second-level">
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('assettype'); ?>">
                            <span class="icon-small"></span>Add Asset Type
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('viewassettype'); ?>">
                            <span class="icon-small"></span>View Asset Type
                          </a>
                        </li>
                      </ul>
                    </li>

                    <!-- Asset Make -->
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="hide-menu">Asset Make</span>
                      </a>
                      <ul aria-expanded="false" class="collapse second-level">
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('assetmake'); ?>">
                            <span class="icon-small"></span>Add Asset Make
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('viewassetmake'); ?>">
                            <span class="icon-small"></span>View Asset Make
                          </a>
                        </li>
                      </ul>
                    </li>

                    <!-- Dealer Name -->
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="hide-menu">Dealer Name</span>
                      </a>
                      <ul aria-expanded="false" class="collapse second-level">
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('dealers'); ?>">
                            <span class="icon-small"></span>Add Dealer Name
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('viewdealers'); ?>">
                            <span class="icon-small"></span>View Dealer Name
                          </a>
                        </li>
                      </ul>
                    </li>

                    <!-- UOM -->
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="hide-menu">UOM</span>
                      </a>
                      <ul aria-expanded="false" class="collapse second-level">
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('uom'); ?>">
                            <span class="icon-small"></span>Add UOM
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="<?= base_url('viewuom'); ?>">
                            <span class="icon-small"></span>View UOM
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-item ">
                  <a class="sidebar-link has-arrow" href="<?= base_url(); ?>" aria-expanded="false">

                    <span class="hide-menu">Assets </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a class="sidebar-link" href="<?= base_url('asset1'); ?>">
                        <span class="icon-small"></span>Add Assets
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link" href="<?= base_url('viewasset'); ?>">
                        <span class="icon-small"></span>View Assets
                      </a>
                    </li>

                  </ul>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow" href="<?= base_url(); ?>/public/dist/main/eco-shop.html">
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
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link" href="http://freelance.neuralarc.com/digitalflow/" target="_blank">
                    <span class="hide-menu">Employee</span>
                  </a>
                </li>


                <!--
                <li class="sidebar-item ">
                  <a class="sidebar-link has-arrow" href="<//?= base_url(); ?>/public/dist/main/index3.html" aria-expanded="false">
                    
                    <span class="hide-menu">Assigned Assets</span>
                  </a>
                     <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<//?= base_url('assignedassets'); ?>">
                          <span class="icon-small"></span>Add Assigned Info
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="//<//?= base_url('viewassignedassets'); ?>">
                          <span class="icon-small"></span>View Assigned Info
                        </a>
                      </li>
                     
                    </ul>
                </li>


               
                    <li class="sidebar-item  ">
                      <a class="sidebar-link has-arrow" href="<//?= base_url(); ?>/public/dist/main/eco-shop-detail.html">
                         <span class="hide-menu">Depreciation </span>
                      </a>
                       <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<//?= base_url('depreciation'); ?>">
                          <span class="icon-small"></span>Add Depreciation Info
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<//?= base_url('viewdepreciation'); ?>">
                          <span class="icon-small"></span>View Depreciation Info
                        </a>
                      </li>
                     
                    </ul>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="<//?= base_url(); ?>/public/dist/main/eco-product-list.html">
                      <span class="hide-menu">Return</span>
                      </a>
                       <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<//?= base_url('return'); ?>">
                          <span class="icon-small"></span>Add Return Info
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<//?= base_url('viewreturn'); ?>">
                          <span class="icon-small"></span>View Return Info
                        </a>
                      </li>
                    
                    </ul>
                    </li>
-->



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
              <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg" alt="matdash-img" />
            </div>
            <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
              data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)"
                      class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                      aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                      style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>

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
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)"
                      class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                      aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout" href="javascript:void(0)"
                      style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>

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
                  <h4 class="mb-4 mb-md-0 card-title">Assets</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex"
                          href="<?= base_url(); ?>/public/dist/main/index.html">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Assets
                        </span>

                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>




          <!-- Add Asset Modal -->
          <div class="modal fade" id="addAssetModal" tabindex="-1" aria-labelledby="addAssetModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
              <div class="modal-content">
                <form method="post" action="<?= base_url('asset1'); ?>" enctype="multipart/form-data">
                  <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="addAssetModalLabel">Add Assets</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <!-- Replace col-6 with col-md-4 to create 3-column layout -->
                        <div class="col-md-4 ">
                          <!-- Paste first third of the fields here -->
                          <!-- Example -->
                          <div class="mb-3 position-relative">
                            <label for="asset_type" class="form-label">Asset Type</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="asset_type"
                                id="assetTypeInput" placeholder="Select Asset Type" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" readonly />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetTypeInput"
                                style="max-height: 150px; overflow-y: auto; min-width: 100%;">
                                <input type="text" class="form-control mb-2" id="assetTypeSearch"
                                  placeholder="Search Asset Type" autocomplete="off" />
                                <div id="assetTypeLists" style="width: 100%;"></div>
                              </ul>
                            </div>
                          </div>



                          <!-- Repeat for other fields in this column -->

                          <div class="mb-3">
                            <label for="asset_make" class="form-label">Asset Make</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="asset_make"
                                id="assetMakeInput" placeholder="Select Asset Make" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" readonly />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetMakeInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="assetMakeSearch"
                                  placeholder="Search Asset Make" autocomplete="off" />
                                <div id="assetMakeLists" style="width: 100%;">
                                  <!-- Dynamic asset make list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="dealer_name" class="form-label">Dealer Name</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="dealer_name"
                                id="dealerNameInput" placeholder="Select Dealer Name" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" readonly />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="dealerNameInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="dealerSearch"
                                  placeholder="Search Dealer Name" autocomplete="off" />
                                <div id="dealerLists" style="width: 100%;">
                                  <!-- Dynamic dealer list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="material" class="form-label">Material</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="material"
                                id="materialInput" placeholder="Enter or Select Material" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="materialInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="materialSearch"
                                  placeholder="Search Material" autocomplete="off" />
                                <div id="materialLists" style="width: 100%;">
                                  <!-- Dynamic material list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="customer_name" class="form-label">Customer Name</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="customer_name"
                                id="customerNameInput" placeholder="Enter or Select Customer Name"
                                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="customerNameInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="customerNameSearch"
                                  placeholder="Search Customer" autocomplete="off" />
                                <div id="customerLists" style="width: 100%;">
                                  <!-- Dynamic customer list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>





                          <div class="mb-3">
                            <label for="part_name" class="form-label">Part Name</label>
                            <input type="text" class="form-control" name="part_name" id="part_name"
                              placeholder="Enter the Part Name" autocomplete="off" />
                          </div>

                           <div class="mb-3">
                          <label for="grn" class="form-label">GRN</label>
                          <input type="text" class="form-control" name="grn" id="grn"
                            value="<?= isset($grn) ? $grn : ''; ?>" />
                        </div>

                        </div>

                        <div class="col-md-4">
                          <div class="mb-3">
                            <label for="part_name" class="form-label">Part Number</label>
                            <input type="text" class="form-control" name="part_number" id="part_name"
                              placeholder="Enter the Part Number" autocomplete="off" />
                          </div>

                          <div class="mb-3">
                            <label for="current_stock" class="form-label">Current Stock</label>
                            <input type="text" class="form-control" name="current_stock" id="current_stock"
                              placeholder="Enter Current Stock" autocomplete="off" />
                          </div>

                          <div class="mb-3">
                            <label for="reorder_level" class="form-label">Reorder Level</label>
                            <input type="text" class="form-control" name="reorder_level" id="reorder_level"
                              placeholder="Enter the Reorder Level" autocomplete="off" />
                          </div>

                          <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="location"
                                id="locationInput" placeholder="Enter or Select Location" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="locationInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="locationSearch"
                                  placeholder="Search Location" autocomplete="off" />
                                <div id="locationLists" style="width: 100%;">
                                  <!-- Dynamic location list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="part_name" class="form-label">Room</label>
                            <input type="text" class="form-control" name="room" id="part_name"
                              placeholder="Enter the Room" autocomplete="off" />
                          </div>

                          <div class="mb-3">
                            <label for="part_name" class="form-label">Purpose</label>
                            <input type="text" class="form-control" name="purpose" id="part_name"
                              placeholder="Enter the Purpose" autocomplete="off" />
                          </div>

                          <div class="mb-3">
                          <label for="specification" class="form-label">Specification</label>
                          <input type="text" class="form-control" name="specification" id="specification"
                            placeholder="Enter the specification" autocomplete="off" />
                        </div>
                          <!-- Paste second third of the fields here -->
                        </div>

                        <div class="col-md-4">
                          <div class="mb-3">
                            <label for="serial_id" class="form-label">Serial Id</label>
                            <input type="text" class="form-control" name="serial_id" id="serial_id"
                              placeholder="Enter Serial Id" autocomplete="off" />
                          </div>

                          <div class="mb-3">
                            <label for="calibration_id" class="form-label">Calibration Id</label>
                            <input type="text" class="form-control" name="calibration_id" id="calibration_id"
                              placeholder="Enter Calibration Id" autocomplete="off" />
                          </div>

                          <div class="mb-3">
                            <label for="conno2" class="form-label">Resharpen</label>
                            <select name="resharpening" class="form-control">
                              <option value="">Select Resharpen</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                            </select>
                          </div>

                          <div class="mb-3">
                            <label for="uom" class="form-label">Unit of Measurement (UOM)</label>
                            <div class="dropdown">
                              <input type="text" class="form-control dropdown-toggle w-100" name="uom" id="uomInput"
                                placeholder="Select Unit of Measurement (UOM)" data-bs-toggle="dropdown"
                                aria-expanded="false" autocomplete="off" readonly />
                              <ul class="dropdown-menu p-3 w-100" aria-labelledby="uomInput"
                                style="max-height: 150px; overflow-y: auto;">
                                <!-- Search box inside the dropdown -->
                                <input type="text" class="form-control mb-2" id="uomSearch" placeholder="Search UOM"
                                  autocomplete="off" />
                                <div id="uomLists" style="width: 100%;">
                                  <!-- Dynamic UOM list will be populated here -->
                                </div>
                              </ul>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="grade" class="form-label">Grade</label>
                            <input type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade"
                              autocomplete="off" />
                          </div>

                          <div class="mb-3">
                            <label for="asset_image" class="form-label">Asset Image</label>
                            <input type="file" name="asset_image" id="asset_image" class="form-control"
                              accept="image/*">
                          </div>
                          <!-- Paste remaining third of the fields here -->
                        </div>
                      </div>
<div class="col-12" id="accessories-section">
  <div class="mb-3">
    <label class="form-label">Accessories</label>
    <div id="accessory-container"></div>
    <button type="button" class="btn btn-primary mt-2" onclick="addAccessory()">+ Add Accessory</button>
    <input type="hidden" name="accessories" id="accessoriesInput" />
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




          <div class="datatables">
            <!-- start Add Row -->





            <!-- end Row selection (multiple rows) -->
            <!-- start Form Inputs -->
            <div class="card">
              <div class="card-body">
                <div class="card">
                  <div class="card-body">


                    <?php
                    $session = \Config\Services::session();
                    if ($session->getFlashdata('success')): ?>
                      <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
                        <div class="d-flex align-items-center text-primary">
                          <i class="ti ti-info-circle me-2 fs-4"></i>
                          <?= $session->getFlashdata('success'); ?>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url('viewasset'); ?>">
                      <div class="row">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="card-title mb-0">Assets Management</h4>

                          <!-- Button to open the modal -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addAssetModal">
                            Add Asset
                          </button>

                        </div>

                        <!--div class="col-md-2">
            <label for="from_date" class="form-label">From Date</label>
            <input type="date" class="form-control" name="from_date" id="from_date">
        </div>
        <div class="col-md-2">
            <label for="to_date" class="form-label">To Date</label>
            <input type="date" class="form-control" name="to_date" id="to_date">
        </div>
        <div class="col-md-4 d-flex align-items-end" style="gap: 10px;">
            <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
               <form method="post" action="<?= base_url('asset/download'); ?>">
        <button type="submit" name="submit" value="download" class="btn btn-primary">Download PDF</button>
        </form>

            <button type="submit" name="submit" value="excel" formaction="<?= base_url('asset/downloadexcel'); ?>" class="btn btn-primary">Excel</button-->
                        <!-- Excel Button -->
                        <!--/div>
    </div-->
                        <!--form method="post" action="//?= base_url('asset/download'); ?>">
    <div class="row col-md-2">
        <button type="submit" name="submit" value="download" class="btn btn-primary">Download PDF</button>
    </div>
</form>
<form action="<//?= site_url('asset/downloadexcel') ?>" method="post">
    <button type="submit" name="submit" value="downloadexcel" class="btn btn-success">Download Excel</button>
</form-->

                    </form>



                    <div class="table-responsive mt-3">
                      <table class="table table-borderless w-100">
                        <!-- First Row -->
                        <tr>
                          <td class="p-1">
                            <div class="dropdown">
                              <button class="btn btn-info dropdown-toggle w-100" type="button" id="assetTypeDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Asset Type
                              </button>
                              <ul class="dropdown-menu p-3" aria-labelledby="assetTypeDropdown"
                                style="max-height: 200px; overflow-y: auto;">
                                <input type="text" class="form-control mb-2 w-100" id="assetTypeSearch"
                                  placeholder="Search Asset Type" autocomplete="off" />
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="selectAllAssetTypes" />
                                  <label class="form-check-label" for="selectAllAssetTypes">All</label>
                                </div>
                                <div id="assetTypeList">
                                  <!-- Dynamic asset type checkboxes will be populated here -->
                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn btn-light btn-sm w-100" id="applyAssetFilters">Apply
                                    Filters</button>
                                </div>
                              </ul>
                            </div>
                          </td>
                          <td class="p-1">
                            <div class="dropdown">
                              <button class="btn btn-info dropdown-toggle w-100" type="button" id="assetMakeDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Asset Make
                              </button>
                              <ul class="dropdown-menu p-3" aria-labelledby="assetMakeDropdown"
                                style="max-height: 200px; overflow-y: auto;">
                                <input type="text" class="form-control mb-2 w-100" id="assetMakeSearch"
                                  placeholder="Search Asset Makes" autocomplete="off" />
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="selectAllAssetMakes" />
                                  <label class="form-check-label" for="selectAllAssetMakes">Select All</label>
                                </div>
                                <div id="assetMakeList">
                                  <!-- Dynamic asset make checkboxes will be populated here -->
                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply
                                    Filters</button>
                                </div>
                              </ul>
                            </div>
                          </td>

                          <td class="p-1">
                            <div class="dropdown">
                              <button class="btn btn-info dropdown-toggle w-100" type="button" id="MaterialDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Material
                              </button>
                              <ul class="dropdown-menu p-3" aria-labelledby="MaterialDropdown"
                                style="max-height: 200px; overflow-y: auto;">
                                <input type="text" class="form-control mb-2 w-100" id="MaterialsSearch"
                                  placeholder="Search Materials" autocomplete="off" />
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="selectAllMaterials" />
                                  <label class="form-check-label" for="selectAllMaterials">Select All</label>
                                </div>
                                <div id="materialList">
                                  <!-- Dynamic material checkboxes will be populated here -->
                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply
                                    Filters</button>
                                </div>
                              </ul>
                            </div>
                          </td>
                          <td class="p-1">
                            <div class="dropdown">
                              <button class="btn btn-info dropdown-toggle w-100" type="button" id="PartnumberDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Part Name
                              </button>
                              <ul class="dropdown-menu p-3" aria-labelledby="PartnumberDropdown"
                                style="max-height: 200px; overflow-y: auto;">
                                <input type="text" class="form-control mb-2 w-100" id="PartnumbersSearch"
                                  placeholder="Search Part Name" autocomplete="off" />
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="selectAllPartNumber" />
                                  <label class="form-check-label" for="selectAllPartNumber">Select All</label>
                                </div>
                                <div id="partnumberList">
                                  <!-- Dynamic part number checkboxes will be populated here -->
                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply
                                    Filters</button>
                                </div>
                              </ul>
                            </div>
                          </td>

                          <td class="p-1">
                            <!-- <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="supplierDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Supplier Name
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="supplierDropdown" style="max-height: 200px; overflow-y: auto;">
          <input type="text" class="form-control mb-2 w-100" id="supplierSearch" placeholder="Search Suppliers" autocomplete="off" />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllSuppliers" />
            <label class="form-check-label" for="selectAllSuppliers">Select All</label>
          </div>
          <div id="supplierList-->
                            <!-- Dynamic supplier checkboxes will be populated here -->
                            <!--/div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div> -->
                          </td>
                          <td class="p-1">
                            <button type="button" class="btn btn-primary w-100" style="color: #f8f9fa;"
                              id="resetFiltersBtn">
                              Reset Filters
                            </button>

                            <div class="dropdown">
                              <!-- <button class="btn btn-info dropdown-toggle w-100" type="button" id="dealerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      Dealer Name
    </button> -->
                              <ul class="dropdown-menu p-3" aria-labelledby="dealerDropdown"
                                style="max-height: 200px; overflow-y: auto;">
                                <input type="text" class="form-control mb-2 w-100" id="dealerSearch"
                                  placeholder="Search Dealers" autocomplete="off" />
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="selectAllDealers" />
                                  <label class="form-check-label" for="selectAllDealers">Select All</label>
                                </div>
                                <div id="dealerList">

                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn btn-light btn-sm w-100" id="applyDealerFilters">Apply
                                    Filters</button>
                                </div>
                              </ul>
                            </div>
                          </td>


                          <!-- <td class="p-1">
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="customerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Customer
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="customerDropdown" style="max-height: 200px; overflow-y: auto;">
          <input type="text" class="form-control mb-2 w-100" id="CustomersSearch" placeholder="Search Customers" autocomplete="off" />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllCustomers" />
            <label class="form-check-label" for="selectAllCustomers">Select All</label>
          </div>
          <div id="customerList">
            
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div>
    </td> -->
                        </tr>
                        <!-- Second Row -->
                        <tr>
                          <td class="p-1">
                            <!-- <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> Delete</a> -->
                          </td>
                          <td class="p-1">
                            <!-- <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="locationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Location
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="locationDropdown" style="max-height: 200px; overflow-y: auto;">
          <input type="text" class="form-control mb-2 w-100" id="locationSearch" placeholder="Search Locations" autocomplete="off" />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllLocations" />
            <label class="form-check-label" for="selectAllLocations">Select All</label>
          </div>
          <div id="locationList">
           
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div> -->
                          </td>
                          <td class="p-1">
                            <!-- <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="roomDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Room
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="roomDropdown" style="max-height: 200px; overflow-y: auto;">
          <input type="text" class="form-control mb-2 w-100" id="roomSearch" placeholder="Search Rooms" autocomplete="off" />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllRooms" />
            <label class="form-check-label" for="selectAllRooms">Select All</label>
          </div>
          <div id="roomList">
            
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div> -->
                          </td>
                          <td class="p-1">
                            <!-- <button type="submit" class="btn btn-primary w-100 " id="applyAllFilters" style="color: #f8f9fa;">
      Apply All
    </button>  -->
                          </td>
                          <td class="p-1">
                            <!-- <button type="submit" name="submit" value="download" formtarget="_blank" formaction="<?= base_url('asset/download'); ?>" class="btn btn-primary">Download PDF</button>  -->
                            <form method="post" action="<?= base_url('asset/download'); ?>" target="_blank">
                              <!-- <button type="submit" name="submit" value="download" class="btn btn-primary">Download PDF</button> -->
                            </form>
                          </td>
                          <td class="p-1">
                            <!-- <button type="submit" name="submit" value="excel" formaction="<?= base_url('asset/downloadexcel'); ?>" class="btn btn-primary"> Download Excel</button>   -->

                          </td>
                        </tr>

                      </table>



                      <table id="form_inputs"
                        class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                        <thead>
                          <tr>
                            <th><input type="checkbox" id="select_all"></th> <!-- Select all checkbox -->
                            <th>Asset Type</th>
                            <!--<th>Asset Name</th>-->
                            <th>Asset Make</th>
                            <!--<th>Supplier Name</th>-->
                            <th>Specification</th>
                            <th>Current Stock</th>
                            <!--<th>Material</th>-->
                            <!--<th>Asset Image</th>-->
                            <!--<th>Part Name</th>-->
                            <!--<th>Part Number</th>-->
                            <!--<th>Customer Name</th>-->
                            <!--<th>Quantity</th>-->
                            <!--<th>Reorder Level</th>-->
                            <!--<th>Location</th>-->
                            <!--<th>Room</th>-->
                            <th>GRN</th>
                            <th>Options</th>
                          </tr>


                        </thead>
                        <tbody>
                          <?php if (!empty($assets)): ?>
                            <?php foreach ($assets as $index => $asset): {
                              $base = base64_encode(base64_encode(base64_encode($asset['id'])));
                              ?>
                                <tr>
                                  <td><input type="checkbox" class="row_checkbox" data-asset-id="<?= $asset['id']; ?>"></td>
                                  <td><?= $asset['asset_type']; ?></td>
                                  <!--  <td><//?= $asset['asset_name']; ?></td>-->
                                  <td><?= $asset['asset_make']; ?></td>
                                  <!--<td><//?= $asset['supplier_name']; ?></td>-->
                                  <td><?= $asset['specification']; ?></td>
                                  <td><?= $asset['current_stock']; ?></td>
                                  <!--<td><//?= $asset['material']; ?></td>-->
                                  <!--<td>
            <//?php if (!empty($asset['asset_image'])): ?>
              <img src="<//?= base_url($asset['asset_image']); ?>" alt="Asset Image" height="100" width="100">
                <br>
              <a href="<//?= base_url($asset['asset_image']); ?>" target="_blank">View Full Image</a>
              <//?php else: ?>
              <span class="text-muted">No Image</span>
              <//?php endif; ?>
            </td>-->
                                  <!--<td><//?= $asset['part_name']; ?></td>-->
                                  <!-- <td><//?= $asset['part_number']; ?></td>-->
                                  <!--<td><//?= $asset['customer_name']; ?></td>-->
                                  <!--<td><//?= $asset['quantity']; ?></td>-->
                                  <!--<td><//?= $asset['reorder_level']; ?></td>-->
                                  <!--<td><//?= $asset['location']; ?></td>-->
                                  <!--<td><//?= $asset['room']; ?></td>-->
                                  <td><?= $asset['grn']; ?></td>
                                  <td><a href="<?= base_url('editasset/' . $base); ?>" class="btn btn-info">Update</a></td>
                                </tr>
                              <?php } ?>
                            <?php endforeach; ?>
                          <?php else: ?>

                          <?php endif; ?>

                        </tbody>
                        <tfoot>
                          <!-- start row -->
                          <!-- start row -->
                          <tr>
                            <th></th>
                            <th>Asset Type</th>
                            <!--<th>Asset Name</th>-->
                            <th>Asset Make</th>
                            <!--<th>Supplier Name</th>-->
                            <th>Specification</th>
                            <th>Current Stock</th>
                            <!--<th>Material</th>-->
                            <!--<th>Asset Image</th>-->
                            <!--<th>Part Name</th>-->
                            <!--<th>Part Number</th>-->
                            <!--<th>Customer Name</th>-->
                            <!--<th>Quantity</th>-->
                            <!--<th>Reorder Level</th>-->
                            <!--<th>Location</th>-->
                            <!--<th>Room</th>-->
                            <th>GRN</th>
                            <th>Options</th>
                          </tr>
                          <!-- end row -->
                        </tfoot>

                      </table>
                    </div>


                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
                      aria-labelledby="deleteModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to delete the selected rows?
                          </div>
                          <div class="modal-footer">

                            <button id="confirm_delete" type="button" class="btn btn-danger">Delete</button>
                            <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>-->
                          </div>
                        </div>
                      </div>
                    </div>





                  </div>
                </div>
              </div>
              <!-- end Row selection and deletion (single row) -->
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

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
              onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
              autocomplete="off" />
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

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
              autocomplete="off" />
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

      <script>

        // Fetch all dealers initially
        fetch('<?= base_url('asset1/all_dealers'); ?>')
          .then((response) => response.json())
          .then((dealers) => {
            const dealerList = document.getElementById('dealerList');
            const selectedDealers = new Set(); // To keep track of selected dealers

            dealers.forEach((dealer) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input dealer-checkbox" type="checkbox" name="dealer_filters[]" value="${dealer.dealer_name}" id="dealer${dealer.dealer_name}" />
          <label class="form-check-label" for="dealer${dealer.dealer_name}">
            ${dealer.dealer_name}
          </label>
        </div>
      `;
              dealerList.appendChild(listItem);
            });

            // Check previously selected dealers based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedDealers')) || [];
            initialSelected.forEach((dealerName) => {
              const checkbox = document.getElementById(`dealer${dealerName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedDealers.add(dealerName); // Mark the dealer as selected
              }
            });

            // Store the selected dealers to localStorage when the user changes the checkbox state
            document.querySelectorAll('.dealer-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedDealers.add(checkbox.value);
                } else {
                  selectedDealers.delete(checkbox.value);
                }
                localStorage.setItem('selectedDealers', JSON.stringify(Array.from(selectedDealers)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching dealers:', error);
          });

        // Handle search input to filter dealers
        document.getElementById('dealerSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase(); // Case-insensitive search

          const dealerCheckboxes = document.querySelectorAll('.dealer-checkbox');
          dealerCheckboxes.forEach((checkbox) => {
            const dealerName = checkbox.nextElementSibling.textContent.toLowerCase();

            if (dealerName.includes(query)) {
              checkbox.parentElement.style.display = 'block'; // Show matching dealer
            } else {
              checkbox.parentElement.style.display = 'none'; // Hide non-matching dealer
            }
          });
        });

        // Handle "Apply Filters" button to filter dealers
        document.getElementById('applyDealerFilters').addEventListener('click', function () {
          const selectedDealers = [];
          const dealerCheckboxes = document.querySelectorAll('.dealer-checkbox:checked');

          // Save the currently checked dealers
          dealerCheckboxes.forEach((checkbox) => {
            selectedDealers.push(checkbox.value); // Collect selected dealers
          });

          // Hide or show the dealers based on the selected filters
          const dealerCheckboxesAll = document.querySelectorAll('.dealer-checkbox');
          dealerCheckboxesAll.forEach((checkbox) => {
            // If the checkbox is in the selected list, show it, otherwise hide it
            if (selectedDealers.includes(checkbox.value)) {
              checkbox.parentElement.style.display = 'block'; // Show selected dealer
            } else {
              checkbox.parentElement.style.display = 'none'; // Hide non-selected dealer
            }
          });

          // Reapply the checked state to the checkboxes
          dealerCheckboxesAll.forEach((checkbox) => {
            if (selectedDealers.includes(checkbox.value)) {
              checkbox.checked = true; // Keep checked if it was selected before applying filters
            }
          });

          // Save the selected dealers to localStorage after applying filters
          localStorage.setItem('selectedDealers', JSON.stringify(selectedDealers));
        });

        // Handle "Select All" checkbox for dealers
        document.getElementById('selectAllDealers').addEventListener('change', function () {
          const dealerCheckboxes = document.querySelectorAll('#dealerList .form-check-input');
          dealerCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });

        // Fetch all suppliers initially
        /*fetch('</?= base_url('asset1/all_suppliers'); ?>')
          .then((response) => response.json())
          .then((suppliers) => {
            const supplierList = document.getElementById('supplierList');
            const selectedSuppliers = new Set();  // To keep track of selected suppliers
        
            suppliers.forEach((supplier) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
                <div class="form-check">
                  <input class="form-check-input supplier-checkbox" type="checkbox" name="supplier_filters[]" value="${supplier.supplier_name}" id="supplier${supplier.supplier_name}" />
                  <label class="form-check-label" for="supplier${supplier.supplier_name}">
                    ${supplier.supplier_name}
                  </label>
                </div>
              `;
              supplierList.appendChild(listItem);
            });
        
            // Check previously selected suppliers based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedSuppliers')) || [];
            initialSelected.forEach((supplierName) => {
              const checkbox = document.getElementById(`supplier${supplierName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedSuppliers.add(supplierName);  // Mark the supplier as selected
              }
            });
        
            // Store the selected suppliers to localStorage when the user changes the checkbox state
            document.querySelectorAll('.supplier-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedSuppliers.add(checkbox.value);
                } else {
                  selectedSuppliers.delete(checkbox.value);
                }
                localStorage.setItem('selectedSuppliers', JSON.stringify(Array.from(selectedSuppliers)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching suppliers:', error);
          });
        
        // Handle search input to filter suppliers
        document.getElementById('supplierSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search
        
          const supplierCheckboxes = document.querySelectorAll('.supplier-checkbox');
          supplierCheckboxes.forEach((checkbox) => {
            const supplierName = checkbox.nextElementSibling.textContent.toLowerCase();
        
            if (supplierName.includes(query)) {
              checkbox.parentElement.style.display = 'block';  // Show matching supplier
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-matching supplier
            }
          });
        });
        
        // Handle "Apply Filters" button to filter suppliers
        document.getElementById('applyFilters').addEventListener('click', function () {
          const selectedSuppliers = [];
          const supplierCheckboxes = document.querySelectorAll('.supplier-checkbox:checked');
        
          // Save the currently checked suppliers
          supplierCheckboxes.forEach((checkbox) => {
            selectedSuppliers.push(checkbox.value);  // Collect selected suppliers
          });
        
          // Hide or show the suppliers based on the selected filters
          const supplierCheckboxesAll = document.querySelectorAll('.supplier-checkbox');
          supplierCheckboxesAll.forEach((checkbox) => {
            // If the checkbox is in the selected list, show it, otherwise hide it
            if (selectedSuppliers.includes(checkbox.value)) {
              checkbox.parentElement.style.display = 'block';  // Show selected supplier
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-selected supplier
            }
          });
        
          // Reapply the checked state to the checkboxes
          supplierCheckboxesAll.forEach((checkbox) => {
            if (selectedSuppliers.includes(checkbox.value)) {
              checkbox.checked = true;  // Keep checked if it was selected before applying filters
            }
          });
        
          // Save the selected suppliers to localStorage after applying filters
          localStorage.setItem('selectedSuppliers', JSON.stringify(selectedSuppliers));
        });
        
        // Handle "Select All" checkbox
        document.getElementById('selectAllSuppliers').addEventListener('change', function () {
          const supplierCheckboxes = document.querySelectorAll('#supplierList .form-check-input');
          supplierCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });*/




        // Fetch all asset types initially
        fetch('<?= base_url('asset1/all_asset_types'); ?>')
          .then((response) => response.json())
          .then((assetTypes) => {
            const assetTypeList = document.getElementById('assetTypeList');
            const selectedAssetTypes = new Set();  // To keep track of selected asset types

            assetTypes.forEach((assetType) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input asset-type-checkbox" type="checkbox" name="asset_type_filters[]" value="${assetType.asset_type}" id="assetType${assetType.asset_type}" />
          <label class="form-check-label" for="assetType${assetType.asset_type}">
            ${assetType.asset_type} <!-- Use the correct property here -->
          </label>
        </div>
      `;
              assetTypeList.appendChild(listItem);
            });

            // Check previously selected asset types based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedAssetTypes')) || [];
            initialSelected.forEach((assetTypeName) => {
              const checkbox = document.getElementById(`assetType${assetTypeName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedAssetTypes.add(assetTypeName);  // Mark the asset type as selected
              }
            });

            // Store the selected asset types to localStorage when the user changes the checkbox state
            document.querySelectorAll('.asset-type-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedAssetTypes.add(checkbox.value);
                } else {
                  selectedAssetTypes.delete(checkbox.value);
                }
                localStorage.setItem('selectedAssetTypes', JSON.stringify(Array.from(selectedAssetTypes)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching asset types:', error);
          });

        // Handle search input to filter asset types
        document.getElementById('assetTypeSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search

          const assetTypeCheckboxes = document.querySelectorAll('.asset-type-checkbox');
          assetTypeCheckboxes.forEach((checkbox) => {
            const assetTypeName = checkbox.nextElementSibling.textContent.toLowerCase();

            if (assetTypeName.includes(query)) {
              checkbox.parentElement.style.display = 'block';  // Show matching asset type
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-matching asset type
            }
          });
        });

        // Handle "Apply Filters" button to filter asset types
        document.getElementById('applyFilters').addEventListener('click', function () {
          const selectedAssetTypes = [];
          const assetTypeCheckboxes = document.querySelectorAll('.asset-type-checkbox:checked');

          // Save the currently checked asset types
          assetTypeCheckboxes.forEach((checkbox) => {
            selectedAssetTypes.push(checkbox.value);  // Collect selected asset types
          });

          // Hide or show the asset types based on the selected filters
          const assetTypeCheckboxesAll = document.querySelectorAll('.asset-type-checkbox');
          assetTypeCheckboxesAll.forEach((checkbox) => {
            // If the checkbox is in the selected list, show it, otherwise hide it
            if (selectedAssetTypes.includes(checkbox.value)) {
              checkbox.parentElement.style.display = 'block';  // Show selected asset type
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-selected asset type
            }
          });

          // Reapply the checked state to the checkboxes
          assetTypeCheckboxesAll.forEach((checkbox) => {
            if (selectedAssetTypes.includes(checkbox.value)) {
              checkbox.checked = true;  // Keep checked if it was selected before applying filters
            }
          });

          // Save the selected asset types to localStorage after applying filters
          localStorage.setItem('selectedAssetTypes', JSON.stringify(selectedAssetTypes));
        });

        // Handle "Select All" checkbox
        document.getElementById('selectAllAssetTypes').addEventListener('change', function () {
          const assetTypeCheckboxes = document.querySelectorAll('#assetTypeList .form-check-input');
          assetTypeCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });

        // Fetch all asset makes initially
        fetch('<?= base_url('asset1/all_asset_makes'); ?>')
          .then((response) => response.json())
          .then((assetMakes) => {
            const assetMakeList = document.getElementById('assetMakeList');
            const selectedAssetMakes = new Set();  // To keep track of selected asset makes

            assetMakes.forEach((assetMake) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input asset-make-checkbox" type="checkbox" name="asset_make_filters[]" value="${assetMake.asset_make}" id="assetMake${assetMake.asset_make}" />
          <label class="form-check-label" for="assetMake${assetMake.asset_make}">
            ${assetMake.asset_make} <!-- Use the correct property here -->
          </label>
        </div>
      `;
              assetMakeList.appendChild(listItem);
            });

            // Check previously selected asset makes based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedAssetMakes')) || [];
            initialSelected.forEach((assetMakeName) => {
              const checkbox = document.getElementById(`assetMake${assetMakeName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedAssetMakes.add(assetMakeName);  // Mark the asset make as selected
              }
            });

            // Store the selected asset makes to localStorage when the user changes the checkbox state
            document.querySelectorAll('.asset-make-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedAssetMakes.add(checkbox.value);
                } else {
                  selectedAssetMakes.delete(checkbox.value);
                }
                localStorage.setItem('selectedAssetMakes', JSON.stringify(Array.from(selectedAssetMakes)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching asset makes:', error);
          });

        // Handle search input to filter asset makes
        document.getElementById('assetMakeSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search

          const assetMakeCheckboxes = document.querySelectorAll('.asset-make-checkbox');
          assetMakeCheckboxes.forEach((checkbox) => {
            const assetMakeName = checkbox.nextElementSibling.textContent.toLowerCase();

            if (assetMakeName.includes(query)) {
              checkbox.parentElement.style.display = 'block';  // Show matching asset make
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-matching asset make
            }
          });
        });

        // Handle "Apply Filters" button to filter asset makes
        document.getElementById('applyFilters').addEventListener('click', function () {
          const selectedAssetMakes = [];
          const assetMakeCheckboxes = document.querySelectorAll('.asset-make-checkbox:checked');

          // Save the currently checked asset makes
          assetMakeCheckboxes.forEach((checkbox) => {
            selectedAssetMakes.push(checkbox.value);  // Collect selected asset makes
          });

          // Hide or show the asset makes based on the selected filters
          const assetMakeCheckboxesAll = document.querySelectorAll('.asset-make-checkbox');
          assetMakeCheckboxesAll.forEach((checkbox) => {
            // If the checkbox is in the selected list, show it, otherwise hide it
            if (selectedAssetMakes.includes(checkbox.value)) {
              checkbox.parentElement.style.display = 'block';  // Show selected asset make
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-selected asset make
            }
          });

          // Reapply the checked state to the checkboxes
          assetMakeCheckboxesAll.forEach((checkbox) => {
            if (selectedAssetMakes.includes(checkbox.value)) {
              checkbox.checked = true;  // Keep checked if it was selected before applying filters
            }
          });

          // Save the selected asset makes to localStorage after applying filters
          localStorage.setItem('selectedAssetMakes', JSON.stringify(selectedAssetMakes));
        });

        // Handle "Select All" checkbox for asset makes
        document.getElementById('selectAllAssetMakes').addEventListener('change', function () {
          const assetMakeCheckboxes = document.querySelectorAll('#assetMakeList .form-check-input');
          assetMakeCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });


        // Fetch all materials initially
        fetch('<?= base_url('asset1/all_materials'); ?>')
          .then((response) => response.json())
          .then((materials) => {
            const materialList = document.getElementById('materialList');
            const selectedMaterials = new Set();  // To keep track of selected materials

            materials.forEach((material) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input material-checkbox" type="checkbox" name="material_filters[]" value="${material.material}" id="material${material.material}" />
          <label class="form-check-label" for="material${material.material}">
            ${material.material} <!-- Use the correct property here -->
          </label>
        </div>
      `;
              materialList.appendChild(listItem);
            });

            // Check previously selected materials based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedMaterials')) || [];
            initialSelected.forEach((materialName) => {
              const checkbox = document.getElementById(`material${materialName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedMaterials.add(materialName);  // Mark the material as selected
              }
            });

            // Store the selected materials to localStorage when the user changes the checkbox state
            document.querySelectorAll('.material-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedMaterials.add(checkbox.value);
                } else {
                  selectedMaterials.delete(checkbox.value);
                }
                localStorage.setItem('selectedMaterials', JSON.stringify(Array.from(selectedMaterials)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching materials:', error);
          });

        // Handle search input to filter materials
        document.getElementById('MaterialsSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search

          const materialCheckboxes = document.querySelectorAll('.material-checkbox');
          materialCheckboxes.forEach((checkbox) => {
            const materialName = checkbox.nextElementSibling.textContent.toLowerCase();

            if (materialName.includes(query)) {
              checkbox.parentElement.style.display = 'block';  // Show matching material
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-matching material
            }
          });
        });

        // Handle "Apply Filters" button to filter materials
        document.getElementById('applyFilters').addEventListener('click', function () {
          const selectedMaterials = [];
          const materialCheckboxes = document.querySelectorAll('.material-checkbox:checked');

          // Save the currently checked materials
          materialCheckboxes.forEach((checkbox) => {
            selectedMaterials.push(checkbox.value);  // Collect selected materials
          });

          // Hide or show the materials based on the selected filters
          const materialCheckboxesAll = document.querySelectorAll('.material-checkbox');
          materialCheckboxesAll.forEach((checkbox) => {
            // If the checkbox is in the selected list, show it, otherwise hide it
            if (selectedMaterials.includes(checkbox.value)) {
              checkbox.parentElement.style.display = 'block';  // Show selected material
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-selected material
            }
          });

          // Reapply the checked state to the checkboxes
          materialCheckboxesAll.forEach((checkbox) => {
            if (selectedMaterials.includes(checkbox.value)) {
              checkbox.checked = true;  // Keep checked if it was selected before applying filters
            }
          });

          // Save the selected materials to localStorage after applying filters
          localStorage.setItem('selectedMaterials', JSON.stringify(selectedMaterials));
        });

        // Handle "Select All" checkbox for materials
        document.getElementById('selectAllMaterials').addEventListener('change', function () {
          const materialCheckboxes = document.querySelectorAll('#materialList .form-check-input');
          materialCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });

        // Fetch all part numbers initially
        fetch('<?= base_url('asset1/all_part_numbers'); ?>')
          .then((response) => response.json())
          .then((partnumbers) => {
            const partnumberList = document.getElementById('partnumberList');
            const selectedPartNumbers = new Set();  // To keep track of selected part numbers

            partnumbers.forEach((partnumber) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input partnumber-checkbox" type="checkbox" name="partnumber_filters[]" value="${partnumber.part_name}" id="partnumber${partnumber.part_name}" />
          <label class="form-check-label" for="partnumber${partnumber.part_name}">
            ${partnumber.part_name}
          </label>
        </div>
      `;
              partnumberList.appendChild(listItem);
            });

            // Check previously selected part numbers based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedPartNumbers')) || [];
            initialSelected.forEach((partNumber) => {
              const checkbox = document.getElementById(`partnumber${partNumber}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedPartNumbers.add(partNumber);  // Mark the part number as selected
              }
            });

            // Store the selected part numbers to localStorage when the user changes the checkbox state
            document.querySelectorAll('.partnumber-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedPartNumbers.add(checkbox.value);
                } else {
                  selectedPartNumbers.delete(checkbox.value);
                }
                localStorage.setItem('selectedPartNumbers', JSON.stringify(Array.from(selectedPartNumbers)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching part numbers:', error);
          });

        // Handle search input to filter part numbers
        document.getElementById('PartnumbersSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search

          const partnumberCheckboxes = document.querySelectorAll('.partnumber-checkbox');
          partnumberCheckboxes.forEach((checkbox) => {
            const partnumber = checkbox.nextElementSibling.textContent.toLowerCase();

            if (partnumber.includes(query)) {
              checkbox.parentElement.style.display = 'block';  // Show matching part number
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-matching part number
            }
          });
        });

        // Handle "Select All" functionality
        document.getElementById('selectAllPartNumber').addEventListener('change', function () {
          const partnumberCheckboxes = document.querySelectorAll('#partnumberList .form-check-input');
          partnumberCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });

        // Fetch all customers initially
        fetch('<?= base_url('asset1/all_customers'); ?>')
          .then((response) => response.json())
          .then((customers) => {
            const customerList = document.getElementById('customerList');
            const selectedCustomers = new Set();  // To keep track of selected customers

            // Populate customer list with checkboxes
            customers.forEach((customer) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input customer-checkbox" type="checkbox" name="customer_filters[]" value="${customer.customer_name}" id="customer${customer.customer_name}" />
          <label class="form-check-label" for="customer${customer.customer_name}">
            ${customer.customer_name}
          </label>
        </div>
      `;
              customerList.appendChild(listItem);
            });

            // Check previously selected customers from localStorage
            const initialSelected = JSON.parse(localStorage.getItem('selectedCustomers')) || [];
            initialSelected.forEach((customerName) => {
              const checkbox = document.getElementById(`customer${customerName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedCustomers.add(customerName);  // Mark the customer as selected
              }
            });

            // Store selected customers in localStorage when checkbox state changes
            document.querySelectorAll('.customer-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedCustomers.add(checkbox.value);
                } else {
                  selectedCustomers.delete(checkbox.value);
                }
                localStorage.setItem('selectedCustomers', JSON.stringify(Array.from(selectedCustomers)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching customers:', error);
          });

        // Handle search input to filter customers
        document.getElementById('CustomersSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search

          const customerCheckboxes = document.querySelectorAll('.customer-checkbox');
          customerCheckboxes.forEach((checkbox) => {
            const customerName = checkbox.nextElementSibling.textContent.toLowerCase();

            if (customerName.includes(query)) {
              checkbox.parentElement.style.display = 'block';  // Show matching customer
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-matching customer
            }
          });
        });

        // Handle "Select All" functionality
        document.getElementById('selectAllCustomers').addEventListener('change', function () {
          const customerCheckboxes = document.querySelectorAll('#customerList .form-check-input');
          customerCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all checkboxes based on "Select All"
          });
        });

        // Fetch all locations initially
        fetch('<?= base_url('asset1/all_locations'); ?>')
          .then((response) => response.json())
          .then((locations) => {
            const locationList = document.getElementById('locationList');
            const selectedLocations = new Set();  // To keep track of selected locations

            // Clear the list before appending items
            locationList.innerHTML = '';

            // Iterate over each location to create the list items
            locations.forEach((location) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input location-checkbox" type="checkbox" name="location_filters[]" value="${location.location}" id="location${location.location}" />
          <label class="form-check-label" for="location${location.location}">
            ${location.location}
          </label>
        </div>
      `;
              locationList.appendChild(listItem);
            });

            // Check previously selected locations based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedLocations')) || [];
            initialSelected.forEach((locationName) => {
              const checkbox = document.getElementById(`location${locationName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedLocations.add(locationName);  // Mark the location as selected
              }
            });

            // Store the selected locations to localStorage when the user changes the checkbox state
            document.querySelectorAll('.location-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedLocations.add(checkbox.value);
                } else {
                  selectedLocations.delete(checkbox.value);
                }
                localStorage.setItem('selectedLocations', JSON.stringify(Array.from(selectedLocations)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching locations:', error);
          });

        // Handle search input to filter locations
        document.getElementById('locationSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search

          const locationCheckboxes = document.querySelectorAll('.location-checkbox');
          locationCheckboxes.forEach((checkbox) => {
            const locationName = checkbox.nextElementSibling.textContent.toLowerCase();

            // Show or hide location based on whether it matches the query
            checkbox.parentElement.style.display = locationName.includes(query) ? 'block' : 'none';
          });
        });

        // Handle "Select All" functionality for locations
        document.getElementById('selectAllLocations').addEventListener('change', function () {
          const locationCheckboxes = document.querySelectorAll('#locationList .form-check-input');
          locationCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });

        // Fetch all rooms initially
        fetch('<?= base_url('asset1/all_rooms'); ?>')
          .then((response) => response.json())
          .then((rooms) => {
            const roomList = document.getElementById('roomList');
            const selectedRooms = new Set();  // To keep track of selected rooms

            rooms.forEach((room) => {
              const listItem = document.createElement('li');
              listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input room-checkbox" type="checkbox" name="room_filters[]" value="${room.room}" id="room${room.room}" />
          <label class="form-check-label" for="room${room.room}">
            ${room.room}
          </label>
        </div>
      `;
              roomList.appendChild(listItem);
            });

            // Check previously selected rooms based on the initial state
            const initialSelected = JSON.parse(localStorage.getItem('selectedRooms')) || [];
            initialSelected.forEach((roomName) => {
              const checkbox = document.getElementById(`room${roomName}`);
              if (checkbox) {
                checkbox.checked = true;
                selectedRooms.add(roomName);  // Mark the room as selected
              }
            });

            // Store the selected rooms to localStorage when the user changes the checkbox state
            document.querySelectorAll('.room-checkbox').forEach((checkbox) => {
              checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                  selectedRooms.add(checkbox.value);
                } else {
                  selectedRooms.delete(checkbox.value);
                }
                localStorage.setItem('selectedRooms', JSON.stringify(Array.from(selectedRooms)));
              });
            });
          })
          .catch((error) => {
            console.error('Error fetching rooms:', error);
          });

        // Handle search input to filter rooms
        document.getElementById('roomSearch').addEventListener('input', function () {
          const query = this.value.toLowerCase();  // Case-insensitive search

          const roomCheckboxes = document.querySelectorAll('.room-checkbox');
          roomCheckboxes.forEach((checkbox) => {
            const roomName = checkbox.nextElementSibling.textContent.toLowerCase();

            if (roomName.includes(query)) {
              checkbox.parentElement.style.display = 'block';  // Show matching room
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-matching room
            }
          });
        });

        // Handle "Apply Filters" button to filter rooms
        document.getElementById('applyFilters').addEventListener('click', function () {
          const selectedRooms = [];
          const roomCheckboxes = document.querySelectorAll('.room-checkbox:checked');

          // Save the currently checked rooms
          roomCheckboxes.forEach((checkbox) => {
            selectedRooms.push(checkbox.value);  // Collect selected rooms
          });

          // Hide or show the rooms based on the selected filters
          const roomCheckboxesAll = document.querySelectorAll('.room-checkbox');
          roomCheckboxesAll.forEach((checkbox) => {
            // If the checkbox is in the selected list, show it, otherwise hide it
            if (selectedRooms.includes(checkbox.value)) {
              checkbox.parentElement.style.display = 'block';  // Show selected room
            } else {
              checkbox.parentElement.style.display = 'none';  // Hide non-selected room
            }
          });

          // Reapply the checked state to the checkboxes
          roomCheckboxesAll.forEach((checkbox) => {
            if (selectedRooms.includes(checkbox.value)) {
              checkbox.checked = true;  // Keep checked if it was selected before applying filters
            }
          });

          // Save the selected rooms to localStorage after applying filters
          localStorage.setItem('selectedRooms', JSON.stringify(selectedRooms));
        });

        // Handle "Select All" checkbox for rooms
        document.getElementById('selectAllRooms').addEventListener('change', function () {
          const roomCheckboxes = document.querySelectorAll('#roomList .form-check-input');
          roomCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked; // Select or deselect all based on "Select All"
          });
        });



        document.getElementById('applyAllFilters').addEventListener('click', function (e) {
          e.preventDefault();

          // Gather data from supplier filters
          const supplierFilters = Array.from(document.querySelectorAll('#dealerList input:checked')).map(input => input.value);

          // Gather data from asset type filters
          const assetTypeFilters = Array.from(document.querySelectorAll('#assetTypeList input:checked')).map(input => input.value);

          // Gather data from asset make filters
          const assetMakeFilters = Array.from(document.querySelectorAll('#assetMakeList input:checked')).map(input => input.value);

          // Gather data from purchase reason filters
          const materialFilters = Array.from(document.querySelectorAll('#materialList input:checked')).map(input => input.value);

          // Gather data from purchase reason filters
          const customerFilters = Array.from(document.querySelectorAll('#customerList input:checked')).map(input => input.value);

          // Gather data from purchase reason filters
          const locationFilters = Array.from(document.querySelectorAll('#locationList input:checked')).map(input => input.value);

          // Gather data from purchase reason filters
          const partnumberFilters = Array.from(document.querySelectorAll('#partnumberList input:checked')).map(input => input.value);

          // Gather data from purchase reason filters
          const roomFilters = Array.from(document.querySelectorAll('#roomList input:checked')).map(input => input.value);


          // Create a form element dynamically
          const form = document.createElement('form');
          form.method = 'POST';
          form.action = 'viewasset'; // Replace with your actual backend route

          // Helper function to append hidden input fields
          const appendHiddenField = (name, value) => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = value;
            form.appendChild(input);
          };

          // Append all filters as hidden inputs
          supplierFilters.forEach(value => appendHiddenField('dealer_filters[]', value));
          assetTypeFilters.forEach(value => appendHiddenField('asset_type_filters[]', value));
          assetMakeFilters.forEach(value => appendHiddenField('asset_make_filters[]', value));
          materialFilters.forEach(value => appendHiddenField('material_filters[]', value));
          customerFilters.forEach(value => appendHiddenField('customer_filters[]', value));
          locationFilters.forEach(value => appendHiddenField('location_filters[]', value));
          partnumberFilters.forEach(value => appendHiddenField('partnumber_filters[]', value));
          roomFilters.forEach(value => appendHiddenField('room_filters[]', value));


          // Append the form to the body and submit it
          document.body.appendChild(form);
          form.submit();
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
            fetch('<?= base_url('delete_assets') ?>', {
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
              .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred while deleting the rows.');
              });
          });
        });
      </script>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          document.getElementById('resetFiltersBtn').addEventListener('click', function () {
            // Uncheck all checkboxes
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(cb => cb.checked = false);

            // If you're using filters that trigger AJAX or form submission, you can trigger that here
            // For example, if checkboxes are inside a form:
            // document.getElementById('filterForm').submit();
          });
        });

        //Fetch Asset type  Dynamically
        document.addEventListener('DOMContentLoaded', function () {
          const assetTypeInput = document.getElementById('assetTypeInput');
          const assetTypeSearch = document.getElementById('assetTypeSearch');
          const assetTypeLists = document.getElementById('assetTypeLists');
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

          const label1 = ['customer_name', 'purpose', 'uomInput', 'current_stock', 'calibration_id', 'reorder_level', 'serial_id', 'dealer_name', 'location', 'asset_image', 'room1', 'grade', 'material', 'accessories', 'part_name', 'resharpening', 'part_number'];
          const label = ["Customer Name", "Purpose", "Unit of Measurement (UOM)", "Current Stock", "Calibration Id", "Reorder Level", "Serial Id", "Dealer Name", "Location", "Asset Image", "Room", "Grade", "Material", "Accessories", "Part Name", "Resharpen", "Part Number"];




          let assetTypes = []; // To store all asset types

          // Fetch all asset types initially
          fetch('<?= base_url('asset1/all_asset_types'); ?>')
            .then((response) => response.json())
            .then((data) => {
              assetTypes = data.map((type) => type.asset_type.toLowerCase()); // Store lowercase types for comparison
              assetTypeLists.innerHTML = ''; // Clear any existing entries

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
                      data.forEach(dataValue => {

                        if (dataValue === "Customer Name") {
                          dynamic['customer_name'] = document.getElementById('customer_name');
                          dynamic['customer_name'].style.display = "block";

                        }
                        if (dataValue === "Purpose") {
                          dynamic['purpose'] = document.getElementById('purpose');

                          dynamic['purpose'].style.display = "block";

                        }
                        if (dataValue === "Unit of Measurement (UOM)") {
                          dynamic['uomInput'] = document.getElementById('uomInput');
                          dynamic['uomInput'].style.display = "block";

                        }
                        if (dataValue === "Current Stock") {
                          dynamic['current_stock'] = document.getElementById('current_stock');
                          dynamic['current_stock'].style.display = "block";

                        }
                        if (dataValue === "Calibration Id") {

                          dynamic['calibration_id'] = document.getElementById('calibration_id');
                          dynamic['calibration_id'].style.display = "block";

                        }
                        if (dataValue === "Reorder Level") {
                          dynamic['reorder_level'] = document.getElementById('reorder_level');
                          dynamic['reorder_level'].style.display = "block";

                        }
                        if (dataValue === "Serial Id") {
                          dynamic['serial_id'] = document.getElementById('serial_id');
                          dynamic['serial_id'].style.display = "block";

                        }
                        if (dataValue === "Dealer Name") {
                          dynamic['dealer_name'] = document.getElementById('dealer_name');
                          dynamic['dealer_name'].style.display = "block";

                        }
                        if (dataValue === "Location") {
                          dynamic['location'] = document.getElementById('location');
                          dynamic['location'].style.display = "block";

                        }
                        if (dataValue === "Asset Image") {
                          dynamic['asset_image'] = document.getElementById('asset_image');
                          dynamic['asset_image'].style.display = "block";

                        }
                        if (dataValue === "Room") {
                          dynamic['room1'] = document.getElementById('room1');
                          dynamic['room1'].style.display = "block";

                        }
                        if (dataValue === "Grade") {
                          dynamic['grade'] = document.getElementById('grade');
                          dynamic['grade'].style.display = "block";

                        }
                        if (dataValue === "Material") {
                          dynamic['material'] = document.getElementById('material');
                          dynamic['material'].style.display = "block";

                        }
                        if (dataValue === "Accessories") {
                          dynamic['accessories'] = document.getElementById('accessories');
                          dynamic['accessories'].style.display = "block";

                        }
                        if (dataValue === "Part Name") {
                          dynamic['part_name'] = document.getElementById('part_name');
                          dynamic['part_name'].style.display = "block";

                        }
                        if (dataValue === "Resharpen") {
                          dynamic['resharpening'] = document.getElementById('resharpening');
                          dynamic['resharpening'].style.display = "block";

                        }
                        if (dataValue === "Part Number") {
                          dynamic['part_number'] = document.getElementById('part_number');
                          dynamic['part_number'].style.display = "block";

                        }



                      });




                    })
                    .catch(error => console.error('Error:', error));

                  label.forEach((labelValue, index) => {
                    dynamic[hiddenIds[index]].style.display = "none";
                    console.log(hiddenIds[index]);

                  });

                });

                assetTypeLists.appendChild(listItem);
              });
            })
            .catch((error) => {
              console.error('Error fetching asset types:', error);
            });

          // Handle the search box input inside the dropdown
          assetTypeSearch.addEventListener('input', function () {
            const query = this.value.toLowerCase(); // Case-insensitive search

            const assetTypeItems = document.querySelectorAll('#assetTypeLists .dropdown-item');
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
              assetTypeLists.innerHTML = ''; // Optionally clear the list if desired
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

          // Optional: Allow pressing Enter to confirm the value
          /*assetTypeSearch.addEventListener('keypress', function (event) {
            if (event.key === 'Enter') {
              const searchValue = this.value.trim();
              const isMatched = assetTypes.includes(searchValue.toLowerCase());
        
              if (!isMatched && searchValue) {
                assetTypeInput.value = searchValue; // Move value to the input field
                this.value = ''; // Clear the search box
              }
            }
          });*/
        });


        //Fetch Asset make  Dynamically
        document.addEventListener('DOMContentLoaded', function () {
          const assetMakeInput = document.getElementById('assetMakeInput');
          const assetMakeSearch = document.getElementById('assetMakeSearch');
          const assetMakeLists = document.getElementById('assetMakeLists');

          let assetMakes = []; // To store all asset makes

          // Fetch all asset makes initially
          fetch('<?= base_url('asset1/all_asset_makes'); ?>') // Update this to your endpoint
            .then((response) => response.json())
            .then((data) => {
              assetMakes = data.map((make) => make.asset_make.toLowerCase()); // Store lowercase makes for comparison
              assetMakeLists.innerHTML = ''; // Clear any existing entries

              data.forEach((make) => {
                const listItem = document.createElement('div');
                listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                listItem.textContent = make.asset_make;
                listItem.setAttribute('data-value', make.asset_make); // Store the value in a data attribute

                // Handle click event to populate the input field
                listItem.addEventListener('click', function () {
                  assetMakeInput.value = make.asset_make; // Update the input value
                });

                assetMakeLists.appendChild(listItem);
              });
            })
            .catch((error) => {
              console.error('Error fetching asset makes:', error);
            });

          // Handle the search box input inside the dropdown
          assetMakeSearch.addEventListener('input', function () {
            const query = this.value.toLowerCase(); // Case-insensitive search

            const assetMakeItems = document.querySelectorAll('#assetMakeLists .dropdown-item');
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
              assetMakeLists.innerHTML = ''; // Optionally clear the list if desired
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

        // Dealers
        document.addEventListener('DOMContentLoaded', function () {
          const dealerNameInput = document.querySelector('[name="dealer_name"]'); // Match the input name attribute
          const dealerSearch = document.getElementById('dealerSearch');
          const dealerLists = document.getElementById('dealerLists');

          let dealers = []; // To store all dealer names

          // Fetch all dealer names initially
          fetch('<?= base_url('asset1/all_dealers'); ?>') // Update to your correct endpoint
            .then((response) => response.json())
            .then((data) => {
              dealers = data.map((dealer) => dealer.dealer_name.toLowerCase()); // Store lowercase dealer names for comparison
              dealerLists.innerHTML = ''; // Clear any existing entries

              data.forEach((dealer) => {
                const listItem = document.createElement('div');
                listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                listItem.textContent = dealer.dealer_name;
                listItem.setAttribute('data-value', dealer.dealer_name); // Store the value in a data attribute

                // Handle click event to populate the input field
                listItem.addEventListener('click', function () {
                  dealerNameInput.value = dealer.dealer_name; // Update the input value
                });

                dealerLists.appendChild(listItem);
              });
            })
            .catch((error) => {
              console.error('Error fetching dealer names:', error);
            });

          // Handle the search box input inside the dropdown
          dealerSearch.addEventListener('input', function () {
            const query = this.value.toLowerCase(); // Case-insensitive search

            const dealerItems = document.querySelectorAll('#dealerLists .dropdown-item');
            let matchFound = false;

            dealerItems.forEach((item) => {
              const dealerName = item.textContent.toLowerCase();

              if (dealerName.includes(query)) {
                item.style.display = 'block'; // Show matching dealer name
                matchFound = true;
              } else {
                item.style.display = 'none'; // Hide non-matching dealer name
              }
            });

            // If no match is found, clear the dropdown
            if (!matchFound) {
              dealerLists.innerHTML = ''; // Optionally clear the list if desired
            }
          });

          // Move unmatched value to input field
          dealerSearch.addEventListener('blur', function () {
            const searchValue = this.value.trim();
            const isMatched = dealers.includes(searchValue.toLowerCase());

            if (!isMatched && searchValue) {
              dealerNameInput.value = searchValue; // Move value to the input field
              this.value = ''; // Clear the search box
            }
          });
        });

        // Fetch all materials initially
        fetch('<?= base_url('asset1/all_materials'); ?>') // Update this to your endpoint
          .then((response) => response.json())
          .then((data) => {
            materials = data.map((material) => material.material.toLowerCase()); // Store lowercase materials
            materialLists.innerHTML = ''; // Clear existing entries

            data.forEach((material) => {
              const listItem = document.createElement('div');
              listItem.classList.add('dropdown-item');
              listItem.textContent = material.material;
              listItem.setAttribute('data-value', material.material);

              // Handle click event to populate the input field
              listItem.addEventListener('click', function () {
                materialInput.value = material.material; // Update the input value
              });

              materialLists.appendChild(listItem);
            });
          })
          .catch((error) => {
            console.error('Error fetching materials:', error);
          });

        // Handle search input
        materialSearch.addEventListener('input', function () {
          const query = this.value.toLowerCase();

          const materialItems = document.querySelectorAll('#materialLists .dropdown-item');
          let matchFound = false;

          materialItems.forEach((item) => {
            const materialName = item.textContent.toLowerCase();

            if (materialName.includes(query)) {
              item.style.display = 'block'; // Show matching material
              matchFound = true;
            } else {
              item.style.display = 'none'; // Hide non-matching material
            }
          });

          // Clear the list if no match is found
          if (!matchFound) {
            materialLists.innerHTML = '';
          }
        });

        // Move unmatched value to input field
        materialSearch.addEventListener('blur', function () {
          const searchValue = this.value.trim();
          const isMatched = materials.includes(searchValue.toLowerCase());

          if (!isMatched && searchValue) {
            materialInput.value = searchValue; // Move value to the input field
            this.value = ''; // Clear the search box
          }
        });

        //Fetch Customer Name Dynamically
        document.addEventListener('DOMContentLoaded', function () {
          const customerNameInput = document.getElementById('customerNameInput');
          const customerNameSearch = document.getElementById('customerNameSearch');
          const customerLists = document.getElementById('customerLists');

          let customers = []; // To store customer names

          // Fetch all customers initially
          fetch('<?= base_url('asset1/all_customers'); ?>') // Update this to your endpoint
            .then((response) => response.json())
            .then((data) => {
              customers = data.map((customer) => customer.customer_name.toLowerCase());
              customerLists.innerHTML = ''; // Clear existing entries

              data.forEach((customer) => {
                const listItem = document.createElement('div');
                listItem.classList.add('dropdown-item');
                listItem.textContent = customer.customer_name;
                listItem.setAttribute('data-value', customer.customer_name);

                // Handle click event to populate the input field
                listItem.addEventListener('click', function () {
                  customerNameInput.value = customer.customer_name;
                });

                customerLists.appendChild(listItem);
              });
            })
            .catch((error) => {
              console.error('Error fetching customers:', error);
            });

          // Handle search input
          customerNameSearch.addEventListener('input', function () {
            const query = this.value.toLowerCase();

            const customerItems = document.querySelectorAll('#customerLists .dropdown-item');
            let matchFound = false;

            customerItems.forEach((item) => {
              const customerName = item.textContent.toLowerCase();

              if (customerName.includes(query)) {
                item.style.display = 'block'; // Show matching customer
                matchFound = true;
              } else {
                item.style.display = 'none'; // Hide non-matching customer
              }
            });

            // Clear the list if no match is found
            if (!matchFound) {
              customerLists.innerHTML = '';
            }
          });

          // Move unmatched value to input field
          customerNameSearch.addEventListener('blur', function () {
            const searchValue = this.value.trim();
            const isMatched = customers.includes(searchValue.toLowerCase());

            if (!isMatched && searchValue) {
              customerNameInput.value = searchValue;
              this.value = ''; // Clear the search box
            }
          });
        });

        //Fetch Location Dynamically
        document.addEventListener('DOMContentLoaded', function () {
          const locationInput = document.getElementById('locationInput');
          const locationSearch = document.getElementById('locationSearch');
          const locationLists = document.getElementById('locationLists');

          let locations = []; // Array to store location names for filtering

          // Fetch all locations initially
          fetch('<?= base_url('asset1/all_locations'); ?>') // Update this to your endpoint
            .then((response) => response.json())
            .then((data) => {
              locations = data.map((item) => item.location.toLowerCase()); // Store location names in lowercase
              locationLists.innerHTML = ''; // Clear any existing entries

              data.forEach((item) => {
                const listItem = document.createElement('div');
                listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
                listItem.textContent = item.location;
                listItem.setAttribute('data-value', item.location); // Store the value in a data attribute

                // Handle click event to populate the input field
                listItem.addEventListener('click', function () {
                  locationInput.value = item.location; // Update the input value
                });

                locationLists.appendChild(listItem);
              });
            })
            .catch((error) => {
              console.error('Error fetching locations:', error);
            });

          // Handle the search box input inside the dropdown
          locationSearch.addEventListener('input', function () {
            const query = this.value.toLowerCase(); // Case-insensitive search

            const locationItems = document.querySelectorAll('#locationLists .dropdown-item');
            let matchFound = false;

            locationItems.forEach((item) => {
              const locationName = item.textContent.toLowerCase();

              if (locationName.includes(query)) {
                item.style.display = 'block'; // Show matching location
                matchFound = true;
              } else {
                item.style.display = 'none'; // Hide non-matching location
              }
            });

            // If no match is found, clear the dropdown
            if (!matchFound) {
              locationLists.innerHTML = ''; // Optionally clear the list if desired
            }
          });

          // Move unmatched value to input field
          locationSearch.addEventListener('blur', function () {
            const searchValue = this.value.trim();
            const isMatched = locations.includes(searchValue.toLowerCase());

            if (!isMatched && searchValue) {
              locationInput.value = searchValue; // Move value to the input field
              this.value = ''; // Clear the search box
            }
          });
        });


        ///Unit of Measurement

        document.addEventListener('DOMContentLoaded', function () {
          const uomInput = document.getElementById('uomInput');
          const uomSearch = document.getElementById('uomSearch');
          const uomLists = document.getElementById('uomLists');

          let uoms = []; // To store all UOMs

          // Fetch all UOMs initially
          fetch('<?= base_url('asset1/all_uoms'); ?>') // Endpoint for UOMs
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
                uomLists.innerHTML = ''; // Clear any existing entries

                // Populate the dropdown list with UOMs
                data.forEach((uom) => {
                  const listItem = document.createElement('div');
                  listItem.classList.add('dropdown-item');
                  listItem.textContent = uom.uom; // Adjusted based on response field name
                  listItem.setAttribute('data-value', uom.uom);

                  listItem.addEventListener('click', function () {
                    uomInput.value = uom.uom;
                  });

                  uomLists.appendChild(listItem);
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

            const uomItems = document.querySelectorAll('#uomLists .dropdown-item');
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
              uomLists.innerHTML = ''; // Optionally clear the list if desired
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
        const dropdownToggle = document.getElementById('assetTypeInput');
        dropdownToggle.addEventListener('click', () => {
          const menu = dropdownToggle.nextElementSibling;
          const rect = dropdownToggle.getBoundingClientRect();
          menu.style.width = rect.width + "px";
        });
      </script>

      
<script>
  function addAccessory() {
    const container = document.getElementById('accessory-container');

    const row = document.createElement('div');
    row.className = 'row g-2 mb-2';

    row.innerHTML = `
      <div class="col-md-3">
        <input type="text" class="form-control accessory-name" placeholder="Accessory Name" required>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control accessory-qty" placeholder="Qty" required>
      </div>
      <div class="col-md-2">
        <select class="form-select accessory-type" required>
          <option value="">Select Type</option>
          <option value="a">a</option>
          <option value="b">b</option>
          <option value="c">c</option>
        </select>
      </div>
      <div class="col-md-3">
        <input type="number" class="form-control accessory-price" placeholder="Unit Price" required>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <button type="button" class="btn btn-danger btn-sm" onclick="this.closest('.row').remove()">Delete</button>
      </div>
    `;

    container.appendChild(row);
  }

  // Before form submit, collect accessory data into JSON
  document.querySelector("form").addEventListener("submit", function(e) {
    const rows = document.querySelectorAll("#accessory-container .row");
    const accessories = [];

    rows.forEach(row => {
      const name = row.querySelector(".accessory-name")?.value.trim();
      const qty = row.querySelector(".accessory-qty")?.value.trim();
      const type = row.querySelector(".accessory-type")?.value;
      const price = row.querySelector(".accessory-price")?.value.trim();

      if (name && qty && type && price) {
        accessories.push({
          name: name,
          quantity: qty,
          type: type,
          unit_price: price
        });
      }
    });

    // Set JSON string to hidden input
    document.getElementById("accessoriesInput").value = JSON.stringify(accessories);
  });
</script>





    </div>


    <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
      type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <i class="icon ti ti-settings fs-7"></i>
    </button>

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
            onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
            data-bs-placement="top" data-bs-title="PURPLE_THEME">
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
  </div>

  <!--  Search Bar -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-bottom">
          <input type="search" class="form-control" placeholder="Search here" id="search" />
          <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
            <i class="ti ti-x fs-5 ms-3"></i>
          </a>
        </div>
        <div class="modal-body message-body" data-simplebar="">
          <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
          <ul class="list mb-0 py-2">
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Analytics</span>
                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">eCommerce</span>
                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">CRM</span>
                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard3</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Contacts</span>
                <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Posts</span>
                <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Detail</span>
                <span
                  class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Shop</span>
                <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Modern</span>
                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Dashboard</span>
                <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Contacts</span>
                <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Posts</span>
                <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Detail</span>
                <span
                  class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
              <a href="javascript:void(0)">
                <span class="text-dark fw-semibold d-block">Shop</span>
                <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
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


</body>


</html>
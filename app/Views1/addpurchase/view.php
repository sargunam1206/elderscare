<?php 


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>


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

  <title>MatDash Bootstrap Admin</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
  



</head>
  

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
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
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Assets">
                  <iconify-icon icon="solar:layers-line-duotone" class="fs-7"></iconify-icon>
                </a>
              </li>
 
                

            
            </ul>

          </div>
          <div class="sidebarmenu">
            <div class="brand-logo d-flex align-items-center nav-logo">
              <a href="<?= base_url(); ?>/public/dist/main/index.html" class="text-nowrap logo-img" >
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
                  
                    <span class="hide-menu">Assets</span>
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


                </li>
                    <!--<li class="sidebar-item  ">
                      <a class="sidebar-link has-arrow" href="<?= base_url(); ?>/public/dist/main/eco-shop-detail.html">
                         <span class="hide-menu">Depreciation </span>
                      </a>
                       <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('depreciation'); ?>">
                          <span class="icon-small"></span>Add Depreciation Info
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('viewdepreciation'); ?>">
                          <span class="icon-small"></span>View Depreciation Info
                        </a>
                      </li>
                   
                     
                    </ul>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="<?= base_url(); ?>/public/dist/main/eco-product-list.html">
                      <span class="hide-menu">Return</span>
                      </a>
                       <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('return'); ?>">
                          <span class="icon-small"></span>Add Return Info
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('viewreturn'); ?>">
                          <span class="icon-small"></span>View Return Info
                        </a>
                      </li>
                     
                    </ul>
                    </li>-->
                   
                 
                
                
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
                <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler " id="headerCollapse" href="javascript:void(0)">
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
                  <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
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
            <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)" style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                        <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="matdash-img" />
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56" alt="matdash-img" />
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
          <div class="offcanvas offcanvas-start pt-0" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
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
                          <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                            <span class="fs-11 d-block text-body-color">New messages arrived</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-invoice.html" class="d-flex align-items-center">
                          <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                            <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-contact2.html" class="d-flex align-items-center">
                          <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                            <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-email.html" class="d-flex align-items-center">
                          <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Email App</h6>
                            <span class="fs-11 d-block text-body-color">Get new emails</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/page-user-profile.html" class="d-flex align-items-center">
                          <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                            <span class="fs-11 d-block text-body-color">learn more information</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-calendar.html" class="d-flex align-items-center">
                          <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                            <span class="fs-11 d-block text-body-color">Get dates</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-contact.html" class="d-flex align-items-center">
                          <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                            <span class="fs-11 d-block text-body-color">Add new contact</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="<?= base_url(); ?>/public/dist/main/app-notes.html" class="d-flex align-items-center">
                          <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
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
                <a class="nav-link sidebartoggler nav-icon-hover-bg rounded-circle" id="sidebarCollapse" href="javascript:void(0)">
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
                  <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
                    <div class="position-relative">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="p-4 pb-3">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="<?= base_url(); ?>/public/dist/main/app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
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
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 d-none d-lg-flex">
                          <img src="<?= base_url(); ?>/public/dist/assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd" class="img-fluid mega-dd-bg" />
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
            <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout" href="javascript:void(0)" style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end notification Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
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
                        <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="matdash-img" />
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="<?= base_url(); ?>/public/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56" alt="matdash-img" />
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
                          <a href="<?= base_url(); ?>/public/dist/main/authentication-login2.html" class="p-2 dropdown-item h6 rounded-1">
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
                    <a class="sidebar-link" href="<?= base_url(); ?>/public/dist/main/app-email.html" aria-expanded="false">
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
                    <a class="sidebar-link" href="<?= base_url(); ?>/public/dist/main/icon-tabler.html" aria-expanded="false">
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
                    <a class="sidebar-link sidebar-link" href="<?= base_url(); ?>/public/dist/main/icon-solar.html" aria-expanded="false">
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
                  <h4 class="mb-4 mb-md-0 card-title">Purchase</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="<?= base_url(); ?>/public/dist/main/index.html">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Purchase
                        </span>
                      
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>


          <div class="datatables">
            <!-- start Add Row -->
        
            

            
            
            <!-- end Row selection (multiple rows) -->
            <!-- start Form Inputs -->
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

 
 
 
                    
                  <form method="post"  action="<?= base_url('viewpurchase1'); ?>">
                  <div class="row"> 
                    
                  <div class="col-md-3">
                  <h4 class="card-title">View Purchase</h4>
                  </div>

          
                 




                  <form method="post" action="<?= base_url('addpurchase/view'); ?>" target="_blank">
    <div class="row">
        <div class="col-md-2">
            <label for="from_date" class="form-label">From Date</label>
            <input type="date" class="form-control" name="from_date" id="from_date">
        </div>
        <div class="col-md-2">
            <label for="to_date" class="form-label">To Date</label>
            <input type="date" class="form-control" name="to_date" id="to_date">
        </div>
        <div class="col-md-4 d-flex align-items-end" style="gap: 10px;">
            <!--<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>-->
            
          <!-- <button type="submit" name="submit" value="download" formtarget="_blank" formaction="<?= base_url('downloadpurchase'); ?>" class="btn btn-primary">PDF</button>
            <button type="submit" name="submit" value="excel" formaction="<?= base_url('downloadexcel'); ?>" class="btn btn-primary">Excel</button>--> <!-- Excel Button -->
        </div>
    </div>
</form>




    
              
                 
              
                   
                   
                <div class="table-responsive mt-3">
                <table class="table table-borderless w-100">
  <!-- First Row -->
  <tr>
    <td class="p-1">
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="supplierDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Dealer Name
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="supplierDropdown" style="max-height: 200px; overflow-y: auto;">
          <input type="text" class="form-control mb-2" id="supplierSearch" placeholder="Search" autocomplete="off" />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllSuppliers" />
            <label class="form-check-label" for="selectAllSuppliers">All</label>
          </div>
          <div id="supplierList">
            <!-- Dynamic supplier checkboxes will be populated here -->
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div>
    </td>
    <td class="p-1">
      
  <div class="dropdown ">
  <button class="btn btn-info dropdown-toggle w-100" type="button" id="assetTypeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
  Asset Type
</button>

    <ul class="dropdown-menu w-100 p-3" aria-labelledby="assetTypeDropdown" style="max-height: 200px; overflow-y: auto; width: 150%; padding: 0;">
      <li>
        <input type="text" class="form-control mb-2" id="assetTypeSearch" placeholder="Search" autocomplete="off" />
      </li>
      <li>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="selectAllAssetTypes" />
          <label class="form-check-label" for="selectAllAssetTypes">All</label>
        </div>
      </li>
      <li id="assetTypeList">
        <!-- Dynamic asset type checkboxes will be populated here -->
      </li>
      <li>
        <div class="mt-2">
          <button type="submit" class="btn btn-light btn-sm w-100" id="applyAssetFilters">Apply Filters</button>
        </div>
      </li>
    </ul>
  </div>

</td>

    <td class="p-1">
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="assetMakeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Asset Make
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="assetMakeDropdown" style="max-height: 200px; overflow-y: auto;">
          <input type="text" class="form-control mb-2" id="assetMakeSearch" placeholder="Search" autocomplete="off" />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllAssetMakes" />
            <label class="form-check-label" for="selectAllAssetMakes">All</label>
          </div>
          <div id="assetMakeList">
            <!-- Dynamic asset make checkboxes will be populated here -->
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div>
    </td>
    <td class="p-1">
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="purchaseStatusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Purchase Status
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="purchaseStatusDropdown" style="max-height: 200px; overflow-y: auto;">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllStatuses" />
            <label class="form-check-label" for="selectAllStatuses">All</label>
          </div>
          <div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="purchase_status_filters[]" value="Order Placed" id="statusOrderPlaced" />
              <label class="form-check-label" for="statusOrderPlaced">Order Placed</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="purchase_status_filters[]" value="Assets Received" id="statusAssetsReceived" />
              <label class="form-check-label" for="statusAssetsReceived">Assets Received</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="purchase_status_filters[]" value="Assets Pending" id="statusAssetsPending" />
              <label class="form-check-label" for="statusAssetsPending">Assets Pending</label>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div>
    </td>
    <td class="p-1">
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle w-100" type="button" id="purchaseReasonDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Purpose
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="purchaseReasonDropdown" style="max-height: 200px; overflow-y: auto;">
          <input type="text" class="form-control mb-2 w-100" id="purchaseReasonSearch" placeholder="Search" autocomplete="off" />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAllPurchaseReasons" />
            <label class="form-check-label" for="selectAllPurchaseReasons">All</label>
          </div>
          <div id="purchaseReasonList" style="width: 100%;">
            <!-- Dynamic purchase reason checkboxes will be populated here -->
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-light btn-sm w-100" id="applyFilters">Apply Filters</button>
          </div>
        </ul>
      </div>
    </td>
    <td class="p-1">
      <button type="submit" class="btn btn-primary w-100" id="applyAllFilters">
        Apply All
      </button>
    </td>
  </tr>
  <!-- Second Row -->
  <tr>
    <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger w-100">
        <i class="fas fa-trash-alt"></i> Delete
      </a>
    </td>
     <td class="p-1">
    <button type="submit" name="submit" value="download" formtarget="_blank" formaction="<?= base_url('downloadpurchase'); ?>" class="btn btn-primary">Download PDF</button>
    
</td>
<td class="p-1">
<button type="submit" name="submit" value="excel" formaction="<?= base_url('downloadexcel'); ?>" class="btn btn-primary">Download Excel</button>
</td>
   
  </tr>
</table>
                  
                  <table id="form_inputs"  class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                    <thead>
                      <!-- start row -->
                      <tr>
                      <th><input type="checkbox" id="select_all"></th> <!-- Select all checkbox -->
                        <!--<th>Dealer Name</th>-->
                        <th>Asset Type</th>
                        <th>Asset Make</th>
                        <th>Specification</th>
                        <th>Stock Purchased</th>
                        <!--<th>Unit Price Before Taxes</th>
                        <th>Discount</th>
                        <th>Quantity Purchased</th>
                        <th>Part Name</th>
                        <th>Part Number</th>
                        <th>Customer Name</th>
                        <th>Asset Image</th>
                        <th>Invoice Number</th>
                        <th>Invoice Date</th>
                        <th>Tax GSTIN/UIN</th>
                        
                        <th>Purchase Status</th>
                        <th>Purchase Reason</th>-->
                        <th>GRN</th>
                        <!--<th>Updated On</th>-->
                        
                        <th>Option</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody >
                        
                      <!-- start row -->
                      <?php foreach($alldata as $data){ 
                          $base=base64_encode(base64_encode(base64_encode($data['purchase_id'])));
                      ?>
                      <tr>
                      <td><input type="checkbox" class="row_checkbox" data-asset-id="<?= $data['purchase_id']; ?>"></td>
                       <!-- <td ><?= $data['supplier_name']; ?></td>-->
                        <td><?= $data['asset_type']; ?></td>
                        <td><?= $data['asset_make']; ?></td>
                        <td><?= $data['specification']; ?></td>
                        <!--<td><?= $data['uom']; ?></td>
                        <td><?= $data['discount']; ?></td>-->
                        <td><?= $data['quantity']; ?></td>
                        <!--<td><?= $data['part_name']; ?></td>
                        <td><?= $data['part_number']; ?></td>
                        <td><?= $data['customer_name']; ?></td>
                         <td><img src="<?php 
                            if($data['asset_image']!= '') { 
                                echo base_url() . $data['asset_image']; 
                            } else { 
                                echo 'pdfbankaccountdetails?filename=' . $data['asset_image'];
                            }  
                        ?>" height="100px" width="100px"></td>
                        <td><?= $data['invoice_number']; ?></td>
                        <td><?= $data['invoice_date']; ?></td>
                        <td><?= $data['grn']; ?></td>
                        <td><?= $data['purchase_status']; ?></td>
                        <td><?= $data['purchase_reason']; ?></td>-->
                        <td><?= $data['grn']; ?></td> 
                        <!--<td><?= $data['updated_on']; ?></td>-->
                        
                        <td> <a href="<?= base_url('editpurchase1/'.$base); ?>" class="btn btn-info">
                          Update
                          </a>
                         </td>
                      </tr>
                      <?php } ?>
                      <!-- end row -->
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                       <!-- start row -->
                      <tr>
                        <th></th>
                      <!--<th>Dealer Name</th>-->
                        <th>Asset Type</th>
                        <th>Asset Make</th>
                        <th>Specification</th>
                        <th>Stock Purchased</th>
                        <!--<th>Unit Price Before Taxes</th>
                        <th>Discount</th>
                        <th>Quantity Purchased</th>
                        <th>Part Name</th>
                        <th>Part Number</th>
                        <th>Customer Name</th>
                        <th>Asset Image</th>
                        <th>Invoice Number</th>
                        <th>Invoice Date</th>
                        <th>Tax GSTIN/UIN</th>
                        
                        <th>Purchase Status</th>
                        <th>Purchase Reason</th>-->
                        <th>GRN</th>
                        <!--<th>Updated On</th>-->
                        
                        <th>Option</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Form Inputs -->
           
                   
                </div>
              </div>
            </div>
            <!-- end Row selection and deletion (single row) -->
          </div>
        </div>
      </div>
    </div>


<!-- Delete Confirmation Modal -->

<!-- Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete the selected items?
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button-->
        <button type="button" id="confirm_delete" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

    <script>
// Fetch all suppliers initially
fetch('<?= base_url('purchase1/all_suppliers'); ?>')
  .then((response) => response.json())
  .then((suppliers) => {
    const supplierList = document.getElementById('supplierList');
    const selectedSuppliers = new Set();  // To keep track of selected suppliers

    suppliers.forEach((supplier) => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input supplier-checkbox" type="checkbox" name="supplier_filters[]" value="${supplier.dealer_name}" id="supplier${supplier.dealer_name}" />
          <label class="form-check-label" for="supplier${supplier.dealer_name}">
            ${supplier.dealer_name}
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
});







  // Fetch all asset types initially
fetch('<?= base_url('purchase1/all_asset_types'); ?>')
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
fetch('<?= base_url('purchase1/all_asset_makes'); ?>')
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

// Fetch all purchase reasons initially
fetch('<?= base_url('purchase1/all_purchase_reasons'); ?>')
  .then((response) => response.json())
  .then((purchaseReasons) => {
    const purchaseReasonList = document.getElementById('purchaseReasonList');
    const selectedPurchaseReasons = new Set();  // To track selected purchase reasons

    // Render the list of purchase reasons
    purchaseReasons.forEach((reason) => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `
        <div class="form-check">
          <input class="form-check-input purchase-reason-checkbox" type="checkbox" name="purchase_reason_filters[]" value="${reason.purchase_reason}" id="purchaseReason${reason.purchase_reason}" />
          <label class="form-check-label" for="purchaseReason${reason.purchase_reason}">
            ${reason.purchase_reason}
          </label>
        </div>
      `;
      purchaseReasonList.appendChild(listItem);
    });

    // Check previously selected purchase reasons based on the initial state
    const initialSelected = JSON.parse(localStorage.getItem('selectedPurchaseReasons')) || [];
    initialSelected.forEach((purchaseReason) => {
      const checkbox = document.getElementById(`purchaseReason${purchaseReason}`);
      if (checkbox) {
        checkbox.checked = true;
        selectedPurchaseReasons.add(purchaseReason);  // Mark the purchase reason as selected
      }
    });

    // Store the selected purchase reasons in localStorage when the user changes the checkbox state
    document.querySelectorAll('.purchase-reason-checkbox').forEach((checkbox) => {
      checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
          selectedPurchaseReasons.add(checkbox.value);
        } else {
          selectedPurchaseReasons.delete(checkbox.value);
        }
        localStorage.setItem('selectedPurchaseReasons', JSON.stringify(Array.from(selectedPurchaseReasons)));
      });
    });
  })
  .catch((error) => {
    console.error('Error fetching purchase reasons:', error);
  });

// Handle search input to filter purchase reasons
document.getElementById('purchaseReasonSearch').addEventListener('input', function () {
  
    
       /* $('#purchaseReasonSearch').on('input', function () {
            let searchValue = $(this).val(); // Get the current value
            console.log('Search Value:', searchValue); // Use this value for filtering
        }); */

  const query = this.value.toLowerCase();  // Case-insensitive search

  const purchaseReasonCheckboxes = document.querySelectorAll('.purchase-reason-checkbox');
  purchaseReasonCheckboxes.forEach((checkbox) => {
    const reasonName = checkbox.nextElementSibling.textContent.toLowerCase();
    
    if (reasonName.includes(query)) {
      checkbox.parentElement.style.display = 'block';  // Show matching purchase reason
    } else {
      checkbox.parentElement.style.display = 'none';  // Hide non-matching purchase reason
    }
  });
});

// Handle "Apply Filters" button to filter purchase reasons
document.getElementById('applyFilters').addEventListener('click', function () {
  const selectedPurchaseReasons = [];
  const purchaseReasonCheckboxes = document.querySelectorAll('.purchase-reason-checkbox:checked');

  // Save the currently checked purchase reasons
  purchaseReasonCheckboxes.forEach((checkbox) => {
    selectedPurchaseReasons.push(checkbox.value);  // Collect selected purchase reasons
  });

  // Hide or show the purchase reasons based on the selected filters
  const purchaseReasonCheckboxesAll = document.querySelectorAll('.purchase-reason-checkbox');
  purchaseReasonCheckboxesAll.forEach((checkbox) => {
    if (selectedPurchaseReasons.includes(checkbox.value)) {
      checkbox.parentElement.style.display = 'block';  // Show selected purchase reason
    } else {
      checkbox.parentElement.style.display = 'none';  // Hide non-selected purchase reason
    }
  });

  // Reapply the checked state to the checkboxes
  purchaseReasonCheckboxesAll.forEach((checkbox) => {
    if (selectedPurchaseReasons.includes(checkbox.value)) {
      checkbox.checked = true;  // Keep checked if it was selected before applying filters
    }
  });

  // Save the selected purchase reasons to localStorage after applying filters
  localStorage.setItem('selectedPurchaseReasons', JSON.stringify(selectedPurchaseReasons));
});

// Handle "Select All" checkbox for purchase reasons
document.getElementById('selectAllPurchaseReasons').addEventListener('change', function () {
  const purchaseReasonCheckboxes = document.querySelectorAll('#purchaseReasonList .form-check-input');
  purchaseReasonCheckboxes.forEach((checkbox) => {
    checkbox.checked = this.checked; // Select or deselect all based on "Select All"
  });
});



// Save the state of checkboxes to localStorage - purchase status
function saveCheckboxState() {
  const checkboxes = document.querySelectorAll('.form-check-input');
  const checkboxState = {};

  checkboxes.forEach((checkbox) => {
    checkboxState[checkbox.id] = checkbox.checked; // Store the checkbox ID and its checked state
  });

  localStorage.setItem('purchaseStatusState', JSON.stringify(checkboxState));
}
// Save the state of checkboxes in localStorage
function saveCheckboxState() {
  const checkboxes = document.querySelectorAll('.form-check-input[type="checkbox"]');
  const state = {};

  checkboxes.forEach((checkbox) => {
    state[checkbox.id] = checkbox.checked; // Store the checked state
  });

  localStorage.setItem('purchaseStatusState', JSON.stringify(state));
}

// Load the state of checkboxes from localStorage
function loadCheckboxState() {
  const savedState = JSON.parse(localStorage.getItem('purchaseStatusState'));

  if (savedState) {
    Object.keys(savedState).forEach((id) => {
      const checkbox = document.getElementById(id);
      if (checkbox) {
        checkbox.checked = savedState[id]; // Restore the checked state
      }
    });

    // Handle "Select All" state
    const allChecked = document.querySelectorAll('.form-check-input[type="checkbox"]:not(#selectAllStatuses)').length === 
                       document.querySelectorAll('.form-check-input[type="checkbox"]:checked:not(#selectAllStatuses)').length;
    document.getElementById('selectAllStatuses').checked = allChecked;
  }
}

// Apply filters and submit the form
document.getElementById('applyFilters').addEventListener('click', function () {
  saveCheckboxState(); // Save the current state before submitting
  document.forms[0].submit(); // Submit the form
});

// Handle "Select All" checkbox functionality
document.getElementById('selectAllStatuses').addEventListener('change', function () {
  const checkboxes = document.querySelectorAll('.form-check-input[type="checkbox"]:not(#selectAllStatuses)');
  checkboxes.forEach((checkbox) => {
    checkbox.checked = this.checked;
  });

  saveCheckboxState(); // Save state after selecting all
});

// Handle individual checkbox state changes
document.querySelectorAll('.form-check-input').forEach((checkbox) => {
  checkbox.addEventListener('change', saveCheckboxState);
});

// Load checkbox states on page load
window.addEventListener('load', loadCheckboxState);






/*document.getElementById('applyAllFilters').addEventListener('click', function (e) {
    e.preventDefault();

    // Gather data from supplier filters
    const supplierFilters = Array.from(document.querySelectorAll('#supplierList input:checked')).map(input => input.value);

    // Gather data from asset type filters
    const assetTypeFilters = Array.from(document.querySelectorAll('#assetTypeList input:checked')).map(input => input.value);

    // Gather data from asset make filters
    const assetMakeFilters = Array.from(document.querySelectorAll('#assetMakeList input:checked')).map(input => input.value);

    // Gather data from purchase status filters
    const purchaseStatusFilters = Array.from(document.querySelectorAll('input[name="purchase_status_filters[]"]:checked')).map(input => input.value);

    // Gather data from purchase reason filters
    const purchaseReasonFilters = Array.from(document.querySelectorAll('#purchaseReasonList input:checked')).map(input => input.value);

    // Create a form element dynamically
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'viewpurchase1'; // Replace with your actual backend route

    // Helper function to append hidden input fields
    const appendHiddenField = (name, value) => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        form.appendChild(input);
    };

    // Append all filters as hidden inputs
    supplierFilters.forEach(value => appendHiddenField('supplier_filters[]', value));
    assetTypeFilters.forEach(value => appendHiddenField('asset_type_filters[]', value));
    assetMakeFilters.forEach(value => appendHiddenField('asset_make_filters[]', value));
    purchaseStatusFilters.forEach(value => appendHiddenField('purchase_status_filters[]', value));
    purchaseReasonFilters.forEach(value => appendHiddenField('purchase_reason_filters[]', value));

    // Append the form to the body and submit it
    document.body.appendChild(form);
    form.submit();
});*/


document.getElementById('applyAllFilters').addEventListener('click', function (e) {
    e.preventDefault();

    // Gather data from supplier filters
    const supplierFilters = Array.from(document.querySelectorAll('#supplierList input:checked')).map(input => input.value);

    // Gather data from asset type filters
    const assetTypeFilters = Array.from(document.querySelectorAll('#assetTypeList input:checked')).map(input => input.value);

    // Gather data from asset make filters
    const assetMakeFilters = Array.from(document.querySelectorAll('#assetMakeList input:checked')).map(input => input.value);

    // Gather data from purchase status filters
    const purchaseStatusFilters = Array.from(document.querySelectorAll('input[name="purchase_status_filters[]"]:checked')).map(input => input.value);

    // Gather data from purchase reason filters
    const purchaseReasonFilters = Array.from(document.querySelectorAll('#purchaseReasonList input:checked')).map(input => input.value);

    // Get the values of from_date and to_date
    const fromDate = document.getElementById('from_date').value;
    const toDate = document.getElementById('to_date').value;

    // Create a form element dynamically
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'viewpurchase1'; // Replace with your actual backend route

    // Helper function to append hidden input fields
    const appendHiddenField = (name, value) => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        form.appendChild(input);
    };

    // Append all filters as hidden inputs
    supplierFilters.forEach(value => appendHiddenField('supplier_filters[]', value));
    assetTypeFilters.forEach(value => appendHiddenField('asset_type_filters[]', value));
    assetMakeFilters.forEach(value => appendHiddenField('asset_make_filters[]', value));
    purchaseStatusFilters.forEach(value => appendHiddenField('purchase_status_filters[]', value));
    purchaseReasonFilters.forEach(value => appendHiddenField('purchase_reason_filters[]', value));

    // Append from_date and to_date as hidden inputs
    if (fromDate) appendHiddenField('from_date', fromDate);
    if (toDate) appendHiddenField('to_date', toDate);

    // Append the form to the body and submit it
    document.body.appendChild(form);
    form.submit();
});

//Multiple delete
document.addEventListener('DOMContentLoaded', function () {
  const deleteTriggerButton = document.getElementById('btn-delete-trigger');
  const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
  const confirmDeleteButton = document.getElementById('confirm_delete');
  const selectAllCheckbox = document.getElementById('select_all');
  const rowCheckboxes = document.querySelectorAll('.row_checkbox');
  let selectedIds = [];

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
    fetch('<?= base_url('delete_purchase') ?>', {
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
    $(document).ready(function () {
        $('#purchaseReasonSearch').on('input', function () {
            let searchValue = $(this).val(); // Get the current value
            console.log('Search Value:', searchValue); // Use this value for filtering
        });
    });
</script>





<button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <i class="icon ti ti-settings fs-7"></i>
    </button>

    <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
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
          <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
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
                <span class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
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
                <span class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
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
 

</body>


</html>
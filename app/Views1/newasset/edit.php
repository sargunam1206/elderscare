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
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
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
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('editasset/'.base64_encode(base64_encode(base64_encode($asset['id'])))); ?>">
                          <span class="icon-small"></span>Edit Assets
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
                        <a class="sidebar-link" href="<//?= base_url('viewassignedassets'); ?>">
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
      <style>
    .nested-container {
        padding-left: 20px; /* Indentation for sub-elements */
        margin-top: 10px;
    }
</style>
     
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
                        <a class="text-muted text-decoration-none d-flex" href="<?= base_url(); ?>/public/dist/main/index.html">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
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
          <div class="row">
            
            
            
            
            <div class="col-12">
              <!-- start Event Registration -->
              <div class="card">
                <form  method="post" action="<?= base_url('updateasset/' . $asset['id']); ?>" enctype="multipart/form-data">
                  <div class="card-body">
                    <h4 class="card-title">Edit Assets</h4>
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
                  </div>
                  <div class="card-body border-top">
  <div class="row">
    <!-- Asset Type -->
    <div class="col-6">
      <div class="mb-3">
        <label for="asset_type" class="form-label">Asset Type</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100" name="asset_type" id="assetTypeInput" 
                 value="<?= old('asset_type', $asset['asset_type']); ?>" placeholder="Enter or Select Asset Type" 
                 data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off"readonly />
          <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetTypeInput" style="max-height: 150px; overflow-y: auto;">
            <input type="text" class="form-control mb-2" id="assetTypeSearch" placeholder="Search Asset Type" autocomplete="off" />
            <div id="assetTypeList" style="width: 100%;"></div>
          </ul>
        </div>
      </div>
    </div>

        <!-- Customer Name -->
        <div class="col-6" id="customer_name" style="display:none">
      <div class="mb-3">
        <label for="customer_name" class="form-label">Customer Name</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100" name="customer_name" id="customerNameInput" 
                 value="<?= old('customer_name', $asset['customer_name']); ?>" placeholder="Enter or Select Customer Name" 
                 data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" />
          <ul class="dropdown-menu p-3 w-100" aria-labelledby="customerNameInput" style="max-height: 150px; overflow-y: auto;">
            <input type="text" class="form-control mb-2" id="customerNameSearch" placeholder="Search Customer" autocomplete="off" />
            <div id="customerList" style="width: 100%;"></div>
          </ul>
        </div>
      </div>
    </div>


    <!-- Asset Make -->
    <div class="col-6">
      <div class="mb-3">
        <label for="asset_make" class="form-label">Asset Make</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100" name="asset_make" id="assetMakeInput" 
                 value="<?= old('asset_make', $asset['asset_make']); ?>" placeholder="Enter or Select Asset Make" 
                 data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly/>
          <ul class="dropdown-menu p-3 w-100" aria-labelledby="assetMakeInput" style="max-height: 150px; overflow-y: auto;">
            <input type="text" class="form-control mb-2" id="assetMakeSearch" placeholder="Search Asset Make" autocomplete="off" />
            <div id="assetMakeList" style="width: 100%;"></div>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-6" id="purpose" style="display:none">
  <!-- Purpose Field -->
  <div class="mb-3">
    <label for="purpose" class="form-label">Purpose</label>
    <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100" name="purpose" id="purposeInput" 
       value="<?= old('purpose', $asset['purpose'] ?? ''); ?>" placeholder="Enter or Select Purpose" 
       data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" />

      <ul class="dropdown-menu p-3 w-100" aria-labelledby="purposeInput" style="max-height: 150px; overflow-y: auto;">
        <!-- Search box inside the dropdown -->
        <input type="text" class="form-control mb-2" id="purposeSearch" placeholder="Search Purpose" autocomplete="off" />
        <div id="purposeList" style="width: 100%;">
          <!-- Dynamic purpose list will be populated here -->
        </div>
      </ul>
    </div>
  </div>
</div>


    <!-- Specification -->
    <div class="col-6">
      <div class="mb-3">
        <label for="specification" class="form-label">Specification</label>
        <input type="text" class="form-control" name="specification" id="specification" 
               value="<?= old('specification', $asset['specification']); ?>" placeholder="Enter the Specification" autocomplete="off" />
      </div>
    </div>

     <!-- UOM -->
<!-- UOM -->
<div class="col-6" id="uomInput" style="display:none">
  <div class="mb-3">
    <label for="uom" class="form-label">Unit of Measurement (UOM)</label>
    <div class="dropdown">
      <!-- Main input field -->
      <input type="text" class="form-control w-100" id="uomInput" name="uom"
             value="<?= old('uom', $asset['uom'] ?? ''); ?>"
             placeholder="Enter or Select UOM" autocomplete="off" readonly/>

      <!-- Dropdown structure -->
      <div class="dropdown-menu p-3 w-100" style="max-height: 150px; overflow-y: auto;" id="uomDropdown">
        <!-- Search box inside the dropdown -->
        <input type="text" class="form-control mb-2" id="uomSearch" placeholder="Search UOM" autocomplete="off" />
        <div id="uomList" style="width: 100%;">
          <!-- Dynamic UOM list will be populated here -->
        </div>
      </div>
    </div>
  </div>
</div>


     <!-- Current Stock -->
     <div class="col-6">
      <div class="mb-3">
        <label for="current_stock" class="form-label">Current Stock</label>
        <input type="text" class="form-control" name="current_stock" 
       value="<?= old('current_stock', $asset['current_stock'] ?? ''); ?>" placeholder="Enter Current Stock" autocomplete="off" />

      </div>
    </div>
 <!-- Calibration id -->
    <div class="col-6"  id="calibration_id" style="display:none">
  <div class="mb-3">
    <label for="calibration_id" class="form-label">Calibration Id</label>
    <input type="text" class="form-control" name="calibration_id" 
       value="<?= old('calibration_id', $asset['calibration_id'] ?? ''); ?>" placeholder="Enter Calibration Id" autocomplete="off" />

  </div>
</div>

    <!-- Reorder Level -->
    <div class="col-6" id="reorder_level" style="display:none">
      <div class="mb-3">
        <label for="reorder_level" class="form-label">Reorder Level</label>
        <input type="text" class="form-control" name="reorder_level" id="reorder_level" 
               value="<?= old('reorder_level', $asset['reorder_level']); ?>" placeholder="Enter the Reorder Level" autocomplete="off" />
      </div>
    </div>
 <!-- Serial ID -->
 <div class="col-6" id="serial_id" style="display:none">
      <div class="mb-3">
        <label for="serial_id" class="form-label">Serial Id</label>
        <input type="text" class="form-control" name="serial_id" 
       value="<?= old('serial_id', $asset['serial_id'] ?? ''); ?>" placeholder="Enter Serial Id" autocomplete="off" />

      </div>
    </div>


<!-- Dealer Name -->
<div class="col-6" id="dealer_name" style="display:none">
  <div class="mb-3">
    <label for="dealer_name" class="form-label">Dealer Name</label>
    <div class="dropdown">
      <!-- Main input field -->
      <input type="text" class="form-control w-100" name="dealer_name"
             value="<?= old('dealer_name', $asset['dealer_name'] ?? ''); ?>"
             placeholder="Enter or Select Dealer Name" autocomplete="off" id="dealerNameInput" readonly/>

      <!-- Dropdown structure -->
      <div class="dropdown-menu p-3 w-100" style="max-height: 150px; overflow-y: auto;" id="dealerDropdown">
        <!-- Search box inside the dropdown -->
        <input type="text" class="form-control mb-2" id="dealerSearch" placeholder="Search Dealer Name" autocomplete="off"/>
        <div id="dealerList" style="width: 100%;">
          <!-- Dynamic dealer list will be populated here -->
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- Location -->
        <div class="col-6"  id="location" style="display:none">
      <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100" name="location" id="locationInput" 
                 value="<?= old('location', $asset['location']); ?>" placeholder="Enter or Select Location" 
                 data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" />
          <ul class="dropdown-menu p-3 w-100" aria-labelledby="locationInput" style="max-height: 150px; overflow-y: auto;">
            <input type="text" class="form-control mb-2" id="locationSearch" placeholder="Search Location" autocomplete="off" />
            <div id="locationList" style="width: 100%;"></div>
          </ul>
        </div>
      </div>
    </div>


    <!-- Asset Image -->
    <div class="col-6" id="asset_image" style="display:none">
      <div class="mb-3">
        <label for="asset_image">Asset Image</label>
          <input type="file" class="form-control" name="asset_image" id="asset_image">
            <?php if (!empty($asset['asset_image'])) : ?>
              <img src="<?= base_url($asset['asset_image']); ?>" alt="Asset Image" width="100" id="imageThumbnail" style="cursor: pointer;">
              <?php endif; ?>
            </div>
        </div>

                <!-- Room -->
  <div class="col-6" id="room1" style="display:none">
  <div class="mb-3">
    <label for="room" class="form-label">Room</label>
    <div class="dropdown">
      <input type="text" class="form-control dropdown-toggle w-100" name="room" id="roomInput" 
             value="<?= old('room', $asset['room']); ?>" placeholder="Enter or Select Room" data-bs-toggle="dropdown" 
             aria-expanded="false" autocomplete="off" />
      <ul class="dropdown-menu p-3 w-100" aria-labelledby="roomInput" style="max-height: 150px; overflow-y: auto;">
        <!-- Search box inside the dropdown -->
        <input type="text" class="form-control mb-2" id="roomSearch" placeholder="Search Room" autocomplete="off" />
        <div id="roomList" style="width: 100%;">
          <!-- Dynamic room list will be populated here -->
        </div>
      </ul>
    </div>
  </div>
</div>


 <!-- Grade-->
    <div class="col-6" id="grade" style="display:none">
      <div class="mb-3">
        <label for="grade" class="form-label">Grade</label>
        <input type="text" class="form-control" name="grade" id="grade"    value="<?= old('grade', $asset['grade'] ?? ''); ?>" placeholder="Enter Grade" autocomplete="off" />
      </div>
    </div>

 <!-- GRN -->
    <div class="col-6">
      <div class="mb-3">
        <label for="grn" class="form-label">GRN</label>
        <input type="text" class="form-control" name="GRN" 
        id="grn" value="<?= isset($asset['grn']) ? $asset['grn'] : ''; ?>" readonly  />
        
      </div>
    </div>

    <!-- Material -->
    <div class="col-6" id="material" style="display:none">
      <div class="mb-3">
        <label for="material" class="form-label">Material</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100" name="material" id="materialInput" 
                 value="<?= old('material', $asset['material']); ?>" placeholder="Enter or Select Material" 
                 data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" />
          <ul class="dropdown-menu p-3 w-100" aria-labelledby="materialInput" style="max-height: 150px; overflow-y: auto;">
            <input type="text" class="form-control mb-2" id="materialSearch" placeholder="Search Material" autocomplete="off" />
            <div id="materialList" style="width: 100%;"></div>
          </ul>
        </div>
      </div>
    </div>
 <!-- Accessories-->

    <!--div class="col-6">
      <div class="mb-3">
        <label for="accessories" class="form-label">Accessories</label>
        <input type="text" class="form-control" name="accessories" 
       value="<//?= old('accessories', $asset['accessories'] ?? ''); ?>" placeholder="Enter Accessories" autocomplete="off" />

      </div>
    </div-->
  <!-- Accessories Section -->
  <div class="col-6" id="accessories" style="display:none">
    <div class="mb-3">
       
            <input type="hidden" name="accessories" id="inputData">
            <label for="accessories" class="form-label">Accessories</label>
            <div>
           <button type="button" class="btn bg-danger-subtle text-danger ms-6 px-4" onclick="openModal()">Edit Accessories</button>
           </div>

            <div id="nested-container"></div>
       
    </div>
</div>



<!-- Modal Structure -->
<div class="modal fade" id="accessoriesModal" tabindex="-1" aria-labelledby="accessoriesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accessoriesModalLabel">Edit Accessories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Nested Accessories Container -->
                <div id="modal-nested-container">
                    <!-- Existing accessories will be dynamically loaded here -->
                </div>
                  <button type="button" onclick="addInputBox(document.getElementById('modal-nested-container'))" class="btn bg-primary-subtle text-primary mt-3">
        Add Accessories
    </button>
                
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-success" onclick="saveAccessories()">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>


    
   
    <!-- Part Name -->
    <div class="col-6" id="part_name" style="display:none">
      <div class="mb-3">
        <label for="part_name" class="form-label">Part Name</label>
        <input type="text" class="form-control" name="part_name" id="part_name"    value="<?= old('part_name', $asset['part_name'] ?? ''); ?>" placeholder="Enter the Part Name" autocomplete="off" />
      </div>
    </div>
     <!-- Resharpening -->
    <div class="col-6" id="resharpening" style="display:none">
      <div class="mb-3">
         <label for="conno2" class="form-label">Resharpen</label>
         <select name="resharpening" class="form-control">
    <option value="">Select Resharpen</option>
    <option value="Yes" <?= old('resharpening', $asset['resharpening'] ?? '') == 'Yes' ? 'selected' : ''; ?>>Yes</option>
    <option value="No" <?= old('resharpening', $asset['resharpening'] ?? '') == 'No' ? 'selected' : ''; ?>>No</option>
</select>

        </div>
    </div>
    <!-- Part Number -->
    <div class="col-6" id="part_number" style="display:none">
      <div class="mb-3">
        <label for="part_number" class="form-label">Part Number</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100" name="part_number" id="partNumberInput" 
                 value="<?= old('part_number', $asset['part_number']); ?>" placeholder="Enter or Select Part Number" 
                 data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" />
          <ul class="dropdown-menu p-3 w-100" aria-labelledby="partNumberInput" style="max-height: 150px; overflow-y: auto;">
            <input type="text" class="form-control mb-2" id="partNumberSearch" placeholder="Search Part Number" autocomplete="off" />
            <div id="partNumberList" style="width: 100%;"></div>
          </ul>
        </div>
      </div>
    </div>



    <!-- Quantity 
    <div class="col-6">
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="text" class="form-control" name="quantity" id="quantity" 
               value="<//?= old('quantity', $asset['quantity']); ?>" placeholder="Enter the Quantity Received" autocomplete="off" />
      </div>
    </div>-->

    
    <!-- Supplier Name 
    <div class="col-6">
      <div class="mb-3">
        <label for="supplier_name" class="form-label">Supplier Name</label>
        <div class="dropdown">
          <input type="text" class="form-control dropdown-toggle w-100" name="supplier_name" id="supplierNameInput" 
            value="<//?= old('supplier_name', $asset['supplier_name']); ?>" placeholder="Enter or Select Supplier Name" data-bs-toggle="dropdown" 
            aria-expanded="false" autocomplete="off" />
          <ul class="dropdown-menu p-3 w-100" aria-labelledby="supplierNameInput" style="max-height: 150px; overflow-y: auto;">
            <input type="text" class="form-control mb-2" id="supplierNameSearch" placeholder="Search Supplier" autocomplete="off" />
            <div id="supplierList" style="width: 100%;">-->
              <!-- Dynamic supplier list will be populated here 
            </div>
          </ul>
        </div>
      </div>
    </div>-->
    <!-- Asset Name
    <div class="col-6">
      <div class="mb-3">
        <label for="asset_name" class="form-label">Asset Name</label>
        <input type="text" class="form-control" name="asset_name" id="asset_name" 
               value="<//?= old('asset_name', $asset['asset_name']); ?>" placeholder="Enter the Asset Name" autocomplete="off" />
      </div>
    </div>-->






</div>
</div>

                  
                  
                  <div class="p-3 border-top">
  <div class="d-flex flex-wrap gap-6 align-items-center">
    <div>
      <div class="text-center">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">
          Update
        </button>
        <!-- Trigger for Delete Confirmation Modal -->
        <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger">
          Delete
        </a>
      </div>
    </div>
  </div>
</div>

<?php
           $base=base64_encode(base64_encode(base64_encode($asset['id'])));
          ?>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title" id="deleteModalTitle">Are you sure you want delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer d-flex gap-3">
        <!-- Confirm Delete Button -->
        <a href="<?= base_url('deleteasset/' . $asset['id']); ?>" id="btn-confirm-delete" class="btn btn-danger">
          Yes
        </a>
        <!-- Cancel Button -->
        
      </div>
    </div>
  </div>
</div>


<script>
  // Attach click event to the delete button to trigger the modal
  document.getElementById('btn-delete-trigger').addEventListener('click', function () {
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
    deleteModal.show();
  });
</script>



    <!-- Image Popup Modal -->
    <div class="modal" tabindex="-1" id="imageModal">
   <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Asset Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="" alt="Asset Image" id="modalImage" style="max-width: 100%; height: auto;" />
    
      </div>
    </div>
  </div>
</div>
<script>

// JavaScript to show image in modal on click -->

  // Show image in modal on click
  document.getElementById('imageThumbnail').addEventListener('click', function() {
    var imageSrc = this.src;
    var modal = new bootstrap.Modal(document.getElementById('imageModal'));
    var modalImage = document.getElementById('modalImage');
    modalImage.src = imageSrc;
    modal.show();
  });
</script>

 <script>
 
  

function openModal() {
    const accessoriesDataRaw = <?php echo json_encode($accessoriesData); ?>;
    console.log("Raw Accessories Data:", accessoriesDataRaw); // Debugging: Check raw data

    // Parse the data if it's a string (safety check)
    const accessoriesData = Array.isArray(accessoriesDataRaw)
        ? accessoriesDataRaw
        : JSON.parse(accessoriesDataRaw || "[]");

    console.log("Parsed Accessories Data:", accessoriesData); // Debugging: Confirm parsed data

    const container = document.getElementById("modal-nested-container");

    // Clear previous inputs
    container.innerHTML = "";

    // Check if accessoriesData is an array and loop through it
    if (Array.isArray(accessoriesData) && accessoriesData.length > 0) {
        accessoriesData.forEach((accessory, index) => {
            addInputBox(container, accessory, index);
        });
    } else {
        console.warn("No accessories data found or invalid format.");
    }

    document.getElementById("inputData").value = JSON.stringify(accessoriesData);
    // Show the modal
    const modal = new bootstrap.Modal(document.getElementById("accessoriesModal"));
    modal.show();
}



function addInputBox(parent, accessory = null, index = null) {
    // Create a new container for the input and its controls
    const container = document.createElement("div");
    container.className = "nested-container";

    // Create the input box for the accessory
    const input = document.createElement("input");
    input.type = "text";
    input.placeholder = "Enter value";
    input.className = "form-control";
    input.style.marginTop = "10px";
    input.style.width = "30%";  // Adjusted width for clarity

    if (accessory) {
        input.value = accessory.value; // Pre-fill with existing accessory data
    }

    // Add buttons for adding sub-accessories and deleting this accessory
    const addButton = document.createElement("button");
    addButton.textContent = "Add Sub-Accessory";
    addButton.type = "button";
    addButton.style.marginTop = "10px";
    addButton.className = "btn bg-info-subtle text-info ms-6 px-4";
    addButton.onclick = () => addInputBox(nestedContainer); // Add sub-accessory to this accessory container

    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.type = "button";
    deleteButton.style.marginTop = "10px";
    deleteButton.className = "btn bg-warning-subtle text-warning ms-6 px-4";
    deleteButton.onclick = () => container.remove();

    // Nested container for sub-children (sub-accessories)
    const nestedContainer = document.createElement("div");
    nestedContainer.className = "nested-container";

    // If the accessory has children (sub-accessories), add them recursively
    if (accessory && accessory.children && accessory.children.length > 0) {
        accessory.children.forEach((subAccessory) => {
            addInputBox(nestedContainer, subAccessory); // Recursively add sub-accessory
        });
    }

    // Assign a unique ID for this container (for styling purposes)
    container.id = `nested-${Date.now()}`;

    // Append the elements to the container
    container.appendChild(input);
    container.appendChild(addButton);
    container.appendChild(deleteButton);
    container.appendChild(nestedContainer);

    // Append the container to the parent
    parent.appendChild(container);
}



function collectAccessoriesData(parent) {
    const inputs = [];

    // Collect all immediate child containers with `nested-container`
    parent.querySelectorAll(":scope > div.nested-container").forEach((div) => {
        const inputBox = div.querySelector(":scope > input");
        const value = inputBox ? inputBox.value.trim() : null;

        // Skip if no value or empty
        if (!value) {
            return;
        }

        // Recursively collect children from this div (for sub-accessories)
        const children = collectAccessoriesData(div.querySelector(".nested-container"));

        // Add the current accessory with its children
        inputs.push({
            value: value,
            children: children
        });
    });

    return inputs;
}



// Function to save accessories data
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

 
// Function to open the modal and populate it with data
/*function openModal() {
    const accessoriesData = <?php echo json_encode($accessoriesData); ?>;
    const container = document.getElementById("modal-nested-container");

    // Clear previous inputs
    container.innerHTML = "";

    // Loop through the accessories data and create input boxes dynamically
    accessoriesData.forEach((accessory, index) => {
        addInputBox(container, accessory, index);
    });

    // Show the modal
    const modal = new bootstrap.Modal(document.getElementById("accessoriesModal"));
    modal.show();
}

// Function to dynamically add input boxes for accessories (and sub-accessories)
function addInputBox(parent, accessory = null, index = null) {
    // Create a new container for the input and its controls
    const container = document.createElement("div");
    container.className = "nested-container";

    // Create the input box for the accessory
    const input = document.createElement("input");
    input.type = "text";
    input.placeholder = "Enter value";
    input.className = "form-control";
    input.style.marginTop = "10px";
    input.style.width = "30%";  // Adjusted width for clarity

    if (accessory) {
        input.value = accessory.value; // Pre-fill with existing accessory data
    }

    // Add buttons for adding sub-accessories and deleting this accessory
    const addButton = document.createElement("button");
    addButton.textContent = "Add Sub-Accessory";
    addButton.type = "button";
    addButton.style.marginTop = "10px";
    addButton.className = "btn bg-info-subtle text-info ms-6 px-4";
    addButton.onclick = () => addInputBox(container); // Add sub-accessory to this accessory container

    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.type = "button";
    deleteButton.style.marginTop = "10px";
    deleteButton.className = "btn bg-warning-subtle text-warning ms-6 px-4";
    deleteButton.onclick = () => container.remove();

    // Nested container for sub-children (sub-accessories)
    const nestedContainer = document.createElement("div");
    nestedContainer.className = "nested-container";
   // nestedContainer.style.marginLeft = "30px"; // Indentation for sub-accessories

    // Check if the accessory has children (sub-accessories) and recursively create input boxes for them
    if (accessory && accessory.children && accessory.children.length > 0) {
        accessory.children.forEach((subAccessory) => {
            addInputBox(nestedContainer, subAccessory);
        });
    }

    // Assign a unique ID for this container (for styling purposes)
    container.id = `nested-${Date.now()}`;

    // Append the elements to the container
    container.appendChild(input);
    container.appendChild(addButton);
    container.appendChild(deleteButton);
    container.appendChild(nestedContainer);

    // Append the container to the parent
    parent.appendChild(container);
}





// Function to collect accessories data and save it
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


// Function to save accessories data
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
}*/

</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const purposeInput = document.getElementById('purposeInput');
    const purposeSearch = document.getElementById('purposeSearch');
    const purposeList = document.getElementById('purposeList');

    // Predefined constant purposes
    const constantPurposes = [
      "Consumables",
      "Tooling and Accessories",
      "Maintenance Equipment",
      "New Product Development (NPD)",
      "Quality Equipment"
    ];

    let purposes = [...constantPurposes]; // Initialize with constant values

    // Function to render purposes into the dropdown list
    function renderPurposes(items) {
      purposeList.innerHTML = ''; // Clear existing entries
      items.forEach((item) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item');
        listItem.textContent = item;
        listItem.setAttribute('data-value', item);

        // Handle click event to populate the input field
        listItem.addEventListener('click', function () {
          purposeInput.value = item;
        });

        purposeList.appendChild(listItem);
      });
    }

    // Initially render constant purposes
    renderPurposes(constantPurposes);

    // Fetch all purposes dynamically and append them
    fetch('<?= base_url('asset1/all_purposes'); ?>') // Update this to your endpoint
      .then((response) => response.json())
      .then((data) => {
        const fetchedPurposes = data
          .map((item) => item.purpose)
          .filter(Boolean); // Ensure no null/undefined values
        purposes = [...new Set([...constantPurposes, ...fetchedPurposes])]; // Merge and deduplicate
        renderPurposes(purposes);
      })
      .catch((error) => {
        console.error('Error fetching purposes:', error);
      });

    // Handle search input
    purposeSearch.addEventListener('input', function () {
      const query = this.value.toLowerCase();
      const filteredPurposes = purposes.filter((purpose) =>
        purpose.toLowerCase().includes(query)
      );
      renderPurposes(filteredPurposes);
    });

    // Move unmatched value to input field
    purposeSearch.addEventListener('blur', function () {
      const searchValue = this.value.trim();
      const isMatched = purposes.some(
        (purpose) => purpose.toLowerCase() === searchValue.toLowerCase()
      );

      if (!isMatched && searchValue) {
        purposeInput.value = searchValue;
        this.value = ''; // Clear the search box
      }
    });

    // Pre-fill the input field if a value is already set
    const prefilledPurpose = purposeInput.value.trim();
    if (prefilledPurpose) {
      const isMatched = purposes.some(
        (purpose) => purpose.toLowerCase() === prefilledPurpose.toLowerCase()
      );

      if (!isMatched) {
        purposes.push(prefilledPurpose); // Add prefilled value to the list
        renderPurposes(purposes);
      }
    }
  });

//Dealers
document.addEventListener('DOMContentLoaded', function () {
  const dealerNameInput = document.getElementById('dealerNameInput');
  const dealerDropdown = document.getElementById('dealerDropdown');
  const dealerSearch = document.getElementById('dealerSearch');
  const dealerList = document.getElementById('dealerList');

  let dealers = []; // Store all dealer names

  // Fetch all dealer names
  fetch('<?= base_url('asset1/all_dealers'); ?>')
    .then((response) => response.json())
    .then((data) => {
      dealers = data.map((dealer) => dealer.dealer_name.toLowerCase());
      dealerList.innerHTML = ''; // Clear existing entries

      data.forEach((dealer) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item'); // Bootstrap dropdown item
        listItem.textContent = dealer.dealer_name;
        listItem.addEventListener('click', function () {
          dealerNameInput.value = dealer.dealer_name; // Set value to input
          dealerDropdown.classList.remove('show'); // Close dropdown
        });
        dealerList.appendChild(listItem);
      });
    })
    .catch((error) => console.error('Error fetching dealer names:', error));

  // Show dropdown when the input field is focused
  dealerNameInput.addEventListener('focus', function () {
    dealerDropdown.classList.add('show');
  });

  // Filter dealers based on search input
  dealerSearch.addEventListener('input', function () {
    const query = this.value.toLowerCase();
    const dealerItems = dealerList.querySelectorAll('.dropdown-item');
    dealerItems.forEach((item) => {
      item.style.display = item.textContent.toLowerCase().includes(query) ? 'block' : 'none';
    });
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', function (event) {
    if (!dealerNameInput.contains(event.target) && !dealerDropdown.contains(event.target)) {
      dealerDropdown.classList.remove('show');
    }
  });
});

//UOM
document.addEventListener('DOMContentLoaded', function () {
  const uomInput = document.getElementById('uomInput');
  const uomDropdown = document.getElementById('uomDropdown');
  const uomSearch = document.getElementById('uomSearch');
  const uomList = document.getElementById('uomList');

  let uoms = []; // Store all UOMs

  // Fetch all UOMs
  fetch('<?= base_url('asset1/all_uoms'); ?>')
    .then((response) => response.json())
    .then((data) => {
      uoms = data.map((uom) => uom.uom.toLowerCase());
      uomList.innerHTML = ''; // Clear existing entries

      data.forEach((uom) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item'); // Bootstrap dropdown item
        listItem.textContent = uom.uom;
        listItem.addEventListener('click', function () {
          uomInput.value = uom.uom; // Set value to input
          uomDropdown.classList.remove('show'); // Close dropdown
        });
        uomList.appendChild(listItem);
      });
    })
    .catch((error) => console.error('Error fetching UOMs:', error));

  // Show dropdown when the input field is focused
  uomInput.addEventListener('focus', function () {
    uomDropdown.classList.add('show');
  });

  // Filter UOMs based on search input
  uomSearch.addEventListener('input', function () {
    const query = this.value.toLowerCase();
    const uomItems = uomList.querySelectorAll('.dropdown-item');
    uomItems.forEach((item) => {
      item.style.display = item.textContent.toLowerCase().includes(query) ? 'block' : 'none';
    });
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', function (event) {
    if (!uomInput.contains(event.target) && !uomDropdown.contains(event.target)) {
      uomDropdown.classList.remove('show');
    }
  });
});


 //Fetch Supplier Name Dynamically
//supplier
/*document.addEventListener('DOMContentLoaded', function () {
  const supplierNameInput = document.getElementById('supplierNameInput');
  const supplierSearch = document.getElementById('supplierSearch');
  const supplierList = document.getElementById('supplierList');

  let suppliers = []; // To store all supplier names

  // Fetch all supplier names initially
  fetch('<?= base_url('asset1/all_suppliers'); ?>')
    .then((response) => response.json())
    .then((data) => {
      suppliers = data.map((supplier) => supplier.supplier_name.toLowerCase()); // Store lowercase supplier names for comparison
      supplierList.innerHTML = ''; // Clear any existing entries

      data.forEach((supplier) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
        listItem.textContent = supplier.supplier_name;
        listItem.setAttribute('data-value', supplier.supplier_name); // Store the value in a data attribute

        // Handle click event to populate the input field
        listItem.addEventListener('click', function () {
          supplierNameInput.value = supplier.supplier_name; // Update the input value
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
  supplierSearch.addEventListener('blur', function () {
    const searchValue = this.value.trim();
    const isMatched = suppliers.includes(searchValue.toLowerCase());

    if (!isMatched && searchValue) {
      supplierNameInput.value = searchValue; // Move value to the input field
      this.value = ''; // Clear the search box
    }
  });
});*/





document.addEventListener('DOMContentLoaded', function () {
    
 function normalize(str) {
  return str.trim().toLowerCase().replace(/[^a-z0-9]/g, '');
}
             var asset_type = "Reamers" ; // Update the input value
         
          
                   fetch('<?= base_url('assetfields/'); ?>'+'/'+asset_type)
 .then(res => res.json())
  .then(response => {
      console.log(response);
    response.forEach(record => {
        console.log(record);
      const fields = record.split(',').map(val => val.trim());
     
      fields.forEach(dataValue => {
        console.log("Checking: " + dataValue);
        console.log("Checking: " + dataValue.toLowerCase());

      if (dataValue.toLowerCase() === "serial id") {
          const serial_id = document.getElementById('serial_id');
          serial_id.style.display = "block";

        }
        
           if (dataValue.toLowerCase() === "calibration id") {
          const calibration_id = document.getElementById('calibration_id');
          calibration_id.style.display = "block";

        }
        
      if (dataValue.toLowerCase() === "customer name") {
          const customer_name = document.getElementById('customer_name');
          customer_name.style.display = "block";
        }
        
             if (dataValue.toLowerCase() === "purpose") {
          const purpose = document.getElementById('purpose');
          purpose.style.display = "block";

        }
             if (dataValue.toLowerCase() === "purpose") {
          const purpose = document.getElementById('purpose');
          purpose.style.display = "block";

        }
        
          if (dataValue.toLowerCase() === "part name") {
          const part_name = document.getElementById('part_name');
          part_name.style.display = "block";

        }
        
              if (dataValue.toLowerCase() === "part number") {
          const part_number = document.getElementById('part_number');
          part_number.style.display = "block";

        }
        
       if (normalize(dataValue) === "unitofmeasurementuom") {
          const uomInput = document.getElementById('uomInput');
          uomInput.style.display = "block";

        }
             if (dataValue.toLowerCase() === "reorder level") {
          const reorder_level = document.getElementById('reorder_level');
          reorder_level.style.display = "block";

        }
        
              if (dataValue.toLowerCase() === "dealer name") {
          const dealer_name = document.getElementById('dealer_name');
          dealer_name.style.display = "block";

        }
         if (dataValue.toLowerCase() === "location") {
          const location = document.getElementById('location');
          location.style.display = "block";

        }
            if (dataValue.toLowerCase() === "asset image") {
          const asset_image = document.getElementById('asset_image');
          asset_image.style.display = "block";

        }
        
             if (dataValue.toLowerCase() === "room") {
          const room1 = document.getElementById('room1');
          room1.style.display = "block";

        }
           if (dataValue.toLowerCase() === "room") {
          const room1 = document.getElementById('room1');
          room1.style.display = "block";

        }
        
            if (dataValue.toLowerCase() === "grade") {
          const grade = document.getElementById('grade');
          grade.style.display = "block";

        }
        
           if (dataValue.toLowerCase() === "material") {
          const material = document.getElementById('material');
          material.style.display = "block";

        }
        
          if (dataValue.toLowerCase() === "accessories") {
          const accessories = document.getElementById('accessories');
          accessories.style.display = "block";

        }
        
          if (dataValue.toLowerCase() === "resharpen") {
          const resharpening = document.getElementById('resharpening');
          resharpening.style.display = "block";

        }
        

        
        
      });
    });
  })
  .catch(err => {
    console.error("API error:", err);
  });


  
    
    
    
});






//Fetch Asset type  Dynamically
document.addEventListener('DOMContentLoaded', function () {
    
    function normalize(str) {
  return str.trim().toLowerCase().replace(/[^a-z0-9]/g, '');
}

    
    
  const assetTypeInput = document.getElementById('assetTypeInput');
  const assetTypeSearch = document.getElementById('assetTypeSearch');
  const assetTypeList = document.getElementById('assetTypeList');



   const hiddenElements = document.querySelectorAll('[style*="display:none"]');

  const hiddenIds = Array.from(hiddenElements)
  .filter(el => el.id) // Ensure the element has an ID
  .map(el => el.id);    // Collect only the ID
  
   const dynamic = [];
   
 
   
   hiddenIds.forEach(fieldid => {
       dynamic[fieldid] = document.getElementById(fieldid);
     
   });
  
  
  
 const label1=['customer_name', 'purpose', 'uomInput', 'current_stock', 'calibration_id', 'reorder_level', 'serial_id', 'dealer_name', 'location', 'asset_image', 'room1', 'grade','material', 'accessories', 'part_name', 'resharpening', 'part_number'];
  const label= ["Customer Name","Purpose","Unit of Measurement (UOM)","Current Stock","Calibration Id","Reorder Level","Serial Id","Dealer Name","Location","Asset Image","Room","Grade","Material","Accessories","Part Name","Resharpen","Part Number"];
  
  


  
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
         
          
                   fetch('<?= base_url('assetfields/'); ?>'+'/'+type.asset_type)
 .then(res => res.json())
  .then(response => {
      console.log(response);
    response.forEach(record => {
        console.log(record);
      const fields = record.split(',').map(val => val.trim());
     
      fields.forEach(dataValue => {
        console.log("Checking: " + dataValue);
        console.log("Checking: " + dataValue.toLowerCase());

      if (dataValue.toLowerCase() === "serial id") {
          const serial_id = document.getElementById('serial_id');
          serial_id.style.display = "block";

        }
        
           if (dataValue.toLowerCase() === "calibration id") {
          const calibration_id = document.getElementById('calibration_id');
          calibration_id.style.display = "block";

        }
        
      if (dataValue.toLowerCase() === "customer name") {
          const customer_name = document.getElementById('customer_name');
          customer_name.style.display = "block";
        }
        
             if (dataValue.toLowerCase() === "purpose") {
          const purpose = document.getElementById('purpose');
          purpose.style.display = "block";

        }
             if (dataValue.toLowerCase() === "purpose") {
          const purpose = document.getElementById('purpose');
          purpose.style.display = "block";

        }
        
          if (dataValue.toLowerCase() === "part name") {
          const part_name = document.getElementById('part_name');
          part_name.style.display = "block";

        }
        
              if (dataValue.toLowerCase() === "part number") {
          const part_number = document.getElementById('part_number');
          part_number.style.display = "block";

        }
        
       if (normalize(dataValue) === "unitofmeasurementuom") {
          const uomInput = document.getElementById('uomInput');
          uomInput.style.display = "block";

        }
             if (dataValue.toLowerCase() === "reorder level") {
          const reorder_level = document.getElementById('reorder_level');
          reorder_level.style.display = "block";

        }
        
              if (dataValue.toLowerCase() === "dealer name") {
          const dealer_name = document.getElementById('dealer_name');
          dealer_name.style.display = "block";

        }
         if (dataValue.toLowerCase() === "location") {
          const location = document.getElementById('location');
          location.style.display = "block";

        }
            if (dataValue.toLowerCase() === "asset image") {
          const asset_image = document.getElementById('asset_image');
          asset_image.style.display = "block";

        }
        
             if (dataValue.toLowerCase() === "room") {
          const room1 = document.getElementById('room1');
          room1.style.display = "block";

        }
           if (dataValue.toLowerCase() === "room") {
          const room1 = document.getElementById('room1');
          room1.style.display = "block";

        }
        
            if (dataValue.toLowerCase() === "grade") {
          const grade = document.getElementById('grade');
          grade.style.display = "block";

        }
        
           if (dataValue.toLowerCase() === "material") {
          const material = document.getElementById('material');
          material.style.display = "block";

        }
        
          if (dataValue.toLowerCase() === "accessories") {
          const accessories = document.getElementById('accessories');
          accessories.style.display = "block";

        }
        
          if (dataValue.toLowerCase() === "resharpen") {
          const resharpening = document.getElementById('resharpening');
          resharpening.style.display = "block";

        }
        

        
        
      });
    });
  })
  .catch(err => {
    console.error("API error:", err);
  });

          
          label.forEach((labelValue, index) => {
               dynamic[hiddenIds[index]].style.display = "none";
              // console.log(hiddenIds[index]);
              
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

//Fetch Material Dynamically
document.addEventListener('DOMContentLoaded', function () {
  const materialInput = document.getElementById('materialInput');
  const materialSearch = document.getElementById('materialSearch');
  const materialList = document.getElementById('materialList');

  let materials = []; // To store material names

  // Fetch all materials initially
  fetch('<?= base_url('asset1/all_materials'); ?>') // Update this to your endpoint
    .then((response) => response.json())
    .then((data) => {
      materials = data.map((material) => material.material.toLowerCase()); // Store lowercase materials
      materialList.innerHTML = ''; // Clear existing entries

      data.forEach((material) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item');
        listItem.textContent = material.material;
        listItem.setAttribute('data-value', material.material);

        // Handle click event to populate the input field
        listItem.addEventListener('click', function () {
          materialInput.value = material.material; // Update the input value
        });

        materialList.appendChild(listItem);
      });
    })
    .catch((error) => {
      console.error('Error fetching materials:', error);
    });

  // Handle search input
  materialSearch.addEventListener('input', function () {
    const query = this.value.toLowerCase();

    const materialItems = document.querySelectorAll('#materialList .dropdown-item');
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
      materialList.innerHTML = '';
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
});


//Fetch Customer Name Dynamically
document.addEventListener('DOMContentLoaded', function () {
  const customerNameInput = document.getElementById('customerNameInput');
  const customerNameSearch = document.getElementById('customerNameSearch');
  const customerList = document.getElementById('customerList');

  let customers = []; // To store customer names

  // Fetch all customers initially
  fetch('<?= base_url('asset1/all_customers'); ?>') // Update this to your endpoint
    .then((response) => response.json())
    .then((data) => {
      customers = data.map((customer) => customer.customer_name.toLowerCase());
      customerList.innerHTML = ''; // Clear existing entries

      data.forEach((customer) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item');
        listItem.textContent = customer.customer_name;
        listItem.setAttribute('data-value', customer.customer_name);

        // Handle click event to populate the input field
        listItem.addEventListener('click', function () {
          customerNameInput.value = customer.customer_name;
        });

        customerList.appendChild(listItem);
      });
    })
    .catch((error) => {
      console.error('Error fetching customers:', error);
    });

  // Handle search input
  customerNameSearch.addEventListener('input', function () {
    const query = this.value.toLowerCase();

    const customerItems = document.querySelectorAll('#customerList .dropdown-item');
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
      customerList.innerHTML = '';
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

//Fetch Part Number Dynamically
document.addEventListener('DOMContentLoaded', function () {
  const partNumberInput = document.getElementById('partNumberInput');
  const partNumberSearch = document.getElementById('partNumberSearch');
  const partNumberList = document.getElementById('partNumberList');

  let partNumbers = []; // To store part numbers

  // Fetch all part numbers initially
  fetch('<?= base_url('asset1/all_part_numbers'); ?>') // Update this to your endpoint
    .then((response) => response.json())
    .then((data) => {
      partNumbers = data.map((item) => item.part_number.toLowerCase());
      partNumberList.innerHTML = '';

      data.forEach((item) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item');
        listItem.textContent = item.part_number;
        listItem.setAttribute('data-value', item.part_number);

        // Handle click event to populate the input field
        listItem.addEventListener('click', function () {
          partNumberInput.value = item.part_number;
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



//Fetch Location Dynamically
document.addEventListener('DOMContentLoaded', function () {
  const locationInput = document.getElementById('locationInput');
  const locationSearch = document.getElementById('locationSearch');
  const locationList = document.getElementById('locationList');

  let locations = []; // Array to store location names for filtering

  // Fetch all locations initially
  fetch('<?= base_url('asset1/all_locations'); ?>') // Update this to your endpoint
    .then((response) => response.json())
    .then((data) => {
      locations = data.map((item) => item.location.toLowerCase()); // Store location names in lowercase
      locationList.innerHTML = ''; // Clear any existing entries

      data.forEach((item) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
        listItem.textContent = item.location;
        listItem.setAttribute('data-value', item.location); // Store the value in a data attribute

        // Handle click event to populate the input field
        listItem.addEventListener('click', function () {
          locationInput.value = item.location; // Update the input value
        });

        locationList.appendChild(listItem);
      });
    })
    .catch((error) => {
      console.error('Error fetching locations:', error);
    });

  // Handle the search box input inside the dropdown
  locationSearch.addEventListener('input', function () {
    const query = this.value.toLowerCase(); // Case-insensitive search

    const locationItems = document.querySelectorAll('#locationList .dropdown-item');
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
      locationList.innerHTML = ''; // Optionally clear the list if desired
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


//Fetch Room Dynamically
document.addEventListener('DOMContentLoaded', function () {
  const roomInput = document.getElementById('roomInput');
  const roomSearch = document.getElementById('roomSearch');
  const roomList = document.getElementById('roomList');

  let rooms = []; // Array to store room names for filtering

  // Fetch all rooms initially
  fetch('<?= base_url('asset1/all_rooms'); ?>') // Update this to your endpoint
    .then((response) => response.json())
    .then((data) => {
      rooms = data.map((item) => item.room.toLowerCase()); // Store room names in lowercase
      roomList.innerHTML = ''; // Clear any existing entries

      data.forEach((item) => {
        const listItem = document.createElement('div');
        listItem.classList.add('dropdown-item'); // Bootstrap class for dropdown items
        listItem.textContent = item.room;
        listItem.setAttribute('data-value', item.room); // Store the value in a data attribute

        // Handle click event to populate the input field
        listItem.addEventListener('click', function () {
          roomInput.value = item.room; // Update the input value
        });

        roomList.appendChild(listItem);
      });
    })
    .catch((error) => {
      console.error('Error fetching rooms:', error);
    });

  // Handle the search box input inside the dropdown
  roomSearch.addEventListener('input', function () {
    const query = this.value.toLowerCase(); // Case-insensitive search

    const roomItems = document.querySelectorAll('#roomList .dropdown-item');
    let matchFound = false;

    roomItems.forEach((item) => {
      const roomName = item.textContent.toLowerCase();

      if (roomName.includes(query)) {
        item.style.display = 'block'; // Show matching room
        matchFound = true;
      } else {
        item.style.display = 'none'; // Hide non-matching room
      }
    });

    // If no match is found, clear the dropdown
    if (!matchFound) {
      roomList.innerHTML = ''; // Optionally clear the list if desired
    }
  });

  // Move unmatched value to input field
  roomSearch.addEventListener('blur', function () {
    const searchValue = this.value.trim();
    const isMatched = rooms.includes(searchValue.toLowerCase());

    if (!isMatched && searchValue) {
      roomInput.value = searchValue; // Move value to the input field
      this.value = ''; // Clear the search box
    }
  });
});


</script>

            
          </div>
          <!-- End row -->
        </div>
      </div>
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

      
      
     

      <script>
  function handleColorTheme(e) {
    document.documentElement.setAttribute("data-color-theme", e);
  }
</script>
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
  <script src="<?= base_url(); ?>/public/dist/assets/libs/fullcalendar/index.global.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/apps/contact.js"></script>
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
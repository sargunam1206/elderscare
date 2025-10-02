<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="900;url=http://viyoma.neuralarc.com/viyoma/logout" />

    <!-- Favicon icon-->

    <link rel="icon" type="image/png" sizes="180x180" href="<?= base_url('public/Logo-Elders_home.png'); ?>">
    <title>Nivasan Udayana</title>

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
    /* ========== Global Theme Colors ========== */
    :root {
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

    /* ========== Base Styles ========== */
    body {
      font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
      background-color: var(--light-gray);
      color: var(--dark-gray);
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

    /* ========== Tables ========== */
    .table {
      background-color: var(--white);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .table thead th {
      background-color: var(--primary-green);

      color: var( --white);
      font-weight: 600;
      padding: 12px 15px;
    }

    .table tbody td {
      padding: 10px 15px;
      border-bottom: 1px solid var(--border-color);
    }
    
    /* Address column with text wrapping */
    .table tbody td:nth-child(5) {
      max-width: 200px;
      word-wrap: break-word;
      white-space: normal;
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
    .badge-pending {
      background-color: #FFF3CD;
      color: #856404;
    }
    
    .badge-in-progress {
      background-color: #D1ECF1;
      color: #0C5460;
    }
    
    .badge-completed {
      background-color: #D4EDDA;
      color: #155724;
    }
    
    .badge-cancelled {
      background-color: #F8D7DA;
      color: #721C24;
    }

    /* ========== Upload Box ========== */
    .upload-box {
      border: 2px dashed #ccc;
      padding: 10px;
      text-align: center;
      cursor: pointer;
      border-radius: 8px;
      transition: all 0.3s ease;
      margin-bottom: 15px;
    }
    
    .upload-box:hover {
      background-color: #f8f9fa;
      border-color: var(--primary-green);
    }
    
    .upload-box i {
      font-size: 2rem;
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
      padding: 8px 12px;
      background: #f8f9fa;
      border-radius: 4px;
      margin-bottom: 8px;
      border: 1px solid #dee2e6;
    }
    
    .file-item button {
      background: none;
      border: none;
      color: #dc3545;
      cursor: pointer;
      padding: 0;
      margin-left: 10px;
    }

    /* ========== Validation Styles ========== */
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
    
    .is-invalid {
      border-color: #dc3545 !important;
    }
    
    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #dc3545;
    }
    
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip,
    .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip,
    .dropdown.is-invalid ~ .invalid-feedback {
      display: block;
    }
    
    .dropdown.is-invalid .form-control {
      border-color: #dc3545 !important;
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

    /* Add to your existing CSS */
#roomTypeDropdown.is-invalid .form-control {
  border-color: #dc3545 !important;
}

#roomTypeDropdown.is-invalid .invalid-feedback {
  display: block;
}
    /* Top controls: Show entries + Search (single line, left-right) */
    #enquiries_wrapper > .dataTables_length,
    #enquiries_wrapper > .dataTables_filter {
      display: inline-block;
      vertical-align: middle;
      margin-bottom: 10px;
    }

    #enquiries_wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }

    /* Push search input to the right */
    #enquiries_wrapper .dataTables_filter {
      margin-left: auto;
    }

    /* Bottom controls: Showing info + Pagination */
    #enquiries_wrapper > .dataTables_info,
    #enquiries_wrapper > .dataTables_paginate {
      display: inline-block;
      vertical-align: middle;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      #enquiries_wrapper {
        flex-direction: column;
        align-items: stretch;
      }

      #enquiries_wrapper > .dataTables_info,
      #enquiries_wrapper > .dataTables_paginate {
        width: 100%;
        text-align: center;
        margin: 5px 0;
      }

      /* Search box aligned to the right */
      #enquiries_wrapper > .dataTables_filter {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin: 5px 0;
      }

      #enquiries_wrapper .dataTables_filter {
        margin-left: 0;
      }
      
      #enquiries_wrapper > .dataTables_length {
        display: none !important;
      }
    }
    
    /* File link styling */
    .file-link {
      color: var(--primary-green);
      text-decoration: none;
      cursor: pointer;
    }
    
    .file-link:hover {
      text-decoration: underline;
      color: var(--primary-green-hover);
    }
  </style>
  <style>
    /* ===== Compact Global Adjustments ===== */
    body {
      font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
      font-size: 13px;
      /* reduced global font */
      /* background-color: var(--light-gray); */
      color: var(--dark-gray);
      line-height: 1.4;
    }

    /* Headings smaller */
    h5,
    .modal-title {
      font-size: 15px;
      font-weight: 600;
    }

    h6 {
      font-size: 13px;
      font-weight: 600;
    }

    /* Labels smaller */
    .form-label {
      font-size: 12px;
      margin-bottom: 2px;
    }

    /* Form controls compact */
    .form-control,
    .form-select {
      font-size: 12px;
      padding: 4px 8px;
      border-radius: 6px;
    }

    .form-control-sm,
    .form-select-sm {
      font-size: 12px;
      padding: 3px 6px;
    }

    /* Buttons compact */
    .btn {
      font-size: 12px;
      padding: 4px 10px;
      border-radius: 6px;
    }

    .btn-sm {
      font-size: 12px;
      padding: 3px 8px;
    }

    /* Table compact mode */
    .table thead th,
    .table tbody td {
      padding: 6px 8px !important;
      font-size: 12px;
    }

    .table thead th {
      font-weight: 600;
    }

    .table {
      margin-bottom: 0.5rem;
    }

    /* Card compact */
    .card,
    .form-section {
      padding: 10px !important;
      border-radius: 6px;
    }

    /* Modal compact */
    .modal-header,
    .modal-footer {
      padding: 8px 12px;
    }

    .modal-body {
      padding: 8px 12px;
    }

    .modal-title {
      font-size: 14px;
    }

    /* Validation messages smaller */
    .validation-message {
      font-size: 11px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      body {
        font-size: 12px;
      }

      .btn,
      .form-control,
      .form-select {
        font-size: 11px;
        padding: 3px 6px;
      }
    }

    /* ===== Global Compact Styles ===== */

    /* Reduce body padding + global font size */
    body {
      font-size: 13px;
      line-height: 1.3;
    }

    /* Compact form fields */
    .form-control,
    .form-select {
      font-size: 12px !important;
      padding: 4px 8px !important;
      height: auto !important;
      border-radius: 5px;
      margin-bottom: 4px;
      /* tighter vertical spacing */
    }

    /* Labels */
    .form-label {
      font-size: 12px;
      margin-bottom: 2px;
    }

    /* Compact buttons */
    .btn {
      font-size: 12px !important;
      padding: 4px 10px !important;
      border-radius: 5px;
    }

    /* Table compact */
    .table th,
    .table td {
      padding: 6px 8px !important;
      font-size: 12px;
    }

    /* Section headings smaller */
    h5,
    h6 {
      font-size: 13px !important;
      margin-bottom: 6px;
    }

    /* Card / section padding reduced */
    .card,
    .form-section {
      padding: 10px !important;
      margin-bottom: 10px !important;
      border-radius: 6px;
    }

    /* Modal compact */
    .modal-body {
      padding: 8px 12px !important;
      font-size: 12px;
    }

    .modal-header,
    .modal-footer {
      padding: 6px 10px !important;
    }

    .modal-title {
      font-size: 13px;
    }

    /* Input groups (e.g. icons/buttons inside inputs) */
    .input-group-text {
      font-size: 12px;
      padding: 2px;
    }

    .nav-pills .nav-link.active {
      background-color: var(--bs-primary) !important;
      color: #fff !important;
    }

    .nav-pills .nav-link.active {
      background-color: transparent !important;
      color: var(--primary-green-hover) !important;
      border-bottom: 3px solid var(--primary-green-hover);
      border-radius: 0;
      font-weight: 600;
    }
  </style>
    <style>
        /* Top controls: Show entries + Search (single line, left-right) */
        #form_inputs_wrapper>.dataTables_length,
        #form_inputs_wrapper>.dataTables_filter {
            display: inline-block;
            vertical-align: middle;
            margin-bottom: 10px;
        }

        #form_inputs_wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        /* Push search input to the right */
        #form_inputs_wrapper .dataTables_filter {
            margin-left: auto;
        }

        /* Bottom controls: Showing info + Pagination */
        #form_inputs_wrapper>.dataTables_info,
        #form_inputs_wrapper>.dataTables_paginate {
            display: inline-block;
            vertical-align: middle;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            #form_inputs_wrapper {
                flex-direction: column;
                align-items: stretch;
            }



            #form_inputs_wrapper>.dataTables_info,
            #form_inputs_wrapper>.dataTables_paginate {
                width: 100%;
                text-align: center;
                margin: 5px 0;
            }

            /* Search box aligned to the right */
            #form_inputs_wrapper>.dataTables_filter {
                width: 100%;
                display: flex;
                justify-content: flex-end;
                margin: 5px 0;
            }

            #form_inputs_wrapper .dataTables_filter {
                margin-left: 0;
            }

            #form_inputs_wrapper>.dataTables_length {
                display: none !important;
            }
        }
    </style>

</head>

<body style="background-color:#EDF7EE;">

    <?= view('layout/head-FO') ?>

    <!-- Preloader -->
    <div class="preloader">
        <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader"
            class="lds-ripple img-fluid" />
    </div>

    <!--  Header Start -->

    <!--  Header End -->







    <div class=" px-3 py-2">
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
      <div class="modal fade" id="vertical-center-scroll-modal" tabindex="-1" aria-labelledby="vertical-center-modal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <form method="post" id="blockRoomForm" action="<?= base_url('addroomblocked'); ?>"
                enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myLargeModalLabel"> Block Room</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <!-- Room No -->
                        <div class="col-12">
    <div class="mb-3">
        <label for="room_no" class="form-label required">Room No</label>
        <div class="dropdown">
            <input type="text" class="form-control dropdown-toggle w-100"
                name="room_no" id="room_no" placeholder="Select Room No"
                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required />
            <div class="invalid-feedback">Please select Room No.</div>
            <ul class="dropdown-menu p-2 w-100" aria-labelledby="room_no"
                style="max-height: 150px; overflow-y: auto;">
                <div id="roomNoList" style="width: 100%;">
                    <?php foreach ($rooms as $room): ?>
    <div class="dropdown-item" data-value="<?= $room['room_id']; ?>" data-text="<?= $room['room_no']; ?>">
        <?= $room['room_no']; ?>
    </div>
<?php endforeach; ?>

                    
                </div>
            </ul>
        </div>
    </div>
</div>



                        <!-- Room Status -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="room_status" class="form-label required">Room Status</label>
                                <div class="dropdown">
                                    <input type="text" class="form-control dropdown-toggle w-100"
                                        name="room_status" id="room_status" placeholder="Select Room Status"
                                        data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required />
                                    <div class="invalid-feedback">Please select Room Status.</div>
                                    <ul class="dropdown-menu p-2 w-100" aria-labelledby="room_status"
                                        style="max-height: 150px; overflow-y: auto;">
                                        <div id="roomStatusList" style="width: 100%;">
                                            <div class="dropdown-item" data-value="Blocked">Blocked</div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Reason -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="reason" class="form-label required">Reason</label>
                                <textarea class="form-control" name="reason" id="reason" rows="3"
                                    placeholder="Enter reason for blocking" required></textarea>
                                <div class="invalid-feedback">Please enter reason.</div>
                            </div>
                        </div>

                        <!-- Status -->
                      <!-- Status -->
<div class="col-12">
    <div class="mb-3">
        <label for="status" class="form-label required">Status</label>
        <div class="dropdown">
            <input type="text" class="form-control dropdown-toggle w-100"
                name="status" id="status" placeholder="Select Status"
                data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" required />
            <div class="invalid-feedback">Please select status.</div>
            <ul class="dropdown-menu p-2 w-100" aria-labelledby="status"
                style="max-height: 150px; overflow-y: auto;">
                <div id="statusList" style="width: 100%;">
                    <div class="dropdown-item" data-value="Pending">Pending</div>
                    <div class="dropdown-item" data-value="Resolved">Resolved</div>
                </div>
            </ul>
        </div>
        <!-- Inline info message -->
        <div id="statusInfo" class="form-text text-danger" style="display:none;">
            Room is resolved. Please change room status.
        </div>
    </div>
</div>


                        <!-- Start Date -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="start_date" class="form-label required">Start Date</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" required />
                                <div class="invalid-feedback">Please select start date.</div>
                            </div>
                        </div>

                        <!-- End Date -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="end_date" class="form-label required">End Date</label>
                                <input type="date" class="form-control" name="end_date" id="end_date" required />
                                <div class="invalid-feedback">Please select end date.</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Hidden input for room_id -->
<input type="hidden" name="room_id" id="room_id_hidden">


                <div class="modal-footer border-top justify-content-end">
                    <button type="button" class="btn bg-danger-subtle text-danger me-2" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">
                        Save
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>












        <!-- </div> -->

        <div class="">
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
                        <div class="">

                            <!-- <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                   -->

                            <?php
                            $session = \Config\Services::session();
                            $successMessage = $session->getFlashdata('success');
                            $activeTab = $_GET['tab'] ?? ''; // fallback to empty
                            ?>



                            <?php if ($activeTab === '' && $successMessage): ?>
                                <div class="alert bg-success-subtle text-info alert-dismissible fade show" role="alert">
                                    <div class="d-flex align-items-center text-success">
                                        <i class="ti ti-success-circle me-2 fs-4"></i>
                                        <?= $successMessage ?>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <!-- <form method="post" action="<?= base_url('viewassettype'); ?>"> -->



                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="" style="font-size:18px;"><i
                                            class="bi bi-building text-success me-1"></i>
                                        Blocked Rooms</h4>
                                    <div>

                                        <button type="button" class="btn btn-success mb-1 px-4 fs-4"
                                            data-bs-toggle="modal" data-bs-target="#vertical-center-scroll-modal">
                                            <i class="bi bi-plus-circle me-1"></i>
                                            Add Blocked Rooms
                                        </button>
                                    </div>
                                </div>


                                <form method="get" action="<?= current_url() ?>" class="mb-4">
  <div class="row g-3 align-items-end">

    <!-- From Date -->
    <div class="col-md-2">
      <label class="form-label">From Date</label>
      <input type="date" class="form-control" name="from_date" 
             value="<?= $filter_from_date ?? '' ?>">
    </div>

    <!-- To Date -->
    <div class="col-md-2">
      <label class="form-label">To Date</label>
      <input type="date" class="form-control" name="to_date" 
             value="<?= $filter_to_date ?? '' ?>">
    </div>

  <!-- Room No -->
<div class="col-md-2">
  <label class="form-label">Room No</label>
  <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100"
           name="roomNoDisplay"
           id="roomNoFilterDisplay"
           placeholder="Select Room No"
           data-bs-toggle="dropdown"
           aria-expanded="false"
           autocomplete="off"
           readonly
           value="<?= $filter_room_no ?: 'All' ?>" />

    <!-- Hidden input to store actual room_no -->
    <input type="hidden" name="room_no" id="roomNoFilter" value="<?= $filter_room_no ?: 'all' ?>">

    <ul class="dropdown-menu p-2 w-100" aria-labelledby="roomNoFilterDisplay"
        style="max-height: 150px; overflow-y: auto;">
      <div id="roomNoLists" style="width: 100%;">
        <div class="dropdown-item" data-value="all">All</div>
        <?php foreach ($room_nos as $r): ?>
          <div class="dropdown-item" data-value="<?= $r['room_no'] ?>">
            <?= $r['room_no'] ?>
          </div>
        <?php endforeach; ?>
      </div>
    </ul>
  </div>
</div>



   <!-- Status -->
<div class="col-md-2">
  <label class="form-label">Status</label>
  <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100"
           name="statusDisplay"
           id="statusFilterDisplay"
           placeholder="Select Status"
           data-bs-toggle="dropdown"
           aria-expanded="false"
           autocomplete="off"
           readonly
           value="<?= $filter_status ?: 'All' ?>" />

    <!-- Hidden input to store actual status -->
    <input type="hidden" name="status" id="statusFilter" value="<?= $filter_status ?: 'all' ?>">

    <ul class="dropdown-menu p-2 w-100" aria-labelledby="statusFilterDisplay"
        style="max-height: 150px; overflow-y: auto;">
      <div id="statusLists" style="width: 100%;">
        <div class="dropdown-item" data-value="all">All</div>
        <div class="dropdown-item" data-value="Pending">Pending</div>
        <div class="dropdown-item" data-value="Resolved">Resolved</div>
      </div>
    </ul>
  </div>
</div>


    <!-- Buttons -->
     <div class="col-md-3 d-flex gap-2">
                  <button type="submit"  class="btn btn-primary" >Filter</button>
                  <button type="submit" class="btn btn-success"  name="pdf" value="1" formtarget="_blank">PDF</button>
                  <button type="submit" name="excel" value="1" class="btn btn-primary">Excel</button>
                  <a href="<?= current_url() ?>" class="btn btn-secondary">Reset</a>
                 
                </div>
    
  </div>
</form>



                                <!-- <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</a>
    </td> -->
                                <div class="table-responsive mt-3">

                                    <table id="form_inputs"
                                        class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                                        <thead>
                                            <tr>
                                                <!-- <th><input type="checkbox" id="select_all"></th>  -->
                                                <th>S.No</th>
                                                <th>Room No</th> <!-- Decreased width -->
                                                 <!-- Increased width -->
                                                <th>Room Status</th>
                                                <th>Reason</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status</th>
                                                <th>Options</th> <!-- Decreased width -->
                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php $i = 1;
                                        foreach ($rooms as $asset): ?>
<tr>
    <td><?= $i++; ?></td>
    <td><?= $asset['room_no']; ?></td>
    <td><?= $asset['room_status']; ?></td>
    <td><?= $asset['reason']; ?></td>
    <td><?= $asset['start_date']; ?></td>
    <td><?= $asset['end_date']; ?></td>
    <td><?= $asset['status']; ?></td>
    <td>
        <?php 
        // Prepare asset array including room_id for edit
        $editAsset = [
            'id' => $asset['id'],
            'room_id' => $asset['room_id'],   // <-- make sure this exists
            'room_no' => $asset['room_no'],
            'room_status' => $asset['room_status'],
            'reason' => $asset['reason'],
            'status' => $asset['status'],
            'start_date' => $asset['start_date'],
            'end_date' => $asset['end_date']
        ]; 
        ?>
        <button type="button" class="btn" style="color:blue"
            data-bs-toggle="modal"
            data-bs-target="#vertical-center-scroll-modal"
            onclick='editAsset(<?= json_encode($editAsset) ?>)'>
            <i class="bi bi-pencil-square"></i>
        </button>
        <a href="javascript:void(0)" class="btn" data-bs-toggle="modal"
            data-bs-target="#deleteConfirmationModal<?= $asset['id']; ?>">
            <i class="bi bi-trash text-danger"></i>
        </a>
    </td>
</tr>



                                          

                                                <div class="modal fade"
                                                    id="deleteConfirmationModal<?= $asset['id']; ?>" tabindex="-1"
                                                    aria-labelledby="deleteModalTitle<?= $asset['id']; ?>"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header d-flex align-items-center">
                                                                <h5 class="modal-title"
                                                                    id="deleteModalTitle<?= $asset['id']; ?>">Are you
                                                                    sure you want to delete?</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer d-flex gap-3 justify-content-end">
                                                                <!-- Confirm Delete Button -->
                                                                <a href="<?= base_url('deleteroomblocked/' . $asset['id']); ?>"
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
        const relationInput = document.getElementById('roomTypeInput');
        const relationItems = document.querySelectorAll('#relationLists .dropdown-item');

        relationItems.forEach(item => {
            item.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                relationInput.value = value;
            });
        });

        const roomInput = document.getElementById('roomInput');
        const roomItems = document.querySelectorAll('#roomLists .dropdown-item');

        roomItems.forEach(item => {
            item.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                roomInput.value = value;
            });
        });
    </script>






    <!-- <script>
        function editAsset(asset) {


            document.getElementById('myLargeModalLabel').textContent = "Edit Rooms";

            // Update form action to update URL
            const form = document.getElementById("assetForm");
            form.action = "<?= base_url('updaterooms') ?>/" + asset.room_id;

            // Set all input values
            document.getElementById("room_no").value = asset.room_no || '';

            document.getElementById('roomTypeInput').value = asset.room_type || '';

            document.getElementById('roomInput').value = asset.room_status || '';



        }

        // Reset modal form when closed
        document.getElementById('vertical-center-scroll-modal').addEventListener('hidden.bs.modal', function () {
            document.getElementById('myLargeModalLabel').textContent = "Add Rooms";
            const form = document.getElementById('assetForm');
            form.reset();
            document.getElementById('addaccessory-container').innerHTML = '';
            form.action = "<?= base_url('assign'); ?>"; // Reset to "Add" mode

        }); 
    </script> -->
    <script>
        (() => {
            'use strict'

            // Fetch all forms that require validation
            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

   <script>
document.addEventListener("DOMContentLoaded", function () {
    const roomInput = document.getElementById('room_no');
    const roomNoList = document.getElementById('roomNoList');
    const form = document.getElementById('blockRoomForm');

    // Create hidden input for room_id
    // let hiddenRoomId = document.createElement('input');
    // hiddenRoomId.type = 'hidden';
    // hiddenRoomId.name = 'room_id';
    // hiddenRoomId.id = 'room_id_hidden';
    // form.appendChild(hiddenRoomId);

    // Fetch rooms via AJAX
    fetch('<?= base_url("blockroomform"); ?>')
    .then(response => response.json())
    .then(data => {
        roomNoList.innerHTML = '';
        if(data.length > 0){
            data.forEach(room => {
                const div = document.createElement('div');
                div.className = 'dropdown-item';
                div.setAttribute('data-value', room.room_id);   // store room_id
                div.setAttribute('data-text', room.room_no);    // show room_no
                div.textContent = room.room_no;
                roomNoList.appendChild(div);

                div.addEventListener('click', function() {
    roomInput.value = this.getAttribute('data-text');
    document.getElementById('room_id_hidden').value = this.getAttribute('data-value');
});


                
            });
        } else {
            roomNoList.innerHTML = '<div class="dropdown-item">No rooms found</div>';
        }
    })
    .catch(err => console.error(err));
});


document.querySelectorAll(".dropdown-menu .dropdown-item").forEach(function(item) {
    item.addEventListener("click", function() {
        let value = this.getAttribute("data-value");
        let input = this.closest(".dropdown").querySelector("input.form-control");
        input.value = value;
    });
});

</script>

<script>
function editAsset(asset) {
    // Debug: check the asset object
    console.log('Editing asset:', asset);
    console.log('room_id:', asset.room_id); // specifically check room_id

    // Update modal title
    document.getElementById('myLargeModalLabel').textContent = "Edit Blocked Room";

    const form = document.getElementById("blockRoomForm");
    form.action = "<?= base_url('updateroomblocked') ?>/" + asset.id; // your update URL

    // Set visible inputs
    document.getElementById("room_no").value = asset.room_no || '';
    document.getElementById("room_status").value = asset.room_status || '';
    document.getElementById("reason").value = asset.reason || '';
    document.getElementById("status").value = asset.status || '';
    document.getElementById("start_date").value = asset.start_date || '';
    document.getElementById("end_date").value = asset.end_date || '';

    // Set hidden room_id
    document.getElementById("room_id_hidden").value = asset.room_id || '';
}


// Reset modal when closed
document.getElementById('vertical-center-scroll-modal').addEventListener('hidden.bs.modal', function () {
    document.getElementById('myLargeModalLabel').textContent = "Block Room";
    const form = document.getElementById('blockRoomForm');
    form.reset();
    form.action = "<?= base_url('addroomblocked'); ?>"; // reset to add URL
    // document.getElementById("room_id_hidden").value = ''; // clear hidden room_id
});
</script>

<script>
const statusInput = document.getElementById('status');
const statusList = document.getElementById('statusList');
const roomStatusInput = document.getElementById('room_status');
const roomStatusList = document.getElementById('roomStatusList');
const statusInfo = document.getElementById('statusInfo');

statusList.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function() {
        const value = this.getAttribute('data-value');
        statusInput.value = value;

        // Clear previous room status items
        roomStatusList.innerHTML = '';

        if (value === 'Resolved') {
            // Show inline info message
            statusInfo.style.display = 'block';

            // Only Vacant and Dirty in Room Status
            const options = ['Vacant', 'Dirty'];
            options.forEach(opt => {
                const div = document.createElement('div');
                div.className = 'dropdown-item';
                div.setAttribute('data-value', opt);
                div.textContent = opt;
                div.addEventListener('click', () => {
                    roomStatusInput.value = opt;
                });
                roomStatusList.appendChild(div);
            });

            roomStatusInput.value = ''; // clear previous value
        } else {
            // Hide message for other statuses
            statusInfo.style.display = 'none';

            // Default Blocked
            const div = document.createElement('div');
            div.className = 'dropdown-item';
            div.setAttribute('data-value', 'Blocked');
            div.textContent = 'Blocked';
            div.addEventListener('click', () => {
                roomStatusInput.value = 'Blocked';
            });
            roomStatusList.appendChild(div);
            roomStatusInput.value = 'Blocked';
        }
    });
});

document.getElementById('blockRoomForm').addEventListener('submit', function(e){
    console.log('Submitting room_id:', document.getElementById('room_id_hidden').value);
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
  // Generic dropdown handler
  document.querySelectorAll(".dropdown-menu .dropdown-item").forEach(function (item) {
    item.addEventListener("click", function () {
      let value = this.getAttribute("data-value");
      let displayInput = this.closest(".dropdown").querySelector("input.dropdown-toggle");
      let hiddenInput = this.closest(".dropdown").querySelector("input[type=hidden]");
      
      displayInput.value = this.textContent.trim();
      hiddenInput.value = value;
    });
  });
});

</script>



</body>


</html>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="refresh" content="900;url=http://viyoma.neuralarc.com/logout"  />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <title>MatDash Bootstrap Admin</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/ccc/wallet.css">



    <style>
    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }
  </style>
  <style>
  .modal-dialog-scrollable .modal-body {
    height: 50vh;

    overflow-y: auto;
  }
</style>
<style>
    /* ========== Global Theme Colors ========== */
    :root {
      /* --primary-green: #1B5E20; */
      /* --primary-green: #1B5E20; */
      --primary-green: #66BB6A;
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


    /* ========== Form Elements ========== */
    .form-control,
    .form-select {
      font-size: 14px;
      font-weight: 400;
      border: 1px solid var(--border-color);
      border-radius: 8px;
      padding: 8px 12px;
      background-color: var(--white);
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--secondary-green);
      box-shadow: 0 0 0 0.25rem rgba(102, 187, 106, 0.25);
    }

    .dropdown-menu {
      border-radius: 8px;
      border: 1px solid var(--border-color);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
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
      color: var(--table-header-text);
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
      color: var(--table-header-text);
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

    /* Make checkbox green when checked */
    .form-check-input:checked {
      background-color: var(--primary-green) !important;
      border-color: var(--primary-green) !important;
    }

    /* Optional: remove Bootstrap focus blue shadow on click */
    .form-check-input:focus {
      box-shadow: 0 0 0 0.25rem rgba(102, 187, 106, 0.25) !important;
    }

    /* Validation styles */
    .invalid-field {
      border-color: #dc3545 !important;
      background-color: #fff5f5 !important;
    }

    .validation-message {
      color: #dc3545;
      font-size: 0.875rem;
      margin-top: 0.25rem;
      display: none;
    }

    .border-primary {
      border-color: var(--primary-green) !important;
    }

    .form-check-input.required:not(:checked) {
      border-color: #dc3545 !important;
    }

    .form-control.required:invalid {
      border-color: #dc3545 !important;
    }

    /* New validation styles */
    .was-validated .form-control:invalid,
    .form-control.is-invalid {
      border-color: #dc3545;
      padding-right: calc(1.5em + 0.75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='m5.8 3.6.4.4.4-.4'/%3e%3cpath d='M6 7v2'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-select:invalid,
    .form-select.is-invalid {
      border-color: #dc3545;
      padding-right: calc(0.75em + 2.5rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='m5.8 3.6.4.4.4-.4'/%3e%3cpath d='M6 7v2'/%3e%3c/svg%3e");
      background-position: right 0.75rem center, center right 2rem;
      background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-check-input:invalid,
    .form-check-input.is-invalid {
      border-color: #dc3545;
    }

    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
      color: #dc3545;
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #dc3545;
    }

    .was-validated .form-control:invalid~.invalid-feedback,
    .form-control.is-invalid~.invalid-feedback,
    .was-validated .form-select:invalid~.invalid-feedback,
    .form-select.is-invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-feedback {
      display: block;
    }

    /* Custom dropdown validation */
    .dropdown.is-invalid .dropdown-toggle {
      border-color: #dc3545;
    }

    .dropdown.is-invalid~.invalid-feedback {
      display: block;
    }

    /* Custom validation for dropdown inputs */
    .dropdown-input.is-invalid {
      border-color: #dc3545 !important;
    }
  </style>

</head>

<body>
    <?= view('layout/head') ?>

  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
    <!-- Sidebar Start -->
       <!-- Sidebar Start -->
   
<div class="">
        

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
<div class="modal fade" id="vertical-center-scroll-modal" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <form method="post"  id="assetForm"  action="<?= base_url('addfund'); ?>" enctype="multipart/form-data">
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myLargeModalLabel"><i class="bi bi-wallet"></i>
 Add Wallet</h4>
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
         
         

  


       
  
<div class="col-12" id="part_number">
  <div class="mb-3">
    <label for="relationInput" class="form-label required">Room No</label>
    <div class="dropdown">
      <input type="text" 
             class="form-control w-100" 
             id="service_type_name"
             name="room_no"
             placeholder="Select Service Type"
             autocomplete="off"
             data-bs-toggle="dropdown" 
             aria-expanded="false" />

      <ul class="dropdown-menu w-100" style="max-height: 150px; overflow-y: auto;">
        <div id="relationLists" style="width: 100%;">
          <?php foreach($room as $type): ?> 
            <div class="dropdown-item" data-value="<?= $type['room_no'] ?>"><?= $type['room_no'] ?></div>
          <?php endforeach; ?>
        </div>
      </ul>
    </div>
  </div>
</div>


<div class="col-12" id="category_section" >
  <div class="mb-3">
    <label class="form-label required">Guest Info</label>
    <div class="dropdown">
      <input type="text" 
             class="form-control w-100" 
             id="category_name"
             name="guest_name"
             placeholder="Select Category"
             autocomplete="off"
             data-bs-toggle="dropdown" 
             aria-expanded="false" />

      <ul class="dropdown-menu w-100" style="max-height: 150px; overflow-y: auto;">
        <div id="categoryList" style="width: 100%;"></div>
      </ul>
    </div>
  </div>
</div>



   <div class="col-12">
      <div class="mb-3">
          <label for="room_no" class="form-label required">Balance Amount</label>
        <div class="dropdown">
                    <input type="text" class="form-control dropdown-toggle w-100" name="balance" id="balance"   autocomplete="off" readonly />

         
        </div>
      </div>
      </div>

   <div class="col-12">
      <div class="mb-3">
          <label for="room_no" class="form-label required">Add Amount</label>
        <div class="dropdown">
                    <input type="number" class="form-control dropdown-toggle w-100" name="add_amount" id="add_amount"   autocomplete="off" />

         
        </div>
      </div>
      </div>





<div>
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

            <div class="">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                  
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
                    
                  <form method="post"  action="<?= base_url('viewassettype'); ?>">
                    
 
<div class="row mb-3">
                <div class="col-md-6">
                    <h5 class="mb-0 fs-7"> <i class="bi bi-wallet2 text-success"></i>

Wallet</h5>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" 
   class="btn btn-primary" 
   data-bs-toggle="modal" 
   data-bs-target="#vertical-center-scroll-modal">
   Add wallet
</button>
                </div>
            </div>


              
                  <!-- <td class="p-1">
      <a href="javascript:void(0)" id="btn-delete-trigger" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Delete</a>
    </td> -->
                   <div class="table-responsive mt-3">
  
  <table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
  <thead>
        <tr>
        <!-- <th><input type="checkbox" id="select_all"></th>  -->
           <th>S.No</th>
    <th>Room No</th>       
    <th>First Name</th> <!-- Decreased width -->
    <th >Balance</th>     <!-- Increased width -->
    <th >Contact</th> 
   <!--<th >Actions</th>  -->
    <!-- Decreased width -->
        </tr>
    </thead>
    <tbody>
  
        <?php $i = 1; foreach ($wallet_guest as $asset):
          // $base=base64_encode(base64_encode(base64_encode($asset['id'])));
            ?>
            <tr>
              
              
                <td><?= $i++; ?> </td>
                <td><?= $asset['room']; ?></td>
                <td><?= $asset['first_name']; ?></td>
                <td><?= $asset['balance']; ?></td>
                <td><?= $asset['contact']; ?></td>
              
 
          
               
              <!--  <td>
                  <//?= var_dump($asset['id']); ?>

<button type="button"
        class="btn" style="color:blue"
        data-bs-toggle="modal"
        data-bs-target="#vertical-center-scroll-modal"
        onclick='editAsset(JSON.parse(this.getAttribute("data-asset")))'
        data-asset='<?= json_encode($asset) ?>'>

       
    <i class="bi bi-pencil-square" ></i>
</button>
 <a href="javascript:void(0)" 
   class="btn " 
   data-bs-toggle="modal" 
   data-bs-target="#deleteConfirmationModal<?= $asset['wallet_id']; ?>">
 <i class="bi bi-trash text-danger"></i>
</a>






                </td>  -->
            </tr>

            <div class="modal fade" id="deleteConfirmationModal<?= $asset['wallet_id']; ?>" tabindex="-1" aria-labelledby="deleteModalTitle<?= $asset['wallet_id']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title" id="deleteModalTitle<?= $asset['wallet_id']; ?>">Are you sure you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer d-flex gap-3 justify-content-end">
        <!-- Confirm Delete Button -->
        <a href="<?= base_url('deleterooms/' . $asset['wallet_id']); ?>" class="btn btn-danger">Yes</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
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
  <script src="<?= base_url(); ?>/public/js/dropdown_search.js"></script>




 <script>
  const roomInput = document.getElementById('room_no');
  const roomItems = document.querySelectorAll('#roomList .dropdown-item');

  roomItems.forEach(item => {
    item.addEventListener('click', function () {
     // const value = this.getAttribute('data-value');
      const value = this.getAttribute('data-value'); // ID
        //const label = this.getAttribute('data-label'); // Name

        relationInput.value = value; // Store ID in hidden input
        
        //relationInput.textContent = label; // Update dropdown button text
    });
  });
</script>





<script>
function editAsset(asset) {
  
 
  document.getElementById('myLargeModalLabel').textContent = "Edit Rooms";

  // Update form action to update URL
  const form = document.getElementById("assetForm");
  form.action = "<?= base_url('updaterooms') ?>/" + asset.room_id ;
  
  // Set all input values
  document.getElementById("room_no").value = asset.	room_no || '';

  document.getElementById('roomTypeInput').value = asset.room_type || '';



}

// Reset modal form when closed
document.getElementById('vertical-center-scroll-modal').addEventListener('hidden.bs.modal', function () {
    document.getElementById('myLargeModalLabel').textContent = "Add Wallet";
  const form = document.getElementById('assetForm');
  form.reset();
  document.getElementById('addaccessory-container').innerHTML = '';
  form.action = "<?= base_url('assign'); ?>"; // Reset to "Add" mode
 
}); 


document.addEventListener("DOMContentLoaded", function() {
    // When service type is selected
    document.querySelectorAll("#relationLists .dropdown-item").forEach(function(item) {
        item.addEventListener("click", function() {
            let selectedService = this.getAttribute("data-value");
            document.getElementById("service_type_name").value = selectedService;

            // Show category section
            document.getElementById("category_section").style.display = "block";

            // Clear old categories
            document.getElementById("categoryList").innerHTML = '<div class="p-2">Loading...</div>';

            // Fetch categories from API
               fetch(`/roomguest/${selectedService}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    let html = "";
                    if (data.length > 0) {
                        data.forEach(function(cat) {
                            html += `<div class="dropdown-item" data-value="${cat.first_name}">${cat.first_name}</div>`;
                        });
                    } else {
                        html = '<div class="dropdown-item disabled">No guest found</div>';
                    }
                    document.getElementById("categoryList").innerHTML = html;

                    // Attach click events for new items
                    document.querySelectorAll("#categoryList .dropdown-item").forEach(function(catItem) {
                        catItem.addEventListener("click", function() {
            

                        
                        document.getElementById("category_name").value = this.getAttribute("data-value");

   

                        });
                    });
                })
                .catch(error => {
                    document.getElementById("categoryList").innerHTML = `<div class="dropdown-item disabled">Error loading</div>`;
                    console.error(error);
                });
        });
    });

    // Search filter for categories
    document.getElementById("category_name").addEventListener("keyup", function() {
        let filter = this.value.toLowerCase();
        document.querySelectorAll("#categoryList .dropdown-item").forEach(function(item) {
            item.style.display = item.textContent.toLowerCase().includes(filter) ? "" : "none";
        });
    });


    function attachSearchFilter(inputId, listId) {
    document.getElementById(inputId).addEventListener("keyup", function() {
        let filter = this.value.toLowerCase();
        document.querySelectorAll(`#${listId} .dropdown-item`).forEach(function(item) {
            item.style.display = item.textContent.toLowerCase().includes(filter) ? "" : "none";
        });
    });
}

    attachSearchFilter("service_type_name", "relationLists"); // Service type search
    attachSearchFilter("category_name", "categoryList");  








});




document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("categoryList").addEventListener("click", function(e) {
        let target = e.target.closest(".dropdown-item");
        if (target) {
           
         
            let selectedCategory =target.getAttribute("data-value");
            document.getElementById("category_name").value = selectedCategory;
           

        
           
           //console.log(selectedCategory);
            // Fetch modes
            fetch(`/guest_wallet/${selectedCategory}`)
                .then(response => response.json())
                
                .then(data => {
                   
                    let html = "";
                    if (data.length > 0) {
                        document.getElementById("balance").value = data[0].balance;
                    } else {
                       document.getElementById("balance").value = 0;
                    }
                    document.getElementById("serviceList").innerHTML = html;

                   
                })
                .catch(error => {
                    document.getElementById("serviceList").innerHTML = `<div class="dropdown-item disabled">Error loading</div>`;
                    console.error(error);
                });
        }
    });
});

</script>
</body>


</html>
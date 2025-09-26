<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Udayana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet"
    href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />


  <style>
  /* ========== Global Theme Colors ========== */
:root {
  /* --primary-green: #1B5E20; */
    /* --primary-green: #1B5E20; */
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

/* Active navbar link underline */
.navbar-nav .nav-link {
    position: relative;
    padding-bottom: 4px; /* space for underline */
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

/* Badge styling */
.badge {
  font-size: 0.7rem !important;
  padding: 4px 10px;
}

</style>
<style>
:root{
  --font-family: 'Poppins', 'Inter', 'Segoe UI', sans-serif;
  --font-size-base: 13px;
  --font-size-sm: 12px;
  --font-size-xs: 11px;
  --radius: 6px;
  --card-padding: 10px;
  --modal-padding: 8px 12px;
  --table-pad: 6px 8px;
  --btn-pad: 4px 10px;
  --line-height: 1.3;
}

/* ---------- Controls wrapper (top/bottom + responsive) ---------- */
#form_inputs_wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  gap: .5rem;
}

#form_inputs_wrapper > .dataTables_length,
#form_inputs_wrapper > .dataTables_filter,
#form_inputs_wrapper > .dataTables_info,
#form_inputs_wrapper > .dataTables_paginate {
  display: inline-block;
  vertical-align: middle;
  margin: 10px 0;
}

/* push search to right on wide screens */
#form_inputs_wrapper .dataTables_filter { margin-left: auto; }

/* ---------- Global compact styles ---------- */
body {
  font-family: var(--font-family);
  font-size: var(--font-size-base);
  line-height: var(--line-height);
  background-color: var(--light-gray);
  color: var(--dark-gray);
}

/* Headings */
h5, .modal-title { font-size: 15px; font-weight: 600; }
h6 { font-size: 13px; font-weight: 600; }

/* Forms / buttons */
.form-label { font-size: var(--font-size-sm); margin-bottom: 2px; }
.form-control, .form-select {
  font-size: var(--font-size-sm);
  padding: 4px 8px;
  border-radius: var(--radius);
  height: auto;
  margin-bottom: 4px;
}
.form-control-sm, .form-select-sm { font-size: 12px; padding: 3px 6px; }

.btn {
  font-size: 12px;
  padding: var(--btn-pad);
  border-radius: var(--radius);
}
.btn-sm { font-size: 12px; padding: 3px 8px; }

/* Table compact */
.table thead th, .table tbody td, .table th, .table td {
  padding: var(--table-pad) !important;
  font-size: 12px;
}
.table thead th { font-weight: 600; }
.table { margin-bottom: .5rem; }

/* Card / sections / modal */
.card, .form-section {
  padding: var(--card-padding) !important;
  border-radius: var(--radius);
  margin-bottom: 10px !important;
}
.modal-header, .modal-footer { padding: 6px 10px; }
.modal-body { padding: var(--modal-padding); font-size: 12px; }
.modal-title { font-size: 13px; }

/* Input groups, pills, misc */
.input-group-text { font-size: 12px; padding: 2px; }
.nav-pills .nav-link.active {
  background-color: transparent !important;
  color: var(--primary-green-hover);
  border-bottom: 3px solid var(--primary-green-hover);
  border-radius: 0;
  font-weight: 600;
}

/* Dropdowns and small controls */
.dropdown-menu { max-height: 200px; overflow-y: auto; }
.dropdown-item { padding: .25rem 1rem; cursor: pointer; }
.dropdown-item:hover, .dropdown-item.active { background-color: #198754; color: #fff; }

.quantity-control { width: 140px; }
.category-input, .item-input, .service-input { cursor: pointer; background-color: #fff; }
#laundryTable th { white-space: nowrap; }
.modal-xl { max-width: 95%; }

/* ---------- Responsive (combined) ---------- */
@media (max-width: 768px) {
  /* wrapper becomes column */
  #form_inputs_wrapper { flex-direction: column; align-items: stretch; }
  #form_inputs_wrapper > .dataTables_info,
  #form_inputs_wrapper > .dataTables_paginate {
    width: 100%; text-align: center; margin: 5px 0;
  }
  /* search: full width and aligned right inside it */
  #form_inputs_wrapper .dataTables_filter {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    margin: 5px 0;
  }
  #form_inputs_wrapper > .dataTables_length { display: none !important; }

  /* smaller text / tighter controls on small screens */
  body { font-size: var(--font-size-xs); }
  .btn, .form-control, .form-select { font-size: var(--font-size-xs); padding: 3px 6px; }
}
</style>

<style>   
/* Top controls: Show entries + Search (single line, left-right) */
#form_inputs_wrapper > .dataTables_length,
#form_inputs_wrapper > .dataTables_filter {
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
#form_inputs_wrapper > .dataTables_info,
#form_inputs_wrapper > .dataTables_paginate {
  display: inline-block;
  vertical-align: middle;
  margin-top: 10px;
}

@media (max-width: 768px) {
  #form_inputs_wrapper {
    flex-direction: column;
    align-items: stretch;
  }

 
  
  #form_inputs_wrapper > .dataTables_info,
  #form_inputs_wrapper > .dataTables_paginate {
    width: 100%;
    text-align: center;
    margin: 5px 0;
  }

   /* Search box aligned to the right */
  #form_inputs_wrapper > .dataTables_filter {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    margin: 5px 0;
  }

  #form_inputs_wrapper .dataTables_filter {
    margin-left: 0;
  }
   #form_inputs_wrapper > .dataTables_length {
    display: none !important;
  }
}

.modal-body {
  max-height: 70vh;   /* adjust % of screen */
  overflow-y: auto;
}


  </style> 
  <!-- stepper form styles -->

 <style>
.payment-method-card {
  border: 2px solid #e0e0e0;
  cursor: pointer;
  transition: all 0.3s;
}
.payment-method-card.active {
  border-color: #198754;
  background: #e8f9f0;
  box-shadow: 0 0 8px rgba(25, 135, 84, 0.4);
}
.payment-method-card:hover {
  border-color: #198754;
}
</style>
<style>
  /* Make wrapper relative */
.room-wrapper {
  position: relative;
}

/* Floating menu styling */
.room-menu {
  position: absolute;
  top: 105%;
  left: 0;
  width: 100%;
  z-index: 10;
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 0; /* no padding for ul */
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  list-style: none;
}

.room-menu li {
  padding: 5px 10px;
  cursor: pointer;
  border-bottom: 1px solid #eee;
}

.room-menu li:last-child { border-bottom: none; }

.room-menu li:hover {
  background-color: #e8f9f0;
  color: #198754;
}



</style>
</head>

<body style="background-color:#EDF7EE;">
    <?= view('layout/head-FO') ?>

  <!-- Preloader -->





  <!-- Sidebar Start -->

  <!--  Sidebar End -->

  <!--  Header Start -->

  <!--  Header End -->

  <div class="px-3">
    <div class="">
      <h5 class=" fs-7"><i class="bi bi-house-door text-success"></i>
        Inhouse Guest</h5>
    </div>

    <!-- start Basic Area Chart -->
    <?php
    $session = \Config\Services::session();
    if (isset($session->success)): ?>
      <div class="alert bg-success-subtle text-info alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center text-success">
          <i class="ti ti-info-circle me-2 fs-4"></i>
          <?= $session->success; ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    

<div class="container-fluid">
  <div class="row">
    <!-- Left Side (Room Info) -->
    <div class="col-md-8">
      <div class="card shadow-md rounded-3">
        <div class="card-body" id="room-info">
          <h4 class="text-center text-muted">Select a Room</h4>
          <p class="text-center">Click on a room on the right to view details here.</p>
        </div>
      </div>
    </div>

    <!-- Right Side (Rooms + Legend + Counts) -->
    <div class="col-md-4">
      <div class="card text-dark shadow-sm border-0">
        <div class="p-3">
          <!-- Legend with counts -->
          <div class="mb-3">
            <div class="d-flex flex-wrap gap-4 align-items-center" id="legend">
              <span class="badge d-flex align-items-center fw-semibold text-success">
                <span class="rounded-circle me-2" style="width: 12px; height: 12px; background-color: #2e7d32;"></span>
                Vacant (<span id="count-vacant">0</span>)
              </span>
              <span class="badge d-flex align-items-center fw-semibold text-danger">
                <span class="rounded-circle me-2" style="width: 12px; height: 12px; background-color: #d32f2f;"></span>
                Occupied (<span id="count-occupied">0</span>)
              </span>
              <span class="badge d-flex align-items-center fw-semibold" style="color: goldenrod;">
                <span class="rounded-circle me-2" style="width: 12px; height: 12px; background-color: goldenrod;"></span>
                Reserved (<span id="count-reserved">0</span>)
              </span>
              <span class="badge d-flex align-items-center fw-semibold" style="color: brown;">
                <span class="rounded-circle me-2" style="width: 12px; height: 12px; background-color: brown;"></span>
                Dirty (<span id="count-dirty">0</span>)
              </span>
            </div>
          </div>

          <!-- Rooms Grid -->
          <div class="row g-2" id="room-grid">
            <?php 
              $statuses = ['Vacant', 'Occupied', 'Reserved', 'Dirty'];
              for ($i = 1; $i <= 50; $i++): 
                $status = $statuses[array_rand($statuses)];
                $color = ($status == 'Vacant') ? '#2e7d32' : (($status == 'Occupied') ? '#d32f2f' : (($status == 'Reserved') ? 'goldenrod' : 'brown'));
            ?>
              <div class="col-3 room-wrapper">
                <button 
                  class="btn w-100 text-white fw-semibold room-btn" 
                  style="background-color: <?= $color ?>;"
                  data-room-no="<?= $i ?>" 
                  data-room-status="<?= $status ?>"
                >
                  <?= $i ?>
                </button>
                <!-- Dynamic menu placeholder -->
                <div class="room-menu mt-2 d-none text-center"></div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Update legend counts
  function updateCounts() {
    let vacant = 0, occupied = 0, reserved = 0, dirty = 0;
    document.querySelectorAll(".room-btn").forEach(btn => {
      const status = btn.getAttribute("data-room-status");
      if (status === "Vacant") vacant++;
      else if (status === "Occupied") occupied++;
      else if (status === "Reserved") reserved++;
      else if (status === "Dirty") dirty++;
    });
    document.getElementById("count-vacant").textContent = vacant;
    document.getElementById("count-occupied").textContent = occupied;
    document.getElementById("count-reserved").textContent = reserved;
    document.getElementById("count-dirty").textContent = dirty;
  }
  updateCounts();

  // Handle room click
  document.querySelectorAll(".room-btn").forEach(btn => {
    btn.addEventListener("click", function() {
      const wrapper = this.closest(".room-wrapper");
      const menu = wrapper.querySelector(".room-menu");

      // Hide other menus
      document.querySelectorAll(".room-menu").forEach(m => m.classList.add("d-none"));

      // Show current menu
      menu.classList.remove("d-none");
      menu.innerHTML = `
       <ul class="room-menu-list mb-0">
    <li class="guest-info-item">Guest Info</li>
    <li class="room-info-item">Room Info</li>
  </ul>
      `;

      const roomNo = this.getAttribute("data-room-no");
      const status = this.getAttribute("data-room-status");

      // Attach menu button events
      menu.querySelector(".guest-info-btn").addEventListener("click", () => {
        document.getElementById("room-info").innerHTML = `
          <h4 class="fw-bold">Room ${roomNo} - Guest Info</h4>
          ${
            status === "Occupied" ? `
              <ul class="list-group">
                <li class="list-group-item"><strong>Guest:</strong> John Doe</li>
                <li class="list-group-item"><strong>Check-in:</strong> 25 Sept 2025</li>
                <li class="list-group-item"><strong>Check-out:</strong> 28 Sept 2025</li>
              </ul>
            ` : `
              <p class="text-muted">No guest information available (Room is ${status}).</p>
            `
          }
        `;
      });

      menu.querySelector(".room-info-btn").addEventListener("click", () => {
        document.getElementById("room-info").innerHTML = `
          <h4 class="fw-bold">Room ${roomNo} - Room Info</h4>
          <p><strong>Status:</strong> ${status}</p>
          ${
            status === "Vacant" ? `<p class="text-success">✅ Ready for check-in.</p>` :
            status === "Dirty" ? `<p class="text-danger">🧹 Needs cleaning.</p>` :
            status === "Reserved" ? `<p class="text-warning">⚠ Reserved for future use.</p>` :
            `<p class="text-danger">❌ Currently occupied.</p>`
          }
        `;
      });
    });
  });
</script>





   


















    <!-- DataTables -->
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
    <!-- solar icons -->
</body>

</html>
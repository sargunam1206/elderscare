<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Green_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <!-- Favicon icon-->
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Udayana</title>
  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/globel.css">


  <!--<title>test1</title>-->
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />

<style>
  
/* start Front Office Dashboard designs */
  :root {
      --primary: #1B5E20;
      --secondary: #66BB6A;
      --accent: #A5D6A7;
      --light-bg: #F9F9F9;
    }
/* Default styling (desktop) */
.navbar-brand img {
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.navbar-brand span {
    font-size: 1rem; /* default text size */
}

/* Mobile view */
@media (max-width: 768px) {
    .navbar-brand {
        flex-direction: column; /* stack logo above text */
        align-items: center;
        text-align: center;
    }

    .navbar-brand img {
        height: 40px; /* smaller logo */
    }

    .navbar-brand span {
        font-size: 0.8rem; /* smaller text */
        margin-left: 0; /* remove left margin */
        margin-top: 5px; /* space below logo */
    }
    .main-wrapper{
      margin-top:70px;
    }
}
.custom-spacing {
    word-spacing: 5px; /* adjust value as needed */
    color: red;
}




    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
    }
    .card-title {
      color: var(--primary);
      font-weight: 600;
    }
    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
      border-radius: 8px;
    }
    .btn-primary:hover {
      background-color: #2E7D32;
      border-color: #2E7D32;
    }
    .btn-secondary {
      background-color: var(--accent);
      color: var(--primary);
      border-color: var(--accent);
      border-radius: 8px;
    }
    .btn-secondary:hover {
      background-color: #81C784;
      border-color: #81C784;
    }
    .legend-indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      display: inline-block;
    }



  /* Hover + Click animation for all cards */
  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
  }

  /* Hover: card moves up */
  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
  }

  /* Active (click): card presses down */
  .card:active {
    transform: translateY(-3px);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
  }

/* 🔹 Scale down dashboard for compact view */
.dashboard-container {
  zoom: 0.85;    /* shrink everything to 85% */
  transform-origin: top center;
}

/* 🔹 Optional: adjust card spacing */
.card {
  padding: 0.6rem !important;
  margin-bottom: 0.6rem !important;
  border-radius: 10px;
}

.card-body {
  padding: 0.6rem !important;
}

.card h2 {
  font-size: 1.1rem;   /* smaller numbers */
}

.card h6, .card-title {
  font-size: 0.8rem;
}

.card small, .list-group-item {
  font-size: 0.7rem;
}

.card i {
  font-size: 1rem !important;
}
/* End OF Front Office Dashboard designs */


/* end Enauiry page,Booking page,Maintanaace page */

/* ===== Global Styling ===== */
.card {
  border-radius: 12px;
  box-shadow: 0px 2px 8px rgba(0,0,0,0.08);
}

/* Heading size adjustment */
.card h5 {
  font-size: 1.2rem;
  font-weight: 600;
}

/* Badge styling */
.badge {
  font-size: 0.9rem !important;
  padding: 6px 12px;
}

/* Table adjustments */
.table th, .table td {
  vertical-align: middle !important;
  font-size: 0.9rem;
}

/* Prevent table overflow in small screens */
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

/* File link styling */
.file-link {
  text-decoration: none;
  color: #198754;
  font-weight: 500;
}
.file-link:hover {
  text-decoration: underline;
  color: #146c43;
}

/* ===== Responsive Design ===== */

/* For tablets */
@media (max-width: 992px) {
  .card h5 {
    font-size: 1rem;
  }
  .badge {
    font-size: 0.8rem !important;
  }
  .table th, .table td {
    font-size: 0.8rem;
  }
}

/* For mobile */
@media (max-width: 576px) {
  .d-flex.justify-content-between {
    flex-direction: column;
    align-items: flex-start !important;
  }
  .d-flex.justify-content-between h5 {
    margin-bottom: 10px;
  }
  


  /* Make table scrollable with better UX */
  .table-responsive {
    border: 1px solid #dee2e6;
    border-radius: 6px;
  }

  .table th, .table td {
    white-space: nowrap;
    font-size: 0.75rem;
  }

  .btn-sm {
    padding: 4px 8px;
    font-size: 0.75rem;
  }
}

/* Heading size */
h5.fs-7 {
  font-size: 1.1rem;
  font-weight: 600;
}

/* Mobile-friendly button */
@media (max-width: 576px) {
  .btn {
    font-size: 0.9rem;
    padding: 8px 12px;
  }
}




/* end Enauiry page,Booking page,Maintanaace page */


</style>
</head>

<body  style="background-color:#EDF7EE;">
  <?= view('layout/head-FO') ?>

 

  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
 
 




    <!-- Stats Cards -->
   
  <!-- Navbar / Header -->
<!-- Bootstrap CSS (make sure it's included) -->






    <!-- Charts Section -->
  <div class="main-wrapper overflow-hidden" style="margin-top:80px;">
              <h4 class="p-2  main-wrapper overflow-hidden"  style="font-size:18px;"> <i class="ti ti-building card-icons text-success"></i> Front Office
              </h4>

<div class="container-fluid px-4  main-wrapper overflow-hidden">
  <div class="row g-4 justify-content-center">

  <!-- Enquiries -->
  <div class="col-md-3">
    <div class="card shadow-sm border-0 text-center h-100">
     <a href="<?=base_url("enquiry");?>">
 <div class="card-body">
        <i class="bi bi-chat-dots fs-1 text-success mb-2"></i> <!-- Icon -->
        <h6 class="text-success">Enquiries</h6>
        <h2 class="fw-bold"><?= $totalEnquiries; ?></h2>
        <p class="text-muted small">Total enquiries this month</p>
      </div>
   </a>
    </div>
  </div>
  

  <!-- Bookings -->
  <div class="col-md-3">
    <div class="card shadow-sm border-0 text-center h-100">
     <a href="<?=base_url("viewadvancebooking");?>">
<div class="card-body">
        <i class="bi bi-calendar-check fs-1 text-primary mb-2"></i> <!-- Icon -->
        <h6 class="text-primary">Bookings</h6>
        <h2 class="fw-bold"><?= $BookingsCount; ?></h2>
        <p class="text-muted small">Confirmed bookings this month</p>
      </div></a> 
    </div>
  </div>
    <div class="col-md-3">
    <div class="card shadow-sm border-0 text-center h-100">
     <a href="<?=base_url("roomstatus");?>">
<div class="card-body">
        <i class="bi bi-building me-2 fs-5 text-success"></i> 
        <h6 class="text-primary">Room Status</h6>
      </div></a> 
    </div>
  </div>

  <!-- Maintenance -->
  <div class="col-md-3">
    <div class="card shadow-sm border-0 text-center h-100">
      <a href="<?=base_url("maintenance");?>">
<div class="card-body">
        <i class="bi bi-tools fs-1 text-danger mb-2"></i> <!-- Icon -->
        <h6 class="text-danger">Maintenance</h6>
        <h2 class="fw-bold"><?= $pendingRequestscount; ?></h2>
        <p class="text-muted small">Pending maintenance requests</p>
      </div>
</a>
    </div>
  </div>
</div>

<!-- Bottom Row -->
<div class="row g-4 justify-content-center mt-2">

  <!-- Recent Enquiries -->
  <div class="col-md-3">
    <div class="card shadow-sm border-0 h-100">
      <div class="card-header bg-success text-white fw-bold">
        <i class="bi bi-chat-dots me-2"></i> Recent Enquiries
      </div>
      <div class="card-body">
        <?php if (!empty($recentEnquiries)): ?>
          <?php
           $count=1;
           foreach ($recentEnquiries as $enquiry): ?>

           <?php if($count<=4):?>
            <p><i class="bi bi-person-circle me-2 text-success"></i> 
              <?= esc($enquiry['name']) ?> - <?= esc($enquiry['mobile_no'] ?? 'Enquiry') ?>
            </p>

            <?php endif; 
             $count++;
            ?>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-muted">No recent enquiries</p>
        <?php endif; ?>
      </div>
    </div>
</div>

  <!-- Recent Bookings -->
  <div class="col-md-3">
  <div class="card shadow-sm border-0 h-100">
    <div class="card-header bg-primary text-white fw-bold">
      <i class="bi bi-calendar-check me-2"></i> Recent Bookings
    </div>
    <div class="card-body">
      <?php if (!empty($recentBookings)): ?>
       <?php  $count=1; ?>
         
 
        <?php foreach ($recentBookings as $booking): ?>
          <?php if($count<=4):?>
          <p>
            <i class="bi bi-building me-2 text-primary"></i>
            Room <?= esc($booking['room'] ?? 'N/A'); ?> - 
            <?= esc(ucwords($booking['status'])); ?>
          </p>
          <?php endif; 
             $count++;
            ?>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">No recent bookings</p>
      <?php endif; ?>
    </div>
  </div>
</div>

  <!-- Maintenance Issues -->
  <div class="col-md-3">
  <div class="card shadow-sm border-0 h-100">
    <div class="card-header bg-danger text-white fw-bold">
      <i class="bi bi-tools me-2"></i> Maintenance Issues
    </div>
    <div class="card-body">
      <?php if (!empty($pendingRequests)): ?>

         <?php  $count=1; ?>
        <?php foreach ($pendingRequests as $req): ?>
          <?php if($count<=4):?>

          <p>
            <i class="bi bi-exclamation-triangle-fill me-2 text-danger"></i>
            <?= esc($req['problem_description']); ?> - <?= esc($req['maintenance_area']); ?>
          </p>
       
        <?php endif; 
             $count++;
            ?>

        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">No pending requests 🎉</p>
      <?php endif; ?>
    </div>
  </div>
</div>

</div>

</div>




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const navbarMenu = document.getElementById("navbarMenu");
  const togglerIcon = document.querySelector(".navbar-toggler i");

  // Switch icon when menu opens/closes
  navbarMenu.addEventListener("shown.bs.collapse", () => {
    togglerIcon.classList.remove("bi-list");
    togglerIcon.classList.add("bi-x-lg");
  });

  navbarMenu.addEventListener("hidden.bs.collapse", () => {
    togglerIcon.classList.remove("bi-x-lg");
    togglerIcon.classList.add("bi-list");
  });

  // Close navbar when clicking outside
  document.addEventListener("click", function(event) {
    const bsCollapse = bootstrap.Collapse.getInstance(navbarMenu);
    if (bsCollapse && navbarMenu.classList.contains("show")) {
      const isClickInside = navbarMenu.contains(event.target) || 
                            event.target.closest(".navbar-toggler");
      if (!isClickInside) {
        bsCollapse.hide();
      }
    }
  });

  // Close navbar when clicking a nav-link (mobile only)
  document.querySelectorAll("#navbarMenu .nav-link").forEach(link => {
    link.addEventListener("click", () => {
      const bsCollapse = bootstrap.Collapse.getInstance(navbarMenu);
      if (bsCollapse) bsCollapse.hide();
    });
  });
</script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




    <!-- Quick Access Cards -->
   

    <!-- Bottom Section -->
   

    <!-- Notice Board -->
    
        </div>

  <!-- Scroll Top -->
  <!-- <a href="javascript:void(0)" class="top-btn btn d-flex align-items-center justify-content-center round-54 p-0 rounded-circle"
     style="background-color: #1B5E20; color: white;">
    <i class="ti ti-arrow-up fs-7"></i>
  </a> -->
  <a id="topBtn" style="
  position:fixed;bottom:20px;right:20px;width:50px;height:50px;
  background:#1B5E20;color:#fff;border-radius:50%;display:none;
  align-items:center;justify-content:center;box-shadow:0 4px 8px rgba(0,0,0,.3);
">
  <i class="ti ti-arrow-up"></i>
</a>

<script>
  const btn = document.getElementById("topBtn");
  window.onscroll = () => btn.style.display = window.scrollY > 200 ? "flex" : "none";
  btn.onclick = () => window.scrollTo({top:0,behavior:'smooth'});
</script>



  <!-- Chart Scripts -->


<!--  Dropdown Hover Script -->

<script>
document.querySelectorAll('.dropdown-submenu').forEach(function(el){
    el.addEventListener('mouseenter', function(e){
        const submenu = el.querySelector('.dropdown-menu');
        submenu.classList.add('show');
    });
    el.addEventListener('mouseleave', function(e){
        const submenu = el.querySelector('.dropdown-menu');
        submenu.classList.remove('show');
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    if (window.innerWidth >= 992) {
        document.querySelectorAll('.dropdown-submenu').forEach(function(el) {
            el.addEventListener('mouseenter', function() {
                const submenu = el.querySelector('.dropdown-menu');
                submenu.style.display = 'block';
            });
            el.addEventListener('mouseleave', function() {
                const submenu = el.querySelector('.dropdown-menu');
                submenu.style.display = 'none';
            });
        });
    }
});
</script>


  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/frontend-landingpage/homepage.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
</body>
</html>
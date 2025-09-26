<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Green_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/fontawesome/css/all.min.css">
  <style>
    :root {
      --primary: #1B5E20;
      --secondary: #66BB6A;
      --accent: #A5D6A7;
      --light-bg: #F9F9F9;
    }
/* Main dropdown style */
.navbar .dropdown-menu {
    background-color: #1B5E20;
    border: none;
    border-radius: 8px;
}

.navbar .dropdown-item {
    color: #FFFFFF;
}

.navbar .dropdown-item:hover {
    background-color: #2E7D32;
}

/* Desktop submenu positioning */
@media (min-width: 992px) {
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
        border-radius: 8px;
        background-color: #1B5E20;
    }

    /* Show submenu on hover for desktop */
    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }

    /* Remove collapse behavior on desktop */
    .dropdown-submenu > .dropdown-menu.collapse {
        display: none;
    }
}

/* Arrow indicator */
.dropdown-submenu > .dropdown-toggle::after {
    content: "▶";
    float: right;
    margin-left: .5rem;
    font-size: 12px;
}

@media (max-width: 991px) {
    /* Down arrow for mobile */
    .dropdown-submenu > .dropdown-toggle::after {
        content: "▼";
    }
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
  </style>

  <title>Dashboard</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
</head>


<body>
  <?= view('layout/head') ?>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
 
  <!-- Header -->


  <!-- Mobile Menu -->






  <div class="main-wrapper overflow-hidden">
    <!-- Stats Cards -->
    

    <!-- Charts Section -->
    

    <!-- Quick Access Cards -->
    <div class="container-fluid mt-4">
      <div class="row g-4">
        <!-- Card 1: Advance Booking -->
        <div class="col-md-4 col-lg-3 ">
          <div class="card text-center p-3 shadow-sm border-4" style="background-color: #F9F9F9;">
            <div class="mb-3">
              <!-- <img src="<?= base_url(); ?>/public/dist/assets/icons/calendar.svg" width="40" style="color: #1B5E20;" /> -->
              <i class="fa-solid fa-calendar-check fs-8" style="color: #1B5E20;"></i>
            </div>
            <h5 class="fw-semibold" style="color: #1B5E20;">Advance Booking</h5>
            <p class="text-muted small">Manage future reservations and bookings</p>
            <div class="rounded py-2" style="background-color: #E8F5E9;">
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;">15</span>
              <small style="color: #1B5E20;">Upcoming Bookings</small>
            </div>
          </div>
        </div>

        <!-- Card 2: Booking -->
        <div class="col-md-4 col-lg-3">
          <div class="card text-center p-3 shadow-sm border-4" style="background-color: #F9F9F9;">
            <div class="mb-3">
              <i class="fa-solid fa-door-open fs-8" style="color: #1B5E20;"></i>
            </div>
            <h5 class="fw-semibold" style="color: #1B5E20;">Booking</h5>
            <p class="text-muted small">Create new bookings and reservations</p>
            <div class="rounded py-2" style="background-color: #E8F5E9;">
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;">3</span>
              <small style="color: #1B5E20;">Today's Bookings</small>
            </div>
          </div>
        </div>

        <!-- Card 3: Check In -->
        <div class="col-md-4 col-lg-3">
          <div class="card text-center p-3 shadow-sm border-4" style="background-color: #F9F9F9;">
            <div class="mb-3">
              <i class="fa-solid fa-file-signature fs-8" style="color: #1B5E20;"></i>  
          </div>
            <h5 class="fw-semibold" style="color: #1B5E20;">Check In</h5>
            <p class="text-muted small">guest arrivals and room assignments</p>
            <div class="rounded py-2" style="background-color: #E8F5E9;">
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;">5</span>
              <small style="color: #1B5E20;">Pending Check-ins</small>
            </div>
          </div>
        </div>
         <!-- Card 4: services -->
        <div class="col-md-4 col-lg-3">
          <div class="card text-center p-3 shadow-sm border-4" style="background-color: #F9F9F9;">
            <div class="mb-3">
              <i class="fa-solid fa-concierge-bell fs-8" style="color: #1B5E20;"></i> 
            </div>
            <h5 class="fw-semibold" style="color: #1B5E20;">Srvices</h5>
            <p class="text-muted small">Manage all guest services and requests</p>
            <div class="rounded py-2" style="background-color: #E8F5E9;">
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;">5</span>
              <small style="color: #1B5E20;">Pending Check-ins</small>
            </div>
          </div>
        </div>
         <!-- Card 5: Events & Activities -->
        <div class="col-md-4 col-lg-3">
          <div class="card text-center p-3 shadow-sm border-4" style="background-color: #F9F9F9;">
            <div class="mb-3">
              <i class="fa-solid fa-calendar-day fs-8" style="color: #1B5E20;"></i>
            </div>
            <h5 class="fw-semibold" style="color: #1B5E20;">Events & Activities</h5>
            <p class="text-muted small">Organize events and activities</p>
            <div class="rounded py-2" style="background-color: #E8F5E9;">
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;">5</span>
              <small style="color: #1B5E20;">Pending Check-ins</small>
            </div>
          </div>
        </div>

        <!-- Card 6: Check Out -->
        <div class="col-md-4 col-lg-3">
          <div class="card text-center p-3 shadow-sm border-4" style="background-color: #F9F9F9;">
            <div class="mb-3">
                <i class="fa-solid fa-door-closed fs-8" style="color: #1B5E20;"></i> 
            </div>
            <h5 class="fw-semibold" style="color: #1B5E20;">Check Out</h5>
            <p class="text-muted small">Process guest departures and billing</p>
            <div class="rounded py-2" style="background-color: #E8F5E9;">
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;">12</span>
              <small style="color: #1B5E20;">Active Requests</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Section -->
    <div class="container-fluid mt-4">
      <div class="row g-4">
        <!-- Today's Special Occasions -->
        <div class="col-md-6">
          <div class="card h-100 border-3 shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="card-title" style="color: #1B5E20; font-size: 18px;">
                  <i class="ti ti-gift me-2" style="color: #66BB6A;"></i>Today's Special Occasions
                </h4>
                <span class="text-muted small">Thursday, July 31, 2025</span>
              </div>

              <!-- Rajesh Kumar Birthday -->
              <div class="p-3 mb-3 rounded d-flex justify-content-between align-items-start flex-wrap"
                   style="background-color: #E8F5E9; border-left: 4px solid #1B5E20;">
                <div>
                  <h5 class="fw-semibold mb-1" style="color: #1B5E20;">
                    Rajesh Kumar <span class="badge" style="background-color: #A5D6A7; color: #1B5E20;">65th Birthday</span>
                  </h5>
                  <p class="mb-1" style="color: #333;">🎂 Room 101 • +91 9876543210</p>
                  <p class="mb-1" style="color: #333;">Doctor: Dr. Sharma • Caretaker: Nurse Priya</p>
                  <small class="text-muted">Medical: Diabetes, Hypertension • Blood Group: B+</small>
                </div>
                <div class="d-flex flex-column gap-2">
                  <button class="btn btn-sm" style="background-color: #1B5E20; color: white;">
                    <i class="ti ti-confetti me-1"></i>Send Wishes
                  </button>
                  <button class="btn btn-outline-secondary btn-sm" style="border-color: #66BB6A; color: #1B5E20;">
                    <i class="ti ti-user me-1"></i>View Details
                  </button>
                </div>
              </div>

              <!-- Mohan & Sita Anniversary -->
              <div class="p-3 rounded d-flex justify-content-between align-items-start flex-wrap"
                   style="background-color: #E8F5E9; border-left: 4px solid #66BB6A;">
                <div>
                  <h5 class="fw-semibold mb-1" style="color: #1B5E20;">
                    Mohan & Sita Patel <span class="badge" style="background-color: #A5D6A7; color: #1B5E20;">Anniversary</span>
                  </h5>
                  <p class="mb-1" style="color: #333;">💖 Room 105 • +91 9876543212</p>
                  <p class="mb-1" style="color: #333;">Doctor: Dr. Gupta • Caretaker: Nurse Meera</p>
                  <small class="text-muted">Medical: Heart condition</small>
                </div>
                <div class="d-flex flex-column gap-2">
                  <button class="btn btn-sm" style="background-color: #66BB6A; color: white;">
                    <i class="ti ti-heart me-1"></i>Send Wishes
                  </button>
                  <button class="btn btn-outline-secondary btn-sm" style="border-color: #66BB6A; color: #1B5E20;">
                    <i class="ti ti-user me-1"></i>View Details
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Activities -->
        <div class="col-md-6">
          <div class="card h-100 border-3 shadow-sm">
            <div class="card-body">
              <h4 class="card-title" style="color: #1B5E20; font-size: 18px;">
                <i class="ti ti-clipboard me-2" style="color: #66BB6A;"></i>Recent Activities
              </h4>

              <div class="list-group list-group-flush mt-3">
                <div class="list-group-item rounded mb-2 d-flex gap-3 align-items-start" style="background-color: #F9F9F9;">
                  <span class="badge rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background-color: #E8F5E9; color: #1B5E20;">✔️</span>
                  <div>
                    <p class="mb-0 fw-semibold" style="color: #333;">Room 105 – Laundry service completed</p>
                    <small class="text-muted">2 minutes ago</small>
                  </div>
                </div>

                <div class="list-group-item rounded mb-2 d-flex gap-3 align-items-start" style="background-color: #F9F9F9;">
                  <span class="badge rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background-color: #E8F5E9; color: #1B5E20;">📅</span>
                  <div>
                    <p class="mb-0 fw-semibold" style="color: #333;">New booking received for next week</p>
                    <small class="text-muted">15 minutes ago</small>
                  </div>
                </div>

                <div class="list-group-item rounded d-flex gap-3 align-items-start" style="background-color: #F9F9F9;">
                  <span class="badge rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background-color: #E8F5E9; color: #1B5E20;">🛏️</span>
                  <div>
                    <p class="mb-0 fw-semibold" style="color: #333;">Guest checked in to Room 203</p>
                    <small class="text-muted">1 hour ago</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Notice Board -->
    <div class="container-fluid mt-4">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0" style="color: #1B5E20;">Notice Board - Daily Activities Schedule</h1>
        <span class="badge" style="background-color: #66BB6A; color: white;">Updated Today</span>
      </div>

      <div class="row g-4">
        <!-- Morning Activities -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: white;">
              <h2 class="h5 mb-0" style="background-color: #A5D6A7; color: #1C1C1C"> <i class="fa-solid fa-sun fs-7 "></i> 
Morning Activities</h2>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="d-flex justify-content-between mb-3">
                  <strong style="color: #333;">Morning Yoga</strong>
                  <span class="text-muted">6:30 AM</span>
                </li>
                <li class="d-flex justify-content-between mb-3">
                  <strong style="color: #333;">Meditation</strong>
                  <span class="text-muted">7:00 AM</span>
                </li>
                <li class="d-flex justify-content-between mb-3">
                  <strong style="color: #333;">Morning Walk</strong>
                  <span class="text-muted">7:30 AM</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong style="color: #333;">Breakfast</strong>
                  <span class="text-muted">8:00 AM</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Afternoon Activities -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: white;">

              <h2 class="h5 mb-0"  style="background-color: #A5D6A7; color: #1C1C1C"><i class="fa-solid fa-cloud-sun fs-7"></i>  
Afternoon Activities</h2>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-2"><strong style="color: #333;">Art Therapy</strong></li>
                <li class="mb-2"><strong style="color: #333;">Music Therapy</strong></li>
                <li class="mb-2"><strong style="color: #333;">Physiotherapy</strong></li>
                <li><strong style="color: #333;">Tea Time</strong></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Evening Activities -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: #1B5E20;">
              <h2 class="h5 mb-0" style="background-color: #A5D6A7; color: #1C1C1C;"><i class="fa-solid fa-moon fs-7"></i>  
                Evening Activities</h2>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-2"><strong style="color: #333;">Indoor Games</strong></li>
                <li class="mb-2"><strong style="color: #333;">Movie Time</strong></li>
                <li class="mb-2"><strong style="color: #333;">Dinner</strong></li>
                <li><strong style="color: #333;">Night Prayer</strong></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Updated Today -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: white;">
              <h2 class="h5 mb-0" style="background-color: #A5D6A7; color: #1C1C1C"><i class="fa-solid fa-rotate fs-7"></i>
Updated Today</h2>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="d-flex justify-content-between mb-2">
                  <span style="color: #333;">6:00 PM</span>
                </li>
                <li class="d-flex justify-content-between mb-2">
                  <span style="color: #333;">7:00 PM</span>
                </li>
                <li class="d-flex justify-content-between mb-2">
                  <span style="color: #333;">8:00 PM</span>
                </li>
                <li class="d-flex justify-content-between">
                  <span style="color: #333;">9:00 PM</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Important Notices -->
      <div class="card border-0 shadow-sm mt-4">
        <div class="card-header" style="background-color: #1B5E20; color: white;">
          <h2 class="h5 mb-0" style="background-color: #1B5E20; color:#FAFAFA">Important Notices</h2>
        </div>
        <div class="card-body">
  <ul class="list-group list-group-flush">
    <li class="list-group-item text-dark-emphasis">
      <i class="ti ti-calendar-check me-2 fs-5" style="color: #66BB6A;"></i>
      <span style="color: #343a35;">Doctor's visit scheduled for Room 101, 203, 205 at 10:00 AM</span>
    </li>
    <li class="list-group-item text-dark-emphasis">
      <i class="ti ti-scissors me-2 fs-5" style="color: #66BB6A;"></i>
      <span style="color: #343a35;">Beauty salon services available today from 11:00 AM to 4:00 PM</span>
    </li>
    <li class="list-group-item text-dark-emphasis">
      <i class="ti ti-balloon me-2 fs-5" style="color: #66BB6A;"></i>
      <span style="color: #343a35;">Special birthday celebration for Rajesh Kumar at 3:30 PM in the main hall</span>
    </li>
    <li class="list-group-item text-dark-emphasis">
      <i class="ti ti-basket me-2 fs-5" style="color: #66BB6A;"></i>
      <span style="color: #343a35;">Laundry collection from rooms will be done between 2:00 PM - 4:00 PM</span>
    </li>
  </ul>
</div>

      </div>
    </div>
  </div>
>




  <!-- Chart Scripts -->
  
<!--  Dropdown Hover Script -->


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
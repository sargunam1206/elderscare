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
 
 




  <div class="main-wrapper overflow-hidden">
    <!-- Stats Cards -->
    <section class="pt-1 pt-md-3 pt-lg-2 pb-1 pb-lg-1 border-bottom">
      <div class="container-fluid">
        <div class="row g-3">
          <!-- Total Guests -->
          <div class="col-lg-3 col-md-6" >
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center text-white"
                 style="background-color: #66BB6A; color: #FFFFFF; border-radius: 10px;">
              <div>
                <small class="d-block mb-1 fs-4">Total Guests</small>
                <h4 class="mb-0 fw-bold"  style="background-color: #66BB6A; color:#0F0F0F;"><?= $GuestCount ?></h4>
              </div>
              <i class="ti ti-users fs-8" style="color:  #E8F5E9;"></i>
            </div>
          </div>

          <!-- Occupied Rooms -->
          <div class="col-lg-3 col-md-6">
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center text-white"
                 style="background-color: #66BB6A; color: #FFFFFF; border-radius: 10px;">
              <div>
                <small class="d-block mb-1 fs-4">Occupied Rooms</small>
                <h4 class="mb-0 fw-bold"><?= $RoomsCount ?></h4>
              </div>
              <i class="ti ti-home fs-8" style="color: #E8F5E9;"></i>
            </div>
          </div>

          <!-- Sickness Rate -->
          <div class="col-lg-3 col-md-6">
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center text-white"
                 style="background-color: #66BB6A; border-radius: 10px; color: #FFFFFF;">
              <div>
                <small class="d-block mb-1 fs-4" style="background-color: #66BB6A; color: #FFFFFF;">Sickness Rate</small>
                <h4 class="mb-0 fw-bold">12%</h4>
              </div>
              <i class="ti ti-mood-sad fs-8" style="color: #E8F5E9;"></i>
            </div>
          </div>

          <!-- Maintenance Requests -->
          <div class="col-lg-3 col-md-6">
            <div class="card p-4 d-flex flex-row justify-content-between align-items-center"
                 style="background-color: #66BB6A; border-radius: 10px; border: 1px solid #66BB6A;">
              <div>
                <small class="d-block mb-1  fs-4" style="color: #FFFFFF;">Maintenance Requests</small>
                <h4 class="mb-0 fw-bold text-dark">4</h4>
              </div>
              <i class="ti ti-tools fs-8" style="color: #E8F5E9;"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Charts Section -->
    <div class="container-fluid mt-4">
      <div class="row g-4 align-items-stretch">
        <!-- Year-wise Stay & Checkouts Chart -->
        <div class="col-lg-6 d-flex">
          <div class="card w-100 border-0 shadow-sm">
            <div class="card-body">
              <h4 class="card-title mb-3" style="color: #1B5E20; font-size: 20px;">Year-wise Stay & Checkouts</h4>
              <div id="chart-yearwise-stay-checkout" style="height: 350px;"></div>
            </div>
          </div>
        </div>

        <!-- Donut Pie Chart -->
        <div class="col-lg-6 d-flex">
          <div class="card w-100 border-0 shadow-sm">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title mb-3 text-center" style="color: #1B5E20; font-size: 20px;">Donut Pie Chart</h4>
              <div class="row align-items-center h-100">
                <div class="col-md-8">
                  <div id="chart-pie-donut" style="height: 300px; margin: 0 auto;"></div>
                </div>
                <div class="col-md-4">
                  <div class="chart-legend ps-3">
                    <div class="d-flex align-items-center mb-2">
                      <span class="legend-indicator" style="background-color: #1B5E20;"></span>
                      <small class="ms-2">series-1 (8.7%)</small>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <span class="legend-indicator" style="background-color: #66BB6A;"></span>
                      <small class="ms-2">series-2 (9.9%)</small>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <span class="legend-indicator" style="background-color: #A5D6A7;"></span>
                      <small class="ms-2">series-3 (23.8%)</small>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <span class="legend-indicator" style="background-color: #2E7D32;"></span>
                      <small class="ms-2">series-4 (25.6%)</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="legend-indicator" style="background-color: #81C784;"></span>
                      <small class="ms-2">series-5 (32.0%)</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;"><?= $upcomingBookingsCount ?></span>
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
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;"><?= $BookingsCount ?></span>
              <small style="color: #1B5E20;">Total Bookings</small>
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
            <p class="text-muted small">Guest arrivals and room assignments</p>
            <div class="rounded py-2" style="background-color: #E8F5E9;">
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;"><?= $CheckinCount ?></span>
              <small style="color: #1B5E20;">Check-ins</small>
            </div>
          </div>
        </div>
         <!-- Card 4: services -->
        <div class="col-md-4 col-lg-3">
          <div class="card text-center p-3 shadow-sm border-4" style="background-color: #F9F9F9;">
            <div class="mb-3">
              <i class="fa-solid fa-concierge-bell fs-8" style="color: #1B5E20;"></i> 
            </div>
            <h5 class="fw-semibold" style="color: #1B5E20;">Services</h5>
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
              <span class="fw-bold fs-4 d-block" style="color: #1B5E20;"><?= $ActivityCount ?></span>
              <small style="color: #1B5E20;">Activities</small>
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
            <i class="ti ti-gift me-2" style="color: #66BB6A;"></i>Upcoming Birthdays
        </h4>
        <span class="text-muted small"><?= $currentDate ?></span>
    </div>

    <?php foreach ($upcomingBirthdays as $birthday): ?>
        <div class="p-3 mb-3 rounded d-flex justify-content-between align-items-start flex-wrap"
             style="background-color: #E8F5E9; border-left: 4px solid #1B5E20;">
            <div>
                <h5 class="fw-semibold mb-1" style="color: #1B5E20;">
                    <?= $birthday['first_name'] ?> <?= $birthday['last_name'] ?>
                    <span class="badge" style="background-color: #A5D6A7; color: #1B5E20;">
                        <?= ($birthday['age']+1) ?> - Birthday
                    </span>
                </h5>
                <p class="mb-1" style="color: #333;">
                    <i class="ti ti-calendar me-1" style="color: #66BB6A;"></i>
                    <?= date('F j', strtotime($birthday['dob'])) ?> 
                    (<?= date('Y', strtotime($birthday['dob'])) ?>)
                </p>
            </div>
        </div>
    <?php endforeach; ?>
    
    <?php if (empty($upcomingBirthdays)): ?>
        <div class="text-center py-4">
            <i class="ti ti-cake-off fs-5" style="color: #A5D6A7;"></i>
            <p class="text-muted mt-2">No upcoming birthdays in the next 7 days</p>
        </div>
    <?php endif; ?>
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
        <h1 class="h3 mb-0" style="color: #1B5E20;">Daily Activities Schedule</h1>
        <!-- <span class="badge" style="background-color: #66BB6A; color: white;">Updated Today</span> -->
      </div>

      <div class="row g-4">
    <!-- Physical Activities -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: white;">
                <h2 class="h5 mb-0" style="background-color: #A5D6A7; color: #1C1C1C">
                    <i class="fa-solid fa-sun fs-7"></i> Physical Exercise
                </h2>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <?php foreach ($physicalActivities as $activity): ?>
                    <li class="d-flex justify-content-between mb-3">
                        <strong style="color: #333;"><?= $activity['activity_name'] ?></strong>
                        <span class="text-muted"><?= date('g:i A', strtotime($activity['activity_time'])) ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Mental Activities -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: white;">
                <h2 class="h5 mb-0" style="background-color: #A5D6A7; color: #1C1C1C">
                    <i class="fa-solid fa-cloud-sun fs-7"></i> Mental Exercise
                </h2>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <?php foreach ($mentalActivities as $activity): ?>
                     <li class="d-flex justify-content-between mb-3">
                        <strong style="color: #333;"><?= $activity['activity_name'] ?></strong>
                        <span class="text-muted"><?= date('g:i A', strtotime($activity['activity_time'])) ?></span>
                    </li>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Social Activities -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: #1B5E20;">
                <h2 class="h5 mb-0" style="background-color: #A5D6A7; color: #1C1C1C;">
                    <i class="fa-solid fa-moon fs-7"></i> Social Activity
                </h2>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <?php foreach ($socialActivities as $activity): ?>
                     <li class="d-flex justify-content-between mb-3">
                        <strong style="color: #333;"><?= $activity['activity_name'] ?></strong>
                        <span class="text-muted"><?= date('g:i A', strtotime($activity['activity_time'])) ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Educational Activities -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-3 shadow-sm">
            <div class="card-header" style="background-color: #A5D6A7; color: white;">
                <h2 class="h5 mb-0" style="background-color: #A5D6A7; color: #1C1C1C">
                    <i class="fa-solid fa-rotate fs-7"></i> Educational
                </h2>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <?php foreach ($educationalActivities as $activity): ?>
                    <li class="d-flex justify-content-between mb-2">
                        <strong style="color: #333;"><?= $activity['activity_name'] ?></strong>
                        <span class="text-muted"><?= date('g:i A', strtotime($activity['activity_time'])) ?></span>
                    </li>
                    <?php endforeach; ?>
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
            <?php foreach ($notices as $notice): ?>
           <li class="list-group-item text-dark-emphasis">
    <?php 
    // Determine icon based on category
    $icon = 'ti ti-info-circle'; // default
    switch($notice['category']) {
        case 'Medical':
            $icon = 'ti ti-heart';
            break;
        case 'Activity':
            $icon = 'ti ti-calendar-event';
            break;
        case 'Maintenance':
            $icon = 'ti ti-tools';
            break;
        case 'Celebration':
            $icon = 'ti ti-balloon';
            break;
    }
    ?>
    <i class="<?= $icon ?> me-2 fs-4" style="color: #66BB6A;"></i>
    <span style="color: #343a35;"><?= $notice['title'] ?> - <?= $notice['content'] ?></span>
    
</li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
    </div>
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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Bar Chart
      var barOptions = {
        chart: {
          type: 'bar',
          height: 350,
          fontFamily: 'Poppins, sans-serif'
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '45%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        series: [
          {
            name: '10 Months Stay',
            data: [14, 17, 22, 9]
          },
          {
            name: '11 Months Stay',
            data: [11, 15, 20, 12]
          },
          {
            name: 'Checkouts',
            data: [2, 3, 4, 10]
          }
        ],
        xaxis: {
          categories: ['2021', '2022', '2023', '2024'],
          title: {
            text: 'Year',
            style: {
              color: '#1B5E20'
            }
          },
          labels: {
            style: {
              colors: '#333'
            }
          }
        },
        yaxis: {
          title: {
            text: 'Guests',
            style: {
              color: '#1B5E20'
            }
          },
          min: 0,
          max: 25,
          labels: {
            style: {
              colors: '#333'
            }
          }
        },
        fill: {
          opacity: 1
        },
        colors: ['#1B5E20', '#66BB6A', '#A5D6A7'],
        legend: {
          position: 'top',
          horizontalAlign: 'center',
          labels: {
            colors: '#333'
          }
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " Guests";
            }
          }
        }
      };

      var barChart = new ApexCharts(document.querySelector("#chart-yearwise-stay-checkout"), barOptions);
      barChart.render();

      // Pie Chart
      var pieOptions = {
        chart: {
          type: 'donut',
          height: 300,
          fontFamily: 'Poppins, sans-serif'
        },
        series: [8.7, 9.9, 23.8, 25.6, 32.0],
        labels: ["series-1", "series-2", "series-3", "series-4", "series-5"],
        colors: ['#1B5E20', '#66BB6A', '#A5D6A7', '#2E7D32', '#81C784'],
        legend: {
          show: false
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }],
        plotOptions: {
          pie: {
            donut: {
              labels: {
                show: true,
                total: {
                  show: true,
                  label: 'Total',
                  color: '#333',
                  formatter: function (w) {
                    return w.globals.seriesTotals.reduce((a, b) => {
                      return a + b
                    }, 0).toFixed(1) + '%'
                  }
                }
              }
            }
          }
        }
      };

      var pieChart = new ApexCharts(document.querySelector("#chart-pie-donut"), pieOptions);
      pieChart.render();
    });
  </script>

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
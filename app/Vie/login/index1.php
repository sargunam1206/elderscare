<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />
  <title>Login | User Management</title>
  <style>
    .auth-login .row.gx-0 {
      height: 100%;
    }

    .auth-login {
      height: 100%;
    }

    .place-content {
      transition: box-shadow 0.3s, border 0.3s, background-color 0.3s;
      border: 3px solid #dee2e6;
      border-radius: 8px;
      padding: 15px;
      overflow: hidden;
    }
:root {
  --primary-theme-color: var(--primary-green); /* Your theme variable */
}

/* Button color */
.btn-dark {
  background-color: 
#669ccc!important;
  border-color: var(--primary-theme-color) !important;
}

.btn-dark:hover {
  background-color: 
#669ccc !important; /* slightly darker shade */
  border-color: 
#669ccc !important;
}

/* Input focus border */
.form-control:focus {
  border-color: var(--primary-theme-color) !important;
  box-shadow: 0 0 0 0.25rem rgba( 131, 179, 221, 1) !important;
}
.form-control{
  border-color:#669ccc!important;
}
/* Alerts background override */
.alert.bg-primary-subtle {
  background-color: rgba(0, 128, 0, 0.1) !important;
  color: var(--primary-theme-color) !important;
}

.alert.bg-danger-subtle {
  background-color: rgba(255, 0, 0, 0.1) !important;
  color: red !important;
}

/* Checkbox tick color */
.form-check-input:checked {
  background-color: var(--primary-theme-color) !important;
  border-color: var(--primary-theme-color) !important;
}
:root {
  --primary-theme-color: var(--primary-green);
}

body {
  font-size: 1.05rem;
}

h1, h2, h3, h4, h5 {
  font-weight: 600;
}

label, .form-label {
  font-size: 1rem;
}

.btn {
  font-size: 1.05rem;
}

/* Remove black outline on focus */


/* Equal form field spacing */
.auth-login form .col-12 {
  margin-bottom: 1.25rem !important;
}

.auth-login form button {
  margin-top: 0.5rem;
}

/* Alerts */
.alert.bg-primary-subtle {
  background-color: rgba(0, 128, 0, 0.1) !important;
  color: var(--primary-theme-color) !important;
}

.alert.bg-danger-subtle {
  background-color: rgba(255, 0, 0, 0.1) !important;
  color: red !important;
}

/* Checkbox tick color */
.form-check-input:checked {
  background-color: var(--primary-theme-color) !important;
  border-color: var(--primary-theme-color) !important;
}


 .auth-bg {
  background: url("<?= base_url(); ?>/public/dist/assets/images/backgrounds/login-bg.jpg") no-repeat center center;
  background-size: cover;
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>

  <div id="main-wrapper">
    <div class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100 my-5 my-xl-0">
          <div class="col-md-9 d-flex flex-column justify-content-center">
           
<div class="card mb-4 bg-body auth-login m-auto" style="max-width: 420px; width: 100%;">

                <!-- Login Form Side -->
                <div class="col-xl-12  auth-left">
                  <div class="row justify-content-center py-2">
                    <div class="col-lg-11">
                      <div class="card-body">
                        <!-- <a class="text-nowrap logo-img d-block mb-4 w-100">
                          <img src="<?= base_url(); ?>/public/dist/assets/images/logos/logo.svg" alt="Logo" style="height: 60px;" />
                        </a>   -->
                        <h2 class="lh-base mb-4"> Welcome to Nivasan Udhyana   </h2>
<!-- Replace the current flash messages section with this -->
<?php
$session = \Config\Services::session();
if (session()->getFlashdata('success')): ?>
    <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center text-primary">
            <i class="ti ti-info-circle me-2 fs-4"></i>
            <?= session()->getFlashdata('success') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert bg-danger-subtle text-danger alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center text-danger">
            <i class="ti ti-alert-circle me-2 fs-4"></i>
            <?= session()->getFlashdata('error') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert bg-danger-subtle text-danger alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center text-danger">
            <i class="ti ti-alert-circle me-2 fs-4"></i>
            <div>
                <h6 class="mb-0">Validation Errors</h6>
                <ul class="mb-0 ps-3">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

                        <form action="<?= base_url('login/process') ?>" method="post">
                          <?= csrf_field() ?>
                          
                          <div class="col-12 mb-3">
                            <label for="user_mobileno" class="form-label required">Mobile Number</label>
                            <input type="text" class="form-control" name="user_mobileno" id="user_mobileno"
                              placeholder="Enter Mobile Number" value="<?= old('user_mobileno') ?>" 
                              maxlength="10" pattern="\d{10}" inputmode="numeric"
                              required oninput="this.value = this.value.replace(/[^0-9]/g, '');" autocomplete="off">
                            <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                          </div>

                          <div class="col-12 mb-4">
                            <label for="user_password" class="form-label required">Password</label>
                            <input type="password" class="form-control" name="user_password" id="user_password"
                              placeholder="Enter your password" required>
                          </div>

                          <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Right Side: Welcome Image/Message -->
                <!-- <div class="col-xl-6 d-none d-xl-block p-0">
                  <div style="height: 100%; width: 100%;">
                    <div style="position: relative; height: 100%; width: 100%;">
                      <img src="<?= base_url(); ?>/public/dist/assets/images/backgrounds/login-side.png"
                          alt="Login Background"
                          style="object-fit: cover; width: 100%; height: 100%;" />
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center px-4"
                          style="background: rgba(0, 0, 0, 0.4);">
                        <h1 class="text-white display-6 fw-bold mb-3 lh-sm">
                          Welcome to <br /> Elder's Care Management
                        </h1>
                        <p class="opacity-75 fs-5 text-white mb-3">
                          Manage your Guest information and activities
                        </p>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div> <!-- row gx-0 end -->
           
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <script>
    // Prevent form submission on Enter key
    const form = document.querySelector("form");
    form.addEventListener("keydown", function (event) {
      if (event.key === "Enter") {
        event.preventDefault();
      }
    });
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" sizes="180x180"  href="<?= base_url('public/Logo-Elders_home.png'); ?>" >
<title>Nivasan Hospitality</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .auth-bg {
      background: url("<?= base_url(); ?>/public/dist/assets/images/backgrounds/login-bg.jpg") no-repeat center center;
      background-size: cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center; 
       flex-direction: column; 
       text-align: center; 
        overflow: hidden; /* Ensures blur layer doesn’t spill */

    }
    .auth-bg::before {
  content: "";
  position: absolute;
  inset: 0;
  background: url("<?= base_url(); ?>/public/dist/assets/images/backgrounds/login-bg.jpg") no-repeat center center;
  background-size: cover;
  z-index: 0;
}

   #welcome-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  /* Blur background only for this section */
  /* background: rgba(255, 255, 255, 0.2); transparent layer */
  /* backdrop-filter: blur(8px); blur intensity */
  /* -webkit-backdrop-filter: blur(8px); Safari support */
  
  padding: 30px;
  border-radius: 50%;
}

    .profile-circle {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: #d6d6d6;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 60px;
      color: #555; /* Icon color */
      margin-bottom: 20px;
    }
    .username {
  font-size: 1.5rem;
  font-weight: 600;
  color: #070707ff;
  background: rgba(255, 255, 255, 0.7); /* Light transparent background */
  padding: 8px 15px;
  border-radius: 10px;
  display: inline-block;
  /* text-shadow: 2px 2px 4px rgba(0,0,0,0.6); Add shadow */
}

    .login-form {
      display: none;
      background: rgba(255, 255, 255, 0.95);
      padding: 25px;
      border-radius: 10px;
      color: #333;
      width: 100%;
      max-width: 400px;
    }
    /* Mobile View Blur */
@media (max-width: 768px) {
  .auth-bg::before {
    filter: blur(8px); /* Blur only background */
  }
    

}

/* Keep content above blur */
.auth-bg > * {
  position: relative;
  z-index: 1;
}
  </style>
   <style>
  /* Style input groups with icon */
  .input-group:focus-within {
    /* border: 2px solid #6b99ca;   Highlight color */
    border-radius: 8px;          /* Rounded corners */
    box-shadow: 0 0 6px rgba(107, 153, 202, 0.5);
  }

  .input-group-text {
    background-color: #f8f9fa;   /* Light background for icon */
    border: none;
  }

  .form-control {
    border: 2px solid #6b99ca;
    box-shadow: none; /* Remove extra shadow */
  }

  .form-control:focus {
    box-shadow: none; /* Prevent double glow */
  }
</style>

<style>
  /* Default (Desktop View) */
  #welcome-section {
    position: fixed;
    top: 83%;   /* Desktop center */
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    z-index: 1000;
    width:100%;
  }

  /* Mobile View */
  @media (max-width: 768px) {
    #welcome-section {
      top: 70%;   /* Move it lower on mobile */
      left: 50%;
      transform: translate(-50%, -50%);
    }

    #welcome-section h3 {
      font-size: 1.2rem; /* Smaller heading on mobile */
    }

    #welcome-section button {
      font-size: 0.9rem;
      padding: 6px 14px;
    }
  }
</style>

</head>
<body>


  <div class="auth-bg">
<!--    <div class="row">-->
<!--  <div class="col text-end m-4">-->
<!--    <button class="btn fw-bold pe-2" -->
<!--            id="showLogin" -->
<!--            style="color:white; background-color:#669ccc;">-->
<!--      Login <i class="bi bi-box-arrow-in-right me-2"></i>-->
<!--    </button>-->
<!--  </div>-->
<!--</div>-->

    
    <!-- Profile & Sign in button -->
   <div id="welcome-section">
        <button class="btn btn-light mb-3 fw-bold pe-2" 
          id="showLogin" 
          style="color:white; background-color:#669ccc;">
    Login <i class="bi bi-box-arrow-in-right me-2"></i>
  </button> 
  <h3 class="fw-bold" style="color:black;">Welcome to Nivasan Hospitality Services Pvt Ltd</h3>
  
  
</div>

    <!-- Hidden Login Form -->
       <div class="login-form" id="loginForm">
  <form action="<?= base_url('login/process') ?>" method="post">
    <?= csrf_field() ?>

    <!-- Mobile Number -->
  <!-- Mobile Number -->
<div class="mb-3">
  <label for="user_mobileno" class="form-label">Mobile Number</label>
  <div class="input-group">
    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
    <input type="text" 
           class="form-control" 
           name="user_mobileno" 
           id="user_mobileno"
           placeholder="Enter Mobile Number" 
           maxlength="10" 
           pattern="\d{10}" 
           inputmode="numeric"
           required 
           oninput="this.value = this.value.replace(/[^0-9]/g, '');">
  </div>
</div>

<!-- Password -->
<div class="mb-3">
  <label for="user_password" class="form-label">Password</label>
  <div class="input-group">
    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
    <input type="password" 
           class="form-control" 
           name="user_password" 
           id="user_password"
           placeholder="Enter your password" 
           required>
  </div>
</div>


    <!-- Submit Button -->
    <button type="submit" class="btn w-100" style="background-color:#6b99ca; font-weight:bold; color:white;">
      OK
    </button>
  </form>
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
    // Toggle login form
    document.getElementById("showLogin").addEventListener("click", function() {
      document.getElementById("welcome-section").style.display = "none";
      document.getElementById("loginForm").style.display = "block";
    });
  </script>
</body>
</html>
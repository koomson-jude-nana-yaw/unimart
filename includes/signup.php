


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logo/favicon.png" type="image/x-icon">
    <title>UniMart-SIGNUP | University Online Campus Market </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="../fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
        <!--  css -->
    <link rel="stylesheet" href="../css/signup.css?v=<?= time();?>">
    <!-- <link rel="stylesheet" href="css/home.css?v=<?= time();?>"> -->
  </head>
  <body>
    <main class="body-container">
      <!-- ------- -->
        <div class="signup-container">
          <!--  -->
            <div class="form-container">
                <div class="form-header-container">
                  <!--  -->
                  <div class="signup-username-logo-container">
                    <!-- <img src="../media/logo/favicon.png" alt="user logo"> -->
                     <i class="fas fa-user-circle fa-3x" ></i>
                  </div>
                  <!--  -->
                  <div class="unimart-signup-text-container">
                    <!-- unimart logo container -->
                    <div class="unimart-logo">
                        <a href="../index.php">Uni<span>Mart</span></a> 
                    </div>
                    <h1 class="text-signup">Sign Up</span>
                    <!-- -------------------- -->
                  </div>
              </div>
              <!--  -->
              <form action="../configuration/sign_up.php" class="signup-form">
                <!--  -->
                <!--  -->
                <div class="input-item">
                  <input type="text" name="username" placeholder="User Name" autocomplete="off">
                  <span class="user-icon">
                    <i class="fas fa-user-circle"></i>
                  </span>
                </div>
                <!--  -->
                <!--  -->
                <div class="input-item">
                  <input type="text" name="email" placeholder="Your Email" autocomplete="off">
                  <span class="email-icon">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <!--  -->
                <!--  -->
                <div class="input-item">
                  <input type="text" name="phone_number" placeholder="Phone Number" autocomplete="off">
                  <span class="phone-icon">
                    <i class="fas fa-phone"></i>
                  </span>
                </div>
                <!--  -->
                <!--  -->
                <div class="input-item">
                  <input type="password" name="password" placeholder="Password" autocomplete="off">
                  <span class="lock-icon">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
                <!--  -->
                <!--  -->
                <div class="input-item">
                  <input type="password" name="password" placeholder="Confirm Password">
                  <span class="lock-icon">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
                <!--  -->
                <!--  -->
                <div class="checkbox-item">
                  <input type="checkbox" name="terms_of_service" value="yes">
                  <span class="terms-text" ><a href="#">I agree to the Terms of Service</a></span>
                </div>
                <!--  -->
                <!--  -->
                <div class="submit-item">
                  <input type="submit" name="submit" value="Create An Account">
                </div>
                <!--  -->
                <!--  -->
                <div class="signin-link-container">
                  <span>Do you have an Account? <a href="../includes/signin.php">Sign In</a></span>
                </div>
                <!--  -->
              </form>
            </div>

            <!--  -->
            <div class="avatar-container">
              <img src="../media/illustrations/bbb.png" alt="illustration">
            </div>
        </div>












<?php 
    require_once '../includes/footer.php';
?>

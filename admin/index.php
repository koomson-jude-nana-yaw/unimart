

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logo/favicon.png" type="image/x-icon">
    <title>UniMart-ADMIN-LOGIN | University Online Campus Market </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="../fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
        <!--  css -->
    <link rel="stylesheet" href="css/login.css?v=<?= time();?>">
    <!-- <link rel="stylesheet" href="css/home.css?v=<?= time();?>"> -->
  </head>
  <body>
    <main class="body-container">
        <!-- ------- -->
         <!-- ------- -->
         <!--  -->
        <p class="error-container <?php if(isset($_GET['error'])){ echo 'error-container-active'; } ?>">
        <?php 
        if (isset($_GET['error'])) {
          echo $_GET['error'];
        } 
        ?>
        </p>

        <!--  -->

        <!--  -->
        <div class="signin-container">
          <!--  -->
            <div class="form-container">
                <div class="form-header-container">
                  <!--  -->
                  <div class="signin-username-logo-container">
                    <!-- <img src="../media/logo/favicon.png" alt="user logo"> -->
                     <i class="fas fa-user-circle fa-3x" ></i>
                  </div>
                  <!--  -->
                  <div class="unimart-signin-text-container">
                    <!-- unimart logo container -->
                    <div class="unimart-logo">
                        <a href="../index.php">Uni<span>Mart</span></a> 
                    </div>
                    <h1 class="text-signin">Sign In</span>
                    <!-- -------------------- -->
                  </div>
              </div>
              <!--  -->
              <form action="config/login_config.php" method="post" class="signin-form">
                <!--  -->
                <!--  -->
                <div class="input-item">
                  <input type="text" name="email" placeholder="Email" autocomplete="off">
                  <span class="form-icon">
                    <i class="fas fa-user-circle"></i>
                  </span>
                </div>
                <!--  -->
                <!--  -->
                <!-- <div class="input-item">
                  <input type="text" name="email" placeholder="Your Email" autocomplete="off">
                  <span class="email-icon">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div> -->
                <!--  -->
                <!--  -->
                <!--  -->
                <!--  -->
                <div class="input-item">
                  <input type="password" name="password" placeholder="Password" autocomplete="off">
                  <span class="form-icon">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
                <!--  -->
                <!--  -->
                <!--  -->
                <!--  -->
                <div class="submit-item">
                  <input type="submit" name="submit" value="Sign In">
                </div>
                <!--  -->
                <!--  -->
                <div class="signup-link-container">
                  <p>I don't have an Account? Contact Management </p>
                </div>
                <!--  -->
              </form>
            </div>

            <!--  -->
            <div class="avatar-container">
              <img src="../media/illustrations/bbb.png" alt="illustration">
            </div>
        </div>










   </main>
  <!-- font awesome js -->
        <script src="fontawesome/js/all.js"></script>
        <script src="js/index.js"></script>

</body>
</html>



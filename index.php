<?php ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="media/logo/favicon.png" type="image/x-icon">
    <title>UniMart | University Online Campus Market </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
        <!--  css -->
    <link rel="stylesheet" href="css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?= time();?>">
    <!-- <link rel="stylesheet" href="css/home.css?v=<?= time();?>"> -->
  </head>
  <body>
    <!-- Overall body container -->
    <main class="body-container">
        <!-- top nav bar container -->


        <nav class="top-navbar-container">
            <!-- unimart logo container -->
            <div class="unimart-logo">
                <a href="index.php">Uni<span>Mart</span> </a>
            </div>
            <!-- -------------------- -->

            <!-- nav button link container -->
             <div class="nav-items-container">
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pages/products.php">Products</a></li>
                    <li><a href="pages/services.php">Services</a></li>
                    <li><a href="pages/shops.php">Shops</a></li>
                    <li><a href="pages/about_us.php">About Us</a></li>
                    <li><a href="pages/contact_us.php">Contact Us</a></li>
                    <!-- <li></li> -->
                </ul>
             </div>



             <!-- ------ -->
            <div class="search-container">
                <form action="" class="search-form">
                    <!--  -->
                    <div class="search-item">
                        <input type="text" placeholder="search here">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="search-submit-btn"> 
                        <button type="submit"> <i class="fas fa-search search-btn" ></i> </button> 
                    </div>

                    <!-- -------- -->
                </form>
            </div>
            <!-- --------------------- -->
            <!-- <div class="contact-us-container">
                <a href="pages/contact_us.php" class="contact-us-link" >Contact Us</a>
            </div> -->
            <!-- ------------------ -->


            <!-- --------------- -->
             <div class="nav-btn-container">
                <div class="sign-in-btn">
                    <a href="includes/signin.php">Sign In</a>
                </div>
                <!--  -->
                <div class="sign-up-btn">
                    <a href="includes/signup.php">Sign Up</a>
                </div>
                 <!-- sidebar btn -->
                <div class="sidebar-open-btn">
                    <i class="fas fa-bars"></i>
                </div>
            <!-- --------- -->
             </div>
             <!-- ----------- -->

            
        </nav>
        <!-- ---------------End of top navbar -->



         <!-- side bar -->
         <div class="side-navbar ">
            <!--  -->
            <div class="sidebar-search-container">
                <form action="" class="search-form">
                    <!--  -->
                    <div class="search-item">
                        <input type="text" placeholder="search here">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="search-submit-btn"> 
                        <button type="submit"> <i class="fas fa-search search-btn" ></i> </button> 
                    </div>

                    <!-- -------- -->
                </form>
            </div>
            <ul class="side-navbar-group">
                <li><a href="index.php" class="side-navbar-item ">Home</a></li>
                <li><a href="pages/products.php" class="side-navbar-item">Products</a></li>
                <li><a href="pages/services.php" class="side-navbar-item">Services</a></li>
                <li><a href="pages/shops.php" class="side-navbar-item">Shops</a></li>
                <li><a href="pages/about_us.php" class="side-navbar-item">About Us</a></li>
                <li><a href="pages/contact_us.php" class="side-navbar-item">Contatct Us</a></li>
            </ul>
            <!--  -->
            <ul class="socials-group">

                <!-- <li><a href="#" class="socials-item"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="socials-item"><i class="fab fa-twitter "></i></a></li>
                <li><a href="#" class="socials-item"><i class="fab fa-snapchat "></i></a></li>
                <li><a href="#" class="socials-item"><i class="fab fa-youtube "></i></a></li>
                <li><a href="#" class="socials-item"><i class="fab fa-tiktok "></i></a></li>
                <li><a href="#" class="socials-item"><i class="fab fa-github "></i></a></li> -->
            </ul>
            <!--  -->
            <div class="sidebar-close-btn">
                <i class="fas fa-close fa-3x "></i>
            </div>
        </div>
    <!-- End of side bar -->



       











<div class="footer-container">
            <div class="top-container">

            </div>
            <!--  -->
            <!--  -->

            <hr>
            <div class="middle-container">
                  <div class="unimart-logo">
                   <a href="../index.php">Uni<span>Mart</span> </a>
                  </div>

                  <div class="policy-container">
                        <a href="#">User Agreements</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Cookie Policy</a>
                  </div>

            </div>
            <!--  -->
            <hr>
            <!--  -->

            <div class="bottom-container">
                  <!-- <ul class="ads">
                        <li>2</li>
                        <li>2</li>
                        <li>2</li>
                        <li>2</li>
                        <li>2</li>
                        <li>2</li>
                  </ul> -->
                  <p class="copyright-text">
                  &copy; Unimart. All rights reserved.
            </p>
            </div>
            <!--  -->
            <!--  -->
            
      </div>
   
   
   
   
   
   
   
   
   
   </main>
  <!-- font awesome js -->
        <script src="fontawesome/js/all.js"></script>
        <script src="js/index.js"></script>

</body>
</html>
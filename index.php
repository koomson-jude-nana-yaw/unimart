<?php


    



?>

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
                    <!-- <li><a href="pages/shops.php">Shops</a></li> -->
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
                    <a href="./includes/signin.php">Sign In</a>
                </div>
                <!--  -->
                <div class="sign-up-btn">
                    <a href="./includes/signup.php">Sign Up</a>
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
                <!-- <li><a href="pages/shops.php" class="side-navbar-item">Shops</a></li> -->
                <li><a href="pages/about_us.php" class="side-navbar-item">About Us</a></li>
                <li><a href="pages/contact_us.php" class="side-navbar-item">Contatct Us</a></li>
                <li><a href="includes/signin.php" class="side-navbar-item">Sign In</a></li>
                <li><a href="includes/signup.php" class="side-navbar-item">Sign Up</a></li>
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



       <!-- ----------------------------------------------------content section------------------------------------------- -->
    <div class="main-container">
        
        <!-- showcase -->
        <div class="showcase">

            <!--  -->
            <div class="flex-column-left">

                <!-- header -->
                <div class="header">
                    <h1>Best Online Store Shop and Service Provider</h1>
                    <div class="actions">
                        <div class="explore-btn">Explore</div>
                        <img src="./images/icons/1.webp" alt="">
                    </div>
                </div>

                <!-- What makes us pro -->
                <div class="what-makes-us-pro">
                    <h2>What Make Us Pro?</h2>
                    <ul>
                        <li>
                            <img src="./images/icons/mark.png" alt="">
                            <p>100% Authentic Products</p>
                        </li>
                        <li>
                            <img src="./images/icons/mark.png" alt="">
                            <p>First of a kind</p>
                        </li>
                        <li>
                            <img src="./images/icons/mark.png" alt="">
                            <p>Nationwide Delivery</p>
                        </li>
                        <li>
                            <img src="./images/icons/mark.png" alt="">
                            <p>Safe Payments</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!--  -->
            <div class="flex-column-right">
                <div class="column-left">
                    <div class="background"></div>
                    <img src="./images/products/MG_9335.jpg" alt="">
                </div>
                <div class="column-right">
                    <div class="symbol">
                        <img src="./images/icons/star.png" alt="">
                    </div>
                    <div class="rectangle">
                        <div class="background"></div>
                        <img src="./images/products/14159014_MzAwLTQwMC0wNzliYjdjZWRiLTI.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>


        <!-- new products section -->
        <div class="new-products-container">

            <!-- header -->
            <div class="new-p-header">
                <h1>Newest Products</h1>

                <div class="controllers">
                    <div class="left-btn">
                        <i class="fa fa-angle-left icon" aria-hidden="true"></i>
                    </div>
                    <div class="right-btn">
                        <i class="fa fa-angle-right icon" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <!-- products -->
            <div class="products">
                <ul class="wrapper">
                    <li>
                        <img src="./images/products/girl.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/products/images.jpeg" alt="">
                    </li>
                    <li>
                        <img src="./images/products/white_sneaker.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/products/68097_1668607420.webp" alt="">
                    </li>
                    <li>
                        <img src="./images/bathroom/e11d8d462de1b8d72804d9eab49043f2.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/home decor/Versace black white hot luxury window curtain for child bedroom living room window decor,curtain waterproof with sun block.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/kitchensets/20 Favorite Kitchen Gadgets Under $30 - Kelley Nan.jpg" alt="">
                    </li>
                </ul>
            </div>
        </div>

        <!-- about us -->
        <div class="about-us">

            <!-- header -->
            <h2 class="about-us-header">About Us</h2>

            <div class="about-content">
                <div class="text-content">
                    <h1>Shop in style, Shop safe & Find reliable service</h1>
                    <p>We are the first and the Best. <br/> Approved </p>
                </div>
                <div class="image-content">
                    <img src="./images/products/headset.png" alt="">
                </div>
            </div>
            <div class="about-btn">
                <p>Explore Now</p>
                <i class="fa fa-angle-right right-angle"></i>
            </div>
        </div>


        <!-- Most popular items -->
        <div class="new-products-container popular-items">

            <!-- header -->
            <div class="new-p-header">
                <h1 style = 'color: #482BE7; font-size: 35px'>Most Popular Items</h1>
            </div>

            <!-- products -->
            <div class="products">
                <ul class="wrapper">
                    <li>
                        <img src="./images/products/girl.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/products/images.jpeg" alt="">
                    </li>
                    <li>
                        <img src="./images/products/white_sneaker.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/products/68097_1668607420.webp" alt="">
                    </li>
                    <li>
                        <img src="./images/bathroom/e11d8d462de1b8d72804d9eab49043f2.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/home decor/Versace black white hot luxury window curtain for child bedroom living room window decor,curtain waterproof with sun block.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/kitchensets/20 Favorite Kitchen Gadgets Under $30 - Kelley Nan.jpg" alt="">
                    </li>
                </ul>
            </div>
        </div>


         <!-- Most popular services -->
        <div class="new-products-container service">

            <!-- header -->
            <div class="new-p-header">
                <h1 style = 'color: #482BE7; font-size: 35px'>Most Popular Services</h1>
            </div>

            <!-- products -->
            <div class="products">
                <ul class="wrapper" id = 'service'>
                    <li>
                        <img src="./images/service/happy-african-male-trader-food-260nw-2083822600.webp" alt="">
                    </li>
                    <li>
                        <img src="./images/service/Massage Therapy Student.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/service/haircut-81-1.jpeg" alt="">
                    </li>
                    <li>
                        <img src="./images/service/image-african-man-foot-wearworkshop-260nw-1839497299.webp" alt="">
                    </li>
                    <li>
                        <img src="./images/service/Kelvin.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/service/laundry-facilities.jpg" alt="">
                    </li>
                    <li>
                        <img src="./images/service/istockphoto-1465634394-612x612.jpg" alt="">
                    </li>
                </ul>
            </div>
        </div>

    </div>













<!-- ------------------------------ -->
<div class="footer-container">
            <div class="top-container">
                <span><a href="../includes/signin.php" class="footer-signin-btn">Sign In</a></span>
                <span><a href="../includes/signup.php" class="footer-signup-btn">Sign Up</a></span>
            </div>
            <!--  -->
            <!--  -->

            <hr>
            <div class="middle-container">
                  <div class="unimart-logo">
                   <a href="index.php">Uni<span>Mart</span> </a>
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
        <script src="js/index.js?v=<?= time();?>"></script>

</body>
</html>
<?php
    // initializing a session
    session_start();
    
    // Checking if the user is already logged in, if no then redirect  to login page
    if(!isset($_SESSION["vender_id"]) && !isset($_SESSION['email'])){
        header("Location: ../includes/signin.php");
        exit();
    }
    

require_once '../database/connection_instance.php';
require_once '../includes/functions.php';

// $vendor_select_query = "SELECT * FROM vendors WHERE vender_id = $_SESSION['vender_id'];";
// $vendor_stmt = $connection->prepare($vendor_select_query);
// $vendor_stmt->execute();
// $vendors = $vendor_stmt->fetchAll();









// fetch data










// getting error and success message







?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logo/favicon.png" type="image/x-icon">
    <title>UniMart - Vendor Portal | University Online Campus Market </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
        <!--  css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/header.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/shop.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/add_product.css?v=<?= time();?>">
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
            <div class="account-menu-container">
                <div class="vendor-image">
                    <img src="../media/profile_images/bbb.png" alt="picture">
                </div>
                <!--  -->
                <!--  -->
                <div class="menu-list-container">
                    <ul>
                        <li class="list-item"><a href="index.php">Dashboard</a></li>
                        <li class="list-item"><a href="shop.php">View Shop</a></li>
                        <li class="list-item add-item"><a href="./add_product.php">Add New Product</a></li>
                        <li class="list-item"><a href="pending_orders.php">Pending Orders</a></li>
                        <li class="list-item"><a href="order_history.php">Order History</a></li>
                        <li class="list-item"><a href="account_settings.php">Account Settings</a></li>
                        <li class="list-item logout"><a class="" href="../includes/logout.php">Log Out</a></li>
                    </ul>
                </div>
                <div class="vendor-name-container">
                    <h1><?php echo strtoupper($_SESSION['username']); ?></h1>
                </div>
            </div>
            <!-- ------------------ -->
            <div class="nav-btn-container">
                 <!-- sidebar btn -->
                <div class="sidebar-open-btn">
                    <i class="fas fa-bars"></i>
                </div>
            <!-- --------- -->
             </div>
            
        </nav>
        <!-- ---------------End of top navbar -->


        
        














        <!--  -->
  
    
    <!--  -->
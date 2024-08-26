<?php
    // initializing a session
    session_start();
    
    // Checking if the user is already logged in, if no then redirect  to login page
    if(!isset($_SESSION["account_id"]) && !isset($_SESSION['email'])){
        header("Location: index.php");
        exit();
    }
    

require_once '../database/connection_instance.php';
require_once '../includes/functions.php';


$account_id = $_SESSION['account_id'];

$account_select_query = "SELECT * FROM accounts WHERE account_id = $account_id;";
$account_stmt = $connection->prepare($account_select_query);
$account_stmt->execute();
$accounts = $account_stmt->fetch(PDO::FETCH_ASSOC);





// fetch data
// Data from all tables
    // services
    $service_data_query = "SELECT * FROM services;";
    $service_data_stmt = $connection->prepare($service_data_query);
    $service_data_stmt->execute();
    $service_data_count = $service_data_stmt->rowCount();



    // operators
    $operators_data_query = "SELECT * FROM accounts WHERE account_type = 2;";
    $operators_data_stmt = $connection->prepare($operators_data_query);
    $operators_data_stmt->execute();
    $operators_data_count = $operators_data_stmt->rowCount();



    // vendors
    $vendors_data_query = "SELECT * FROM vendors;";
    $vendors_data_stmt = $connection->prepare($vendors_data_query);
    $vendors_data_stmt->execute();
    $vendors_data_count = $vendors_data_stmt->rowCount();


    // products
    $products_data_query = "SELECT * FROM vendors;";
    $products_data_stmt = $connection->prepare($products_data_query);
    $products_data_stmt->execute();
    $products_data_count = $products_data_stmt->rowCount();




     // orders
    $orders_data_query = "SELECT * FROM orders;";
    $orders_data_stmt = $connection->prepare($orders_data_query);
    $orders_data_stmt->execute();
    $orders_data_count = $orders_data_stmt->rowCount();







// getting error and success message




?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logo/favicon.png" type="image/x-icon">
    <title>UniMart - Admin Portal | University Online Campus Market </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
        <!--  css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/header.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/dashboard.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/side_menu.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/operators.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/services.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/settings.css?v=<?= time();?>">
    <!-- <link rel="stylesheet" href="css/home.css?v=<?= time();?>"> -->
  </head>
  <body>


    <!-- Overall body container -->
    <main class="body-container">
        <!-- top nav bar container -->


        <nav class="top-navbar-container">
            <!-- unimart logo container -->
            <div class="unimart-logo">
                <a href="dashboard.php">Uni<span>Mart</span> </a>
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
            <!-- --------------------- -->
            <div class="account-menu-container">
                <div class="vendor-image">
                    <img src="../media/profile_images/<?php if (!empty($vendors['imageURL'])) {
                        echo $vendors['imageURL'];
                    } else{ echo 'bbb.png'; } ?>" alt="picture">
                </div>
                <!--  -->
                <!--  -->
                <div class="menu-list-container">
                    <ul>
                        <li class="list-item"><a href="dashboard.php">DASHBOARD</a></li>
                        <?php if($account_id == 1){?>    <li class="list-item"><a href="operators.php">OPERATORS</a></li>     <?php } ?>
                        <li class="list-item"><a href="vendors.php">VENDORS</a></li>
                        <!-- <li class="list-item"><a href="shops.php">SHOPS</a></li> -->
                        <!-- <li class="list-item"><a href="product.php">PRODUCTS</a></li> -->
                        <li class="list-item"><a href="services.php">SERVICES</a></li>
                        <li class="list-item"><a href="notification.php">NOTIFICATION</a></li>
                        <li class="list-item"><a href="settings.php">SETTINGS</a></li>
                        <li class="list-item logout"><a class="" href="config/logout.php">Log Out</a></li>
                    </ul>
                </div>
                <div class="vendor-name-container">
                    <h2> <?= strtoupper($accounts['first_name'] . ' ' . $accounts['last_name']) ?> <span> <i class="fas fa-arrow-circle-down"></i></span> </h2>
                    <p><?php if($accounts['account_type'] == 1){ echo 'ADMIN'; } else{echo 'OPERATOR';} ?></p>
                </div>
                
            </div>

            
        </nav>
        <!-- ---------------End of top navbar -->


        
         










  

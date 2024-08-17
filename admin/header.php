<?php
    // initializing a session
    // session_start();
    
    // Checking if the user is already logged in, if no then redirect  to login page
    // if(!isset($_SESSION["vender_id"]) && !isset($_SESSION['email'])){
    //     header("Location: ../includes/signin.php");
    //     exit();
    // }
    

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
    <link rel="stylesheet" href="css/index.css?v=<?= time();?>">
    <!-- <link rel="stylesheet" href="css/home.css?v=<?= time();?>"> -->
  </head>
  <body>
    <h1>ADMIN PORTAL</h1>
    <a href="../includes/logout.php">Log Out</a>

        <!--  -->
  
    <?php 

        // echo '<h1>' . $_SESSION['username'] . '</h1>';
    
    ?>
    <!--  -->
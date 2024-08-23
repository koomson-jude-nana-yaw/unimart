<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logo/favicon.png" type="image/x-icon">
    <title>UniMart | University Online Campus Market </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="../fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
        <!--  css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/contact_us.css?v=<?= time();?>">
    <!-- <link rel="stylesheet" href="css/home.css?v=<?= time();?>"> -->
  </head>
  <body>


<?php 
    require_once '../includes/top_navbar.php';
?>
  <div class="contact-us-page-container">
    <div class="message-wrapper">
      <h1 class="message-header-text">We would love to hear from You</h1>
      <p class="message-text" >Please submit your message and our representatives will get in touch with You</p>
      <p class="call-number"> <i class="fas fa-phone"></i> Call +233 25 545 4587 </p>
      <!--  -->
      <!--  -->
      <form action="" method="post" class="contact-form-container">
       
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="name" placeholder="Your Name" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="email" placeholder="Your Email" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="phone_number" placeholder="Phone Number" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="input-item">
            <textarea name="message" id=""></textarea>
        </div>
        <!--  -->
        <!--  -->
        <div class="submit-item">
            <input type="submit" value="Send Message" name="submit" >
        </div>
      </form>

    </div>
    <!--  -->
    <!--  -->
    <div class="help-wrapper">
      <h3>Help</h3>
      <p>Need help? Don't hesitate to ask us anything. Email us directly info@uniart.com or call us on +233 25 545 4587. You can checkout on our help page to get more information.</p>
    </div>
  </div>



















<?php 
    require_once '../includes/footer.php';
?>

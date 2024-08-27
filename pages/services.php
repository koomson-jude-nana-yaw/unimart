<?php 


    require_once '../database/connection_instance.php';


  // service
    $service_query = "SELECT * FROM services INNER JOIN vendors ON service_owner = vender_id;";
    $service_stmt = $connection->prepare($service_query);
    $service_stmt->execute();
    $services = $service_stmt->fetchAll();








?>

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
    <link rel="stylesheet" href="../css/products.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/service.css?v=<?= time();?>">
  </head>
  <body>


<?php 
    require_once '../includes/top_navbar.php';
?>






<section class="main-container">

  <!-- product categories -->
  <div class="categories-container">
    <div class="arrows">
      <i class="fa fa-angle-left icon" aria-hidden="true"></i>
      <i class="fa fa-angle-right icon" aria-hidden="true"></i>
    </div>
    <ul class="product-categories">
      <li>All</li>
      <li>ELECTRONICS REPAIR</li>
      <li>TAILORS/SEAMSTRESS</li>
      <li>SHOE MAKERS</li>
      <li>HAIR STYLISTS</li>
      <li>MAKEUP ARTISTS</li>
      <li>BARBERS</li>
      <li>LAUNDERY SERVICES</li>
      <li>DRIVERS</li>
      <li>DELIVERY SERVICES</li>
      <li>OTHERS</li>
    </ul>
  </div>

  <!-- top bar -->
  <div class="top-bar">
    <p>BEST SERVICES ON CAMPUS</p>
  </div>

  <div class="product-container">
   

    <?php 

        foreach ($services as $service) { ?>
          <div class="product">
            <div class="image-container">
              <img src="../media/service_pictures/<?= $service->image_URL ?>" alt="">
            </div>
            <div class="product-info">
              <h3 class="service-name"><?= ucwords($service->service_name) ?></h3>
              <p class="service-type"><?= ucwords($service->service_type) ?></p>
              <p class="owner-name"><?= ucwords($service->username) ?></p>
              <p class="contact"><?= $service->phone_number ?></p>
            </div>
            <div class="background"></div>
          </div>
      <?php } ?>
    
    
    
    <!-- <div class="product">
      <div class="image-container">
        <img src="../images/service/african-american-hairdresser-apron-trimming-260nw-1955233402.webp" alt="">
      </div>
      <div class="product-info">
        <span class="service-name">hairdresser</span>
        <span class="service-type">Store Service</span>
        <span class="owner-name">3tonam (men's Favourite)</span>
        <span class="telNumb">+233 55 101 8070</span>
      </div>
        <div class="background"></div>
    </div> -->
    
    </section>






<div class="product-details-container">
  <?php

  include_once('../includes/product_details.php')

  ?>
</div>




<?php 
    require_once '../includes/footer.php';
?>

<script src="../js/products.js?v=<?= time();?>"></script>
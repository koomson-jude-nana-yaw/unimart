<?php 

require_once '../database/connection_instance.php';

// Fetch products from the database
$product_query = "SELECT * FROM products INNER JOIN vendors ON Product_owner = vender_id;";
$product_stmt = $connection->prepare($product_query);
$product_stmt->execute();
$products = $product_stmt->fetchAll();

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
    <!-- <link rel="stylesheet" href="css/home.css?v=<?= time();?>"> -->
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
      <li>Foods</li>
      <li>Clothing</li>
      <li>Phones & Tablets</li>
      <li>Health & Beauty·</li>
      <li>Home & Office</li>
      <li>Appliances</li>
      <li>Electronics</li>
      <li>Gaming</li>
      <li>Computing</li>
      <li>Others</li>
    </ul>
  </div>

  <!-- top bar -->
  <div class="top-bar">
    <p>DON’T MISS THIS AWESOME DEALS</p>
  </div>

  <div class="product-container">
    
    <!-- <div class="product">
      <div class="image-container">
        <img src="../images/smart home devices/Echo Dot with clock (5th generation, 2022 release) Bigger vibrant sound Wi-Fi and Bluetooth smart speaker and Alexa  Cloud Blue.jpg" alt="">
      </div>
      <div class="product-info">
        <span class="product-name">Wi-Fi and Bluetooth smart speaker and Alexa</span>
        <span class="price">GHc 150.00</span>
        <span class="items-left">100 items left</span>
      </div>
        <div class="background"></div>
    </div> -->


   <?php foreach ($products as $product) { ?>
      <div class="product" 
          data-id="<?= $product->id ?>" 
          data-name="<?= strtoupper($product->product_name) ?>" 
          data-price="<?= $product->price ?>" 
          data-image="<?= $product->image_URL ?>">
        <div class="image-container">
          <img src="../media/product_pictures/<?= $product->image_URL ?>" alt="">
        </div>
        <div class="product-info">
          <span class="product-name"><?= strtoupper($product->product_name) ?></span>
          <span class="price">GH&#8373; <?= $product->price ?></span>
          <span class="view_more">View More</span>
        </div>
      </div>
    <?php } ?>
    
    
    
  </div>
</section>



<div class="product-details-container">
  <?php

  include_once('../includes/product_details.php')

  ?>
</div>

<div class="order_form">
  <?php
    include_once('../includes/order_form.php')
  ?>
</div>





<?php 
  require_once '../includes/footer.php';
?>

<script src="../js/products.js?v=<?= time();?>"></script>
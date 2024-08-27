
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
    <link rel="stylesheet" href="../css/about_us.css?v=<?=time();?>">
  </head>
  <body>


<?php 
    require_once '../includes/top_navbar.php';
?>



<section class="about_container">
  <!--  -->
  <div class="header">
    <h1 class="header_text">About Us</h1>
    <p>Welcome to UniMart Online Marketplace, your one-stop shop for all things related to our vibrant university community! Our platform is designed to support students, faculty, and staff by providing a convenient place to access a wide range of products and services tailored specifically for our campus.</p>
  </div>

  <!--  -->
  <div class="what-we-offer">
    <h2>What We Offer</h2>
    <p>Explore our curated selection of products and we offer a variety of services below;</p>
  </div>

  <!--  -->
  <ul class="products_service">
    <li>
      <img src="../images/products/Nanas-Famous-Homemade-Peppermint-Ice-Cream-6-e1543277868775.jpg" alt="">
      <p>Food</p>
    </li>
    <li>
      <img src="../images/products/clothing.webp" alt="">
      <p>Clothing</p>
    </li>
    <li>
      <img src="../images/products/google-pixel-7a-phone-14.webp" alt="">
      <p>Phone and Tablets</p>
    </li>
    <li>
      <img src="../images/products/essential-home-office-desk-organizer_e284a6b3-bfc0-40d5-9dae-36e3aab1f446.webp" alt="">
      <p>Home and Office</p>
    </li>
    <li>
      <img src="../images/products/Kitchen-Appliances-Category-Page-Banner.png" alt="">
      <p>Appliances</p>
    </li>
    <li>
      <img src="../images/products/gaming.jpg" alt="">
      <p>Gaming</p>
    </li>
    <li>
      <img src="../images/products/computing.jpg" alt="">
      <p>Computing</p>
    </li>
    <li>
      <img src="../images/service/african-american-woman-applying-makeup-by-makeup-artist-beauty-saloon_627829-4586.avif" alt="">
      <p>Make Up Artist</p>
    </li>
    <li>
      <img src="../images/service/laundry-facilities.jpg" alt="">
      <p>Laundry services</p>
    </li>
    <li>
      <img src="../images/service/african-american-hairdresser-apron-trimming-260nw-1955233402.webp" alt="">
      <p>Hair Stylists</p>
    </li>
    <li>
      <img src="../images/service/barbaring.webp" alt="">
      <p>Barbaring Shop</p>
    </li>
    <li>
      <img src="../images/service/devery.jpeg" alt="">
      <p>Others</p>
    </li>
  </ul>

  <!--  -->
  <div class="get_involve">
    <h2>Get Involved</h2>
    <p>We’re always looking for ways to improve and expand our offerings. Have ideas or feedback? We’d love to hear from you! Join our community discussions, and let’s shape the future of <span style = 'color: crimson; font-weight: 500'>UNIMART</span> together.
    </p>
    <p>
      Thank you for being a part of our community. Together, we can create a thriving campus environment where everyone has access to the resources they need to succeed.
    </p>
  </div>

  <!--  -->
  <div class="about_footer">
    <h1>We’d Love to Hear from You</h1>
    <p>
      <i class="fa fa-phone" aria-hidden="true"></i>
      <span>Call us on +233 55 101 8070</span>
    </p>
  </div>
</section>




<?php 
    require_once '../includes/footer.php';
?>
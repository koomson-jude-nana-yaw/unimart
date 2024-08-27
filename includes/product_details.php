<!-- Font awesome icon -->
<link rel="stylesheet" href="../fontawesome/css/all.css?v=<?= time();?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<link rel="stylesheet" href="../css/product_details.css?v=<?= time();?>">

<section class="p-details-main-container">

    <!-- close button -->
    <div class="close-btn">
        <i class="fa fa-circle-xmark closeBtnIcon"></i>
    </div>

    <!-- card -->
    <div class="card">

        <!-- header -->
        <div class="header">
            <h1>Product Info</h1>
            <div class="horizontal_rule"></div>
        </div>

        <!-- product info -->
        <div class="product_info_container">
            <div class="product_image">
                <img src="../images/products/white_sneaker.jpg" alt="">
            </div>

            <div class="product_info">
                <!--  -->
                <div class="text_info">
                    <h1 class="p_name">Airmax 360</h1>
                    <!--  -->
                    <div class="user_reviews">
                        <ul class="stars">
                            <li>
                                <i class="fa fa-star star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>

                        <div class="reviewers">
                            <span class="number">59</span>
                            <p>reviews</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="p_price">
                        <p>GH₵</p>
                        <span>350.00</span>
                    </div>
                </div>

                <!--  -->
                <div class="color_types">
                    <h2>Colors / Types</h2>
                    <ul>
                        <li>
                            <img src="../images/products/68097_1668607420.webp" alt="">
                        </li>
                        <li>
                            <img src="../images/products/MG_9335.jpg" alt="">
                        </li>
                        <li>
                            <img src="../images/products/white_sneaker.jpg" alt="">
                        </li>
                    </ul>
                </div>

<!--                 
                <div class="p_sizes">
                    <p>Sizes</p>
                    <ul>
                        <li class = 'null'>39</li>
                        <li class = 'available'>41</li>
                        <li class = 'null'>42</li>
                        <li class = 'available'>43</li>
                        <li class = 'null'>43.5</li>
                        <li class = 'available'>44</li>
                        <li class = 'null'>44.5</li>
                    </ul>
                    <p class="footer">Size guide</p>
                </div> -->

                <!--  -->
                <div class="order_btn">
                    <i class="fa fa-money-check-dollar check"></i>
                    <p>ORDER NOW</p>
                </div>

                <!--  -->
                <div class="contact">
                    <i class="fa-brands fa-whatsapp whatsapp"></i>
                    <p>+233 55 101 8070</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../js/products.js?v=<?= time();?>"></script>
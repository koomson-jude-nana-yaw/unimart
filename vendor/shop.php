<?php 
    include './header.php';
?>
    <div class="page-container">
        <?php
            include_once 'side_menu.php';
    ?>

    <div class="page-item-wrapper">

        <div class="shop-details-container">
        <div class="profile-image-container">
            <img src="../media/profile_images/<?php if (isset($_SESSION['image'])) {
                        echo $_SESSION['image'];
                    } else{ echo 'bbb.png'; } ?>" alt="profile image">
        </div>

        <!--  -->
        <!--  -->

        <div class="shop-name-container">
            <h2><?= ucfirst($_SESSION['shop_name']); ?></h2>
            <p><?= ucfirst($_SESSION['location']); ?> . 36 Products</p>
        </div>
    </div>
    <h3 class="shop-products-text">Shop products (36) </h3>
    <!--  -->

    <div class="shop-products-container">
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <a href="add_product.php"> <i class="fas fa-edit"></i> Edit Product </a>

        </div>
        <!--  -->
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <a href="product.php"> <i class="fas fa-edit"></i> Edit Product </a>
        </div>
        <!--  -->
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <a href="product.php"> <i class="fas fa-edit"></i> Edit Product </a>

        </div>
        <!--  -->
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <a href="product.php"> <i class="fas fa-edit"></i> Edit Product </a>

        </div>
        <!--  -->
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <a href="product.php"> <i class="fas fa-edit"></i> Edit Product </a>

        </div>
        <!--  -->
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <a href="product.php"> <i class="fas fa-edit"></i> Edit Product </a>

        </div>
        <!--  -->
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <a href="product.php"> <i class="fas fa-edit"></i> Edit Product </a>

        </div>
        <!--  -->
        <div class="product-wrapper">
            <div class="product-image-container">
                <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="product image">
            </div>
            <h2 class="product-name">Phone</h2>
            <p class="product-price">GH&#8373; 2000.00</p>
            <span>
                <a href="product.php"> <i class="fas fa-edit"></i> </a>
            </span>
            <span>
                    <a href="config/delete_product.php?product_id=412">  <i class="fas fa-trash"></i></a>
            </span>
        </div>

    </div>
             <script>
                document.querySelector('.view-shop').classList.add('menu-active');
            </script>
    <?php 
    include 'footer.php';
    include '../includes/footer.php'; 
    ?>

    </div>
</div>






























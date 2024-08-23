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
            <img src="../media/profile_images/<?php if (!empty($vendors['imageURL'])) {
                        echo $vendors['imageURL'];
                    } else{ echo 'bbb.png'; } ?>" alt="profile image">
        </div>

        <!--  -->
        <!--  -->

        <div class="shop-name-container">
            <h2><?= ucfirst($vendors['shop_name']); ?></h2>
            <p><?= ucfirst($vendors['location']); ?>. <?= $vender_products_count ?> Products</p>
        </div>
    </div>
    <h3 class="shop-products-text">Shop products (<?= $vender_products_count ?>) </h3>
    <!--  -->


    <div class="shop-products-container">
    
        <?php 
        if ($vender_products_count == 0) {
            echo '<p>No product in shop</p>';
        } else{
        foreach($vender_products as $product){ ?>
            <div class="product-wrapper">
                <div class="product-image-container">
                    <img src="../media/product_pictures/<?= $product->image_URL ?>" alt="product image">
                </div>
                <h2 class="product-name"><?= $product->product_name ?></h2>
                <p class="product-price">GH&#8373; <?= $product->price ?></p>
                <a href="add_product.php"> <i class="fas fa-edit"></i> Edit Product </a>
                <span>
                    <a href="config/delete_product.php?product_id=<?= $product->product_id ?>">  <i class="fas fa-trash"></i></a>
                </span>
            </div>
        <?php } } ?>
        <!--  -->
        
        <!--  -->
        <!-- <div class="product-wrapper">
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
        </div> -->

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






























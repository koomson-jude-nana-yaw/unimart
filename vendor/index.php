<?php 
    include_once 'header.php';
?>

    <div class="page-container">
        <?php
            include_once 'side_menu.php';
        ?>
        <!--  -->
        <div class="page-item-wrapper">
            <!--  -->
            <div class="dashboard-text-container">
                <h2>Welcome <?= ucfirst($_SESSION['username']) ?>, </h2>
            </div>
            <!--  -->
            <!--  -->

            <div class="dashboard-essential-container">
                <h2 class="welcome-text">Hey, Welcome to Unimart</h2>
                <p class="steps-text">Complete these steps and start selling.</p>
                <!--  -->
                <!--  -->
                <div class="wrapper">
                    <div class="add-product-container">
                        <h2> <i class="fas fa-pen" ></i></h2>
                        <h2> Upload Products</i></h2>
                        <p class="upload-product-text">Upload your product and choose it categories.</p>
                        <p class="upload-product-text">Add at least five products to get your shop ready for customers.</p>

                        <a href="product.php">Add product here.</a>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="set-up-container">
                        <h2> <i class="fas fa-store" ></i></h2>
                        <h2> Set up Shop</i></h2>
                        <p class="">Customize your shop and stand out.</p>
                        <p class="">Customers love supporting original products. Tell your story and share social links.</p>

                        <a href="settings.php">Add profile image here.</a>
                        
                    </div>
                    

                </div>
            </div>
            <div class="dashboard-blank"></div>



            <script>
                document.querySelector('.dashboard').classList.add('menu-active');
            </script>
        <?php

            include 'footer.php';
            include '../includes/footer.php';

        ?>

        </div>

        

    </div>



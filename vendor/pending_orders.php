<?php 
    include './header.php';
?>
<div class="page-container">
        <?php
            include_once 'side_menu.php';
        ?>
        <!--  -->
        <div class="page-item-wrapper">

        <div class="orders-page-header">
            <h1 class="add-product-text">Pending Orders</h1> 
        </div>

    <!-- <div class="product-search-container">
        <form action="" method="post">

        </form>
    </div> -->


    <div class="orders-list-container">
        <div class="list-header-container">
            <p class="list-header-item">Product</p>
            <p class="list-header-item">Category</p>
            <p class="list-header-item">Service</p>
            <p class="list-header-item">Location</p>
            <p class="list-header-item">Price</p>
            <p class="list-header-item">Edit</p>
        </div>
        <!--  -->
        <!--  -->
        <div class="list-container">
            <p class="list-item"><img src="../images/bathroom/Bathroom Rug Mat.jpg" alt="product Image"> Rug Mat </p>
            <p class="list-item">Bathroom</p>
            <p class="list-item">Delivery & Store</p>
            <p class="list-item">Amamoma, Chief Palace</p>
            <p class="list-item">GHGH&#8373; 210.00</p>
            <p class="list-item edit">
                <span> <a href="#update-product"> <i class="fas fa-pen"></i> </a> </span>
                <span><a href="config/delete_product.php?product_id=412" ><i class="fas fa-trash"></i></a> </span>
            </p>
        </div>
        <!--  -->
        <!--  -->
        <div class="list-container">
            <p class="list-item"><img src="../images/bathroom/Bathroom Rug Mat.jpg" alt="product Image"> Rug Mat </p>
            <p class="list-item">Bathroom</p>
            <p class="list-item">Delivery & Store</p>
            <p class="list-item">Amamoma, Chief Palace</p>
            <p class="list-item">GHGH&#8373; 210.00</p>
            <p class="list-item edit">
                <span> <a href="#update-product"> <i class="fas fa-pen"></i> </a> </span>
                <span><a href="config/delete_product.php?product_id=412" ><i class="fas fa-trash"></i></a> </span>
            </p>
        </div>
        <!--  -->
        <!--  -->
        <div class="list-container">
            <p class="list-item"><img src="../images/bathroom/Bathroom Rug Mat.jpg" alt="product Image"> Rug Mat </p>
            <p class="list-item">Bathroom</p>
            <p class="list-item">Delivery & Store</p>
            <p class="list-item">Amamoma, Chief Palace</p>
            <p class="list-item">GHGH&#8373; 210.00</p>
            <p class="list-item edit">
                <span> <a href="#update-product"> <i class="fas fa-pen"></i> </a> </span>
                <span><a href="config/delete_product.php?product_id=412" ><i class="fas fa-trash"></i></a> </span>
            </p>
        </div>
    </div>





















            <script>
                document.querySelector('.pending-orders').classList.add('menu-active');
            </script>


    <?php include 'footer.php' ?>
    <?php include '../includes/footer.php' ?>
        </div>
</div>
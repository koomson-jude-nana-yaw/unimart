<?php 
    include './header.php';

    $past_orders_query = "SELECT * FROM orders LEFT OUTER JOIN products ON products.product_id = orders.product_id WHERE product_owner = $vender_id AND order_status = 'settled';";
    $past_orders_stmt = $connection->prepare($past_orders_query);
    $past_orders_stmt->execute();
    $vender_past_orders = $past_orders_stmt->fetchAll();
    $vender_past_orders_count = $past_orders_stmt->rowCount();
?>
<div class="page-container">
        <?php
            include_once 'side_menu.php';
        ?>
        <!--  -->
        <div class="page-item-wrapper">

        <div class="orders-page-header">
            <h1 class="add-product-text">Orders History</h1> 
        </div>

    <!-- <div class="product-search-container">
        <form action="" method="post">

        </form>
    </div> -->


    <div class="orders-list-container">
        <div class="list-header-container">
            <p class="list-header-item">Product</p>
            <p class="list-header-item">Date</p>
            <p class="list-header-item">Customer Name</p>
            <p class="list-header-item">Phone Number</p>
            <p class="list-header-item">Status</p>
            <p class="list-header-item">Delivered</p>
        </div>
        <!--  -->
        <!--  -->
        <?php if ($vender_past_orders_count == 0) {
            echo '<p>No Order History</p>';
        } else{
        foreach($vender_past_orders as $order){ ?>
            <div class="list-container">
                <p class="list-item"> <?= $order->product_name ?> GH&#8373; <?= $order->price ?></p>
                <p class="list-item"><?= $order->order_date ?></p>
                <p class="list-item"><?= $order->customer_name ?></p>
                <p class="list-item"><?= $order->cust_phone_number ?></p>
                <p class="list-item"><?= $order->order_status ?></p>
                <p class="list-item delivered-done">
                    <span> <i class="fas fa-check-circle"></i> </span>
                </p>
            </div>
        <?php } } ?>
        <!--  -->
        
        <!--  -->
        <!-- <div class="list-container">
            <p class="list-item">Rug Mat GH&#8373; 210.00  </p>
            <p class="list-item">12th August, 2024 12:00pm</p>
            <p class="list-item">Esther</p>
            <p class="list-item">0214569856</p>
            <p class="list-item">Settled</p>
            <p class="list-item delivered-done">
                <span> <i class="fas fa-check-circle"></i> </span>
            </p>
        </div> -->
        </div>




















            
        </div>
</div>

            <script>
                document.querySelector('.orders-history').classList.add('menu-active');
            </script>


    <?php include 'footer.php' ?>
    <?php include '../includes/footer.php' ?>
<?php 
    include './header.php';



    $orders_query = "SELECT * FROM orders LEFT OUTER JOIN products ON products.product_id = orders.product_id WHERE product_owner = $vender_id OR order_status IS NULL ORDER BY order_date DESC;";
    $orders_stmt = $connection->prepare($orders_query);
    $orders_stmt->execute();
    $vender_orders = $orders_stmt->fetchAll();
    $vender_orders_count = $orders_stmt->rowCount();





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
            <p class="list-header-item">Date</p>
            <p class="list-header-item">Customer Name</p>
            <p class="list-header-item">Phone Number</p>
            <p class="list-header-item">Status</p>
            <p class="list-header-item">Delivered</p>
        </div>
        <!--  -->
        <!--  -->
        <?php if ($vender_orders_count == 0) {
            echo '<p>No Order Available</p>';
        } else{
        foreach($vender_orders as $order){ ?>
            <div class="list-container">
                <p class="list-item"> <?= ucwords($order->product_name) ?> GH&#8373;<?= $order->price ?></p>
                <p class="list-item"><?= $order->order_date ?></p>
                <p class="list-item"><?= $order->customer_name ?></p>
                <p class="list-item"><?= $order->cust_phone_number ?></p>
                <p class="list-item">Pending</p>
                <p class="list-item delivered">
                    <span> <a href="config/update_order.php?order_id=<?= $order->order_id ?>"> <i class="fas fa-check-circle"></i> </a> </span>
                </p>
            </div>
        <?php } } ?>
        <!--  -->
        <!--  -->
        <!-- <div class="list-container">
            <p class="list-item"><img src="../images/bathroom/Bathroom Rug Mat.jpg" alt="product Image"> Rug Mat GH&#8373; 210.00  </p>
            <p class="list-item">12th August, 2024 12:00pm</p>
            <p class="list-item">Esther</p>
            <p class="list-item">0214569856</p>
            <p class="list-item">Pending</p>
            <p class="list-item delivered">
                <span> <a href="config/update_order.php?order_id=451"> <i class="fas fa-check-circle"></i> </a> </span>
            </p>
        </div> -->
    </div>





















           
        </div>
    </div>

             <script>
                document.querySelector('.pending-orders').classList.add('menu-active');
            </script>


    <?php include 'footer.php' ?>
    <?php include '../includes/footer.php' ?>
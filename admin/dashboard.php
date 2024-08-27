<?php 
    include_once 'header.php';

   

    // Data from all tables
    // services
    $service_data_query = "SELECT * FROM services;";
    $service_data_stmt = $connection->prepare($service_data_query);
    $service_data_stmt->execute();
    $service_data_count = $service_data_stmt->rowCount();



    // operators
    $operators_data_query = "SELECT * FROM accounts WHERE account_type = 2;";
    $operators_data_stmt = $connection->prepare($operators_data_query);
    $operators_data_stmt->execute();
    $operators_data_count = $operators_data_stmt->rowCount();



    // vendors
    $vendors_data_query = "SELECT * FROM vendors;";
    $vendors_data_stmt = $connection->prepare($vendors_data_query);
    $vendors_data_stmt->execute();
    $vendors_data_count = $vendors_data_stmt->rowCount();


    // products
    $products_data_query = "SELECT * FROM vendors;";
    $products_data_stmt = $connection->prepare($products_data_query);
    $products_data_stmt->execute();
    $products_data_count = $products_data_stmt->rowCount();




     // orders
    $orders_data_query = "SELECT * FROM orders;";
    $orders_data_stmt = $connection->prepare($orders_data_query);
    $orders_data_stmt->execute();
    $orders_data_count = $orders_data_stmt->rowCount();



?>

    <div class="page-container">
        <?php include_once 'side_menu.php'; ?>

        <div class="page-content-container">
            <h1 class="page-header-text">DASHBOARD</h1>
            <!--  -->
            <div class="card-container">
                <!--  -->
                <div class="card-item">
                    <h3>OPERATORS</h3>
                    <p><?= $operators_data_count ?></p>
                </div>
                <!--  -->
                <!--  -->
                <div class="card-item">
                    <h3>VENDORS</h3>
                    <p><?= $vendors_data_count ?></p>
                </div>
                <!--  -->
                <!--  -->
                <div class="card-item">
                    <h3>PRODUCTS</h3>
                    <p><?= $products_data_count ?></p>
                </div>
                <!--  -->
                <!--  -->
                <div class="card-item">
                    <h3>SERVICES</h3>
                    <p><?= $service_data_count ?></p>
                </div>
                <!--  -->
                <!--  -->
                <div class="card-item">
                    <h3>ORDERS</h3>
                    <p><?= $orders_data_count ?></p>
                </div>
                <!--  -->
                <!--  -->
                <!-- <div class="card-item">
                    <h3>OPERATORS</h3>
                    <p>20</p>
                </div> -->
                <!--  -->
            </div>
        </div>















    </div>







        <script>
                document.querySelector('.dashboard').classList.add('menu-active');
            </script>
<?php
    include_once 'footer.php';

?>


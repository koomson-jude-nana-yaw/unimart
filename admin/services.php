<?php 
    include_once 'header.php';

    // services
    $service_data_query = "SELECT * FROM services INNER JOIN vendors ON service_owner = vender_id;";
    $service_data_stmt = $connection->prepare($service_data_query);
    $service_data_stmt->execute();
    $service_data = $service_data_stmt->fetchAll();
    $service_data_count = $service_data_stmt->rowCount();
?>

    <div class="page-container">
        <?php include_once 'side_menu.php'; ?>

        <div class="page-content-container">
            <h2>SERVICES</h2>


            <div class="card-container">
              
                <!--  -->
                <?php foreach ($service_data as  $service) { ?>
                    
                    <div class="card-item service-card">
                        <img src="../media/product_pictures/<?= $service->image_URL ?>" alt="image">
                        <h3><?= $service->service_name ?></h3>
                        <p><?= $service->phone_number ?></p>
                    </div>

                <?php }   ?>
                
                <!--  -->
                <!-- <div class="card-item service-card">
                    <img src="../media/product_pictures/afc3d88afbdc1a46dfa0b1f1f279b4d5.jpg" alt="image">
                    <h3>Hair stylist</h3>
                    <p>0245212358 - Amamoma</p>
                </div> -->
                <!--  -->
                <!--  -->
            </div>
        </div>















    </div>







            <script>
                document.querySelector('.services').classList.add('menu-active');
            </script>
<?php
    include_once 'footer.php';

?>


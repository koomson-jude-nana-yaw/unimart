<?php

    require_once '../../includes/functions.php';
    require_once '../../database/connection_instance.php';

    if (isset($_GET['service_id'])) {
        $product_id = $_GET['service_id'];



        $get_image_query = "SELECT `image_URL` FROM services WHERE service_id = :service_id;";
        $get_image_stmt = $connection->prepare($get_image_query);
        $get_image_stmt->execute(['service_id' => $service_id]);
        $service_image = $get_image_stmt->fetch();


        $del_service_query = "DELETE FROM services WHERE service_id = :service_id;";
        $del_service_stmt = $connection->prepare($del_service_query);

        if ($del_service_stmt->execute(['service_id' => $service_id])) {
            $image_path = '../../media/service_pictures/' . $service_image->image_URL;
            unlink( $image_path );
            redirect('../product.php', 'success=Product deleted');
            exit();
        } else{
            redirect('../product.php', 'error=Something went wrong.');
            exit();
        }



    } else {
        redirect('../product.php');
    }
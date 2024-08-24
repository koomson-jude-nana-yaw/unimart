<?php

    require_once '../../includes/functions.php';
    require_once '../../database/connection_instance.php';

    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];



        $get_image_query = "SELECT `image_URL` FROM products WHERE product_id = :product_id;";
        $get_image_stmt = $connection->prepare($get_image_query);
        $get_image_stmt->execute(['product_id' => $product_id]);
        $product_image = $get_image_stmt->fetch();


        $del_product_query = "DELETE FROM products WHERE product_id = :product_id;";
        $del_product_stmt = $connection->prepare($del_product_query);

        if ($del_product_stmt->execute(['product_id' => $product_id])) {
            $image_path = '../../media/product_pictures/' . $product_image->imageURL;
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
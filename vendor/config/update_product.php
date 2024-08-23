<?php

    require_once '../../database/connection_instance.php';
    require_once '../../includes/functions.php';


    if (isset($_POST['submit'])) {
        
        $product_id = $_POST['product_id'];
        $price = validate_text_input(floatval($_POST['price']));


        if (empty($product_id)) {
            redirect('../product.php', 'error=Select a Product');
            exit();
        }

        if (empty($price)) {
            redirect('../product.php', 'error=Enter product price');
            exit();
        }



        $update_product_query = "UPDATE products SET price = :price WHERE product_id = :product_id;";
        $del_product_stmt = $connection->prepare($del_product_query);

        if ($del_product_stmt->execute(['product_id' => $product_id, 'price' => $price])) {
            redirect('../product.php', 'success=Product Updated');
            exit();
        } else{
            redirect('../product.php', 'error=Something went wrong.');
            exit();
        }




    } else {
        redirect('../product.php');
        exit();
    }
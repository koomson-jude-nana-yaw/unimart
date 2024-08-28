<?php 

    include_once '../includes/functions.php';
    include_once '../database/connection_instance.php';

    if (isset($_POST['submit'])) {
       
        $name = validate_text_input($_POST['name']);
        $phone_number = validate_text_input($_POST['telephone']);
        $product_id = validate_text_input($_POST['product_id']);



        if (empty($name)) {
            redirect('../index.php','error=Please Enter your Name');
            exit();
        }


        if (empty($phone_number)) {
            redirect('../index.php','error=Please Enter your Phone Number');
            exit();
        }

        INSERT INTO `orders`(`order_id`, `order_date`, `customer_name`, `cust_phone_number`, `order_status`, `product_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]');



        $order_insert = "INSERT INTO orders ( `customer_name`, `cust_phone_number`,  `product_id`) VALUES (:customer_name, :Phone_number, :product_id);";
        $order_stmt = $connection->prepare($order_insert);

        if ($order_stmt->execute(['customer_name' => $name, 'phone_number' => $phone_number, 'product_id' => $product_id])) {
            redirect('../index.php');
            exit();
        }



    } else {
        redirect('../index.php');
        exit();
    }
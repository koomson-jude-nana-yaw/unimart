<?php 

    require_once '../../database/connection_instance.php';
    require_once '../../includes/functions.php';

    if (isset($_GET['order_id'])) {
        
        $order_status = 'settled';
        $order_id = $_GET['order_id'];



        $update_query = "UPDATE `orders` SET order_status = :order_status WHERE order_id = :order_id;";
        $update_stmt = $connection->prepare($update_query);


         if ($update_stmt->execute(['order_status' => $order_status, 'order_id' => $order_id])) {
            redirect('../pending_orders.php', 'success=Order Settled');
            exit();

        } else{
            redirect('../pending_orders.php','error=Something went wrong. Please try again.');
            exit();
        }













    } else {
        redirect('../pending_orders.php');
        exit();
    }
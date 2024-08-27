<?php

include_once '../../database/connection_instance.php';
include_once '../../includes/functions.php';


if (isset($_GET['vender_id'])) {

    $vender_id = $_GET['vender_id'];
    $status = 'active';

    $select_query = "SELECT * FROM vendors WHERE vender_id = $vender_id;";
    $select_stmt = $connection->prepare($select_query);
    $select_stmt->execute();
    $account_data = $select_stmt->fetch(PDO::FETCH_ASSOC);

    if ($account_data['vendor_status'] == 'suspended') {

        $update_query = "UPDATE vendors SET vendor_status = :vendor_status WHERE vender_id = $vender_id;";
        $update_stmt = $connection->prepare($update_query);

        if ($update_stmt->execute(['vendor_status' => $status])) {
            redirect('../vendors.php','success=Vendor Activated');
            exit();
        }

    }

    redirect('../vendors.php','error=Vendor already active');
    exit();














} else {
    redirect('../vendors.php');
    exit();
}
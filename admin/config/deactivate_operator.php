<?php

include_once '../../database/connection_instance.php';
include_once '../../includes/functions.php';


if (isset($_GET['account_id'])) {

    $account_id = $_GET['account_id'];
    $status = 'suspended';

    $select_query = "SELECT * FROM accounts WHERE account_id = $account_id;";
    $select_stmt = $connection->prepare($select_query);
    $select_stmt->execute();
    $account_data = $select_stmt->fetch(PDO::FETCH_ASSOC);

    if ($account_data['account_status'] == 'active') {

        $update_query = "UPDATE accounts SET account_status = :account_status  WHERE account_id = $account_id;";
        $update_stmt = $connection->prepare($update_query);

        if ($update_stmt->execute(['account_status' => $status])) {
            redirect('../operators.php','success=Account Suspended');
            exit();
        }

    }

    redirect('../operators.php','error=Account Already suspended');
    exit();














} else {
    redirect('../operators.php');
    exit();
}
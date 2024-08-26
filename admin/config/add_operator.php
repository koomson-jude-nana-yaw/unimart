<?php

include_once('../../database/connection_instance.php');
include_once '../../includes/functions.php';


if (isset($_POST['add'])) {

    // filtering inputs
    $email = strtolower(validate_text_input($_POST['email']));
    $phone_number = validate_text_input($_POST['phone_number']);
    $first_name = validate_text_input($_POST['first_name']);
    $last_name = validate_text_input($_POST['last_name']);
    $account_type = validate_text_input(intval($_POST['account_type']));
    $account_status = validate_text_input(($_POST['account_status']));
    $password = '123654789';



    // Validating inputs
    // ----------------------------------------------------

    if (empty($first_name)) {
        redirect("../operators.php", "error=First Name is required");
        exit();
    }

    if (empty($last_name)) {
        redirect("../operators.php", "error=Last Name is required");
        exit();
    }

     if (empty($email)) {
        redirect("../operators.php", "error=Email is required");
        exit();
    }




    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        redirect("../operators.php", "error=Invalid email");
        exit();
    }

    $select_email_query = "SELECT * FROM accounts WHERE email = :email;";
    $stmt_email = $connection->prepare($select_email_query);
    $stmt_email->execute(['email' => $email]);

    if ($stmt_email->rowCount() > 0) {
        redirect("../operators.php", "error=This email is already registered.");
        exit();        
    }


    // ----------------------

    if (empty($phone_number)) {
        redirect("../operators.php", "error=Phone Number is required");
        exit();
    }


    if (empty($account_type)) {
        redirect("../operators.php", "error=Account Type is required");
        exit();
    }


    if (empty($account_status)) {
        redirect("../operators.php", "error=Account Status is required");
        exit();
    }



    // ------------------------------------------------------



    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 

    


    $operator_insert_query = "INSERT INTO `accounts` (`last_name`, `first_name`,`email`,`phone_number`,`pass_word`, `account_type`, `account_status`) VALUES (:last_name, :first_name, :email, :phone_number, :pass_word, :account_type, :account_status);";
    $operator_insert_stmt = $connection->prepare($operator_insert_query);
    

    if (!($operator_insert_stmt->execute(['last_name' => $last_name,'first_name' => $first_name, 'email' => $email, 'pass_word' => $hashed_password, 'phone_number' => $phone_number, 'account_type' => $account_type, 'account_status' => $account_status]))) {
        redirect("../operators.php", "error=Sorry. Please try again");
        exit();
    }

    // Insert successful
    redirect("../operators.php", "success=Successfully Signed Up");

    exit();








} else {
    redirect('../operators.php');
    exit();
}
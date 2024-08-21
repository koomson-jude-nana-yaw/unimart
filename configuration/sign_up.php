<?php

include_once('../database/connection_instance.php');
include_once('../includes/functions.php');


if (isset($_POST['submit'])) {

    // filtering inputs
    $username = strtolower(validate_text_input($_POST['username']));
    $email = strtolower(validate_text_input($_POST['email']));
    $phone_number = validate_text_input($_POST['phone_number']);
    $first_name = validate_text_input($_POST['first_name']);
    $last_name = validate_text_input($_POST['last_name']);
    $location = validate_text_input($_POST['location']);
    $shop_name = validate_text_input($_POST['shop_name']);
    $password = validate_text_input($_POST['password']);
    $confirm_password = validate_text_input($_POST['confirm_password']);
    $terms_of_service = validate_text_input($_POST['terms_of_service']);



    // Validating inputs
    // ----------------------------------------------------

    if (empty($username)) {
        redirect("../includes/signup.php", "error=Username is required");
        exit();
    }

    $select_username_query = "SELECT * FROM vendors WHERE username = :username;";
    $stmt_username = $connection->prepare($select_username_query);
    $stmt_username->execute(['username' => $username]);

    if ($stmt_username->rowCount() > 0) {
        redirect("../includes/signup.php", "error=Username is taken");
        exit();        
    }

    // ------------------------

    if (empty($email)) {
        redirect("../includes/signup.php", "error=Email is required");
        exit();
    }

    if (empty($first_name)) {
        redirect("../includes/signup.php", "error=First Name is required");
        exit();
    }

    if (empty($last_name)) {
        redirect("../includes/signup.php", "error=Last Name is required");
        exit();
    }

    

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        redirect("../includes/signup.php", "error=Invalid email");
        exit();
    }

    $select_email_query = "SELECT * FROM vendors WHERE email = :email;";
    $stmt_email = $connection->prepare($select_email_query);
    $stmt_email->execute(['email' => $email]);

    if ($stmt_email->rowCount() > 0) {
        redirect("../includes/signup.php", "error=This email is already registered.");
        exit();        
    }


    // ----------------------

    if (empty($phone_number)) {
        redirect("../includes/signup.php", "error=phone number is required");
        exit();
    }

    if (empty($shop_name)) {
        redirect("../includes/signup.php", "error=Shop Name is required");
        exit();
    }

    if (empty($location)) {
        redirect("../includes/signup.php", "error=Location is required");
        exit();
    }

    if (empty($password)) {
        redirect("../includes/signup.php", "error=Password is required");
        exit();
    }

    if (strlen($password) < 6) {
        redirect("../includes/signup.php", "error=Password should be more than 6");
        exit();
    }

    if ($password != $confirm_password ) {
        redirect("../includes/signup.php", "error=Password mismatch");
        exit();
    }


    if (empty($terms_of_service)) {
        redirect("../includes/signup.php", "error=Accept terms of service");
        exit();
    }

    // ------------------------------------------------------



    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 


    $vendor_insert_query = "INSERT INTO `vendors` (`username`,`email`,`phone_number`,`pass_word`,`terms_agreed`) VALUES (:username, :email,:phone_number, :pass_word, :terms_agreed);";
    $vendor_insert_stmt = $connection->prepare($vendor_insert_query);
    

    if (!($vendor_insert_stmt->execute(['username' => $username, 'email' => $email, 'pass_word' => $hashed_password, 'phone_number' => $phone_number, 'terms_agreed' => $terms_of_service]))) {
        redirect("../includes/signup.php", "error=Sorry. Please try again");
        exit();
    }

    // Insert successful
    redirect("../includes/signin.php", "success=Successfully Signed Up");

    exit();








} else {
    redirect('../includes/signup.php');
    exit();
}
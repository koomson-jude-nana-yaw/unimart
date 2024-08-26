<?php 

    require_once '../../database/connection_instance.php';
    require_once '../../includes/functions.php';


if (isset($_POST['submit'])) {

    // filtering inputs
    $account_id = strtolower(validate_text_input($_POST['account_id']));
    $email = strtolower(validate_text_input($_POST['email']));
    $phone_number = validate_text_input($_POST['phone_number']);
    $first_name = validate_text_input($_POST['first_name']);
    $last_name = validate_text_input($_POST['last_name']);
    


    // Validating inputs
    // ----------------------------------------------------

    if (empty($first_name)) {
        redirect("../settings.php", "error=First Name is required");
        exit();
    }

    if (empty($last_name)) {
        redirect("../settings.php", "error=Last Name is required");
        exit();
    }


    if (empty($email)) {
        redirect("../settings.php", "error=Email is required");
        exit();
    }

    

    

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        redirect("../settings.php", "error=Invalid email");
        exit();
    }



    // ----------------------

    if (empty($phone_number)) {
        redirect("../settings.php", "error=phone number is required");
        exit();
    }


   

    // ------------------------------------------------------
    $update_query = "UPDATE accounts SET `last_name` = :last_name, `first_name` = :first_name,`email` = :email,`phone_number` = :phone_number WHERE `account_id` = :account_id";
    $update_stmt = $connection->prepare($update_query);



    if ($update_stmt->execute(['last_name' => $last_name,'first_name' => $first_name, 'email' => $email, 'phone_number' => $phone_number, 'account_id' => $account_id])) {
            redirect('../settings.php', 'success=Details updated');
            exit();

        } else{
            redirect('../settings.php','error=Something went wrong. Please try again.');
            exit();
        }
    








} else {
    redirect('../settings.php');
    exit();
}
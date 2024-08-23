<?php 

    require_once '../../database/connection_instance.php';
    require_once '../../includes/functions.php';


if (isset($_POST['submit'])) {

    // filtering inputs
    $vender_id = strtolower(validate_text_input($_POST['vender_id']));
    $username = strtolower(validate_text_input($_POST['username']));
    $email = strtolower(validate_text_input($_POST['email']));
    $phone_number = validate_text_input($_POST['phone_number']);
    $first_name = validate_text_input($_POST['first_name']);
    $last_name = validate_text_input($_POST['last_name']);
    $location = validate_text_input($_POST['location']);
    $shop_name = validate_text_input($_POST['shop_name']);
    


    // Validating inputs
    // ----------------------------------------------------

    if (empty($username)) {
        redirect("../settings.php", "error=Username is required");
        exit();
    }


    if (empty($email)) {
        redirect("../settings.php", "error=Email is required");
        exit();
    }

    if (empty($first_name)) {
        redirect("../settings.php", "error=First Name is required");
        exit();
    }

    if (empty($last_name)) {
        redirect("../settings.php", "error=Last Name is required");
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

    if (empty($shop_name)) {
        redirect("../settings.php", "error=Shop Name is required");
        exit();
    }

    if (empty($location)) {
        redirect("../settings.php", "error=Location is required");
        exit();
    }

   

    // ------------------------------------------------------
    $update_query = "UPDATE vendors SET (`last_name` = :last_name, `first_name` = :first_name,`username` = :username,`email` = :email,`phone_number` = :phone_number, `location` = :loc, `shop_name` = :shop_name) WHERE `vender_id` = :vender_id";
    $update_stmt = $connection->prepare($update_query);



    if ($update_stmt->execute(['last_name' => $last_name,'first_name' => $first_name, 'username' => $username, 'email' => $email, 'phone_number' => $phone_number, 'loc' => $location, 'shop_name' => $shop_name, 'vender_id' => $vender_id])) {
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
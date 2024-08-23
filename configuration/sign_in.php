<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    redirect('../vendor/index.php');
    exit();
    
}


include_once('../database/connection_instance.php');
include_once('../includes/functions.php');





if (isset($_POST['submit'])) {

    // filtering inputs
    $username = strtolower(validate_text_input($_POST['username']));
    $password = validate_text_input($_POST['password']);




    // Validating inputs
    // ----------------------------------------------------

    
    if (empty($username)) {
        redirect('../includes/signin.php','error=Username is empty');
        exit();
    }

    // if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    //     redirect("../includes/signin.php", "error=Invalid email");
    //     exit();
    // }

    $select_email_query = "SELECT * FROM vendors WHERE email = :email OR username = :username;";
    $stmt_email = $connection->prepare($select_email_query);
    $stmt_email->execute(['email' => $username, 'username' => $username]);

    if ($stmt_email->rowCount() < 1) {
        redirect("../includes/signin.php", "error=This account is not registered.");
        exit();        
    }


    if (empty($password)) {
       redirect('../includes/signin.php','error=Please enter your password');
       exit();
    }



            ## Making database fetch
            $vendor_select_query = "SELECT * FROM vendors WHERE `email` = :email OR `username` = :username;";
            
            // Statement 
            $stmt_vendor = $connection->prepare($vendor_select_query);
            $stmt_vendor->execute(['email' => $username, 'username' => $username]);

            if ($stmt_vendor->rowCount() == 0) {
                redirect('../includes/signin.php','error=Wrong username or email');
                exit();
            } 

            $vendor_data = $stmt_vendor->fetch(PDO::FETCH_ASSOC);

            if (!password_verify($password,$vendor_data['pass_word'])) {
                redirect('../includes/signin.php','error=Incorrect password');
                exit();
            }


            session_start();
            $_SESSION['vender_id'] = $vendor_data['vender_id'];
            $_SESSION['image'] = $vendor_data['imageURL'];
            $_SESSION['email'] = $vendor_data['email'];
            $_SESSION['username'] = $vendor_data['username'];
            $_SESSION['first_name'] = $vendor_data['first_name'];
            $_SESSION['last_name'] = $vendor_data['last_name'];
            $_SESSION['phone_number'] = $vendor_data['phone_number'];
            $_SESSION['location'] = $vendor_data['location'];
            $_SESSION['shop_name'] = $vendor_data['shop_name'];


            // 

            redirect('../vendor');
            exit();




} else {
    redirect('../includes/signin.php');
    exit();
}
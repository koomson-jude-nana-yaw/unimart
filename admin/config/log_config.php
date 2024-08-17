<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    redirect('../admin/dashboard.php');
    exit();
    
}


include_once('../../database/connection_instance.php');
include_once('../../includes/functions.php');





if (isset($_POST['submit'])) {

    // filtering inputs
    $username = strtolower(validate_text_input($_POST['username']));
    $password = validate_text_input($_POST['password']);




    // Validating inputs
    // ----------------------------------------------------

    
    if (empty($username)) {
        redirect('../index.php','error=Username is empty');
        exit();
    }


    if (empty($password)) {
       redirect('../index.php','error=Please enter your password');
       exit();
    }



            ## Making database fetch
            $vendor_select_query = "SELECT * FROM vendors WHERE `email` = :email OR `username` = :username;";
            
            // Statement 
            $stmt_vendor = $connection->prepare($vendor_select_query);
            $stmt_vendor->execute(['email' => $username, 'username' => $username]);

            if ($stmt_vendor->rowCount() == 0) {
                redirect('../includes/signin.php','Wrong username or email');
                exit();
            } 

            $vendor_data = $stmt_vendor->fetch(PDO::FETCH_ASSOC);

            if (!password_verify($password,$vendor_data['pass_word'])) {
                redirect('../vendor/signin.php','error=Incorrect password');
                exit();
            }


            session_start();
            $_SESSION['vender_id'] = $vendor_data['vender_id'];
            $_SESSION['image'] = $vendor_data['imageURL'];
            $_SESSION['email'] = $vendor_data['email'];
            $_SESSION['username'] = $vendor_data['username'];
            $_SESSION['account_type'] = $vendor_data['account_type'];


            // 

            redirect('../dashboard.php');
            exit();




} else {
    redirect('../index.php');
    exit();
}
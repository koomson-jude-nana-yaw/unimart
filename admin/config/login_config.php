<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    redirect('../dashboard.php');
    
}


include_once('../../database/connection_instance.php');
include_once('../../includes/functions.php');





if (isset($_POST['submit'])) {

    // filtering inputs
    $email = strtolower(validate_text_input($_POST['email']));
    $password = validate_text_input($_POST['password']);




    // Validating inputs
    // ----------------------------------------------------

    
    if (empty($email)) {
        redirect('../index.php','error=Email is empty');
        exit();
    }


    if (empty($password)) {
       redirect('../index.php','error=Please enter your password');
       exit();
    }



            ## Making database fetch
            $account_select_query = "SELECT * FROM accounts WHERE `email` = :email;";
            
            // Statement 
            $stmt_account = $connection->prepare($account_select_query);
            $stmt_account->execute(['email' => $email]);

            if ($stmt_account->rowCount() == 0) {
                redirect('../index.php','Wrong email or email not Registered');
                exit();
            } 

            $account_data = $stmt_account->fetch(PDO::FETCH_ASSOC);

            if ($account_data['account_status'] !== 'active') {
                redirect('../index.php','error=Account is Suspended');
                exit();
            }

            if (!password_verify($password,$account_data['pass_word'])) {
                redirect('../index.php','error=Incorrect password');
                exit();
            }


            session_start();
            $_SESSION['account_id'] = $account_data['account_id'];
            $_SESSION['account_type'] = $account_data['account_type'];


            // 

            redirect('../dashboard.php');
            exit();




} else {
    redirect('../index.php');
    exit();
}
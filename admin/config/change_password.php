<?php

    require_once '../../includes/functions.php';
    require_once '../../database/connection_instance.php';

    if (isset($_POST['submit'])) {
        
        $account_id = $_POST['account_id'];
        $old_password = validate_text_input($_POST['old_password']);
        $new_password = validate_text_input($_POST['new_password']);
        $confirm_new_password = validate_text_input($_POST['confirm_new_password']);

        if (empty($old_password)) {
            redirect('../settings.php', 'error=Enter Old password.');
            exit();
        }

        if (empty($new_password)) {
            redirect('../settings.php','error=Enter new password.');
            exit();

        }

        if (strlen($new_password) < 6) {
            redirect("../settings.php", "error=Password should be more than 6");
            exit();
        }

        if ($new_password != $confirm_new_password ) {
            redirect("../settings.php", "error=Password mismatch");
            exit();
        }


        ## Making database fetch
            $account_select_query = "SELECT * FROM accounts WHERE `account_id` = :account_id;";
            
            // Statement 
            $stmt_account = $connection->prepare($account_select_query);
            $stmt_account->execute(['vender_id' => $stmt_account]);
            $account_data = $stmt_account->fetch(PDO::FETCH_ASSOC);

            if (!password_verify($new_password,$account_data['pass_word'])) {
                redirect('../settings.php','error=Incorrect old password');
                exit();
            }

            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            
        $account_update_query = "UPDATE `accounts` SET `pass_word` = :pass_word WHERE account_id = :account_id ;";
        $account_update_stmt = $connection->prepare($account_update_query);
    

        if (!($account_update_stmt->execute(['pass_word' => $hashed_password, 'account_id' => $account_id]))) {
        redirect("../settings.php", "error=Sorry. Please try again");
        exit();
        }

    // Updated successful
        redirect("../settings.php", "success=Password changed");









    } else {
        redirect('../settings.php');
        exit();
    }
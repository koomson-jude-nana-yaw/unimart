<?php

    require_once '../../includes/functions.php';
    require_once '../../database/connection_instance.php';

    if (isset($_POST['submit'])) {
        
        $vender_id = $_POST['vender_id'];
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
            $vendor_select_query = "SELECT * FROM vendors WHERE `vender_id` = :vender_id;";
            
            // Statement 
            $stmt_vendor = $connection->prepare($vendor_select_query);
            $stmt_vendor->execute(['vender_id' => $vender_id]);
            $vendor_data = $stmt_vendor->fetch(PDO::FETCH_ASSOC);

            if (!password_verify($new_password,$vendor_data['pass_word'])) {
                redirect('../settings.php','error=Incorrect old password');
                exit();
            }

            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            
        $vendor_update_query = "UPDATE `vendors` SET `pass_word` = :pass_word WHERE vender_id = :vender_id ;";
        $vendor_update_stmt = $connection->prepare($vendor_update_query);
    

        if (!($vendor_update_stmt->execute(['pass_word' => $hashed_password, 'vender_id' => $vender_id]))) {
        redirect("settings.php", "error=Sorry. Please try again");
        exit();
        }

    // Updated successful
        redirect("../settings.php", "success=Password changed");









    } else {
        redirect('../settings.php');
        exit();
    }
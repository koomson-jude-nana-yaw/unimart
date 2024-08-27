<?php
    require_once '../../database/connection_instance.php';
    require_once '../../includes/functions.php';

    if (isset($_POST['upload'])) {
        $account_id = validate_text_input($_POST['account_id']);




        $picture_name = $_FILES['avatar']['name'];
        $picture_temp_name = $_FILES['avatar']['tmp_name'];
        $picture_size = $_FILES['avatar']['size'];
        $picture_type = $_FILES['avatar']['type'];



        // 
       
        $allowed_ext = ['jpg', 'jpeg', 'png'];
        $get_file_ext = explode('.', $picture_name);
        $picture_ext = strtolower(end($get_file_ext));

 
    if (!(in_array($picture_ext,$allowed_ext))) {
        redirect('../settings.php', 'error=Picture type not allowed');
        exit();
    }

    if (($_FILES['avatar']['error'] > 0)) {
        redirect('../settings.php', 'error=There was an error. please try again.');
        exit();
    }

    if (($picture_size > 3000000)) {
        redirect('../settings.php','error=Picture size too large');
        exit();
    }

     // random number generation
    $pic_numbers = number_generator();
    $pic_name = $pic_numbers[0];



    $new_picture_name = $pic_name . "." . $picture_ext;
    $picture_folder = '../../media/profile_images/' . $new_picture_name;
    // 

    if (move_uploaded_file($picture_temp_name,$picture_folder)) {
        $avatar_update_query = "UPDATE accounts SET imageURL = :avatar WHERE account_id = :account_id;";
        $avatar_update_stmt = $connection->prepare($avatar_update_query);
    

        if (!($avatar_update_stmt->execute(['account_id' => $account_id, 'avatar' => $new_picture_name]))) {
        redirect('../settings.php','error=Something went wrong. Please try again.');
        exit();
        }

        redirect('../settings.php','success=Avatar Upload successfully.');
        exit();




    } else {
        redirect('../settings.php','error=Could not upload image.');
        exit();
    }
    

    







    } else {
        redirect('../settings.php');
        exit();
    }
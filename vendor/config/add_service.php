<a href=""></a>
<?php

    require_once '../../includes/functions.php';
    require_once '../../database/connection_instance.php';

    if (isset($_POST['submit'])) {

        $service_owner = validate_text_input(intval($_POST['service_owner']));
        $service_name = validate_text_input(strtolower($_POST['service_name']));
        $service_type = validate_text_input(strtolower($_POST['service_type']));


        
        $picture_name = $_FILES['service_image']['name'];
        $picture_temp_name = $_FILES['service_image']['tmp_name'];
        $picture_size = $_FILES['service_image']['size'];
        $picture_type = $_FILES['service_image']['type'];

        if (empty($service_name)) {
            redirect('../product.php','error=Product Name is required');
            exit();
        }

        if (empty($service_type)) {
            redirect('../product.php','error=Description is required');
            exit();
        }



        // ------------------
        $allowed_ext = ['jpg', 'jpeg', 'png'];
        $get_file_ext = explode('.', $picture_name);
        $picture_ext = strtolower(end($get_file_ext));

 
    if (!(in_array($picture_ext,$allowed_ext))) {
        redirect('../product.php','error=Picture type not allowed');
        exit();
    }

    if (($_FILES['service_image']['error'] > 0)) {
        redirect('../product.php', 'error=There was an error. please try again.');
        exit();
    }

    if (($picture_size > 3000000)) {
        redirect('../product.php','error=Picture size is too large');
        exit();
    }


   

    // random number generation
    $pic_numbers = number_generator();
    $service_id = $pic_numbers[0];



    $new_picture_name = $service_id . "." . $picture_ext;
    $picture_folder = '../../media/service_pictures/' . $new_picture_name;
    move_uploaded_file($picture_temp_name,$picture_folder);


    // 
 


    $service_insert_query = "INSERT INTO services (`service_name`, `service_owner`, `service_type`, `image_URL`) VALUES (:servic_name, :service_owner, :service_type,:imageURL);";
    $service_insert_stmt = $connection->prepare($service_insert_query);
    

    if (!($service_insert_stmt->execute(['servic_name' => $service_name, 'service_owner' => $service_owner, 'service_type' => $service_type, 'imageURL' => $new_picture_name]))) {
        redirect('../product.php','error=Something went wrong. Please try again.');
        exit();
    }


        redirect('../product.php','success=Service added successfully.');
        exit();







        
    } else {
        redirect('../product.php');
    } 
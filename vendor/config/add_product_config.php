<a href=""></a>
<?php

    require_once '../../includes/functions.php';
    require_once '../../database/connection_instance.php';

    if (isset($_POST['submit'])) {

        $product_owner = validate_text_input($_POST['product_owner']);
        $product_name = validate_text_input(strtolower($_POST['product_name']));
        $description = validate_text_input(strtolower($_POST['description']));
        $price = validate_text_input(floatval($_POST['price']));
        $category_id = validate_text_input($_POST['category_id']);

        
        $picture_name = $_FILES['product_image']['name'];
        $picture_temp_name = $_FILES['product_image']['tmp_name'];
        $picture_size = $_FILES['product_image']['size'];
        $picture_type = $_FILES['product_image']['type'];

        if (empty($product_name)) {
            redirect('../product.php','error=Product Name is required');
            exit();
        }

        if (empty($description)) {
            redirect('../product.php','error=Description is required');
            exit();
        }

        if (empty($price)) {
            redirect('../product.php', 'error=Price is required');
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

    if (($_FILES['product_image']['error'] > 0)) {
        redirect('../product.php', 'error=There was an error. please try again.');
        exit();
    }

    if (($picture_size > 3000000)) {
        redirect('../product.php','error=Picture size is too large');
        exit();
    }


    $product_id_query = "SELECT product_id FROM products ORDER BY product_id DESC LIMIT 1;";
    $product_id_stmt = $connection->prepare($product_id_query);
    $product_id_stmt->execute();
    $product_id = $product_id_stmt->fetch();
    $product_id = $product_id == null? $product_id = 1 : intval($product_id->product_id) + 1;



    $new_picture_name = $product_id . "." . $picture_ext;
    $picture_folder = '../../media/product_pictures/' . $new_picture_name;
    move_uploaded_file($picture_temp_name,$picture_folder);


    // 
 


    $product_insert_query = "INSERT INTO products (`product_name`, `product_owner`, `description`, `price`, `category_id`, `image_URL`) VALUES (:product_name, :product_owner, :descriptions, :price, :category, :imageURL);";
    $product_insert_stmt = $connection->prepare($product_insert_query);
    

    if (!($product_insert_stmt->execute(['product_name' => $product_name, 'product_owner' => $product_owner, 'descriptions' => $description, 'price' => $price, 'category' => $category_id, 'imageURL' => $new_picture_name]))) {
        redirect('../product.php','error=Something went wrong. Please try again.');
        exit();
    }

    


        redirect('../product.php','success=Product added successfully.');
        exit();







        
    } else {
        redirect('../product.php');
    } 
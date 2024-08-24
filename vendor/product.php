<?php 
    include './header.php';

    // product with category

    $product_and_category_query = "SELECT * FROM vendors INNER JOIN products ON product_owner = vender_id  INNER JOIN categories ON products.category_id = categories.category_id WHERE product_owner = $vender_id;";
    $product_and_category_stmt = $connection->prepare($product_and_category_query);
    $product_and_category_stmt->execute();
    $product_and_cat = $product_and_category_stmt->fetchAll();


    // Categories
    $category_query = "SELECT * FROM categories;";
    $category_stmt = $connection->prepare($category_query);
    $category_stmt->execute();
    $categories = $category_stmt->fetchAll();



?>

<div class="page-container">
        <?php
            include_once 'side_menu.php';
        ?>
        <!--  -->
        <div class="page-item-wrapper">

    <div class="product-page-header">
        <h1 class="add-product-text">Products</h1> <a href="#add-product" class="add-product-btn"> <i class="fas fa-plus"></i> Product </a>
    </div>

    <div class="product-search-container">
        <form action="" method="post">

        </form>
    </div>


    <div class="product-list-container">
        <div class="list-header-container">
            <p class="list-header-item">Product</p>
            <p class="list-header-item">Category</p>
            <p class="list-header-item">Service</p>
            <p class="list-header-item">Location</p>
            <p class="list-header-item">Price</p>
            <p class="list-header-item">Edit</p>
        </div>
        <!--  -->
        <?php 
        if ($vender_products_count == 0) {
            echo '<p>No product in shop</p>';
        } else{
        foreach($product_and_cat as $product){ ?>
            <div class="list-container">
                <p class="list-item"><img src="../media/product_pictures/<?= $product->image_URL ?>" alt="product Image"> <?= $product->product_name ?> </p>
                <p class="list-item"><?= $product->category_name ?></p>
                <p class="list-item">Delivery & Store</p>
                <p class="list-item"><?= $product->location ?></p>
                <p class="list-item">GH&#8373; <?= $product->price ?></p>
                <p class="list-item edit">
                    <span> <a href="#update-product"> <i class="fas fa-pen"></i> </a> </span>
                    <span><a href="config/delete_product.php?product_id=<?= $product->product_id ?>" ><i class="fas fa-trash"></i></a> </span>
                </p>
            </div>
        <?php } } ?>
        <!--  -->
        
        <!--  -->
        
        <!--  -->
        <!--  -->
        <!-- <div class="list-container">
            <p class="list-item"><img src="../images/bathroom/Bathroom Rug Mat.jpg" alt="product Image"> Rug Mat </p>
            <p class="list-item">Bathroom</p>
            <p class="list-item">Delivery & Store</p>
            <p class="list-item">Amamoma, Chief Palace</p>
            <p class="list-item">GHGH&#8373; 210.00</p>
            <p class="list-item edit">
                <span> <a href="#update-product"> <i class="fas fa-pen"></i> </a> </span>
                <span><a href="config/delete_product.php?product_id=412" ><i class="fas fa-trash"></i></a> </span>
            </p>
        </div> -->
    </div>

    <form enctype="multipart/form-data" action="config/add_product_config.php" method="post" id="add-product" class="add-product-form-container">
        <div class="form-text">
            <h2>NEW PRODUCT</h2> 
        </div>
        <!--  -->
        <!--  -->
        <div class="">
            <input type="hidden" name="product_owner" value="<?= $vender_id ?>" >
        </div>
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="product_name" placeholder="Product Name" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="description" placeholder="Description" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="price" placeholder="Price (Ex: 100.00)" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="file" name="product_image" placeholder="Product Image"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="select-item">
            <select name="category_id">
                <option value="">Select Category</option>
                <?php 
                    foreach($categories as $category) { ?> 

                        <option value="<?= $category->category_id ?>"><?= $category->category_name ?></option>

                <?php } ?>
            </select>
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="submit-item">
            <input type="submit" value="Add Product" name="submit" >
        </div>
    </form>





    <!--  -->
    <!--  -->
    <form action="config/update_product.php" method="post" id="update-product" class="update-product-form-container">
        <div class="form-text">
            <h2>EDIT PRODUCT</h2>
        </div>
        
         <!--  -->
        <!--  -->
        <div class="select-item">
            <select name="product_id">
                <option value="">Select Product</option>
                 <?php 
                    if ($vender_products_count == 0) {
                        echo '<option value="">No product</option>';
                    }
                    foreach($product_and_cat as $product) { ?> 

                        <option value="<?= $product->product_id ?>"><?= $product->product_name ?></option>

                <?php } ?>
            </select>
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        
       
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="price" placeholder="Price (Ex: 100.00)" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
       
        <!--  -->
        <!--  -->
        <div class="update-item">
            <input type="submit" value="Update Product" name="submit" >
        </div>
    </form>

            

        </div>
</div>

<script>
                document.querySelector('.new-product').classList.add('menu-active');
            </script>

    <?php 
    include 'footer.php';
     include '../includes/footer.php';
      ?>






























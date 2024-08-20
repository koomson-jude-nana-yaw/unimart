<?php 
    include './header.php';
?>

    <h1 class="add-product-text">
        Add Product
    </h1>

    <form action="./config/add_prodcuct.php" method="post" class="add-product-form-container">
        <div class="form-text">
            <h2>NEW PRODUCT</h2>
        </div>
        <!--  -->
        <!--  -->
        <div class="">
            <input type="hidden" name="product_owner" value="444" >
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
            <input type="text" name="description" placeholder="Price (Ex: 100)" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        <div class="select-item">
            <select name="category_id">
                <option value="">Select Category</option>
                <option value="">Phones</option>
                <option value="">Computing</option>
                <option value="">Others</option>
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
    <form action="./config/update_prodcuct.php" method="post" class="update-product-form-container">
        <div class="form-text">
            <h2>EDIT PRODUCT</h2>
        </div>
        
         <!--  -->
        <!--  -->
        <div class="select-item">
            <select name="product_id">
                <option value="">Select Product</option>
                <option value="45">Phone</option>
                <option value="12">Hp</option>
                <option value="74">Others</option>
            </select>
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
        <!--  -->
        <!--  -->
        
       
        <!--  -->
        <!--  -->
        <div class="input-item">
            <input type="text" name="price" placeholder="Price (Ex: 100)" autocomplete="off"  >
            <!-- <span> <i class="fas fa-product"></i></span> -->
        </div>
       
        <!--  -->
        <!--  -->
        <div class="update-item">
            <input type="submit" value="Update Product" name="submit" >
        </div>
    </form>





























<?php include 'footer.php' ?>
<?php include '../includes/footer.php' ?>
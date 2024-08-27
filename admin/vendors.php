<?php 
    include_once 'header.php';

    $vendors_data = $vendors_data_stmt->fetchAll();
?>

    <div class="page-container">
        <?php include_once 'side_menu.php'; ?>

        <div class="page-content-container">
                <!--  -->
                <h1 class="page-header-text">VENDORS</h1>
                <a href="#add-vendor" class="add-vendor" > ADD VENDOR</a>
                <!--  -->


                
                <div class="list-header-container">
                    <p class="list-header-item">Image</p>
                    <p class="list-header-item">Name</p>
                    <p class="list-header-item">Email</p>
                    <p class="list-header-item">Phone</p>
                    <p class="list-header-item">Location</p>
                    <p class="list-header-item">Status</p>
                    <p class="list-header-item ">Action</p>
                </div>
                <!--  -->
                <!-- <div class="list-container">
                    <p class="list-item">
                        <img src="../images/bathroom/Bathroom Rug Mat.jpg" alt="product Image"> 
                    </p>
                    <p class="list-item">Kweku Mensah</p>
                    <p class="list-item">edu@gmail.com</p>
                    <p class="list-item">0214569856</p>
                    <p class="list-item">Active</p>
                    <p class="list-item">
                        <span> <a href="config/deactivate_operator.php?account_id=451" class="action-btn" > <i class="fas fa-close"></i> </a></span>
                        <span> <a href="#edit-operator" class="action-btn" > <i class="fas fa-edit"></i> </a></span>
                    </p>
                </div> -->
                <!--  -->
                    <?php 
                    
                    if ($vendors_data_count == 0) {
                        echo '<p> No Vendors Available </p>';
                    }

                      foreach ($vendors_data as $vendor) { ?>


                    <div class="list-container">
                        <p class="list-item">
                            <img src="../media/profile_images/<?= $vendor->imageURL == NULL ? 'bbb.png' : $vendor->imageURL ?>" alt="Image"> 
                        </p>
                        <p class="list-item"><?= ucwords($vendor->first_name . ' ' . $vendor->last_name) ?></p>
                        <p class="list-item"><?= $vendor->email ?></p>
                        <p class="list-item"><?= $vendor->phone_number ?> </p>
                        <p class="list-item"><?= $vendor->location ?></p>
                        <p class="list-item"><?= $vendor->vendor_status ?></p>
                        <p class="list-item ">
                            <span> <a href="config/deactivate_vendor.php?vender_id=<?= $vendor->vender_id ?>" class="action-btn" > <i class="fas fa-close"></i> </a></span>
                            <span> <a href="config/activate_vendor.php?vender_id=<?= $vendor->vender_id ?>" class="action-btn" > <i class="fas fa-check"></i> </a></span>
                            <span> <a href="#edit-vendor" class="action-btn" > <i class="fas fa-edit"></i> </a></span>
                        </p>
                    </div>

                <?php  } ?>
                <!--  -->
                



                <!--  -->
                <form action="" method="post" class="operator-form" id="add-vendor" >
                    <div class="form-header">
                        <p>ADD VENDER</p>
                    </div>
                    <!--  -->
                    <input type="hidden" name="terms_of_service" value="yes">
                    <!--  -->
                    <div class="form-item">
                        <p>First Name</p>
                        <input type="text" name="first_name" autocomplete="off"  id="">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="form-item">
                        <p>Last Name</p>
                        <input type="text" name="last_name" autocomplete="off"  id="">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="form-item">
                        <p>Username</p>
                        <input type="text" name="username" autocomplete="off"  id="">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="form-item">
                        <p>Email</p>
                        <input type="text" name="email" autocomplete="off"  id="">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="form-item">
                        <p>Phone Number</p>
                        <input type="text" name="phone_number" autocomplete="off"  id="">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="form-item">
                        <p>Location</p>
                        <input type="text" name="location" autocomplete="off"  id="">
                    </div>
                    <!--  -->
                    <div class="form-item">
                        <p>Shop Name</p>
                        <input type="text" name="shop_name" autocomplete="off"  id="">
                    </div>
                    <!--  -->
                    <div class="form-item">
                        <p>Image</p>
                        <input type="file" name="image" id="">
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="form-submit">
                        <input type="submit" value="Add" name="add" >
                    </div>
                </form>












            </div>



    </div>







            <script>
                document.querySelector('.vendors').classList.add('menu-active');
            </script>
<?php
    include_once 'footer.php';

?>


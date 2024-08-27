<?php 
    include_once 'header.php';




     // operators
    $operators_data_query = "SELECT * FROM accounts WHERE account_type = 2;";
    $operators_data_stmt = $connection->prepare($operators_data_query);
    $operators_data_stmt->execute();
    $operators_data = $operators_data_stmt->fetchAll();
    $operators_data_count = $operators_data_stmt->rowCount();
?>

    <div class="page-container">
        <?php include_once 'side_menu.php'; ?>

        <div class="page-content-container">
                <!--  -->
                <h1 class="page-header-text">OPERATORS</h1>

                <a href="#add-operator" class="add-operator">ADD OPERATOR</a>
                <!--  -->



                <div class="list-header-container">
                    <p class="list-header-item">Image</p>
                    <p class="list-header-item">Name</p>
                    <p class="list-header-item">Email</p>
                    <p class="list-header-item">Phone Number</p>
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
                    <p class="list-item ">
                        <span> <a href="config/deactivate_operator.php?account_id=451" class="action-btn" > <i class="fas fa-close"></i> </a></span>
                        <span> <a href="config/deactivate_operator.php?account_id=451" class="action-btn" > <i class="fas fa-check"></i> </a></span>
                        <span> <a href="#edit-operator" class="action-btn" > <i class="fas fa-edit"></i> </a></span>
                    </p>
                </div> -->
                <!--  -->
                <?php 
                    
                    if ($operators_data_count == 0) {
                        echo '<p> No Operators Available </p>';
                    }

                      foreach ($operators_data as $operator) { ?>


                    <div class="list-container">
                        <p class="list-item">
                            <img src="../media/profile_images/<?= $operator->imageURL == NULL ? 'bbb.png' : $operator->imageURL ?>" alt="Image"> 
                        </p>
                        <p class="list-item"><?= ucwords($operator->first_name . ' ' . $operator->last_name) ?></p>
                        <p class="list-item"><?= $operator->email ?></p>
                        <p class="list-item"><?= $operator->phone_number ?> </p>
                        <p class="list-item"><?= $operator->email ?></p>
                        <p class="list-item ">
                            <span> <a href="config/deactivate_operator.php?account_id=<?= $operator->account_id ?>" class="action-btn" > <i class="fas fa-close"></i> </a></span>
                            <span> <a href="config/activate_operator.php?account_id=<?= $operator->account_id ?>" class="action-btn" > <i class="fas fa-check"></i> </a></span>
                            <span> <a href="#edit-operator" class="action-btn" > <i class="fas fa-edit"></i> </a></span>
                        </p>
                    </div>

                <?php  } ?>


                <!--  -->


                <!--  -->
                <form action="config/add_operator.php" method="post" class="operator-form" id="add-operator" >
                    <div class="form-header">
                        <p>ADD OPERATOR</p>
                    </div>
                    <!--  -->
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
                        <p>Account Type</p>
                        <select name="account_type" id="">
                            <option value="">Select Type</option>
                            <option value="1">Admin</option>
                            <option value="2">Operator</option>
                        </select>
                    </div>
                    <!--  -->
                    <div class="form-item">
                        <p>Account Status</p>
                        <select name="account_status" id="">
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="suspend">Suspend</option>
                        </select>
                    </div>
                    <!--  -->
                    <!-- <div class="form-item">
                        <p>Image</p>
                        <input type="file" name="image" id="">
                    </div> -->
                    <!--  -->
                    <!--  -->
                    <div class="form-submit">
                        <input type="submit" value="Add" name="add" >
                    </div>
                </form>












            </div>
        </div>















    </div>







             <script>
                document.querySelector('.operators').classList.add('menu-active');
            </script>
<?php
    include_once 'footer.php';

?>


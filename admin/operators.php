<?php 
    include_once 'header.php'
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
                <div class="list-container">
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
                </div>
                <!--  -->
                <!--  -->
                <div class="list-container">
                    <p class="list-item">
                        <img src="../images/bathroom/Bathroom Rug Mat.jpg" alt="product Image"> 
                    </p>
                    <p class="list-item">Kwame Anagbey</p>
                    <p class="list-item">kwame@gmail.com</p>
                    <p class="list-item">0214569856</p>
                    <p class="list-item">Suspended</p>
                    <p class="list-item">
                        <span> <a href="config/deactivate_operator.php?account_id=451" class="action-btn" > <i class="fas fa-close"></i> </a></span>
                        <span> <a href="#edit-operator" class="action-btn" > <i class="fas fa-edit"></i> </a></span>
                    </p>
                </div>


                <!--  -->
                <form action="" method="post" class="operator-form" id="add-operator" >
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















    </div>







             <script>
                document.querySelector('.operators').classList.add('menu-active');
            </script>
<?php
    include_once 'footer.php';

?>


<?php 
    include_once 'header.php'
?>

    <div class="page-container">
        <?php include_once 'side_menu.php'; ?>

        <div class="page-content-container">
                <!--  -->
                <h1 class="page-header-text">VENDORS</h1>
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
                    <p class="list-item">
                        <span> <a href="config/deactivate_operator.php?account_id=451" class="action-btn" > <i class="fas fa-close"></i> </a></span>
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
                    <p class="list-item action-btn">
                        <span> <a href="config/deactivate_operator.php?account_id=451" class="action-btn" > <i class="fas fa-close"></i> </a></span>
                        <span> <a href="#edit-operator" class="action-btn" > <i class="fas fa-edit"></i> </a></span>
                    </p>
                </div>












            </div>



    </div>







            <script>
                document.querySelector('.vendors').classList.add('menu-active');
            </script>
<?php
    include_once 'footer.php';

?>


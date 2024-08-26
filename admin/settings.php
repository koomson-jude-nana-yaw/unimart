<?php 
    include_once 'header.php';
?>

    <div class="page-container">
        <?php include_once 'side_menu.php'; ?>

        <div class="settings-page-container">

        <div class="settings-page-header">
            <h1 class="settings-text">Settings</h1> 
        </div>

        <div class="avatar-container">

            <h2 class="avatar-text">Avatar</h2>

            <form enctype="multipart/form-data" action="config/change_avatar.php" method="post" class="change-avatar-form">
                <div class="change-form-item">
                    <img src="../media/profile_images/<?php if (!empty($accounts['imageURL'])) {
                        echo $accounts['imageURL'];
                    } else{ echo 'bbb.png'; } ?>" alt="profile picture">
                </div>
                <!--  -->
                <input type="hidden" name="account_id" value="<?= $account_id ?>">
                <div class="form-input-item ">
                    <input type="file" name="avatar" >
                </div>
                <!--  -->
                <div class="form-submit-item">
                    <input type="submit" value="Upload" name="upload">
                </div>
            </form>

        </div>
        <!--  -->
        <!--  -->
        <div class="profile-container">
            <h2 class="profile-text">
                Profile
            </h2>
            <!--  -->
            <form action="config/update_account.php" method="post" class="profile-form-container">
                <!--  -->
                    <input type="hidden" name="account_id" value="<?= $account_id ?>">
                <div class="profile-form-item">
                    <p>First Name</p>
                    <input type="text" name="first_name" value="<?= ucfirst($accounts['first_name'])?>" autocomplete="off">
                </div>
                <!--  -->
                <!--  -->
                <div class="profile-form-item">
                    <p>Last Name</p>
                    <input type="text" name="last_name" value="<?= ucfirst($accounts['last_name'])?>" autocomplete="off">
                </div>
                <!--  -->
                <!--  -->
                <!-- <div class="profile-form-item">
                    <p>Shop Name</p>
                    <input type="text" name="shop_name" value="<?= ucfirst($accounts['shop_name'])?>" autocomplete="off">
                </div> -->
                <!--  -->
                <!--  -->
                <!-- <div class="profile-form-item">
                    <p>Username</p>
                    <input type="text" name="username" value="<?= ucfirst($accounts['username']) ?>" autocomplete="off">
                </div> -->
                <!--  -->
                <!--  -->
                <div class="profile-form-item">
                    <p>Email</p>
                    <input type="text" name="email" value="<?= $accounts['email'] ?>" autocomplete="off">
                </div>
                <!--  -->
                <!--  -->
                <div class="profile-form-item">
                    <p>Phone Number</p>
                    <input type="text" name="phone_number" value="<?= $accounts['phone_number'] ?>" autocomplete="off">
                </div>
                <!--  -->
                <!--  -->
                <!-- <div class="profile-form-item">
                    <p>Location</p>
                    <input type="text" name="location" value="<?= ucfirst($accounts['location']) ?>" autocomplete="off">
                </div> -->
                <!--  -->
                <!--  -->
                <div class="profile-submit-item">
                    <input type="submit" name="submit" value="Update Details" >
                </div>
                <!--  -->
            </form>
        </div>
        <!--  -->
        <!--  -->
        <div class="change-password-container">
            <h2 class="password-text">
                Change Password
            </h2>
            <form action="config/change_password.php" method="post" class="change-password-form">
                <!--  -->
                    <input type="hidden" name="account_id" value="<?= $account_id ?>" >
                <div class="password-form-item">
                    <p>Old Password</p>
                    <input type="password" name="old_password" placeholder="Old Password">
                </div>
                <!--  -->
                <!--  -->
                <!--  -->
                <div class="password-form-item">
                    <p>New Password</p>
                    <input type="password" name="new_password" placeholder="New Password">
                </div>
                <!--  -->
                <!--  -->
                <!--  -->
                <div class="password-form-item">
                    <p>Confirm New Password</p>
                    <input type="password" name="confirm_new_password" placeholder="Confirm New Password">
                </div>
                <!--  -->
                <!--  -->
                <!--  -->
                <div class="password-submit-item">
                    <input type="submit" name="submit" value="Change Password" >
                </div>
                <!--  -->
            </form>

        </div>

          
    </div>





  
  
  
  
  
  
  
    </div>


            <script>
                document.querySelector('.settings').classList.add('menu-active');
            </script>
<?php
    include_once 'footer.php';

?>


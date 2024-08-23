<?php 
    include './header.php';
?>
<div class="page-container">
        <?php
            include_once 'side_menu.php';
        ?>
        <!--  -->
        <div class="page-item-wrapper">

        <div class="help-center-container">
        <div class="help-wrapper">
        <h1 class=header-text">We would love to hear from You</h1>
        <p class="help-text" >Please submit your message and our representatives will get in touch with You</p>
        <p class="call-number"> <i class="fas fa-phone"></i> Call +233 25 545 4587 </p>
        <!--  -->
        <!--  -->
        <form action="" method="post" class="contact-form-container">
        
            <!--  -->
            <!--  -->
            <div class="input-item">
                <input type="text" name="name" placeholder="Your Name" autocomplete="off"  >
                <!-- <span> <i class="fas fa-product"></i></span> -->
            </div>
            <!--  -->
            <!--  -->
            <div class="input-item">
                <input type="text" name="email" placeholder="Your Email" autocomplete="off"  >
                <!-- <span> <i class="fas fa-product"></i></span> -->
            </div>
            <!--  -->
            <!--  -->
            <div class="input-item">
                <input type="text" name="phone_number" placeholder="Phone Number" autocomplete="off"  >
                <!-- <span> <i class="fas fa-product"></i></span> -->
            </div>
            <!--  -->
            <!--  -->
            <div class="input-item">
                <textarea name="message" id=""></textarea>
            </div>
            <!--  -->
            <!--  -->
            <div class="submit-item">
                <input type="submit" value="Send Message" name="submit" >
            </div>
        </form>

    </div>
    <!--  -->
    <!--  -->
    <div class="help-wrapper">
      <h3>Help</h3>
      <p>Need help? Don't hesitate to ask us anything. Email us directly info@uniart.com or call us on +233 25 545 4587. You can checkout on our help page to get more information.</p>
    </div>
  </div>




















            <script>
                document.querySelector('.help').classList.add('menu-active');
            </script>


    <?php include 'footer.php' ?>
    <?php include '../includes/footer.php' ?>
        </div>
</div>
<link rel="stylesheet" href="../css/order_form.css?v=<?= time();?>">

<div class="form-container">
    <form action="make_order.php" method="post" id = 'form'>
        <h2>Sign Up</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="name" placeholder="Enter your full name" required>

        <label for="telephone">Telephone Number</label>
        <input type="text" id="telephone" name="telephone" placeholder="Enter your phone number" required>

        <button type="submit">Submit</button>
    </form>
</div>

<script src="../js/products.js?v=<?= time();?>"></script>
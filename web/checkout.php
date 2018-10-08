<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="shoppingcart.css">
</head>
<body>
    <h1>Book Store</h1>

    <div class="topnav">
        <a href="browse.php">Home</a>
        <a href="cart.php">View Cart</a>
        <a class="active" class="active" href="checkout.php">Checkout</a>
    </div>
    
    <h1>Please Fill in your information</h1>
    <form action="confirmation" method="post">
        First name:<br>
        <input type="text" name="first"><br>
        Last name:<br>
        <input type="text" name="last"><br><br>
        Address:<br>
        <span>Street<input type="text" name="street"></span>
        <span>City<input type="text" name="city"></span>
        <span>State<input type="text" name="state"></span>
        
        <button type="submit">Checkout</button>
    </form>
    
<?php
session_start();
?>
</body>
</html>
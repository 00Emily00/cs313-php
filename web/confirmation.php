<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="shoppingcart.css">
</head>
<body>
    <h1>Free Book Store</h1>

    <div class="topnav">
        <a href="#home">Home</a>
        <a href="cart.php">View Cart</a>
        <a href="checkout.php">Checkout</a>
    </div>
<?php
session_start();
    
echo "<h1>Thank You for shopping with us $first</h1>";
?>
    
</body>
</html>
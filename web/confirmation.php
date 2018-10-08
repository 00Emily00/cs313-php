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
    
 <h1>Thank You for shopping with us</h1>;
    
    
<?php
session_start();
      
foreach ($_SESSION["book"] as $item) {  
         echo $item . " ";
}

echo "$_POST['first']";
echo "$_POST['last']";
echo "$_POST['street']";
echo "$_POST['city']";
echo "$_POST['state']";
echo "$_POST['country']";
?>
    
    
</body>
</html>
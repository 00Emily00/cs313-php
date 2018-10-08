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

$first = $_POST['first'];    
$last = $_POST['last'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
    
echo $first;
echo $last;
echo $street;
echo $city;
echo $state;
echo $country;
?>
    
    
</body>
</html>
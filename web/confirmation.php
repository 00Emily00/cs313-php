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
    
 <h1>Thank You for shopping with us</h1>
    
    
<?php
session_start();
      
foreach ($_SESSION["book"] as $item) {  
         echo $item;
         echo "<br>";
}
//htmlspecialchar stops malicious code in input;
$first = htmlspecialchars($_POST['first']);    
$last = htmlspecialchars($_POST['last']);
$street = htmlspecialchars($_POST['street']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$country = htmlspecialchars($_POST['country']);
    
echo $first;
echo " ";
echo $last;
echo "<br>";
echo $street;
echo " ";
echo $city;
echo " ";
echo $state;
echo " ";
echo $zip;
?>
    
    
</body>
</html>
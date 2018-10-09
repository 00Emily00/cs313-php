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
        <a href="browse.php">Home</a>
        <a class="active" href="cart.php">View Cart</a>
        <a href="checkout.php">Checkout</a> 
    </div>
    <h2>Your Order:</h2>
<?php
  session_start();
    //saving the books the user selected to a container called item. item
    foreach ($_POST["book"] as $item) {
    
        //$_SESSION["book"] = $item; //
        $_SESSION["book"][$item] = $item;
    //    echo "session $item";
    }
    
    //if it has a button next to it, store that in something called thing.
    //then when a delete button is clicked next to the book, it will delete that specific book
    if(isset($_POST["delete"])) {
        $thing = $_POST["delete"];
        unset($_SESSION["book"][$thing]);
    }
?>
     <div class="border">
    <form action="cart.php" method="post">
    <!--we are checking to see which books the user selected and displaying it-->
    <?php
    foreach ($_SESSION["book"] as $item) {
        
         echo $item . " ";
        //we added a button to each book displayed
        echo "<button type='submit' name='delete' value='".$item."'>Delete</button><br>";
        echo "<br><br>";
    }
?>
    
    </form>
    <a href="checkout.php"><button>Checkout</button></a>
   
    </div>
</body>
</html>
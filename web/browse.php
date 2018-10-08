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
  <a class="active" href="browse.php">Home</a>
  <a href="cart.php">View Cart</a>
  <a href="checkout.php">Checkout</a>
</div>

    <form action="cart.php" method="post">
	Select the books you would like to add to your cart<br>
    <img src="1984.jpg"><input type="checkbox" name="book[]" value="1984">1984<br>
    <img src="to%20kill%20a%20mockingbird.jpg"><input type="checkbox" name="book[]" value="To Kill a Mockingbird">To Kill a Mockingbird<br>
    <img src="underground%20railroad.jpg"><input type="checkbox" name="book[]" value="The Underground Railroad">The Underground Railroad<br>
    <img src="fahrenheit%20451.jpeg"><input type="checkbox" name="book[]" value="Fahrenheit 451">Fahrenheit 451<br>
    <img src="lovely%20bones.jpg"><input type="checkbox" name="book[]" value="The Lovely Bones">The Lovely Bones<br>
    <img src="joy%20luck%20club.jpg"><input type="checkbox" name="book[]" value="They Joy Luck Club">The Joy Luck Club<br>
    <img src="siddhartha.jpg"><input type="checkbox" name="book[]" value="Siddhartha">Siddhartha<br>
    <img src="little%20prince.jpg"><input type="checkbox" name="book[]" value="The Little Prince">The Little Prince<br>
    <img src="glass%20castle.jpg"><input type="checkbox" name="book[]" value="Glass Castle">Glass Castle<br>
    <img src="hidden%20figures.jpg"><input type="checkbox" name="book[]" value="Hidden Figures">Hidden Figures<br>
    
    <button type="submit">Checkout</button>
    </form>

</body>
</html>
<!--sesion = "Array"
    <!--pull it from the session to the cart
Someone clicks a button and i want to update a session. Button lives in the browser page and session is being stored in the server. all involve sending a request to server. One way to send a request could be a link. Wrap button on the form and have lots of different forms. or have different buttons that have to do with javascript to add it. Or have a bunch of different forms. How about you don't want it to reload the page?-use ajax...how to get time outs long enough for users but short enough so it doesn't stay on forever-->
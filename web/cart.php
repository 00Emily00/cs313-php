<!DOCTYPE html>
<html>
<body>
<?php
  session_start();
    //saving the books the user selected. item -variable
    $_SESSION["book"] = $_POST;
        echo "$_SESSION['book']";
    

    if(isset($_POST["delete"]))
        echo "deleted";
?>
    <form action="cart.php" method="post">
    
    <?php
    foreach ($_POST["book"] as $item) {
        
        echo $item . " ";
        echo "<button type='submit' name='delete'>Delete</button><br>";
    }
?>
    </form>
</body>
</html>
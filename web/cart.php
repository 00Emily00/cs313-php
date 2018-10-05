<!DOCTYPE html>
<html>
<body>
<?php
  session_start();

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
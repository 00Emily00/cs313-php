<!DOCTYPE html>
<html>
<body>
<?php
  session_start();  
?>
    <form action="cart.php" method"post">
    
    <?php
    foreach ($_POST["book"] as $item) {
        echo $item . " ";
        echo "<button type='submit'>Delete</button><br>";
    }
?>
    </form>
</body>
</html>
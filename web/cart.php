<!DOCTYPE html>
<html>
<body>
<?php
  session_start();
    //saving the books the user selected. item -variable
    foreach ($_POST["book"] as $item) {
    $_SESSION["book"][$item] = $item;
        echo "session $item";
    }

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
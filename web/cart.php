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
        echo "$_POST['delete']";
?>
    <form action="cart.php" method="post">
    
    <?php
    foreach ($_SESSION["book"] as $item) {
        
        echo $item . " ";
        echo "<button type='submit' name='delete' value='$item'>Delete</button><br>";
    }
?>
    </form>
</body>
</html>
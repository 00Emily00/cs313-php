<!DOCTYPE html>
<html>
<body>
<?php
    session_start();
    foreach ($_POST["book"] as $item) {
        echo $item . " ";
    }
?>
</body>
</html>
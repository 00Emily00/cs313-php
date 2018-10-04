<?php
////set a cookie and give it a name and value then tell it when it should expire(i want it to expire 7 days from now)
setcookie(("fav-text"), "c is for cookie", time() + (86400 * 7);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
    <p>This is a cookies</p>
    </body>
</html>
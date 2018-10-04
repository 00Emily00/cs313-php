<?php
////set a cookie and give it a name and value then tell it when it should expire(i want it to expire 7 days from now)
//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));

//to display
//$favorite = $_COOKIE["fav-text"];

//you don't need to use cookies directly, you can use sessions that use cookies

//before sending anything out, at the top of your page put
session_start();

if(isset($_SESSION["visit"]))
    $_SESSION["visit"]++;

else{
    $_SESSION["visit"] = 1;   
}
    
$visit = $_SESSION["You have visited"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
    <!--<p>This is a cookies $favorite</p>-->
        <p>$visit</p>
    </body>
</html>
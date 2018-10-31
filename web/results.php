<?php
var_dump( $_POST);
//
//if (isset($_POST['submit'])) {
//if(isset($_POST['radio']))
//{
//echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
//}
//}


foreach($_POST as $key => $value ) { //get keys and values from post and display them
echo $key;
echo $avalue;
}
?>
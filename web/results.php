<?php
require ('dbConnect.php');
$db = get_db();
//var_dump( $_POST);
//
//if (isset($_POST['submit'])) {
//if(isset($_POST['radio']))
//{
//echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
//}
//}

//var_dump($_POST) shows an array with keys and values
//do a foreach
//pull all rows

//call the questionanswer
//get user input
$stmt = $db->prepare("SELECT qId, aId FROM questionanswer");
//id!= :answerId 
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);   

foreach($rows as $row) {
    echo $_POST[''.$row['qid'].''];
}




//foreach($_POST as $key => $value ) { //get keys and values from post and display them
//echo $key;
//echo $value;
//}


//to check if they got the right answer, compare the one user checked and picture with the aid=qid. If the user answer with the question does not exist in the database, then dont add a point.
?>
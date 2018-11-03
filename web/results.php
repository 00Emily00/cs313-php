<?php
require ('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("SELECT qId, aId FROM questionanswer");
//id!= :answerId 
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);   

$points = 0;

foreach($rows as $row) {
 
    if($_POST[$row['qid']] == $row['aid']) {
        $points++;
    }
    
}
echo "<h1>CONGRATULATIONS!!! YOU GOT $points Points!"


?>
<!DOCTYPE html>
<html>
<head>
    <title>Learn Your Animals</title>
    <link rel="stylesheet" href="animalsProject.css">

</head>
<body>
    <form class="formStyle" action="animalsProject.php" method="post">
<!--    <h2>Click below to try again!</h2>-->
  
        
    <input type="submit" class="submit" value="Play again">
    </form>
</body>
</html>


<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Get to know your animals</h1>
<?php
require ('dbConnect.php');
$db = get_db();
$questions = $_GET['question']; 
    
$stmt = $db->prepare('SELECT * FROM questions');
//$stmt->bindValue(':question', $question, PDO::PARAM_INT);
$stmt->execute();
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    
<?php
foreach ($questions as $question)
    $questions = $questions['questions'];
    echo $questions;
//    foreach ($rows as $row)
//  foreach ($db->query('SELECT questions FROM questions WHERE $question=:question'))
//{
//      echo '<p><b>' . ['question'] . ' ';
//}  
//                
?>
    
<!--
<form action="" method="get">
    SEARCH: <input type="text" name="submit">
    <button type="submit">Submit</button>
-->
<!--</form>-->
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Get to know your animals</h1>
<?php
include 'dbConnect.php';
$questions = $_GET['question']; 
    
$stmt = $db->prepare('SELECT * FROM  WHERE question=:question');
$stmt->bindValue(':question', $question, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
//    foreach ($rows as $row)
  foreach ($db->query('SELECT questions FROM questions WHERE $question=:question'))
{
      echo '<p><b>' . ['question'] . ' ';
}  
                
?>
    
<!--
<form action="" method="get">
    SEARCH: <input type="text" name="submit">
    <button type="submit">Submit</button>
-->
<!--</form>-->
    
</body>
</html>
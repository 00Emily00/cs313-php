<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Scripture Resources</h1>
<?php
include 'dbConnect.php';
$questions = $_GET['question']; 
    
$stmt = $db->prepare('SELECT * FROM  WHERE book=:book');
$stmt->bindValue(':book', $book, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $row)
//  foreach ($db->query('SELECT questions FROM questions WHERE $book=:book') as $row)
{
      echo '<p><b>' . $row['question'] . ' ';
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
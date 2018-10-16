<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Scripture Resources</h1>
<?php
include 'environmentvariable.php';
$book = $_GET['book']; 
    
$stmt = $db->prepare('SELECT * FROM scriptures WHERE book=:book');
$stmt->bindValue(':book', $book, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $row)
//  foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE $book=:book') as $row)
{
      echo '<p><b>' . $row['book'] . ' ';
      echo $row['chapter'] . ':';   
      echo $row['verse'] . '</b> - ';
      echo $row['content'] . '</p>';
}  
                
?>
    
<form action="TA05.php" method="get">
    SEARCH: <input type="text" name="book">
    <button type="submit">Search</button>

</form>
</body>
</html>
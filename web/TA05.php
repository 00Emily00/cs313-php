<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Scripture Resources</h1>
<?php
  $book = $_GET['book'];  
?>   
<?php
include 'environmentvariable.php';
    $query = "SELECT * FROM scriptures WHERE book=:book";
  foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE $book=input') as $row)
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
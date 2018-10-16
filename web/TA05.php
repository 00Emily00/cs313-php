<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Scripture Resources</h1>
<?php
  $book ="";  
?>   
<?php
include 'environmentvariable.php';
    
  foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE $book=input') as $row)
{
      echo '<p><b>' . $row['book'] . ' ';
      echo $row['chapter'] . ':';   
      echo $row['verse'] . '</b> - ';
      echo $row['content'] . '</p>';
}  
?>
    
<form action="TA05.php">
    SEARCH: <input type="text" name="input">
    <button type="submit">Search</button>

</form>
</body>
</html>
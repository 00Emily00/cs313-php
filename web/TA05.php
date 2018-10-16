<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Scripture Resources</h1>
    
<?php
include 'environmentvariable.php';
    
  foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
{
      echo '<p><b>' . $row['book'] . ' ';
      echo $row['chapter'] . ':';   
      echo $row['verse'] . '</b> - ';
      echo $row['content'] . '</p>';
}  
?>
</body>
</html>
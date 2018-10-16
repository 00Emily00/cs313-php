<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>Scripture Resources</h1>
    
<?php include 'environmentvariable.php'
  foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
{
      echo 'book:' . $row['book'];
      echo 'chapter: ' . $row['chapter'];   
      echo 'verse:' . $row['verse'];
      echo 'content:' . $row['content'];
      echo '<br/>';
}  
?>
</body>
</html>
<?php>
require('dbConnect.php');
$db = get_db();


$course_id = htmlspecialchars($_GET['id']);

$query = 'SELECT c.code, c.name, n.id AS note_id, n.content FROM note2 n JOIN course2 c ON n.course_id = c.id WHERE c.id = :course_id';

$stmt = $db->prepare($query);
$stmt->bindValue(':course_id', $course_id, PDO::PARAM_INT);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

$course_name = $notes[0]['name'];
$course_code = $notes[0]['code'];
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
    
<body>
<h1>Notes for: <?php echo "$course_code - $course_name"; ?></h1>   
<?php
  foreach($notes as $note) {
      $content = $note['content'];
      
      echo $content;
  }  
?>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</body>
</html>
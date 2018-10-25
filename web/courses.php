<!DOCTYPE html>
<html>

<?php
    
require('dbConnect.php');
$db = get_db();
$query ='SELECT id, code, name FROM course2';
$stmt = $db->prepare($query);
$stmt = execute();
$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    
<head><title>Courses</title></head>

<body>
<h1>Courses</h1>
    
<ul>
<?php
  foreach $courses as $course) {
      $id = $course2['id'];
      $name = $course2['name'];
      $code = $course2['code'];
      
      echo "<li><p>$code - $name</p></li>\n";
  }  
?>
    </ul>
</body>
</html>

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
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    
<?php
foreach ($rows as $row)
    echo $row['questions'] . ' ';
//    foreach ($rows as $row)
//  foreach ($db->query('SELECT questions FROM questions WHERE $question=:question'))
//{
//      echo '<p><b>' . ['question'] . ' ';
//}  
//                
?>
   <img href="https://www.flickr.com/photos/160063694@N06/31623835448/in/dateposted-public/">
<!--
<form action="" method="get">
    SEARCH: <input type="text" name="submit">
    <button type="submit">Submit</button>
-->
<!--</form>-->
    
</body>
</html>
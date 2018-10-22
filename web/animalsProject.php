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
    
//$stmt = $db->prepare('SELECT * FROM questions q INNER JOIN questionanswer qa ON q.questionid = qa.qid');
////$stmt->bindValue(':question', $question, PDO::PARAM_INT);
//$stmt->execute();
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    
<?php
//foreach ($rows as $row)
//{
//    $question_id = $row['id'];
//    
//    echo '<img src="' . $row['questions'] . '"><br>';
    
$stmt = $db->prepare('SELECT * FROM answers a INNER JOIN questionanswer qa ON a.answerid = qa.aid');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($rows as $correct_answer)
    {
        
        echo $row['answers'];
    }
    
    
//    echo $row['aid'];
//} 
    
//    foreach ($rows as $row)
//  foreach ($db->query('SELECT questions FROM questions WHERE $question=:question'))
//{
//      echo '<p><b>' . ['question'] . ' ';
//}  
//                
?>
   
    <!--
<form action="" method="get">
    SEARCH: <input type="text" name="submit">
    <button type="submit">Submit</button>
-->
<!--</form>-->
    
</body>
</html>
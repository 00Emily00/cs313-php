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

$stmt = $db->prepare("SELECT q.questions, a.answers FROM questions q JOIN questionanswer qa ON q.questionId=qa.qid JOIN answers a ON qa.aid=a.answerId");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    
<?php
$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 4");
$stmt->execute();
$rowsAnswers = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?> 
    
<?php
    foreach($rows as $row)
    {
        echo '<img src="' . $row['questions'] . '" >' . ' '; //display image once
        
//        foreach($rowsAnswers as $rowsAnswer) {
        echo '<input type="radio" name="animal" value="' . $row['answers'] . '">' . $row['answers'] . '<br>';
//        foreach($rowsAnswers as $rowsAnswer)
//         echo '<input type="radio" name="animal" value="' . $rowsAnswer['answers'] . '">' . $rowsAnswer['answers'] . '<br>';
////        echo $rowsAnswer['answers'];
    }
//      foreach($rowsAnswers as $rowsAnswer) {
         echo '<input type="radio" name="animal" value="' . $rowsAnswer['answers'] . '">' . $rowsAnswer['answers'] . '<br>';
//        echo $rowsAnswer['answers'];
   // }
    
    
?>

    <!--

//$stmt = $db->prepare("SELECT * FROM questions q INNER JOIN questionanswer qa ON q.questionid = qa.qid WHERE questionid=1");
//////////
//foreach ($rows as $row)
//{
//    $question_id = $row['id'];
//    
//    echo '<img src="' . $row['questions'] . '"><br>';
//    
//
//$stmt = $db->prepare("SELECT answers FROM answers a INNER JOIN questionanswer qa ON a.answerid = qa.aid WHERE answerid=1");
//$stmt->execute();
//$rowsA = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    
//    foreach($rowsA as $correct_answer)
//    {
//        
//        echo $correct_answer['answers'] . '<br>';
//    }
    
//    echo $row['aid'];
//////////////

 //////  
//$stmt = $db->prepare("SELECT q.questions, a.answers FROM questions q JOIN questionanswer qa ON q.questionId=qa.qid JOIN answers a ON qa.aid=a.answerId");
//$stmt->execute();
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
/////
-->
<!--
   
//    foreach ($rows as $row)
//  foreach ($db->query('SELECT questions FROM questions WHERE $question=:question'))
//{
//      echo '<p><b>' . ['question'] . ' ';
//}  
//                
?>
-->

    <!--
<form action="" method="get">
    SEARCH: <input type="text" name="submit">
    <button type="submit">Submit</button>
-->
<!--</form>-->
<!--
    //        echo (rand($row['answers']));
        //pick a random number,
        //$rand = _____ random number
        //$rows[1]['answers']
        //$rows[$rand]['answers']
        
-->
        
</body>
</html>
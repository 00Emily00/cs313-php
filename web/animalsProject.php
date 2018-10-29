<!DOCTYPE html>
<html>
<head>
    <title>Learn your Animals</title>
    <script src="animalsProject.css"></script>
</head>
<body>
    <h1>Get to know your animals</h1>
    
<?php
require ('dbConnect.php');
$db = get_db();
$questions = $_GET['question']; 

$stmt = $db->prepare("SELECT q.questions, a.answers FROM questions q JOIN questionanswer qa ON q.questionId=qa.qid JOIN answers a ON qa.aid=a.answerId"); //order by rand()
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    
<?php
$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 1");
$stmt->execute();
$rowsAnswers = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?> 
    
<?php
$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 1");
$stmt->execute();
$rowsAnswers1 = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?>
    <?php
$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 1");
$stmt->execute();
$rowsAnswers2 = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?>
<?php
$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 1");
$stmt->execute();
$rowsAnswers3 = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?>  
    
<?php
    foreach($rows as $row)
    {
        echo '<img src="' . $row['questions'] . '" >' . ' ' . '<br>'; //display image once
        
        echo '<input type="radio" name="animal" value="' . $row['answers'] . '">' . $row['answers'] . '<br>';
        
      foreach($rowsAnswers as $rowsAnswer) {
         echo '<input type="radio" name="animal" value="' . $rowsAnswer['answers'] . '">' . $rowsAnswer['answers'] . '<br>';

    }foreach($rowsAnswer1 as $rowsAnswer1) {
         echo '<input type="radio" name="animal" value="' . $rowsAnswer1['answers'] . '">' . $rowsAnswer1['answers'] . '<br>';

    }foreach($rowsAnswers2 as $rowsAnswer2) {
         echo '<input type="radio" name="animal" value="' . $rowsAnswer2['answers'] . '">' . $rowsAnswer2['answers'] . '<br>';

    }
        foreach($rowsAnswers3 as $rowsAnswer3) {
         echo '<input type="radio" name="animal" value="' . $rowsAnswer3['answers'] . '">' . $rowsAnswer3['answers'] . '<br>';

    }
        
//        foreach($rowsAnswers as $rowsAnswer)
//         echo '<input type="radio" name="animal" value="' . $rowsAnswer['answers'] . '">' . $rowsAnswer['answers'] . '<br>';
////        echo $rowsAnswer['answers'];
    }
    
    
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
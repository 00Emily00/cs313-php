<!DOCTYPE html>
<html>
<head>
    <title>Learn your Animals</title>
    <link rel="stylesheet" href="animalsProject.css">
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
    
<!--

-->
    

<?php
//$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 1");
//$stmt->execute();
//$rowsAnswers1 = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?>
    <?php
//$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 1");
//$stmt->execute();
//$rowsAnswers2 = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?>
<?php
//$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 1");
//$stmt->execute();
//$rowsAnswers3 = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?>  

    
<?php
    foreach($rows as $row)
    { //possible answers
        echo '<img src="' . $row['questions'] . '" >' . ' ' . '<br>'; //display image once
        
        echo '<input type="radio" name="animal" value="' . $row['answers'] . '">' . $row['answers'] . '<br>';
        
    //select 3 answers as long as it's not a chicken in WHERE id etc :answerid
        //
$stmt = $db->prepare("SELECT answers FROM answers WHERE id!= :answerId ORDER BY RANDOM() LIMIT 3");

$stmt->execute();
$rowsAnswers = $stmt->fetchAll(PDO::FETCH_ASSOC);   
      foreach($rowsAnswers as $rowsAnswer) {
         echo '<input type="radio" name="animal" value="' . shuffle($rowsAnswer['answers']) . '">' . $rowsAnswer['answers'] . '<br>';  
        }
       
    }
    
?>
    
 <form action="#" method="post">
     <input type="submit" name="submit" value="Get Resuls"/>
    
</form>   
<?php

    if(isset($_POST['submit'])) {
        echo $row;
    }
?>

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
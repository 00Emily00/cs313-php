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

<form action="" method="post">
<?php

    $i = 0;
    $animal = "animal"; //made it a string
    foreach($rows as $row)
    { //possib
        $i++;
        echo '<img src="' . $row['questions'] . '" >' . ' ' . '<br>'; //display image once
        if (i % 4 == 0) //
            $animal += '1';
        echo '<input type="radio" name="' . $animal . '" value="' . $row['answers'] . '">' . $row['answers'] . '<br>';
        
    //select 3 answers as long as it's not a chicken in WHERE id etc :answerid
$stmt = $db->prepare("SELECT answers FROM answers ORDER BY RANDOM() LIMIT 3");
//id!= :answerId 
$stmt->execute();
$rowsAnswers = $stmt->fetchAll(PDO::FETCH_ASSOC);   
      foreach($rowsAnswers as $rowsAnswer) {
         echo '<input type="radio" name="' . $animal . '" value="' . $rowsAnswer['answers'] . '">' . $rowsAnswer['answers'] . '<br>';
        }
    }
    
    echo "<input type='submit' name='submit' value='Get Results'/>"
    if (isset($_POST['submit'])) {
  if(isset($_POST['radio'])) {
      echo "You got these correct: " . $_POST['radio'];
  }
}
?>
<!--    <input type="submit" name="submit" value="Get Results"/>-->
</form>

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
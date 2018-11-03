<!DOCTYPE html>
<html>
<head>
    <title>Learn your Animals</title>
    <link rel="stylesheet" href="animalsProject.css">
</head>
<body>


<?php
session_start();
require ('dbConnect.php');
$db = get_db();
$questions = $_GET['question']; 

$stmt = $db->prepare("SELECT q.questions, a.answers, q.questionid, a.answerid FROM questions q JOIN questionanswer qa ON q.questionId=qa.qid JOIN answers a ON qa.aid=a.answerId"); //order by rand()
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Get to know your animals</h1>
<h2> Welcome Back <?php echo $_SESSION['username']; ?></h2>

<div class="formStyle">

<form action="results.php" method="post">
<?php
$random = array(); //put all the radio buttons into an array and then shuffle the answers
    foreach($rows as $row)
    { 
        
        echo '<img src="' . $row['questions'] . '" >' . ' ' . '<br>'; //display image once
        
        $correctAnswers = '<input type="radio" name="' . $row['questionid'] . '" value="' . $row['answerid'] . '">' . $row['answers'] . '<br>';
        array_push($random, $correctAnswers);

$stmt = $db->prepare("SELECT answers, answerid FROM answers WHERE answerid != " . $row['answerid'] ." ORDER BY RANDOM() LIMIT 3");
//id!= :answerId 
$stmt->execute();
$rowsAnswers = $stmt->fetchAll(PDO::FETCH_ASSOC);   
      foreach($rowsAnswers as $rowsAnswer) {
          
         $wrongAnswers =  '<input type="radio" name="' . $row['questionid'] . '" value="' . $rowsAnswer['answerid'] . '">' . $rowsAnswer['answers'] . '<br>';
          array_push($random, $wrongAnswers);
        }
        shuffle($random);
        foreach($random as $r) {
            echo $r;
        }
        $random = array();
    }
 
    

?>

    <input type="submit" class="submit" value="Get Results"/>
    
    <br/><br/>
    
    <a href="signInProject1.php">Click Here</a> to go back to sign in page.

</form>
</div>
        
</body>
</html>
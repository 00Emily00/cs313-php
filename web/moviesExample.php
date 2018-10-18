<?php
//1. connect to db
require('environmentvarible.php'); //call it dbConnect.php
$db = get_db();
//2. Query for all movies
$stmt = $db->prepare('SELECT id,title, year FROM movie');
$stm->execute();
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
//3.Go through each movie in the result and display it
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    
    <h1>Movies</h1>
    
    <ul>
        <?php
        foreach($movies as $movie) {
            $title = $movie['title'];
            $year = $movie['year'];
            echo"<li><p>$title ($year</p></li>";
        }
        ?>
        <li><p></p></li>
        <li><p></p></li>
        <li><p></p></li>
    </ul>
</body>
</html>
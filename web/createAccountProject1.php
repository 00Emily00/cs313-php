<?php
$username = $_POST['username'];
$username = htmlspecialchars($username);
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: signUpProject1.php");
	die(); // we always include a die after redirects.
}


require ('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("INSERT INTO login(username,password) VALUES(:username,:password)");
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $passwordHash, PDO::PARAM_STR);
$stmt = $db->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Location: signInProject1.php");

die();
?>
<?php
session_start();

$badLogin = false;


if (isset($_POST['username']) && isset($_POST['password']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['username'];
	$password = $_POST['password'];
	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();
	$statement = $db->prepare("SELECT password FROM login WHERE username=:username");
	$statement->bindValue(':username', $username);
	$user = $statement->execute();
	if ($user)
	{
		$row = $statement->fetch();
		$hashedPassword = $row['password'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPassword))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: animalProject.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Learn Your Animals</title>
</head>
<body>

<?php
  if($badLogin) {
      echo "Incorrect username or password! Please try again<br>";
  }  
?>
    <h1>Please Sign In: </h1>
    
    <form id="form" action="signInProject1.php" method="POST">

	<input type="text" id="username" name="username" placeholder="Username">
	<label for="username">Username</label>
	<br /><br />

	<input type="password" id="password" name="password" placeholder="Password">
	<label for="password">Password</label>
	<br /><br />

	<input type="submit" value="Sign In" />

</form>

<br /><br />

Or <a href="signUpProject1.html">Sign up</a> for a new account.

</body>
</html>
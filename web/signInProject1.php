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
			header("Location: animalsProject.php");
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
    <link rel="stylesheet" href="animalsProject.css">

</head>
<body>

    <h1>Get to know your animals</h1>
    <h1>Please Sign In: </h1>
    
    <form class="formStyle" action="signInProject1.php" method="POST">

    <label for="username">Username: </label>
	<input type="text" id="username" name="username" placeholder="Username">
	<br /><br />
        
    <label for="password">Password: </label>
	<input type="password" id="password" name="password" placeholder="Password">
	<br /><br />
<?php
  if($badLogin) {
      echo "Incorrect username or password! Please try again<br>";
  }  
?>
	<input type="submit" class="submit" value="Sign In" />

    <br/><br/>

Or <a href="signUpProject1.php">Sign up</a> for a new account.
        
</form>


</body>
</html>
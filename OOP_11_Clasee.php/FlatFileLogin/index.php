<?php 
session_start();

if(isset($_SESSION['mysession']))
{
	header('location:home.php');
	exit;
}

if(isset($_POST['check']))
{
	$username = "araman";
	$password = "123456";

	if($_POST['username'] == $username && $_POST['pass'] == $password)
	{
		$_SESSION['mysession'] = $username;
		header('location:home.php');
	}
	else
	{
		$err = "Authentication Failed! Please try again";
	}
}


?>

<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		.err
		{
			color: red;
		}
	</style>
</head>
<body>
	<center>
		<?php 

			if(isset($err))
			{
				echo "<span class='err'>".$err."</span>";
			}
		?>
	</center>

	<form method="post" action="">
		User name:
		<input type="text" name="username">
		<br><br>
		Password:
		<input type="password" name="pass">
		<br>
		<input type="submit" name="check" value="Login">
	</form>
</body>
</html>

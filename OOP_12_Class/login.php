<?php

require_once('common.php');

$error = '';
if(isset($_POST['submitBtn']))
{
	$username = isset($_POST['username']) ? $_POST['username']:'';
	$password = isset($_POST['password']) ? $_POST['password']:'';

	$error = loginUser($username,$password);
}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
	<div>
		

		<div>
			<h2>Site Login</h2>
		</div>

		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post' name='loginForm'>
			<table width="50%">
				<tr>
					<td>
						User Name:
					</td>
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>
						Password:
					</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submitBtn" value="Login">
					</td>
				</tr>
			</table>
		</form>
		<a href="register.php">Not a Member? Register Here</a>
	</div>
	<?php

		if(isset($_POST['submitBtn']))
		{

	?>

	<div>
		Login Result:
	</div>
	<table width="75%">
		<tr>
			<td>
				<br>
				<?php
					if($error == '')
					{
						echo "Welcome $username!<br>You are logged in.<br>";
						echo "<a href='index1.php'>Now you can visit this page</a>";
					}

					else
					{
						echo $error;
					}
				?>
			</td>
		</tr>
	</table>
	<?php

		}


	?>
</body>
</html>
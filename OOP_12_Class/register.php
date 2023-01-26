<?php
require_once('common.php');

if(isset($_POST['submitBtn']))
{
	$username = isset($_POST['username']) ? $_POST['username']:'';

	$password1 = isset($_POST['password1']) ? $_POST['password1']:'';

	$password2 = isset($_POST['password2']) ? $_POST['password2']:'';

	$error = registerUser($username,$password1,$password2);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>

	<div>
		<h1>Register Here</h1>
	</div>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="registerForm">
		<table width="50%">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password1"> </td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="password2"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submitBtn" value="Register">
				</td>
			</tr>
		</table>
	</form>

	<?php

		if(isset($_POST['submitBtn']))
		{

	?>
	<div>
		<h1>Registration Result:</h1>
		<table width="100%">
			<tr>
				<td>
					<br>

					<?php

						if($error == '')
						{
							echo "User: $username was registered successfully!";
							echo "<a href='login.php'>You can login here</a>";
						}

						else
						{
							echo $error;
						}

					?>
					<br><br><br>
				</td>
			</tr>
		</table>
	</div>

	<?php 

		}
	?>
</body>
</html>
<?php
error_reporting(0);

$mysqli = new mysqli("localhost","root","","pwad54");

if($mysqli->connect_errno)
{
	die("Error Connection with Database");
}

$sqli = "SELECT * FROM city ORDER BY cityname";
$result = $mysqli->query($sqli);
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$twitter = $_POST['twitter'];
	$web = $_POST['web'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$checkbox1 = $_POST['hobbies'];
	$sex = $_POST['sex'];

	$errmsg = "";

	$chk ="";
	foreach($checkbox1 as $chk1)
	{
		$chk.= $chk1.",";
	}

	if(empty($fname) || empty($lname) || empty($uname) || empty($email))
	{
		$errmsg.="<span style='color:red;'>You Must Enter this Field Value</span>";
	}
	else
	{
		$sql = "INSERT INTO authors(first_name,last_name,username,user_email,user_twitter,user_web,city,country,hobbies,sex) VALUES('$fname','$lname','$uname','$email','$twitter','$web','$city','$country','$chk','$sex')";
	}
	if($mysqli->query($sql))
	{
		header('location:'.$_SERVER['PHP_SELF'].'?success');
		
	}

	if(isset($_GET['success']))
	{
		echo "<div style='background-color:darkblue;color:white;width:100%;height:50px;line-height:50px;'>Regsitration Done Successfully</div>";
	}
	else
	{
		echo "Failed to Insert Record";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Author Registration Form</title>
	<style>
		input[type='text']
		{
			display: inline;
			background-color: #ffff0;
		}

		.inline
		{
			display: inline-block;
		}

		label
		{
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>Author Registration</h1>
	<p>Please fillup all the following fields to register as author</p>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		<p>
		<label>First name:</label><br>
		<input type="text" name="fname">
		<?php if(isset($errmsg)) echo $errmsg;?>
		</p>

		<p>
		<label>Last name:</label><br>
		<input type="text" name="lname">
		<?php if(isset($errmsg)) echo $errmsg;?>
		</p>

		<p>
		<label>User name:</label><br>
		<input type="text" name="uname">
		<?php if(isset($errmsg)) echo $errmsg;?>
		</p>

		<p>
		<label>Email:</label><br>
		<input type="email" name="email">
		<?php if(isset($errmsg)) echo $errmsg;?>
		</p>

		<p>
		<label>Twitter ID:</label><br>
		<input type="text" name="twitter">
		</p>

		<p>
		<label>Web Address:</label><br>
		<input type="url" name="web">
		</p>


		<p>
			<label>User City:</label><br>
			<select name="city">
				<option value="">Select Your City</option>
				<?php

					if($result->num_rows > 0)
					{
						while($row = $result->fetch_assoc())
						{
							echo '<option value="'.$row['cityname'].'">'.$row['cityname'].'</option>';
						}
					}

				?>
			</select>
		</p>

		<p>
		<label>Country:</label><br>
		<input type="text" name="country">
		</p>

		<p>
			<label>Select Your Hobbies:</label><br>
			<input type="checkbox" name="hobbies[]" value="surfing">Net Surfing	
			<input type="checkbox" name="hobbies[]" value="Reading Books">Reading Books
			<input type="checkbox" name="hobbies[]" value="Blogging">Blogging
			<input type="checkbox" name="hobbies[]" value="Watch Movie">Watch Movie
		</p>
		<p>
			<label>Gender:</label>
			<input type="radio" name="sex" value="1" class="inline">Male
			<input type="radio" name="sex" value="2" class="inline">Female
		</p>
		<p>
			<input type="submit" name="submit" value="Save" class="inline">
			<input type="reset" name="cancel" value="Cancel" class="inline">
		</p>
		
	</form>

</body>
</html>
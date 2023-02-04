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

	//end date calculation

	$date = date("Y-m-d");
	$newDate = date('Y-m-d',strtotime($date. ' + 1 month'));

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
		$sqli = "INSERT INTO authors(first_name,last_name,username,user_email,user_twitter,user_web,city,country,hobbies,sex,start_date,end_date) VALUES('$fname','$lname','$uname','$email','$twitter','$web','$city','$country','$chk','$sex',NOW(),'$newDate')";
	}
	if($mysqli->query($sqli))
	{
		$last_id = $mysqli->insert_id;
		$msg= "<div class='alert alert-warning'>Regsitration Done Successfully</div>";

		header('refresh:10');		
	}
	else
	{
		echo "Failed to Insert Record";
	}

	$sqli2 = "SELECT * FROM authors WHERE id = $last_id;";
	$result2 = $mysqli->query($sqli2);
	if($result2->num_rows > 0)
	{
		while($row2 = $result2->fetch_assoc())
		{
			$mydate = $row2['start_date'];
		}

		$msg.= "<div class='alert alert-warning'>Your Subscription Date on $mydate</div>";
	}

	$sqli3 = "SELECT DATEDIFF(end_date,start_date) AS days FROM authors";

	$result3 = $mysqli->query($sqli3);
	if($result3->num_rows > 0)
	{
		while($row3 = $result3->fetch_assoc())
		{
			$mydate2 = $row3['days'];
		}

		$msg.= "<div class='alert alert-warning'>You have 
		$mydate2 days remaining</div>";

		echo $msg;
		
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Author Registration Form</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="container">
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
</div>
</body>
</html>
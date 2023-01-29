<?php
/* Sql Comment
Mysql, Oracle, Sql Server, MongoDB

SQL Command
DDL		     DML		DCL		    TCL		 DQL
🡪Create	🡪Insert	🡪Grant	  🡪Commit	 🡪select
🡪Drop		🡪Update	🡪Revoke  🡪Rollback
🡪Alter		🡪Delete			  🡪Save point
🡪Truncate

==========================================================================*/

error_reporting(0);
$weather = '';
$error = '';

$dt = new DateTime('now',new DateTimezone('Asia/Dhaka'));

if($_GET['city'])
{
	$urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=e671e2ef52d67bcec7a25da21cbcfc77");

	$weatherarray = json_decode($urlContents,true);

	if($weatherarray['cod'] == 200)
	{
		$weather = "The weather in:".$_GET['city']."is currently'".$weatherarray['weather'][0]['description']."'.";

		$tempInCelcius = intval($weatherarray['main']['temp'] - 273.15);

		$weather.= "The temparature is".$tempInCelcius."&deg;C and the wind speed is ".$weatherarray['wind']['speed']."m/s.";

	}
	else
	{
		$error = "Couldn't find the city-Plaese try again";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<title>Get Today's Weather</title>

	<style>
		html
		{
			background: url(weather.jpg) no-repeat center center fixed;
			-webkit-background-size:cover;
			background-size: cover;
		}

		body
		{
			background: none;
		}

		.container
		{
			text-align: center;
			margin-top: 100px;
			width: 450px;
		}

		input
		{
			margin: 15px 0;
		}
		#weather
		{
			margin-top: 15px;
		}
		h1
		{
			color: white;
		}

	</style>
</head>
<body>

	<div class="container">
		<h1>What's Todays Weather?</h1>
		<form>
			<fieldset class="form-group">
				<legend>Enter Your City Name</legend>
				<label style="font-size: 15px;">City Name:</label>
				<input type="text" name="city" class="form-control" id="city" placeholder="Eg. Dhaka, London">
			</fieldset>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<div id="weather">
			<?php

				if($weather)
				{
					echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
				}

				else if($error)
				{
					echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
				}

			?>
		</div>

		<?php echo $dt->format('F j,Y, g:ia'); ?>
	</div>

</body>
</html>
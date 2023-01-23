<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">	
			<title>Combo-Box Example</title>
		</head>
		<body>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				User Name:<br>
				<input type="text" size="20", name="user"><br>
				Books in Collection<br>
				<select size="5" name=books[] multiple>
					<option>Web Publishing</option>
					<option>Linux Networking</option>
					<option>XML</option>
					<option>PHP 7.4</option>
					<option>PHP with Laravel 8</option>
					<option>Windows 2016 Server</option>
				</select><br>
				Comment:<br>
				<textarea cols="50" rows="2"name="comment"></textarea><br>
				<input type="submit" value="Send">
			</form>
			</body></html>
<?php 
error_reporting(0);
if($_POST)
{
	print "<p>Welcome <b>$_POST[user]</b>";
	print "<p>Here is your comment:<i>$_POST[comment]</i>";
	print "<p><b>You have chossen the following books:</b>";

	print "<ol>";

	foreach($_POST[books] as $book)
	{
		print "<li>$book<br>";
	}

	print "</ol>";
}

?>
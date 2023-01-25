<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic File Upload</title>
</head>
<body>
	<h1>Select Your Photograph</h1>
	<?php
		$upload_dir = "imgaes";
		if(isset($_FILES['fupload']))
		{
			$file_name = $_FILES['fupload']['name'];
			$file_type = $_FILES['fupload']['type'];
			print "Path:".$_FILES['fupload']['tmp_name']."<br>";
			print "Name:.$file_name<br>";
			print "Size:".$_FILES['fupload']['size']."<br>";
			print "Type:.$file_type<br>";

			if($file_type == "image/jpg" or $file_type == "image/png" or $file_type == "image/jpeg")
			{
			copy($_FILES['fupload']['tmp_name'],
				"$upload_dir/$file_name") or die("Couldn't Copy the File");

				print "<img src=\"$upload_dir/$file_name\" width=\"200\", height=\"150\">";
			}
		}


	?>

	<form action="" enctype="multipart/form-data" method="post">
		Select Photograph:<input type="file" name="fupload"><br>
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>
<?php 

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$name = $_POST['fanme'];

	if(empty($name))
	{
		echo "You have to ebter your name";
	}

	else
	{
		echo $name;
	}


}

?>
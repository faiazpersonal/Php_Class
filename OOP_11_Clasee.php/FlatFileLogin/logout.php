<?php 

session_start();
if(!isset($_SESSION['mysession']))
{
	header('location:index.php');
	exit;
}

else
{
	unset($_SESSION['mysession']);
	session_destroy();
	header('location:index.php');
}

?>
<?php 
session_start();

function registerUser($user,$pass1, $pass2)
{
	$errorText = '';

	if($pass1 != $pass2)
	{
		$errorText = "Password are not same!";
	}

	elseif(strlen($pass1) < 7)
	{
		$errorText = "Password should be more than 8 characters";
	}

	$pfile = fopen("userpwad.txt","a+");
	rewind($pfile);

	while(!feof($pfile))
	{
		$line = fgets($pfile);
		$tmp = explode(":",$line);

		if($tmp[0] == $user)
		{
			$errorText = "The selected username alrteady taken";
			break;
		}
	}

	if($errorText == '')
	{
		$userpass = md5($pass1);
		fwrite($pfile,"\r\n$user:$userpass");
	}
	fclose($pfile);
	return $errorText;
}

function loginUser($user,$pass)
{
	$errorText = '';
	$validUser = false;

	$pfile = fopen("userpwad.txt","r");
	rewind($pfile);

	while(!feof($pfile))
	{
		$line = fgets($pfile);
		$tmp = explode(':',$line);

		if($tmp[0] == $user)
		{
			if(trim($tmp[1] == trim(md5($pass))))
			{
				$validUser = true;
				$_SESSION['userName'] = $user;
			}

			break;
		}
	}

	fclose($pfile);

	if($validUser !=true)
	{
		$errorText = "Invalid username or password!";
	}

	if($validUser == true)
	{
		$_SESSION['validuser'] = true;
	}

	else
	{
		$_SESSION['validuser'] = false;
	}

	return $errorText;
}

function logoutUser()
{
	unset($_SESSION['validuser']);
	unset($_SESSION['userName']);

}
function checkUser()
{
	if((!isset($_SESSION['validuser'])) || ($_SESSION['validuser'] !=true))
	{
		header('location:login.php');
	}
}



?>
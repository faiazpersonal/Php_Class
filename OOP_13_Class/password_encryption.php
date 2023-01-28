<?php 

$val = "secret";

$hash_val = password_hash($val,PASSWORD_DEFAULT);
//echo $hash_val;
$passwords = ['secret','guess'];

foreach($passwords as $password)
{
	if(password_verify($password, $hash_val))
	{
		echo "Password is coreect\n";
	}

	else
	{
		echo "Password is incoreect\n";
	}
}

?>
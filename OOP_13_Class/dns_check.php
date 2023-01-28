<?php 
$domain = "http://localhost";

$recordexists = checkdnsrr($domain,"ANY");

if($recordexists)
{
	echo "The domain '$domain' has a DNS record";
}

else
{
	echo "The domain '$domain' has not a DNS record";
}
?>
<br>
<?php 

$email = "admin@gmail.com";
$domain = explode("@",$email);
$valid = checkdnsrr($domain[1],"MX");

if($valid)
{
	echo "The domain has an MX record";
} 

else
{
	echo "The domain has not an MX record";
}

?>
<br>
<?php

echo "Port 80's default service is:".getservbyport(80,"tcp");

?>

<br>

<?php 

$server = "www.google.com";
$count = 3;

echo "<pre>";
system("Ping -n {$count} {$server}");
echo "</pre>";
?>
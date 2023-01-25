<?php 
/* FlatFileLogin, Basic_session_concept, implode()_explode(),upload_using_file_control
==========================================================================================*/
date_default_timezone_set('Asia/Dhaka');
session_start();

$_SESSION['username'] = "Faiaz";

printf("Your username is %s.",$_SESSION['username']);

//unset($_SESSION['username']);

printf("Username now set to %s.",$_SESSION['username']);

echo "<br>";
echo "Your session identification number is:".session_id();

?>

<?php 
echo "<br>";
$_SESSION['mysession'] = "Kamal";
$_SESSION['loggedon'] = date('Y-m-d h:i:a');

$sessionenc = session_encode();
echo $sessionenc;

?>
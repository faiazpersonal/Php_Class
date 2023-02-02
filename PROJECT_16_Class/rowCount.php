<?php 

$conn = new mysqli("localhost","root","","pwad54");

$sql = "SELECT * FROM employees";

if(!$result = $conn->query($sql))
{
	trigger_error($conn->error);
}

else
{
	echo "We have".$result->num_rows."rows in the table";
}

?>
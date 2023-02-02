<?php 

$conn = new mysqli("localhost","root","","pwad54");

if($conn->connect_errno)
{
	echo "Database Connection Error"." ".$conn->connect_error;
}

$result = $conn->query("select * from employees");
$rows = $result->fetch_assoc();
echo ($rows['employee_name'])."<br>";
echo ($rows['email']);

$conn->close();

?>
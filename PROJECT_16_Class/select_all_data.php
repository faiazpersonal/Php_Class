<?php 
$conn = new mysqli("localhost","root","","pwad54");
$sql = "SELECT employee_name,age,email,join_date,salary FROM employees";
if($stmt = $conn->prepare($sql))
{
	$stmt->execute();
	$stmt->bind_result($employee_name,$age,$email,$joindate,$salary);
	while($stmt->fetch())
	{
		echo "$employee_name $age $email $joindate $salary<br>";
	}
	$stmt->close();
}
else
{
	echo "Statement Error".$conn->error;
}
$conn->close();

?>
<?php 

$conn = new mysqli("localhost","root","","pwad54");

$sql = "insert into employees(id, employee_name, age, email, username, password, dept, join_date, salary, gender) VALUES ('','Borhan','34','borhan@yahoo.com','borhan','111111','admin','2020-01-05','25000','male')";

if(!$conn->query($sql))
{
	echo "Error inserting data";
}

else
{
	echo "Data inserted successful";
}

?>
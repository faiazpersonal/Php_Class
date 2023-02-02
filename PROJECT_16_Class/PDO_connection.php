<?php 

try
{
 $pdo = new PDO('mysql:host=localhost;dbname=pwad54','root','');
 $statement = $pdo->query('select * from employees');
 $row = $statement->fetch(PDO::FETCH_ASSOC);
 echo ($row['employee_name']);
}

catch(PDOException $e)
{
echo "Error estublishing database connection".$e->getMessage()."<br>";
}

?>
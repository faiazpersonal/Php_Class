<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pwad54','root','');

$stmt = $pdo->prepare('SELECT * FROM employees');

$stmt->execute();

echo "Number of rows in the table are:".$stmt->rowCount();

?>
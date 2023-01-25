<?php 

$array = array("Hasan","Kamal","Jony", "Masum");//Convert array to string

echo(implode("-",$array));

echo "<br>";

$str = "1,2,3,4,5,6";
$arr = explode(',',$str);//String to array

foreach($arr as $i)
{
	echo $i."<br>";
}


?>
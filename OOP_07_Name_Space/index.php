<?php 

include('test1.php');
include('test2.php');

$obj1 = new webapp\posts\allpost\Myhello();
$obj1->hello();
$obj2 = new webapp\posts2\allpost\Myhello();
$obj2->hello();

?>
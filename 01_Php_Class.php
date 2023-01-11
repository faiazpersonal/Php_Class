<?php 
// If Else statene,if else, Switch Statment, Ternary Operator, Type Casting, Variavle Dump =================================================================

// If Else statene, =================================================================

/*
$priceofBeef = 350;

if($priceofBeef <=100)
{
	echo "Buy 5 kg beef";
}

else if($priceofBeef == 200)
{
	echo "Buy 3 kg beef";
}

elseif($priceofBeef == 350)
{
	echo "Buy 2 kg beef";
}

elseif($priceofBeef == 400)
{
	echo "Buy 1 kg beef";
}

else
{
	echo "Dont buy beef";
}



// if else =====================================================================

$priceofBeef = 350;

if($priceofBeef == 250)
{
	print "Buy 3 kg beef";
}

else
{
	print "Dont buy beef";
}


*/

// Switch Statment =================================================================
/*
$priceofBeef = 350;

switch($priceofBeef)
{
	case 100:
	echo "Buy 5 kg beef";
	break;

	case 200:
	echo "Buy 3 kg beef";
	break;

	case 350:
	echo "Buy 2 kg beef";
	break;

	case 400:
	echo "Buy 1 kg beef";
	break;

	default:
	echo "Dont buy beef";
}
*/

// Ternary Operator ======================================================================
/*
$priceofBeef = 200;

$decision = ($priceofBeef == 200)?"Buy 2 kg beef":"Dont buy beef";
echo $decision."<br>";


$foo = 10;
$bar = ($foo==1)?"1":(($foo==2)?"2":"Other Value");
echo $bar;
*/

// Type Casting ==============================================

/*
$foo = '6b55r';
$bar = true;

settype($foo, 'integer');
echo gettype($foo);

echo "<br>";

echo $foo;

echo "<br>";
$foo = 20.80;
$b = (float)$foo;
echo gettype($b);
echo $b;
*/


// Variavle Dump ================================================================
/*
$a = 10;
$b = 10.5;
$c = true;
$d = "Welcome";
$e = array(10,20,"xyz");

echo var_dump($a,$b,$c,$d,$e);

print "<br>";

print "<pre>";
echo print_r($e);
print "</pre>";

print "<br>";

echo $_GET['choice'];
print "<br>";
echo $_GET['cat'];
print "<br>";
echo $_GET['subcat'];
print "<br>";
echo $_GET['srch'];
print "<br>";
echo $_GET['page'];
*/
// Variables ===============================================================

$a ="This is a string";
$b = 5;

echo $a." ".$b;

echo "<p>This is a paragraph</p>";

$x = "String5value";
$y = 25;
$z = $x + $y;
echo $z;

echo "<br>";

$number = 5;
$sum = 15+$number;
$sum = "twenty";
echo $sum;

echo "<br>";

$total = 5;
$count = "10";
$total+=$count;//Type juggeling
print $total;

echo "<br>";

echo date("F,d,D,Y");

echo "<br>";

printf("%dMobile phones cost is$%.2f",100,50.255);

?>
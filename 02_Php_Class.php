<!-- (prameterized value) Over right korar somoy amader oi value ta ke {} breaket er vitore rakha lagbe.
(prameterized value)  double codetion er vitore abar dobul codetion dite caile amader ke \ ei back shlesh use korte hobe. 









======================================================================================-->

<?php 


// For loop, Basic Function,Cal by reference, Do While loop,While loop, For loop, Global & Local Variable, Nested Function,Nested Loop, Parameterize Function   ============================================================
/*
print "<table border = '1'>";
for ($y = 1; $y <=15; $y++){
    print "<tr>";
    for ($x = 1; $x <=12; $x++){
        print "<td>";
        print ($x * $y);
        print "faiaz";
        print ("</td>");
    }
    print ("</tr>");
}
print ("</table>");

*/

// Basic Function  =================================================================
/*
function whateDate()
{
	return "Today is:"." ".date("F d,Y");
}

echo whateDate();

echo "<br>";

function add()
{
	$a=10;
	$b=25;
	$c=$a+$b;
	return $c;
}

echo add();
*/
// Cal by reference =========================================================
/*
function addFive($num)
{
	$num+=5;
}

function addSix(&$num)
	{
		$num+=6;
	}

$origNum = 10;

addFive($origNum);
echo "Original value is $origNum<br>";

addSix($origNum);
echo "Original value is $origNum<br>";
*/

// Do while loop ============================================================
/*
$i = 1;

do
{
	echo $i."<br>";
	$i++;
}

while($i < 10);
*/
// For loop  ==========================================================================
/*
$water = 10;

for($water; $water<=200;$water++)
{
    echo "Water is:$water litre<br>";
}
*/
// While loop =====================================================================
/*
$i = 1;
while($i<=10)
{
	echo $i."<br>";
	$i++;
}
*/





// Global & Local Variable ==========================================================
/*
$a=1;
$b=2;

function sum()
{
	global $a, $b;
	echo $b = $a + $b;
	return $c = 10;
}

echo sum();
//echo $c;




function message()
{
	static $noOfCall =0;
	$noOfCall++;
	echo "This function calls $noOfCall times";
}

message();
message();
message();
*/
// Nested Function ========================================================
/*
function salestax($price,$tax)
{
	
	function convert_taka($dollars, $conversion=90)
	{
		return $dollars * $conversion;
	}

	$total = $price+($price+$tax);
	echo "Total cost is in $:$total"."<br>"."Cost in BDT:"." ".convert_taka($total);
}

salestax(15,0.75);
*/
// Nested Loop ==================================================
/*
print "<table border='1'>";

for($y=1; $y<=12; $y++)
{
	print "<tr>";

	for($x = 1; $x <=12; $x++)
	{
		print "<td>";
		print ($x * $y);
		print "</td>";
	}

	print "</tr>";
}

print "</table>";

*/

// Parameterize Function  ============================================
/*
function salestax($price,$tax=2)
{
	$total = $price+($price+$tax);
	echo "Total cost is:$total"."<br>";
}

salestax(15);
/*$a = "salestax";
$a(10);

echo "<br>";

function customFont($font,$size=1.5)
{
	echo "<p style=\"font-family:$font;font-size:{$size}em;\">Welcome Here!</p>";
}

customFont("Arial",2);

customFont("Times",3);

customFont("Courier");

*/
// Recursive Function ==============================================================
/*
function recusrsive($num)
{
	echo $num,'<br>';

	if($num < 50)
	{
		return recusrsive($num+1);
	}
}

$a = 1;
recusrsive($a);
*/












 function salestax($price, $vat) {
    function convert_taka($dollars, $conversion=90) {
        return $dollars * $conversion ;
    }
    $total = $price+($price + $tax);
    echo "Total Cost is in $: $total". "<br>". "Cost in BDT". convert_taka($total);
 }

salestax(10,0.75);



?>
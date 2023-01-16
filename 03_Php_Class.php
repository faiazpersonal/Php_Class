<?php 

/*Associativ_arr,Basic Array, Encrypt, Multdimenaion Array Loop, Multidimension Array,String, Uppercase & Lowercase
===============================================================*/
// Associativ_arr ======================================================
/*
$products = array("iPhone"=>"8.5","Samsung Galaxy"=>"6.0","OnePlus"=>"7.8","htc"=>"6.2");

	foreach($products as $x => $x_value)
	{
		echo "Product=".$x.",Rating=".$x_value;
		echo "<br>";
	}
*/

// Basic Array  ===========================================================
/*
$arr = array("araman",40,"Trainer","Mohammodpur");
echo $arr[2];

echo "<br>";
/*echo "<pre>";
print_r($arr);
echo "</pre>";*/

/*echo "<pre>";
echo var_dump($arr);*/
/*
echo "<ul>";
for($i = 0; $i <=3; $i++)
{
	echo "<li>";
	echo $arr[$i];
	echo "</li>";

}

echo "</ul>";

if(in_array(40, $arr, true))
{
	echo "Found Successfully";
}

else
{
	echo "Not Found";
}
echo "<br>";
echo array_search("Trainer",$arr);

echo "<br>";

list($a, $b, $c, $d)=$arr;
echo "Details Information of the Employee are:$a, $b, $c, and $d";
*/

// Encrypt =========================================================================
/*
echo md5("araman777");//Supports 32 bit encryption, therefore it is not safe to use for sensitive data.

echo "<br>";

if(is_numeric(777))
{
	echo "True";
}

else
{
	echo "Not a Number";
}

echo "<br>";

echo number_format(250877458412);

echo "<br>";

echo substr(md5(rand(2,10)),2,6);

echo "<br>";

echo sqrt(100);

echo "<br>";

echo pi();

echo "<br>";

$password = "secret";
$hash = password_hash($password,PASSWORD_DEFAULT);
echo $hash;
*/

// Multdimenaion Array Loop =======================================================================
/*
$books = array(

			array(

					"name"=>"Web Publishing",
					"edition"=>"2nd",
					"price"=>"BDT 650"
			),

				array(

					"name"=>"Red Hat Linux",
					"edition"=>"10th",
					"price"=>"BDT 1150"
			),

	array(

					"name"=>"Web Engineering",
					"edition"=>"3rd",
					"price"=>"BDT 500"
			),

	array(

					"name"=>"C# Programming",
					"edition"=>"2nd",
					"price"=>"BDT 450"
			),

	array(

					"name"=>"Laravel 7",
					"edition"=>"1st",
					"price"=>"BDT 680"
			)
);

foreach($books as $vals)
{

	foreach($vals as $key=>$final_val)
	{
		print "$key:$final_val<br>";
	}
	print "<br>";
}
*/
// Multidimension Array  ============================================================
/*
$fruits = array(

			"fruits"=>array("a"=>"orange",

							"b"=>"banana",
							"c"=>"apple"
		),

		"numbers"=>array(1,2,3,4,5,6),
		"holes"=>array(

					"first",
					5=>"second",
						"third"

		)	



);

echo $fruits["holes"][5]."<br>";
echo $fruits["fruits"]["a"]."<br>";
echo $fruits["holes"][0]."<br>";
//unset($fruits["holes"][0]);
echo $fruits["holes"][0]."<br>";
*/
// String ============================================================================
/*
function Length($string)
{
	return strlen($string);
}

$mystring = "Welocome to US-Software";
echo Length($mystring);

echo "<br>";

echo str_word_count("Welocome to US-Software");
echo "<br>";

echo strrev("Hello world");

echo "<br>";

echo strpos("araman666@gmail.com","@");

echo "<br>";

echo str_replace("BaseLtd","US-Software","Welcome to BaseLtd");
*/
// Uppercase & Lowercase =============================================================


function toUpper ($string) {
    return strtoupper($string);
}
$string = "Junayed Rahman Faiaz";
echo (toUpper($string));
echo "<br>";

function toLower($stringx)
{
    return strtolower($stringx);
}
$string2 = "junayed Rahman faiaz";
echo (toLower($string2)); 
echo"<br>";
function toCapitalize($string) {
    return ucwords($string);
}
$string3 = "junayed Rahman faiaz";

echo (toCapitalize($string3));



?>
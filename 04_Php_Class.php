<?php 

/*
Array Chunk, Array Combine, Array Diff, Array intersect,Arry slice, Arry Sorting, Array Splice, Array Sum, Array Unique, Ksort, Multisort, Push sort  
=======================================================================*/

// Array Chunk ======================================================================
/*
$cards = array("jh","js","jd","jc","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad","ac");

//shuffle($cards);
$hands = array_chunk($cards,4);

echo "<pre>";
print_r($hands);
echo "</pre>";
*/
// Array Combine =======================================================================
/*
$abbreviations = array("AL","AK","AZ","AR");

$sates = array("Albama","Alaska","Arizona","Arkansas");

$sitemap = array_combine($abbreviations,$sates);

print_r($sitemap);
*/
// Array Diff ============================================================================

/*
$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2 = array("e"=>"red","f"=>"black","g"=>"puurple");

$a3 = array("a"=>"red","b"=>"black","c"=>"yellow");

$result = array_diff($a1,$a2,$a3);

echo "<pre>";
print_r($result);
echo "</pre>";
*/
// Array intersect =========================================================================
/*
$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2 = array("e"=>"red","f"=>"black","g"=>"puurple");

$a3 = array("a"=>"red","b"=>"black","c"=>"yellow");

$intersection = array_intersect($a1,$a2,$a3);

echo "<pre>";
print_r($intersection);
echo "</pre>";
*/
// Arry slice ===========================================================================
/*
$sates = array("Albama","Alaska","Arizona","Arkansas","Dallas");

$slice = array_slice($sates,1,3);
print_r($slice); 
*/
// Arry Sorting ====================================================================

/*
 $sates = array("Albama", "Alaska", "Arkansas", "New Jersy", "Los Angles");
 sort($sates);
 rsort($sates);
 arsort($sates); //Index soho eta change hobe

 echo "<pre>";
 print_r($sates);
 echo "</pre>"
*/
// Array Splice =========================================================================
/*
$arr = array("kamal","Jamal","Rashed","Moni","Hasan");

$arr2 = array("tanvir","sagor");

array_splice($arr,1,0,$arr2);

print_r($arr);
*/
// Array Sum =================================================================================
/*
$grades = array(55,"hello",42.6);

$total = array_sum($grades);
print $total;
*/
// Array Unique ==============================================================================
/*
$products = array("RAM","Motherboard","RAM","Mouse","Keyboard","Motherboard","Graphic Card","Mouse","Processor");

$uniqueproducts = array_unique($products);

print_r($uniqueproducts);
*/
// Array Walk ============================================================================
/*
function employees($value,$key,$p)
{
	echo "<pre>";
	echo "$key $p $value";
	echo "</pre>";
}

$emp = ['hasan','jubayer','khalid','komol','Rana'];

array_walk($emp,"employees","has the value"); 
*/
// Ksort ==================================================================================

/*
$a1 = array("d"=>"yellow","a"=>"red","z"=>"Purple","k"=>"green","r"=>"lemon");

ksort($a1);

foreach($a1 as $key => $val)
{
	echo "<pre>";
	echo "$key = $val";
	echo "</pre>";
}
*/
// Multisort ===============================================================================
/*
$result = array(
			array("country"=>"Bangladesh","capital"=>"Dhaka"),
			array("country"=>"India","capital"=>"New Delhi"),
			array("country"=>"USA","capital"=>"Washington DC"),
			array("country"=>"Canada","capital"=>"Autoa"),
			array("country"=>"Srilanka","capital"=>"Colombo")

);

$capitals = array();

foreach($result as $key => $val)
{
	$capitals[$key] = $val['country'];
}

array_multisort($capitals, SORT_DESC, $result);

print_r("Modified Array are:<br>");
echo "<pre>";
print_r($result);
echo "</pre>";


//array_multisort() function returns a sorted multiple array

$arr1 = array("a","b","c","d","e");
$arr2 = array("f","g","h","i","j");


array_multisort($arr1, SORT_DESC);
array_multisort($arr2, SORT_DESC);

echo "<pre>";

print_r($arr1);
print_r($arr2);

echo "</pre>";
*/
// Push sort =======================================================================
/*
$a = array("red","green","blue");

array_push($a,"Purple","Maroon");

array_pop($a);

array_shift($a);

array_unshift($a,"Rose");
echo "<pre>";
print_r($a);
echo "</pre>";
*/

 ?>
<?php 
/* Regular Expression, String methods, String Search
=====================================================================================*/
// // Regular Expression ==============================================================
// $string = "PHP is an web language scripting of choice";

// $exp = preg_match("/PHP/",$string);

// if($exp)
// {
// 	echo "A match was found<br>";
// }

// else
// {
// 	echo "No match found<br>";
// }

// /*..........case insensitve search............*/

// $string = "PHP is an web language scripting of choice";

// $exp = preg_match("/php/i",$string);

// if($exp)
// {
// 	echo "A match was found";
// }

// else
// {
// 	echo "No match found";
// }

// /*..........Return as Array............*/

// $string = "PHP is an web language scripting of choice";

// $exp = preg_match_all("/php/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "PHP is an web language scripting of choice";

// $exp = preg_match_all("/web|php/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";
// /*..........Only for one value............*/

// $string = "PHP is an web language scripting of choice";

// $exp = preg_match_all("/w|o|t/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// /*..........Search for number............*/
// echo "<br>";

// $string = "PHP is an web language 522 scripting of choice";

// $exp = preg_match("/522/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// /*..........Search for character set............*/
// echo "<br>";

// $string = "PHP is an web language 522 scripting of choice";

// $exp = preg_match("/[wot]/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";


// /*..........Search for not a specific character............*/
// echo "<br>";

// $string = "PHP is an web language 522 scripting of choice";

// $exp = preg_match("/[^wot]/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";


// /*..........Search for range of character set............*/
// echo "<br>";

// $string = "PHP is an web language 522 scripting of choice";

// $exp = preg_match_all("/[a-kA-K]/",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "PHP is an web language 522 scripting of choice";

// $exp = preg_match_all("/[0-9a-d]/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "file1 file2 file3 file4 file# file? file5 file6";

// $exp = preg_match_all("/file[1-3]/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "file1 file2 file3 file4 file# file? file5 file6";

// $exp = preg_match_all("/file[^0-9]/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "
// 			file.txt
// 			file1.xlsx
// 			file20.docx
// 			fileabc1.pptx
// 			filexyz.pdf
// 			";

// $exp = preg_match_all("/file\w*\.(txt|docx|pptx)/",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "212-456-7896";

// $exp = preg_match_all("/\d{3}-(\d{3})-(\d{4})/",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "120000
// 			250000
// 			45850
// 			15222";

// $exp = preg_match_all("/\d{6}/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";
// $string = "August 22nd
// 			August 22
// 			Aug 22nd
// 			Aug 22";

// $exp = preg_match_all("/Aug(ust)? 22(nd)?/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "PHP is an web language 522 scripting of choice";
// $exp = preg_match_all("/w[abcdef]b/",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "bat cat mat rat";

// $exp = preg_match_all("/[^bc]at/",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<br>";

// $string = "bat cat mat rat 555 _";

// $exp = preg_match_all("/\w/i",$string,$array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// // String methods ======================================================================
// $str = "US Software Ltd US Software Ltd";

// $newStr = strlen($str);

// echo "<pre>";
// print_r($newStr);
// echo "</pre>";

// echo "<br>";

// $newStr = str_word_count($str);
// echo "<pre>";
// print_r($newStr);
// echo "</pre>";

// echo "<br>";
// $newStr = str_word_count($str,1);
// echo "<pre>";
// print_r($newStr);
// echo "</pre>";

// echo "<br>";

// $newStr = substr_count($str, 'Software',3);
// echo "<pre>";
// print_r($newStr);
// echo "</pre>";

// echo "<br>";

// // String Search ===================================================================
// $str = "Hello World, The world is nice";

// $newStr = stristr($str,"world");//i for case insensitive
// echo "<pre>";
// print_r($newStr);
// echo "</pre>";

// echo "<br>";

// $newStr = strrev("Hello World");
// echo "<pre>";
// print_r($newStr);
// echo "</pre>";

// echo "<br>";

// $newStr = strpbrk($str,"wo");
// echo "<pre>";
// print_r($newStr);
// echo "</pre>";


?>
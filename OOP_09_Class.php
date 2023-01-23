<?php 
/* $_SERVER, Basic_file_system,chmod_fileperms,DateManipulation, Exception_Handling,Read_Dir 
==========================================================================================*/
// $_SERVER =====================================================================
/*
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

$lastday = mktime(0,0,0,2,1,2022);
printf("There are %d days in February 2022",date("t",$lastday));
echo "<br>";
$futuredate = strtotime("+45 days");
echo date("F d,Y",$futuredate);

echo "<br>";

$date = new DateTime();
$date->setDate(2023,1,18);
echo $date->format("F j,Y");

echo "<br>";

$terminationDate = new DateTime('2023-02-14');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
echo "Your subscription ends in {$span->format('%a')} days!";
*/
// Basic_file_system =====================================================================
/*$var = readfile("readme.txt");
echo $var."<br><br>";*/

/*$file = "readme.txt";

if(file_exists($file))
{
	echo readfile("readme.txt");
	copy($file,"readme2.txt");
}

else
{
	echo "File does not exists";
}
*/

/*$file = "readme2.txt";

if(file_exists($file))
{
	rename("readme2.txt","myfile.txt");

}

else
{
	echo "File does not exists";
}*/

/*$file = "myfile.txt";

if(file_exists($file))
{
	unlink("myfile.txt");
	echo "File Deleted successfully";

}

else
{
	echo "File does not exists";
}*/

//mkdir("inclues");

/*if(!file_exists("includes"))
{
	mkdir("includes");
	echo "Folder created successfully";
}
else
{
	echo "Folder already exists";
}*/

/*$newfile = "xyz.txt";

if(!file_exists($newfile))
{
	fopen($newfile,'w');
}

else
{
	echo "Folder already opened";
}*/

/*$filename = "xyz.txt";
$somecontent = "This file autometically created in the server and it should contain users details information.";

if(is_writable($filename))
{
	if(!$handle = fopen($filename,'a'))
	{
		echo "Cannopt open the file";
		exit;
	}

	if(fwrite($handle,$somecontent) === FALSE)
	{
		echo "Cannot write file";
		exit;
	}

	echo "Wrote the content successfully";
	fclose($handle);
}
else
{
	echo "The file is not writable";
}*/
/*
$file = "readme.txt";
echo filesize($file)."<br>";

echo filetype($file)."<br>";

echo filetype("includes")."<br>";

echo realpath($file)."<br>";

echo "<pre>";
print_r(pathinfo($file));
echo "</pre>";

$path = realpath($file);
echo(pathinfo($path, PATHINFO_EXTENSION))."<br>";
echo basename($path);
*/
// chmod_fileperms =========================================================================

// echo fileperms("readme.txt")."<br>";
// echo substr(decoct(fileperms("readme.txt")),2)."<br>";



// 1 = execute permission
// 2 = write permission
// 4 = read permiossion

// User serials
// Administrator(owner)
// All administrator group
// All users(visitors)
// //chmod("readme.txt",0600);
// echo chmod("readme.txt",0755);
// DateManipulation ====================================================================
/*
$olddate = mktime(0,0,0,03,15,2022);
echo $olddate."<br>";

$date = getdate($olddate);

echo $date['month']."-".$date['year'];

echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";

echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

echo "<br>";

$date = gettimeofday();
echo $date['sec']."<br>";


/*---------------Server Variables--------------------*/
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<br>";
echo $_SERVER['PHP_SELF'];

echo "<br>";
echo $_SERVER['HTTP_HOST'];
*/
// Exception_Handling ========================================================================
/*
$n = 0;

try
{
	if($n <= 0)
	{
		throw new Exception("Invalid Number. Number cannot be zero or negative");
	}

	else
	{
		echo "Number is valid";
	}
}

catch(Exception $e)
{
	echo $e->getMessage();
}
*/
// Read_Dir ================================================================================
/*
echo "<h2>List of Contents</h2>";

$d = "../Day-4";
$dir = opendir($d);

while($file=readdir($dir))
{
	echo "$file<br>";
}

closedir($dir);
*/


?>
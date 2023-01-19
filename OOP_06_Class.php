<?php 
/*__get& __set,Interface basic,Interface Inheritence,Polymorphism,Trait
================================================================================================*/

// __get& __set ================================================================================
/*
class Login
{
	public function __set($property, $value)
	{
		if($value == true)
		{
			$this->property=$value;
		}

		else
		{
			echo "Email Id is not Provuded";
		}
	}

	public function __get($user)
	{
		return "Login successfull with ID:".$this->property;
	}
}

$user1 = new Login;
$user1->email="araman666@gmail.com";
echo $user1->email;
*/
// Interface basic ================================================================================
/*
//Interface can only contain abstract function
//Interface does not allow any variable declaration
//No constyructor defined in interface.
//All functions must be public
//Interface supports multiple inheritence

interface Class1
{
	public function test1();
	
}

interface Class2
{
	public function test2();
	

}

class Class3 implements Class1,Class2
{
	public function test1()
	{

	}

	public function test2()
	{
		
	}
}
// 2nd ==================================================================================

interface WebApp
{
	public function login($email, $password);
	public function register($email, $password, $username);
	public function logout();
}
class Myclass implements WebApp
{
	public function login($email, $password)
	{
		echo "Logged in user with".$email;
	}

	public function register($email, $password, $username)
	{
		echo "User registration successfull with".$email."and username".$username."<br>";
	}

	public function logout()
	{
		echo "User Logged Out!";
	}
}

$user = new Myclass();
$user->register("araman666@gmail.com","password","araman");
$user->login("araman666@gmail.com","password");  

*/
// Interface Inheritence =======================================================================================
/*
interface my_print
{
	public function printData();
}

interface select
{
	public function getData();
}

interface myInterface extends my_print, select
{
	public function addData();
}

class Myclass implements myInterface
{
	public function printData()
	{
		echo "This function will print information";
	}

	public function getData()
	{
		echo "This method can read data";
	}

	public function addData()
	{
		echo "This method can insert data";
	}
}

$obj = new Myclass();
$obj->printData();
$obj->addData();
*/

// Polymorphism ============================================================================================
/*
class Online
{
	function join()
	{

	}
}

class Javascript extends Online
{
	function join()
	{
		echo "Join Javascript class<br>";
	}
}

class Php extends Online
{
	function join()
	{
		echo "Join Php class<br>";
	}
}

class Laravel extends Online
{
	function join()
	{
		echo "Join Laravel class<br>";
	}
}

class Wordpress extends Online
{
	function join()
	{
		echo "Join Wordpress class";
	}
}

$val = array();

$val[0] = new Javascript();
$val[1] = new Php();
$val[2] = new Laravel();
$val[3] = new Wordpress();

for($i = 0; $i < 4; $i++)
{
	$val[$i]->join();
}

// 2nd ======================

class One
{
	public function Output($param)
	{	
		echo "\n Parent Class-The parameter value is:$param<br>";
	}

}

class Two extends One
{
	public function Output($param)
	{	
		echo "\n Child Class-The parameter value is:$param<br>";
	}
}

$obj1 = new One;
$obj2 = new Two;

$obj1->Output("This is a pobst from parent");
$obj2->Output("This is a post from child");
*/
// Trait ===============================================================================================
/*
trait Class1 
{
	function fun1()
	{
		echo "Fun1";
	}
}

class Class2
{	
	use Class1;
	function fun2()
	{
		echo "Fun2";
	}
}

class Class3 extends Class2
{
	
	function fun3()
	{
		echo "Fun3";
	}
}

class Class4 extends Class3
{

	function fun4()
	{
		echo "Fun4";
	}
}


$obj = new Class3();
$obj->fun1();
$obj->fun3();
// 2 nd =================================================================================
trait Subscriber
{
	function subscriberlogin()
	{ 
	echo "You are logged in as subscriber<br>";
}
}

trait Contributer
{
	function contributorlogin()
	{
		echo "You are logged in as contributor<br>";
	}
}
trait Author
{
	function authorlogin()
	{
		echo "You are logged in as author<br>";
	}
}
trait Administrator
{
	function administratorlogin()
	{
		echo "You are logged in as administrator<br>";
	}
}
class Member
{
	use Subscriber;
	use Contributer;
	use Author;
	use Administrator;

	public function run()
	{
		$this->subscriberlogin();
		$this->contributorlogin();
		$this->authorlogin();
		$this->administratorlogin();

		echo "All Members Login Done!<br>";
	}
}

$mylogin = new Member();
$mylogin->run();
*/ 

?>

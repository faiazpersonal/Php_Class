<?php 

/* Satter function, Getter function,Abstrack Class,Access Modifier, Class baire theke access,Protect class

==============================================================================================*/

// Satter function, Getter function ===========================================================================
/*
class Customers {
    public $name;
    public $age;
    
    private $accountNumber;
    private $balance;

    protected $dep;

    public function setAccountnumber($accountn) {  //Satter function
        $this->accountNumber = $accountn;
        echo "Account Number is: ".$this->accountNumber;
    }
    public function showInfo(){ // Getter function
        echo "Cunstomer Name is: ".this->name. "and age is ". $tsis->age;
    } 

}


$value = new Customers;

echo $value->name = "Junayed Rahman Faiaz";
echo "<br>";
echo $value->age = 23;
echo "<br>";
echo $value->setAccountnumber(1000001);
echo "<br>";
echo $value->dep = "Savings"; //  baire theke access kora zay na ei protect function ta
*/
 

// Abstrack Class ===============================================================

/*
abstract class Car
{
	protected $tankVolume;

	public function setTankVolume($volume)//Non-abstract method
	{
		$this->tankVolume = $volume;
	}

	abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car
{
	public function calcNumMilesOnFullTank()
	{
		$miles = $this->tankVolume*30;
		return $miles;
	}
}

class Toyota extends Car
{
	public function calcNumMilesOnFullTank()
	{
		return $miles = $this->tankVolume*33;
	}

	public function getColor()
	{
		return "Blue";
	}
}

$toyota1 = new Toyota();
$toyota1->setTankVolume(10);
echo $toyota1->calcNumMilesOnFullTank()."<br>";
echo $toyota1->getColor();

$honda1 = new Honda();
$honda1->setTankVolume(10);
echo $honda1->calcNumMilesOnFullTank()."<br>";




abstract class XYZ
{
	function test()
	{
		echo "Hello..."."<br>";
	}

	abstract function absfunc();
} 

class abc extends XYZ
{
	function absfunc()
	{
		echo "Im from abstract methods<br>";
	}
}

class def extends abc
{
	function absfunc()
	{
		echo "Im from def class...";
	}
}

$a = new abc();
$a->test();
$a->absfunc();

$b = new def();
$b->absfunc();
*/
// Access Modifier =======================================================================
/*
class Customers
{
	public $name;
	public $age;

	private $accountNumber;
	private $balance;

	protected $dept;

	public function setAccountNumber($accnumber) //Setter function
	{
		$this->accountNumber = $accnumber;
		echo "Accout Number is:".$this->accountNumber;
	}

	public function showInfo() //Getter Function
	{
		echo "Customer Name is".$this->name."and age is".$this->age;
	}


}

class Cus1 extends Customers
{
	function setDept($dept)
	{
		echo $this->dept = $dept;
	}
}

$p1 = new Customers;
$p1->name = "Mr.Rahim<br>";
$p1->age = 45;
$p1->showInfo();
echo "<br>";
$p1->setAccountNumber(1001);
echo "<br>";
$p2 = new Cus1();
$p2->setDept("Savings");
*/
// Basic Inheritence ===========================================================
/*
class Vachile
{
	private $model;

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function message()
	{
		return "Im a <b>".$this->model."</b><br>";
	}
}

class Mycar extends Vachile
{

}

$mycar = new Mycar();
$mycar->setModel("Mercedes Benz");
echo $mycar->message();
*/
// Class baire theke access ========================================================================
/*
class Person
{
	
	public $name;
	public $weight;
	public $age;
	public $sex;
	public $profession; 

	//constructor
	function __construct()
	{
		$this->age = 7;
		$this->weight = 25;
		$this->profession = "Student";
	}

	//destructor

	public function __destruct()
	{
		
		echo $this->name."is idle now. His current age is:".$this->age."years and now he weights".$this->weight."kg.";
	}

	public function eat($food, $calorie)
	{
		echo $this->name."is eating".$food."with".$calorie."calorie\n"."<br>";
		$this->weight +=($calorie/1000);
	}

	public function shop()
	{
		echo $this->name."is shopping..."."<br>";
	}

	public function cook()
	{
		echo $this->name."is cooking food..."."<br>";
	}

	public function sleep()
	{
		echo $this->name."is sleeping..."."<br>";
	}
}


// eta diye value define korche ei person class er

include_once("class_person.php");

$father = new Person;
$father->name = "Mr.Karim";
$father->age = 45;
$father->profession = "Job Holder";

$mother = new Person;
$mother->name = "Mrs.Jarina";
$mother->age = 32;
$mother->profession = "Housewife";

$baby = new Person;
$baby->name = "Mr. Baby";
$baby->age = 7;
$baby->weight = 25;

$father->shop();
$mother->cook();

//$father->eat();
//$mother->eat();
echo $baby->name."Weights".$baby->weight."kg\n"."<br>";
$baby->eat("Burger",500);
$baby->eat("Cashew Nut",500);
echo $baby->name."Now Weights".$baby->weight."kg\n"."<br>";

$father->sleep();
$mother->sleep();
*/
// Protect class ==========================================================================

/*class Human
{
	protected $genders = array("male","female","others");

	protected function getFeatures($gender)
	{
		if($gender == 'male')
		{
			echo "Men will be a men";
		}

		else if($gender == 'female')
		{
			echo "Women's mind is a maze";
		}

		else if($gender == 'others')
		{
			echo "All are born equal";
		}
	}
}

class Male extends Human
{
	protected $gender = "female";

	public function getMaleFeature()
	{
		$this->getFeatures($this->gender);
	}
}

$human = new Human();
$male = new Male();

$male->getMaleFeature();
echo $male->gender;
*/





















?>
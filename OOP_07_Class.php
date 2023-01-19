<?php 
/* Bank account related,Object Cloning,Saving Account,Object Cloning, Static Function, static ex
============================================================================================*/
// Bank account Taka withdraw & deposit =====================================================
/*
class BankAccount {
    public $accountNumber;
    public $balance;
    public function deposit($accountNumber, $amount) {
        echo "For account number: ". $accountNumber . "<br>";
        if ($amount > 0) {
            echo "The total ammoun is: ".$this -> balance+=$amount;
            echo "<br>";
        }
    }
    public function withdraw($amount) {
        if ($amount <= $this -> balance) {
            echo "Withdraw ammount is: ".$amount."<br>";
            echo "The remaining  balance is: ".$this -> balance -=$amount;
            return true;
        }
    }
}
$account = new BankAccount();
$account -> balance = 100;
$account -> deposit (1001,500);
$account -> withdraw (200);
*/
// Bank account  =====================================================
/*
require 'SavingAccount.php';

$account = new SavingAccount();

$account->deposit(100);
$account->setInterestRate(0.05);
$account->addInterest();

echo "Account balance with interest is:".$account->getBalance();
*/
// Saving Account ==========================================================================
/*
class BankAccount
{
	private $balance;

	public function getBalance() //getter method
	{
		return $this->balance;
	}

	public function deposit($amount)
	{
		if($amount > 0)
		{
			$this->balance +=$amount;
		}

		return true;
	}

}

class SavingAccount extends BankAccount
{
	private $interestRate;

	public function setInterestRate($interestRate)
	{
		$this->interestRate = $interestRate;
	}

	public function addInterest()
	{
		$interest = $this->interestRate * $this->getBalance();
		parent::deposit($interest);
	}
}
*/



// Object Cloning ====================================================================
/*
class Animal
{
	public $name;
	public $category;
}

$objectanimal = new Animal();
$objectanimal->name = "Lion";
$objectanimal->category = "Wild Animal";

$objcopied = clone $objectanimal;
$objcopied->name ="Cat";
$objcopied->category="Pet Animal";

print_r($objectanimal);
print_r($objcopied);
*/

// Static Function ======================================================================
/*
class Class1
{
	public static $num = 10;
	public static $num2 = 20;

	public function fun1()
	{
		echo self::$num2;
	}
}

/*$obj = new Class1();
echo $obj->num;*/

/*echo Class1::$num;*/
 /*echo Class1::fun1();*/
// static ex ===========================================================================
/*
class Class1
{
	public static $num = 10;

	public static function fun1()
	{
		self::$num++;
	}
}

/*$obj = new Class1;
$obj->fun1();
echo $obj->num;

$obj->fun1();
echo $obj->num;

$obj->fun1();
echo $obj->num;*/
/*
Class1::fun1();
echo Class1::$num;

Class1::fun1();
echo Class1::$num;

Class1::fun1();
echo Class1::$num;
*/








?>
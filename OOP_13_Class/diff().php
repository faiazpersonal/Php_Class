<?php 
/* Time defarenc, diff(),dns_check, marks, password_encryption, result,time_Expear
======================================================================================*/
$sdate = '2023-01-30';
$lastpayment = new DateTime($sdate);
$todaysDate = new DateTime('today');
$span = $lastpayment->diff($todaysDate);

if($todaysDate > $lastpayment)
{
	echo "Your Subscription has Paused. Please Renew Your Membership";
}
else
{

echo "Your subscription ends in {$span->format('%a')} days";
}

?>
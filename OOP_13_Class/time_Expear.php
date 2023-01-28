<?php 
    $sdate = '2023-01-30';
    $lastpayment = new DateTime($sdate);
    $todayDate = new DateTime('today');
    $span = $lastpayment -> diff($todayDate);
    if($todayDate > $lastpayment){
        echo "<b style =>Your Subsctiption Has Paused. Pleace Renew Your Membership</b>";
    }
    else {
        echo "<b>your subsctiption ends in {$span -> format('%a')} days</b>";
    }
    
?>
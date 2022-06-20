<?php
$dayList =["Sunday","Monday","Tuesday","Wednusday","Thursday","Friday","Saturday"];
$date = readline('Enter the date: ');
$month = readline('Enter the month: ');
$year = readline('Enter the year: ');

class dayOfWeek{
    static function dayofweek($date, $month, $year, $dayList){

        $y0 = (float)$year - (14 - $month) / 12;
        $x = (float)$y0 + ($y0 / 4) - ($y0 / 100) + ($y0 / 400);
        $m0 = (float)$month + 12 * ((14 - $month)/ 12) - 2;
        $d0 = (float)($date + $x + (31*$m0 / 12)) % 7;
        $output = $dayList[$d0] ;
        echo $output;
    }
}

$day = new dayOfWeek;
$day->dayofweek($date, $month, $year, $dayList);
?>
<?php

function checkYear($y)
{
    if ((($y % 4 == 0) && ($y % 100 != 0)) || ($y % 400 == 0)){
        echo ("Leap Year");
    }else{
        echo("Not a Leap Year");
    }
}
$year = readline("Enter a year ");
if(is_numeric($year) && $year>999 && $year<10000){
    checkYear($year);   
}else {
    echo ("Enter a valid number");
}
?>
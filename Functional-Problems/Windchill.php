<?php

$t = readline('Enter the value of t: ');            //user input
$v = readline('Enter the value of v: ');

function wind($t, $v){
    $w = (35.74 +0.6215*$t +(0.4275*$t - 35.75)*pow($v,0.16));          //formula for windchill
    echo $w;                                        //printing the output

}

wind($t,$v);                        
?>
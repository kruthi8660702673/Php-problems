<?php

$t = readline('Enter the value of t: ');
$v = readline('Enter the value of v: ');

function wind($t, $v){
    $w = (35.74 +0.6215*$t +(0.4275*$t - 35.75)*pow($v,0.16));
    echo $w;

}

wind($t,$v);
?>
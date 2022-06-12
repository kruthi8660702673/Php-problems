<?php

$x = readline ('Enter the valuye of x: ');
$y = readline ('Enter the valuye of y: ');

function distance ($x, $y){

    $dist = sqrt((pow($x,2)) +pow($y,2));
    echo (round($dist));
}

distance ($x, $y);

?>
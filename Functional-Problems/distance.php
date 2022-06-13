<?php

$x = readline ('Enter the valuye of x: ');              //taking the input from the user
$y = readline ('Enter the valuye of y: ');

function distance ($x, $y){

    $dist = sqrt((pow($x,2)) +pow($y,2));               //distance formula
    echo (round($dist));                                //printing the distance
}

distance ($x, $y);

?>
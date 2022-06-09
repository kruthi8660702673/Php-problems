<?php

$i = 0.0;
$sum = 0;

$num = readline("Enter the harmonic number of N :");
if (is_numeric($num)) {

    echo "The Harmonic Progression series is ";
    for ($i = 1; $i <= $num; $i++) {
        $sum =  $sum + (1 / $i);
        echo $sum . ",";
    }
    echo "\nThe Harmonic value of Nth term is " . round($sum, 2);         
} else {
    echo "Invalid input.\nPlease enter a valid numeric data";
}

?>
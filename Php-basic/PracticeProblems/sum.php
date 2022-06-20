<?php
$n = readline ('Enter the numbers: ');
function sum ($n){
    $sum =0;
    for ($i = 0; $i<strlen($n); $i++){
        $sum += $n[$i];
    }
    return $sum;
}
    echo sum($n);
?>
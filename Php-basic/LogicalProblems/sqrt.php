<?php
$c = readline('Enter the non negative number: ');
 function sqrNumber($c){
     $t = $c;
while (abs($t - $c / $t) > (1 * pow(10, -15) * $t)) {
    $t = ($t + $c / $t) / 2;
 }
 echo "The sqrt of the number is $t";
 }
 sqrNumber($c);
?>
<?php

$x = readline('Enter the number: ');
if(is_numeric($x)){
    $sum = 0;
    for ($i = 1; $i <= $x / 2; $i++) {
     if($x % $i ==0){
         $sum = $sum + $i;
     }
    }    
 if($sum == $x){
     echo("it is perfect number");
 }else{
    echo("not a perfect number");
 }
 
}
?>
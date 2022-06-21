<?php
$y = 1;
//arrow function -fn(argument) => expresion
$sum = fn($x)=> $x + $y;
echo $sum(10 , 20). "\n";

$array = [10, 20, 30, 50];
//multiply 2with array element
$multiply = array_map((fn($ele)=> $ele * 2), $array);

print_r($multiply);
echo "\n";
//comparing
$result = fn($x) => $x == $y;

echo $result(10, 10);
echo "\n";
?>
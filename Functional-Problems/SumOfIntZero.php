<?php

$N = readline("Enter the number of array: ");

function inputArray($N)
{
    $intArray = [];
    for ($m = 0; $m < $N; $m++) {                                                   
        $intArray[$m] = readline("Enter the input [$m] : ");
    }
    echo "\nInput elements of Array = [ ";
    for ($i = 0; $i < $N; $i++) {                                                    
        echo $intArray[$i] . ",";
    }
    echo "]\n";
    return $intArray;
}
function Triplets($N, $array)
{
    $count = 0;                                         
    $found = false;                                     
    for ($i = 0; $i < $N - 2; $i++) {                     
            for ($j = 0; $j < $N - 1; $j++) {
            for ($k = $j + 1; $k < $N; $k++) {
                if ($array[$i] + $array[$j] + $array[$k] == 0) {          
                    echo "$array[$i], $array[$j], $array[$k]";
                    $count++;                                        
                    $found = true;
                }
            }
        }
    }
    echo "The triplet sum is equal to zero is " . $count;
    if ($found == false) {
        echo "Triplets not found ";                       
    }
}
$array = inputArray($N);
Triplets($N, $array);
?>
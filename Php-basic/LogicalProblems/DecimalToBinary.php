<?php

$binary = readline('Enter the number: ');
function binary($binary){
    $a = 0;
    $binaryArray = [];
    while($binary > 0){
        $binaryArray[$a] = ($binary % 2);
        $binary = (int)$binary / 2;
        $a++;
    }
        for ($j=$a-1; $j>=0;$j--){
            echo $binaryArray[$a]; 
        }
}

binary($binary)
?>
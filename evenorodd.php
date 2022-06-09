<?php
$isEven = 0;

$number = readline('Enter a number ');  
function evenorodd ($number){
    if (is_numeric($number)) {
        if ($number % 2 == 0) {                  
            echo ("The enterted number " . $number . " is a even number");
        } else {
            echo ("The enterted number " . $number . " is a odd number");
        }
    } else {
        echo "Invalid input.\nPlease enter a valid numeric data";
    }
    
}   
evenorodd($number);
?>
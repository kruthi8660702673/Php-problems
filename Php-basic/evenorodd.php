<?php

$number = readline('Enter a number ');  //Take the input from the console
function evenorodd ($number){
    if (is_numeric($number)) {          //condition checking
        if ($number % 2 == 0) {                  
            echo ("The enterted number " . $number . " is a even number");          //Printing the output
        } else {
            echo ("The enterted number " . $number . " is a odd number");
        }
    } else {
        echo "Invalid input.\nPlease enter a valid numeric data";
    }
    
}   
evenorodd($number);
?>
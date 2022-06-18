<?php

$power = readline("Enter the value of the power,N ");          // user input
$result = 1;

if (is_numeric($power)) {                                            //input validation
   
    if ($power >= 0 and $power < 31) {                              //    condition for N value less than 31
        for ($i = 0; $i <= $power; $i++) {                         // looping for power values
            $result = $result * 2;                            // formula for the power values of 2
            echo ("The power of 2^" . $result . "\n");
        }
    } else {
        echo ("Enter a number that is less than 31");
    }
} 

?>
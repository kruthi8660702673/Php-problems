<?php
$N = readline('Enter the number ');
$reverse = 0;
if (is_numeric($N)) {                                    
     for ($i = 1; $i < $N; $i++) {                   
        $reminder = $N % 10;
        $reverse = ($reverse * 10) + $reminder;
        $N = $N / 10;
    }
    echo "The number after reversing is " . $reverse;            

} else {
    echo "Invalid Input ";              
}
?>
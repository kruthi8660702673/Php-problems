<?php

$n = readline('Enter the number: ');            //input from the user
   $count =0;
    if(is_numeric($n) && $n>0){                 //checking the condition
        for($i = 1; $i <=$n; $i++){        //for loop for reapeting
            if ($n % $i == 0){               //looping and dividing by $i till it becomes 0
               $count++;
            }
    } 
        if ($count == 2){               
            echo $n . " is a prime number";
        }else{
            echo $n . " is not a prime number";
        }
    }else{
        echo "enter a valid number";
    }
?>
<?php
$n = readline('Enter the number: ');            //input from the user
   
    if(is_numeric($n) && $n>0){                 //checking the condition
        for($i = 3; $i * $i <=$n; $i++){        //for loop for reapeting
            while ($n % $i == 0){               //looping and dividing by $i till it becomes 0
                echo $i , "  ";
                $n = $n / $i;
            }
    } 
        if ($n>2){
            echo $n;
        }
    }else{
        echo "enter a valid number";
    }

?>
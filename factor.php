<?php
$n = readline('Enter the number: ');
   
    if(is_numeric($n) && $n>0){
        for($i = 3; $i * $i <=$n; $i++){
            while ($n % $i == 0){
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
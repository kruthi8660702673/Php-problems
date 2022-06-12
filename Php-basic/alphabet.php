<?php
$y;
$z;
$x = readline('Enter the alphabet ');       //Taking the input from the console
    if($x && ctype_alpha($x)){          // Checking the conditionCondition
        $y = $x == 'a' || $x == 'e' || $x == 'i' || $x == 'o' || $x == 'u' ;    
        $z = $x == 'A' || $x == 'E' || $x == 'I' || $x == 'O' || $x == 'U' ;
        if($x == $y || $z){
            echo ('Entered alphabet is a Vowel');           //Printing the vowel
        }else{
            echo ('Entered alphabet is a Consonent');       //Printing the consonent
        }
    }else{
        echo ('Enter the correct alphabet');
    }


?>
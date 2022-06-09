<?php
$y;
$z;
$x = readline('Enter the alphabet ');
    if($x && ctype_alpha($x)){
        $y = $x == 'a' || $x == 'e' || $x == 'i' || $x == 'o' || $x == 'u' ;
        $z = $x == 'A' || $x == 'E' || $x == 'I' || $x == 'O' || $x == 'U' ;
        if($x == $y || $z){
            echo ('Entered alphabet is a Vowel');
        }else{
            echo ('Entered alphabet is a Consonent');
        }
    }else{
        echo ('Enter the correct alphabet');
    }


?>
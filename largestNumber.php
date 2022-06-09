<?php
$x = readline('Enter the X value ');
$y = readline('Enter the Y value ');
$z = readline('Enter the Z value ');

    if($x > $y){
        if($x > $z){
            echo ("$x is the largest number");
        }else{
            echo ("$z is the largest number");
        }
    }else if($y > $z){
        echo ("$y is the largest number");
    }else{
        echo ("$z is the largest number");
    }


?>
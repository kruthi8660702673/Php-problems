<?php
$x = readline('Enter the X value ');
$y = readline('Enter the Y value ');        //user input
$z = readline('Enter the Z value ');

    if($x > $y){                            //condition checking
        if($x > $z){
            echo ("$x is the largest number");
        }else{
            echo ("$z is the largest number");      //pring the output
        }
    }else if($y > $z){
        echo ("$y is the largest number");
    }else{
        echo ("$z is the largest number");
    }


?>
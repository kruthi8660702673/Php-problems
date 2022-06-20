<?php

class Temparature{
    static function Fahrenheit($temp){
        $fahrenheit = ($temp * (9/5)) + 32;
        return $fahrenheit;
    }
    static function Celsius($temp){
        $celsius = ($temp - 32) + (5/9);
        return  $celsius;
    }
}


$temp = readline('Enter the temparature: ');
$option = readline('Enter the scale to convert temparature in C or F: ');
$temparature = new Temparature;
if($option == "F"){
    echo $temparature->Fahrenheit($temp)."F";
}elseif($option == "C"){
    echo $temparature->Celsius($temp)."C";
}else{
    echo "Invalid Input";
}

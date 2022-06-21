<?php

class Fruits {

    public $name;
    public $color;
function __construct($name, $color)         
{
    $this ->name = $name;
    $this ->color = $color;
}
function getName(){
    return $this -> name;
}
function getColor(){
    return $this -> color;
}
}
$Apple = new Fruits("Apple","red");       
echo $Apple -> getName();
echo "\n";
echo $Apple -> getColor();
?>
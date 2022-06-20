<?php
class AddTwoNum {
public $name;
function __construct($name){
    $this->name = $name;
}
//declaration constant variable
 const NUM_2 = 10;
//non-static function
 function addition($num1){
    return $num1 + self::NUM_2;
 }
//static function
 static function multiply($num1){
    return $num1 * AddTwoNum::NUM_2;
 }
} 

//access static function
echo AddTwoNum::multiply(23)."\n";
//access non -static functioin by obj creation
$addTwoNumb = new AddTwoNum("Candy");
echo $addTwoNumb ->addition(4)."\n";
//access constant value
echo AddTwoNum::NUM_2 . "\n";
echo "name :" .$addTwoNumb->name."\n";
?>
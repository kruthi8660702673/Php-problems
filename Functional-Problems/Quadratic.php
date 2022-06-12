<?php
$a = readline('Enter the value of a: ');
$b = readline('Enter the value of b: ');
$c = readline('Enter the value of c: ');

Function quadratic ($a, $b, $c){
    $delta = ($b*$b -4*$a*$c);

    $root1 = ((-$b + sqrt($delta))/(2*$a));
    $root2 = ((-$b - sqrt($delta))/(2*$a));
    echo "The value os Delta is " .round($delta) . "\n ";
    echo "The roots of the quad equation: " . (int)($root1) . "   ". (int)($root2) ."";

}

quadratic($a, $b, $c);
?>
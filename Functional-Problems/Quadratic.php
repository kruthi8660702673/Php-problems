<?php
$a = readline('Enter the value of a: ');                    //taking the input from the user
$b = readline('Enter the value of b: ');
$c = readline('Enter the value of c: ');

Function quadratic ($a, $b, $c){
    $delta = ($b*$b -4*$a*$c);                               //delta formula

    $root1 = ((-$b + sqrt($delta))/(2*$a));                    //finding the roots of the quadratic eqn
    $root2 = ((-$b - sqrt($delta))/(2*$a));
    echo "The value os Delta is " .round($delta) . "\n ";          // printing the delta
    echo "The roots of the quad equation: " . (int)($root1) . "   ". (int)($root2) ."";    //printing the roots

}

quadratic($a, $b, $c);
?>
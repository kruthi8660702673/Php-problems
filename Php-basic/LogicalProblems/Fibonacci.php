<?php
$a = readline('Enter the First Number: ');
$b = readline('Enter the Second Number: ');
$x = readline('Enter the number of values: ');

for ($i = 2; $i<=$x; $i++){
    $c = $a + $b;
    echo $c ." , ";

    $a = $b;
    $b = $c;
}


?>
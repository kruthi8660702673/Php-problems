<?php
$m = readline ('Enter the number of rows ');            // taking the input from the user
$n = readline ('Enter the number of coloumns ');

function twodarray($m, $n){
    $arr = [];                                          //array declaration
for($a = 0; $a < $m; $a++){                             //using for loop
    for($b = 0; $b < $n; $b++){
        $arr [$a][$b] = readline('Enter the element ['.$a.'][' .$b.']');        //taking the index value 
    }
}
for($a = 0; $a < $m; $a++){
    for($b = 0; $b < $n; $b++){
      echo $arr[$a][$b] . "   ";                    //printing the numbers
    }
    echo "\n";
}
}
twodarray($m, $n);                              
?>
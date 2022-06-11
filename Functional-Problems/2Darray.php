<?php
$m = readline ('Enter the number of rows ');
$n = readline ('Enter the number of coloumns ');

function twodarray($m, $n){
    $arr = [];
for($a = 0; $a < $m; $a++){
    for($b = 0; $b < $n; $b++){
        $arr [$a][$b] = readline('Enter the element ['.$a.'][' .$b.']');
    }
}
for($a = 0; $a < $m; $a++){
    for($b = 0; $b < $n; $b++){
      echo $arr[$a][$b] . "   ";
    }
    echo "\n";
}
}
twodarray($m, $n);
?>
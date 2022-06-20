<?php
$start_time = 0;
$end_time = 0;
$start =readline('start the time: ');

if ($start == 1){
$start_time = time();
echo "The stop watch is started \n ";
}
$stop =readline('stop the time: ');

if ($stop == 2){
    $end_time = time();
    echo "The stop watch is stopped:\n";
    }
    $elapsedTime = $end_time - $start_time;  
    echo $elapsedTime ;
?>
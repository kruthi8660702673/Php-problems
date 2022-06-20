<?php
$date1 = readline('Enter the date ');
$date2 = readline('Enter the date ');

$diff = strtotime($date2) - strtotime($date1);
$a = abs(round($diff/86400));
echo "the difference between the dates:" . $a . " days";
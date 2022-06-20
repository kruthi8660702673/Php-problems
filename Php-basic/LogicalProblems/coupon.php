<?php
$char ="123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$len =readline("Enter the length of the coupon: ");
$res = " ";
    for ($i=0; $i<$len; $i++){
        $random = str_shuffle($char);
        $res .= $random[0];
}

echo $res;
?>

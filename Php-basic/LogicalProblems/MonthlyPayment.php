<?php
$P = readline('Enter the P value : '); 
$R = readline('Enter the R value : '); 
$Y = readline('Enter the Y value : '); 

function monthly_Payment($P, $R, $Y){
$n = 12 * $Y ;
$r = ($R / (12 * 100));
$payment = (($P * $r)/(1-(pow((1+$r),(-$n)))));
echo "The monthly payment is $payment ";
}
monthly_Payment($P, $R, $Y)
?>
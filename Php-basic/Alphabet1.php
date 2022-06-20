<?php
$X = "/^[aeiouAEIOU]{1}$/";
$Y = "/^[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]{1}$/";
$Z = readline('enter the alphabet ');
if (preg_match($X, $Z)) {
echo "$Z is a vowel";
}
   else if (preg_match($Y, $Z)){
        echo "$Z is a consonent";
    }
else {
    echo "invalid";
}
?>
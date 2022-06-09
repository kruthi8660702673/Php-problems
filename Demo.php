<?php
$variable = "bridgelabz";
echo "Hello" . $variable . " ok google";
?>

<?php
$x = 5;
$y = 8;
$c;

function Test(){
    global $x, $y;
    $c = $x + $y;
    return $c;
}
$c=Test();
echo $c;
?>
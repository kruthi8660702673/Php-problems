<?php
$headcount = 0;
$tailcount = 0;

$coinFlipped = readline('Enter the number of times to flip the coin '); 

if (is_numeric($coinFlipped) && $coinFlipped > 0) {
    for ($i = 0; $i < $coinFlipped; $i++) {
        $result = rand(0, 10) / 10;
        if ($result >= 0.5) {
            $headcount++;                 
        } else {
            $tailcount++;                   
        }
    }
} else {
    echo ("Enter a valid input");
    exit(0);
}
$headPercentage = round($headcount * 100 / $coinFlipped, 2); 
$tailPercentage = round(100 - $headPercentage, 2); 

echo "tailPercentage = " . ($tailPercentage) . "\n";  
echo "headPercentage = " . ($headPercentage) . "\n";

?>
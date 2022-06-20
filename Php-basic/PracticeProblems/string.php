
<?php
$txt = readline ('Enter the word: ');
$stringarr = str_split($txt);
sort($stringarr);
$stringarr = implode($stringarr);
echo "$stringarr \n";
for($i=0;$i<strlen($stringarr);$i++){
$count=1;
	for($j=$i+1;$j<strlen($stringarr);$j++){
		if($stringarr[$i]==$stringarr[$j]){
			$count=$count+1;
		}
	}

echo "".$stringarr[$i]." occurs ".$count."  times\n";
}
?>
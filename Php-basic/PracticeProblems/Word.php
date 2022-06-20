<?php
$word = "hi hello how are you hi you";

$word =explode(" ",$word);
for($i=0; $i<sizeof($word); $i++){
    if($i>4){
        echo"kruthika ";
    }else{
        echo"$word[$i] ";
    }
}
?>
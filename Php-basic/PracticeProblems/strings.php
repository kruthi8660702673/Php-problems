<?php
$string = readline('Enter the word: ');

foreach (count_chars($string, 1) as $x => $occurences) {
    echo chr($x) . ' occurs ' . $occurences . ' times ';
    echo "\n";
}
?>
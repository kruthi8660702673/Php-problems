<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x \n";
  $x++;
}
?>

<?php
$x = 1;

do {
  echo "The number is: $x \n";
  $x++;
} while ($x <= 3);
?>

<?php
for ($x = 0; $x <= 6; $x++) {
    if ($x == 4){
        break;
    }
  echo "The number is: $x \n";
}
?>

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value \n";
}
?>
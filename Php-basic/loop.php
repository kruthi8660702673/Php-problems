  //While Loop
<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x \n";
  $x++;
}
?>

//Do While
<?php
$x = 1;

do {
  echo "The number is: $x \n";
  $x++;
} while ($x <= 3);
?>

//For Loop
<?php
for ($x = 0; $x <= 6; $x++) {
    if ($x == 4){
        break;
    }
  echo "The number is: $x \n";
}
?>

//Foreach 
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value \n";
}
?>
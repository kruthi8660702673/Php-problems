
<?php
$name = "candy";
function globe(){   
    global $name;   //global variable
    echo "The name is $name ";          //Printing Variable
}
function local(){
    $a = "apple";       //Local variable
    global $name;       //Global variable
    echo " . $name . \n";       //Printing variables
   echo "The fruite is $a ";
}
function goo(){
    Static $n = 1;      //Static variable
    echo $n;
    $n++;               //Incresing variable
    echo "The static number $n ";           //Printing Variable
}
goo();
globe();                //calling function
local();
?>
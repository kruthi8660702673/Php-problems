
<?php
$name = "candy";
function globe(){   
    global $name;   //global variable
    $x = "dog";     //Local Variable

    echo "The . $x . is $name ";          //Printing Variable
}

function goo(){
    Static $n = 1;      //Static variable
    echo $n;
    $n++;               //Incresing variable
    echo "The static number $n ";           //Printing Variable
}
goo();
globe();                

?>
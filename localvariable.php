<?php

$name = "Srujal";
function getName(){
    
 global $name;

    $name="somu";
   
    echo"local variable is:$name <br/>";
}
getName();

echo"global variable is: $name <br/>";

?>
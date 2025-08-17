<?php
function sum($a, $b){
    echo $a+$b;
    echo"<br/>";
}
sum(20,30);

sum(100,150);

sum(200,300);


function user($name , $color){
    echo"<h1 style='color:$color'>$name<h1/>";
}
user("Somu","green");
user("Somu","red");
user("Somu","black");
user("Somu","yellow");
user("Somu","pink");
?>
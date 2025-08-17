<?php
// $x=10;
// echo"before condition <br/>";

// if($x==20){
//     goto jump;
// }

// $name = "Somanath <br/>";
// echo $name;

// jump:
// echo"using goto statement code jump into jump file";

for($i=0; $i<=10; $i++){
    echo"$i <br/>";


    if($i==12){
        goto outside;
    }
}

outside:
echo"loop was break";

?>
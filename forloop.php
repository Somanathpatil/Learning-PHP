<?php
// $table=20;
// for($start=1; $start<=10; $start++){
//     echo $table*$start;
//     echo"<br/>";
//}

$user = 6;

for($i=1; $i<=10; $i++){
    echo $i;
    echo"<br/>";
    if($i==$user){
        break;
    }
}
?>

<?php
for($i=1; $i<=10; $i++){
    if($i==3 ||  $i==7){
        continue;
    }
    echo $i;
    echo"<br/>";
}
?>
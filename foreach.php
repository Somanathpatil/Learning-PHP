<?php
$users=["Somu","Sam","Srujal","Sai"];

foreach($users as $x){
    echo $x;
    echo"<br/>";
    if($x=="Srujal"){
        break;
    }
}
?>
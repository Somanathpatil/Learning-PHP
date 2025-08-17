<?php
$users=[
    [1,"Somanath","Shedbal","Somu292Gmail.com"],
    [2,"Srujal","Shedbal","Srujal123@gmail.com"],
    [3,"Abhi mali","Athani","Abhi232@gmail.com"],
];
// echo "<pre>";
// print_r($users);
// echo "<pre>";

for($i=0; $i<count($users); $i++){
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo"<br/>";
    }
}


?>
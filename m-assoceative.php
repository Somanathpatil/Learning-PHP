<?php
$users = [
    ["name"=>"Somanath","age"=>21,"city"=>"Shedbal"],
    ["name"=>"Srujal","age"=>23,"city"=>"Shedbal"],
    ["name"=>"Sagar","age"=>20,"city"=>"akkalkot"],
    ["name"=>"Abhi","age"=>22,"city"=>"Athani"],
];

echo "<table border=1>";
foreach($users as  $user){
    echo"<tr>";
    foreach($user as $key=> $item){
        echo"<td>";
        echo "$key is $item";
        echo"<br/>";
    echo"</td>";
    }
    echo"</tr>";
    echo"<br/>";  echo"<br/>"; 
}
echo"</table>";
?>
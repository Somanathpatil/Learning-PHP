<?php
$userdetails=[
    "name"=>"Somanath",
    "age"=>29,
    "city"=>"delhi",
    "email"=>"patil292@gmail.com",
    "state"=>"karnataka"
];

foreach($userdetails as $key=> $data){
    echo $key ." is ". $data;
    echo"<br/>";
}
?>
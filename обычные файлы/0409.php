<?php

$b = 10;

echo "<i>num</i> <br> is <span style='color:red;'>$b</span> <br>";

$arrayNew = array("yellow" => "banana", "red" => "strawberry", "green" => "cucumber");

echo " count of the array" . count($arrayNew) . "<br>";
print_r($arrayNew);

$title="chapter 2";


function ChangeColor($color){
    global $title;
    echo "<h1 style='color:".$color.";'>".$title."</h1>";
}

ChangeColor("red");

?>
<?php 
//include('functions.php');
//include_once('functions.php');

require('functions.php');

AddNumberColor(100, 1111);

$total = AddNumbers(1,2)+AddNumbers(100,1000);
echo"<br>".$total."<br>";

$number=5;
IncNumberByTen($number);
echo "<br>" . $number."<br>";
$number2 = 10;
IncNumberByTenRef($number2);
echo "<br>" . $number2."<br>";

$title = "Chapter 3";
ChangeColor("#EEFF33");



?>
<?php 
session_start();
echo "id=". session_id()."<br/>";
$_SESSION["num"]=100;
echo "Число из первого файла " .  $_SESSION["num"] ."<br/>";
?>

<a href="session2.php">Вперед</a>
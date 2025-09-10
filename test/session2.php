<?php 
session_start();

session_destroy();
echo "id=". session_id()."<br/>";
echo "Число из second файла " .  $_SESSION["num"] ."<br/>";
?>


<a href="session1.php">Вперед</a>
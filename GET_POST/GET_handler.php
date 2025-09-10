<?php
if(isset($_POST["submit"])){
    echo "Добро пожаловать, " . $_POST["username"] . "! Ваш пароль: " . $_POST["userpass"] . "<br/>";
} else{
    echo "Извините, данные не были получены<br/>";
}
?>
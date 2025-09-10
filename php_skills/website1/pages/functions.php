<?php
$users = 'pages/users.txt';
function register($name, $pass, $email){

    //валидация имени, пароля, email -> имя:пароль:почта
    $name=trim(htmlspecialchars($name));
    $pass=trim(htmlspecialchars($pass));
    $email=trim(htmlspecialchars($email));
    if($name == ''|| $email == '' || $pass == ''){
        echo "<h3><span style='color:red;'>Заполните все области</span></h3>";
        return false;
    }
    //уникальность логина
    global $users;
    $file=fopen($users, 'a+');
    while($line=fgets($file, 128)){
        $readname=substr($line, 0,strpos($line,':'));
        if($readname == $name){
            echo "<h3><span style='color:red'>Такой логин уже существует</span></h3>";
            return false;
        }
    }
    $line=$name.":".md5($pass).':'.$email."\r\n";
    fputs( $file, $line);
    fclose($file);
    return true;
    //добавление юзера
}

function login($name, $pass){
    global $users;
}


?>
<?php
    session_start();

    if(!isset($_COOKIE['name'])){
        setcookie('name',"J.o.h.n+S m i t h", time() +60*60*24, "", '', 1, true);
        setcookie('volume', '1', time()+ 60*60*24, '/','', 0, true);
    } else{
        $_COOKIE['volume'] = $_COOKIE['volume'] + 1;
        setcookie("volume", $_COOKIE["volume"]);
    }

    echo 'Name: ' . $_COOKIE['name'] .'.';
    echo 'Volume: '. $_COOKIE['volume'] .'!';

    session_id();

?>

<a href="cookie.php">Increase</a>
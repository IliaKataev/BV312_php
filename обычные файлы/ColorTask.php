<?php

$name=$_GET['name'];
$country=$_GET['country'];
$city=$_GET['city'];

/*
Написать PHP скрипт, создающий на странице три текстовых
поля. В эти поля пользователь должен заносить значения R, G
и B цветовых компонент (в интервале 0-255). На странице также
должна присутствовать кнопка Accept и тег span с каким-либо
текстом внутри.
После нажатия на кнопку Accept, надо создать цвет на основе
введенных пользователем значений R, G и B. Этим цветом залить
фон тега span, а текст залить дополнительным цветом
*/

echo"".$name."".$country."".$city."";

$r = $g = $b = 255;

$textColor = "#000000";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $r = isset($_POST['r']) ? intval($_POST['r']) : 255;
    $g = isset($_POST['g']) ? intval($_POST['g']) : 255;
    $b = isset($_POST['b']) ? intval($_POST['b']) : 255;

    $r = max(0, min(255, $r));
    $g = max(0, min(255, $g));
    $b = max(0, min(255, $b));

    $bgColor = sprintf("#%02x%02x%02x", $r, $g, $b);
    $brightness = (0.3*$r + 0.6*$g + 0.1*$b);
    $textColor = ($brightness > 128) ? "#000000" : "#FFFFFF";
} else {
    $bgColor = "#FFFFFF";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>RGB BG COLOR</title>
</head>
<body>
    <form method="post">
        <label>R: <input type="number" name="r" min="0" max="255" value="<?php echo $r; ?>"></label><br>
        <label>G: <input type="number" name="g" min="0" max="255" value="<?= $g ?>"></label><br>
        <label>B: <input type="number" name="b" min="0" max="255" value="<?= $b ?>"></label><br>
        <button type="submit"> Accept</button>
    </form>

    <p> 
        <span style="background-color: <?= $bgColor?>; color: <?= $textColor?>; padding:5px; border-radius:4px;"> 
            Текст в дополнительном цвете (<?= $bgColor ?>)
        </span>
    </p>
</body>
</html>
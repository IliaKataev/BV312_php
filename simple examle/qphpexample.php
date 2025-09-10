<?php
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
    <title>Результат</title>
</head>
<body>
    <p> 
        <span style="background-color: <?= $bgColor?>; color: <?= $textColor?>; padding:5px; border-radius:4px;"> 
            Текст в дополнительном цвете (<?= $bgColor ?>)
        </span>
    </p>

    <p>
        <a href="qhtmlexample.html">Назад к форме</a>
    </p>
</body>
</html>
<?php
 include "qphpexample.php"
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


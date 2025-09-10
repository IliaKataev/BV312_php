<h2>Галерея картинок</h2>
<form action="" method="post">
    <p>Выберите расширение для отображения: </p>
    <select name="ext">
        <?php 
         $path = 'images/';
         if($dir = opendir($path)){
            $ar = array();
            while(($file = readdir($dir)) !== false){
                $fullname = $path . $file;
                $pos = strpos($fullname,'.');
                $ext = substr($fullname, $pos + 1);
                $ext = strtolower($ext);
                if( !in_array($ext, $ar)){
                    $ar[] = $ext;
                    echo "<option>" . $ext ."</option>";
                }
            }
            closedir($dir);
         }
        ?>
    </select>
    <input type="submit" name="submit" value="Показать картинки" class="btn btn-primary">
</form>
<br/>
<?php 
    if(isset($_POST["submit"])){
        $ext = $_POST["ext"];
        $ar = glob($path."*.".$ext);
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'>";
        echo "<h3 class='panel-title'>Картинки из галереи</h3></div>";

        foreach($ar as $file){
            echo "<a href='". $file . "' target='_blank'>
            <img src='" . $file . "' height='100px' border='0' alt='pic' class='img-polaroid'/>
            </a>";
        }

        echo "</div>";
    }
<h3>Upload Форма</h3>
<?php 
if(!isset($_POST["uppbtn"])){
    ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="myfile">Выберите файл для "отгрузки"</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="3145728"/>
        <input type="file" class="form-control" name="myfile" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary" name="uppbtn">Отправить файл</button>
</form>
    <?php
} else{
    if(isset($_POST['uppbtn'])){
        //обработка ошибок
        if($_FILES['myfile']['error'] != 0){
            echo "<h3><span style='color:red';>Код ошибки загрузки".$_FILES['myfile']['error']."</span></h3>";
            exit();
        }
        //существует ли временная папка (существует ли он сам во временной папке)
        if(is_uploaded_file($_FILES["myfile"]["tmp_name"])){
            //загрузка
            move_uploaded_file($_FILES["myfile"]["tmp_name"],"./images/".$_FILES["myfile"]["name"]);
        }
        echo "<h3><span style='color:green';>Файл успешно загружен</span></h3>";
        
    }
}

?>
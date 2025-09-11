<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<header class="col-sm-12 col-md-12 col-lg-12">
<?php 
session_start();
if(isset($_SESSION["username"])){
    echo "<p>Добро пожаловать, <b>". $_SESSION['username']. "</b>!</p>";
    echo "<form method='post' style='display:inline'>
        <button type='submit' name='logoutbtn' class='btn btn-danger'>Выход</button>
    </form>";
} else{
    ?>
    <form action="" method="post" class="form-inline">
                <input type="text" name="login" placeholder="Login" class="form-control">
                <input type="password" name="pass" placeholder="Password" class="form-control">
                <button type="submit" name="logbtn" class="btn btn-success">Вход</button>
    </form>
    
<?php         
}
?>
        
    </header>
<body>
    <div class="container">
        <div class="row">
            <header class="col-sm-12 col-md-12 col-lg-12"></header>
        </div>
        <div class="row">
            <nav class="col-sm-12 col-md-12 col-lg-12">
                <?php include_once("pages/menu.php"); 
                      include_once("pages/functions.php");
                      
                      if(isset($_POST['logbtn'])){
                        login($_POST['login'],$_POST['pass']);
                      }
                      if(isset($_POST['logoutbtn'])){
                        logout();
                      }
                       ?>
                      
            </nav>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12">
                <?php 
                    if(isset($_GET["page"])){
                        $page = $_GET["page"];
                        if($page == 1)include_once("pages/home.php");
                        if($page == 3)include_once("pages/upload.php");
                        if($page == 2)include_once("pages/gallery.php");
                        if($page == 4)include_once("pages/registration.php");
                    }
                ?>
            </section>
            
        </div>
        

    </div>
    
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
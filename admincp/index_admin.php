<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
<a href="index_admin.php"><i class="fas fa-home">ADMIN</i></a>
    <?php
    include("modules/header_admin.php");
    include("config/config.php");
    ?>
    <div class="container">
        <div class="left">
            <p>Nội dung</p>
            <?php
            include("modules/menu_admin.php");
            ?>
        </div>
        
        <div class="right">     
        </div>
    </div>
    <?php
    include("modules/main_admin.php");
    include("modules/footer_admin.php");
    ?>
</body>

</html>
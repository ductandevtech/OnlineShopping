<?php
if(isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1){
    unset($_SESSION['dangky']);
}
?>

<div class="header">
    <div class="left_header">
     
    </div>
    <div class="right_header">

        <?php
        if(isset($_SESSION['dangky'])) {
    ?>
        <a href="index.php?dangxuat=1"><button class="btn btn_logout">Đăng xuất</button></a>
        <?php
        }else{
            ?>
        <a href="index.php?quanly=dangky"><button class="btn btn_register">Đăng ký</button></a>
        <a href="index.php?quanly=dangnhap"><button class="btn btn_login">Đăng nhập</button></a>

        <?php
        }
        ?>

        <?php
       if(isset($_SESSION['dangky']))
       {
        ?>
        <a href="index.php?quanly=giohang" class="cart-button"><i class="fas fa-shopping-cart"></i></a>
        <?php
       }else
       {
        ?>
        <a href="index.php?quanly=dangnhap" class="cart-button"><i class="fas fa-shopping-cart"></i> </a>
        <?php
       }
       ?>

    </div>
</div>
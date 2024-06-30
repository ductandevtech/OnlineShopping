
    <?php
   if(isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1){
      unset($_SESSION['dangnhap']);
      header('Location:login.php');
   }
?>
    <p><a href="index_admin.php?dangxuat=1"><button class="btn-dangxuat">Đăng xuất</button></a><?php if(isset($_SESSION['dangnhap'])){
     echo $_SESSION['dangnhap'];  }
      ?></p>
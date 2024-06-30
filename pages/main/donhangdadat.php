<?php 
if(!isset($_SESSION['id_khachhang']) && !isset($_SESSION['cart'])){
	header('Location:index.php');
} 
?>
<p class="notice">Chi tiết đơn hàng đã đặt</p>
<div class="container">
	<?php
  if(isset($_SESSION['id_khachhang'])){
  ?>

  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=lichsudonhang" >Lịch sử đơn hàng</a><span> </div>
  </div>
 	<?php
 	} 
 	?>
</div>


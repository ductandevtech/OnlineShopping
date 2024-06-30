<?php
	$id_khachhang = $_SESSION['id_khachhang'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky 
  AND tbl_cart.id_khachhang='$id_khachhang' ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<p class="notice">
    Cảm ơn bạn đã mua hàng!! Chúng tôi sẽ sớm liên hệ lại với bạn để giao hàng
</p>
<?php
  if(isset($_SESSION['id_khachhang'])){
  ?>

    <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a><span> </div>
    <?php
  } 
  ?>
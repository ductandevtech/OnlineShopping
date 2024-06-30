<p class="notice">Chi tiết sản phẩm</p>
<?php
$sql_chitiet="SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet=mysqli_fetch_array($query_chitiet)){

?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img width="50%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
    <div class="chitiet_sanpham">
        <h3>Tên sản phẩm:<?php echo $row_chitiet['tensanpham']?></h3>
        <p>Mã sản phẩm:<?php echo $row_chitiet['masp']?></p>
        <p>Giá sản phẩm:<?php echo number_format($row_chitiet['giasp'],0,',','.').'vnd'?></p>
        <p>Danh mục sản phẩm:<?php echo $row_chitiet['tendanhmuc']?></p>
        <p>Nội dung sản phẩm:<?php echo $row_chitiet['noidung']?></p>
        <?php
       if(isset($_SESSION['dangky'])){
        ?>
         <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
        <?php
       }else{
        ?>
        <p><a class="themgiohang" href="index.php?quanly=dangnhap">Thêm vào giỏ hàng</a></p>
        <?php
       }
       ?>
    </div>
    </form>
</div>
<?php
}
?>
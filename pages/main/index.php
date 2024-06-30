<?php

$sql_pro="SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY 
tbl_sanpham.id_sanpham DESC LIMIT 20";
$sql_pro= mysqli_query($mysqli, $sql_pro);
?>
<p class="notice">Trang chủ</p>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($sql_pro)) {
    ?>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                <li>
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>">
                    <p class="title_product">Tên sản phẩm:<?php echo $row['tensanpham']?></p>
                    <p class="price_product">Giá: <?php echo number_format ($row['giasp'],0,',','.').'vnd'?></p>
                    
                </li>
            </a>
<?php
    }
    ?>
        </ul>

     
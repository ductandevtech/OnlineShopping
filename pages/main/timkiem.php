<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
    $sql_pro = "SELECT * FROM tbl_sanpham 
                INNER JOIN tbl_danhmuc ON tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
                WHERE tbl_sanpham.tensanpham LIKE '%" . $tukhoa . "%' 
                OR tbl_danhmuc.tendanhmuc LIKE '%" . $tukhoa . "%'";
    $query_pro = mysqli_query($mysqli, $sql_pro);

    $num_rows = mysqli_num_rows($query_pro); 

    if ($num_rows > 0) { 
?>
        <p class="notice">Từ khóa tìm kiếm: <?php echo $_POST['tukhoa']; ?></p>
        <ul class="product_list">
            <?php
            while ($row = mysqli_fetch_array($query_pro)) {
            ?>
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']; ?>">
                    <li>
                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>">
                        <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham']; ?></p>
                        <p class="price_product">Giá: <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnd'; ?></p>
                    </li>
                </a>
            <?php
            }
            ?>
        </ul>
    <?php
    } else {
        echo "Không tìm thấy sản phẩm"; 
    }
}
?>

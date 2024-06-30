<?php
include("../../config/config.php");
$tenloaisp=$_POST['tendanhmuc'];


if(isset($_POST['themdanhmuc'])){
$sql_them="INSERT INTO tbl_danhmuc(tendanhmuc) VALUES ('".$tenloaisp."' )";
mysqli_query($mysqli, $sql_them);
header('Location:../../index_admin.php?action=quanlydanhmucsanpham&query=them');
} 
else if (isset($_POST['suadanhmuc'])){
    $sql_sua="UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
mysqli_query($mysqli, $sql_sua);
header('Location:../../index_admin.php?action=quanlydanhmucsanpham&query=them');
}
else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index_admin.php?action=quanlydanhmucsanpham&query=them');
}

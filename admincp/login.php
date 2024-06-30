<?php
session_start();
include('config/config.php');
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['username'];
    $matkhau=$_POST['password'];
    $sql ="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $_SESSION['dangnhap']=$taikhoan;
        header("Location:index_admin.php");
    }else{
        header("Location:login.php");

    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffc0cb; /* Màu hồng nhạt cho nền trang web */
            color: #fff; /* Màu chữ trắng */
            margin: 0;
            padding: 0;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            text-align: center;
            background-color: #fff; /* Màu trắng cho phần container */
            color: #000; /* Màu chữ đen */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ */
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            text-align: left; /* Căn trái cho label */
            display: block;
            margin-bottom: 5px;
            
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box; /* Đảm bảo padding không làm tăng kích thước thực của phần tử */
            border: 2px solid #ff69b4; /* Viền màu hồng cho label */
        }
        input[type="submit"] {
            background-color: #ff69b4; /* Màu hồng nhạt cho nút đăng nhập */
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px; /* Khoảng cách giữa input và nút đăng nhập */
        }
        input[type="submit"]:hover {
            background-color: #ff1493; /* Màu hồng đậm khi hover vào nút đăng nhập */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng nhập</h2>
        <form action="" method="POST">
            <label for="username">Tên đăng nhập</label>
            <input type="text" placeholder="Nhập tên đăng nhập" id="username" name="username" required>
            <label for="password">Mật khẩu</label>
            <input type="password" placeholder="Nhập mật khẩu" id="password" name="password" required>
            <input type="submit" name="dangnhap" value="Đăng nhập">
        </form>
    </div>
</body>
</html>

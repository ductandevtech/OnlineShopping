<?php
// session_start();
//include('config/config.php');
if(isset($_POST['dangnhap'])){
    $email=$_POST['email'];
    $matkhau=$_POST['password'];
    $sql ="SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $row_data=mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['id_khachhang']=$row_data['id_dangky'];
        header("Location:index.php?quanly=giohang");
    }else{
        echo "Mật khẩu hoặc tài khoản sai";
    }
}
?>

<div class="container-login-register">
    <h2>Đăng nhập</h2>
    <form action="" method="POST" id="loginForm">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="dangnhap" value="Đăng nhập">
    </form>
    <a  href="index.php?quanly=dangky" class="next_login">Đăng ký nếu chưa có tài khoản</a>
</div>
<style>
   

    .container-login-register {
  width: 350px;
  margin:50px auto;
  padding: 20px;
  background-color: #fce4ec; 
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

h2 {
  color: #ff4081; 
  text-align: center;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #ff4081; 
}


input[type="email"],
input[type="password"],
input[type="submit"] {
    width: calc(100% - 12px); 
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc; 
    border-radius: 4px;
    background-color: #fff;
}

input[type="email"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #ff4081; 
    box-shadow: 0 0 5px rgba(255, 64, 129, 0.5);
}

input[type="submit"] {
    background-color: #ff4081;
    color: #fff; 
    cursor: pointer;
    transition: background-color 0.3s ease; 
}

input[type="submit"]:hover {
    background-color: #d81b60; 
}
</style>



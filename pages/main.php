<div id="main">
  
    <div class="maincontent">
    <?php
            if(isset($_GET['quanly']))
                $tmp=$_GET['quanly'];
            else 
                $tmp='';
            if($tmp=='danhmucsanpham')
                include("main/danhmuc.php");
            else if($tmp=='giohang')
                include("main/giohang.php");
            else if($tmp=='tintuc')
                include("main/tintuc.php");
            else if($tmp=='lienhe')
            include("main/lienhe.php");
            else if($tmp=='sanpham')
            include("main/sanpham.php");
            else if($tmp=='dangky')
            include("main/dangky.php");
            else if($tmp=='thanhtoan')
            include("main/thanhtoan.php");
            else if($tmp=='dangnhap')
            include("main/dangnhap.php");
            else if($tmp=='timkiem')
            include("main/timkiem.php");
            else if($tmp=='camon')
            include("main/camon.php");
           
            elseif($tmp=='vanchuyen'){
                include("main/vanchuyen.php");
            }
            elseif($tmp=='thongtinthanhtoan'){
                include("main/thongtinthanhtoan.php");
            }
            elseif($tmp=='donhangdadat'){
                include("main/donhangdadat.php");
            }elseif($tmp=='lichsudonhang'){
                include("main/lichsudonhang.php");
            }elseif($tmp=='xemdonhang'){
                include("main/xemdonhang.php");
            }
            else include("main/index.php");
            ?>
    </div>
</div>
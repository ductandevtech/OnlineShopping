 <div class="main">
     <?php
        if (isset($_GET['action']) && $_GET['query']) {
            $tmp = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tmp = '';
            $query = '';
        }
        if ($tmp == 'quanlydanhmucsanpham' && $query == 'them') {
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        } else if ($tmp == 'quanlydanhmucsanpham' && $query == 'sua') {
            include("modules/quanlydanhmucsp/sua.php");
        } else if ($tmp == 'quanlysp' && $query == 'them') {
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
        } else if ($tmp == 'quanlysp' && $query == 'sua') {
            include("modules/quanlysp/sua.php");
        }else if ($tmp == 'quanlydonhang' && $query == 'lietke') {
            include("modules/quanlydonhang/lietke.php");
        }elseif($tmp=='donhang' && $query=='xemdonhang')
            include("modules/quanlydonhang/xemdonhang.php");

        ?>
 </div>
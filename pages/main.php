<div id="main">
    <div class="maincontent">
        <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam = '';
            }
            if($tam == 'danhmucsanpham'){
                include("../pages/main/danhmuc.php");
            }elseif($tam == 'giohang'){
                include("../pages/main/giohang.php"); 
            }elseif($tam == 'danhmucbaiviet'){
                include("../pages/main/danhmucbaiviet.php"); 
            }elseif($tam == 'baiviet'){
                include("../pages/main/baiviet.php"); 
            }elseif($tam == 'tintuc'){
                include("../pages/main/tintuc.php");
            }elseif($tam == 'lienhe'){
                include("../pages/main/lienhe.php");
            }elseif($tam == 'sanpham'){
                include("../pages/main/sanpham.php");
            }elseif($tam == 'dangky'){
                include("../pages/main/dangky.php");
            }elseif($tam == 'thanhtoan'){
                include("../pages/main/thanhtoan.php");
            }elseif($tam == 'dangnhap'){
                include("../pages/main/dangnhap.php");
            }elseif($tam == 'timkiem'){
                include("../pages/main/timkiem.php");
            }elseif($tam == 'camon'){
                include("../pages/main/camon.php");
            }
            elseif($tam == 'vanchuyen'){
                include("../pages/main/vanchuyen.php");
            }elseif($tam == 'thanhtoandh'){
                include("../pages/main/thongtinthanhtoan.php");
            }elseif($tam == 'lichsudh'){
                include("../pages/main/donhangdadat.php");
            }elseif($tam == 'huongdan'){
                include("../pages/main/huongdan.php");
            }elseif($tam == 'dieukhoan'){
                include("../pages/main/dieukhoan.php");
            }elseif($tam == 'gioithieu'){
                include("../pages/main/gioithieu.php");
            }elseif($tam=='lichsudonhang'){
                include("../pages/main/lichsudonhang.php");
            }elseif($tam=='xemdonhang'){
                include("../pages/main/xemdonhang.php");
            }
            else{
                include("../pages/main/index.php");
            }
                
        ?>
    </div>
</div>

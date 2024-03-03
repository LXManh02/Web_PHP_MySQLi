<div class="clear"></div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="main" >
    <?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query= $_GET['query'];
            }else{
                $tam = '';
            }
            if($tam == 'quanlydanhmucsanpham' && $query=='them'){
                include("modules/quanlydanhmucsp/them.php");
                include("modules/quanlydanhmucsp/lietke.php");
            }elseif($tam == 'quanlydanhmucsanpham' && $query=='sua'){
                include("modules/quanlydanhmucsp/sua.php");   
            }elseif($tam == 'quanlysp' && $query=='them'){
                include("modules/quanlysp/them.php");
                include("modules/quanlysp/lietke.php");        
            }elseif($tam == 'quanlysp' && $query=='sua'){
                include("modules/quanlysp/sua.php");
            }elseif($tam == 'quanlydonhang' && $query=='lietke'){
                include("modules/quanlydonhang/lietke.php");
            }elseif($tam == 'donhang' && $query=='xemdonhang'){
                include("modules/quanlydonhang/xemdonhang.php");
            }elseif($tam == 'quanlydanhmucbaiviet' && $query=='them'){
                include("modules/quanlydanhmucbaiviet/them.php");
                include("modules/quanlydanhmucbaiviet/lietke.php");
            }elseif($tam == 'quanlydanhmucbaiviet' && $query=='sua'){
                include("modules/quanlydanhmucbaiviet/sua.php");
            }elseif($tam == 'quanlybaiviet' && $query=='them'){
                include("modules/quanlybaiviet/them.php");
                include("modules/quanlybaiviet/lietke.php");
            }elseif($tam == 'quanlybaiviet' && $query=='sua'){
                include("modules/quanlybaiviet/sua.php");
            }elseif($tam == 'quanly' && $query=='capnhat'){
                include("modules/thongtin/quanly.php");
            }else{
                include("modules/dashbroad.php");
            }
    ?>

</div>
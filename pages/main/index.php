
<img class="anhnen" src="../images/anhnen2.png" alt="">
<style>
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
.card-car {
    background-color: #000800;
    color: #ffffff;
    display: inline-block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 16px;
    margin: 0px 0px;
    max-width: 315px;
    min-width: 230px;
    overflow: hidden;
    position: relative;
    text-align: left;
    width: 100%;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}

.card-car * {

    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.3s ease;
    transition: all 0.5s ease;
}

.card-car *:before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.card-car img {
    max-width: 100%;
    backface-visibility: hidden;
    vertical-align: top;
}

.card-car i {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 4em;
    z-index: 1;
    opacity: 0;
}

.card-car a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
}

.card-car:hover img,
.card-car.hover img {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    opacity: 0.5;
    background-color: #008000;
}

.card-car:hover i,
.card-car.hover i {
    opacity: 0.7;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
.backtop {
    display: none; /* Ẩn nút mặc định */
    position: fixed;
    bottom: 40px;
    right: 20px;
    background-color: #9e9e9e;
    color: #fff;
    padding: 15px;
    border-radius: 40px;
    cursor: pointer;
    z-index: 100;
        }
.backtop:hover{
    color: green;
}
</style>
<?php
    $sql_pro = "SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 10";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<div style="margin-top: 50px;">
<h1 style="text-align: center;font-weight: bold;">Sản Phẩm Mới </h1>
<ul class="product_list" style="border: 1px solid #000;">
    <?php
    
                       while ($row_pro = mysqli_fetch_array($query_pro)){
                        if($row_pro['tinhtrang']==1){
                    ?>
    <li class="container">
        <a class="card-car" href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
            <i class="bi bi-eye-fill"></i>
        </a>
            <p style="text-transform:uppercase;font-size:14px;color: #9e9e9e;"><?php echo $row_pro['tendanhmuc'] ?></p>
            <p class="title_product"><?php echo $row_pro['tensp'] ?></p>
            <p class="price_product"><?php echo number_format($row_pro['giasp'],0,',','.').'VNĐ' ?></p>
            <form method="POST" action="main/themgiohang.php?idsanpham=<?php echo  $row_pro['id_sanpham'] ?>">
            <div class="overlay"><button name="themgiohang" class="text" style="border:none; background-color:transparent">Mua Ngay</button></div>
            </form>
    </li>
    <?php }else ?>
    <?php
                    }
                    ?>
</ul>
</div>
<?php
    $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc  WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND tendanhmuc = 'Tai Nghe' ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 5" ;
    $query_pro = mysqli_query($mysqli, $sql_pro);
    ?>
<div style="clear:both"></div>
<div style="margin-top: 80px;">
    <h1 style="text-align:center;font-weight: bold;">Tai nghe</h1>
    <ul class="product_list" style="border: 1px solid #000;">
        <?php
                       while ($row_pro = mysqli_fetch_array($query_pro)){
                    ?>
        <li>
        <a class="card-car" href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
            <i class="bi bi-eye-fill"></i>
        </a>
        <a style="padding: 10px 10px;" href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <p style="text-transform:uppercase;font-size:14px;color: #9e9e9e;"><?php echo $row_pro['tendanhmuc'] ?></p>
            <p class="title_product"><?php echo $row_pro['tensp'] ?></p>
            <p class="price_product"><?php echo number_format($row_pro['giasp'],0,',','.').'VNĐ' ?></p>
        </a>
    </li>
        <?php
                    }
                    ?>
    </ul>
    </div>
    <div style="clear:both"></div>
    <div class="backtop">
    <i class="bi bi-caret-up-fill"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()){
                $(".backtop").fadeIn();
            } else {
                $(".backtop").fadeOut();
            }
        });
        $(".backtop").click(function(){
            $('html, body').animate({
                scrollTop: 0
            }, 2);
        });
    });
</script>

<script>
$(".hover").mouseleave(
    function() {
        $(this).removeClass("hover");
    }
);
$(".active").mouseleave(
    function() {
        $(this).removeClass("active");
    }
);
</script>
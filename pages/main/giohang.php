
<h2>Giỏ hàng :<?php
    if(isset($_SESSION['dangky'])){
        echo '<span style="color:grey">'.$_SESSION['dangky'].'</span>';
    }
?></h2> 
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thanhtoandh" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=lichsudh" >Lịch sử đơn hàng</a><span> </div>
    
  </div>
  <!-- end Responsive Arrow Progress Bar -->
  <div class="nav clearfix">
    <!-- <a href="index.php?quanly=giohang" class="prev">Trước</a> | -->
    <a href="index.php?quanly=vanchuyen" class="next pull-right" style="text-decoration: none;">Tiếp theo</a>
  </div>
</div>


<?php
    if(isset($_SESSION["cart"])){
    
    }
?>
<div style="color:green">
<table class="table table-hover" style="text-align: center;width:70%; margin-left:117px; ">
    <tr >
        <th style="font-size: 25px;">GIỎ HÀNG</th>
        <th></th>
        <th style="color: grey;" >Số lượng</th>
        <th style="color: grey;">Giá</th>
        <th style="color: grey;">Thành tiền</th>
        <th></th>

    </tr>
    <?php
  if(isset($_SESSION['cart'])) {
    $tongtien=0; 
    $i=0;
    foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['soluong']* $cart_item['giasp'];
        $tongtien += $thanhtien;
        $i++;
  ?>
    <tr>
        
        <td><img src="../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="100px"
                height="70px"></td>
                <td><?php echo $cart_item['tensp'] ?></td>
        <td>  
            <a  href="main/themgiohang.php?tru=<?php echo $cart_item['id']?>" ><i class="bi bi-dash"></i></a>
            <?php echo $cart_item['soluong'] ?>
            <a  href="main/themgiohang.php?cong=<?php echo $cart_item['id']?>" ><i class="bi bi-plus"></i></a>
        </td>
        <td><?php echo number_format($cart_item['giasp'],0,',','.').'VNĐ' ?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
        <td><a href="main/themgiohang.php?xoa=<?php echo $cart_item['id']?>"><i class="text-danger bi bi-x-circle"></i></a></td>
    </tr>
    <?php 
    }
    ?>
    <tr >
        <td colspan="8" >
            <p style="text-transform: uppercase;font-weight: bold;">Tổng tiền:<?php echo number_format($tongtien,0,',','.').'VNĐ' ?></p>
            <a href="main/themgiohang.php?xoatatca=1" style="float:right;text-decoration: none;"> Xóa tất cả</a>
            <!-- <div style="clear: both;"></div> -->
            <?php
                if(isset($_SESSION['dangky'])){
            ?>
                <p><a href="index.php?quanly=vanchuyen" style="text-decoration: none;">Hình thức vận chuyển</a></p>
            <?php
                }else{
            ?>
            <p><a href="index.php?quanly=dangky" style="text-decoration: none;">Đăng ký Đặt hàng</a></p>
            <?php 
                }
            ?>           
        </td>
    </tr>
    <?php
  }else{
  ?>
    <tr>
        <td colspan="8">
            <p>Giỏ hàng trống</p>
        </td>
    </tr>
    <?php
  } 
  ?>
</table>
</div>
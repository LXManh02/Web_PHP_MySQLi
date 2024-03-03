<h2>Thông tin Thanh toán</h2>
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <?php
  if(isset($_SESSION['id_khachhang'])){
  ?>
  <div class="arrow-steps clearfix">
    <div class="step done "> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step  done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=thanhtoandh" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=lichsudh" >Lịch sử đơn hàng</a><span> </div>
   
  </div>
  <!-- end Responsive Arrow Progress Bar -->
  <div class="nav clearfix">
    <a href="index.php?quanly=vanchuyen" class="prev" style="text-decoration: none;">Trước</a> |
    <a href="index.php?quanly=lichsudh" class="next pull-right" style="text-decoration: none;">Tiếp theo</a>
  </div>
  <?php
  } 
  ?>
  <form action="../pages/main/xulythanhtoan.php" method="POST">
  <div class="row">
  <?php
                $id_dangky=$_SESSION['id_khachhang'];
                $sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_vanchuyen WHERE id_dangky='$id_dangky' LIMIT 1");
                $count = mysqli_num_rows($sql_get_vanchuyen);
                if($count>0){
                $row_get_vanchuyen=mysqli_fetch_array($sql_get_vanchuyen);
                $name=$row_get_vanchuyen['ten'];
                $phone=$row_get_vanchuyen['phone'];
                $address=$row_get_vanchuyen['diachi'];
                $note=$row_get_vanchuyen['ghichu'];
            }else{
            $name="";
            $phone="";
            $address="";
            $note="";
            }
            ?>
    <div class="col-md-8">
      <h4>Thông tin người nhận hàng</h4>
      <ul>
  			<li>Họ và tên người nhận : <b><?php echo $name ?></b></li>
  			<li>Số điện thoại : <b><?php echo $phone ?></b></li>
  			<li>Địa chỉ : <b><?php echo $address ?></b></li>
  			<li>Ghi chú : <b><?php echo $note ?></b></li>
  		</ul>
      <h5>Giỏ hàng của bạn</h5>
      
<table class="table "  style="text-align:center; width: 100%;">
    <tr>
        <th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
    </tr>
    <?php
  if(isset($_SESSION['cart'])) {
    $i=0;  
    $tongtien=0; 
    foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['soluong']* $cart_item['giasp'];
        $tongtien += $thanhtien;
        $i++;
  ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cart_item['masp'] ?></td>
        <td><?php echo $cart_item['tensp'] ?></td>
        <td><img src="../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="100px"
                height="70px"></td>
        <td>
            <?php echo $cart_item['soluong'] ?>
        </td>
        <td><?php echo number_format($cart_item['giasp'],0,',','.').'VNĐ' ?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>

    </tr>
    <?php 
    }
    ?>
    <tr>
        <td colspan="8">
            <p>Tổng tiền:<?php echo number_format($tongtien,0,',','.').'VNĐ' ?></p>
            <div style="clear: both;"></div>
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
    <div class="col-md-4"><h4>Phương thức thanh toán</h4>
          <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" value="tienmat"  id="flexRadioDefault1">
        <img src="../images/cash.png" height="40px" width="40px" alt="">
        <label class="form-check-label" for="flexRadioDefault1">
          Thanh toán tiền mặt(SHIP COD)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" value="chuyenkhoan"  id="flexRadioDefault1">
        <img src="../images/chuyenkhoan.png" height="40px" width="40px" alt="">
        <label class="form-check-label" for="flexRadioDefault1">
          Chuyển Khoản
        </label>
      </div>
      <!-- <div class="form-check">
        <input class="form-check-input" type="radio" value="vnpay" name="payment" id="flexRadioDefault1">
        <img src="../images/vnpay.png" height="40px" width="40px" alt="">
        <label class="form-check-label" for="flexRadioDefault1">
          VNPay
        </label>
      </div> -->
      <button class="btn btn-success" name="redirect">Thanh toán ngay</button>
      
      <p></p>
  </form>
  <?php
		$tongtien = 0;
		foreach($_SESSION['cart'] as $key => $value){
			$thanhtien = $value['soluong']*$value['giasp'];
  			$tongtien+=$thanhtien;
		} 
		$tongtien_vnd = $tongtien;
    $tongtien_usd = round($tongtien/22667);
		?> 
  <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="main/xulythanhtoanmomo.php">   
      <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">          	
			<input type="submit" name="momo" value="QR CODE MOMO" class="btn btn-danger">

		</form>

		<p></p>
		
		<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="main/xulythanhtoanmomo_atm.php"> 
    <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
		<input type="submit" name="momo" value="MOMO BANKING" class="btn btn-danger">

		</form>
    </div>
    </div>
</div>

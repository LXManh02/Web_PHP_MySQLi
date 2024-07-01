<?php 
if(!isset($_SESSION['id_khachhang']) && !isset($_SESSION['cart'])){
	header('Location:index.php');
} 
?>
<h2>Chi tiết đơn hàng đã đặt</h2>
<div class="container">
	<?php
  if(isset($_SESSION['id_khachhang'])){
  ?>
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=thanhtoandh" >Thanh toán</a><span> </div>
    <div class="step current"> <span><a href="index.php?quanly=lichsudh" >Lịch sử đơn hàng</a><span> </div>
  </div>
 <?php }?>
<?php
if(isset($_GET['congthanhtoan'])){
	$congthanhtoan = $_GET['congthanhtoan'];
	$code_cart = $_GET['code_cart'];
	echo '<h4>Chi tiết thanh toán qua cổng thanh toán : '.$congthanhtoan.'</h4>';
	if($congthanhtoan=='momo'){
		$sql_momo = mysqli_query($mysqli,"SELECT * FROM tbl_momo WHERE code_cart='$code_cart' LIMIT 1");
		$row_momo = mysqli_fetch_array($sql_momo);
	?>

	<table class="table">
    <thead>
      <tr>
        <th>Partner_code</th>
        <th>Order_id</th>
        <th>Amount</th>
        <th>Order_info</th>
        <th>Order_Type</th>
        <th>Trans_id</th>
        <th>Pay_type</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row_momo['partner_code'] ?></td>
        <td><?php echo $row_momo['order_id'] ?></td>
        <td><?php echo $row_momo['amount'] ?></td>
        <td><?php echo $row_momo['order_info'] ?></td>
        <td><?php echo $row_momo['order_type'] ?></td>
        <td><?php echo $row_momo['trans_id'] ?></td>
        <td><?php echo $row_momo['pay_type'] ?></td>
      </tr>
     
    </tbody>
  	</table>
	<?php
	}elseif($congthanhtoan=='vnpay'){ 
		$sql_vnpay = mysqli_query($mysqli,"SELECT * FROM tbl_vnpay WHERE code_cart='$code_cart' LIMIT 1");
		$row_vnpay = mysqli_fetch_array($sql_vnpay);
	?>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>vnp_amount</th>
        <th>vnp_bankcode</th>
        <th>vnp_banktranno</th>
        <th>vnp_orderinfo</th>
        <th>vnp_paydate</th>
        <th>vnp_tmncode</th>
        <th>vnp_transactionno</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row_vnpay['vnp_amount'] ?></td>
        <td><?php echo $row_vnpay['vnp_bankCode'] ?></td>
        <td><?php echo $row_vnpay['vnp_banktranno'] ?></td>
        <td><?php echo $row_vnpay['vnp_orderinfo'] ?></td>
        <td><?php echo $row_vnpay['vnp_paydate'] ?></td>
        <td><?php echo $row_vnpay['vnp_tmncode'] ?></td>
        <td><?php echo $row_vnpay['vnp_transactionno'] ?></td>
      </tr>
     
    </tbody>
  	</table>

<?php
	}
} 
?>
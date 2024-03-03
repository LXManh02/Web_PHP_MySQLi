<?php
    $code=$_GET['code'];
    $sql_lietke_dh ="SELECT * FROM tbl_cart_details,tbl_sanpham 
    WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham
    AND tbl_cart_details.code_cart ='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table class="table table-bordered table-striped ">
    <tr>
        <th>STT</th>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Đơn giá</th>
        <th scope="col">Thành tiền</th>

    </tr>
  <?php
  $i=0;
  $tongtien=0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $thanhtien=$row['giasp']*$row['soluongmua'];
    $tongtien += $thanhtien;
  ?>
    <tr>
        <td><?php echo $i ?></td>  
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td><?php echo number_format($row['giasp'],0,',','.').'VNĐ' ?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
        
    </tr>
    <?php
  }
  ?>
  <td colspan="6">
    <p>Tổng tiền:<?php echo number_format($tongtien,0,',','.').'VNĐ'  ?></p>
  </td>
</table> 
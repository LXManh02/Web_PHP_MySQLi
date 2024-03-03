<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky 
    ORDER BY id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table class="table table-bordered table-striped ">
    <tr>
        <th>STT</th>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Ngày đặt hàng</th>
        <th scope="col">Tình trạng</th>
        <th scope="col">Quản lý</th>
        <th scope="col">In ĐH</th>
    </tr>

    <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
  ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tenkhachhang'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['dienthoai'] ?></td>
        <td><?php echo $row['cart_date'] ?></td>
        <td>
            <?php if($row['cart_status']==1){
              echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
            }else{
              echo 'Đã xem';
            }
            ?>
        </td>
        <td>
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
        </td>
        <td>
      <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>">In Đơn hàng</a> 
    </td>
    </tr>
    <?php
  }
  ?>
</table>
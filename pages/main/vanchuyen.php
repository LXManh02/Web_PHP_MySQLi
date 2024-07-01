<h2>Thông tin vận chuyển</h2>
    <div class="container">
        <!-- Responsive Arrow Progress Bar -->
        <div class="arrow-steps clearfix">
            <div class="step done"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
            <div class="step current "> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
            <div class="step"> <span><a href="index.php?quanly=thanhtoandh">Thanh toán</a><span> </div>
            <div class="step"> <span><a href="index.php?quanly=lichsudh">Lịch sử đơn hàng</a><span> </div>
        </div>
        <!-- end Responsive Arrow Progress Bar -->
        <div class="nav clearfix">
            <a href="index.php?quanly=giohang" style="text-decoration: none;" class="prev">Trước</a> |
            <a href="index.php?quanly=thanhtoandh" style="text-decoration: none;" class="next pull-right">Tiếp theo</a>
        </div>
    </div>
    <?php
  if(isset($_POST['themvanchuyen'])){
    $name=$_POST['ten'];
    $phone=$_POST['phone'];
    $address=$_POST['diachi'];
    $note=$_POST['ghichu'];
    $id_dangky=$_SESSION['id_khachhang'];
    $sql_vanchuyen=mysqli_query($mysqli,"INSERT INTO tbl_vanchuyen(ten,phone,diachi,ghichu,id_dangky) 
    VALUE('".$name."','".$phone."','".$address."','".$note."','".$id_dangky."')");
    if($sql_vanchuyen){
      echo '<script>alert("Thêm thành công")</script>';
    }
  }elseif(isset($_POST['capnhatvanchuyen'])){
    $name = $_POST['ten'];
    $phone = $_POST['phone'];
    $address = $_POST['diachi'];
    $note = $_POST['ghichu'];
    $id_dangky = $_SESSION['id_khachhang'];
    $sql_update_vanchuyen = mysqli_query($mysqli,"UPDATE tbl_vanchuyen SET ten='$name',phone='$phone',diachi='$address',ghichu='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
    if($sql_update_vanchuyen){
        echo '<script>alert("Cập nhật vận chuyển thành công")</script>';
    }
}
?>
    
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
            <div>
            <!-- gio hang -->
<!-- <?php
    if(isset($_SESSION['dangky'])){
        echo '<span style="color:grey">'.$_SESSION['dangky'].'</span>';
        echo $_SESSION['id_khachhang'];
    }
?> -->
</p>
<?php
    if(isset($_SESSION["cart"])){
    
    }
?>
<div style="display: flex;" >
<table class="table table-hover"  style="text-align:center; width: 60%;margin-left: 110px; height:100px" >
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
            <?php
                if(isset($_SESSION['dangky'])){
            ?>
            <p><a href="index.php?quanly=thanhtoandh" style="text-decoration: none;">Hình thức thanh toán</a></p>
            <?php
                }else{
            ?>
            <p><a href="index.php?quanly=dangky" style="text-decoration: none;">Đăng kí để đặt hàng</a></p>
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
    <div style="margin-left:80px ; width: 300px;">
        <div >
        <div >
            <div class="row d-flex  h-100">
                <div class="col-9 col-md-7 col-lg-12 col-xl-12" >
                    <h2>THÔNG TIN </h2>
                    <form action="" method="POST">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example3cg">Họ và Tên</label>
                            <input type="text" name="ten" class="form-control" value="<?php echo $name ?>" placeholder="Nhập họ và tên"
                                required />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example3cg">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>"placeholder="Nhập SĐT" required />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example3cg">Địa Chỉ</label>
                            <input type="text" name="diachi" class="form-control"value="<?php echo $address ?>" placeholder="Nhập địa chỉ"
                                required />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example3cg">Ghi chú</label>
                            <input type="text" name="ghichu" class="form-control"value="<?php echo $note ?>" placeholder="Ghi chú" required />
                        </div>
                        <?php
                            if($name=="" && $phone==""){
                        ?>
                        <button type="submit" name="themvanchuyen" class="btn btn-primary"style="margin-bottom: 10px">Thêm</button>
                        <?php 
                            }elseif($name!="" && $phone!=""){
                        ?>
                        <button type="submit" name="capnhatvanchuyen" class="btn btn-primary"style="margin-bottom: 10px" >Cập Nhật</button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


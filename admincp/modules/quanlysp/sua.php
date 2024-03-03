<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]'";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<?php
 while ($row = mysqli_fetch_array($query_sua_sp)){
?>
<table  class="table table-bordered ">
  <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
  <thead>
    <tr>
      <td>Mã Sản Phẩm</td>
      <td><input type="text" name="masp" value="<?php echo $row['masp'] ?>" required></td>
    </tr>
    <tr>
      <td>Tên Sản Phẩm</td>
      <td><input type="text" name="tensp" value="<?php echo $row['tensp'] ?>" required></td>
    </tr>
    <tr>
      <td>Giá Sản Phẩm </td>
      <td><input type="text" name="giasp" value="<?php echo $row['giasp'] ?>" required></td>
    </tr>
    <tr>
      <td>Số Lượng</td>
      <td><input type="number" name="soluong" value="<?php echo $row['soluong'] ?>" required></td>
    </tr>
    <tr>
      <td>Hình Ảnh</td>
      <td>  
        <input type="file" name="hinhanh" >
        <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
      </td>
    </tr>
    <tr>
      <td>Tóm Tắt</td>
      <td><textarea rows="4" name="tomtat"  required><?php echo $row['tomtat'] ?></textarea></td>
    </tr>
    <tr>
      <td>Nội Dung </td>
      <td><textarea rows="4" name="noidung"  required><?php  echo $row['noidung'] ?></textarea></td>
    </tr>
    <tr>
        <td>Danh mục sản phẩm</td>
        <td>
          <select name="danhmuc">
            <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
              if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
            ?>
              <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
            <?php
              }else{
              ?>
              <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
            <?php
            }
          }
            ?>
          </select>
        </td>
      </tr>
    <tr>
      <td>Tình trạng </td>
      <td>
      <select name="tinhtrang">
        <?php
        if ($row['tinhtrang']==1){
         ?>
        <option value="1" selected>Kích hoạt</option>
        <option value="0">Ẩn</option>
        <?php 
        }else{
        ?>
        <option value="1" >Kích hoạt</option>
        <option value="0"selected>Ẩn</option>
        <?php 
        }
        
        ?>
      </select>
      </td>
    </tr>
      <td colspan="11">       
        <button name="suasanpham" class="btn btn-primary">Cập Nhật</button>
      </td> 
  </form>
</table>
<?php 
 }
 ?>
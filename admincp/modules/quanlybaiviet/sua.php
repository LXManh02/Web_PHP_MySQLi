<?php
    $sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[id]'";
    $query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<?php
 while ($row = mysqli_fetch_array($query_sua_bv)){
?>
<table  class="table table-bordered ">
  <form method="POST" action="modules/quanlybaiviet/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
  <thead>
    <tr>
      <td>Tên Bài Viết</td>
      <td><input type="text" name="tenbaiviet" value="<?php echo $row['tenbaiviet'] ?>" required></td>
    </tr>
    <tr>
      <td>Hình Ảnh</td>
      <td>  
        <input type="file" name="hinhanh" >
        <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>">
      </td>
    </tr>
    <tr>
      <td>Tóm Tắt</td>
      <td><textarea rows="2" name="tomtat"  required><?php echo $row['tomtat'] ?></textarea></td>
    </tr>
    <tr>
      <td>Nội Dung </td>
      <td><textarea rows="2" name="noidung"  required><?php  echo $row['noidung'] ?></textarea></td>
    </tr>
    <tr>
        <td>Danh mục bài viết</td>
        <td>
          <select name="danhmuc">
            <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
              if($row_danhmuc['id_baiviet']==$row['id_baiviet']){
            ?>
              <option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
            <?php
              }else{
              ?>
              <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
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
        <button name="suabaiviet" class="btn btn-primary">Cập Nhật</button>
      </td> 
  </form>
</table>
<?php 
 }
 ?>
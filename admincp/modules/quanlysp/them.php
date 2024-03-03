<table class="table table-bordered " style="width: 40%;">
  <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
  <thead style="float:left">
      <tr>
        <td>Mã Sản Phẩm</td>
        <td><input type="text" name="masp" required></td>
      </tr>
      <tr>
        <td>Tên Sản Phẩm</td>
        <td><input type="text" name="tensp" required></td>
      </tr>
      <tr>
        <td>Giá Sản Phẩm </td>
        <td><input type="text" name="giasp" required></td>
      </tr>
      <tr>
        <td>Số Lượng</td>
        <td><input type="number" name="soluong" required></td>
      </tr>
      <tr>
        <td>Hình Ảnh</td>
        <td><input type="file" name="hinhanh" required></td>
      </tr>
      <tr>
        <td>Tóm Tắt</td>
        <td><textarea rows="4" name="tomtat" ></textarea></td>
      </tr>
      <tr>
        <td>Nội Dung </td>
        <td><textarea rows="4" name="noidung" ></textarea></td>
      </tr>
      <tr>
        <td>Danh mục sản phẩm</td>
        <td>
          <select name="danhmuc">
            <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
              <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
            <?php
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Tình trạng </td>
        <td>
          <select name="tinhtrang">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>
          </select>
        </td>
      </tr>
      <td colspan="11">
        <button name="themsanpham" class="btn btn-primary">Thêm Mới</button>
      </td>
  </form>
</table>

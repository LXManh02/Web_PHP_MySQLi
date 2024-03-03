
<table class="table table-bordered " style="width: 40%;">
    <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
        <thead style="float: left;">
            <tr>
                <td>Tên Bài Viết</td>
                <td><input type="text" name="tenbaiviet" required></td>
            </tr>
            <tr>
                <td>Hình Ảnh</td>
                <td><input type="file" name="hinhanh" required></td>
            </tr>
            <tr>
                <td>Nội Dung </td>
                <td><textarea rows="2" name="noidung" required></textarea></td>
            </tr>
            <tr>
                <td>Tóm Tắt</td>
                <td><textarea rows="2" name="tomtat" required></textarea></td>
            </tr>
            <tr>
                <td>Danh mục bài viết</td>
                <td>
                    <select name="danhmuc">
                        <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
                        <option value="<?php echo $row_danhmuc['id_baiviet'] ?>">
                            <?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
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
                <button name="thembaiviet" class="btn btn-primary">Thêm Mới</button>
            </td>
    </form>
</table>
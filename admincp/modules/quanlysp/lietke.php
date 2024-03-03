<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<style>
  tr.anh td img{
    height:100px ;
    width: 100%;

  }
</style>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th scope="col">Mã Sản Phẩm</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Giá sản phẩm</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Tóm tắt</th>
        <th scope="col">Tình trạng</th>
        <th scope="col">Quản lý</th>
    </tr>

  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
    <tr class="anh">
        <td><?php echo $i ?></td>  
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php if ($row['tinhtrang']==1 ){
          echo 'Kích hoạt';
        }else {
          echo 'Ẩn';
        }
        ?></td>
        <td>
            <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="bi bi-pencil-square"></i></a>  | 
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="bi bi-trash3-fill text-danger"></i></a>
            
        </td>
    </tr>
    <?php
  }
  ?>
</table>
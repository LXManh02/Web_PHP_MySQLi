<?php
    $sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet 
    ORDER BY tbl_baiviet.id DESC";
    $query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>
<style>
  tr.anh td img{
    height:100px ;
    width: 100%;

  }
</style>
<table class="table table-bordered table-striped ">
    <tr>
        <th>STT</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Tóm tắt</th>
        <th scope="col">Tình trạng</th>
        <th scope="col">Quản lý</th>
    </tr>

  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_bv)){
    $i++;
  ?>
    <tr class="anh">
        <td><?php echo $i ?></td>  
        <td><?php echo $row['tenbaiviet'] ?></td>
        <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>"></td>
        <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php if ($row['tinhtrang']==1 ){
          echo 'Kích hoạt';
        }else {
          echo 'Ẩn';
        }
        ?></td>
        <td>
            <a href="?action=quanlybaiviet&query=sua&id=<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></a> |
            <a href="modules/quanlybaiviet/xuly.php?id=<?php echo $row['id'] ?>"><i class="bi bi-trash3-fill text-danger "></i></a> 
            
        </td>
    </tr>
    <?php
  }
  ?>
</table>
<?php
    $sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>
<table class="table table-bordered table-striped " style="width: 100%;">
    <tr>
        <th>ID</th>
        <th scope="col">Tên Danh Mục</th>
        <th scope="col">Quản lý</th>
    </tr>

  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
    $i++;
  ?>
    <tr>
        <td><?php echo $i ?></td>  
        <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
        <td>
            <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>"><i class="bi bi-pencil-square"></i></a> | 
            <a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>"><i class="bi bi-trash3-fill text-danger "></i></a> 
            
        </td>
    </tr>
    <?php
  }
  ?>
</table>
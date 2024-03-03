<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<table class="table ">
    <tr>
        <th>STT</th>
        <th>Tên Danh Mục</th>
        <th>Quản lý</th>
        <th></th>
    </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
  ?>
    <tr>
        <td><?php echo $i ?></td>  
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
        <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="bi bi-pencil-square"></i></a> 
        </td>
        <td>
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="bi bi-trash3-fill text-danger"></i></a> 

        </td>
    </tr>
    <?php
  }
  ?>
</table>
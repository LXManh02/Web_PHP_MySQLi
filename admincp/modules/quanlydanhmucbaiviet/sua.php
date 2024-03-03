<?php
    $sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet 
    WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
    $query_sua_danhmucbv= mysqli_query($mysqli,$sql_sua_danhmucbv);
?>
<table class="table table-bordered" style="width:30%">
  <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua_danhmucbv)){
    ?>
  <tr>
        <td>Tên Danh Mục</td>
        <td><input type="text" value="<?php echo $dong['tendanhmuc_baiviet']?>"name="tendanhmucbaiviet" required></td>
      </tr>
      <tr>
        <td>Thứ Tự</td>
        <td><input type="text" value="<?php echo $dong['thutu'] ?>"name="thutu" required"></td>
      </tr>
    
      <td colspan="11">       
        <button name="suadanhmucbaiviet" class="btn btn-primary">Sửa</button>
      </td> 
      <?php
    }
    ?>
  </form>
</table>

<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]'";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<table class="table table-bordered" style="width: 30%;" >
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua_danhmucsp)){
    ?>
  <tr>
        <td>Tên Danh Mục</td>
        <td><input type="text" value="<?php echo $dong['tendanhmuc']?>"name="tendanhmuc" required></td>
      </tr>
      <tr>
        <td>Thứ Tự</td>
        <td><input type="text" value="<?php echo $dong['thutu'] ?>"name="thutu" required"></td>
      </tr>
    
      <td colspan="11">       
        <button name="suadanhmuc" class="btn btn-primary">Sửa</button>
      </td> 
      <?php
    }
    ?>
  </form>
</table>

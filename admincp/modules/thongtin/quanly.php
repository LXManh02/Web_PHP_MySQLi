<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>
<table class="table table-bordered  ">
	<?php
	 	while($dong = mysqli_fetch_array($query_lh)) {
	 	?>
 <form method="POST" action="modules/thongtin/xuly.php?id=<?php echo $dong['id'] ?>" enctype="multipart/form-data">
	  
	   <tr>
	  	<td>Thông tin liên hệ</td>
	  	<td><textarea rows="5"  name="thongtinlienhe" style="resize: none"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
	  </tr>
	  <td colspan="2">
        <button name="submitlienhe" class="btn btn-primary">Cập nhật</button>
      </td>
	   
	  <?php 
		}
	  ?>
 </form>
</table>

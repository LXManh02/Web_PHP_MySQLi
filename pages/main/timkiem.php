<?php
if (isset($_POST['timkiem'])){
    $tukhoa=$_POST['tukhoa'];
}
    $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc  WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND tensp LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<h3>Tìm kiếm:<?php echo $tukhoa?> </h3>
                <ul class="product_list">
                    <?php
                       while ($row_pro = mysqli_fetch_array($query_pro)){
                    ?>
                 <li>
                        <a  href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                            <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" >
                            <p class="title_product" ><?php echo $row_pro['tensp'] ?></p>
                            <p class="price_product"><?php echo number_format($row_pro['giasp'],0,',','.').'VNĐ' ?></p>
                            <p style="text-align: center;"><?php echo $row_pro['tendanhmuc'] ?></p>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <div style="clear:both"></div>
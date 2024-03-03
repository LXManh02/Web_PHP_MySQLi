<?php
    $sql_bv = "SELECT * FROM tbl_baiviet Where tinhtrang =1 ORDER BY id DESC";
    $query_bv = mysqli_query($mysqli, $sql_bv);

?>
<h3>Danh mục tin tức </h3>
                <ul class="product_list">
                    <?php
                    while($row_bv = mysqli_fetch_array($query_bv)){
                    ?>
                    <li>
                        <a  href="index.php?quanly=baiviet&id=<?php echo $row_bv['id']?>">
                            <img src="../admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" >
                            <p class="title_product" ><?php echo $row_bv['tenbaiviet'] ?></p>
                            <p class="title_product" ><?php echo $row_bv['tomtat'] ?></p>
                        </a>
                    </li>
                <?php
                    }
                ?>
                </ul>
                <div style="clear:both"></div>
<?php
    $sql_bv = "SELECT * FROM tbl_baiviet Where tbl_baiviet.id_danhmuc = '$_GET[id]' 
    ORDER BY id DESC";
    $query_bv = mysqli_query($mysqli, $sql_bv);
    $sql_cate = "SELECT * FROM tbl_danhmucbaiviet Where tbl_danhmucbaiviet.id_baiviet = '$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>
<h1 style="text-align: center;">Danh mục bài viết:<?php echo $row_title["tendanhmuc_baiviet"] ?> </h1>
                <ul class="product_list">
                    <?php
                    while($row_bv = mysqli_fetch_array($query_bv)){
                    ?>
                    <li>
                        <a  href="index.php?quanly=baiviet&id=<?php echo $row_bv['id']?>">
                            <img src="../admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" >
                            <p class="title_product" ><?php echo $row_bv['tenbaiviet'] ?></p>
                            
                        </a>
                    </li>
                <?php
                    }
                ?>
                </ul>
                <div style="clear:both"></div>
                
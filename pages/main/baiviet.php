<?php
    $sql_bv = "SELECT * FROM tbl_baiviet Where tbl_baiviet.id = '$_GET[id]' LIMIT 1";
    $query_bv = mysqli_query($mysqli, $sql_bv);
    $query_bv_all= mysqli_query($mysqli, $sql_bv);
    $row_title = mysqli_fetch_array($query_bv);
?>
<style>
    .baiviet div {
        text-align: center;
        text-decoration: none;
    }
    .baiviet div  img{
        width: 200px;
        height: 200px;
    }
    h3{
        text-align: center;
    }
</style>
<h3 >Bài viết:<?php echo $row_title["tenbaiviet"] ?> </h3>
                <ul class="baiviet">
                    <?php
                    while($row_bv = mysqli_fetch_array($query_bv_all)){
                    ?>
                    <div>
                        <h4><?php echo $row_bv['tenbaiviet'] ?></h4>
                        <img src="../admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" >
                        <p class="title_product" ><?php echo $row_bv['noidung'] ?></p>    
                        </a>
                    </div>
                <?php
                    }
                ?>
                </ul>
                <div style="clear:both"></div>

<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc
    AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<form method="POST" action="main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
<section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-5"><img class="card-img-top mb-5 mb-md-0" src="../admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"/></div>
                <div class="col-md-6">
                    <div class="small mb-1"><?php echo $row_chitiet['masp'] ?></div>
                    <h1 class="display-6 fw-bolder"><?php echo $row_chitiet['tensp'] ?></h1>
                    <div class="fs-5 mb-5 fw-bolder text-success">
                        <span><?php echo number_format($row_chitiet['giasp'] ,0,',','.').' VNĐ' ?></span>
                    </div>
                    <p class="lead"><?php echo $row_chitiet['tomtat'] ?></p>
                    <div class="d-flex">
                                <button class="btn btn-outline-dark flex-shrink-0" name="themgiohang">
                                    <i class="bi-cart-fill me-1"></i>Thêm giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 80%;margin-left: 150px;">
        <p class="lead"><?php echo $row_chitiet['noidung'] ?></p>
        </div>
    </section>
</form>
<?php
}
?>
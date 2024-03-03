<?php
include('../../config/config.php');
$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
$hinhanh = ''; // Khởi tạo biến $hinhanh trống
if ($_FILES['hinhanh']['name'] != '') {
    // Nếu người dùng chọn file mới
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
}
if(isset($_POST['themsanpham'])){
    $sql_them ="INSERT INTO tbl_sanpham(masp, tensp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) 
                VALUES('".$masp."','".$tensp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."',
                '".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysp&query=them');
}elseif(isset($_POST['suasanpham'])){
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    if ($hinhanh != '') {
        // Nếu người dùng đã chọn file mới
        $sql_update = "UPDATE tbl_sanpham SET masp='" . $masp . "', tensp='" . $tensp . "', giasp='" . $giasp . "'
        , soluong='" . $soluong . "', hinhanh='" . $hinhanh . "', tomtat='" . $tomtat . "'
        , noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
    } else {
        // Nếu người dùng không chọn file mới
        $sql_update = "UPDATE tbl_sanpham SET masp='" . $masp . "', tensp='" . $tensp . "', giasp='" . $giasp . "'
        , soluong='" . $soluong . "', tomtat='" . $tomtat . "'
        , noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "', hinhanh=hinhanh, id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    //xoa anh cu
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while ($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlysp&query=them');
}else{
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while ($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa="DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}

?>
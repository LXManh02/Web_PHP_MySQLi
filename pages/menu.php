
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
crossorigin="anonymous"></script>
<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<?php
$sql_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
$query_danhmucbv = mysqli_query($mysqli, $sql_danhmucbv);
?>
<?php
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light"  >
  <div class="container-fluid">
    <a class="navbar-brand" href=""></a>
    <img src="../images/tao.png" height="85px" width="100px" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" >
          <a class="nav-link active" style="padding-top:28px" aria-current="page" href="index.php">Trang chủ</a>
        </li>
        <div class="nav-item dropdown" style="padding-top:20px">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">
           Sản phẩm
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
            <li><a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
            <?php
                 }
                ?>
          </ul>
            </div>
            <div class="nav-item dropdown" style="padding-top:20px">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tin Tức
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
                while ($row_danhmucbv = mysqli_fetch_array($query_danhmucbv)) {
                ?>
            <li><a class="dropdown-item" href="index.php?quanly=danhmucbaiviet&id=<?php echo $row_danhmucbv['id_baiviet']?>"><?php echo $row_danhmucbv['tendanhmuc_baiviet']?></a></li>
            <?php
                 }
                ?>
          </ul>
            </div>
            <div style="margin-left:650px; margin-top: 15px;" >
            <form class="d-flex" action="index.php?quanly=timkiem" method="POST"  >
              <input class="form-control me-1" type="search" name="tukhoa" placeholder="Nhập từ khóa " aria-label="Search">
              <button class="btn btn-outline-success" name="timkiem" type="submit" ><i class="bi bi-search"></i> </button>
            </form>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"  >
            <li ><a class="nav-link" style="font-size: 30px;;" href="index.php?quanly=giohang"><i class="bi bi-cart3"></i></a></li>
                <?php
                    if(isset($_SESSION['dangky'])) {  
                ?>
                <li><a class="nav-link" style="font-size: 30px; " href="index.php?dangxuat=1"><i class="bi bi-box-arrow-right"></i></a></li>
                <?php
                }else{
                ?>
                <li><a class="nav-link" style="font-size: 30px; float:left" href="index.php?quanly=dangky"><i class="bi bi-person-circle"></i></a></li>
                <?php
                }
                ?>                
                </ul>
                </ul>
    </div>
  </div>
</nav>
 -->

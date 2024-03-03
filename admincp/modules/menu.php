<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
      unset($_SESSION['dangnhap']);
        header('Location: login.php');
        exit;
    }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 20px;font-weight: bold;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php?action=quanlydanhmucsanpham&query=them">Danh Mục Sản Phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="index.php?action=quanlysp&query=them">Sản Phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="index.php?action=quanlydanhmucbaiviet&query=them">Danh Mục Bài Viết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="index.php?action=quanlybaiviet&query=them">Bài Viết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?action=quanlydonhang&query=lietke">Đơn Hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="index.php">Thống Kê</a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="#" onclick="confirmLogout()">Đăng Xuất:<?php if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    } ?></a>
</li>
      </ul>
    </div>
  </div>
</nav>
<script>
    function confirmLogout() {
        var confirmLogout = confirm("Bạn có chắc chắn muốn đăng xuất?");
        if (confirmLogout) {
            window.location.href = "index.php?dangxuat=1";
        }
    }
</script>

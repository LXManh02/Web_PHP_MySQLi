<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
  <style>
.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:17px;
  line-height:24px;
  color:#bebebe;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:17px;
  text-transform:uppercase;
  font-weight: bold;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#bebebe;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#bebebe;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:20px
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
  </style>
  <!-- Site footer -->
  <footer class="site-footer" >
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-4">
            <h6>Về Chúng Tôi</h6>
            <p class="text-justify">Website đầu tiên tôi làm. Hiện tại nó còn rất nhiều thiếu sót !!!</p>
            <p class="text-justify">Xin chân thành cảm ơn</p>
          </div>

          <div class="col-xs-1 col-md-3">
            <h6>Danh mục sản phẩm</h6>
            <ul class="footer-links">
            <?php
                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
            <li><a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
            <?php
                 }
                ?>
            </ul>
          </div>

          <div class="col-xs-4 col-md-2">
            <h6>Thông tin</h6>
            <ul class="footer-links" >
              <li><a style="text-decoration: none;" href="index.php?quanly=gioithieu">Giới Thiệu</a></li>
              <li><a style="text-decoration: none;"href="index.php?quanly=huongdan">Hướng Dẫn</a></li>
              <li><a style="text-decoration: none;"href="index.php?quanly=dieukhoan">Điều Khoản</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Liên Hệ</h6>
            <ul class="footer-links">
              <li><i class="bi bi-telephone-fill"></i> 0967099184</li>
              <li><i class="bi bi-envelope-open-fill"></i> manhlexuan02@gmail.com</li>
              <li><i class="bi bi-geo-alt-fill"></i> Từ Sơn - Bắc Ninh</li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by 
         <a href="https://www.facebook.com/profile.php?id=100006186047923">Lê Xuân Mạnh</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="bi bi-facebook"></i></i></a></li>
              <li><a class="twitter" href="#"><i class="bi bi-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="bi bi-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="bi bi-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

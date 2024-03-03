<div class="header">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <?php
  $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
  $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
  ?>
  <?php
  $sql_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
  $query_danhmucbv = mysqli_query($mysqli, $sql_danhmucbv);
  ?>
  <?php
  if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    echo "<script>alert('Bạn có chắc muốn đăng xuất');</script>";
    unset($_SESSION['dangky']);
  }
  ?>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f6f7fc; font-weight: bold; text-transform: uppercase;">
    <div class="container-fluid">
      <img src="../images/logo.png" style="width: 100px;height:85px" alt="">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item" style="padding-top: 35px;">
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
          </li>
          <div class="nav-item dropdown" style="padding-top: 35px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              Sản phẩm
            </a>
            <ul class="dropdown-menu" style="margin-top: -7px;" aria-labelledby="navbarDropdown">
              <?php
              while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
              ?>
                <li><a class="dropdown-item"  href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
              <?php
              }
              ?>
            </ul>
          </div>
          <div class="nav-item dropdown" style="padding-top: 35px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tin Tức
            </a>
            <ul class="dropdown-menu" style="margin-top: -7px;" aria-labelledby="navbarDropdown">
              <?php
              while ($row_danhmucbv = mysqli_fetch_array($query_danhmucbv)) {
              ?>
                <li><a class="dropdown-item" href="index.php?quanly=danhmucbaiviet&id=<?php echo $row_danhmucbv['id_baiviet'] ?>"><?php echo $row_danhmucbv['tendanhmuc_baiviet'] ?></a></li>
              <?php
              }
              ?>
            </ul>
          </div>
          <div style="margin-left:600px;padding-top: 30px; ">
            <form class="d-flex" action="index.php?quanly=timkiem" method="POST" " >
              <input style=" padding: 10px 15px;border: none;outline: none; border-radius:30px 0px 0px 30px; "  type=" search" name="tukhoa" placeholder="Nhập từ khóa " aria-label="Search">
              <button style="padding: 10px 15px;border: none;outline: none; background-color: white; border-radius:0px 30px 30px 0px;" name="timkiem" type="submit"><i class="bi bi-search"></i> </button>
            </form>
          </div>
          <div style="padding:15px 20px 0px 20px;">
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
              <a class="nav-link" style="font-size: 40px;" href="index.php?dangxuat=1"><i class="bi bi-box-arrow-right"></i></a>
            <?php
            } else {
            ?>
              <a class="nav-link" style="font-size: 40px;" href="index.php?quanly=dangky"><i class="bi bi-person-circle"></i></a>
            <?php
            }
            ?>
          </div>
          <div class="right">
            <div class="cart dropdowns">
              <div class="cart-dropdown-btn">
                <a href="index.php?quanly=giohang" style="text-decoration: none;"><i class="bi-cart-fill me-1"></i>
                  <span>Cart</span>
                </a>
              </div><!-- .cart-button -->
              <div class="minicart-content">
                <ul class="ul-reset">
                  <li>
                    <?php
                    if (isset($_SESSION['cart'])) {
                      $i = 0;
                      foreach ($_SESSION['cart'] as $cart_item) {
                        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                        $i++;
                    ?>
                        <div class="cart-prod-wrapper cf">
                          <div class="cart-image-wrapper">
                            <div class="cart-image">
                              <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>"><img src="../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="100px" height="100px"></a>

                            </div><!-- .cart-image -->
                          </div><!-- .cart-image-wrapper -->
                          <div class="cart-details">
                            <div class="cart-name">
                              <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" style="text-decoration: none;"><?php echo $cart_item['tensp'] ?></a>
                            </div><!-- .cart-name -->
                            <div class="cart-price"><?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'VNĐ' ?></div><!-- .cart-price -->
                          </div><!-- .cart-details -->
                          <div class="cart-qty">
                            <div class="cart-qty-name">SL:<?php echo $cart_item['soluong'] ?></div><!-- .cart-qty-name -->
                          </div><!-- .cart-qty -->
                          <div style="clear: both;"></div>
                        <?php
                      }
                        ?>
                        </div><!-- .cart-prod-wrapper -->
                  </li>
                </ul><!-- .ul-reset -->
                <div class="cart-btns-wrapper">
                  <a class="cart-btn view-cart" href="index.php?quanly=giohang" style="text-decoration: none;">View cart</a><!-- .cart-btn .view-cart -->
                  <a class="cart-btn checkout" href="index.php?quanly=thanhtoandh" style="text-decoration: none;">Thanh toán</a><!-- .cart-btn .checkout -->
                <?php
                    } else {
                      echo "Giỏ trống";
                    }
                ?>
                </div>
              </div>
            </div>
          </div>
          

        </ul>
      </div>
    </div>
  </nav>
</div>
<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700);
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

  a:hover {
    color: #e9944f;
  }

  .ul-reset {
    list-style: none;
    margin-top: 0;
    margin-bottom: 0;
    padding-left: 0;
  }

  .right {
    float: left;
    width: 100%;
    padding-top: 30px;
    font-size: 12px;

  }

  /* #Cart Dropdown Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  /* Dropdown Default Styles */
  .dropdowns {
    position: relative;
  }

  .dropdowns:hover .minicart-content {
    display: block;
  }

  .minicart-content {
    background-color: white;
    border: 1px solid #ddd;
    border-top-color: transparent;
    color: #333;
    display: none;
    padding: 12px;
    position: absolute;
    right: 0;
    top: 45px;
    z-index: 2;

  }

  .minicart-content ul li {
    border-bottom: 1px solid #ddd;
    margin-bottom: 12px;
    padding-bottom: 12px;
  }

  /* Button Styles */
  .cart-dropdown-btn a {
    background: transparent;
    color: black;
    float: right;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    padding: 10px 13px;
    border-radius: 12px;
    border: solid 1px black;
  }

  .cart-dropdown-btn a:hover {
    background-color: #444;
    color: #fff;
  }

  /* Cart Dropdown Name and Price */
  .cart-details {
    float: left;
    margin-right: 10px;
    width: 350px;
  }

  .cart-name {
    margin-bottom: 10px;
  }

  .cart-price {
    font-weight: 600;
  }


  /* Cart Dropdown Quantity */
  .cart-qty {
    float: left;
    text-align: center;
    width: 30px;
  }

  .cart-qty-name {
    font-size: 16px;
  }

  /* Cart Checkout Buttons */
  .cart-btn {
    display: block;
    float: left;
    font-weight: 600;
    padding: 5px 0;
    text-align: center;
    transition: 0.3s;
    width: 122px;
  }

  .view-cart {
    border: 1px solid #bbb;
    color: #444;
    margin: 0px 40px;

  }

  .view-cart:hover {
    background: #ddd;
    color: #444;
  }

  .checkout {
    background: #c83b3b;
    border: 1px solid transparent;
    color: #fff;
  }

  .checkout:hover {
    background: #e9944f;
    color: #fff;
  }

  .cf:before,
  .cf:after {
    content: " ";
    /* 1 */
    display: table;
    /* 2 */
  }

  .cf:after {
    clear: both;
  }

  /** For IE 6/7 only - Include this rule to trigger hasLayout and contain floats. **/
</style>
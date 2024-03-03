<?php
    session_start();
    include("config/config.php");
    if(isset($_POST['dangnhap'])){
        $taikhoan=$_POST['username'];
        $matkhau=md5($_POST['password']);
        $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1 ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoan;
            header('Location:index.php');
        }else{
            echo "<script>alert('Tài khoản hoặc mật khẩu không đúng');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylelogin.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="screen-1">
        <h1 style="text-align: center;">Đăng nhập ADMIN</h1>
        <form action="" autocomplete="off" method="POST">
            <div class="email">
                <label for="email">Tài khoản</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="username"  />
                </div>
            </div>
            <div class="password">
                <label for="password">Mật khẩu</label>
                <div class="sec-2">
                    <input class="pas" type="password" name="password" placeholder="············" />
                </div>
            </div>
            <div style="text-align: center;">
            <button  class="login" name="dangnhap">Đăng nhập</button>
            </div>
    </div>
    </form>
    <script type="text" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>
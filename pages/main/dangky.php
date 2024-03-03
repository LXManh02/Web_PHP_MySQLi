<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
<?php
    if(isset($_POST['dangky'])){
        $tenkhachhang=$_POST['hovaten'];
        $email=$_POST['email'];
        $dienthoai=$_POST['dienthoai'];
        $matkhau=md5($_POST['matkhau']);
        $diachi=$_POST['diachi'];
        $emailcheck=mysqli_query($mysqli,"SELECT * FROM tbl_dangky WHERE email = '".$email."'");
        $sql_dangky=mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)
        VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')") ; 
        if($emailcheck -> num_rows >0){
            echo "<script>alert(' Email đã tồn tại vui lòng nhập lại');</script>";
        } elseif ( $sql_dangky){
            $_SESSION['dangky']=$tenkhachhang;
            $_SESSION['email']=$email;
            $_SESSION['id_khachhang']= mysqli_insert_id($mysqli);
            echo "<script>alert('Đăng ký thành công');</script>";
        }
    }
?>
<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['email'] = $row_data['email'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
            echo "<script> if (confirm(' Vào trang giỏ hàng')) {
              window.location.href='index.php?quanly=giohang';
           } else {
              window.location.href='index.php';
           }</script>";
		}else{
			echo "<script>alert('Email,hoặc mật khẩu sai vui lòng nhập lại');</script>";
		}
	} 
?>
<style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

section {
  position: relative;
  min-height: 100vh;
  background-color: beige;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

section .container {
  position: relative;
  width: 800px;
  height: 500px;
  background: #fff;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

section .container .user {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
}

section .container .user .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #ff0;
  transition: 0.5s;
}

section .container .user .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

section .container .user .formBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .container .user .formBx form h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-bottom: 10px;
  color: #555;
}

section .container .user .formBx form input {
  position: relative;
  width: 100%;
  padding: 10px;
  background: #f5f5f5;
  color: #333;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
  max-width: 100px;
  background: #677eff;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.5s;
}

section .container .user .formBx form .signup {
  position: relative;
  margin-top: 20px;
  font-size: 12px;
  letter-spacing: 1px;
  color: #555;
  text-transform: uppercase;
  font-weight: 300;
}

section .container .user .formBx form .signup a {
  font-weight: 600;
  text-decoration: none;
  color: #677eff;
}

section .container .signupBx {
  pointer-events: none;
}

section .container.active .signupBx {
  pointer-events: initial;
}

section .container .signupBx .formBx {
  left: 100%;
}

section .container.active .signupBx .formBx {
  left: 0;
}

section .container .signupBx .imgBx {
  left: -100%;
}

section .container.active .signupBx .imgBx {
  left: 0%;
}

section .container .signinBx .formBx {
  left: 0%;
}

section .container.active .signinBx .formBx {
  left: 100%;
}

section .container .signinBx .imgBx {
  left: 0%;
}

section .container.active .signinBx .imgBx {
  left: -100%;
}

@media (max-width: 991px) {
  section .container {
    max-width: 400px;
  }

  section .container .imgBx {
    display: none;
  }

  section .container .user .formBx {
    width: 100%;
  }
}

</style>
<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="../images/ct1.jpg"  alt=""></div>
        <div class="formBx">
          <form action=""  method="POST">
            <h2>Đăng nhập</h2>
            <input type="email" class="input" name="email" placeholder="Email" required />
			<input type="password" class="input" name="password" placeholder="Mật Khẩu" required/>
            <input type="submit" name="dangnhap" value="Đăng nhập" />
            <p class="signup">
              Bạn chưa có tài khoản?
              <a href="#" onclick="toggleForm();">Đăng ký.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action=""method="POST">
            <h2>Tạo tài khoản</h2>
            <input type="text" class="input" name="hovaten" placeholder="Họ Tên" required/>
			<input type="email" class="input" name="email" placeholder="Email"  required/>
			<input type="text" class="input" name="diachi" placeholder="Địa Chỉ" required/>
				<input type="text" class="input" name="dienthoai" placeholder="Điện Thoại" required/>
				<input type="password" class="input" name="matkhau" placeholder="Mật Khẩu" required/>	
            <input type="submit" name="dangky" value="Đăng ký" />
            <p class="signup">
              Bạn đã có tài khoản ?
              <a href="#" onclick="toggleForm();">Đăng nhập.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="../images/ct2.jpg"  alt="" /></div>
      </div>
    </div>
  </section>
</body>
<script>
	const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};
</script>
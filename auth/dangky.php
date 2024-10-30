<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Shop | Đăng ký</title>
    <link rel="stylesheet" href="dangnhap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$name = $_POST["name"];

  			$password = $_POST["password"];
  			$rpassword = $_POST["rpassword"];

 			$email = $_POST["email"];
            $diachi = $_POST["diachi"];
			$sdt = $_POST["sdt"];

  			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if (strcmp($password ,$rpassword)!=0) {
				   echo "Mật Khẩu Không Khớp!";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
					$conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
  					$sql="SELECT * from user where Username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO user (Name,Username,Email,Password,Address,Phone) VALUES ('$name','$username','$email','$password','$diachi','$sdt')";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "<p>chúc mừng bạn đã đăng ký thành công</p>";
					}
			  }
	}
	?>
    <div class="wrapper" style="width:500px">
        <div class="title-text">
            
            <div class="title signup">
               Đăng Ký
            </div>
        </div>

        <div class="form-container">
        
         <div class="form-inner">
        <form action="" method="POST" class="signup" style="margin-left: 61px;">
            <div class="input-group">
                <input type="text" name="name" id="name" required>
                <label htmlFor=''>Tên người dùng</label>

            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" required>
                <label htmlFor=''>Email</label>

            </div>
            <div class="input-group">
                <input type="text" name="diachi" id="diachi" required>
                <label htmlFor=''>Địa chỉ</label>

            </div>
            <div class="input-group">
                <input type="text" name="sdt" id="sdt" required>
                <label htmlFor=''>Số điện thoại</label>

            </div>
            <div class="input-group">
                <input type="text" name="username" id="username" required>
                <label htmlFor=''>Tên tài Khoản</label>

            </div>
            <div class="input-group">
                <input type="text" name="password" id="password" required>
                <label htmlFor=''>Mật khẩu</label>

            </div>
            <div class="input-group">
                <input type="text" name="rpassword" id="rpassword" required>
                <label htmlFor=''>Nhập lại mật khẩu</label>

            </div>
            <div class="input-group btn">
                <div class="btn-layer"></div>
                <input type="submit" name="btn_submit" class="submit" value="Đăng Ký">
            </div>
            <div class="signup-link">
                 <a href="./dangnhap.php">Đăng nhập tại đây.</a>
               </div>
        </form>
    </div>
    </div>
    </div>

</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Shop | Đăng Nhập</title>
   <link rel="stylesheet" href="dangnhap.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
   <?php

   // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
   if (isset($_POST["btns_submit"])) {
      // lấy thông tin người dùng
      $username = $_POST["username"];
      $password = $_POST["password"];
      //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection

      if ($username == "" || $password == "") {
         echo "<p>username hoặc password bạn không được để trống!</p>";
      } else {
         $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
         $sql = "SELECT * from user where Username = '$username' AND Password = '$password' ";
         $query = mysqli_query($conn, $sql);
         $row = mysqli_fetch_array($query);
         if ($row == 0) {
            echo "<p>Tên đăng nhập hoặc mật khẩu không đúng !</p>";
         } else {
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row['Id'];
            $_SESSION['hoten'] = $row['Name'];
            $_SESSION['diachi'] = $row['Address'];
            $_SESSION['sdt'] = $row['Phone'];
            $_SESSION['password'] = $password;

            // Thực thi hành động sau khi lưu thông tin vào session
            // ở đây tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('Location: ../trangchu.php');
            mysqli_close($conn);
         }
      }
   }
   ?>

   <div class="wrapper">
      <div class="title-text">
         <div class="title login">
            Đăng Nhập
         </div>
         
      </div>
      <div class="form-container">
        
         <div class="form-inner">
            <form action="" method="POST" class="login">
               <div class="input-group">
                  <input type="text" name="username" id="username" required>
                  <label htmlFor=''>Tên tài Khoản</label>

               </div>
               <div class="input-group">
                  <input type="password" name="password" id="password" required>
                  <label htmlFor=''>Mật khẩu</label>

               </div>
               <div class="pass-link">
                  <a href="./ngu.php">Quên mật khẩu ?</a>
               </div>
               <div class="input-group btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="btns_submit" class="submit" value="Đăng Nhập">
               </div>
               <div class="signup-link">
                  Nhớ mật khẩu? <a href="./dangky.php">Đăng ký tại đây.</a>
               </div>
            </form>
</body>

</html>
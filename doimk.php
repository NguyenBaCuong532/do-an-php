<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Shop | Đăng Nhập</title>
   <link rel="stylesheet" href="./doimk.css">
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
$conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
$id=$_GET['id'];
		$sql = "SELECT * FROM user where id=".$_GET['id'];
		$ketqua = mysqli_query($conn, $sql);
		$thongtinsv = mysqli_fetch_array($ketqua);
          if (isset($_POST["btns_submit"])) {
		    $password=$_POST["password"]; 
		    $newpassword=$_POST["newpassword"]; 


        if (strcmp( $password ,$thongtinsv['Password'])!=0) {
            echo "<h6>Mật Khẩu Không Chính Xác!</h6>";
       }else{
        if(strcmp( $newpassword ,$_POST['npassword'])!=0){

            echo "<h6>Mật Khẩu Không Khớp!</h6>";
       
        }else{
            echo $id;
                 $sql ="UPDATE user SET Password = '$newpassword' WHERE id ='$id'";
                 $ketqua1 = mysqli_query($conn, $sql);
                 echo "<h6>Bạn đã đổi mật khẩu thành công!</h6><a style='color: #fdfdfd;' href='./taikhoan.php'>Quay lại</a>";

                 


        }
          
         }
        }
	?>
   <div class="wrapper" style="width:500px">
      <div class="title-text">
         <div class="title login">
            Thay Đổi Mật Khẩu
         </div>
         
      </div>
      <div class="form-container">
        
         <div class="form-inner">
            <form action="" method="POST" class="login">
               <div class="input-group">
                  <input style="  border-color: #fc83bb;" type="text" name="username" id="username" readonly value="<?php echo isset( $thongtinsv['Name'])? $thongtinsv['Name']:''; ?>">
                  <p htmlFor=''>Tên tài Khoản</p>

               </div>
               <div class="input-group">
                  <input type="password" name="password" id="password" required>
                  <label htmlFor=''>Mật khẩu cũ</label>

               </div>
               <div class="input-group">
                  <input type="password" name="newpassword" id="newpassword"  required>
                  <label htmlFor=''>Mật khẩu mới</label>

               </div>
               <div class="input-group">
                  <input type="password" name="npassword" id="npassword"  required>
                  <label htmlFor=''>Nhập lại mật khẩu mới</label>

               </div>
               
               <div class="input-group btn">
               <div class="btn-layer"></div>

                  <input type="submit" name="btns_submit" class="submit" value="Đổi mật khẩu">
               </div>
             
            </form>
</body>

</html>
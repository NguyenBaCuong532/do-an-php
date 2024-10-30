<?php
session_start();

if (isset($_POST['submit'])) {

    unset($_SESSION['username']); // xóa session login
}
$_SESSION['thanhtoan']=1;
if (!isset($_SESSION['username'])) {
    header('Location: ./auth/dangnhap.php');

    exit();
}
if (!isset($_SESSION['cart'])) {
    header('Location: ./index.php');

    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Thanh Toán</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="thanhtoan.css">

    <script src="./script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        
        window.onscroll = function() {
            var navbar = document.querySelector('.header');
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };

    </script>
    <style>
         .navbar{
            width: 100%;
        }

    </style>
</head>

<body>
    <!-- ----------------------------------------------start Header------------------------------------------- -->
    <div class="header">
        <div class="logo">
            <h1><img src="./img/trangchu/Screenshot 2024-10-21 193627.png" width="160" height="120"></h1>

        </div>
        <div class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./trangchu.php">Trang Chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./blogfashion.php">Blog Fashion</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Cửa Hàng</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./taikhoan.php">Tài Khoản</a>                                                         
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./giohang.php">Giỏ Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./giohang.php">Thanh Toán</a>                 
                      
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./lienhe.php">Liên Hệ</a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php

if (isset($_SESSION['username'])) {

    echo '
        <form action="" method="POST">
     Xin chào !  <p style="width:250px;color:red"> ' . $_SESSION['hoten'] .'</p> <input type="submit" name="submit" class="btn btn-outline-primary" value="Đăng xuất"> 
   </form>  ';
} else {
    echo "";
}

?>

        </div>

      
    </div>



    <!-- ----------------------------------------------end Header------------------------------------------- -->
    <div class="container-form" style="min-height: 470px;">
   
    <div class="text-center">
    <h4>Chúc mừng bạn đã mua hàng thành công</h4>   
    <h5>Chúng tôi sẽ XÁC NHẬN đơn hàng bằng EMAIL hoặc ĐIỆN THOẠI.</br>
         Bạn vui lòng kiểm tra EMAIL hoặc NGHE MÁY ngay khi đặt hàng thành công và CHỜ NHẬN HÀNG.</h5> <img style="border-radius: 50%;" src="./img/trangchu/heart.png" alt="" width="200px" height="200px">   

</div>
<div class="text-center">

 <a href="./trangchu.php" class="btn btn-info">Quay lại trang chủ</a>
 </div>

    <?php
        $ngaymua = date('Y-m-d h:i:sa');
        
      

        $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
        $sql ="INSERT INTO `order`(Id,OrderDate,Address,Phone,TotalAmount) VALUES( $_SESSION[id],'$ngaymua','$_SESSION[diachi]', $_SESSION[sdt], $_SESSION[total])";
        $ketqua=mysqli_query($conn,$sql);

        $id =  mysqli_insert_id($conn);
       
     foreach ($_SESSION['cart'] as $key => $value)

        {
            $_SESSION['Order'] =$id;
            $sql = "INSERT INTO orderdetail(OrderID, ProductID, Quantity) VALUES ($id, $key, $value)";
            $ketqua1 = mysqli_query($conn, $sql);

            $sql = "UPDATE product SET StockQuantity = StockQuantity - $value Where ProductId =$key";
            $ketqua2 = mysqli_query($conn, $sql);

        }
        $_SESSION['hoadon']=$_SESSION['cart'];
        unset($_SESSION['cart']); 
       
        
    ?>
  </div>
								

						
					

    
  <div class="footer" style="height: 251px;">


<div class="column l-2-4 me-4 s-6">
    <h3 style="text-align: center;" class="footer__heading">Thành Viên Trong Nhóm</h3>
    <div class="footer-list">
        <li class="footer-item">
            <a href="" class="footer-item-link">Nguyễn Bá Cương</a>
        </li>
        <li class="footer-item">
            <a href="" class="footer-item-link">Cấn Đình Duy</a>
        </li>
        <li class="footer-item">
            <a href="" class="footer-item-link">Phạm Quang Huy</a>
        </li>
    </div>
</div>


<div class="">
    <h3 style="margin-left:-16px" class="footer__heading">Liên hệ với chúng tôi</h3>

    <h5 >Hotline :<a style="color: #28d0d0;" href="tel:0975242481"> 0975242481</a></h5>

<h5>Email:<a style="color: #28d0d0;" href="mailto:cuongmja532@gmail.com"> cuongmja532@gmail.com</a></h5>
    <p style="font-size:18px">Hân hạnh được phục vụ quý khách.</p>
</div>

</div>



</body>

</html>
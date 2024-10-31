<?php
session_start();
if (isset($_POST['submit'])) {
    unset($_SESSION['cart']);

    unset($_SESSION['username']); // xóa session login
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Danh Mục</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="danhmuc.css">

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
        .text-ellipsis {
    width: 200px; /* Chiều rộng tối đa của phần tử */
    white-space: nowrap; /* Không cho văn bản xuống dòng */
    overflow: hidden; /* Ẩn phần vượt quá */
    text-overflow: ellipsis; /* Thêm dấu ba chấm */
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
                            <a class="nav-link" href="./thanhtoan.php">Thanh Toán</a>

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
    <!-- ----------------------------------------------Start menu trái------------------------------------------- -->
    <div class="container" style="min-height: 687px;">
        <nav class="category">
            <h3 class="category-heading">
                <i class="category-heading-icon fas fa-bars"> </i>
                Danh Mục Sản Phẩm
            </h3>

            <p class="d-inline-flex gap-1">
                <a class="btn" style="font-size: 30px;font-weight:600" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Phụ kiện
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <h5>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
                        $sql = "SELECT * From category";
                        $ketqua = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($ketqua)) {
                            if ($row['CategoryID'] < 2)
                                echo '<a href="./danhmuc.php?iddanhmuc= ' . $row['CategoryID'] . '" class="category-item__link">' . $row['CategoryName'] . '</a></br>';
                            else
                                echo "";
                        }

                        ?>
                    </h5>


                    <h5>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
                        $sql = "SELECT * From category";
                        $ketqua = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($ketqua)) {
                            if ($row['CategoryID'] < 3 && $row['CategoryID'] > 1)
                                echo '<a href="./danhmuc.php?iddanhmuc= ' . $row['CategoryID'] . '" class="category-item__link">' . $row['CategoryName'] . '</a></br>';
                            else
                                echo "";
                        }

                        ?>

                    </h5>

                    <h5>

                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
                        $sql = "SELECT * From category";
                        $ketqua = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($ketqua)) {
                            if ($row['CategoryID'] < 4 && $row['CategoryID'] > 2)
                                echo '<a href="./danhmuc.php?iddanhmuc= ' . $row['CategoryID'] . '" class="category-item__link">' . $row['CategoryName'] . '</a></br>';
                            else
                                echo "";
                        }

                        ?>
                    </h5>

                </div>
            </div>


        </nav>


        <!-- -----------------------------------------end-menu trái-------------------------------------------------- -->
        <!-- ----------------------------------------------start sản phẩm------------------------------------------- -->
        <div class="home-product">
       <?php
       $iddanhmuc = $_GET['iddanhmuc'];
        $conn =    mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
        $sql = "SELECT * FROM product where CategoryID=$iddanhmuc ";
        $ketqua = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($ketqua)) {
            echo '<div class="column l-2-4 me-4 s-6" >
							<a class="home-product-item" href="./sanpham.php?id= ' . $row['ProductID'] . '">>
								<div class="home-product-item__img" style="background-image:url(./img/sanpham/' . $row['Image'] . ')">
                                
								</div>
								<h4 class="home-product-item__name text-ellipsis">' . $row['Name'] . '</h4>
								<div class="home-product-item__price">
									<div class="home-product-item__price-old">' . number_format($row['Price'], 3) . 'đ</div>
									<div class="home-product-item__price-new">' . number_format($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01)), 3) . 'đ</div>
								</div>
								<div class="home-product-item__action">
									<span class="home-product-item__like home-product-item__liked">
										<i class="home-product-item__like-none far fa-heart"></i>
										<i class="home-product-item__like-fill fas fa-heart"></i>
									</span>
									<div class="home-product-item__rating">
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
									</div>
									<span class="home-product-item__sold">Số lượng:' . $row['StockQuantity'] . '</span>
								</div>
								
								<div class="home-product-item__favorite">
									<i class="home-product-item__favorite-icon fas fa-check"></i>
									<span>Yêu thích</span>
								</div>
								<div class="home-product-item__sale">
									<span class="home-product-item__sale-percent">' . $row['Sale'] . '%</span>
									<span class="home-product-item__sale-label">GIẢM
									</span>
								</div>
							</a>
						</div>';
        }

        mysqli_close($conn);
        ?>

        <!-- sản phẩm -->

        </div>

    </div>

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
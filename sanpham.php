<?php
session_start();
if (isset($_POST['submit'])) {
    unset($_SESSION['cart']);

    unset($_SESSION['username']); // xóa session login
}
if (isset($_POST['submit1'])) {
 
}
?><?php

    $id = $_GET['id'];
    $conn =    mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
    $sql = "SELECT * FROM product where ProductID = $id";
    $ketqua = mysqli_query($conn, $sql);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Sản Phẩm</title>
    <link rel="stylesheet" href="sanpham.css">
    <link rel="stylesheet" href="danhmuc.css">


    <script src="./script.js">
        
    </script>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
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
     <script>
    function toggleHeart(button) {
      // Thêm hoặc xóa class 'active' để đổi màu nút
      button.classList.toggle("active");

      // Tạo phần tử trái tim và thêm vào DOM
      const heart = document.createElement("span");
      heart.classList.add("heart-animation");
      heart.innerText = "❤️";

      // Thêm hiệu ứng vào nút
      button.appendChild(heart);

      // Xóa phần tử trái tim sau khi hiệu ứng kết thúc
      heart.addEventListener("animationend", () => {
        heart.remove();
      });
    }
  </script>
</head>

<body>
    <!-- ----------------------------------------------start Header------------------------------------------- -->
    <div class="header">
        <div class="logo">
            <h1><img src="./img/trangchu/Screenshot 2024-10-21 193627.png" width="160" height="120"></h1>

        </div>
        <div class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="trangchu.php">Trang Chủ</a>
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
        </div>

        <div class="header1">
        </div>
    </div>



    <!-- ----------------------------------------------end Header------------------------------------------- -->
    <!-- ----------------------------------------------Start menu trái------------------------------------------- -->
    <div class="container" style="min-height:900px;">
      


        <!-- -----------------------------------------end-menu trái-------------------------------------------------- -->
        <!-- ----------------------------------------------start sản phẩm------------------------------------------- -->
      <!-- <div class="product-detail-appreciate__space product-detail-appreciate__rating">
                                <span style="text-decoration: underline;">4.9</span>
                                <i class="home-product-item__star-gold fas fa-star"></i>
                            </div> -->
    <?php
        $row = mysqli_fetch_array($ketqua);
        if($row['Favorite']){

            echo '
            <div class="product-detail" ">
                <div class="product-detail-item-img">
                                        <img src="./img/sanpham/' . $row['Image'] . '" style="width:510px;height:550px" alt="">

                    <div class="product-detail-favorite" style="background:#efd903;border-radius:10px;padding: 2px 5px">
                   '.$row['Favorite'].'<span class="home-product-item__like home-product-item__liked">
                                <i class="home-product-item__like-fill fas fa-heart"></i>
                            </span>
                       
                        
                    </div>
                    <div class="home-product-item__sale">-' . $row['Sale'] . '% GIẢM</div>
    
                </div>
                <div class="product-detail-title">
    
                    <div class="product-detail-title-1">
                       <h3>' . $row['Name'] . '</h3> 
                        <span class="product-detail-label"></span>
                    </div>
                    <div class="product-detail-title-1">
                       
                          
                            <div class="product-detail-appreciate__space product-detail-appreciate__appre" style="display:flex;font-size:30px: justify-content: space-between;">
                             
                               <div class="product-detail-label-lb" style="  padding: 0 100px;">Hãng :'.$row['Company'].'</div>

                     
                                <div class="product-detail-label-lb" style="  padding: 0 100px;">' . $row['StockQuantity'] . ' sản phẩm có sẵn</div>
                            </div>
                     
                    </div>
    
                    <div class="product-detail-title-1">
                        <div class="product-detail-price">
                        <label>Giá :</label>
                            <span class="product-detail-price__old">' . number_format($row['Price']) . 'đ</span>
                            <div class="home-product-item__price-new">' . number_format($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01))) . 'đ</div>
                            <span class="product-detail-price-sale">Giảm ' . $row['Sale'] . '% đã tính thuế VAT</span>
                        </div>
                    </div>
                    
                    <div class="product-detail-title-1">
                      <div class="product-detail-label-lb">' . $row['Description'] . '</div>
                    </div>
                    
    
                    <div class="product-detail-title-1">
                        <div class="product-detail-shopping">
    
                            <div class="wrap">
                                <a style="text-decoration: none;" href="./themhang.php?item=' . $row['ProductID'] . '" class="button"> <i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng
                                </a>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                    ';
        }
        else{
            echo '
            <div class="product-detail">
                <div class="product-detail-item-img">
                    <img src="./img/sanpham/' . $row['Image'] . '" style="width:510px;height:550px" alt="">
                    <div class="product-detail-favorite">
                    <button type="submit1" class="heart-button" onclick="toggleHeart(this)"><i class="home-product-item__like-none far fa-heart"></i> </button>
                       
                        
                    </div>
                    <div class="home-product-item__sale">-' . $row['Sale'] . '% GIẢM</div>
    
                </div>
                <div class="product-detail-title">
    
                    <div class="product-detail-title-1">
                       <h3>' . $row['Name'] . '</h3> 
                        <span class="product-detail-label"></span>
                    </div>
                    <div class="product-detail-title-1">
                       
                           
                            <div class="product-detail-appreciate__space product-detail-appreciate__appre" style="display:flex;font-size:30px: justify-content: space-between;">
                             
                               <div class="product-detail-label-lb" style="  padding: 0 100px;">Hãng :'.$row['Company'].'</div>

                     
                                <div class="product-detail-label-lb" style="  padding: 0 100px;">' . $row['StockQuantity'] . ' sản phẩm có sẵn</div>
                            </div>
                     
                    </div>
    
                    <div class="product-detail-title-1">
                        <div class="product-detail-price">
                        <label>Giá :</label>
                            <span class="product-detail-price__old">' . number_format($row['Price']) . 'đ</span>
                            <div class="home-product-item__price-new">' . number_format($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01))) . 'đ</div>
                            <span class="product-detail-price-sale">Giảm ' . $row['Sale'] . '% đã tính thuế VAT</span>
                        </div>
                    </div>
                    
                    <div class="product-detail-title-1">
                      <div class="product-detail-label-lb">' . $row['Description'] . '</div>
                    </div>
                    
    
                    <div class="product-detail-title-1">
                        <div class="product-detail-shopping">
    
                            <div class="wrap">
                                <a style="text-decoration: none;" href="./themhang.php?item=' . $row['ProductID'] . '" class="button"> <i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng
                                </a>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                    ';
        }

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
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Trang chủ</title>
    <link rel="stylesheet" href="trangchu.css">

    <script src="./script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="#">Blog Fashion</a>
                        </li>


                        <li class="nav-item dropdown">
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


    </div>
    <div class="logo-container">
        <h1 class="logo-text">Fashion</h1>
    </div>

    <div class="container">
        <div class="elementor-widget ">
                <img src="./img/trangchu/anhnen1.jpg" alt="">
            </div>
        </div>
    

    <div class="elementor-divider1 animate__backInRight">
        <h2>SANG TRỌNG QUÝ PHÁI</h2>
    </div>

    <div class="container">
        <div class="elementor-widget-container ">
            <img src="./img/trangchu/fashion-2309519_640.jpg" alt="">
        </div>
        <div class="elementor-widget-container ">
            <img src="./img/trangchu/wrist-watch-2159351_640.jpg" alt="">

        </div>
       
    </div>

    <div class="elementor-divider2 ">
        <h2>STYLE CỦA BẠN</h2>
    </div>
    <div class="container">
        <div class="elementor-widget ">
                <img src="./img/trangchu/anh4.jpg" alt="">
            </div>
        </div>

        <div class="elementor-divider3 ">
            <h2>BỘ SƯU TẬP MỚI NHẤT</h2>
        </div>
        <div class="container">
            <div class="elementor-widget-container animate__rotateInUpRight">
                <img src="./img/trangchu/anhbox1.png" alt="">
            </div>
            <div class="elementor-widget-container animate__fadeInUp">
                <img src="./img/trangchu/anhbox1.png" alt="">

            </div>
            <div class="elementor-widget-container animate__rotateInUpLeft">
                <img src="./img/trangchu/anhbox1.png" alt="">

            </div>
        </div>
        <div class="elementor-divider4 animate__backInRight">
            <h2>BÀI VIẾT MỚI</h2>
        </div>
        <div class="container-box animate__lightSpeedInRight">
            <div class="elementor-widget-container ">
                <img src="./img/trangchu/woman-8793611_640.jpg" alt="">
            </div>
            <div class="elementor-widget-container">
                <img src="./img/trangchu/box1.jpg" alt="">

            </div>
          
        </div>



        <div class="footer">


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
            

            <div class="column l-2-4 me-4 s-6">
                <h3 class="footer__heading">Liên hệ với chúng tôi</h3>
                <input class="footer__input" type="text" placeholder="Email address">
                <input type="submit" value="Gửi">
            </div>

        </div>






</body>

</html>








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
    <script>
        window.onscroll = function() {
            var navbar = document.querySelector('.header');
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            var logo = document.querySelector('.logo-text');
            var scrollPos = window.scrollY;

            if (scrollPos > 50) {
                logo.style.fontSize = "40px";
                logo.style.top = "89px";
                logo.style.left = "65px";
                logo.style.letterSpacing = "10px";
                logo.style.fontFamily = "serif";
                logo.style.color = "#000";
                logo.style.width = "10px";


                logo.style.transform = "translate(0, 0)";
            } else {
                logo.style.fontSize = "320px";
                logo.style.top = "50%";
                logo.style.left = "13%";
                logo.style.letterSpacing = "50px";
                logo.style.fontFamily = "serif";
                logo.style.color = "#fff";


                logo.style.transform = "translate(-50%, -50%)";
            }
        };
    </script>
</head>

<body>
    <div class="header">
        <div class="logo">
            <h1><img src="./img/Screenshot 2024-10-21 193627.png" width="210" height="180"></h1>
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
                            <a class="nav-link" href="index.php">Cửa hàng</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tài Khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giỏ Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thanh Toán</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên Hệ</a>
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
        <div class="swiper-slide-image"></div>
        <img src="https://res.cloudinary.com/wordpressphuongthao/images/v1625125280/slideshow_4_331de4b/slideshow_4_331de4b.jpeg" alt="ảnh lỗi">

    </div>

    <div class="elementor-divider">
        <h2>MIỄN PHÍ SHIP HOÁ ĐƠN 500K</h2>
    </div>
    <div class="container">
        <div class="elementor-widget-container">
            <img src="./img/anhbox1.png" alt="">
        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
</div>

<div class="elementor-divider">
        <h2>STYLE CỦA BẠN</h2>
    </div>
    <div class="container">
        <div class="elementor-widget-container">
            <img src="./img/anhbox1.png" alt="">
        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
</div>
<div class="elementor-divider">
        <h2>BỘ SƯU TẬP MỚI NHẤT</h2>
    </div>
    <div class="container">
        <div class="elementor-widget-container">
            <img src="./img/anhbox1.png" alt="">
        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
</div>
<div class="elementor-divider">
        <h2>SẢN PHẨM BÁN CHẠY</h2>
    </div>
    <div class="container">
        <div class="elementor-widget-container">
            <img src="./img/anhbox1.png" alt="">
        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
        <div class="elementor-widget-container">
        <img src="./img/anhbox1.png" alt="">

        </div>
</div>
        
        <!-- <div class="box1 swiper-slide-image"></div>
        <img src="https://res.cloudinary.com/wordpressphuongthao/images/v1625125280/slideshow_4_331de4b/slideshow_4_331de4b.jpeg" alt="ảnh lỗi">

    </div>
    <div class="container">
        <div class="swiper-slide-image"></div>
        <img src="https://res.cloudinary.com/wordpressphuongthao/images/v1625125280/slideshow_4_331de4b/slideshow_4_331de4b.jpeg" alt="ảnh lỗi">

    </div>
    <div class="container">
        <div class="swiper-slide-image"></div>
        <img src="https://res.cloudinary.com/wordpressphuongthao/images/v1625125280/slideshow_4_331de4b/slideshow_4_331de4b.jpeg" alt="ảnh lỗi">

    </div>
    <div class="container">
        <div class="swiper-slide-image"></div>
        <img src="https://res.cloudinary.com/wordpressphuongthao/images/v1625125280/slideshow_4_331de4b/slideshow_4_331de4b.jpeg" alt="ảnh lỗi">

    </div> -->
  
    <div class="footer">


        <div class="column l-2-4 me-4 s-6">
            <h3 class="footer__heading">Thành Viên Trong Nhóm</h3>
            <ul class="footer-list">
                <li class="footer-item">
                    <a href="" class="footer-item-link">Nguyễn Bá Cương</a>
                </li>
                <li class="footer-item">
                    <a href="" class="footer-item-link">Cấn Đình Duy</a>
                </li>
                <li class="footer-item">
                    <a href="" class="footer-item-link">Phạm Quang Huy</a>
                </li>
            </ul>
        </div>
        <div class="column l-2-4 me-4 s-6">
            <h3 class="footer__heading">Ngày Sinh</h3>
            <ul class="footer-list">
                <li class="footer-item">
                    <a href="" class="footer-item-link">01/03/2003</a>
                </li>
                <li class="footer-item">
                    <a href="" class="footer-item-link">01/03/2003</a>
                </li>
                <li class="footer-item">
                    <a href="" class="footer-item-link">01/03/2003</a>
                </li>
            </ul>
        </div>
        <div class="column l-2-4 me-4 s-6">
            <h3 class="footer__heading">Mã Sinh Viên</h3>
            <ul class="footer-list">
                <li class="footer-item">
                    <a class="footer-item-link">1111111</a>
                </li>
                <li class="footer-item">
                    <a class="footer-item-link">111111</a>
                </li>
                <li class="footer-item">
                    <a class="footer-item-link">11111111</a>
                </li>
            </ul>
        </div>

        <div class="column l-2-4 me-4 s-6">
            <h3 class="footer__heading">Liên hệ với chúng tôi</h3>
            <input class="footer__input" type="text" placeholder="Email address">
            <input type="submit" value="Gửi">
        </div>

    </div>

  




</body>

</html>
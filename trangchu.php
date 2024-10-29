<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Trang chủ</title>
    <link rel="stylesheet" href="./trangchu.css">
    <script src="./script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        /* Căn chỉnh cho container */
        .text-overlay {
            position: absolute;
            width: fit-content;
            padding: 20px;
            /* background-color: rgba(0, 0, 0, 0.4); */
            background: transparent;
            color: white;
            letter-spacing: 3px;
            text-align: center;
            font-size: 23px;
            top: 1040px;
            left: 670px;

            font-family: Arial, sans-serif;
        }

        .text-overlay1 {
            position: relative;
            width: fit-content;
            padding: 20px;
            /* background-color: rgba(0, 0, 0, 0.4); */
            background: transparent;
            color: white;
            letter-spacing: 3px;
            text-align: center;
            font-size: 23px;
            top: -340px;
            left: 670px;

            font-family: Arial, sans-serif;
        }

 
 .elementor-widget-container1 {
  position: relative;
    transition:0.7s ease;
    width: 200px; 
} 


.elementor-widget-container1 img {
  width: 100%;
  display: block;
  padding: 20px 20px;

}


.elementor-widget-container1 .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0) ; 
  transition: background-color 0.7s ease-in-out; 
  width: 262px;
  height: 270px;
  margin-top: 10px;
  margin-left: 18px;


}


.elementor-widget-container1:hover .overlay {
  background-color: rgba(0, 0, 0, 0.2);


}   
  
     .text-overlay2 {
            position: relative;
            width: fit-content;
            padding: 20px;
            /* background-color: rgba(0, 0, 0, 0.4); */
            background: transparent;
            color: white;
            letter-spacing: 3px;
            text-align: center;
            font-size: 23px;
            top: -230px;
            left: 170px;

            font-family: Arial, sans-serif;
        }

        .text-overlay2 a {
            /* background-color: rgba(0, 0, 0, 0.6); */
            padding: 18px 23px;
            border: 3px solid #fefcfc;
            font-size: 1em;
            background: transparent;
            backdrop-filter: blur(20px);

            font-weight: normal;
            color: #fefefe;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
            border-radius: 5px;
            transition: 0.3s ease;
            /* Thiết lập hiệu ứng chuyển tiếp */

        }

        /* Phong cách cho tiêu đề */
        .text-overlay h1,
        .text-overlay1 h1 {
            font-size: 2em;
            font-weight: bold;
            font-family: Garamond, serif;
            letter-spacing: 5px;
            margin: 20px 0;
        }

        /* Phong cách cho dòng phụ */
        .text-overlay a,
        .text-overlay1 a {
            /* background-color: rgba(0, 0, 0, 0.6); */
            padding: 18px 23px;
            border: 3px solid #fefcfc;
            font-size: 1em;
            font-weight: normal;
            color: #fefefe;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
            border-radius: 5px;
            transition: 0.3s ease;
            /* Thiết lập hiệu ứng chuyển tiếp */

        }

        .text-overlay a:hover,
        .text-overlay1 a:hover {
            background-color: rgba(250, 247, 247, 0.7);
            padding: 18px 23px;
            border: 3px solid #fefcfc;
            font-size: 20px;
            transition: 0.3s ease;
            /* Thiết lập hiệu ứng chuyển tiếp */
            font-weight: normal;
            color: #000;
            margin-top: 10px;
            display: inline-block;
            border-radius: 5px;
        }

        .text-overlay2 a:hover {
            padding: 18px 23px;
            border: 3px solid #fefcfc;
            font-size: 20px;
            transition: 0.3s ease;
            /* Thiết lập hiệu ứng chuyển tiếp */
            font-weight: normal;
            margin-top: 10px;
            display: inline-block;
            border-radius: 5px;
        }


        .elementor-widget-container {
            padding: 15px;

        }
    </style>

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
                            <a class="nav-link active" aria-current="page" href="./blogfashion.php">Blog Fashion</a>
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
        <div class="elementor-widget">
            <img src="./img/trangchu/woman-2593366_1280.jpg" alt="">
            <div class="text-overlay">
                <h1>Fashion hiện diện</h1>
                <a href="./index.php">Thiên đường phụ kiện</a>
            </div>
        </div>

    </div>


    <!-- <div class="elementor-divider1 animate__backInRight">
        <h2>SANG TRỌNG QUÝ PHÁI</h2>
    </div> -->

    <?php
    $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
    $sql = "SELECT * From category";
    $ketqua = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($ketqua)) {
        if ($row['CategoryID'] < 4 && $row['CategoryID'] > 2)
            echo '
                            
                            <div class="container">
        <div class="elementor-widget-container ">
            <img src="./img/trangchu/toa-heftiba-KQ1n6HzSahY-unsplash.jpg" alt="" width="799px" height="699px">
            <div class="text-overlay2">
    <h1>Giày thể thao cá tính</h1>
    <a href="./danhmuc.php?iddanhmuc= ' . $row['CategoryID'] . '">Sắm ngay thôi</a>
</div>
        </div></br>';


        else
            echo "";
    }

    ?>


    <?php
    $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
    $sql = "SELECT * From category";
    $ketqua = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($ketqua)) {
        if ($row['CategoryID'] < 3 && $row['CategoryID'] > 1)
            echo '
                            
                           
        <div class="elementor-widget-container " >
            <img src="./img/trangchu/wrist-watch-2159351_640.jpg" alt="" width="799px" height="699px">
            <div class="text-overlay2">
    <h1>Đồng hồ lịch lãm</h1>
    <a href="./danhmuc.php?iddanhmuc= ' . $row['CategoryID'] . '">Sắm ngay thôi</a>
</div>
        </div></br>';


        else
            echo "";
    }

    ?>





    </div>

    <!-- <div class="elementor-divider2 ">
        <h2>STYLE CỦA BẠN</h2>
    </div> -->
    <div class="container">
        <div class="elementor-widget">
            <img style='height:1270px;margin-top:-170px' src="./img/trangchu/freestocks-_3Q3tsJ01nc-unsplash.jpg" alt="">
            <div class="text-overlay1">
                <h1>Xóa tan cái nóng</h1>
                <a href="./index.php">Cần gì phải mong</a>
            </div>
        </div>
    </div>

    <div class="elementor-divider3 " style="text-align: center;margin-top:-150px">
        <h2>BỘ SƯU TẬP MỚI NHẤT</h2>
    </div>
   


    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div style="width:100%;display: flex; justify-content: center;">

  
<a href="./index.php" class="elementor-widget-container1" style=" width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt="" class="d-block w-100">
      <div class="overlay"><i class="fa-regular fa-cart-shopping"></i></div>
  </a>
  <a href="./index.php" class="elementor-widget-container1 " style=" position: relative; width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt=""  class="d-block w-100">
      <div class="overlay"><i class="fa-thin fa-cart-shopping"></i></i></div>

  </a>
  <a href="./index.php" class="elementor-widget-container1 " style=" position: relative; width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt="" style=" position: relative; width: 300px;" class="d-block w-100">
      <div class="overlay"></div>


  </a>

</div>
    </div>
    <div class="carousel-item">
    <div style="width:100%;display: flex; justify-content: center;">

  
<a href="./index.php" class="elementor-widget-container1" style=" width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt="" class="d-block w-100">
      <div class="overlay"><i class="fa-regular fa-cart-shopping"></i></div>
  </a>
  <a href="./index.php" class="elementor-widget-container1 " style=" position: relative; width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt=""  class="d-block w-100">
      <div class="overlay"><i class="fa-thin fa-cart-shopping"></i></i></div>

  </a>
  <a href="./index.php" class="elementor-widget-container1 " style=" position: relative; width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt="" style=" position: relative; width: 300px;" class="d-block w-100">
      <div class="overlay"></div>


  </a>

</div>
    </div>
    <div class="carousel-item">
    <div style="width:100%;display: flex; justify-content: center;">

  
<a href="./index.php" class="elementor-widget-container1" style=" width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt="" class="d-block w-100">
      <div class="overlay"><i class="fa-regular fa-cart-shopping"></i></div>
  </a>
  <a href="./index.php" class="elementor-widget-container1 " style=" position: relative; width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt=""  class="d-block w-100">
      <div class="overlay"><i class="fa-thin fa-cart-shopping"></i></i></div>

  </a>
  <a href="./index.php" class="elementor-widget-container1 " style=" position: relative; width: 300px;">
      <img src="./img/trangchu/anhbox1.png" alt="" style=" position: relative; width: 300px;" class="d-block w-100">
      <div class="overlay"></div>


  </a>

</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span aria-hidden="true" style="font-size:50px;font-weight:700;color: #000;"><</span>
    <span class="visually-hidden">Prev</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span  aria-hidden="true" style="font-size:50px;font-weight:700;color: #000;">></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>









    <div class="container-box ">
        <div class="elementor-widget-container ">
            <img src="./img/trangchu/woman-8793611_640.jpg" alt="">
        </div>
        <div style="font-size: 25px;letter-spacing: 5px;text-align:center" class="elementor-widget-container">
            <p>
            <h4 style="font-size: 55px;padding:10px 0">Shop phụ kiện thời trang</h4>tôn vinh phong cách đương</br>
            đại với những thiết kế tinh tế, sang trọng từ các thương</br>
            hiệu hàng đầu. Mỗi sản phẩm là sự kết hợp hoàn hảo giữa</br>
            chất liệu cao cấp và đường nét tinh xảo. Hãy đến và khám phá </br>
            bộ sưu tập phụ kiện mới nhất! <h4 style="font-size: 35px;padding:10px 0">nơi thời trang và đẳng cấp hội tụ!</h4>
            </p>

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

            <h5>Hotline :<a style="color: #28d0d0;" href="tel:0975242481"> 0975242481</a></h5>

            <h5>Email:<a style="color: #28d0d0;" href="mailto:cuongmja532@gmail.com"> cuongmja532@gmail.com</a></h5>
            <p style="font-size:18px">Hân hạnh được phục vụ quý khách.</p>
        </div>

    </div>






</body>

</html>
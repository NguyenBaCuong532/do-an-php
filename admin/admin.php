<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Admin</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="javascript.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>


<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Admin</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="./qltkhoan.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Quản lý tài khoản</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./qlspham.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Quản lý sản phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Xác thực</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="../auth/dangnhap.php" class="sidebar-link">Đăng nhập</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../auth/dangky.php" class="sidebar-link">Đăng ký</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="./qldhang.php" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Quản lý đơn hàng</span>
                    </a>

                </li>
                <li class="sidebar-item">
                    <a href="./qlphoi.php" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Quản lý phản hồi</span>
                    </a>
                </li>

            </ul>
          
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown" style="display: flex;">
                                <img src="../img/icon/admin.png" width="150px" height="130px"  alt="" style="padding: 20px;border-radius:50%">
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

                            <div class="dropdown-menu dropdown-menu-end rounded">

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-4">
            <div class="slideshow">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
   					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  				</ol>
  				<div class="carousel-inner">
    				<div class="carousel-item active">
    					 <img class="d-block w-100 h-50" src="../img/images (1).jpg" alt="First slide" width="100%" height="200px">
   					</div>
    				<div class="carousel-item">
      					<img class="d-block w-100 h-50" src="../img/images.jpg" alt="Second slide" width="100%" height="200px">
    				</div>
    				<div class="carousel-item">
     					<img class="d-block w-100 h-50" src="../img/pngtree-technology-line-business-geometric-image_23385.jpg" width="100%" height="200px" alt="Third slide">
   					</div>
   					<div class="carousel-item">
     					<img class="d-block w-100 h-50" src="../img/images (2).jpg" alt="Fourth slide" width="100%" height="200px">
   					</div>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
   					<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   					<span class="carousel-control-next-icon" aria-hidden="true"></span>
   					<span class="sr-only">Next</span>
  				</a>
			</div>
			
		</div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>

                <div class="footer" style=" display: flex; height: 251px;">


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

            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</body>

</html>
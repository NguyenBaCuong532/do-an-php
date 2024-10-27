<?php
session_start();
if (isset($_POST['submit'])) {
    $total = $_POST["total"];
    foreach ($_POST['qty'] as $key => $value) {
        if (($value == 0) and (is_numeric($value))) {
            unset($_SESSION['cart'][$key]);
        } else if (($value > 0) and (is_numeric($value))) {
            $_SESSION['cart'][$key] = $value;
        }
    }
    header("location:./giohang.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Trang chủ</title>
    <link rel="stylesheet" href="giohang.css">
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
                            <a class="nav-link active" aria-current="page" href="#">Blog Fashion</a>
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
                            <a class="nav-link" href="#">Thanh Toán</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên Hệ</a>
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
    <div class="container">
        <nav class="category">
            <h3 class="category-heading">
                <i class="category-heading-icon fas fa-bars"></i>
                Danh Mục Sản Phẩm
            </h3>
            <div class="scoll">

                <p>
                    <a class="btn btn-lg" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Phụ Kiện Giày
                    </a>

                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <ul class="category-list">
                            <li class="category-item category-item--active">
                                Giày
                            </li>
                            <li class="category-item category-item--active">
                                Khuyên tai
                            </li>
                            <li class="category-item category-item--active">
                                Ví
                            </li>

                        </ul>
                    </div>
                </div>
                <p>
                    <a class="btn btn-lg" data-toggle="collapse" href="#collapseExample0" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Phụ Kiện Dép

                    </a>

                </p>
                <div class="collapse" id="collapseExample0">
                    <div class="card card-body">
                        <ul class="category-list">
                            <li class="category-item category-item--active">
                                Giày
                            </li>
                            <li class="category-item category-item--active">
                                Khuyên tai
                            </li>
                            <li class="category-item category-item--active">
                                Ví
                            </li>

                        </ul>
                    </div>
                </div>
                <p>
                    <a class="btn btn-lg" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Phụ Kiện Trang Sức

                    </a>
                </p>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body">
                        <ul class="category-list">
                            <li class="category-item category-item--active">
                                Giày
                            </li>
                            <li class="category-item category-item--active">
                                Khuyên tai
                            </li>
                            <li class="category-item category-item--active">
                                Ví
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </nav>


        <!-- -----------------------------------------end-menu trái-------------------------------------------------- -->

        <!-- ----------------------------------------------start sản phẩm------------------------------------------- -->
        <div class="addcart">
            <?php
            $total = 0;
            $ok = 1;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $k => $v) {
                    if (isset($k)) {
                        $ok = 2;
                    }
                }
            }
            if ($ok == 2) {
                echo "<form action='./giohang.php' method='post'>";
                foreach ($_SESSION['cart'] as $key => $value) {
                    $item[] = $key;
                }
                $str = implode(",", $item);
                $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
                $sql = "SELECT * from product where ProductID in ($str)";
                $query = mysqli_query($conn, $sql);

                echo '
                <div class="cart"> 
						<table id="cart" class="table table-hover table-condensed"> 
						<thead> 
						<tr> 
							<th style="width:10%">Sản phẩm</th>
							<th style="width:40%"></th> 
							<th style="width:20%">Giá</th> 
							<th style="width:12%">Số lượng</th> 
							<th style="width:22%" class="text-center">Thành tiền</th> 
							<th style="width:10%"> </th> 
							
						</tr> 
						</thead> 
                ';
                while ($row = mysqli_fetch_array($query)) {
                    echo
                    '
							
						<tbody><tr> 
						<td class="product"> 	
							<div class="row product-name"> 

							<div class="col-sm-2 hidden-xs">
                            <img style="border-radius:10px" src="./img/' . $row['Image'] . '" alt="Sản phẩm 1" class="img-responsive" width="100">			
	                    	</div> 
							 
							</div> 
							
						</td> 

						<td class="name"> 	
                        <div style="margin-left:-360px;margin-top:50px"> 
							<h4 >' . $row['Name'] . '</h4> 
							</div>
						</td> 


						<td class="Price" style="margin-top:50px">
                        <div style="margin-top:50px"> 
							' . number_format($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01)), 3) . 'đ
							</div>
                        </td> 
						<td class="Quantity">
						<input class="form-control text-center" style="margin-top:45px" type="number" min="1" name="qty[' . $row['ProductID'] . ']" value="' . $_SESSION['cart'][$row['ProductID']] . '">
						</td> 
						<td class="Subtotal" style="text-align: center;margin-top:50px">
                        <div style="margin-top:50px"> 
							 ' . number_format($_SESSION['cart'][$row['ProductID']] * ($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01))), 3) . ' đ
                        </div>
                        
                       </td> 
						<td class="actions" class="">
							<button class="btn btn-info btn-sm" <img style="border-radius:10px;font-size:17px;margin-left:8px;margin-top:7px" name="submit"><i class="fa fa-edit"></i>
							</button> 
							<a class="btn btn-sm" href="./xoa.php?productid=' . $row['ProductID'] . '"> <img style="border-radius:10px;margin-top:7px" src="./img/logo.png" width="35px" height="35px"> </a>
							
						</td> 
						</tr> 
						</tbody><tfoot> 
						<tr class="visible-xs"> 
							<td class="text-center"><strong></strong>
							</td> 
						</tr> 
						<tr> 
						';
                    $total += $_SESSION['cart'][$row['ProductID']] * ($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01)));

                    $_SESSION['total'] = $total;
                }
            ?>
                <?php
                echo '
							<td><a href="./index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Mua tiếp</a>
							</td> 
							<td colspan="2" class="hidden-xs"> </td> 
							<td class="hidden-xs text-center" style="font-weight:700">Tổng tiền<strong style=" color:red"> ' . number_format($total,3) . 'đ</strong>
							</td> 
							<td><a href="../pages/thanhtoan.php" class="btn btn-success btn-block" style="padding:8px 10px;width:160px;margin-left:35px">Thanh toán <i class="fa fa-angle-right"></i></a>
							</td> 
						</tr> 
						</tfoot> 
						</table>
						</div>
							';
                ?>
                <br />
            <?php
                echo "<div class='pro' align='center'>";
                echo " 	<b>
							<div align='center'>
							<img src='../img/reload.png' width='20px'  height='20px'>
							<input type='submit' name='submit' value='Cập nhật giỏ hàng'>
						</div><br/>
						<a href='../pages/xoa.php?productid=0'><img src='./img/logo.jpg' width='20px' height='20px'>Xóa bỏ giỏ hàng</a>
									</b>";
            } else {
                echo "<div class='pro'>";
                echo "	<p align='center'>
										Bạn không có món hàng nào trong giỏ hàng <br/>
										<a href='./index.php'>
											<img src='./img/giohang.png' width='40px' height='40px'>
											Mua giày mới nào!
										</a>
									</p>";
                echo "</div>";
            }
            ?>


        </div>
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
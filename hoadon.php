<?php
session_start();
 $_SESSION['check']=1;
if (isset($_POST['submit'])) {

    unset($_SESSION['username']); // xóa session login

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Giỏ Hàng</title>
    <link rel="stylesheet" href="giohang.css">
    <link rel="stylesheet" href="danhmuc.css">
    <link rel="stylesheet" href="hoadon.css">


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
    <div class="container" style="min-height: 487px;">
        <!-- <nav class="category">
            <h3 class="category-heading">
                <i class="category-heading-icon fas fa-bars"></i>
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
        </nav> -->


        <!-- -----------------------------------------end-menu trái-------------------------------------------------- -->

        <!-- ----------------------------------------------start sản phẩm------------------------------------------- -->
        <div class="addcart" style="margin-left: 200px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.2) inset; ">
            <?php
            if($_SESSION['check']==$_SESSION['thanhtoan']){
                $total = 0;
                $ok = 1;
                if (isset($_SESSION['hoadon'])) {
                    foreach ($_SESSION['hoadon'] as $k => $v) {
                        if (isset($k)) {
                            $ok = 2;
                        }
                    }
                }
                if ($ok == 2) {
                    echo "<form action='./giohang.php' method='post'>";
                    foreach ($_SESSION['hoadon'] as $key => $value) {
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
                                <img style="border-radius:10px" src="./img/sanpham/' . $row['Image'] . '" alt="Sản phẩm 1" class="img-responsive" width="100">			
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
                            <p style="line-height:123px;margin-left:20px">' . $_SESSION['hoadon'][$row['ProductID']] .' </p>
                            </td> 
                            <td class="Subtotal" style="text-align: center;margin-top:50px">
                            <div style="margin-top:50px"> 
                                 ' . number_format($_SESSION['hoadon'][$row['ProductID']] * ($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01))), 3) . ' đ
                            </div>
                            
                           </td> 
                            
                            </tr> 
                            </tbody><tfoot> 
                            <tr class="visible-xs"> 
                                </td> 
                            </tr> 
                            <tr> 
                            ';
                        $total += $_SESSION['hoadon'][$row['ProductID']] * ($row['Price'] - ($row['Price'] * ($row['Sale'] * 0.01)));
    
                    }
                ?>
        

                    <?php
                    echo '
                                
                                <td colspan="2" class="hidden-xs"> </td> 
                                <td colspan="2" class="hidden-xs"><input class="btn btn-outline-info" type="submit" name="submit1" value="Xóa Hóa Đơn"/> </td> 
    
                                <td  text-center" style="font-weight:700">Tổng tiền<strong style=" color:red"> ' . number_format($total, 3) . 'đ</strong>
                                </td> 
                                
                            </tr> 
                            </tfoot> 
                            </table>
                            </div>
                                ';

                                if (isset($_POST['submit1'])) {

                                    unset($_SESSION['cart']); 
                                    header('Location: ./giohang.php');
                                
                                }
                                  
                    ?>
                    <br />
                <?php
                  
                } 
                  echo' <div class="stamp">ĐÃ ĐẶT HÀNG</div>';
            }
            else{
                echo '<h2 style="color:red;line-height:350px;width:800px;text-align:center ">Bạn chưa có đơn thanh toán nào.</h2>';
            }


   
            ?>
           


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
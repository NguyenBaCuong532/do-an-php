<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Trang | Trang chủ</title>
    <link rel="stylesheet" href="index.css">
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
                <a class="navbar-brand" href="trangchu.php">Trang Chủ</a>
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
        <?php
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        $conn = mysqli_connect('localhost', 'root', '', 'dawtmdt_phukienthoitrang');

        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(ProductID) as total from product');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];

        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;

        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }

        // Tìm Start
        $start = ($current_page - 1) * $limit;

        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM product ORDER BY ProductID DESC  LIMIT $start, $limit");

        ?>
        <div class="home-product">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['StockQuantity'] > 0) {
                    echo '<div class="column l-2-4 me-4 s-6" >
                    <a class="home-product-item" href="../pages/sanpham.php?id= '.$row['ProductID'].'">>
                        <div class="home-product-item__img" style="background-image:url(./img/'.$row['Image'] .')">
                        </div>
                        <h4 class="home-product-item__name">'.$row['Name'].'</h4>
                        <div class="home-product-item__price">
                            <div class="home-product-item__price-old">'.number_format($row['Price'],3).'đ</div>
                            <div class="home-product-item__price-new">'.number_format($row['Price']-($row['Price']* ($row['Sale']* 0.01)),3).'đ</div>
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
                            <span class="home-product-item__sold">Số lượng: '.$row['StockQuantity'].'</span>
                        </div>
                        
                        <div class="home-product-item__favorite">
                            <i class="home-product-item__favorite-icon fas fa-check"></i>
                            <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale">
                            <span class="home-product-item__sale-percent">'.$row['Sale'].'%</span>
                            <span class="home-product-item__sale-label">GIẢM
                            </span>
                        </div>
                    </a>
                </div>';	
                } else {
                    echo '<div class="column l-2-4 me-4 s-6" >
                    <a class="home-product-item" href="../pages/sanpham.php?id= '.$row['ProductID'].'">>
                        <div class="home-product-item__img" style="background-image:url(./img/'.$row['Image'] .')">
                        </div>
                        <h4 class="home-product-item__name">'.$row['tensp'].'</h4>
                        <div class="home-product-item__price">
                            <div class="home-product-item__price-old">'.number_format($row['Price'],3).'đ</div>
                            <div class="home-product-item__price-new">'.number_format($row['Price']-($row['Price']* ($row['Sale']* 0.01)),3).'đ</div>
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
                            <span class="home-product-item__sold">Số lượng: Hết hàng</span>
                        </div>
                        
                        <div class="home-product-item__favorite">
                            <i class="home-product-item__favorite-icon fas fa-check"></i>
                            <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale">
                            <span class="home-product-item__sale-percent">25%</span>
                            <span class="home-product-item__sale-label">GIẢM
                            </span>
                        </div>
                    </a>
                </div>';	
                  
                }
            }

            ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <!-- sản phẩm -->


        </div>

    </div>

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

    </div>




</body>

</html>
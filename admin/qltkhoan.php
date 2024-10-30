<?php
session_start();
if (isset($_POST['submit'])) {

    unset($_SESSION['username']); // xóa session login
    header('Location: ../auth/dangnhap.php');

}

$conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
$sql = "SELECT * FROM user";
$ketqua = mysqli_query($conn, $sql);
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $delete_sql = "DELETE FROM user WHERE id = '$delete_id'";
    mysqli_query($conn, $delete_sql);

    header('Location: ./qltkhoan.php');

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="admin.css">

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
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row"> 
                             <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="highlight">
                                            <th scope="col">STT</th>
                                            <th scope="col">Tên tài khoản</th>
                                            <th scope="col">Mật khẩu</th>

                                            <th scope="col">Họ tên</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Địa chỉ</th>
                                            <th scope="col">Phân quyền</th>
                                            <th scope="col"></th>





                                        </tr>
                                    </thead> 
                                    <tbody >
                     <?php
                           
                            $stt = 1;

                            while ($row = mysqli_fetch_array($ketqua)) {

                                $hiddenPass = '*******' . substr($row['Password'], 7);
                                echo "<tr>";
                                echo "<td>" . $stt . "</td>";
                                echo "<td>" . $row['Username'] . "</td>";
                                echo "<td>" .  $hiddenPass  . "</td>";
                                echo "<td>" . $row['Name'] . "</td>";

                                echo "<td>" . $row['Email'] . "</td>";
                                echo "<td>" . $row['Phone'] . "</td>";
                                echo "<td>" . $row['Address'] . "</td>";
                                echo "<td>" . $row['Role'] . "</td>";



                                echo '<td>
                                            <div style="display:flex">

                                <form action="edituser.php" method="GET" style="display:inline-block; margin-bottom:10px">
                                    <input type="hidden" name="edit_id" value="' . $row['Id'] . '">
                                    <button type="submit" name="submit2" style="border:none; background:none;">
                                        <img src="../img/trangchu/edit.webp" alt="Sửa" width="40px" height="40px">
                                    </button>
                                </form>


                                

                                <form action="" method="POST">
                                    <input type="hidden" name="delete_id" value="' . $row['Id'] . '">
                                    <button type="submit" name="submit1" style="border:none; background:none;">
                                        <img src="../img/icon/logo.png" alt="" width="40px" height="40px">
                                    </button>
                                </form>
                                </div>
                              </td>';
                        echo "</tr>";
                                $stt++;
                            }
                       

                            mysqli_close($conn);
                            ?>
                          
                                   
                                    
                                    </tbody>
                                </table>
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
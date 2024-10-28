<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm vào giỏ hàng</title>
</head>
<body>
<?php
        $conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");
        $sql ="select * from product ";
        $query=mysqli_query($conn,$sql);
        $id=$_GET['item'];
        if(isset($_SESSION['cart'][$id]))
            {
                $qty = $_SESSION['cart'][$id] + 1;
            }
        else
            {
                $qty=1;
            }
        $_SESSION['cart'][$id]=$qty;
        header("location:./giohang.php");
exit();
?>
</body>
</html>
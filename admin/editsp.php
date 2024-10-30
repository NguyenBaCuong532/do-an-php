<?php
// Kết nối tới cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");

// Kiểm tra nếu đã nhận được id người dùng để sửa
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    
    // Lấy thông tin người dùng dựa trên id
    $sql = "SELECT * FROM product WHERE ProductID = '$edit_id'";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);

    // Kiểm tra nếu người dùng không tồn tại
    if (!$product) {
        echo "Sản phẩm không tồn tại!";
        exit();
    }
} else {
    echo "Không tìm thấy ID Sản phẩm!";
    exit();
}

// Xử lý khi form được gửi đi để cập nhật dữ liệu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $giamgia = $_POST['giamgia'];
    $hang = $_POST['hang'];

    

    // Câu lệnh SQL để cập nhật thông tin người dùng
    $update_sql = "UPDATE product SET Name='$name', Price='$gia', StockQuantity='$soluong', Sale='$giamgia', Company='$hang' WHERE ProductID='$edit_id'";
    
    if (mysqli_query($conn, $update_sql)) {
        echo "Cập nhật thông tin thành công!";
        // Quay lại trang chính sau khi cập nhật
        header("Location: ./qlspham.php");
        exit();
    } else {
        echo "Cập nhật thất bại: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa người dùng</title>
</head>

<script>
        // Hàm định dạng giá với dấu phân tách hàng nghìn
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Hàm xử lý sự kiện nhập liệu
        function formatInput(input) {
            // Xóa các dấu chấm cũ để lấy số nguyên
            let value = input.value.replace(/\./g, "");

            // Kiểm tra nếu là số, tiến hành định dạng
            if (!isNaN(value)) {
                input.value = formatNumber(value);
            } else {
                input.value = ""; // Nếu không hợp lệ, xóa giá trị
            }
        }
    </script>
<style>
        /* Định dạng form */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Định dạng nút trở lại trang chính */
        .back-button {
            display: inline-block;
            margin-top: 15px;
            font-size: 14px;
            color: #333;
            text-align: center;
        }

        .back-button a {
            color: #4CAF50;
            text-decoration: none;
        }

        .back-button a:hover {
            text-decoration: underline;
        }
    </style>
<body>

    <form action="" method="POST">
<h2>Chỉnh sửa thông tin người dùng</h2>
    <label for="phone">Ảnh</label><br>
    <input type="text" value="<?php echo $product['Image']; ?>" readonly><br><br>
    <label for="username">Tên sản phẩm</label><br>
    <input type="text" id="name" name="name" value="<?php echo $product['Name']; ?>" required><br><br>

    <label for="name">Giá</label><br>
    <input oninput="formatInput(this)" type="text" id="gia" name="gia" value="<?php echo number_format($product['Price'],3) ; ?>" required><br><br>

    <label for="phanloaiid">Phân loại:</label>
    <select name="phanloaiid" id="phanloaiid" >
    <option value="0">Giày dép</option>
    <option value="1">Chọn phân loại</option>
    <option value="2">Chọn phân loại</option>
    <option value="3">Chọn phân loại</option>
        <?php
        // Lấy danh sách phân loại
        $sqlCategories = "SELECT * FROM category";
        $resultCategories = mysqli_query($conn, $sqlCategories);
        while ($row = mysqli_fetch_assoc($resultCategories)) {
            echo "<option value='{$row['phanloaiid']}'" . ($row['phanloaiid'] == $product['phanloaiid'] ? ' selected' : '') . ">{$row['phân_loại']}</option>";
        }
        ?>
    </select><br>



    <label for="address">Address:</label><br>
    <input type="text" id="giamgia" name="giamgia" value="<?php echo $product['Sale']; ?>" required><br><br>

    <label for="role">Hãng</label><br>
    <input type="text" id="hang" name="hang" value="<?php echo $product['Company']; ?>" required><br><br>

    <button type="submit">Lưu thay đổi</button>
</form>

</body>
</html>

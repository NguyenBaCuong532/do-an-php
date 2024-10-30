<?php
// Kết nối tới cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "dawtmdt_phukienthoitrang");

// Kiểm tra nếu đã nhận được id người dùng để sửa
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    
    // Lấy thông tin người dùng dựa trên id
    $sql = "SELECT * FROM phanhoi WHERE phanhoi_id = '$edit_id'";
    $result = mysqli_query($conn, $sql);
    $phanhoi = mysqli_fetch_assoc($result);

    // Kiểm tra nếu người dùng không tồn tại
    if (!$phanhoi) {
        echo "Người dùng không tồn tại!";
        exit();
    }
} else {
    echo "Không tìm thấy ID mục phản hồi!";
    exit();
}

// Xử lý khi form được gửi đi để cập nhật dữ liệu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nd = $_POST['noidung'];

    // Câu lệnh SQL để cập nhật thông tin người dùng
    $update_sql = "UPDATE phanhoi SET  noidung='$nd' WHERE phanhoi_id='$edit_id'";
    
    if (mysqli_query($conn, $update_sql)) {
        echo "Cập nhật thông tin thành công!";
        // Quay lại trang chính sau khi cập nhật
        header("Location: ./qlphoi.php");
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
<h2>Chỉnh sửa phản hồi người dùng</h2>

    <label for="noidung">Username:</label><br>
    <input type="text" id="noidung" name="noidung" value="<?php echo $phanhoi['noidung']; ?>" required><br><br>


    <button type="submit">Lưu thay đổi</button>
</form>

</body>
</html>

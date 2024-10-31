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
       @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: -webkit-linear-gradient(left, #4e91f5, #49df1d);
}
::selection{
  background: #fa4299;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.title.login{
  background: -webkit-linear-gradient(left, #ff9a9e, #fad0c4);
  -webkit-background-clip: text;
  color: transparent;

}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}

.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}

.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
/* .form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
} */

.input-group{
  position: relative;
  width: 320px;
  margin: 30px 0;
}
.input-group label{
  position: absolute;
   top: 50%;
  left: 25px;
  transform: translateY(-50%);
  font-size: 18px;
  color: #333;
  padding: 0 5px;
  pointer-events: none;
  transition: .5s;

}
.input-group input{
  width: 100%;
  height: 40px;
  font-size: 16px;
  color: #333;
  padding: 0 10px;
  background: transparent;
  border: 1px solid #333;
  outline: none;
  border-radius: 5px;
}
.input-group input:focus~label,
.input-group input:valid~label{
  top: -5px;
  left: -3px;
  font-size: 14px;
  background: #fff;
  color: #fc83bb;

}
.form-inner form .input-group input:focus{
  border-color: #fc83bb;
  box-shadow: inset 0 0 3px #fb6aae;
}


.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 80%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #dadc16, #6bfe40, #5448ed, #1de339);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 90%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}
    </style>
<body>

<div class="wrapper" style="width:590px">
        <div class="title-text">
            
            <div class="title signup">
            Chỉnh sửa phản hồi người dùng
            </div>
        </div>

        <div class="form-container">
        
         <div class="form-inner">
        <form action="" method="POST" class="signup" style="margin-left: 61px;">



<div class="input-group">


    <input type="text" id="noidung" name="noidung" value="<?php echo $phanhoi['noidung']; ?>" required><br><br>
    <label for="noidung">Username:</label><br>
</div>


<div class="input-group btn">
                <div class="btn-layer"></div>
                <input type="submit" name="btn_submit" class="submit" value="Lưu thay đổi">
            </div>
</form>

</body>
</html>

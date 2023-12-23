<?php
session_start();
include('config/connect.php');

if (isset($_POST['dangnhap'])) {
    $email = $_POST['usernamez'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $_SESSION['dangnhap'] = $row; // Store user data in session
            header('Location: index.php'); // Redirect to dashboard after successful login
            exit();
        }
    } else {
        echo '<script>
            alert("Tài khoản hoặc mật khẩu không đúng");
            </script>';
        header('Location: login.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
</head>

<body>
    <!-- <div class="warpper">
    <form action="" method="POST">
        <h1>LOGIN</h1>
       <div class="taikhoan">
           <label for=""> Tài Khoản</label><br>
           <input type="text" name="usernamez">
       </div>

       <div class="matkhau">
           <label for=""> Mật khẩu</label><br>
           <input type="password" name="password">
       </div>
       <div>
           <input type="submit" name="dangnhap" value="Đăng Nhập">
       </div>
    </form>
    </div> -->
    <div class="top_link"><a href="../index.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Về
            trang chủ</a></div>
    <form class="login" action="" method="POST">
        <h2 style="text-align: center">ADMIN LOGIN</h2>
        <input type="text" placeholder="Username" name="usernamez">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="dangnhap">Login</button>
    </form>

</body>

</html>
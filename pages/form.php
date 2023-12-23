<?php
// Get the values from the form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$investment = $_POST['invest'];

// Create a connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO franchise (name, email, phone, address, investment) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $address, $investment);

// Execute the statement
$stmt->execute();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/NhuongQuyen/logo_icon.png" type="image/x-icon" />
    <title>Successfully</title>
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <div class="main">
        <div class="success">
            <div class="icon"></div>

            <?php
            $name = $_POST['name'];
            if (empty($name)) {
                echo "<h1 class='title'>Chúc mừng bạn</h1>";
            } else {
                echo "<h1 class='title'>Chúc mừng {$name}</h1>";
            }
            ?>

            <p class="successfully">đã thành công đăng ký nhượng quyền</p>

            <?php
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            if (empty($email) || empty($phone)) {
                echo "<p class='desc'>Chúng tôi sẽ sớm hệ với bạn qua email hoặc số điện thoại bạn đã đăng ký</p>";
            } else {
                echo "<p class='desc'>Chúng tôi sẽ sớm hệ với bạn qua email: {$email} hoặc số điện thoại: {$phone}</p>";
            }
            ?>

            <a href="../index.php" class="home">Quay về trang chủ</a>
        </div>
    </div>
</body>

</html>
<?php
// Kết nối với cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Nhận dữ liệu từ AJAX request
$title = $_POST['title'];
$img = $_POST['img'];
$customize = $_POST['customize'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// Tạo câu truy vấn SQL
$sql = "INSERT INTO order_cart (title, image, customize, quantity, name, address, phone)
VALUES ('$title', '$img', '$customize', '$quantity', '$name', '$address', '$phone')";

// Thực hiện câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

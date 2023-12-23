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

// Kiểm tra xem ID đã được truyền qua URL hay chưa
if (isset($_GET['id'])) {
    // Nhận ID từ URL
    $id = intval($_GET['id']);

    // Tạo câu truy vấn SQL
    $sql = "DELETE FROM order_cart WHERE id=$id";

    // Thực hiện câu truy vấn
    if ($conn->query($sql) === TRUE) {
        header('Location:../../index.php?action=quanlyorder&query=lietke');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
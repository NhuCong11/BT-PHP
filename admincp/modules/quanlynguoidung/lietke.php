<?php
$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn) {
    $sql_lietke_nguoidung = "SELECT * FROM users ORDER BY id DESC";
    $result_lietke_nguoidung = mysqli_query($conn, $sql_lietke_nguoidung);
} else {
    echo "Database connection failed.";
    exit();
}
?>
<p>Danh sách người dùng</p>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="2"></th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_nguoidung)) {
        $i++;
    ?>
    <tr>
        <td style="height:100px;"> <?php echo $i ?></td>
        <td> <?php echo $row['name'] ?></td>
        <td> <?php echo $row['email'] ?></td>
        <td> <?php echo $row['password'] ?></td>
        <td>
            <a href="?action=quanlynguoidung&query=sua&id=<?php echo $row['id'] ?>"> Sửa </a>
        </td>
        <td>
            <a href="modules/quanlynguoidung/xuly.php?id=<?php echo $row['id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
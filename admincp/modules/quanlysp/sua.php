<?php
$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['id'])) {
    $sql_sua_sp = "SELECT * FROM order_hots WHERE id='" . $_GET['id'] . "' LIMIT 1";
    $result_sua_sp = mysqli_query($conn, $sql_sua_sp);
} else {
    // Handle the case where 'id' is not set in the URL
    echo "No ID parameter found in the URL.";
    exit();
}
?>
<p>Sửa sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysp/xuly.php?id=<?php echo $_GET['id'] ?>" enctype="multipart/form-data">
        <?php
        while ($row = mysqli_fetch_array($result_sua_sp)) {
        ?>

        <tr>
            <th colspan="2">Nhập thông tin sản phẩm</th>
        </tr>
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="<?php echo $row['title'] ?>" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp" value="<?php echo $row['id'] ?>"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="giasp" value="<?php echo $row['price'] ?>"></td>
        </tr>
        <tr>
            <td>Giảm giá</td>
            <td><input type="text" name="giamGia" value="<?php echo $row['discount'] ?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh">
                <img src="modules/quanlysp/uploads/<?php echo $row['image'] ?> " width="150px">
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suasanpham"></td>
        </tr>
    </form>
    <?php
        }
?>
</table>
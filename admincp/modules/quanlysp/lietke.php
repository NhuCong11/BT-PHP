<?php
$sql_lietke_sp = "SELECT * FROM order_hots ORDER BY id DESC";
$result_lietke_sp = mysqli_query($conn, $sql_lietke_sp);
?>
<h3>Danh sách các sản phẩm</h3>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Hình ảnh </td>
        <td>Giá sản phẩm</td>
        <td>Giảm giá</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_sp)) {
        $i++;
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $i ?></td>
            <td style="width:150px;height:150px; text-align: center;">
                <?php echo $row['title'] ?>
            </td>

            <td style="width:150px;height:150px;">
                <img src="modules/quanlysp/uploads/<?php echo $row['image'] ?>" width="100%">
            </td>

            <td style="width:150px;text-align: center;">
                <?php
                $price = str_replace('.', '', $row['price']); // Remove the '.'
                $price = str_replace('đ', '', $price); // Remove the 'đ'
                echo number_format($price, 0, ',', '.') . 'VNĐ';
                ?>
            </td>

            <td style="width:150px;text-align: center;">
                <?php
                $discount = str_replace('.', '', $row['discount']); // Remove the '.'
                $discount = str_replace('đ', '', $discount); // Remove the 'đ'
                echo number_format($discount, 0, ',', '.') . 'VNĐ';
                ?>
            </td>

            <td>
                <a href="modules/quanlysp/xuly.php?id=<?php echo $row['id'] ?>">Xóa</a>|
                <a href="?action=quanlysanpham&query=sua&id=<?php echo $row['id'] ?>">Sửa</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>
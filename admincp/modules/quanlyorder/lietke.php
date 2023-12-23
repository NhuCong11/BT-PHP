<?php
$sql_lietke_order = "SELECT * FROM order_cart ORDER BY name DESC";
$result_lietke_order = mysqli_query($conn, $sql_lietke_order);
?>
<h3>Danh sách đặt hàng</h3>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Hình ảnh </td>
        <td>Tùy chỉnh</td>
        <td>Số lượng</td>
        <td>Người đặt</td>
        <td>Địa chỉ giao</td>
        <td>Số ĐT</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_order)) {
        $i++;
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $row['id'] ?></td>
            <td style="width:150px; height:150px; text-align: center;">
                <?php echo $row['title'] ?>
            </td>

            <td style="width:150px;height:150px;">
                <img src="modules/quanlyorder/uploads/<?php echo $row['image'] ?>" width="100%">
            </td>

            <td style="width:150px;text-align: center;">
                <?php echo $row['customize'] ?>
            </td>

            <td style="width:100px;text-align: center;">
                <?php echo $row['quantity'] ?>
            </td>

            <td style="width:150px;text-align: center;">
                <?php echo $row['name'] ?>
            </td>

            <td style="width:200px;text-align: center;">
                <?php echo $row['address'] ?>
            </td>

            <td style="width:150px;text-align: center;">
                <?php echo $row['phone'] ?>
            </td>

            <td>
                <a href="modules/quanlyorder/xuly.php?id=<?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>
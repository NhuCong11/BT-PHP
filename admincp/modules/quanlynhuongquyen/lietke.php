<?php
$sql_lietke_sp = "SELECT * FROM franchise ORDER BY id DESC";
$result_lietke_sp = mysqli_query($conn, $sql_lietke_sp);
?>
<h3>Danh sách đăng kí nhượng quyền</h3>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Investment</td>
    </tr>
    <?php
    $i = 0;
    if (mysqli_num_rows($result_lietke_sp) > 0) {
        while ($row = mysqli_fetch_array($result_lietke_sp)) {
            $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['investment'] ?></td>
                <td>
                    <a href="modules/quanlynhuongquyen/xuly.php?id=<?php echo $row['id'] ?>">Xóa</a>|
                </td>
            </tr>
    <?php
        }
    } else {
        echo "<p>There is no franchise registration</p>";
    }
    ?>
</table>
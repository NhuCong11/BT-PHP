<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="../css/cart.css">
    <script src="../javascript/cart.js"></script>
    <link rel="shortcut icon" href="../assets/images/CuaHang/favicon-32x32-1.png" type="image/x-icon">
</head>

<body>
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

    // Kiểm tra xem form đã được submit hay chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Nhận dữ liệu từ form
        $name = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        // Nhận dữ liệu từ localStorage thông qua JavaScript
        echo " <script>
            var cartData = JSON.parse(localStorage.getItem('cart_data'));
            for (var i = 0; i < cartData.length; i++) {
                var id = cartData[i].id;
                var title = cartData[i].title;
                var img = cartData[i].img.split('/').pop(); // chỉ lấy tên file hình ảnh
                var customize = '70% đường,100% đá,'; // Giả sử customize là cố định
                var quantity = cartData[i].quantity;

                // Gửi dữ liệu đến PHP thông qua AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'insert.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Xóa dữ liệu trong localStorage khi request hoàn tất và thành công
                        localStorage.removeItem('cart_data');
                        // Chuyển hướng đến trang order.php
                        window.location.href = 'order.php';
                    }
                }
                xhr.send('id=' + id + '&title=' + title + '&img=' + img + '&customize=' + customize + '&quantity=' + quantity + '&name=' + '$name' + '&address=' + '$address' + '&phone=' + '$phone');
            }
        </script>";
    }

    $conn->close();
    ?>

    <div class="main">

        <form action="" method="POST" class="form" id="form-1" onsubmit="return checkCart();">
            <h3 class="heading">Vui lòng điền thông tin đặt hàng</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Họ tên</label>
                <input id="fullname" name="fullname" type="text" placeholder="VD: Như Công" class="form-control"
                    required>
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Địa chỉ giao hàng</label>
                <input id="address" name="address" type="text" placeholder="VD: Hà nội" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input id="phone" name="phone" type="text" placeholder="VD: +84 ..." class="form-control" required>
            </div>

            <input type="submit" class="form-submit" name="submit" value="Đặt hàng" disabled>
        </form>

        <div class="product">
            <h2>Danh sách sản phẩm</h2>
            <h3 id="message-cart">Không có sản phẩm nào trong giỏ hàng</h3>
        </div>
    </div>

    <script>
    function checkCart() {
        // Kiểm tra xem có sản phẩm nào trong giỏ hàng hay không
        var cartData = JSON.parse(localStorage.getItem('cart_data'));
        if (cartData && cartData.length > 0) {
            // Nếu có sản phẩm, cho phép form được gửi
            return true;
        } else {
            // Nếu không có sản phẩm, ngăn chặn việc gửi form và hiển thị thông báo
            alert("Không có sản phẩm nào trong giỏ hàng!");
            return false;
        }
    }
    </script>

</body>

</html>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/images/Order/favicon-32x32-1.png" type="image/x-icon" />
    <title>TocoTocoTea - Danh muc sản phẩm</title>
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../css/Order.css" />
</head>

<body>

    <!-- =========== Order header ============= -->
    <div class="order-header" id="order-header">
        <a href="../index.php" class="order-logo">
            <img src="../assets/images/Order/logo.png" alt="Trang chu" />
        </a>
        <div class="search-box">
            <form action="" method="POST" class="order-search">
                <ion-icon name="search-outline" id="btn-search"></ion-icon>
                <input type="text" class="input-search" id="input-search" placeholder="Tìm kiếm sản phẩm..."
                    autocomplete="off" />
            </form>
            <div class="search-result hidden" id="search-result"></div>
        </div>
        <div class="order-user">
            <div class="shopping">
                <ion-icon name="cart-outline" class="cart" id="cart"></ion-icon>
                <span class="quantity" id="quantity">0</span>
                <div class="card" id="card">
                    <div class="card-header">
                        <h1 class="card-title">Giỏ hàng</h1>
                        <button class="card-remove">Xóa tất cả</button>
                    </div>
                    <div class="listCard" id="listCard">
                        Bạn chưa có sản phẩm nào trong giỏ hàng
                    </div>
                    <div class="card-group-bottom">
                        <div class="card-ss2">
                            <img class="img-toco" src="../assets/images/Order/icon-glass-tea.png" alt="" />
                            <span class="card-ss2-one">x</span>
                            <span class="card-ss2-two">0</span>
                            <span class="card-ss2-three">=</span>
                            <span class="card-ss2-four">0đ</span>
                        </div>
                        <?php

                        if (isset($_SESSION['user'])) { // Check if user is logged in
                            echo '<a href="cart.php" id="button-card" class="button-card">Thanh toán</a>'; // Display login button
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="user-button" id="user">
                <?php

                if (isset($_SESSION['user'])) { // Check if user is logged in
                    echo '<div style="align-items: center; display: flex;">
                        <img src="../assets/images/Order/logo_icon.png" id="user-avatar" alt="" />
                        <a href="./logout.php" class="loggin-btn" style="margin: 0 10px">Log out</a>
                    </div>';
                } else {
                    echo '<a href="./login.php" class="loggin-btn">Login</a>'; // Display login button
                }
                ?>
            </div>


        </div>
    </div>
    <!-- ============== order page ================= -->
    <div class="page-order">
        <div class="order-catagories">
            <button class="btn-menu">
                <i class="fa-solid fa-bars btn-menu-content"></i>
            </button>
            <div class="order-catagories-container">
                <?php
                $conn = new mysqli("localhost", "root", "", "mydatabase");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $categories = ['order_hots' => 'Món nổi bật', 'instant' => 'Instant Milk Tea', 'order_milk_tea' => 'Trà Sữa', 'order_fresh_fruit' => 'Fresh Fruit Tea', 'order_macchiato_cream' => 'Macchiato Cream Cheese', 'order_sua_chua' => 'Sữa chua béo'];

                foreach ($categories as $table => $title) {
                    $sql = "SELECT COUNT(*) as count FROM $table";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo "<a href='#$table' class='scrollto'>
                    <span class='order-catagories-title'>$title</span>
                    <span>{$row['count']}</span>
                    </a>";
                }

                $conn->close();
                ?>
            </div>
        </div>

        <?php
        include('./product.php');
        ?>
    </div>

    <?php

    if (isset($_SESSION['user'])) { // Check if user is logged in
        echo '
        <div class="wrap-popup" scroll="no">
            <div class="popup popup-add-product" id="abc">
                <button class="close-btn">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
                <div class="popup-content">
                    <div class="popup-choose-product">
                        <div class="ss-1 product-infomation" id="product-infomation">
                            <div class="ss-1-left">
                                <img id="pp-product-img"
                                    src="https://tocotocotea.com/wp-content/uploads/2023/01/Tra-Dao-Dau-Tay-Kem-Pho-Mai.png"
                                    alt="" />
                            </div>
                            <div class="ss-1-right">
                                <div id="pp-product-name" class="product-name">
                                    Trà Đào Dâu Tây Kem Phô Mai
                                </div>
                                <div class="price">
                                    <span id="pp-product-price" class="price-discount">
                                        25.000đ
                                    </span>
                                    <span id="pp-product-regular-price" class="cost">46.000đ</span>
                                </div>
                                <div id="pp-product-short-desc" class="product-info"></div>
                                <div class="wrap-quantity">
                                    <div class="change-quantity-wrap">
                                        <div class="change-quantity decrease">-</div>
                                        <div class="amount" id="popup-amount">1</div>
                                        <div class="change-quantity increase">+</div>
                                    </div>
                                    <button class="btn-price-product">+ 25.000đ</button>
                                </div>
                            </div>
                        </div>
                        <div class="ss-2 product-customize">
                            <div class="customize-section type">
                                <div class="customize-title">
                                    <div class="left">Chọn loại</div>
                                    <div class="right">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="customize-content">
                                    <div class="container-radio">
                                        <input type="radio" name="type" id="cold" checked />
                                        <label for="cold" class="label-radio" value="cold">
                                            Lạnh
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="customize-section comboM" style="display: none">
                                <div class="customize-title">
                                    <div class="left">Chọn món size M</div>
                                    <div class="right">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="customize-content"></div>
                            </div>
                            <div class="customize-section comboL" style="display: none">
                                <div class="customize-title">
                                    <div class="left">Chọn món size L</div>
                                    <div class="right">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="customize-content"></div>
                            </div>
                            <div class="customize-section size">
                                <div class="customize-title">
                                    <div class="left">Chọn size</div>
                                    <div class="right">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="customize-content">
                                    <div class="container-radio">
                                        <input type="radio" name="size" id="sizeM" checked />
                                        <label for="sizeM" class="label-radio" value="M">
                                            Size M
                                        </label>
                                    </div>
                                    <div class="container-radio">
                                        <input type="radio" name="size" id="sizeL" />
                                        <label for="sizeL" class="label-radio" value="L">
                                            Size L
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="customize-section sugar">
                                <div class="customize-title">
                                    <div class="left">Chọn đường</div>
                                    <div class="right">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="customize-content">
                                    <div class="container-radio">
                                        <input type="radio" name="sugar" id="sugar70" checked />
                                        <label for="sugar70" class="label-radio" value="70">
                                            70% đường
                                        </label>
                                    </div>
                                    <div class="container-radio">
                                        <input type="radio" name="sugar" id="sugar50" />
                                        <label for="sugar50" class="label-radio" value="50">
                                            50% đường
                                        </label>
                                    </div>
                                    <div class="container-radio">
                                        <input type="radio" name="sugar" id="sugar30" />
                                        <label for="sugar30" class="label-radio" value="30">
                                            30% đường
                                        </label>
                                    </div>
                                    <div class="container-radio">
                                        <input type="radio" name="sugar" id="sugar0" />
                                        <label for="sugar0" class="label-radio" value="0">
                                            Không đường
                                        </label>
                                    </div>
                                    <div class="container-radio">
                                        <input type="radio" name="sugar" id="sugar100" />
                                        <label for="sugar100" class="label-radio" value="100">
                                            100% đường
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="customize-section ice">
                                <div class="customize-title">
                                    <div class="left">Chọn đá</div>
                                    <div class="right">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="customize-content">
                                    <div class="container-radio">
                                        <input type="radio" name="ice" id="ice100" checked />
                                        <label for="ice100" class="label-radio" value="100">
                                            100% đá
                                        </label>
                                    </div>
                                    <div class="container-radio">
                                        <input type="radio" name="ice" id="ice50" />
                                        <label for="ice50" class="label-radio" value="50">
                                            50% đá
                                        </label>
                                    </div>
                                    <div class="container-radio">
                                        <input type="radio" name="ice" id="ice0" />
                                        <label for="ice0" class="label-radio" value="0">
                                            Không đá
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="customize-section topping">
                                <div class="customize-title">
                                    <div class="left">Chọn topping</div>
                                    <div class="right">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="customize-content" id="customize-topping">
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100025" />
                                            <label for="topping-104100025" class="label-checkbox" value="6">
                                                Thêm Trân Châu Sương Mai
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100026" />
                                            <label for="topping-104100026" class="label-checkbox" value="6">
                                                Thêm Trân Châu Baby
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100027" />
                                            <label for="topping-104100027" class="label-checkbox" value="6">
                                                Thêm Trân Châu Hoàng Kim
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100028" />
                                            <label for="topping-104100028" class="label-checkbox" value="6">
                                                Thêm Thạch Băng Tuyết
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100029" />
                                            <label for="topping-104100029" class="label-checkbox" value="6">
                                                Thêm Macchiato
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100030" />
                                            <label for="topping-104100030" class="label-checkbox" value="6">
                                                Thêm Rau Câu
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100031" />
                                            <label for="topping-104100031" class="label-checkbox" value="6">
                                                Thêm Trân Châu Sợi
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100032" />
                                            <label for="topping-104100032" class="label-checkbox" value="6">
                                                Thêm Đậu Đỏ
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100033" />
                                            <label for="topping-104100033" class="label-checkbox" value="6">
                                                Thêm Pudding
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100034" />
                                            <label for="topping-104100034" class="label-checkbox" value="6">
                                                Thêm Thạch Café
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100035" />
                                            <label for="topping-104100035" class="label-checkbox" value="6">
                                                Topping Thạch Dứa
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                    <div class="topping-wrap">
                                        <div class="container-checkbox">
                                            <input type="checkbox" name="topping" class="topping" id="topping-104100036" />
                                            <label for="topping-104100036" class="label-checkbox" value="6">
                                                Thêm Thạch Dâu Tằm
                                            </label>
                                        </div>
                                        <span class="topping-price">+ 6.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>'; // Display image
    } else {
        echo '
        <div class="wrap-popup" scroll="no">
            <div class="popup popup-add-product" style="height: auto;" id="abc">
                <button class="close-btn">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
                <div class="popup-content">
                    <div class="popup-choose-product">
                        <div class="ss-1 product-infomation" id="product-infomation">
                            <div class="ss-1-left">
                                <img id="pp-product-img"
                                    src="https://tocotocotea.com/wp-content/uploads/2023/01/Tra-Dao-Dau-Tay-Kem-Pho-Mai.png"
                                    alt="" />
                            </div>
                            <div class="ss-1-right">
                                <div id="pp-product-name" class="product-name">
                                    Trà Đào Dâu Tây Kem Phô Mai
                                </div>
                                <div class="price">
                                    <span id="pp-product-price" class="price-discount">
                                        25.000đ
                                    </span>
                                    <span id="pp-product-regular-price" class="cost">46.000đ</span>
                                </div>
                                <div id="pp-product-short-desc" class="product-info"></div>
                                <div class="wrap-quantity">
                                    <div class="change-quantity-wrap">
                                        <h2>Vui lòng đăng nhập để thêm sản phẩm này!</h2>
                                    </div>
                                    <button class="btn-price-product" style="padding: 0.8rem 2rem;"><a href="./login.php">Login</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>'; // Display login button
    }
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa-sharp fa-solid fa-arrow-up"></i></a>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="../javascript/order.js"></script>
</body>

</html>
<div class="order-content">
    <div class="order-catagory order_hots" id="order_hots">
        <h2 class="order-container-header">
            Món nổi bật
            <ion-icon name="chevron-down-outline" class="btn-collapse"></ion-icon>
        </h2>
        <section class="order-container">
            <?php
            $conn = new mysqli("localhost", "root", "", "mydatabase");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql_order_hots = "SELECT * FROM order_hots ORDER BY id DESC";
            $result_order_hots = $conn->query($sql_order_hots);

            if ($result_order_hots->num_rows > 0) {
                // output data of each row
                while ($row = $result_order_hots->fetch_assoc()) {
                    if ($row['discount'] === $row['price']) {
                        $row['price'] = '';
                    }
                    echo "<div class='product' id='{$row['id']}'>
                    <img
                        src='../assets/images/Order/{$row['image']}'
                        alt=''
                        class='product-thumb'
                    />
                    <div class='product-desc'>
                        <h3 class='product-name'>{$row['title']}</h3>
                        <div class='price'>
                            <span class='price-discount'>{$row['discount']}</span>
                            <span class='cost'>{$row['price']}</span>
                        </div>
                    </div>
                    <button class='btn-add-to-card'>
                        <ion-icon name='add-circle-outline'></ion-icon>
                    </button>
                </div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>
    </div>
    <div class="order-catagory instant" id="instant">
        <h2 class="order-container-header">
            Instant Milk Tea
            <ion-icon name="chevron-down-outline" class="btn-collapse"></ion-icon>
        </h2>
        <section class="order-container">
            <?php
            $conn = new mysqli("localhost", "root", "", "mydatabase");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql_instant = "SELECT * FROM instant ORDER BY id DESC";
            $result_instant = $conn->query($sql_instant);

            if ($result_instant->num_rows > 0) {
                // output data of each row
                while ($row = $result_instant->fetch_assoc()) {
                    if ($row['discount'] === $row['price']) {
                        $row['price'] = '';
                    }
                    echo "<div class='product' id='{$row['id']}'>
                    <img
                        src='{$row['image']}'
                        alt=''
                        class='product-thumb'
                    />
                    <div class='product-desc'>
                        <h3 class='product-name'>
                            {$row['title']}
                        </h3>
                        <div class='price'>
                            <span class='price-discount'>{$row['discount']}</span>
                            <span class='cost'>{$row['price']}</span>
                        </div>
                    </div>
                    <button class='btn-add-to-card'>
                        <ion-icon name='add-circle-outline'></ion-icon>
                    </button>
                </div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>
    </div>
    <div class="order-catagory order_milk_tea" id="order_milk_tea">
        <h2 class="order-container-header">
            Trà sữa
            <ion-icon name="chevron-down-outline" class="btn-collapse"></ion-icon>
        </h2>
        <section class="order-container">
            <?php
            $conn = new mysqli("localhost", "root", "", "mydatabase");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql_order_milk_tea = "SELECT * FROM order_milk_tea ORDER BY id DESC";
            $result_order_milk_tea = $conn->query($sql_order_milk_tea);

            if ($result_order_hots->num_rows > 0) {
                // output data of each row
                while ($row = $result_order_milk_tea->fetch_assoc()) {
                    if ($row['discount'] === $row['price']) {
                        $row['price'] = '';
                    }
                    echo "<div class='product' id='{$row['id']}'>
                    <img
                        src='{$row['image']}'
                        alt=''
                        class='product-thumb'
                    />
                    <div class='product-desc'>
                        <h3 class='product-name'>
                            {$row['title']}
                        </h3>
                        <div class='price'>
                            <span class='price-discount'>{$row['discount']}</span>
                            <span class='cost'>{$row['price']}</span>
                        </div>
                    </div>
                    <button class='btn-add-to-card'>
                        <ion-icon name='add-circle-outline'></ion-icon>
                    </button>
                </div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>
    </div>
    <div class="order-catagory order_fresh_fruit" id="order_fresh_fruit">
        <h2 class="order-container-header">
            Fresh Fruit Tea
            <ion-icon name="chevron-down-outline" class="btn-collapse"></ion-icon>
        </h2>
        <section class="order-container">
            <?php
            $conn = new mysqli("localhost", "root", "", "mydatabase");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql_order_fresh_fruit = "SELECT * FROM order_fresh_fruit ORDER BY id DESC";
            $result_order_fresh_fruit = $conn->query($sql_order_fresh_fruit);

            if ($result_order_fresh_fruit->num_rows > 0) {
                // output data of each row
                while ($row = $result_order_fresh_fruit->fetch_assoc()) {
                    if ($row['discount'] === $row['price']) {
                        $row['price'] = '';
                    }
                    echo "<div class='product' id='{$row['id']}'>
                    <img
                        src='{$row['image']}'
                        alt=''
                        class='product-thumb'
                    />
                    <div class='product-desc'>
                        <h3 class='product-name'>
                            {$row['title']}
                        </h3>
                        <div class='price'>
                            <span class='price-discount'>{$row['discount']}</span>
                            <span class='cost'>{$row['price']}</span>
                        </div>
                    </div>
                    <button class='btn-add-to-card'>
                        <ion-icon name='add-circle-outline'></ion-icon>
                    </button>
                </div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>
    </div>
    <div class="order-catagory order_macchiato_cream" id="order_macchiato_cream">
        <h2 class="order-container-header">
            Macchiato Cream Cheese
            <ion-icon name="chevron-down-outline" class="btn-collapse"></ion-icon>
        </h2>
        <section class="order-container">
            <?php
            $conn = new mysqli("localhost", "root", "", "mydatabase");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql_order_macchiato_cream = "SELECT * FROM order_macchiato_cream ORDER BY id DESC";
            $result_order_macchiato_cream = $conn->query($sql_order_macchiato_cream);

            if ($result_order_macchiato_cream->num_rows > 0) {
                // output data of each row
                while ($row = $result_order_macchiato_cream->fetch_assoc()) {
                    if ($row['discount'] === $row['price']) {
                        $row['price'] = '';
                    }
                    echo "<div class='product' id='{$row['id']}'>
                    <img
                        src='{$row['image']}'
                        alt=''
                        class='product-thumb'
                    />
                    <div class='product-desc'>
                        <h3 class='product-name'>
                            {$row['title']}
                        </h3>
                        <div class='price'>
                            <span class='price-discount'>{$row['discount']}</span>
                            <span class='cost'>{$row['price']}</span>
                        </div>
                    </div>
                    <button class='btn-add-to-card'>
                        <ion-icon name='add-circle-outline'></ion-icon>
                    </button>
                </div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>
    </div>
    <div class="order-catagory order_sua_chua" id="order_sua_chua">
        <h2 class="order-container-header">
            Sữa Chua Béo
            <ion-icon name="chevron-down-outline" class="btn-collapse"></ion-icon>
        </h2>
        <section class="order-container">
            <?php
            $conn = new mysqli("localhost", "root", "", "mydatabase");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql_order_sua_chua = "SELECT * FROM order_sua_chua ORDER BY id DESC";
            $result_order_sua_chua = $conn->query($sql_order_sua_chua);

            if ($result_order_sua_chua->num_rows > 0) {
                // output data of each row
                while ($row = $result_order_sua_chua->fetch_assoc()) {
                    if ($row['discount'] === $row['price']) {
                        $row['price'] = '';
                    }
                    echo "<div class='product' id='{$row['id']}'>
                    <img
                        src='{$row['image']}'
                        alt=''
                        class='product-thumb'
                    />
                    <div class='product-desc'>
                        <h3 class='product-name'>
                            {$row['title']}
                        </h3>
                        <div class='price'>
                            <span class='price-discount'>{$row['discount']}</span>
                            <span class='cost'>{$row['price']}</span>
                        </div>
                    </div>
                    <button class='btn-add-to-card'>
                        <ion-icon name='add-circle-outline'></ion-icon>
                    </button>
                </div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>
    </div>
</div>
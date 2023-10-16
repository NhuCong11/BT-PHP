<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử và sứ mệnh</title>
    <link rel="stylesheet" href="../css/CuaHang.css">
    <link rel="stylesheet" href="../css/GioiThieu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../assets/images/CuaHang/favicon-32x32-1.png" type="image/x-icon">
</head>

<body>
    <a href="./Order.php" class="delivery">
        <img src="../assets/images/trangchu/delivery.png" alt="" />
    </a>
    <!-- header section starts -->
    <div id="header">
        <section id="nav">
            <a id="header_logo" href="./index.php">
                <img src="./assets/images/trangchu/logo.png" alt="" />
            </a>
            <ul class="main-menu" id="header__navbar-modal">
                <li class="center">
                    <a href="../index.php" class="navbar__link">Trang chủ</a>
                </li>
                <li>
                    <a href="./pages/LichSuVaSuMenh.php" class="navbar__link">Giới thiệu <i
                            class="fa-sharp fa-solid fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">Lịch sử và sứ mệnh</a>
                        </li>
                        <li>
                            <a href="./ThanhTuuDatDuoc.php">Thành tựu đạt được</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./Instant_milktea.php" class="navbar__link">Sản phẩm <i
                            class="fa-sharp fa-solid fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="./Order.php">TOCOTOCO KEM TRÀ SỮA</a></li>
                        <li><a href="./Order.php">TOCOTOCO KEM CAFE</a></li>
                        <li><a href="./Order.php">INSTANT MILKTEA</a></li>
                    </ul>
                </li>
                <li class="center">
                    <a href="./TuyenDung.php" class="navbar__link">Tuyển dụng</a>
                </li>
                <li class="center">
                    <a href="./NhuongQuyen.php" class="navbar__link">Nhượng quyền</a>
                </li>
            </ul>
            <div class="btn-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </section>
    </div>
    <!-- header section ends -->
    <div class="page">
        <div class="page-top-banner">Giới thiệu</div>
        <div class="page-content container">
            <section class="page-title-section">
                <p class="page-title">Giới thiệu</p>
                <p></p>
                <p>
                    Luôn tâm huyết với việc khai thác nguồn nông sản Việt Nam
                    để tạo ra những ly thức uống tươi ngon, an toàn và giàu
                    giá trị dinh dưỡng, ToCoToCo mở cửa hàng đầu tiên vào năm
                    2013, mang trong mình lòng đam mê và khát vọng xây dựng một
                    thương hiệu trà sữa thuần Việt, mang đậm hương vị quê
                    hương.ToCoToCo tin rằng thưởng thức một ly trà sữa được
                    pha chế từ trà Mộc Châu, trân châu từ sắn dây Nghệ An
                    hay mứt dâu tằm từ Đà Lạt sẽ là những trải nghiệm hoàn toàn
                    khác biệt và tuyệt vời nhất cho những khách hàng của mình.
                </p>
                <p></p>
                <p>
                    Cũng chính từ sự khác biệt đó, thương hiệu ToCoToCo đã có
                    những bước phát triển thần tốc và dần chiếm lĩnh thị trường
                    trà sữa với hơn 200 cửa hàng trải dài trên toàn quốc. Cột
                    mốc năm 2018 đánh dấu ước mơ vươn xa biển lớn của thương
                    hiệu khi ToCoToCo chính thức đặt chân lên nước Mỹ và tiếp
                    nối thành công tại Úc, Nhật Bản, Hàn Quốc, Singapore,…
                </p>
                <p></p>
                <p>
                    Hành trình đầy đam mê và tâm huyết này sẽ tiếp tục nhân rộng
                    để lan tỏa những ly trà thuần khiết nông sản Việt đến mọi miền
                    trên Việt Nam và thế giới.
                </p>
                <p></p>
            </section>
            <section>
                <div class="picture">
                    <img src="../assets/images/GioiThieu/anh-1.webp" alt="" loading="lazy">
                </div>
            </section>
            <section>
                <div class="picture">
                    <img src="../assets/images/GioiThieu/anh-2.webp" alt="" loading="lazy">
                </div>
            </section>
        </div>
    </div>
    <!-- footer section starts -->
    <?php
  include "../layouts/footer.php";
  ?>
    <!-- footer section ends -->
    <script>
    // header
    window.onscroll = () => {
        if (window.scrollY > 0) {
            document.querySelector("#nav").classList.add("fixed");
        } else {
            document.querySelector("#nav").classList.remove("fixed");
        }
    };
    </script>
</body>

</html>
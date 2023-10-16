<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thành tựu đạt được</title>
  <link rel="stylesheet" href="../css/CuaHang.css">
  <link rel="stylesheet" href="../css/GioiThieu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
          <a href="./LichSuVaSuMenh.php" class="navbar__link">Giới thiệu <i class="fa-sharp fa-solid fa-chevron-down"></i></a>
          <ul class="sub-menu">
            <li>
              <a href="./LichSuVaSuMenh.php">Lịch sử và sứ mệnh</a>
            </li>
            <li>
              <a href="#">Thành tựu đạt được</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="./Instant_milktea.php" class="navbar__link">Sản phẩm <i class="fa-sharp fa-solid fa-chevron-down"></i></a>
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
    <div class="page-top-banner">Thành tựu đạt được</div>
    <div class="page-content container">
      <section class="page-title-section">
        <div class="page-title">Thành tựu đạt được</div>
      </section>
      <section>
        <div class="picture-thanh-tuu">
          <img src="../assets/images/GioiThieu/anh-3.webp" alt="">
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Baloo&amp;subset=vietnamese" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,600i,700,700i" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <!-- Icons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/NhuongQuyen/logo_icon.png" type="image/x-icon" />
    <title>Tocotoco - Nhượng quyền</title>
    <!-- Jquery cdn link -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="../css/NhuongQuyen.css" />
    <style>
        .btn-submit {
            padding: 1rem 1.5rem;
            width: 60%;
            border-radius: 0.5rem;
            border: none;
            margin: 1.5rem 0 0;
            font-size: 1.6rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header class="header" id="header">
        <div class="logo">
            <a href="../index.php">
                <img src="../assets/images/NhuongQuyen/logo.png" alt="" id="logo-img" />
            </a>
        </div>
        <div class="navbar-container">
            <button class="btn-menu" id="btn-menu">
                <i class="fa-solid fa-bars btn-menu-icon"></i>
            </button>
            <ul class="navbar" id="main-menu">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about-brand">VỀ THƯƠNG HIỆU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-system">HỆ THỐNG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#collaborate">QUY TRÌNH HỢP TÁC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#register-form">VÌ SAO CHỌN TOCOTOCO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#partners">ĐỐI TÁC</a>
                </li>
            </ul>
        </div>
    </header>
    <section class="hero" id="hero">
        <!-- desktop -->
        <div class="hero-pc">
            <img src="../assets/images/NhuongQuyen/kdnq_banner.jpg" class="hero-img" alt="..." id="hero-pc-img" />
            <div class="hero-caption">
                <label class="slide-lbl" id="hero-pc-lbl">Nhượng quyền thương hiệu trà sữa hàng đầu ToCoToCo</label>
                <p class="slide-desc" id="hero-pc-desc">
                    CƠ HỘI LÀM CHỦ - HỢP LỰC THÀNH CÔNG
                </p>
                <a href="#about-brand" class="btn btn-slide">XEM THÊM</a>
            </div>
        </div>
        <!--Mobile-->
        <div class="hero-mobile">
            <div class="hero-inner">
                <div>
                    <img src="../assets/images/NhuongQuyen/kdnq_banner_mobile(2).png" alt="..." class="hero-img" id="hero-mbl-img" />
                </div>
                <div class="hero-caption hero-caption-mbl">
                    <label class="slide-lbl" id="hero-mbl-lbl">Nhượng quyền thương hiệu trà sữa hàng đầu
                        ToCoToCo</label>
                    <p class="slide-desc" id="hero-mbl-desc">
                        CƠ HỘI LÀM CHỦ - HỢP LỰC THÀNH CÔNG
                    </p>
                    <a href="#about-brand" class="btn btn-slide">XEM THÊM</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section about-brand" id="about-brand">
        <h3 class="section-header">Về thương hiệu</h3>
        <div class="about-content w-70">
            <div class="row">
                <div class="about-content-left">
                    <h2 class="about-brand-title">Tổng quan</h2>
                    <p>
                        Được thành lập từ năm 2013 đến nay ToCoToCo đã trở thành thương
                        hiệu được ưu ái với tên gọi "trà sữa quốc dân". Với gần 400 cửa
                        hàng đang hoạt động ở nhiều tỉnh và thành phố trên cả nước.
                    </p>
                </div>
                <div class="about-content-right">
                    <img src="../assets/images/NhuongQuyen/sc-images1.jpg" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="about-content-left">
                    <h2 class="about-brand-title">Tầm nhìn</h2>
                    <p>
                        ToCoToCo luôn tâm huyết và ToCoToCo tự hào là thương hiệu trà sữa
                        tiên phong sử dụng nguồn nông sản Việt Nam với gần 500 cửa hàng
                        trên toàn quốc và khát vọng mang thương hiệu trà sữa làm từ nông
                        sản Việt vươn ra thế giới.
                    </p>
                </div>
                <div class="about-content-right">
                    <img src="../assets/images/NhuongQuyen/stc-image2.jpg" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="about-content-left">
                    <h2 class="about-brand-title">Sứ mệnh</h2>
                    <p>
                        ToCoToCo tự tin mang lại hương vị cuộc sống trọn vẹn cho khách
                        hàng, lợi nhuận bền vững lâu dài cho nhà đầu tư và góp phần phát
                        triển nền nông nghiệp Việt Nam.
                    </p>
                </div>
                <div class="about-content-right">
                    <img src="../assets/images/NhuongQuyen/stc-image3.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="section about-system" id="about-system">
        <h3 class="section-header">Về hệ thống nhượng quyền</h3>
        <div class="content about-system-content">
            <div class="col-3">
                <img src="../assets/images/NhuongQuyen/about-system-item-1.jpg" alt="" />
                <p class="about-sys-title">Trải qua hơn</p>
                <p class="about-sys-spotlight">9 Năm</p>
                <p class="about-sys-desc">Hình thành xây dựng &amp; phát triển</p>
            </div>
            <div class="col-3">
                <img src="../assets/images/NhuongQuyen/about-system-item-2.jpg" alt="" />
                <p class="about-sys-title">ToCoToCo đã có mặt</p>
                <p class="about-sys-spotlight">51/63 Tỉnh</p>
                <p class="about-sys-desc">
                    Thành phố trong cả nước với gần 500 cửa hàng
                </p>
            </div>
            <div class="col-3">
                <img src="../assets/images/NhuongQuyen/about-system-item-3.jpg" alt="" />
                <p class="about-sys-title">Số cửa hàng</p>
                <p class="about-sys-spotlight">Nhượng quyền</p>
                <p class="about-sys-desc">
                    ToCoToCo đang <b>chiếm tỉ trọng 70%</b> với
                    <b>gần 500 cửa hàng</b> và con số này vẫn không ngừng phát triển
                </p>
            </div>
        </div>
    </section>
    <section class="section opening-activities" id="opening-activities">
        <h3 class="section-header">Hoạt động khai trương các đại lý</h3>
        <div class="opening-pc">
            <div class="opening-item">
                <img src="../assets/images/NhuongQuyen/opa1.jpg" alt="" />
            </div>
            <div class="opening-item">
                <img src="../assets/images/NhuongQuyen/opa2.jpg" alt="" />
            </div>
            <div class="opening-item">
                <img src="../assets/images/NhuongQuyen/opa3.jpg" alt="" />
            </div>
            <div class="opening-item">
                <img src="../assets/images/NhuongQuyen/opa4.jpg" alt="" />
            </div>
            <div class="opening-item"></div>
            <div class="opening-item">
                <img src="../assets/images/NhuongQuyen/opa5.jpg" alt="" />
            </div>
        </div>
        <div class="opening-mobile">
            <div class="opening-item">
                <img src="../assets/images/NhuongQuyen/opa1.jpg" alt="" />
            </div>
        </div>
    </section>
    <section class="section register" id="register">
        <h3 class="register-title">ĐĂNG KÍ ĐỂ NHẬN ƯU ĐÃI</h3>
        <p class="register-desc">
            Đăng ký ngay để được nhận <label class="rpa-spot">160 triệu</label> phí
            nhượng quyền
        </p>
        <form action="" class="register-form">
            <input type="text" placeholder="Nhập số điện thoại..." />
            <button>ĐĂNG KÝ NGAY</button>
        </form>
    </section>
    <section class="collaborate" id="collaborate">
        <h3 class="section-header">Quy trình hợp tác</h3>
        <div class="container colla-container">
            <div class="content colla-content">
                <div class="colla-item">
                    <img src="../assets/images/NhuongQuyen/colla1.png" alt="" />
                    <div class="colla-infor">
                        <label class="colla-lbl">1</label>
                        <h4 class="colla-title">ĐĂNG KÝ TƯ VẤN</h4>
                        <p class="colla-desc">Gửi thông tin liên hệ theo form</p>
                    </div>
                </div>
                <div class="colla-item">
                    <img src="../assets/images/NhuongQuyen/colla2.png" alt="" />
                    <div class="colla-infor">
                        <label class="colla-lbl">2</label>
                        <h4 class="colla-title">GẶP GỠ TƯ VÂN</h4>
                        <p class="colla-desc">
                            Chúng tôi sẽ liên hệ tư vấn nhanh chóng trong vòng 24h
                        </p>
                    </div>
                </div>
                <div class="colla-item">
                    <img src="../assets/images/NhuongQuyen/colla3.png" alt="" />
                    <div class="colla-infor">
                        <label class="colla-lbl">3</label>
                        <h4 class="colla-title">KHẢO SÁT</h4>
                        <p class="colla-desc">Tiến hành khảo sát địa điểm</p>
                    </div>
                </div>
                <div class="colla-item">
                    <img src="../assets/images/NhuongQuyen/colla4.png" alt="" />
                    <div class="colla-infor">
                        <label class="colla-lbl">4</label>
                        <h4 class="colla-title">KÝ HỢP ĐỒNG</h4>
                        <p class="colla-desc">
                            Ký hợp đồng nhượng quyền, nhà đầu tư thanh toán phí nhượng quyền
                        </p>
                    </div>
                </div>
                <div class="colla-item">
                    <img src="../assets/images/NhuongQuyen/colla5.png" alt="" />
                    <div class="colla-infor">
                        <label class="colla-lbl">5</label>
                        <h4 class="colla-title">SETUP NHƯỢNG QUYỀN</h4>
                        <p class="colla-desc">
                            Chúng tôi sẽ tư vấn thiết kế và đồng hành cùng đối tác trong
                            suốt quá trình xây dựng cửa hàng, đào tạo nhân sự, trang bị công
                            cụ, dụng cụ và nhập nguyên liệu
                        </p>
                    </div>
                </div>
                <div class="colla-item">
                    <img src="../assets/images/NhuongQuyen/colla6.png" alt="" />
                    <div class="colla-infor">
                        <label class="colla-lbl">6</label>
                        <h4 class="colla-title">VẬN HÀNH HOẠT ĐỘNG</h4>
                        <p class="colla-desc">
                            Đảm bảo khai trương suôn sẻ, đi vào hoạt động. Hỗ trợ tư vấn vận
                            hành và phát triển kinh doanh sau khai trương
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="register-form" id="register-form">
        <h3 class="section-header">Chương trình ưu đãi tháng</h3>
        <div class="container register-container">
            <div class="content register-content">
                <div class="register-left">
                    <img src="../assets/images/NhuongQuyen/ct_uudai.jpg" alt="" />
                    <h4>Cơ hội trao tay - có ngay cơ nghiệp</h4>
                    <p>
                        Với Gói Nhượng quyền khởi nghiệp, ToCoToCo dành tặng Nhà Đầu Tư
                        nhiều ưu đãi độc quyền. Không chỉ vậy, sự hỗ trợ nhanh chóng bằng
                        mọi nguồn lực từ ToCoToCo sẽ giúp hệ thống cửa hàng hoạt động ổn
                        định, phát triển nhanh chóng và thu lợi nhuận bền vững trong tương
                        lai.
                    </p>
                    <p class="list">
                        ToCoToCo trao bạn cơ hội hợp tác kinh doanh với nhiều ưu đãi:
                        <br />
                        👉 Chỉ từ 354 triệu bạn sẽ sở hữu mô hình kinh doanh chuyên nghiệp
                        <br />
                        👉 Miễn phí nhượng quyền
                        <br />
                        👉 Tặng 40 triệu khi ký hợp đồng
                        <br />
                        👉 Tư vấn setup trọn gói từ A đến Z
                        <br />
                        👉 Miễn phí chi phí Marketing - Kết nối khách hàng đa kênh.
                    </p>
                </div>
                <div class="register-right">
                    <form action="form.php" method="POST">
                        <h3 class="frm-title">Đăng ký thông tin</h3>
                        <div class="row frm-name">
                            <label for="txtFullName" class="form-label">Họ và tên</label>
                            <input type="text" name="name" class="form-control" id="txtFullName" required minlength="2" />
                        </div>
                        <div class="row frm-email">
                            <label for="txtEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="txtEmail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                        </div>
                        <div class="row frm-phone">
                            <label for="txtPhone" class="form-label">Nhập số điện thoại</label>
                            <input type="tel" name="phone" class="form-control" id="txtPhone" required pattern="^(0|\+?84)(3|5|7|8|9)[0-9]{8}$" />
                        </div>
                        <div class="row frm-address">
                            <label for="txtAddress" class="form-label">Địa chỉ khu vực bạn muốn mở cửa hàng</label>
                            <textarea class="form-control" name="address" id="txtAddress" required minlength="5"></textarea>
                        </div>
                        <div class="row frm-invest">
                            <label for="slcInvestment" class="form-label">Khoản vốn tối đa có thể đầu tư</label>
                            <select name="invest" class="form-select" id="slcInvestment" required>
                                <option value="" selected="">
                                    --Lựa chọn khoảng vốn đầu tư--
                                </option>
                                <option value="300 triệu - 500 triệu">
                                    300 triệu - 500 triệu
                                </option>
                                <option value="500 triệu - 700 triệu">
                                    500 triệu - 700 triệu
                                </option>
                                <option value="700 triệu - 1 tỷ">700 triệu - 1 tỷ</option>
                                <option value="Trên 1 tỷ">Trên 1 tỷ</option>
                            </select>
                        </div>
                        <input type="submit" value="Gửi thông tin" class="btn-submit" id="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section customer-satisfaction">
        <h3 class="section-header">Khách hàng nói gì về Tocotoco</h3>
        <div class="container">
            <div class="content">
                <img src="../assets/images/NhuongQuyen/customer_sactisfation.jpg" alt="" />
                <h4>Con đường khởi nghiệp của Người sáng lập Trà sữa Tocotoco</h4>
                <p class="cusa-desc">
                    Với sứ mệnh mang tới những trải nghiệp trọn vị hạnh phúc cho khách
                    hàng, ToCoToCo mong muốn tạo nên một nét văn hóa thưởng thức trà sữa
                    cùng với những ly đồ uống Ngon - Sạch - Tươi
                </p>
            </div>
        </div>
    </section>
    <section class="section partners" id="partners">
        <h3 class="section-header">Đối tác của chúng tôi</h3>
        <div class="container">
            <div class="content">
                <h4>Delivery</h4>
                <div class="partners-deli">
                    <img src="../assets/images/NhuongQuyen/gojek.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/shopeefood.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/grab.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/baemin.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/driver.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/jamja.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/meete.jpg" alt="" />
                </div>
                <h4>E-Wallet</h4>
                <div class="partners-wallet">
                    <img src="../assets/images/NhuongQuyen/momo.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/vnpay.jpg" alt="" />
                    <img src="../assets/images/NhuongQuyen/zalopay.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-wrap">
            <div class="footer-main">
                <img class="footer-logo" src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/ft_logo.png" />
                <div class="footer-1">
                    <div class="footer-title">Công ty CP TM &amp; Dv Taco Việt Nam</div>
                    <div class="footer-line">
                        <svg class="svg-inline--fa fa-map-marker fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="map-marker" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z">
                            </path>
                        </svg><!-- <i class="fas fa-map-marker"></i> -->
                        Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội.
                    </div>
                    <div class="footer-line">
                        <svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z">
                            </path>
                        </svg><!-- <i class="fas fa-phone"></i> -->
                        1900.63.69.36
                    </div>
                    <div class="footer-line">
                        <svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                            </path>
                        </svg><!-- <i class="fas fa-envelope"></i> -->
                        info@tocotocotea.com
                    </div>
                    <div class="footer-line">
                        Số ĐKKD: 0106341306. Ngày cấp: 16/03/2017.
                    </div>
                    <div class="footer-line">
                        Nơi cấp: Sở kế hoạch và Đầu tư Thành phố Hà Nội.
                    </div>
                    <div class="footer-line social">
                        <a target="_blank" href="https://www.facebook.com/tocotocobubbletea/"><svg class="svg-inline--fa fa-facebook-square fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z">
                                </path>
                            </svg><!-- <i class="fab fa-facebook-square"></i> --></a>
                        <a target="_blank" href="https://www.instagram.com/tocotoco_bubble_tea/"><svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg><!-- <i class="fab fa-instagram"></i> --></a>
                        <a target="_blank" href="https://www.youtube.com/c/ToCoToCoBubbleTea"><svg class="svg-inline--fa fa-youtube fa-w-18" aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                </path>
                            </svg><!-- <i class="fab fa-youtube"></i> --></a>
                        <a target="_blank" href="https://www.tiktok.com/@tocotocobubbletea/"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                </path>
                            </svg><!-- <i class="fab fa-twitter"></i> --></a>
                        <a target="_blank" href="https://zalo.me/2268915497539367639"><svg class="svg-inline--fa fa-google-plus fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="google-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm-70.7 372c-68.8 0-124-55.5-124-124s55.2-124 124-124c31.3 0 60.1 11 83 32.3l-33.6 32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9 0-77.2 35.5-77.2 78.1s34.2 78.1 77.2 78.1c32.6 0 64.9-19.1 70.1-53.3h-70.1v-42.6h116.9c1.3 6.8 1.9 13.6 1.9 20.7 0 70.8-47.5 121.2-118.8 121.2zm230.2-106.2v35.5H372v-35.5h-35.5v-35.5H372v-35.5h35.5v35.5h35.2v35.5h-35.2z">
                                </path>
                            </svg></a>
                    </div>
                    <div class="footer-line dowload-app">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.ipos.tocotoco">
                            <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/Googleplay.png" alt="" />
                        </a>
                        <a target="_blank" href="https://apps.apple.com/vn/app/tocotoco/id1249910346">
                            <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/Appstore.png" alt="" />
                        </a>
                        <a target="_blank" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=57603">
                            <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/bo_cong_thuong_grande.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="footer-2">
                    <div class="footer-title">Về chúng tôi</div>
                    <div class="footer-content">
                        <div class="menu-footer-abous">
                            <ul id="menu-footer-ve-chung-toi" class="menu">
                                <li id="menu-item-1319" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1319">
                                    <a href="#">Giới thiệu về TocoToco</a>
                                </li>
                                <li id="menu-item-1320" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-1320">
                                    <a href="./NhuongQuyen.php" aria-current="page">Nhượng quyền</a>
                                </li>
                                <li id="menu-item-2119" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2119">
                                    <a href="#">Tin tức khuyến mại</a>
                                </li>
                                <li id="menu-item-1864" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1864">
                                    <a href="#">Cửa hàng</a>
                                </li>
                                <li id="menu-item-1865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1865">
                                    <a href="#">Quy định chung</a>
                                </li>
                                <li id="menu-item-1866" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1866">
                                    <a href="#">TT
                                        liên hệ &amp; ĐKKD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-2">
                    <div class="footer-title">Chính sách</div>
                    <div class="footer-content">
                        <div class="menu-footer-policy">
                            <ul id="menu-footer-chinh-sach" class="menu">
                                <li id="menu-item-1313" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1313">
                                    <a href="#">Chính
                                        sách thành viên</a>
                                </li>
                                <li id="menu-item-1314" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1314">
                                    <a href="#">Hình thức thanh toán</a>
                                </li>
                                <li id="menu-item-1315" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1315">
                                    <a href="#">Vận chuyển giao nhận</a>
                                </li>
                                <li id="menu-item-1316" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1316">
                                    <a href="#">Đổi trả và hoàn tiền</a>
                                </li>
                                <li id="menu-item-1317" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1317">
                                    <a href="#">Bảo
                                        vệ thông tin cá nhân</a>
                                </li>
                                <li id="menu-item-1318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1318">
                                    <a href="#">Bảo trì, bảo hành</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="left">
                    ToCoToCo - Thương hiệu trà sữa tiên phong sử dụng nguồn nông sản
                    Việt Nam
                </div>
                <div class="right">
                    Copyrights © 2019 by ToCoToCoTea. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <a href="Order.php" class="btn-delivery">
        <img src="../assets/images/NhuongQuyen/button_delivery.png" alt="" />
    </a>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-sharp fa-solid fa-arrow-up"></i></a>

    <script src="../javascript/NhuongQuyen.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
<div class="clear"></div>
<div class="main">
    <?php

    if (isset($_GET['action']) && $_GET['query']) {
        $bientam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $bientam = '';
        $query = '';
    }
    if ($bientam == 'quanlysanpham' && $query == 'them') {
        include("modules/quanlysp/them.php");
        include("modules/quanlysp/lietke.php");
    } else if ($bientam == 'quanlysanpham' && $query == 'sua') {
        include("modules/quanlysp/sua.php");
    } else if ($bientam == 'quanlynguoidung' && $query == 'them') {
        include("modules/quanlynguoidung/lietke.php");
    } else if ($bientam == 'quanlynguoidung' && $query == 'sua') {
        include("modules/quanlynguoidung/sua.php");
    } else if ($bientam == 'quanlyorder' && $query == 'lietke') {
        include("modules/quanlyorder/lietke.php");
    } else if ($bientam == 'quanlynhuongquyen' && $query == 'lietke') {
        include("modules/quanlynhuongquyen/lietke.php");
    } else if ($bientam == 'dangxuat') {
        include("../login.php");
    } else {
        include("modules/dashboard.php");
    }
    ?>
</div>
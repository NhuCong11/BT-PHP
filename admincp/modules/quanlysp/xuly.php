<?php
include "../../config/connect.php";
$title = $_POST['tensanpham'];
$id = $_POST['masp'];
$price = $_POST['giasp'];
$discount = $_POST['giamGia'];
//xử lý hình anh
$file = $_FILES['hinhanh'];
$image = $file['name'];
$image_tmp = $_FILES['hinhanh']['tmp_name'];
$imagegio = time() . '_' . $image;


if (isset($_POST['themsanpham'])) {
    if (isset($_FILES['hinhanh'])) {
        if ($file['type'] == 'image/jpeg' || $file['type'] == 'imgae/jpg' || $file['type'] == 'image/png') {
            move_uploaded_file($image_tmp, 'uploads/' . $image);
            $sql_themsp = "INSERT INTO order_hots(title,id,price,discount,image) 
                VALUE ('" . $title . "','" . $id . "','" . $price . "','" . $discount . "','" . $image . "')";
            mysqli_query($conn, $sql_themsp);
            header('Location:../../index.php?action=quanlysanpham&query=them');
        } else {
            $image = '';
            header('Location:../../index.php?action=quanlysanpham&query=them');
        }
    }
} elseif (isset($_POST['suasanpham'])) {
    if ($image != '') {
        move_uploaded_file($image_tmp, 'uploads/' . $image);
        $sql_sua = "UPDATE order_hots SET title='" . $title . "',id='" . $id . "',price='" . $price . "',discount='" . $discount . "',image='" . $image . "' WHERE id='$_GET[id]'";
        $sql = "SELECT*FROM order_hots WHERE id='$_GET[id]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['image']);
        }
    } else {
        $sql_sua = "UPDATE order_hots SET title='" . $title . "',id='" . $id . "',price='" . $price . "',discount='" . $discount . "' WHERE id='$_GET[id]'";
    }
    mysqli_query($conn, $sql_sua);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['id'];
    $sql = "SELECT *FROM order_hots WHERE id = '$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['image']);
    }
    $sql_xoa = "DELETE FROM order_hots WHERE id ='" . $id . "';";
    mysqli_query($conn, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
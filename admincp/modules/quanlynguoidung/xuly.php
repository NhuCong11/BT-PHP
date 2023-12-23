<?php
include "../../config/connect.php";
if (isset($conn)) {
    if (isset($_POST['suanguoidung'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql_sua_nd = "UPDATE users SET name='" . $name . "', email='" . $email . "', password='" . $password . "' WHERE id='$_GET[id]'";
        mysqli_query($conn, $sql_sua_nd);
        header('Location:../../index.php?action=quanlynguoidung&query=them');
    } else {
        $id = $_GET['id'];
        $sql_xoa_nd = "DELETE FROM users WHERE id ='" . $id . "';";
        mysqli_query($conn, $sql_xoa_nd);
        header('Location:../../index.php?action=quanlynguoidung&query=them');
    }
} else {
    echo "Database connection failed.";
    exit();
}

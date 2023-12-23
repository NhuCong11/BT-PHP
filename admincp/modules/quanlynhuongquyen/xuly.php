<?php
include "../../config/connect.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$investment = $_POST['investment'];

$id = $_GET['id'];
$sql = "SELECT * FROM franchise WHERE id = '$id' LIMIT 1";
$query = mysqli_query($conn, $sql);
$sql_xoa = "DELETE FROM franchise WHERE id ='" . $id . "';";
mysqli_query($conn, $sql_xoa);
header('Location:../../index.php?action=quanlynhuongquyen&query=lietke');
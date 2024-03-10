<?php
session_start();
include '../database/connect.php';

$id = $_GET['MaNV'];

$sql = "DELETE FROM nhanvien WHERE MaNV='$id'";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<font color='green'>Xóa bản ghi khỏi cơ sở dữ liệu thành công.";
} else {
    echo "<font color='red'>Xóa bản ghi khỏi cơ sở dữ liệu thất bại.";
}

header('location:index.php');
?>
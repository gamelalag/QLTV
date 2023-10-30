<?php
$id = $_POST['id'];
$tensach = $_POST['tensach'];
$sotrang = $_POST['sotrang'];
$tacgia = $_POST['tacgia'];
$nxb = $_POST['nxb'];
$theloai= $_POST['theloai'];
require_once 'ketnoisach.php';

$updatesql = "UPDATE danhsachsach SET tensach='$tensach',sotrang='$sotrang', tacgia='$tacgia',nxb='$nxb',theloai='$theloai' WHERE id='$id'";
if (mysqli_query($conn, $updatesql)){
    echo "<h1>Them thanh cong </h1>";
}else{
    echo "<h1>Them khong thanh cong </h1>";
}
header("Location: danhsachsach.php");


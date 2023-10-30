<?php
$id = $_POST['id'];
$tensach = $_POST['tensach'];
$sotrang = $_POST['sotrang'];
$tacgia = $_POST['tacgia'];
$nxb = $_POST['nxb'];
$theloai= $_POST['theloai'];
require_once 'ketnoisach.php';

$themsql = "INSERT INTO danhsachsach(id,tensach,sotrang,tacgia,nxb,theloai) VALUES('$id','$tensach','$sotrang','$tacgia','$nxb','$theloai')";
if (mysqli_query($conn, $themsql)){
    echo "<h1>Them thanh cong </h1>";
}else{
    echo "<h1>Them khong thanh cong </h1>";
}
header("Location: danhsachsach.php");


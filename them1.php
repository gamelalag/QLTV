
<?php
$masv = $_POST['masv'];
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$Gioitinh = $_POST['GioiTinh'];
$Diachi = $_POST['Diachi'];
require_once 'ketnoi.php';

$them1sql = "INSERT INTO danhsachbandoc(masv, hoten, ngaysinh ,Gioitinh, Diachi) VALUES('$masv','$hoten','$ngaysinh','$Gioitinh','$Diachi')";
if (mysqli_query($conn, $them1sql)){
    echo "<h1>Them thanh cong </h1>";
}else{
    echo "<h1>Them khong thanh cong </h1>";
}
header("Location: danhsach.php");




<?php
$masv = $_POST['masv'];
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$Gioitinh = $_POST['GioiTinh'];
$Diachi = $_POST['Diachi'];
require_once 'ketnoi.php';

$update1sql = "UPDATE danhsachbandoc SET hoten='$hoten', ngaysinh='$ngaysinh',Gioitinh='$Gioitinh',Diachi='$Diachi' WHERE masv='$masv'";
if (mysqli_query($conn, $update1sql))
{
    echo "<h1>Thêm thành công </h1>";
}
else{
    echo "<h1>Thêm không thành công </h1>";
}
header("Location: danhsach.php");
?>



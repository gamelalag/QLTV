<?php
$masv = $_GET['sid'];
require_once 'ketnoi.php';
$xoa1_sql = "DELETE FROM danhsachbandoc WHERE masv=$masv";
mysqli_query($conn, $xoa1_sql);
echo '<h1>Xoa thanh cong</h1>';
header("Location: danhsach.php");
?>
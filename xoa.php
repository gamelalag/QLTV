<?php
$id = $_GET['sid'];
require_once 'ketnoisach.php';
$xoa_sql = "DELETE FROM danhsachsach WHERE id=$id";
mysqli_query($conn, $xoa_sql);
echo '<h1>Xoa thanh cong</h1>';
header("Location: danhsachsach.php");
?>
<?php 
$id = $_GET['sid'];
require_once 'ketnoisach.php';
$sua_sql = "SELECT * FROM danhsachsach WHERE id = $id";
$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa danh sách </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 style="color:brown">Sửa danh sách sách</h1>
        <form action="update.php" method="post">
        <div class="form-group">
                <label for="id">Mã sách</label>
                <input type="text" class="form-control" name="id" id="id" value = "<?php echo $row['id']?>">
            </div>
            <div class="form-group">
                <label for="tensach">Tên sách</label>
                <input type="text" class="form-control" name="tensach" id="tesach" 
                value ="<?php echo $row['tensach']?>">
            </div>
            <div class="form-group">
                <label for="sotrang">Số trang</label>
                <input type="text" class="form-control" name="sotrang" id="sotrang" value = "<?php echo $row['sotrang']?>">
            </div>
            <div class="form-group">
                <label for="tacgia">Tác giả</label>
                <input type="text" class="form-control" name="tacgia" id="tacgia" value = "<?php echo $row['tacgia']?>">
            </div>
            <div class="form-group">
                <label for="nxb">NXB</label>
                <input type="nxb" class="form-control" name="nxb" id="nxb" value = "<?php echo $row['nxb']?>">
            </div>
            <div class="form-group">
                <label for="theloai">Thể loại</label>
                <input type="text" class="form-control" name="theloai" id="theloai" value = "<?php echo $row['theloai']?>">
            </div>
            <button type="submit" class="btn btn-primary">Sửa sách</button>
        </form>
    </div>
</body>

</html>>



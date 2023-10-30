<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí thư viện trường ĐHHP</title>
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
        <h1 style="color:brown">Quản lí thư viện trường ĐHHP</h1>
        <a href="danhsach.php" class="btn btn-success mb-2">Danh sách bạn đọc</a>
        <a href="danhsachsach.php" class="btn btn-info mb-4">Danh sách sách</a>
            <!--Chức năng tìm kiếm-->
     <form method="post">
            <input  type="text"name="noidung" style="width: 80%;" placeholder="Tìm kiếm sách theo tên ">
            <button type="submit" name="btn"> Tìm Kiếm </button>
            <button type="submit" name="btn"> Thoát </button>
        </form>
        <br>
        <?php
       require_once 'ketnoisach.php';
       if(isset($_POST['btn'])){
            $noidung = mysqli_real_escape_string($conn, $_POST['noidung']); 
        } else {
            $noidung = '';
        }
        if(isset($_POST['clear'])){
            header("Refresh:0");
         }
        ?>
        <a href="them.html" class="btn btn-info">Thêm sách</a>
        
        <table class="table ">
            
            <thead class="thead-dark">
                <tr>
                    <th>Mã sách</th>
                    <th>Tên sách</th>
                    <th>Số trang</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Thể loại</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'ketnoisach.php';
                $danhsach_sql = "SELECT * FROM danhsachsach WHERE tensach  LIKE '%$noidung%'  order by tensach";
                $result = mysqli_query($conn, $danhsach_sql);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['tensach']; ?></td>
                        <td><?php echo $r['sotrang']; ?></td>
                        <td><?php echo $r['tacgia']; ?></td>
                        <td><?php echo $r['nxb']; ?></td>
                        <td><?php echo $r['theloai']; ?></td>
                        <td><a href="sua.php?sid=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a> 
                        <a onclick=" return confirm(' Bạn có muốn xoá sách này không');" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xoá</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>    
        </table>

    </div>
</body>

</html>
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
        <a href="danhsach.php" class="btn btn-success mb-4">Danh sách bạn đọc</a>
        <a href="danhsachsach.php" class="btn btn-info mb-2">Danh sách sách</a>
            <!--Chức năng tìm kiếm-->
     <form method="post">
            <input  type="text"name="noidung" style="width: 80%;" placeholder="Tìm kiếm bạn đọc theo mã sinh viên">
            <button type="submit" name="btn"> Tìm Kiếm </button>
            <button type="submit" name="btn"> Thoát </button>
        </form>
        <br>
        <?php
       require_once 'ketnoi.php';
       if(isset($_POST['btn'])){
            $noidung = mysqli_real_escape_string($conn, $_POST['noidung']); 
        } else {
            $noidung = '';
        }
        if(isset($_POST['clear'])){
            header("Refresh:0");
         }
        ?>
        <a href="them1.html" class="btn btn-info">Thêm bạn đọc</a>
        
        <table class="table ">
            
            <thead class="thead-dark">
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tinh</th>
                    <th>Địa chỉ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'ketnoi.php';
                $danhsach_sql = "SELECT * FROM danhsachbandoc WHERE masv  LIKE '%$noidung%'  order by masv,hoten, ngaysinh, Gioitinh ,Diachi";
                $result = mysqli_query($conn, $danhsach_sql);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $r['masv']; ?></td>
                        <td><?php echo $r['hoten']; ?></td>
                        <td><?php echo $r['ngaysinh']; ?></td>
                        <td><?php echo $r['Gioitinh']; ?></td>
                        <td><?php echo $r['Diachi']; ?></td>
                        <td><a href="sua1.php?sid=<?php echo $r['masv'];?>" class="btn btn-info">Sửa</a> 
                        <a onclick=" return confirm(' Bạn có muốn xoá bạn đọc này không ');" href="xoa1.php?sid=<?php echo $r['masv'];?>" class="btn btn-danger">Xoá</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>    
        </table>

    </div>
</body>

</html>
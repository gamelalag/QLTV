<?php
session_start();
    if( isset($_POST["dangnhap"])){
        $user = $_POST['user'];
        $password = $_POST['pass'];

    if($user== 'doquochuy'&& $password== '22062003'){
        $_SESSION['user']=$user;
        header('location:danhsach.php');
    }
    else{
       
        header('location:index.php');
        echo"sai tài khoản hoặc mật khẩu";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trang chủ</title>
  <style>

.menu>ul>li{
   
    display: inline-block;
    position: relative;
}
.menu>ul>li>a{
    display: block;
}
.menu>ul{
    display: flex;
    padding: 0;
    margin: 0;
    list-style: none;
    background-color: #FF9800;
    border-radius: 3px;
    text-align: center;
}
.menu>ul>li>a{

    text-decoration: none;
    font-size: larger;
    color: white;
    padding: 10px;
    line-height: 20px;
}
.menu>ul>li>a:hover{
    text-decoration: none;
    color:red;
}
.menu ul ul{
    position: absolute;
    display: none;
    padding: 0;
    margin: 0;
    list-style: none;
    border-radius: 3px;
    width: 80px;
    background-color:white;
    box-shadow: 0 0 1px gray;
}
.menu ul ul a{
    display: block;
    line-height: 40px;
    color:black;
    text-decoration: none;
    font-variant: normal;
    font-size: larger;
    padding: 0 10px;
}
.menu>ul>li:hover>ul{
    display: block;

}
.menu ul ul a:hover{
    background-color: orange;
    color: white;
}

footer{
    border-top: 5px double orangered;
    line-height: 50px;
    background-color: lightcyan;
    text-align: center;
    font-variant: normal;
    clear: both;
}



h1{
color: #0a5f94 ;
width: 50%;
height: 50%;

}

.logo {
    display: flex;

  }
  .logo img {
    width: 50px;

  }
  </style>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>
      
<div id="container">
        
        <nav class="menu">
                <ul>
                    <a href="#" class="logo">
                        <img src="imgaes/th.jpg" alt="" width="10%" >
        
                    </a>
              
                    <li style=" color: silver;"><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sách hay mỗi ngày</a></li>
                    <li><a href="#">Tài liệu học tập</a></li>
                    <li><a href="#">Giáo trình </a></li>    
                    <li><a href="#">Danh sách thanh toán</a></li>
                 
                    <li><a href="#">Liên hệ</a>
                        <ul>
                            <li><a href="#">Sđt</a></li>
                            <li><a href="#">Email</a></li>
                        </ul></li>
                </ul>
                <header>

                </header>
            </nav>
            <h1>Đại Học Hải Phòng</h1>  
            <a href="#" class="">
                <img src="imgaes/anh-thu-vien-dep_104915255 (1).jpg" alt="" style="width :40%">
            </a>
            
             
            
            <div class="contanier">
        <h2 style="color:orange">Đăng nhập</h2>
        <form action="index.php" method="post">
        
    <div class="form-group" style=" border-radius: 3px; padding:0px 10px;background-color:#4caf50">
                <label for="user">Tài khoản</label>
                <input type="text" class="form-control" name="user" placeholder="Enter user name" id="user " required>
               
            </div>
           
            <div class="form-group"  style="border-radius: 3px; padding:0px 10px;background-color:#4caf50">
                <label for="pass">Mật khẩu</label>
                <input type="text" class="form-control" name="pass" placeholder="Enter password" id="pass" required>
            </div>
          
          
            <button type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-primary">Đăng nhập</button>
     
 
            
        </form>
    </div>
            
            <footer>
             Quản lý thư viện
            </footer>
        </div>
 
</body>
</html>
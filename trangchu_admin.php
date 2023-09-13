<?php $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
     mysqli_query($link,'SET NAME UTF8')  ;
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web_btl/css/style.css">
    <link rel="stylesheet" href="./css/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="./css/themify-icons-font/themify-icons/themify-icons.css">
    <title>BBQ</title>
</head>
<style>

</style>
<body>
        <!-- Header -->
        <div id="header">
            <div class="logo" style=margin-top:5px;width:100px;>
                <img src="https://cdn4.vectorstock.com/i/1000x1000/50/28/logo-for-bbq-vector-22845028.jpg" height="40px"  alt="">
            </div>
            <div class="header_left">
                <ul class="menu">
                    <li><a  href="trangchu.php">Trang chủ</a></li>
                    <li><a href="">Sản phẩm</a><i class="fa-solid fa-chevron-down"></i>
                        <ul class="an">
                            <li><a href="doannhanh.php">Đồ ăn nhanh</a></li>
                            <li><a href="#">BBQ</a></li>
                            <li><a href="#">Đồ uống</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="header_right">
                <ul class="menu">
                    <li><a href="#"><i class="ti-back-right"></i>Trang chủ admin</a></li>
                    
                </ul>
            </div>
        </div>
    <div id="main">   
        <div class="sidebar">
        <div class="logo">          
                <img src="../css/img/user.jpg" alt="">
                <p>Admin</p>
                <i class="ti-angle-down">             
                <a class="out" href="../login/dangnhap.php">
                <i class="fa-solid fa-right-to-bracket"></i>    
                Đăng xuất</a>
                
                </i>

        </div>
        <div class="quanly">
            <ul class="cha">
                <li>Quản lý tài khoản
                    <ul class="con">
                        <li><a href="../admin/slide/accountadd.php">Thêm tài khoản</a></li>
                        <li><a href="../admin/slide/accountlist.php">Danh sách tài khoản</a></li>
                    </ul>
                    
                </li>
                <li>Quản lý danh mục sản phẩm
                <ul class="con">
                        <li><a href="../admin/slide/categoryadd.php">Thêm danh mục sản phẩm</a></li>
                        <li><a href="../admin/slide/categorylist.php">Danh sách danh mục sản phẩm</a></li>
                    </ul>
                </li>
                <li>Quản lý sản phẩm
                <ul class="con">
                        <li><a href="../admin/slide/productadd.php">Thêm sản phẩm</a></li>
                        <li><a href="../admin/slide/productlist.php">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        
        </div>
     </div>
     <div id="footer">
        <div class="accout">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            
            <i class="fa-brands fa-instagram"></i>
            <i class="ti-dropbox"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
        </div>
    </div>
    </body>
</html>
<?php $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
     mysqli_query($link,'SET NAME UTF8')  ;
     ob_start();
     session_start();
     if(!isset($_SESSION['mySession'])){
        header('Location:../dangnhap.php');
     }
     if(isset($_SESSION['mySession'])) {
        $id_user=$_SESSION['mySession'];
        // $name_user=$_SESSION['tenkhach']; 
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylee.css">
    
    <link rel="stylesheet" href="../css/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="../css/themify-icons-font/themify-icons/themify-icons.css">
    <title>BBQ</title>
</head>
<style>
    #main{
        display: flex;
        background-image: none;
        background-color: #FFEFD5;
    }
    .sidebar{
        flex:1;
        display: flex;
         flex-direction: column;
        border-right: 1px solid #000;
        background-color: #696969;
    }
    .sidebar_logo{
    height: 100px;
    background-color: #fff;
    border-bottom: 1px solid #000;
}
.sidebar_logo img{
    width: 50px;
    margin-left: 20px;
    margin-top: 10px;
}
.sidebar_logo p{
    margin: 5px 20px;
}
.sidebar_logo > i{
    position: relative;
    float: right;
    margin-right: 20px;
    margin-top: -20px;
    
}
.sidebar_logo .out{
    display: none;
    height: 80px;
    text-decoration: none;
    width: 200px;
    position: absolute;
    border: 1px solid #b2b2b2;
    padding: 10px;
    margin-top: 15px;
    margin-left: -50px;
    background-color: #fff;
}
.sidebar_logo .out .ti-close{
    margin-left: 150px;
    padding: 3px;
    color: #ccc;
}
.sidebar_logo .out .ti-close:hover{
    background-color: red;
}
.out a,.out .fa-solid{
    margin-top: 20px ;
}

.quanly .cha > li{
    font-weight: bold;
    font-size: 20px;
    margin: 20px 5px;
    
}
.quanly .con{
    margin-left: 20px;
    font-weight: 100;
    margin: 10px 20px;
    font-size: 17px;
}
.sidebar a{
    text-decoration: none;
    color: #b2b2b2;
}
 #main .quanly li{
    list-style: none;
    margin-top: 10px;
}
.con >li:hover{
    text-decoration: underline;
    color: #fff;
}
.content{
    margin-left: 20px;
    flex: 4.5; 
    
}
/* mở đóng đăng xuất  */
.out.open{
    display: block;
}
.ti-angle-down:hover{
    cursor: pointer;
    background-color: #696969;
}
</style>
<body>
        <!-- Header -->
        <div id="header">
            <div class="logo" style=margin-top:5px;width:100px;>
                <img src="https://cdn4.vectorstock.com/i/1000x1000/50/28/logo-for-bbq-vector-22845028.jpg" height="40px"  alt="">
            </div>
            <div class="header_left">
                
            </div>
            <div class="header_right">
                <ul class="menu">
                    <li><a href="trangchu_admin.php"><i class="ti-back-right"></i>Trang chủ admin</a></li>
                    
                </ul>
            </div>
        </div>
    <div id="main">   
        <div class="sidebar">
            <div class="sidebar_logo">          
                    <img src="../img/user.jpg" alt="">
                    <p>Admin</p>
                    
                    <i class="ti-angle-down">
                    <div class="out">
                            <i class="ti-close"><br></i>
                            <i class="fa-solid fa-right-to-bracket"></i>    
                            <a href="../dangnhap.php">Đăng xuất</a>
                    </div>          
                    
                    </i>

            </div>
            <div class="quanly">
                <ul class="cha">
                    <li>Quản lý tài khoản
                        <ul class="con">
                            <li><a href="../admin/accout_add.php">Thêm tài khoản</a></li>
                            <li><a href="../admin/accout_list.php">Danh sách tài khoản</a></li>
                        </ul>
                        
                    </li>
                    <li>Quản lý danh mục sản phẩm
                    <ul class="con">
                            <li><a href="../admin/category_add.php">Thêm danh mục sản phẩm</a></li>
                            <li><a href="../admin/category_list.php">Danh sách danh mục sản phẩm</a></li>
                        </ul>
                    </li>
                    <li>Quản lý sản phẩm
                    <ul class="con">
                            <li><a href="../admin/product_add.php">Thêm sản phẩm</a></li>
                            <li><a href="../admin/product_list.php">Danh sách sản phẩm</a></li>
                        </ul>
                    </li>
                    <li>Quản lý đơn hàng
                    <ul class="con">
                            <li><a href="../admin/order.php">Xem đơn hàng</a></li>
                        </ul>
                    </li>
                    <li>Quản lý tin tức
                    <ul class="con">
                            <li><a href="../admin/tintuc_them.php">Thêm tin tức</a></li>
                            <li><a href="../admin/tintuc_list.php">Xem tin tức</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        
        </div>
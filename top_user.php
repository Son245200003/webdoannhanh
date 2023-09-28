<?php $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
     mysqli_query($link,'SET NAME UTF8')  ;
     session_start();
     if(!isset($_SESSION['mySession'])){
        header('Location:dangnhap.php');
     }
     if(isset($_SESSION['mySession'])) {
        $id_user=$_SESSION['mySession'];
        $user=$_SESSION['tenkhach'];
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web_btl/css/stylee.css">
    
    <link rel="stylesheet" href="./css/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
    
    <title>BBQ</title>
</head>
<body>
    <div id="main">
        <div id="header">
            <div class="logo" style=margin-top:5px;>
                <img src="https://cdn4.vectorstock.com/i/1000x1000/50/28/logo-for-bbq-vector-22845028.jpg" height="40px"  alt="">
                <!-- <a href="trangchu.php" style="margin-top: 5px;text-decoration: none;color: #FF6633;"><h3>Sơn BBQ</h3></a> -->
                    <a style="height: 50px;" href="trangchu.php">
                            <div class="text">
                                <h3>Sơn BBQ</h3>
                            </div>
                            <svg>
                                <filter id="fire">
                                    <feTurbulence id="turbulence" baseFrequency="0.1 0.1 " numOctaves="2" seed="3">
                                    </feTurbulence>
                                    <feDisplacementMap in="SourceGraphic" scale="3"></feDisplacementMap>
                                </filter>
                            </svg>
                        </a>
            </div>
            <div class="header_left">
                <ul class="menu">
                <li><a  href="trangchu.php">Trang chủ</a></li>
                    <li><a href="">Sản phẩm</a><i class="fa-solid fa-chevron-down"></i>
                        <ul class="an">
                        <?php
                                $query="SELECT * FROM danhmuc";
                                $result =mysqli_query($link,$query);
                                if(mysqli_num_rows($result) > 0){
                                    $i=0;
                                    while($r=mysqli_fetch_assoc($result)){
                                        $i++;
                                        $u=$r['tendanhmuc'];
                                        $p=$r['linkdanhmuc'];
                                        echo"<li><a href='$p'>$u</a></li>";
                                        
                                    }
                                }
                            ?>
                        </ul>
                    </li>
                    <li><a href="gioithieu.php">Giới thiệu</a></li>
                    <li><a href="tintuc.php">Tin tức</a></li>
                </ul>
            </div>
            <div class="header_right">
                <ul class="menu">
                      <li> <a style="color: white;" href="#">Xin chào, <?php echo $user?></a></li>
                    <li><a href="dangxuat.php">Đăng Xuất</a></li>
                    <li><a href="timkiem.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href="giohang.php"><i class="fa-solid fa-cart-shopping"></i>
                    <?php $query="SELECT * FROM giohang WHERE user='$id_user'";
                            $result =mysqli_query($link,$query);
                            if(mysqli_num_rows($result) > 0){
                                $i=0;
                                while($r=mysqli_fetch_assoc($result)){
                                    $i++;
                                    echo"<p>$i</p>";
                                }}
                        ?>
                </a></li>
                </ul>
            </div>
        </div>
        <!-- Header -->
        <!--Content -->
        <div id="secsion">
            <!-- left side -->
            <div class="sidebar">
                <div class="sidebar_menu">
                        <a href="#content_fastfood">Đồ ăn nhanh</a> 
                        <a href="#newfood">BBQ</a> 
                        <a href="#drink">Đồ uống</a> 
                        
                </div>
                <div class="sidebar_contact">
                    <h3>Người hỗ trợ</h3>
                    <p>Nguyễn Danh Sơn</p>
                    <h3>Số hotline</h3>
                    <p>0946704597</p>
                    <h3>Thời gian làm việc</h3>
                    <p>Bất kể khi nào bạn cần</p>
                </div>
            </div>
            <div class="content">
                
                <div id="content_fastfood" class="content_fastfood">
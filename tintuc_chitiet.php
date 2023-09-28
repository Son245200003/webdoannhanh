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
<style>
    #main{
        background-image: none;
        background-color: #ddd;
    }
    .secsion{
        display: flex;
       flex-direction: column;
    }
    .logo{
        display: flex;
    }
    .row{
        margin-top: 50px;
    }
    
   .tin_member{
    display: flex;
    margin-top: 20px;
    margin-bottom: 40px;
   }
   .tin_member img{
    margin-right: 50px;
    height: 100%;
    width: 100%;
   }
</style>
<body>
    <div id="main">
        <!-- Header -->
        <div id="header">
            <div class="logo" style=margin-top:5px;width:100px;>
                <img src="https://cdn4.vectorstock.com/i/1000x1000/50/28/logo-for-bbq-vector-22845028.jpg" height="40px"  alt="">
                <h2>SơnBBQ</h2>
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
                    <li><a href="dangxuat.php">Đăng xuất</a></li>
                    <li><a href="timkiem.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-cart-shopping"></i>
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
        <!--Content -->
        <div id="secsion" style="flex-direction: column;">
            <!-- left side -->
            <h2 class="h2">Tin tức mới nhất  >  Chi tiết tin tức <br></h2>
                
            
            <?php
                $id=$_GET['id'];
                $query="SELECT * FROM tintuc WHERE id=$id";
                $result=mysqli_query($link,$query); 
                if(mysqli_num_rows($result) > 0){
                    $i=0;
                    while($r=mysqli_fetch_assoc($result)){
                        $i++;
                        $a=$r['anh'];
                        $td=$r['tieude'];
                        $ndc=$r['noidungchinh'];
                        $nd=$r['noidung'];
                        echo"<div class='tin_member'>
                             <img src='$a' alt=''>
                            <div class='tin_noidung'> 
                                <h4>$td</h4>
                                <p>$nd</p>
                            </div>
                        </div>";
                    }}
            ?>
        </div>
        <!-- Footer -->
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
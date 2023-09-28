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
    .logo{
        display: flex;
    }
    .row{
        margin-top: 50px;
    }

</style>
<body>
    <div id="main">
        <!-- Header -->
        <div id="header">
            <div class="logo" style=margin-top:5px;>
                <img src="https://cdn4.vectorstock.com/i/1000x1000/50/28/logo-for-bbq-vector-22845028.jpg" height="40px"  alt="">
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
                    <li><a href="dangxuat.php">Đăng xuất</a></li>
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
        <!--Content -->
        <div id="secsion">
            <!-- left side -->
            <div class="row" style="display: flex;margin-bottom: 30px;">
                <div class="col" style="flex: 2;">
                    <div class="col-inner ">
                        <h3 style="text-align: center;"><span style="font-size: 100%; color: #000000;">Sơn BBQ</span></h3>
                            <div class="img has-hover x md-x lg-x y md-y lg-y" >
                                <div class="img-inner image-cover dark" >
                                <img src="https://noithatxuankhanh.net/wp-content/uploads/2019/06/image2-26.jpg" alt="">
                                </div>
                                                        
                        <style scope="scope">

                        
                        </style>
                            </div>
                        <p><span style="font-size: 95%;"><b>Sơn BBQ</b>&nbsp;là mô hình phục vụ các món ăn gọi riêng lẻ theo nhu cầu. Mỗi món tương ứng với giá tiền khác nhau. King BBQ mô hình gọi món, với thực đơn đa dạng hơn 200 món ăn cùng các set bộ và combo dành cho 2-4 người với mức giá hợp lý. Món sườn King là món ăn đặc trưng và rất nổi tiếng mà bất cứ thực khách nào đến King BBQ cũng không thể bỏ qua.</span></p>
                        <p><span style="font-size: 95%;"><b>Sơn BBQ</b> là điểm đến cho các khách hàng có nhu cầu tiếp khách, tụ tập bạn bè, gia đình, liên hoan sinh nhật.</span></p>
                        <a href="https://bizhostvn.com/w/bbq/thuc-don/" target="_self" class="button secondary lowercase" style="border-radius:5px;">
                        </a>

                    </div>
                </div>
                <div style="margin-left: 80px;flex:2" class="col" >
                    <div class="col-inner" >
                        <h3 style="text-align: center;"><span style="font-size: 100%; color: #000000;">NGƯỜI Đại Diện</span></h3>
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2108638647">
                                <div class="img-inner image-cover dark" >
                                <img src="../web_btl//img//ORGJ8773.JPG" width="100%" height="700px" alt="">
                                </div>
                                                        
                        <style scope="scope">

                        #image_2108638647 {
                        width: 100%;
                        
                        }
                        </style>
                            </div>
                        <p><span style="font-size: 95%;"><b>Nguyễn Danh Sơn</b>&nbsp;sinh viên lớp 72DCTT24 trường Đại Học Công Nghệ Giao thông Vận tải</span></p>
                        <p><span style="font-size: 95%;"><b>Phạm Nguyễn Huy Hoàng</b> sinh viên lớp 72DCTT24 trường Đại Học Công Nghệ Giao thông Vận tải.</span></p>
                        <a href="https://bizhostvn.com/w/bbq/thuc-don/" target="_self" class="button secondary lowercase" style="border-radius:5px;">
                        </a>

                    </div>
                </div>
            </div>
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
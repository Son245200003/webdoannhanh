<?php $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
     mysqli_query($link,'SET NAME UTF8')  ;
     
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
   .menu_list{
    display: flex;
   }
</style>
<body>
    <div id="main">
        <!-- Header -->
        <div id="header">
            <div class="logo" style=margin-top:5px;>
                <img src="https://cdn4.vectorstock.com/i/1000x1000/50/28/logo-for-bbq-vector-22845028.jpg" height="40px"  alt="">
                <a href="#" style="margin-top: 5px;text-decoration: none;color: #FF6633;"><h3>Sơn BBQ</h3></a>
            </div>
            <div class="header_left">
                <ul class="menu">
                    <li><a  href="dangnhap.php">Trang chủ</a></li>
                    <li><a href="dangnhap.php">Sản phẩm</a><i class="fa-solid fa-chevron-down"></i>
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
                                        echo"<li><a href='dangnhap.php'>$u</a></li>";
                                        
                                    }
                                }
                            ?>
                            <!-- <li><a href="doannhanh.php">Đồ ăn nhanh</a></li>
                            <li><a href="#">BBQ</a></li>
                            <li><a href="#">Đồ uống</a></li> -->
                        </ul>
                    </li>
                                
                    <li><a href="gioithieu.php">Giới thiệu</a></li>
                </ul>
            </div>
            <div class="header_right">
                <ul class="menu">
                    <li><a href="dangnhap.php">Đăng Nhập</a></li>
                    <li><a href="timkiem.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </div>
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
            <!-- Right side -->
            <div class="content">
                <div class="">
                    <img class="title" src="https://th.bing.com/th/id/OIP.WYJeLKbvWYFftgqMuexvxQHaEK?pid=ImgDet&rs=1" alt="">
                </div>
                <div id="content_fastfood" class="content_fastfood">
                    <p class="content_title">Đồ ăn nhanh</p>
                    <div class="content_menu">
                        <?php
                            $query="SELECT * FROM sanpham WHERE category_id='ĐỒ ĂN NHANH' LIMIT 0,6";
                            $result =mysqli_query($link,$query);
                            if(mysqli_num_rows($result) > 0){
                                $i=0;
                                while($r=mysqli_fetch_assoc($result)){
                                    $i++;
                                    $dm=$r['category_id'];
                                    $sp=$r['tittle'];
                                    $gia=$r['price'];
                                    $l=$r['thumbnail'];
                                    ?>
                                <div class="menu_list">
                                    <a href="dangnhap.php">
                                    <?php echo"<img src='$l'alt='bánh mì'>";?>
                                    <div class="sanpham">
                                    <?php echo"<h3>$gia Đ</h3>";?>
                                    <?php echo"<p>$sp</p>";?>
                                    <button><i class="fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                                     </div>
                                    </a>
                                </div>
                                    <?php
                                }
                                
                            }
                        ?>
                        <!-- <div class="menu_list">
                            <a href="">
                            <img src="https://cdn.tgdd.vn/2021/11/CookRecipe/Avatar/banh-mi-tho-nhi-ky-thit-heo-thumbnail.jpg" alt="bánh mì">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                                <button><i class="fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                            </div>
                            </a>
                        </div>
                        -->
                    </div>
                </div> 
                <div id="newfood" class="newfood">
                    <p class="content_title">BBQ</p>
                    <div class="content_menu">
                    <?php
                            $query="SELECT * FROM sanpham WHERE category_id='BBQ'Limit 0,6";
                            $result =mysqli_query($link,$query);
                            if(mysqli_num_rows($result) > 0){
                                $i=0;
                                while($r=mysqli_fetch_assoc($result)){
                                    $i++;
                                    $dm=$r['category_id'];
                                    $sp=$r['tittle'];
                                    $gia=$r['price'];
                                    $l=$r['thumbnail'];
                                    ?>
                                <div class="menu_list">
                                    <a href="dangnhap.php">
                                    <?php echo"<img src='$l'alt='bánh mì'>";?>
                                    <div class="sanpham">
                                    <?php echo"<h3>$gia Đ</h3>";?>
                                    <?php echo"<p>$sp</p>";?>
                                    <button><i class="fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                                     </div>
                                    </a>
                                </div>
                                    <?php
                                }
                                
                            }
                        ?>
                    </div>
                </div>
                <div id="drink" class="drink">
                    <p class="content_title">Đồ uống</p>
                    <div class="content_menu">
                    <?php
                            $query="SELECT * FROM sanpham WHERE category_id='ĐỒ UỐNG'Limit 0,6";
                            $result =mysqli_query($link,$query);
                            if(mysqli_num_rows($result) > 0){
                                $i=0;
                                while($r=mysqli_fetch_assoc($result)){
                                    $i++;
                                    $dm=$r['category_id'];
                                    $sp=$r['tittle'];
                                    $gia=$r['price'];
                                    $l=$r['thumbnail'];
                                    ?>
                                <div class="menu_list">
                                    <a href="dangnhap.php">
                                    <?php echo"<img src='$l'alt='bánh mì'>";?>
                                    <div class="sanpham">
                                    <?php echo"<h3>$gia Đ</h3>";?>
                                    <?php echo"<p>$sp</p>";?>
                                    <button><i class="fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                                     </div>
                                    </a>
                                </div>
                                    <?php
                                }
                                
                            }
                        ?>

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
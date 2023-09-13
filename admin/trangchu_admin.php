<?php $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
     mysqli_query($link,'SET NAME UTF8')  ;
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web_btl/css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="stylesheet" href="../css/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="../css/themify-icons-font/themify-icons/themify-icons.css">
    <title>BBQ</title>
</head>
<style>
    #main{
        display: flex;
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
        <div class="content">

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
    <script>
         const show=document.querySelector(".ti-angle-down")
         const close=document.querySelector(".ti-close")
         const out=document.querySelector(".out")
         const main=document.querySelector(".sidebar");
        //  close.onclick=function(e) 
        //  {
        //     e.stopPropagation();
        //     out.classList.remove('open');
        //  }

        function showdangxuat(){
            out.classList.add('open')
        }
        function hidedangxuat(e){
            e.stopPropagation();
            out.classList.remove('open')
        }
        
        show.addEventListener('click',showdangxuat)
        close.addEventListener('click',hidedangxuat)
    </script>
</html>
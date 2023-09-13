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
    
    <title>BBQ</title>
</head>
<body>
    <div id="main">
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
                    <!-- <li><a href="">Các món bò</a><i class="fa-solid fa-chevron-down"></i></li>
                    <li><a href="">Salad</a></li>
                    <li><a href="">Đồ uống</a></li>
                    <li><a href="">Có gì mới</a></li> -->
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="header_right">
                <ul class="menu">
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </div>
        <!--Content -->
        <div id="secsion">
            <!-- left side -->
            <div class="sidebar">
                <div class="sidebar_menu">
                        <a href="#content_fastfood">Đồ ăn nhanh</a> 
                        <a href="#newfood">Món mới</a> 
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
                        <div class="menu_list">
                            <a href="">
                            <img src="https://cdn.tgdd.vn/2021/11/CookRecipe/Avatar/banh-mi-tho-nhi-ky-thit-heo-thumbnail.jpg" alt="bánh mì">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="https://nhahanghuongsen.com.vn/wp-content/uploads/2014/08/dui-ga-nuong.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Đùi gà nướng</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="https://th.bing.com/th/id/R.977891a3bb83a1cfb07ae5f7227a923e?rik=VlrW%2bYK2LokwTQ&riu=http%3a%2f%2fwww.monngon.tv%2fuploads%2fimages%2fimages%2fbanh-hamburger-bo-1.jpg&ehk=u838I86f3xXWElpmyS0U86mupsqhnOXlO79vnZEhfk8%3d&risl=&pid=ImgRaw&r=0" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Hambuger thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="https://th.bing.com/th/id/OIP.F1AJHmgfs8f3xI0-HKrA0QHaFj?pid=ImgDet&rs=1" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Hambuger gà</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="https://th.bing.com/th/id/R.f3995e468c9787ee819e75c81a448306?rik=KayE18eGi911hg&riu=http%3a%2f%2fwww.favfoods.us%2fwp-content%2fuploads%2f2018%2f10%2fTHRIVE_09_104.jpg&ehk=%2fzyQq37aMf3aFgyRHOGUz8WPXmqzLIpm7ZRUzEmGJto%3d&risl=&pid=ImgRaw&r=0" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Salad</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="https://quangon.vn/resources/2020/05/19/salad-trai-cay-sot-mayonnaise-13.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Salad trái cây</p>
                            </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div id="newfood" class="newfood">
                    <p class="content_title">BBQ</p>
                    <div class="content_menu">
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div id="drink" class="drink">
                    <p class="content_title">Đồ uống</p>
                    <div class="content_menu">
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>
                        <div class="menu_list">
                            <a href="">
                            <img src="/img/banhmi.jpg" alt="">
                            <div class="sanpham">
                                <h3>99,000Đ</h3>
                                <p>Bánh mì kẹp thịt bò</p>
                            </div>
                            </a>
                        </div>

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
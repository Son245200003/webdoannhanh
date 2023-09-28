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
    <link rel="stylesheet" href="./css/themify-icons-font/themify-icons/themify-icons.css">
    <title>BBQ</title>
</head>
<style>
   .menu_list{
    display: flex;
   }
    #main{
        background-image: none;
        background-color: #fff;
    }
    table img{
        height: 150px;
        width: 150px;
    }
    .thanhtoan button{
        height: 40px;
        width: 200px;
    }
    .thanhtoan{
        margin-bottom: 30px;
        margin-left: 1300px;
        height: 40px;
        display: block;
    }
    .soluong1 input{
        padding-left:  10px;
    }
    h1{
        font-weight: 500;
        margin: 30px;
        font-size: 30px;
        margin-left: 100px;
    }
    .cart{
        /* margin: 30px 150px; */
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;

    }
    .soluong1 >input{
        width: 50px;
        border-top: 3px solid #b2b2b2;
        border-bottom: 3px solid #b2b2b2;
        border-left: none;
        border-right: none;
        margin-top: -2px;

    }
    .soluong1{
        display: flex;
        margin: 5px 20px;
       
    }
    .soluong1 i{
        border: 3px solid #b2b2b2;
    }
    .giohang >a button{
        border: 1px solid #b2b2b2;
        width: 150px;
        height: 30px;
        background-color: red;
        margin-left: 150px;
        color: aliceblue;
    }
     button:hover{
        cursor: pointer;
        background-color: #32CD32;
    }
    table{
    width: 80%;
    text-align: center;
    margin-top: 20px;
    margin: 30px 150px;

    
}

table button{
    background-color: red;
    color: aliceblue;
    width: 70px;
    height: 30px;
    border: none;
    margin: 10px;
}
table tr th,td{
    border: 3px solid #b2b2b2;
}
table{
    border-collapse: collapse;
}
.soluong1 a{
    color: #000;
    padding: 2px 0px;
}
/* ẩn hiện */
.modal{
    position: fixed;
    right: 0;
    left: 0;
    top:0;
    bottom: -20px;
    background-color: rgba(0, 0, 0, 0.4);
    align-items: center;
    justify-content: center;
    display: none;
    animation: modalFadeIn ease 0.5s;
}
.modal.open{
    display: flex;
}
.modal-container{
    background-color: #fff;
    width: 600px;
    min-height: 100px;
    position: relative;
    max-width: calc(100% - 50px);
}
.modal-container .modal-header{
    background-color:#009688 ;
    height: 75px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    color:#fff;
}

.modal-close{
    position: absolute;
    right: 0;
    padding: 12px;
    color: #fff;
}
.modal-close:hover{
    cursor: pointer;
    opacity: 1;
    background-color: #f44336;
}
.js-huy:hover{
    background-color: #f44336;
}
.modal-container .modal-body{
    padding: 16px;
    display: flex;
    justify-content: space-around;
}
#btn{
    padding: 20px;
}
.xoahet button{
        padding: 15px;
        margin-bottom: 30px;
        margin-left: 1400px;
        /* display: block; */
}
@keyframes modalFadeIn{
    from{
        opacity: 0.3;
        transform:translateY(-100px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
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
                    <li> <a style="color: white;" href="#">Xin Chào,<?php echo $user?> </a></li>
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
    <table>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>                  
                    <th style="width:120px;">Số lượng</th>
                    <th>Tổng</th>
                    <th style="width:120px;"></th>
                    <th></th>
                </tr>
                <?php
                    $tongtien=0;
                    $query="SELECT * FROM giohang WHERE user ='$id_user'";
                    $result =mysqli_query($link,$query);
                    if(mysqli_num_rows($result) > 0){
                        $i=0;
                        while($r=mysqli_fetch_assoc($result)){
                            $i++;
                            $id=$r['id'];
                            $dm=$r['category'];
                            $sp=$r['tittle'];
                            $gia=$r['price'];
                            $sl=$r['soluong'];
                            $l=$r['thumbnail'];
                            $tong=$sl*$gia;
                            $tongtien=$tongtien+$tong;
                            echo"<tr>";
                            echo"<th>$i</th>";
                            echo"<th><img src='$l'></th>";
                            echo"<th>$sp</th>";
                            echo"<th>$gia $</th>";
                            echo"<th>
                                <div class='soluong1'>
                                    <a href='xoagiohang.php?tru=$id'><i class='ti-minus'></i></a>
                                   <input  value='$sl' type='number'>
                                    <a href='xoagiohang.php?cong=$id'><i class='ti-plus'> </i></a>
                                </div>
                                </th>";
                            echo"<th>$tong $</th>";
                            ?>
                            <th><a class="js-xoa"><button type='submit'>Xóa</button></a></th>
                            <th><input type="checkbox"></th>             
                            <!-- <th><a class="js-xoa" onclick="return confirm('Bạn có muốn xóa ko')" href='xoagiohang.php?id=<?php echo$id?>'><button type='submit'>Xóa</button></a></th>;               -->
                       <?php }
                    }
                ?>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>TỔNG</th>
                    <th><?php echo"$tongtien $"?></th>                  
                    <th></th>
                    <th></th>
                </tr>
                
            </table>
            </div >
            <a class="xoahet js-xoahet" ><button>Xóa hết</button></a>
            </div>
            </div >
            <a class="thanhtoan" href="./thanhtoan.php"><button>THANH TOÁN</button></a>
            </div>
            <!-- MODAL -->
        <div class="modal js-modal">
            <div class="modal-container js-modalcontainer">
                <div class="modal-close js-modal-close">
                    <i class="ti-close"></i>
                </div>
                <div class="modal-header">
                    Bạn có muốn xóa ko ?
                </div>
                <div class="modal-body">
                    <button id="btn" class="js-huy">
                        Hủy <i class="ti-check"></i>
                    </button>
                    <a href="xoagiohang.php?id=<?php echo$id?>">
                        <button id="btn">
                            CÓ <i class="ti-check"></i>
                        </button>
                    </a>
                </div>
                
            </div>
        </div>
        <!-- MODAL XOA HET -->
        <div class="modal js-modal-xoa">
            <div class="modal-container js-modalcontainer">
                <div class="modal-close js-modal-close">
                    <i class="ti-close"></i>
                </div>
                <div class="modal-header">
                    Bạn có muốn xóa tất cả ko ?
                </div>
                <div class="modal-body">
                    <button id="btn" class="js-huy">
                        Hủy <i class="ti-check"></i>
                    </button>
                    <a href="xoagiohang.php?xoahet=<?php echo'xoahet'?>">
                        <button id="btn">
                            CÓ <i class="ti-check"></i>
                        </button>
                    </a>
                </div>
                
            </div>
        </div>
        <!--  -->
<?php 
include "bottom_user.php";
?>
</body>



  <script >
    
    const buyBtns = document.querySelectorAll('.js-xoa')
    const xoahet = document.querySelector('.js-xoahet')
    const modalxoa =document.querySelector('.js-modal-xoa')
        const modal =document.querySelector('.js-modal')
        const modalcontainer=document.querySelector('.js-modalcontainer')
        const modalclose=document.querySelector('.js-modal-close')
        const modalhuy=document.querySelector('.js-huy');
        // thêm class open vào modal hiển thị modal
        function showbuyticket(){
            modal.classList.add('open')
        }
        function showxoahet(){
            modalxoa.classList.add('open')
        }
        // ẩn class open vào modal ẩn modal

        function hidebuyticket(){
            modal.classList.remove('open')
        }
        function hidexoahet(){
            modalxoa.classList.remove('open')
        }
        // lặp lại từng button và nghe sự kiện click
        for(const buyBtn of buyBtns){
            buyBtn.addEventListener('click',showbuyticket)
        }
        // nghe hành vi đóng modal
        modalclose.addEventListener('click',hidebuyticket)
        modal.addEventListener('click',hidebuyticket)
        modalcontainer.addEventListener('click',function(event){
            event.stopPropagation()
        })
        modalhuy.addEventListener('click',hidebuyticket)

        // xóa hết
        modalclose.addEventListener('click',hidexoahet)
        modalxoa.addEventListener('click',hidexoahet)
        modalcontainer.addEventListener('click',function(event){
            event.stopPropagation()
        })
        modalhuy.addEventListener('click',hidexoahet)
        xoahet.addEventListener('click',showxoahet)
  </script>
</html>
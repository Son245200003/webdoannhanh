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
     ob_start();
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
                </ul>
            </div>
            <div class="header_right">
                <ul class="menu">
                    <li> <a style="color: white;" href="#">Xin Chào <?php echo $user?></a></li>
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


        <!-- Main -->
        <h1>Thông tin khách hàng</h1>
        <form action="" method="post">
            <input type="text" placeholder="Nhập tên của bạn:" required name="name">
            <input type="number" placeholder="Nhập SĐT" name="sdt" required>
            <input type="text" placeholder="Nhập địa chỉ" name="diachi" required>
            <input class="note" type="text" placeholder="Ghi chú" name="note" required>
            <button class="thanhtoan" type="submit" name="insert">Xác nhận</button>
        </form>
       <h1>Hóa đơn</h1> 
<table>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>                  
                    <th style="width:120px;">Số lượng</th>
                    <th>Tổng</th>
                    <th style="width:120px;"></th>
                </tr>
                <?php
                    $tongtien=0;
                    $sppp=null;
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
                            $spp="$sp x $sl";
                            $sppp=$sppp."</br> $i. ".$spp;
                            $tong=$sl*$gia;
                            $tongtien=$tongtien+$tong;
                            echo"<tr>";
                            echo"<th>$i</th>";
                            echo"<th><img src='$l'></th>";
                            echo"<th>$spp</th>";
                            echo"<th>$gia $</th>";
                            echo"<th>
                                <div class='soluong1'>
                                    <a href=''><i class='ti-minus'></i></a>
                                    <input  value='1' type='number'>
                                    <a href=''><i class='ti-plus'> </i></a>
                                </div>
                                </th>";
                            echo"<th>$tong $</th>";
                            // echo "<td><a  href='./accout_delete.php?id=$u'>Xóa</a> ";
                            echo "<th><a href='xoagiohang.php?id=$id'><button type='submit' >Xóa</button></a></th>";  
                            // echo $sp;            
                        }
                    }
                ?>
               
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>TỔNG:</th>
                    <th><?php echo"$tongtien $"?></th>                  
                    <th></th>
                </tr>
                
            </table>
            

            <?php 
            
                if(isset($_POST['insert'])){
                    $n=$_POST['name'];
                    $s=$_POST['sdt'];
                    $d=$_POST['diachi'];
                    $ghichu=$_POST['note'];
                    $order_date = date('Y-m-d H:i:s');
                    $sql="INSERT INTO order_admin(name,sdt,diachi,ghichu,donhang,tongtien,user,Date) VALUE('$n','$s','$d','$ghichu','$sppp','$tongtien','$id_user','$order_date') ";
                    $result=mysqli_query($link,$sql)or die("Thêm thất bại");
                    header("location:./order_submit.php?id=$id_user");
                    // header("location:./giohang.php");
                }
                ?>
<?php 
    ob_end_flush();
include "bottom_user.php";
?>
</body>


<style>
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
form{
    width: 100%;
    height: 400px;
    display: flex;
    flex-direction: column;
}
form input{
    width: 60%;
    height: 30px;
    margin: 10px;
    margin-left: 200px;
}
.note{
    height: 100px;
}

  </style>
</html>
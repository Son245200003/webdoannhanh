<?php $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
     mysqli_query($link,'SET NAME UTF8')  ;
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./asset/themify-icons/themify-icons.css">
    <title>Đăng kí</title>
</head>
<style>
    p{
        color: brown;
        font-size: 20px;
    }
    .box4 a{
        text-decoration: none;color: white;
        padding-top:10px;
    }
    .box4 a:hover{
        color: #000;
        cursor: pointer;
    }
</style>
<body >
<video autoplay muted loop src="./img/glazed_-_11696 (Original)"></video>
<form action="" method="post">
    <div class="login">
            <div class="box1">
                <h3 >Register</h3>
            </div>
            <div class="box2">
                <input name="user" type="text" class="mail" placeholder="Email or SDT" autocomplete="off" required>
                <i class="ti-email"></i>
            </div>
            <div class="box3">
                <input name="password" type="password" class="mail" placeholder="Password" >
                <i class="ti-key"></i>
            </div>
            <div class="box3">
                <input name="name" type="text" class="mail" placeholder="Tên của bạn">
                <i class="ti-key"></i>
            </div>
            <div class="box5">
                <button  name="insert">Đăng kí</button>
                <!-- <input type="submit" name="insert" value="Them moi"> -->
            </div>
            <div class="box4">
               <a href="dangnhap.php">Quay lại trang đăng nhập</a> 
            </div>
    <?php
    if(isset($_POST['insert']) &&  $_POST['user'] !='' &&  $p=$_POST['password'] !='' && $_POST['name'] !=''){
        $User=$_POST['user'];
        $Password=$_POST['password'];
        $Name=$_POST['name'];
        $sql="SELECT * from dangnhap where user='$User'";
        $rs=mysqli_query($link,$sql);
        if(mysqli_num_rows($rs)>0){
                // header("Location: dangki.php");
                echo"<p >Tài khoản $User đã tồn tại</p>";
                
        }else{
        // Lệnh thêm data INSERT INTO tên bảng(tên cột1,tên cột2) VALUE(giá trị vừa nhập vào cột 1,giá trị vừa nhập vào cột 2)
        $query= "INSERT INTO dangnhap(user,password,name) VALUE('$User','$Password','$Name')";
        // echo"$User,$Password";
        $result =mysqli_query($link,$query) or die("Thêm thât bại");
        header('location:dangnhap.php');}
    
    } 
    ?>
</div>
    
    

 </form>
  
</body>
</html>
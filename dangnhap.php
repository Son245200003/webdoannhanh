<?php $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
     mysqli_query($link,'SET NAME UTF8')  ;
     session_start();
     if(isset($_SESSION['mySession'])){
        header('Location:trangchu.php');
     }
     if(isset($_SESSION['id_user'] )){
        $id_user=$_SESSION['id_user'];
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web_btl/css/register.css">
    <link rel="stylesheet" href="./asset/themify-icons/themify-icons.css">
    <title>dangnhap</title>
</head>
<style>
    video{
        position: relative;
        overflow: hidden;
    }
    form{
        z-index: 1;
        position: absolute;
        top: 19%;
        left: 35%;
    }
</style>
<body>
        <video autoplay muted loop src="./img/glazed_-_11696 (Original)">
    
        </video>

        <form action="" method="post">
            <div class="login">
                <div class="box1">
                    <h3 >Đăng nhập</h3>
    
                </div>
                <div class="box2">
                    <input type="text" class="mail" placeholder="Email or SDT" autocomplete="off" required name="user" >
                    <i class="ti-email"></i>
                </div>
                <div class="box3">
                    <input type="password" class="mail" placeholder="Password" name="password" >
                    <i class="ti-key"></i>
                </div>
                <!-- <div class="box4">
                    <input type="checkbox" class="checkbox" name="role">
                    <label for="check">admin</label>
                </div> -->
                <div class="box5">
                    <button name="insert">Login</button>
                    
                </div>
                <div class="box6">
                    <h4 style="color: #fff;font-weight: 300;">Không có tài khoản?</h4>
                    <a href="dangki.php">Đăng kí</a>
                </div>
        </form>
        <?php
        // $db= mysqli_connect("localhost","root","","web_btl");
        if(isset($_POST['insert'])){
           $u= $_POST['user'];
           $p=$_POST['password'];
           //ket noi 
           //truy van
           $sql="SELECT * from dangnhap where user='$u' and password='$p' ";
           //thuc thi truy van
           $rs=mysqli_query($link,$sql);
           $row=mysqli_fetch_assoc($rs);
           if(mysqli_num_rows($rs)>0){
            
           $_SESSION['login']=$row['role'];
            if($_SESSION['login']&&$_SESSION['login']!='0'){
                $id_user=$row['id'];
                $_SESSION['mySession']=$id_user;
                
                // $_SESSION['id_user']=$id_user;
                header("Location:./admin/trangchu_admin.php");
            }
            else {
                $id_user=$row['id'];
                $_SESSION['tenkhach']=$u;
                $_SESSION['mySession']=$id_user;
                header("Location:trangchu.php?");}
            
           }
           else{
            // header("Location: dangnhap.php");
            echo"<p>Tên đăng nhập hoặc mật khẩu ko chính xác</p>";
            
            
           }
        }
        ?>
        </div>
        <style>
            p{
                color: brown;
                font-size: 20px;
                margin-left: 20px;
            }
        </style>
</body>
</html>
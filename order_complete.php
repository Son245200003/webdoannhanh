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
        <div id="header">
            <div class="logo" style=margin-top:5px;>
                <img src="https://cdn4.vectorstock.com/i/1000x1000/50/28/logo-for-bbq-vector-22845028.jpg" height="40px"  alt="">
                <a href="trangchu.php" style="margin-top: 5px;text-decoration: none;color: #FF6633;"><h3>Sơn BBQ</h3></a>
            
            </div>
            <div class="header_left">
                <ul class="menu">
                <li><a  href="trangchu.php">Trang chủ</a></li>
            </div>  
            </div>  
<div class="tt">
<i class="fa-regular fa-circle-check"></i>
    <p >Đặt hàng thành công<br> chúng tôi sẽ liên lạc thời gian sớm nhất </p> 

</div>
</body>
<style>
    i{
        color: green;
        font-size: 150px;
        position: absolute;
        top:25%;
        left:45%;
    }
    p{
        font-size: 40px;
        margin: auto;
        display: flex;
        /* top:25%;
        left:25%; */
        text-align: center;
        justify-content: center;
        align-items: center;
        height: 90vh;
        color: #ccc;
        color: black;
        position: relative;
    }
    .tt{
        height: 99vh;
        width: 100%;
        background-color: #ddd;
    }
</style>
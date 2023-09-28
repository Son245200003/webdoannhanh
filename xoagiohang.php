<?php
    $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
    mysqli_query($link,'SET NAME UTF8')  ; 
     session_start();
    if(isset($_SESSION['mySession'])) {
        $id_user=$_SESSION['mySession'];
        $user=$_SESSION['tenkhach'];
     }
?>
<?php
    if(isset($_GET['id'])){
        $u=$_GET['id'];
        $query= "DELETE FROM giohang WHERE id='$u'";
        $result =mysqli_query($link,$query) or die("Xóa thất bại");
        header('location:giohang.php');
    }
    if(isset($_GET['cong'])){
        $c=$_GET['cong'];
        $query= "UPDATE  giohang SET soluong=soluong+1 WHERE id='$c'";
        $result =mysqli_query($link,$query) or die("Thêm thất bại");
        header('location:giohang.php');
    }
    if(isset($_GET['tru'])){
        $t=$_GET['tru'];
        $queryy="SELECT soluong FROM giohang WHERE id='$t'";
        $resultt =mysqli_query($link,$queryy);
                    if(mysqli_num_rows($resultt) > 0){
                        while($r=mysqli_fetch_assoc($resultt)){
                            $sl=$r['soluong'];
                        }}
        if($sl>0){
            $query= "UPDATE  giohang SET soluong=soluong-1 WHERE id='$t'";
            $result =mysqli_query($link,$query) or die("Trừ thất bại");
        }
        else{
            $query= "DELETE FROM giohang WHERE id='$t'";
            $result =mysqli_query($link,$query) or die("Xóa thất bại");
        }
        
        header('location:giohang.php');
    }
    if(isset($_GET['xoahet'])){
        $u=$_GET['xoahet'];
        $query= "DELETE FROM giohang WHERE user='$id_user' ";
        $result =mysqli_query($link,$query) or die("Xóa thất bại");
        header('location:giohang.php');
    }
    ?>  
    
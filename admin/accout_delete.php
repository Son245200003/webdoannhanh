<?php
    $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
    mysqli_query($link,'SET NAME UTF8')  ; 
   
?>
<?php
    if(isset($_GET['id'])){
        $u=$_GET['id'];
        $query= "DELETE FROM dangnhap WHERE user='$u'";
        $result =mysqli_query($link,$query) or die("Xóa thất bại");
        header('location:accout_list.php');
    }
    ?>  
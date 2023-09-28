<?php
    $link=new mysqli('localhost','root','','web_btl') or die('Kết nối thất bại'); 
    mysqli_query($link,'SET NAME UTF8')  ; 
    session_start();
    if(!isset($_SESSION['mySession'])){
       header('Location:dangnhap.php');
    }
    if(isset($_SESSION['mySession'])) {
       $id_user=$_SESSION['mySession'];
    }
   
?>
<?php
                    $idd=$_GET['id'];
                    $queryy="SELECT * FROM sanpham WHERE tittle='$idd'";
                    $resultt =mysqli_query($link,$queryy);
                     
                        $i=0;
                        while($r=mysqli_fetch_assoc($resultt)){
                            $i++;
                            $id=$r['id'];
                            $d=$r['category_id'];
                            $s=$r['tittle'];
                            $gia=$r['price'];   
                            $li=$r['thumbnail'];
                        
                        }
                        // ?id= để lấy id sang trang update nếu đúng id thì sẽ sửa
                    ?>
<?php

    if(isset($_GET['id'])){
        $u=$_GET['id'];
        $sl=1;
                $queryyy="SELECT * FROM giohang WHERE tittle='$u' AND user='$id_user'" ;
                 $resulttt =mysqli_query($link,$queryyy);
            
        if($r=mysqli_fetch_assoc($resulttt)){
             $query= "UPDATE  giohang SET soluong=(soluong+1) WHERE tittle='$u' AND user='$id_user'";
             $result =mysqli_query($link,$query) or die("Sửa thất bại");
        }else{
        $query= "INSERT INTO giohang(user,category,tittle,price,soluong,thumbnail) Value('$id_user','$d','$s','$gia','$sl',' $li') ";
        $result =mysqli_query($link,$query) or die("Thêm thất bại");}
        header('location:trangchu.php');
    }
    
    ?>  
<?php
    include('top_admin.php')
?>
<style>
    form{
        display: flex;
        flex-direction: column;
    }
    input{
        width: 50%;
        height: 30px;
        margin: 10px;
    }
    button{
        height: 30px;
        width: 100px;
        margin-top: 10px;
    }
    button:hover{
        cursor: pointer;
        background-color: #FFFFF0;
    }
</style>
<?php
                    $idd=$_GET['id'];
                    $queryy="SELECT * FROM dangnhap WHERE user='$idd'";
                    $resultt =mysqli_query($link,$queryy);
                        $i=0;
                        while($r=mysqli_fetch_assoc($resultt)){
                            $i++;
                            $showtaikhoan=$r['user'];
                            $showmatkhau=$r['password'];
                            $ten=$r['name'];
                        
                        }
                        // ?id= để lấy id sang trang update nếu đúng id thì sẽ sửa
                    ?>
    <div class="content">
    <h1>Sửa tài khoản</h1>

    <form action="" method="post">
    <!-- Tài khoản:<input type="text" placeholder="Username" name="user"> -->
    Tài khoản:<input type="text" placeholder="Tài khoản" name="user" required value="<?php $_GET['id']; echo"$showtaikhoan";?>" >

    Mật khẩu:<input type="text" placeholder="Password" name="password" required value="<?php echo $showmatkhau?>" >
    Tên:<input type="text" placeholder="Tài khoản" name="name" required value="<?php echo"$ten";?>" >
    <!-- Tên:<input type="text" placeholder="Name" name="name"> -->
    <button class="them" type="submit" name="update">Sửa</button>
    
    </form>
    </div>
<?php
    if(isset($_POST['update'])){
        $u=$_GET['id'];
        $user=$_POST['user'];
        $p=$_POST['password'];
        $n=$_POST['name'];
        $query= "UPDATE dangnhap SET user='$user', password='$p',name='$n' WHERE user='$u'";
        $result =mysqli_query($link,$query) or die("SỬA thất bại");
        header('location:../admin/accout_list.php');
    }
    include('bottom.php')
?>
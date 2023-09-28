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
    <div class="content">
    <h1>Thêm tài khoản</h1>

    <form action="" method="post">
    Tài khoản:<input type="text" placeholder="Username" name="user">
    Mật khẩu:<input type="text" placeholder="Password" name="password">
    Tên:<input type="text" placeholder="Name" name="name">
    <!-- <input type="text" placeholder="Quyền"> -->
    <button class="them" type="submit" name="insert">Thêm</button>
    
    </form>
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
        $result =mysqli_query($link,$query) or die("Thêm thât bại");
        header('location:accout_list.php');
    }}
    ?>
</div>
<?php
    include('bottom.php')
?>

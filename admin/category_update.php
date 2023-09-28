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
    <h1>Sửa danh mục</h1>

    <form action="" method="post">
    Danh mục:<input type="text" placeholder="Danh mục" required name="danhmuc" value="<?php echo"$_GET[id]" ?>" >
    <button class="them" type="submit" name="update">Sửa</button>
    
    </form>
    </div>
<?php
    if(isset($_POST['update'])){
        $u=$_GET['id'];
        $p=$_POST['danhmuc'];
        $query= "UPDATE danhmuc SET tendanhmuc='$p'WHERE tendanhmuc='$u'";
        $result =mysqli_query($link,$query) or die("SỬA thất bại");
        header('location:../admin/category_list.php');
    }
    // WHere => so sánh địa chỉ id đc lấy bên list
    include('bottom.php')
?>
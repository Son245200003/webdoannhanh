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
    Tên danh mục<input type="text" placeholder="Tên danh mục" name="name">
    <!-- <input type="text" placeholder="Quyền"> -->
    <button class="them" type="submit" name="insert">Thêm</button>
    
    </form>
</div>
<?php
    if(isset($_POST['insert'])){
        $dm=$_POST['name'];
        $sql="INSERT INTO danhmuc(tendanhmuc) VALUE('$dm') ";
        $result=mysqli_query($link,$sql);
        header("location:category_list.php");
    }
    include('bottom.php')
?>
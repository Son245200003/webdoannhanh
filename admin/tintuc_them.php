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
<script src="ckeditor/ckeditor.js"></script>
    <div class="content">
    <h1>Thêm tin</h1>
    <form action="" method="post">
    Tiêu đề: <input type="text" placeholder="Tiêu đề" name="tieude">
    Ảnh:<input type="text" placeholder="Ảnh" name="anh">
    Nội Dung Chính:<input type="text" placeholder="Nội Dung Chính" name="noidc">
    <!-- Nội Dung:<textarea id="noidung" type="text" placeholder="Nội Dung:" name="noid">    -->
    Nội Dung:<textarea name="noid" id="noidung" cols="30" rows="10"></textarea>
    <!-- <input type="text" placeholder="Quyền"> -->
    <button class="them" type="submit" name="insert">Thêm</button>
    <script>CKEDITOR.replace('noidung')</script>
    </form>
    <?php
    if(isset($_POST['insert'])){
        $td=$_POST['tieude'];
        $a=$_POST['anh'];
        $noidc=$_POST['noidc'];
        $noid=$_POST['noid'];
        // Lệnh thêm data INSERT INTO tên bảng(tên cột1,tên cột2) VALUE(giá trị vừa nhập vào cột 1,giá trị vừa nhập vào cột 2)
        $query= "INSERT INTO tintuc(tieude,anh,noidungchinh,noidung) VALUE('$td','$a','$noidc','$noid')";
        $result =mysqli_query($link,$query) or die("Thêm thât bại");
        header('location:tintuc_list.php');
    }
    ?>
</div>
<script>CKEDITOR.replace('noidung')</script>
<?php
    include('bottom.php')
?>
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
    #noidung{
        height: 200px;
    }
</style>
<script src="ckeditor/ckeditor.js"></script>

    <div class="content">
    <h1>Sửa tin</h1>
    <?php
                    $idd=$_GET['id'];
                    $queryy="SELECT * FROM tintuc WHERE id='$idd'";
                    $resultt =mysqli_query($link,$queryy);
                     
                        $i=0;
                        while($r=mysqli_fetch_assoc($resultt)){
                            $i++;
                            $d=$r['tieude'];
                            $s=$r['anh'];
                            $ndc=$r['noidungchinh'];
                            $nd=$r['noidung'];
                        
                        }
                        // ?id= để lấy id sang trang update nếu đúng id thì sẽ sửa
                    ?>
    <form action="" method="post">
    <p>Sửa tin</p> 
    Sửa tên tiêu đề :<input type="text" placeholder="Danh mục" name="tieude" required value="<?php echo"$d" ?> " >
    Sửa ảnh :<input type="text" placeholder="Danh mục" name="anh" required value="<?php echo"$s" ?> " >
    Sửa nội dung chính :<input type="text" placeholder="Danh mục" name="ndc" required value="<?php echo"$ndc" ?> " >
    Sửa nội dung :<input id="noidung" type="text" placeholder="Danh mục" name="nd" required value="<?php echo"$nd"?> ">

    <button class="them" type="submit" name="update">Sửa</button>
    
    </form>
    </div>
<script>CKEDITOR.replace('noidung')</script>

<?php
    if(isset($_POST['update'])&&isset($_GET['id'])){
        $u=$_GET['id'];
        $d=$_POST['tieude'];
        $sp=$_POST['anh'];
        $g=$_POST['ndc'];
        $l=$_POST['nd'];
        $query= "UPDATE tintuc SET tieude='$d', anh='$sp', noidungchinh='$g' , noidung='$l' WHERE id='$u'";
        $result =mysqli_query($link,$query) or die("SỬA thất bại");
        header('location:tintuc_list.php');
    }
    // WHere => so sánh địa chỉ id đc lấy bên list
    include('bottom.php')
?>
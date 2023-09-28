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
    <h1>Sửa sản phẩm</h1>
    <?php
                    $idd=$_GET['id'];
                    $queryy="SELECT * FROM sanpham WHERE tittle='$idd'";
                    $resultt =mysqli_query($link,$queryy);
                     
                        $i=0;
                        while($r=mysqli_fetch_assoc($resultt)){
                            $i++;
                            $d=$r['category_id'];
                            $s=$r['tittle'];
                            $gia=$r['price'];
                            $li=$r['thumbnail'];
                        
                        }
                        // ?id= để lấy id sang trang update nếu đúng id thì sẽ sửa
                    ?>
    <form action="" method="post">
    <p>Danh mục</p> 
    
    <select name="danhmuc" id="#select">
            <option value="<?php echo"$d"?>"><?php echo"$d"?></option>
            <?php
            $query="SELECT tendanhmuc FROM danhmuc";
            $result =mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0){
                while($r=mysqli_fetch_assoc($result)){
                    $ten_dm=$r['tendanhmuc'];
                ?>
            <option value="<?php echo"$ten_dm"?>"><?php echo"$ten_dm"?></option> 
            <?php
                }
            }
            ?>
            </select>
    Sửa tên sản phẩm :<input type="text" placeholder="Danh mục" name="ten" required value="<?php echo"$s" ?> " >
    Sửa giá:<input type="text" placeholder="Giá" name="gia" value="<?php echo $gia ?>" required>
    Đổi ảnh:<input type="text" placeholder="Link ảnh(có hoặc ko)" name="anh" required value="<?php echo $li ?>" >

    <button class="them" type="submit" name="update">Sửa</button>
    
    </form>
    </div>
<?php
    if(isset($_POST['update'])&&isset($_GET['id'])){
        $u=$_GET['id'];
        $d=$_POST['danhmuc'];
        $sp=$_POST['ten'];
        $g=$_POST['gia'];
        $l=$_POST['anh'];
        $query= "UPDATE sanpham SET category_id='$d', tittle='$sp', price='$g' , thumbnail='$l' WHERE tittle='$u'";
        $result =mysqli_query($link,$query) or die("SỬA thất bại");
        header('location:product_list.php');
    }
    // WHere => so sánh địa chỉ id đc lấy bên list
    include('bottom.php')
?>
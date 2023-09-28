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
    padding: 5px;

    }
    button{
        height: 30px;
        width: 100px;
        margin-top: 20px;
    padding: 5px;

    }
    button:hover{
        cursor: pointer;
        background-color: #FFFFF0;
    }
    select{
        width: 50%;
    margin-left: 10px;
    padding: 5px;
    margin-bottom: 20px;
}
    p{
        margin-bottom: 5px;
        font-size: 15px;
        color: #000;
    }
    
</style>
    <div class="content">
    <h1>Thêm sản phẩm</h1>
<form action="" method="post">
    <p>Danh mục</p> <select name="danhmuc" id="#select">
        <option value="Unselect">Chọn Danh Mục Chứa sản phẩm</option>
        <?php
        $query="SELECT tendanhmuc FROM danhmuc";
        $result =mysqli_query($link,$query);
        if(mysqli_num_rows($result) > 0){
            while($r=mysqli_fetch_assoc($result)){
                $ten_dm=$r['tendanhmuc'];
                // $id_dm=$r[''];
            ?>
        <option value="<?php echo"$ten_dm"?>"><?php echo"$ten_dm"?></option> 
        <?php
            }
        }
        ?>
    </select>
    <p>Tên sản phẩm</p> <input type="text " placeholder="Tên sản phẩm" name="tensanpham" require>
   <p>Giá </p> <input type="number" placeholder="Giá" name="gia" require>
   <p>Ảnh</p> <input required type="text" name="anh" placeholder="Link ảnh">
    <button class="them" type="submit" name="insert">Thêm</button>
</form>
    </form>
</div>
<?php
     if(isset($_POST['insert'])){
        $dm=$_POST['danhmuc'];
        $sp=$_POST['tensanpham'];
        $g=$_POST['gia'];
        $a=$_POST['anh'];
        $sql="INSERT INTO sanpham(category_id,tittle,price,thumbnail) VALUE('$dm','$sp','$g','$a') ";
        $result=mysqli_query($link,$sql)or die("Thêm thất bại");
        header("location:product_list.php");
    }
    include('bottom.php')
?>

<?php
    include('top_admin.php')
?>
<style>
    h1{
        font-weight: 500;
        margin: 30px;
        font-size: 30px;
    }
    table{
    width: 100%;
    text-align: center;
    margin-top: 20px;
    
}
table tr th,td{
    border: 1px solid #000;
}
table{
    border-collapse: collapse;
}
.anhproduct{
    width: 100px;
    height: 100px;
}
a{
    text-decoration: none;
    color: #000;
}
a:hover{
    text-decoration: underline;
    color:red;
}
</style>
    <div class="content">
    <h1>Danh sách tài khoản</h1>

    <table>
    <tr>
                    <th>STT</th>
                    <th>Danh mục</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    
                    <th>Tùy biến</th>
                </tr>
                <tr>
                    <?php
                    $query="SELECT * FROM sanpham";
                    $result =mysqli_query($link,$query);
                    if(mysqli_num_rows($result) > 0){
                        $i=0;
                        while($r=mysqli_fetch_assoc($result)){
                            $i++;
                            $dm=$r['category_id'];
                            $sp=$r['tittle'];
                            $g=$r['price'];
                            $l=$r['thumbnail'];
                        echo"<tr>";
                        echo"<td>$i</td>";
                        echo"<td>$dm</td>";
                        echo"<td> <img class='anhproduct' src='$l' alt=''></td>";
                        echo"<td>$sp</td>";
                        echo"<td>$g</td>";
                        ?>
                        <td><a onclick="return confirm('Bạn có muốn xóa ko')" href='product_delete.php?id=<?php echo$sp?>'>Xoá</a>
                        <?php echo "|<a href='./product_update.php?id=$sp'>Sửa</a></td></tr>";?>
                       </td>
                        <?php
                        // echo"<td> <a href='./product_update.php?id=$sp'>Sửa</a>|<a href='./product_delete.php?id=$sp'>Xóa</a></td>";
                        // echo"</tr>";
                        }
                    }
                        // ?id= để lấy id sang trang update nếu đúng id thì sẽ sửa
                    ?>
               
            </table>

    </form>
</div>
<?php
    
    include('bottom.php')
?>
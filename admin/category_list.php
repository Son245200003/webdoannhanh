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
    <h1>Danh sách danh mục</h1>

    <table>
                <tr>
                    <th>STT</th>
                    
                    <th>Danh mục sản phẩm</th>
                    <th>link</th>
                    <th>Tùy biến</th>
                    
                </tr>
                <tr>
                    <?php
                    $query="SELECT * FROM danhmuc";
                    $result =mysqli_query($link,$query);
                    if(mysqli_num_rows($result) > 0){
                        $i=0;
                        while($r=mysqli_fetch_assoc($result)){
                            $i++;
                            $id=$r['id'];
                            $dm=$r['tendanhmuc'];
                            $l=$r['linkdanhmuc'];
                        
            
                        echo"<tr>";
                        echo"<td>$i</td>";
                        echo"<td>$dm</td>";
                        echo"<td>$l</td>";
                        echo"<td> <a href='./category_update.php?id=$dm'>Sửa</a>|<a href='./category_delete.php?id=$dm'>Xóa</a></td>";
                        echo"</tr>";
                        }}
                        // ?id= để lấy id sang trang update nếu đúng id thì sẽ sửa
                    ?>
            </table>

    </form>
</div>
<?php
    
    include('bottom.php')
?>
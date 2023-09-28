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
                    <th>ID tài khoản</th>
                    <th>Tên</th>
                    <th>Số điện thoại</th>
                    <th>Tổng tiền</th>
                    <th>Địa chỉ</th>
                    <th>Ghi chú</th>
                    <th>Thời gian đặt hàng</th>
                    <th>Xem đơn hàng</th>
                </tr>
                <tr>
                    <?php
                    $query="SELECT * FROM order_admin ";
                    $result =mysqli_query($link,$query);
                    if(mysqli_num_rows($result) > 0){
                        $i=0;
                        while($r=mysqli_fetch_assoc($result)){
                            $i++;
                            $n=$r['name'];
                            $s=$r['sdt'];
                            $diachi=$r['diachi'];
                            $ghi=$r['ghichu'];
                            $user=$r['user'];
                            $tongtien=$r['tongtien'];
                            $date=$r['Date'];
                        echo"<tr>";
                        echo"<td>$i</td>";
                        echo"<td>$user</td>";
                        echo"<td>$n</td>";
                        echo"<td>0$s</td>";
                        echo"<td>$tongtien $</td>";
                        echo"<td>$diachi</td>";
                        echo"<td>$ghi</td>";
                        echo"<td>$date</td>";
                        echo"<td> <a href='./order_view.php?id=$user'>Xem</a>";
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
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
    table img{
        height: 150px;
        width: 150px;
    }
    
table tr th,td{
    border: 3px solid #b2b2b2;
}
table{
    border-collapse: collapse;
}

</style>
    <div class="content">
    <h1>Danh sách tài khoản</h1>

    <table>
                <tr>
                    
                    <th>Đơn hàng gồm</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                    $id=$_GET['id'];
                    $tong=0;
                    $query="SELECT * FROM order_admin WHERE user ='$id'";
                    $result =mysqli_query($link,$query);
                    if(mysqli_num_rows($result) > 0){
                        $i=0;
                        while($r=mysqli_fetch_assoc($result)){
                            $i++;
                            $id=$r['id'];
                            $dh=$r['donhang'];
                            $tongtien=$r['tongtien'];
                            $tong=$tong+$tongtien;
                            echo"<tr>";
                            echo"<th>$dh</th>";
                            echo"<th>$tongtien $</th>";
                            echo"</tr>";
                            // echo "<td><a  href='./accout_delete.php?id=$u'>Xóa</a> ";
                        }
                    }
                ?>
               
                <tr>
                    <th>TỔNG:</th>
                    <th><?php echo" $tong $"?></th>
                </tr>
                
            </table>


    </form>
</div>
<?php
    
    include('bottom.php')
?>
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
    <h1>Danh sách tài khoản</h1>

    <table>
                <tr>
                    <th >STT</th>
                    <th>ID tài khoản</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Tùy biến</th>
                </tr>
                
              
    <?php
        $query="SELECT * FROM dangnhap";
        $result =mysqli_query($link,$query);
        if(mysqli_num_rows($result) > 0){
            $i=0;
            while($r=mysqli_fetch_assoc($result)){
                $i++;
                $id=$r['id'];
                $u=$r['user'];
                $p=$r['password'];
                $n=$r['name'];

                echo"<tr>";
                echo"<td margin-left:30px>$i</td>";
                echo"<td>$id</td>";
                echo"<td>$u</td>";
                echo"<td>$p</td>";
                echo"<td>$n</td>";
                echo"</td>";
                ?>
                 <td><a onclick="return confirm('Bạn có muốn xóa ko')" href='accout_delete.php?id=<?php echo$u?>'>Xoá</a>
                 <?php echo "|<a href='./accout_update.php?id=$u'>Sửa</a></td></tr>";?>
                </td>
                 <?php

                // echo "<td><a  href='./accout_delete.php?id=$u'>Xóa</a> ";
                // echo "|<a href='./accout_update.php?id=$u'>Sửa</a></td></tr>";
            }
        }
    ?>
            </table>

    </form>
    
</div>
<?php
    
    include('bottom.php')
?>
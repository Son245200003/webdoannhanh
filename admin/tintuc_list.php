<?php


    include('top_admin.php')
?>
<style>
    h1{
        font-weight: 500;
        margin: 30px;
        font-size: 30px;
    }
    table img{
        height: 100px;
        width:100px;
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
                    <th>Tiêu Đề</th>
                    <th>Ảnh</th>
                    <th>Nội Dung Chính</th>
                    <th>Nội Dung</th>
                    <th>Tùy biến</th>
                </tr>
                
               <img src="" alt="">
    <?php
        $query="SELECT * FROM tintuc";
        $result =mysqli_query($link,$query);
        if(mysqli_num_rows($result) > 0){
            $i=0;
            while($r=mysqli_fetch_assoc($result)){
                $i++;
                $id=$r['id'];
                $u=$r['tieude'];
                $p=$r['anh'];
                $ndc=$r['noidungchinh'];
                $nd=$r['noidung'];

                echo"<tr>";
                echo"<td margin-left:30px>$i</td>";
                echo"<td>$u</td>";
                echo"<td><img src='$p' alt=''></td>";
                echo"<td>$ndc</td>";
                echo"<td>$nd</td>";
                echo"</td>";
                echo "<td><a  href='./tintuc_xoa.php?id=$id'>Xóa</a> ";
                echo "|<a href='./tintuc_update.php?id=$id'>Sửa</a></td></tr>";              
            }
        }
    ?>
            </table>

    </form>
    
</div>
<?php
    
    include('bottom.php')
?>
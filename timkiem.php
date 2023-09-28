<style>
    form input{
        width: 400px;
        border: 1px solid #000;
        border-radius: 10px;
        padding-left: 10px;
        height: 30px;
    }
    form button{
        width: 100px;
        height: 30px;

    }
    form button:hover{
        background-color:antiquewhite ;
        cursor: pointer;
    }
</style>
<?php
    include('top_user.php');
    ?>
    <form method = "post" >
        <input type = "search" name="search" placeholder="Tìm kiếm" required>
        <button type = "submit" name = "tim" >Tìm kiếm</button>
    </form>
    <p class="content_title">Tìm kiếm</p>
            <div class="content_menu">
            <?php
                    if(isset($_POST['tim'])){
                        $s=$_POST['search'];
                        $query="SELECT * FROM sanpham WHERE tittle Like '%$s%'";
                        $result =mysqli_query($link,$query);
                        if(mysqli_num_rows($result) > 0){
                            $i=0;
                            while($r=mysqli_fetch_assoc($result)){
                                $i++;
                                $dm=$r['category_id'];
                                $sp=$r['tittle'];
                                $gia=$r['price'];
                                $l=$r['thumbnail'];
                                ?>
                            <div class="menu_list">
                                <a href="#">
                                <?php echo"<img src='$l'alt='bánh mì'>";?>
                                <div class="sanpham">
                                <?php echo"<h3>$gia $</h3>";?>
                                <?php echo"<p>$sp</p>";?>
                                <button><i class="fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                                 </div>
                                </a>
                            </div>
                                <?php
                            }
                            
                        }
                    }
                    ?>
                    
                    </div>
<?php
    
    include('bottom_user.php');
    ?>
<?php
    
    include('top_user.php')
    ?>
    <p class="content_title">Đồ uống</p>
            <div class="content_menu">
            <?php
                            $query="SELECT * FROM sanpham WHERE category_id='ĐỒ UỐNG'Limit 0,6";
                            $result =mysqli_query($link,$query);
                            if(mysqli_num_rows($result) > 0){
                                $i=0;
                                while($r=mysqli_fetch_assoc($result)){
                                    $i++;
                                    $id=$r['id'];
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
                                    <?php echo" <a href='./themvaogiohang.php?id=$sp'>" ?> <button name="add"><i class="fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                                     </div>
                                    </a>
                                </div>
                                
                                    <?php
                                }
                                
                            }
                        ?>
                    </div>

<?php
    include('bottom_user.php')
?>
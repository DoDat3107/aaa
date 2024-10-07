<?php
$sql="SELECT * FROM tbl_sanpham WHERE dac_biet=1 AND id_danhmuc=38 ORDER BY id_sanpham DESC LIMIT 5 ";
$query=mysqli_query($conn,$sql);
?>

        <div class="container">
        <div class="slider">
                <div class="slider_img">
                    <div class="image">
                        <img src="img/co-nen-mua-may-tinh-de-ban-cu-khong-kinh-nghiem-c-15.jpg" alt="">
                    </div>
                    <div class="image">
                        <img src="img/istockphoto-1304790561-612x612.jpg" alt="">
                    </div>
                    <div class="image">
                        <img src="img/mobiuz-tinified.jpg" alt="">
                    </div>
                    <div class="image">
                        <img src="img/pinaka_murang_gaming_computer__1655697030_4975b395_progressive.jpg" alt="">
                    </div>
                    <div class="image">
                        <img src="img/razer-ring-light-hero-mobile.jpg" alt="">
                    </div>
                </div>
            </div>

             </div> 

        <div class="khuon_sanpham">
            <div class="menu_sp">
                <div class="title">
                    <div>PC BÁN CHẠY</div>
                    <div><a class= "xemtatca"href="index.php?page_layout=danhsachsp&id_loaisp=39">Xem tất cả</a></div>
                </div>
                <div class="item_sp">
                    <?php 
                         while($row=mysqli_fetch_array($query)){
                        ?>
                    <div class="item_sp_content">
                       
                            <div><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row['id_sanpham']; ?>"><img src="admin/uploads/<?php echo $row['img_sanpham']; ?>" alt=""></a></div>
                            <div class="text_thongtin">
                                <div class="info"><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row['id_sanpham']; ?>"><?php echo $row['ten_sanpham']; ?></a></div>
                                <div class="info"><ins><?php echo number_format($row['gia_sanpham']) ?> <SUp>đ</SUp></ins></div>
                                <div class="info"><i class="fa-solid fa-gift"></i><?php echo $row['km_sanpham']; ?></div>
                                <div class="tinhtrang">CÓ HÀNG</div>
                            </div>
                       
                    </div>
                    <?php
                        }
                        ?>
            
                </div>

                

            </div>
            

        </div>
        <!--------------------> 
<?php
$sql2="SELECT * FROM tbl_sanpham WHERE dac_biet=1 AND id_danhmuc=37 ORDER BY id_sanpham DESC LIMIT 5 ";
$query2=mysqli_query($conn,$sql2);
?>
        <div class="khuon_sanpham2">
            <div class="menu_sp">
                <div class="title">
                    <div>LAPTOP BÁN CHẠY</div>
                    <div><a class= "xemtatca"href="index.php?page_layout=danhsachsp&id_loaisp=35">Xem tất cả</a></div>
                </div>
                <div class="item_sp">
                    <?php
                    while($row2=mysqli_fetch_array($query2)){
                    ?>
                    <div class="item_sp_content">
                           
                            <div><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row2['id_sanpham']; ?>"><img src="admin/uploads/<?php echo $row2['img_sanpham']; ?>" alt=""></a></div>
                            <div class="text_thongtin">
                                <div class="info"><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row2['id_sanpham']; ?>"><?php echo $row2['ten_sanpham']; ?></a></div>
                                <div class="info"><ins><?php echo number_format($row2['gia_sanpham']) ?> <SUp>đ</SUp></ins></div>
                                <div class="info"><i class="fa-solid fa-gift"></i><?php echo $row2['km_sanpham']; ?></div>
                                <div class="tinhtrang">CÓ HÀNG</div>
                            </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                

            </div>

        </div>
    
        <!----------->
    <?php
    $sql3="SELECT * FROM tbl_sanpham WHERE dac_biet=1 AND id_danhmuc=39 ORDER BY id_sanpham DESC LIMIT 5 ";
        $query3=mysqli_query($conn,$sql3);
    ?>
        <div class="khuon_sanpham3">
            <div class="menu_sp">
                <div class="title">
                    <div>MÀN HÌNH KHUYẾN MÃI HOT</div>
                    <div><a class= "xemtatca"href="index.php?page_layout=danhsachsp&id_loaisp=45">Xem tất cả</a></div>
                </div>
                <div class="item_sp">
                    <?php
                    while($row3=mysqli_fetch_array($query3)){
                    ?>
                    <div class="item_sp_content">
                           
                            <div><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row3['id_sanpham']; ?>"><img src="admin/uploads/<?php echo $row3['img_sanpham']; ?>" alt=""></a></div>
                            <div class="text_thongtin">
                                <div class="info"><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row3['id_sanpham']; ?>"><?php echo $row3['ten_sanpham']; ?></a></div>
                                <div class="info">
                                    <ins><?php echo number_format($row3['gia_sanpham']) ?> <SUp>đ</SUp><div class="gach"><?php echo $row3['giakm_sanpham'];?></div></ins>
                                </div>
                                <div class="info"><i class="fa-solid fa-gift"></i><?php echo $row3['km_sanpham']; ?></div>
                                <div class="tinhtrang">CÓ HÀNG</div>
                            </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                

            </div>

        </div>
        <!---------------------------------->
        <?php
    $sql4="SELECT * FROM tbl_sanpham WHERE dac_biet=1 AND id_danhmuc=40 ORDER BY id_sanpham DESC LIMIT 5 ";
        $query4=mysqli_query($conn,$sql4);
    ?>
        <div class="khuon_sanpham4">
            <div class="menu_sp">
                <div class="title">
                    <div>CHUỘT KHUYẾN MÃI HOT</div>
                    <div><a class= "xemtatca"href="index.php?page_layout=danhsachsp&id_loaisp=46">Xem tất cả</a></div>
                </div>
                <div class="item_sp">
                    <?php
                    while($row4=mysqli_fetch_array($query4)){
                    ?>
                    <div class="item_sp_content">
                           
                            <div><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row4['id_sanpham']; ?>"><img src="admin/uploads/<?php echo $row4['img_sanpham']; ?>" alt=""></a></div>
                            <div class="text_thongtin">
                                <div class="info"><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row4['id_sanpham']; ?>"><?php echo $row4['ten_sanpham']; ?></a></div>
                                <div class="info">
                                    <ins><?php echo number_format($row4['gia_sanpham']) ?> <SUp>đ</SUp><div class="gach"><?php echo $row4['giakm_sanpham'];?></div></ins>
                                </div>
                                <div class="info"><i class="fa-solid fa-gift"></i><?php echo $row4['km_sanpham']; ?></div>
                                <div class="tinhtrang">CÓ HÀNG</div>
                            </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                

            </div>

        </div>
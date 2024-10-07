
<?php
//nhận từ khóa tìm kiếm
$stext=$_POST['stext'];
//Loại bỏ các khoảng trắng đầu và cuối từ  khóa
$stextNew=trim($stext);
$arr_stextNew= explode(' ',$stextNew);
$stextNew= implode('%',$arr_stextNew);
$stextNew='%'.$stextNew.'%';

$sql="SELECT * FROM tbl_sanpham WHERE ten_sanpham LIKE ('$stextNew') ORDER BY id_sanpham DESC";
$query = mysqli_query($conn,$sql);

?>

<style>
    .item_sp{
        flex-wrap: wrap;
    }
</style> 
        <div class="khuon_sanpham">
            <div class="menu_sp">
                <div class="search">
                    <div class="ketquatimkiem">
                        <div style="font-size: 30px;font-weight: 50px;">TÌM KIẾM</div>
                        <div style="margin-left: 20px;padding-top: 5px;">kết quả tìm kiếm cho "<strong><?php echo $stext; ?></strong>"</div>
                    </div>
                </div>
                <div class="item_sp">
                    <?php
                    while($row=mysqli_fetch_array($query)){
                    ?>
                    <div class="item_sp_content">
                            <div><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row['id_sanpham']; ?>"><img src="admin/uploads/<?php echo $row['img_sanpham']; ?>" alt=""></a></div>
                            <div class="text_thongtin">
                                <div class="info"><a href="index.php?page_layout=chitietsp&id_sanpham=<?php echo $row['id_sanpham']; ?>"><?php echo $row['ten_sanpham'];?></a></div>
                                <div class="info">
                                    <ins><?php echo number_format($row['gia_sanpham']) ?><SUp>đ</SUp><div class="gach"><?php echo $row['giakm_sanpham']?></div></ins>
                                </div>
                                <div class="info"><i class="fa-solid fa-gift"></i><?php echo $row['km_sanpham'];?></div>
                                <div class="tinhtrang">CÓ HÀNG</div>
                            </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                

            </div>
            

        </div>

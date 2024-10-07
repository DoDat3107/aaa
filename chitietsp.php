<?php
$id_sanpham =$_GET['id_sanpham'];
$sql="SELECT * FROM tbl_sanpham WHERE id_sanpham=$id_sanpham";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>
<link rel="stylesheet" href="css/thongtinsanpham.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="font/fontawesome-free-6.4.0/css/all.min.css">

        <div class="khuonthongtinchitiet">
            <div class="khuonduongdan">
                <div class="duongdan" style="padding: 30px;padding-left: 20px;width: 200px;height: 20px;font-weight: 50px;"><a style="font-size: 15px;" href="index.php">Trang chủ  </a> / </div>
            </div>
            <div class="thongtinchitiet">

                <div class="thongtinsp">
                    <div class="tensp" style="font-size: 30px;padding-left: 20px;"><?php echo $row['ten_sanpham']; ?></div>
                    
                    <div class="chitietsp">

                        <div class="hinhanhsp"><img src="admin/uploads/<?php echo $row['img_sanpham']; ?>" alt="">
                        </div>

                        <div class="thongso">
                            <ul>
                                <li style="font-size: 20px;"><?php echo $row['ten_sanpham']; ?></li>
                                <li style="font-size: 15px;">Giá Khuyến Mại<li style="color: red;font-size:25px;"><?php echo number_format($row['gia_sanpham']) ?><sup>đ</sup></li>
                                <li style="font-size: 15px;">Tình trạng : Có hàng</li>
                                <li style="font-size: 15px;">Bảo hành : 12 Tháng</li>
                                <li class="khuyenmai"style="font-size: 17px;color: red;">KHUYẾN MÃI : <?php echo $row['km_sanpham']; ?></li>
                                <li><a href="themhang.php?id_sanpham=<?php echo $row['id_sanpham']; ?>"><button>ĐẶT HÀNG</button></li></a>
                            </ul>
                        </div>

                        <div class="cauhinh">
                            <div class="cauhinhchung">CẤU HÌNH CHUNG</div>
                            <div class="chitietcauhinh">
                                <div>
                                    <?php echo $row['desc_sanpham']; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    

                </div>
              

            </div>
        </div>
       
       
             

  
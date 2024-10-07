
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="font/fontawesome-free-6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/giohang.css">
        <style>
            .capnhapgiohang{
                background-color: cyan;
                border: 1px solid black;
                border-radius: 5px;
                margin-left: 10px;
            }
            .xoatatca{
                background-color: gray;
                border: 1px solid black;
                border-radius: 5px;
                margin-left: 10px;
            }
        </style>


    
           
            
                <div class="khuonduongdan">
                    <div class="duongdan" style="padding: 30px;padding-left: 20px;width: 200px;height: 20px;font-weight: 50px;"><a style="font-size: 15px;" href="index.php">Trang chủ  </a> / <a style="font-size: 15px;"href="">  Giỏ hàng </a></div>
                </div>
                
                <div class="cart">
                    <div style="padding-bottom: 30px;font-size: 30px;">GIỎ HÀNG</div>
                    <?php
                    
                    if(isset($_SESSION['giohang'])){
                        $arrId=array();
                        foreach ($_SESSION['giohang'] as $id_sanpham => $so_luong) {
                                $arrId[]=$id_sanpham;
                        }
                        $strId=implode(',', $arrId);
                        $sql="SELECT * FROM tbl_sanpham WHERE id_sanpham IN($strId) ORDER BY id_sanpham DESC";
                        $query=mysqli_query($conn,$sql);
                        
                        if(isset($_POST['sl'])){
                            foreach ($_POST['sl'] as $id_sanpham => $sl) {
                                if($sl==0){
                                    unset($_SESSION['giohang'][$id_sanpham]);
                                }
                                elseif ($sl>0) {
                                    $_SESSION['giohang'][$id_sanpham]=$sl;
                                }
                            }
                        }
                      

                
                    ?>
                    <form  id="giohang" method="post">
                        <table id="cart">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá tiền</th>
                                    <th>Số lượng</th>
                                    <th>tổng tiền</th>
                                    <th style="border-right:1px solid #ddd;">Xóa</th>
                                </tr>

                            </thead>
                            <?php
                            $totalPriceAll=0;
                            while($row=mysqli_fetch_array($query)){
                                $totalPrice=$row['gia_sanpham']*$_SESSION['giohang'][$row['id_sanpham']];
                            ?>
                            <tbody>
                                <tr>
                                    <td><img src="admin/uploads/<?php echo $row['img_sanpham']; ?>" alt=""></td>
                                    <td><?php echo $row['ten_sanpham']; ?></td>
                                    <td><?php echo number_format($row['gia_sanpham']) ?><sup>đ</sup></td>
                                    <td><input name="sl[<?php echo $row['id_sanpham']; ?>]" style="width: 30px;outline: none;" type="number" min="1" value="<?php echo $_SESSION['giohang'][$row['id_sanpham']]; ?>"></td>
                                    <td><?php echo number_format($totalPrice) ?><sup>đ</sup></td>
                                    <td style="border-right:1px solid #ddd;"><a href="xoahang.php?id_sanpham=<?php echo $row['id_sanpham']; ?>"><i class="fa-solid fa-trash"></i></a></td>

                                </tr>
                                


                            </tbody>
                            <?php
                                $totalPriceAll+=$totalPrice;
                            }
                            ?>

                            <tfoot>
                                <tr>
                                    <td style="border-top: 0;"><div style="font-size: 25px;font-weight: bold;padding-top: 20px;">Tổng cộng</div></td>
                                    <td style="border-top: 0;border-right: 1px solid #ddd;border-right: 0;"><div><?php echo number_format($totalPriceAll) ?><sup>đ</sup></div></td>
                                    <td><a onclick="document.getElementById('giohang').submit();" class="capnhapgiohang" href="#">cập nhập giỏ hàng</a></td>
                                    <td><a class="xoatatca" href="xoahang.php?id_sanpham=0">xóa tất cả</a></td>
                                    <td> <div class="thanhtoan"><button class="nutthanhtoan"><a href="index.php?page_layout=muahang">THANH TOÁN</a></button></div></td>
                                </tr>
                            </tfoot>
                            

                            
                        </table>
                    
                    </form>
                    <?php
                    } 
                     else{
                        echo '<script> alert ("không có sản phẩm trong giỏ hàng !");</script>';
                    }  
                                                      
                    ?>
                    
                   

                </div>

        
            
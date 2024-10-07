<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-6.8.0/src/Exception.php';
require 'PHPMailer-6.8.0/src/PHPMailer.php';
require 'PHPMailer-6.8.0/src/SMTP.php';
function convert_name($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
    $str = preg_replace("/( )/", '-', $str);
    return $str;
}
$mail = new PHPMailer(true);
if(isset($_SESSION['giohang'])){
    $arrId=array();
    foreach ($_SESSION['giohang'] as $id_sanpham=>$sql){
        $arrId[]=$id_sanpham;
    }
    $strId=implode(',',$arrId);
    $sql="SELECT * FROM tbl_sanpham WHERE id_sanpham IN($strId) ORDER BY id_sanpham DESC";
    $query=mysqli_query($conn,$sql);
}
?>








        <link rel="stylesheet" href="font/fontawesome-free-6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/giohang.css">
        <link rel="stylesheet" href="css/thanhtoan.css">
        <meta charset="utf-8">

  
        <!-----------------------------------Slide---------------------------------->

        <div class="khuonthanhtoan">
            <div class="khuonduongdan">
                <div class="duongdan" style="padding: 30px;padding-left: 20px;width: 200px;height: 20px;font-weight: 50px;"><a style="font-size: 15px;" href="index.php">Trang chủ </a>/<a style="font-size: 15px;"href="index.php?page_layout=giohang"> Giỏ hàng </a> / thanh toán</div>
            </div>
            
            <div class="khuonthanhtoan2">
                
                <?php
                if(isset($_POST['submit'])){
                    $ten=$_POST['ten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $diachi=$_POST['diachi'];

                    if(isset($ten) && isset($email) && isset($sdt) && isset($diachi)){
                        if(isset($_SESSION['giohang'])){
                            $arrId=array();
                            foreach ($_SESSION['giohang'] as $id_sanpham=>$sql){
                                $arrId[]=$id_sanpham;
                            }
                            $strId=implode(',',$arrId);
                            $sql="SELECT * FROM tbl_sanpham WHERE id_sanpham IN($strId) ORDER BY id_sanpham DESC";
                            $query=mysqli_query($conn,$sql);
                        }
                        $strBody='';
                        //thong tin khach hang
                        $strBody ='<p>
                            <b>Khách hàng:</b> '.$ten.'<br />
                            <b>Email:</b> '.$email.'<br />
                            <b>Điện thoại:</b> '.$sdt.'<br />
                            <b>Địa chỉ:</b> '.$diachi.'
                        </p>';
                        //danh sach san pham da mua
                        $strBody .='<table border="1px" cellpadding="10px" cellspacing="1px" width="100%">
                            <tr>
                                <td align="center" bgcolor="#3F3F3F" colspan="4"><font color="white"><b>XÁC NHẬN HÓA ĐƠN THANH TOÁN</b></td>
                            </tr>
                            <tr id="invoice-bar">
                                <td ><b>Tên sản phâm</b></td>
                                <td><b>Giá</b></td>
                                <td><b>số lượng</b></td>
                                <td><b>Thành tiền</b></td>
                            </tr>'; 
                            
                            $totalPriceAll=0;
                            while($row=mysqli_fetch_array($query)){
                            $totalPrice=$row['gia_sanpham']*$_SESSION['giohang'][$row['id_sanpham']];

                            $strBody .='<tr>
                                <td class="prd-name">'.$row['ten_sanpham'].'</td>
                                <td class="prd-price"><font color="#C40000">'.number_format($row['gia_sanpham']).'VNĐ</font></td>
                                <td class="prd-number">'.$_SESSION['giohang'][$row['id_sanpham']].'</td>
                                <td class="prd-total"><font color="#C40000">'.number_format($totalPrice).' VNĐ</font></td>
                            </tr>';
                            $totalPriceAll += $totalPrice;
                            }
                            $strBody.='<tr>
                                <td class="prd-name">Tổng giá trị hóa đơn là :</td>
                                <td colspan="2"></td>
                                <td class="prd-total"><b><font color="#C40000">'.number_format($totalPriceAll).' VNĐ</font></b></td>
                            </tr>
                        </table>';
                        
                        $strBody .='<p align="justify">
                            CHÚC MỪNG QUÝ KHÁCH <b> '.$ten.' </b>ĐÃ ĐẶT HÀNG THÀNH CÔNG !<br />
                            <b>Webpc sẽ gọi điện cho Quý khách trong vòng 30 phút (theo khung giờ: 8h30 - 21h00)</b><br/>
                            Để được hỗ trợ thêm thông tin, kiểm tra trạng thái đơn hàng :</br>quý khách vui lòng gọi điện tới Tổng đài bán hàng
                            Online theo số <b>1900 0323</b> hoặc Hotline <b>0981 335 989 - 0904 316 386</b><br/> 
                            <b><br/> Cảm ơn quý khách đã sử dụng sản phẩm của công ty chúng tôi!</b>
                        </p>';

                        try {
                            //Server settings
                            $mail->SMTPDebug = 2;
                            $mail->isSMTP(); // Sử dụng SMTP để gửi mail
                            $mail->Host = 'smtp.gmail.com'; // Server SMTP của gmail
                            $mail->SMTPAuth = true; // Bật xác thực SMTP
                            $mail->Username = 'cuongphamdinh19@gmail.com'; // Tài khoản email
                            $mail->Password = 'umkmpuwbkirubfqj'; // Mật khẩu ứng dụng ở bước 1 hoặc mật khẩu email
                            $mail->SMTPSecure = 'ssl'; // Mã hóa SSL
                            $mail->Port = 465; // Cổng kết nối SMTP là 465
                            
                            //Recipients
                            //$mail->setFrom('cuongphamdinh19@gmail.com', 'Phạm Đình Cường'); // Địa chỉ email và tên người gửi
                            $mail->addAddress($email,convert_name($ten)); // Địa chỉ mail và tên người nhận
                            
                            //Content
                            $mail->isHTML(true); // Set email format to HTML
                            $mail->Subject = 'Webpc'; // Tiêu đề
                            $mail->Body = $strBody; // Nội dung
                            
                            $mail->send();
                            echo 'Message has been sent';
                            header('location:index.php?page_layout=hoanthanh');
                            } catch (Exception $e) {
                            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;}
                       
                    }

                }
                ?>
                <div class="thanhtoan">
                    <form method="post" >
                        <div class="thongtinthanhtoan">
                    
                            <div style="font-size: 25px;padding-bottom: 20px;">Thông tin giao hàng</div>
                            <div><input required type="text" name="ten"  placeholder="Họ và tên" style="width: 496px;height: 30px;border: 1px solid rgba(0, 0, 0, 0.257);padding-left: 10px;"></div>
                            <div class="emailvasdt">
                                <input required type="email" name="email"  placeholder="Email"  style="width: 400px;height: 30px;border: 1px solid rgba(0, 0, 0, 0.257);padding-left: 10px;">
                                <input required type="text" name="sdt"  placeholder="Số điện thoại"  style="width:110px;height: 30px;border: 1px solid rgba(0, 0, 0, 0.257);padding-left: 10px;">
                            </div>
                            <div><input required type="text" name="diachi"  placeholder="Địa chỉ"  style="width:496px;height: 30px;border: 1px solid rgba(0, 0, 0, 0.257);padding-left: 10px;"></div>
    
                        </div>
                        <div class="hainut">
                            <div style="padding-left: 10px;padding-top: 10px;"><a style="font-size: 15px;" href="giohang.html">Giỏ hàng</a></div>
                            <div class="hoantat" style="padding-right: 10px;"><button name="submit" style="border-radius: 5px;border:1px solid rgba(0, 0, 0, 0.26);">Hoàn tất đơn hàng</button></div>
                        </div>
                    </form>
                    
                </div>
                <div class="showgiohang">
                    <div class="khuoncart">
                
                        <div class="cart">
                            <div style="padding-bottom: 30px;font-size: 30px;">GIỎ HÀNG</div>
                            <form id="giohang" method="POST">
                        <table border="1" >
                            <thead>
                                <tr>
                                   
                                    <th>Tên sản phẩm</th>
                                    <th>Giá tiền</th>
                                    <th style="margin-left: 10px;">số lượng</th>
                                    <th>thành tiền</th>
                                    
                                </tr>

                            </thead>
                            <?php
                            $totalPriceAll=0;
                            while($row=mysqli_fetch_array($query)){
                                $totalPrice=$row['gia_sanpham']*$_SESSION['giohang'][$row['id_sanpham']];
                            ?>
                            <tbody>
                                <tr>
                                    
                                    <td><?php echo $row['ten_sanpham']; ?></td>
                                    <td><?php echo number_format($row['gia_sanpham']) ?><sup>đ</sup></td>
                                    <td style="margin-left: 10px;"><?php echo $_SESSION['giohang'][$row['id_sanpham']]; ?></td>
                                    <td><?php echo number_format($totalPrice) ?><sup>đ</sup></td>
                                    

                                </tr>
                                


                            </tbody>
                            <?php
                                $totalPriceAll+=$totalPrice;
                            }
                            ?>

                            <tfoot>
                                <tr>
                                    <td style="border-top: 0;"><div style="font-size: 25px;font-weight: bold;padding-top: 20px;">Tổng cộng</div></td>
                                    <td style="border-top: 0;border-right: 1px solid #ddd;border-right: 0;"><div><strong><?php echo number_format($totalPriceAll) ?><sup>đ</sup></strong></div></td>
                                   
                            
                                  
                                </tr>
                            </tfoot>
                            

                            
                        </table>
                    
                    </form>
                            
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
             
    </body>
   
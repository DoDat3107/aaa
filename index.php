<?php
ob_start();
session_start();
include_once 'ketnoi.php';
?>




<html>
    <head>
        <title>bán máy tính</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="font/fontawesome-free-6.4.0/css/all.min.css">
    </head>
    <body style="background-color: rgba(128, 128, 128, 0.06);">
            <div class="header1">
                <div class="header1_menu">
                    <div class="logo">
                        <a href="index.php"><img src="img/mo-dia-chat.png" alt=""></a>
                    </div>
                   
                    <?php
                    include_once 'timkiem.php';
                    ?>
                    <?php
                     include_once 'giohangcuaban.php';
                    ?>
                    
                </div>
            </div>
            

           
                          
            <div class="header__main" style=" background-color: #333;">
               
               
                <?php   
                 include_once 'danhmuc.php';                   
                ?>
                
               
                  
               
                
               
            </div>
          
           
            
               
        
        
        <!-----------------------------------Slide---------------------------------->
      

        
        <?php
            //master page
            if(isset($_GET['page_layout'])){
                switch ($_GET['page_layout']) {
                    case 'danhsachtimkiem':
                        include_once 'danhsachtimkiem.php';
                        break;
                    case 'danhsachsp':
                        include_once 'danhsachsp.php';
                        break;
                    case 'chitietsp':
                        include_once 'chitietsp.php';
                        break;
                    case 'giohang':
                        include_once 'giohang.php';
                        break;
                    case 'muahang':
                        include_once 'muahang.php';
                        break;
                    case 'hoanthanh':
                        include_once 'hoanthanh.php';
                        break;   
            } 
            }
            else{
                include_once 'sanpham.php';
            }
            
        ?>
               
        
         
            

        </div>
        
             
    </body>
    <footer>
            <div class="khungfooter">
                <div class="noidungfooter">
                    <div class="ndfooter">
                        <div class="ndfooter_tieude">CHĂM SÓC KHÁCH HÀNG</div>
                        <ul>
                            <li>Tổng Đài Mua Hàng : </li>
                            <li><i style="margin-right: 5px;" class="fa-solid fa-phone m" ></i>0333837821</li>
                            <li>Tổng Đài Sửa Chữa / Bảo Hành :</li>
                            <li><i style="margin-right: 5px;" class="fa-solid fa-phone"></i>0333837821</li>
                        </ul>
                    </div>
                    <div class="ndfooter">
                        <div class="ndfooter_tieude">CHÍNH SÁCH CÔNG TY</div>
                        <ul>
                            <li><i style="margin-right: 5px;" class="fa-solid fa-key"></i><a href="">Chính sách bảo hành</a></li>
                            <li><i style="margin-right: 5px;" class="fa-solid fa-key"></i><a href="">Chính sách thanh toán</a></li>
                        </ul>
                    </div>
                    <div class="ndfooter">
                        <div class="ndfooter_tieude">FANPAGE CỦA CHÚNG TÔI</div>
                        <ul>
                            <li><a href="https://humg.edu.vn/Pages/home.aspx"><img src="img/mo-dia-chat.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="ndfooter">
                        <div class="ndfooter_tieude">TRANG WEB NÀY ĐƯỢC LÀM BỞI</div>
                        <ul>
                            <li>Họ và tên : Phạm Đình Cường</li>
                            <li>Msv : 1921050118</li>
                            <li>Khóa : 64</li>
                            <li>Chuyên ngành : Khoa học máy tính lớp A</li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
</html> 

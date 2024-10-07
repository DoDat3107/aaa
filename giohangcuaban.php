
<link rel="stylesheet" href="css/main.css">

<div class="giohang">
                            
    <a href="index.php?page_layout=giohang"><img src="img/icon_giohang.png" alt=""></a>

    <span class="notice"style="color: white;"><?php if(isset($_SESSION['giohang'])){echo count($_SESSION['giohang']);} else {echo 0;}?></span>
                     
                    
</div>
<?php
session_start();

if(isset($_GET['id_sanpham'])){
    $id_sanpham=$_GET['id_sanpham'];
    if($id_sanpham==0){
        unset($_SESSION['giohang']);
    }
    else{
        unset($_SESSION['giohang'][$id_sanpham]);
    }
   

}

header('location:index.php?page_layout=giohang');

?>
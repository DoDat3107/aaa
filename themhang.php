<?php
session_start();
$id_sanpham=$_GET['id_sanpham'];

if(isset($_SESSION['giohang'][$id_sanpham])){
    $_SESSION['giohang'] [$id_sanpham]=$_SESSION['giohang'] [$id_sanpham]+1;

}
else{
    $_SESSION['giohang'] [$id_sanpham]=1;
}
header('location:index.php?page_layout=giohang');
?>  